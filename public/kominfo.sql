-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 07:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `firstname`, `lastname`, `phone`) VALUES
(1, 'admin@gmail.com', '21232F297A57A5A743894A0E4A801FC3', 'Admin', 'Gans', '082123456789');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `img`, `id_category`) VALUES
(18, '05903.jpg', 3),
(21, '06864.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id_category`, `category_name`) VALUES
(3, 'Gambar Fakta'),
(4, 'Gambar Hoaks');

-- --------------------------------------------------------

--
-- Table structure for table `hoax`
--

CREATE TABLE `hoax` (
  `id_hoax` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` tinyint(4) NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoax`
--

INSERT INTO `hoax` (`id_hoax`, `judul`, `id_kategori`, `sumber`, `tanggal_upload`, `gambar`, `content`) VALUES
(9, 'Gunung Ili Lewotolok di Lembata NTT Berstatus Siaga, Ini Rekomendasi PVMBG', 4, 'Liputan 6', '2020-11-30 03:14:17', '18', '<p>Dengan meningkatnya status&nbsp;<a href=\"https://www.liputan6.com/news/read/4420785/gunung-ili-lewotolok-lembata-ntt-kini-berstatus-siaga\" title=\"Gunung Ili Lewotolok\">Gunung Ili Lewotolok</a>, PVMBG mengeluarkan sejumlah rekomendasi. Pertama, masyarakat di sekitar gunung maupun pengunjung, pendaki atau wisatawan tidak melakukan aktivitas di dalam radius 4 km dari kawah puncak.</p>\r\n\r\n<p>Kedua, penggunaan masker maupun perlengkapan lain untuk melindungi mata dan kulit. &quot;Ini direkomendasikan untuk menghindari dampak abu vulkanik yang mengakibatkan gangguan pernapasan akut maupun gangguan kesehatan lain,&quot; jelas dia.</p>\r\n\r\n<p>Ketiga, PVMBG mengingatkan abu vulkanik saat ini jatuh di beberapa sektor di sekeliling Gunung Ili Lewotolok. Karenanya, masyarakat yang bermukim di sekitar aliran sungai-sungai yang berhulu di gunung diminta mewaspadai potensi ancaman lahar, terutama di musim hujan.</p>\r\n\r\n<p>&quot;Potensi bahaya&nbsp;<a href=\"https://www.liputan6.com/tag/gunung-ili-lewotolok\">Gunung Ili Lewotolok</a>&nbsp;berupa lontaran batu atau lava pijar ke segala arah, hujan abu lebat, penyebarannya dipengaruhi arah dan kecepatan angin, awan panas khususnya ke arah bukaan kawah di sisi tenggara,&quot; kata dia.</p>\r\n\r\n<p>Bahaya lain berupa longsoran material lapuk yang berada di kawah puncak ke arah tenggara maupun lahar di sungai-sungai yang berhulu dari puncak gunung.</p>'),
(11, '[HOAKS] Akun Facebook Mengatasnamakan Wakil Bupati Probolinggo', 5, 'Kominfo bwz', '2020-11-30 03:28:31', '21', '<p>&lt;p&gt;Beredar akun Facebook mengatasnamakan Wakil Bupati Kabupaten Probolinggo Jawa Timur Timbul Prihanjoko.&amp;nbsp; Akun tersebut menggunakan foto Timbul Prihanjoko dan melakukan komunikasi kepada sejumlah orang dengan maksud meminta bantuan dana untuk penanganan Covid-19.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Faktanya, akun Facebook tersebut adalah akun palsu dan bukanlah milik Wakil Bupati Probolinggo Timbul Prihanjoko. Wakil Bupati Timbul dalam akun Facebook asli miliknya menjelaskan bahwa ada pihak yang tidak dikenal menggunakan foto dan profil dirinya. Ia pun memohon agar masyarakat tidak menanggapi akun palsu tersebut. Timbul memastikan akun palsu yang sengaja menduplikat akun Facebook miliknya itu ingin mencari keuntungan pribadi.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Link Counter:&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;u&gt;&lt;a href=&quot;https://www.instagram.com/p/CIAcCcVBXB7/?igshid=qos14nxe0pf6&quot;&gt;https://www.instagram.com/p/CIAcCcVBXB7/?igshid=qos14nxe0pf6&lt;/a&gt;&lt;/u&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;u&gt;&lt;a href=&quot;https://www.facebook.com/rsu.muliahati.7/posts/225519602329846&quot;&gt;https://www.facebook.com/rsu.muliahati.7/posts/225519602329846&lt;/a&gt;&lt;/u&gt;&lt;/p&gt;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kategori`
--

CREATE TABLE `laporan_kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_kategori`
--

INSERT INTO `laporan_kategori` (`id_kategori`, `kategori`) VALUES
(4, 'Fakta'),
(5, 'Hoaks');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_20_022327_create_admin', 1),
(2, '2020_11_20_022538_create_gallery', 1),
(3, '2020_11_20_022556_create_gallery_categories', 1),
(4, '2020_11_20_022605_create_hoax', 1),
(5, '2020_11_20_022614_create_laporan_kategori', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `hoax`
--
ALTER TABLE `hoax`
  ADD PRIMARY KEY (`id_hoax`);

--
-- Indexes for table `laporan_kategori`
--
ALTER TABLE `laporan_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoax`
--
ALTER TABLE `hoax`
  MODIFY `id_hoax` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan_kategori`
--
ALTER TABLE `laporan_kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
