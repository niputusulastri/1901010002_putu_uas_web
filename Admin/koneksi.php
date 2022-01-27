<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_perpus');
if (!$koneksi) {
    die('Koneksi Gagal' . mysqli_connect_errno());
}
