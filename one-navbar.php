<head>
  <link rel="stylesheet" href="./all-page-navbar.css">
</head>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand bk_nav px-4" href="#">
          <img src="unnamed.webp" alt="" width="60" height="48" class="d-inline-block align-text-top">
          <h3 class="text-info">TECH<span>care</span></h3>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-end-2222 px-5" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0  flex-for-login-page">
      
            <li class="nav-item">
                <a class="nav-link text-dark active_update" aria-current="page" href="#">Home</a>
            </li>
        


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Services
          </a>
          <ul class="dropdown-menu text-dark">
                        <li><a class="dropdown-item" href="#">Regular checkup</a></li>
                        <li><a class="dropdown-item" href="#">Appoinment booking</a></li>
                        <li><a class="dropdown-item" href="#">Health issue</a></li>
         </ul>
        </li>
        <li class="nav-item">
                      <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
    
    
                    
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle text-dark" href="#k" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="user_3.png" width="40" height="40" class="rounded-circle">
                        <!-- https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg -->
                      </a>
                      <div class="dropdown-menu login-dropdown-123 text-dark" href="#k" aria-labelledby="navbarDropdownMenuLink">
                        <div class="a pt-3 flex-column-for-login-page">
                          <img src="user_3.png" alt="" width="40" height="40" class="rounded-circle">
                          <h6 class="text-info text-center mt-2">
                          <?php
                          $pp_name=strtolower($_SESSION['full_name']);
                          echo ucwords($pp_name);?>
                          </h6>
                        </div>
                        <hr class="mt-1 mb-1">
                        <a class="dropdown-item flex-for-login-page text-dark" href="edit-profile.html" target="_blank">Edit Profile <i class="mx-2 fa-solid fa-user-pen"></i></a>
                        <a class="dropdown-item flex-for-login-page text-dark" href="logout.php">Log Out <i class="mx-2 fa-solid fa-arrow-right-from-bracket"></i></a>
                      </div>
                    </li>  
        
      </ul>
      
    </div>
  </div>
</nav>