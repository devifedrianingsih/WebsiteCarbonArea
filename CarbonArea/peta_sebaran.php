<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarbonArea</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom CSS for marker styling -->
    <style>
        #map {
            height: 500px;
        }

        .custom-marker-blue {
            background-color: blue;
        }

        .custom-marker-green {
            background-color: green;
        }

        .custom-marker-yellow {
            background-color: yellow;
        }

        .custom-marker-orange {
            background-color: orange;
        }

        .custom-marker-red {
            background-color: red;
        }

        .custom-marker-purple {
            background-color: rgb(218, 58, 218);
        }

        .custom-marker-darkmagenta {
            background-color: darkmagenta;
        }

        .custom-marker {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

         /* Styles for the legend */
         .legend {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 15px;
            justify-content: center
        }

        .legend-color-box {
            width: 20px;
            height: 20px;
            margin-right: 5px;
            border: 1px solid #000;
        }

        /* CO2 level-specific styles */
        .legend-item.green .legend-color-box {
            background-color: green;
        }
        .legend-item.yellow .legend-color-box {
            background-color: yellow;
        }
        .legend-item.orange .legend-color-box {
            background-color: orange;
        }
        .legend-item.red .legend-color-box {
            background-color: red;
        }
        .legend-item.purple .legend-color-box {
            background-color: rgb(218, 58, 218);
        }
        .legend-item.darkmagenta .legend-color-box {
            background-color: darkmagenta;
        }
    </style>
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
    <div class=" nav-bar">
        <nav class="navbar-expand-lg navbar-light bg-white ">
            <header>
                <a href="peta_sebaran.html" class="navbar-brand m-0 p-0">
                    <h1 style="color: green; padding-left: 1cm;"> Peta Sebaran Kadar CO2 di Pulau Jawa </h1>
                </a>
            </header>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-collapse">
                    <a href="beranda.html" class="nav-item nav-link" style="color: green;">Beranda</a>
                    <a href="artikel.html" class="nav-item nav-link" style="color: green;"> Artikel </a>
                    <a href="konsultasi.html" class="nav-item nav-link" style="color: green;"> Konsultasi </a>
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
                    <a href="login.html" class="nav-item nav-link" style="color: green;"><b>Login</b></a> 
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <br>
    <!-- Create a div to hold the map -->
    <div id="map"></div>

    <script>
        var map = L.map('map').setView([-7.6145, 110.7126], 8); // Use the coordinates for the center of Java

        // Add a base map layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Create a marker for the initial location
        var marker = L.marker([-6.5892505, 106.8061148]).addTo(map).bindPopup('Lokasi: Sekolah Vokasi IPB');

        // Function to update the marker with the current location
        function updateMarker(location) {
            marker.setLatLng(location);
            marker.bindPopup('Lokasi Anda saat ini');
        }

        // Get the user's current location using the Geolocation API
        function getCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var currentLocation = L.latLng(position.coords.latitude, position.coords.longitude);
                    updateMarker(currentLocation);
                    map.panTo(currentLocation);
                }, function (error) {
                    console.error('Error getting current location:', error);
                });
            } else {
                console.error('Geolocation is not supported by this browser.');
            }
        }

        // Call the function to get the current location when the page loads
        getCurrentLocation();

        // Add distribution points for each city with CO2 levels (mock data)
        var cities = [
            { name: 'Jakarta', coordinates: [-6.2088, 106.8456], co2Level: 148 },
            { name: 'Surabaya', coordinates: [-7.2575, 112.7521], co2Level: 162 },
            { name: 'Serang', coordinates: [-6.12009, 106.150299], co2Level: 84 },
            { name: 'Semarang', coordinates: [-6.9666667, 110.4166667], co2Level: 88 },
            { name: 'Malang', coordinates: [-7.9786453, 112.631783], co2Level: 68 },
            { name: 'Pasarkemis', coordinates: [-6.1611551, 106.5572155], co2Level: 139 },
            { name: 'Cileungsir', coordinates: [-7.2169801, 108.4850751], co2Level: 173 },
            { name: 'Bekasi', coordinates: [-6.2849775,106.970127], co2Level: 134 },
            { name: 'Bandung', coordinates: [-6.9034495,107.6431575], co2Level: 156 },
            { name: 'Bogor', coordinates: [-6.5951935,106.791892], co2Level: 59 },
            { name: 'Sentul', coordinates: [-6.5183491,106.8306793], co2Level: 17 },
            { name: 'Sleman', coordinates: [-7.7161647,110.3251032], co2Level: 61 },
            { name: 'Cirebon', coordinates: [-6.7275988,108.5439032], co2Level: 160 },
            { name: 'Yogyakarta', coordinates: [-7.8032485,110.3336451], co2Level: 55 },
            { name: 'Purwakarta', coordinates: [-6.5414144,107.4138444], co2Level: 161 },
            { name: 'Tasikmalaya', coordinates: [-7.3599745,108.150351], co2Level: 56 },
            { name: 'Sukabumi', coordinates: [-6.9370121,106.8761101], co2Level: 59 },
            { name: 'Cianjur', coordinates: [-6.8223224,107.1170858], co2Level: 68 },
            { name: 'Sumedang', coordinates: [-6.8535952,107.8667726], co2Level: 69 },
            { name: 'Banjar', coordinates: [-7.3724807,108.4950044], co2Level: 60 },
            { name: 'Brebes', coordinates: [-6.8651669,108.9659996], co2Level: 65 },
            { name: 'Purwokerto', coordinates: [-7.430274,109.1932237], co2Level: 60 },
            { name: 'Banjarnegara', coordinates: [-7.4427199,109.5456703], co2Level: 62 },
            { name: 'Salatiga', coordinates: [-7.3262517,110.4558856], co2Level: 66 },
            { name: 'Surakarta', coordinates: [-7.5592071,110.7776122], co2Level: 56 },
            { name: 'Ngawi', coordinates: [-7.4190974,111.3610479], co2Level: 60 },
            { name: 'Blora', coordinates: [-6.9611527,111.4007443], co2Level: 65 },
            { name: 'Wonogiri', coordinates: [-7.7999365,110.7943245], co2Level: 55 },
            { name: 'Madiun', coordinates: [-7.63006,111.4868515], co2Level: 58 },
            { name: 'Tulungagung', coordinates: [-8.1486394,111.7940138], co2Level: 53 },
            { name: 'Tuban', coordinates: [-6.8934517,112.0222673], co2Level: 60 },
            { name: 'Kediri', coordinates: [-7.8424141,111.9337855], co2Level: 57 },
            { name: 'Banyuwangi', coordinates: [-8.2169175,114.2882089], co2Level: 43 },
            { name: 'Jember', coordinates: [-8.1773868,113.688534], co2Level: 44 },
            { name: 'Lumajang', coordinates: [-8.1303649,113.2116731], co2Level: 48 },
            { name: 'Probolinggo', coordinates: [-7.77231,113.1602758], co2Level: 55 },
            { name: 'Situbondo', coordinates: [-7.7170216,113.9566946], co2Level: 41 },
            { name: 'Pekalongan', coordinates: [-6.8959402,109.6333036], co2Level: 62 },
            { name: 'Kebumen', coordinates: [-7.6784548,109.6590282], co2Level: 60 },
            { name: 'Cilacap', coordinates: [-7.7065121,108.991295], co2Level: 55 },
            { name: 'Jepara', coordinates: [-6.5809461,110.6250927], co2Level: 68 },
            { name: 'Cilegon', coordinates: [-6.0256813,106.0476997], co2Level: 64 },
            { name: 'Pandeglang', coordinates: [-6.309473,106.1068617], co2Level: 85 },
            { name: 'Purwodadi', coordinates: [-7.0889121,110.8864127], co2Level: 71 },
            { name: 'Pelabuhanratu', coordinates: [-6.9846571,106.5430166], co2Level: 58 },

        ];

        cities.forEach(function (city) {
            // Determine marker class based on CO2 levels
            var markerClass = '';
            if (city.co2Level >= 0 && city.co2Level <= 50) {
                markerClass = 'custom-marker-green';
            } else if (city.co2Level >= 51 && city.co2Level <= 100) {
                markerClass = 'custom-marker-yellow';
            } else if (city.co2Level >= 101 && city.co2Level <= 150) {
                markerClass = 'custom-marker-orange';
            } else if (city.co2Level >= 151 && city.co2Level <= 200) {
                markerClass = 'custom-marker-red';
            } else if (city.co2Level >= 201 && city.co2Level <= 300) {
                markerClass = 'custom-marker-purple';
            } else if (city.co2Level > 301) {
                markerClass = 'custom-marker-darkmagenta';
            }

            // Create a marker for each city with custom styling
            var marker = L.marker(city.coordinates, {
                icon: L.divIcon({
                    className: 'custom-marker ' + markerClass,
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                })
            }).addTo(map);

            // Add a popup with city information
            marker.bindPopup('<b>' + city.name + '</b><br>CO2 Level: ' + city.co2Level + ' US AQI Level');
        });
    </script>
    <p style="text-align: right; font-size: smaller;"">Sumber: https://www.iqair.com/id/</p>
    <br>   
    <h5 style="color: green;text-align: center;"> Keterangan Warna</h5>    

    <!-- Legend for CO2 levels -->
    <div class="legend">
        <div class="legend-item green">
            <div class="legend-color-box" style="background-color: green;"></div>
            <div>Baik (0-50)</div>
        </div>
        <div class="legend-item yellow">
            <div class="legend-color-box" style="background-color: yellow;"></div>
            <div>Sedang (51-100)</div>
        </div>
        <div class="legend-item orange">
            <div class="legend-color-box" style="background-color: orange;"></div>
            <div>Tidak sehat bagi kelompok sensitif (101-150)</div>
        </div>
        <div class="legend-item red">
            <div class="legend-color-box" style="background-color: red;"></div>
            <div>Tidak sehat (151-200)</div>
        </div>
        <div class="legend-item purple">
            <div class="legend-color-box" style="background-color: rgb(218, 58, 218);"></div>
            <div>Sangat tidak sehat (201-300)</div>
        </div>
        <div class="legend-item darkmagenta">
            <div class="legend-color-box" style="background-color: darkmagenta;"></div>
            <div>Berbahaya (>300)</div>
        </div>
    </div>

    <br><br><br>
    <h1  style="color: green; text-align: center  ;"> Grafik Sebaran Kadar CO2 di Pulau Jawa</h1>
    <p style="text-align: center  ;"> Pertanggal 28 November 2023</p>

    <!-- Add a canvas element for the line chart -->
    <canvas id="co2Chart" width="600" height="300"></canvas>
    <script>
        // Your existing code for creating the Leaflet map
    
        // Sort cities based on CO2 levels in ascending order
        cities.sort((a, b) => a.name - b.name);
    
        // Extract CO2 levels and city names for chart data
        var co2Levels = cities.map(city => city.co2Level);
        var cityNames = cities.map(city => city.name);
    
        // Create a line chart
        var ctx = document.getElementById('co2Chart').getContext('2d');
        var co2Chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: cityNames,
                datasets: [{
                    label: 'CO2 Levels',
                    borderColor: 'green',
                    backgroundColor: 'rgba(0, 0, 255, 0.1)',
                    data: co2Levels,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Kadar CO2 (US AQI Level)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Kota'
                        }
                    }
                }
            }
        });
    
        // Add click event listener to update chart data on marker click
        cities.forEach(function (city, index) {
            var marker = L.marker(city.coordinates, {
                icon: L.divIcon({
                    className: 'custom-marker ' + markerClass,
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                })
            }).addTo(map);
    
            marker.bindPopup('<b>' + city.name + '</b><br>CO2 Level: ' + city.co2Level + ' US AQI Level');
            
            marker.on('click', function () {
                // Highlight the selected city on the chart
                co2Chart.data.datasets[0].data = co2Levels;
                co2Chart.data.labels = cityNames;
                co2Chart.data.datasets[0].backgroundColor = 'rgba(0, 0, 255, 0.1)';
                co2Chart.data.datasets[0].borderColor = 'green';
                co2Chart.data.datasets[0].backgroundColor[index] = 'rgba(255, 0, 0, 0.5)';
                co2Chart.data.datasets[0].borderColor[index] = 'red';
                co2Chart.update();
            });
        });
    </script>
    <p style="text-align: right; font-size: smaller;"">Sumber: https://www.iqair.com/id/</p>

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