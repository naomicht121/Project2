-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2020 pada 15.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cahaya-jaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `rekening` varchar(15) NOT NULL,
  `saldo` int(11) NOT NULL,
  `image` text NOT NULL,
  `grup` enum('2','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `name`, `email`, `address`, `city`, `telp`, `rekening`, `saldo`, `image`, `grup`) VALUES
(1, 'farhan', 'farhan', 'Farhan Maulana', 'farhanmaulana88@gmail.com', 'Jl.Pasir Impun, Gg Haji Mulya No.54 RT.03 RW.12', 'Bandung', '081321319954', '73648102951', 150105, 'farhan.jpg', '2'),
(3, 'fadli', 'fadli', 'Fadli Wirahmasila K', 'fadliwk@gmail.com', 'No.830 C, Jl. Jendral Ahmad Yani No.830 C, Cicaheum, Kiaracondong, Bandung City, West Java 40272', 'Bandung', '087463781922', '6354920916', 2500000, 'fadli.jpg', '2'),
(4, 'rizal', 'rizal', 'Riandaka Rizal', 'rizal@gmail.com', 'Muhammad Toha No.22', 'Bandung', '089864678754', '2147365982', 2799999, 'rizal1.jpg', '2'),
(6, 'admin', 'admin', 'Admin', 'admin@gmail.com', '-', '-', '-', '-', 0, '-', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `categori_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`categori_id`, `category`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Olahan Ikan'),
(4, 'Snack'),
(6, 'Kue');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`comment_id`, `account_id`, `product_id`, `comment`, `date`) VALUES
(1, 1, 1, 'bagus !', '2019-01-28 22:44:59'),
(2, 1, 1, 'Good', '2019-01-29 01:07:16'),
(3, 3, 10, 'Bahan baju ini sangat bagus!', '2019-01-31 07:07:19'),
(4, 1, 10, 'Terimakasih ka!', '2019-01-31 07:12:07'),
(5, 1, 18, 'bagus', '2019-01-31 12:32:36'),
(6, 1, 10, 'dsa', '2019-10-12 16:06:37'),
(7, 1, 10, 'apaanseh', '2020-02-04 19:03:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` enum('Paid','In Progress','Cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `buyer_id`, `price`, `date`, `payment_status`) VALUES
(88, 3, 650000, '2019-01-31 07:08:23', 'Paid'),
(89, 3, 150000, '2019-01-31 07:09:28', 'Paid'),
(90, 1, 2999999, '2019-01-31 09:27:34', 'Paid'),
(91, 1, 100000, '2019-01-31 10:41:11', 'Paid'),
(92, 1, 5299999, '2019-01-31 12:07:13', 'Paid'),
(93, 1, 2850000, '2019-09-06 07:19:34', 'Paid'),
(94, 1, 600000, '2019-11-06 12:47:21', 'Paid'),
(95, 1, 600000, '2019-11-09 14:48:47', 'Paid'),
(96, 1, 900000, '2019-11-09 17:04:04', 'Paid'),
(97, 1, 200000, '2019-11-09 17:12:36', 'Paid'),
(98, 1, 700000, '2019-11-09 17:21:42', 'Paid'),
(99, 1, 650000, '2019-11-09 17:25:22', 'Paid'),
(100, 1, 850000, '2019-11-09 17:29:50', 'Paid'),
(101, 1, 8399997, '2019-11-18 16:01:22', 'Paid'),
(102, 1, 400000, '2019-11-18 16:07:11', 'Paid'),
(103, 1, 400000, '2019-11-18 16:10:43', 'Paid'),
(104, 1, 1400000, '2019-11-18 16:13:39', 'Paid'),
(105, 1, 360000000, '2020-01-29 03:40:39', 'In Progress'),
(106, 1, 900000, '2020-02-03 18:44:51', 'Paid'),
(107, 1, 1050000, '2020-02-04 18:46:00', 'In Progress');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `shipping_status` enum('On Progress','On Delivery','Already Received') NOT NULL,
  `resi` varchar(20) NOT NULL,
  `courier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`order_id`, `invoice_id`, `buyer_id`, `seller_id`, `product_id`, `price`, `quantity`, `shipping_status`, `resi`, `courier`) VALUES
(81, 88, 3, 1, 10, 200000, 1, 'Already Received', '09876', 'JNE'),
(82, 88, 3, 1, 11, 450000, 1, 'Already Received', '54321', 'JNE'),
(83, 89, 3, 1, 8, 150000, 1, 'Already Received', '12345', 'JNT'),
(84, 90, 1, 3, 19, 200000, 1, 'On Progress', '', ''),
(85, 90, 1, 4, 16, 2799999, 1, 'On Progress', '', ''),
(86, 91, 1, 3, 17, 100000, 1, 'On Progress', '', ''),
(87, 92, 1, 4, 16, 2799999, 1, 'Already Received', '12345', 'JNT'),
(88, 92, 1, 3, 18, 2500000, 1, 'Already Received', '123', 'JNE'),
(89, 93, 1, 1, 8, 600000, 4, 'Already Received', '41', 'JNE'),
(90, 93, 1, 1, 11, 2250000, 5, 'Already Received', '76767676', 'JNE'),
(91, 94, 1, 1, 10, 600000, 3, 'Already Received', '41414141', 'TIKI'),
(92, 95, 1, 1, 10, 600000, 3, 'Already Received', '123', 'TIKI'),
(93, 96, 1, 1, 8, 300000, 2, 'Already Received', '31', 'JNE'),
(94, 96, 1, 1, 10, 600000, 3, 'Already Received', '76767676', 'JNE'),
(95, 97, 1, 1, 10, 200000, 1, 'Already Received', '41', 'JNE'),
(96, 98, 1, 1, 8, 300000, 2, 'On Progress', '', ''),
(97, 98, 1, 1, 10, 400000, 2, 'On Progress', '', ''),
(98, 99, 1, 1, 8, 450000, 3, 'On Progress', '', ''),
(99, 99, 1, 1, 10, 200000, 1, 'On Progress', '', ''),
(100, 100, 1, 1, 8, 450000, 3, 'On Progress', '', ''),
(101, 100, 1, 1, 10, 400000, 2, 'On Progress', '', ''),
(102, 101, 1, 4, 16, 8399997, 3, 'On Progress', '', ''),
(103, 102, 1, 1, 23, 400000, 2, 'On Progress', '', ''),
(104, 103, 1, 1, 23, 400000, 2, 'On Progress', '', ''),
(105, 104, 1, 1, 10, 1400000, 7, 'On Progress', '', ''),
(106, 105, 1, 1, 31, 360000000, 18, 'On Progress', '', ''),
(107, 106, 1, 1, 11, 900000, 2, 'On Progress', '', ''),
(108, 107, 1, 1, 8, 1050000, 7, 'On Progress', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `categori_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `account_id`, `categori_id`, `product_name`, `description`, `price`, `stock`, `product_image`) VALUES
(8, 1, 1, 'Nasi Tim', ' DRESS if the Blouse only consists of superiors, while the dres consist of united superiors and subordinates. The word dress comes from English which means dress.', 150000, 0, '4388824s1280h960.jpg'),
(10, 1, 1, 'Bala-bala', 'BLAZER is a kind of jacket that is worn as casual clothing but still looks pretty neat. Blazer shaped like a suit with more relaxed pieces.', 200000, 5, '5216111s1280h960.jpg'),
(11, 1, 1, 'Nasi Goreng', 'PANTSUIT is a blazer-shaped top with matching pants or skirts that are made from the same. You can choose these clothes to attend office events, which are not required to wear uniforms, or meet clients for example at dinner hours. Sometimes you also need this clothes for friends to apply for work. Pantsuit has also become a trend after Hillary Clinton \'popularized\' this fashion item during the campaign.', 450000, 3, 'mie-goreng-saus-tiram.jpg'),
(14, 4, 1, 'Siomay', 'Siomay adalah makanan hasil dari olahan ikan yang sangat enak.', 3300000, 5, '5216271s1280h960.jpg'),
(15, 4, 4, 'Batagor', 'Chipset: Mediatek MT6771 Helio P60 (12 nm) RAM & Memori: 6 GB & 64 GB Kamera: Dual 16 MP + 2 MP Baterai: Li-Po 3500 mAh ', 4999999, 3, 'batagor-paling-enak-d-kebutuhan-rumah-tangga-makanan-14514853.jpg'),
(16, 4, 1, 'Batagor Kuah', 'Berlayar 5.99', 2799999, 0, '37501fa5-fdc7-44cb-a929-cd7ec1faa1e8.jpeg'),
(17, 3, 3, 'Jus Jeruk', '1. Design Klasik2. Cocok untuk pria atau wanita3. Frame yang stylish dan elegan4. Lensa kacamata yang jernih dan gagang yang menyesuaikan telingaKacamata keren ini hadir dengan design yang klasik vintage berbentuk standar dan nyaman digunakan. Kacamata ini cocok digunakan untuk pria dan wanita, memberikan kesan trendy dan cool untuk dikenakan sehari-hari.', 100000, 9, 'NFC-Orange-Juice_jpg_350x350.jpg'),
(18, 3, 3, 'Jus Melon', 'Merek Tiaria SKU TI051OTAAE440SANID-31085267 Jenis batuan Batu Cubic Zirconia Jenis Garansi Tidak Ada Garansi Model TRLKN18KRGPR934-C-8 Gold 9k with Zircon Masa Garansi Garansi Seumur Hidup Logam Titanium Bahan Kulit', 2500000, 3, 'Jus-Melon-600x600.jpg'),
(19, 3, 3, 'Teh Manis', 'Merek AKSESORIS GELANG SKU 435499775_ID-511909382 Jenis Garansi Tidak Ada Garansi Model Gelang FashionDi dalam kotak Gelang Set Kalung Rantai Nori Lapis Emas 24k', 200000, 5, 'teh.jpg'),
(20, 3, 2, 'Jus Alpukat', 'Shimmering Skin Perfector', 200000, 10, 'ua438bffd7833a20a6ecd04cccf9162ce-1_1510228809395.jpg'),
(21, 4, 4, 'Dimsum', 'Looking for an easy soft glow? Becca\'s Shimmering Skin Perfector Poured Crme Highlighter will give you an elegant, luminous glow in a pinch. It\'s the best choice for a low-maintenance highlight that is travel and fingertip friendly. Inspired by the delicate, flattering glow of moonlight this unique lustrous formula uses ultra-fine, pigmented pearls to create an easy subtle luminosity. Tap onto the highpoints of the face for a sophisticated, gentle glow. The incredibly rich yet smooth, creamy formula, brings light and lift to your best features, while smoothing skin for a youthful glow. The sheer, creamy texture makes it effortless to apply--you can never glow overboard.', 250000, 4, 'd946c822-3b6f-49b7-b054-861381904e99.jpeg'),
(22, 1, 4, 'Gehu', 'Achieve effortless dewy radiance. This liquid highlighter features a sophisticated prismatic effect that adjusts in any light to impart a soft focus, healthy-looking glow. Its infused with ultrafine, light-reflecting pearls that melt into your skin for a dewy, radiant finish. Beyond highlighting, this is the perfect mixer to your favorite primer, foundation, or moisturizer for added luminescence. Easily customizable, this highlighter lets you create variety of effects, customize your own glow, and highlight your best features', 150000, 5, '1931226c6cf02a0033fb66d6decf4f96.jpg'),
(25, 1, 1, 'Nasi liwet', 'Makanan khas bandung', 1000000, 8, 'nasi_liwet.jpg'),
(26, 1, 11, 'Jus', 'jus', 10000000, 9, 'jus-tomat-susu-foto-resep-utama.jpg'),
(27, 1, 2, 'Thai Tea', 'Minuman yang berasal dari Thailand', 350000, 10, 'g9AFgBStOL1.jpg'),
(28, 1, 4, 'ice cream', 'makanan ringan', 3000000, 8, 'jus-tomat-susu-foto-resep-utama1.jpg'),
(30, 1, 5, 'Sup', 'sup', 200000, 2, 's1.jpg'),
(31, 1, 6, 'kue', 'bolu', 20000000, 5, 'images.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup`
--

CREATE TABLE `topup` (
  `topup_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `uniq_key` varchar(6) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Used','Not Used') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `topup`
--

INSERT INTO `topup` (`topup_id`, `account_id`, `uniq_key`, `nominal`, `date`, `status`) VALUES
(16, 1, '035678', '1000000', '2019-01-12 22:43:53', 'Used'),
(17, 1, '123789', '1000000', '2019-01-12 22:34:33', 'Used'),
(18, 1, '024579', '2500000', '2019-01-12 22:45:13', 'Used'),
(19, 1, '012489', '350000', '2019-01-12 22:45:24', 'Used'),
(20, 1, '023469', '23000', '2019-01-12 22:49:37', 'Used'),
(21, 3, '025789', '1000000', '2019-01-12 23:08:59', 'Used'),
(22, 1, '014689', '1000000', '2019-01-24 11:44:57', 'Used'),
(23, 1, '024579', '100000', '2019-01-16 19:35:29', 'Used'),
(24, 3, '124567', '21', '2019-01-23 15:58:57', 'Used'),
(25, 3, '124569', '31', '2019-01-23 15:59:13', 'Not Used'),
(26, 1, '024579', '1234', '2019-01-28 22:46:46', 'Not Used'),
(27, 1, '013578', '23', '2019-01-29 01:10:42', 'Used'),
(28, 3, '134589', '1000000', '2019-01-31 07:04:44', 'Used'),
(29, 1, '023458', '1000000', '2019-01-31 09:29:03', 'Used'),
(30, 1, '013458', '100000', '2019-01-31 10:42:13', 'Used'),
(31, 1, '134579', '100000', '2019-01-31 10:44:20', 'Used'),
(32, 1, '456789', '1000000', '2019-01-31 12:17:12', 'Used'),
(33, 1, '013789', '10000000', '2019-01-31 12:26:46', 'Used'),
(34, 1, '135689', '50000', '2019-11-06 12:36:50', 'Used'),
(35, 1, '014579', '1000000', '2019-11-06 12:38:50', 'Used'),
(36, 1, '234578', '100000000', '2019-11-18 16:02:22', 'Not Used'),
(37, 1, '245678', '10000000', '2019-11-18 16:06:22', 'Used'),
(38, 1, '125689', '8000000', '2019-11-18 16:05:23', 'Not Used'),
(39, 1, '245689', '8000000', '2020-02-04 19:05:18', 'Not Used'),
(40, 1, '013458', '100', '2020-02-04 19:17:26', 'Used');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categori_id`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`topup_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `categori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `topup`
--
ALTER TABLE `topup`
  MODIFY `topup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
