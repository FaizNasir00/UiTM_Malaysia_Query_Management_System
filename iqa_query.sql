-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2023 at 01:55 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iqa_query`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `number_of_programme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `address`, `number_of_programme`) VALUES
(1, 'Universiti Teknologi MARA Cawangan Perak Kampus Seri Iskandar', 'Universiti Teknologi MARA Cawangan Perak Kampus Seri Iskandar,\r\n32610 Bandar Baru Seri Iskandar,\r\nPerak', 46),
(2, 'Universiti Teknologi MARA Cawangan Perak Kampus Tapah', 'Universiti Teknologi MARA Cawangan Perak Kampus Tapah, \r\n35400 Tapah Road,\r\nPerak', 8),
(3, 'Universiti Teknologi MARA Cawangan Selangor Kampus Dengkil', 'Pusat Asasi\r\nUniversiti Teknologi MARA Cawangan Selangor Kampus Dengkil,\r\n43800 Dengkil , \r\nSelangor', 5),
(4, 'Universiti Teknologi MARA Cawangan Selangor Kampus Sungai Buloh', 'Universiti Teknologi MARA Cawangan Selangor Kampus Sungai Buloh, \r\nJalan Hospital, \r\n47000 Sungai Buloh, \r\nSelangor', 36),
(5, 'Universiti Teknologi MARA Cawangan Selangor Kampus Puncak Alam', 'Universiti Teknologi MARA Cawangan Selangor Kampus Puncak Alam, \r\n42300 Bandar Puncak Alam,\r\nSelangor', 113),
(6, 'Universiti Teknologi MARA Cawangan Selangor Kampus Puncak Perdana', 'Universiti Teknologi MARA Cawangan Selangor Kampus Puncak Perdana,\r\nSeksyen U10, \r\n40150 Shah Alam,\r\nSelangor', 32),
(7, 'Universiti Teknologi MARA Cawangan Pahang Kampus Jengka', 'Universiti Teknologi MARA Cawangan Pahang Kampus Jengka,\r\n26400 Bandar Tun Abdul Razak Jengka,\r\nPahang', 30),
(8, 'Universiti Teknologi MARA Cawangan Pahang Kampus Raub', 'Universiti Teknologi MARA Cawangan Pahang Kampus Raub,\r\n27600 Raub,\r\nPahang', 5),
(9, 'Universiti Teknologi MARA Cawangan Kelantan Kampus Machang', 'Universiti Teknologi MARA Cawangan Kelantan Kampus Machang, \r\nBukit Ilmu, \r\n18500 Machang, \r\nKelantan', 27),
(10, 'Universiti Teknologi MARA Cawangan Kelantan Kampus Kota Bharu', 'Universiti Teknologi MARA Cawangan Kelantan Kampus Kota Bharu,\r\nLembah Sireh,\r\n15050 Kota Bharu,\r\nKelantan', 21),
(11, 'Universiti Teknologi MARA Cawangan Johor Kampus Segamat', 'Universiti Teknologi MARA Cawangan Johor Kampus Segamat,\r\nJalan Universiti Off KM 12 Jalan Muar,\r\n85000 Segamat,\r\nJohor', 24),
(12, 'Universiti Teknologi MARA Cawangan Johor Kampus Pasir Gudang', 'Universiti Teknologi MARA Cawangan Johor Kampus Pasir Gudang \r\nJalan Purnama\r\nBanda Seri Alam \r\n81750 Masai \r\nJohor', 23),
(13, 'Universiti Teknologi MARA Cawangan Kedah Kampus Sungai Petani', 'Universiti Teknologi MARA Cawangan Kedah Kampus Sungai Petani\r\n08400 Merbok\r\nKedah', 31),
(14, 'Universiti Teknologi MARA Cawangan Melaka Kampus Alor Gajah', 'Universiti Teknologi MARA Cawangan Melaka Kampus Alor Gajah \r\nKM 26 Jalan Lendu\r\n78000 Alor Gajah\r\nMelaka', 17),
(15, 'Universiti Teknologi MARA Cawangan Melaka Kampus Bandaraya Melaka', 'Universiti Teknologi MARA Cawangan Melaka Kampus Bandaraya Melaka\r\n110, Off Jalan Hang Tuah\r\n75300 Melaka ', 21),
(16, 'Universiti Teknologi MARA Cawangan Melaka Kampus Jasin', 'Universiti Teknologi MARA Cawangan Melaka Kampus Jasin\r\n77300 Merlimau\r\nMelaka', 18),
(17, 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Kuala Pilah', 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Kuala Pilah \r\nPekan Parit Tinggi\r\n72000 Kuala Pilah\r\nNegeri Sembilan', 25),
(18, 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Seremban 3', 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Seremban 3 \r\nPersiaran Seremban Tiga/1, \r\nSeremban 3\r\n70300 Seremban\r\nNegeri Sembilan', 17),
(19, 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Rembau', 'Universiti Teknologi MARA Cawangan Negeri Sembilan Kampus Rembau \r\n71300 Rembau \r\nNegeri Sembilan', 6),
(20, 'Universiti Teknologi MARA Cawangan Pulau Pinang Kampus Bertam', 'Universiti Teknologi MARA Cawangan Pulau Pinang Kampus Bertam\r\n13200 Kepala Batas\r\nPulau Pinang', 13),
(21, 'Universiti Teknologi MARA Cawangan Pulau Pinang Kampus Permatang Pauh', 'Universiti Teknologi MARA Cawangan Pulau Pinang Kampus Permatang Pauh \r\nJalan Permatang Pauh\r\n13500 Permatang Pauh\r\nPulau Pinang', 45),
(22, 'Universiti Teknologi MARA Cawangan Sarawak Kampus Samarahan', 'Universiti Teknologi MARA Cawangan Sarawak Kampus Samarahan \r\nJalan Meranek \r\n94300 Kota Samarahan \r\nSarawak', 69),
(23, 'Universiti Teknologi MARA Cawangan Sarawak Kampus Mukah', 'Universiti Teknologi MARA Cawangan Sarawak Kampus Mukah\r\nK.M 7.5 Jalan Oya\r\n96400 Mukah\r\nSarawak', 15),
(24, 'Universiti Teknologi MARA Cawangan Perlis Kampus Arau', 'Universiti Teknologi MARA Cawangan Perlis Kampus Arau \r\n02600 Arau \r\nPerlis', 58),
(25, 'Universiti Teknologi MARA Cawangan Sabah Kampus Kota Kinabalu', 'Universiti Teknologi MARA Cawangan Sabah Kampus Kota Kinabalu \r\nBeg Berkunci 71\r\n88997 Kota Kinabalu\r\nSabah', 30),
(26, 'Universiti Teknologi MARA Cawangan Sabah Kampus Tawau', 'Universiti Teknologi MARA Cawangan Sabah Kampus Tawau\r\nKM36 Jalan Apas Balung\r\nPeti Surat 61372\r\n91032 Tawau\r\nSabah', 2),
(27, 'Universiti Teknologi MARA Cawangan Terengganu Kampus Dungun', 'Universiti Teknologi MARA Cawangan Terengganu Kampus Dungun\r\nSura Hujung\r\n23000 Dungun\r\nTerengganu', 37),
(28, 'Universiti Teknologi MARA Cawangan Terengganu Kampus Bukit Besi', 'Universiti Teknologi MARA Cawangan Terengganu Kampus Bukit Besi \r\n23200 Dungun \r\nTerengganu', 5),
(29, 'Universiti Teknologi MARA Cawangan Terengganu Kampus Kuala Terengganu', 'Universiti Teknologi MARA Cawangan Terengganu Kampus Kuala Terengganu\r\n21080 Kuala Terengganu\r\nTerengganu', 8),
(30, 'Arshad Ayub Graduate Business School (AAGBS)', 'Kompleks Al-Farabi, Jalan Ilmu/1, Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 4),
(31, 'Fakulti Perakaunan', 'Aras 1 & 2 Bangunan FPN, UiTM Cawangan Selangor, Kampus Puncak Alam, 42300 Bandar Puncak Alam, Selangor', 14),
(32, 'Fakulti Sains Pentadbiran Dan Pengajian Polisi', 'UiTM Cawangan Negeri Sembilan, Kampus Seremban 3, 70300 Seremban, Negeri Sembilan', 11),
(33, 'Akademi Pengajian Bahasa (APB)', 'Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 11),
(34, 'Accounting Research Institute (ARI)', 'Aras 12, Menara SAAS, Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 4),
(35, 'Fakulti Sains Gunaan', 'Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 50),
(36, 'Fakulti Perladangan dan Agroteknologi', 'UiTM Cawangan Melaka, Kampus Jasin, 77300 Merlimau, Melaka', 18),
(37, 'Fakulti Pengurusan & Perniagaan', 'UiTM Cawangan Selangor, Kampus Puncak Alam, 42300 Puncak Alam, Selangor', 34),
(38, 'Kolej Pengajian Seni Kreatif', 'Aras 4, Kompleks Ilham, Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 58),
(39, 'Kolej Pengajian Pengkomputeran, Informatik dan Media', 'Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 76),
(40, 'Kolej Pengajian Kejuruteraan', 'Aras 9, Menara 2, Kompleks Kejuruteraan, Tuanku Abdul Halim Mu\'adzam Shah, Universiti Teknologi MARA 40450 Shah Alam, Selangor', 45),
(41, 'Kolej Pengajian Alam Bina', 'Kompleks Tahir Majid, Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 32),
(42, 'Fakulti Pergigian', 'UiTM Cawangan Selangor, Kampus Sungai Buloh, 47000 Jalan Hospital, Sungai Buloh, Selangor', 16),
(43, 'Fakulti Pendidikan', 'Aras 5 & 7, Bangunan FSK 1,5 UiTM Cawangan Selangor, Kampus Puncak Alam, 42300 Bandar Puncak Alam, Selangor', 14),
(44, 'Fakulti Pengurusan Hotel dan Pelancongan', 'UiTM Cawangan Selangor, Kampus Puncak Alam, 42300 Puncak Alam, Selangor', 19),
(45, 'Fakulti Sains Kesihatan', 'UiTM Cawangan Selangor, Kampus Puncak Alam, 42300 Puncak Alam, Selangor', 43),
(46, 'Akademi Pengajian Islam Kontemporari  (ACIS) ', 'Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 11),
(47, 'Malaysia Institute of Transport (MITRANS)', 'Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 3),
(48, 'Fakulti Undang-Undang', 'Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 13),
(49, 'Fakulti Perubatan', 'UiTM Cawangan Selangor, Kampus Sungai Buloh, 47000 Jalan Hospital, Sungai Buloh, Selangor', 20),
(50, 'Fakulti Farmasi', 'Aras 11, Bangunan FF1, UiTM Cawangan Selangor, Kampus Puncak Alam, 42300 Bandar Puncak Alam, Selangor', 14),
(51, 'Fakulti Sains Sukan dan Rekreasi', 'Bangunan Akademik 3, Universiti Teknologi MARA, 40450 Shah Alam, Selangor', 9),
(52, 'Pusat Asasi', '-', 5),
(53, 'Pra Diploma', '-', 5);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `query_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `respond` text,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `query_id`, `name`, `location_id`, `question`, `respond`, `status`) VALUES
(4, 'U100', 'abc1', 7, 'Test1', 'Test Respone', 'completed'),
(5, 'U101', 'cds', 8, 'Test', 'Respone', 'completed'),
(6, 'U102', 'abs', 10, 'Test12', 'Respone21', 'ongoing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lid` (`location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `query`
--
ALTER TABLE `query`
  ADD CONSTRAINT `lid` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
