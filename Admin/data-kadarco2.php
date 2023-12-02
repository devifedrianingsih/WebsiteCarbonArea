<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">CarbonArea</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

      </header>

      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">

      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-collapse">
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
              <a href="login.php" class="nav-item nav-link" style="color: green;"><b>Log Out</b></a> 
          </div>
      </div>
  </nav>
</div>

<div class="container py-5 px-4">
  <header class="text-left">

    <!-- Icon Font Stylesheet -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#co-nav" data-bs-toggle="collapse" href="#">
            <i class=""></i><span>Kadar CO2</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="co-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="input-kadarco2.php">
                <i class="bi bi-circle"></i><span>Input Data Kadar CO2</span>
              </a>
            </li>
            <li>
              <a href="data-kadarco2.php">
                <i class="bi bi-circle"></i><span>Data Kadar CO2</span>
              </a>
            </li>
      </ul>

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#penprod-nav" data-bs-toggle="collapse" href="#">
              <i class=""></i><span>Tingkat Produksi Pertanian</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="penprod-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="input-penprod.php">
                  <i class="bi bi-circle"></i><span>Input Data Tingkat Produksi Pertanian</span>
                </a>
              </li>
              <li>
                <a href="data-penprod.php">
                  <i class="bi bi-circle"></i><span>Data Tingkat Produksi Pertanian</span>
                </a>
              </li>
        </ul>

        <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#adper-nav" data-bs-toggle="collapse" href="#">
                <i class=""></i><span>Adaptasi Pertanian</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="adper-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="input-adper.php">
                    <i class="bi bi-circle"></i><span>Input Data Adaptasi Pertanian</span>
                  </a>
                </li>
                <li>
                  <a href="data-adper.php">
                    <i class="bi bi-circle"></i><span>Data Adaptasi Pertanian</span>
                  </a>
                </li>
          </ul>

          <ul class="sidebar-nav" id="sidebar-nav">         
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#artkl-nav" data-bs-toggle="collapse" href="#">
                <i class=""></i><span>Artikel</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="artkl-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="input-artikel.php">
                    <i class="bi bi-circle"></i><span>Input Data Artikel</span>
                  </a>
                </li>
                <li>
                  <a href="data-artikel.php">
                    <i class="bi bi-circle"></i><span>Data Artikel</span>
                  </a>
                </li>
          </ul>
  </aside>

  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color: white;">Data Kadar CO2</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Kadar CO2</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Kadar CO2 di Pulau Jawa</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Kota</th>
                    <th scope="col">Tanggal Update</th>
                    <th scope="col">Data Kadar CO2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jakarta</td>
                    <td>28 November 2023</td>
                    <td>143</td>
                  </tr>
                  <tr>
                    <td>Bogor</td>
                    <td>28 November 2023</td>
                    <td>87</td>
                  </tr>
                  <tr>
                    <td>Depok</td>
                    <td>28 November 2023</td>
                    <td>124</td>
                  </tr>
                  <tr>
                    <td>Bekasi</td>
                    <td>28 November 2023</td>
                    <td>150</td>
                  </tr>
                  <tr>
                    <td>Cikarang</td>
                    <td>28 November 2023</td>
                    <td>152</td>
                  </tr>
                  <tr>
                    <td>Sukabumi</td>
                    <td>28 November 2023</td>
                    <td>120</td>
                  </tr>
                  <tr>
                    <td>Bandung</td>
                    <td>28 November 2023</td>
                    <td>75</td>
                  </tr>
                  <tr>
                    <td>Surabaya</td>
                    <td>28 November 2023</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>Semarang</td>
                    <td>28 November 2023</td>
                    <td>119</td>
                  </tr>
                  <tr>
                    <td>Yogyakarta</td>
                    <td>28 November 2023</td>
                    <td>87</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>