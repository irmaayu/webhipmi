-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2017 at 04:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ukm_hipmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Rijaalul Ummam H', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'Tiara Sri Rahayu', 'tiara', '26a91342190d515231d7238b0c5438e1'),
(11, 'Febby Nurfitriyan', 'febby', 'c84258e9c39059a89ab77d846ddab909'),
(12, 'Indra Cahyadi', 'indra', 'fc1ebc848e31e0a68e868432225e3c82'),
(14, 'Mochamad Akbar Giuliano Givanska', 'akbar', '32cacb2f994f6b42183a1300d9a3e8d6');

-- --------------------------------------------------------

--
-- Table structure for table `adminhipmi`
--

CREATE TABLE IF NOT EXISTS `adminhipmi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_adminhipmi` varchar(50) NOT NULL,
  `username_hipmi` varchar(30) NOT NULL,
  `pass_hipmi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `adminhipmi`
--

INSERT INTO `adminhipmi` (`id`, `nama_adminhipmi`, `username_hipmi`, `pass_hipmi`) VALUES
(2, 'Rijaalul Ummam Haryono', 'rijaalul_admin', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'Koreandae.com', 'koreandae', 'ca68a076ce321f4fd368b300ba05971d'),
(9, 'Nadiyahnur', 'nadiyahnur', '459764e3eb4cbeaa75544e7301d54f6d'),
(10, 'mahijra.id', 'mahijra.id', 'fde5108a5edd759250c426f6a4566f14');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_agenda` date NOT NULL,
  `judul_agenda` longtext NOT NULL,
  `isi_agenda` longtext NOT NULL,
  `foto_agenda` varchar(100) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tanggal_agenda`, `judul_agenda`, `isi_agenda`, `foto_agenda`) VALUES
(1, '2017-01-06', 'PELANTIKAN HIPMI PT UPI', '<p>Tempat di Auditorium JICA FPMIPA A , UPI</p>', 'bimafest.jpg'),
(2, '2017-02-04', 'ARISAN HIPMI PT UPI', '<p>Tempat di pernikahan Bunda Dewi, jangan lupa bawa uang arisan nya yah&nbsp;</p>', 'hipmis.jpg'),
(3, '2017-02-03', 'Sharing Bisnis Line Coorporation', '<p>Di BPU UPI, Bekerja sama dengan Pengusaha Kampus</p>', 'hipmis1.jpg'),
(4, '2017-02-22', 'Sharing Bisnis 2', '<p>Belum Ditentukan</p>', 'hipmis2.jpg'),
(5, '2017-03-08', 'Sharbis 3', '<p>Belum Ditentukan</p>', 'hipmis3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat_skr` varchar(500) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `nama_usaha` varchar(500) NOT NULL,
  `jenis_usaha` varchar(500) NOT NULL,
  `lama_usaha` varchar(100) NOT NULL,
  `medsos` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama_lengkap`, `ttl`, `alamat_skr`, `no_hp`, `jurusan`, `nim`, `angkatan`, `nama_usaha`, `jenis_usaha`, `lama_usaha`, `medsos`) VALUES
(1, 'nadiyah nur f', 'bandung, 15 februari', 'idemm', '85720072045', 'PKK Prodi Tata Busana', 1401516, 8, 'helonadin', 'Barang', '-+2 tahun', '@helonadin'),
(2, 'Anasthasia Sabatini', 'Bandung, 4 Oktober 1997', 'Jalan cihampelas gang pelita no. 312a', '8982539108', 'Psikologi', 1607187, 10, 'Dearmy.makeup', 'Barang', '3 bulan', '@dearmy.makeup'),
(3, 'Alfiah Siti Rohmaniah', 'Garut,24 Mei 1998', 'Geger arum, bandung', '81322533882', 'Manajemen Pemasaran Pariwisata', 1600577, 10, 'MR.INSWORLD', 'Barang', 'Proses', 'Ig: @mr.insworld'),
(4, 'Kalingga Devani', 'Bandung, 16 Maret 1998', 'Sarijadi blok 8 no 98 rt 9 rw 9, kota Bandung', '', 'Pendidikan Tata Boga', 1600516, 10, '', 'Kuliner', '', ''),
(5, 'Wahyu Rizky', 'Jakarta, 22 Juni 1998', 'Jl.Gegerkalong Tengah no.157 Kec.Sikasari, Bandung', '81210868664', 'Manajemen', 1603649, 10, 'WHYCOTTON', 'Barang', '2016', 'www.instagram.com/whycotton'),
(6, 'Ina Sinaryanti', 'Majalengka, 15 Januari 1996', 'Gegerkalong tengah', '85294747931', 'Pendidikan Sejarah', 1303474, 7, 'Reseller HPAI (perusahaan herbal dan halal)', 'Barang', '2 bulan', ''),
(7, 'Salman Hafidz', '25 juni 1998', 'Gegerkalong girang (apotek syifa farma)', '87882755898', 'Manajemen industri katering', 1605424, 10, 'BiteToast', 'Kuliner', '1 semester', 'Ig: @bitetoast_'),
(8, 'Muhamad Dwi Herdiansyah', 'bandung, 26 oktober 2016', 'Jalan sukajadi Gang Pa Marjaban no 104/182a RT02/RW04, bandung', '81910207856', 'Administrasi Pendidikan', 1600037, 10, '2ECONDPARTY', 'Jasa', 'Baru mau memulai', '@2econdparty, line at @lab2342s'),
(9, 'Ratu dira safira', 'Bandar lampung, 22 mei 97', '-', '87825743690', 'Pend.manajemen perkantoran', 1500891, 9, 'Pleaseeme_id', 'Barang', '3 bulan', '@pleaseeme_id'),
(10, 'Fenny Tri Mardiani', 'Cimahi, 11 Februari 1997', 'Jalan Panday No. 158 RT 05 / RW 07 Kec. Cimahi Tengah Kel. Karang Mekar Kota Cimahi 40523', '81221877721', 'Pendidikan Kimia', 1501003, 9, 'fadeawayshop & shoes.scream', 'Barang', '? 3 tahun', 'Instagram : @fadeawayshop & @shoes.scream'),
(11, 'Rara Santoso', 'Bandung 13 10 1997', '', '8562001501', 'manajemen', 1605985, 10, 'Ges Store', 'Barang', '1 bln', 'Gesto.bisnissaya.com'),
(12, 'Annisa Yuliandini ', 'Tasikmalaya, 21 Juli 1998', 'Jalan Cibaduyut Raya No. 72 ', '82189383357', 'Kimia', 1601811, 10, 'TAMAGO EAT ME UP ', 'Kuliner', 'Jalan 4 bulan', '@tamago_up (instagram) '),
(13, 'Reynaldo Andika', 'Bandung, 15 Desember 1996', 'Komp. Bumi Harapan Cibiru Blok DD 2 no 12 Kabupaten Bandung', '85864789262', 'MRL', 1401056, 8, 'Yourbottle_life', 'Barang', '3 bulan', 'IG: yourbottle_life\nLine@ : @dyu0638k'),
(14, 'Rahman Setiawan', 'garut,23-11-1996', 'Jalan gegerkalong girang nomor 44e', '89502413433', 'ilmu ekonomi dan keuangan islam', 1505755, 9, 'Bisnis Online', 'Barang', '5 bulan', 'Tokopedia'),
(15, 'Rafi Muhammad', 'Bandung, 14 Februari 1998', 'Jl. H. Mesri No.40 Bandung', '82216029960', 'Manajemen Pemasaran Pariwisat', 1608267, 10, 'belum ada', '', '', ''),
(16, 'RESTI JULVIA ERI', 'BATUSANGKAR, 30 JULI 1997', 'Gegerkalong Tengah no.3 rt3 rw3, Bandung', '85263850178', 'Management Resort & Leisure', 1605087, 10, '', '', '', ''),
(17, 'Allyda Fatihul jannah', 'Bandung, 25-10-1996', 'KOST BARU Jl. DR. Setiabudi Belakang No. 201 A, RT. 02 - RW. 03 Kel. Geger Kalong Kec. Sukasari 40153 Bandung ', '85334862421', 'Pendidikan Tata Busana', 1400926, 8, 'Allyda Fatihull Boutique', 'Barang', '2thn lebih', 'Allydafboutique'),
(18, 'Febby Nurfitriyan', 'Bandung, 13 Februari 1997', 'Jl. PHH Mustafa Gg. Neglasari Selatan No.15 Bandung 40125', '81281390628', 'manajemen', 1401267, 8, 'nougative', 'Kuliner', '>1th', 'Line@: @uul1091n \nIg: nougative \nWA: 081281390628'),
(19, 'DEBI VALENTINA BR BANGUN', 'BANDUNG,  15 FEBRUARI 1999', 'JL.  CILIMUS ACI KOST 7 NO. 719', '81260161798', 'MANAJEMEN INDUSTRI KATERING', 1607085, 10, 'SHINE J SHINE', 'Barang', '2 BULAN', 'Instagram @shinejshine \nLine@ @tlj8605x'),
(20, 'Meilita Nur Hasanah', 'Subang, 4 mei 1996', 'Jalan cilimus bandung', '89687913514', 'Manajemen', 1401382, 8, 'Pulsa', 'Jasa', '2 tahun', 'Tidak menggunakan media sosial'),
(21, 'Fawaz Ramadlan', 'ciamis, 26 januari 1998', 'jl. Geger arum 1 no. 125', '82185258434', 'Pendidikan matematika', 1600589, 10, 'Tanpanama', 'Jasa', '-+ 1 tahun', '-'),
(22, 'Sopian Gandhi', 'Majalaya 25 mei 2000', 'Dimana aja boleh ', '89689253753', 'Olahraga', 1506202, 9, 'SoganDroid, Tigasepatu_id, ', 'Jasa', '4 Tahun', 'Instagram'),
(23, 'Asep indra cahyadi', 'Bandung, 28 september 1994', 'Jl. Kebonjayanti no.74 rt 02/09 Kiaracondong Bandung 40284', '81321332101', 'Pend Manajemen Bisnis', 1504091, 9, 'Aracraft', 'Barang', '1,5 tahun', 'Aracraft.id & @aracraft'),
(24, 'Fawaz Ramadlan', 'ciamis, 26 januari 1998', 'jl. Geger arum 1 no. 125', '82185258434', 'Pendidikan matematika', 1600589, 10, 'Tanpanama', '', '-+ 1 tahun', '-'),
(25, 'Annisa Nurjanah', 'Bandung,6 januari 1999', 'Panorama 3', '8979999700', 'Teknik sipil', 1603572, 10, 'Keripik cimol', 'Kuliner', '3 tahun', '-'),
(26, 'Fia anisa nur utami', 'Subang 4 maret 1996', 'Perumahan cibeunying permai no.6', '89697743576', 'Ieki', 1400519, 9, '@guzelcollection_', 'Barang', 'Beberapa bulan yg lalu', '@guzelcollection_'),
(27, 'ervina nurfalah', 'bandung,13 maret 1998', 'Jl. Cilimus No. 11, RT.07 / RW. 06, Kel. Isola, Kec. Sukasari, Isola, Sukasari, Kota Bandung, Jawa Barat 40154, Indonesia', '89609902394', 'pend,manbis', 160619, 10, 'sarung', 'Barang', 'baru', '@sarunghamnida'),
(28, 'Cindy sri arianti', '31 05 99', 'Jl. Gegerkalong girang (masuk gang dpn sd isola)', '81224284984', 'Pend. Manajemen Bisnis', 1601696, 10, 'Koreandae', 'Barang', '4 tahun 2 bulan', 'www.koreandae.com\nLINE : @TIB7818J\nIg : @koreandae\nEmail : admin@koreandae.com'),
(29, 'Anisa Rahmisari', 'Bandung, 27 Maret 1997', 'Jalan Moh Toha, cibiuk kp. Leuwi melang RT 02/06 no.50 kec. Dayeuhkolot kab. Bandung', '81321547117', 'biologi', 1501273, 9, 'Rahmis', 'Kuliner', '2 tahun', 'Ig: @rahmis.id\nLine: @khb2483t'),
(30, 'Kania Sekar Ayu', 'Bandung, 21 Maret 1999', 'KPAD Gegerkalong Jl. Pak Gatot VI no 221A Bandung', '87825400249', 'Pend. Tata Busana', 1603666, 10, 'Clothing online shop', 'Barang', '2 bulan', 'IG: @shabynachic\nWebsite: shabynachic@wordpress.com\nLine@: @wdt4714x'),
(31, 'Halimah sadiyyah', '23 mei 1998', 'Cilimus', '81380850189', 'Mik', 1603728, 10, '', 'Barang', '', ''),
(32, 'Jihan nurul achmad', 'Bandung, 2 januari 1999', '', '85624962182', 'Manajemen industri katering', 1607510, 10, '', 'Kuliner', '', ''),
(33, 'Naufal Falah', 'Bogor, 14-6-1997', 'Jln Sersan Bajuri no.23', '81219520683', 'Pend. Seni Musik', 1505583, 10, 'Licks.', 'Barang', '2 bulan', '@licks_cloth'),
(34, 'Ivan Fadhilla', 'Majalaya 2 Juni 1998', 'Jl. H. Karim no.6 Ds. Tanimulya Kec. Ngamprah kab. Bandung Barat', '8992548197', 'Pendidikan Manajemen Bisnis', 1603992, 10, 'Tour dan Travel', 'Jasa', '6 Bulan', ''),
(35, 'Firda Khoirunisa', 'Jakarta, 08 Juli', 'Jl. Geger Asih No.22', '85771282414', 'PGSD', 1403862, 9, 'Firrofi Collection', 'Barang', '11 tahun', 'firroficollection'),
(36, 'Rino Sugiyanto', 'Lebak, 12 Juni 1997', 'Jl. Gegerkalong Girang, Gang kenanga, No. 56, kec. Sukasari,   Bandung', '85717097057', 'Manajemen Resort dan Leisure', 1603928, 10, 'Belum Ada', 'Kuliner', 'Belum ada', ''),
(37, 'Gumelar Putra Mulyana', 'Jakarta, 9 Nov 1997', 'Jl. Kapten Abdul Hamid No.87, Ledeng, Cidadap, Kota Bandung, Jawa Barat 40141', '85811241497', 'Manajemen', 1604145, 10, 'KK Indonesia', 'Jasa', 'Baru sebulan', 'Blom ada'),
(38, 'Asri Rachmayani', 'Majalengka, 13 Juli 1997', 'Negla', '81321145197', 'Pend. Manajemen Perkantoran', 1503936, 9, '', 'Barang', '1tahun', ''),
(39, 'Denis Anang Fauzi', 'Subang, 17 April 1998', 'Jalan picung, kost bu Hj.Dede', '82115401524', 'Pendidikan Manajemen Bisnis', 1607357, 10, 'Belum, masih memikirkan di bidang Fashion', 'Barang', '', ''),
(40, 'Chindiar Rizka Alifia', 'Probolinggo,15 september 1996', 'Jl.Dewi Sri no.22AA Bandung', '82216910924', 'Kimia', 1503542, 10, 'Masih dipikirkan', 'Barang', 'Masih dipelajari', 'Belum ada'),
(41, 'Mega Rahmayani', 'Bandung, 25 Mei 1997', 'Jl. Geger arum no 67', '8980805620', 'Pendidikan Kimia', 1504998, 10, 'Masih reseller otw bisnis sendiri', 'Barang', 'Sekitar 3 bulan', '-'),
(42, 'jundullah arrabbani saifullah', 'cianjur 16 agustus 1996', 'Geger kalong hilir kpad jl pak gatot 1 nmr 43', '87720388807', 'pgsd penjas', 1401550, 9, 'kalung, gelang, reseller ', 'Barang', '1 semester', ''),
(43, 'Dinda amalia', '31 juli 1996', 'jl. pasir leutik no f31a bandung', '85702328877', 'manajemen', 1405116, 10, 'Little Beautifly', 'Barang', '4bulan', 'ig : little_beautifly\nLine@ : @ign6946v\nBbm : D4C11215\nWa : 082219065538\nCarousell : @littlebeautifl'),
(44, 'Haris Wajdi Nugraha', 'Bandung, 14 Juni 1996', 'Soreang', '8996844203', 'Administrasi Pendidikan', 1404170, 9, 'CJM MILK & YOGHURT', 'Kuliner', '1 Tahun', ''),
(45, 'Rindana Meidianti', 'Bandung, 05 Mei 1997', 'Jalan Cibeunying Permai Raya no.7', '8579857226', 'P.B. Inggris', 1403623, 9, 'Uniqway', 'Barang', 'baru beberapa bulan dan sebenarnya belum sepenuhnya berjalan', '@uniqway'),
(46, 'SEKA', 'Garut, 20 juni 1995', 'Jl.geger arum 1 no.131 rt. 03 rw. 06. Kel. Isola kec. Sukasari', '82214519599', 'Ilmu Ekonomi dan Keuangan Islam ', 1405613, 9, ' Belum release ', 'Barang', '-', '-'),
(47, 'Annisa Yuliandini ', 'Tasikmalaya, 21 Juli 1998', 'Jalan Cibaduyut Raya No. 72 ', '82189383357', 'Kimia', 1601811, 10, 'Batik Zaida Jaya', 'Barang', '4 tahun', 'Belum ada'),
(48, 'Cindy Sri Arianti', '31 05 1999', 'Jl. Gegerkalong girang masuk gang dpn sd isola', '81224284984', 'Pend. Manajemen Bisnis', 1601696, 10, 'Tavseu Culinary', 'Kuliner', '1 bulan', 'Ig @tavseu'),
(49, 'Muhammad Haekal Ramadhani', 'Cirebon , 28 januari 1998', 'Cipaku indah 2', '', 'biologi ', 1607150, 10, 'Woahventure', 'Barang', 'semenjak kuliah', 'Woahventure'),
(50, 'Cindy sri arianti', '31 05 1999', 'Jl. Gegerkalong girang masuk gang dpn sd isola', '81224284984', 'Pend. Manajemen bisnis', 1601696, 10, 'Design brand BYCINDAE', 'Jasa', '1 bulan', '@bycindae'),
(51, 'Desri Yuliani Nurhayati', 'Tasikmalaya, 31 07 1997', 'Jalan geger kalong', '82240808276', 'Pendidikan Tata Busana', 1603741, 10, 'DYN', 'Barang', '1 tahun', ''),
(52, 'Ivan Fadhilla', 'Majalaya 2 Juni 1998', 'Jl. H. Karim no.6 Ds. Tanimulya Kec. Ngamprah Kab. Bandung Barat', '8992548197', 'Pendidikan Manajemen Bisnis', 1603992, 10, 'Putra Rahayu Meubel', 'Jasa', '10 Tahun', '@lba4086g'),
(53, 'Indah pratiwi', 'Garut 9 desember', 'Gerlong tengah no 54 (deket pasar)', '+62896830502', 'Pgsd', 1405325, 10, 'Pojok konveksi', 'Jasa', '1 tahun', 'Ig: pojokkonveksi \nWa: 081214167010\nLine :@gwf9044u'),
(54, 'RIZAL KHOIRUL INSAN', 'Bandung, 10 Februari 1995', 'Jl.Akipadma No.11 RT.04 RW.08 Kel.Babakan Kec.Babakan Ciparay 40222 Bandung', '83820930779', 'Pendidikan Seni Rupa', 1307696, 9, 'RADIUZ WEARVENTURE', 'Barang', '1.5', 'Line@: @radiuz | IG: @radiuz_id | FB: RADIUZ'),
(55, 'Tyas Juliyana Nugraha', 'Bandung, 26 Juli 1996', 'Jalan Soreang Cipatik No 52 RT 01 RW 05 Desa Pamekaran Kecamatan Soreang Kabupaten Bandung', '87785611692', 'Administrasi Pendidikan', 1403075, 9, 'Tyas Hijab Style', 'Barang', 'Baru mulai kembali awal tahun ini', '@tyashijabstyle'),
(56, 'Siti Wulan Sari', 'Bandung, 19 September 1996', 'Sda', '85864443491', 'Administrasi Pendidikan', 1401773, 9, '-', 'Barang', '-', '-'),
(57, 'Mela Vhita Dewi', 'Ciamis, 29 April 1995', 'Jalan Kartika Raya no 236 B KPAD Gerlong Bandung', '82295165956', 'Manajemen Resort & Leisure', 1404162, 9, 'Wiyarta Ethnic ', 'Barang', '6 bulan', '@wiyarta_ethnic'),
(58, 'Firman Nur Zulfikar', 'Palangkaraya, 4 april 1997', 'Idem', '85759115073', 'Kimia non dik', 1505776, 9, 'Peternakan ikan', 'Barang', '2 bulan', 'Tidak ada'),
(59, 'Sufi Nur Endahing Pengukir', 'Tangerang, 26 Oktober 1996', 'Jl. Geger Kalong Girang no:57 Bandung', '81290609623', 'Pendidikan Tata Busana', 1606393, 10, 'Belum ada', 'Barang', '', ''),
(60, 'Andino Septian', 'Bandung, 19 Februari 1998', 'Komplek Bukit Cipageran Indah A-4, Cimahi Utara', '87823162880', 'Pendidikan Teknik Bangunan', 1605020, 10, 'Minuman', 'Kuliner', '2 bulan', ''),
(61, 'Dede Rachmat Hidayat', 'Tasikmalaya, 3 Januari 1996', 'Jl. Sersanbadjuri No.8 RT/RW 02/04 Kel. Isola Kec.Sukasari Kota Bandung (Kosan Ibu Hj. Martin)', '87787612181', 'Teknik Arsitektur', 1406414, 10, 'Bite Toast', 'Kuliner', '4 Bulan', 'Ig : @bitetoast_ fb: Bite Toast line@ : wnp401d'),
(62, 'Hajiman', 'Manggar, 27 Maret 1999', 'Jalan geger kalong girang tengah nomor 30a', '87775270794', 'Manajemen Industri Katering', 1603609, 10, '', '', '', ''),
(63, 'Asri Rachmayani', 'Majalengka, 13 Juli 1997', 'Negla', '81321145197', 'Pend. Manajemen Perkantoran', 1503936, 9, 'Reseller Oriflame', 'Barang', '1 tahun', '@asrir66'),
(64, 'Retno Mutiara Meidi Nurdani', 'Bandung, 29 oktober 1994', 'SDA', '82219065538', 'Manajemen', 1405105, 10, 'Little Beautifly', 'Barang', '3 bulan', 'Ig: @littlebeautifly\nLine@: @ign6946v\nBbm: D4C11215\nWa: 082219065538'),
(65, 'Friesty Paramitha Dewi', 'Sukabumi, 27 Mei 1998', 'Jl Gegerkalong Hilir Gg. Al-Barkah', '85795931971', 'Pendidikan Akuntansi', 1606685, 10, '', '', '', ''),
(66, 'Rai Fathurrahman', 'Bekasi, 24 april 1998', 'Jalan cidadap girang no 4 Bandung', '82216579632', 'Pendidikan Teknik Arsitektur', 1604973, 10, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(50) NOT NULL,
  `isi_singkat_berita` text NOT NULL,
  `isi_lengkap_berita` longtext NOT NULL,
  `kategori_berita` int(11) NOT NULL,
  `foto_berita` varchar(100) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_singkat_berita`, `isi_lengkap_berita`, `kategori_berita`, `foto_berita`) VALUES
(2, 'LOREM IPSUM', 'Berita Singkat', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus nunc in tempor ornare. Aenean sodales elit turpis, quis sodales ipsum lobortis et. Etiam et magna id elit gravida consectetur sed sit amet ex. Integer sed placerat ex. Nam quis felis maximus, malesuada quam sit amet, laoreet nisl. Ut dapibus dui arcu, vel eleifend lorem rutrum ac. Fusce consequat ipsum in mi suscipit, id efficitur nisi dictum. Morbi fermentum, ipsum ac scelerisque pulvinar, risus sem facilisis est, a mollis elit est et dolor. Duis maximus imperdiet massa eget suscipit. Pellentesque ac tincidunt leo, molestie pharetra turpis. Mauris lectus orci, sagittis et rutrum sed, dignissim ac velit. Maecenas consequat laoreet ornare. Nullam vitae massa imperdiet, posuere velit quis, sagittis neque. Pellentesque ullamcorper massa magna, vel mattis est interdum in. Proin massa velit, finibus tristique ornare at, mattis eget purus. Morbi sollicitudin rutrum nisl vel pulvinar. Mauris fermentum vestibulum quam. Nunc sollicitudin egestas nisl ut consequat.', 2, 'hipmi.jpg'),
(3, 'Seminar LINE SHOPPING, Maksimalkan Penjualanmu!', '<p><strong>LINE Indonesia X Pengusaha Kampus Bandung</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Bagaimana caranya memanfaatkan LINE@ untuk mendulang profit?</p>\r\n<p>Mungkin kamu pernah atau akan menghadapi hal-hal ini:</p>\r\n<p>- Merasa strategi marketing kamu kurang berjalan sesuai ekspektasi.</p>\r\n<p>- Kamu sudah menghabiskan banyak dana untuk paid promote di akun-akun besar, tapi tetap saja sepi pembeli.</p>\r\n<p>- Merasa akun LINE@ kamu kurang maksimal?</p>\r\n<p>- Kamu belum menemukan marketplace yang cocok untuk produk kamu?</p>\r\n<p>- Atau ingin sekali broadcast, closing jutaan bahkan PULUHAN juta?</p>\r\n<p>&nbsp;</p>\r\n<p>Trial and error memang melelahkan. Data dari LINE Indonesia menyatakan, rata-rata seller memerlukan waktu satu tahun atau lebih untuk mendapatkan income 20 juta per bulan melalui LINE@.</p>', '<p><strong>LINE Indonesia X Pengusaha Kampus Bandung</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Bagaimana caranya memanfaatkan LINE@ untuk mendulang profit?</p>\r\n<p>Mungkin kamu pernah atau akan menghadapi hal-hal ini:</p>\r\n<p>- Merasa strategi marketing kamu kurang berjalan sesuai ekspektasi.</p>\r\n<p>- Kamu sudah menghabiskan banyak dana untuk paid promote di akun-akun besar, tapi tetap saja sepi pembeli.</p>\r\n<p>- Merasa akun LINE@ kamu kurang maksimal?</p>\r\n<p>- Kamu belum menemukan marketplace yang cocok untuk produk kamu?</p>\r\n<p>- Atau ingin sekali broadcast, closing jutaan bahkan PULUHAN juta?</p>\r\n<p>&nbsp;</p>\r\n<p>Trial and error memang melelahkan. Data dari LINE Indonesia menyatakan, rata-rata seller memerlukan waktu satu tahun atau lebih untuk mendapatkan income 20 juta per bulan melalui LINE@.</p>\r\n<p>&nbsp;</p>\r\n<p>LINE percaya bahwa dengan adanya fitur baru LINE Shopping, akan memperbesar kemungkinan bagi para seller menemukan kolam yang tepat untuk memasarkan produk mereka. Oleh karena itu, LINE Indonesia dan Pengusaha Kampus ingin mengupas tuntas cara optimalisasi akun LINE@ dan cara berjualan di Marketplace baru mereka, LINE Shopping dalam acara:</p>\r\n<p>&nbsp;</p>\r\n<p>LINE SELLER CORNER X Pengusaha Kampus</p>\r\n<p>Tanggal 3 Februari 2017</p>\r\n<p>Tempat di Auditorium Poltek POS Indonesia Jl. Sariasih No. 54, Sarijadi, Bandung.</p>\r\n<p>Pukul 08:00 s.d 11:00</p>\r\n<p>&nbsp;</p>\r\n<p>Dalam acara ini akan dibahas:</p>\r\n<p>- Apa itu LINE SHOPPING</p>\r\n<p>- Fitur-fitur LINE SHOPPING yang akan sangat membantu penjualan.</p>\r\n<p>- Cara optimalisasi LINE@</p>\r\n<p>- Open Partnership</p>\r\n<p>- Dan masih banyak lagi.</p>\r\n<p>&nbsp;</p>\r\n<p>Kapasitas terbatas!</p>\r\n<p>Akan ada merchandise spesial dari LINE untuk 250 orang pendaftar pertama dan DOORPRIZE!</p>\r\n<p>Booking tiketmu sekarang juga di: https://lin.ee/bkNxe6I</p>', 3, 'web1.jpg'),
(4, 'DINAMIK 12 UPI', '<section class="_tfkbw _d39wz" style="margin: 0px; padding: 20px 0px; border: 0px solid #000000; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline; -webkit-box-align: stretch; align-items: stretch; box-sizing: border-box; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; flex-shrink: 0; position: relative; -webkit-box-pack: end; justify-content: flex-end;"><a class="_rmo1e" style="margin: 0px 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #999999; text-decoration: none; flex-shrink: 0;" href="https://www.instagram.com/p/BPIBeFqA05c/"><time class="_379kp" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 18px; font-family: inherit; vertical-align: baseline;" title="11 Januari 2017" datetime="2017-01-11T13:13:56.000Z">1 minggu</time></a></section>\r\n<ul class="_mo9iw _123ym" style="margin: -5px -24px 0px; padding: 5px 24px 20px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline; list-style: none; -webkit-box-flex: 1; flex-grow: 1; overflow: auto;">\r\n<li class="_nk46a" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative; word-wrap: break-word;">\r\n<h1 style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><a class="_4zhc5 notranslate _iqaka" style="margin: 0px 0.3em 0px -5px; padding: 0px 0px 0px 5px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: 18px; font-family: inherit; vertical-align: baseline; color: #262626; text-decoration: none; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="dinamik_upi" href="https://www.instagram.com/dinamik_upi/">dinamik_upi</a><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">[Perlombaan DINAMIK 12]????<br /><br />Halo selamat malam semuanya !????<br />.<br />Sudah pada daftar DINAMIK 12 belum? Kalau belum yuk pada daftar ! Jangan sampai menyesal yah pendaftaran hanya dibuka dari tanggal 9 Januari hingga 9 Februari 2017????<br />.</span></h1>\r\n</li>\r\n<li class="_nk46a" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative; word-wrap: break-word;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">.</span></li>\r\n<li class="_nk46a" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative; word-wrap: break-word;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">....</span></li>\r\n</ul>', '<section class="_tfkbw _d39wz" style="margin: 0px; padding: 20px 0px; border: 0px solid #000000; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline; -webkit-box-align: stretch; align-items: stretch; box-sizing: border-box; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; flex-shrink: 0; position: relative; -webkit-box-pack: end; justify-content: flex-end;"><a class="_rmo1e" style="margin: 0px 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #999999; text-decoration: none; flex-shrink: 0;" href="https://www.instagram.com/p/BPIBeFqA05c/"><time class="_379kp" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 18px; font-family: inherit; vertical-align: baseline;" title="11 Januari 2017" datetime="2017-01-11T13:13:56.000Z">1 minggu</time></a></section>\r\n<ul class="_mo9iw _123ym" style="margin: -5px -24px 0px; padding: 5px 24px 20px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline; list-style: none; -webkit-box-flex: 1; flex-grow: 1; overflow: auto;">\r\n<li class="_nk46a" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative; word-wrap: break-word;">\r\n<h1 style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><a class="_4zhc5 notranslate _iqaka" style="margin: 0px 0.3em 0px -5px; padding: 0px 0px 0px 5px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: 18px; font-family: inherit; vertical-align: baseline; color: #262626; text-decoration: none; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="dinamik_upi" href="https://www.instagram.com/dinamik_upi/">dinamik_upi</a><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">[Perlombaan DINAMIK 12]????<br />.<br />Halo selamat malam semuanya !????<br />.<br />Sudah pada daftar DINAMIK 12 belum? Kalau belum yuk pada daftar ! Jangan sampai menyesal yah pendaftaran hanya dibuka dari tanggal 9 Januari hingga 9 Februari 2017????<br />.<br />Ada perlombaan apa aja sih di DINAMIK 12? Wah tentunya sangat banyak yah, ada:<br />???? PCA (PC Assembling)<br />???? CSPC (CS Programming Contest)<br />???? Kompetisi Jaringan<br />???? RLF (Robot Line Follower)<br />???? LCA (Lomba Cipta Animasi)<br />???? LCW (Lomba Cipta Web)<br />???? OTIK (Olimpiade TIK)<br />???? LDG (Lomba Design Grafis)<br />.<br />Dan untuk umum terdapat juga berbagai kegiatan diantaranya :<br />???? Dinamik Star<br />???? Seminar Nasional<br />???? FELOSE (Festival Teknologi Seni)<br />???? Donor Darah<br />???? Talkshow Inspiratif<br />.<br />So, tunggu apalagi? Ayo daftarkan dirimu dengan cara klik link dibawah ini ????<br />.<br />dinamik.cs.upi.edu/akun<br />.<br />Kami tunggu kehadiranmu di DINAMIK 12 !????&nbsp;<a style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #003569; text-decoration: none;" href="https://www.instagram.com/explore/tags/dinamik12/">#DINAMIK12</a><br /><a style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #003569; text-decoration: none;" href="https://www.instagram.com/explore/tags/teknologiuntukindonesia/">#TeknologiUntukIndonesia</a></span></h1>\r\n</li>\r\n</ul>\r\n<section class="_jveic _rhgel" style="margin: auto 0px 0px; padding: 0px; border-width: 1px 0px 0px; border-style: solid; border-color: #efefef #000000 #000000; border-image: initial; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline; -webkit-box-align: center; align-items: center; box-sizing: border-box; display: flex; -webkit-box-orient: horizontal; -webkit-box-direction: normal; flex-direction: row; flex-shrink: 0; position: relative; -webkit-box-pack: center; justify-content: center; min-height: 68px;"></section>', 3, 'dinamik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `foto_galeri` varchar(500) NOT NULL,
  `keterangan_galeri` longtext NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto_galeri`, `keterangan_galeri`) VALUES
(7, 'hipmi_4.jpg', '<h1 style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Kelompok berapa ini? Bela belain ngajar anak anak sd buat dapetin omset sama profit nih ???? luar biasa kreatif sekali.</span></h1>'),
(8, 'hipmi_6.jpg', '<h1 style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Halo pengusaha!<br />Sudah ga sabar kan pengen cepet2 gabung dgn keluarga besar HIPMI PT UPI. Satu-satunya UKM pengusaha di UPI yg terintegrasi secara nasional lho.<br />.</span></h1>'),
(9, 'hipmi_5.jpg', '<h1 style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Acara penutupan makan bersama setelah selesai acara ini yaitu MARATON&amp; PELANTIKAN Hipmi PT UPI, alhamdulillah acara ini telah selesai, terimakasih banyak kepada panitia telah berkontribusi waktu dan tenaganya untuk acara ini???????? semoga terus semangatt!!</span></h1>'),
(10, 'hipmi_27.jpg', '<h1 style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Alhamdullillah acara PENGUKUHAN HIPMI PT UPI berjalan dengan lancar hingga akhirnya bisa dikukuhkan. Semoga kepengurusan selanjutnya bisa menjalankan amanah ini dengan tanggung jawab dan bisa membuat Hipmi bisa lebih baik lagi, SEMANGAT TEAM!????</span></h1>'),
(12, 'foto_hipmi_14.jpg', '<p style="text-align: justify;">&nbsp;</p>\r\n<ul class="_mo9iw _123ym" style="margin: -5px -24px 0px; padding: 5px 24px 20px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: proxima-nova, ''Helvetica Neue'', Arial, Helvetica, sans-serif; vertical-align: baseline; list-style: none; -webkit-box-flex: 1; flex-grow: 1; overflow: auto;">\r\n<li class="_nk46a" style="margin: 0px 0px 7px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; position: relative; word-wrap: break-word;">\r\n<h1 style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" title="Telah disunting">Alhamdulillah acara SAFARI dari HIPMI PT Poltekpos hari ini sudah berakhirr. Seru bgt sharing ilmu mengenai bisnis dan juga proker masing-masing. Semoga bisa saling mengamalkan ilmunya dengan sebaik mungkin ya. Jangan lupa, bukan hanya profit yg dikejar, tapi juga kebarokahannya ???<br />Kami dari HIPMI PT UPI mengucapkan banyak terima kasih untuk acara yg diadakan hari ini ????????<br />Salam semangat untuk para pengusaha muda Indonesia! ????</span></h1>\r\n</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `infohipmi`
--

CREATE TABLE IF NOT EXISTS `infohipmi` (
  `id_infohipmi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_infohipmi` varchar(100) NOT NULL,
  `isi_singkat_infohipmi` longtext,
  `isi_lengkap_infohipmi` longtext,
  `foto_infohipmi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_infohipmi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `infohipmi`
--

INSERT INTO `infohipmi` (`id_infohipmi`, `judul_infohipmi`, `isi_singkat_infohipmi`, `isi_lengkap_infohipmi`, `foto_infohipmi`) VALUES
(1, 'Tentang HIPMI PT UPI', '', '<p class="MsoNormal" style="margin-bottom: 8pt; line-height: 107%; text-align: center;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">HIPMI PT UPI (Himpunan Pengusaha Muda Indonesia Perguruan Tinggi Universitas Pendidikan Indonesia)</span></strong></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Sejarah Berdirinya HIPMI PT UPI</span></strong></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Himpunan Pengusaha Muda Indonesia Perguruan Tinggi Universitas Pendidikan Indonesia (HIPMI PT UPI) adalah suatu organisasi kewirausahaan didalam lingkungan kampus Universitas Pendidikan Indonesia yang pada awalnya merupakan program penawaran dari HIPMI Badan Pengurus Cabang (BPC) Kota Bandung kepada Universitas Pendidikan Indonesia untuk mendirikan suatu organisasi kewirausahaan guna mencetak pengusaha muda dari level perguruan tinggi/mahasiswa. Setelah mengalami alur birokrasi formal penawaran ini akhirnya di uji cobakan sebagai Badan Semi Otonom (BSO) dibawah BEM KM Ekonomi periode 2007-2008 dengan nama Himpunan Pengusaha Muda Indonesia Student Center Universitas Pendidikan Indonesia (HIPMI SC UPI) .</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Walaupun pada awalnya organisasi ini kurang mendapat perhatian yang serius dari pengurus BEM KM Ekonomi, ternyata sedikit-sedikit informasi mengenai keberadaan HIPMI SC UPI ini terdengar sampai fakultas lain dilingkungan UPI yang mengakibatkan walaupun semestinya organisasi ini hanya berada di wilayah Jurusan Ekonomi tetapi memiliki anggota (simpatisan) di jurusan dan bahkan fakultas lain.</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Oleh karena itu setelah kepengurusan BEM KM Ekonomi periode 2007-2008 berakhir, berkumpulah beberapa orang mantan pengurus BEM KM Ekonomi untuk menggarap lebih focus mengenai program HIPMI SC UPI ini. Dan pada pertengahan bulan mei 2008 dibentuklah Tim Perintis UKM HIPMI PT UPI yang terdiri dari 6 orang yaitu;</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">1. Saiful Anwar (Manajemen UPI 2005),</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">2. M. Alam Novian (Pend. Ekonomi dan Koperasi UPI 2005),</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">3. Danu Ibrahim Rifa&rsquo;I (Manajemen UPI 2005),</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">4. Aa Syamsul Muhazizin (Pend. Ekonomi dan Koperasi UPI 2004),</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">5. Lia Lutianasari ( Pend. Fisika 2004), dan</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">6. Riani Diana Andriani (Pend. Manajemen Perkantoran UPI 2005).</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Tim ini bertugas untuk merancang dan menggarap suatu sistem organisasi baru dalam bidang kewirausahaan dilevel perguruan tinggi dan merealisasikannya sebagai Unit Kegiatan Mahasiswa (UKM) yang resmi dibawah UPI.</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Akhirnya pada pertemuan berikutnya pada tanggal 6 Juni 2008 telah selesainya mengenai sistem organisasi dari HIPMI PT UPI yang dituangkan dalam Anggaran Dasar/ Anggaran Rumah Tangga (AD/ART), Mekanisme Kerja Organisasi (MKO), dan Garis-Garis Besar Program Kerja(GBPK) HIPMI PT UPI dan sekaligus menetapkan tanggal tersebut sebagai tanggal berdirinya HIPMI PT UPI.</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">&nbsp;</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">&nbsp;</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Visi</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';"> <strong>HIPMI PT UPI:</strong></span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Menjadi Organisasi pencetak kader entrepreneur muda yang mandiri dan profesional dari lingkungan kampus, yang tetap menjunjung tinggi almamater Universitas Pendidikan Indonesia.</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Misi HIPMI PT UPI:</span></strong></p>\r\n<p class="MsoListParagraphCxSpFirst" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 107%; mso-list: l0 level1 lfo1; margin: 0cm 0cm 8.0pt 39.0pt;"><!-- [if !supportLists]--><span style="font-size: 12.0pt; line-height: 107%; font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol;">&middot;<span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Menanamkan motivasi dan minat berwirausaha kepada anggota dan mahasiswa UPI&nbsp; sedari muda,</span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 107%; mso-list: l0 level1 lfo1; margin: 0cm 0cm 8.0pt 39.0pt;"><!-- [if !supportLists]--><span style="font-size: 12.0pt; line-height: 107%; font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol;">&middot;<span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Meningkatkan pengetahuan dan keterampilan anggota, mahasiswa dan masyarakat mengenai Business, marketing dan entrepreneurship melalui pendidikan, pelatihan dan public event,</span></p>\r\n<p class="MsoListParagraphCxSpLast" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 107%; mso-list: l0 level1 lfo1; margin: 0cm 0cm 8.0pt 39.0pt;"><!-- [if !supportLists]--><span style="font-size: 12.0pt; line-height: 107%; font-family: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol;">&middot;<span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Menjalin hubungan baik dan kerjasama dengan organisasi lain yang sejenis maupun tidak, baik didalam maupun diluar kampus Universitas Pendidikan Indonesia.</span></p>\r\n<p class="MsoNormal" style="margin-bottom: 8.0pt; line-height: 107%;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Tujuan</span></strong><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';"> <strong>HIPMI PT UPI:</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p class="MsoNormal" style="margin-bottom: 8pt; line-height: 107%; text-align: left;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">HPMI PT UPI bertujuan untuk meningkatkan kualitas mahasiswa di bidang ekonomi dan kewirausahaan sebagai insan yang ilmiah, edukatif dan religius serta ikut berpartisipasi dalam mewujudkan pembangunan nasional yang diridhai Allah SWT.</span></p>', 'bimafest.jpg'),
(2, 'BISNIS MAHASISWA FESTIVAL (BIMAFEST)', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Bisnis Mahasiswa Festival atau BIMAFEST merupakan acara tahunan dan salah satu acara kebanggaan dari HIPMI PT UPI. Kegiatan ini salah satu bentuk apresiasi dari kami untuk semua pengusaha di Universitas Pendidikan Indonesia (UPI). Konten acara dari BIMAFEST itu sendiri ada Seminar Bisnis dengan tema yang sedang uptodate saat itu, mengundang pemateri yang memang ahli dan sukses di bidangnya. Lalu ada Business Competition, yaitu lomba tentang bisnis yang diikuti oleh mahasiswa UPI. Dan ada acara bazaar yang ikut meramaikan BIMAFEST tiap tahunnya. BIMAFEST juga sebagai kegiatan merekatkan dan meningkatkan rasa kerjasama dan kekeluargaan di internal HIPMI PT UPI itu sendiri.</span></p>', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Bisnis Mahasiswa Festival atau BIMAFEST merupakan acara tahunan dan salah satu acara kebanggaan dari HIPMI PT UPI. Kegiatan ini salah satu bentuk apresiasi dari kami untuk semua pengusaha di Universitas Pendidikan Indonesia (UPI). Konten acara dari BIMAFEST itu sendiri ada Seminar Bisnis dengan tema yang sedang uptodate saat itu, mengundang pemateri yang memang ahli dan sukses di bidangnya. Lalu ada Business Competition, yaitu lomba tentang bisnis yang diikuti oleh mahasiswa UPI. Dan ada acara bazaar yang ikut meramaikan BIMAFEST tiap tahunnya. BIMAFEST juga sebagai kegiatan merekatkan dan meningkatkan rasa kerjasama dan kekeluargaan di internal HIPMI PT UPI itu sendiri.</span></p>', 'bimafest.jpg'),
(3, 'Info Pelatihan & Sharing Bisnis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.', 'bimafest.jpg'),
(4, 'Registrasi Hipmi PT Upi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.', 'bimafest.jpg'),
(5, 'Gathering', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae efficitur eros, non viverra quam. Nullam tempor vitae lacus ut viverra. Phasellus iaculis blandit justo, a placerat mi. Suspendisse pharetra pharetra sagittis. Pellentesque libero diam, ullamcorper sit amet vulputate a, maximus a eros. Nunc et elementum dolor. Morbi pretium porta orci, non viverra purus volutpat ac. Mauris elementum erat nulla, condimentum dignissim erat suscipit eu. Aliquam euismod eleifend viverra.', 'bimafest.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Presdir'),
(2, 'Sekretaris Umum'),
(3, 'Sekretaris 2'),
(4, 'Bendahara Umum'),
(5, 'Bendahara 2'),
(6, 'Direktur Public Relation'),
(7, 'Staff Public Relation'),
(8, 'Direktur Bussiness Development'),
(9, 'Staff Bussiness Development'),
(10, 'Direktur Human Resource Development'),
(11, 'Staff Human Resource Development'),
(12, 'M.Eksternal'),
(13, 'M. Internal'),
(14, 'M. Lifestyle'),
(15, 'M. Jasa'),
(16, 'M. SD'),
(17, 'M. Kader'),
(18, 'M. Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'PRIA'),
(2, 'WANITA'),
(3, 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_post`
--

CREATE TABLE IF NOT EXISTS `kategori_post` (
  `id_kategori_post` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_post` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori_post`
--

INSERT INTO `kategori_post` (`id_kategori_post`, `nama_kategori_post`) VALUES
(1, 'Bimafest'),
(2, 'Hipmi'),
(3, 'Pasar_upi');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` varchar(100) NOT NULL,
  `isi_singkat_kegiatan` longtext NOT NULL,
  `isi_lengkap_kegiatan` longtext NOT NULL,
  `foto_kegiatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `isi_singkat_kegiatan`, `isi_lengkap_kegiatan`, `foto_kegiatan`) VALUES
(1, 'SHARING BISNIS', '<p><span style="font-family: ''Times New Roman'', serif; font-size: 16px;">Sharing bisnis merupakan kegiatan rutin dari HIPMI PT UPI yang diselenggarakan 2 minggu sekali, yang diorganisir oleh divisi HRD. Pemateri dari sharing bisnis sendiri tidak hanya dari member HIPMI PT UPI tapi kita undang dari luar member HIPMI PT UPI. Tema yang disampaikan untuk sharbis juga berbeda-beda tiap minggu nya. Sharing bisnis ini bertujuan untuk menambah dan meng-upgrade ilmu bisnis dari member HIPMI PT UPI dan menambah relasi bisnis, sekaligus sebagai ajang bersilaturahmi.</span></p>', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Sharing bisnis merupakan kegiatan rutin dari HIPMI PT UPI yang diselenggarakan 2 minggu sekali, yang diorganisir oleh divisi HRD. Pemateri dari sharing bisnis sendiri tidak hanya dari member HIPMI PT UPI tapi kita undang dari luar member HIPMI PT UPI. Tema yang disampaikan untuk sharbis juga berbeda-beda tiap minggu nya. Sharing bisnis ini bertujuan untuk menambah dan meng-upgrade ilmu bisnis dari member HIPMI PT UPI dan menambah relasi bisnis, sekaligus sebagai ajang bersilaturahmi.</span></p>', 'Koala1.jpg'),
(2, 'COMPANY VISIT', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Kegiatan company visit merupakan kegiatan dari divisi Business Development (BD) yang diselenggarakan satu kali dalam satu periode kepengurusan. Kegiatan ini yaitu mengunjungi salah satu perusahaan, belajar bisnis langsung dari ownernya dan sekaligus ajang refreshing untuk member HIPMI PT UPI.</span></p>', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Kegiatan company visit merupakan kegiatan dari divisi Business Development (BD) yang diselenggarakan satu kali dalam satu periode kepengurusan. Kegiatan ini yaitu mengunjungi salah satu perusahaan, belajar bisnis langsung dari ownernya dan sekaligus ajang refreshing untuk member HIPMI PT UPI.</span></p>', 'logo_hipmi_pt_upi.jpg'),
(3, 'ARISAN ', '<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Kegiatan arisan ini sebagai ajang silaturahmi dengan alumni HIPMI PT UPI dengan member hipmi yang baru, dan agar komunikasi dengan alumni kami tetap terjaga dengan baik.</span></p>', '<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Kegiatan arisan ini sebagai ajang silaturahmi dengan alumni HIPMI PT UPI dengan member hipmi yang baru, dan agar komunikasi dengan alumni kami tetap terjaga dengan baik.</span></p>', 'logo_hipmi_pt_upi1.jpg'),
(4, 'ARAK- ARAKAN WISUDA', '<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Kegiatan ini merupakan kegiatan untuk para wisudawan yang merupakan anggota HIPMI PT UPI. Salah satu persembahan&nbsp; dan rasa terimakasih kepada akang/teteh yang telah berkontribusi sangat banyak kepada HIPMI PT UPI.</span></p>\r\n<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;">&nbsp;</p>', '<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Kegiatan ini merupakan kegiatan untuk para wisudawan yang merupakan anggota HIPMI PT UPI. Salah satu persembahan&nbsp; dan rasa terimakasih kepada akang/teteh yang telah berkontribusi sangat banyak kepada HIPMI PT UPI.</span></p>', 'logo_hipmi_pt_upi2.jpg'),
(5, 'OPEN HOUSE HIPMI PT UPI', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Open house HIPMI PT UPI salah satu acara yang bertujuan untuk mengenalkan HIPMI PT UPI secara detail. Dikhususkan untuk mahasiswa yang ingin mengenal yang bergabung dengan HIPMI PT UPI. Open house ini juga menghadirkan pemateri untuk memberi ilmu bisnisnya. Pemateri di open house biasanya dari alumni HIPMI PT UPI yang bisnisnya bisa jadi inspirasi untuk para member HIPMI yang lain.</span></p>', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Open house HIPMI PT UPI salah satu acara yang bertujuan untuk mengenalkan HIPMI PT UPI secara detail. Dikhususkan untuk mahasiswa yang ingin mengenal yang bergabung dengan HIPMI PT UPI. Open house ini juga menghadirkan pemateri untuk memberi ilmu bisnisnya. Pemateri di open house biasanya dari alumni HIPMI PT UPI yang bisnisnya bisa jadi inspirasi untuk para member HIPMI yang lain.</span></p>', 'logo_hipmi_pt_upi3.jpg'),
(6, 'PELANTIKAN HIPMI PT UPI', '<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Pelantikan merupakan acara untuk melantik kader 3 yang akan menjabat sebagai pengurus HIPMI PT UPI yang baru oleh BPC Kota Bandung. Acara ini berlangsung dengan mengundang pembina HIPMI PT UPI dan alumni. Juga ada beberapa materi bisnis dengan pemateri dari alumni HIPMI PT UPI.</span></p>', '<p class="MsoNormal" style="line-height: 107%; margin: 0cm 0cm 8.0pt 36.0pt;"><span style="font-size: 12.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman'';">Pelantikan merupakan acara untuk melantik kader 3 yang akan menjabat sebagai pengurus HIPMI PT UPI yang baru oleh BPC Kota Bandung. Acara ini berlangsung dengan mengundang pembina HIPMI PT UPI dan alumni. Juga ada beberapa materi bisnis dengan pemateri dari alumni HIPMI PT UPI.</span></p>', 'logo_hipmi_pt_upi4.jpg'),
(7, 'BISNIS MAHASISWA FESTIVAL (BIMAFEST)', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Bisnis Mahasiswa Festival atau BIMAFEST merupakan acara tahunan dan salah satu acara kebanggaan dari HIPMI PT UPI. Kegiatan ini salah satu bentuk apresiasi dari kami untuk semua pengusaha di Universitas Pendidikan Indonesia (UPI). Konten acara dari BIMAFEST itu sendiri ada Seminar Bisnis dengan tema yang sedang uptodate saat itu, mengundang pemateri yang memang ahli dan sukses di bidangnya. Lalu ada Business Competition, yaitu lomba tentang bisnis yang diikuti oleh mahasiswa UPI. Dan ada acara bazaar yang ikut meramaikan BIMAFEST tiap tahunnya. BIMAFEST juga sebagai kegiatan merekatkan dan meningkatkan rasa kerjasama dan kekeluargaan di internal HIPMI PT UPI itu sendiri.</span></p>', '<p><span style="font-size: 12.0pt; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: IN; mso-bidi-language: AR-SA;">Bisnis Mahasiswa Festival atau BIMAFEST merupakan acara tahunan dan salah satu acara kebanggaan dari HIPMI PT UPI. Kegiatan ini salah satu bentuk apresiasi dari kami untuk semua pengusaha di Universitas Pendidikan Indonesia (UPI). Konten acara dari BIMAFEST itu sendiri ada Seminar Bisnis dengan tema yang sedang uptodate saat itu, mengundang pemateri yang memang ahli dan sukses di bidangnya. Lalu ada Business Competition, yaitu lomba tentang bisnis yang diikuti oleh mahasiswa UPI. Dan ada acara bazaar yang ikut meramaikan BIMAFEST tiap tahunnya. BIMAFEST juga sebagai kegiatan merekatkan dan meningkatkan rasa kerjasama dan kekeluargaan di internal HIPMI PT UPI itu sendiri.</span></p>', 'logobima.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim_komentar` int(11) NOT NULL,
  `tujuan_komentar` int(11) NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `isi_komentar` longtext NOT NULL,
  `status_komentar` int(11) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `pengirim_komentar`, `tujuan_komentar`, `tanggal_komentar`, `jam_komentar`, `isi_komentar`, `status_komentar`) VALUES
(1, 4, 1, '2017-01-19', '00:00:00', 'Hallooooo', 0),
(2, 4, 1, '2017-01-19', '15:00:00', 'kamu iyaa kamu', 0),
(3, 1, 4, '2017-01-19', '14:00:00', 'ada apa?', 0),
(4, 4, 1, '2017-01-19', '13:56:48', '', 0),
(5, 4, 1, '2017-01-19', '13:58:17', 'kok', 0),
(6, 4, 1, '2017-01-19', '20:02:57', 'hei', 0),
(7, 3, 1, '2017-01-19', '20:00:00', 'ini nyoba', 0),
(9, 1, 3, '2017-01-23', '16:31:45', 'okey', 0),
(10, 1, 4, '2017-01-23', '17:05:30', 'keur emam heulanya ', 0),
(11, 1, 4, '2017-01-23', '11:08:02', 'okey', 0),
(12, 4, 1, '2017-01-23', '11:08:20', 'apa ?', 0),
(13, 1, 4, '2017-01-23', '13:24:29', 'apa', 0),
(14, 1, 4, '2017-01-23', '13:25:39', 'masuk', 0),
(15, 1, 4, '2017-01-23', '13:29:34', 'n', 0),
(16, 1, 4, '2017-01-23', '13:30:15', 'a', 0),
(17, 1, 4, '2017-01-24', '12:56:52', 'mau emih?', 0),
(18, 1, 4, '2017-01-24', '13:09:35', 'wowowowo', 0),
(19, 4, 1, '2017-01-24', '13:11:57', 'ih', 0),
(20, 1, 3, '2017-01-24', '19:52:24', 'hai', 0),
(21, 3, 1, '2017-01-25', '21:19:47', 'mas, ini berapaan', 0),
(22, 1, 3, '2017-01-25', '21:20:02', 'yang mana', 0),
(23, 1, 3, '2017-01-25', '21:20:55', 'tes', 0),
(24, 4, 6, '2017-01-26', '15:55:56', 'tasnya bagus', 0),
(25, 6, 4, '2017-01-26', '16:08:28', 'wowowowo', 0),
(26, 1, 4, '2017-01-26', '16:30:42', 'cek', 0),
(27, 4, 2, '2017-01-26', '16:36:07', 'cek ijaaal', 0),
(28, 4, 6, '2017-01-26', '16:52:57', 'POLO ILKOMNYA BAGUS', 0),
(29, 6, 4, '2017-01-26', '16:53:07', 'sip hehe', 0),
(30, 3, 2, '2017-01-28', '00:47:23', 'ma keren pisan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `kontak_pembeli` varchar(15) DEFAULT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `jk_pembeli` varchar(10) DEFAULT NULL,
  `alamat_pembeli` longtext,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `username`, `password`, `kontak_pembeli`, `email_pembeli`, `jk_pembeli`, `alamat_pembeli`) VALUES
(2, 'Ronaldo Simanjuntak', 'aldomilan', 'e26220dc32cc94f60f89cf9734e54def', '08567934299', 'simanjuntakronaldo9@gmail.com', 'Laki-laki', 'Jl Gegerkalong Tengah No 23 RT 03/03 \r\nSukasari, Bandung\r\n40153'),
(3, 'Rijaalul Ummam Haruono', 'urijaalul', '1e36cc07dbd5ec0fd229266f3447d496', '082116916999', 'urijaalul@gmail.com', 'Laki-laki', 'Jalan Antapani Gang Haji Sirad No 3 Cicaheum'),
(4, 'irma ayu ', 'irma', '65095684ca5530d66fdd31b86b47fb9b', NULL, 'irmaayu13@gmail.com', NULL, NULL),
(5, 'Ervinanurfalah', 'sarung hamnida', 'e57bcef11e95858c3abf251a3ec2e16f', NULL, 'enamhelas@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE IF NOT EXISTS `pengurus` (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `usaha` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama`, `jabatan`, `usaha`, `foto`, `kontak`) VALUES
(1, 'Rijaalul Ummam Haryono', 1, 'Anyaman Benang (Konveksi) & Ashdio (IT Development)', 'foto_3x4.jpg', 'urijaalul | @anyaman'),
(2, 'Nurul Aini', 2, 'tidak tahu', 'Penguins.jpg', '089'),
(3, 'Chantika', 3, 'lalala', 'Penguins1.jpg', '09898'),
(4, 'Allyda Fattihul', 4, 'yayaya', 'Lighthouse.jpg', '65768'),
(5, 'Tyas', 5, 'dududu', 'Lighthouse1.jpg', '5768'),
(6, 'Febby Nurfitriyan', 6, 'hmmm', 'Tulips.jpg', 'rt7y8'),
(7, 'Tiara', 12, 'hmhm', 'Tulips1.jpg', '978'),
(8, 'Yugianti', 13, 'apa ya', 'Tulips2.jpg', '576879'),
(9, 'Firman', 7, 'apa', 'Tulips3.jpg', '76789'),
(10, 'Sopian', 7, 'tiktok', 'Tulips4.jpg', '8709'),
(11, 'Asep Indra Cahya', 7, 'Aracraft (Fashion)', '3x4_indra.jpg', 'Line @gur0523z | Ig '),
(12, 'Aldi', 7, 'kkk', 'Tulips6.jpg', '9789'),
(13, 'Siti', 7, 'llll', 'Tulips7.jpg', '9876789'),
(14, 'Purnama Bintang', 7, 'hhh', 'Tulips8.jpg', '867879'),
(15, 'Akbar Giuliano', 8, 'ppp', 'Jellyfish.jpg', '9687'),
(16, 'Rizal Khoirul Insan', 14, 'BRAND RADIUZ', 'Tulips9.jpg', 'LINE@ : @radiuz'),
(17, 'tiktok', 15, 'lololol', 'Jellyfish1.jpg', '98687'),
(18, 'Annisa', 18, 'iiii', 'Jellyfish2.jpg', '98678'),
(19, 'Rahman', 9, 'uuu', 'Jellyfish3.jpg', '8765778'),
(20, 'Fenny', 9, 'yyyy', 'Jellyfish4.jpg', '6r789'),
(21, 'Hanifa', 9, 'tttt', 'Jellyfish5.jpg', '9788'),
(22, 'Putra', 9, 'rrr', 'Jellyfish6.jpg', '98687'),
(23, 'Harris', 9, 'www', 'Jellyfish7.jpg', '9867789'),
(24, 'Reynaldo Andhika', 10, 'Household Project (lifestyle)', '3x4_rey.jpg', 'Line: @dyu0638K  | W'),
(25, 'Faidh Nasr', 16, 'aaa', 'Hydrangeas1.jpg', '757676'),
(26, 'Nadiyah Nur', 17, 'ss', 'Hydrangeas2.jpg', '67687'),
(27, 'Asri', 11, 'dd', 'Hydrangeas3.jpg', '6786'),
(28, 'Firdha', 11, 'ff', 'Hydrangeas4.jpg', '576879'),
(29, 'Dzaki', 11, 'ggg', 'Hydrangeas5.jpg', '789'),
(30, 'Ratu Dira', 11, 'hhh', 'Hydrangeas6.jpg', '089798'),
(31, 'Jundulloh', 11, 'zzz', 'Hydrangeas7.jpg', '789'),
(32, 'Ichsan', 11, 'xx', 'Hydrangeas8.jpg', '78890'),
(33, 'Linda', 11, 'cca', 'Koala1.jpg', '081');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `detail_produk` longtext NOT NULL,
  `stock_produk` int(11) NOT NULL,
  `kondisi_produk` int(11) NOT NULL,
  `brand_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `kategori_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `kategori_produk` (`kategori_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `detail_produk`, `stock_produk`, `kondisi_produk`, `brand_produk`, `harga_produk`, `kategori_produk`, `foto_produk`, `id`) VALUES
(23, 'Web Developer', 'buat aplikasi mobile, Web, dan lainnya yang berhubungan dengan IT , bisa hubungi Line : urijaalul', 1000, 1, 'Ashdio', 1000000, 11, 'ASHDIO1.png', 2),
(18, 'Jasa Konveksi', 'Jasa Konveksi , telpon ke 082116916999', 10, 1, 'Anyaman Benang', 50000, 1, 'S__2203759.jpg', 2),
(22, 'Produksi Pakaian Jadi', 'Hubungi @anyamanbenang ', 100000, 1, 'Anyaman Benang', 50000, 1, 'anyaman_benang_kotak.jpg', 2),
(21, 'Konveksi', 'Butuh Konveksi? mangga kesini cuy', 50000, 1, 'Anyaman Benang', 10000, 1, '7926-p6zcx82276h3m.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `pesan` varchar(225) NOT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `foto_slider` varchar(100) NOT NULL,
  `title_slider` varchar(100) DEFAULT NULL,
  `halaman_slider` varchar(20) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `foto_slider`, `title_slider`, `halaman_slider`) VALUES
(1, 'hipmi.jpg', NULL, '1'),
(2, 'pasar_upi.jpg', '', '1'),
(3, 'bimafest.jpg', NULL, '1'),
(4, 'hipmi.jpg', 'PASAR_UPI', '2'),
(5, 'bimafest.jpg', NULL, '2'),
(6, 'girl2.jpg', NULL, '2'),
(7, 'landing_2.jpg', '', '3'),
(8, 'asa1.jpg', '', '3'),
(9, 'asas.jpg', 'PASAR UPI', '3');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE IF NOT EXISTS `subkategori` (
  `id_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(30) NOT NULL,
  `kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_sub`),
  KEY `kategori` (`kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`id_sub`, `nama_sub`, `kategori`) VALUES
(1, 'Pakaian', 1),
(2, 'Sepatu', 1),
(3, 'Tas', 1),
(4, 'Jam Tangan', 1),
(5, 'Aksesoris', 1),
(6, 'Pakaian', 2),
(7, 'Sepatu', 2),
(8, 'Tas', 2),
(9, 'Jam Tangan', 2),
(10, 'Baju Muslim', 2),
(11, 'dll', 2),
(12, 'Topi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(15) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `id_pembeli` (`id_pembeli`),
  KEY `id_produk` (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID`, `no_transaksi`, `id_pembeli`, `id_produk`, `qty`, `harga`, `status`) VALUES
(1, 'OS2012398773', 2, 11, 1, 800000, 1),
(3, 'OS2012995605', 2, 12, 12, 900000, 1),
(4, 'OS1801861301', 4, 12, 1, 75000, 1),
(5, 'OS1801577510', 4, 9, 1, 540000, 1),
(6, 'OS2101595404', 3, 9, 1, 540000, 1),
(7, 'OS2501143665', 3, 19, 1, 10000, 1),
(8, 'OS2501735965', 3, 19, 1, 10000, 1),
(9, 'OS2501260248', 3, 10, 1, 1020000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `whishlist`
--

CREATE TABLE IF NOT EXISTS `whishlist` (
  `whishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  PRIMARY KEY (`whishlist_id`),
  KEY `id_pembeli` (`id_pembeli`),
  KEY `id_produk` (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `whishlist`
--

INSERT INTO `whishlist` (`whishlist_id`, `id_pembeli`, `id_produk`) VALUES
(2, 2, 14),
(3, 2, 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
