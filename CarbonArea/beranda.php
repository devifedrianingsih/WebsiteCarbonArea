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
                <a href="" class="navbar-brand m-0 p-0">
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/slider.jpg" alt="petani1" height="50">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/slider 2.png" alt="petani2" height="50">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="img/sebaranCO2.jpg" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between p-4" style="background-color: green;">
                        <h5 class="text-truncate me-3 mb-0 text-light">Peta Sebaran Kadar CO2</h5>
                        <a class="btn btn-outline-light btn-square border-2 border-white flex-shrink-0" href="peta_sebaran.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="img/adaptasi.jpg" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Adaptasi Pertanian</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="adaptasipertanian.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="img/produksiPertanian.jpg" alt="" height="50">
                    </div>
                    <div class="d-flex align-items-center justify-content-between p-4" style="background-color: green;">
                        <h5 class="text-truncate me-3 mb-0 text-light">Tingkat Produksi Pertanian</h5>
                        <a class="btn btn-square btn-outline-light border-2 border-white flex-shrink-0" href="tingkatproduksi.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Tentang Kami</h6>
                    <h1 class="mb-4" style="color: green;">CarbonArea</h1>
                    <p class="mb-4">Sistem CarbonArea adalah suatu sistem yang dirancang untuk memberikan  solusi atas permasalahan masyarakat yang ingin mendapatkan informasi terkait dengan seberapa baik dan buruk iklim tersebut di beberapa wilayah yang baik dan aman bagi ketahanan pangan. CarbonArea dirancang untuk memudahkan pengguna mengetahui informasi-informasi yang berkaitan dengan pengaruh CO2 terhadap ketahanan pangan. Dapat berupa informasi seperti berita, artikel, review edukatif (disajikan dalam bentuk cerita dan video), dan forum diskusi. Sistem yang dibangun adalah aplikasi  berbasis web.</p>
                    <p class="fw-medium text-secondary"><i class="fa fa-check text-success me-3"></i>Meningkatkan hasil pertanian</p>
                    <p class="fw-medium text-secondary"><i class="fa fa-check text-success me-3"></i>Mengoptimalkan teknik bercocok tanam</p>
                    <p class="fw-medium text-secondary"><i class="fa fa-check text-success me-3"></i>Menghadapi tantangan lingkungan dengan lebih baik.</p>
                    <div class="d-flex align-items-center p-4 mt-5" style="background-color: rgb(54, 114, 54)">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Hubungi Kami</p>
                            <h3 class="m-0 text-white">+6281236548</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/tentang1.jpeg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="img/tentang2.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0" >
        <div class="video wow fadeInUp" data-wow-delay="0.1s"style="background-image: url(img/video.jpg);">
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/YxYvJhEqC98?si=RbhIP4T921hJ3UJ9" data-bs-target="#videoModal">
                <span></span>
            </button>

            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog" >
                    <div class="modal-content rounded-0">
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalLabel">Video Edukasi Pertanian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9" >
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YxYvJhEqC98?si=h9F2vIym6ymCTSBk" title="Video Edukasi CO2" id="video" allowfullscreen allowscriptaccess="always" 
                                allow="autoplay"></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-white mb-4">Video Edukasi Pertanian</h1>
            <h3 class="text-white mb-0">Pertanian Masa Depan</h3>
        </div>
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
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Ahli Tanaman</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/gilang.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Gilang Rahmat</h5>
                                <div class="mb-2">
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                </div>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/putri.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Putri Armizah</h5>
                                <div class="mb-2">
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                </div>
                            </div>
                            <div class="bg-primary" style="color: green;">
                                <a class="btn btn-square mx-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/reza.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Reza Kamil</h5>
                                <div class="mb-2">
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                </div>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/juliana.jpg">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Juliana Putri</h5>
                                <div class="mb-2">
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                    <small class="fa fa-star text-secondary"></small>
                                </div>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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