<?php
include 'koneksi.php';

$nama = 'Luna';
$query = "INSERT INTO pengguna (nama) VALUES ('$nama')";

if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan!';
} else {
    echo 'Gagal menambah data: ' . mysqli_error($conn);
}
?>
