<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/public/css/admin-panel.css?id=1">
<title>Admin - Speakers</title>
</head>
<body>
@include('admin.adminHeader')

@php
  $activeCount = $speakers->where('isActive', 1)->count();
  $disabledCount = $speakers->where('isActive', 0)->count();
@endphp

<div class="admin-page">
  <h1 class="page-title">Speakers Management</h1>
  <p class="page-subtitle">Manage speaker cards and publish updates for the live website.</p>

  <div class="stats">
    <span class="stat-chip"><strong>Total:</strong> {{$speakers->count()}}</span>
    <span class="stat-chip"><strong>Active:</strong> {{$activeCount}}</span>
    <span class="stat-chip"><strong>Disabled:</strong> {{$disabledCount}}</span>
  </div>

  <div class="layout-grid">
    <section class="panel">
      <div class="panel-head">
        <h2>All Speakers</h2>
      </div>
      <div class="panel-body">
        <div class="admin-grid">
          @foreach ($speakers as $speaker)
          <article class="admin-card">
            <img src="{{$speaker->imageUrl}}" alt="{{$speaker->imageAlt}}">
            <div class="card-meta">
              <div><strong>Name:</strong> {{$speaker->name}}</div>
              <div><strong>Company:</strong> {{$speaker->company}}</div>
              <div>
                <strong>Status:</strong>
                @if ($speaker->isActive==1)
                <span class="status_badge status_active">Active</span>
                @else
                <span class="status_badge status_disabled">Disabled</span>
                @endif
              </div>
            </div>
            <div class="banner-action">
              @if ($speaker->isActive==1)
              <form method="POST" action="{{url('remove-speaker')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="speakerId" value="{{$speaker->id}}">
                <button class="btn btn-warning" type="submit">Disable Speaker</button>
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
        <h2>Add New Speaker</h2>
      </div>
      <div class="panel-body">
        <form method="POST" action="{{url('upload-speaker')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <label class="form-label" for="name">Name</label>
            <input class="input-field" type="text" name="name" id="name" required>
          </div>
          <div class="form-row">
            <label class="form-label" for="company">Company</label>
            <input class="input-field" type="text" name="company" id="company">
          </div>
          <div class="form-row">
            <label class="form-label" for="desc">Description</label>
            <textarea class="input-field" id="desc" name="desc"></textarea>
          </div>
          <div class="form-row">
            <label class="form-label" for="uploadfile">Photo</label>
            <input class="input-field" type="file" name="uploadfile" id="uploadfile" accept="image/*" required>
          </div>
          <div class="form-row">
            <label class="form-label" for="altText">Image Alt Text</label>
            <input class="input-field" type="text" name="altText" id="altText">
          </div>
          <button class="btn btn-primary" type="submit" name="upload">Upload Speaker</button>
        </form>
      </div>
    </section>
  </div>
</div>
@include('admin.adminFooter')
</body>
</html>
