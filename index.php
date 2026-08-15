<?php
session_start();

// echo 'asdf'.$_SESSION['nama'];
include('koneksi/config.php');

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="CerdasKita - platform belajar digital untuk semua." />
  <title>ManabuCode | Belajar Code Gratis</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/extras.css" />
</head>

<body>
  <a class="skip-link" href="#konten">Langsung ke konten</a>
  <header class="navbar">
    <a class="brand" href="#beranda" aria-label="CerdasKita beranda"><span>学ぶ</span>ManabuCode</a>
    <button class="menu-toggle" aria-label="Buka menu" aria-expanded="false">☰</button>
    <nav class="nav-links" aria-label="Navigasi utama">
      <a href="kelas/kelas.php">Kelas</a><a href="tentang.php">Tentang</a><a href="#hubungi">Hubungi</a>
    </nav>
    <?php
    if(!empty($_SESSION['nama'])){
      if($_SESSION['nama'] == '@admin'){
    ?>
        <a class="btn btn-small auth-button" href="admin/view_konten/index.php">ADMIN <span>→</span></a>
    <?php   
      }else{
    ?>

    <a class="btn btn-small auth-button" href="logout.php">Logout <span>→</span></a>
      <?php } ?>
    <?php }else{ ?>
      <a class="btn btn-small auth-button" href="login.php">Login <span>→</span></a>
    <?php } ?>
  </header>

  <main id="konten">
    <section class="hero" id="beranda">
      <div class="hero-copy">
        <p class="eyebrow">✦ Ruang belajar untuk masa depan</p>
        <h1>Belajar hari ini,<br /><em>Berkembang</em> untuk masa depan.</h1>
        <p class="lead">ManabuCode adalah ruang belajar digital yang membantu kamu memahami teknologi dan coding dengan
          cara yang mudah, terarah, dan menyenangkan.</p>
        <div class="hero-actions"><a class="btn" href="kelas/kelas.php">Jelajahi Kelas <span>→</span></a><a class="text-link"
            href="#">Lihat materi pilihan <span>↘</span></a></div>
        <div class="stats" aria-label="Statistik CerdasKita">
          <div><strong>3</strong><span>Pemateri aktif</span></div>
          <div><strong>150+</strong><span>Materi belajar</span></div>
          <div><strong>4.9/5</strong><span>Rating kelas</span></div>
        </div>
      </div>
      <div class="hero-art" aria-label="Ilustrasi belajar online">
        <div class="sun"></div>
        <div class="scribble">✦</div>

        <div class="study-card">
          <div class="book-top"></div>
          <div class="book-page"><span>✿</span>
            <p>Belajar<br />dengan<br /><b>gembira</b></p>
          </div>
        </div>
        <div class="person">
          <div class="head"></div>
          <div class="hair"></div>
          <div class="body"></div>
          <div class="arm arm-one"></div>
          <div class="arm arm-two"></div>
        </div>
        <div class="plant"><i></i><i></i><i></i><i></i></div>
        <div class="float-note">✎ Catatan hari ini</div>
      </div>
    </section>

    <section class="section features" id="tentang">
      <div class="section-heading">
        <p class="eyebrow">Cara belajar yang lebih bermakna</p>
        <h2>Dirancang untuk membuatmu <em>terus ingin tahu.</em></h2>
      </div>
      <div class="feature-grid">
        <article>
          <div class="feature-icon peach">⌁</div>
          <h3>Materi terstruktur</h3>
          <p>Jalur belajar yang rapi, dari konsep dasar sampai penerapan nyata.</p>
        </article>
        <article>
          <div class="feature-icon yellow">◉</div>
          <h3>Belajar sesuai ritme</h3>
          <p>Akses materi kapan saja dan ulangi pelajaran sesuai kebutuhanmu.</p>
        </article>
        <article>
          <div class="feature-icon blue">✦</div>
          <h3>Komunitas suportif</h3>
          <p>Bertanya, berbagi ide, dan tumbuh bersama sesama pembelajar.</p>
        </article>
      </div>
    </section>

    <section class="section courses" id="kelas">
      <div class="section-row">
        <div>
          <p class="eyebrow">Kelas populer</p>
          <h2>Temukan ruang<br /><em>belajarmu.</em></h2>
        </div><a class="text-link" href="kelas/kelas.php">Lihat semua kelas <span>→</span></a>
      </div>
      <div class="course-grid">
        <?php
        $kategori = mysqli_query($connection, "SELECT * FROM kategori");
        while ($row = mysqli_fetch_array($kategori)) {
          ?>
          <article class="course-card">
            <div class="course-image art-<?= $row['kode_warna'] ?>"><span
                class="big-icon"><?= $row['gambar'] ?></span><span class="badge"><?= $row['nama_kategori'] ?></span></div>
            <div class="course-body">
              <p class="course-meta"><?= $row['lvl'] ?></p>
              <h3><?= $row['judul'] ?></h3>
              <!-- <p>Bangun situs pertamamu dari nol dengan HTML, CSS, dan JavaScript.</p> -->
              <div class="course-footer"><span>★★★★★ <b>4.9</b></span><a href="#daftar"
                  aria-label="Pelajari Dasar Pemrograman Web">→</a></div>
            </div>
          </article>
        <?php } ?>

      </div>
    </section>

    <section class="section material" id="materi">
      <div class="section-heading centered">
        <p class="eyebrow">Coba materi gratis</p>
        <h2>Belajar dalam berbagai <em>cara.</em></h2>
        <a class="text-link material-more" href="materi.html">Buka semua konten materi <span>→</span></a>
      </div>
      <div class="media-grid">
        <article class="video-box">
          <div class="media-label">VIDEO PEMBELAJARAN</div>
          <h3>Memulai kebiasaan belajar yang baik</h3><button class="play-button" id="openVideo"
            aria-label="Putar video pembelajaran">▶</button>
          <p>Video singkat</p>
        </article>
        <article class="audio-box">
          <div class="audio-top"><span class="wave">▂▃▅▇▆▄▃▅</span><button id="audioToggle"
              aria-label="Putar audio">▶</button></div>
          <p class="course-meta">PODCAST CERDASKITA · EP. 04</p>
          <h3>Menemukan rasa ingin tahu</h3><audio id="previewAudio" preload="metadata">
            <source src="https://www.w3schools.com/html/horse.ogg" type="audio/ogg" />Browser Anda tidak mendukung
            audio.
          </audio>
          <div class="progress"><span></span></div>
          <div class="audio-time"><span>00:00</span><span>08:16</span></div>
        </article>
      </div>
      <div class="table-wrap">
        <table>
          <caption>Jadwal kelas minggu ini</caption>
          <thead>
            <tr>
              <th>Hari</th>
              <th>Kelas</th>
              <th>Waktu</th>
              <th>Mentor</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Senin</td>
              <td>Dasar Pemrograman Web</td>
              <td>19.00 WIB</td>
              <td>ALI</td>
            </tr>
            <tr>
              <td>Rabu</td>
              <td>Desain Visual</td>
              <td>16.00 WIB</td>
              <td>ALDI</td>
            </tr>
            <tr>
              <td>Jumat</td>
              <td>Belajar Efektif</td>
              <td>19.30 WIB</td>
              <td>RISKY</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="quote-section">
      <blockquote>“Menuntun dengan ilmu, membangun dengan keteladanan.”</blockquote><cite>—
        Ki Hajar Dewantara</cite>
    </section>

    <section class="section signup" id="daftar">
      <div>
        <p class="eyebrow">Saatnya tingkatkan kemampuanmu</p>
        <h2>Siap belajar<br /><em>bersama kami?</em></h2>
        <p class="lead">Daftarkan dirimu, dapatkan akses ke semua kelas dan kembangkan kemampuanmu.</p>
        <ul class="check-list">
          <li>Gratis mengakses materi</li>
          <li>Materi yang mudah dipahami untuk pemula</li>
          <li>Belajar kapan saja dan di mana saja</li>
        </ul>
      </div>
      <form action="daftar.php" method="POST" novalidate>
        <label for="name">Nama lengkap</label>
        <input id="name" name="name" type="text" placeholder="Masukkan nama kamu" required />
        <label for="email">Alamat email</label>
        <input id="email" name="email" type="email" placeholder="nama@email.com" required />
        <label for="password">Password</label>
        <input id="password" name="password" type="text" placeholder="Masukkan password" required />

        <label class="consent"><input type="checkbox" required /> <span>Saya setuju menerima informasi kelas
            dari ManabuCode.</span></label><button class="btn" type="submit">Daftar Sekarang <span>→</span></button>
        <p id="formMessage" role="status"></p>
      </form>
    </section>
  </main>
  <footer id="hubungi"><a class="brand" href="#beranda"><span>学ぶ</span>ManabuCode</a>
    <p>Belajar hari ini, berkembang untuk masa depan.</p>
    <div><a target="_blank" href="mailto:palaan881@gmail.com">palaan881@gmail.com</a> · <a target="_blank"
        href="https://www.instagram.com/aldi_p76?igsh=dDNjYXlwenY4eTFh&utm_source=qr">Instagram</a> · <a target="_blank"
        href="https://youtube.com/@aldi6035?si=R5g6OxkFmvSfaXdg">YouTube</a></div><small>© <span id="year"></span>
      ManabuCode. Dibuat untuk belajar.</small>
  </footer>
  <div class="modal" id="videoModal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Video pembelajaran">
    <div class="modal-content"><button class="close-modal" aria-label="Tutup video">×</button><iframe
        src="https://www.youtube.com/embed/1eONa8Nx_jQ?si=OcHax69oiLCr-oMF" width="860" height="615" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen="allowfullscreen"></iframe></div>
  </div>
  </div>
  <script src="js/script.js"></script>
</body>

</html>