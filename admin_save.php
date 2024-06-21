<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $save = "INSERT INTO tb_daftar SET username='$username', password='$password'";
    $result = mysqli_query($koneksi, $save);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan'); window.location.href='datauser.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan'); window.location.href='datauser.php';</script>";
    }
}
?>
