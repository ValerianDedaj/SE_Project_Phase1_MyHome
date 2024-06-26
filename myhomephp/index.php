<?php
// Establish the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myhome_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform the query
$query = "SELECT * FROM contractors";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Home</title>
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->

</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Epoka University Rinas</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 " href="login.php"><i class="fas fa-user-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-map text-primary me-2"></i>My Home</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="#contractors" class="nav-item nav-link">Contractors</a>
                <a href="#service" class="nav-item nav-link">Services</a>
                <a href="#about" class="nav-item nav-link">About</a>
                
            </div>
            <a href="signup.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">SignUp As A Contractor<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Professional Home Contractor Across Albania</h1>
                                    <h3 class="display-9 text-light mb-5 animated slideInDown">Let our commercial and residential experts take care of any of your home repair projects</h3>
                                    <a href="tel:416-220-0062" class="btn btn-primary py-sm-3 px-sm-5">Call Us 123-123-1234</a>
                                    <a href="#service" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">The Most Reliable Home Contractors In Albania</h1>
                                    <h3 class="display-9 text-light mb-5 animated slideInDown">Let our commercial and residential experts take care of any of your home repair projects</h3>
                                    <a href="tel:416-220-0062" class="btn btn-primary py-sm-3 px-sm-5">Call Us 123-123-1234</a>
                                    <a href="#service" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-building text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Commercial Repair Services </h5>
                                <span>Commercial repair services encompass a range of professional maintenance and restoration solutions tailored for businesses and commercial establishments. These services address the repair and upkeep of various structures, equipment, and systems within commercial spaces. </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-home text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Residential Repair Services</h5>
                                <span>

                                    Residential repair services address maintenance and restoration needs for private homes, covering tasks such as structural, plumbing, and electrical repairs, as well as HVAC maintenance, appliance issues, roofing, and general wear and tear to keep properties in optimal condition.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">My Home, Albania</h1>
                        <p>My Home, Albania is dedicated to enhancing the living experience in Albania by providing comprehensive residential repair services. Specializing in maintaining and restoring private homes, our professional team tackles a spectrum of tasks. From structural repairs and plumbing to electrical systems, HVAC units, and addressing issues with appliances, roofing, and general wear and tear, we ensure homes remain in optimal condition. Trust My Home, Albania for reliable solutions that elevate the comfort, safety, and longevity of residential properties across the country.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Tracking
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Qualified Team
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">123-123-1234</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
     
        <div class="container-xxl courses my-6 py-6 pb-0" id="service">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Contractors</h6>
                <h1 class="display-6 mb-4">Is there a problem?<br> Call Us Now!</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Plumbing</h5>
                            <p>My Home provides comprehensive plumbing services for residential, commercial, and industrial clients. With a team of highly skilled and experienced plumbers, we offer a range of services including installation, repair, and maintenance of plumbing systems. From fixing leaky faucets and unclogging drains to installing new fixtures and addressing complex piping issues, we are committed to delivering efficient solutions tailored to our customers' needs.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/Leaking-roof.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Electrical Problemns</h5>
                            <p>My home offers professional electrical services for residential, commercial, and industrial properties. With a team of certified electricians, we specialize in a wide range of electrical solutions including installation, repair, and maintenance. From wiring new constructions and upgrading electrical panels to troubleshooting electrical faults and installing lighting fixtures, we are dedicated to ensuring the safety, efficiency, and reliability of our clients' electrical systems. </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/roof_upkeep.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3">Roof Problems</h5>
                            <p>Roof problems encompass a variety of issues that can arise with the structure covering a building. These issues may include leaks, missing or damaged shingles, sagging or uneven areas, mold or mildew growth, and issues with ventilation or insulation. Addressing roof problems promptly is crucial to prevent further damage to the building's interior and structure. </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/snow_roof.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">Registered Contractors!</h1>
<style>
        body {
          
            color: #000;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px; /* Adjusted margin-top */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #fff;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        a.btn {
            color: #fff;
        }

        a.btn-pencil {
            background-color: #28a745;
        }

        a.btn-danger {
            background-color: #dc3545;
        }
        </style>
                       <div class="container" id='contractors'>
    <div class="row">
        <?php 
        // Check if there are rows in the result
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                // Check if the contractor has been accepted
                if ($row['accepted'] == 1) {
                    $UserID = $row['id'];
                    $Userimage = $row['image'];
                    $UserName = $row['name'];
                    $UserPrice = $row['price'];
                    $UserEmail = $row['email'];
                    $UserPhone = $row['phone'];
                    $UserService = $row['service'];
                    $UserProperty = $row['property_type'];
                    $UserMessage = $row['message'];
        ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card">
                    <h5 class="card-title">Contractor: <?php echo $UserID; ?></h5>
                    <img src="<?php echo $Userimage?>" width=200 alt="User Image" class="user-image">
                    <p class="card-text">Name: <?php echo $UserName; ?></p>
                    <p class="card-text">Price: <?php echo $UserPrice; ?></p>
                    <p class="card-text">Email: <?php echo $UserEmail; ?></p>
                    <p class="card-text">Service: <?php echo $UserService; ?></p>
                    <p class="card-text">Property Type: <?php echo $UserProperty; ?></p>
                    <p class="card-text">Message: <?php echo $UserMessage; ?></p>
                    <p class="card-text">Phone: <a href="tel:<?php echo $UserPhone; ?>" class="phone-btn"><?php echo $UserPhone; ?></a></p>
                </div>
            </div>
        </div>
        <?php 
                }
            }
        } else {
            echo "No records found.";
        }
        ?>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
   
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-map text-white me-2"></i>My Home</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Epoka University</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+123-123-1234</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@myhome.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; Developed By Erina Vladi, Griselda Rexhmati dhe Valerian Dedaj
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>