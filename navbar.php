<!--Navbar-->
<nav class="sticky-top bg-body-tertiary p-3 mb-3 border-bottom infobg">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="main.html" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none pop">
        <img class="d-inline-block align-text-top me-3 slidecurve" src="images/Hell logo.png" width="40" height="40">
      </a>
      
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 nav-underline">
        <li><a href="main.html" class="nav-link px-2 link-body-emphasis active"><i class="fa-solid fa-house"></i> Home</a></li>
        <li><a href="product.html" class="nav-link px-2 link-body-emphasis"><i class="fa-solid fa-bag-shopping"></i> Product</a></li>
      </ul>

      <form class="col-6 col-lg-auto mb-0 mb-lg-0 me-3 me-lg-3" role="search">
        <input onkeyup="searchitem(this)" id="search_item" type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="dropdown text-end">
        <a href="#" class="col-2 d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="images/Hell logo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>