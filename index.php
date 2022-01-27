<?php
require 'Admin/koneksi.php';
$sql = "SELECT * FROM tbl_buku";
?>
<!doctype html>
<html lang="en">

<head>
    <?php include 'layout/haed.php' ?>
</head>

<body>
    <?php include 'layout/navbar.php' ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card-header">
                    <h5>Navigation</h5>
                    <div class="container-fluid">
                        <div class="row">
                            <h5>List Buku</h5>
                            <hr>
                            <ul class="list-group list-group-flush">
                                <?php
                                $query = mysqli_query($koneksi, $sql);
                                while ($data = mysqli_fetch_object($query)) {
                                ?>
                                    <li class="list-group-item"><?= $data->judul; ?></li>
                                <?php } ?>
                            </ul>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h2>DAFTAR BUKU</h2>
                <?php
                $query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_object($query)) {
                ?>
                    <div class="card mb-2">
                        <div class="card-header">
                            <a href="#">
                                <h5><?= $data->judul; ?></h5>
                            </a>
                            <p>Nama penulis : <?= $data->penulis; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include 'layout/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>