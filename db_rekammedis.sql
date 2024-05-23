-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL,
  `minggu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`, `email`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
('01497c16-1227-11ec-a583-2cf4467ea6c6', 'Dr. Iwantoro, Sp.PD', 'Spesialis Penyakit Dalam', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '081385992091', 'iwantoro_test@hospital.com', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 12:00 WIB', '08:00 WIB - 12:00 WIB'),
('7e57841a-c681-4a58-8913-c6f29ebc258c', 'Dr. Laudeo, Sp. U', 'Spesialis Urologi', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '081356732261', 'Laudeo.test@hospital.com', '08:00 WIB - 12:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 14:00 WIB', '08:00 WIB - 14:00 WIB', '10:00 WIB - 15:00 WIB', '15:00 WIB - 20:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klinik`
--

CREATE TABLE `tb_klinik` (
  `id_klinik` varchar(50) NOT NULL,
  `nama_klinik` varchar(50) NOT NULL,
  `alamat_klinik` text NOT NULL,
  `senin` varchar(50) NOT NULL,
  `selasa` varchar(50) NOT NULL,
  `rabu` varchar(50) NOT NULL,
  `kamis` varchar(50) NOT NULL,
  `jumat` varchar(50) NOT NULL,
  `sabtu` varchar(50) NOT NULL,
  `minggu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_klinik`
--

INSERT INTO `tb_klinik` (`id_klinik`, `nama_klinik`, `alamat_klinik`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
('523ea5db-1995-4047-a90f-e426721108af', 'Poliklinik Bedah Umum', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '10:00 WIB - 12:00 WIB', '20:00 WIB - 22:00 WIB', '20:00 WIB - 22:00 WIB'),
('a6d6405e-122a-11ec-a583-2cf4467ea6c6', 'Poliklinik Penyakit Dalam', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah No.Selatan, Sukaresmi, Cikarang Sel., Bekasi, Jawa Barat 17530', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '08:00 WIB - 16:00 WIB', '17:00 WIB - 20:00 WIB', '17:00 WIB - 20:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `dosis` varchar(50) NOT NULL,
  `jenis` enum('injeksi','kapsul','sirup') NOT NULL,
  `kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `keterangan`, `dosis`, `jenis`, `kadaluarsa`) VALUES
('180aa55b-122c-11ec-a583-2cf4467ea6c6', 'OBH Combi', 'Obat Batuk Berdahak', '100ml', 'sirup', '2021-12-31'),
('de5b63c0-7ef8-4e79-90ac-a3b8f82545de', 'Konidin', 'Obat batuk, flu dan masuk angin', '2 g', 'sirup', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `marga` enum('jawa','batak','betawi','sunda','dayak','asmat','minahasa','melayu','madura','bugis','lainnya') NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telprumah` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `agama` enum('islam','kristen','budha','hindu','kongucu','lainnya') NOT NULL,
  `golongan_darah` enum('a','b','ab','o') NOT NULL,
  `status_pasien` enum('menikah','belum menikah') NOT NULL,
  `jenis_pasien` enum('pribadi','bpjs','allianz','prudential','cigna','lainnya') NOT NULL,
  `nama_darurat` varchar(50) NOT NULL,
  `alamat_darurat` text NOT NULL,
  `hubungan_darurat` enum('orangtua','saudara','teman','sahabat','rekan kerja','atasan kerja','lainnya') NOT NULL,
  `no_telprumah_darurat` varchar(50) NOT NULL,
  `no_hp_darurat` varchar(50) NOT NULL,
  `sumber_informasi` enum('internet','tv','majalah','koran','radio','spanduk','seminar','event','referensi teman','lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `marga`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `no_ktp`, `email`, `no_telprumah`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `golongan_darah`, `status_pasien`, `jenis_pasien`, `nama_darurat`, `alamat_darurat`, `hubungan_darurat`, `no_telprumah_darurat`, `no_hp_darurat`, `sumber_informasi`) VALUES
('?$??z?iI?G?H???e??', 'toni1', 'batak', 'CImahi33', 'cimhai11', 'cimahi33', 'cimahi55', 'cimahi22', 'cimahi44', '08082345622', 'rafigamer888@gmail.com', '06868655', '0813719093536', 'CImindi6', '2024-05-23', 'pria', 'islam', 'a', 'menikah', 'pribadi', 'oiii43', 'moak', 'orangtua', '08182313567', '0801235757', 'internet'),
('', 'sad', 'jawa', 'sadsadads', 'asdsa', 'adsdasd', 'sadsadasd', 'asdasd', 'asdsasd', 'asdasddsa', 'asddsadsa', 'assad', 'dsasaddsa', 'saddsadds', '2024-05-01', 'pria', 'islam', 'a', 'menikah', 'pribadi', 'sadsad', 'asdasddsa', 'orangtua', 'saddsa', 'asddsa', 'internet'),
('486e9f80-619f-4636-9407-9c5db690fdb9', 'Asep 2', 'batak', 'cimindi', 'cibeureum', 'cimindi2', 'cimahi', 'jawa barat', '0442', '0812414345', 'yttaayttaa611@gmail.com', '0781344542', '0813947', 'Ciminfi', '2024-05-22', 'pria', 'islam', 'a', 'belum menikah', 'pribadi', 'tawd', 'jl 1', 'orangtua', '08134134', '0812414', 'internet'),
('65f22b47-0319-11ec-ac8b-7ab417576e22', 'Dimas', 'jawa', 'Jl. Raya Pulo Sirih No.24 RT 001/003 Desa Sukajadi, Kec. Sukakarya, Kab.Bekasi, 17630.', 'Sukajadi', 'Sukakarya', 'Bekasi', 'Jawa Barat', '17630', '3216142301010001', 'dwiputradimas123@gmal.com', '-', '085811379583', 'Bekasi', '2001-01-23', 'pria', 'islam', 'a', 'belum menikah', 'pribadi', 'Masidah', 'Jl. Raya Pulo Sirih No.24 RT 001/003 Desa Sukajadi, Kecamatan Sukakarya,Kab.Bekasi, 17630.', 'orangtua', '-', '085883348094', 'internet'),
('f40fd2b3-c0c9-440e-9729-22c48b61e556', 'Aditya', 'sunda', 'Jl. Letjen M.T. Haryono No.52-53, RT.11/RW.5, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12771', 'Tebet Barat', 'Tebet', 'Jakarta Selatan', 'DKI Jakarta', '12770', '3216150983829577', 'adhi.test@gmail.com', '107233', '081356978834', 'Jakarta', '2000-09-10', 'pria', 'islam', 'o', 'belum menikah', 'allianz', 'Dimas', 'Kp. Pulo Sirih RT 001/003 Desa Sukajadi, Kec. Sukakarya, Kab. Bekasi, 17630.', 'teman', '100712', '085811379583', 'referensi teman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rekammedis` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `id_klinik` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `tanggal_periksa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rekammedis`, `id_pasien`, `id_dokter`, `id_klinik`, `keluhan`, `diagnosa`, `tanggal_periksa`) VALUES
('1286b8ec-1e7e-44ca-a792-5e41797ee30d', '65f22b47-0319-11ec-ac8b-7ab417576e22', '01497c16-1227-11ec-a583-2cf4467ea6c6', '523ea5db-1995-4047-a90f-e426721108af', 'kok', 'awdas', '2024-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis_obat`
--

CREATE TABLE `tb_rekammedis_obat` (
  `id_rekammedis_obat` int(15) NOT NULL,
  `id_rekammedis` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_rekammedis_obat`
--

INSERT INTO `tb_rekammedis_obat` (`id_rekammedis_obat`, `id_rekammedis`, `id_obat`) VALUES
(1, '1286b8ec-1e7e-44ca-a792-5e41797ee30d', '180aa55b-122c-11ec-a583-2cf4467ea6c6'),
(0, 'cf99a24c-f0fc-4ad4-8370-ab8c83379569', 'de5b63c0-7ef8-4e79-90ac-a3b8f82545de');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tarif`
--

CREATE TABLE `tb_tarif` (
  `id_tarif` int(11) NOT NULL,
  `pelayanan` varchar(50) NOT NULL,
  `tarif` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tarif`
--

INSERT INTO `tb_tarif` (`id_tarif`, `pelayanan`, `tarif`) VALUES
(1, 'Dokter Spesialis dan Umum', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','dokter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'dokter', 'd22af4180eee4bd95072eb90f94930e5', 'dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_klinik`
--
ALTER TABLE `tb_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rekammedis`),
  ADD UNIQUE KEY `id_pasien` (`id_pasien`,`id_dokter`,`id_klinik`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `tb_rekammedis_ibfk_2` (`id_klinik`);

--
-- Indexes for table `tb_rekammedis_obat`
--
ALTER TABLE `tb_rekammedis_obat`
  ADD PRIMARY KEY (`id_rekammedis_obat`),
  ADD UNIQUE KEY `id_rekammedis` (`id_rekammedis`,`id_obat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tarif`
--
ALTER TABLE `tb_tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
