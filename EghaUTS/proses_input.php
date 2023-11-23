<?php
$koneksi = mysqli_connect("localhost", "root", "", "2106058_egha");

if (!$koneksi) {
    echo "<script>alert('koneksi database gagal')</script>";
}

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$kata_sandi = $_POST['kata_sandi'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nomor_telepon = $_POST['nomor_telepon'];
$pengalaman_kerja = $_POST['pengalaman_kerja'];
$posisi_pekerjaan = $_POST['posisi_pekerjaan'];
$syarat_ketentuan = $_POST['syarat_ketentuan'];

$query = "INSERT INTO pendaftaran_crew VALUES(NULL, '$nama_lengkap', '$email', '$kata_sandi', '$tanggal_lahir', '$nomor_telepon', '$pengalaman_kerja', '$posisi_pekerjaan', '$syarat_ketentuan')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Pendaftaran berhasil')</script>";
} else {
    echo "<script>alert('Error: " . $query . "<br>" . mysqli_error($koneksi) . "')</script>";
}

mysqli_close($koneksi);

echo "<script>window.location='./index.php'</script>";
