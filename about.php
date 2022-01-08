<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/head.php'; ?>

    <title>Beranda</title>

    <style>
        body {
            background: #eee;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <!-- navbar -->
        <?php include 'layouts/nav.php'; ?>

        <!-- carousel -->
        <div class="banner-about">
            <img src="assets/images/banner-about/hasil/banner-1.jpg" alt="" srcset="">
        </div>

        <!--  -->
    </header>
    <!-- end header -->

    <!-- main -->
    <main class="main">
        <div class="container">
            <section class="satu">
                <div class="row justify-content-center">
                    <div class="sub-title">
                        <h4> Tentang <span class="sub"> Kami</span></h4>
                    </div>
                    <div class="col-md-10">
                        <p class="text-center">Budaya Kita merupakan website berupa artikel yang menjelaskan tentang budaya dan wisata yang ada di Indonesia. Website ini dikerjakan oleh kami yang berasal dari sekolah <span> <a href="https://goo.gl/maps/BxyemUtopnKXexXb7" class="text-decoration-none fw-bold">SMKN 2 Kota Mojokerto.</a> </span> Kami merasa puas apabila pembaca dapat memberikan masukan atau kritik buat perkembangan website tersebut kami selaku pembuat mengucapkan terima kasih.</p>
                    </div>
                </div>
            </section>
            <section class="dua">
                <div class="sub-title">
                    <h4> Profil <span class="sub"> Tim</span></h4>
                </div>

                <!-- card-profile -->
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-about">
                            <div class="row justify-content-center">
                                <div class="col-md-2">
                                    <div class="card-image-profile">
                                        <img src="assets/images/human/angga.jpeg" class="rounded-circle" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-md-10 card-profile-name">
                                    <div class="card-profile-singgle">
                                        <div class="card-text-about">
                                            <div class="card-name">
                                                <h4 class="">Angga Cipta Pranata</h4>
                                            </div>
                                            <div class="card-text-paragraf">
                                                <p class="text-muted">Programer</p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <ul class="nav nav-icon-profile">
                                            <li class="nav-item item-icon">
                                                <a class="nav-link" href="#">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item item-icon ms-3">
                                                <a class="nav-link" href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item item-icon ms-3">
                                                <a href="" class="nav-link">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-about">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card-image-profile">
                                        <img src="assets/images/human/ebit.jpg" class="rounded-circle" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-md-10 card-profile-name">
                                    <div class="card-profile-singgle">
                                        <div class="card-text-about">
                                            <div class="card-name">
                                                <h4 class="">Ebit Gunawan</h4>
                                            </div>
                                            <div class="card-text-paragraf">
                                                <p class="text-muted">Programer</p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <ul class="nav nav-icon-profile">
                                            <li class="nav-item item-icon">
                                                <a class="nav-link" href="#">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item item-icon ms-3">
                                                <a class="nav-link" href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item item-icon ms-3">
                                                <a href="" class="nav-link">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-about">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card-image-profile">
                                        <img src="assets/images/human/zidan.jpeg" class="rounded-circle" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-md-10 card-profile-name">
                                    <div class="card-profile-singgle">
                                        <div class="card-text-about">
                                            <div class="card-name">
                                                <h4 class="">M. Zidan Amirulloh</h4>
                                            </div>
                                            <div class="card-text-paragraf">
                                                <p class="text-muted">Programer</p>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <ul class="nav nav-icon-profile">
                                            <li class="nav-item item-icon">
                                                <a class="nav-link" href="#">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item item-icon ms-3">
                                                <a class="nav-link" href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item item-icon ms-3">
                                                <a href="" class="nav-link">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </main>
    <!-- end main -->

    <!-- footer -->
    <?php include 'layouts/footer.php'; ?>

    <!-- main js -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('nav');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
</body>

</html>

<!-- w => 720 , h => 480 -->