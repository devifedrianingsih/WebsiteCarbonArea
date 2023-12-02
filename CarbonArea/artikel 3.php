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


    <!-- Topbar Start -->
    <div class="container-fluid" style="background-color: green";>
        <div class="row align-items-center top-bar">
            <div style="text-align: center;">
                <a href="artikel.php" class="navbar-brand m-0 p-0">
                    <h1 class="display-3 text-green-m-0" style="color: white;" >Artikel</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


      <!-- Navbar Start -->
      <div class=>
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="artikel.php" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 style="color: green;" >Artikel</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-collapse">
                    <a href="beranda.php" class="nav-item nav-link" style="color: green;"><b>Beranda</b></a>
                    <a href="artikel.php" class="nav-item nav-link" style="color: green;"><b>Artikel</b></a>
                    <a href="konsultasi.php" class="nav-item nav-link active" style="color: green;"><b>Konsultasi</b></a>
                </div>
            <form>
                <input type="text" placeholder="Search...">
            </form>
            <div class="navbar" >
                <a href="login.php" class="nav-item nav-link" style="color: green;"> <b>Login</b> </a> 
            </div>
        </nav>
    </div>
    <br>
    <!-- Navbar End -->
  
    <div class="text" style="padding-left: 3cm; font-variant: ;">
        <h2 style="color: green; text-decoration-line: underline;"><a href="artikel.php" style="color: green;">Artikel Terpilih</a></h2>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden" style="height: inherit;">
                        <img class="img-fluid w-100 h-100" src="img/upaya.jpg" alt=""><a href="artikel1.php"></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4 ">
                        <h5 class="me-3 mb-0">Upaya Penanganan Ketahanan Pangan Indonesia</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-light flex-shrink-0" href="artikel1.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="artikel bg-light px-4 py-1">
                        <p>Laporan GFSI dibuat berdasarkan empat aspek penilaian, yakni keterjangkauan, ketersediaan, kualitas dan keamanan, serta sumber daya.Untuk variabel pertama, skor yang didapat Indonesia adalah 55,2 (peringkat 63).</p>
                        <a href="artikel1.php">Read More...</a>
                            <p class="author"> Pembangunan 15/01/2020, 04:46 PM
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="img/artikel2b.jpg" alt="Gambar" href="artikel2.php">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="me-3 mb-0">Antisipasi Kemarau, Kementan Susun Strategi Ketahanan Pangan</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-light flex-shrink-0" href="artikel2.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="artikel bg-light px-4 py-1">
                        <p>Kementerian Pertanian (Kementan) akan mengantisipasi musim kemarau tahun ini melalui beberapa upaya. Melihat Covid-19 sudah menjadi pandemik global, Indonesia harus menyusun strategi ketahanan pangan, agar jangan sampai terjadi kelangkaan sebagai dampak covid.
                             <a href="artikel2.php"> Read More...</a></p>
                        <p class="author">Gilar Ramdhani 19 Apr 2020, 12:07 WIB</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="img/3.jpg" alt="" href="artikel3.php">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class=" me-3 mb-0">Ketahanan Pangan Untuk Kesejahteraan Masyarakat Dan Petani</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-light flex-shrink-0" href="artikel3.php"><i class="fa fa-arrow-right"></i></a>
                    </div>

                    <div class="artikel bg-light px-4 py-1">
                        <p>Kementerian Pertanian (Kementan) akan mengantisipasi musim kemarau tahun ini melalui beberapa upaya. Melihat Covid-19 sudah menjadi pandemik global, Indonesia harus menyusun strategi ketahanan pangan, agar jangan sampai terjadi kelangkaan sebagai dampak covid. 
                            <a href="artikel3.php"> Read More...</a></p>
                        <p class="author">Kemenkeu 14 September 2022 11:10 AM</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- 2 -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/4.jpg" alt="" href="artikel4.php">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4 ">
                    <h5 class=" me-3 mb-0">Ragam Upaya Pemprov DKI Jakarta Jaga Ketahanan Pangan dan Inflasi</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-light flex-shrink-0" href="artikel4.php"><i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="artikel bg-light px-4 py-1">
                    <p style="font-size: medium;">Laporan GFSI dibuat berdasarkan empat aspek penilaian, yakni keterjangkauan, ketersediaan, kualitas dan keamanan, serta sumber daya.Untuk variabel pertama, skor yang didapat Indonesia adalah 55,2 (peringkat 63).</p>
                    <a href="artikel3.php">Read More...</a>
                    <p class="author">Pradipta Pandu 30 Oktober 2021 19:14 WIB</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/5.png" alt="" href="artikel5.php">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="me-3 mb-0">Antisipasi Kemarau, Kementan Susun Strategi Ketahanan Pangan</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-light flex-shrink-0" href="artikel5.php"><i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="artikel bg-light px-4 py-1">
                    <p>Kementerian Pertanian (Kementan) akan mengantisipasi musim kemarau tahun ini melalui beberapa upaya. Melihat Covid-19 sudah menjadi pandemik global, Indonesia harus menyusun strategi ketahanan pangan, agar jangan sampai terjadi kelangkaan sebagai dampak covid.
                         <a href="artikel5.php"> Read More...</a></p>
                    <p class="author">Fai 18 Juli 2023</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/6.jpg" alt="" href="artikel6.php">
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="me-3 mb-0">Ketahanan Pangan Untuk Kesejahteraan Masyarakat Dan Petani</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-light flex-shrink-0" href="artikel6.php"><i class="fa fa-arrow-right"></i></a>
                </div>

                <div class="artikel bg-light px-4 py-1">
                    <p>Kementerian Pertanian (Kementan) akan mengantisipasi musim kemarau tahun ini melalui beberapa upaya. Melihat Covid-19 sudah menjadi pandemik global, Indonesia harus menyusun strategi ketahanan pangan, agar jangan sampai terjadi kelangkaan sebagai dampak covid.
                         <a href="artikel6.php"> Read More...</a></p>
                    <p class="author">Author Artikel 1</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--pagination-->
<div class="container mt-3">              
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="artikel.php">1</a></li>
      <li class="page-item"><a class="page-link" href="artikel-2.php;">2</a></li>
      <li class="page-item"><a class="page-link" href="artikel 3.php;">3</a></li>
    </ul>
  </div>
  
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


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