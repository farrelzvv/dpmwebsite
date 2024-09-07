<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DPM STT NF</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo-dpm.svg" type="image/svg+xml">


  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <!-- 
    - preload image
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

  <!-- 
    - Animasi CSS
  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
  
      <h1>
        <a href="{{ url('/') }}" class="logo">DPM 2024</a>
      </h1>
  
      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">
  
          <li class="navbar-item">
            <a href="{{ url('/beranda') }}" class="navbar-link" data-nav-link>Beranda</a>
          </li>
  
          <li class="navbar-item">
            <a href="{{ url('/profil') }}" class="navbar-link" data-nav-link>Profil</a>
          </li>
  
          <li class="navbar-item">
            <a href="{{ url('/tupoksi') }}" class="navbar-link" data-nav-link>Tupoksi</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/proker') }}" class="navbar-link" data-nav-link>Proker</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/produk') }}" class="navbar-link" data-nav-link>Produk</a>
          </li>
  
          <li class="navbar-item">
            <a href="{{ url('/aspirasi') }}" class="navbar-link" data-nav-link>Aspirasi</a>
          </li>
  
        </ul>
      </nav>
  
      <button class="btn btn-secondary">Login Admin</button>
  
      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
      </button>
  
    </div>
  </header>

  



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>