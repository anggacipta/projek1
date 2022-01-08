<?php
include '../koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php?gagal=1");
  exit;
}
$id = $_GET['id'];
$cari = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$id'");
$data = mysqli_fetch_assoc($cari);
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Budaya Kita</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fontawesome-free-5.15.4-web/css/all.min.css">
  <!--Bootstrap-->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Icon -->
  <link rel="icon" href="../assets/images/iconbudayakita.png">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    nav ul li a.nav-link {
      font-size: 16px;
    }

    table tr {
      vertical-align: middle;
    }

    div.form-group label {
      font-size: 16px;
      font-weight: bold;
    }

    button.btn-success {
      margin-left: 10px;
    }

    main div h1.h1 {
      float: left;
    }

    div.form-group i.info {
      font-size: 13px;
      color: red;
    }

    div.footer {
      position: fixed;
      bottom: 0;
      --bs-bg-opacity: 1;
      background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity));
      border-top: solid 1px #ccc;
    }

    div.form-group i.info {
      font-size: 13px;
      color: red;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center ml-0" href="#"><img src="../assets/images/logobudayakita.png" width="160"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark" style="background-color: rgba(255, 255, 255, .1);" readonly>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="logout.php"><i class="fas fa-home me-2"></i>Log out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <?php
      include 'layout/sidebar.php';
      ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2 class="h2"><i class="fas fa-newspaper me-1"></i> Detail Artikel</h2>
          <h4><i class="fas fa-plane me-1"></i> Wisata</h4>
        </div>
        <div class="container mb-5">
          <form>
            <div class="form-group">
              <label for="judul">Judul Artikel</label>
              <input type="text" class="form-control mt-1" name="judul" id="judul" value="<?= $data['judul'] ?>" readonly>
            </div>
            <div class="form-group mt-2">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control mt-1" name="kategori" id="kategori" value="<?= $data['kategori'] ?>" readonly>
            </div>
            <div class="form-group mt-2">
              <label for="asal">Asal</label>
              <input type="text" class="form-control mt-1" name="asal" id="asal" value="<?= $data['asal'] ?>" readonly>
            </div>
            <div class="form-group mt-2">
              <label for="gambar">Gambar</label><br>
              <a class="MagicZoom" href="../assets/images/artikel/<?= $data['gambar'] ?>" rel="zoom-id:zoom;opacity-reverse:true;"><img src="../assets/images/artikel/<?= $data['gambar'] ?>" width="200" height="145" class="mt-1"></a><br>
              <i class="info">*Klik gambar untuk melihat lebih detail.</i><br>
            </div>
            <div class="form-group mt-2">
              <label for="penulis">Penulis</label>
              <input type="text" class="form-control mt-1" name="penulis" id="penulis" value="<?= $data['penulis'] ?>" readonly>
            </div>
            <div class="form-group mt-2">
              <label for="isi" class="mb-1">Isi Artikel</label><br>
              <textarea class="ckeditor" name="isi" id="isi" readonly><?= $data['isi'] ?></textarea>
            </div>
            <div class="form-group mt-3">
              <label for="link">Link Google Maps</label>
              <textarea name="link" id="link" class="form-control mt-1" readonly><?= $data['link'] ?></textarea>
            </div>
            <a href="wisata.php" class="btn btn-danger mt-4 mb-5"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
          </form>
        </div>
      </main>
      <?php
      include 'layout/footer.php';
      ?>
    </div>
  </div>
  <script type="text/javascript" src="../assets/js/dashboard.js"></script>
  <!-- JQuery -->
  <script src="../assets/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/sweetalert/sweetalert2.all.min.js"></script>
  <!-- Editor -->
  <script type="text/javascript" src="../assets/texteditor/ckeditor.js"></script>
  <script type="text/javascript">
  </script>
</body>

</html>