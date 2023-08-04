-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Johan Cartwright', '67316 River Manor\nMarquardthaven, KY 63588-1054', '1586889948', NULL, NULL),
(2, 'Prof. Marlee Olson V', '471 Dach Unions Apt. 619\nWest Jadyn, MA 87815', '7114692486', NULL, NULL),
(3, 'Art Mosciski II', '47759 Marjorie Parkway Apt. 054\nPouroston, VA 16853-4173', '3104268273', NULL, NULL),
(4, 'Prof. Talon Conn', '9680 Balistreri Heights Apt. 047\nNorth Monserrate, CT 52862', '8556133260', NULL, NULL),
(5, 'Kendra Moore', '80947 Vincenza Knolls Suite 293\nNew Annahaven, CT 96958-5158', '4922576081', NULL, NULL),
(6, 'Felicia Moore DVM', '129 Kiel Knoll Suite 192\nDickinsonshire, ND 57328-4675', '3813939467', NULL, NULL),
(7, 'Mustafa Terry', '835 Floyd Station Suite 803\nAnkundingview, IL 47660-6620', '5656380792', NULL, NULL),
(8, 'Euna Cummings', '96392 Johns Points\nRuthietown, AZ 03991', '8025452169', NULL, NULL),
(9, 'Mr. Victor Simonis V', '8608 Cyrus Ports\nHagenesberg, DE 06685-4720', '7099741411', NULL, NULL),
(10, 'Lillian Kassulke', '218 Luigi Overpass\nDuBuquefort, TN 17573-6359', '5182775625', NULL, NULL),
(11, 'Darrion Orn', '96696 Alyson Port\nJayneberg, IA 81584', '1665213193', NULL, NULL),
(12, 'Rebekah Collins V', '4536 Mayert Island\nBashirianland, VA 05227', '0753740191', NULL, NULL),
(13, 'Ottilie Hane', '6861 Ferry Green Suite 602\nAbigaylemouth, NC 84140', '0567638943', NULL, NULL),
(14, 'Frieda Mann', '3134 Williamson Spring Apt. 673\nDedricberg, NY 88231-9035', '9697708782', NULL, NULL),
(15, 'Prof. Marjorie Berge V', '177 Barry Isle\nPerrymouth, AZ 26213', '8546235130', NULL, NULL),
(16, 'Prof. Caitlyn Bernier MD', '3189 Eugene Prairie\nNorth Evalyn, IA 65416', '9054562459', NULL, NULL),
(17, 'Elsie Lind V', '7822 Era Park\nSkylaport, MT 91775-8060', '8086777976', NULL, NULL),
(18, 'Meda Streich DVM', '4714 Jed Ports\nElinorville, SD 77141-0317', '5278899020', NULL, NULL),
(19, 'Sim Hickle II', '3113 Pagac Plaza\nNew Eltachester, DC 85606-5991', '3921915258', NULL, NULL),
(20, 'Cheyanne Runolfsson III', '62625 Schultz Turnpike Suite 709\nAnyamouth, AR 02526-5229', '8565980980', NULL, NULL),
(21, 'Joana Donnelly', '30058 Ivy Landing Suite 962\nLueilwitzmouth, KY 42843-6009', '2829422941', NULL, NULL),
(22, 'Albert Walsh DVM', '852 Erik Pass Suite 306\nNew Helmertown, OH 39811', '9593313751', NULL, NULL),
(23, 'Nicholaus Rosenbaum', '826 Daniella Ports Apt. 212\nSouth Jacquelynchester, NY 29728', '7918793001', NULL, NULL),
(24, 'Nicola Russel', '9231 Auer Lane\nBoydview, LA 67795', '4737936507', NULL, NULL),
(25, 'Noe Davis', '548 McGlynn Parkway Apt. 482\nPort Teaganton, RI 23103', '7346074131', NULL, NULL),
(26, 'Daniela Daniel', '415 Simeon Harbors\nNorth Ettie, MI 88911-8337', '3807573348', NULL, NULL),
(27, 'Vivianne Mitchell DVM', '51836 Klein Green Suite 336\nWest Martin, VA 76217-3678', '3278318806', NULL, NULL),
(28, 'Colby Halvorson II', '6985 Rosamond Point Suite 375\nEast Garthtown, TN 31576-5181', '3426564043', NULL, NULL),
(29, 'Rhoda Osinski', '7195 Romaine Hollow\nCobyport, LA 06454', '5908217195', NULL, NULL),
(30, 'Dr. Nelle Stroman DDS', '8215 Jeffery Loaf Apt. 866\nNew Briana, OH 19454', '2966292777', NULL, NULL),
(31, 'Dax Buckridge', '530 Parisian Heights\nPort Garett, CT 70069', '1738564501', NULL, NULL),
(32, 'Daryl Blick', '59028 Astrid River Apt. 724\nTreutelbury, MN 82607', '9623584541', NULL, NULL),
(33, 'Carmen Crist MD', '853 Okuneva Flat\nJacintofurt, CO 85827-3028', '7465808628', NULL, NULL),
(34, 'Lexus Brekke', '20226 Macey Lake\nMillertown, MS 19120', '5860712669', NULL, NULL),
(35, 'Gerda Cormier', '4971 Isadore Forge\nNew Vinniefort, DE 46845-0394', '9963394572', NULL, NULL),
(36, 'Mr. Brooks Schuster I', '500 Effertz Trafficway\nEast Eugenechester, DE 91368-4909', '4363410184', NULL, NULL),
(37, 'Lucy Wilderman', '95567 Pouros Pass Apt. 794\nNew Jessycaville, MS 63271-0668', '6239850455', NULL, NULL),
(38, 'Amaya Mills', '2244 Edward Gateway Suite 005\nLake Susanstad, AL 66873', '6244787616', NULL, NULL),
(39, 'Christophe Hermann', '793 Elizabeth Mission\nPort Anitamouth, UT 57194-2755', '7373218541', NULL, NULL),
(40, 'Ezra Streich', '5046 Virgil Landing\nStiedemannborough, CT 20692', '7836105340', NULL, NULL),
(41, 'Ellen Mann', '7021 Turner Mountain Apt. 347\nReingermouth, MO 07123', '3315547127', NULL, NULL),
(42, 'Miss Isabelle Lakin', '75089 Heather Vista\nStantonshire, WV 79132', '0626519245', NULL, NULL),
(43, 'Verona Carroll', '5708 Kerluke Road Apt. 933\nLake Bud, RI 74119-7797', '9952833530', NULL, NULL),
(44, 'Darren Brekke', '29839 Zakary Vista\nLake Jerry, NV 03398', '6373372379', NULL, NULL),
(45, 'Pattie Grant', '6292 Devin Roads Apt. 664\nPfefferville, NY 48767-2609', '5380649143', NULL, NULL),
(46, 'Miss Leann Cole', '148 Hansen Highway\nNorth Mayeton, ND 91182', '9872656978', NULL, NULL),
(47, 'Miss Briana Raynor', '10919 Maida View Apt. 614\nLake Bradenmouth, NM 96587-9204', '1260180560', NULL, NULL),
(48, 'Marc Bechtelar I', '80426 Hansen Shore Suite 910\nWest Milomouth, NM 21713', '2919892393', NULL, NULL),
(49, 'Michaela Bogan', '7687 Kirstin Estate\nAufderharport, WY 51736-3102', '1501214046', NULL, NULL),
(50, 'Lulu Schimmel Jr.', '100 Langosh Mills Apt. 557\nPort Shainamouth, SD 27717', '2199020166', NULL, NULL),
(51, 'PHP', 'Hà Nội', '0123456789', '2023-08-04 02:53:58', '2023-08-04 02:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_04_090437_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
