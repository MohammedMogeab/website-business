<!-- header.php -->
 <head><link rel="stylesheet" href="./assets/css/style.css"></head>

<header class="header" data-header>
  
  <div class="container">
    <a href="#" class="logo">
      <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home" class="logo-light">
      <img src="./assets/images/logo-dark.svg" width="74" height="24" alt="Adex home" class="logo-dark">
    </a>

    <nav class="navbar" data-navbar>
      <div class="navbar-top">
        <a href="#" class="logo">
          <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home">
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">
        <li>
          <a id="header_home" href="index.php" class="navbar-link">Home</a>
        </li>

        <li>
          <a href="aboutus.php" class="navbar-link">About</a>
        </li>

        <li>
          <a href="projects.php" class="navbar-link">Projects</a>
        </li>

        <li>
          <a href="blog.php" class="navbar-link">Blog</a>
        </li>

        <li>
          <a href="contact.php" class="navbar-link">Contact</a>
        </li>
      </ul>

      <div class="wrapper">
        <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

        <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
      </div>

      <ul class="social-list">
        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-dribbble"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </li>
      </ul>
    </nav>
    <div style="display:flex; gap:5px">
      <a href="login.html" class="btn btn-primary">Login</a>
      <a href="signin.html" class="btn btn-primary">Sign up</a>
    </div>

    <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
      <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
    </button>

    <div class="overlay" data-nav-toggler data-overlay></div>
  </div>
</header>
<div style="height: 50px;"></div>