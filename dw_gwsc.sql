-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 07:54 PM
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
('nmsiKptVp0x10TBtHIfp', '4TYFZ35QpEmReJ2iZTx6', 'RP0mT1eFwp7BXrd9rXfn', '1', '1');

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
('mO2ZJeQduTa7qbwkpQ3c', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '1111', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'cash on delivery', 'aa7jWBNhR9tNWdHU7Lq0', '50', '1', '2023-03-05', 'canceled'),
('t9aoFnO1CKEmAsuIng9T', '5LpfpBm7Pun0sNKqiJs0', 'MUEEZ RAHMAN DEEPRO', '43292', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'office', 'cash on delivery', '6RGU6BEcYeqSzeqBOYwd', '15', '1', '2023-03-11', 'canceled'),
('aWI4F4uvybZ2jHZ5rz7c', '5LpfpBm7Pun0sNKqiJs0', 'MUEEZ RAHMAN DEEPRO', '43292', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'office', 'cash on delivery', 'WL8uS1QcxYocxnv6fC17', '50', '1', '2023-03-11', 'in progress'),
('I0L8kszI1U0BpUgsaGI2', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '01717', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'cash on delivery', 'WL8uS1QcxYocxnv6fC17', '50', '1', '2023-03-26', 'in progress'),
('ptO6PwSjNXbBePskI2e4', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', '01717', 'mueezrz@gmail.com', '&#34;Rahman Manzil&#34; East Khabaspur ,, Shantibag Mor , Sadar, Faridpur, Bangladesh - 7800', 'home', 'cash on delivery', 'SIayjt6XRWpaNcqhv2Cn', '70', '1', '2023-03-26', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `user_id`, `name`, `email`, `phone`, `message`) VALUES
('9ypXtC0VtaC56m920yGm', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', '3e23', '23r2r3'),
('Vt50284ioQozE4kXAbbD', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'test2', 'test 1'),
('s9hNRXHU25rGNRqbOCvg', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'test2', 'test 1'),
('SHWXZZBJbP9UkTw1ChE5', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'test2', 'test 1'),
('W7HXAaf282MPT7Z1BIyw', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'test2', 'test 1'),
('4BBGvsFnhfDNaiE2dnGV', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'test2', 'test 1'),
('BdQBpa6SMzA1zz5h2uIr', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'test2', 'test 1'),
('ptwfGET4DhRrKuimRgu7', 'T24PpTdsfjPjZ04Bz5hE', 'Fahim', 'fahim@vgf.com', '01721111', 'test'),
('tsXrQBJyIzBQZ782Bwe0', 'T24PpTdsfjPjZ04Bz5hE', 'Fahim', 'fahim@vgf.com', '01721111', 'test'),
('SHazPNtn1daNbJLcZBjQ', 'T24PpTdsfjPjZ04Bz5hE', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', 'fw4', '3443f'),
('dvh3QfVBDKefgDPg5rvU', '4TYFZ35QpEmReJ2iZTx6', 'wfwef', 'weff@zdger', '01717922924', 'Test'),
('o3Paj7Qo2ZXnfpqL4uDU', 'unregistered user', 'MUEEZ RAHMAN DEEPRO', 'mueezrz@gmail.com', '01717922923', 'test'),
('3nkfEKsGXqBMOPxRaVS1', 'T24PpTdsfjPjZ04Bz5hE', 'mr Deepro', 'deepro@deepro.com', '01717922923', 'logined'),
('WznVmqpqjVWqPJ18uNYg', 'unregistered user', 'Mohammad Sazzat Hossain', 'mueez.net@gmail.com', '123', '123456780');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` varchar(20) NOT NULL,
  `item_number` varchar(50) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `payment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pitch`
--

CREATE TABLE `pitch` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pitch`
--

INSERT INTO `pitch` (`id`, `name`, `description`, `price`, `image`) VALUES
('6RGU6BEcYeqSzeqBOYwd', 'Tent Pitch', 'A campsite, also known as a campground or camping pitch, is a place used for overnight stay in an outdoor area.', '15', 'jRcmG6mqrIbpjp9LieD4.jpg'),
('WL8uS1QcxYocxnv6fC17', 'Caravan Pitch', 'Seasonal touring pitches allow you to enjoy all the benefits of your caravan while cutting down on the amount of towing you have to do.', '50', 'VVKr1aF5KKLdzIj5tk5c.jpg'),
('SIayjt6XRWpaNcqhv2Cn', 'Motorhome Pitch', 'Full-service pitches have electricity, freshwater, and greywater. RV mains water hookup or Aquaroll mains water adapter kit/float valve are needed. Fully maintained pitches may need drain adaptors.', '70', 'qDdMoOtSAvJkB9vqw6Ww.jpg'),
('EiCTM8XB7iCScKWCzcxY', 'Pup Tents', 'to require booking and pitch extras. Pup tents can only be 2 x 1.5m and can only be used by two children aged 9–15. They must be set up inside the pitch of the original unit.', '4', 'V4ntsIN69ERZL4oIU0vx.gif');

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
('hK2tgabAaK1c1FAak6UW', 'Wild Swimming Near Waterfalls', 'post_6.webp'),
('vuk4oiIGgb8HwvVTzauT', 'Best wild swims in Scotland', 'K7eTiId9rSxEqiXnMjRY.jpg'),
('Dfc9s2rkZFyCJFKBBMjO', 'Best Wild Swimming Adventures in the Yorkshire Dal', 'h1sJ7qs2ghEcHI25TS3z.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiries`
--

CREATE TABLE `product_enquiries` (
  `id` varchar(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `enquiries` varchar(500) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_enquiries`
--

INSERT INTO `product_enquiries` (`id`, `product_name`, `enquiries`, `user_id`) VALUES
('0', '', '', 'T24PpTdsfjPjZ04Bz5hE'),
('BkMremd3isrxOHtB9x9u', '', '', 'T24PpTdsfjPjZ04Bz5hE'),
('uPZuDNXSdDf1uqUU1An1', '', '', 'T24PpTdsfjPjZ04Bz5hE'),
('5vQm1Loo5uQuahgy4f9j', '', '', 'T24PpTdsfjPjZ04Bz5hE'),
('40qH8zhNJNmv2KOq1Ara', 'tent', 'tent', 'T24PpTdsfjPjZ04Bz5hE'),
('bswzxmkXtRzIrRRa70H3', 'Caravan with microfiiber', 'Test enquiries ', 'T24PpTdsfjPjZ04Bz5hE');

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
('x4ytybfvPxQLQKBDWHmk', 'sRKX0vSREJbBzO07wM1H', '4TYFZ35QpEmReJ2iZTx6', '2', 'Hello', '', '2023-03-04'),
('HmY3s3BaSsiK46jOYZPE', 'Dfc9s2rkZFyCJFKBBMjO', 'EUmQeGo4BaVW00oUr9aV', '1', 'Very good place', 'it is very good plane for swimming', '2023-03-10'),
('9GaktpTtJsJSXNfKY32o', 'Dfc9s2rkZFyCJFKBBMjO', 'T24PpTdsfjPjZ04Bz5hE', '5', 'Nice', 'Wow, Exciting ', '2023-03-10'),
('q8Kb9qxvMvkJmBeC4m9Q', 'sRKX0vSREJbBzO07wM1H', 'T24PpTdsfjPjZ04Bz5hE', '5', 'Very Nice', 'Very Nice', '2023-03-10'),
('ActKShXJ2d1zsKB6GbC0', 'mMj2FWPRVWZPsfOsjSUL', 'T24PpTdsfjPjZ04Bz5hE', '1', 'Hello', 'This is very good place', '2023-03-10'),
('kVgmceA3a0vxiPu1OJjL', 'h12FAnxY6JoXb51iDpda', 'T24PpTdsfjPjZ04Bz5hE', '4', 'Nice Topic', 'Hello', '2023-03-10'),
('KakOzMgLUYJniNEmV99H', 'vuk4oiIGgb8HwvVTzauT', 'T24PpTdsfjPjZ04Bz5hE', '3', 'Wow', 'Nice', '2023-03-10');

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
('T24PpTdsfjPjZ04Bz5hE', 'robin@123', 'robin@123', '$2y$10$Nc/.DECz2EES4J2MOoYqxeG7QCCUtli.audnZ0uFGL0rxBR4c7pj6', 'xwMrm9aIC6LuKjH7uxRF.jpg'),
('c4B0RbxNfdjDJGJvJe42', 'samrin', 'samrin@123', '$2y$10$C3KG2aqc3.oW6gIYyUbqr.BAc0jzf0Ud12pUUAKZKz7fq/v4x5jGy', ''),
('Zry5h3OVXi6RdzYwos3B', 'man123', 'mann@123', '$2y$10$qmBVIvbP/59LeCmeXKrKn.COQQnqmroaMCkDyN8o8317MmhTU1pgG', ''),
('mS0VYx0fJKVYsZqJqzpY', 'lucky@123', 'lucky@123', '$2y$10$BrUkUOkyTPBEIsVKwKMIgO9jPmsdGegVIaU0LnZvPBXUZMje5kB4S', ''),
('1vAipNOB2TXUc3kRKRnC', 'tutul', 'tutul@123', '$2y$10$mMIzwHWze19tPf2FbytGiOX9FXA5r9yuFeiX02XPq1pUwrH0mRfVy', ''),
('EUmQeGo4BaVW00oUr9aV', 'admin', 'admin@123', '$2y$10$QJkKKXclDbfZ4QX1Thz6n.ZgpwYSjhnjaTlYACTsWv/.3BIg0jixK', 'AMduSuZM5U25mM1Akohh.jpg');

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
(1, 22584);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

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
