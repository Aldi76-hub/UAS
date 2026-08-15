<?php
    session_start();
if(!isset($_SESSION['nama'])){
  header('location: ../login.php');
  exit();
}
    $id = $_GET['id'];
    include('../koneksi/config.php'); 
    $konten = mysqli_query($connection,'SELECT konten.* , kategori.*, konten.judul AS jdl FROM konten
                                                LEFT JOIN kategori
                                                ON konten.id_kategori = kategori.id_kategori where id_konten = '.$id.'');
    $data = $konten->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Isi Materi | ManabuCode</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/extras.css" />
  <link rel="stylesheet" href="../css/isi-materi.css" />
</head>

<body class="article-page">
  <header class="navbar"><a class="brand" href="../index.php"><span>学ぶ</span>ManabuCode</a>
    <nav class="nav-links class-nav"><a href="kelas.html">Kelas</a><a
        href="tentang.html">Tentang</a><a href="index.html#hubungi">Hubungi</a></nav>
        <?php
    if (!empty($_SESSION['nama'])) {
      
      if($_SESSION['nama'] == '@admin'){
    ?>
        <a class="btn btn-small auth-button" href="../admin/view_konten/index.php">ADMIN <span>→</span></a>
    <?php   
      }else{
    ?>

    <a class="btn btn-small auth-button" href="../logout.php">Logout <span>→</span></a>
      <?php } ?>
    <?php } else { ?>
      <a class="btn btn-small auth-button" href="../login.php">Login <span>→</span></a>
    <?php } ?>
  </header>
  <main class="article-wrap"><a class="back-link" href="javascript:window.history.go(-1);">← Kembali ke daftar materi</a>
    <article>
      <p class="eyebrow"><?= $data['nama_kategori'] ?> · RANGKUMAN</p>
      <h1 id="articleTitle"><?= $data['jdl'] ?></h1>
      <div class="article-meta"><span><?= $data['tanggal'] ?></span><span>✦ Level <?= $data['lvl'] ?> </span></div>
      <div class="article-content">
        <?= $data['isi_konten'] ?>
        
      <div class="article-footer"><a class="btn" href="javascript:window.history.go(-1);">Lanjut ke materi lain <span>→</span></a>
        <p id="readStatus"></p>
      </div>
    </article>
  </main>
  <footer><a class="brand" href="index.html"><span>学ぶ</span>ManabuCode</a>
    <p>Belajar hari ini, berkembang untuk masa depan.</p>
    <div><a href="materi.html">Materi</a> · <a href="index.html">Beranda</a></div><small>© <span id="year"></span>
      ManabuCode.</small>
  </footer>
  <script src="../js/isi-materi.js"></script>
</body>

</html>
