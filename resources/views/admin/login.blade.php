<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
<link rel="stylesheet" href="/public/css/admin-panel.css?id=1">
</head>
<body>
<div class="auth-page">
  <div class="auth-card">
    <div class="auth-head">
      <h1 class="auth-title">Admin Login</h1>
      <p class="auth-subtitle">Sign in to manage banners, speakers, utilities, partners, exhibitors, and testimonials.</p>
    </div>
    <div class="auth-body">
      <form method="POST" action="{{ url('login')}}">
        @csrf
        <div class="form-row">
          <label class="form-label" for="email_id">Email</label>
          <input class="input-field" type="email" name="email" id="email_id" placeholder="Enter email" required>
        </div>
        <div class="form-row">
          <label class="form-label" for="password">Password</label>
          <input class="input-field" type="password" name="password" id="password" placeholder="Enter password" required>
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
      </form>
    </div>
  </div>
</div>
@include('admin.adminFooter')
</body>
</html>
