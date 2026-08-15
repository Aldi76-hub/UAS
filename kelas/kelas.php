<?php
session_start();
if(!isset($_SESSION['nama'])){
  header('location: ../login.php');
  exit();
}
include('../koneksi/config.php');
$kategori = mysqli_query($connection, "SELECT * FROM kategori");
$kategori2 = mysqli_query($connection, "SELECT * FROM kategori");
$katalog = "SELECT COUNT(*) AS jumlah_kat FROM kategori";
$query = $connection->query($katalog);
$jumlah_katalog = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Katalog kelas pemrograman ManabuCode." />
  <title>Jelajahi Kelas | ManabuCode</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/extras.css" />
</head>

<body class="class-page">
  <header class="navbar">
    <a class="brand" href="../index.php" aria-label="ManabuCode beranda"><span>学ぶ</span>ManabuCode</a>
    <nav class="nav-links class-nav" aria-label="Navigasi utama">
      <a class="active" href="kelas.html">Kelas</a>
      <a href="../tentang.php">Tentang</a>
      <a href="index.html#hubungi">Hubungi</a>
    </nav>
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

  <main>
    <section class="catalog-hero">
      <a class="back-link" href="index.html">← Kembali ke beranda</a>
      <p class="eyebrow">Katalog pembelajaran</p>
      <h1>Jelajahi kelas,<br /><em>kuasai kode.</em></h1>
      <p>Mulai dari dasar hingga membangun proyek nyata. Pilih kelas sesuai tujuanmu dan belajar dengan ritmemu sendiri.
      </p>
      <div class="catalog-count"><strong><?= $jumlah_katalog['jumlah_kat'] ?></strong><span>kelas pilihan untuk memulai
          perjalanan coding</span></div>
    </section>

    <section class="catalog-content" aria-label="Daftar kelas">
      <div class="filter-row">
        <div>
          <p class="eyebrow">Pilih topik</p>
          <h2>Temukan kelas yang sesuai <em>untukmu.</em></h2>
        </div>
        <label class="search-box" for="classSearch"><span>⌕</span><input id="classSearch" type="search"
            placeholder="Cari kelas..." /></label>
      </div>
      <div class="filter-buttons" aria-label="Filter kelas">
        <button class="filter active" data-filter="all">Semua kelas</button>
        <?php while ($q = mysqli_fetch_array($kategori)) { ?>
          <button class="filter" data-filter="<?= $q['nama_kategori'] ?>"><?= $q['nama_kategori'] ?></button>
        <?php } ?>
      </div>

      <div class="catalog-grid" id="classList">
        <?php while ($q2 = mysqli_fetch_array($kategori2)) { ?>
          <article class="catalog-card" data-category="<?= $q2['nama_kategori'] ?>"
            data-title="<?= $q2['judul'] ?>">
            <div class="catalog-art art-<?= $q2['kode_warna'] ?>"><span><?= $q2['gambar'] ?></span><small
                style="text-transform: uppercase;"><?= $q2['nama_kategori'] ?></small></div>
            <div class="catalog-body">
              <p class="course-meta"><?= $q2['lvl'] ?></p>
              <h3><?= $q2['judul'] ?></h3>
              <div class="catalog-info"><span>★★★★★ 4.9</span></div><a class="card-button"
                href="../materi/materi.php?id=<?= $q2['id_kategori'] ?>">Mulai kelas →</a>
            </div>
          </article>
        <?php } ?>

        
      </div>
      <p class="no-result" id="noResult" hidden>Tidak ada kelas yang cocok. Coba kata kunci lain.</p>
    </section>
  </main>
  <footer><a class="brand" href="index.html"><span>学ぶ</span>ManabuCode</a>
    <p>Belajar hari ini, berkembang untuk masa depan.</p>
    <div><a href="../index.php#hubungi">Hubungi kami</a> · <a href="../index.php">Beranda</a></div><small>© <span
        id="year"></span> ManabuCode.</small>
  </footer>
  <script src="../js/kelas.js"></script>
  <script src="auth.js"></script>
</body>

</html>