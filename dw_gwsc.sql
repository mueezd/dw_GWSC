-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 08:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw_gwsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `pitch_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `pitch_id`, `price`, `qty`) VALUES
('EOmPBHM4ikUHBzJJ7iZo', 'ISUe5moEVn9iAQRQOACX', 'RP0mT1eFwp7BXrd9rXfn', '1', '6'),
('qAFRTOuBybdFzJEtcpIS', 'ISUe5moEVn9iAQRQOACX', 'aa7jWBNhR9tNWdHU7Lq0', '50', '5'),
('9x7vkwcghPoBJwAjuAzg', 'ISUe5moEVn9iAQRQOACX', 'f8xakD1ne3h5aEb0sNxG', '500', '5'),
('Ri6HWTIvtAY62srbEpK2', '4TYFZ35QpEmReJ2iZTx6', 'aa7jWBNhR9tNWdHU7Lq0', '50', '30'),
('t7ZI9jNF3P4euchXr9PU', '4TYFZ35QpEmReJ2iZTx6', 'f8xakD1ne3h5aEb0sNxG', '500', '1'),
('nmsiKptVp0x10TBtHIfp', '4TYFZ35QpEmReJ2iZTx6', 'RP0mT1eFwp7BXrd9rXfn', '1', '1'),
('YjHq3O9aHRUUNmR3hAT8', 'T24PpTdsfjPjZ04Bz5hE', 'RP0mT1eFwp7BXrd9rXfn', '1', '1'),
('CVp402IhvXhNcE7zxL4F', 'T24PpTdsfjPjZ04Bz5hE', 'aa7jWBNhR9tNWdHU7Lq0', '50', '1'),
('frcQCeQRG41KXrBf9eji', 'T24PpTdsfjPjZ04Bz5hE', 'f8xakD1ne3h5aEb0sNxG', '500', '1'),
('rBicOn2fGIa3eRi0bPqh', 'T24PpTdsfjPjZ04Bz5hE', 'WL8uS1QcxYocxnv6fC17', '50', '1');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_booking`
--

CREATE TABLE `confirm_booking` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `pitch_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirm_booking`
--

INSERT INTO `confirm_booking` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `pitch_id`, `price`, `qty`, `date`, `status`) VALUES
('YprST4vKaQwbrswdA5FT', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '12334', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'credit or debit card', 'SIayjt6XRWpaNcqhv2Cn', '70', '1', '2023-03-05', 'canceled'),
('O5BBgjsYUT3PbmKy1gw9', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '12334', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'credit or debit card', 'aa7jWBNhR9tNWdHU7Lq0', '50', '1', '2023-03-05', 'canceled'),
('9vI7OPdwmGnLRq46sjbU', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '12334', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'credit or debit card', 'f8xakD1ne3h5aEb0sNxG', '500', '1', '2023-03-05', 'in progress'),
('oVYeoQX5SdCkctGqPR1C', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '12334', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'credit or debit card', 'WL8uS1QcxYocxnv6fC17', '50', '1', '2023-03-05', 'in progress'),
('jY2oqYY7jg1xVTswpGDv', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '12334', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'credit or debit card', 'RP0mT1eFwp7BXrd9rXfn', '1', '1', '2023-03-05', 'in progress'),
('mO2ZJeQduTa7qbwkpQ3c', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '1111', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'cash on delivery', 'aa7jWBNhR9tNWdHU7Lq0', '50', '1', '2023-03-05', 'canceled');

-- --------------------------------------------------------

--
-- Table structure for table `pitch`
--

CREATE TABLE `pitch` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pitch`
--

INSERT INTO `pitch` (`id`, `name`, `price`, `image`) VALUES
('6RGU6BEcYeqSzeqBOYwd', 'Tent Pitch', '15', 'jRcmG6mqrIbpjp9LieD4.jpg'),
('WL8uS1QcxYocxnv6fC17', 'Caravan Pitch', '50', 'VVKr1aF5KKLdzIj5tk5c.jpg'),
('SIayjt6XRWpaNcqhv2Cn', 'Motorhome Pitch', '70', 'qDdMoOtSAvJkB9vqw6Ww.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`) VALUES
('h12FAnxY6JoXb51iDpda', 'Wild swimming kit, gifts, equipment and accessories', 'post_1.webp'),
('sRKX0vSREJbBzO07wM1H', 'River and Water Quality for wild swimming', 'post_2.webp'),
('G6zDaxTTS0fV5UT4BQ46', 'Wild Swimming access, legal and law – am I allowed to wild swim in rivers and lakes?', 'post_3.webp'),
('6zQRsklaYIO38cLIgYZN', 'Best Wild Swims in Wales', 'post_4.webp'),
('mMj2FWPRVWZPsfOsjSUL', 'Wild Swimming introduction for beginners', 'post_5.webp'),
('hK2tgabAaK1c1FAak6UW', 'Wild Swimming Near Waterfalls', 'post_6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `post_id`, `user_id`, `rating`, `title`, `description`, `date`) VALUES
('FvZRcn2r91dnqqLcSmpP', 'G6zDaxTTS0fV5UT4BQ46', '0hSrVDBFhdbx5HbVFcKo', '2', 'deepro test 1', 'Test 1', '2023-03-03'),
('CEryRwPaDbdEST3KasXe', 'hK2tgabAaK1c1FAak6UW', '0hSrVDBFhdbx5HbVFcKo', '3', 'Manzi test 1', 'Test 1', '2023-03-03'),
('x4ytybfvPxQLQKBDWHmk', 'sRKX0vSREJbBzO07wM1H', '4TYFZ35QpEmReJ2iZTx6', '2', 'Hello', '', '2023-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('0hSrVDBFhdbx5HbVFcKo', 'deepro--', 'deepro@gmail.com', '$2y$10$AjRfjfdINYR4FH/B72rylO5o7ycXhQnHpXdM/MlcWkpIZnR6bQNFm', 'cF4gOnAPespBo55z8kGu.jpg'),
('aCFky5bYQmsydG9pxVNq', 'fef', 'wfqw@htrh', '$2y$10$hEbLy9Sfxq813atgv1k0oum1DaOL9OMypGjSvWqEno7zcjZ1z2mN2', ''),
('2rWy5bmTL8XCkUzCmjUr', 'rge', 'swe@hotm', '$2y$10$TzrpyS6KYeiWeFKeO9QxVus/YPqIu6AQ.Qs2G9TBvS8mircisbe6K', 'V1VZ3yEZ2gJiNoS8OCce.jpg'),
('4TYFZ35QpEmReJ2iZTx6', 'deepro@123', 'deepro@123', '$2y$10$HHWZ6GjUm20XYd2x9yD3IeO2Bj8ZO.GSXZMHR/l7rUir6HXw4Sy/S', 'SYBSTtoCcgNnJnocKjmj.jpg'),
('2jBJRInhQ2F3aaHyHmyp', 'samrin', 'samrin@gmail.com', '$2y$10$5NDsRf3PAWA.3Ym9Nyp1e.BnD.Bm97AWKzAWGvEm72mRfhBF3PW1O', 'OuWeFnn25DFQfauIJcfV.jpg'),
('kienFDuMX0EqqH4hCOYX', 'mona@123', 'mona@123', '$2y$10$Kk8kLhFMBCYQRG5LI7WST.aQn6W78nWOdlFY1vyX0y0Mtns0YERvi', ''),
('T24PpTdsfjPjZ04Bz5hE', 'robin@123', 'robin@123', '$2y$10$Nc/.DECz2EES4J2MOoYqxeG7QCCUtli.audnZ0uFGL0rxBR4c7pj6', 'fhfArMCobI4nzXxdst56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `first_name`, `last_name`, `email`, `password`, `user_type`, `image`) VALUES
('0VHtQhx4c3N4sSwfmOMf', 'MUEEZ', 'DEEPRO', 'deepro@nj', '202cb962ac59075b964b07152d234b70', 'user', ''),
('1', 'mueez', 'deepro', 'deepro@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', ''),
('1YHTPMz7InnFcqaW1HV8', '123', '32', 'd@d.com', '202cb962ac59075b964b07152d234b70', 'user', ''),
('2', 'Tanvir', 'Hossain', 'tanvir@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', ''),
('3', 'robin', 'alive', 'robin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', ''),
('4', 'deepro', 'mueez', 'deepro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', ''),
('5', 'nasrin', 'Akter', 'nasrin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', ''),
('A2tYmUYy33QewRGgmZmf', 'mona', 'shki', 'saki@dj1', '202cb962ac59075b964b07152d234b70', 'user', ''),
('g16BtMrZuk8fIq5rM6xQ', 'sfaf', 'safasf', 'deepro@dhfh', '202cb962ac59075b964b07152d234b70', 'user', ''),
('hZPptZKtpdtVOFpStZDa', 'MUEEZ', '123', 'deepro@qqq', '202cb962ac59075b964b07152d234b70', 'user', ''),
('i7S67F2xi8b9F5nPgMKU', 'samrin', 'Rashid', 'samrin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', ''),
('NnGys0rKTOnyvy8z3P3d', 'MUEEZ', 'DEEPRO', 'deepro@xyz', '202cb962ac59075b964b07152d234b70', 'user', ''),
('pS0UxS54rpZ2P9I8aQJc', 'MUEEZ', 'DEEPRO', 'deepro@dft', '202cb962ac59075b964b07152d234b70', 'user', 'deepro'),
('sYAm7893rCaP8JWqiBBK', 'rafi', 'sir', '123@deepro.com', '202cb962ac59075b964b07152d234b70', 'user', ''),
('w4rhvPVNitRzciOMk6hb', 'rocket', '1', 'rocket@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', ''),
('yER6qM0PiZW4Rrh1ATLC', 'MUEEZ', 'DEEPRO', 'deepro@gmail.com111', '202cb962ac59075b964b07152d234b70', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_counter`
--

CREATE TABLE `visitor_counter` (
  `id` int(255) NOT NULL,
  `counter` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_counter`
--

INSERT INTO `visitor_counter` (`id`, `counter`) VALUES
(1, 21730);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
