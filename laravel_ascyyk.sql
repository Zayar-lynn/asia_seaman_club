-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 12:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ascyyk`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(35, 1, 12, '2019-04-14 11:09:45', '2019-04-14 11:09:45'),
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
(7, 4, 2, 'job_post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL);

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
(1, 'testing', 'zayy', 'testing', '09428766473', 'testing@gmail.com', 'Shipping Company', 'yangon', 'testing', 'testing', 'testing', 152, 'http://www.website.com', '12345', '2019-08-15 01:37:32', '2019-08-15 01:37:32');

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
(1, 'testing', 'testing', 'testing123', 'http://localhost/asia_seaman_club/public/upload/freeman_photo/5d5675fe23f2c_Chrysanthemum.jpg', 'http://localhost/asia_seaman_club/public/upload/freeman_photo/5d5675fe242b6_Desert.jpg', '09978699298', 'sasdasdasda', 'testing', 'testing', 'testing', 'lynn9249@gmail.com', '12345', '2019-08-16 02:53:10', '2019-08-16 02:53:10');

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
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `company_id`, `job_position_id`, `vancant`, `salary`, `join_date`, `contract_duration`, `requirement`, `vessel_name`, `vessel_type_id`, `build_year`, `dwt`, `flage`, `main_engine`, `crew_onboard`, `sailing_area`, `description`, `english_level`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'unknown', '$1000', 'within ONE week', '1 year', 'Any seaman diploma', 'unknown', 2, '2019', '1111', 'unknown', 'main engine', 'crew', 'International', 's doubtful that the levels of frontloading seen at the end of 2018 will continue into 2019,” the shipping association said. Additionally, any future fall in container imports by the US and in particular the US West Coast, which is where most of the tariffed goods from China are discharged, “will be particularly harmful for the container shipping industry.” This is because the volume of containers will be reduced on the fronthaul leg of the transpacific trade lane. The fronthaul volumes are the capacity setters as they are much higher than those on the backh', 'Elementary', '5d56c31fa2290_5cb2bb7513df4_car-carrier-320x219.jpg', 'pending', '2019-08-16 08:22:15', '2019-08-16 08:22:15'),
(2, 1, 3, 'unknown', '$20000', 'within ONE month', '3 years', 'higher seaman diploma', 'unknown', 3, '2019', '1212', 'unknown', 'main engine', 'crew', 'Worldwide', '(2/o တုန္း႐ွိရမည္။age under 40။ sea time gap ျဖစ္ေနသူမ်ားအတြက္သင့္ေတာ္ပါသည္)', 'Upper-Intermediate', '5d56c3d93c9fc_5cb2bb54e6aed_flex-lng-to-buy-five-lng-newbuildings-300x160.jpg', 'active', '2019-08-16 08:25:21', '2019-08-16 08:25:21');

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `normal_posts`
--

INSERT INTO `normal_posts` (`id`, `user_id`, `title`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maritime Industry Eyes Blockchain for Seafarer Certification', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c430429b3_5cb2ba9eb17b3_apm-terminals-gothenburg-320x219.jpg', 'The consortium brings together multiple stakeholders who either rely on, or support crew certification. These include shipping companies, including Danish shipping major, Maersk, tanker operator Heidmar, and PTC Holdings Corp. Also included are technology enablers Hanseaticsoft, maritime platforms providers Navozyme and C-LOG, as well as international seafarer welfare charity The Mission to Seafarers.\r\n\r\nThe demonstrator scope will focus on an end-to-end demonstration of a digital certification and endorsement process utilising a digital repository for verified crew documentation, training logs and approval system.\r\n\r\nSpecifically, the focus will be upon the STCW certificate issuance and relevant supporting documentation from engineering officers located in multiple jurisdictions and the endorsement of recognition from a maritime authority for vessel embarkation and disembarkation.\r\n\r\nUpon validation and scaling, the final solution would enable individual seafarers to manage their certificate repository from original issuance, for maritime administrations to manage the renewal and endorsement across jurisdictions, for crew management organizations to manage seafarers for crewing of vessels and for vessel owners to receive an overview of their crew, certificates and endorsements.\r\n\r\n“Building and maintaining an intuitive and user-friendly platform for the management of crew certification will bring hugely significant benefits to all stakeholders. We are looking forward to developing and building the solutions with the consortium,” Graeme Thomson, Head of Northern Europe Manning Office from Maersk, said.', 'active', '2019-08-16 08:26:48', '2019-08-16 08:26:48'),
(2, 1, '700 Jobs Safe as Norway Says No to Color Line Reflagging', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c4563fa80_5cb2bb1a0b075_stolt-nielsen-foresees-impact-from-houston-ship-channel-fire-320x205.jpg', 'The Norwegian Seafarers Union (NSU), an affiliate of the International Transport Workers’ Federation, won the fight to keep the vessels under the Norwegian Ordinary Ship Register (NOR), securing the jobs and maintaining the wages and conditions of the country’s seafarers.“This result means that Color Line – a profitable shipping company – cannot replace national seafarers with cheaper foreign labour,” Johnny Hansen, NSU president, told the ITF.', 'active', '2019-08-16 08:27:26', '2019-08-16 08:27:26'),
(3, 1, 'Deal Reached on Higher Seafarer Wages', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c46f5ca4d_5cb2bac981336_img34_o-1024x683-1-320x213.jpg', 'Following two days of negotiations, the International Transport Workers’ Federation (ITF) and the International Chamber of Shipping (ICS), convened in Geneva at the Joint Maritime Commission (JMC) subcommittee on seafarers wages to review the International Labour Organization (ILO)’s minimum seafarer wage\r\n\r\nIt has been agreed to update the minimum wage for an able seafarer by USD 27 over the next three years. The wages will provide an overall increase of 4.5 percent on the current rate of USD 614, with an increase of USD 4 as of  July 1, 2019, followed by an increase of USD 7 as of January 1, 2020 and a final increase of USD 16 as of January 1, 2021.\r\n\r\nThe change was ascribed due to the calculation that the USD 614 wage was below the purchasing power stated in the ILO report prepared for the meeting. This is in particular due to economic forecasts and the volatility of the shipping industry.\r\n\r\n“This was a difficult negotiation with two very different assessments about what the future holds for shipping and seafarers,” admitted Mark Dickinson, spokesperson for the seafarers’ group.\r\n\r\n“There was strong opposition from the shipowners’ side for a significant increase. However, I am pleased that at the end pragmatism and common sense prevailed and the social partners worked their way forward to recognise the fundamental role seafarers play within the industry.\r\n\r\n“We will continue to work together to find ways to ensure that the ILO formula used as the basis for these negotiations is fair and reflects the reality for seafarers, but the impact of this session of the JMC negotiation on the global seafaring community is undoubtedly a good and equitable result,” he added.', 'active', '2019-08-16 08:27:51', '2019-08-16 08:27:51'),
(4, 1, 'APM Terminals Launches The Gothenburg Gateway', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c491a7442_5cb2bb54e6aed_flex-lng-to-buy-five-lng-newbuildings-300x160.jpg', 'The Gothenburg Gateway combines fast, efficient freight trains from all over Sweden to Gothenburg, an efficient container port that loads between trains and ships, as well as more ocean-going vessels calling the port.\r\n\r\n“Via The Gothenburg Gateway it should take a maximum of 24 hours to reach Gothenburg by freight train, and a maximum of 48 hours in total to place a container on an ocean-going vessel,” Henrik Kristensen, CEO APM Terminals Gothenburg, said.\r\n\r\nAsian markets one week closer\r\n\r\n“We analyzed how long it takes for a container to reach Shanghai – an important Asian market for Sweden. The Gothenburg Gateway will help reduce this time by at least one week, as well as offering an efficient and climate-smart solution.”\r\n\r\nIn the future, APM Terminals wants to service Sweden with three ocean-going vessels per week in order to provide the most competitive delivery solution.\r\n\r\n“We now want to take the next step and further develop our port, develop logistics to and from the port, and develop logistics solutions around the port,” continues Kristensen.\r\n\r\n“The Gothenburg Gateway is a concept to ensure future growth for Swedish industry and trade,” he concludes.\r\n\r\nDuring the launch of the concept, the mayor of Gothenburg, Axel Josefson, said that he believed the initiative in Gothenburg should be given priority. He emphasised the importance of planned investments for dredging and the rail network happening as soon as possible.', 'active', '2019-08-16 08:28:25', '2019-08-16 08:28:25'),
(5, 5, 'Pacific Basin to Add Supramax Trio', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c50193f6c_5cb2bb7513df4_car-carrier-320x219.jpg', 'During the first quarter of 2018, the shipping company also took delivery of two secondhand vessels – one Handysize and one Supramax. What is more, Pacific Basin accepted delivery of a Supramax bought in late 2018 and completed the sale of an older, small Handysize bulker.\r\n\r\nThese acquisitions will increase the company’s owned fleet to 115 units by July. Including chartered ships, Pacific Basin operated an average of 220 ships overall during the first quarter of this year.\r\n\r\nFrom January to March this year, the company generated average Handysize and Supramax daily time-charter equivalent (TCE) earnings of USD 9,080 and USD 10,400 per day net, representing a 3% and 8% reduction compared to the same period in 2018.\r\n\r\nAs of April 9, Pacific Basin has secured 36% of its 29,410 contracted Handysize revenue days at around USD 9,360 per day net and 58% of its 14,020 contracted Supramax revenue days at around USD 10,690 per day net for the remaining three quarters of 2019.\r\n\r\nAs explained, the dry bulk freight market in 2019 has started weaker than the last two years due to trade war uncertainty and Chinese import policies. This led to weak spot market rates in the first quarter overall.\r\n\r\nHowever, the company’s Handysize and Supramax markets improved significantly during the second half of the quarter with marked increases of 58% in the Baltic Handysize Index (BHSI) and 38% in the Baltic Supramax Index (BSI).\r\n\r\nIn contrast, the larger Capesize vessel segment has seen little recovery and continued to weaken throughout the first quarter.\r\n\r\nReferring to the outlook for 2019 which has been revised downwards due to the softening market, Pacific Basin said that a resolution to the trade conflict between the US and China would provide “a welcome boost to the market”.\r\n\r\nThe company added that IMO 2020 sulphur preparations should lead to increased supply disruptions in H2, which could compound dry bulk market strength that typically builds in Q3 and Q4.\r\n\r\n“Despite short term volatility and in view of the combination of continued healthy growth in minor bulk demand and reducing Handysize and Supramax fleet growth, we continue to believe that the longer term fundamentals for our vessel segments are positive,” Pacific Basin concluded.', 'pending', '2019-08-16 08:30:18', '2019-08-16 08:30:18'),
(6, 5, 'Port Houston Speeds Up Widening of Houston Ship Channel', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c56a2aa26_5cb2baeff10fb_jms1947-768x513-1-320x214.jpg', 'This project will be the eleventh significant widening and deepening of the channel since its conception, Houston port said.\r\n\r\n“The Houston Ship Channel is open for business for all and will continue to be,” said Chairman Ric Campo.\r\n\r\nThe commission was briefed on measures to make sure widening of the entire Galveston Bay reach of the ship channel is part of the next Houston Ship Channel dredging project. The commission also directed staff to bring it proposals for port authority and industry funding to support the accelerated effort.\r\n\r\nIn addition, after careful consideration of interim measures to address growing traffic, the commission adopted a resolution to further maximize current two-way traffic transiting the Houston Ship Channel.\r\n\r\nThe commission also budgeted USD 500,000 to support a traffic efficiency group for the channel.', 'pending', '2019-08-16 08:32:02', '2019-08-16 08:32:02'),
(7, 5, 'Stolt-Nielsen Foresees Impact from Houston Ship Channel Fire', 'http://localhost/asia_seaman_club/public/upload/normal_post/5d56c5854a149_5cb2bb54e6aed_flex-lng-to-buy-five-lng-newbuildings-300x160.jpg', 'already impacting the local chemical industry, including both transportation and storage,” Niels G. Stolt-Nielsen, CEO of Stolt-Nielsen Limited, commented.\r\n\r\n“We are at a minimum expecting a negative impact on Stolt Tankers, as parts of the Houston Ship Channel have been closed to traffic, causing delays. We continue to follow the situation closely, as the full impact is unclear at this point.”\r\n\r\nThe Oslo-listed company reported USD 501.9 million of revenue for the first quarter ended February 28, 2019, compared to a revenue of USD 515.3 million reported in the same period a year earlier.\r\n\r\nStolt-Nielsen’s net profit dropped to USD 6.6 million in the period from USD 38.8 million delivered in the first quarter of 2018.\r\n\r\n“Stolt-Nielsen Limited’s first-quarter results were in line with expectations,” Stolt-Nielsen said.\r\n\r\n“Freight rates and volumes overall were stable at Stolt Tankers. Results at Stolthaven Terminals were steady when excluding the impairments taken in the prior quarter, reflecting stable market conditions and operations. At Stolt Tank Containers, first-quarter results were down in line with seasonal expectations, though market softness remains, with intensified price competition.”\r\n\r\nStolt Tankers reported an operating profit of USD 14.3 million, up from USD 7.7 million delivered in the previous quarter, mainly reflecting a USD 3.4 million bunker-hedge gain in the quarter.\r\n\r\nStolthaven Terminals’ operating profit was at USD 18 million, up from USD 11.7 million in the fourth quarter of 2018, while Stolt Tank Containers reported an operating profit of USD 15.7 million down from USD 18.1 million quarter-on-quarter.', 'pending', '2019-08-16 08:32:29', '2019-08-16 08:32:29');

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
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_for` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_posts`
--

INSERT INTO `training_posts` (`id`, `company_id`, `title`, `description`, `training_for`, `requirement`, `duration`, `photo`, `start_date`, `end_date`, `start_time`, `end_time`, `training_fee_amount`, `fee_type`, `enroll_limit`, `contact_no`, `online_banking`, `benificiary_name`, `account_number`, `post_start_date`, `post_end_date`, `fee_point`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'hello', 'blabla', 'std', 'blabla', 'blbbb', 'http:///dfjkfjdkfjk', '2019-08-16', '2019-08-16', '14:52:15', '14:52:15', '11111', 'MMK', '10', '09877778', 'yes', 'kdfjkdjfk', '9898998', '2019-08-16', NULL, '2', 'active', '2019-08-16 09:39:16', '2019-08-16 09:44:17'),
(2, 1, 'hello2', 'blabla', 'std', 'blabla', 'blbbb', 'http:///dfjkfjdkfjk', '2019-08-16', '2019-08-16', '14:52:15', '14:52:15', '11111', 'MMK', '10', '09877778', 'yes', 'kdfjkdjfk', '9898998', '2019-08-16', NULL, '2', 'pending', '2019-08-16 09:39:16', '2019-08-16 09:44:17');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `type`, `data_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', NULL, '$2y$10$/gV.IvigNQ3wamZdc7nPkuBDobVzkrsKaNZxLxgf3O7K29L1s.iXG', 'admin', 0, NULL, '2019-08-15 01:33:37', '2019-08-15 01:33:37'),
(3, 'testing@gmail.com', NULL, '$2y$10$bnGJh5Hqt9MBxgNZMjOW/OmGnlPMrMH8WGK5wWLezilKOx376RmMC', 'company', 1, NULL, '2019-08-15 01:37:32', '2019-08-15 01:37:32'),
(4, 'lynn9249@gmail.com', NULL, '$2y$10$13wQW3efvofRqeRijPpWMeFe7hVpQl4mqTnAYfgi0M363xc8TwIym', 'freeman', 1, NULL, '2019-08-16 02:53:11', '2019-08-16 02:53:11'),
(5, 'mgmg@gmail.com', NULL, '$2y$10$d3t.eN6IbGAf8jtN.VvClezsowARXU5B5OJqmeaOHEkwEOIxw.p2C', 'seafarer', 1, NULL, '2019-08-16 02:58:58', '2019-08-16 02:58:58');

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
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `normal_posts`
--
ALTER TABLE `normal_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seafarers`
--
ALTER TABLE `seafarers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seafarer_requests`
--
ALTER TABLE `seafarer_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
