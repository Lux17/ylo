<?php
// Koneksi ke database
include 'koneksi.php'; // Pastikan file koneksi ke database ada dan benar

// Cek apakah data sudah diterima dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Query untuk insert data ke tabel peserta
    $sql = "INSERT INTO tbl_peserta (nama, alamat, jenis_kelamin, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$sekolah_asal')";

    // Eksekusi query
    if (mysqli_query($kon, $sql)) {
        echo "<script>alert('Data berhasil ditambah.');window.location='daftar.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($kon);
    }

    // Tutup koneksi
    mysqli_close($kon);
}
?>
