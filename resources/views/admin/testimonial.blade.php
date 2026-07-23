<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/admin-panel.css?id=1">
<title>Admin - Testimonials</title>
</head>
<body>
@include('admin.adminHeader')

@php
  $activeCount = $testimonials->where('isActive', 1)->count();
  $disabledCount = $testimonials->where('isActive', 0)->count();
@endphp

<div class="admin-page">
  <h1 class="page-title">Testimonials Management</h1>
  <p class="page-subtitle">Add and manage testimonial cards displayed across the website.</p>

  <div class="stats">
    <span class="stat-chip"><strong>Total:</strong> {{$testimonials->count()}}</span>
    <span class="stat-chip"><strong>Active:</strong> {{$activeCount}}</span>
    <span class="stat-chip"><strong>Disabled:</strong> {{$disabledCount}}</span>
  </div>

  <div class="layout-grid">
    <section class="panel">
      <div class="panel-head">
        <h2>All Testimonials</h2>
      </div>
      <div class="panel-body">
        <div class="admin-grid">
          @foreach ($testimonials as $testimonial)
          <article class="admin-card">
            <img src="{{$testimonial->imageUrl}}" alt="{{$testimonial->altText}}">
            <div class="card-meta">
              <div><strong>Name:</strong> {{$testimonial->name}}</div>
              <div><strong>Company:</strong> {{$testimonial->comapny}}</div>
              <div>
                <strong>Status:</strong>
                @if ($testimonial->isActive==1)
                <span class="status_badge status_active">Active</span>
                @else
                <span class="status_badge status_disabled">Disabled</span>
                @endif
              </div>
            </div>
            <div class="banner-action">
              @if ($testimonial->isActive==1)
              <form method="POST" action="{{url('remove-testimonial')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="testimonialId" value="{{$testimonial->id}}">
                <button class="btn btn-warning" type="submit">Disable Testimonial</button>
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
        <h2>Add New Testimonial</h2>
      </div>
      <div class="panel-body">
        <form method="POST" action="{{url('upload-testimonial')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <label class="form-label" for="uploadfile">Choose Image</label>
            <input class="input-field" type="file" name="uploadfile" id="uploadfile" accept="image/*" required>
          </div>
          <div class="form-row">
            <label class="form-label" for="altText">Alt Text</label>
            <input class="input-field" type="text" name="altText" id="altText">
          </div>
          <div class="form-row">
            <label class="form-label" for="nameC">Name</label>
            <input class="input-field" type="text" name="nameC" id="nameC">
          </div>
          <div class="form-row">
            <label class="form-label" for="company">Company</label>
            <input class="input-field" type="text" name="company" id="company">
          </div>
          <div class="form-row">
            <label class="form-label" for="desc">Description</label>
            <textarea class="input-field" name="desc" id="desc"></textarea>
          </div>
          <button class="btn btn-primary" type="submit" name="upload">Upload Testimonial</button>
        </form>
      </div>
    </section>
  </div>
</div>
@include('admin.adminFooter')
</body>
</html>
