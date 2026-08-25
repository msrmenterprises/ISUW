# ISUW Admin DB Transition Plan (Year + Revision Model)

## 1) Current-State Findings (From Codebase)

### 1.1 Core issue
- Some modules already use DB, but year logic is hardcoded in table names and duplicated app folders.
- Examples in controllers:
  - speakers use table: speakers2026
  - exhibitors use table: exhibitors2022
  - utility category use table: utilitycategory2022
- Route trees are duplicated under project root and year folders (2024, 2025, 2026).

### 1.2 Why this creates yearly manual copy work
- New year currently implies cloning folders/routes/views/controllers and wiring year-specific tables.
- Admin updates are not consistently tagged by revision year.

### 1.3 Transition target
- Single code path + single table per content type.
- Event year and revision year become data columns, not code branches.

---

## 2) Canonical Data Rules (Must Be Global)

### 2.1 Mandatory columns for all admin-managed entities
- event_year INT NOT NULL
- revision_year INT NOT NULL
- is_active TINYINT(1) NOT NULL DEFAULT 1
- publish_status ENUM('draft','published','archived') NOT NULL DEFAULT 'draft'
- sort_order INT NOT NULL DEFAULT 0
- created_by BIGINT NULL
- updated_by BIGINT NULL
- created_at TIMESTAMP NULL
- updated_at TIMESTAMP NULL

### 2.2 Global behavior
- Every create/update from admin requires revision_year.
- Frontend renders only published + active rows for selected event_year.
- Disables are soft state changes (is_active=0 or publish_status=archived), not hard delete.

---

## 3) Small-First Execution Sequence

## Sprint 1 (Low risk): banners + utilityimages
1. Add year/revision/publish columns.
2. Add admin year filter.
3. Require revision_year in upload and status update actions.
4. Add revision logging table and write logs for create/disable/enable/delete.

## Sprint 2: partnerimages + exhibitors
1. Same pattern as sprint 1.
2. Remove table-name dependency like exhibitors2022.
3. Wire year-based queries in controllers and views.

## Sprint 3: speakers + testimonial
1. Move from speakers2026 to unified speakers table.
2. Keep same UI, enforce event_year + revision_year.
3. Add revision history display.

## Sprint 4: annual rollover automation
1. Add admin wizard: clone year (dry-run + execute).
2. Clone published records from source year to target year as draft.
3. Produce rollover report.

---

## 4) DB Migration Drafts

## 4.1 New audit table (shared)

### Laravel migration draft
```php
Schema::create('content_revisions', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('module', 50); // banner, utility, partner, exhibitor, speaker, testimonial
    $table->unsignedBigInteger('record_id');
    $table->integer('event_year');
    $table->integer('revision_year');
    $table->string('action', 20); // create, update, disable, enable, delete, clone
    $table->json('before_payload')->nullable();
    $table->json('after_payload')->nullable();
    $table->unsignedBigInteger('changed_by')->nullable();
    $table->timestamp('changed_at')->useCurrent();

    $table->index(['module', 'record_id']);
    $table->index(['event_year', 'revision_year']);
});
```

### Raw SQL draft (MySQL)
```sql
CREATE TABLE content_revisions (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  module VARCHAR(50) NOT NULL,
  record_id BIGINT UNSIGNED NOT NULL,
  event_year INT NOT NULL,
  revision_year INT NOT NULL,
  action VARCHAR(20) NOT NULL,
  before_payload JSON NULL,
  after_payload JSON NULL,
  changed_by BIGINT UNSIGNED NULL,
  changed_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX idx_module_record (module, record_id),
  INDEX idx_year_revision (event_year, revision_year)
);
```

## 4.2 Alter existing tables (example for banners)

### Laravel migration draft
```php
Schema::table('banners', function (Blueprint $table) {
    $table->integer('event_year')->default((int) date('Y'))->index();
    $table->integer('revision_year')->default((int) date('Y'))->index();
    $table->boolean('is_active')->default(1)->index();
    $table->enum('publish_status', ['draft', 'published', 'archived'])->default('published')->index();
    $table->integer('sort_order')->default(0);
    $table->unsignedBigInteger('created_by')->nullable();
    $table->unsignedBigInteger('updated_by')->nullable();
});
```

### Raw SQL draft
```sql
ALTER TABLE banners
  ADD COLUMN event_year INT NOT NULL DEFAULT 2026,
  ADD COLUMN revision_year INT NOT NULL DEFAULT 2026,
  ADD COLUMN is_active TINYINT(1) NOT NULL DEFAULT 1,
  ADD COLUMN publish_status ENUM('draft','published','archived') NOT NULL DEFAULT 'published',
  ADD COLUMN sort_order INT NOT NULL DEFAULT 0,
  ADD COLUMN created_by BIGINT UNSIGNED NULL,
  ADD COLUMN updated_by BIGINT UNSIGNED NULL,
  ADD INDEX idx_banners_year (event_year),
  ADD INDEX idx_banners_revision (revision_year),
  ADD INDEX idx_banners_status (publish_status, is_active);
```

## 4.3 Repeat for these tables
- utilityimages
- partnerimages
- testimonial
- unified exhibitors table (replace exhibitors2022 usage)
- unified speakers table (replace speakers2026 usage)

---

## 5) One-Time Consolidation SQL for Year-Suffixed Tables

## 5.1 Speakers
```sql
CREATE TABLE IF NOT EXISTS speakers (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  imageUrl TEXT NULL,
  imageAlt VARCHAR(255) NULL,
  name VARCHAR(255) NULL,
  description TEXT NULL,
  company VARCHAR(255) NULL,
  event_year INT NOT NULL,
  revision_year INT NOT NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  publish_status ENUM('draft','published','archived') NOT NULL DEFAULT 'published',
  sort_order INT NOT NULL DEFAULT 0,
  created_by BIGINT UNSIGNED NULL,
  updated_by BIGINT UNSIGNED NULL,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,
  INDEX idx_speakers_year (event_year),
  INDEX idx_speakers_revision (revision_year)
);

INSERT INTO speakers (imageUrl, imageAlt, name, description, company, event_year, revision_year, is_active, publish_status, sort_order, created_at, updated_at)
SELECT imageUrl, imageAlt, name, description, company, 2026, 2026, isActive, 'published', 0, NOW(), NOW()
FROM speakers2026;
```

## 5.2 Exhibitors
```sql
CREATE TABLE IF NOT EXISTS exhibitors (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  imageUrl TEXT NULL,
  altText VARCHAR(255) NULL,
  redirectUrl TEXT NULL,
  event_year INT NOT NULL,
  revision_year INT NOT NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  publish_status ENUM('draft','published','archived') NOT NULL DEFAULT 'published',
  sort_order INT NOT NULL DEFAULT 0,
  created_by BIGINT UNSIGNED NULL,
  updated_by BIGINT UNSIGNED NULL,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,
  INDEX idx_exhibitors_year (event_year),
  INDEX idx_exhibitors_revision (revision_year)
);

INSERT INTO exhibitors (imageUrl, altText, redirectUrl, event_year, revision_year, is_active, publish_status, sort_order, created_at, updated_at)
SELECT imageUrl, altText, redirectUrl, 2022, 2022, isActive, 'published', 0, NOW(), NOW()
FROM exhibitors2022;
```

---

## 6) Controller-Level Refactor Tasks (Module by Module)

## 6.1 Shared request contract (all upload/update actions)
- Accept: event_year, revision_year.
- Validation:
  - event_year required|integer|min:2020|max:2100
  - revision_year required|integer|min:2020|max:2100
- Optional: publish_status in [draft,published,archived]

## 6.2 Admin listing controllers
- Add year filter from query string: ?event_year=2026
- Default event_year = current year (or env config)
- Query pattern:
  - where(event_year, selectedYear)
  - optional active/disabled filter

## 6.3 BannerController
- upload(): insert event_year, revision_year, publish_status, is_active.
- updateBannerStatus(): update selected record within event_year and write revision log.
- deleteBannerPermanent(): keep but add revision logging before delete.

## 6.4 SpeakerAdminController
- Replace DB::table('speakers2026') with DB::table('speakers').
- show(): filter by selected event_year.
- removeSpeaker(): update is_active=0 and add content_revisions row.

## 6.5 ExhibitorController
- Replace DB::table('exhibitors2022') with DB::table('exhibitors').
- show()/removeExhibitor() use event_year.

## 6.6 UtilityController and PartnerController
- Keep table names but add year/revision filtering and logging.
- Category tables can remain for now; normalize later.

## 6.7 Testimonial controller
- Keep testimonial table first, add year/revision columns + filtering + logging.

---

## 7) View-Level Tasks (Admin Screens)

- Add year selector at top of each admin page.
- Add hidden inputs event_year and revision_year in every create/update form.
- Show current selected year and revision badge in list cards.
- Add revision history action per record (phase 2 if needed).

---

## 8) Route and Architecture Cleanup

## 8.1 Current problem
- Duplicate route files and app folders under 2024/2025/2026.

## 8.2 Transition target
- Keep one active app and one routes/web.php.
- Year-specific rendering handled by DB data and route parameter/query.

## 8.3 Suggested route additions
- GET /admin/{module}?event_year=2026
- POST /admin/{module}/clone-year
- GET /admin/revisions?module=banner&record_id=123

---

## 9) Annual Rollover (No Manual Copy)

## 9.1 Service behavior
- Input: source_year, target_year, revision_year.
- Clone only published records from source year.
- Insert cloned rows with:
  - event_year = target_year
  - revision_year = input revision_year
  - publish_status = draft

## 9.2 Safety
- Dry-run mode first (counts and conflict list).
- Transactional execute mode.
- Write clone actions into content_revisions.

---

## 10) Acceptance Checklist

## 10.1 Technical acceptance
- No controller references year-suffixed tables.
- Every admin write includes revision_year.
- Every list and frontend fetch uses event_year filter.
- Revisions are stored for create/update/disable/enable/delete/clone.

## 10.2 Business acceptance
- New year setup done from admin wizard in under 30 minutes.
- No file/folder cloning needed for year launch.
- Team can audit who changed what for each year.

---

## 11) First 10 Implementation Tickets

1. Create migration for content_revisions table.
2. Add year/revision columns to banners table.
3. Add year selector + hidden fields in admin banner view.
4. Update admincontroller show() to filter banners by event_year.
5. Update BannerController upload and status methods for year/revision and revision log inserts.
6. Create unified speakers table and backfill from speakers2026.
7. Update SpeakerAdminController to speakers table with event_year filtering.
8. Create unified exhibitors table and backfill from exhibitors2022.
9. Update ExhibitorController to exhibitors table with event_year filtering.
10. Build clone-year command/service for banners as pilot module.

---

## 12) Risks and Mitigations

- Risk: Existing frontend may expect old table structures.
  - Mitigation: temporary compatibility views or phased controller toggles.
- Risk: Inconsistent field names (isActive vs displayBanner).
  - Mitigation: normalize in code layer first, then schema cleanup.
- Risk: Hard deletes lose audit data.
  - Mitigation: always log before delete; prefer archive workflow.

---

## 13) Suggested Config Defaults

- DEFAULT_EVENT_YEAR=2026
- DEFAULT_REVISION_YEAR=2026
- ENABLE_YEAR_FALLBACK=false
- YEAR_FALLBACK_STRATEGY=previous_published

These can be moved to config/content.php and .env.
