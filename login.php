<?php
  session_start();
  if(isset($_SESSION['nama'])){
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Login ke ManabuCode." />
  <title>Login | ManabuCode</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/login.css" />
</head>

<body class="login-page">
  <main class="login-layout">
    <section class="login-intro"><a class="brand" href="index.php"><span>学ぶ</span>ManabuCode</a>
      <div>
        <p class="eyebrow">Selamat datang kembali<?= $_SESSION['user'] ?></p>
        <h1>Teruskan perjalanan<br /><em>belajarmu.</em></h1>
        <p>Masuk untuk menyimpan materi, mencatat progres, dan melanjutkan kelas pilihanmu.</p>
      </div><small>Belajar kode, setahap demi setahap.</small>
    </section>
    <section class="login-panel"><a class="back-link" href="index.php">← Kembali ke beranda</a>
      <div class="login-card">
        <p class="eyebrow">Masuk akun</p>
        <h2>Halo, pembelajar.</h2>
        <p class="login-copy">Masukkan data di bawah untuk masuk ke ManabuCode.</p>
        <form action="proses_login.php" method="POST" novalidate><label for="loginEmail">Alamat email</label><input
            id="loginEmail" name="email" type="email" placeholder="nama@email.com" required /><label
            for="loginPassword">Kata sandi</label>
          <div class="password-field"><input id="loginPassword" name="password" type="password"
              placeholder="Minimal 6 karakter" minlength="6" required /><button type="button" id="showPassword"
              aria-label="Tampilkan kata sandi">◉</button></div><button class="btn login-submit" type="submit">Masuk ke
            akun <span>→</span></button>
          <p class="login-message" id="loginMessage" role="status"></p>
        </form>
        <p class="register-note">Belum punya akun? <a href="index.php#daftar">Daftar gratis</a></p>
      </div>
    </section>
  </main>
  <script src="js/login.js"></script>
</body>

</html>