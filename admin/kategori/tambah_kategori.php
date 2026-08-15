<?php
session_start();
if(!isset($_SESSION['nama']) || $_SESSION['nama'] !== '@admin'){
  header('location: ../../index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Kategori</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            
            <div class="card-header">
              <a href="../view_konten/index.php" class="btn btn-secondary">KEMBALI</a>
              TAMBAH KATEGORI
            </div>
            <div class="card-body">
              <form action="add.php" method="POST">
                 <div class="form-group">
                  <label>GAMBAR</label>
                  <input required type="text" name="gambar" placeholder="Masukkan gambar" class="form-control">
                </div>
                <div class="form-group">
                  <label>JUDUL</label>
                  <input required type="text" name="judul" placeholder="Masukkan judul" class="form-control">
                </div>
                <div class="form-group">
                  <label>NAMA KATEGORI</label>
                  <input required type="text" name="kategori" placeholder="Masukkan nama kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label>LEVEL</label>
                    <select name="level" id="" class="form-control">
                        <option value="PEMULA">PEMULA</option>
                        <option value="MENENGAH">MENENGAH</option>
                        <option value="EXPERT">EXPERT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Warna Background</label>
                    <select name="kode_warna" id="" class="form-control">
                        <option value="purple">PURPLE</option>
                        <option value="yellow">YELLOW</option>
                        <option value="coral">CORAL</option>
                        <option value="green">GREEN</option>
                        <option value="pink">PINK</option>
                        <option value="red">RED</option>
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
