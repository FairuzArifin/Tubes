-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2021 pada 08.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'fairuzarifin', 'rahasia123', 'Fairuz Arifin', 'yuuarifin@gmail.com', 'admin'),
(2, 'dhanidwi', 'sangatrahasia', 'Dhani Dwi Septian Bangun', 'ddsbg27@gmail.com', 'admin'),
(3, 'recindysaragih', 'recindynatalia', 'Recindy Natalia Saragih', 'nataliarecindy@gmail.com', 'admin'),
(4, 'davidstephan', 'david123', 'David Stephan Bangun', 'stephandavid88@gmail.com', 'admin'),
(5, 'flemingsaragih', 'flem123', 'Fleming Rabbidores Saragih', 'flemingsaragih@gmail.com', 'admin'),
(6, 'sofiearianti', 'sofiearzz', 'Sofie Arianti Anggriani', 'angrianisofie@gmail.com', 'admin'),
(7, 'sayatamu', 'tamu1', 'Tamu 1', 'tamu@gmail.com', 'anggota'),
(8, 'sayatamu2', 'tamu2', 'Tamu 2', 'tamu2@gmail.com', 'anggota'),
(28, 'haloteman', 'ahh', 'dadasd', 'udin123@gmail.com', 'anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `id_resep` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`, `tanggal`, `aktif`, `id_resep`) VALUES
(1, 'Fairuz Arifin', 'yuuarifin@gmail.com', 'Wah bagus resepnya !', '2021-12-18', 'Y', 0),
(17, 'Dhani Dwi Septian Bangun', 'ddsbg27@gmail.com', 'Keren !!', '2021-12-21', 'Y', 0),
(18, 'Tamu 1', 'tamu@gmail.com', 'Mantap resepnya !', '2021-12-23', 'Y', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `link2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `makanan`, `asal`, `link`, `link2`) VALUES
(1, 'Angeun Lada', 'Sumatera dan Jawa', 'angeunlada.html', 'angeunlada.php'),
(2, 'Asam Keueng', 'Sumatera dan Jawa', 'asamkeueng.html', 'asamkeueng.php'),
(3, 'Aunu Senebre', 'Maluku dan Papua', 'aunusenebre.html', 'aunusenebre.php'),
(4, 'Ayam Aroha', 'Maluku dan Papua', 'ayamaroha.html', 'ayamaroha.php'),
(5, 'Ayam Bumbu Bali', 'Sumatera dan Jawa', 'ayambumbubali.html', 'ayambumbubali.php'),
(6, 'Ayam Cincane', 'Kalimantan dan Sulawesi', 'ayamcincane.html', 'ayamcincane.php'),
(7, 'Ayam Iloni', 'Kalimantan dan Sulawesi', 'ayamiloni.html', 'ayamiloni.php'),
(8, 'Ayam Paniki', 'Maluku dan Papua', 'ayampaniki.html', 'ayampaniki.php'),
(9, 'Ayam Taliwang', 'Sumatera dan Jawa', 'ayamtaliwang.html', 'ayamtaliwang.php'),
(10, 'Balado Cumi Asin', 'Sumatera dan Jawa', 'baladocumiasin.html', 'baladocumiasin.php'),
(11, 'Balado Jengkol ', 'Sumatera dan Jawa', 'baladojengkol.html', 'baladojengkol.php'),
(12, 'Bebek Betutu', 'Sumatera dan Jawa', 'bebekbetutu.html', 'bebekbetutu.php'),
(13, 'Beberuk Terong ', 'Sumatera dan Jawa', 'beberukterong.html', 'beberukterong.php'),
(14, 'Berego', 'Sumatera dan Jawa', 'berego.html', 'berego.php'),
(15, 'Bika Ambon', 'Sumatera dan Jawa', 'bikaambon.html', 'bikaambon.php'),
(16, 'Borobbo ', 'Kalimantan dan Sulawesi', 'borobbo.html', 'borobbo.php'),
(17, 'Bubur Sagu', 'Maluku dan Papua', 'bubursagu.html', 'bubursagu.php'),
(18, 'Chaikue', 'Kalimantan dan Sulawesi', 'chaikue.html', 'chaikue.php'),
(19, 'Colo Colo', 'Kalimantan dan Sulawesi', 'colocolo.html', 'colocolo.php'),
(20, 'Cumi Bakar Rica Rica ', 'Kalimantan dan Sulawesi', 'cumibakarricarica.html', 'cumibakarricarica.php'),
(21, 'Daging Belancang', 'Sumatera dan Jawa', 'dagingbelancang.html', 'dagingbelancang.php'),
(22, 'Daging Masak Hitam', 'Sumatera dan Jawa', 'dagingmasakhitam.html', 'dagingmasakhitam.php'),
(23, 'Daun Ubi Tumbuk  ', 'Sumatera dan Jawa', 'daunubitumbuk.html', 'daunubitumbuk.php'),
(24, 'Ebi Kering ', 'Kalimantan dan Sulawesi', 'ebikering.html', 'ebikering.php'),
(25, 'Es Laksamana Mengamuk', 'Sumatera dan Jawa', 'eslaksamanamengamuk.html', 'eslaksamanamengamuk.php'),
(26, 'Gabing', 'Sumatera dan Jawa', 'gabing.html', 'gabing.php'),
(27, 'Gangan Manok ', 'Kalimantan dan Sulawesi', 'ganganmanok.html', 'ganganmanok.php'),
(28, 'Gohui Ikan Tuna', 'Maluku dan Papua', 'gohuiikantuna.html', 'gohuiikantuna.php'),
(29, 'Gudeg Solo', 'Sumatera dan Jawa', 'gudegsolo.html', 'gudegsolo.php'),
(30, 'Gulai Ikan Patin ', 'Sumatera dan Jawa', 'gulaiikanpatin.html', 'gulaiikanpatin.php'),
(31, 'Gulo Puan', 'Sumatera dan Jawa', 'gulopuan.html', 'gulopuan.php'),
(32, 'Gulai Tempoyak Ikan Patin', 'Sumatera dan Jawa', 'gulaitempoyakikanpatin.html', 'gulaitempoyakikanpatin.php'),
(33, 'Ikan Bakar Manokwari', 'Maluku dan Papua', 'ikanbakarmanokwari.html', 'ikanbakarmanokwari.php'),
(34, 'Ikan Bungkus', 'Maluku dan Papua', 'ikanbungkus.html', 'ikanbungkus.php'),
(35, 'Ikan Cuka', 'Sumatera dan Jawa', 'ikancuka.html', 'ikancuka.php'),
(36, 'Ikan Kuah Kuning', 'Maluku dan Papua', 'ikankuahkuning.html', 'ikankuahkuning.php'),
(37, 'Ikan Masak Kayu', 'Maluku dan Papua', 'ikanmasakkayu.html', 'ikanmasakkayu.php'),
(38, 'Ikan Palumara', 'Kalimantan dan Sulawesi', 'ikanpalumara.html', 'ikanpalumara.php'),
(39, 'Ikan Parende', 'Kalimantan dan Sulawesi', 'ikanparende.html', 'ikanparende.php'),
(40, 'Jemput Jemput Pisang ', 'Sumatera dan Jawa', 'jemputjemputpisang.html', 'jemputjemputpisang.php'),
(41, 'Juhu Umbut Rotan', 'Kalimantan dan Sulawesi', 'juhuumbutrotan.html', 'juhuumbutrotan.php'),
(42, 'Kabuto', 'Kalimantan dan Sulawesi', 'kabuto.html', 'kabuto.php'),
(43, 'Kalumpe', 'Kalimantan dan Sulawesi', 'kalumpe.html', 'kalumpe.php'),
(44, 'Kapurung', 'Kalimantan dan Sulawesi', 'kapurung.html', 'kapurung.php'),
(45, 'Karedok', 'Sumatera dan Jawa', 'karedok.html', 'karedok.php'),
(46, 'Kari Kambing', 'Sumatera dan Jawa', 'karikambing.html', 'karikambing.php'),
(47, 'Kerak Telor', 'Sumatera dan Jawa', 'keraktelor.html', 'keraktelor.php'),
(48, 'Ketan Bintul', 'Sumatera dan Jawa', 'ketanbintul.html', 'ketanbintul.php'),
(49, 'Ketupat Kandangan', 'Kalimantan dan Sulawesi', 'ketupatkandangan.html', 'ketupatkandangan.php'),
(50, 'Kohu Kohu', 'Maluku dan Papua', 'kohukohu.html', 'kohukohu.php'),
(51, 'Kue Bingka', 'Kalimantan dan Sulawesi', 'kuebingka.html', 'kuebingka.php'),
(52, 'Kue Engkak Ketan', 'Sumatera dan Jawa', 'kueengkakketan.html', 'kueengkakketan.php'),
(53, 'Kue Kui Kui ', 'Kalimantan dan Sulawesi', 'kuekuikui.html', 'kuekuikui.php'),
(54, 'Kue Lontar', 'Maluku dan Papua', 'kuelontar.html', 'kuelontar.php'),
(55, 'Kue Padarman', 'Sumatera dan Jawa', 'kuepadarman.html', 'kuepadarman.php'),
(56, 'Kue Tetu', 'Kalimantan dan Sulawesi', 'kuetetu.html', 'kuetetu.php'),
(57, 'Laksa', 'Kalimantan dan Sulawesi', 'laksa.html', 'laksa.php'),
(58, 'Laksan', 'Sumatera dan Jawa', 'laksan.html', 'laksan.php'),
(59, 'Lalampa ', 'Kalimantan dan Sulawesi', 'lalampa.html', 'lalampa.php'),
(60, 'Lawa', 'Kalimantan dan Sulawesi', 'lawa.html', 'lawa.php'),
(61, 'Lemang', 'Kalimantan dan Sulawesi', 'lemang.html', 'lemang.php'),
(62, 'Lumpia', 'Sumatera dan Jawa', 'lumpia.html', 'lumpia.php'),
(63, 'Mie Aceh', 'Sumatera dan Jawa', 'mieaceh.html', 'mieaceh.php'),
(64, 'Mie Koba', 'Sumatera dan Jawa', 'miekoba.html', 'miekoba.php'),
(65, 'Mie Lendir', 'Sumatera dan Jawa', 'mielendir.html', 'mielendir.php'),
(66, 'Mie Tarempa', 'Sumatera dan Jawa', 'mietarempa.html', 'mietarempa.php'),
(67, 'Nasi Krawu', 'Sumatera dan Jawa', 'nasikrawu.html', 'nasikrawu.php'),
(68, 'Nasi Lapola', 'Maluku dan Papua', 'nasilapola.html', 'nasilapola.php'),
(69, 'Nasi Subut', 'Kalimantan dan Sulawesi', 'nasisubut.html', 'nasisubut.php'),
(70, 'Nasi Timbel', 'Sumatera dan Jawa', 'nasitimbel.html', 'nasitimbel.php'),
(71, 'Papeda', 'Maluku dan Papua', 'papeda.html', 'papeda.php'),
(72, 'Pampis Tongkol', 'Kalimantan dan Sulawesi', 'pampistongkol.html', 'pampistongkol.php'),
(73, 'Pempek Palembang', 'Sumatera dan Jawa', 'pempekpalembang.html', 'pempekpalembang.php'),
(74, 'Pendap', 'Sumatera dan Jawa', 'pendap.html', 'pendap.php'),
(75, 'Perut Ikan Bumbu Kering Kayu', 'Maluku dan Papua', 'perutikanbumbukeringkayu.html', 'perutikanbumbukeringkayu.php'),
(76, 'Pindang Ikan Patin', 'Sumatera dan Jawa', 'pindangikanpatin.html', 'pindangikanpatin.php'),
(77, 'Rabeg', 'Sumatera dan Jawa', 'rabeg.html', 'rabeg.php'),
(78, 'Rendang', 'Sumatera dan Jawa', 'rendang.html', 'rendang.php'),
(79, 'Roti Jala Kari Spesial', 'Sumatera dan Jawa', 'rotijalakarispesial.html', 'rotijalakarispesial.php'),
(80, 'Sale Pisang', 'Sumatera dan Jawa', 'salepisang.html', 'salepisang.php'),
(81, 'Sambal Krecek', 'Sumatera dan Jawa', 'sambalkrecek.html', 'sambalkrecek.php'),
(82, 'Sayur Asam Kutai', 'Kalimantan dan Sulawesi', 'sayurasamkutai.html', 'sayurasamkutai.php'),
(83, 'Sayur Garo', 'Maluku dan Papua', 'sayurgaro.html', 'sayurgaro.php'),
(84, 'Sayur Tagas Tagas', 'Maluku dan Papua', 'sayurtagastagas.html', 'sayurtagastagas.php'),
(85, 'Seruit', 'Sumatera dan Jawa', 'seruit.html', 'seruit.php'),
(86, 'Sinonggi', 'Kalimantan dan Sulawesi', 'sinonggi.html', 'sinonggi.php'),
(87, 'Soto Betawi', 'Sumatera dan Jawa', 'sotobetawi.html', 'sotobetawi.php'),
(88, 'Soto Medan', 'Sumatera dan Jawa', 'sotomedan.html', 'sotomedan.php'),
(89, 'Sup Gangan', 'Sumatera dan Jawa', 'supgangan.html', 'supgangan.php'),
(90, 'Sup Konro', 'Kalimantan dan Sulawesi', 'supkonro.html', 'supkonro.php'),
(91, 'Sup Tuna Kuah Asam', 'Sumatera dan Jawa', 'suptunakuahasam.html', 'suptunakuahasam.php'),
(92, 'Tekwan', 'Sumatera dan Jawa', 'tekwan.html', 'tekwan.php'),
(93, 'Tempoyak', 'Sumatera dan Jawa', 'tempoyak.html', 'tempoyak.php'),
(94, 'Timphan', 'Sumatera dan Jawa', 'timphan.html', 'timphan.php'),
(95, 'Tinutuan', 'Kalimantan dan Sulawesi', 'tinutuan.html', 'tinutuan.php'),
(96, 'Tiwul', 'Sumatera dan Jawa', 'tiwul.html', 'tiwul.php'),
(97, 'Tumis Ale Ale', 'Kalimantan dan Sulawesi', 'tumisaleale.html', 'tumisaleale.php'),
(98, 'Tumis Tudai', 'Kalimantan dan Sulawesi', 'tumistudai.html', 'tumistudai.php'),
(99, 'Udang Selingkuh', 'Maluku dan Papua', 'udangselingkuh.html', 'udangselingkuh.php'),
(100, 'Ulilulia', 'Kalimantan dan Sulawesi', 'ulilulia.html', 'ulilulia.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `resep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id`, `judul`, `penulis`, `resep`) VALUES
(1, 'Bakso Sapi', 'Fairuz Arifin', '<p><img alt=\"\" src=\"https://saintif.com/wp-content/uploads/2018/07/Bakso.jpg\" style=\"height:150px; margin-left:300px; margin-right:250px; width:267px\" /></p>\n\n<p>Bahan pentol bakso sapi:</p>\n\n<ul>\n	<li>Daging sapi 1 kg, giling</li>\n	<li>Tepung kanji 50 g</li>\n	<li>Telur 1 butir</li>\n	<li>Lada bubuk 2 sdt</li>\n	<li>Garam 1 sdt</li>\n	<li>Bawang putih 4 siung, haluskan</li>\n	<li>Es batu 40 g, hancurkan</li>\n	<li>Air 2 liter</li>\n</ul>\n\n<p>Cara membuat pentol bakso sapi:</p>\n\n<ul>\n	<li>Masukkan daging sapi yang telah digiling ke dalam wadah, campurkan tepung kanji, telur, lada bubuk, garam dan bawang putih yang telah dihaluskan.</li>\n	<li>Campur atau uleni dengan tangan atau bisa menggunakan alat sampai semua tercampur sempurna.</li>\n	<li>Jika dirasa adonan masih lembek dan sulit dibentuk, maka bisa ditambahkan es batu secara perlahan sampai dirasa adonan bisa dibentuk.</li>\n	<li>Rebus air dalam panci sampai mendidih.</li>\n	<li>Ambil adonan daging dengan tangan lalu bentuk bulat baik dengan kedua tangan atau dengan satu tangan ditekan hingga adonan keluar melalui jari telunjuk dan jempol.</li>\n	<li>Masukkan adonan yang telah terbentuk ke dalam air panas.</li>\n	<li>Lanjutkan hingga semua adonan habis.</li>\n	<li>Jika pentol telah mengapung maka pentol telah matang. Angkat</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `firstname`, `lastname`, `email`, `saran`) VALUES
(1, 'No', 'Name', 'mautauaja@gmail.com', 'Sudah cukup bagus. Perbanyak lagi resepnya ya.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
