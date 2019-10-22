-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 10:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aseamenclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_blogs`
--

CREATE TABLE `admin_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `photo`, `link`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(3, '5cb36f4466784_download (1).jpg', 'http://localhost/promotion/public/', '2019-04-15', '2019-12-29', '2019-04-14 11:05:00', '2019-04-14 11:05:00'),
(4, '5cb36f87df502_download (2).jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-12-29', '2019-04-14 11:06:07', '2019-04-14 11:06:07'),
(5, '5cb36f99058cc_download (3).jpg', 'http://localhost/promotion/public/', '2019-04-15', '2019-12-29', '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(6, '5cb36fa8def51_download (4).jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-12-29', '2019-04-14 11:06:40', '2019-04-14 11:06:40'),
(7, '5cb36fba9e88e_download.jpg', 'http://localhost/renomyanmar/public/', '2019-04-16', '2019-12-29', '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(8, '5cb36fcc04da0_download.png', 'http://localhost/promotion/public/', '2019-04-14', '2019-12-29', '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(9, '5cb36fdd9ec63_images (1).jpg', 'http://localhost/promotion/public/', '2019-04-15', '2019-12-29', '2019-04-14 11:07:33', '2019-04-14 11:07:33'),
(10, '5cb3704164ccb_download (1).jpg', 'http://localhost/promotion/public/', '2019-04-01', '2019-12-29', '2019-04-14 11:09:13', '2019-04-14 11:09:13'),
(11, '5cb37050ccb44_images (2).jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-12-29', '2019-04-14 11:09:28', '2019-04-14 11:09:28'),
(12, '5cb370619ec47_images.jpg', 'http://localhost/renomyanmar/public/', '2019-04-14', '2019-12-29', '2019-04-14 11:09:45', '2019-04-14 11:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `ads_webpages`
--

CREATE TABLE `ads_webpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `webpage_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_webpages`
--

INSERT INTO `ads_webpages` (`id`, `webpage_id`, `ads_id`, `created_at`, `updated_at`) VALUES
(5, 1, 3, '2019-04-14 11:05:00', '2019-04-14 11:05:00'),
(6, 2, 3, '2019-04-14 11:05:00', '2019-04-14 11:05:00'),
(7, 1, 4, '2019-04-14 11:06:07', '2019-04-14 11:06:07'),
(8, 2, 4, '2019-04-14 11:06:08', '2019-04-14 11:06:08'),
(9, 3, 4, '2019-04-14 11:06:08', '2019-04-14 11:06:08'),
(10, 1, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(11, 2, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(12, 3, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(13, 4, 5, '2019-04-14 11:06:25', '2019-04-14 11:06:25'),
(14, 1, 6, '2019-04-14 11:06:40', '2019-04-14 11:06:40'),
(15, 2, 6, '2019-04-14 11:06:41', '2019-04-14 11:06:41'),
(16, 3, 6, '2019-04-14 11:06:41', '2019-04-14 11:06:41'),
(17, 4, 6, '2019-04-14 11:06:41', '2019-04-14 11:06:41'),
(18, 1, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(19, 2, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(20, 3, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(21, 4, 7, '2019-04-14 11:06:58', '2019-04-14 11:06:58'),
(22, 1, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(23, 2, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(24, 3, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(25, 4, 8, '2019-04-14 11:07:16', '2019-04-14 11:07:16'),
(26, 1, 9, '2019-04-14 11:07:33', '2019-04-14 11:07:33'),
(27, 2, 9, '2019-04-14 11:07:33', '2019-04-14 11:07:33'),
(28, 3, 9, '2019-04-14 11:07:34', '2019-04-14 11:07:34'),
(29, 4, 9, '2019-04-14 11:07:34', '2019-04-14 11:07:34'),
(30, 1, 10, '2019-04-14 11:09:13', '2019-04-14 11:09:13'),
(31, 1, 11, '2019-04-14 11:09:28', '2019-04-14 11:09:28'),
(32, 2, 11, '2019-04-14 11:09:28', '2019-04-14 11:09:28'),
(33, 3, 11, '2019-04-14 11:09:29', '2019-04-14 11:09:29'),
(34, 4, 11, '2019-04-14 11:09:29', '2019-04-14 11:09:29'),
(35, 5, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
(36, 2, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
(37, 3, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
(38, 4, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `post_type`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'training_post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(3, 1, 1, 'normal_post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(4, 4, 2, 'normal_post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(5, 5, 6, 'normal_post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(6, 3, 1, 'job_post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(7, 1, 13, 'normal_post', 'hello', '2019-10-14 22:51:45', '2019-10-14 22:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `contact_person_name`, `position`, `phone`, `email`, `business_type`, `address`, `street`, `city`, `state`, `country_id`, `website_url`, `referral_code`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'zayy', 'testing', '09428766473', 'testing@gmail.com', 'Shipping Company', 'yangon', 'testing', 'testing', 'testing', 152, 'http://www.website.com', '12345', '2019-08-15 01:37:32', '2019-08-15 01:37:32'),
(2, 'Google', 'Mr.Apple', 'Developer', '09877788888', 'google@gmail.com', 'SRPS/Crewing Company', 'Myitkyina , Myanmar', 'Bla', 'MKN', 'Kachin', 75, 'https://www.joox.com/mm/mymusic/1549075625', '552211', '2019-10-13 23:16:23', '2019-10-13 23:16:23'),
(4, 'Apple', 'YeYint', 'WebDeveloper', '098776677', 'apple@gmail.com', 'SRPS/Crewing Company', 'Myitkyina', 'test strees', 'mkn', 'kachin', 1, 'https://www.google.com', '1001', '2019-10-14 04:19:33', '2019-10-14 04:19:33'),
(5, 'AA', 'BB', 'Department Leader', '09123456789', 'aa@gmail.com', 'Customize', 'yangon', 'baho', 'yangon', 'bama', 152, 'https://www.google.com', '100101', '2019-10-16 08:25:32', '2019-10-16 08:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `company_photos`
--

CREATE TABLE `company_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_image.png',
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Zayy', '09978699298', 'zay0935@gmail.com', 'Hay! I miss you.', '2019-03-29 01:05:58', '2019-03-29 01:05:58'),
(2, 'Lynn Lynn', '09771672511', 'linninn12@yahoo.com', 'This is Testing message.', '2019-03-29 01:08:54', '2019-03-29 01:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'category1', NULL, NULL),
(2, 'cateogory2', NULL, NULL),
(3, 'category3', NULL, NULL),
(4, 'category4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course__course_categories`
--

CREATE TABLE `course__course_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freemen`
--

CREATE TABLE `freemen` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freemen`
--

INSERT INTO `freemen` (`id`, `name`, `occupation`, `id_card`, `front_photo`, `back_photo`, `phone`, `address`, `street`, `city`, `state`, `email`, `referral_code`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'testing', 'testing123', 'http://localhost/asia_seaman_club/public/upload/freeman_photo/5d5675fe23f2c_Chrysanthemum.jpg', 'http://localhost/asia_seaman_club/public/upload/freeman_photo/5d5675fe242b6_Desert.jpg', '09978699298', 'sasdasdasda', 'testing', 'testing', 'testing', 'lynn9249@gmail.com', '12345', '2019-08-16 02:53:10', '2019-08-16 02:53:10'),
(2, 'zayy', 'sdasdasd', 'dasd212', 'http://localhost/asia_seaman_club/public/upload/freeman_photo/5d57ac6843835_Desert.jpg', 'http://localhost/asia_seaman_club/public/upload/freeman_photo/5d57ac6843c0d_Desert.jpg', '09978699298', 'sdfsdfsd', 'sdfsdf', 'testing', 'testing', 'fdfd@gmail.com', '12345', '2019-08-17 00:57:36', '2019-08-17 00:57:36'),
(3, 'YYK', 'aaaaa', 'fdfdfff', 'dsdsd', 'dsdsdsdsd', '45454', 'wwwwww', 'aaaa', 'cccc', 'sssss', 'eeeee', 'rrrr', '2019-10-14 09:08:30', '2019-10-14 09:08:30'),
(4, 'freeman AA', 'testing', '11111', 'http://aseamenclub.com/upload/freeman_photo/5da7359c86ea4_bear.png', 'http://aseamenclub.com/upload/freeman_photo/5da7359c8711f_bear_2.png', '09123456789', 'yangon', 'baho', 'yangon', 'bama', 'freemanaa@gmail.com', '100101', '2019-10-16 08:52:04', '2019-10-16 08:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `job_positions`
--

CREATE TABLE `job_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_positions`
--

INSERT INTO `job_positions` (`id`, `header`, `position_name`, `created_at`, `updated_at`) VALUES
(1, 'Deck', 'Master', NULL, NULL),
(2, 'Deck', 'Chief Officer', NULL, NULL),
(3, 'Deck', 'Second Officer', NULL, NULL),
(4, 'Deck', 'Third Officer', NULL, NULL),
(5, 'Deck', 'Senior DPO', NULL, NULL),
(6, 'Deck', 'Junior DPO', NULL, NULL),
(7, 'Deck', 'DPO(Dynamic Positioning Operator', NULL, NULL),
(8, 'Deck', 'Trainee Officer', NULL, NULL),
(9, 'Deck', 'AB(Able Seaman)', NULL, NULL),
(10, 'Deck', 'AB/Welder', NULL, NULL),
(11, 'Deck', 'Deck Cadet', NULL, NULL),
(12, 'Deck', 'Cadet/Trainee', NULL, NULL),
(13, 'Deck', 'Cook', NULL, NULL),
(14, 'Deck', 'Second Cook', NULL, NULL),
(15, 'Deck', 'Mess boy', NULL, NULL),
(16, 'Deck', 'AB/Cook', NULL, NULL),
(17, 'Deck', 'Crane Operator', NULL, NULL),
(18, 'Deck', 'Dredge master', NULL, NULL),
(19, 'Deck', 'Driver', NULL, NULL),
(20, 'Deck', 'Pump man', NULL, NULL),
(21, 'Engine', 'Chief Engineer', NULL, NULL),
(22, 'Engine', 'Single Engineer', NULL, NULL),
(23, 'Enging', 'Second Engineer', NULL, NULL),
(24, 'Engine', 'Third Engineer', NULL, NULL),
(25, 'Engine', 'Fourth Engineer', NULL, NULL),
(26, 'Engine', 'Watch Engineer', NULL, NULL),
(27, 'Engine', 'Ref.Engineer', NULL, NULL),
(28, 'Engine', 'Gas Engineer', NULL, NULL),
(29, 'Engine', 'Trainee', NULL, NULL),
(30, 'Engine', 'Oiler', NULL, NULL),
(31, 'Engine', 'ETO', NULL, NULL),
(32, 'Engine', 'Electrician', NULL, NULL),
(33, 'Engine', 'A.E(Assistant Electrical Engineer)', NULL, NULL),
(34, 'Engine', 'Motorman/Oiler', NULL, NULL),
(35, 'Engine', 'Wiper', NULL, NULL),
(36, 'Engine', 'Motorman/Electrician', NULL, NULL),
(37, 'Engine', 'Engine cadet', NULL, NULL),
(38, 'Engine', 'Fitter/Welder', NULL, NULL),
(39, 'Engine', 'Turner', NULL, NULL),
(40, 'Engine', 'Superintendent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_position_id` int(11) NOT NULL,
  `vancant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_type_id` int(11) NOT NULL,
  `build_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dwt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_engine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crew_onboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sailing_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `post_start_date` date NOT NULL,
  `post_end_date` date NOT NULL,
  `post_start_time` time NOT NULL,
  `post_end_time` time NOT NULL,
  `post_duration_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2019_01_11_174825_create_companies_table', 1),
(3, '2019_01_11_175355_create_teachers_table', 1),
(4, '2019_01_11_175749_create_seafarers_table', 1),
(5, '2019_01_11_190618_create_accounts_table', 1),
(6, '2019_01_14_033928_create_courses_table', 2),
(7, '2019_01_14_034906_create_courses_table', 3),
(8, '2019_01_14_035401_create_course_categories_table', 4),
(9, '2019_01_14_040504_create_course__course_categories_table', 5),
(10, '2019_01_16_133930_create_admin_blogs_table', 6),
(11, '2019_02_12_090757_create_company_photos_table', 7),
(12, '2019_02_12_161532_create_ship_types_table', 8),
(13, '2019_02_12_163806_create_job_posts_table', 9),
(14, '2019_02_13_083400_create_training_posts_table', 10),
(15, '2019_02_15_080902_create_seafarer_requests_table', 11),
(16, '2019_02_25_142203_create_testimonials_table', 12),
(17, '2019_03_19_102036_create_freeagents_table', 13),
(18, '2019_03_22_042820_create_ads_table', 14),
(19, '2019_03_29_071530_create_contacts_table', 15),
(20, '2019_04_14_170934_create_webpages_table', 16),
(21, '2019_04_14_171211_create_ads_webpages_table', 16),
(22, '2019_08_14_075627_create_countries_table', 17),
(23, '2019_08_14_093843_create_freemen_table', 18),
(24, '2019_08_15_065612_create_job_positions_table', 19),
(25, '2019_08_15_070120_create_vessel_types_table', 20),
(26, '2019_08_16_074818_create_normal_posts_table', 21),
(27, '2019_08_16_154932_create_training_posts_table', 22),
(28, '2019_08_16_155540_create_training_posts_table', 23),
(29, '2019_08_16_180655_create_comments_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `normal_posts`
--

CREATE TABLE `normal_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seafarers`
--

CREATE TABLE `seafarers` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desired_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizanship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seafarer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seafarers`
--

INSERT INTO `seafarers` (`id`, `employee_name`, `desired_salary`, `citizanship`, `phone`, `email`, `seafarer_type`, `english_level`, `rank`, `birthday`, `place_of_birth`, `country_of_residence`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', NULL, NULL, '09978699298', 'mgmg@gmail.com', 'seafarer', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-16 02:58:58', '2019-08-16 02:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `seafarer_requests`
--

CREATE TABLE `seafarer_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `seafarer_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seafarer_requests`
--

INSERT INTO `seafarer_requests` (`id`, `company_id`, `seafarer_id`, `post_id`, `post_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 'job_post', '2019-08-17 01:44:37', '2019-08-17 01:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `ship_types`
--

CREATE TABLE `ship_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_types`
--

INSERT INTO `ship_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cargo Ships', NULL, NULL),
(2, 'RoRo (Roll on Roll Off)', NULL, NULL),
(3, 'Tankers', NULL, NULL),
(4, 'Passenger Ships', NULL, NULL),
(5, 'Fishing Vessel', NULL, NULL),
(6, 'High Speed Craft', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `photo`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, '5c7414be67bca_Penguins.jpg', 'Testimonial 1', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 08:30:10', '2019-02-25 09:45:58'),
(3, '5c7403087aa45_Tulips.jpg', 'Testimonial 5', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 08:30:24', '2019-02-25 09:46:42'),
(4, '5c740e8748fb6_Hydrangeas.jpg', 'Testimonial 4', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 09:19:27', '2019-02-25 09:47:49'),
(5, '5c74151a1d2f5_Jellyfish.jpg', 'Testimonial 2', 'Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa', '2019-02-25 09:47:30', '2019-02-25 09:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `training_posts`
--

CREATE TABLE `training_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `training_for` text COLLATE utf8mb4_unicode_ci,
  `requirement` text COLLATE utf8mb4_unicode_ci,
  `duration` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_fee_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enroll_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_banking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benificiary_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `post_duration_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_id` int(11) NOT NULL,
  `api_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `type`, `data_id`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', NULL, '$2y$10$/gV.IvigNQ3wamZdc7nPkuBDobVzkrsKaNZxLxgf3O7K29L1s.iXG', 'admin', 0, 'k6d4HHZnHCzUJwjhygtOP86hAhcvjU4D14fHTiFpHpkAzEQxNtmHFybqGXgf', '2019-08-15 01:33:37', '2019-08-15 01:33:37'),
(3, 'testing@gmail.com', NULL, '$2y$10$bnGJh5Hqt9MBxgNZMjOW/OmGnlPMrMH8WGK5wWLezilKOx376RmMC', 'company', 1, 'k6d4HHZnHCzUJwnyg4HOP86hAhcujhyg14fHTiFpHpkAzEQxNtmHFybqGXgf', '2019-08-15 01:37:32', '2019-08-15 01:37:32'),
(4, 'lynn9249@gmail.com', NULL, '$2y$10$13wQW3efvofRqeRijPpWMeFe7hVpQl4mqTnAYfgi0M363xc8TwIym', 'freeman', 1, 'k6d4juhygtfrdenyg4HOP86hAhcvjU4D14fHTiFpHpkAzEQxNtmHFybqGXgf', '2019-08-16 02:53:11', '2019-08-16 02:53:11'),
(5, 'mgmg@gmail.com', NULL, '$2y$10$d3t.eN6IbGAf8jtN.VvClezsowARXU5B5OJqmeaOHEkwEOIxw.p2C', 'seafarer', 1, 'k6d4juhygfgvfdnyg4HOP86hAhcvjU4D14fHTiFpHpkAzEQxNtmHFybqGXgf', '2019-08-16 02:58:58', '2019-08-16 02:58:58'),
(7, 'fdfd@gmail.com', NULL, '$2y$10$tjOeSqOvMdfcRe.Q1FUHl.TENzMHkhzv3WEMI5eUJ7Xd4qWigJ1eG', 'freeman', 2, 'hygtfrdeswzUJwnyg4HOP86hAhcvjU4D14fHTiFpHpkAzEQxNtmHFybqGXgf', '2019-08-17 00:57:36', '2019-08-17 00:57:36'),
(8, 'google@gmail.com', NULL, '$2y$10$He2dqdI3ABVGlLx6oNmHdeNkpTqHl1CSVBc78wmM7ZQTBjFTLWAdG', 'company', 2, 'k6d4HHZnHCzUJwnyg4HOP86hAhcvjU4D14fHTiFpHpkAzEQxNtmHFybtrgji', '2019-10-13 23:16:24', '2019-10-13 23:16:24'),
(10, 'apple@gmail.com', NULL, '$2y$10$gBRJn3Kk4NhpOgIpu46fr.NVPUlRvSQDf1ax/YGZONtOyLSr2o2Ba', 'company', 4, 'k6d4HHZnHCzUJwnyg4HOP86hAhcvjU4D14fHTiFpHpkAzEQxNtmHFybqGXgf', '2019-10-14 04:19:33', '2019-10-14 04:19:33'),
(11, 'eeeee', NULL, '$2y$10$klucFgQ9toN.K/eiAnsIWeZRDbxisYqlJCRWomvbR6BdoV64iF522', 'freeman', 3, 'gWKWdhqk6jtMzygOh69vrXnxDF5LFhtSQ4w2zi2O3w5uTjqZXqRAruc15O1VC67pNbt2j7KLMID9Slie', '2019-10-14 09:08:30', '2019-10-14 09:08:30'),
(12, 'aa@gmail.com', NULL, '$2y$10$dI7SiGMsGGzEB4tXf9ba9ekv4AQx4HPKtdIKzJJPMQFrGFAPz67KK', 'company', 5, 'OWFk94JxFpGpwE0kqw9SweVuwLSJIDmvAnFfFXLnLXQ2eCFu9xtMxOFufOoq', '2019-10-16 08:25:32', '2019-10-16 08:25:32'),
(13, 'freemanaa@gmail.com', NULL, '$2y$10$c5JM.ytUD.q91nLt..yAv.5UuRH2yZyF7wElOy/KkaVeKABX6Fy.K', 'freeman', 4, 'dQOUHEzLGK5cHa7IxTuyBLa5m12njJwMjSLTFRXcAvZGYj12zp61SslumJHRoy9zmuznaQEfhdMJVfry', '2019-10-16 08:52:04', '2019-10-16 08:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `vessel_types`
--

CREATE TABLE `vessel_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vessel_types`
--

INSERT INTO `vessel_types` (`id`, `header`, `vessel_name`, `created_at`, `updated_at`) VALUES
(1, 'Bulk Carriers', 'Bulk Carriers', NULL, NULL),
(2, 'Bulk Carriers', 'Cement', NULL, NULL),
(3, 'Bulk Carriers', 'Con Bulker', NULL, NULL),
(4, 'Bulk Carriers', 'Self-Unloading Bulk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE `webpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webpages`
--

INSERT INTO `webpages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NewFeed', NULL, NULL),
(2, 'JobPost', NULL, NULL),
(3, 'TrainingPost', NULL, NULL),
(4, 'OnlineTeachingPost', NULL, NULL),
(5, 'Shipmate', NULL, NULL),
(6, 'area6', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_webpages`
--
ALTER TABLE `ads_webpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_photos`
--
ALTER TABLE `company_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course__course_categories`
--
ALTER TABLE `course__course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freemen`
--
ALTER TABLE `freemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal_posts`
--
ALTER TABLE `normal_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafarers`
--
ALTER TABLE `seafarers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seafarer_requests`
--
ALTER TABLE `seafarer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_types`
--
ALTER TABLE `ship_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_posts`
--
ALTER TABLE `training_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel_types`
--
ALTER TABLE `vessel_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webpages`
--
ALTER TABLE `webpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_blogs`
--
ALTER TABLE `admin_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ads_webpages`
--
ALTER TABLE `ads_webpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_photos`
--
ALTER TABLE `company_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course__course_categories`
--
ALTER TABLE `course__course_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freemen`
--
ALTER TABLE `freemen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `normal_posts`
--
ALTER TABLE `normal_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seafarers`
--
ALTER TABLE `seafarers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seafarer_requests`
--
ALTER TABLE `seafarer_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ship_types`
--
ALTER TABLE `ship_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_posts`
--
ALTER TABLE `training_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vessel_types`
--
ALTER TABLE `vessel_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `webpages`
--
ALTER TABLE `webpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
