-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Agu 2026 pada 02.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web2026`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(8) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL,
  `kode_warna` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `lvl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `gambar`, `nama_kategori`, `kode_warna`, `judul`, `lvl`) VALUES
(1, 'PHP', 'PHP', 'red', 'Dasar Pemrograman dengan PHP', 'PEMULA'),
(2, 'JS', 'Java Script', 'yellow', 'Dasar program JavaScript', 'MENENGAH'),
(3, 'Py', 'Phyton', 'yellow', 'Pemrograman Phyton', 'MENENGAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(90) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `isi_konten` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `tanggal`, `isi_konten`, `id_kategori`) VALUES
(1, 'Pengenalan PHP', 'Thursday, August 13, 2026', '<h2>Apa itu HTML?</h2>\n<p><strong>HTML</strong>&nbsp;adalah singkatan dari&nbsp;<em>HyperText Markup Language</em>. HTML bukan bahasa pemrograman untuk membuat logika, melainkan bahasa untuk memberi struktur pada konten website.</p>\n<p>Browser membaca kode HTML lalu menampilkannya menjadi halaman yang dapat kita lihat dan gunakan. Karena itu, HTML merupakan langkah pertama yang penting dalam belajar web development.</p>\n<div><strong>✦ Ingat</strong>\n<p>Tag HTML biasanya ditulis berpasangan: tag pembuka dan tag penutup. Contoh:&nbsp;<code>&lt;p&gt;Isi paragraf&lt;/p&gt;</code>.</p>\n</div>\n<h2>Struktur dasar dokumen</h2>\n<p>Setiap halaman HTML memiliki struktur awal seperti berikut:</p>\n<pre><code>&lt;!DOCTYPE html&gt;\n&lt;html lang=\"id\"&gt;\n  &lt;head&gt;\n    &lt;title&gt;Website Pertamaku&lt;/title&gt;\n  &lt;/head&gt;\n  &lt;body&gt;\n    &lt;h1&gt;Halo, dunia!&lt;/h1&gt;\n    &lt;p&gt;Ini halaman web pertamaku.&lt;/p&gt;\n  &lt;/body&gt;\n&lt;/html&gt;</code></pre>\n<h2>Tag yang sering digunakan</h2>\n<table style=\"width: 720px;\">\n<thead>\n<tr>\n<th>TAG</th>\n<th>FUNGSI</th>\n<th>CONTOH</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td><code>&lt;h1&gt;</code></td>\n<td>Judul utama</td>\n<td><code>&lt;h1&gt;Judul&lt;/h1&gt;</code></td>\n</tr>\n<tr>\n<td><code>&lt;p&gt;</code></td>\n<td>Paragraf</td>\n<td><code>&lt;p&gt;Teks&lt;/p&gt;</code></td>\n</tr>\n<tr>\n<td><code>&lt;a&gt;</code></td>\n<td>Tautan</td>\n<td><code>&lt;a href=\"#\"&gt;Link&lt;/a&gt;</code></td>\n</tr>\n<tr>\n<td><code>&lt;img&gt;</code></td>\n<td>Gambar</td>\n<td><code>&lt;img src=\"foto.jpg\"&gt;</code></td>\n</tr>\n</tbody>\n</table>\n<h2>Latihan kecil</h2>\n<p>Buatlah file bernama&nbsp;<code>latihan.html</code>, kemudian isi dengan satu judul, satu paragraf, dan satu tautan. Buka file tersebut di browser untuk melihat hasilnya.</p>', 1),
(2, 'Apa itu JavaScript?', 'Thursday, August 13, 2026', '<p>Hallo teman-teman, pernah mendengar istilah JavaScript? Pasti kamu pernah mendengarnya,&nbsp;<em>kan</em>? Lalu, seperti apa&nbsp;<em>sih</em>&nbsp;JavaScript itu? Jika kamu seorang&nbsp;<em>programmer</em>&nbsp;web, pasti sudah familiar dengan yang satu ini. Sebaliknya, bagi kamu yang baru mulai terjun ke dunia&nbsp;<em>programmer</em>&nbsp;mesti tahu apa itu JavaScript?</p>\r\n<p>Biasanya para&nbsp;<em>programmer&nbsp;</em>menggunakan JavaScript untuk memudahkan pekerjaan mereka dan membuat automasi dalam beberapa jenis pemrograman.</p>\r\n<p>Karena itulah, JavaScript begitu penting untuk seorang&nbsp;<em>programmer</em>.&nbsp;<em>Eits,&nbsp;</em>tidak perlu khawatir bagi kamu yang baru memulai atau ingin menjadi&nbsp;<em>programmer</em>&nbsp;JavaScript ya. Kali ini kita akan berkenalan dengan JavaScript, serta fungsi dan contohnya. Simak tuntas sobat!</p>\r\n<div>&nbsp;</div>\r\n<h2>Apa Itu JavaScript?</h2>\r\n<p>Tahukah kamu bahwa JavaScript adalah bahasa pemrograman&nbsp;yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif. Kalau sebelumnya kamu hanya mengenal HTML dan CSS, nah sekarang kamu jadi tahu bahwa JavaScript dapat meningkatkan fungsionalitas pada halaman web. Bahkan dengan JavaScript ini kamu bisa membuat aplikasi,&nbsp;<em>tools</em>, atau bahkan&nbsp;<em>game</em>&nbsp;pada web.</p>\r\n<p>Bicara teknis, JavaScript atau kita singkat menjadi JS merupakan bahasa pemrograman jenis interpreter, sehingga kamu tidak memerlukan&nbsp;<em>compiler</em>&nbsp;untuk menjalankannya. JavaScript memiliki fitur-fitur seperti berorientasi objek,&nbsp;<em>client-side</em>,&nbsp;<em>high-level programming</em>, dan&nbsp;<em>loosely typed</em>.</p>\r\n<h2>Sejarah JavaScript</h2>\r\n<p>Bagi kamu yang masih awam, mungkin penasaran bagaimana awal mulanya diciptakan bahasa pemrograman ini.&nbsp;</p>\r\n<p>Pada tahun 1994 JavaScript mulai dikenal, pada saat itu web dan internet sudah mulai berkembang. JavaScript didesain oleh Brendan Eich yang merupakan karyawan Netscape. Transformasi nama JavaScript, dimulai dari Mocha, Mona, LiveScript, hingga akhirnya resmi bernama JavaScript.&nbsp;</p>\r\n<p>Versi awal bahasa JS hanya dipakai di kalangan Netscape beserta dengan fungsionalitas pun yang masih terbatas. Singkat cerita pada tahun 1996 JavaScript secara resmi dinamakan sebagai ECMAScript. ECMAScript 2 dikembangkan pada tahun 1998 yang dilanjutkan dengan ECMAScript 3 setahun kemudian. ECMAScript terus dikembangkan sampai akhirnya menjadi JavaScript atau JS hingga saat ini. Pada tahun 2016, 92% web diketahui telah menggunakan JavaScript. Itulah mengapa JavaScript atau JS terus berkembang.</p>\r\n<h2>Mengapa harus pakai JavaScript?</h2>\r\n<p>Hallo teman-teman, pernah mendengar istilah JavaScript? Pasti kamu pernah mendengarnya,&nbsp;<em>kan</em>? Lalu, seperti apa&nbsp;<em>sih</em>&nbsp;JavaScript itu? Jika kamu seorang&nbsp;<em>programmer</em>&nbsp;web, pasti sudah familiar dengan yang satu ini. Sebaliknya, bagi kamu yang baru mulai terjun ke dunia&nbsp;<em>programmer</em>&nbsp;mesti tahu apa itu JavaScript?</p>\r\n<blockquote>\r\n<p>Untuk artikel terbaru, silakan baca &ldquo;<a href=\"https://www.dicoding.com/blog/apa-itu-bahasa-pemrograman-javascript/\">Apa itu bahasa pemrograman JavaScript? Developer wajib tahu.</a></p>\r\n</blockquote>\r\n<p>Biasanya para&nbsp;<em>programmer&nbsp;</em>menggunakan JavaScript untuk memudahkan pekerjaan mereka dan membuat automasi dalam beberapa jenis pemrograman.</p>\r\n<p>Karena itulah, JavaScript begitu penting untuk seorang&nbsp;<em>programmer</em>.&nbsp;<em>Eits,&nbsp;</em>tidak perlu khawatir bagi kamu yang baru memulai atau ingin menjadi&nbsp;<em>programmer</em>&nbsp;JavaScript ya. Kali ini kita akan berkenalan dengan JavaScript, serta fungsi dan contohnya. Simak tuntas sobat!</p>\r\n<div>&nbsp;</div>\r\n<h2>Apa Itu JavaScript?</h2>\r\n<p><img style=\"height: auto;\" src=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-cover-js-1024x768.png\" sizes=\"(max-width: 900px) 100vw, 900px\" srcset=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-cover-js.png 1024w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-cover-js-300x225.png 300w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-cover-js-768x576.png 768w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-cover-js-370x278.png 370w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-cover-js-770x578.png 770w\" alt=\"javascript\" width=\"900\" height=\"675\"></p>\r\n<p>Tahukah kamu bahwa JavaScript adalah bahasa pemrograman&nbsp;yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif. Kalau sebelumnya kamu hanya mengenal HTML dan CSS, nah sekarang kamu jadi tahu bahwa JavaScript dapat meningkatkan fungsionalitas pada halaman web. Bahkan dengan JavaScript ini kamu bisa membuat aplikasi,&nbsp;<em>tools</em>, atau bahkan&nbsp;<em>game</em>&nbsp;pada web.</p>\r\n<p>Bicara teknis, JavaScript atau kita singkat menjadi JS merupakan bahasa pemrograman jenis interpreter, sehingga kamu tidak memerlukan&nbsp;<em>compiler</em>&nbsp;untuk menjalankannya. JavaScript memiliki fitur-fitur seperti berorientasi objek,&nbsp;<em>client-side</em>,&nbsp;<em>high-level programming</em>, dan&nbsp;<em>loosely typed</em>.</p>\r\n<h2>Sejarah JavaScript</h2>\r\n<p><img style=\"height: auto;\" src=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-book-js.png\" sizes=\"(max-width: 660px) 100vw, 660px\" srcset=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-book-js.png 500w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-book-js-300x200.png 300w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-book-js-370x247.png 370w\" alt=\"book javascript\" width=\"660\" height=\"441\"></p>\r\n<p>Bagi kamu yang masih awam, mungkin penasaran bagaimana awal mulanya diciptakan bahasa pemrograman ini.&nbsp;</p>\r\n<p>Pada tahun 1994 JavaScript mulai dikenal, pada saat itu web dan internet sudah mulai berkembang. JavaScript didesain oleh Brendan Eich yang merupakan karyawan Netscape. Transformasi nama JavaScript, dimulai dari Mocha, Mona, LiveScript, hingga akhirnya resmi bernama JavaScript.&nbsp;</p>\r\n<p>Versi awal bahasa JS hanya dipakai di kalangan Netscape beserta dengan fungsionalitas pun yang masih terbatas. Singkat cerita pada tahun 1996 JavaScript secara resmi dinamakan sebagai ECMAScript. ECMAScript 2 dikembangkan pada tahun 1998 yang dilanjutkan dengan ECMAScript 3 setahun kemudian. ECMAScript terus dikembangkan sampai akhirnya menjadi JavaScript atau JS hingga saat ini. Pada tahun 2016, 92% web diketahui telah menggunakan JavaScript. Itulah mengapa JavaScript atau JS terus berkembang.</p>\r\n<h2>Mengapa harus pakai JavaScript?</h2>\r\n<p><img style=\"height: auto;\" src=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-google-js.png\" sizes=\"auto, (max-width: 750px) 100vw, 750px\" srcset=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-google-js.png 750w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-google-js-300x200.png 300w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-google-js-370x247.png 370w\" alt=\"google image\" width=\"750\" height=\"500\" loading=\"lazy\"></p>\r\n<p>Sebagai developer zaman&nbsp;<em>now</em>. JavaScript menjadi salah satu bahasa pemrograman yang sangat populer. Mengapa? Di tahun 2016 saja sudah ada sekitar 92% pembuatan web menggunakan JS, apalagi di tahun-tahun sekarang. Tentunya web yang dibuat dengan JS akan lebih dinamis dan interaktif. Banyak perusahaan top global yang sudah mengimplementasikan JS sebagai bahasa pemrograman andalannya. Kita bisa buktikan juga bahwa JS itu populer dan menjadi bahasa yang paling banyak digunakan di Github.</p>\r\n<p><img style=\"height: auto;\" src=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-github-js.png\" sizes=\"auto, (max-width: 1005px) 100vw, 1005px\" srcset=\"https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-github-js.png 1005w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-github-js-300x163.png 300w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-github-js-768x418.png 768w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-github-js-370x201.png 370w, https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/internship-rendi-github-js-770x419.png 770w\" alt=\"github js\" width=\"1005\" height=\"547\" loading=\"lazy\"></p>\r\n<p>Seperti FB, Linkedin, Trello, Medium, bahkan Google, salah satu bahasa yang digunakan di antaranya adalah JS (JavaScript). Itulah alasan mengapa para developer berlomba-lomba untuk jadi yang terbaik dalam mempelajari JavaScript.</p>\r\n<h2>Fungsi JavaScript</h2>\r\n<p>Kamu pasti sudah paham tentunya dengan fungsi JavaScript. Selain membuat web jadi lebih dinamis dan interaktif, JS digunakan juga untuk proses logika data. &ldquo;Intinya, fungsi JS tidak hanya soal urusan&nbsp;<em>front end</em>, tapi juga sekaligus dipakai untuk urusan&nbsp;<em>back end,&rdquo;</em>&nbsp;imbuh developer.</p>\r\n<h2>Keunggulan JavaScript</h2>\r\n<p>Hallo teman-teman, pernah mendengar istilah JavaScript? Pasti kamu pernah mendengarnya,&nbsp;<em>kan</em>? Lalu, seperti apa&nbsp;<em>sih</em>&nbsp;JavaScript itu? Jika kamu seorang&nbsp;<em>programmer</em>&nbsp;web, pasti sudah familiar dengan yang satu ini. Sebaliknya, bagi kamu yang baru mulai terjun ke dunia&nbsp;<em>programmer</em>&nbsp;mesti tahu apa itu JavaScript?</p>\r\n<blockquote>\r\n<p>Untuk artikel terbaru, silakan baca &ldquo;<a href=\"https://www.dicoding.com/blog/apa-itu-bahasa-pemrograman-javascript/\">Apa itu bahasa pemrograman JavaScript? Developer wajib tahu.</a></p>\r\n</blockquote>\r\n<p>Biasanya para&nbsp;<em>programmer&nbsp;</em>menggunakan JavaScript untuk memudahkan pekerjaan mereka dan membuat automasi dalam beberapa jenis pemrograman.</p>\r\n<p>Karena itulah, JavaScript begitu penting untuk seorang&nbsp;<em>programmer</em>.&nbsp;<em>Eits,&nbsp;</em>tidak perlu khawatir bagi kamu yang baru memulai atau ingin menjadi&nbsp;<em>programmer</em>&nbsp;JavaScript ya. Kali ini kita akan berkenalan dengan JavaScript, serta fungsi dan contohnya. Simak tuntas sobat!</p>\r\n<div>&nbsp;</div>\r\n<h2>Apa Itu JavaScript?</h2>\r\n<div id=\"urvanov-syntax-highlighter-6a7d9a7adde08820045409\" data-settings=\"minimize scroll-mouseover\">\r\n<div>\r\n<p>Tahukah kamu bahwa JavaScript adalah bahasa pemrograman&nbsp;yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif. Kalau sebelumnya kamu hanya mengenal HTML dan CSS, nah sekarang kamu jadi tahu bahwa JavaScript dapat meningkatkan fungsionalitas pada halaman web. Bahkan dengan JavaScript ini kamu bisa membuat aplikasi,&nbsp;<em>tools</em>, atau bahkan&nbsp;<em>game</em>&nbsp;pada web.</p>\r\n<p>Bicara teknis, JavaScript atau kita singkat menjadi JS merupakan bahasa pemrograman jenis interpreter, sehingga kamu tidak memerlukan&nbsp;<em>compiler</em>&nbsp;untuk menjalankannya. JavaScript memiliki fitur-fitur seperti berorientasi objek,&nbsp;<em>client-side</em>,&nbsp;<em>high-level programming</em>, dan&nbsp;<em>loosely typed</em>.</p>\r\n</div>\r\n</div>\r\n<p>Sumber : Dicoding</p>', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id_login`, `nama`, `email`, `password`, `status`) VALUES
(1, 'aldi pratama', 'aldi@aldi', 'ea974e1f15d57fdd3dac6081fa804875', 1),
(2, 'xavier', 'asd@asd', 'a8f5f167f44f4964e6c998dee827110c', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
