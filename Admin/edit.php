<?php
require 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_buku WHERE id_buku='$id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_object($query);
}

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $gandre = $_POST['gandre'];

    $sql = "UPDATE tbl_buku SET judul='$judul', penulis='$penulis',penerbit='$penerbit', gandre='$gandre' WHERE id_buku='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location:home.php");
    } else {
        echo 'Data Gagal Ditambahkan' . mysqli_errno($koneksi);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perpustakaan UBG</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <a href="" class="btn btn-primary">Kembali</a>
        <hr>
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" value="<?= $data->judul; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data->penulis; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data->penerbit; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gandre</label>
                <input type="text" class="form-control" id="gandre" name="gandre" value="<?= $data->gandre; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
