-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 01:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satepakhirin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`) VALUES
(4, 'Lucky', 'Budi', 'budiluck99@gmail.com', 'catering', 'Apakah bisa dipesan untuk acara - acara?'),
(5, 'Muslimin', '.', 'muslimink96@gmail.com', 'pesan', 'Apakah bisa dipesan melalui aplikasi grab food dan go food?'),
(6, 'Bagus', 'Setio', 'agussetia69@gmail.com', 'Pesan', 'Ada pesanan delivery nya ?');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `nama_pemilik` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`nama_pemilik`, `jenis_usaha`, `alamat`, `contact_number`, `email`) VALUES
('Bapak Hirin', 'Warung Sate Gule', 'Jalan Raya Karanganyar No 10 Rt 01 Rw 06 Kabupaten Pekalongan (sebelah barat RSUD Kajen).', '(+62) 852-2501-7374', 'e404158@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `deskripsi`) VALUES
(1, 'Sate Kambing', 30000, 'Sate kambing adalah sejenis makanan sate terbuat dari daging kambing. Daging kambing tersebut disate dan dibumbui dengan rempah-rempah dan bumbu dapur, kemudian dibakar. Penyajiannya disajikan bersama lalapan kubis, tomat, dan bawang merah yang diiris tipis kemudian diberi kecap dan ditambahkan taburan merica.'),
(2, 'Gulai Kambing', 25000, 'Gulai adalah jenis makanan yang mengandung saus kari yang kaya, pedas dan lezat seperti kari yang biasa ditemukan dengan bahan utama daging kambing Saus gulai umumnya memiliki konsistensi yang kental dengan warna kekuningan karena penambahan kunyit tanah. Bahan saus gulai terdiri dari rempah-rempah kaya seperti kunyit , ketumbar , lada hitam , lengkuas ,jahe , cabai , bawang merah , bawang putih, adas , serai , kayu manis dan jintan , ditumbuk menjadi pasta dan dimasak dalam santan dengan bahan-bahan utama.'),
(3, 'Es Teh', 5000, 'Es teh atau Teh es adalah teh yang didinginkan dengan es batu. Es teh sering kali ditambahkan rasa seperti melati, dan buah-buahan seperti limun, ceri, dan arbei, atau susu.'),
(4, 'Es Jeruk', 7000, 'Es Jeruk adalah sari buah yang diperoleh dengan memeras atau menekan isi buah jeruk yang kemudian didinginkan dengan es batu.');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `os` varchar(30) NOT NULL,
  `browser` varchar(120) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `ip`, `os`, `browser`, `date_create`) VALUES
(1, '::1', 'Unknown', 'Google Chrome v.84.0.4147.105', '2020-08-07 09:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `fullname`, `testimoni`) VALUES
(1, 'Dimas Ari', 'Potongan dagingnya besar, tidak apek dan bumbunya meresap.'),
(2, 'Imam Susanto', 'Sate paling murah yang ada di kabupaten pekalongan, rasanya juga enak sekali.'),
(3, 'Muhammad Adnan', 'Satenya enak, tempatnya juga strategis di pinggir jalan utama karanganyar kajen.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('a7f08df8-d6ff-11ea-9020-0021ccd21d9d', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
('a7f0a74a-d6ff-11ea-9020-0021ccd21d9d', 'muslimin', 'muslimin', '693435c1197661d843ecb3e86752efe47efb4bc3', '2'),
('a7f0b7d1-d6ff-11ea-9020-0021ccd21d9d', 'bagus', 'bagus', 'f81c82b4dc3d90208a3d45363660b7012e35a045', '2'),
('a7f0f6b3-d6ff-11ea-9020-0021ccd21d9d', 'lucky', 'lucky', '1ce1416347075b6070a35ce5e9d26b61d91ea6c3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
