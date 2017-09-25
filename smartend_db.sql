-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2017 at 04:12 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartend_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `smartend_analytics_pages`
--

CREATE TABLE `smartend_analytics_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `query` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smartend_analytics_visitors`
--

CREATE TABLE `smartend_analytics_visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_cor1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_cor2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smartend_attach_files`
--

CREATE TABLE `smartend_attach_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_attach_files`
--

INSERT INTO `smartend_attach_files` (`id`, `topic_id`, `file`, `title_ar`, `title_en`, `row_no`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 5, '15052255051529.pdf', 'test file', 'test file', 1, 1, NULL, '2017-09-12 12:11:45', '2017-09-12 12:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_banners`
--

CREATE TABLE `smartend_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(11) NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_ar` text COLLATE utf8mb4_unicode_ci,
  `details_en` text COLLATE utf8mb4_unicode_ci,
  `code` text COLLATE utf8mb4_unicode_ci,
  `file_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` tinyint(4) DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `visits` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_banners`
--

INSERT INTO `smartend_banners` (`id`, `section_id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `code`, `file_ar`, `file_en`, `video_type`, `youtube_link`, `link_url`, `icon`, `status`, `visits`, `row_no`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'بنر رقم 3', 'Banner #3', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '14888109018814.jpg', '14888109012163.jpg', NULL, NULL, '#', NULL, 1, 0, 3, 1, 1, '2017-03-06 11:06:24', '2017-03-07 18:27:19'),
(2, 1, 'بنر رقم 2', 'Banner #2', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '14888112232028.jpg', '14888112237145.jpg', NULL, NULL, '#', NULL, 1, 0, 2, 1, 1, '2017-03-06 11:06:24', '2017-03-07 18:27:19'),
(3, 2, 'تصميم ريسبونسف', 'Responsive Design', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '', '', NULL, NULL, '#', 'fa-object-group', 1, 0, 1, 1, NULL, '2017-03-06 11:06:24', '2017-03-07 18:27:19'),
(4, 2, ' احدث التقنيات', 'HTML5 & CSS3', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '', '', NULL, NULL, '#', 'fa-html5', 1, 0, 2, 1, NULL, '2017-03-06 11:06:24', '2017-03-07 18:27:19'),
(5, 2, 'باستخدام بوتستراب', 'Bootstrap Used', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '', '', NULL, NULL, '#', 'fa-code', 1, 0, 3, 1, NULL, '2017-03-06 11:06:24', '2017-03-07 18:27:19'),
(6, 2, 'تصميم كلاسيكي', 'Classic Design', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '', '', NULL, NULL, '#', 'fa-laptop', 1, 0, 4, 1, NULL, '2017-03-06 11:06:24', '2017-03-07 18:27:19'),
(7, 1, 'بنر رقم 1', 'Banner #1', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', NULL, '14888126419392.jpg', '14888126415336.jpg', NULL, NULL, '#', NULL, 1, 0, 1, 1, 1, '2017-03-06 13:04:01', '2017-03-07 18:27:19'),
(8, 3, 'بنر جانبي تجريبي', 'Side banner sample', NULL, NULL, NULL, '14888184555359.png', '14888184559632.png', NULL, NULL, '#', NULL, 1, 0, 5, 1, 1, '2017-03-06 14:25:52', '2017-03-07 18:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_comments`
--

CREATE TABLE `smartend_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_comments`
--

INSERT INTO `smartend_comments` (`id`, `topic_id`, `name`, `email`, `date`, `comment`, `status`, `row_no`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 9, 'Roza Hesham', 'email@site.com', '2017-03-06 15:55:21', 'Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti.', 1, 1, NULL, NULL, '2017-03-06 13:55:21', '2017-03-06 13:55:21'),
(2, 9, 'Adam Ali', 'emm@site.com', '2017-03-06 15:55:59', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.', 1, 2, NULL, NULL, '2017-03-06 13:55:59', '2017-03-06 13:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_contacts`
--

CREATE TABLE `smartend_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_contacts`
--

INSERT INTO `smartend_contacts` (`id`, `group_id`, `first_name`, `last_name`, `company`, `email`, `password`, `phone`, `country_id`, `city`, `address`, `photo`, `notes`, `last_login`, `last_login_ip`, `facebook_id`, `twitter_id`, `google_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sara', 'Smith', 'HiMan Company', 'email@site.com', NULL, '234-245-5674', 68, NULL, NULL, '14889022279857.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2017-03-07 13:57:07', '2017-03-07 13:57:07'),
(2, 2, 'Maro', 'Faheed', 'Havway  Company', 'email@site.com', NULL, '386-755-7788', 30, NULL, NULL, '14889022842486.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2017-03-07 13:58:04', '2017-03-07 13:58:35'),
(3, 2, 'Adam', 'Ali', 'Trident company', 'email@site.com', NULL, '589-234-2342', 35, NULL, NULL, '14889023586327.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2017-03-07 13:59:08', '2017-03-07 13:59:18'),
(4, 2, 'Donal', 'Tashee', 'Hamer school', 'email@site.com', NULL, '674-274-8944', 41, NULL, NULL, '14889024177699.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2017-03-07 14:00:17', '2017-03-07 14:00:17'),
(5, NULL, 'Mona', 'Lamen', 'Troly Company', 'email@site.com', NULL, '324-674-4578', 10, 'Moco', NULL, '14889024974798.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2017-03-07 14:01:37', '2017-03-07 14:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_contacts_groups`
--

CREATE TABLE `smartend_contacts_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_contacts_groups`
--

INSERT INTO `smartend_contacts_groups` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Newsletter Emails', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(2, 'VIP', 1, NULL, '2017-03-07 13:56:11', '2017-03-07 13:56:11'),
(3, 'Customers', 1, NULL, '2017-03-07 13:56:24', '2017-03-07 13:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_countries`
--

CREATE TABLE `smartend_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_countries`
--

INSERT INTO `smartend_countries` (`id`, `code`, `title_ar`, `title_en`, `tel`, `created_at`, `updated_at`) VALUES
(1, 'AL', 'ألبانيا', 'Albania', '355', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(2, 'DZ', 'الجزائر', 'Algeria', '213', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(3, 'AS', 'ساموا الأمريكية', 'American Samoa', '1-684', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(4, 'AD', 'أندورا', 'Andorra', '376', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(5, 'AO', 'أنغولا', 'Angola', '244', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(6, 'AI', 'أنغيلا', 'Anguilla', '1-264', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(7, 'AR', 'الأرجنتين', 'Argentina', '54', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(8, 'AM', 'أرمينيا', 'Armenia', '374', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(9, 'AW', 'أروبا', 'Aruba', '297', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(10, 'AU', 'أستراليا', 'Australia', '61', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(11, 'AT', 'النمسا', 'Austria', '43', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(12, 'AZ', 'أذربيجان', 'Azerbaijan', '994', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(13, 'BS', 'جزر البهاما', 'Bahamas', '1-242', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(14, 'BH', 'البحرين', 'Bahrain', '973', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(15, 'BD', 'بنغلاديش', 'Bangladesh', '880', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(16, 'BB', 'بربادوس', 'Barbados', '1-246', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(17, 'BY', 'روسيا البيضاء', 'Belarus', '375', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(18, 'BE', 'بلجيكا', 'Belgium', '32', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(19, 'BZ', 'بليز', 'Belize', '501', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(20, 'BJ', 'بنين', 'Benin', '229', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(21, 'BM', 'برمودا', 'Bermuda', '1-441', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(22, 'BT', 'بوتان', 'Bhutan', '975', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(23, 'BO', 'بوليفيا', 'Bolivia', '591', '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(24, 'BA', 'البوسنة والهرسك', 'Bosnia and Herzegovina', '387', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(25, 'BW', 'بوتسوانا', 'Botswana', '267', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(26, 'BR', 'البرازيل', 'Brazil', '55', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(27, 'VG', 'جزر فيرجن البريطانية', 'British Virgin Islands', '1-284', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(28, 'IO', 'إقليم المحيط الهندي البريطاني', 'British Indian Ocean Territory', '246', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(29, 'BN', 'بروناي دار السلام', 'Brunei Darussalam', '673', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(30, 'BG', 'بلغاريا', 'Bulgaria', '359', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(31, 'BF', 'بوركينا فاسو', 'Burkina Faso', '226', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(32, 'BI', 'بوروندي', 'Burundi', '257', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(33, 'KH', 'كمبوديا', 'Cambodia', '855', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(34, 'CM', 'الكاميرون', 'Cameroon', '237', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(35, 'CA', 'كندا', 'Canada', '1', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(36, 'CV', 'الرأس الأخضر', 'Cape Verde', '238', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(37, 'KY', 'جزر كايمان', 'Cayman Islands', '1-345', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(38, 'CF', 'افريقيا الوسطى', 'Central African Republic', '236', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(39, 'TD', 'تشاد', 'Chad', '235', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(40, 'CL', 'تشيلي', 'Chile', '56', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(41, 'CN', 'الصين', 'China', '86', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(42, 'HK', 'هونغ كونغ', 'Hong Kong', '852', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(43, 'MO', 'ماكاو', 'Macao', '853', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(44, 'CX', 'جزيرة الكريسماس', 'Christmas Island', '61', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(45, 'CC', 'جزر كوكوس (كيلينغ)', 'Cocos (Keeling) Islands', '61', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(46, 'CO', 'كولومبيا', 'Colombia', '57', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(47, 'KM', 'جزر القمر', 'Comoros', '269', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(48, 'CK', 'جزر كوك', 'Cook Islands', '682', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(49, 'CR', 'كوستا ريكا', 'Costa Rica', '506', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(50, 'HR', 'كرواتيا', 'Croatia', '385', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(51, 'CU', 'كوبا', 'Cuba', '53', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(52, 'CY', 'قبرص', 'Cyprus', '357', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(53, 'CZ', 'الجمهورية التشيكية', 'Czech Republic', '420', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(54, 'DK', 'الدنمارك', 'Denmark', '45', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(55, 'DJ', 'جيبوتي', 'Djibouti', '253', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(56, 'DM', 'دومينيكا', 'Dominica', '1-767', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(57, 'DO', 'جمهورية الدومينيكان', 'Dominican Republic', '1-809', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(58, 'EC', 'الاكوادور', 'Ecuador', '593', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(59, 'EG', 'مصر', 'Egypt', '20', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(60, 'SV', 'السلفادور', 'El Salvador', '503', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(61, 'GQ', 'غينيا الاستوائية', 'Equatorial Guinea', '240', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(62, 'ER', 'إريتريا', 'Eritrea', '291', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(63, 'EE', 'استونيا', 'Estonia', '372', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(64, 'ET', 'أثيوبيا', 'Ethiopia', '251', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(65, 'FO', 'جزر فارو', 'Faroe Islands', '298', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(66, 'FJ', 'فيجي', 'Fiji', '679', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(67, 'FI', 'فنلندا', 'Finland', '358', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(68, 'FR', 'فرنسا', 'France', '33', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(69, 'GF', 'جيانا الفرنسية', 'French Guiana', '689', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(70, 'GA', 'الغابون', 'Gabon', '241', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(71, 'GM', 'غامبيا', 'Gambia', '220', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(72, 'GE', 'جورجيا', 'Georgia', '995', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(73, 'DE', 'ألمانيا', 'Germany', '49', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(74, 'GH', 'غانا', 'Ghana', '233', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(75, 'GI', 'جبل طارق', 'Gibraltar', '350', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(76, 'GR', 'يونان', 'Greece', '30', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(77, 'GL', 'غرينلاند', 'Greenland', '299', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(78, 'GD', 'غرينادا', 'Grenada', '1-473', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(79, 'GU', 'غوام', 'Guam', '1-671', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(80, 'GT', 'غواتيمالا', 'Guatemala', '502', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(81, 'GN', 'غينيا', 'Guinea', '224', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(82, 'GW', 'غينيا-بيساو', 'Guinea-Bissau', '245', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(83, 'GY', 'غيانا', 'Guyana', '592', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(84, 'HT', 'هايتي', 'Haiti', '509', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(85, 'HN', 'هندوراس', 'Honduras', '504', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(86, 'HU', 'هنغاريا', 'Hungary', '36', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(87, 'IS', 'أيسلندا', 'Iceland', '354', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(88, 'IN', 'الهند', 'India', '91', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(89, 'ID', 'أندونيسيا', 'Indonesia', '62', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(90, 'IR', 'جمهورية إيران الإسلامية', 'Iran, Islamic Republic of', '98', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(91, 'IQ', 'العراق', 'Iraq', '964', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(92, 'IE', 'أيرلندا', 'Ireland', '353', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(93, 'IM', 'جزيرة مان', 'Isle of Man', '44-1624', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(94, 'IL', 'إسرائيل', 'Israel', '972', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(95, 'IT', 'إيطاليا', 'Italy', '39', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(96, 'JM', 'جامايكا', 'Jamaica', '1-876', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(97, 'JP', 'اليابان', 'Japan', '81', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(98, 'JE', 'جيرسي', 'Jersey', '44-1534', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(99, 'JO', 'الأردن', 'Jordan', '962', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(100, 'KZ', 'كازاخستان', 'Kazakhstan', '7', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(101, 'KE', 'كينيا', 'Kenya', '254', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(102, 'KI', 'كيريباس', 'Kiribati', '686', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(103, 'KW', 'الكويت', 'Kuwait', '965', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(104, 'KG', 'قيرغيزستان', 'Kyrgyzstan', '996', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(105, 'LV', 'لاتفيا', 'Latvia', '371', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(106, 'LB', 'لبنان', 'Lebanon', '961', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(107, 'LS', 'ليسوتو', 'Lesotho', '266', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(108, 'LR', 'ليبيريا', 'Liberia', '231', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(109, 'LY', 'ليبيا', 'Libya', '218', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(110, 'LI', 'ليشتنشتاين', 'Liechtenstein', '423', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(111, 'LT', 'ليتوانيا', 'Lithuania', '370', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(112, 'LU', 'لوكسمبورغ', 'Luxembourg', '352', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(113, 'MK', 'مقدونيا، جمهورية', 'Macedonia', '389', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(114, 'MG', 'مدغشقر', 'Madagascar', '261', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(115, 'MW', 'ملاوي', 'Malawi', '265', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(116, 'MY', 'ماليزيا', 'Malaysia', '60', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(117, 'MV', 'جزر المالديف', 'Maldives', '960', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(118, 'ML', 'مالي', 'Mali', '223', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(119, 'MT', 'مالطا', 'Malta', '356', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(120, 'MH', 'جزر مارشال', 'Marshall Islands', '692', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(121, 'MR', 'موريتانيا', 'Mauritania', '222', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(122, 'MU', 'موريشيوس', 'Mauritius', '230', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(123, 'YT', 'مايوت', 'Mayotte', '262', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(124, 'MX', 'المكسيك', 'Mexico', '52', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(125, 'FM', 'ولايات ميكرونيزيا الموحدة', 'Micronesia', '691', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(126, 'MD', 'مولدوفا', 'Moldova', '373', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(127, 'MC', 'موناكو', 'Monaco', '377', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(128, 'MN', 'منغوليا', 'Mongolia', '976', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(129, 'ME', 'الجبل الأسود', 'Montenegro', '382', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(130, 'MS', 'مونتسيرات', 'Montserrat', '1-664', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(131, 'MA', 'المغرب', 'Morocco', '212', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(132, 'MZ', 'موزمبيق', 'Mozambique', '258', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(133, 'MM', 'ميانمار', 'Myanmar', '95', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(134, 'NA', 'ناميبيا', 'Namibia', '264', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(135, 'NR', 'ناورو', 'Nauru', '674', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(136, 'NP', 'نيبال', 'Nepal', '977', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(137, 'NL', 'هولندا', 'Netherlands', '31', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(138, 'AN', 'جزر الأنتيل الهولندية', 'Netherlands Antilles', '599', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(139, 'NC', 'كاليدونيا الجديدة', 'New Caledonia', '687', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(140, 'NZ', 'نيوزيلندا', 'New Zealand', '64', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(141, 'NI', 'نيكاراغوا', 'Nicaragua', '505', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(142, 'NE', 'النيجر', 'Niger', '227', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(143, 'NG', 'نيجيريا', 'Nigeria', '234', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(144, 'NU', 'نيوي', 'Niue', '683', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(145, 'NO', 'النرويج', 'Norway', '47', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(146, 'OM', 'عمان', 'Oman', '968', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(147, 'PK', 'باكستان', 'Pakistan', '92', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(148, 'PW', 'بالاو', 'Palau', '680', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(149, 'PS', 'فلسطين', 'Palestinian', '972', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(150, 'PA', 'بناما', 'Panama', '507', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(151, 'PY', 'باراغواي', 'Paraguay', '595', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(152, 'PE', 'بيرو', 'Peru', '51', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(153, 'PH', 'الفلبين', 'Philippines', '63', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(154, 'PN', 'بيتكيرن', 'Pitcairn', '870', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(155, 'PL', 'بولندا', 'Poland', '48', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(156, 'PT', 'البرتغال', 'Portugal', '351', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(157, 'PR', 'بويرتو ريكو', 'Puerto Rico', '1-787', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(158, 'QA', 'قطر', 'Qatar', '974', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(159, 'RO', 'رومانيا', 'Romania', '40', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(160, 'RU', 'الفيدرالية الروسية', 'Russian Federation', '7', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(161, 'RW', 'رواندا', 'Rwanda', '250', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(162, 'SH', 'سانت هيلينا', 'Saint Helena', '290', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(163, 'KN', 'سانت كيتس ونيفيس', 'Saint Kitts and Nevis', '1-869', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(164, 'LC', 'سانت لوسيا', 'Saint Lucia', '1-758', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(165, 'PM', 'سان بيار وميكلون', 'Saint Pierre and Miquelon', '508', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(166, 'VC', 'سانت فنسنت وجزر غرينادين', 'Saint Vincent and Grenadines', '1-784', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(167, 'WS', 'ساموا', 'Samoa', '685', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(168, 'SM', 'سان مارينو', 'San Marino', '378', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(169, 'ST', 'ساو تومي وبرينسيبي', 'Sao Tome and Principe', '239', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(170, 'SA', 'المملكة العربية السعودية', 'Saudi Arabia', '966', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(171, 'SN', 'السنغال', 'Senegal', '221', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(172, 'RS', 'صربيا', 'Serbia', '381', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(173, 'SC', 'سيشيل', 'Seychelles', '248', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(174, 'SL', 'سيرا ليون', 'Sierra Leone', '232', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(175, 'SG', 'سنغافورة', 'Singapore', '65', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(176, 'SK', 'سلوفاكيا', 'Slovakia', '421', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(177, 'SI', 'سلوفينيا', 'Slovenia', '386', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(178, 'SB', 'جزر سليمان', 'Solomon Islands', '677', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(179, 'SO', 'الصومال', 'Somalia', '252', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(180, 'ZA', 'جنوب أفريقيا', 'South Africa', '27', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(181, 'ES', 'إسبانيا', 'Spain', '34', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(182, 'LK', 'سيريلانكا', 'Sri Lanka', '94', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(183, 'SD', 'السودان', 'Sudan', '249', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(184, 'SR', 'سورينام', 'Suriname', '597', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(185, 'SJ', 'جزر سفالبارد وجان ماين', 'Svalbard and Jan Mayen Islands', '47', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(186, 'SZ', 'سوازيلاند', 'Swaziland', '268', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(187, 'SE', 'السويد', 'Sweden', '46', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(188, 'CH', 'سويسرا', 'Switzerland', '41', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(189, 'SY', 'سوريا', 'Syrian Arab Republic', '963', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(190, 'TW', 'تايوان، جمهورية الصين', 'Taiwan, Republic of China', '886', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(191, 'TJ', 'طاجيكستان', 'Tajikistan', '992', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(192, 'TZ', 'تنزانيا', 'Tanzania', '255', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(193, 'TH', 'تايلاند', 'Thailand', '66', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(194, 'TG', 'توغو', 'Togo', '228', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(195, 'TK', 'توكيلاو', 'Tokelau', '690', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(196, 'TO', 'تونغا', 'Tonga', '676', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(197, 'TT', 'ترينداد وتوباغو', 'Trinidad and Tobago', '1-868', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(198, 'TN', 'تونس', 'Tunisia', '216', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(199, 'TR', 'تركيا', 'Turkey', '90', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(200, 'TM', 'تركمانستان', 'Turkmenistan', '993', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(201, 'TC', 'جزر تركس وكايكوس', 'Turks and Caicos Islands', '1-649', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(202, 'TV', 'توفالو', 'Tuvalu', '688', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(203, 'UG', 'أوغندا', 'Uganda', '256', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(204, 'UA', 'أوكرانيا', 'Ukraine', '380', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(205, 'AE', 'الإمارات العربية المتحدة', 'United Arab Emirates', '971', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(206, 'GB', 'المملكة المتحدة', 'United Kingdom', '44', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(207, 'US', 'الولايات المتحدة الأمريكية', 'United States of America', '1', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(208, 'UY', 'أوروغواي', 'Uruguay', '598', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(209, 'UZ', 'أوزبكستان', 'Uzbekistan', '998', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(210, 'VU', 'فانواتو', 'Vanuatu', '678', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(211, 'VE', 'فنزويلا', 'Venezuela', '58', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(212, 'VN', 'فيتنام', 'Viet Nam', '84', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(213, 'WF', 'واليس وفوتونا', 'Wallis and Futuna Islands', '681', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(214, 'YE', 'اليمن', 'Yemen', '967', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(215, 'ZM', 'زامبيا', 'Zambia', '260', '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(216, 'ZW', 'زيمبابوي', 'Zimbabwe', '263', '2017-03-06 11:06:24', '2017-03-06 11:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_events`
--

CREATE TABLE `smartend_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_events`
--

INSERT INTO `smartend_events` (`id`, `user_id`, `type`, `title`, `details`, `start_date`, `end_date`, `color`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'test note to my calendar', 'this is a test note to my calendar', '2017-12-07 00:00:00', '2017-12-07 00:00:00', NULL, 1, NULL, '2017-03-07 14:06:32', '2017-03-07 14:06:32'),
(2, 1, 1, 'meeting test for multi purposes', 'meeting test for multi purposes meeting test for multi purposes', '2017-11-07 16:03:00', '2017-11-07 16:03:00', NULL, 1, NULL, '2017-03-07 14:07:06', '2017-03-07 14:07:06'),
(3, 1, 2, 'Test the events on calendar', 'sample to test', '2017-12-07 16:00:00', '2017-12-07 18:00:00', NULL, 1, NULL, '2017-03-07 14:07:53', '2017-03-07 14:07:53'),
(4, 1, 3, 'Site task test will take half month', 'test task', '2017-11-07 00:00:00', '2017-11-22 00:00:00', NULL, 1, NULL, '2017-03-07 14:08:53', '2017-03-07 14:08:53'),
(5, 1, 0, 'my test note i just test', 'my test note i just test', '2017-09-22 00:00:00', '2017-09-22 00:00:00', NULL, 1, NULL, '2017-03-07 14:09:26', '2017-03-07 14:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_ltm_translations`
--

CREATE TABLE `smartend_ltm_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smartend_maps`
--

CREATE TABLE `smartend_maps` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(11) NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_ar` text COLLATE utf8mb4_unicode_ci,
  `details_en` text COLLATE utf8mb4_unicode_ci,
  `icon` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_maps`
--

INSERT INTO `smartend_maps` (`id`, `topic_id`, `longitude`, `latitude`, `title_ar`, `title_en`, `details_ar`, `details_en`, `icon`, `status`, `row_no`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 2, '39.639537564366684', '-101.953125', 'عنوان رئيسي هنا', 'Main Title here', 'Co Rd 6, Kanorado, KS 67741, USA', 'Co Rd 6, Kanorado, KS 67741, USA', 3, 1, 1, 1, 1, '2017-03-06 12:41:56', '2017-03-06 12:45:09'),
(4, 2, '40.136890695345905', '-100.689697265625', 'عنوان رئيسي هنا', 'Main title here', 'Rd 381, McCook, NE 69001, USA', 'Rd 381, McCook, NE 69001, USA', 2, 1, 2, 1, 1, '2017-03-06 12:44:21', '2017-03-06 12:45:30'),
(5, 2, '40.463666324587685', '-103.447265625', 'عنوان رئيسي هنا', 'Main title here', 'Co Rd 6, Merino, CO 80741, USA', 'Co Rd 6, Merino, CO 80741, USA', 5, 1, 3, 1, 1, '2017-03-06 12:44:29', '2017-03-06 12:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_menus`
--

CREATE TABLE `smartend_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `row_no` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_menus`
--

INSERT INTO `smartend_menus` (`id`, `row_no`, `father_id`, `title_ar`, `title_en`, `status`, `type`, `cat_id`, `link`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'القائمة الرئيسية', 'Main Menu', 1, 0, 0, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(2, 2, 0, 'روابط سريعة', 'Quick Links', 1, 0, 0, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(3, 1, 1, 'الرئيسية', 'Home', 1, 1, 0, 'home', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(4, 2, 1, 'من نحن', 'About', 1, 1, 0, 'topic/about', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(5, 3, 1, 'خدماتنا', 'Services', 1, 3, 2, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(6, 4, 1, 'أخبارنا', 'News', 1, 2, 3, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(7, 5, 1, 'الصور', 'Photos', 1, 2, 4, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(8, 6, 1, 'الفيديو', 'Videos', 1, 3, 5, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(9, 7, 1, 'الصوتيات', 'Audio', 1, 3, 6, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(10, 8, 1, 'المنتجات', 'Products', 1, 3, 8, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(11, 9, 1, 'المدونة', 'Blog', 1, 2, 7, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(12, 10, 1, 'اتصل بنا', 'Contact', 1, 1, 0, 'contact', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(13, 1, 2, 'الرئيسية', 'Home', 1, 1, 0, 'home', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(14, 2, 2, 'من نحن', 'About Us', 1, 1, 0, 'topic/about', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(15, 3, 2, 'المدونة', 'Blog', 1, 2, 7, '', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(16, 4, 2, 'الخصوصية', 'Privacy', 1, 1, 0, 'topic/privacy', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(17, 5, 2, 'الشروط والأحكام', 'Terms & Conditions', 1, 1, 0, 'topic/terms', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(18, 6, 2, 'اتصل بنا', 'Contact Us', 1, 1, 0, 'contact', 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_migrations`
--

CREATE TABLE `smartend_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_migrations`
--

INSERT INTO `smartend_migrations` (`id`, `migration`, `batch`) VALUES
(842, '2014_04_02_193005_create_translations_table', 1),
(843, '2014_10_12_000000_create_users_table', 1),
(844, '2014_10_12_100000_create_password_resets_table', 1),
(845, '2017_02_16_230800_create_webmaster_settings_table', 1),
(846, '2017_02_16_230846_create_webmaster_sections_table', 1),
(847, '2017_02_16_230900_create_webmaster_banners_table', 1),
(848, '2017_02_16_231036_create_webmails_groups_table', 1),
(849, '2017_02_16_231044_create_webmails_files_table', 1),
(850, '2017_02_16_231053_create_webmails_table', 1),
(851, '2017_02_16_231114_create_topics_table', 1),
(852, '2017_02_16_231142_create_settings_table', 1),
(853, '2017_02_16_231230_create_sections_table', 1),
(854, '2017_02_16_231240_create_photos_table', 1),
(855, '2017_02_16_231248_create_menus_table', 1),
(856, '2017_02_16_231259_create_maps_table', 1),
(857, '2017_02_16_231306_create_events_table', 1),
(858, '2017_02_16_231317_create_countries_table', 1),
(859, '2017_02_16_231327_create_contacts_groups_table', 1),
(860, '2017_02_16_231339_create_contacts_table', 1),
(861, '2017_02_16_231346_create_comments_table', 1),
(862, '2017_02_16_231352_create_banners_table', 1),
(863, '2017_02_16_231359_create_analytics_visitors_table', 1),
(864, '2017_02_16_231409_create_analytics_pages_table', 1),
(865, '2017_02_28_095712_create_permissions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smartend_password_resets`
--

CREATE TABLE `smartend_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smartend_permissions`
--

CREATE TABLE `smartend_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_status` tinyint(4) NOT NULL DEFAULT '0',
  `add_status` tinyint(4) NOT NULL DEFAULT '0',
  `edit_status` tinyint(4) NOT NULL DEFAULT '0',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `analytics_status` tinyint(4) NOT NULL DEFAULT '0',
  `inbox_status` tinyint(4) NOT NULL DEFAULT '0',
  `newsletter_status` tinyint(4) NOT NULL DEFAULT '0',
  `calendar_status` tinyint(4) NOT NULL DEFAULT '0',
  `banners_status` tinyint(4) NOT NULL DEFAULT '0',
  `settings_status` tinyint(4) NOT NULL DEFAULT '0',
  `webmaster_status` tinyint(4) NOT NULL DEFAULT '0',
  `data_sections` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_permissions`
--

INSERT INTO `smartend_permissions` (`id`, `name`, `view_status`, `add_status`, `edit_status`, `delete_status`, `analytics_status`, `inbox_status`, `newsletter_status`, `calendar_status`, `banners_status`, `settings_status`, `webmaster_status`, `data_sections`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Webmaster', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '8,7,6,5,4,3,2,1', 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-07 18:38:38'),
(2, 'Website Manager', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '1,2,3,4,5,6,7,8', 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(3, 'Limited User', 1, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8', 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_photos`
--

CREATE TABLE `smartend_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_photos`
--

INSERT INTO `smartend_photos` (`id`, `topic_id`, `file`, `title`, `row_no`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 9, '14888159357846.jpg', '14888146802295', 1, 1, NULL, '2017-03-06 13:58:55', '2017-03-06 13:58:55'),
(2, 9, '14888159356958.jpg', '14888146712437', 1, 1, NULL, '2017-03-06 13:58:55', '2017-03-06 13:58:55'),
(3, 9, '14888159357505.jpg', '14888155324481', 2, 1, NULL, '2017-03-06 13:58:55', '2017-03-06 13:58:55'),
(4, 12, '14888160421353.jpg', '14888159357505', 1, 1, NULL, '2017-03-06 14:00:42', '2017-03-06 14:00:42'),
(6, 12, '14888162827801.jpg', '14888159356958', 2, 1, NULL, '2017-03-06 14:04:42', '2017-03-06 14:04:42'),
(7, 23, '14888185569533.jpg', 'picjumbo.com_HNCK0183', 1, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(8, 23, '14888185564870.jpg', 'picjumbo.com_HNCK0210', 1, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(9, 23, '14888185567711.jpg', 'picjumbo.com_HNCK1748', 2, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(10, 23, '14888185565392.jpg', 'picjumbo.com_HNCK5322', 2, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(11, 23, '14888185563329.jpg', 'picjumbo.com_IMG_7167', 3, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(12, 23, '14888185566343.jpg', 'picjumbo.com_IMG_7172', 3, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(13, 23, '14888185561337.jpg', 'picjumbo.com_IMG_8868', 4, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(14, 23, '14888185564002.jpg', 'picjumbo.com_IMG_7961', 4, 1, NULL, '2017-03-06 14:42:36', '2017-03-06 14:42:36'),
(15, 24, '14888186143991.jpg', 'picjumbo.com_HNCK7801', 1, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(16, 24, '14888186147889.jpg', 'picjumbo.com_HNCK7784', 2, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(17, 24, '14888186147423.jpg', 'picjumbo.com_HNCK8360', 3, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(18, 24, '14888186141400.jpg', 'picjumbo.com_HNCK8458', 4, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(19, 24, '14888186147346.jpg', 'picjumbo.com_HNCK9016', 5, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(20, 24, '14888186141502.jpg', 'picjumbo.com_IMG_3212', 5, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(21, 24, '14888186143432.jpg', 'picjumbo.com_IMG_5992', 6, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(22, 24, '14888186147500.jpg', 'picjumbo.com_IMG_3640', 6, 1, NULL, '2017-03-06 14:43:34', '2017-03-06 14:43:34'),
(23, 25, '14888186704977.jpg', 'picjumbo.com_HNCK4011', 1, 1, NULL, '2017-03-06 14:44:30', '2017-03-06 14:44:30'),
(24, 25, '14888186701922.jpg', 'picjumbo.com_HNCK3988', 1, 1, NULL, '2017-03-06 14:44:30', '2017-03-06 14:44:30'),
(25, 25, '14888186716815.jpg', 'picjumbo.com_HNCK7802', 2, 1, NULL, '2017-03-06 14:44:31', '2017-03-06 14:44:31'),
(26, 25, '14888186711726.jpg', 'picjumbo.com_HNCK7775', 2, 1, NULL, '2017-03-06 14:44:31', '2017-03-06 14:44:31'),
(27, 25, '14888186715386.jpg', 'picjumbo.com_HNCK8404', 3, 1, NULL, '2017-03-06 14:44:31', '2017-03-06 14:44:31'),
(28, 25, '14888186717969.jpg', 'picjumbo.com_HNCK8478', 3, 1, NULL, '2017-03-06 14:44:31', '2017-03-06 14:44:31'),
(29, 25, '14888186717433.jpg', 'picjumbo.com_HNCK8495', 4, 1, NULL, '2017-03-06 14:44:31', '2017-03-06 14:44:31'),
(30, 25, '14888186717917.jpg', 'picjumbo.com_HNCK8991', 4, 1, NULL, '2017-03-06 14:44:31', '2017-03-06 14:44:31'),
(31, 26, '14888187058652.jpg', 'picjumbo.com_HNCK0210', 1, 1, NULL, '2017-03-06 14:45:05', '2017-03-06 14:45:05'),
(32, 26, '14888187054122.jpg', 'picjumbo.com_HNCK0183', 1, 1, NULL, '2017-03-06 14:45:05', '2017-03-06 14:45:05'),
(33, 26, '14888187065068.jpg', 'picjumbo.com_HNCK1748', 2, 1, NULL, '2017-03-06 14:45:06', '2017-03-06 14:45:06'),
(34, 26, '14888187067771.jpg', 'picjumbo.com_HNCK5322', 2, 1, NULL, '2017-03-06 14:45:06', '2017-03-06 14:45:06'),
(35, 26, '14888187065221.jpg', 'picjumbo.com_IMG_7167', 3, 1, NULL, '2017-03-06 14:45:06', '2017-03-06 14:45:06'),
(36, 26, '14888187065292.jpg', 'picjumbo.com_IMG_7172', 3, 1, NULL, '2017-03-06 14:45:06', '2017-03-06 14:45:06'),
(37, 26, '14888187061421.jpg', 'picjumbo.com_IMG_8868', 4, 1, NULL, '2017-03-06 14:45:06', '2017-03-06 14:45:06'),
(38, 26, '14888187063601.jpg', 'picjumbo.com_IMG_7961', 4, 1, NULL, '2017-03-06 14:45:06', '2017-03-06 14:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_sections`
--

CREATE TABLE `smartend_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `visits` int(11) NOT NULL,
  `webmaster_id` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `seo_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_sections`
--

INSERT INTO `smartend_sections` (`id`, `title_ar`, `title_en`, `photo`, `icon`, `status`, `visits`, `webmaster_id`, `father_id`, `row_no`, `seo_title_ar`, `seo_title_en`, `seo_description_ar`, `seo_description_en`, `seo_keywords_ar`, `seo_keywords_en`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'تصميم المواقع', 'Web Design', NULL, 'fa-desktop', 1, 0, 7, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:11:25', '2017-03-06 14:11:25'),
(2, 'تطبيقات الهواتف', 'Mobile Applications', NULL, 'fa-apple', 1, 0, 7, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:11:50', '2017-03-06 14:11:50'),
(3, 'رسوم متحركة', 'Motion Draws', NULL, 'fa-motorcycle', 1, 0, 7, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:12:24', '2017-03-06 14:12:24'),
(4, 'تطوير الويب', 'Web Development', NULL, 'fa-html5', 1, 0, 7, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:12:51', '2017-03-06 14:12:51'),
(5, 'تصميم المطبوعات', 'Publications Design', NULL, 'fa-connectdevelop', 1, 0, 7, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:13:41', '2017-03-06 14:13:41'),
(6, 'أرشفة المواقع', 'Search Engines Optmization', NULL, 'fa-line-chart', 1, 0, 7, 0, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:21:52', '2017-03-06 14:21:52'),
(7, 'تصميم ثلاثي اأبعاد', '3d Design', NULL, 'fa-modx', 1, 0, 7, 0, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:22:50', '2017-03-06 14:22:50'),
(8, 'الطبيعة', 'Nature', NULL, 'fa-leaf', 1, 5, 5, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:48:06', '2017-07-14 20:02:29'),
(9, 'مدن وعواصم', 'Cities', NULL, 'fa-map-o', 1, 3, 5, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:48:43', '2017-07-14 20:29:11'),
(10, 'مغامرات', 'Adventures', NULL, 'fa-flag-checkered', 1, 1, 5, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:49:27', '2017-03-09 12:09:53'),
(12, 'فيديوهات يوتيوب', 'Youtube Videos', NULL, 'fa-youtube', 1, 1, 5, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 15:10:10', '2017-03-09 17:43:46'),
(13, 'فيديوهات فيميو', 'Vimeo videos', NULL, 'fa-vimeo', 1, 0, 5, 0, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 15:10:37', '2017-03-06 15:10:37'),
(14, 'فيديوهات محملة', 'Hosted videos', NULL, 'fa-database', 1, 0, 5, 0, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 15:11:22', '2017-03-06 15:11:22'),
(15, 'سولو', 'Solo', NULL, NULL, 1, 3, 6, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 16:44:08', '2017-03-09 17:58:23'),
(16, 'بوب ميوزك', 'POP', NULL, NULL, 1, 0, 6, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 16:44:24', '2017-03-06 16:44:24'),
(17, 'صوتيات متنوعة', 'Other Sounds', NULL, NULL, 1, 0, 6, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 16:44:49', '2017-03-06 16:45:30'),
(18, 'اصوات موسيقية', 'Music Sounds', NULL, NULL, 1, 0, 6, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 16:45:19', '2017-03-06 16:45:30'),
(19, 'قسم منتجات ١', 'Product Category 1', NULL, NULL, 1, 1, 8, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 16:49:22', '2017-03-09 15:15:32'),
(20, 'قسم منتجات ٢', 'Product Category 2', NULL, NULL, 1, 0, 8, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 16:49:41', '2017-03-06 16:52:12'),
(21, 'قسم منتجات ٣', 'Product Category 3', NULL, NULL, 1, 0, 8, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 16:50:00', '2017-03-06 16:52:17'),
(22, 'قسم منتجات ٤', 'Product Category 4', NULL, NULL, 1, 0, 8, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 16:50:25', '2017-03-06 16:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_settings`
--

CREATE TABLE `smartend_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_webmails` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify_messages_status` tinyint(4) DEFAULT NULL,
  `notify_comments_status` tinyint(4) DEFAULT NULL,
  `notify_orders_status` tinyint(4) DEFAULT NULL,
  `site_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_status` tinyint(4) NOT NULL,
  `close_msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link7` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link8` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link9` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link10` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t1_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t1_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t7_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t7_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style_logo_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_logo_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_fav` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_apple` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_color1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_color2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_type` tinyint(4) DEFAULT NULL,
  `style_bg_type` tinyint(4) DEFAULT NULL,
  `style_bg_pattern` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_subscribe` tinyint(4) DEFAULT NULL,
  `style_footer` tinyint(4) DEFAULT NULL,
  `style_footer_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_preload` tinyint(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_settings`
--

INSERT INTO `smartend_settings` (`id`, `site_title_ar`, `site_title_en`, `site_desc_ar`, `site_desc_en`, `site_keywords_ar`, `site_keywords_en`, `site_webmails`, `notify_messages_status`, `notify_comments_status`, `notify_orders_status`, `site_url`, `site_status`, `close_msg`, `social_link1`, `social_link2`, `social_link3`, `social_link4`, `social_link5`, `social_link6`, `social_link7`, `social_link8`, `social_link9`, `social_link10`, `contact_t1_ar`, `contact_t1_en`, `contact_t3`, `contact_t4`, `contact_t5`, `contact_t6`, `contact_t7_ar`, `contact_t7_en`, `style_logo_ar`, `style_logo_en`, `style_fav`, `style_apple`, `style_color1`, `style_color2`, `style_type`, `style_bg_type`, `style_bg_pattern`, `style_bg_color`, `style_bg_image`, `style_subscribe`, `style_footer`, `style_footer_bg`, `style_preload`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'اسم وعنوان الموقع', 'Smartend Laravel Site Preview', 'وصف الموقع الإلكتروني ونبذة قصيره عنه', 'Website description and some little information about it', 'كلمات، دلالية، موقع، موقع إلكتروني', 'key, words, website, web', 'info@sitename.com', 1, 1, 1, 'http://www.sitename.com/', 1, 'Website under maintenance \n<h1>Comming SOON</h1>', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', 'المبني - اسم الشارع - المدينة - الدولة', 'Building, Street name, City, Country', '+(00) 0123456789', '+(00) 0123456789', '+(00) 0123456789', 'info@sitename.com', 'من الأحد إلى الخميس 08:00 ص - 05:00 م', 'Sunday to Thursday 08:00 AM to 05:00 PM', '14888091199919.png', '14888076859778.png', '14888091191764.png', '14888091198179.png', '#3494c8', '#2e3e4e', 0, 0, NULL, '#2e3e4e', NULL, 1, 1, NULL, 0, 1, 1, '2017-03-06 11:06:23', '2017-07-14 20:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_topics`
--

CREATE TABLE `smartend_topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_ar` longtext COLLATE utf8mb4_unicode_ci,
  `details_en` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `expire_date` int(11) DEFAULT NULL,
  `video_type` tinyint(4) DEFAULT NULL,
  `photo_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attach_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_file` text COLLATE utf8mb4_unicode_ci,
  `audio_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `visits` int(11) NOT NULL,
  `webmaster_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `seo_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_topics`
--

INSERT INTO `smartend_topics` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `date`, `expire_date`, `video_type`, `photo_file`, `attach_file`, `video_file`, `audio_file`, `icon`, `status`, `visits`, `webmaster_id`, `section_id`, `row_no`, `seo_title_ar`, `seo_title_en`, `seo_description_ar`, `seo_description_en`, `seo_keywords_ar`, `seo_keywords_en`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'من نحن', 'About Us', '<h4 style="text-align: justify;">رؤيتنا</h4>\r\n<p style="text-align: justify;">أن نصبح الشركة الرائدة في هذا المجال على مستوى الشرق الأوسط والمستوي العالمي من خلال الاستفادة من الأفكار المتميزة، ونحن نعمل على تقديم حلول فريدة لعملائنا الكرام لتكون مطابقة لتوقعاتهم من خلال تقديم الخدمات الفعالة.أن نصبح الشركة الرائدة في هذا المجال على مستوى الشرق الأوسط والمستوي العالمي من خلال الاستفادة من الأفكار المتميزة، ونحن نعمل على تقديم حلول فريدة لعملائنا الكرام لتكون مطابقة لتوقعاتهم من خلال تقديم الخدمات الفعالة.</p><p style="text-align: justify;"><br></p>\r\n<h4 style="text-align: justify;">رسالتنا</h4>\r\n<p style="text-align: justify;">رسالتنا هي تمكين عملائنا من تطوير أعمالهم من خلال الأفكار المتميزة، وتقديم الاستشارات الموثوقة والخدمة عالية الجودة، بالإضافة إلى تأسيس مكان رائع نعمل من أجله والذي يجذب الأشخاص المميزين ويعمل على تطويرهم والاحتفاظ بهم.رسالتنا هي تمكين عملائنا من تطوير أعمالهم من خلال الأفكار المتميزة، وتقديم الاستشارات الموثوقة والخدمة عالية الجودة، بالإضافة إلى تأسيس مكان رائع نعمل من أجله والذي يجذب الأشخاص المميزين ويعمل على تطويرهم والاحتفاظ بهم.</p><p style="text-align: justify;"><br></p>\r\n<h4 style="text-align: justify;">فريق العمل</h4>\r\n<p style="text-align: justify;">إن فريق عملنا متنوع ونتفاعل مع بعضنا البعض باحترام متبادل بغض النظر عن الجنس أو الجنسية أو الدين أو العرق، كما نثق في بعضنا البعض ونؤمن بالعدالة والشفافية، نحن نخلق بيئة تعزز التعاون و الإنجازات المتميزة.إن فريق عملنا متنوع ونتفاعل مع بعضنا البعض باحترام متبادل بغض النظر عن الجنس أو الجنسية أو الدين أو العرق، كما نثق في بعضنا البعض ونؤمن بالعدالة والشفافية، نحن نخلق بيئة تعزز التعاون و الإنجازات المتميزة.</p>', '<h4 style="text-align: justify; ">Our Vision</h4>\r\n<p style="text-align: justify;">Our vision is to become the leading Company in the region. Using innovative ideas, we provide best of breed solutions . Combining creative problem solving, solid service delivery model.Our vision is to become the leading Company in the region. Using innovative ideas, we provide best of breed solutions . Combining creative problem solving, solid service delivery model.</p><p style="text-align: justify;"><br></p>\r\n<h4 style="text-align: justify; ">Our Mission</h4>\r\n<p style="text-align: justify;">Our mission is to enable our clients to develop their business through innovative ideas, advice and quality of service. And to build a great place to work for, that develops and retains great people.Our mission is to enable our clients to develop their business through innovative ideas, advice and quality of service. And to build a great place to work for, that develops and retains great people.</p><p style="text-align: justify;"><br></p>\r\n<h4 style="text-align: justify;">Work Team</h4>\r\n<p style="text-align: justify;">Our team is diversified and we interact with each other with mutual respect regardless of gender, nationality and background. We trust each other and believe in fairness and transparency.Our vision is to become the leading Company in the region. Using innovative ideas, we provide best of breed solutions . Combining creative problem solving, solid service delivery model.</p>', '2017-03-06', NULL, NULL, '14888121759700.jpg', NULL, '', NULL, NULL, 1, 38, 1, 0, 1, 'عن الموقع', 'About Smartend', 'وصف الصفحة الخاصة بمن نحن ليساعد على الأرشفة', 'Page description for good SEO', 'من نحن، نبذة عنا، وصف الموقع، كلمات ، دلالية', 'About, who us, kewords, smartend', 1, 1, '2017-03-06 11:06:24', '2017-07-14 19:56:14'),
(2, 'اتصل بنا', 'Contact Us', '', '', '2017-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 21, 1, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 11:06:24', '2017-07-14 19:48:48'),
(3, 'الخصوصية', 'Privacy', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', '2017-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(4, 'الشروط والأحكام', 'Terms & Conditions', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', '2017-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 11:06:24', '2017-03-06 11:06:24'),
(5, 'نص تجريبي لاختبار خدمة', 'Nullam mollis dolor', '<div dir="rtl"><div dir="rtl" style="text-align: justify; font-size: 13.92px;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify; font-size: 13.92px;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify; font-size: 13.92px;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="text-align: justify; font-size: 13.92px;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify; font-size: 13.92px;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="text-align: justify; ">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="text-align: justify;">&nbsp;</div><div style="text-align: justify;"><br></div></div>', '2017-03-06', NULL, NULL, '14888139271255.jpg', NULL, '', NULL, 'fa-ambulance', 1, 27, 2, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:25:27', '2017-09-12 12:11:54'),
(6, 'عنوان تجريبي للخدمات', 'Sample Lorem Text', '<div dir="rtl"><div dir="rtl" style="text-align: justify; ">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify; ">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="text-align: justify;">&nbsp;</div><div style="text-align: justify;"><br></div></div>', '2017-03-06', NULL, NULL, '14888139889647.jpg', NULL, '', NULL, 'fa-cart-plus', 1, 2, 2, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:26:28', '2017-03-07 17:50:42'),
(7, 'عنوان تجريبي من الخدمات', 'Gravida tellus suscipit', '<div dir="rtl"><div dir="rtl" style="text-align: justify; ">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify; ">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="text-align: justify; ">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="text-align: justify;">&nbsp;</div><div style="text-align: justify;"><br></div></div>', '2017-03-06', NULL, NULL, '14888140236712.jpg', NULL, '', NULL, 'fa-pie-chart', 1, 4, 2, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:27:03', '2017-03-07 13:20:33'),
(8, 'نص تجريبي من النصوص', 'Curabitur sit amet era', '<div dir="rtl"><div dir="rtl" style="text-align: justify; ">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="text-align: justify; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="text-align: justify; ">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="text-align: justify;">&nbsp;</div><div style="text-align: justify;"><br></div></div>', '2017-03-06', NULL, NULL, '14888140657735.jpg', NULL, '', NULL, 'fa-coffee', 1, 1, 2, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:27:45', '2017-03-06 16:42:54'),
(9, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text, sed imperdiet nulla tellus ut diam.', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-06', NULL, NULL, '14888146415538.jpg', NULL, '', NULL, NULL, 1, 12, 3, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:37:21', '2017-03-07 13:24:05'),
(10, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Aliquam suscipit, lacus a iaculis adipiscing, Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-06', NULL, NULL, '14888146712437.jpg', NULL, '', NULL, NULL, 1, 3, 3, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:37:51', '2017-03-07 13:23:50'),
(11, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text.Suspendisse potenti. Vestibulum lacus', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-06', NULL, NULL, '14888146802295.jpg', NULL, '', NULL, NULL, 1, 0, 3, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:38:00', '2017-03-06 14:09:33');
INSERT INTO `smartend_topics` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `date`, `expire_date`, `video_type`, `photo_file`, `attach_file`, `video_file`, `audio_file`, `icon`, `status`, `visits`, `webmaster_id`, `section_id`, `row_no`, `seo_title_ar`, `seo_title_en`, `seo_description_ar`, `seo_description_en`, `seo_keywords_ar`, `seo_keywords_en`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(12, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Suspendisse potenti. Vestibulum lacus Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-06', NULL, NULL, '14888146896446.jpg', NULL, '', NULL, NULL, 1, 3, 3, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 13:38:09', '2017-03-06 14:09:46'),
(13, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-06', NULL, NULL, '14888155135678.jpg', NULL, NULL, NULL, NULL, 1, 0, 3, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 13:51:53', '2017-03-06 13:51:53'),
(14, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-06', NULL, NULL, '14888155324481.jpg', NULL, NULL, NULL, NULL, 1, 0, 3, 0, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 13:52:12', '2017-03-06 13:52:12'),
(15, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888170311535.jpg', NULL, '', NULL, NULL, 1, 5, 7, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 14:17:11', '2017-03-09 15:16:16'),
(16, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888170546118.jpg', NULL, '', NULL, NULL, 1, 2, 7, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 14:17:34', '2017-03-06 16:14:40'),
(17, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888170654620.jpg', NULL, '', NULL, NULL, 1, 1, 7, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 14:17:45', '2017-03-09 13:13:57'),
(18, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888170745161.jpg', NULL, '', NULL, NULL, 1, 0, 7, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 14:17:54', '2017-03-06 14:29:33'),
(19, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text, sed imperdiet nulla tellus ut diam.', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888170858180.jpg', NULL, NULL, NULL, NULL, 1, 0, 7, 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:18:05', '2017-03-06 14:18:05');
INSERT INTO `smartend_topics` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `date`, `expire_date`, `video_type`, `photo_file`, `attach_file`, `video_file`, `audio_file`, `icon`, `status`, `visits`, `webmaster_id`, `section_id`, `row_no`, `seo_title_ar`, `seo_title_en`, `seo_description_ar`, `seo_description_en`, `seo_keywords_ar`, `seo_keywords_en`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(20, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text, sed imperdiet nulla tellus ut diam.', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888170994430.jpg', NULL, NULL, NULL, NULL, 1, 2, 7, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:18:19', '2017-03-06 14:19:34'),
(21, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text, sed imperdiet nulla tellus ut diam.', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888171106415.jpg', NULL, NULL, NULL, NULL, 1, 3, 7, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:18:30', '2017-03-06 14:20:13'),
(22, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text, sed imperdiet nulla tellus ut diam.', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div><br></div></div>', '2017-03-06', NULL, NULL, '14888171164162.jpg', NULL, NULL, NULL, NULL, 1, 3, 7, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:18:36', '2017-03-06 14:20:33'),
(23, 'جالري صور ١', 'Cars Gallery', NULL, NULL, '2017-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 4, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:42:03', '2017-03-06 14:42:03'),
(24, 'جالري صور ٢', 'Phones Gallery', NULL, NULL, '2017-03-06', NULL, NULL, NULL, NULL, '', NULL, NULL, 1, 0, 4, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 14:43:18', '2017-03-06 14:43:47'),
(25, 'جالري صور 3', 'Laptops Gallery', NULL, NULL, '2017-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 4, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:44:17', '2017-03-06 14:44:17'),
(26, 'جالري صور 4', 'Other Gallery', NULL, NULL, '2017-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 4, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:44:54', '2017-03-06 14:45:22'),
(27, 'طبيعة فيديو ١', 'Nature Video 1', NULL, NULL, '2017-03-06', NULL, 1, NULL, NULL, 'https://www.youtube.com/watch?v=PCwL3-hkKrg', NULL, NULL, 1, 0, 5, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-06 14:53:42', '2017-03-06 14:53:42'),
(28, 'فيدو معامرات ١', 'Video title here', NULL, NULL, '2017-03-06', NULL, 0, '14888196096249.jpg', NULL, '14888199269864.mp4', NULL, NULL, 1, 1, 5, 14, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 14:58:07', '2017-03-07 19:16:49'),
(29, 'مثال لفيديو من يوتيوب', 'Sample for youtube videos', NULL, NULL, '2017-03-06', NULL, 1, NULL, NULL, 'https://www.youtube.com/watch?v=fHfb5-7xLtc', NULL, NULL, 1, 0, 5, 12, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-06 15:12:20', '2017-07-14 20:25:04'),
(32, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-07', NULL, NULL, '14889008041514.jpg', NULL, NULL, NULL, NULL, 1, 0, 8, 19, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-07 13:33:24', '2017-03-07 13:33:24'),
(33, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-07', NULL, NULL, '14889008137532.jpg', NULL, NULL, NULL, NULL, 1, 0, 8, 19, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-07 13:33:33', '2017-03-07 13:33:33'),
(34, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-07', NULL, NULL, '14889008358884.jpg', NULL, NULL, NULL, NULL, 1, 0, 8, 20, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-07 13:33:55', '2017-03-07 13:33:55'),
(35, 'نص تجريبي لاختبار شكل و حجم النصوص', 'Sample Lorem Ipsum Text', '<div dir="rtl"><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع&nbsp;</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">.يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div><div dir="rtl" style="font-size: 13.92px; text-align: justify;">هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع. هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضها في هذا المكان و حجم و لون الخط حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة هذا النص كنص تجريبي للمعاينة فقط وهو لا يعبر عن أي موضوع محدد انما لتحديد الشكل العام للقسم او الصفحة أو الموقع.</div></div>', '<div dir="ltr"><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a nulla. Ut a orci. Curabitur dolor nunc, egestas at, accumsan at, malesuada nec, magna.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Nulla facilisi. Nunc volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut sit amet orci vel mauris blandit vehicula. Nullam quis enim. Integer dignissim viverra velit. Curabitur in odio. In hac habitasse platea dictumst. Ut consequat, tellus eu volutpat varius, justo orci elementum dolor, sed imperdiet nulla tellus ut diam. Vestibulum ipsum ante, malesuada quis, tempus ac, placerat sit amet, elit.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec semper, sem nec tristique tempus, justo neque commodo nisl, ut gravida sem tellus suscipit nunc. Aliquam erat volutpat. Ut tincidunt pretium elit. Aliquam pulvinar. Nulla cursus. Suspendisse potenti. Etiam condimentum hendrerit felis. Duis iaculis aliquam enim. Donec dignissim augue vitae orci. Curabitur luctus felis a metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius neque at enim. Suspendisse massa nulla, viverra in, bibendum vitae, tempor quis, lorem.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">Donec dapibus orci sit amet elit. Maecenas rutrum ultrices lectus. Aliquam suscipit, lacus a iaculis adipiscing, eros orci pellentesque nisl, non pharetra dolor urna nec dolor. Integer cursus dolor vel magna. Integer ultrices feugiat sem. Proin nec nibh. Duis eu dui quis nunc sagittis lobortis. Fusce pharetra, enim ut sodales luctus, lectus arcu rhoncus purus, in fringilla augue elit vel lacus. In hac habitasse platea dictumst. Aliquam erat volutpat. Fusce iaculis elit id tellus. Ut accumsan malesuada turpis. Suspendisse potenti. Vestibulum lacus augue, lobortis mattis, laoreet in, varius at, nisi. Nunc gravida. Phasellus faucibus. In hac habitasse platea dictumst. Integer tempor lacus eget lectus. Praesent fringilla augue fringilla dui.</div><div dir="ltr" style="font-size: 13.92px; text-align: justify;">&nbsp;</div><div style="text-align: justify; "><br></div></div>', '2017-03-07', NULL, NULL, '14889008434898.jpg', NULL, NULL, NULL, NULL, 1, 0, 8, 20, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-03-07 13:34:03', '2017-03-07 13:34:03'),
(36, 'ملف صوتي تجريبي', 'Demo audio file', NULL, NULL, '2017-03-07', NULL, NULL, '14889212898656.jpg', NULL, NULL, '14889211008041.mp3', NULL, 1, 4, 6, 15, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-03-07 19:11:40', '2017-03-09 17:29:42'),
(37, 'sadsad', 'sdsad', NULL, NULL, '2017-07-14', NULL, 3, NULL, NULL, '<iframe width="640" height="260" src="https://www.youtube.com/embed/uvGZGW5jyX8" frameborder="0" allowfullscreen></iframe>', NULL, NULL, 1, 3, 5, 9, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2017-07-14 20:21:13', '2017-07-14 20:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_users`
--

CREATE TABLE `smartend_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `connect_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connect_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_users`
--

INSERT INTO `smartend_users` (`id`, `name`, `email`, `password`, `photo`, `permissions_id`, `status`, `connect_email`, `connect_password`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@site.com', '$2y$10$/ooisWUrqwYi9cES0kcZluFQtnguMSuE1mdk04WdreAvXUbDXGJWa', '', 1, 1, NULL, NULL, 'VTkTEBKCCF8aaTrdVZ5ThGviiHvVrHhCxK7GODfhsXBxgeZVs71gou76jazj', 1, 1, '2017-03-06 11:06:23', '2017-03-09 20:54:24'),
(2, 'manager', 'manager@site.com', '$2y$10$GPI.ppkvZfKPZ2nUW7ha1eFo8bpxBfR.XNpM9cHqJZw4bg4EB1zqW', NULL, 2, 0, NULL, NULL, 'Td1PGVFpaqQrvPIQAPxLu8R9cwU6kjq0eIKKbWhFnW9fBz8t29BITHvw7i2A', 1, NULL, '2017-03-06 11:06:23', '2017-03-07 18:32:33'),
(3, 'user', 'user@site.com', '$2y$10$O1Th0cOCd0DmE969NMsJF.NdAMXDV6s44/yzeU0ZJdho6zTBALuk.', NULL, 3, 0, NULL, NULL, NULL, 1, NULL, '2017-03-06 11:06:23', '2017-03-07 18:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_webmails`
--

CREATE TABLE `smartend_webmails` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `father_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_cc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_bcc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_webmails`
--

INSERT INTO `smartend_webmails` (`id`, `cat_id`, `group_id`, `contact_id`, `father_id`, `title`, `details`, `date`, `from_email`, `from_name`, `from_phone`, `to_email`, `to_name`, `to_cc`, `to_bcc`, `status`, `flag`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 2, NULL, NULL, 'ORDER , Qty=12, Nullam mollis dolor', 'dfdfd', '2017-03-07 15:21:20', 'eng_m_mondy@hotmail.com', 'mohamed mondi', '01221485486', 'info@sitename.com', 'Smartend Laravel Site Preview', NULL, NULL, 0, 0, NULL, NULL, '2017-03-07 13:21:20', '2017-03-07 17:37:48'),
(2, 0, NULL, NULL, NULL, 'Need your help', 'Dear sir,\r\nI need your help to subscribe to your team. Please contact me as soon as possible.\r\n\r\nBest Regards', '2017-03-07 16:04:16', 'ayamen@site.com', 'Amar Yamen', '8378-475-466', 'info@sitename.com', 'Smartend Laravel Site Preview', NULL, NULL, 0, 0, NULL, NULL, '2017-03-07 14:04:16', '2017-03-07 14:04:16'),
(3, 0, 3, NULL, NULL, 'My test message to this site', 'I just test sending messages\r\nThanks', '2017-03-07 16:05:32', 'email@site.com', 'Donyo Hawa', '343423-543', 'info@sitename.com', 'Smartend Laravel Site Preview', NULL, NULL, 0, 0, NULL, NULL, '2017-03-07 14:05:32', '2017-03-07 14:11:59'),
(4, 0, 1, NULL, NULL, 'Contact me for support any time', 'This is a test message', '2017-03-07 16:10:29', 'email@site.com', 'MMondi', '7363758', 'info@sitename.com', 'Smartend Laravel Site Preview', NULL, NULL, 0, 0, NULL, NULL, '2017-03-07 14:10:29', '2017-03-07 14:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_webmails_files`
--

CREATE TABLE `smartend_webmails_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `webmail_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smartend_webmails_groups`
--

CREATE TABLE `smartend_webmails_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_webmails_groups`
--

INSERT INTO `smartend_webmails_groups` (`id`, `name`, `color`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Support', '# 00bcd4', 1, NULL, '2017-03-07 14:10:58', '2017-03-07 14:10:58'),
(2, 'Orders', '#f44336', 1, NULL, '2017-03-07 14:11:04', '2017-03-07 14:11:04'),
(3, 'Queries', '#8bc34a', 1, NULL, '2017-03-07 14:11:37', '2017-03-07 14:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_webmaster_banners`
--

CREATE TABLE `smartend_webmaster_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `row_no` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `desc_status` tinyint(4) NOT NULL,
  `link_status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `icon_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_webmaster_banners`
--

INSERT INTO `smartend_webmaster_banners` (`id`, `row_no`, `name`, `width`, `height`, `desc_status`, `link_status`, `type`, `icon_status`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'homeBanners', 1600, 500, 1, 1, 1, 0, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(2, 2, 'textBanners', 330, 330, 1, 1, 0, 1, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(3, 3, 'sideBanners', 330, 330, 0, 1, 1, 0, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_webmaster_sections`
--

CREATE TABLE `smartend_webmaster_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `row_no` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `sections_status` tinyint(4) NOT NULL,
  `comments_status` tinyint(4) NOT NULL,
  `date_status` tinyint(4) NOT NULL,
  `expire_date_status` tinyint(4) NOT NULL,
  `longtext_status` tinyint(4) NOT NULL,
  `editor_status` tinyint(4) NOT NULL,
  `attach_file_status` tinyint(4) NOT NULL,
  `extra_attach_file_status` tinyint(4) NOT NULL,
  `multi_images_status` tinyint(4) NOT NULL,
  `section_icon_status` tinyint(4) NOT NULL,
  `icon_status` tinyint(4) NOT NULL,
  `maps_status` tinyint(4) NOT NULL,
  `order_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_webmaster_sections`
--

INSERT INTO `smartend_webmaster_sections` (`id`, `row_no`, `name`, `type`, `sections_status`, `comments_status`, `date_status`, `expire_date_status`, `longtext_status`, `editor_status`, `attach_file_status`, `extra_attach_file_status`, `multi_images_status`, `section_icon_status`, `icon_status`, `maps_status`, `order_status`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'sitePages', 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, '2017-03-06 11:06:23', '2017-03-06 16:41:54'),
(2, 2, 'services', 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2017-03-06 11:06:23', '2017-09-12 12:08:05'),
(3, 3, 'news', 0, 0, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 1, '2017-03-06 11:06:23', '2017-09-12 12:07:46'),
(4, 4, 'photos', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(5, 5, 'videos', 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(6, 6, 'sounds', 3, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(7, 7, 'blog', 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23'),
(8, 8, 'products', 0, 2, 1, 0, 0, 1, 1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, '2017-03-06 11:06:23', '2017-09-12 12:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `smartend_webmaster_settings`
--

CREATE TABLE `smartend_webmaster_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_box_status` tinyint(4) NOT NULL,
  `en_box_status` tinyint(4) NOT NULL,
  `seo_status` tinyint(4) NOT NULL,
  `analytics_status` tinyint(4) NOT NULL,
  `banners_status` tinyint(4) NOT NULL,
  `inbox_status` tinyint(4) NOT NULL,
  `calendar_status` tinyint(4) NOT NULL,
  `settings_status` tinyint(4) NOT NULL,
  `newsletter_status` tinyint(4) NOT NULL,
  `members_status` tinyint(4) NOT NULL,
  `orders_status` tinyint(4) NOT NULL,
  `shop_status` tinyint(4) NOT NULL,
  `shop_settings_status` tinyint(4) NOT NULL,
  `default_currency_id` int(11) NOT NULL,
  `languages_count` int(11) NOT NULL,
  `latest_news_section_id` int(11) NOT NULL,
  `header_menu_id` int(11) NOT NULL,
  `footer_menu_id` int(11) NOT NULL,
  `home_banners_section_id` int(11) NOT NULL,
  `home_text_banners_section_id` int(11) NOT NULL,
  `side_banners_section_id` int(11) NOT NULL,
  `contact_page_id` int(11) NOT NULL,
  `newsletter_contacts_group` int(11) NOT NULL,
  `new_comments_status` tinyint(4) NOT NULL,
  `home_content1_section_id` int(11) NOT NULL,
  `home_content2_section_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smartend_webmaster_settings`
--

INSERT INTO `smartend_webmaster_settings` (`id`, `ar_box_status`, `en_box_status`, `seo_status`, `analytics_status`, `banners_status`, `inbox_status`, `calendar_status`, `settings_status`, `newsletter_status`, `members_status`, `orders_status`, `shop_status`, `shop_settings_status`, `default_currency_id`, `languages_count`, `latest_news_section_id`, `header_menu_id`, `footer_menu_id`, `home_banners_section_id`, `home_text_banners_section_id`, `side_banners_section_id`, `contact_page_id`, `newsletter_contacts_group`, `new_comments_status`, `home_content1_section_id`, `home_content2_section_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 2, 3, 1, 2, 1, 2, 3, 2, 1, 1, 7, 4, 1, NULL, '2017-03-06 11:06:23', '2017-03-06 11:06:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smartend_analytics_pages`
--
ALTER TABLE `smartend_analytics_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_analytics_visitors`
--
ALTER TABLE `smartend_analytics_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_attach_files`
--
ALTER TABLE `smartend_attach_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_banners`
--
ALTER TABLE `smartend_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_comments`
--
ALTER TABLE `smartend_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_contacts`
--
ALTER TABLE `smartend_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_contacts_groups`
--
ALTER TABLE `smartend_contacts_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_countries`
--
ALTER TABLE `smartend_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_events`
--
ALTER TABLE `smartend_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_ltm_translations`
--
ALTER TABLE `smartend_ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_maps`
--
ALTER TABLE `smartend_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_menus`
--
ALTER TABLE `smartend_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_migrations`
--
ALTER TABLE `smartend_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_password_resets`
--
ALTER TABLE `smartend_password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `smartend_permissions`
--
ALTER TABLE `smartend_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_photos`
--
ALTER TABLE `smartend_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_sections`
--
ALTER TABLE `smartend_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_settings`
--
ALTER TABLE `smartend_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_topics`
--
ALTER TABLE `smartend_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_users`
--
ALTER TABLE `smartend_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `smartend_webmails`
--
ALTER TABLE `smartend_webmails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_webmails_files`
--
ALTER TABLE `smartend_webmails_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_webmails_groups`
--
ALTER TABLE `smartend_webmails_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_webmaster_banners`
--
ALTER TABLE `smartend_webmaster_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_webmaster_sections`
--
ALTER TABLE `smartend_webmaster_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartend_webmaster_settings`
--
ALTER TABLE `smartend_webmaster_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smartend_analytics_pages`
--
ALTER TABLE `smartend_analytics_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smartend_analytics_visitors`
--
ALTER TABLE `smartend_analytics_visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smartend_attach_files`
--
ALTER TABLE `smartend_attach_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `smartend_banners`
--
ALTER TABLE `smartend_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `smartend_comments`
--
ALTER TABLE `smartend_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `smartend_contacts`
--
ALTER TABLE `smartend_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `smartend_contacts_groups`
--
ALTER TABLE `smartend_contacts_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `smartend_countries`
--
ALTER TABLE `smartend_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `smartend_events`
--
ALTER TABLE `smartend_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `smartend_ltm_translations`
--
ALTER TABLE `smartend_ltm_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smartend_maps`
--
ALTER TABLE `smartend_maps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `smartend_menus`
--
ALTER TABLE `smartend_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `smartend_migrations`
--
ALTER TABLE `smartend_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=866;
--
-- AUTO_INCREMENT for table `smartend_permissions`
--
ALTER TABLE `smartend_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `smartend_photos`
--
ALTER TABLE `smartend_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `smartend_sections`
--
ALTER TABLE `smartend_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `smartend_settings`
--
ALTER TABLE `smartend_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `smartend_topics`
--
ALTER TABLE `smartend_topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `smartend_users`
--
ALTER TABLE `smartend_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `smartend_webmails`
--
ALTER TABLE `smartend_webmails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `smartend_webmails_files`
--
ALTER TABLE `smartend_webmails_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smartend_webmails_groups`
--
ALTER TABLE `smartend_webmails_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `smartend_webmaster_banners`
--
ALTER TABLE `smartend_webmaster_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `smartend_webmaster_sections`
--
ALTER TABLE `smartend_webmaster_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `smartend_webmaster_settings`
--
ALTER TABLE `smartend_webmaster_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
