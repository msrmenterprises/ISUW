<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/admin-panel.css?id=1">
<title>Admin - Partners</title>
</head>
<body>
@include('admin.adminHeader')

@php
  $activeCount = $partnerimages->where('isActive', 1)->count();
  $disabledCount = $partnerimages->where('isActive', 0)->count();
@endphp

<div class="admin-page">
  <h1 class="page-title">Partners Management</h1>
  <p class="page-subtitle">Manage partner logos and map each logo to the right category and URL.</p>

  <div class="stats">
    <span class="stat-chip"><strong>Total:</strong> {{$partnerimages->count()}}</span>
    <span class="stat-chip"><strong>Active:</strong> {{$activeCount}}</span>
    <span class="stat-chip"><strong>Disabled:</strong> {{$disabledCount}}</span>
  </div>

  <div class="layout-grid">
    <section class="panel">
      <div class="panel-head">
        <h2>All Partners</h2>
      </div>
      <div class="panel-body">
        <div class="admin-grid">
          @foreach ($partnerimages as $image)
          <article class="admin-card">
            <img src="{{$image->imageUrl}}" alt="{{$image->altText}}">
            <div class="card-meta">
              <div><strong>Category:</strong>
                @foreach ($partnerscategory as $category)
                  @if ($category->id==$image->categoryId)
                    {{$category->name}}
                  @endif
                @endforeach
              </div>
              <div>
                <strong>Status:</strong>
                @if ($image->isActive==1)
                <span class="status_badge status_active">Active</span>
                @else
                <span class="status_badge status_disabled">Disabled</span>
                @endif
              </div>
            </div>
            <div class="banner-action">
              @if ($image->isActive==1)
              <form method="POST" action="{{url('remove-partner')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="partnerId" value="{{$image->id}}">
                <button class="btn btn-warning" type="submit">Disable Partner</button>
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
        <h2>Add New Partner</h2>
      </div>
      <div class="panel-body">
        <form method="POST" action="{{url('upload-partner')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <label class="form-label" for="categoryId">Choose Category</label>
            <select class="input-field" name="categoryId" id="categoryId" required>
              @foreach ($partnerscategory as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-row">
            <label class="form-label" for="uploadfile">Choose Image</label>
            <input class="input-field" type="file" name="uploadfile" id="uploadfile" accept="image/*" required>
          </div>
          <div class="form-row">
            <label class="form-label" for="altText">Alt Text</label>
            <input class="input-field" type="text" name="altText" id="altText">
          </div>
          <div class="form-row">
            <label class="form-label" for="redirectUrl">Redirect URL</label>
            <input class="input-field" type="text" name="redirectUrl" id="redirectUrl" placeholder="https://example.com">
          </div>
          <button class="btn btn-primary" type="submit" name="upload">Upload Partner</button>
        </form>
      </div>
    </section>
  </div>
</div>
@include('admin.adminFooter')
</body>
</html>
