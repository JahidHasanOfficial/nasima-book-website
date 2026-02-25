-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2026 at 04:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasima_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_feature`
--

CREATE TABLE `about_feature` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` mediumtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `why_icon` varchar(150) NOT NULL,
  `userPic` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_feature`
--

INSERT INTO `about_feature` (`id`, `user_id`, `title`, `sub_title`, `details`, `why_icon`, `userPic`, `date`) VALUES
(3, 140, 'We are Trusted', 'Team Members', 'Idea of denouncing pleasure and praisings pain was born and I will give you a complete account of the system and expound the actual great explorer of the truth.', 'flaticon-correct', 'digital-training-center-954597-', NULL),
(4, 140, ' We are Expert', 'Interiors', 'Denouncing pleasures and praisings pain was born work  will give you a complete seds account of the system, and actual master-builder of human happiness.', 'flaticon-compass', 'digital-training-center-834579-', NULL),
(5, 140, 'We are Professional', 'Designers', 'How all this mistakens idea of denouncing pleasures and praising pain was born and I will give you a completed by account of the system, and expound', 'flaticon-cursor', 'digital-training-center-701330-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `about_title` varchar(500) NOT NULL,
  `about_subtitle` varchar(3000) NOT NULL,
  `details_02` text DEFAULT NULL,
  `support1` varchar(50) NOT NULL,
  `support2` varchar(50) NOT NULL,
  `support3` varchar(50) NOT NULL,
  `support4` varchar(50) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `type` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `user_id`, `about_title`, `about_subtitle`, `details_02`, `support1`, `support2`, `support3`, `support4`, `userPic`, `type`) VALUES
(17, 140, 'History of REMICO Agro Industries', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-4\">REMICO AGRO INDUSTRIES is a premier name in the agricultural sector of Bangladesh, dedicated to driving innovation and sustainability in agro-production and processing. With a focus on modern farming techniques and industrial excellence, the company provides high-quality agricultural products and solutions designed to meet the growing demands of both local and international markets.</p>\r\n<p class=\"mb-5\">&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p class=\"mb-5\">Our operations integrate advanced technology with sustainable practices, overseen by a team of experienced agronomists and industry experts. REMICO AGRO INDUSTRIES is committed to maintaining the highest standards of quality control and bio-security. Through our robust supply chain and farmer-centric approach, we empower the agricultural community.</p>\r\n<p class=\"mb-5\">With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Quality Assured', '24/7 Customer Support', 'Professional Team', 'Competitive & Fair Pricing', 'digital-training-center-198157-Screenshot_2.png', 1),
(18, 140, 'REMICO AGRO INDUSTRIES', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-4\">REMICO AGRO INDUSTRIES is a premier name in the agricultural sector of Bangladesh, dedicated to driving innovation and sustainability in agro-production and processing. With a focus on modern farming techniques and industrial excellence, the company provides high-quality agricultural products and solutions designed to meet the growing demands of both local and international markets.</p>\r\n<p class=\"mb-5\">Our operations integrate advanced technology with sustainable practices, overseen by a team of experienced agronomists and industry experts. REMICO AGRO INDUSTRIES is committed to maintaining the highest standards of quality control and bio-security. Through our robust supply chain and farmer-centric approach, we empower the agricultural community.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Premium Agro Products', 'Modern Processing', 'Sustainable Farming', 'Reliable Supply Chain', 'remico-group-799392-agro-industries.jpg', 2),
(19, 140, 'REMICO FLOUR MILLS', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-4\">REMICO FLOUR MILLS is a state-of-the-art grain processing unit in Bangladesh, dedicated to producing premium-grade flour products that meet the highest standards of nutrition and purity. By sourcing the finest wheat and utilizing advanced milling technology, we ensure that every bag of flour delivers consistent texture and quality for both household kitchens and industrial food production.</p>\r\n<p class=\"mb-5\">Our milling operations are defined by stringent hygiene protocols, automated processing, and meticulous quality control supervised by food technologists. REMICO FLOUR MILLS is committed to supporting the nation\'s food industry through a reliable distribution network, ensuring that our products reach consumers fresh and full of natural goodness.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"col-lg-12 wow fadeIn\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\" data-wow-delay=\"0.5s\">\r\n<p class=\"mb-4\">REMICO FLOUR MILLS works with a strong commitment to food safety and health, producing high-quality Atta, Maida, and Suji through a fully automated grinding and purification process. The company regularly upgrades its machinery to maintain the natural fiber and vitamin content of the grains, ensuring that our flour is the perfect choice for healthy, soft, and delicious food items.</p>\r\n<p class=\"mb-5\">With a focus on innovation and market leadership, REMICO FLOUR MILLS is rapidly becoming a trusted household name across the country. Our goal is to contribute to the national food sector by providing high-extraction efficiency, ethical sourcing of raw materials, and a commitment to delivering \"uncompromised purity\" in every pack we produce.</p>\r\n</div>', 'Premium Grade Wheat', 'Nutritionally Fortified', 'Advanced Milling Tech', 'Strict Quality Control', 'remico-group-159533-flour-mills.jpeg', 2),
(20, 140, 'REMICO BREEDERS & CHICKS', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-3\">EMICO GROUP is a fast-growing and multi-dimensional business organization in Bangladesh, operating in poultry, agro solutions, food products, and logistics. Since its establishment, the company has earned a strong reputation through quality service, ethical business practices, and long-term customer trust.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Quality Assured', '24/7 Customer Support', 'Professional Team', 'Competitive & Fair Pricing', 'digital-training-center-198157-Screenshot_2.png', 2),
(21, 140, 'REMICO FOOD PRODUCTS', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-3\">EMICO GROUP is a fast-growing and multi-dimensional business organization in Bangladesh, operating in poultry, agro solutions, food products, and logistics. Since its establishment, the company has earned a strong reputation through quality service, ethical business practices, and long-term customer trust.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Quality Assured', '24/7 Customer Support', 'Professional Team', 'Competitive & Fair Pricing', 'digital-training-center-198157-Screenshot_2.png', 2),
(22, 140, 'M/S M.Y. ENTERPRISE', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-4\">M/S M.Y. ENTERPRISE is a trusted business organization based in Bangladesh, dedicated to supplying quality agricultural inputs, industrial goods, and essential raw materials to different sectors across the country. Since its establishment, the company has been working with honesty, reliability, and long-term commitment to customer satisfaction.</p>\r\n<p class=\"mb-5\">Over the years, the company has built strong relationships with manufacturers, dealers, and distributors nationwide. Our focus has always been on delivering original products, maintaining timely supply, and ensuring transparent business practices. With a steady team and professional management, M/S M.Y. ENTERPRISE continues to expand its service areas and product lines to meet the increasing market demand.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"col-lg-12 wow fadeIn\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;\" data-wow-delay=\"0.5s\">\r\n<p class=\"mb-4\">M/S M.Y. ENTERPRISE stands on strong ethical values and a firm dedication to ensuring quality. We always prioritize customer satisfaction, proper documentation, and transparent business communication. Our team regularly studies the market to understand customer requirements and provides solutions accordingly.</p>\r\n<p class=\"mb-5\">Today, the company aims to become a leading name in its industry through expanding product sourcing, improving service efficiency, and adopting modern trading practices. With the trust of our valuable clients and partners, M/S M.Y. ENTERPRISE is confidently moving forward to achieve bigger milestones in the near future.</p>\r\n</div>', 'Award Winning', '24/7 Support', 'Professional Staff', 'Fair Prices', 'remico-group-490583-remico.jpg', 3),
(23, 140, 'FARUK AGRO PRODUCTS', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-3\">EMICO GROUP is a fast-growing and multi-dimensional business organization in Bangladesh, operating in poultry, agro solutions, food products, and logistics. Since its establishment, the company has earned a strong reputation through quality service, ethical business practices, and long-term customer trust.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Quality Assured', '24/7 Customer Support', 'Professional Team', 'Competitive & Fair Pricing', 'digital-training-center-198157-Screenshot_2.png', 3),
(24, 140, 'RAWNAK TRADING CORPORATION', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-3\">EMICO GROUP is a fast-growing and multi-dimensional business organization in Bangladesh, operating in poultry, agro solutions, food products, and logistics. Since its establishment, the company has earned a strong reputation through quality service, ethical business practices, and long-term customer trust.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Quality Assured', '24/7 Customer Support', 'Professional Team', 'Competitive & Fair Pricing', 'digital-training-center-198157-Screenshot_2.png', 3),
(25, 140, 'REMICO LOGISTICS', '<div id=\"vc_row-683ad81fa567a\" class=\"vc_row wpb_row vc_row-fluid thegem-custom-683ad81fa56757768\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6 thegem-custom-683ad81fa57f21838\">\r\n<div class=\"vc_column-inner thegem-custom-inner-683ad81fa57f3 \">\r\n<div class=\"wpb_wrapper thegem-custom-683ad81fa57f21838\">\r\n<div class=\"wpb_text_column wpb_content_element  thegem-vc-text thegem-custom-683ad81fa58b238\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"mb-3\">EMICO GROUP is a fast-growing and multi-dimensional business organization in Bangladesh, operating in poultry, agro solutions, food products, and logistics. Since its establishment, the company has earned a strong reputation through quality service, ethical business practices, and long-term customer trust.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>With a highly dedicated team, modern production facilities, and a commitment to innovation, REMICO GROUP continues to expand its operations. Our goal is to deliver reliable products, ensure stable supply, and maintain a service standard that brings measurable value to our customers and partners across the country.</p>', 'Quality Assured', '24/7 Customer Support', 'Professional Team', 'Competitive & Fair Pricing', 'digital-training-center-198157-Screenshot_2.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `activitylog` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `activity_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`activitylog`, `userid`, `action`, `activity_date`) VALUES
(618, 22, 'Delete Stuff - Name: Regan', '2019-09-29 09:41:44'),
(619, 22, 'Delete Stuff - Name: ', '2019-09-29 09:41:58'),
(620, 22, 'Delete Stuff - Name: à¦œà§à§Ÿà§‡à¦²', '2020-02-03 14:56:31'),
(621, 22, 'Delete Stuff - Name: à¦®à§‹à¦ƒ à¦à¦¨à¦¾à¦®à§à¦² à¦¹à¦•', '2020-02-03 14:56:35'),
(622, 22, 'Delete Stuff - Name: Jakiul Hasan Ruel', '2020-02-03 14:56:38'),
(623, 22, 'Delete Stuff - Name: Jikrul Hasan Jewel', '2020-02-03 14:56:41'),
(624, 22, 'Delete Stuff - Name: Megh', '2020-02-03 14:56:45'),
(625, 22, 'Update account', '2020-07-18 21:53:28'),
(626, 22, 'Update account', '2020-07-18 21:53:53'),
(627, 130, 'Add New Client - Name: Kalam', '2022-02-06 20:48:46'),
(628, 22, 'Add New Client - Name: Kalam', '2022-02-06 21:10:10'),
(629, 22, 'Add New Client - Name: Kalam', '2022-02-06 21:21:11'),
(630, 22, 'Add New Client - Name: Kalam', '2022-02-06 21:21:48'),
(631, 22, 'Add New Client - Name: Kalam', '2022-02-06 13:23:16'),
(632, 22, 'Add New Client - Name: Kalam', '2022-02-06 13:54:58'),
(633, 22, 'Add New Client - Name: Tausif', '2022-03-18 06:00:10'),
(634, 22, 'Add New Client - Name: Tausif', '2022-03-20 02:28:47'),
(635, 22, 'Add New Client - Name: Tausif', '2022-03-23 10:17:59'),
(636, 22, 'Add New Client - Name: Tausif', '2022-03-23 10:18:43'),
(637, 22, 'Add New Client - Name: Abul Azad', '2022-03-23 10:25:02'),
(638, 22, 'Add New Client - Name: Tausif', '2022-03-23 10:35:19'),
(639, 22, 'Add New Client - Name: Abul Azad', '2022-03-23 10:35:27'),
(640, 22, 'Add New Client - Name: S.M Imran Islam', '2022-04-06 12:27:57'),
(641, 22, 'Add New Client - Name: S.M Imran Islam', '2022-04-06 12:29:00'),
(642, 22, 'Add New Client - Name: Imran Islam', '2023-04-14 20:12:11'),
(643, 22, 'Add New Client - Name: Tausif', '2023-04-14 20:14:28'),
(644, 22, 'Add New Client - Name: Tausif', '2023-08-31 21:34:40'),
(645, 22, 'Add New Client - Name: Digital Training Center', '2024-01-31 17:33:44'),
(646, 22, 'Add New Client - Name: Samiul Vai - Prince Alam', '2024-03-21 11:36:45'),
(647, 22, 'Add New Client - Name: Accounts', '2024-03-25 13:47:23'),
(648, 22, 'Add New Client - Name: Admin', '2024-03-25 13:49:04'),
(649, 22, 'Add New Client - Name: Digital Training Center', '2024-03-31 11:01:10'),
(650, 22, 'Add New Client - Name: Digital Training Center', '2024-06-09 15:57:24'),
(651, 22, 'Add New Client - Name: Digital Training Center', '2025-01-15 16:41:30'),
(652, 22, 'Add New Client - Name: my first name', '2025-09-21 12:18:45'),
(653, 22, 'Add New Client - Name: my first name', '2025-09-21 12:18:57'),
(654, 22, 'Add New Client - Name: my first name', '2025-09-21 12:44:23'),
(655, 22, 'Add New Client - Name: my first name', '2025-09-21 12:45:00'),
(656, 22, 'Add New Client - Name: my first name', '2025-09-21 12:45:11'),
(657, 22, 'Add New Client - Name: my first name', '2025-09-21 12:47:25'),
(658, 130, 'Add New Client - Name: Admin', '2025-09-21 12:59:10'),
(659, 22, 'Add New Client - Name: my first name', '2025-09-21 13:08:05'),
(660, 22, 'Add New Client - Name: my first name', '2025-09-21 13:37:28'),
(661, 22, 'Add New Client - Name: my first name', '2025-09-21 13:47:01'),
(662, 22, 'Add New Client - Name: my first name', '2025-09-21 14:03:54'),
(663, 22, 'Add New Client - Name: Remico Group', '2025-12-31 14:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `batch_no` varchar(250) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bld_grp` varchar(50) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`student_id`, `user_id`, `student_no`, `batch_no`, `course_name`, `student_name`, `gender`, `bld_grp`, `father_name`, `mother_name`) VALUES
(101, 130, 2, 'Md.Samiul Alom', '', 'Managing Director', 'Male', '', 'Tinmatha', '01751458998'),
(103, 130, 3, 'New Customer', '', '', 'Male', '', 'Bogura', '01751456623'),
(104, 130, 4, 'Zobayer2', '', '', 'Male', '', 'Meghai', '01611-717527'),
(105, 135, 5, 'Kiron Alom', '', '', 'Male', '', 'Dhaka', '01751894256'),
(106, 136, 6, 'Talha Khan', '', '', 'Male', '', 'Dhaka', '054654'),
(107, 135, 7, 'Rubel Hossain', '', '', 'Male', '', 'Dhaka', '00154545'),
(108, 135, 8, 'Bappi Hasan', '', 'Marketing Officer1', 'Male', '', 'Mirpur-12, Dhaka', '017589'),
(109, 137, 9, 'Jhon doe', '', 'Managing director', 'Male', '', 'New York City, USA', '846446456'),
(110, 137, 10, 'Samiul Alom', '', 'CEO', 'Male', '', 'Bogura', '01751891037'),
(111, 140, 1, 'Sidgao', '1', 'Interney Marketing', '', '', 'USA', '3232323232'),
(112, 137, 11, 'Kalam', '', 'Business', 'Male', '', 'Bizrul', '01751-895247'),
(113, 140, 2, 'Batch-25', 'Office Application', 'Md.Salam Ali', 'Male', '', 'Md.Abbas', 'Mrs.Salma'),
(114, 140, 3, 'Batch-25', '1', 'Md.Jamal Sheakh1', '', '', 'Jalal Sheakh1', 'Jomila Sheakh1'),
(115, 137, 0, 'Batch-25', '1', 'Salam', '', '', 'father', 'mother'),
(116, 140, 4, 'Batch-25', '1', 'a', 'Male', '', 'as', 'as'),
(117, 140, 5, '7', '25', 'DD', 'Other', 'O+', 'sf', 'sf'),
(118, 22, 12, '1', '25', 'DD', 'Female', 'A+', 'safa', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `bld_grp`
--

CREATE TABLE `bld_grp` (
  `bld_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bld_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bld_grp`
--

INSERT INTO `bld_grp` (`bld_id`, `user_id`, `bld_name`) VALUES
(2, 140, 'Bogura'),
(3, 140, 'Rajshahi'),
(4, 140, 'Bsc'),
(5, 140, 'O-'),
(6, 140, 'A-'),
(7, 140, 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `b_c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_details` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `cat_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`b_c_id`, `user_id`, `cat_name`, `cat_details`, `link`, `cat_photo`) VALUES
(8, 140, 'Poultry', '', '', ''),
(9, 140, 'Food Products', '', '', ''),
(10, 140, 'Agro Solutions', '', '', ''),
(11, 140, 'Logistics', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_section`
--

CREATE TABLE `blog_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `userPic` varchar(255) DEFAULT NULL,
  `canonical_link` varchar(255) DEFAULT NULL,
  `keyword` mediumtext DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_section`
--

INSERT INTO `blog_section` (`id`, `user_id`, `category_id`, `title`, `slug`, `details`, `userPic`, `canonical_link`, `keyword`, `description`, `author`, `date`) VALUES
(23, 140, 0, 'REMICO Logistics-Ensuring Timely Delivery', 'remico-logistics-ensuring-timely-delivery', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'remico-group-506323-remico-logistics.jpg', '--', 'sdfsdf', 'sdfsdf', 'Admin', '2025-12-23 01:03:13'),
(24, 140, 0, 'Top 5 Tips for Food Product Quality', 'top-5-tips-for-food-product-quality', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'remico-group-532438-hero-slider2.jpg', '', '', '', 'Admin', '2025-12-23 01:07:03'),
(25, 140, 0, 'How REMICO Supports Poultry Farmers', 'how-remico-supports-poultry-farmers', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'remico-group-427407-concern2.jpg', '--', 'dgdf', 'd', 'Jahid', '2025-12-23 01:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `choose_section`
--

CREATE TABLE `choose_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `choose_title` varchar(200) NOT NULL,
  `choose_subtitle` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose_section`
--

INSERT INTO `choose_section` (`id`, `user_id`, `choose_title`, `choose_subtitle`, `userPic`) VALUES
(9, 130, 'World Class Service', 'Provide World Class Service According To Your Demand', '576321.png'),
(10, 130, 'Best Quality Product', 'We always try to our best quality product service.', '443611.png'),
(11, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '665496.png'),
(12, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '812993.png'),
(13, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '67187.png'),
(14, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '538535.jpg'),
(15, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '700985.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `map_link` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `phone`, `email`, `address`, `address2`, `map_link`, `userPic`) VALUES
(14, 140, '+88 01738-559316', 'remico.agro@@yahoo.com', 'Dhaka, Bangladesh', 'Jamadarpukur, Garidah Road, Shajahanpur, Bogura', 'https://maps.app.goo.gl/io3SHZDX4YiQU2sW9', '397557.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `phone`, `subject`, `message`, `entry_date`) VALUES
(329, 'Natalie Cummings', 'rufy@mailinator.com', '', 'Sint nobis recusanda', 'Maxime eius reprehen', '2026-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `contact_subject`
--

CREATE TABLE `contact_subject` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_subject`
--

INSERT INTO `contact_subject` (`id`, `user_id`, `title`) VALUES
(6, 140, 'Best Quality Products'),
(10, 140, 'testing'),
(11, 140, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `co_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `count1` int(50) NOT NULL,
  `count2` int(50) NOT NULL,
  `count3` int(50) NOT NULL,
  `count4` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`co_id`, `user_id`, `count1`, `count2`, `count3`, `count4`) VALUES
(1, 140, 5, 100, 50, 567);

-- --------------------------------------------------------

--
-- Table structure for table `faq_section`
--

CREATE TABLE `faq_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_section`
--

INSERT INTO `faq_section` (`id`, `user_id`, `title`, `details`, `date`) VALUES
(4, 140, 'What is Moral Education?', 'Moral Education is an educational approach that aims to instill moral values, virtues, and ethical principles in individuals. It focuses on fostering empathy, compassion, integrity, and responsible decision-making.', '2024-03-12'),
(5, 140, 'Why is Moral Education important?', 'Moral Education is crucial for the holistic development of individuals. It helps in shaping character, promoting social harmony, and building a more ethical society. It equips individuals with the necessary tools to navigate moral dilemmas and make ethical choices.', '2024-03-12'),
(6, 140, 'How can Moral Education be integrated into the curriculum?', 'Moral Education can be integrated into various subjects and activities within the curriculum. It can be taught explicitly through dedicated courses or embedded implicitly in other subjects such as literature, history, and social studies.', '2024-03-12'),
(7, 140, 'What teaching methods are effective for Moral Education?', 'Effective teaching methods for Moral Education include discussions, role-playing, storytelling, case studies, community service projects, and reflective exercises. These methods encourage critical thinking, empathy, and moral reflection.', '2024-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `feature1`
--

CREATE TABLE `feature1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature1`
--

INSERT INTO `feature1` (`id`, `user_id`, `title`, `sub_title`, `image`, `link1`, `link2`) VALUES
(3, 0, 'Are you Interested   !', '<p>If you Interested Our Courses , Yo Can Contact With Us. So Don\'t late to Admission..</p>', 'digital-training-center-772635-p8.jpg', 'courses', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `feature2`
--

CREATE TABLE `feature2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature2`
--

INSERT INTO `feature2` (`id`, `user_id`, `title`, `sub_title`, `image`, `link1`, `link2`) VALUES
(2, 140, 'Company has been Business companies since 1985.', '<blockquote>\r\n<p class=\"title-big mb-4 mx-0 mw-100\">Company has been giving best consultation to top USA&rsquo;s Business companies since 1985.Start working with us that can provide everything you need to generate awareness.&nbsp;</p>\r\n&lt;p class=\"title-', 'img-746437-square-dot.png', 'about', 'gallery');

-- --------------------------------------------------------

--
-- Table structure for table `features_all`
--

CREATE TABLE `features_all` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` text NOT NULL,
  `details` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `feature_name` varchar(150) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features_all`
--

INSERT INTO `features_all` (`id`, `user_id`, `title`, `sub_title`, `details`, `image`, `link1`, `link2`, `feature_name`, `status`) VALUES
(3, 0, 'Are you Interested   !', '<p>If you Interested Our Courses , Yo Can Contact With Us. So Don\'t late to Admission..</p>', '', 'digital-training-center-772635-p8.jpg', 'courses', 'contact', 'service', 1),
(4, 0, 'Are you Interested   !', '<p>If you Interested Our Courses , Yo Can Contact With Us. So Don\'t late to Admission 22</p>', '', 'digital-training-center-772635-p8.jpg', 'courses', 'contact', 'why-chose', 1),
(5, 0, 'Start Learning With Us 11', 'Enhance Your Skills With Best Courses', '<h3 class=\"title-big\">Enhance Your Skills With Best Courses</h3>', 'digital-training-center-772635-p8.jpg', 'apply', 'contact', 'call-to', 1),
(6, 0, 'EXPERIENCED PROFESSIONALS', 'Meet Our Teachers', '<p class=\"text-para\">Curabitur id gravida risus. Fusce eget ex fermentum, ultricies nisi ac sed, lacinia est. Quisque ut lectus consequat, venenatis eros et, commodo risus. Nullam sit amet laoreet elit. Suspendisse non magna a velit efficitur.</p>\r\n<p class=\"mt-3\">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ab qui impedit, libero illo quia sequi quibusdam iure. Error minus quod reprehenderit quae dolor velit soluta animi voluptate dicta enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, provident!</p>', 'digital-training-center-772635-p8.jpg', 'apply', 'contact', 'team', 1),
(7, 0, 'Are you Interested !', 'Are you Interested !', '<p>Welcome to Moral Learning Institute, your premier destination for language and cultural education.</p>\r\n<p class=\"text-para\">As a leading language training institute, we specialize in delivering high-quality language courses and cultural immersion experiences to our diverse student community.</p>', 'digital-training-center-391611-chose.gif', 'apply', 'contact', 'apply', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `title`, `userPic`) VALUES
(1, 140, 'no title', 'remico-group-976734-remico-photo-gallery11.jpeg'),
(26, 140, 'National Gold Cup Football Tournament - 2022', 'remico-group-610032-remico-photo-gallery10.jpeg'),
(27, 140, 'no title', 'remico-group-669280-remico-photo-gallery9.jpeg'),
(28, 140, 'no title', 'remico-group-870757-remico-photo-gallery8.jpeg'),
(29, 140, 'no title', 'remico-group-130203-remico-photo-gallery7.jpeg'),
(30, 140, 'no title', 'remico-group-628887-remico-photo-gallery6.jpeg'),
(31, 140, 'no title', 'remico-group-325189-remico-photo-gallery5.jpeg'),
(32, 140, 'no title', 'remico-group-222838-remico-photo-gallery4.jpeg'),
(33, 140, 'no title', 'remico-group-866129-remico-photo-gallery3.jpeg'),
(34, 140, 'no title', 'remico-group-219277-remico-photo-gallery2.jpeg'),
(35, 140, 'no title', 'remico-group-808142-remico-photo-gallery1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `header_section`
--

CREATE TABLE `header_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `link_one` mediumtext DEFAULT NULL,
  `link_two` mediumtext DEFAULT NULL,
  `details` text NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_section`
--

INSERT INTO `header_section` (`id`, `user_id`, `type`, `title`, `subtitle`, `link_one`, `link_two`, `details`, `userPic`) VALUES
(1, 140, 'Banner', 'New Way To Learn', 'And , Build Your Career.', 'about', 'courses', '<p>Details</p>', ''),
(2, 140, 'Course', 'OUR SPECIAL COURSES', 'Sub Title', NULL, NULL, '<p><span style=\"color: #0d0d0d; font-family: S&ouml;hne, ui-sans-serif, system-ui, -apple-system, \'Segoe UI\', Roboto, Ubuntu, Cantarell, \'Noto Sans\', sans-serif, \'Helvetica Neue\', Arial, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Moral education, also known as character education or values education, is the process of teaching children and adults fundamental moral values, such as honesty, respect, responsibility, integrity, and compassion. The goal of moral education is to develop individuals who are not only academically proficient but also morally upright and socially responsible.</span></p>', ''),
(3, 140, 'Why Chose', 'Why Choose Us', 'And , Build Your Career.', NULL, NULL, '', 'digital-training-center-61711-chose.gif'),
(4, 140, 'Trainer', 'OUR EXPERT TRAINERS', 'Why', NULL, NULL, '<p>Details</p>', ''),
(5, 140, 'Testimonials', 'STUDENTS FEEDBACK', 'Why', NULL, NULL, '<p>fjg</p>', ''),
(6, 140, 'Gallery', 'OUR GALLERY', 'Why', NULL, NULL, '<p>fjg</p>', ''),
(7, 140, 'FAQ', 'Frequently Asked Questions', 'Sub Title', NULL, NULL, '<p><span style=\"color: #0d0d0d; font-family: S&ouml;hne, ui-sans-serif, system-ui, -apple-system, \'Segoe UI\', Roboto, Ubuntu, Cantarell, \'Noto Sans\', sans-serif, \'Helvetica Neue\', Arial, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: pre-wrap; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Moral education, also known as character education or values education, is the process of teaching children and adults fundamental moral values, such as honesty, respect, responsibility, integrity, and compassion. The goal of moral education is to develop individuals who are not only academically proficient but also morally upright and socially responsible.</span></p>', 'digital-training-center-817450-faq.png');

-- --------------------------------------------------------

--
-- Table structure for table `hero_section_content`
--

CREATE TABLE `hero_section_content` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero_section_content`
--

INSERT INTO `hero_section_content` (`id`, `user_id`, `title`, `subtitle`) VALUES
(1, 140, 'Crafting Digital Experiences with Passion', 'Transforming ideas into elegant solutions through creative design and innovative development');

-- --------------------------------------------------------

--
-- Table structure for table `join_title`
--

CREATE TABLE `join_title` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `sub_title` varchar(200) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join_title`
--

INSERT INTO `join_title` (`id`, `user_id`, `title`, `sub_title`, `image`) VALUES
(1, 140, 'Join with Decorators and', 'Now Make Your Home More Lovely!', 'join_6828de8889f6c.png');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `ms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`ms_id`, `user_id`, `name`, `details`, `userPic`) VALUES
(1, 140, 'Our Mission Statement', '<p>To deliver high-quality products and services across poultry, food, agro, and logistics, ensuring customer satisfaction, ethical business practices, and sustainable growth.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_section`
--

CREATE TABLE `news_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_title` varchar(500) NOT NULL,
  `news_subtitle` longtext NOT NULL,
  `news_date` date NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_section`
--

INSERT INTO `news_section` (`id`, `user_id`, `news_title`, `news_subtitle`, `news_date`, `userPic`) VALUES
(17, 140, 'ডেটা নির্দেশিকায় পরিবর্তন, কমেছে প্যাকেজ ও মেয়াদ', '<div class=\"news_block\">\r\n                                    \r\n                    <div class=\"tittle_area\">\r\n                        <div class=\"newsdetails_top\">\r\n                            \r\n                            <p><span style=\"font-family: sans-serif; background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">প্রায় দেড় বছর আগে করা ডেটা নির্দেশিকায় পরিবর্তন-পরিমার্জন এনে নতুন \r\nনির্দেশিকা করেছে নিয়ন্ত্রণ সংস্থাটি। ইতোমধ্যে মোবাইল ফোন অপারেটরদের তা \r\nবাস্তবায়নের নির্দেশনাও দেয়া হয়েছে। নতুন এসব সিদ্ধান্ত অক্টোবর হতে \r\nবাস্তবায়ন করতে হবে।</span></p></div></div></div><div class=\"news_row\"><div class=\"post_details\">\r\n\r\n\r\n\r\n<p>নির্দেশিকায় ২১ টি সিদ্ধান্ত পরিবর্তন-পরিমার্জন বা নতুন করে যুক্ত হয়েছে। যেখানে একটি সিদ্ধান্ত বিলুপ্ত করা হয়েছে।</p><p><span style=\"background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> </span><span style=\"background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">অপারেটর যে প্যাকেজেই দিক না কেনো তার মেয়াদ হবে ৭ দিন, ৩০ দিন এবং \r\nআনলিমিটেড। আগে এটি ছিলো ৩ দিন, ৭ দিন, ১৫ দিন এবং ৩০ দিন। যেখানে ডেটা \r\nভলিউম সংক্রান্ত কিছু নির্দেশনাও ছিল।</span></p>\r\n\r\n\r\n\r\n<p>একটি অপারেটরের নিয়মিত, বিশেষ, রিসার্চ ও ডেভেলমেন্ট, সব ধরনের \r\nব্র্যান্ড (গ্রামীণফোন, স্কিটো, রবি, এয়ারটেল, বাংলালিংক ইত্যাদিসহ যা আছে)\r\n মিলিয়ে প্যাকেজের সংখ্যা হবে ৪০টি। আগে এটি ছিলো ৮৫টি।  </p>\r\n\r\n\r\n\r\n<p>মেয়াদ শেষ হওয়ার আগে একই প্যাকেজ কিনলে ডেটা ক্যারি ফরওয়ার্ড হবে। এতে \r\nএকই ভলিউম এবং একই কন্টেন্টের ৭ বা ৩০ দিন মেয়াদের প্যাকেজ ব্যবহার করার \r\nক্ষেত্রে মেয়াদ শেষ হওয়ার আগেই গ্রাহক ওই প্যাকেজ আবার কিনলে ডেটা ক্যারি \r\nফরওয়ার্ড হবে। ক্যারি ফরওয়ার্ড করা যাবে সর্বোচ্চ ৫০ জিবি ডেটা পর্যন্ত। </p>\r\n\r\n\r\n\r\n<p>কমানো হয়েছে প্রমোশনাল এসএমএসের সংখ্যাও। আগে প্রতিদিন সর্বোচ্চ ৪ টি এসএমএস দিতে পারত অপারে', '2023-09-09', '861086.jpg'),
(18, 140, ' কুমিল্লায় ১৭৫ কোটি টাকায় নলেজ পার্ক', '<p><b>প্রায় ১৭৫ কোটি টাকা</b> ব্যয়ে কুমিল্লা জেলার লালমাই উপজেলার দত্তপুর \r\nমৌজায় ৭.৮৮ একর জায়গায় ‘নলেজ পার্ক’ এর ভিত্তিপ্রস্তর স্থাপন করলেন \r\nঅর্থমন্ত্রী আ হ ম মুস্তফা কামাল ও আইসিটি প্রতিমন্ত্রী <b>জুনাইদ আহমেদ পলক</b>। </p><p>শনিবার <b>নলেজ পার্কের</b> ভিত্তিপ্রস্তর স্থাপন অনুষ্ঠানে আয়োজিত আলোচনা \r\nসভায় প্রধান অতিথির বক্তব্যে অর্থমন্ত্রী আ হ ম মুস্তফা কামাল বলেন, এ \r\nনলেজ পার্কের মাধ্যমে সমগ্র কুমিল্লার ছেলে-মেয়েরা প্রযুক্তির ক্ষেত্র \r\nএগিয়ে যাবে। আমরা সবাই মিলে কুমিল্লাকে এগিয়ে নেবো।</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>সভাপতির বক্তব্যে আইসিটি প্রতিমন্ত্রী জুনাইদ আহমেদ পলক বলেন, \r\n‘কুমিল্লার অনেক সনামধন্য শিক্ষা প্রতিষ্ঠানে হাজার হাজার শিক্ষার্থী \r\nরয়েছেন। এই তরুণ-তরুনীদেরকে যদি আমরা আমরা আইটিতে দক্ষ মানবসম্পদ হিসেবে \r\nগড়ে তুলতে পারি তাহলে এই অঞ্চলের অর্থনীতির ইকোসিস্টেমে আমূল পরিবর্তন \r\nআসবে।</p><p>তিনি বলেন, ১৫ বছর আগেও দেশের স্বল্প শিক্ষিত তরুণ প্রজন্ম \r\nকর্মসংস্থানের জন্য যেখানে গার্মেন্টসসহ অন্যান্য শ্রমনির্ভর শিল্পের উপর \r\nনির্ভরশীল ছিলো সেখানে বর্তমানে তারা আইটি শিল্পে নিজেদের ক্যারিয়ার গড়ে \r\nতুলছে। এছাড়া স্টার্টআপ এবং ক্ষুদ্র ও মাঝারি প্রতিষ্ঠানগুলোর \r\nইন্ডাস্ট্রিতে প্রবেশের হার বাড়ানো এবং জেন্ডার ইনক্লুসিভ \r\nএন্টারপ্রেনারশিপ তৈরিতে এই নলেজ পার্ক সরাসরি ভূমিকা রাখবে। আগামীর \r\nস্মার্ট বাংলাদেশ হবে বিশ্বের অন্যতম আইটি হাব। </p>\r\n\r\n\r\n\r\n<p>পলক বলেন, বাংলাদেশ থেকেই পরিচালিত হবে বিশ্বের অনেক জায়ান্ট কোম্পানি।\r\n সেগুলোর পরিচালনায় নেতৃত্ব দেবে আমাদের নতুন প্রজন্মের সন্তানেরা। সেই \r\nসময়ের উদ্ভাবনী মেধাসম্পন্ন তরুণ-তরুণীর মেধার বিকাশ ঘটবে আইটি বিজনেস \r\nইনকিউবেটর, ইনোভেশন হাব-এর মতো প্রতিষ্ঠানের মাধ্যমে। শীঘ্রই এই পার্কের \r\nপাশে ‘শেখ কামাল আইটি ট্রেনিং এন্ড ইনকিউবেশন সেন্টার’ এর নির্মাণ কাজ শেষ \r\nহবে। এখানে যে দক্ষ জনবল সৃষ্টি হবে তারাই আবার এই নলেজ পার্কে কাজ করবে। \r\nতখন এই পার্কের জন্য প্রয়োজনীয় দক্ষ মানবসম্পদ পেতে সমস্যা হবে না।</p>\r\n\r\n\r\n\r\n<p>স্বাগত বক্তব্যে বাংলাদেশ হাই-টেক পার্ক কর্তৃপক্ষ এর ব্যবস্থাপনা \r\nপরিচালক (গ্রেড-১) জি এস এম জাফরউল্লাহ্ বলেন, বাংলাদেশ হাই-টেক পার্ক \r\nকর্তৃপক্ষ এর মাধ্যমে বর্তমানে সারা দেশে সরাকারি উদ্যোগে ৯২টি হাই-টেক \r\nপার্ক/সফটওয়্যার টেকনোলজি পার্ক/আইটি ট্রেনিং এন্ড ইনকিউবেশন সেন্টার \r\nস্থাপনের কাজ চলমান রয়েছে, ইতোমধ্যে ১১টি পার্ক স্থাপনের কাজ সমাপ্ত \r\nহয়েছে যেখানে ইতোমধ্যে ব্যবসায়িক কার্যক্রম শুরু হয়েছে। এছাড়া বেসরকারি\r\n উদ্যোগে গঠিত হয়েছে আরো ১৭টি পার্ক। ৪র্থ শিল্প বিপ্লবের প্রতিযোগিতা \r\nমোকাবেলায় বিভিন্ন বিশ্ববিদ্যালয়ে আইওটি, রোবোটিক্স, সাইবার সিকিউরিটির \r\nউচ্চপ্রযুক্তির ৩৩টি বিশেষায়িত ল্যাব স্থাপন করা হয়েছে এবং \r\nবিশ্ববিদ্যালয়গুলোতে আইটি বিজনেস ইনকিউবেটর স্থাপন করা হচ্ছে।</p>\r\n\r\n\r\n\r\n<p>প্রকল্প পরিচালক এ, কে, এ, এম, ফজলুল হক জানান,  এই ‘নলেজ পার্ক’ \r\nস্থাপনের কাজ শেষ হলে এখানে প্রায় ১০০০ জনের কর্মসংস্থানের সুযোগ সৃষ্টি \r\nহবে। এছাড়া প্রকল্পের আওতায় প্রতি বছর ৩০০০ জনকে প্রশিক্ষণ প্রদান করা \r\nহবে।</p>\r\n\r\n\r\n\r\n<p><span style=\"background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">ভিত্তিপ্রস্তর স্থাপন অনুষ্ঠানে বাংলাদেশ হাই-টেক পার্ক কর্তৃপক্ষ ও স্থানীয় প্রশাসনের অন্যান্য কর্মকর্তারা উপস্থিত ছিলেন।</span> </p>', '2023-09-09', '795722.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `pr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pr_name` varchar(200) NOT NULL,
  `pr_details` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`pr_id`, `user_id`, `pr_name`, `pr_details`, `userPic`) VALUES
(5, 140, 'REMICO LOGISTICS', '', 'remico-group-460653-remico-logistics.jpg'),
(6, 140, 'REMICO FOOD PRODUCTS', '', 'remico-group-247986-hero-slider2.jpg'),
(8, 140, 'REMICO BREEDERS & CHICKS', '', 'remico-group-46165-concern2.jpg'),
(9, 140, 'M/S M.Y. ENTERPRISE', '', 'remico-group-911087-my-enterprice.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `passwordid` int(11) NOT NULL,
  `original` varchar(30) NOT NULL,
  `mdfive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`passwordid`, `original`, `mdfive`) VALUES
(0, '', '$2y$10$6lyaC8MT1DlgB7I12S5VYO9dl.iWtXlrirlGui6hnEZWDQ0wF0wju'),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(130, 'samiul004', 'b17c7f9d339f87ae91c72e08daf1c8db'),
(135, 'Sam1', '490bd89bcdc4e9f01d1a33899736f7a3'),
(140, 'ITM23', 'eb2dd0656157562e37736fe7e186d438'),
(144, 'me@mydomain.com', 'c41ad751dfb076fec01d190fd1527f83'),
(145, 'samiul@gmail.com', '$2y$10$adN.P3sXecywh0dQpfNXt.m2v3NcUu6CJLmr7rZ0SxaCQeIx4zPea'),
(146, 'kalam@gmail.com', '$2y$10$sQuD.qMClvPong28YwuddOdajPUhp4EPCO3RQfr/NfQozLqAGyGfi'),
(147, 'babul@gmail.com', '$2y$10$XLkeOGgiq1XjcTrm.EJQZekMsKVKpV00sYAvqUcwmopgJxE5L.dr2'),
(148, 'jaber@gmail.com', '$2y$10$B35g/rZ8mt0EPJ12Ahuj2.Cx5dVNGJ8z/PiFc.K6RkkfCBgXsaU/.'),
(149, 'pappu@gmail.com', '$2y$10$lI7NNsZIzFM5u.NMEc.eCOYIwyjpR.RgVpfwNV61GN/iMeT7nJPt.'),
(150, 'nion@gmail.com', '$2y$10$QeOWBUqyXnRzBxMVSaeIi.NHaxdbhVKt/tLh8ZbJy7b9BjzfHuxva'),
(151, 'juyena@gmail', '$2y$10$MQOuFBH5v7uPshjPVGe3tORsQGUiHIaGQhSReaOJV3aJhnV6GfHSu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(30) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `pdct_typ` int(100) NOT NULL,
  `user_id` int(30) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `short_details` varchar(500) NOT NULL,
  `details` longtext NOT NULL,
  `size` varchar(150) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `price` varchar(40) NOT NULL,
  `offer_price` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `category_id`, `pdct_typ`, `user_id`, `product_name`, `short_details`, `details`, `size`, `weight`, `price`, `offer_price`, `photo`) VALUES
(95, 1, 5, 140, 'Atomic Habits', 'A practical guide to building good habits and breaking bad ones.', '<p data-start=\"154\" data-end=\"462\"><em data-start=\"154\" data-end=\"169\">Atomic Habits</em> is a powerful self-improvement book written by James Clear that focuses on how small habits can create big changes in life. Instead of encouraging dramatic transformations, this book teaches readers how tiny daily improvements—just 1% better each day—can lead to remarkable success over time.</p><p data-start=\"464\" data-end=\"781\">The main idea of the book is that habits shape our identity. James Clear explains that real change happens when you focus on who you want to become, not just what you want to achieve. For example, instead of saying “I want to read more,” you should think “I am a reader.” This mindset helps build long-lasting habits.</p><p data-start=\"783\" data-end=\"840\">The book introduces the <strong data-start=\"807\" data-end=\"839\">Four Laws of Behavior Change</strong>:</p><ol data-start=\"841\" data-end=\"927\">\r\n<li data-start=\"841\" data-end=\"861\">\r\n<p data-start=\"844\" data-end=\"861\">Make it obvious</p>\r\n</li>\r\n<li data-start=\"862\" data-end=\"885\">\r\n<p data-start=\"865\" data-end=\"885\">Make it attractive</p>\r\n</li>\r\n<li data-start=\"886\" data-end=\"903\">\r\n<p data-start=\"889\" data-end=\"903\">Make it easy</p>\r\n</li>\r\n<li data-start=\"904\" data-end=\"927\">\r\n<p data-start=\"907\" data-end=\"927\">Make it satisfying</p>\r\n</li>\r\n</ol><p data-start=\"929\" data-end=\"1129\">These four rules help readers create good habits and break bad ones. The author explains how our environment affects our behavior and how small changes in surroundings can make positive habits easier.</p><p data-start=\"1131\" data-end=\"1420\">James Clear also discusses habit tracking, habit stacking, and the power of consistency. He shows how successful people are not special; they simply follow systems that help them improve daily. The book is filled with real-life examples, scientific research, and easy-to-follow techniques.</p><p data-start=\"1422\" data-end=\"1696\"><em data-start=\"1422\" data-end=\"1437\">Atomic Habits</em> is suitable for students, professionals, entrepreneurs, and anyone who wants self-discipline and personal growth. It teaches patience, focus, and long-term thinking. This book helps readers build better routines in health, studies, career, and relationships.</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"1698\" data-end=\"1828\">Overall, <em data-start=\"1707\" data-end=\"1722\">Atomic Habits</em> is a practical and inspiring guide that proves success is built through small actions repeated every day.</p>', '42', '5-Kg', '8500', '700', '-647538-istockphoto-847756796-612x612.jpg'),
(96, 28, 5, 140, 'The Alchemist', 'A story about following your dreams.', '<h3 style=\"margin-bottom: 20px; color: rgb(15, 41, 67); font-size: 28px; font-family: Questrial, sans-serif; background-color: rgb(248, 249, 250);\"><p data-start=\"1902\" data-end=\"2162\" style=\"\"><em data-start=\"1902\" data-end=\"1917\" style=\"\">The Alchemist</em> by Paulo Coelho is a famous inspirational novel that teaches readers about dreams, destiny, and self-discovery. It tells the story of Santiago, a young shepherd boy from Spain, who dreams of finding a hidden treasure near the Egyptian pyramids.</p><p data-start=\"2164\" data-end=\"2433\" style=\"\">Encouraged by a mysterious king, Santiago decides to follow his “Personal Legend,” which means his true purpose in life. During his journey, he meets different people including a merchant, an Englishman, and an alchemist. Each person teaches him important life lessons.</p><p data-start=\"2435\" data-end=\"2704\" style=\"\">The novel explains that when you truly desire something, the whole universe helps you achieve it. It encourages readers to listen to their hearts, trust themselves, and never give up on dreams. The desert, wind, and sun are used as symbols to show spiritual connection.</p><p data-start=\"2706\" data-end=\"2983\" style=\"\">One important theme of the book is courage. Santiago faces many difficulties, including loss, fear, and uncertainty. But he continues moving forward because he believes in his goal. The book also highlights love, showing that true love supports dreams instead of stopping them.</p><p data-start=\"2985\" data-end=\"3175\" style=\"\">The language of <em data-start=\"3001\" data-end=\"3016\">The Alchemist</em> is simple, poetic, and easy to understand. This makes it popular among readers of all ages. It has been translated into many languages and is loved worldwide.</p><p data-start=\"3177\" data-end=\"3348\" style=\"\">This book teaches that the real treasure is not money, but self-knowledge, wisdom, and inner peace. It inspires readers to follow their passion and live a meaningful life.</p><p data-start=\"1902\" data-end=\"2162\" style=\"\">\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"3350\" data-end=\"3477\" style=\"\">Overall, <em data-start=\"3359\" data-end=\"3374\" style=\"\">The Alchemist</em> is a beautiful story that motivates people to believe in themselves and chase their dreams fearlessly.</p></h3>', '45', '2-Kg', '500tk', '2500', '-727230-istockphoto-495477978-612x612.jpg'),
(97, 27, 5, 140, 'Rich Dad Poor Dad', 'guide to financial education and wealth building.', '<p data-start=\"3551\" data-end=\"3750\"><em data-start=\"3551\" data-end=\"3570\">Rich Dad Poor Dad</em> by Robert Kiyosaki is one of the most popular personal finance books in the world. It explains how people can become financially independent by changing their mindset about money.</p><p data-start=\"3752\" data-end=\"4025\">The book is based on the author’s experience of having two “fathers.” His real father (Poor Dad) was educated and worked hard for a salary. His friend’s father (Rich Dad) was a businessman who built wealth through investments. Both taught him different lessons about money.</p><p data-start=\"4027\" data-end=\"4311\">Kiyosaki explains that rich people focus on building assets, while poor and middle-class people focus on liabilities. Assets include businesses, stocks, and real estate that generate income. Liabilities include expensive cars, unnecessary loans, and luxury items that take money away.</p><p data-start=\"4313\" data-end=\"4582\">The book also teaches financial literacy, entrepreneurship, and risk-taking. It encourages readers to start small businesses, invest wisely, and learn how money works. The author emphasizes that schools do not teach enough about finance, so self-education is important.</p><p data-start=\"4584\" data-end=\"4799\">Another key lesson is “Make money work for you.” Instead of working only for salary, people should create multiple income sources. The book motivates readers to think creatively and break traditional job dependency.</p><p data-start=\"4801\" data-end=\"4985\"><em data-start=\"4801\" data-end=\"4820\">Rich Dad Poor Dad</em> is ideal for students, job holders, and entrepreneurs who want to improve their financial future. It changes how people think about savings, investment, and wealth.</p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"4987\" data-end=\"5088\">Overall, this book is a guide to financial freedom and teaches readers how to build long-term wealth.</p>', '26', '2-Kg', '669', '550', '-997146-images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `cat_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_details` varchar(200) NOT NULL,
  `link` varchar(300) NOT NULL,
  `show_colum` int(20) NOT NULL,
  `cat_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `user_id`, `cat_name`, `cat_details`, `link`, `show_colum`, `cat_photo`) VALUES
(1, 140, 'Self-Help / Personal Development', 'Na', 'Na', 4, '-601939-istockphoto-495477978-612x612.jpg'),
(27, 140, 'Finance / Business', 'Na', 'Na', 4, '-294884-istockphoto-1413549071-612x612.jpg'),
(28, 140, 'Fiction / Inspirational', 'Na', 'Na', 4, '-815203-istockphoto-1328805778-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ptype_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `type_name` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ptype_id`, `user_id`, `type_name`, `status`) VALUES
(2, 141, 'Offer', '1'),
(3, 141, 'Regular', '1'),
(4, 143, 'All', '1'),
(5, 140, 'A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `category` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`category`)),
  `gender` enum('Man','Woman') NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `area` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `languages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`languages`)),
  `weight` decimal(5,2) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `ethnicity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`ethnicity`)),
  `hair_color` varchar(50) DEFAULT NULL,
  `eye_color` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `hair_type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`hair_type`)),
  `trouser_size` varchar(50) DEFAULT NULL,
  `shoe_size` int(11) DEFAULT NULL,
  `skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skills`)),
  `education` text DEFAULT NULL,
  `other_skills` text DEFAULT NULL,
  `dsf` enum('Yes','No') DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `vimeo` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `privacy_policy` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `category_id`, `user_id`, `title`, `subtitle`, `details`, `userPic`) VALUES
(3, 0, 140, 'Confidence Cement', 'Quis ea et ut nemo a', '<p>Amet, mollit eum dol.</p>', 'digital-training-center-996248-4.jpg'),
(4, 0, 140, 'Sed laudantium pers', 'Incididunt facere ex', '<p>In veritatis consequ.</p>', 'digital-training-center-578182-8.jpg'),
(5, 6, 140, 'Project 1 title', 'Project 1 subtitle', '<p>Project 1 title</p>', 'digital-training-center-568332-23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seo_section`
--

CREATE TABLE `seo_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `canonical_link` varchar(255) NOT NULL,
  `keyword` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `breadcrumb_title` varchar(255) DEFAULT NULL,
  `breadcrumb_subtitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_section`
--

INSERT INTO `seo_section` (`id`, `user_id`, `type`, `title`, `canonical_link`, `keyword`, `description`, `author`, `breadcrumb_title`, `breadcrumb_subtitle`) VALUES
(1, 140, 'Home', 'LSE Decor', 'LSE Decor', 'LSE Decor', 'LSE Decor', 'LSE Decor', 'Home', 'Home'),
(5, 140, 'About', 'About Us', 'About Us', 'About Us', 'About Us', 'About Us', 'About Us', 'About Us'),
(6, 140, 'Team', 'Our Team', 'Our Team', 'Our Team', 'Our Team', 'Our Team', 'Team', 'Team'),
(7, 140, 'Teacher', 'Our Teacher', 'Our Teacher', 'Our Teacher', 'Our Teacher', 'Our Teacher', 'Teacher', 'Teacher'),
(8, 140, 'Student', 'Success Students', 'Success Students', 'Success Students', 'Success Students', 'Success Students', 'Student', 'Student'),
(9, 140, 'service', 'Our Service', 'Our Service', 'Our Service', 'Our Service', 'Our Service', 'Our Service', 'Our Service'),
(10, 140, 'Gallery', 'Our Gallery', 'Our Gallery', 'Our Gallery', 'Our Gallery', 'Our Gallery', 'Gallery', 'Gallery'),
(11, 140, 'Blog', 'Blog', 'Blog', 'Blog', 'Blog', 'Blog', 'Blog', 'Blog'),
(12, 140, 'Blog Details', 'Blog Details', 'Blog Details', 'Blog Details', 'Blog Details', 'Blog Details', 'Blog Details', 'Blog Details'),
(13, 140, 'Contact', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact', 'Contact'),
(16, 140, 'Course Details', 'Sit aut enim suscip', 'Saepe dolor quis qui', 'Quod labore impedit', 'Ab culpa omnis earu', 'Dignissimos enim aut', 'Course Details', 'Course Details');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `userPic` varchar(255) NOT NULL,
  `entry_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `category_id`, `user_id`, `title`, `subtitle`, `details`, `userPic`, `entry_date`) VALUES
(1, 0, 140, 'REMICO AGRO INDUSTRIES', 'Feed Manufacturer', '', 'remico-group-429095-agro-industries.jpg', '2025-12-28'),
(2, 0, 140, 'REMICO FLOUR MILLS', 'Flour Manufacturer', '', 'remico-group-532099-flour-mills.jpeg', '2025-12-28'),
(3, 0, 140, 'REMICO BREEDERS & CHICKS', 'Broiler Chicks, And Layer Chicks', '', 'remico-group-396541-concern2.jpg', '2025-12-28'),
(4, 0, 140, 'REMICO FOOD PRODUCTS', 'Wheat Flour ,Rice, Spices', '<div>\r\n<div>We do more than cast — we coordinate, support, and ensure everything runs smoothly, no matter the size of the production.</div>\r\n</div>', 'remico-group-872605-hero-slider2.jpg', '2025-10-13'),
(5, 0, 140, 'M/S M.Y. ENTERPRISE', 'Export, Import, Supplier & Commission Agent', '<div>\r\n<div>We take time to let talent shine on camera — whether it\'s recordings or stills, our Copenhagen studio ensures quality in every shot.</div>\r\n</div>', 'remico-group-141962-remico-group-911087-my-enterprice.jpeg', '2025-10-13'),
(6, 0, 140, 'FARUK AGRO PRODUCTS', 'Wheat Flour ,Rice, Spices', '', 'remico-group-292596-faruk-agro.jpeg', '2025-12-28'),
(7, 0, 140, 'RAWNAK TRADING CORPORATION', 'Coad, Fertilizer, Rice..', '', 'remico-group-839040-rawnak-product.jpeg', '2025-12-28'),
(8, 0, 140, 'REMICO LOGISTICS', 'Transport Solution Providar', '<p>sdfsdf</p>', 'remico-group-54802-remico-logistics.jpg', '2025-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `services_feature`
--

CREATE TABLE `services_feature` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_feature`
--

INSERT INTO `services_feature` (`id`, `user_id`, `title`, `sub_title`, `image`, `link1`, `link2`) VALUES
(2, 140, 'title', '<p>hlkhlkhlkhlkh</p>', 'img-746437-square-dot.png', 'products', 'link2');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_details` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `cat_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `user_id`, `cat_name`, `cat_details`, `link`, `cat_photo`) VALUES
(1, 140, 'Carla Newton', '<p>Nulla nihil consequa.</p>', 'Dolore et aspernatur', 'prince-661831-square-dot.png'),
(5, 140, 'Zenaida England', '<p>Qui nihil illo aliqu.</p>', 'At quo aut minus qua', 'prince-539881-square-dot.png');

-- --------------------------------------------------------

--
-- Table structure for table `skill_section`
--

CREATE TABLE `skill_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `percent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_section`
--

INSERT INTO `skill_section` (`id`, `user_id`, `name`, `percent`) VALUES
(6, 130, 'Web Development', '80%'),
(7, 130, 'Adobe', '60%'),
(67, 130, 'Microsoft Office', '70%');

-- --------------------------------------------------------

--
-- Table structure for table `slider_section`
--

CREATE TABLE `slider_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL,
  `short_details` text NOT NULL,
  `link1` varchar(250) NOT NULL,
  `link2` varchar(250) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_section`
--

INSERT INTO `slider_section` (`id`, `user_id`, `slider_title`, `slider_subtitle`, `short_details`, `link1`, `link2`, `userPic`) VALUES
(5, 140, 'no', '', '', '', '', 'remico-group-956955-remico-group-866129-remico-photo-gallery3.jpeg'),
(6, 140, 'no', '', '', '', '', 'remico-group-399842-remico-group-130203-remico-photo-gallery7.jpeg'),
(7, 140, 'no', '', '', '', '', 'remico-group-90688-remico factory.png');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `user_id`, `facebook`, `twitter`, `youtube`, `instagram`, `tiktok`, `linkedin`) VALUES
(15, 140, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/SufizaProperty/', 'https://www.facebook.com/', 'https://www.facebook.com/SufizaProperty/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `st_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `st_name` varchar(300) NOT NULL,
  `st_num` varchar(100) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `userPic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`st_id`, `user_id`, `st_name`, `st_num`, `icon`, `userPic`) VALUES
(1, 140, 'Teachers', '25', '', 'digital-training-center-492509-irani5.jpg'),
(2, 140, 'Courses', '10', '', 'digital-training-center-134497-digital-training-center-145051-Course.jpg'),
(3, 140, 'Trained Students', '550', '', 'digital-training-center-131606-digital-training-center-700153-Students.jpg'),
(4, 140, 'Awards Achieved', '16', '', 'digital-training-center-570786-digital-training-center-805921-Award.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `batch_no` varchar(250) NOT NULL,
  `course_no` varchar(30) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bld_grp` varchar(50) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL,
  `upazila` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `marriage_info` varchar(150) NOT NULL,
  `religion` varchar(150) NOT NULL,
  `nationality` varchar(150) NOT NULL,
  `birth_date` date NOT NULL,
  `student_phone` varchar(150) NOT NULL,
  `student_email` varchar(150) NOT NULL,
  `guardian_phone` varchar(150) NOT NULL,
  `degree` varchar(150) NOT NULL,
  `institute_name` varchar(250) NOT NULL,
  `board_roll` varchar(100) NOT NULL,
  `pass_year` varchar(100) NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `board_name` varchar(200) NOT NULL,
  `reference` varchar(350) NOT NULL,
  `join_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_id`, `student_no`, `batch_no`, `course_no`, `student_name`, `gender`, `bld_grp`, `father_name`, `mother_name`, `upazila`, `district`, `address`, `marriage_info`, `religion`, `nationality`, `birth_date`, `student_phone`, `student_email`, `guardian_phone`, `degree`, `institute_name`, `board_roll`, `pass_year`, `gpa`, `board_name`, `reference`, `join_date`, `status`, `userPic`) VALUES
(117, 22, 12, '1', '26', 'Jamal', 'Male', 'A+', 'ff', 'mm', '#', '#', '#', 'Yes', 'Muslim', 'Bangladeshi', '2023-05-02', '848465', 'jabed@gmail.com', 'fgjd', '#', 'dh', 'dh', 'dh', 'dh', '#', 'dh', '2023-05-02', 1, 'itm-dtc-'),
(118, 22, 13, '2', '25', 'Abdul Alim', 'Male', 'A+', 'Father', 'Mother', '2', '2', '2', 'Yes', 'Muslim', 'Bangladeshi', '2023-05-04', '098798798', 'jabed@gmail.com', '098798798', '2', 'Dhaka Model College', '2566', '2022', '5.00', '3', 'SAD', '2023-05-04', 1, 'itm-dtc-'),
(119, 140, 5, '10', '25', 'Abdul Bari', '', 'Male', 'Jubayer Hossain', 'Arifa Akter', '2', '2', '2', 'Yes', 'Muslim', 'Bangladeshi', '2024-03-25', '01758952347', 'samiul@gmail.com', '01576576591', '4', 'School/College/University', '5520', '2014', '5', '5', 'Babul', '2024-03-25', 1, 'itm-dtc-itm-dtcms.png'),
(122, 140, 6, '11', '26', 'Pappu', 'Male', 'A+', 'Jubayer Hossain1', 'Arifa Akter1', '2', '2', '2', 'Yes', 'Muslim', 'Bangladeshi', '2024-03-25', '5676', 'samiul@gmail.com', '01576576591', '2', 'School/College/University', '5225', '2025', '5', '3', 'Sad', '2024-03-25', 1, 'itm-dtc-logo_silver.png.png'),
(123, 140, 7, '11', '28', 'Abul Basar', '', 'Male', 'Jubayer Hossain1', 'Arifa Akter1', '2', '2', 'Bogura, Rajshahi Division, Bangladesh', 'Yes', 'Muslim', 'Bangladeshi', '2024-03-25', '01751891037', 'ricemill@gmail.com', '01576576591', '2', 'erwe', '855', '2012', '5', '5', 'OKJ', '2024-03-25', 1, 'itm-dtc-');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `userid` int(11) NOT NULL,
  `stuff_name` varchar(50) NOT NULL,
  `position` varchar(500) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `business_name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `business_details` varchar(250) NOT NULL,
  `service_charge` varchar(250) NOT NULL,
  `business_phone` varchar(100) NOT NULL,
  `business_email` varchar(250) NOT NULL,
  `biz_web` varchar(200) NOT NULL,
  `business_address` varchar(500) NOT NULL,
  `invoice_welcome` varchar(500) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `sign_img` text NOT NULL,
  `join_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `software_status` int(11) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `inv_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`userid`, `stuff_name`, `position`, `contact_info`, `business_name`, `business_details`, `service_charge`, `business_phone`, `business_email`, `biz_web`, `business_address`, `invoice_welcome`, `photo`, `sign_img`, `join_date`, `status`, `software_status`, `comments`, `division_id`, `district_id`, `upazila_id`, `inv_name`) VALUES
(0, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(22, 'Admin-ITM', 'Admin', 'Admin', '', '', '', '', '', '', '', '', 'upload/com-logo_1643530916.jpg', '', '2020-03-22', 1, 0, '', 0, 0, 0, ''),
(130, 'Admin', 'Main Admin  ', '01751891037', 'ITM Computer & Tech Gadget', '', '1500', '01751891037', 'samiulbdb@gmail.com', '', 'Bogura City, Bogura', '', 'upload/com-logo_1643530916.jpg', '', '2019-07-10', 1, 0, '', 0, 0, 0, ''),
(135, 'Accounts', 'Accounts', '017545', '', '', '1500', '', '', '', '', '', 'upload/training-logo_1711871720.png', '', '2022-01-30', 1, 1, '', 0, 0, 0, ''),
(140, 'Remico Group', 'Management System                                ', '+88 01738-559316', 'Remico ', 'Management System', '500', '+88 01738-559316', 'info@remicogroup.com', 'remicogroup.com', 'House-13, Road : 1/A, Sector-5 , Uttara, Dhaka, Bangladesh', 'Thanks For Work With Us', 'upload/remico_1767258569.png', 'upload/Samiul_1694185179.jpg', '2022-04-11', 1, 1, 'Trail', 1, 5, 14, 'rmm'),
(144, 'my first name', '                ', '', 'Samiul', '', '22', '', '', '', '', '', '', '', '2025-09-30', 1, 1, '', 0, 0, 0, ''),
(145, 'my first name', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(146, 'my first name', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(147, 'my first name', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(148, 'my first name', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(149, 'Pappu ', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(150, 'Samiul Alam', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(151, 'Juyena', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_details`
--

CREATE TABLE `stuff_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `own_name` varchar(300) NOT NULL,
  `business_name` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  `software_status` int(11) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `success_student_section`
--

CREATE TABLE `success_student_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` mediumtext NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `success_student_section`
--

INSERT INTO `success_student_section` (`id`, `user_id`, `name`, `title`, `details`, `userPic`) VALUES
(4, 140, 'Ali Arman Tuha', 'Network Engineer', 'ডিপ্লোমা ইন্ডাস্ট্রিয়াল এটাচমেন্ট-২০২৩ শিক্ষার্থী \"মো:আলী আরমান তোহা\" নেটওয়ার্কিং এর উপর প্ৰশিক্ষণ শেষ করে বর্তমানে হযরত শাহজালাল আন্তজার্তিক বিমানবন্দরে নেটওয়ার্ক ইঞ্জিনিয়ার হিসাবে জব করছেন।', 'digital-training-center-173061-ali.jpg'),
(5, 140, 'Janna Mcconnell', 'Eius ea cillum dolor', 'Voluptates est ad e', 'prince-181884-team1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_section`
--

CREATE TABLE `teacher_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_title` varchar(255) NOT NULL,
  `teacher_subtitle` varchar(255) NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_section`
--

INSERT INTO `teacher_section` (`id`, `user_id`, `teacher_title`, `teacher_subtitle`, `userPic`) VALUES
(2, 140, 'SHAHRIAR HASAN', 'EXECUTIVE CUM KOREAN INSTRUCTOR', 'digital-training-center-483633-Shahriar Hasan.JPG'),
(3, 140, 'M. NIAZ RASHID', 'FACULTY OF ENGLISH', 'digital-training-center-971711-M. NIAZ RASHID.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `team_section`
--

CREATE TABLE `team_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `team_title` varchar(200) NOT NULL,
  `team_subtitle` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_section`
--

INSERT INTO `team_section` (`id`, `user_id`, `team_title`, `team_subtitle`, `email`, `userPic`) VALUES
(28, 140, 'Md. Haider Ali Sarker', 'Managing Director', 'menhaider85@gmail.com', 'remico-group-943665-haider-ali-sharker-remico-group.jpeg'),
(29, 140, 'Md. Omar Faruk', 'Director', '', 'remico-group-580540-user.jpg'),
(30, 140, 'Mahmudur Rahman Milon', 'CFO', 'milon.choudhury304@gmail.com', 'remico-group-83813-user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `ts_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `position` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`ts_id`, `user_id`, `name`, `rating`, `position`, `title`, `details`, `userPic`) VALUES
(2, 140, 'Alexander Bell', 1, 'Customer Satisfaction', 'justo et tempor eirmod magna dolore erat amet', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 22px;=\"\" white-space:=\"\" pre;\"=\"\" bis_skin_checked=\"1\"><div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 22px;=\"\" white-space:=\"\" pre;\"=\"\" bis_skin_checked=\"1\">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</div></div>', 'remico-group-663187-webp'),
(6, 140, 'Boris Johnson', 1, 'Sustainable Material', 'justo et tempor eirmod magna dolore erat amet', '<p>Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed <span style=\"background-color: rgba(0, 0, 0, 0);\">stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna </span><span style=\"background-color: rgba(0, 0, 0, 0);\">dolore erat</span><span style=\"background-color: rgba(0, 0, 0, 0);\"> amet</span></p>', 'remico-group-480990-webp'),
(7, 140, 'Bradley Gordon', 1, 'Budget Friendly', 'justo et tempor eirmod magna dolore erat amet', '<p>Diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>', 'remico-group-788197-webp');

-- --------------------------------------------------------

--
-- Table structure for table `title_name`
--

CREATE TABLE `title_name` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `stutas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title_name`
--

INSERT INTO `title_name` (`id`, `location`, `name`, `stutas`) VALUES
(2, 'Header', 'Digital Training Center', 0),
(5, 'Title Bar', 'Digital Training Center', 0),
(6, 'Report Title', 'Digital Training Center', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access_level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `full_name`, `username`, `password`, `access_level`, `status`, `expire_date`) VALUES
(0, '', '', '$2y$10$6lyaC8MT1DlgB7I12S5VYO9dl.iWtXlrirlGui6hnEZWDQ0wF0wju', 4, 1, '2026-10-06'),
(22, 'Admin-ITM', 'AdmiN', '$2y$10$WlfsNUlX2gHtOSO5nlXN7uMBiljeYmBkpGZRqBKGIe9Wj0Hf0.2ay', 1, 1, '2026-06-12'),
(130, 'Admin', 'samiul004', '$2y$10$4wfBy42lvE4oQFS7mZ6PZu7nV4hwKiqKdNEk1YMb555gMq48Ax8iK', 2, 1, '2026-06-12'),
(135, 'Accounts', 'Sam1', '490bd89bcdc4e9f01d1a33899736f7a3', 3, 1, '2024-06-25'),
(140, 'Remico Group', 'ITM', '$2y$10$D3Vu7hTAcrIUS.nHjLCbL.5WtdkCie/usmO6UoMjYh8uMV3ntd6q2', 4, 1, '2026-10-31'),
(144, 'my first name', 'me@mydomain.com', '$2y$10$bypdjA0GPU71rIRcEfJeG.ipblt6.3oXIxbYoq4TcrYikNh0nW0Dm', 4, 1, '2026-09-21'),
(145, 'my first name', 'samiul@gmail.com', '$2y$10$adN.P3sXecywh0dQpfNXt.m2v3NcUu6CJLmr7rZ0SxaCQeIx4zPea', 4, 1, '2026-09-21'),
(146, 'my first name', 'kalam@gmail.com', '$2y$10$sQuD.qMClvPong28YwuddOdajPUhp4EPCO3RQfr/NfQozLqAGyGfi', 4, 1, '2026-09-21'),
(147, 'my first name', 'babul@gmail.com', '$2y$10$XLkeOGgiq1XjcTrm.EJQZekMsKVKpV00sYAvqUcwmopgJxE5L.dr2', 4, 1, '2026-09-22'),
(148, 'my first name', 'jaber@gmail.com', '$2y$10$B35g/rZ8mt0EPJ12Ahuj2.Cx5dVNGJ8z/PiFc.K6RkkfCBgXsaU/.', 4, 1, '2026-09-23'),
(149, 'Pappu ', 'pappu@gmail.com', '$2y$10$lI7NNsZIzFM5u.NMEc.eCOYIwyjpR.RgVpfwNV61GN/iMeT7nJPt.', 4, 1, '2026-09-23'),
(150, 'Samiul Alam', 'nion@gmail.com', '$2y$10$QeOWBUqyXnRzBxMVSaeIi.NHaxdbhVKt/tLh8ZbJy7b9BjzfHuxva', 4, 1, '2026-09-23'),
(151, 'Juyena', 'juyena@gmail', '$2y$10$MQOuFBH5v7uPshjPVGe3tORsQGUiHIaGQhSReaOJV3aJhnV6GfHSu', 4, 1, '2026-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `userlogid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_password`
--

CREATE TABLE `user_password` (
  `passwordid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `original` varchar(30) NOT NULL,
  `mdfive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_password`
--

INSERT INTO `user_password` (`passwordid`, `email`, `original`, `mdfive`) VALUES
(6, '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(130, '', 'samiul004', 'b17c7f9d339f87ae91c72e08daf1c8db'),
(135, '', 'Sam1', '490bd89bcdc4e9f01d1a33899736f7a3'),
(140, '', 'ITM23', 'eb2dd0656157562e37736fe7e186d438'),
(141, '', 'Pa$$w0rd!', '$2y$10$0TM9sReH1YosVqRdRcNu3.UTb4W3lhjuutHbMCY10awkqEM0xt0wS'),
(142, '', 'jahidlaravel23@gmail.com', '$2y$10$vPyjAnx4nu1aRSdOuovql.jbbpbDuKxteu3eW41JFRCJaeJDYMAli'),
(143, 'jahidlaravel235@gmail.com', 'jahidlaravel235@gmail.com', '$2y$10$xxUCbmMt7eT7cuT6mwl5QOkcUdLA.gYGq1vGWYD1s5u4Oahh4ryKq');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `userid` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `access_level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`userid`, `full_name`, `username`, `email`, `password`, `access_level`, `status`, `expire_date`) VALUES
(22, 'Admin-ITM', 'AdmiN', NULL, '3052737b4b919b27a424455bb6475e24', 1, 1, '0000-00-00'),
(130, 'Admin', 'samiul004', NULL, 'b17c7f9d339f87ae91c72e08daf1c8db', 2, 1, '2024-06-12'),
(135, 'Accounts', 'Sam1', NULL, '490bd89bcdc4e9f01d1a33899736f7a3', 3, 1, '2024-06-25'),
(140, 'Digital Training Center', 'ITM', NULL, 'eb2dd0656157562e37736fe7e186d438', 4, 1, '2025-10-31'),
(141, 'Christine Myers', 'christine.myers', NULL, '$2y$10$0TM9sReH1YosVqRdRcNu3.UTb4W3lhjuutHbMCY10aw', 5, 1, '2026-09-20'),
(142, 'Avram Jennings', 'avram.jennings', NULL, '$2y$10$vPyjAnx4nu1aRSdOuovql.jbbpbDuKxteu3eW41JFRC', 4, 1, '2026-09-20'),
(143, 'Quemby Fry', 'quemby.fry', 'jahidlaravel235@gmail.com', '$2y$10$xxUCbmMt7eT7cuT6mwl5QOkcUdLA.gYGq1vGWYD1s5u', 5, 1, '2026-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `user_stuff`
--

CREATE TABLE `user_stuff` (
  `userid` int(11) NOT NULL,
  `stuff_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(500) DEFAULT NULL,
  `contact_info` varchar(50) DEFAULT NULL,
  `business_name` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `business_details` varchar(250) DEFAULT NULL,
  `service_charge` varchar(250) DEFAULT NULL,
  `business_phone` varchar(100) DEFAULT NULL,
  `business_email` varchar(250) DEFAULT NULL,
  `biz_web` varchar(200) DEFAULT NULL,
  `business_address` varchar(500) DEFAULT NULL,
  `invoice_welcome` varchar(500) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `sign_img` text DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `software_status` int(11) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upazila_id` int(11) DEFAULT NULL,
  `inv_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_stuff`
--

INSERT INTO `user_stuff` (`userid`, `stuff_name`, `email`, `position`, `contact_info`, `business_name`, `business_details`, `service_charge`, `business_phone`, `business_email`, `biz_web`, `business_address`, `invoice_welcome`, `photo`, `sign_img`, `join_date`, `status`, `software_status`, `comments`, `division_id`, `district_id`, `upazila_id`, `inv_name`) VALUES
(130, 'Admin', '', 'Main Admin', '01751891037', 'ITM Computer & Tech Gadget', '', '1500', '01751891037', 'samiulbdb@gmail.com', '', 'Bogura City, Bogura', '', 'upload/com-logo_1643530916.jpg', '', '2019-07-10', 1, 0, '', 0, 0, 0, ''),
(135, 'Accounts', '', 'Accounts', '017545', '', '', '1500', '', '', '', '', '', 'upload/training-logo_1711871720.png', '', '2022-01-30', 1, 1, '', 0, 0, 0, ''),
(140, 'Digital Training Center', '', 'Management System                        ', '01751891037', 'Digital Training Center', 'Management System', '500', '01321-222 008', 'contact.mli.bd@gmail.com', 'princebd.com', 'Khaja IT Park (3rd to 7th Floor), 07 South Kallyanpur, Kallyanpur Bus Stand, Mirpur Road, Dhaka-1207', 'Thanks For Work With Us', 'upload/training-logo_1710830248.png', 'upload/Samiul_1694185179.jpg', '2022-04-11', 1, 2, 'Trail', 1, 5, 14, 'iss'),
(141, 'Christine', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'Avram', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'Quemby', 'jahidlaravel235@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

CREATE TABLE `value` (
  `ms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `value`
--

INSERT INTO `value` (`ms_id`, `user_id`, `name`, `details`, `userPic`) VALUES
(1, 140, 'Our Vision', '<p>To become one of the most trusted and leading business groups in Bangladesh, known for innovation, reliability, and excellence in every sector we operate.</p>', '608594.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `userPic` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `user_id`, `title`, `link`, `userPic`, `date`) VALUES
(44, 140, 'video', 'https://www.youtube.com/embed/B3DJKOUxHck?si=1SslOOylm53IsuWM', 'digital-training-center-530741-class-3.jpg', '2025-10-09 23:17:19'),
(45, 140, 'dance', 'https://www.youtube.com/embed/JZIZfYto9mM?si=h-uJ-8KjJN3rHWzU\"', 'digital-training-center-825938-class-1.jpg', '2025-10-13 22:49:43'),
(46, 140, 'video', 'https://www.youtube.com/embed/JZIZfYto9mM?si=h-uJ-8KjJN3rHWzU', 'digital-training-center-845321-breadcrumb.jpg', '2025-10-14 23:22:53'),
(47, 140, 'video', 'https://www.youtube.com/embed/JZIZfYto9mM?si=h-uJ-8KjJN3rHWzU', 'digital-training-center-236520-carousel-1.jpg', '2025-10-14 23:23:22'),
(48, 140, 'video', 'https://www.youtube.com/embed/JZIZfYto9mM?si=h-uJ-8KjJN3rHWzU', 'digital-training-center-458152-service-4.jpg', '2025-10-14 23:24:02'),
(49, 140, 'video', 'https://www.youtube.com/embed/JZIZfYto9mM?si=h-uJ-8KjJN3rHWzU', 'digital-training-center-26175-service-1.jpg', '2025-10-14 23:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `ms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`ms_id`, `user_id`, `name`, `details`, `userPic`) VALUES
(1, 140, 'Our Vision', '<p>To become one of the most trusted and leading business groups in Bangladesh, known for innovation, reliability, and excellence in every sector we operate.</p>', '608594.jpg'),
(2, 140, '', '<ul class=\"list-unstyled\">\r\n<li>✔ Quality First</li>\r\n<li>✔ Integrity &amp; Transparency</li>\r\n<li>✔ Customer Commitment</li>\r\n<li>✔ Innovation &amp; Improvement</li>\r\n<li>✔ Sustainable Growth</li>\r\n</ul>', '995319.');

-- --------------------------------------------------------

--
-- Table structure for table `why_section`
--

CREATE TABLE `why_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` mediumtext DEFAULT NULL,
  `why_icon` varchar(150) NOT NULL,
  `userPic` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_section`
--

INSERT INTO `why_section` (`id`, `user_id`, `title`, `sub_title`, `why_icon`, `userPic`, `date`) VALUES
(12, 140, 'Cost-Effective Solutions', 'REMICO GROUP provides high-quality products and services at competitive pricing to ensure maximum value for our clients.', 'fa fa-hand-holding-usd', 'digital-training-center-155203-', NULL),
(13, 140, 'Sustainable Practices', 'We emphasize environmentally sustainable practices and responsible sourcing to support long-term growth and social responsibility.', 'fa fa-check', 'digital-training-center-144047-', NULL),
(14, 140, 'Customer Focused', 'We prioritize customer needs, delivering timely support and ensuring long-term partnerships built on trust and reliability.', 'fa fa-user', 'digital-training-center-276300-', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_feature`
--
ALTER TABLE `about_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`activitylog`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `bld_grp`
--
ALTER TABLE `bld_grp`
  ADD PRIMARY KEY (`bld_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`b_c_id`);

--
-- Indexes for table `blog_section`
--
ALTER TABLE `blog_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_section`
--
ALTER TABLE `choose_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_subject`
--
ALTER TABLE `contact_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `faq_section`
--
ALTER TABLE `faq_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature1`
--
ALTER TABLE `feature1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature2`
--
ALTER TABLE `feature2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_all`
--
ALTER TABLE `features_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_section`
--
ALTER TABLE `header_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_section_content`
--
ALTER TABLE `hero_section_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_title`
--
ALTER TABLE `join_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `news_section`
--
ALTER TABLE `news_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`passwordid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ptype_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_section`
--
ALTER TABLE `seo_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_feature`
--
ALTER TABLE `services_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_section`
--
ALTER TABLE `skill_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_section`
--
ALTER TABLE `slider_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `stuff_details`
--
ALTER TABLE `stuff_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_student_section`
--
ALTER TABLE `success_student_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_section`
--
ALTER TABLE `teacher_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_section`
--
ALTER TABLE `team_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `title_name`
--
ALTER TABLE `title_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`userlogid`);

--
-- Indexes for table `user_password`
--
ALTER TABLE `user_password`
  ADD PRIMARY KEY (`passwordid`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_stuff`
--
ALTER TABLE `user_stuff`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `value`
--
ALTER TABLE `value`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `why_section`
--
ALTER TABLE `why_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_feature`
--
ALTER TABLE `about_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `activitylog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=664;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `bld_grp`
--
ALTER TABLE `bld_grp`
  MODIFY `bld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `b_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_section`
--
ALTER TABLE `blog_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `choose_section`
--
ALTER TABLE `choose_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `contact_subject`
--
ALTER TABLE `contact_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hero_section_content`
--
ALTER TABLE `hero_section_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
