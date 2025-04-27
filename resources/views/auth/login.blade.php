<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login/Register Card</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      max-width: 400px;
      margin: 5% auto;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .form-toggle {
      cursor: pointer;
      color: #0d6efd;
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="card">
  <h4 class="text-center mb-4" id="form-title">Login</h4>

  <!-- Login Form -->
  <form id="login-form" method="POST" action="{{ route('login_post') }}">
    @csrf
    
    <div class="mb-3">
      <label for="login-email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="login-email" placeholder="Enter email" required>
    </div>
    <div class="mb-3">
      <label for="login-password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="login-password" placeholder="Password" required>
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
    <p class="mt-3 text-center">
      Don't have an account? <span class="form-toggle" onclick="toggleForm()">Register here</span>
    </p>
  </form>

  <!-- Registration Form -->
  <form id="register-form" style="display: none;" method="POST" action="{{ route('user_store') }}">
    @csrf
    <div class="mb-3">
      <label for="register-name" class="form-label">Full Name</label>
      <input type="text" name="name" class="form-control" id="register-name" placeholder="Enter full name" required>
    </div>
    <div class="mb-3">
      <label for="register-email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="register-email" placeholder="Enter email" required>
    </div>
    <div class="mb-3">
      <label for="register-password" class="form-label">Password</label>
      <input type="password" class="form-control" id="register-password" placeholder="Password" required>
    </div>
    <div class="mb-3">
      <label for="register-confirm-password" class="form-label">Confirm Password</label>
      <input type="password" name="password" class="form-control" id="register-confirm-password" placeholder="Confirm Password" required>
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-success">Register</button>
    </div>
    <p class="mt-3 text-center">
      Already have an account? <span class="form-toggle" onclick="toggleForm()">Login here</span>
    </p>
  </form>
</div>
<x-toast/>
<!-- Bootstrap 5 JS Bundle -->
<script src="{{ asset('public/assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<script>
  function toggleForm() {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const formTitle = document.getElementById('form-title');

    if (loginForm.style.display === 'none') {
      loginForm.style.display = 'block';
      registerForm.style.display = 'none';
      formTitle.textContent = 'Login';
    } else {
      loginForm.style.display = 'none';
      registerForm.style.display = 'block';
      formTitle.textContent = 'Register';
    }
  }
</script>

</body>
</html>
