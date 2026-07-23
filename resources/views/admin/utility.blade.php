<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/admin-panel.css?id=1">
<title>Admin - Utilities</title>
</head>
<body>
@include('admin.adminHeader')

@php
  $activeCount = $utilityimages->where('isActive', 1)->count();
  $disabledCount = $utilityimages->where('isActive', 0)->count();
@endphp

<div class="admin-page">
  <h1 class="page-title">Utilities Management</h1>
  <p class="page-subtitle">Manage utility logos by category with clear visibility status.</p>

  <div class="stats">
    <span class="stat-chip"><strong>Total:</strong> {{$utilityimages->count()}}</span>
    <span class="stat-chip"><strong>Active:</strong> {{$activeCount}}</span>
    <span class="stat-chip"><strong>Disabled:</strong> {{$disabledCount}}</span>
  </div>

  <div class="layout-grid">
    <section class="panel">
      <div class="panel-head">
        <h2>All Utilities</h2>
      </div>
      <div class="panel-body">
        <div class="admin-grid">
          @foreach ($utilityimages as $image)
          <article class="admin-card">
            <img src="{{$image->imageUrl}}" alt="{{$image->altText}}">
            <div class="card-meta">
              <div><strong>Category:</strong>
                @foreach ($categories as $category)
                  @if ($category->id==$image->categoryId)
                    {{$category->CategoryName}}
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
              <form method="POST" action="{{url('remove-utility')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="utilityId" value="{{$image->id}}">
                <button class="btn btn-warning" type="submit">Disable Utility</button>
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
        <h2>Add New Utility</h2>
      </div>
      <div class="panel-body">
        <form method="POST" action="{{url('upload-utility')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <label class="form-label" for="categoryId">Choose Category</label>
            <select class="input-field" name="categoryId" id="categoryId" required>
              @foreach ($categories as $category)
                <option value="{{$category->categoryId}}">{{$category->CategoryName}}</option>
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
          <button class="btn btn-primary" type="submit" name="upload">Upload Utility</button>
        </form>
      </div>
    </section>
  </div>
</div>
@include('admin.adminFooter')
</body>
</html>
