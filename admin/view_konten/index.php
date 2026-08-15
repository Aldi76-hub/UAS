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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA KONTEN
            </div>
            <div class="card-body">
              <a href="tambah_konten.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <a href="../kategori/tambah_kategori.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">KATEGORI</a>
              <a href="../../index.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">VIEW WEB</a>
              <a href="../../logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">LOGOUT</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">ISI KONTEN</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../../koneksi/config.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT *, konten.judul AS judul_konten FROM konten
                                                              LEFT JOIN kategori
                                                              ON konten.id_kategori = kategori.id_kategori ");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['judul_konten'] ?></td>
                      <td><?php echo $row['tanggal'] ?></td>
                      <td>
                            <?php if($row['isi_konten'] == '-'){ ?>
                                <a href="input_konten.php?id=<?= $row['id_konten'] ?>" class="btn btn-sm btn-success">Isi Konten</a>
                            <?php }else{?>
                                <a href="edit_konten.php?id=<?= $row['id_konten'] ?>" class="btn btn-sm btn-primary">Edit Konten</a>
                            <?php } ?>
                      </td>
                      <td><?= $row['nama_kategori'] ?></td>
                      <td class="text-center">
                        
                        <form action="hapus.php" method="POST">
                          <a href="update1.php?id=<?= $row['id_konten'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                          |
                          <input type="checkbox" name="konten_hapus" value="<?= $row['id_konten'] ?>" >
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
