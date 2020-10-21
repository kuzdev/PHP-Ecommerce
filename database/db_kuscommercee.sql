-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2020 pada 13.29
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuscommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_admin` varchar(32) NOT NULL,
  `pass_admin` varchar(32) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1. Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`id_admin`, `nama_admin`, `username`, `email_admin`, `pass_admin`, `alamat`, `level`) VALUES
(2, 'kus', 'kus', 'kus@g.c', '21232f297a57a5a743894a0e4a801fc3', 'yk', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(50) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`, `waktu_post`) VALUES
(1, 'Inilah Keuntungan Beli Tanah Kavling', 'Mengapa harus tanah kavling? Banyak orang yang perlu mengetahui bahwa terdapat sisi sangat menguntungkan bila kita membeli tanah kavling.\r\n&nbsp;\r\nPaling tidak, yang paling sering kita ketahui adalah bahwa tanah kavling minim perawatan, dibiarkan saja setahun mendatang sudah mendapatkan keuntungan yang cukup tinggi. Secara umum, inilah keuntungan membeli tanah kavling, diantaranya adalah;\r\n&nbsp;\r\nPertama, bisa dijual kembali saat harga sudah naik. Benar tanah akan selalu mengalami kenaikan yang signifikan setiap tahun. Itu artinya, bahwa tanah bisa likuid sewaktu-waktu, sesuai dengan keperluan pemilik tanah.\r\n&nbsp;\r\nKedua, bisa disewakan yang membuatnay menjadi lahan produktif. Maka, Anda memiliki pendapatan yang stabil tiap tahun yang mungkin bisa memberikan ANda tambahan untuk mengalokasikan pendapatan tersebut untuk usaha Anda yang lain sebagai modal.\r\n&nbsp;\r\nKetiga, sebagai tabungan bakal mengalami nilai kenaikan harga yang pasti. Coba saja tiga bulan kemudian, atau bahkan setahun mendatang dijual kembali. Otomatis lahan kavling Anda sudah memiliki nilai yang melebihi nilai awal saat Anda beli seturut pertumbuhan ekonomi.\r\n&nbsp;\r\nKeempat, memiliki nilai tambah yang lebih tinggi secara signifikan. Ini bila tanah akvling Anda bangun dengan model rumah type apa saja sesuai budget yang Anda inginkan. Nilainya bakal bertambah mekar bahkan melebihi nilai yang diperkirakan.\r\n&nbsp;\r\nMaka, membeli tanah kavling menjadi kunci untuk lebih meningkatkan penghasilan sesuai dengan kekuatan finansial yang dimiliki pemiliknya. Pada lokasi tertentu, tanah kavling bahkan harganya melonjak tinggi, terutama yang lingkungan sekitarnya telah terbangun dan tersedia fasilitas public yang dibutuhkan masyarakat seperti pendidikan, kesehatan, wisata juga infrastruktur.', 'Artikel_2020_07_05_1593960421.jpg', '2020-07-05 18:09:33'),
(3, 'Teliti Sebelum Membeli, Abaikan Harga Murah Luasan Sepetak', 'Memang benar ada begitu banyak berita dan informasi yang tidak enak didengar ihwal investasi tanah kavling. Tentang penipuan yang kavlingnya abal-abal, atau berkedok agama untuk mengambil untung dari penjualan tanah kavling.\r\n&nbsp;\r\nFakta tersebut menunjukkan betapa semua orang masih berharap untuk mendapatkan tanah yang layak sebagai hunian, atau memang untuk investasi. Tentu saja pada sebagian orang mendapatkan dengan harga hemat.\r\n&nbsp;\r\nBisa dipahami, bahwa masyarakat masih sangat membutuhkan tanah sebagai hunian. Ini bisa dilihat dari pertumbuhan penduduk yang semakin besar, sementara tanah persediaan untuk hunian malah makin menipis. Inilah yang membuat tanah menjadi langka, dan harganya pun semakin naik tiap tahun.\r\n&nbsp;\r\nNamun, ada pesan yang bisa ditangkap dari berbagai berita investasi tanah kavling abal-abal adalah bahwa faktor harga dan skema bayar memainkan peran cukup penting. Hal ini menunjukkan masyarakat mudah terpukau harga murah, sementara elemen penting legalitas menjadi terabaikan.\r\n&nbsp;\r\nPadahal, dalam penyediaan tanah kavling standar perumahan, legalitas menjadi faktor sangat penting yang harus ada dan tersedia. Mulai luasan yang sesuai aturan Perda setempat, bisa minimal 100m2 atau 120m2, lahan matang plus fasum yang perlu disediakan mulai jalan kavling paving block maupun cor beton selebar 5m. Dan yang terpenting adalah tentang SHM yang sudah pecah unit. Inilah elemen penting bagi konsumen untuk membeli tanah, baik sebagai hunian maupun investasi.\r\n&nbsp;\r\nSemua elemen tersebut jelas membuktikan bahwa tanah kavling standar perumahan yang ditawarkan memiliki kriteria yang layak, secara keekonomian maupun investasi. Teliti sebelum membeli. Untuk tanah kavling, produk KPTI jelas legalitasnya lebih pasti.', 'Artikel_2020_07_05_1593972487.jpg', '2020-07-05 18:08:07'),
(4, 'Mari Bung, Nabung Kembali …', 'Benarlah nasehat orang tua, sejak jaman dulu hingga sekarang, menabunglah selagi usia muda, selagi masih memiliki gaji. Menunggu gaji besar, ataupun menunda hingga tahun depan harga sudah berubah, tidak sama lagi seperti dulu.\r\n&nbsp;\r\nKira-kira mudahnya begini. Nabung itu tak hanya perkara memasukkan uang ke bank saja. Nabung itu bisa berupa batu bata untuk bangun rumah, bisa nabung hasil panen untuk musim selanjutnya. Ini yang biasa dilakukan orangtua jaman dulu untuk mem-back up kehidupan selanjutnya. Sederhana, memang.\r\n&nbsp;\r\nJaman berganti. Pesan klasik masih selalu terdengar. Apapun itu, pesan orangtua memang benar. Nabung tanah. Nasehat ini tak saja untuk mengamankan masa depan. Di era sekarang ini, nabung tanah sangat berharga bagi siapapun. Harga tanah tak selalu sama, bahkan berkecenderungan selalu naik. Setiap tahun. Andaikan semua anak muda memahami pesan itu, pastilah sekarang mereka menjadi bagian orang-orang yang telah menikmati seberapapun besar keuntungan memiliki tanah.\r\n&nbsp;\r\nPara saudagar kaya melakukan hal serupa. Mereka memanfaatkan laba dagangnya untuk membeli tanah. Istilah kerennya investasi. Membeli tanah dengan harga sekarang, yang pasti lebih hemat di kawasan lahan baru, lantas sewaktu-waktu menjualnya kembali ketika diperlukan.\r\n&nbsp;\r\nBegitulah. Nabung tanah sekarang harus pintar memilah. Di kawasan perkotaan maupun di kawasan baru berkembang, semua tertanam harga. Jangan lupa ihwal legalitas. Ini sangat penting bagi Anda. Pilih tanah kavling dengan legalitas lengkap, SHM pecah unit, luasan standar seusai aturan pemerintah plus Anda bisa pilih lokasi menawan nan strategis, yang tentu saja nilai kenaikannya cukup tinggi. Inilah nabung tanah yang asyik. Mari Bung, kita galakkan nabung tanah kembali. Demi masa depan anak cucu kita. ', 'Artikel_2020_07_05_1593973104.jpg', '2020-07-05 18:18:24'),
(5, 'Kapling Iming-Iming Harga Murah', 'Kini marak dijual kapling dengan iming-iming harga murah. Jelas terkesan murah sebab luasannya kecil, hanya 60-an m2.\r\n&nbsp;\r\nDibalik itu ada bahaya mengancam, sertipikat tanah tak bakal terbit dari BPN lantaran luasan melanggar ketetapan. &nbsp; Dari pada uang anda hilang melayang, pilih yang pasti-pasti saja. Jelas aman bila anda membeli tanah yang sertipikatnya telah terbit sesuai unitnya, bisa langsung di AJB kan dan balik nama. Di luar itu, anda harus hati-hati. &nbsp;\r\n&nbsp;\r\nMembeli tanah kapling jangan mudah tergiur promo harga murah. Sebab murah belum tentu aman. Jangankan untung, yang ada malah buntung kemudian. Urusan tanah anda harus jeli. Sederhananya, ajukan beberapa pertanyaan kritis sebelum menentukan beli.&nbsp;\r\n&nbsp;\r\nCek sertipikat asal tanah dan pastikan luasan tidak menabrak aturan Pemda setempat. Paling aman, belilah tanah sertipikat pecah dengan luas minimal 120-an m2.', 'Artikel_2020_07_05_1593973206.jpg', '2020-07-10 08:02:36'),
(6, 'Produk KPTI, Pengalaman Teruji Legalitas Terbukti', 'Benar. Kami telah berpengalaman lebih dari 17 tahun seabgai developer, yang akhirnya memutuskan untuk lebih fokus pada penyediaan tanah kavling bagi masyarakat. Produk KPTI seturut aturan pemda, luasan mulai 120m2 dengan legalitas sudah pecah SHM per unit.\r\n&nbsp;\r\nKami sadar bahwa memberikan layanan yang memuaskan semua pihak itu tak mudah. Oleh karena itu kami berprinsip bahwa selama tanah kavling produk kami sesuai aturan yang berlaku, dengan legalitas lengkap disertai fasum jalan yang lokasinya sesuai peruntukan, maka kami memberikan layanan untuk semua masyarakat yang membutuhkan. Ihwal harga, adakalanya kami fleksibel, menyesuaikan dengan ketersediaan budget konsumen.\r\n&nbsp;\r\nPaling penting bagi konsumen adalah memiliki tanah dengan cara proporsional, logis secara usaha dan adanya kepastian alas hak berupa SHM pecah unit yang bisa dibuktikan secara langsung.\r\n&nbsp;\r\nTerbukti, hingga 17 tahun lebih kami telah mendedikasikan diri sebagai developer penyedia tanah kavling, semua lahan kavling kami sesuai prosedur aturan. Fasum tersedia jalan kavling paving block maupun cor beton selebar 5m, lahan bersih rapi dengan bidang tanah datar memanjang ke belakang. Siteplan seperti ini sangat fungsional sebagai hunian, apalagi lebar depan kavling 8-12m. Ini yang membedakan lahan kavling kami dengan developer penyedia tanah kavling yang lain.\r\n&nbsp;\r\nAtas dasar pengalaman kami yang panjang itu, menunjukkan bahwa kami telah teruji waktu. Pula berbagai legalitas tanah kavling yang tersedia, sebagai bukti membeli kavling dan investasi tanah kavling produk KPTI sangat aman, nyaman dan membawa keuntungan.', 'Artikel_2020_07_05_1593973256.jpeg', '2020-07-05 18:20:56'),
(7, 'Lokasi Dulu, Eksekusi Kemudian', 'Siapapun yang berminat pada property hendaknya fokus pada lokasi, baru kemudian eksekusi. Sebab lokasi menentukan nilai transaksi, nilai investasi sekaligus capaian ekspektasi. Demikian nasehat Steven Bollenbach, GM Asia Hilton, jika hendak membeli produk property. &nbsp; Usai memahami lokasi, adalah hal yang sangat bijak untuk melirik akses kemudahan lokasi, yang tentu saja bakal memudahkan mobilitas. Perlu diperhatikan sejauh mana lokasi di kawasan tersebut pada masa yang akan datang. Bisa dari sisi infrastruktur, fasilitas publik serta bagaimana cara untuk memilikinya. &nbsp; Ada baiknya memilih lokasi bagus, strategis dari sisi mobilitas dan pertambahan nilai asset pun masih bisa mendapatkan cara bayar yang mudah untuk memilikinya. &nbsp; Ambil opsi untuk mendapatkan cara bayar mudah, jika kekuatan budget tidak memenuhi untuk pembayaran secara cash. Hal ini bisa dikomunikasikan dengan marketing. Ada sejumlah opsi yang biasanya ditawarkan, mulai pembayaran bertahap hingga berangsur hingga 6-12X tanpa bunga. &nbsp; Nah, dengan cara demikian, kita sudah menerima sertipiakt SHM pecah unit sesuai kesepakatan di awal. Dan, membayar secara bertahap tanah kavling, membuat kita jadi lebih realistis. Memiliki tanah kavling dulu ketimbang beli rumah jadi lebih memungkinkan kita untuk membangun rumah sesuai keinginan. &nbsp; &ldquo;Menabunglah di muka, belanja belakangan&rdquo;, serupa itulah prinsip investasi Warren Buffet. Dan, jadilah bagian orang-orang yang bijak, menabung untuk investasi yang bahkan bisa dinikmati bersama anak cucu kelak. &nbsp; Maka, belilah tanah. Menabung tanah, segerakan investasi tanah. Selagi harga sekarang masih hemat, karena tahun depan Anda tak lagi mendapati harga murah. Atau jangan-jangan malah nggak kebagian tanah. &nbsp;', 'Artikel_2020_07_05_1593973305.jpg', '2020-09-17 14:05:32'),
(8, 'Jualan dimasa Pandemi Check', 'Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;Lorenmak jsda jkjsd kas kahdu kakiahf, kake skief bufsei, kdf, ksdfihfbf, kaaaaaaabfe, dah akdeaas.&nbsp;\r\nasdsd sdsdsda adad asa\r\n sdd sdsd sassd dfasd assad\r\n&nbsp;lohe-lohe\r\n&nbsp;', 'Artikel_2020_09_16_1600244049.jpg', '2020-09-28 11:01:54'),
(9, 'Jualan aja', 'Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property&nbsp;Form upload untuk artikel tentang seputar property', 'Artikel_2020_09_29_1601369679.png', '2020-09-29 08:54:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detilpembelian`
--

CREATE TABLE `detilpembelian` (
  `id_detilpembelian` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_member` int(5) NOT NULL,
  `id_pesan` int(5) NOT NULL,
  `ongkir` int(32) NOT NULL,
  `harga_produk` int(32) NOT NULL,
  `sub_harga` int(32) NOT NULL,
  `berat_produk` int(32) NOT NULL,
  `sub_berat` int(32) NOT NULL,
  `jumlah_produk` int(32) NOT NULL,
  `tot_beli` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sepatu'),
(2, 'Celana'),
(25, 'Tas Gunung'),
(27, 'Tas Gunung'),
(28, 'Baju Baru Nie'),
(29, 'Sepatu Sport'),
(30, 'Tas Laptop'),
(31, 'Tshirt Vertical'),
(32, 'Tas'),
(33, 'Jaket'),
(34, 'Sepatu Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `username_member` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password_member` varchar(32) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `username_member`, `email`, `password_member`, `alamat`) VALUES
(1, 'q', 'q', 'kusno.classroom@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'Yogyakarta'),
(2, 'putra', 'p', 'affanofficial25@gmail.com', '83878c91171338902e0fe0fb97a8c47a', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(5) NOT NULL,
  `id_beli` int(5) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tot_bayar` int(32) NOT NULL,
  `verifikasi` enum('BB','D','S','K') NOT NULL,
  `id_member` int(5) NOT NULL,
  `metode_bayar` varchar(50) NOT NULL,
  `ongkir` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_member` int(5) NOT NULL,
  `invoice` varchar(32) NOT NULL,
  `tgl_beli` date NOT NULL,
  `alamat_kirim` varchar(100) NOT NULL,
  `metode_bayar` varchar(32) NOT NULL,
  `metode_kirim` varchar(32) NOT NULL,
  `tot_beli` int(32) NOT NULL,
  `tot_ongkir` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `harga` int(32) NOT NULL,
  `diskon` int(32) NOT NULL,
  `deskripsi` text NOT NULL,
  `berat_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `id_kategori`, `foto_produk`, `harga`, `diskon`, `deskripsi`, `berat_produk`) VALUES
(18, 'TShirt H&M New', 28, 'Produk_2020_10_01_1601585722.png', 23000, 30000, 'lorem ipsum', 28),
(21, 'Salena', 29, 'Produk_2020_10_01_1601586293.jpg', 23000, 2000, 'cantikkk', 29),
(22, 'Kaos Garis Vertical', 31, 'Produk_2020_10_06_1601992307.png', 250000, 30000, 'Kaos Vertical Strip', 31),
(23, 'Jaket Blue+', 33, 'Produk_2020_10_06_1601992828.png', 230000, 20000, 'Jaket Boomber', 33),
(24, 'TAS Baggy+', 32, 'Produk_2020_10_06_1601993180.png', 200000, 0, 'Tas Pria', 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `ukuran_stok` varchar(5) NOT NULL,
  `jumlah_stok` varchar(5) NOT NULL,
  `warna` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id_stok`, `id_produk`, `ukuran_stok`, `jumlah_stok`, `warna`) VALUES
(2, 2, '42', '4', 'White Brown'),
(3, 3, 'M', '4', 'White Brown');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `detilpembelian`
--
ALTER TABLE `detilpembelian`
  ADD PRIMARY KEY (`id_detilpembelian`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_produk_2` (`id_produk`),
  ADD KEY `id_produk_3` (`id_produk`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_produk_2` (`id_produk`),
  ADD KEY `id_produk_3` (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `detilpembelian`
--
ALTER TABLE `detilpembelian`
  MODIFY `id_detilpembelian` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detilpembelian`
--
ALTER TABLE `detilpembelian`
  ADD CONSTRAINT `detilpembelian_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detilpembelian_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_beli`) REFERENCES `pembelian` (`id_beli`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
