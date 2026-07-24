<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/admin-panel.css?id=1">
<title>Admin - Banner Management</title>
<style>
  .stat-chip {
    text-decoration: none;
    display: inline-flex;
    align-items: center;
  }

  .stat-chip.is-active {
    background: #ef7b00;
    color: #fff;
    border-color: #ef7b00;
  }

  .banner-action {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
  }

  .btn-danger {
    background: #c0392b;
    color: #fff;
    border: 0;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
  }

  .flash-status {
    margin-top: 8px;
    margin-bottom: 12px;
    padding: 10px 12px;
    border: 1px solid #dbead2;
    background: #eff9ea;
    color: #2f5d1a;
    border-radius: 8px;
    font-size: 13px;
  }
</style>
</head>
<body>
@include('admin.adminHeader')

<div class="admin-page">
  <h1 class="page-title">Banner Management</h1>
  <p class="page-subtitle">Review all banners, monitor status, and enable or disable visibility on the homepage.</p>

  @if (session('status'))
  <div class="flash-status">{{ session('status') }}</div>
  @endif

  <div class="stats">
    <a class="stat-chip {{$selectedFilter === 'all' ? 'is-active' : ''}}" href="{{ url('/admin') }}?filter=all"><strong>Total:</strong>&nbsp;{{$totalCount}}</a>
    <a class="stat-chip {{$selectedFilter === 'active' ? 'is-active' : ''}}" href="{{ url('/admin') }}?filter=active"><strong>Active:</strong>&nbsp;{{$activeCount}}</a>
    <a class="stat-chip {{$selectedFilter === 'disabled' ? 'is-active' : ''}}" href="{{ url('/admin') }}?filter=disabled"><strong>Disabled:</strong>&nbsp;{{$disabledCount}}</a>
  </div>

  <div class="layout-grid">
    <section class="panel">
      <div class="panel-head">
        <h2>{{ ucfirst($selectedFilter) }} Banners</h2>
      </div>
      <div class="panel-body">
        <div class="admin-grid">
          @foreach ($banners as $banner)
          <article class="admin-card">
            <img src="{{$banner->BannerUrl}}" alt="{{$banner->ImageAltText}}">
            <div class="card-meta">
              <div><strong>ID:</strong> {{$banner->bannerId}}</div>
              <div>
                <strong>Status:</strong>
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
                <input type="hidden" name="bannerId" value="{{$banner->bannerId}}">
                <input type="hidden" name="displayBanner" value="0">
                <button class="btn btn-warning" type="submit">Disable Banner</button>
              </form>
              @else
              <form method="POST" action="{{url('enable-banner')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="bannerId" value="{{$banner->bannerId}}">
                <input type="hidden" name="displayBanner" value="1">
                <button class="btn btn-success" type="submit">Enable Banner</button>
              </form>
              @endif
              <form method="POST" action="{{url('delete-banner-permanent')}}" enctype="multipart/form-data" onsubmit="return confirm('Delete this banner permanently? This will remove DB record and banner file.');">
                @csrf
                <input type="hidden" name="bannerId" value="{{$banner->bannerId}}">
                <button class="btn-danger" type="submit">Delete Permanently</button>
              </form>
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
        <form method="POST" action="{{url('upload-banner')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <label class="form-label" for="uploadfile">Choose Image</label>
            <input class="input-field" type="file" name="uploadfile" id="uploadfile" accept="image/*" required>
          </div>
          <div class="form-row">
            <label class="form-label" for="altText">Alt Text</label>
            <input class="input-field" type="text" name="altText" id="altText" placeholder="Describe banner image">
          </div>
          <button class="btn btn-primary" type="submit" name="upload">Upload Banner</button>
          <p class="muted">Tip: use meaningful alt text for accessibility and SEO.</p>
        </form>
      </div>
    </section>
  </div>
</div>
@include('admin.adminFooter')
</body>
</html>
