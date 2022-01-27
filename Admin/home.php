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
        <a href="tambah.php" class="btn btn-outline-primary">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">JUDUL BUKU</th>
                    <th scope="col">PENULIS</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">GANDRE</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'koneksi.php';
                $sql = "SELECT * FROM tbl_buku";
                $query = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_object($query)) {
                ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $data->judul; ?></td>
                        <td><?= $data->penulis; ?></td>
                        <td><?= $data->penerbit; ?></td>
                        <td><?= $data->gandre; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $data->id_buku; ?>" class=" btn btn-warning mr-1">Edit</a>
                            <a href="hapus.php?id=<?= $data->id_buku; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
