<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
  $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
  $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
  $sekolah_asal = isset($_POST['sekolah_asal']) ? $_POST['sekolah_asal'] : '';
  
 
  $query  = "UPDATE tbl_peserta SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', sekolah_asal = '$sekolah_asal' ";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../peserta.php';</script>";
  }
              

 