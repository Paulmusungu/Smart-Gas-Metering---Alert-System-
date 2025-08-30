<?php
// index.php - Landing page (no layout, just Bootstrap)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gas Monitoring Project</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #87CEEB, #f8f9fa); 
      min-height: 100vh; 
      display: flex; 
      justify-content: center; 
      align-items: center;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .btn-lg {
      border-radius: 25px;
    }
    .footer {
      margin-top: 25px;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card p-5 text-center">
        <h1 class="mb-3"><i class="bi bi-fire text-danger"></i> Gas Monitoring Project</h1>
        <p class="lead">
          A smart system to <strong>monitor household gas levels</strong>, 
          <strong>send notifications</strong> when thresholds are reached, 
          and help families stay safe.
        </p>

        <hr class="my-4">

        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <a href="/gasproject/public/add_member.php" class="btn btn-success btn-lg w-100">
              <i class="bi bi-person-plus"></i> Register
            </a>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <a href="/gasproject/public/login.php" class="btn btn-primary btn-lg w-100">
              <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
          </div>
          <div class="col-md-4">
            <a href="/about.php" class="btn btn-outline-dark btn-lg w-100">
              <i class="bi bi-info-circle"></i> About
            </a>
          </div>
        </div>

        <div class="footer">
          <p class="mt-4">
            Designed and Developed by <strong>William Etabo</strong> and <strong>Paul Musungu</strong>
          </p>
          <p class="text-muted small">Powered by Webstack &middot; Safety through technology</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
