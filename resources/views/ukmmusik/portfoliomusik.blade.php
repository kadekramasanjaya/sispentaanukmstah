<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DASHBOARD - UKM MUSIK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('ukmmusik/') }}/assets/img/ukmmusik.png" rel="icon">
    <link href="{{ asset('ukmmusik/') }}/assets/img/ukmmusik.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('ukmmusik/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('ukmmusik/') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('ukmmusik/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('ukmmusik/') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('ukmmusik/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('ukmmusik/') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard/') }}/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('ukmmusik/') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                </ul>
            </nav><!-- .nav-menu -->
            <a href="/dashboardukmmusik" class="btn btn-primary">KEMBALI</a>
        </div>
    </header><!-- End Header -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>UKM MUSIK STAH N MPU KUTURAN</h2>
                <p>DOKUMENTASI</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php $no = 1; ?>
                @foreach ($dokumentasiukmmusik as $data)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ url('foto_musik/dokumentasi/' . $data->foto) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $no++ }}</h4>
                            <h4>{{ $data->keterangan }}</h4>
                            <a href="{{ url('foto_musik/dokumentasi/' . $data->foto) }} " width="80px"
                                data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="/dokumentasiukmmusik" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section><!-- End Portfolio Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SISPENTAN</span></strong>. UKM STAH N MPU KUTURAN
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('ukmmusik/') }}/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('ukmmusik/') }}/assets/js/main.js"></script>

</body>

</html>
