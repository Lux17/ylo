<?php
include ('../koneksi.php');
session_start();
if(isset($_COOKIE['serkomlsp'])&&$_COOKIE['serkomlsp']=="asjbmbnsugaldsks22"){
    echo "";
    }else{
        session_unset();
        session_destroy(); 
        header("Location:../index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPK Tikom - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/logo_tikom.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/logo_tikom.png" alt="" width="43" height="45" class="d-inline-block align-text-top">
                </div>
                <div class="sidebar-brand-text mx-3">LPK Tikom </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pendaftaran
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="peserta.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Pendaftaran Peserta</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Akun
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="users.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Kelola Akun (Admin)</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                    
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">                               
                                <?php
                                echo $_SESSION['username'];
                                ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pendaftaran Peserta Sertifikasi</h1>
                    <p class="mb-4">Kelola Peserta Sertifikasi BNSP.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Tabel Peserta Sertifikasi</h6>
                        </div>
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <center>
                            <br><h4></h4>
                                           
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Tambah Peserta Sertifikasi
                        </button>
                        </center>
                            <br>
                                                    <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Peserta Sertifikasi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div>
                                                <form method="POST" action="peserta/tambah_peserta.php" enctype="multipart/form-data" >
                                                            <section class="base align-items-center ">

                                                                <div class="row mb-3">
                                                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="nama" autofocus="" required="" />
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                                <div class="col-sm-8">
                                                                <textarea type="text" class="form-control" name="alamat" autofocus="" required="" ></textarea>
                                                                </div>
                                                                </div>
                                                                

                                                                <div class="row mb-3">
                                                                <label class="col-sm-3"> Jenis Kelamin</label>
                                                                <div class="input-group col-sm-8">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis_kelamin" required="" >
                                                                    <option selected value="">Pilih</option> 
                                                                    <option value="Laki-laki">Laki-Laki</option>
                                                                    <option  value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                </div>
                                                                </div>
                                                                </div>



                                                                <div class="row mb-3">
                                                                <label for="sekolah_asal" class="col-sm-3 col-form-label">Sekolah Asal</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="sekolah_asal" autofocus="" required="" />
                                                                </div>
                                                                </div>

                                                            </section>
                                                            
                                                </div>
                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" name ="simpan" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                                                        <br/>

                                                        <table class="table table-hover">

                                                        <thead>
                                                            <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Alamat</th>
                                                            <th scope="col">Jenis Kelamin</th>
                                                            <th scope="col">Sekolah Asal</th>
                                                            <th scope="col">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                                                        $query = "SELECT * FROM tbl_peserta ORDER BY id ASC";
                                                        $result = mysqli_query($kon, $query);
                                                        //mengecek apakah ada error ketika menjalankan query
                                                        if(!$result){
                                                            die ("Query Error: ".mysqli_errno($kon).
                                                            " - ".mysqli_error($kon));
                                                        }

                                                        //buat perulangan untuk element tabel dari data mahasiswa
                                                        $no = 1; //variabel untuk membuat nomor urut
                                                        // hasil query akan dpasswordmpan dalam variabel $data dalam bentuk array
                                                        // kemudian dicetak dengan perulangan while
                                                        while($row = mysqli_fetch_assoc($result))
                                                        {
                                                        ?>
                                                        <tr>
                                                            <td  scope="row"><?php echo $no; ?></td>
                                                            <td  scope="row"><?php echo $row['nama']; ?></td>
                                                            <td  scope="row"><?php echo $row['alamat']; ?></td>
                                                            <td  scope="row"><?php echo $row['jenis_kelamin']; ?></td>
                                                            <td  scope="row"><?php echo $row['sekolah_asal']; ?></td>

                                                            <td  scope="row">
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'];?>">
                                                                Edit
                                                                </button>
                                    
                                            <div class="modal fade" id="exampleModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Peserta Sertifikasi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="peserta/edit_peserta.php" enctype="multipart/form-data" >
                                                
                                                            <section class="base align-items-center ">
                                                            <div>
                                                                
                                                                <input type="hidden" value="<?php echo $row['id']; ?>" name="id" required="" />
                                                                </div>
                                                                <div>
                                                                <div class="row mb-3">
                                                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" value="<?php echo $row['nama']; ?>" name="nama" autofocus="" required="" />
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                                <div class="col-sm-8">
                                                                <textarea type="text" class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" autofocus="" required="" > <?php echo $row['alamat']; ?></textarea>
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label class="col-sm-3"> Jenis Kelamin</label>
                                                                <div class="input-group col-sm-8">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jenis_kelamin" required="" >
                                                                    <option selected value="<?php echo $row['jenis_kelamin']; ?>">Pilih</option> 
                                                                    <option value="Laki-laki">Laki-Laki</option>
                                                                    <option  value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label for="sekolah_asal" class="col-sm-3 col-form-label">Sekolah Asal</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" value="<?php echo $row['sekolah_asal']; ?>" name="sekolah_asal" autofocus="" required="" />
                                                                </div>
                                                                </div>

                                                            </section>
                                                            
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                        <a href="#" data-id="<?php echo $row['id']; ?>" class="hapus-peserta">Hapus</a>

                        </td>
                    </tr>
                        
                    <?php
                        $no++; //untuk nomor urut terus bertambah 1
                    }
                    ?>
                    </tbody>
                    </table>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; LSP Tikom 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
                        </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal HTML -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penghapusan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a id="deleteConfirm" href="#" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" untuk keluar dari sistem.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
  // Ambil elemen link Hapus
  const deleteLinks = document.querySelectorAll('.hapus-peserta');

  deleteLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault(); // Hentikan link default

      // Ambil ID peserta
      const id = this.getAttribute('data-id');

      // Setel href pada tombol di modal
      document.getElementById('deleteConfirm').setAttribute('href', 'peserta/hapus_peserta.php?id=' + id);

      // Tampilkan modal
      const myModal = new bootstrap.Modal(document.getElementById('confirmModal'));
      myModal.show();
    });
  });
});

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>