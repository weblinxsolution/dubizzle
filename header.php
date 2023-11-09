<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubizzle</title>

    <!-- Bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawsome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- Slick Slider CDN -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar Start -->
    <section>
        <header class="container-fluid px-0">
            <!-- For Desktop -->
            <nav class="d-lg-block d-none border-bottom">
                <div class="wrapper">
                    <div class="d-flex justify-content-between align-items-center gap-5 py-1">
                        <div class="w-mxc logo">
                            <a href="index.php">
                                <img src="https://motarey.com/wp-content/uploads/2023/08/mobile-logo.png" alt="image">
                            </a>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-end gap-3">
                            <ul class="d-flex list-unstyled gap-2 mb-0">
                                <li><a href="index.php" class="nav-link text-dark small fw-500">Home</a></li>
                                <li><a href="about-us.php" class="nav-link text-dark small fw-500">About</a></li>
                                <li><a href="services.php" class="nav-link text-dark small fw-500">Services</a></li>
                                <li><a href="product-listing.php" class="nav-link text-dark small fw-500">Products</a></li>
                                <li><a href="#" class="nav-link text-dark small fw-500">Contact Us</a></li>
                            </ul>
                            <div class="d-flex align-items-center gap-3">
                                <a href="profile.php" class="btn-theme hover-none-white d-flex text-decoration-none align-items-center gap-2"><i class="fa fa-user-circle fa-lg"></i> Profile</a>
                                <button class="btn-theme" data-bs-toggle="modal" data-bs-target="#LoginModal">Post
                                    Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row mx-0 py-3 border-top border-bottom">
                    <div class="wrapper">
                        <ul class="category-items">
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Motors</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Property for Rent</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Property for Sale</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Jobs</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Classifieds</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Furniture & Garden</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Mobiles & Tablets</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn">Community</button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </nav>
            <nav class="py-4 d-lg-none d-block">
                <img src="https://motarey.com/wp-content/uploads/2023/08/mobile-logo.png" class="logo" alt="image">
            </nav>
        </header>

        <!-- For Mobile -->
        <div class="mobile-menu">
            <ul>
                <li>
                    <a href="javascript:void()" data-bs-toggle="offcanvas" data-bs-target="#MobileMenu">
                        <img src="assets/images/home.svg" alt="image">
                        <span>Menu</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/images/search.svg" alt="image">
                        <span>Search</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">
                        <img src="assets/images/add.svg" alt="image">
                        <span>Post an Add</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <img src="assets/images/home.svg" alt="image">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <img src="assets/images/user.svg" alt="image">
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="MobileMenu" aria-labelledby="MobileMenuLabel">
            <div class="offcanvas-header">
                <img src="https://motarey.com/wp-content/uploads/2023/08/mobile-logo.png" width="120px" alt="image">
                <h5 id="MobileMenuLabel"></h5>
                <button type="button" class="btn-close text-reset focus-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="d-flex flex-column list-unstyled gap-2 mb-0">
                    <li><a href="index.php" class="nav-link text-dark small fw-500">Home</a></li>
                    <li><a href="about-us.php" class="nav-link text-dark small fw-500">About</a></li>
                    <li><a href="services.php" class="nav-link text-dark small fw-500">Services</a></li>
                    <li><a href="product-listing.php" class="nav-link text-dark small fw-500">Products</a></li>
                    <li><a href="#" class="nav-link text-dark small fw-500">Contact Us</a></li>
                </ul>
                <div class="w-mxc mt-3 d-flex align-items-center gap-3">
                    <a href="profile.php" class="btn-theme hover-none-white text-decoration-none d-flex align-items-center gap-2 w-100"><i class="fa fa-user-circle fa-lg"></i>Profile</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close ms-auto d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center">
                            <img src="https://dbzproperty-a.akamaihd.net/static_assets/paa.svg" alt="image">
                            <h3>Log in to post an ad</h3>
                        </div>
                        <div class="login-buttons mt-3">
                            <a href="pick-a-category.php">
                                <img src="https://dbzproperty-a.akamaihd.net/auth/1.0.241/cf0baabc.png" alt="image">
                                Continue with Facebook
                            </a>
                            <a href="pick-a-category.php">
                                <img src="https://dbzproperty-a.akamaihd.net/auth/1.0.241/9ad58fa0.png" alt="image">
                                Continue with Google
                            </a>
                            <a href="pick-a-category.php">
                                <img src="https://dbzproperty-a.akamaihd.net/auth/1.0.241/8d29b216.png" alt="image">
                                Continue with Apple
                            </a>
                            <a href="pick-a-category.php">
                                <img src="https://dbzproperty-a.akamaihd.net/auth/1.0.241/c25fdcc6.png" alt="image">
                                Continue with Email
                            </a>
                        </div>
                        <div class="text-center py-3">
                            <a href="#" class="text-red fw-bold text-decoration-none small">Don’t have an account?
                                Create one</a>
                        </div>
                        <div class="privacy_text">By signing up I agree to the
                            <a target="_blank" href="#">Terms and Conditions</a> and
                            <a target="_blank" href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar End -->