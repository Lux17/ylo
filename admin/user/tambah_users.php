<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
// cek nim
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
   
    $query = mysqli_query($kon, "SELECT username FROM tbl_users WHERE username = '$username'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../users.php';</script>";
    } else {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        
        
        $query = "INSERT INTO tbl_users (username, password, nama) VALUES ('$username', sha1('$password'), '$nama')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../users.php';</script>";
        }
              
                    
        
    }
};




