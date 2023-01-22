-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2022 pada 06.29
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ispa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `level`) VALUES
(2, 'admin', '$2y$10$6r668NORZHGngOq6RJFVruisK/Y/YOGuBZrSpn9S8Q16xiQ27IIFC', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_konsultasi`
--

CREATE TABLE `tb_detail_konsultasi` (
  `id_detail_konsultasi` int(3) NOT NULL,
  `id_konsultasi` int(3) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_detail_konsultasi`
--

INSERT INTO `tb_detail_konsultasi` (`id_detail_konsultasi`, `id_konsultasi`, `id_gejala`, `nilai`) VALUES
(1129, 1, 36, 0),
(1130, 1, 37, 1),
(1131, 1, 38, 0),
(1132, 1, 39, 1),
(1133, 1, 40, 0),
(1134, 1, 41, 1),
(1135, 1, 42, 0),
(1136, 1, 43, 1),
(1137, 1, 44, 1),
(1138, 1, 45, 1),
(1139, 1, 46, 0),
(1140, 1, 47, 0),
(1141, 2, 36, 1),
(1142, 2, 37, 1),
(1143, 2, 38, 0),
(1144, 2, 39, 1),
(1145, 2, 40, 0),
(1146, 2, 41, 0),
(1147, 2, 42, 0),
(1148, 2, 43, 0),
(1149, 2, 44, 0),
(1150, 2, 45, 1),
(1151, 2, 46, 0),
(1152, 2, 47, 1),
(1153, 3, 36, 1),
(1154, 3, 37, 1),
(1155, 3, 38, 1),
(1156, 3, 39, 1),
(1157, 3, 40, 1),
(1158, 3, 41, 1),
(1159, 3, 42, 1),
(1160, 3, 43, 1),
(1161, 3, 44, 0),
(1162, 3, 45, 0),
(1163, 3, 46, 1),
(1164, 4, 36, 1),
(1165, 4, 37, 1),
(1166, 4, 38, 1),
(1167, 4, 39, 1),
(1168, 4, 40, 1),
(1169, 4, 41, 1),
(1170, 4, 42, 1),
(1171, 4, 43, 1),
(1172, 4, 44, 0),
(1173, 4, 45, 0),
(1174, 4, 46, 1),
(1175, 5, 36, 1),
(1176, 5, 37, 1),
(1177, 5, 38, 1),
(1178, 5, 39, 1),
(1179, 5, 40, 1),
(1180, 5, 41, 1),
(1181, 5, 42, 1),
(1182, 5, 43, 1),
(1183, 5, 44, 0),
(1184, 5, 45, 0),
(1185, 5, 46, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gabungan`
--

CREATE TABLE `tb_gabungan` (
  `id_gabungan` int(3) NOT NULL,
  `id_penyakit` int(3) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `nilai_mb` double NOT NULL,
  `nilai_md` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gabungan`
--

INSERT INTO `tb_gabungan` (`id_gabungan`, `id_penyakit`, `id_gejala`, `nilai_mb`, `nilai_md`) VALUES
(57, 1, 37, 0.6, 0.2),
(58, 1, 38, 0.6, 0.2),
(59, 1, 39, 0.6, 0.2),
(60, 1, 40, 0.4, 0.2),
(61, 1, 41, 0.6, 0.2),
(62, 1, 42, 0.6, 0),
(63, 1, 43, 0.4, 0),
(64, 1, 46, 0.8, 0),
(65, 2, 36, 0.6, 0.2),
(66, 2, 37, 0.6, 0),
(67, 2, 38, 0.8, 0.2),
(68, 2, 39, 0.6, 0),
(69, 2, 40, 0.6, 0.2),
(70, 2, 41, 0.6, 0.2),
(71, 2, 42, 0.6, 0),
(72, 3, 36, 0.6, 0),
(73, 3, 37, 0.6, 0),
(74, 3, 38, 0.6, 0),
(75, 3, 39, 0.4, 0),
(76, 3, 40, 0.4, 0),
(77, 3, 41, 0.4, 0),
(78, 3, 42, 0.6, 0),
(79, 3, 43, 0.6, 0.2),
(80, 3, 46, 0.8, 0),
(81, 4, 36, 0.6, 0.2),
(82, 4, 37, 0.8, 0),
(83, 4, 38, 0.6, 0.2),
(84, 4, 39, 0.4, 0),
(85, 4, 40, 0.4, 0),
(86, 4, 41, 0.6, 0),
(87, 4, 42, 0.6, 0),
(88, 4, 43, 0.4, 0),
(89, 5, 36, 0.6, 0),
(90, 5, 37, 0.8, 0.2),
(91, 5, 38, 0.6, 0),
(92, 5, 39, 0.6, 0.2),
(93, 5, 40, 0.6, 0),
(94, 5, 41, 0.4, 0),
(95, 5, 42, 0.6, 0),
(96, 5, 43, 0.6, 0.2),
(97, 5, 44, 0.6, 0),
(98, 5, 45, 0.6, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(3) NOT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(36, 'G01', 'Demam'),
(37, 'G02', 'Sesak napas atau napas cepat'),
(38, 'G03', 'Batuk'),
(39, 'G04', 'Pilek'),
(40, 'G05', 'Nafsu makan berkurang'),
(41, 'G06', 'Sakit kepala'),
(42, 'G07', 'Mengi atau napas berbunyi'),
(43, 'G08', 'Suara serak'),
(44, 'G09', 'Nyeri saat menelan'),
(45, 'G10', 'Sulit bicara'),
(46, 'G11', 'Nyeri dada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `info_header` text NOT NULL,
  `info_content` text NOT NULL,
  `author` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `info_header`, `info_content`, `author`, `date`) VALUES
(1, 'ISPA adalah penyebab utama morbiditas dan mortalitas penyakit menular di dunia. Hampir empat juta orang meninggal akibat ISPA setiap tahun, 98%- nya disebabkan oleh infeksi saluran pernapasan bawah. Tingkat mortalitas sangat tinggi pada bayi, anak-anak, dan orang lanjut usia, terutama di negara-negara dengan pendapatan per kapita rendah dan menengah. ISPA masih merupakan penyakit utama penyebab kematian bayi dan balita di Indonesia. (Syahidi, Gayatri, and Bantas 2016)', '<p xss=removed><img src=\"https://assets.promediateknologi.com/crop/0x0:0x0/750x500/photo/suaramerdeka/images/2017/09/29/ispa.jpg\" alt=\"\" width=\"468\" height=\"312\"></p>\r\n<p xss=removed>ISPA merupakan salah satu penyakit berbasis lingkungan yang menyebar melalui udara. Penyakit ini dapat menular apabila virus atau bakteri yang terbawa dalam droplet terhirup oleh orang sehat. Droplet penderita dapat disebarkan melalui batuk atau bersin. Proses terjadinya penyakit setelah agent penyakit terhirup berlangsung dalam masa inkubasi selama 1 sampai 4 hari untuk berkembang dan menimbulkan ISPA. Apabila udara mengandung zat – zat yang tidak diperlukan manusia dalam jumlah yang membahayakan Oleh karena itu kualitas lingkungan udara dapat menentukan berbagai macam transmisi penyakit.</p>\r\n<p xss=removed>Pencemaran udara dari asap/gas dapat menyebabkan terjadinya ISPA, bronchitis, asthma, dan kanker paru. Pencemaran udara dari bahan pertikel dapat menyebabkan paringitis, pneumonia, alergi, iritasi dan lain-lain. Pendekatan edukatif merupakan tindakan yang melibatkan masyarakat untuk berpartisipasi dalam membina dan memelihara kebersihan lingkungan seperti tidak melalukan pembakaran saat musim kemarau. Pendekatan ini dilakukan dan diperkembangkan untuk membina serta memberikan penerangan kepada masyarakat den memotovasi maupun membangkitkan kesadaran masyarakat untuk ikut memelihara kelestarian lingkungan hidup.</p>\r\n<p xss=removed><img src=\"https://cdn.popmama.com/content-images/post/20190327/102811795-8ae4d46517fe36fb1625dedf1b8f4391_600xauto.jpg\" alt=\"\" width=\"461\" height=\"242\"></p>\r\n<div xss=removed>ISPA adalah penyakit saluran pernafasan akut yang disebabkan oleh agen infeksius yang ditularkan dari manusia ke manusia. Timbulnya gejala biasanya cepat, yaitu dalam waktu beberapa jam sampai beberapa hari. Gejalanya meliputi demam, batuk, dan sering juga nyeri tenggorokan, coryza (pilek), sesak nafas, mengi atau kesulitan bernafas.</div>\r\n<div xss=removed> </div>\r\n<div>\r\n<div xss=removed>Dalam penelitian Dary (2018) menjelaskan bahwa Pengobatan tradisional merupakan pengobatan yang pertama kali dilakukan partisipan bila ada balitanya yang tiba - tiba sakit, dengan cara menggosokan minyak kayu putih ataupun dibawa ke tukang urut. Jika pengobatan tradisional tidak membuahkan hasil barulah keluarga membawa balita berobat ke RS untuk mendapatkan obat dari tenaga kesehatan. Selain itu, saat di rumah keluarga</div>\r\n<div xss=removed>memberikan beberapa perlakuan khusus kepada anak dengan penyakit ISPA yaitu menggosokan minyak kayu putih, menjaga kebersihan diri anak, dan lingkungan sekitar tempat tinggal, dengan harapan agar anak cepat sembuh dan dapat beraktifitas seperti anak-anak yang lain.</div>\r\n<div xss=removed> </div>\r\n<div xss=removed>Peran aktif orang tua dalam menangani ISPA sangat penting. Orang tuaseringkali menganggap batuk pilek adalah penyakit yang tidak berbahaya, akan tetapi penyakit ini bisa menjadi berat bila daya tahan tubuh menurun dan tidak diobati. Jika anak yang terkena ISPA dibiarkan tidak diobati dapat mengakibatkan penyebaran infeksi yang lebih luas sehingga infeksi menyerang saluran nafas bagian bawah dan menyebabkan radang paru atau pneumonia.</div>\r\n<div xss=removed> </div>\r\n<div>\r\n<div xss=removed>Berdasarkan salah satu literatur yaitu Padila (2019), menjelaskan bahwa kurangnya peran serta keluarga dalam melakukan penanganan penyakit ISPA pada anak disebabkan karena kurang pengetahuan keluarga tentang perawatan penyakit ISPA, pendidikan keluarga yang rendah, pekerjaan orang tua serta kurangnya akses informasi baik dari berbagai media maupun dari tenaga kesehatan langsung.</div>\r\n</div>\r\n</div>', 2, '2022-08-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id_konsultasi` int(3) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `usia_anak` int(2) NOT NULL,
  `alamat_anak` varchar(50) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai_cf` double NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`id_konsultasi`, `nama_anak`, `usia_anak`, `alamat_anak`, `nama_penyakit`, `keterangan`, `nilai_cf`, `time`) VALUES
(1, 'rara', 4, 'moga', 'Laringitis', 'Laringitis merupakan radang laring yang bermanifes', 97.984, '2022-06-28 11:05:53'),
(2, 'kia', 0, 'moga', 'Laringitis', 'Laringitis merupakan radang laring yang bermanifes', 94, '2022-08-08 23:33:15'),
(3, 'kia', 9, 'moga', 'Bronkiolitis', 'Penyakit ISPA pada bayi termasuk bronkiolitis yait', 99.85888, '2022-08-18 21:49:08'),
(4, 'kia', 9, 'moga', 'Bronkiolitis 2', '<p><img src=\"https://assets.promediateknologi.com/', 99.85888, '2022-08-18 21:52:32'),
(5, 'kia', 9, 'moga', 'Bronkiolitis', '<p><img xss=removed src=\"https://asset.kompas.com/', 99.85888, '2022-08-18 22:15:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pakar`
--

CREATE TABLE `tb_pakar` (
  `id_pakar` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sip_pakar` varchar(30) NOT NULL,
  `telp_pakar` varchar(15) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pakar`
--

INSERT INTO `tb_pakar` (`id_pakar`, `nama`, `username`, `password`, `sip_pakar`, `telp_pakar`, `level`) VALUES
(8, 'dr. Noor Anggrainy Retnowati, Sp. A.', 'pakar', '$2y$10$NxQnbt0zY9YDRd1wKTNQbupzDhLBS79yUmBCoYa36x0DQjcN8xz/m', '932-481MW', '085732845920', 'pakar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(3) NOT NULL,
  `kode_penyakit` varchar(4) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `author` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `keterangan`, `author`, `date`) VALUES
(1, 'P01', 'Pneumonia', '<p><img src=\"https://cdf.orami.co.id/unsafe/cdn-cas.orami.co.id/parenting/images/Pneumonia_pada_Bayi_Penyebab_Ge.width-800.jpegquality-80.jpg\" alt=\"\" width=\"526\" height=\"295\"></p>\r\n<p class=\"MsoListParagraphCxSpLast\">Pneumonia adalah infeksi akut yang menyerang jaringan paru-paru (alveoli) yang disebabkan oleh bakteri, virus, maupun jamur. Terjadinya pneumonia pada anak balita seringkali bersamaan dengan terjadinya proses infeksi akut pada bronkus yang disebut bronchopneumonia. Gejala penyakit pneumonia ini berupa pernafasan yang cepat dan sesak pada balita yang dikarenakan serangan pera-dangan paru ini terjadi secara mendadak. 1 Insiden pneumonia pada negara berkembang termasuk Indonesia hampir 30% pada anak-anak di bawah umur lima tahun yaitu kurang lebih 10-20 kasus per 100 anak per tahunnya, dengan tingkat kema-tian yang tinggi. Pneumonia menyebabkan lebih dari 5 juta kematian per tahun pada anak balita di negara berkembang.</p>\r\n<p class=\"MsoListParagraphCxSpLast\">Pneumonia adalah pembunuh utama balita di dunia, lebih banyak dibandingkan dengan gabungan penyakit AIDS, malaria dan campak. Persentasenya yaitu 19?ri semua penyebab kematian balita, kemudian disusul diare 17%, sehingga World Health Oganization (WHO) menjulukinya sebagai “<em>the leading killer of children worldwide</em>”.</p>\r\n<p class=\"MsoListParagraphCxSpLast\">Menurut Mardani RA dkk pada tahun 2018, ada dua faktor yang berhubungan dengan kejadian pneumonia yatu faktor instrinsik dan faktor ekstrinsik. Faktor instrinsik merupakan faktor yang ada pada balita, meliputi umur balita, jenis kelamin, berat badan lahir rendah, status imunisasi, pemberian ASI, pemberian vitamin A, dan status gizi. Sedangkan faktor ekstrinsik merupakan faktor yang tidak ada pada balita meliputi kepadatan tempat tinggal, tipe rumah, ventilasi, jenis lantai, pencahayaan, kepadatan hunian, kelembaban, jenis bahan bakar, penghasilan keluarga, serta faktor ibu baik pendidikan, umur ibu juga pegetahuan ibu dan keberadaan keluarga yang merokok.</p>\r\n<p class=\"MsoListParagraphCxSpLast\">Gejala yang sering terlihat adalah takipnue, retraksi dinding dada, sianosis, batuk, demam dan iritabel (Setyningrum,2006). Pada balita yang menderita pneumonia berat bisa mengalami kesulitan bernafas, sehingga dinding dadanya bergerak kedalam saat menarik napas atau dikenal dengan lower chest wall indrawing, gejala pada anak dengan usia yang lebih muda bisa berupa kejang, kesadaran menurun, penurunan suhu tubuh, letargi dan gangguan minum.</p>\r\n<p class=\"MsoListParagraphCxSpLast\">WHO (2009) membagi pneumonia dari berat ringannya berdasarkan tanda klinis yang muncul. Pneumonia ringan ditandai dengan batuk atau kesulitan bernafas, dan nafas cepat pada anak umur 2 bulan-11 bulan adalah ≥ 50x/menit dan pada anak usia 1-5 tahun adalah ≥ 40 kali/menit. Sedangkan pneumonia berat ditemukan gejala klinis yang sama dengan pneumonia ringan disertai suara merintih pada bayi muda, crackles (ronki), suara pernapasan menurun, suara pernapasan bronchial, pernapasan cuping hidung atau tarikan dinding kedalam atau foto dada yang menunjukkan gambaran pneumonia (infiltrate luas, konsolidasi dll).</p>\r\n<p class=\"MsoListParagraphCxSpLast\"><img src=\"https://cdn0-production-images-kly.akamaized.net/-YgVU_yFBJMKZxFtgaat3LZXEuQ=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3247908/original/002952600_1600933155-Foto.jpeg\" alt=\"\" width=\"507\" height=\"285\"></p>\r\n<p class=\"MsoListParagraphCxSpLast\">Mengatasi penyakit Pneumonia tersebut tidak cukup hanya dengan menguasai pengobatan maupun penanganan saja, tetapi dibutuhkan suatu pengetahuan yang cukup tentang faktor penyebab Pneumonia sehingga dapat dilakukan upaya preventif untuk mencegah Pneumonia pada balita. Ibu adalah salah satu komponen dari keluarga. Kebanyakan Ibu menganggap Pneumonia merupakan penyakit biasa yang sering timbul dan tidak berbahaya serta bisa menghilang dengan sendirinya, padahal apabila Pneumonia yang tidak segera ditangani dapat menyebabkan kematian. Kejadian tersebut menunjukkan kurangnya pengetahuan dan sikap ibu terhadap penyakit Pneumonia.</p>\r\n<p class=\"MsoListParagraphCxSpLast\">Upaya untuk mengurangi terjadinya pneumonia adalah dengan mengurangi polusi udara di dalam dan luar rumah antara lain dengan mengganti bahan bakar kayu dan tidak membawa balita ke dapur serta membuat lubang ventilasi yang cukup. Selain itu menghindari kebiasaan merokok di dalam ruangan juga dapat mencegah terjadinya pneumonia pada anak.</p>', 2, '2022-08-19'),
(2, 'P02', 'Bronkitis 2', '<p><img src=\"https://res.cloudinary.com/dk0z4ums3/image/upload/v1595910022/attached_image/ketahui-penyebab-bronkitis-pada-anak-di-sini.jpg\" alt=\"\" width=\"425\" height=\"270\"></p>\r\n<p>Bronkitis merupakan suatu peradangan atau infeksi di saluran bronkial, yang bisa menyebabkan pembekakan serta produksi lendir yang berlebihan. Batuk dan meningkatnya pengeluaran dahak serta sesak nafas merupakan tanda-tanda yang sering muncul pada penderita bronkitis. Bronkritis terbagi atas dua bagian, yaitu bronkitis kronis dan bronkitis akut. Bronkitis akut biasanya dikarenakan flu serta infeksi lain di saluran pernafasan, biasanya bronkitis akut mulai membaik dalam waktu beberapa hari ataupun beberapa pekan. Sedangkan, bronkitis kronis merupakan iritasi atau radang yang bertempat pada saluran nafas yang harus ditangani dengan serius. Seringkali bronkitis kronis disebabkan karena merokok. Faktor resiko utamanya yaitu merokok, polusi udara, debu, dan bahan kimia.</p>\r\n<p>Bronkitis bisa menyerang pada semua usia, termasuk anak-anak. Faktor lingkungan yang banyak polutan juga dapat mempengaruhi kesehatan pada saluran pernapasan atau pada paru-paru. Alveolus adalah tempat berlangsungnya perputaran gas oksigen yang masuk pada darah dan karbondioksida yang dikeluarkan dari dalam darah. Bronkus adalah tempat penyebaran udara dari alveolus apabila terdapat permasalahan pada bronkus, hal itu akan menyebabkan timbulnya penyakit bronkitis dan terganggunya pertukaran gas.</p>\r\n<p>Penyakit ini sering terjadi pada anak usia di bawah 24 bulan. Puncak usia anak 9-15 tahun. Bronkitis akut sering terjadi pada musim dingin ( di daerah non tropis) atau musim hujan (daerah tropis), diakibatkan oleh virus Adenovirus, coronvirus, influenza A dan B, metapneamovirus, virus parainfluenza, respiratory syncytial virus, rhinovirus, atau oleh bakteri Bordetella pertussis, chlamydia pneumonia, mycoplasma pneumonia.</p>\r\n<p>Bronkitis akut ditandai dengan infeksi bronkial akibat hasil edema bronkial dan produksi lendir. Mekanisme batuk tidak jelas dipahami. Untuk virus yang lebih mematikan seperti influenza dan adenovirus, batuk dapat terjadi akibat kerusakan epitel pernapasan bawah yang meluas. Untuk virus yang kurang ganas seperti virus flu biasa, menandakan bahwa aktivasi mediator inflamasi dan perubahan fungsi mukosiliar bronkial memainkan peran yang lebih penting. Tingkat keparahan gejala meningkat apabila paparan asap tembakau dan polusi udara. Berbeda dengan perubahan inflamasi kronis pada asma, radang bronkitis akut bersifat sementara dan sembuh secara spontan. Batuk dapat bertahan dalam waktu lama. </p>', 2, '2022-08-19'),
(3, 'P03', 'Bronkiolitis 2', '<p><img src=\"https://asset.kompas.com/crops/YQOaa7eC96S_Lnru7uO-QJdeBzk=/134x0:719x390/375x240/data/photo/2016/05/12/1159144ThinkstockPhotos-462119163780x390.jpg\" alt=\"\" width=\"375\" height=\"240\"></p>\r\n<p>Bronkiolitis merupakan penyakit dengan mekanisme dasar terjadinya peradangan pada bronkiolus yang ditandai oleh sesak napas, wheezing, dan hiperinflasi paru. Penyakit bronkiolitis merupakan infeksi respiratorik akut bagian bawah yang paling sering menyebabkan rawat inap bayi di rumah sakit. Umumnya, penyakit ini terjadi pada anak umur dibawah 2 tahun, dengan insidens tertinggi pada bayi umur 6 bulan. Usia berkaitan dengan beratnya penyakit. Artinya, makin muda umur bayi menderita bronkiolitis biasanya akan makin berat penyakitnya. Bronkiolitis paling sering terjadi pada bayi laki-laki berumur 3-6 bulan yang tidak mendapatkan ASI, dan hidup di lingkungan padat penduduk.</p>\r\n<p>Bronkiolitis adalah suatu penyakit yang terjadi pada 2 tahun pertama kehidupan, biasanya mempunyai puncak pada umur 6 bulan. Terdapat riwayat kontak dengan penyakit saluran pernapasan yang ringan, dan gejala pertama adalah pengeluaran getah dari hidung serta bersin-bersin. Kesukaran pernapasan terjadi secara berangsur-angsur, ditandai dengan batuk yang terengah-engah, dispnea dan mudah terangsang. Anak mengalami takipnea (60 sampai 80 pernapasan per menit) dan haus akan udara dan sianosis sering kita jumpai. Cuping hidungnya akan melebar dan anak mempergunakan otot-otot pernapasan tambahan secara terus-menerus. </p>', 2, '2022-08-19'),
(4, 'P04', 'Sinusitis 2', '<p><img src=\"https://cdn-cas.orami.co.id/parenting/images/Cara_Menangani_Sinusitis_Pada_Si_Kecil_3.width-800.jpg\" alt=\"\" width=\"565\" height=\"305\"></p>\r\n<p>Sinusitis pada anak merupakan salah satu penyakit berbahaya di antara beberapa penyakit peradangan jalan pernapasan. Meskipun demikian, keadaan ini sering dikesampingkan oleh orang tua. Orang tua sering menganggap pilek biasa atau rinitis. Sinusitis pada anak kerap dijumpai pada saat anak berusia 6-11 tahun. Pada rentang usia tersebut, penyakit ini paling banyak dijumpai pada usia 5-8 tahun dan mencapai puncaknya pada usia 7 tahun.</p>\r\n<p>Gejalanya berupa keluarnya cairan lendir hingga hidung terasa tersumbat dan terdapat cairan di tenggorokan. Gejala ini diikuti dengan timbulnya nyeri di bagian sinus yang terkena, sebagai akibat tersumbanya lubang hidung. Gejala sinusitis disertai dengan nyeri kepala, bahkan kepala terasa sangat berat. Sakit akan diperberat lagi jika saat batuk, mengejan atau membungkuk timbul rasa nyeri di kepala. Suara menjadi bindeng (sengau) dan penciuman terganggu. Bengkak dan kemerahan di pipi pun menjalar ke mata. Pengobatannya dapat menggunakan:</p>\r\n<ol>\r\n<li>Obat tetes hidung, antibiotik, dan kortikosteroid</li>\r\n<li>Operasi, jika tindakan pengobatan tidak membawa hasil yang menggembirakan</li>\r\n<li>Pencucian sinus setiap hari setelah anak berusia 12 tahun</li>\r\n</ol>\r\n<p> </p>\r\n<p>Setelah mengetahui gejala sinusitis pada anak, maka Anda perlu mengetahui cara menangani sinusitis agar tidak terus mengganggu aktivitas anak. Sinusitis dapat sembuh dengan sendirinya meskipun membutuhkan waktu yang lebih lama dibandingkan flu biasa yaitu sekitar 7-10 hari atau bahkan hingga 2 minggu.</p>\r\n<ol>\r\n<li>Sinusitis yang ringan bisa dikatakan tidak berbahaya. Namun, tetap saja dapat mengurangi kualitas tidur, nafsu makan, serta aktivitas belajar dan bermain anak. Meski sangat jarang terjadi, sinusitis memang bisa menjadi sumber infeksi ke otak dan menyebabkan meningitis.</li>\r\n<li>Periksalah anak ke dokter jika mencurigai adanya gejala sinusitis pada anak. Antibiotik adalah obat yang paling sering diresepkan untuk menangani sinusitis. Anda juga dapat memberikan asupan cairan yang cukup untuk anak. Selain itu, bila ingus anak sangat kental dan sulit untuk dikeluarkan, gunakan cairan saline untuk mengencerkan ingus.</li>\r\n</ol>', 2, '2022-08-19'),
(5, 'P05', 'Laringitis 3', '<p><img src=\"https://cdn-cas.orami.co.id/parenting/images/Laringitis-Hero.original.jpegquality-90.jpg\" alt=\"\" width=\"370\" height=\"208\"></p>\r\n<p>Laringitis Akut (LA) pada umumnya merupakan kelanjutan dari infeksi yang sering terjadi pada saluran napas bagian atas yang pengobatannya tidak tuntas sehingga kuman akan menyerang daerah tetangganya, dalam hal ini laring. Pada anak-anak, hal ini lebih berbahaya sebab bila LA tidak segera teratasi, bisa menyebabkan sumbatan jalan napas akibat saluran udara pada laring menyempit.</p>\r\n<p>Penyebab utama LA adalah infeksi bakteri dan virus. Infeksi bakteri biasanya berasal dari organ di sekitar laring, sedangkan infeksi virus biasanya berasal dari organ lain yang letaknya agak jauh dari laring. Bakteri yang paling sering menyebabkan infeksi adalah Haemophilus, influenza, staphylococcus, streptococcus, dan pneumococcus. Bakteri-bakteri ini merupakan penyebab utama infeksi saluran napas bagian atas.</p>\r\n<p>Gejala yang timbul pada pengidap LA selain suara atau serak adalah demam, lemas, nyeri menelan, nyeri saat berbicara, pilek, rasa kering di tenggorokan, batuk kering disertai dahak, dan suara napas yang keras akibat terganggunya aliran udara pada laring. Bila timbul gejala seperti di atas, segera ke dokter untuk mendapatkan penanganan yang tepat. Istirahatlah berbicara dan bersuara selama 2-3 hari, hindari menghirup udara lembap, dan hindari iritasi pada laring untuk meringankan gejala selain pemberian antibiotik oleh dokter.</p>', 2, '2022-08-19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_detail_konsultasi`
--
ALTER TABLE `tb_detail_konsultasi`
  ADD PRIMARY KEY (`id_detail_konsultasi`);

--
-- Indeks untuk tabel `tb_gabungan`
--
ALTER TABLE `tb_gabungan`
  ADD PRIMARY KEY (`id_gabungan`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indeks untuk tabel `tb_pakar`
--
ALTER TABLE `tb_pakar`
  ADD PRIMARY KEY (`id_pakar`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_konsultasi`
--
ALTER TABLE `tb_detail_konsultasi`
  MODIFY `id_detail_konsultasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1186;

--
-- AUTO_INCREMENT untuk tabel `tb_gabungan`
--
ALTER TABLE `tb_gabungan`
  MODIFY `id_gabungan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `id_konsultasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT untuk tabel `tb_pakar`
--
ALTER TABLE `tb_pakar`
  MODIFY `id_pakar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
