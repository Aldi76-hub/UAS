<?php
session_start();
if (!isset($_SESSION['nama'])) {
  header('location:login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Kami | ManabuCode</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/extras.css" />
  <link rel="stylesheet" href="css/tentang.css" />
</head>

<body class="about-page">
  <header class="navbar"><a class="brand" href="index.php"><span>学ぶ</span>ManabuCode</a>
    <nav class="nav-links class-nav"><a href="kelas/kelas.php">Kelas</a><a class="active"
        href="tentang.html">Tentang</a><a href="index.php#hubungi">Hubungi</a></nav>
    <?php
    if (!empty($_SESSION['nama'])) {
      
      if($_SESSION['nama'] == '@admin'){
    ?>
        <a class="btn btn-small auth-button" href="admin/view_konten/index.php">ADMIN <span>→</span></a>
    <?php   
      }else{
    ?>

    <a class="btn btn-small auth-button" href="logout.php">Logout <span>→</span></a>
      <?php } ?>
    <?php } else { ?>
      <a class="btn btn-small auth-button" href="login.php">Login <span>→</span></a>
    <?php } ?>
  </header>
  <main>
    <section class="about-hero">
      <div><a class="back-link" href="index.php">← Kembali ke beranda</a>
        <p class="eyebrow">Tentang ManabuCode</p>
        <h1>Tempat kecil untuk<br />memulai <em>hal besar.</em></h1>
        <p>ManabuCode adalah ruang belajar pemrograman yang membantu pemula memahami kode dengan cara sederhana, ramah,
          dan bertahap.</p>
      </div>
      <div class="about-symbol"><span>学</span><small>MANABU<br />BELAJAR</small></div>
    </section>
    <section class="story">
      <div class="story-photo"><img
          src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=760&q=80"
          alt="Seseorang belajar coding dengan laptop" /><span>✦</span></div>
      <div>
        <p class="eyebrow">Cerita kami</p>
        <h2>Belajar coding tidak harus <em>rumit.</em></h2>
        <p>Kami percaya setiap orang dapat belajar membuat teknologi. Yang dibutuhkan bukan selalu latar belakang
          teknis, tetapi ruang yang nyaman untuk bertanya, mencoba, dan mengulang.</p>
        <p>Melalui materi pendek, proyek kecil, dan komunitas yang suportif, ManabuCode ingin menemani langkah pertama
          setiap calon developer.</p><a class="text-link" href="kelas/kelas.php">Jelajahi kelas kami <span>→</span></a>
      </div>
    </section>
    <section class="values">
      <div class="values-title">
        <p class="eyebrow">Prinsip belajar kami</p>
        <h2>Tumbuh dengan rasa <em>ingin tahu.</em></h2>
      </div>
      <div class="value-grid">
        <article><span>01</span>
          <h3>Mulai dari dasar</h3>
          <p>Materi dibuat tanpa asumsi bahwa kamu sudah memahami coding.</p>
        </article>
        <article><span>02</span>
          <h3>Belajar lewat praktik</h3>
          <p>Setiap konsep didampingi latihan kecil agar ilmu tidak berhenti di teori.</p>
        </article>
        <article><span>03</span>
          <h3>Proses, bukan sempurna</h3>
          <p>Kesalahan adalah bagian dari proses belajar dan menemukan solusi.</p>
        </article>
      </div>
    </section>
    <section class="team">
      <div class="team-header">
        <div>
          <p class="eyebrow">Orang di balik kelas</p>
          <h2>Belajar bersama<br /><em>para praktisi.</em></h2>
        </div>
        <p>Mentor kami datang dari berbagai bidang teknologi dan senang berbagi pengalaman nyata di dunia kerja.</p>
      </div>
      <div class="team-grid">
        <article>
          <div class="mentor-photo"><img src="foto/DSC_2336.JPG" alt="ALDI PRATAMA" /></div>
          <h3>RIZQI FIRMANDIKA ALDI PRATAMA</h3>
          <p>Software Enginer</p>
        </article>

        <article>
          <div class="mentor-photo"><img src="foto/PHOTO-2026-08-13-20-28-59.jpg" alt="ALI" /></div>
          <h3>ALI AKBAR HAQQANI</h3>
          <p>UI/UX Designer</p>
        </article>
        <article>
          <div class="mentor-photo"><img src="foto/IMG_4328.jpg" alt="RISKY" /></div>
          <h3>MUHAMAD RISKY RAMADANI</h3>
          <p>BACKEND DEV</p>
        </article>

      </div>
    </section>
    <section class="about-cta">
      <p class="eyebrow">Mulai dari sekarang</p>
      <h2>Ayo buat sesuatu yang<br /><em>bermakna.</em></h2><a class="btn" href="kelas/kelas.php">Pilih kelas pertamamu
        <span>→</span></a>
    </section>
  </main>
  <footer><a class="brand" href="index.php"><span>学ぶ</span>ManabuCode</a>
    <p>Belajar hari ini, berkembang untuk masa depan.</p>
    <div><a href="">Materi</a> · <a href="kelas/kelas.php">Kelas</a></div><small>© <span id="year"></span>
      ManabuCode.</small>
  </footer>
  <script>document.querySelector('#year').textContent = new Date().getFullYear();</script>
</body>

</html>