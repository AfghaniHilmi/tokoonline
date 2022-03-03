-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 12:41 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota_ku` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota_ku`) VALUES
(1, '255'),
(2, '256');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_reg` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nohp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_reg`, `nama`, `alamat`, `username`, `password`, `email`, `nohp`) VALUES
(2, 'Khoironi', 'Jl. Sedan Rembang', 'roni', '202cb962ac59075b964b07152d234b70', '', '082324729095'),
(3, 'Dian Sastro', 'Jl.Ps 128', 'dian', '202cb962ac59075b964b07152d234b70', '', '08995903370'),
(4, 'Fress', 'Fress', 'fres', '202cb962ac59075b964b07152d234b70', '', '0888');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `isi`, `foto`) VALUES
(3, 'adad', '<p>dddsss</p>\r\n', '15111840366089_10156602043853050_1567282159570386944_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(35) NOT NULL,
  `rekening` varchar(25) NOT NULL,
  `nama_pemilik` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `nama_bank`, `rekening`, `nama_pemilik`) VALUES
(1, 'BRI', '603401011183535', 'RoniCa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_belanja`
--

CREATE TABLE `tb_belanja` (
  `id_belanja` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_belanja`
--

INSERT INTO `tb_belanja` (`id_belanja`, `id_produk`, `qty`, `tgl`, `status`, `id_user`, `id_bank`) VALUES
(33, 2, 1, '2018-11-13', 3, 4, 0),
(34, 3, 1, '2018-11-13', 3, 4, 0),
(35, 4, 2, '2018-11-13', 3, 4, 0),
(36, 1, 2, '2018-11-13', 3, 2, 1),
(37, 2, 1, '2018-11-13', 3, 2, 1),
(38, 4, 3, '2018-11-15', 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cabang`
--

CREATE TABLE `tb_cabang` (
  `id_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cabang`
--

INSERT INTO `tb_cabang` (`id_cabang`, `nama_cabang`, `alamat`) VALUES
(1, 'Jiandi', 'Jl. Pasar Pagak no 128'),
(2, 'Lawang', 'Jl. Raya Surabaya Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Obat Herbal'),
(3, 'Makanan Sehat ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `id_produk`, `qty`, `harga`, `id_user`, `tgl`, `status`) VALUES
(17, 1, 2, 50000, 2, 2018, 1),
(19, 4, 3, 35000, 2, 2018, 1),
(20, 1, 1, 50000, 2, 2018, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(11) NOT NULL,
  `Nama_pengirim` varchar(45) NOT NULL,
  `tujuan_bank` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id`, `Nama_pengirim`, `tujuan_bank`, `nominal`, `foto`, `id_user`) VALUES
(2, 'Khoeroni', 1, 650000, '151118briplsa.PNG', 2);

--
-- Triggers `tb_pembayaran`
--
DELIMITER $$
CREATE TRIGGER `update_status` AFTER INSERT ON `tb_pembayaran` FOR EACH ROW UPDATE tb_belanja set status=1 where id_user=new.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_penerima` varchar(35) NOT NULL,
  `provinsi` varchar(35) NOT NULL,
  `kab` int(11) NOT NULL,
  `kec` varchar(45) NOT NULL,
  `desa` varchar(65) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `jenis_kurir` varchar(45) NOT NULL,
  `ongkir` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_resi` varchar(25) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`id_pengiriman`, `nama_penerima`, `provinsi`, `kab`, `kec`, `desa`, `no_hp`, `jenis_kurir`, `ongkir`, `status`, `id_user`, `no_resi`, `tgl`) VALUES
(8, 'Kecap Abadi', '1', 17, 'q', 'Sambong Sedan', '08995903370', 'tiki', '18', 1, 4, 'XMD909888', '2018-11-13'),
(9, 'Dian Sastrol Wijoyo', '10', 380, 'Sedan', 'Sambong', '', 'pos', '23', 1, 2, 'BXXCD55600009', '0000-00-00'),
(10, 'khoironi', '10', 380, 'sedan', 'rembang', '', 'jne', '20', 1, 2, 'BXXCD55600009', '0000-00-00');

--
-- Triggers `tb_pengiriman`
--
DELIMITER $$
CREATE TRIGGER `status_keranjang` AFTER INSERT ON `tb_pengiriman` FOR EACH ROW UPDATE tb_keranjang set status=1 where id_user=NEW.id_user
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatepengiriman` AFTER UPDATE ON `tb_pengiriman` FOR EACH ROW UPDATE tb_belanja set status=3 where id_user=NEW.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `foto`, `id_kategori`) VALUES
(3, 'Yakoli', '95000', '<p><strong>Nomor Izin Edar</strong>&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp; POM TR173609471</p>\r\n\r\n<p><strong>Yakoli</strong>&nbsp;merupakan obat tradisional yang berbentuk cairan obat luar</p>\r\n\r\n<p><strong>Khasiat</strong>&nbsp;: Membantu meredakan gejala masuk angin, seperti perut kembung dan mual</p>\r\n\r\n<p><strong>Yakoli</strong>&nbsp;terbuat dari bahan alami diantaranya Rimpang Rumput Teki, Minyak Kayu Putih, Minyak Kelapa yang bermanfaat untuk:</p>\r\n\r\n<table style=\"width:718px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>Membantu meredakan perut kembung</li>\r\n				<li>Membantu melancarkan peredaran darah</li>\r\n				<li>Membantu sebagai antibiotik alami</li>\r\n				<li>Membantu menjaga kesehatan kulit</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>Membantu kesehatan jantung dan peredaran darah</li>\r\n				<li>Membantu rileksasi dan meningkatkan kualitas tidur</li>\r\n				<li>Membantu meredakan gangguan keropos tulang</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Cara Pemakaian</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>\r\n\r\n<ol>\r\n	<li>Kocok botol terlebih dahulu sebelum digunakan</li>\r\n	<li>\r\n	<p>Dioleskan pada bagian tubuh yang sakit</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Cara Penyimpanan&nbsp;</strong>: Setelah dibuka, tutup botol dengan rapat, dan simpan di tempat yang&nbsp; kering, bersih, dan terlindungi dari sinar matahari secara langsung pada suhu di bawah 30&deg;C</p>\r\n\r\n<p><strong>Keterangan</strong>&nbsp;<strong>:</strong></p>\r\n\r\n<ol>\r\n	<li>Obat luar tidak untuk diminum</li>\r\n	<li>Bagi yang mengalami perut kembung atau masuk angin dapat dioleskan pada bagian punggung (posisi lurus dengan lambung)</li>\r\n	<li>Bagi yang mengalami demam bisa dioleskan pada bagian lipatan tubuh misalkan ketiak dan leher</li>\r\n	<li>Bagi yang mengalami gangguan saraf terjepit bisa dioleskan 1 sampai 2 tetes ditambah garam secukupnya lalu dioleskan pada bagian yang sakit</li>\r\n	<li>Untuk rileksasi atau meningkatkan kualitas tidur bisa dioleskan pada bagian belakang daun telinga</li>\r\n</ol>\r\n\r\n<p><strong>Diproduksi Oleh :</strong>&nbsp;CV. Dari Teman Sejati Mojokerto-Indonesia</p>\r\n\r\n<p>QUANTITY</p>\r\n', '151118produk kecantikan yang aman.jpg', 2),
(4, 'Kecap Abadi', '35000', '<p>Indonesia merupakan negara yang dikenal memiliki cita rasa makanan yang beragam,mulai dari berempah, gurih, pedas, serta manis atau legit, dan kecap adalah merupakan salah satu bahan penambah cita rasa makanan yang bisa membuat masakan anda menjadi sajian yang lezat dan nikmat.</p>\r\n\r\n<p>Selain sebagai salah satu bahan untuk menambah cita rasa makanan, kecap juga sering digunakan untuk teman makan kerupuk atau snack, sebagai sambal untuk menambah nafsu makan, serta juga tidak sedikit&nbsp; masyarakat yang menggunakan kecap untuk meredakan batuk apabila dipadukan dengan bahan lainnya. Akan tetapi yang perlu kita perhatikan&nbsp; &nbsp;adalah&nbsp; kita harus&nbsp; cermat dalam memilih kecap yang berkualitas baik dan sehat, karena tidak sedikit kecap yang mengandung bahan pengawet serta pewarna&nbsp; yang tentunya akan menimbulkan efek negatif bagi kesehatan keluarga anda apabila dikonsumsi dalam jangka waktu yang lama.</p>\r\n\r\n<p>Kecap Abadi adalah kecap yang di buat dari bahan-bahan alami, yaitu :</p>\r\n\r\n<ul>\r\n	<li>Rempah herbal pilihan</li>\r\n	<li>Kedelai hitam</li>\r\n	<li>Kedelai lokal</li>\r\n	<li>Gula merah</li>\r\n	<li>Garam, dan lain-lain</li>\r\n</ul>\r\n\r\n<p>Kecap Abadi diolah secara higeinis, tanpa pengawet, tanpa pewarna, tanpa MSG, serta tanpa pemanis buatan, sehingga aman dikonsumsi untuk segala usia, baik anak-anak, orang dewasa, maupun manula.</p>\r\n\r\n<p>Apabila dikonsumsi dalam jangka waktu yang lama bisa memperbaiki metabolisme tubuh, serta meningkatkan kesehatan keluarga anda.</p>\r\n', '151118tehmanggata,mpro.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `judul`, `keterangan`, `foto`, `active`) VALUES
(3, 'SD', '', 'depomanggatamalangproduk kecantikan nasa,produk kecantikan wanita.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `tanggal_sampai` date NOT NULL,
  `ulasan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_belanja`
--
ALTER TABLE `tb_belanja`
  ADD PRIMARY KEY (`id_belanja`);

--
-- Indexes for table `tb_cabang`
--
ALTER TABLE `tb_cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_belanja`
--
ALTER TABLE `tb_belanja`
  MODIFY `id_belanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_cabang`
--
ALTER TABLE `tb_cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
