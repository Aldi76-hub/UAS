<?php
session_start();
if(!isset($_SESSION['nama'])){
  header('location: ../login.php');
  exit();
}
include('../koneksi/config.php');
$id = $_GET['id'];
$konten = mysqli_query($connection, 'SELECT * FROM konten WHERE id_kategori = ' . $id . '');
?>
<!DOCTYPE html>
<html lang="id">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Materi belajar pemrograman ManabuCode." />
  <title>Materi Belajar | ManabuCode</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/extras.css" />
  <link rel="stylesheet" href="../css/materi.css" />
</head>

<body class="material-page">
  <header class="navbar"><a class="brand" href="../index.php"><span>学ぶ</span>ManabuCode</a>
    <nav class="nav-links class-nav"><a class="active" href="../kelas/kelas.php">Kelas</a><a
        href="../tentang.php">Tentang</a><a href="../index.php#hubungi">Hubungi</a></nav>
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
    <section class="material-hero">
      <div><a class="back-link" href="../index.php">← Kembali ke beranda</a>
        <p class="eyebrow">Perpustakaan belajar</p>
        <h1>Bekal kecil untuk <br /><em>langkah yang lebih besar.</em></h1>
        <p>Pelajari konsep pemrograman melalui rangkuman, video singkat, latihan, dan tantangan yang bisa kamu ikuti
          satu per satu.</p>
      </div>
      
    </section>
    <section class="material-content">
      <div class="material-head">
        <div>
          <p class="eyebrow">Mulai dari dasar</p>
          <h2>Belajar secara <em>bertahap.</em></h2>
        </div>
        
      </div>
      <div class="lesson-layout">
        <div class="lesson-list">
          <?php
          $no = 1;
          while ($q = mysqli_fetch_array($konten)) {
            ?>
            <button class="lesson" data-topic="web" data-title="<?= $q['judul'] ?>"
              data-type="Rangkuman · 10 menit"
              data-copy="">
              <span><?= $no++ ?></span><b><?= $q['judul'] ?><small>Rangkuman · 10 menit</small></b><a href="konten.php?id=<?= $q['id_konten'] ?>"><i>→</i></a>
            </button>

          <?php } ?>

          <!-- <button class="lesson" data-topic="web" data-title="Merapikan halaman dengan CSS" data-type="Video · 14 menit"
            data-copy="CSS membantu kamu mengatur warna, ukuran teks, jarak, tata letak, dan tampilan responsif sebuah halaman web."><span>02</span><b>Merapikan
              halaman dengan CSS<small>Video · 14 menit</small></b><i>→</i></button>
          <button class="lesson" data-topic="web" data-title="Membuat website responsif" data-type="Latihan · 20 menit"
            data-copy="Gunakan media query dan layout fleksibel agar website tetap nyaman digunakan di layar ponsel maupun desktop."><span>03</span><b>Membuat
              website responsif<small>Latihan · 20 menit</small></b><i>→</i></button>
          <button class="lesson" data-topic="logic" data-title="Berpikir dengan algoritma"
            data-type="Rangkuman · 12 menit"
            data-copy="Pecah masalah besar menjadi langkah-langkah kecil. Itulah inti dari cara berpikir algoritmis dalam pemrograman."><span>04</span><b>Berpikir
              dengan algoritma<small>Rangkuman · 12 menit</small></b><i>→</i></button>
          <button class="lesson" data-topic="logic" data-title="Variabel dan kondisi" data-type="Video · 16 menit"
            data-copy="Simpan data dalam variabel dan gunakan percabangan untuk menentukan aksi program berdasarkan suatu kondisi."><span>05</span><b>Variabel
              dan kondisi<small>Video · 16 menit</small></b><i>→</i></button>
          <button class="lesson" data-topic="project" data-title="Rancang portofolio pertamamu"
            data-type="Proyek · 30 menit"
            data-copy="Gabungkan HTML, CSS, dan JavaScript menjadi website portofolio sederhana untuk menunjukkan karya terbaikmu."><span>06</span><b>Rancang
              portofolio pertamamu<small>Proyek · 30 menit</small></b><i>→</i></button> -->
        </div>
        <aside class="lesson-detail">
          <div class="detail-icon">&lt;/&gt;</div>
          <p class="course-meta" id="detailType">PREVIEW</p>
          <h3 id="detailTitle"></h3>
          <p id="detailCopy">
            </p>
            
          <p class="detail-status" id="lessonStatus"></p>
        </aside>
      </div>
    </section>
    <section class="tip-section">
      <div>
        <p class="eyebrow">Belajar lebih konsisten</p>
        <h2>Satu materi hari ini<br />adalah satu langkah <em>ke depan.</em></h2>
      </div>
      <ol>
        <li><span>01</span>Pilih satu materi yang ingin dipelajari.</li>
        <li><span>02</span>Catat poin penting dengan bahasamu sendiri.</li>
        <li><span>03</span>Praktikkan lewat latihan kecil.</li>
      </ol>
    </section>
  </main>
  <footer><a class="brand" href="../index.php"><span>学ぶ</span>ManabuCode</a>
    <p>Belajar hari ini, berkembang untuk masa depan.</p>
    <div><a href="../kelas/kelas.php">Jelajahi kelas</a> · <a href="../index.php">Beranda</a></div><small>© <span
        id="year"></span> ManabuCode.</small>
  </footer>
  <script src="../js/materi.js"></script>
</body>

</html>