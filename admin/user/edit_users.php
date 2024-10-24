<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $username = isset($_POST['username']) ? $_POST['username'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';

 
 
  $query  = "UPDATE tbl_users SET username = '$username', password = sha1('$password'), nama = '$nama'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../users.php';</script>";
  }
              

 