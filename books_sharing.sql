-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 04:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(126) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(126) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_book` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_upload` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `is_borrowed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `user_id`, `title`, `author`, `publisher`, `cover`, `about_book`, `date_upload`, `date_modified`, `is_borrowed`) VALUES
(24, 32, 'Solaris', 'Stanislaw Lem', 'Laguna', 'C:\\xampp\\htdocs\\BookShare1601\\img\\solaris.jpg', 'Into the Space...\r\n', '2020-01-16 22:47:53', '2020-01-16 22:47:53', 0),
(25, 32, 'Holywood', 'Charles Bukowski', 'LOM', 'C:\\xampp\\htdocs\\BookShare1601\\img\\holivud.jpg', 'Private Detective in LA...', '2020-01-16 22:51:32', '2020-01-16 22:51:32', 0),
(26, 33, 'Mirni dani na Klisiju', 'Henri Miler', 'LOM', 'C:\\xampp\\htdocs\\BookShare1601\\img\\mirni_dani_na_klisiju.jpg', 'Henri u Parizu...', '2020-01-16 22:52:38', '2020-01-16 22:52:38', 1),
(27, 33, 'Upitaj prah', 'Dzon Fante', 'LOM', 'C:\\xampp\\htdocs\\BookShare1601\\img\\upitaj_prah.jpg', 'Zivot u LA...', '2020-01-16 22:53:43', '2020-01-16 22:53:43', 0),
(28, 33, 'Periferal', 'Vilijem Gibson', 'Laguna', 'C:\\xampp\\htdocs\\BookShare1601\\img\\periferal.jpg', 'Syber Punk', '2020-01-16 22:55:03', '2020-01-16 22:55:03', 1),
(41, 32, 'Snovi sa Bunker Hila', 'Dzon Fante', 'Lom', 'snovi_sa_bunker_hila.jpg', 'Zivot pisca u LA', '2020-01-28 09:55:55', '2020-01-28 09:55:55', 0),
(42, 32, 'Moj pas glupi', 'Dzon Fante', 'Lom', 'moj_pas_glupi.jpg', 'Roman „My Dog Stupid“ jedna je od knjiga iz Fanteove zaostavštine, objavljena prvi put tek 1986. godine. Radnja ovog autobiografskog dela odvija se krajem šezdesetih u Fanteovom domu, i prati odlazak već odrasle dece iz velike Fanteove porodice. Dok ', '2020-01-28 09:57:03', '2020-01-28 09:57:03', 0),
(43, 32, 'Bratstvo Loze', 'Dzon Fante', 'Lom', 'bratstvo_loze.jpg', 'Finale Fanteove trilogije koja je počela knjigom \"Čekaj do proleća, Bandini\" a nastavila se romanom \"Puna života\". ', '2020-01-28 09:57:41', '2020-01-28 09:57:41', 1),
(44, 32, 'Sve zabave sutrasnjice', 'Vilijem Gibson', 'Polaris', 'sve_zabave_sutrasnjice_v.jpg', 'SF', '2020-01-28 23:02:11', '2020-01-28 23:02:11', 0),
(46, 32, 'Post Office', 'Charles Bukowski', 'Lom', 'posta.jpg', 'Prvi roman...\r\n', '2020-01-29 11:30:37', '2020-01-29 11:30:37', 0),
(47, 32, 'Neuromancer', 'Vilijem Gibson', 'Laguna', 'neuromant.jpg', 'Cyber Punk', '2020-01-29 11:32:15', '2020-01-29 11:32:15', 0),
(49, 37, 'Proba', 'pppppp', 'wwww', 'opsada_crkve_svetog_spasa_v.jpg', 'Proba', '2020-01-29 13:08:08', '2020-01-29 13:08:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_comment`
--

CREATE TABLE `book_comment` (
  `user_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `comment` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `book_genre_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `genre_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`book_genre_id`, `book_id`, `genre_id`) VALUES
(1, 44, 1),
(2, 46, 2),
(3, 47, 1),
(7, 49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id_request` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `is_requestes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id_request`, `user_id`, `owner_id`, `book_id`, `date`, `is_requestes`) VALUES
(6, 33, 0, 24, '2020-01-27 13:07:17', 1),
(7, 32, 0, 27, '2020-01-27 13:23:46', 1),
(12, 33, 0, 25, '2020-01-27 15:10:47', 1),
(13, 32, 0, 26, '2020-01-27 22:10:11', 1),
(14, 33, 32, 43, '2020-01-28 21:52:04', 1),
(15, 33, 32, 24, '2020-01-28 21:54:15', 2),
(16, 33, 32, 41, '2020-01-28 21:54:23', 1),
(17, 33, 32, 25, '2020-01-28 21:54:33', 0),
(18, 33, 32, 43, '2020-01-28 22:37:50', 1),
(19, 37, 33, 26, '2020-01-29 13:09:18', 1),
(20, 37, 32, 25, '2020-01-29 13:10:39', 0),
(21, 37, 32, 24, '2020-01-29 13:10:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `first_name`, `last_name`, `email`, `message`) VALUES
(1, 'Nemanja', 'Milosavljevic', 'mile.javakv@gmail.com', 'Ovo vam ne radi...'),
(2, 'Mile', 'Milence', 'mile.javakv@gmail.com', 'Ovo ne radi'),
(3, 'Pera', 'Peric', 'mile.javakv@gmail.com', 'Javite mi se...'),
(4, 'Pera', 'Peric', 'mile.javakv@gmail.com', 'Javite mi se...'),
(5, 'Neca', 'Miosav', 'mile.javakv@gmail.com', 'QQQQQQ');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `name`) VALUES
(1, 'SF'),
(2, 'Drama'),
(3, 'History'),
(4, 'Fantasy'),
(5, 'Graphic Novels'),
(6, 'Film'),
(7, 'Music'),
(8, 'Triler'),
(9, 'Computers and Internet'),
(10, 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `news_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`news_id`, `name`, `email`) VALUES
(1, 'Peca', 'mile.javakv@gmail.com'),
(2, 'Neca', 'neca@solaris.com'),
(3, 'Petar', 'mile.javakv@gmail.com'),
(4, 'Petar', 'mile.javakv@gmail.com'),
(7, 'Bole', 'mile.javakv@gmail.com'),
(8, 'Mile', 'mile.javakv@gmail.com'),
(9, 'Pera Peric', 'mile.javakv@gmail.com'),
(10, 'Petar', 'mile.javakv@gmail.com'),
(11, 'Nemanja', 'mile.javakv@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `date_of_birth`, `address`, `postal_code`, `city`, `state`, `email`, `phone_number`, `gender`, `username`, `password`, `admin`) VALUES
(30, 'aa', 'aa', '1983-03-03', 'aa', 'aa', 'aa', 'aa', 'aa@gmail.com', '011888888', 'Male', 'aa', '777888', 1),
(32, 'Petar', 'Stankovic', '1965-05-05', 'Ulica BB', '36110', 'Kraljevo', 'Serbia', 'petar@gmail.com', '065777888', 'Male', 'ps', '123456', 0),
(33, 'Nemanja', 'Milosavljevic', '1967-07-07', 'Ulica CC', '36210', 'Vrnjacka Banja', 'Serbia', 'nemanja@gmail.com', '065222333', 'Male', 'nm', '123456', 0),
(34, 'Milan', 'Paunic', '2000-01-01', 'Kraljevo bb', '36000', 'Kraljevo', 'Srbija', 'milance@gmail.com', '01234567', 'Male', 'milance', '123456', 0),
(36, 'John Doe', 'John Doe', '1955-05-05', 'www', 'www', 'www', 'www', 'www@gmail.com', '1233467', 'Male', 'ww', '123456', 0),
(37, 'Petar', 'Peric', '1985-05-05', 'www', 'wwww', 'www', 'www', 'petar@gmail.com', '01234569', 'Male', 'petar', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `user_id` int(11) NOT NULL,
  `user_id_rated` int(1) NOT NULL,
  `rating` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book_comment`
--
ALTER TABLE `book_comment`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`book_genre_id`),
  ADD KEY `book_genre_id` (`book_genre_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_rated` (`user_id_rated`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `book_genre`
--
ALTER TABLE `book_genre`
  MODIFY `book_genre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_comment`
--
ALTER TABLE `book_comment`
  ADD CONSTRAINT `book_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_comment_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_rating_ibfk_2` FOREIGN KEY (`user_id_rated`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
