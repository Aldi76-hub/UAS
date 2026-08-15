<?php
session_start();
if(!isset($_SESSION['nama']) || $_SESSION['nama'] !== '@admin'){
  header('location: ../../index.php');
}
include('../../koneksi/config.php');
$id = $_GET['id'];
$judul = mysqli_query($connection,"SELECT * FROM konten WHERE id_konten = '$id'");
$res = $judul->fetch_assoc();
?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Konten</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <a href="index.php" class="btn btn-secondary">KEMBALI</a>
              TAMBAH KONTEN
            </div>
            <div class="card-body">
              <form action="proses_update.php" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id_konten" value="<?= $res['id_konten'] ?>">
                  <label>JUDUL</label>
                  <input required type="text" name="judul" value="<?= $res['judul'] ?>" placeholder="Masukkan judul" class="form-control">
                </div>
                <div class="form-group">
                    <label>KATEGORI</label>
                    <select name="kategori" id="" class="form-control">
                        <?php
                        
                        $query = mysqli_query($connection,"SELECT * FROM kategori");
                        while($row = mysqli_fetch_array($query)) {
                        ?>
                        <option <?= $res['id_kategori'] == $row['id_kategori'] ? 'selected' : '' ?> value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
