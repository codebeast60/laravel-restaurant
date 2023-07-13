-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 11:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `Name`, `cat_pic`, `created_at`, `updated_at`) VALUES
(1, 'Soup', 'soup.jpg_23.02.22.jpg', NULL, '2023-05-17 05:57:45'),
(2, 'Cold Appetizers', 'Cold Appetizers.jpg_23.02.22.jpg', NULL, NULL),
(3, 'Hot Appetizers', 'Hot Appetizers.jpg_23.02.22.jpg', NULL, NULL),
(4, 'Salad ', 'Salad.jpg_23.02.22.jpg', NULL, NULL),
(5, 'Seafood Appetizers', 'Seafood Appetizers.jpg_23.02.22.jpg', NULL, NULL),
(6, 'Nayeh ', 'Nayeh.jpg_23.02.22.jpg', NULL, NULL),
(7, 'Platters ', 'Platters.jpg_23.02.22.jpg', NULL, NULL),
(8, 'Mashawi ', 'Mashawi.jpg_23.02.22.jpg', NULL, NULL),
(9, 'Turkish Kabab', 'Turkish Kabab.jpg_23.02.22.jpg', NULL, NULL),
(10, 'Kids Meals', 'Kids Meals.jpg_23.02.22.jpg', NULL, NULL),
(11, 'Cold Drinks', 'Cold Drinks.jpg_23.02.22.jpg', NULL, NULL),
(12, 'Hot Drinks', 'Hot Drinks.jpg_23.02.22.jpg', NULL, NULL),
(13, 'Milkshake And Frappe', 'Milkshake And Frappe.jpg_23.02.22.jpg', NULL, NULL),
(14, 'Ice Cream', 'Ice Cream.jpg_23.02.22.jpg', NULL, NULL),
(15, 'Smoothies ', 'Smoothies.jpg_23.02.22.jpg', NULL, NULL),
(16, 'Cake ', 'Cake.jpg_23.02.22.jpg', NULL, NULL),
(17, 'Turkish Dessert', 'Turkish Dessert.jpg_23.02.22.jpg', NULL, NULL),
(18, 'Shisha', 'Shisha.jpg_23.02.22.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Cat_id` int(10) UNSIGNED NOT NULL,
  `Member_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `Name`, `description`, `price`, `created_at`, `updated_at`, `Cat_id`, `Member_id`, `image_path`) VALUES
(34, 'Broccoli', '', 2.5, NULL, NULL, 1, 1, 'Broccoli.jpg_23.02.22.jpg'),
(35, '3adas', '', 1.75, NULL, NULL, 1, 1, '3adas.jpg_23.02.22.jpg'),
(36, ' Mushroom', '', 2.5, NULL, NULL, 1, 1, 'Mushroom.jpg_23.02.22.jpg'),
(38, ' maggi', '', 1.75, NULL, NULL, 1, 1, 'maggi.jpg_23.02.22.jpg'),
(39, ' Labneh Mtawmeh', '', 2, NULL, NULL, 2, 1, 'Labneh Mtawmeh.jpg_23.02.22.jpg'),
(40, ' Hommos', '', 2, NULL, NULL, 2, 1, 'Hommos.jpg_23.02.22.jpg'),
(41, 'Moutabal', '', 2, NULL, NULL, 2, 1, 'Moutabal.jpg_23.02.22.jpg'),
(42, ' Hendbeh Bzeit', '', 1.75, NULL, NULL, 2, 1, 'hendbe bi zeit.jpg_23.02.22.jpg'),
(43, ' Warak Inab', '', 2.25, NULL, NULL, 2, 1, 'warak inab.jpg_23.02.22.jpg'),
(44, 'Msakaa', '', 1.75, NULL, NULL, 2, 1, 'Msakaa.jpg_23.02.22.jpg'),
(45, 'batata harra', '', 2.25, NULL, NULL, 3, 1, 'Batata Harra.jpg_23.02.23.jpg'),
(46, 'Kebbe shahme (1pc)', '', 2.25, NULL, NULL, 3, 1, 'kebbe shahmeh.jpg_23.02.23.jpg'),
(47, 'Fried kebbe', '', 4.5, NULL, NULL, 3, 1, 'Fried Kebbe.jpg_23.02.23.jpg'),
(48, 'Cheese Rakakat', '', 2.75, NULL, NULL, 3, 1, 'Cheese Rkakat.jpg_23.02.23.jpg'),
(49, 'Fresh fries', '', 2, NULL, NULL, 3, 1, 'French Fries.jpg_23.02.23.jpg'),
(50, 'Baked potato', '', 1.75, NULL, NULL, 3, 1, 'Baked Potato.jpg_23.02.23.jpg'),
(51, 'Sfiha', '', 2.75, NULL, NULL, 3, 1, 'Sfiha.jpg_23.02.23.jpg'),
(52, 'Sfiha Toshka', '', 3.25, NULL, NULL, 3, 1, 'Sfiha Toshka.jpg_23.02.23.jpg'),
(53, 'Bed Ganam', '', 4.5, NULL, NULL, 3, 1, 'Bed Ghanam.jpg_23.02.23.jpg'),
(54, 'Jaweneh', '', 2.5, NULL, NULL, 3, 1, 'jawaneh.jpg_23.02.23.jpg'),
(55, 'Sawda Dajaj', '', 3.5, NULL, NULL, 3, 1, 'sawda dajaj.jpg_23.02.23.jpg'),
(56, 'Homos bel Lahme', '', 4.5, NULL, NULL, 3, 1, 'homos bil Lahme.jpg_23.02.23.jpg'),
(57, 'Makanek', '', 4, NULL, NULL, 3, 1, 'makanek.jpg_23.02.23.jpg'),
(58, 'Kafta debes remin', '', 4, NULL, NULL, 3, 1, 'Kafta Debes Reman.jpg_23.02.23.jpg'),
(59, 'lahme bel feter', '', 4.75, NULL, NULL, 3, 1, 'Lahmeh Bel Feter.jpg_23.02.23.jpg'),
(60, 'Sojok', '', 4, NULL, NULL, 3, 1, 'Sojok.jpg_23.02.23.jpg'),
(61, 'Sawda Ganam', '', 4.75, NULL, NULL, 3, 1, 'Sawda Ghanam.jpg_23.02.23.jpg'),
(62, 'Kebbe Lahme (1pec)', '', 2.5, NULL, NULL, 3, 1, 'kibbeh lahme.jpg_23.02.23.jpg'),
(63, 'Khyar w Laban', '', 1.75, NULL, NULL, 4, 1, 'Khiyar W Laban.jpg_23.02.23.jpg'),
(64, 'Tabouleh', '', 2, NULL, NULL, 4, 1, 'tabouleh.jpg_23.02.23.jpg'),
(65, 'Fatouch', '', 2, NULL, NULL, 4, 1, 'fattouch.jpg_23.02.23.jpg'),
(66, 'arabic salad', '', 2, NULL, NULL, 4, 1, 'Arabic Salad.jpg_23.02.23.jpg'),
(67, 'chmandar salad', '', 2, NULL, NULL, 4, 1, 'chmandar salad.jpg_23.02.23.jpg'),
(68, 'Mayo salad', '', 2, NULL, NULL, 4, 1, 'Mayo Salad.jpg_23.02.23.jpg'),
(69, 'Rocca w za3tar', '', 2, NULL, NULL, 4, 1, 'Rocca W Zaatar.jpg_23.02.23.jpg'),
(70, 'Ana wayak', '', 2, NULL, NULL, 4, 1, 'ana wayak salad.jpg_23.02.23.jpg'),
(71, 'Khodra', '', 1.75, NULL, NULL, 4, 1, 'khodra.jpg_23.02.23.jpg'),
(72, 'Samkeh Harra', '', 4.75, NULL, NULL, 5, 1, 'samkeh harra.jpg_23.02.23.jpg'),
(73, 'Habra nayeh', '', 4.5, NULL, NULL, 6, 1, 'habra nayeh.jpg_23.02.23.jpg'),
(74, 'Marehneh', '', 4.5, NULL, NULL, 6, 1, 'habra.jpg_23.02.23.jpg'),
(75, 'Kebbe Nayeh', '', 4.5, NULL, NULL, 6, 1, 'kibbeh nayeh.jpg_23.02.23.jpg'),
(76, 'sawda Nayeh', '', 5, NULL, NULL, 6, 1, 'Sawda Nayeh.jpg_23.02.23.jpg'),
(77, 'Mashawi Mshakal (300 g)', '', 7.5, NULL, NULL, 7, 1, 'Mashawi Mshakal.jpg_23.02.23.jpg'),
(78, 'Shekaf (300 g)', '', 9.25, NULL, NULL, 7, 1, 'Shekaf.jpg_23.02.23.jpg'),
(79, 'Kafta (300 g)', '', 8, NULL, NULL, 7, 1, 'Kafta.jpg_23.02.23.jpg'),
(80, 'Tawook (300 g)', '', 7, NULL, NULL, 7, 1, 'Tawook.jpg_23.02.23.jpg'),
(81, 'Farouj (0.5)', '', 8.75, NULL, NULL, 7, 1, 'Farouj.jfif_23.02.23.jfif'),
(82, 'Kabse Dajaj', '', 6.5, NULL, NULL, 7, 1, 'kabse dajaj.jpg_23.02.23.jpg'),
(83, 'Mansaf Lahmeh', '', 7.25, NULL, NULL, 7, 1, 'mansaf lahme.jpg_23.02.23.jpg'),
(84, 'Sayediyeh', '', 7.25, NULL, NULL, 7, 1, 'Sayadieh.jpg_23.02.23.jpg'),
(85, 'Mshakal (0.5 Kg)', '', 11, NULL, NULL, 8, 1, 'Mshakal.jpg_23.02.23.jpg'),
(86, 'Kafta (0.5 Kg)', '', 12, NULL, NULL, 8, 1, 'Kafta.jpg_23.02.23.jpg'),
(87, 'Shekaf (0.5 Kg)', '', 15, NULL, NULL, 8, 1, 'Shekaf.jpg_23.02.23.jpg'),
(88, 'Tawook', '', 9.5, NULL, NULL, 8, 1, 'Tawook.jpg_23.02.23.jpg'),
(89, 'Kabab adana', '', 6.5, NULL, NULL, 9, 1, 'Kabab Adana.jpg_23.02.23.jpg'),
(90, 'Kabab orafail', '', 6, NULL, NULL, 9, 1, 'kabab orfail.jpg_23.02.23.jpg'),
(91, 'Kabab Istanbuli', '', 6, NULL, NULL, 9, 1, 'kabab istanbul.jpg_23.02.23.jpg'),
(92, 'Kabab bel Meter', '', 22, NULL, NULL, 9, 1, 'Kabab Bel Meter.jpg_23.02.23.jpg'),
(93, '2.5 Meter Kebeb', '', 45, NULL, NULL, 9, 1, '2,5 meter kebeb.jpg_23.02.23.jpg'),
(94, 'spagetti Meat balls', '', 4.5, NULL, NULL, 10, 1, 'Spaghetti Meat Balls.jpg_23.02.23.jpg'),
(95, 'chicken nuggets', '', 4.5, NULL, NULL, 10, 1, 'Chicken Nuggets.jfif_23.02.23.jfif'),
(96, 'tawook Baby Plates', '', 4.75, NULL, NULL, 10, 1, 'Tawook Baby Plate.jpg_23.02.23.jpg'),
(97, 'fresh carrowt', '', 1.25, NULL, NULL, 11, 1, 'fresh carrot.jpg_23.02.23.jpg'),
(98, 'fresh apple', '', 1.25, NULL, NULL, 11, 1, 'fresh apple.jpg_23.02.23.jpg'),
(99, 'fresh pomegranate', '', 1.25, NULL, NULL, 11, 1, 'Fresh Pomegranate.jpg_23.02.23.jpg'),
(100, 'fresh Lemonade', '', 1.25, NULL, NULL, 11, 1, 'fresh lemonade.jpg_23.02.23.jpg'),
(101, 'lemon mints', '', 1.5, NULL, NULL, 11, 1, 'Lemon Mint.jpg_23.02.23.jpg'),
(102, 'orange juice', '', 1.25, NULL, NULL, 11, 1, 'orange juice.jpg_23.02.23.jpg'),
(103, 'Strawbary fresh', '', 2, NULL, NULL, 11, 1, 'strawberry fresh.jpeg_23.02.23.jpeg'),
(104, 'Kiwi fresh', '', 2, NULL, NULL, 11, 1, 'kiwi fresh.jpg_23.02.23.jpg'),
(105, 'Pineapple fresh', '', 2, NULL, NULL, 11, 1, 'Pineapple Fresh.avif_23.02.23.avif'),
(106, 'Jamaica', '', 2, NULL, NULL, 11, 1, 'jamaica.jpg_23.02.23.jpg'),
(107, 'Ice tea', '', 1.75, NULL, NULL, 11, 1, 'ice tea.jpg_23.02.23.jpg'),
(108, 'Soft Drink', '', 0.75, NULL, NULL, 11, 1, 'Soft Drinks.jpeg_23.02.23.jpeg'),
(109, 'seven up with grenadine', '', 1.5, NULL, NULL, 11, 1, 'seven up with grenadine.jpg_23.02.23.jpg'),
(110, 'mined soda', '', 1.5, NULL, NULL, 11, 1, 'minted soda.jpg_23.02.23.jpg'),
(111, 'xxl', '', 1.25, NULL, NULL, 11, 1, 'xxl.jfif_23.02.23.jfif'),
(112, 'xxl with grenadine', '', 1.75, NULL, NULL, 11, 1, 'xxl with grenadine.jpg_23.02.23.jpg'),
(113, 'Laziza', '', 1.25, NULL, NULL, 11, 1, 'laziza.jpg_23.02.23.jpg'),
(114, 'water big', '', 0.75, NULL, NULL, 11, 1, 'water big.jpg_23.02.23.jpg'),
(115, 'Turkish coffe', '', 0.55, NULL, NULL, 12, 1, 'Turkish Coffee.jpg_23.02.24.jpg'),
(116, 'Espresso', '', 0.75, NULL, NULL, 12, 1, 'Espresso.jpg_23.02.24.jpg'),
(117, 'Double Espresso', '', 0.75, NULL, NULL, 12, 1, 'Double Espresso.jpg_23.02.24.jpg'),
(118, 'Cappuccino', '', 1.25, NULL, NULL, 12, 1, 'Cappuccino.jpg_23.02.24.jpg'),
(119, 'Cafe latte', '', 1.5, NULL, NULL, 12, 1, 'cafe latte.jpg_23.02.24.jpg'),
(120, 'nescafe milk', '', 1.25, NULL, NULL, 12, 1, 'Nescafe Milk.jpg_23.02.24.jpg'),
(121, 'Hot choclate', '', 1.5, NULL, NULL, 12, 1, 'Hot Chocolate.jpg_23.02.24.jpg'),
(122, 'Tea', '', 0.5, NULL, NULL, 12, 1, 'tea.jpg_23.02.24.jpg'),
(123, 'Just T', '', 0.75, NULL, NULL, 12, 1, 'Just T.jpg_23.02.24.jpg'),
(124, 'gingers', '', 0.75, NULL, NULL, 12, 1, 'gingers.jpg_23.02.24.jpg'),
(125, 'sahlab', '', 1, NULL, NULL, 12, 1, 'sahlab.jpg_23.02.24.jpg'),
(126, 'ابريق شاي صغير', '', 1.5, NULL, NULL, 12, 1, 'ابريق شاي صغير.jpg_23.02.24.jpg'),
(127, 'ابريق شاي كبير', '', 2, NULL, NULL, 12, 1, 'ابريق شاي كبير.jpg_23.02.24.jpg'),
(128, 'strwberry Milkshake', '', 2.75, NULL, NULL, 13, 1, 'strawberry milshake.jpg_23.02.24.jpg'),
(129, 'choclate Milkshake', '', 2.75, NULL, NULL, 13, 1, 'chocolate Milkshake.jpg_23.02.24.jpg'),
(130, 'vanilia Milkshake', '', 2.75, NULL, NULL, 13, 1, 'Vanilla Milkshake.jpg_23.02.24.jpg'),
(131, 'Oreo shake', '', 2.75, NULL, NULL, 13, 1, 'oreo shake.jpg_23.02.24.jpg'),
(132, 'Banana strawberry Milkshake', '', 2.75, NULL, NULL, 13, 1, 'banana milkshake.jpg_23.02.24.jpg'),
(133, 'ice Mochaccino', '', 2.75, NULL, NULL, 13, 1, 'Ice mochaccino.jpg_23.02.24.jpg'),
(134, 'ice Frappuccino', '', 2.75, NULL, NULL, 13, 1, 'ice Frappuccino.jpg_23.02.24.jpg'),
(135, 'Lotus shake', '', 3, NULL, NULL, 13, 1, 'Lotus shake.jpg_23.02.24.jpg'),
(136, 'Cup (3 scoop)', '', 2.75, NULL, NULL, 14, 1, 'ice cream 3.jpg_23.02.24.jpg'),
(137, 'Cup extra (3 scoop with cream)', '', 3, NULL, NULL, 14, 1, 'ice cream extra.jpg_23.02.24.jpg'),
(138, 'chocolate Mou', '', 3, NULL, NULL, 14, 1, 'Chocolate Mou.jpg_23.02.24.jpg'),
(139, 'Fraise Mou', '', 3, NULL, NULL, 14, 1, 'Fraise Mou.jpg_23.02.24.jpg'),
(140, 'all berries', '', 2.5, NULL, NULL, 15, 1, 'all berries.avif_23.02.24.avif'),
(141, 'Mango', '', 2.5, NULL, NULL, 15, 1, 'mango.jpg_23.02.24.jpg'),
(142, 'peach', '', 2.5, NULL, NULL, 15, 1, 'peach.jpg_23.02.24.jpg'),
(143, 'Oreo cheese cake', '', 3.25, NULL, NULL, 16, 1, 'oreo cheese cake.jpg_23.02.24.jpg'),
(144, 'strawberry cheese cake', '', 3.25, NULL, NULL, 16, 1, 'Strawberry Cheese Cake.jpg_23.02.24.jpg'),
(145, 'Lotus cake', '', 3.25, NULL, NULL, 16, 1, 'Lotus Cake.jpg_23.02.24.jpg'),
(146, 'tiramisu', '', 3.25, NULL, NULL, 16, 1, 'tiramisu.jpg_23.02.24.jpg'),
(147, 'peanut Butter cake', '', 3, NULL, NULL, 16, 1, 'peanut butter cake.jpg_23.02.24.jpg'),
(148, 'chocolate cake', '', 3, NULL, NULL, 16, 1, 'chocolate cake.jpg_23.02.24.jpg'),
(149, 'fondant with vanillia scoop', '', 3.25, NULL, NULL, 16, 1, 'fondant with vanilla scoop.avif_23.02.24.avif'),
(150, 'brownies with vanillia scoop', '', 3.5, NULL, NULL, 16, 1, 'brownies with vanilla scoop.jpg_23.02.24.jpg'),
(151, 'Gazal lahbab', '', 3, NULL, NULL, 16, 1, 'ghazal lahbeb.jfif_23.02.24.jfif'),
(152, 'turkush kunefe', '', 4, NULL, NULL, 17, 1, 'turkish kunefe.jpg_23.02.24.jpg'),
(153, 'sutlac', '', 1.75, NULL, NULL, 17, 1, 'sutlac.jpg_23.02.24.jpg'),
(154, 'm3assal all flavors', '', 3, NULL, NULL, 18, 1, 'M3assal All Flavors.jpg_23.02.24.jpg'),
(155, 'Jabali', '', 3.5, NULL, '2023-05-16 14:53:06', 18, 1, 'jabali.jpg_23.02.24.jpg'),
(156, 'asfahani', '', 3.5, NULL, NULL, 18, 1, 'Asfahani.png_23.02.24.png'),
(157, 'special m3assal (Bumaly)', '', 6, NULL, NULL, 18, 1, 'special.jpg_23.02.24.jpg'),
(158, 'terki', '', 3.25, NULL, NULL, 18, 1, 'terki.jpg_23.02.24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_10_130639_categories', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupID` smallint(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `groupID`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'codebeast', 'codebeast60@gmail.com', '2023-05-15 18:59:02', '$2y$10$cPpFSIQcmIh5UdEYyECC5OED58.dVfDgAPyiRzCTIP8Z7BeeEJtTG', 1, NULL, '2023-05-16 18:59:02', '2023-05-15 18:59:02'),
(2, 'Hassan', 'arabh60@gmail.com', NULL, '$2y$10$1hjGEmJsOY5AJujqjbBjUeDyeHa6/7FuI2U.6Nn/FYxbj0rDHSrHq', NULL, NULL, '2023-05-17 07:57:35', '2023-05-17 07:57:35'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$jxyqEaNS8wVXTME7Q9G42OsOjynWzLWFfb6gCARTllwceLnBlU9OG', 1, NULL, '2023-05-17 08:03:14', '2023-05-17 08:03:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `member_1` (`Member_id`),
  ADD KEY `category_1` (`Cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `category_1` FOREIGN KEY (`Cat_id`) REFERENCES `categories` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_1` FOREIGN KEY (`Member_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
