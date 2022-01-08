<?php

include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM gambar INNER JOIN artikel ON gambar.id_artikel = artikel.id_artikel");

// 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layouts/head.php'; ?>

    <title>Gallery</title>
</head>

<body>
    <!-- header -->
    <header>
        <!-- navbar -->
        <?php include 'layouts/nav.php'; ?>

        <!-- carousel -->
        <div class="banner-about">
            <img src="assets/images/hasil/bg-16.jpg" alt="" srcset="">
        </div>

        <!--  -->
    </header>
    <!-- end header -->

    <!-- main -->
    <main class="main">
        <div class="container">
            <div class="row">
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                    <div class="col-md-4">
                        <figure class="figure">
                            <img src="assets/images/artikel/gambarlain/<?= $data['foto']; ?>" class="figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption text-center"><?= $data['judul'] ?></figcaption>
                        </figure>
                    </div>
                <?php endwhile; ?>
            </div>
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