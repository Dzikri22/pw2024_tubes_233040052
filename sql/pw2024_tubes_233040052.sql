-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 06:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040052`
--

-- --------------------------------------------------------

--
-- Table structure for table `healthy`
--

CREATE TABLE `healthy` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `potongan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `kategori_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `healthy`
--

INSERT INTO `healthy` (`id`, `gambar`, `nama`, `potongan`, `harga`, `detail`, `kategori_id`) VALUES
(14, 'mr1.webp', 'Mukaku Washu', 'sirloin', '750.000 per250g', 'Daging Mukaku Washu, juga dikenal sebagai Japanese Polled, adalah salah satu jenis daging sapi Wagyu dari Jepang yang memiliki ciri khas dan keistimewaan tersendiri. Berikut adalah deskripsi lengkap mengenai daging Mukaku Washu:\r\n<br> <br>\r\nMarbling dan Tekstur: Mukaku Washu memiliki pola marbling atau lemak intramuskular yang khas, meskipun tidak sepadat Kuroge Washu (Japanese Black). Lemak dalam daging ini terdistribusi secara merata, memberikan tekstur yang lembut namun tetap padat. Marbling yang cukup baik memberikan rasa gurih dan kelembutan yang khas.\r\n<br> <br>\r\nRasa dan Profil Umami: Daging Mukaku Washu memiliki rasa yang sangat kaya dengan profil umami yang mendalam. Lemak yang terdistribusi dengan baik memberikan rasa yang lezat dan seimbang, menciptakan pengalaman makan yang memuaskan.\r\n<br> <br>\r\nKesehatan dan Nutrisi: Daging Mukaku Washu cenderung memiliki kandungan lemak yang seimbang dan tidak terlalu tinggi, sehingga lebih sehat dibandingkan dengan beberapa jenis Wagyu lainnya yang lebih berlemak. Ini membuatnya menjadi pilihan yang lebih baik bagi mereka yang mencari daging sapi dengan keseimbangan antara rasa dan kesehatan.\r\n<br> <br>\r\nWarna: Daging Mukaku Washu memiliki warna merah yang cerah, menunjukkan kualitas dan kesegaran daging yang tinggi. Warna ini juga menambah daya tarik visual saat disajikan dalam hidangan.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Mukaku Washu dipelihara dengan perawatan khusus yang melibatkan pakan berkualitas tinggi dan lingkungan yang baik. Sapi ini diberi pakan alami seperti rumput dan biji-bijian, serta dirawat dengan metode yang memastikan kesejahteraan hewan. Proses pemeliharaan ini bertujuan untuk menghasilkan daging dengan kualitas tertinggi.\r\n<br> <br>\r\nKetersediaan dan Harga: Mukaku Washu tidak sebanyak Kuroge Washu dalam hal produksi, sehingga ketersediaannya lebih terbatas. Namun, daging ini tetap sangat dihargai di kalangan pecinta daging sapi premium karena kualitas dan rasanya yang luar biasa.\r\n<br> <br>\r\nCiri Fisik: Mukaku Washu dikenal sebagai sapi yang tidak bertanduk (polled), yang merupakan salah satu karakteristik fisik utama yang membedakannya dari jenis Wagyu lainnya.\r\n<br> <br>\r\nSecara keseluruhan, daging Mukaku Washu menawarkan pengalaman kuliner yang unik dengan rasa yang kaya dan tekstur yang lembut. Kualitas tinggi dan profil rasa yang seimbang menjadikannya pilihan istimewa bagi mereka yang mencari daging sapi premium dengan karakteristik yang khas.\r\n<br> <br>\r\n\r\n\r\n\r\n\r\n\r\n', 1),
(16, 'mr3.jpg', 'Kuroge Washu', 'Rib Eye', '950.000 per250g', 'Daging Kuroge Washu, juga dikenal sebagai Japanese Black, adalah jenis daging sapi Wagyu paling terkenal dan dianggap sebagai yang paling unggul di Jepang. Daging ini dikenal karena kualitasnya yang luar biasa, tekstur yang lembut, dan rasa yang kaya. Berikut adalah deskripsi lengkap mengenai daging Kuroge Washu:\r\n<br> <br>\r\nMarbling dan Tekstur: Kuroge Washu terkenal dengan tingkat marbling atau lemak intramuskular yang sangat tinggi dan merata. Marbling yang padat ini memberikan tekstur yang sangat lembut dan melt-in-the-mouth yang khas. Tingginya kandungan lemak ini menciptakan rasa yang sangat kaya dan lezat.\r\n<br> <br>\r\nRasa dan Profil Umami: Daging Kuroge Washu memiliki rasa yang luar biasa kaya dengan profil umami yang sangat kuat. Lemak yang merata dalam daging ini memberikan rasa yang gurih dan mewah, serta aroma yang sangat menggugah selera.\r\n<br> <br>\r\nKesehatan dan Nutrisi: Meskipun memiliki kandungan lemak yang tinggi, lemak dalam daging Kuroge Washu sebagian besar adalah lemak tak jenuh tunggal yang lebih sehat dibandingkan lemak jenuh. Ini menjadikan daging ini tidak hanya lezat tetapi juga menawarkan manfaat kesehatan yang lebih baik dibandingkan dengan beberapa jenis daging sapi lainnya.\r\n<br> <br>\r\nWarna: Daging Kuroge Washu memiliki warna merah muda hingga merah cerah dengan pola marbling putih yang mencolok. Warna ini menunjukkan kualitas dan kesegaran daging yang sangat tinggi.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Kuroge Washu dipelihara dengan perawatan yang sangat teliti dan perhatian khusus. Mereka diberi pakan berkualitas tinggi seperti campuran biji-bijian, jerami, dan pakan fermentasi. Selain itu, sapi-sapi ini seringkali dipelihara dalam kondisi lingkungan yang optimal, dengan stres minimal, untuk memastikan kualitas daging yang terbaik.\r\n<br> <br>\r\nKetersediaan dan Harga: Karena proses pemeliharaan yang intensif dan standar kualitas yang sangat tinggi, daging Kuroge Washu cenderung lebih mahal dan eksklusif. Ini juga membuatnya menjadi salah satu daging sapi paling dicari di dunia, terutama untuk hidangan-hidangan gourmet dan restoran mewah.\r\n<br> <br>\r\nCiri Fisik: Kuroge Washu adalah sapi dengan bulu hitam yang mengkilap dan postur yang kekar. Karakteristik fisik ini juga mencerminkan keunggulan genetik mereka dalam menghasilkan daging berkualitas tinggi.\r\n<br> <br>\r\nSecara keseluruhan, daging Kuroge Washu adalah lambang kemewahan dalam dunia kuliner daging sapi. Rasa yang kaya, tekstur yang lembut, dan kualitas tinggi membuatnya menjadi pilihan favorit di antara para chef dan pecinta daging sapi premium di seluruh dunia.\r\n<br> <br>\r\n\r\n\r\n\r\n', 1),
(17, 'mr4.jpg', 'Nihon Tankaku Washu', 'Sirloin', '850.000 per250g', 'Daging Nihon Tankaku Washu adalah jenis daging sapi premium dari Jepang yang memiliki beberapa ciri khas dan keistimewaan. Nihon Tankaku Washu merupakan salah satu jenis sapi Wagyu, namun memiliki karakteristik yang membedakannya dari jenis Wagyu lainnya, seperti Kuroge Washu. Berikut adalah deskripsi lengkap mengenai daging Nihon Tankaku Washu:\r\n<br> <br>\r\nMarbling dan Tekstur: Tidak seperti beberapa jenis Wagyu lainnya yang dikenal dengan marbling atau pola lemak intramuskular yang sangat tinggi, Nihon Tankaku Washu memiliki marbling yang lebih sedikit. Ini menghasilkan daging dengan tekstur yang lebih padat dan sedikit lebih kencang, namun tetap lembut dan lezat.\r\n<br> <br>\r\nRasa dan Profil Umami: Daging Nihon Tankaku Washu memiliki rasa yang sangat kaya dengan profil umami yang kuat. Karena kandungan lemak yang lebih rendah dibandingkan dengan Wagyu lainnya, rasa dagingnya lebih menonjol dan memberikan sensasi gurih yang khas.\r\n<br> <br>\r\nKesehatan dan Nutrisi: Sapi Nihon Tankaku Washu dikenal lebih ramping dan dagingnya mengandung lemak yang lebih sedikit, menjadikannya pilihan yang lebih sehat tanpa mengorbankan rasa. Lemak dalam daging ini juga cenderung lebih sehat dengan kandungan asam lemak omega-3 dan omega-6 yang lebih baik.\r\n<br> <br>\r\nWarna: Daging dari sapi Nihon Tankaku Washu memiliki warna merah yang lebih cerah dibandingkan dengan daging Wagyu lainnya yang lebih pucat karena kandungan lemak tinggi. Warna merah ini menunjukkan kesegaran dan kualitas daging yang sangat baik.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Nihon Tankaku Washu dipelihara dengan perhatian khusus pada kesejahteraan hewan dan kualitas pakan. Mereka diberi pakan alami seperti rumput dan biji-bijian, dan seringkali dipelihara dalam kondisi lingkungan yang optimal untuk memastikan kesehatan dan kualitas daging.\r\n<br> <br>\r\nKetersediaan dan Harga: Nihon Tankaku Washu tidak sebanyak Kuroge Washu dalam hal produksi, sehingga ketersediaannya lebih terbatas. Meskipun demikian, daging ini tetap sangat dihargai di kalangan pecinta daging sapi premium karena kualitas dan rasanya yang luar biasa.\r\n<br> <br>\r\nSecara keseluruhan, daging Nihon Tankaku Washu menawarkan pengalaman kuliner yang unik dengan rasa dan tekstur yang berbeda dari Wagyu lainnya. Kualitas tinggi dan profil rasa yang kaya menjadikannya pilihan istimewa bagi mereka yang mencari daging sapi premium dengan karakteristik yang khas.', 1),
(18, 'wd1.jpg', 'Mukaku Washu', 'Tenderloin', '800.000 per250g', 'Daging Mukaku Washu, juga dikenal sebagai Japanese Polled, adalah salah satu jenis daging sapi Wagyu dari Jepang yang memiliki ciri khas dan keistimewaan tersendiri. Berikut adalah deskripsi lengkap mengenai daging Mukaku Washu:\r\n<br> <br>\r\nMarbling dan Tekstur: Mukaku Washu memiliki pola marbling atau lemak intramuskular yang khas, meskipun tidak sepadat Kuroge Washu (Japanese Black). Lemak dalam daging ini terdistribusi secara merata, memberikan tekstur yang lembut namun tetap padat. Marbling yang cukup baik memberikan rasa gurih dan kelembutan yang khas.\r\n<br> <br>\r\nRasa dan Profil Umami: Daging Mukaku Washu memiliki rasa yang sangat kaya dengan profil umami yang mendalam. Lemak yang terdistribusi dengan baik memberikan rasa yang lezat dan seimbang, menciptakan pengalaman makan yang memuaskan.\r\n<br> <br>\r\nKesehatan dan Nutrisi: Daging Mukaku Washu cenderung memiliki kandungan lemak yang seimbang dan tidak terlalu tinggi, sehingga lebih sehat dibandingkan dengan beberapa jenis Wagyu lainnya yang lebih berlemak. Ini membuatnya menjadi pilihan yang lebih baik bagi mereka yang mencari daging sapi dengan keseimbangan antara rasa dan kesehatan.\r\n<br> <br>\r\nWarna: Daging Mukaku Washu memiliki warna merah yang cerah, menunjukkan kualitas dan kesegaran daging yang tinggi. Warna ini juga menambah daya tarik visual saat disajikan dalam hidangan.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Mukaku Washu dipelihara dengan perawatan khusus yang melibatkan pakan berkualitas tinggi dan lingkungan yang baik. Sapi ini diberi pakan alami seperti rumput dan biji-bijian, serta dirawat dengan metode yang memastikan kesejahteraan hewan. Proses pemeliharaan ini bertujuan untuk menghasilkan daging dengan kualitas tertinggi.\r\n<br> <br>\r\nKetersediaan dan Harga: Mukaku Washu tidak sebanyak Kuroge Washu dalam hal produksi, sehingga ketersediaannya lebih terbatas. Namun, daging ini tetap sangat dihargai di kalangan pecinta daging sapi premium karena kualitas dan rasanya yang luar biasa.\r\n<br> <br>\r\nCiri Fisik: Mukaku Washu dikenal sebagai sapi yang tidak bertanduk (polled), yang merupakan salah satu karakteristik fisik utama yang membedakannya dari jenis Wagyu lainnya.\r\n<br> <br>\r\nSecara keseluruhan, daging Mukaku Washu menawarkan pengalaman kuliner yang unik dengan rasa yang kaya dan tekstur yang lembut. Kualitas tinggi dan profil rasa yang seimbang menjadikannya pilihan istimewa bagi mereka yang mencari daging sapi premium dengan karakteristik yang khas.\r\n<br> <br>\r\n', 2),
(19, 'wd2.jpg', 'Kuroge Washu', 'Rib Eye', '950.000 per250g', 'Daging Kuroge Washu, juga dikenal sebagai Japanese Black, adalah jenis daging sapi Wagyu paling terkenal dan dianggap sebagai yang paling unggul di Jepang. Daging ini dikenal karena kualitasnya yang luar biasa, tekstur yang lembut, dan rasa yang kaya. Berikut adalah deskripsi lengkap mengenai daging Kuroge Washu:\r\n<br> <br>\r\nMarbling dan Tekstur: Kuroge Washu terkenal dengan tingkat marbling atau lemak intramuskular yang sangat tinggi dan merata. Marbling yang padat ini memberikan tekstur yang sangat lembut dan melt-in-the-mouth yang khas. Tingginya kandungan lemak ini menciptakan rasa yang sangat kaya dan lezat.\r\n<br> <br>\r\nRasa dan Profil Umami: Daging Kuroge Washu memiliki rasa yang luar biasa kaya dengan profil umami yang sangat kuat. Lemak yang merata dalam daging ini memberikan rasa yang gurih dan mewah, serta aroma yang sangat menggugah selera.\r\n<br> <br>\r\nKesehatan dan Nutrisi: Meskipun memiliki kandungan lemak yang tinggi, lemak dalam daging Kuroge Washu sebagian besar adalah lemak tak jenuh tunggal yang lebih sehat dibandingkan lemak jenuh. Ini menjadikan daging ini tidak hanya lezat tetapi juga menawarkan manfaat kesehatan yang lebih baik dibandingkan dengan beberapa jenis daging sapi lainnya.\r\n<br> <br>\r\nWarna: Daging Kuroge Washu memiliki warna merah muda hingga merah cerah dengan pola marbling putih yang mencolok. Warna ini menunjukkan kualitas dan kesegaran daging yang sangat tinggi.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Kuroge Washu dipelihara dengan perawatan yang sangat teliti dan perhatian khusus. Mereka diberi pakan berkualitas tinggi seperti campuran biji-bijian, jerami, dan pakan fermentasi. Selain itu, sapi-sapi ini seringkali dipelihara dalam kondisi lingkungan yang optimal, dengan stres minimal, untuk memastikan kualitas daging yang terbaik.\r\n<br> <br>\r\nKetersediaan dan Harga: Karena proses pemeliharaan yang intensif dan standar kualitas yang sangat tinggi, daging Kuroge Washu cenderung lebih mahal dan eksklusif. Ini juga membuatnya menjadi salah satu daging sapi paling dicari di dunia, terutama untuk hidangan-hidangan gourmet dan restoran mewah.\r\n<br> <br>\r\nCiri Fisik: Kuroge Washu adalah sapi dengan bulu hitam yang mengkilap dan postur yang kekar. Karakteristik fisik ini juga mencerminkan keunggulan genetik mereka dalam menghasilkan daging berkualitas tinggi.\r\n<br> <br>\r\nSecara keseluruhan, daging Kuroge Washu adalah lambang kemewahan dalam dunia kuliner daging sapi. Rasa yang kaya, tekstur yang lembut, dan kualitas tinggi membuatnya menjadi pilihan favorit di antara para chef dan pecinta daging sapi premium di seluruh dunia.\r\n<br> <br>', 2),
(20, 'wd3.jpg', 'Nihon Tankaku Washu', 'Sirloin', '850.00 per250g', 'Daging Nihon Tankaku Washu adalah jenis daging sapi premium dari Jepang yang memiliki beberapa ciri khas dan keistimewaan. Nihon Tankaku Washu merupakan salah satu jenis sapi Wagyu, namun memiliki karakteristik yang membedakannya dari jenis Wagyu lainnya, seperti Kuroge Washu. Berikut adalah deskripsi lengkap mengenai daging Nihon Tankaku Washu:\r\n<br> <br>\r\nMarbling dan Tekstur: Tidak seperti beberapa jenis Wagyu lainnya yang dikenal dengan marbling atau pola lemak intramuskular yang sangat tinggi, Nihon Tankaku Washu memiliki marbling yang lebih sedikit. Ini menghasilkan daging dengan tekstur yang lebih padat dan sedikit lebih kencang, namun tetap lembut dan lezat.\r\n<br> <br>\r\nRasa dan Profil Umami: Daging Nihon Tankaku Washu memiliki rasa yang sangat kaya dengan profil umami yang kuat. Karena kandungan lemak yang lebih rendah dibandingkan dengan Wagyu lainnya, rasa dagingnya lebih menonjol dan memberikan sensasi gurih yang khas.\r\n<br> <br>\r\nKesehatan dan Nutrisi: Sapi Nihon Tankaku Washu dikenal lebih ramping dan dagingnya mengandung lemak yang lebih sedikit, menjadikannya pilihan yang lebih sehat tanpa mengorbankan rasa. Lemak dalam daging ini juga cenderung lebih sehat dengan kandungan asam lemak omega-3 dan omega-6 yang lebih baik.\r\n<br> <br>\r\nWarna: Daging dari sapi Nihon Tankaku Washu memiliki warna merah yang lebih cerah dibandingkan dengan daging Wagyu lainnya yang lebih pucat karena kandungan lemak tinggi. Warna merah ini menunjukkan kesegaran dan kualitas daging yang sangat baik.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Nihon Tankaku Washu dipelihara dengan perhatian khusus pada kesejahteraan hewan dan kualitas pakan. Mereka diberi pakan alami seperti rumput dan biji-bijian, dan seringkali dipelihara dalam kondisi lingkungan yang optimal untuk memastikan kesehatan dan kualitas daging.\r\n<br> <br>\r\nKetersediaan dan Harga: Nihon Tankaku Washu tidak sebanyak Kuroge Washu dalam hal produksi, sehingga ketersediaannya lebih terbatas. Meskipun demikian, daging ini tetap sangat dihargai di kalangan pecinta daging sapi premium karena kualitas dan rasanya yang luar biasa.\r\n<br> <br>\r\nSecara keseluruhan, daging Nihon Tankaku Washu menawarkan pengalaman kuliner yang unik dengan rasa dan tekstur yang berbeda dari Wagyu lainnya. Kualitas tinggi dan profil rasa yang kaya menjadikannya pilihan istimewa bagi mereka yang mencari daging sapi premium dengan karakteristik yang khas.\r\n<br> <br>\r\n\r\n\r\n\r\n\r\n\r\n', 2),
(21, 'wd4.webp', 'Akage Washu', 'Tenderloin', '800.000 per250g', 'Daging Akage Washu adalah jenis daging sapi premium dari Jepang yang terkenal karena kualitasnya yang sangat tinggi. Akage Washu merupakan salah satu varietas dari sapi Wagyu, yang dikenal secara global sebagai salah satu sumber daging sapi terbaik di dunia. Berikut adalah beberapa karakteristik utama dari daging Akage Washu:\r\n\r\nRas dan Kualitas: Daging Akage Washu memiliki marbling atau pola lemak intramuskular yang sangat halus dan merata, yang memberikan tekstur lembut dan rasa yang sangat kaya. Marbling yang baik juga berkontribusi pada kelembutan dan kelezatan daging.\r\n<br> <br>\r\nWarna: Akage Washu dikenal dengan warna dagingnya yang lebih merah dibandingkan dengan jenis Wagyu lainnya, yang biasanya lebih pucat karena kandungan lemak yang tinggi. Warna merah ini adalah salah satu ciri khas yang membuatnya unik.\r\n<br> <br>\r\nRasa: Daging ini memiliki rasa yang kaya dan mendalam dengan profil umami yang kuat. Kelembutan dan rasa gurih yang khas menjadikan daging Akage Washu sangat diidamkan oleh para penggemar daging sapi premium.\r\n<br> <br>\r\nProses Pemeliharaan: Sapi Akage Washu dipelihara dengan perawatan khusus yang melibatkan pakan berkualitas tinggi dan lingkungan yang baik. Proses pemeliharaan ini bertujuan untuk menghasilkan daging dengan kualitas tertinggi. Sapi-sapi ini sering diberi pakan yang terdiri dari campuran biji-bijian, jerami, dan pakan lainnya yang dipilih secara khusus.\r\n<br> <br>\r\nKetersediaan dan Harga: Karena kualitasnya yang sangat tinggi, daging Akage Washu sering kali dijual dengan harga premium dan tidak selalu mudah didapatkan di luar Jepang. Hanya peternak tertentu yang memenuhi standar ketat yang bisa menghasilkan daging ini.\r\n<br> <br>\r\nSecara keseluruhan, daging Akage Washu adalah salah satu jenis daging sapi paling eksklusif dan dihargai di dunia kuliner. Keunikan warna, rasa, dan teksturnya membuatnya sangat dicari oleh para koki dan pecinta daging sapi premium.\r\n<br> <br>\r\n\r\n\r\n\r\n\r\n\r\n', 2),
(26, '66669ebadd4f7.jpg', '', 'Sirloin', '750.000 per250g', '', 1),
(36, '66669f240639b.png', 'Matsusaka', 'sirloin', '850.000 pe250g', 'daging enak sekali', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Medium Rare'),
(2, 'Well Done');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'jek', '$2y$10$KinEc7ZdJ4fBZVIKP4.NEO9GaVAK4EtubXB1T7cVwoyIGe.xcQAZq'),
(2, 'robi', '$2y$10$WxxuOXPu089Nd2WtsNnUW.6GN4o6ddEYQRAZO/jIkx4Zp78LOWBzu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `healthy`
--
ALTER TABLE `healthy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `healthy`
--
ALTER TABLE `healthy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `healthy`
--
ALTER TABLE `healthy`
  ADD CONSTRAINT `healthy_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
