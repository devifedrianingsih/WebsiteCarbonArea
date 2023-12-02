<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <title>CarbonArea</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class=" nav-bar" >
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <header>
                <a href="beranda.php" class="navbar-brand m-0 p-0">
                    <h1 style="color: green;">CarbonArea</h1>
                </a>
            </header>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-collapse">
                    <a href="beranda.php" class="nav-item nav-link" style="color: green;">Beranda</a>
                    <a href="artikel.php" class="nav-item nav-link" style="color: green;"> Artikel </a>
                    <a href="konsultasi.php" class="nav-item nav-link" style="color: green;"> Konsultasi </a>
                    </div>
                    <form class="navbar-form navbar-right" >
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" name="search">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                              <i class="glyphicon glyphicon-search"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                    <a href="login.php" class="nav-item nav-link" style="color: green;"><b>Login</b></a> 
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

   <!-- Booking Start -->
   <br><br><br><br><br><br><br>
    <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">
                    <h1 class="mb-4" style="color: green;">Pesan Konsultasi Anda</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Nama" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Pilih Ahli Tanaman</option>
                                    <option value="1">Gilang</option>
                                    <option value="2">Putri</option>
                                    <option value="3">Reza</option>
                                    <option value="3">Julia</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Tanggal Konsultasi" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Keluhan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" style="background-color: green;">Konsultasi Sekarang</button>
                                <a href="konsultasi.php"></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->

   <!-- Testimonial Start -->
   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            <h1 class="mb-5">Apa Kata Mereka..</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">Fitur konsultasi sangat membantu saya terhadap perubahan iklim di jakarta, terimakasih CarbonArea!</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/hamzah.jpg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Hamzah</h5>
                <p class="m-0">Petani Cabai</p>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">Wah.. dari website ini saya dapat mengetahui daerah mana pemasok bawang terbaik!</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/hanafi.jpg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Hanafi</h5>
                <p class="m-0">Distributor Bawang</p>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">Melalui website ini, saya dapat membagikan ilmu saya kepada petani. Good Job CarbonArea!</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/putri.jpg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Putri</h5>
                <p class="m-0">Petani</p>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-text bg-light text-center p-4 mb-4">
                    <p class="mb-0">Dengan fitur konsultasi di aplikasi ini dapat membantu semua permasalahan saya dengan solusi terbaik yang diberikan ahli tanaman. Terimakasih CarbonArea!</p>
                </div>
                <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/rahmah.jpg" style="width: 80px; height: 80px;">
                <div class="mb-2">
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                    <small class="fa fa-star text-secondary"></small>
                </div>
                <h5 class="mb-1">Rahmah</h5>
                <p class="m-0">Petani</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: green;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bogor, Indonesia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281234568</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>powerpuff@apps.ipb.ac.id</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Opening Hours</h4>
                <h6 class="text-light">Monday - Friday:</h6>
                <p class="mb-4">09.00 AM - 09.00 PM</p>
                <h6 class="text-light">Saturday - Sunday:</h6>
                <p class="mb-0">09.00 AM - 12.00 PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p>Masukkan E-mail anda untuk melakukan Sign-Up</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">CarbonArea</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square rounded-0 back-to-top" ><i class="bi bi-arrow-up" ></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>