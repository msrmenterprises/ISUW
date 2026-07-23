<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
:root {
  --admin-bg: #f3f6fb;
  --panel-bg: #ffffff;
  --panel-border: #dde3ec;
  --heading: #1d2a3a;
  --text: #3f4d5f;
  --muted: #6a7788;
  --primary: #0f6cbf;
  --primary-hover: #0a589e;
  --success-bg: #e6f8ee;
  --success-text: #1b6e45;
  --danger-bg: #fbe9ec;
  --danger-text: #8a2332;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: radial-gradient(circle at top right, #eef6ff 0%, var(--admin-bg) 45%, #f8f9fc 100%);
  color: var(--text);
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.header_wrapper {
  margin: 0;
  padding: 14px 24px;
  border-bottom: 1px solid var(--panel-border);
  background: #fff;
}

.admin_ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.admin_li {
  margin: 0;
}

.admin_li a {
  display: inline-block;
  text-decoration: none;
  color: #2d4058;
  padding: 8px 12px;
  border-radius: 8px;
  border: 1px solid transparent;
  transition: all 0.2s ease;
}

.admin_li a:hover {
  background: #f1f6fd;
  border-color: #d6e6f8;
}

.admin-page {
  max-width: 1240px;
  margin: 28px auto 40px;
  padding: 0 16px;
}

.page-title {
  margin: 0;
  font-size: 30px;
  color: var(--heading);
}

.page-subtitle {
  margin: 8px 0 0;
  color: var(--muted);
  font-size: 15px;
}

.stats {
  margin: 20px 0;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.stat-chip {
  background: var(--panel-bg);
  border: 1px solid var(--panel-border);
  border-radius: 999px;
  padding: 8px 14px;
  font-size: 14px;
}

.layout-grid {
  display: grid;
  grid-template-columns: 2.2fr 1fr;
  gap: 18px;
  align-items: start;
}

.panel {
  background: var(--panel-bg);
  border: 1px solid var(--panel-border);
  border-radius: 16px;
  box-shadow: 0 8px 24px rgba(20, 35, 60, 0.06);
}

.panel-head {
  padding: 16px 18px;
  border-bottom: 1px solid var(--panel-border);
}

.panel-head h2 {
  margin: 0;
  color: var(--heading);
  font-size: 20px;
}

.panel-body {
  padding: 16px;
}

.admin_banner_div {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 14px;
  max-height: 600px;
  overflow-y: auto;
  padding-right: 6px;
}

.admin_banner_card {
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 10px;
  background: #fff;
}

.admin_banner_img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 8px;
  border: 1px solid #e5ebf2;
  background: #f5f8fd;
  display: block;
}

.banner-meta {
  margin-top: 10px;
  font-size: 13px;
  color: var(--text);
  line-height: 1.5;
}

.status_badge {
  display: inline-block;
  padding: 4px 10px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.2px;
}

.status_active {
  background: var(--success-bg);
  color: var(--success-text);
}

.status_disabled {
  background: var(--danger-bg);
  color: var(--danger-text);
}

.banner-action {
  margin-top: 10px;
}

.btn {
  border: none;
  border-radius: 8px;
  padding: 8px 12px;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s ease;
}

.btn-primary {
  color: #fff;
  background: var(--primary);
}

.btn-primary:hover {
  background: var(--primary-hover);
}

.btn-success {
  color: #fff;
  background: #1f8f59;
}

.btn-success:hover {
  background: #187447;
}

.btn-warning {
  color: #fff;
  background: #c17012;
}

.btn-warning:hover {
  background: #a65f0f;
}

.form-row {
  margin-bottom: 14px;
}

.form-label {
  display: block;
  font-size: 13px;
  margin-bottom: 6px;
  color: #2f3f52;
  font-weight: 600;
}

.input-field {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #d5deea;
  border-radius: 10px;
  font-size: 14px;
  background: #fff;
}

.input-field:focus {
  outline: none;
  border-color: #78aee1;
  box-shadow: 0 0 0 3px rgba(15, 108, 191, 0.15);
}

.muted {
  color: var(--muted);
  font-size: 12px;
  margin-top: 8px;
}

@media (max-width: 960px) {
  .layout-grid {
    grid-template-columns: 1fr;
  }
}
</style>
      <title>Admin</title>
    </head>
<body>
@include('admin.adminHeader')

@php
  $activeCount = $banners->where('displayBanner', 1)->count();
  $disabledCount = $banners->where('displayBanner', 0)->count();
@endphp

<div class="admin-page">
  <h1 class="page-title">Banner Management</h1>
  <p class="page-subtitle">Review all banners, monitor status, and enable or disable visibility on the homepage.</p>

  <div class="stats">
    <span class="stat-chip"><strong>Total:</strong> {{$banners->count()}}</span>
    <span class="stat-chip"><strong>Active:</strong> {{$activeCount}}</span>
    <span class="stat-chip"><strong>Disabled:</strong> {{$disabledCount}}</span>
  </div>

  <div class="layout-grid">
    <section class="panel">
      <div class="panel-head">
        <h2>All Banners</h2>
      </div>
      <div class="panel-body">
        <div class="admin_banner_div">
            @foreach ($banners as $banner)
              <article class="admin_banner_card">
                     <img src="{{$banner->BannerUrl}}" class="admin_banner_img" alt="{{$banner->ImageAltText}}">
                     <div class="banner-meta">
                       <div><strong>ID:</strong> {{$banner->bannerId}}</div>
                       <div><strong>Status:</strong>
                       @if ($banner->displayBanner==1)
                        <span class="status_badge status_active">Active</span>
                       @else
                        <span class="status_badge status_disabled">Disabled</span>
                       @endif
                       </div>
                     </div>

                     <div class="banner-action">
                     @if ($banner->displayBanner==1)
                     <form method="POST" action="{{url('disable-banner')}}" enctype="multipart/form-data">
                       @csrf
                       <input type="hidden" name="bannerId" value="{{$banner->bannerId}}"/>
                       <input type="hidden" name="displayBanner" value="0"/>
                       <button class="btn btn-warning" type="submit">Disable Banner</button>
                     </form>
                     @else
                     <form method="POST" action="{{url('enable-banner')}}" enctype="multipart/form-data">
                       @csrf
                       <input type="hidden" name="bannerId" value="{{$banner->bannerId}}"/>
                       <input type="hidden" name="displayBanner" value="1"/>
                       <button class="btn btn-success" type="submit">Enable Banner</button>
                     </form>
                     @endif
                     </div>
             </article>
               @endforeach
            </div>
      </div>
    </section>

    <section class="panel">
      <div class="panel-head">
        <h2>Add New Banner</h2>
      </div>
      <div class="panel-body">
        <div id="content">
          <form method="POST" action="{{url('upload-banner')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <label class="form-label" for="uploadfile">Choose Image</label>
                <input class="input-field" type="file" name="uploadfile" id="uploadfile" accept="image/*" required />
              </div>
              <div class="form-row">
                <label class="form-label" for="altText">Alt Text</label>
                <input class="input-field" type="text" name="altText" id="altText" placeholder="Describe banner image" />
              </div>
              <div>
                  <button class="btn btn-primary" type="submit" name="upload">Upload Banner</button>
              </div>
          </form>
          <p class="muted">Tip: use meaningful alt text for accessibility and SEO.</p>
        </div>
      </div>
    </section>
  </div>
</div>
</body>
</html>