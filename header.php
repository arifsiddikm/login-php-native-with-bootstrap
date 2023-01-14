<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Load CSS Bootstrap & Icon -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <title>RipLabs - Halaman Login</title>
    <style>
    /* Panggil font */
    @font-face {
        font-family:'google';
        src:url('assets/fonts/google-sans.ttf');
    }
    @font-face {
        font-family:'google-regular';
        src:url('assets/fonts/google-regular.ttf');
    }
    * {
        font-family:google;
    }
    html,body {
        scroll-behavior:smooth;
        background:url('assets/image/bg.png');
    }
    .navbar-brand {
        font-size:25px;
    }
    .nav-link {
        color:white !important;
    }
    .shadow {
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.3) !important;
    }
    .jumbotron {
        background:#fefefe;
        border-radius:15px;
    }
    .par {
      font-family:google-regular !important;
    }
    p {
      font-size:18px;
    }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
  <a class="navbar-brand" href="index.php">RipLabs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <!-- Jika belum diset login, maka navbarnya begini -->
    <?php if(!isset($_SESSION['login'])): ?>
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fa fa-home"></i>
            Home 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">
            <i class="fa fa-sign-in-alt"></i>
            Login 
        </a>
      </li>
    <!-- Jika sudah diset login, maka navbarnya begini -->
    <?php elseif(isset($_SESSION['login'])): ?>
    <li class="nav-item">
        <a class="nav-link" href="home.php">
            <i class="fa fa-home"></i>
            Home 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" onclick="return confirm('Anda mau keluar?-');">
            <i class="fa fa-sign-in-alt"></i>
            Logout 
        </a>
      </li>    
    <?php endif; ?>
    </ul>
  </div>
</div>
</nav>
<br><br>
<!-- End Navbar -->