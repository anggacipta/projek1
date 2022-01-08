<?php

include 'koneksi.php';

// $query = mysqli_query($koneksi, "SELECT * FROM artikel");

$query2 = mysqli_query($koneksi, "SELECT * FROM gambar INNER JOIN artikel ON gambar.id_artikel = artikel.id_artikel");

$data2 = mysqli_fetch_assoc($query2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/head.php'; ?>
    <!-- css main -->
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- js -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->

    <title>Destination</title>
</head>

<body>
    <!-- header -->
    <header>
        <!-- navbar -->
        <?php include 'layouts/nav.php'; ?>

        <!-- carousel -->
        <!-- <div class="banner-destinasi">
            <img src="assets/images/hero-bg.jpg" alt="" srcset="">
        </div> -->

        <!--  -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item layer-destinasi banner-destinasi active">
                    <img src="assets/images/hasil/bg-18.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item layer-destinasi banner-destinasi">
                    <img src="assets/images/hasil/bg-8.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item layer-destinasi banner-destinasi">
                    <img src="assets/images/hasil/bg-6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- end header -->

    <!-- main -->
    <main class="main">
        <div class="container">
            <section class="satu">
                <div class="input-group box-input">
                    <span class="input-group-text input-group-icon" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control form-cari" placeholder="cari artikel..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </section>

            <!--  -->
            <section class="empat">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <?php

                            if (isset($_POST['cari'])) {
                                # code...
                                $data = mysqli_query($koneksi, "SELECT * FROM artikel WHERE judul LIKE '%" . $_POST['cari'] . "%'  ");
                                $jumlah_data = mysqli_num_rows($data);
                            } else {
                                # code...
                                $data = mysqli_query($koneksi, "SELECT * FROM artikel");
                            }

                            while ($ambil = mysqli_fetch_assoc($data)) :
                                $preview_sebagian = substr($ambil['preview'], 0, 100);

                            ?>
                                <div class="col-md-6">
                                    <a href="single-destinasi.php?id=<?= $ambil['id_artikel']; ?>" style="text-decoration: none; color: #000;">
                                        <div class="card mb-3 card-article">
                                            <img src="assets/images/artikel/<?= $ambil['gambar']; ?>" class="card-img-top" alt="..." style="height: 250px;">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $ambil['judul']; ?></h5>
                                                <div class="card-text">
                                                    <p class="text-muted mb-3"><?= $preview_sebagian; ?>...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php while ($h = mysqli_fetch_assoc($query2)) : ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner-menu mb-4 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                                        <img src="assets/images/artikel/gambarlain/<?= $h['foto']; ?>" class="figure-img img-fluid rounded mb-4" alt="...">
                                    <?php
                                endwhile;
                                    ?>
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

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('nav');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
</body>

</html>

<!-- w => 720 , h => 480 -->

<!-- w => 270 , h => 180 -->