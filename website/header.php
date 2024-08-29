<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>eoc</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
 <script src="https://kit.fontawesome.com/cc8c4f6edc.js" crossorigin="anonymous"></script>

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="product/css.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">


<body>
  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Styling</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-g8uFzW7yLy8F7pNZKP3ng5tuTo/E2bWFtvO+YK4oR5BkMWaoMj1wxKaSoX7y7z+B" crossorigin="anonymous">
<style>
/* Navbar styling */
#navbar {
  background-color: black; /* Navbar background color */
  padding: 10px 0;
}

#navbar .navbar-nav .nav-link {
  color: #ffffff; /* Navbar links color */
  transition: color 0.3s ease;
}

#navbar .navbar-nav .nav-link:hover {
  color: #67ba98; /* Navbar links hover color */
}

#navbar .navbar-nav .nav-link.active {
  font-weight: bold;
}

#navbar .navbar-nav .nav-item {
  margin-right: 15px;
}

#navbar .navbar-brand img {
  max-height: 100px;  
}

#navbar .navbar-toggler {
  border-color: #ffffff; /* Navbar toggle button color */
}

#navbar .navbar-toggler-icon {
  background-color: #ffffff; /* Navbar toggle icon color */
}

#navbar .navbar-collapse {
  justify-content: flex-end;
}

#navbar .navbar-collapse .form-inline .btn {
  color: #ffffff; /* Button color */
  border-color: #ffffff; /* Button border color */
  transition: color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease;
}

#navbar .navbar-collapse .form-inline .btn:hover {
  color: #65CCB8; /* Button hover color */
  background-color: #ffffff; /* Button hover background color */
  border-color: #ffffff; /* Button hover border color */
}

/* Dropdown menu styling */
#navbar .dropdown-menu {
  background-color: #67ba98; /* Dropdown menu background color */
}

#navbar .dropdown-menu .dropdown-item {
  color: #ffffff; /* Dropdown menu item color */
  transition: background-color 0.3s ease, color 0.3s ease;
}

#navbar .dropdown-menu .dropdown-item:hover {
  background-color: #57BA98; /* Dropdown menu item hover background color */
  color: #ffffff; /* Dropdown menu item hover color */
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" >
      <img src="image/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="products.php">Product</a></li>
        <li class="nav-item"><a class="nav-link" href="testingdepart.php">Testing Department</a></li>
        <li class="nav-item"><a class="nav-link" href="whyus.php">Why Us</a></li>
        <li class="nav-item"><a class="nav-link" href="About us.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <!-- Dropdown menu for admin panel -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin Panel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownAdmin">
            <li><a class="dropdown-item" href="../admin/pages/signin.php">Dashboard</a></li>
            <!-- Add other admin panel links here -->
          </ul>
        </li>
        <!-- End of admin panel dropdown -->
      </ul>
      <form class="d-flex">
        <a href="cart.php" class="btn btn-outline-light me-2">Cart <i class="fas fa-shopping-cart"></i></a>
        <a href="userlogin.php" class="btn btn-outline-light me-2">Login <i class="fas fa-user"></i></a>
        <a href="userlogout.php" class="btn btn-outline-light">Logout <i class="fas fa-user"></i></a>
      </form>
    </div>
  </div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+U5DAxOn8B9ZV6wt7BSkKcPpGFLkKqqEw6f/hIb" crossorigin="anonymous"></script>
</body>
</html>