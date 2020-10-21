-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 07:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tanah_kavling`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_proyek`
--

CREATE TABLE `alternatif_proyek` (
  `id_proyek` int(5) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `judul_proyek` varchar(100) NOT NULL,
  `deskripsi_proyek` text NOT NULL,
  `sertifikat_proyek` varchar(6) NOT NULL,
  `provinsi_proyek` varchar(50) NOT NULL,
  `kabupaten_proyek` varchar(32) NOT NULL,
  `luastanah_proyek` int(6) NOT NULL,
  `harga_m_proyek` varchar(16) NOT NULL,
  `lebar_depan_proyek` int(6) NOT NULL,
  `harga_total_proyek` varchar(16) NOT NULL,
  `jarak_proyek` int(6) NOT NULL,
  `fasilitas_proyek` int(6) NOT NULL,
  `fotoproyek1` varchar(50) NOT NULL,
  `fotoproyek2` varchar(50) NOT NULL,
  `fotoproyek3` varchar(50) NOT NULL,
  `fotoproyek4` varchar(50) NOT NULL,
  `fotoproyek5` varchar(50) NOT NULL,
  `nama_pengelola` varchar(32) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `nomor_hp` varchar(16) NOT NULL,
  `status_post` int(2) NOT NULL DEFAULT 0,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif_proyek`
--

INSERT INTO `alternatif_proyek` (`id_proyek`, `nama_proyek`, `judul_proyek`, `deskripsi_proyek`, `sertifikat_proyek`, `provinsi_proyek`, `kabupaten_proyek`, `luastanah_proyek`, `harga_m_proyek`, `lebar_depan_proyek`, `harga_total_proyek`, `jarak_proyek`, `fasilitas_proyek`, `fotoproyek1`, `fotoproyek2`, `fotoproyek3`, `fotoproyek4`, `fotoproyek5`, `nama_pengelola`, `nama_kantor`, `nomor_hp`, `status_post`, `waktu_post`) VALUES
(1, 'Pengasih Residence', 'Investasi Tumbuh di Jogja Barat Kavling Kota Wates Menguntungkan', 'Coba anda bayangkan, Setidaknya ada 45 destinasi wisata di Kulonprogo. Lokasinya saling berdekatan dan memiliki jaringan infrastruktur dengan Bandara JIA. &nbsp;\r\n&nbsp;\r\nDaya tarik wisata, sebenarnya memiliki potensi ganda sebagai lokasi tepat untuk menabung tanah, sebagai spot bertumbuhnya perekonomian yang beriringan dengan nilai strategis property. &nbsp;\r\n&nbsp;\r\nSeputar Lokasi :\r\n- Kawasan Wates Kota\r\n- Dekat kawasan Universitas\r\n- 15 menit ke Bandara JIA', 'SHM', 'Yogyakarta', 'Kulon Progo', 193, '1.600.000', 8, '308.800.000', 7, 3, 'Foto1_2020_07_09_1594315124.jpg', 'Foto2_2020_07_09_1594315124.jpg', 'Foto3_2020_07_09_1594315124.jpg', 'Foto4_2020_07_09_1594314956.jpg', 'Foto5_2020_07_09_1594314956.jpg', 'Arif', 'ATM Property', '081358833012', 1, '2020-07-09 17:13:38'),
(2, 'Taman Ayodya', 'Ayodya Residence Mepet Ringroad Utara 345 m2 Bentuk Persegi Panjang', 'Pemerintah pusat telah membangun 10 kawasan pariwisata baru berskala internasional. Seperti Hal nya di Bali, Jogja semakin pesat berkembang dengan adanya jalur wisata Toll Borobudur. &nbsp;\r\n&nbsp;\r\nJogja ketiban berkah. Pembangunan hotel, resort, villa, dan sarana transportasi kini ditingkatkan. Sampai pinggiran kota. Anda investasi tanah pilih lokasi dimana saja pasti untung. Dijamin Pasti! &nbsp;\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\nDekat Jalan Palagan\r\nDekat Jalan Magelang\r\nDekat Jogja City Mall\r\nDekat Jalan Kabupaten\r\nDekat Lapangan Sono Raya\r\nSMK Muhammadiyah Mlati\r\nMasjid Hidayah Purwosari', 'SHM', 'Yogyakarta', 'Sleman', 345, '4.300.000', 12, '1.483.500.000', 9, 5, 'Foto1_2020_07_09_1594315698.jpg', 'Foto2_2020_07_09_1594315698.jpg', 'Foto3_2020_07_09_1594315698.jpg', 'Foto4_2020_07_09_1594315698.jpg', 'Foto5_2020_07_09_1594315698.jpg', 'Aria', 'ATM Property', '081903743079', 1, '2020-07-09 17:27:36'),
(3, 'Mlati Residence', 'Mlati Dekat Sleman City Hall, Beli Tanah Kavling Untung Berlipat', 'Sudah jelas, dibalik gencarnya pembangunan infrastruktur adalah tentang nilai kelayakan investasi property, tanah dan peristiwa ekonomi lain yang menyertainya. &nbsp;\r\n&nbsp;\r\nMari kita memandang dengan cara yang berbeda. Setahun atau dua tahun lagi, apakah kita masih kebagian tanah atau hunian yang nilainya sudah sangat tinggi? &nbsp;\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\nDekat Cebongan\r\nDekat RSA UGM\r\nDekat Jogja City Mall\r\nDekat Sleman City Hall\r\nDekat Sindu Kusuma Edupark\r\nKampus UTY', 'SHM', 'Yogyakarta', 'Sleman', 209, '3.700.000', 8, '773.300.000', 5, 5, 'Foto1_2020_07_09_1594316180.jpg', 'Foto2_2020_07_09_1594316180.jpg', 'Foto3_2020_07_09_1594316180.jpg', 'Foto4_2020_07_09_1594316180.jpg', 'Foto5_2020_07_09_1594316180.jpg', 'Aria', 'ATM Property', '081903743079', 1, '2020-07-09 17:32:23'),
(4, 'Candi Indah', 'JORR Naikkan Nilai Investasi Kavling Jogja Kota Jogja Kota Profit Berlipat', 'Hampir sebagian besar jalur lintas selatan memasuki fase ramai di bulan Juni ini, bersambung ke jalan Wates menuju Jogjakarta. Bisa dibilang, inilah jalur utama dari Bandara JIA ke Jogjakarta. &nbsp; &nbsp; Bicara tentang Jogjakarta, tak hanya tujuan wisata. Lebih dari itu. Jogjakarta lebih hidup dengan keterbukaan, keramahan, juga tentang propertinya. &nbsp; Spesifikasi : - Legalitas SHM-P Pecah Unit - Lebar depan mulai 8m - Jalan lingkungan paving rapi lebar 5mtr &nbsp; &nbsp; Seputar Lokasi : - 5 Menit Ke Bandara Adi Sucipto Yogyakarta - Lingkungan Bisnis dan Kuliner - Lingkungan Kost Premium dan Perumahan Premium', 'SHM', 'Yogyakarta', 'Sleman', 112, '3.100.000', 10, '347.200.000', 16, 3, 'Foto1_2020_07_09_1594316951.jpg', 'Foto2_2020_07_09_1594316951.jpeg', 'Foto3_2020_07_09_1594316951.jpeg', 'Foto4_2020_07_09_1594316951.jpg', 'Foto5_2020_07_09_1594316951.jpg', 'Arya', 'ATM Property', '082241917779', 1, '2020-07-09 17:46:38'),
(5, 'Balecatur Residence', 'JORR Naikkan Nilai Investasi Kavling Jogja Barat Pasti Untung', 'Wajah Jogja telah berganti lebih baru. Pembangunan tourism property di mana-mana. Jogja barat, Wonosari, Bantul arah Pajangan, hingga Kalasan sektor pariwisatnya sudah sangat meningkat..\r\n&nbsp;\r\nJogja tetap nyaman. Atas alasan inilah pertumbuhan property di kota Gudeg ini maju pesat. Waktunya anda ambil bagian sekarang. Investasi tanah, memetik untung besar kemudian. &nbsp;\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\nJalan Wates\r\nPasar Gamping\r\nKampus Mercubuana Yogyakarta\r\nRSU Mitra Sehat UMY', 'SHM', 'Yogyakarta', 'Kulon Progo', 157, '1.300.000', 9, '204.100.000', 14, 5, 'Foto1_2020_07_09_1594317628.jpg', 'Foto2_2020_07_09_1594317628.jpg', 'Foto3_2020_07_09_1594317628.jpg', 'Foto4_2020_07_09_1594317628.jpg', 'Foto5_2020_07_09_1594317628.jpg', 'Aria', 'ATM Property', '081215955075', 0, '2020-07-09 17:55:37'),
(6, 'Panjatan View', 'Saat Tepat Investasi, Selagi Harga Tanah Masih Sunrise, Dekat YIA', 'Seluas 309 ha lahan disiapkan di barat Bandara JIA untuk pengembangan pariwisata prioritas. Berjarak hanya satu jam dari Candi Borobudur.\r\n&nbsp;\r\nMelihat jarak dan waktu tempuh antara JIA-KEK-Borobudur, terbayang pertumbuhan pesat ekonomi masyarakat. Manfaatkan momen untuk investasi tanah, hunian komersiil, atau ruko.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\nDekat Jl Ki Hadi Sugito\r\nDekat Jl Nagung-Brosot\r\nDekat SDN Ngebung\r\nDekat Balai Kanoman Panjatan Kulon Progo', 'SHM', 'Yogyakarta', 'Kulon Progo', 145, '1.300.000', 9, '188.500.000', 11, 3, 'Foto1_2020_07_09_1594318653.png', 'Foto2_2020_07_09_1594318653.jpg', 'Foto3_2020_07_09_1594318653.jpg', 'Foto4_2020_07_09_1594318653.jpg', 'Foto5_2020_07_09_1594318653.jpg', 'Arya', 'ATM Property', '081903743079', 0, '2020-07-09 18:17:33'),
(7, 'Pesona Pengasih', 'Area Penyangga Bandara JIA Terbukti Berkembang, Marilah Beli Tanah', 'Kabar baik. Kantor imigrasi akan membuka layanan di kawasan Bandara JIA. Langkah ini diambil menyusul penerbangan internasional yang dimulai dua bulan usai beroperasinya Bandara JIA. &nbsp;\r\n&nbsp;\r\nDiproyeksikan, semakin banyak pergerakan penumpang dengan tujuan wisata. Perkembangan ini memberi sinyal potensi besar bangunan komersiil. Artinya, segeralah investasi tanah kapling untuk ruko, kost, rumah penginapan maupun hotel.', 'SHM', 'Yogyakarta', 'Kulon Progo', 225, '1.550.000', 8, '348.750.000', 13, 4, 'Foto1_2020_07_09_1594318835.jpg', 'Foto2_2020_07_09_1594318835.jpeg', 'Foto3_2020_07_09_1594318835.jpeg', 'Foto4_2020_07_09_1594318835.jpg', 'Foto5_2020_07_09_1594318835.jpg', 'Arif', 'ATM Property', '081358833012', 0, '2020-07-09 18:20:35'),
(8, 'Cluster Hargosari', 'Cluster Hargosari Wates Kota, Dekat Bandara YIA, Untung Berlipat', 'Prinsip pengembangan JIA meliputi struktur ruang wilayah, jarak, zonasi, tata guna lahan, peruntukan utama fungsi kawasan, penyediaan kawasan bisnis, integrasi, dan konektivitas. &nbsp; &nbsp; Ada berbagai jenis kegiatan bisnis lainnya, sehingga bandara JIA dan wilayah sekitarnya merupakan kawasan komersial yang terintegrasi. &nbsp; Info Sekitar Lokasi : Masjid Agung Wates Timur Alun Alun Wates Bandara Baru JIA Jalan Utama Pengasih', 'SHM', 'Yogyakarta', 'Kulon Progo', 127, '1.200.000', 9, '152.400.000', 8, 4, 'Foto1_2020_07_09_1594319933.jpg', 'Foto2_2020_07_09_1594319933.jpeg', 'Foto3_2020_07_09_1594319933.jpg', 'Foto4_2020_07_09_1594319933.jpg', 'Foto5_2020_07_09_1594319933.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 18:38:53'),
(9, 'Wisma Jetis', 'Bandara YIA Wates Resmi Digunakan, Invetasilah di Jogja Barat', 'Wates kota kini menjadi gerbang Jogja. Bandara YIA nan megah landcape-nya. JATENG selatan pun ketiban berkah. KEK Pariwisata Borobudur melintas Bedah Menoreh tembus Wates sekarang.\r\n&nbsp;\r\nTahun depan, Jogja barat membentang sampai Kulonprogo bakal berubah drastis. Pesat sekali pembangunannya.\r\n&nbsp;\r\nTidak kah anda kepikiran untuk beli tanah, itu pertanyaanya.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\n&bull; 3 Km dari bandara NYIA Wates\r\n&bull; 2 Km ke Pelabuhan Adikarto Wates\r\n&bull; Selatan Jl. Wates &ndash; Jogja', 'SHM', 'Yogyakarta', 'Kulon Progo', 214, '1.700.000', 10, '363.800.000', 11, 3, 'Foto1_2020_07_09_1594320160.jpg', 'Foto2_2020_07_09_1594320160.jpg', 'Foto3_2020_07_09_1594320160.jpg', 'Foto4_2020_07_09_1594320160.jpg', 'Foto5_2020_07_09_1594320160.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 18:42:40'),
(10, 'Pengasih View', 'Investasikan Uang Anda Jelas untungkan, Timur YIA, Kota Jogja Barat', 'Lain Kualanamu Medan, lain pula YIA Jogja. Meski sejarak 40-an Km di sisi barat, relokasi bandara ke Wates ternyata sesuai master plan kota.\r\n&nbsp;\r\nKampus, Perkantoran, Pemukiman, Rumah sakit modern, serta kawasan wisata baru Jogja direlokasi ke arah Kulonprogo. Dan itu semua tentang pertumbuhan property. Perihal investasi tanah kapling.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\n- POLRES dan Kantor PEMDA Wates\r\n- Kampus UNY Wates\r\n- Bandara NYIA Jogja', 'SHM', 'Yogyakarta', 'Kulon Progo', 169, '1.700.000', 12, '287.300.000', 7, 3, 'Foto1_2020_07_09_1594323232.jpg', 'Foto2_2020_07_09_1594323232.jpg', 'Foto3_2020_07_09_1594323232.jpeg', 'Foto4_2020_07_09_1594323232.jpg', 'Foto5_2020_07_09_1594323232.jpg', 'Arya', 'GM Property', '082139133300', 0, '2020-07-09 19:33:52'),
(11, 'Margosari', 'Bandara YIA Wates Resmi digunakan, Mari Nabung Tanah', 'Berkah beroperasinya Bandara JIA tak hanya tentang destinasi wisata di Jogjakarta dan sekitarnya, namun lebih dari itu.\r\n&nbsp;\r\nJogjakarta itu multi talenta, ada wisata, pendidikan, kebudayaan, keragaman kuliner serta keramahan penduduknya, sekaligus menunjukkan destinasi investasi yang menguntungkan.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\n- 300m ke Universitas IKIP PGRI Wates\r\n- UNY Kulonprogo\r\n- Utara Jl. Wates &ndash; Jogja', 'SHM', 'Yogyakarta', 'Kulon Progo', 154, '1.800.000', 12, '277.200.000', 8, 3, 'Foto1_2020_07_09_1594323430.jpg', 'Foto2_2020_07_09_1594323430.jpg', 'Foto3_2020_07_09_1594323430.jpg', 'Foto4_2020_07_09_1594323430.jpg', 'Foto5_2020_07_09_1594323430.jpg', 'Anton', 'GM Property', '082139133300', 0, '2020-07-09 19:37:10'),
(12, 'Pengasih Permai', 'Bandara Baru Wates Operasional, Bergegaslah Invetasi di Jogja', 'Hadirnya Bandara JIA, memberikan perubahan banyak hal, terutama infrastruktur. Mulai dari kawasan barat Jogjakarta yang telah menjelma menjadi spot perekonomian baru yang bertumbuh pesat.\r\n&nbsp;\r\nKawasan JIA bersambung ke arah utara Jogjakarta, melalui JORR, membentang sepanjang 113,413km dari Sentolo-Minggir-Tempel-Kalasan. Inilah area yang layak untuk menabung tanah.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\n- Area Universitas Wates\r\n- Belakang Polres Kulonprogo\r\n- Utara Jalan Wates &ndash; Jogja', 'SHM', 'Yogyakarta', 'Kulon Progo', 209, '1.500.000', 9, '313.500.000', 8, 3, 'Foto1_2020_07_09_1594323610.jpg', 'Foto2_2020_07_09_1594323610.jpg', 'Foto3_2020_07_09_1594323610.jpg', 'Foto4_2020_07_09_1594323610.jpg', 'Foto5_2020_07_09_1594323610.jpg', 'Ridho', 'GM Property', '082139133300', 0, '2020-07-09 19:40:10'),
(13, 'Kedungsari', 'Tanah Murah Kedungasri Area Bandara YIA, Untung Pasti !', 'Silahkan luangkan waktu, melintaslah sepanjang jalan arteri Jogja-Wates. Atau, ambil start Bantul Kota ke barat via Srandakan, lanjut Lendah, hingga Temon menuju bandara YIA.\r\n&nbsp;\r\nKami jamin anda bakal terkejut mendapati pesat pembangunan sepanjang kanan kiri jalan. Ya, Jogja sedang dimekarkan ke barat. Itu kabar baiknya bagi investor tanah.\r\n&nbsp;\r\nInfo Sekitar Lokasi:\r\n400m selatan Jl. Wates &ndash; Jogja\r\nBarat Jl. Sentolo &ndash; Bantul\r\nTimur Polres Wates Kulonprogo', 'SHM', 'Yogyakarta', 'Kulon Progo', 121, '1.400.000', 9, '169.400.000', 12, 3, 'Foto1_2020_07_09_1594323834.jpg', 'Foto2_2020_07_09_1594323834.jpeg', 'Foto3_2020_07_09_1594323834.jpg', 'Foto4_2020_07_09_1594323834.jpg', 'Foto5_2020_07_09_1594323834.jpg', 'Yudha', 'GM Property', '082139133300', 0, '2020-07-09 19:43:54'),
(14, 'Taraman Permai', 'Lingkungan Kampus, Tanah Kapling Jelas Untung, Legalitas Aman', 'Kali ini tentang investasi property. Pilihan paling menguntungkan ialah Sleman. Sepanjang Jalan Kaliurang . Karena itu bergegaslah.\r\n&nbsp;\r\nBanyak Kampus Di Buka , kuat sebagai bukti. Betapa 3 tahun mendatang pertumbuhan kota berikut propertinya pesat ke Jogja Utara.\r\n&nbsp;\r\n&nbsp;\r\nInfo Sekitar Lokasi\r\n&bull;Selatan Kampus UII Jogja\r\n&bull;Utara SD Model Sleman\r\n&bull;Utara Stadion Maguwoharjo\r\n&bull;Timur Jl. Kaliurang Km. 10', 'SHM', 'Yogyakarta', 'Sleman', 227, '3.500.000', 10, '794.500.000', 7, 4, 'Foto1_2020_07_09_1594323985.jpg', 'Foto2_2020_07_09_1594323985.jpg', 'Foto3_2020_07_09_1594323985.jpg', 'Foto4_2020_07_09_1594323985.jpg', 'Foto5_2020_07_09_1594323985.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 19:46:25'),
(15, 'Taruma Residence', 'Kaplingan Tanah Legalitas Aman, Untung Berlipat, Utara UGM', 'Kaplingan ideal perumahan, Taruma View. \r\n&nbsp;\r\nBuat nabung masa depan sangat bagus, tinggalan terbaik anak cucu dan nilai tanahnya naik berlipat, fasilitas publik dan infrastruktur OK.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\n&nbsp;\r\nDekat UII\r\nTimur Pasar Gentan\r\nJalan Kaliurang\r\nRS Gramedika', 'SHM', 'Yogyakarta', 'Sleman', 140, '3.200.000', 10, '448.000.000', 6, 3, 'Foto1_2020_07_09_1594324150.jpg', 'Foto2_2020_07_09_1594324150.jpeg', 'Foto3_2020_07_09_1594324150.jpg', 'Foto4_2020_07_09_1594324150.jpg', 'Foto5_2020_07_09_1594324150.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 19:49:10'),
(16, 'Kalasan View', 'Kaplingan Kalasan  View, Zona Rencana JORR, Untung Berlipat', 'Benarlah ucapan para orang tua. Menabung tak hanya rupa uang koin dan lembaran merah ratusan ribu. Menabung yang nilainya menjangkau segala situasi tentu saja menabung tanah.\r\n&nbsp;\r\nMereka simpel, tanah nilainya selalu naik yang bahkan dalam ekonomi sulit masih mudah untuk dicairkan.\r\n&nbsp;\r\ninfo Sekitar Lokasi : \r\n&nbsp;\r\nCandi Prambanan\r\nRS PDHI\r\nJalan Raya Solo-Prambanan', 'SHM', 'Yogyakarta', 'Sleman', 131, '1.600.000', 9, '209.600.000', 13, 2, 'Foto1_2020_07_09_1594325470.jpg', 'Foto2_2020_07_09_1594325470.jpeg', 'Foto3_2020_07_09_1594325470.jpg', 'Foto4_2020_07_09_1594325470.jpg', 'Foto5_2020_07_09_1594325470.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 20:11:10'),
(17, 'Tamantirto View', 'SHMP; Tamantirto View dekat Kampus UMY, Rumah Hemat 150 Jt', 'Percayakah Anda bila Jogja bakal punya JORR? Bukan isu! Ouuter ringroad itu bagian master plan kota. Pasti dibangun, nyambung ke Exit Tol Godean dari arah Semarang. \r\n&nbsp;\r\nPembangunan Infrastruktur Jogja ke barat itu berkah. Rizqi nomplok bagi yang melek investasi properti. Pembeli tanah kapling tepatnya. \r\n&nbsp;\r\nInfo Sekitar Lokasi : \r\n5 menit ke kampus UMY\r\n10 menit ke Malioboro\r\nTimur Padma Residen\r\n- Timur Pondok Permai 2', 'SHM', 'Yogyakarta', 'Bantul', 201, '1.900.000', 12, '381.900.000', 15, 4, 'Foto1_2020_07_09_1594325664.jpg', 'Foto2_2020_07_09_1594325664.jpg', 'Foto3_2020_07_09_1594325664.jpg', 'Foto4_2020_07_09_1594325664.jpg', 'Foto5_2020_07_09_1594325664.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 20:14:24'),
(18, 'Kalianda View', 'Jajan Tanah Jelas Menguntungkan, Investasi Timur YIA, Kulonprogo', 'Ada kereta yang menghubungkan bandara JIA dan Adisucipto. Stasiun Maguwo untuk penumpang Adisucipto yang terhubung langsung dengan stasiun Kedundang yang melayani penumpang menuju JIA.\r\n&nbsp;\r\nAkses mudah menuju kedua bandara di Jogjakarta itu memiliki pertimbangan pertumbuhan ekonomi dan investasi kawasan di sekitarnya.\r\n&nbsp;\r\nInfo Sekitar Lokasi :\r\nMasjid Agung Kulonprogo\r\nJalan Pahlawan\r\nBandara Baru YIA', 'SHM', 'Yogyakarta', 'Kulon Progo', 136, '1.000.000', 8, '136.000.000', 12, 3, 'Foto1_2020_07_09_1594325822.jpg', 'Foto2_2020_07_09_1594325822.jpeg', 'Foto3_2020_07_09_1594325822.jpg', 'Foto4_2020_07_09_1594325822.jpg', 'Foto5_2020_07_09_1594325822.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 20:17:02'),
(19, 'Selosari', 'JORR Tahap Pemetaan, Beli Kavling Sekarang, Untung Berlipat Tahun Depan', 'Liburan ke Jogja? Siapa yang tidak tertarik. Kota Gudeg memang sudah lama dikenal sebagai salah satu destinasi populer di Indonesia. Ada begitu banyak wisata Jogja yang menawarkan pemandangan dan pengalaman luar biasa.\r\n&nbsp;\r\nSambil menyelam minum air. Sembari liburan ambil kesempatan untuk investasi tanah di bagian utara Jogjakarta, dekat beberapa kampus dengan suasana yang hommy.\r\n&nbsp;\r\nInfo Sekitar Lokasi:\r\n&nbsp;\r\nUtara Candi Sambisari\r\nRS Gramedika\r\nUtara Bandara Adisucipto', 'SHM', 'Yogyakarta', 'Sleman', 125, '1.500.000', 8, '187.500.000', 8, 3, 'Foto1_2020_07_09_1594325968.jpg', 'Foto2_2020_07_09_1594325968.jpeg', 'Foto3_2020_07_09_1594325968.jpeg', 'Foto4_2020_07_09_1594325968.jpg', 'Foto5_2020_07_09_1594325968.jpg', 'Angky', 'GM Property', '082139133300', 0, '2020-07-09 20:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(50) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`, `waktu_post`) VALUES
(1, 'Inilah Keuntungan Beli Tanah Kavling', 'Mengapa harus tanah kavling? Banyak orang yang perlu mengetahui bahwa terdapat sisi sangat menguntungkan bila kita membeli tanah kavling.\r\n&nbsp;\r\nPaling tidak, yang paling sering kita ketahui adalah bahwa tanah kavling minim perawatan, dibiarkan saja setahun mendatang sudah mendapatkan keuntungan yang cukup tinggi. Secara umum, inilah keuntungan membeli tanah kavling, diantaranya adalah;\r\n&nbsp;\r\nPertama, bisa dijual kembali saat harga sudah naik. Benar tanah akan selalu mengalami kenaikan yang signifikan setiap tahun. Itu artinya, bahwa tanah bisa likuid sewaktu-waktu, sesuai dengan keperluan pemilik tanah.\r\n&nbsp;\r\nKedua, bisa disewakan yang membuatnay menjadi lahan produktif. Maka, Anda memiliki pendapatan yang stabil tiap tahun yang mungkin bisa memberikan ANda tambahan untuk mengalokasikan pendapatan tersebut untuk usaha Anda yang lain sebagai modal.\r\n&nbsp;\r\nKetiga, sebagai tabungan bakal mengalami nilai kenaikan harga yang pasti. Coba saja tiga bulan kemudian, atau bahkan setahun mendatang dijual kembali. Otomatis lahan kavling Anda sudah memiliki nilai yang melebihi nilai awal saat Anda beli seturut pertumbuhan ekonomi.\r\n&nbsp;\r\nKeempat, memiliki nilai tambah yang lebih tinggi secara signifikan. Ini bila tanah akvling Anda bangun dengan model rumah type apa saja sesuai budget yang Anda inginkan. Nilainya bakal bertambah mekar bahkan melebihi nilai yang diperkirakan.\r\n&nbsp;\r\nMaka, membeli tanah kavling menjadi kunci untuk lebih meningkatkan penghasilan sesuai dengan kekuatan finansial yang dimiliki pemiliknya. Pada lokasi tertentu, tanah kavling bahkan harganya melonjak tinggi, terutama yang lingkungan sekitarnya telah terbangun dan tersedia fasilitas public yang dibutuhkan masyarakat seperti pendidikan, kesehatan, wisata juga infrastruktur.', 'Artikel_2020_07_05_1593960421.jpg', '2020-07-05 18:09:33'),
(3, 'Teliti Sebelum Membeli, Abaikan Harga Murah Luasan Sepetak', 'Memang benar ada begitu banyak berita dan informasi yang tidak enak didengar ihwal investasi tanah kavling. Tentang penipuan yang kavlingnya abal-abal, atau berkedok agama untuk mengambil untung dari penjualan tanah kavling.\r\n&nbsp;\r\nFakta tersebut menunjukkan betapa semua orang masih berharap untuk mendapatkan tanah yang layak sebagai hunian, atau memang untuk investasi. Tentu saja pada sebagian orang mendapatkan dengan harga hemat.\r\n&nbsp;\r\nBisa dipahami, bahwa masyarakat masih sangat membutuhkan tanah sebagai hunian. Ini bisa dilihat dari pertumbuhan penduduk yang semakin besar, sementara tanah persediaan untuk hunian malah makin menipis. Inilah yang membuat tanah menjadi langka, dan harganya pun semakin naik tiap tahun.\r\n&nbsp;\r\nNamun, ada pesan yang bisa ditangkap dari berbagai berita investasi tanah kavling abal-abal adalah bahwa faktor harga dan skema bayar memainkan peran cukup penting. Hal ini menunjukkan masyarakat mudah terpukau harga murah, sementara elemen penting legalitas menjadi terabaikan.\r\n&nbsp;\r\nPadahal, dalam penyediaan tanah kavling standar perumahan, legalitas menjadi faktor sangat penting yang harus ada dan tersedia. Mulai luasan yang sesuai aturan Perda setempat, bisa minimal 100m2 atau 120m2, lahan matang plus fasum yang perlu disediakan mulai jalan kavling paving block maupun cor beton selebar 5m. Dan yang terpenting adalah tentang SHM yang sudah pecah unit. Inilah elemen penting bagi konsumen untuk membeli tanah, baik sebagai hunian maupun investasi.\r\n&nbsp;\r\nSemua elemen tersebut jelas membuktikan bahwa tanah kavling standar perumahan yang ditawarkan memiliki kriteria yang layak, secara keekonomian maupun investasi. Teliti sebelum membeli. Untuk tanah kavling, produk KPTI jelas legalitasnya lebih pasti.', 'Artikel_2020_07_05_1593972487.jpg', '2020-07-05 18:08:07'),
(4, 'Mari Bung, Nabung Kembali …', 'Benarlah nasehat orang tua, sejak jaman dulu hingga sekarang, menabunglah selagi usia muda, selagi masih memiliki gaji. Menunggu gaji besar, ataupun menunda hingga tahun depan harga sudah berubah, tidak sama lagi seperti dulu.\r\n&nbsp;\r\nKira-kira mudahnya begini. Nabung itu tak hanya perkara memasukkan uang ke bank saja. Nabung itu bisa berupa batu bata untuk bangun rumah, bisa nabung hasil panen untuk musim selanjutnya. Ini yang biasa dilakukan orangtua jaman dulu untuk mem-back up kehidupan selanjutnya. Sederhana, memang.\r\n&nbsp;\r\nJaman berganti. Pesan klasik masih selalu terdengar. Apapun itu, pesan orangtua memang benar. Nabung tanah. Nasehat ini tak saja untuk mengamankan masa depan. Di era sekarang ini, nabung tanah sangat berharga bagi siapapun. Harga tanah tak selalu sama, bahkan berkecenderungan selalu naik. Setiap tahun. Andaikan semua anak muda memahami pesan itu, pastilah sekarang mereka menjadi bagian orang-orang yang telah menikmati seberapapun besar keuntungan memiliki tanah.\r\n&nbsp;\r\nPara saudagar kaya melakukan hal serupa. Mereka memanfaatkan laba dagangnya untuk membeli tanah. Istilah kerennya investasi. Membeli tanah dengan harga sekarang, yang pasti lebih hemat di kawasan lahan baru, lantas sewaktu-waktu menjualnya kembali ketika diperlukan.\r\n&nbsp;\r\nBegitulah. Nabung tanah sekarang harus pintar memilah. Di kawasan perkotaan maupun di kawasan baru berkembang, semua tertanam harga. Jangan lupa ihwal legalitas. Ini sangat penting bagi Anda. Pilih tanah kavling dengan legalitas lengkap, SHM pecah unit, luasan standar seusai aturan pemerintah plus Anda bisa pilih lokasi menawan nan strategis, yang tentu saja nilai kenaikannya cukup tinggi. Inilah nabung tanah yang asyik. Mari Bung, kita galakkan nabung tanah kembali. Demi masa depan anak cucu kita. ', 'Artikel_2020_07_05_1593973104.jpg', '2020-07-05 18:18:24'),
(5, 'Kapling Iming-Iming Harga Murah', 'Kini marak dijual kapling dengan iming-iming harga murah. Jelas terkesan murah sebab luasannya kecil, hanya 60-an m2.\r\n&nbsp;\r\nDibalik itu ada bahaya mengancam, sertipikat tanah tak bakal terbit dari BPN lantaran luasan melanggar ketetapan. &nbsp; Dari pada uang anda hilang melayang, pilih yang pasti-pasti saja. Jelas aman bila anda membeli tanah yang sertipikatnya telah terbit sesuai unitnya, bisa langsung di AJB kan dan balik nama. Di luar itu, anda harus hati-hati. &nbsp;\r\n&nbsp;\r\nMembeli tanah kapling jangan mudah tergiur promo harga murah. Sebab murah belum tentu aman. Jangankan untung, yang ada malah buntung kemudian. Urusan tanah anda harus jeli. Sederhananya, ajukan beberapa pertanyaan kritis sebelum menentukan beli.&nbsp;\r\n&nbsp;\r\nCek sertipikat asal tanah dan pastikan luasan tidak menabrak aturan Pemda setempat. Paling aman, belilah tanah sertipikat pecah dengan luas minimal 120-an m2.', 'Artikel_2020_07_05_1593973206.jpg', '2020-07-10 08:02:36'),
(6, 'Produk KPTI, Pengalaman Teruji Legalitas Terbukti', 'Benar. Kami telah berpengalaman lebih dari 17 tahun seabgai developer, yang akhirnya memutuskan untuk lebih fokus pada penyediaan tanah kavling bagi masyarakat. Produk KPTI seturut aturan pemda, luasan mulai 120m2 dengan legalitas sudah pecah SHM per unit.\r\n&nbsp;\r\nKami sadar bahwa memberikan layanan yang memuaskan semua pihak itu tak mudah. Oleh karena itu kami berprinsip bahwa selama tanah kavling produk kami sesuai aturan yang berlaku, dengan legalitas lengkap disertai fasum jalan yang lokasinya sesuai peruntukan, maka kami memberikan layanan untuk semua masyarakat yang membutuhkan. Ihwal harga, adakalanya kami fleksibel, menyesuaikan dengan ketersediaan budget konsumen.\r\n&nbsp;\r\nPaling penting bagi konsumen adalah memiliki tanah dengan cara proporsional, logis secara usaha dan adanya kepastian alas hak berupa SHM pecah unit yang bisa dibuktikan secara langsung.\r\n&nbsp;\r\nTerbukti, hingga 17 tahun lebih kami telah mendedikasikan diri sebagai developer penyedia tanah kavling, semua lahan kavling kami sesuai prosedur aturan. Fasum tersedia jalan kavling paving block maupun cor beton selebar 5m, lahan bersih rapi dengan bidang tanah datar memanjang ke belakang. Siteplan seperti ini sangat fungsional sebagai hunian, apalagi lebar depan kavling 8-12m. Ini yang membedakan lahan kavling kami dengan developer penyedia tanah kavling yang lain.\r\n&nbsp;\r\nAtas dasar pengalaman kami yang panjang itu, menunjukkan bahwa kami telah teruji waktu. Pula berbagai legalitas tanah kavling yang tersedia, sebagai bukti membeli kavling dan investasi tanah kavling produk KPTI sangat aman, nyaman dan membawa keuntungan.', 'Artikel_2020_07_05_1593973256.jpeg', '2020-07-05 18:20:56'),
(7, 'Lokasi Dulu, Eksekusi Kemudian', 'Siapapun yang berminat pada property hendaknya fokus pada lokasi, baru kemudian eksekusi. Sebab lokasi menentukan nilai transaksi, nilai investasi sekaligus capaian ekspektasi. Demikian nasehat Steven Bollenbach, GM Asia Hilton, jika hendak membeli produk property.\r\n&nbsp;\r\nUsai memahami lokasi, adalah hal yang sangat bijak untuk melirik akses kemudahan lokasi, yang tentu saja bakal memudahkan mobilitas. Perlu diperhatikan sejauh mana lokasi di kawasan tersebut pada masa yang akan datang. Bisa dari sisi infrastruktur, fasilitas publik serta bagaimana cara untuk memilikinya.\r\n&nbsp;\r\nAda baiknya memilih lokasi bagus, strategis dari sisi mobilitas dan pertambahan nilai asset pun masih bisa mendapatkan cara bayar yang mudah untuk memilikinya.\r\n&nbsp;\r\nAmbil opsi untuk mendapatkan cara bayar mudah, jika kekuatan budget tidak memenuhi untuk pembayaran secara cash. Hal ini bisa dikomunikasikan dengan marketing. Ada sejumlah opsi yang biasanya ditawarkan, mulai pembayaran bertahap hingga berangsur hingga 6-12X tanpa bunga.\r\n&nbsp;\r\nNah, dengan cara demikian, kita sudah menerima sertipiakt SHM pecah unit sesuai kesepakatan di awal. Dan, membayar secara bertahap tanah kavling, membuat kita jadi lebih realistis. Memiliki tanah kavling dulu ketimbang beli rumah jadi lebih memungkinkan kita untuk membangun rumah sesuai keinginan.\r\n&nbsp;\r\n&ldquo;Menabunglah di muka, belanja belakangan&rdquo;, serupa itulah prinsip investasi Warren Buffet. Dan, jadilah bagian orang-orang yang bijak, menabung untuk investasi yang bahkan bisa dinikmati bersama anak cucu kelak.\r\n&nbsp;\r\nMaka, belilah tanah. Menabung tanah, segerakan investasi tanah. Selagi harga sekarang masih hemat, karena tahun depan Anda tak lagi mendapati harga murah. Atau jangan-jangan malah nggak kebagian tanah.\r\n&nbsp;', 'Artikel_2020_07_05_1593973305.jpg', '2020-07-05 18:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot_kriteria`) VALUES
(1, 'Harga/m2', 'Cost', 3),
(2, 'Luas Tanah', 'Benefit', 2.5),
(3, 'Harga Total', 'Cost', 2),
(4, 'Jarak Pusat Kota', 'Benefit', 1.5),
(5, 'Fasilitas terdekat', 'Benefit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `username_member` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password_member` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `username_member`, `email`, `password_member`, `alamat`) VALUES
(1, 'member1', 'member1', 'rifki7080@gmail.com', 'c7764cfed23c5ca3bb393308a0da2306', 'Magelang'),
(2, 'member2', 'member2', 'rifki7080@gmail.com', 'member2', 'Banyuwangi'),
(3, 'member2', 'member2', 'rifki7080@gmail.com', 'member2', 'Banyuwangi'),
(4, 'member3', 'member3', 'member3@gmail.com', '3ef4802d8a37022fd187fbd829d1c4d6', 'magelang');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username_pengguna` varchar(32) NOT NULL,
  `password_pengguna` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1. Admin 2.Pengelola'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username_pengguna`, `password_pengguna`, `address`, `level`) VALUES
(1, 'Muhammad Rifki', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Magelang', 1),
(2, 'Adam Albarisyi', 'pengelola', '3c7913bc17671596a43dcb4581992bdf', 'Banyuwangi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(5) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `nilai_subkriteria` double NOT NULL,
  `ket_subkriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `nilai_subkriteria`, `ket_subkriteria`) VALUES
(1, 1, '>1.000.000', 1, 'Sangat Murah (SM)'),
(2, 1, '<1.000.000 - 1.500.000', 2, 'Murah (M)'),
(3, 1, '< 1.500.000 - 2.000.000', 3, 'Cukup Murah (CM)'),
(4, 1, '< 2.000.000 - 2.500.000', 4, 'Mahal'),
(5, 1, '>2.500.000', 5, 'Sangat Mahal'),
(6, 2, '<= 125 𝑚2', 1, 'Tidak Luas'),
(7, 2, '<125 –150 𝑚2', 2, 'Kurang Luas'),
(8, 2, '<150 –175 𝑚2', 3, 'Cukup Luas'),
(9, 2, '<175 –200 𝑚2', 4, 'Luas'),
(10, 2, '>200 𝑚2', 5, 'Sangat Luas'),
(11, 3, '<=200 Juta', 1, 'Sangat Sedikit'),
(12, 3, '<200 - 300 Juta', 2, 'Sedikit'),
(13, 3, '<300 - 400 Juta', 3, 'Sedang'),
(14, 3, '<400 - 500 Juta', 4, 'Banyak'),
(15, 3, '> 500 Juta', 5, 'Sangat Banyak'),
(16, 4, ' < = 5km', 5, 'Sangat Dekat'),
(17, 4, '<5 - 10 km', 4, 'Dekat'),
(18, 4, '<10 - 15 km', 3, 'Cukup Jauh'),
(19, 4, '<15 - 20 km', 2, 'Jauh'),
(20, 4, '>20 km', 1, 'Sangat Jauh'),
(21, 5, '1 Fasilitas', 1, 'Sangat Sedikit'),
(22, 5, '2 Fasilitas', 2, 'Sedikit'),
(23, 5, '3 Fasilitas', 3, 'Cukup Banyak'),
(24, 5, '4 Fasilitas', 4, 'Banyak'),
(25, 5, '5 Fasilitas', 5, 'Sangat Banyak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif_proyek`
--
ALTER TABLE `alternatif_proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif_proyek`
--
ALTER TABLE `alternatif_proyek`
  MODIFY `id_proyek` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
