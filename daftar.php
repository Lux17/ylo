<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="assets/img/logo_tikom.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <title>Pendaftaran Sertifikasi - LPK TIKOM</title>

    <style>
      body {
        background-color: #218bb5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }
      .card {
        max-width: 500px;
        width: 100%;
        border-radius: 10px;
      }
      .card-title {
        text-align: center;
        font-weight: bold;
      }
      .form-group {
        margin-bottom: 1rem;
      }
      .form-label {
        text-align: right;
        font-weight: bold;
      }
    </style>
  </head>
  <body>

    <!-- Form Container -->
    <div class="card shadow-sm">
      <div class="card-body">
        <h1 class="card-title text-primary">Form Pendaftaran Sertifikasi</h1>
        <p class="card-text text-primary text-center">Silahkan isi data diri Anda untuk daftar sertifikasi.</p>

        <!-- Form Pendaftaran -->
        <form method="POST" action="tambah_peserta2.php" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="alamat" required></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <select class="form-select" name="jenis_kelamin" required>
                <option selected value="">Pilih</option>
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="sekolah_asal" class="col-sm-3 col-form-label">Sekolah Asal</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="sekolah_asal" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/assets/js/sb-admin-2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
