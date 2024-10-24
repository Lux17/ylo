<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
// cek nim
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
   
    $query = mysqli_query($kon, "SELECT nama FROM tbl_peserta WHERE nama = '$nama'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../peserta.php';</script>";
    } else {
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
        $sekolah_asal = isset($_POST['sekolah_asal']) ? $_POST['sekolah_asal'] : '';
        
        
        $query = "INSERT INTO tbl_peserta (nama, alamat, jenis_kelamin,sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$sekolah_asal')";
        $result = mysqli_query($kon, $query);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../peserta.php';</script>";
        }
              
                    
        
    }
};




