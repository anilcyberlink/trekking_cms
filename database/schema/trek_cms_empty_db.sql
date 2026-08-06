-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2026 at 08:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trek_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_banner`
--

CREATE TABLE `activity_banner` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `picture` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_activity_parent`
--

CREATE TABLE `cl_activity_parent` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_associated_posts`
--

CREATE TABLE `cl_associated_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `brief` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `thumbnail` varchar(191) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `page_key` varchar(191) NOT NULL,
  `show_in_home` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_banner`
--

CREATE TABLE `cl_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `caption` varchar(500) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `picture_alt` varchar(500) DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `primary_cta` longtext DEFAULT NULL,
  `primary_cta_link` longtext DEFAULT NULL,
  `secondary_cta` longtext DEFAULT NULL,
  `secondary_cta_link` longtext DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_cost_excludes`
--

CREATE TABLE `cl_cost_excludes` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_detail_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_cost_includes`
--

CREATE TABLE `cl_cost_includes` (
  `id` int(11) NOT NULL,
  `trip_detail_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_banner`
--

CREATE TABLE `cl_multiple_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_id` int(11) DEFAULT 0,
  `picture` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_image`
--

CREATE TABLE `cl_multiple_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_posts`
--

CREATE TABLE `cl_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_date` datetime DEFAULT NULL,
  `post_author` int(11) DEFAULT 1,
  `author` varchar(500) DEFAULT NULL,
  `trip` int(11) DEFAULT NULL,
  `template` varchar(191) DEFAULT NULL,
  `template_child` varchar(100) DEFAULT NULL,
  `post_title` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `post_content` longtext DEFAULT NULL,
  `post_excerpt` text DEFAULT NULL,
  `reading_time` varchar(500) DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `page_key` varchar(191) NOT NULL DEFAULT '0',
  `post_type` int(11) DEFAULT 0,
  `post_category` int(11) DEFAULT 0,
  `post_parent` int(11) DEFAULT 0,
  `post_order` int(11) DEFAULT 0,
  `page_banner` varchar(191) DEFAULT NULL,
  `page_thumbnail` varchar(191) DEFAULT NULL,
  `page_video` varchar(191) DEFAULT NULL,
  `meta_keyword` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `associated_title` varchar(191) DEFAULT NULL,
  `external_link` varchar(191) DEFAULT NULL,
  `post_tags` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `published` enum('1','0') NOT NULL DEFAULT '1',
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `about_type` varchar(255) DEFAULT NULL,
  `is_draft` enum('1','0') NOT NULL DEFAULT '0',
  `is_trashed` enum('1','0') NOT NULL DEFAULT '0',
  `show_in_home` enum('0','1') DEFAULT '0',
  `is_password_protected` enum('1','0') NOT NULL DEFAULT '0',
  `comment` enum('1','0') NOT NULL DEFAULT '0',
  `visiter` int(11) DEFAULT NULL,
  `lang` enum('en','np') NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_categories`
--

CREATE TABLE `cl_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `category_caption` varchar(191) DEFAULT NULL,
  `category_content` text DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `thumbnail` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_type`
--

CREATE TABLE `cl_post_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(191) NOT NULL,
  `uri` varchar(191) NOT NULL,
  `content` text DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `api_template` varchar(500) DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `is_menu` enum('0','1') DEFAULT '0',
  `is_footer` enum('0','1') DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `associated_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_related_trip_rel`
--

CREATE TABLE `cl_related_trip_rel` (
  `id` bigint(20) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `related_trip_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `TTA1` varchar(191) DEFAULT NULL,
  `TTA2` varchar(191) DEFAULT NULL,
  `Affiliated1` varchar(255) DEFAULT NULL,
  `Affiliated2` varchar(255) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `usa_phone` varchar(255) DEFAULT NULL,
  `email_primary` varchar(191) DEFAULT NULL,
  `usa_email_primary` varchar(255) DEFAULT NULL,
  `email_secondary` varchar(191) DEFAULT NULL,
  `usa_email_secondary` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `usa_address` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(191) DEFAULT NULL,
  `linkedin_link` varchar(191) DEFAULT NULL,
  `youtube_link` varchar(191) DEFAULT NULL,
  `twitter_link` varchar(191) DEFAULT NULL,
  `google_plus` varchar(100) DEFAULT NULL,
  `instagram_link` varchar(100) DEFAULT NULL,
  `tiktok_link` varchar(255) DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `google_map2` text DEFAULT NULL,
  `copyright_text` text DEFAULT NULL,
  `link1` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `flight_link` varchar(255) DEFAULT NULL,
  `flight_brief` text DEFAULT NULL,
  `flight_photo` varchar(255) DEFAULT NULL,
  `text1_title` varchar(255) DEFAULT NULL,
  `text1_sub_title` varchar(255) DEFAULT NULL,
  `text2_title` varchar(255) DEFAULT NULL,
  `text2_sub_title` varchar(255) DEFAULT NULL,
  `text3_title` varchar(255) DEFAULT NULL,
  `text3_sub_title` varchar(255) DEFAULT NULL,
  `text4_title` varchar(255) DEFAULT NULL,
  `text4_sub_title` varchar(255) DEFAULT NULL,
  `text5_title` varchar(255) DEFAULT NULL,
  `text5_sub_title` varchar(255) DEFAULT NULL,
  `fp_activity` longtext DEFAULT NULL,
  `fp_training` text DEFAULT NULL,
  `fp_about` text DEFAULT NULL,
  `fp_about_content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `site_name`, `logo`, `TTA1`, `TTA2`, `Affiliated1`, `Affiliated2`, `phone`, `usa_phone`, `email_primary`, `usa_email_primary`, `email_secondary`, `usa_email_secondary`, `address`, `usa_address`, `fax`, `skype`, `facebook_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `google_plus`, `instagram_link`, `tiktok_link`, `meta_key`, `meta_description`, `google_map`, `google_map2`, `copyright_text`, `link1`, `link2`, `flight_link`, `flight_brief`, `flight_photo`, `text1_title`, `text1_sub_title`, `text2_title`, `text2_sub_title`, `text3_title`, `text3_sub_title`, `text4_title`, `text4_sub_title`, `text5_title`, `text5_sub_title`, `fp_activity`, `fp_training`, `fp_about`, `fp_about_content`, `created_at`, `updated_at`) VALUES
(1, 'Trekking Site', NULL, NULL, NULL, NULL, NULL, '9800000000 , 9700000000', '+977 9800000004', 'info@trek.com', NULL, NULL, NULL, 'Kathmandu, Nepal', NULL, '+977 9800000003', NULL, 'https://www.facebook.com', 'https://www.linkedin.com/in', 'https://www.youtube.com/', 'https://x.com', 'https://instagram.com/', 'https://www.instagram.com/', 'https://www.tiktok.com/', NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2331.296832187114!2d85.34148470544724!3d27.736729001807113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19308870770d%3A0x5afe8afa09967b48!2sSummit%208000!5e0!3m2!1sen!2snp!4v1770185462314!5m2!1sen!2snp\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"\r\n        referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 'Copyright © 2026, trek', NULL, NULL, NULL, 'All content on this website, including text and photographs, is the exclusive property of Cyberlink. Reproduction or use without prior written permission is strictly prohibited. ©Cyberlink, 2026.', NULL, '16', 'Age of First Everest Summit', '5', 'Elite Sherpa Guides', '50+', 'Years Combined Experience', '98%', 'Safety Record', '600+', 'Successful Expeditions', NULL, NULL, NULL, NULL, NULL, '2026-08-04 07:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `cl_team`
--

CREATE TABLE `cl_team` (
  `id` int(10) UNSIGNED NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT 'team-member',
  `name` varchar(255) DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `team_key` varchar(191) NOT NULL DEFAULT '0',
  `position` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT '0',
  `experience` varchar(191) DEFAULT NULL,
  `languages` varchar(191) DEFAULT NULL,
  `certifications` varchar(191) DEFAULT NULL,
  `specialisation` varchar(191) DEFAULT NULL,
  `subcategory` varchar(191) DEFAULT NULL,
  `fb_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `brief` text DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL DEFAULT 0,
  `banner` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `published` enum('1','0') NOT NULL DEFAULT '1',
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_draft` enum('1','0') NOT NULL DEFAULT '0',
  `is_trashed` enum('1','0') NOT NULL DEFAULT '0',
  `is_password_protected` enum('1','0') NOT NULL DEFAULT '0',
  `comment` enum('1','0') NOT NULL DEFAULT '0',
  `lang` enum('en','np') NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_activities`
--

CREATE TABLE `cl_trip_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_parent` varchar(128) DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `sub_title` varchar(191) DEFAULT 'NULL',
  `template` varchar(255) DEFAULT 'single',
  `uri` varchar(191) NOT NULL,
  `thumbnail` varchar(191) DEFAULT 'NULL',
  `thumbnail_alt` varchar(500) DEFAULT NULL,
  `banner` varchar(191) DEFAULT 'NULL',
  `banner_alt` varchar(500) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `external_link` varchar(255) DEFAULT NULL,
  `category_video` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `isdefault` enum('0','1') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_activity_rel`
--

CREATE TABLE `cl_trip_activity_rel` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_addons`
--

CREATE TABLE `cl_trip_addons` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `thumbnail_alt` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_addon_rel`
--

CREATE TABLE `cl_trip_addon_rel` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `addon_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_booking`
--

CREATE TABLE `cl_trip_booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `passport_expire` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `trip_start_date` varchar(255) DEFAULT NULL,
  `trip_end_date` varchar(255) DEFAULT NULL,
  `trip_days` varchar(255) DEFAULT NULL,
  `total_travellers` varchar(255) DEFAULT NULL,
  `tshirt_size` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `restrictions` varchar(255) DEFAULT NULL,
  `paid_status` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `hear` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_customize`
--

CREATE TABLE `cl_trip_customize` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `trip_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `no_of_people` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `trip_start_date` date DEFAULT NULL,
  `trip_end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_destinations`
--

CREATE TABLE `cl_trip_destinations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `brief` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_destination_rel`
--

CREATE TABLE `cl_trip_destination_rel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_details`
--

CREATE TABLE `cl_trip_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `template` varchar(255) NOT NULL,
  `trip_title` varchar(191) NOT NULL,
  `sub_title` longtext DEFAULT NULL,
  `duration` varchar(191) DEFAULT NULL,
  `max_altitude` varchar(191) DEFAULT 'NULL',
  `best_season` varchar(191) DEFAULT NULL,
  `walking_per_day` varchar(100) DEFAULT NULL,
  `group_size` varchar(100) DEFAULT NULL,
  `accommodation` varchar(100) DEFAULT NULL,
  `meals` varchar(255) DEFAULT NULL,
  `route` varchar(100) DEFAULT NULL,
  `trip_highlight` longtext DEFAULT NULL,
  `trip_overview` longtext DEFAULT NULL,
  `peak_name` varchar(255) DEFAULT NULL,
  `trip_type` int(11) DEFAULT NULL,
  `starting_price` varchar(191) DEFAULT 'NULL',
  `trip_map` varchar(255) DEFAULT NULL,
  `tripmap_alt` varchar(500) DEFAULT NULL,
  `trip_video` text DEFAULT NULL,
  `trip_chart` varchar(255) DEFAULT NULL,
  `trip_excerpt` text DEFAULT NULL,
  `trip_content` longtext DEFAULT NULL,
  `trip_grade` varchar(191) DEFAULT NULL,
  `status_text` varchar(255) DEFAULT NULL,
  `uri` varchar(191) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `trip_code` varchar(191) DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `banner` varchar(255) DEFAULT 'NULL',
  `banner_alt` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `thumbnail_alt` varchar(500) DEFAULT NULL,
  `trip_pdf` varchar(255) DEFAULT NULL,
  `visiter` int(11) DEFAULT 0,
  `is_draft` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `trip_of_the_month` enum('1','0') NOT NULL DEFAULT '0',
  `video_status` tinyint(4) DEFAULT 0,
  `start_date` varchar(191) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_faqs`
--

CREATE TABLE `cl_trip_faqs` (
  `id` int(11) NOT NULL,
  `trip_detail_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_film_making`
--

CREATE TABLE `cl_trip_film_making` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `trip_id` int(11) NOT NULL,
  `num_ppl` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `full_name` varchar(191) NOT NULL,
  `contact` varchar(191) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(191) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_gear`
--

CREATE TABLE `cl_trip_gear` (
  `id` int(11) NOT NULL,
  `trip_detail_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `ordering` int(11) DEFAULT 1,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_grade`
--

CREATE TABLE `cl_trip_grade` (
  `id` int(11) NOT NULL,
  `grade_message` varchar(300) DEFAULT NULL,
  `trip_grade` varchar(191) DEFAULT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_groups`
--

CREATE TABLE `cl_trip_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `sub_title` varchar(191) DEFAULT 'NULL',
  `uri` varchar(191) NOT NULL,
  `banner` varchar(191) DEFAULT 'NULL',
  `content` longtext DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `ordering` varchar(191) DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_group_rel`
--

CREATE TABLE `cl_trip_group_rel` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_itinerary`
--

CREATE TABLE `cl_trip_itinerary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_detail_id` int(11) NOT NULL,
  `days` varchar(191) DEFAULT NULL,
  `meals` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `max_altitude` varchar(255) DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_itinerary_rel`
--

CREATE TABLE `cl_trip_itinerary_rel` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_regions`
--

CREATE TABLE `cl_trip_regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `sub_title` varchar(191) DEFAULT 'NULL',
  `uri` varchar(191) NOT NULL,
  `thumbnail` varchar(191) DEFAULT 'NULL',
  `banner` varchar(191) DEFAULT 'NULL',
  `excerpt` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `ordering` varchar(191) DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_region_rel`
--

CREATE TABLE `cl_trip_region_rel` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_schedule`
--

CREATE TABLE `cl_trip_schedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_detail_id` int(11) NOT NULL,
  `start_date` varchar(191) DEFAULT NULL,
  `end_date` varchar(191) DEFAULT NULL,
  `group_size` varchar(191) DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL,
  `remarks` varchar(191) DEFAULT NULL,
  `availability` enum('GUARANTEED','AVAILABLE','LIMITED','CLOSED') DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_suggestion`
--

CREATE TABLE `cl_trip_suggestion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `femail` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_tailor_made`
--

CREATE TABLE `cl_trip_tailor_made` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `trip_id` int(11) NOT NULL,
  `num_ppl` varchar(191) DEFAULT NULL,
  `duration` varchar(191) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `full_name` varchar(191) DEFAULT NULL,
  `contact` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `destination` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_trip_type`
--

CREATE TABLE `cl_trip_type` (
  `id` int(11) NOT NULL,
  `trip_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `country` varchar(225) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `is_checked` enum('0','1') DEFAULT NULL,
  `trip` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination_activity_rel`
--

CREATE TABLE `destination_activity_rel` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `direct_pays`
--

CREATE TABLE `direct_pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `no_of_people` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `paid_status` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dymantic_instagram_basic_profiles`
--

CREATE TABLE `dymantic_instagram_basic_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dymantic_instagram_feed_tokens`
--

CREATE TABLE `dymantic_instagram_feed_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `access_code` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_profile_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE `emergencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `emergency_fullname` varchar(255) DEFAULT NULL,
  `emergency_relation` varchar(255) DEFAULT NULL,
  `emergency_phone_no` varchar(255) DEFAULT NULL,
  `emergency_email` varchar(255) DEFAULT NULL,
  `emergency_address` varchar(255) DEFAULT NULL,
  `emergency_zip` varchar(255) DEFAULT NULL,
  `emergency_country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `training_title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `airline_name` varchar(255) DEFAULT NULL,
  `airline_no` varchar(255) DEFAULT NULL,
  `arrival_from` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `departure_airline_name` varchar(255) DEFAULT NULL,
  `departure_airline_no` varchar(255) DEFAULT NULL,
  `departure_from` varchar(255) DEFAULT NULL,
  `departure_date` varchar(255) DEFAULT NULL,
  `departure_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_brief`
--

CREATE TABLE `home_brief` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `brief` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `insurance_company` varchar(255) DEFAULT NULL,
  `insurance_phone` varchar(255) DEFAULT NULL,
  `policy_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_slugs`
--

CREATE TABLE `page_slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sluggable_id` bigint(20) UNSIGNED NOT NULL,
  `sluggable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `related_activity_rel`
--

CREATE TABLE `related_activity_rel` (
  `id` bigint(20) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `related_activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_meta`
--

CREATE TABLE `seo_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seoable_id` bigint(20) UNSIGNED NOT NULL,
  `seoable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image_alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robots` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schema_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schema_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `focus_keyword` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_sitemap` tinyint(1) NOT NULL DEFAULT 1,
  `sitemap_priority` float NOT NULL DEFAULT 0.5,
  `change_frequency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_categories`
--

CREATE TABLE `team_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uri` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `team_parent` int(11) DEFAULT 0,
  `picture` varchar(255) DEFAULT NULL,
  `ordering` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_banners`
--

CREATE TABLE `trip_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_detail_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `ordering` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_highlights`
--

CREATE TABLE `trip_highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_detail_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ordering` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_inquiries`
--

CREATE TABLE `trip_inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `trip_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(512) DEFAULT NULL,
  `number` varchar(255) NOT NULL,
  `no_of_people` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `review` varchar(191) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `trip_start_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trip_reviews`
--

CREATE TABLE `trip_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED DEFAULT NULL,
  `trip_title` varchar(500) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `contact` varchar(191) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
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
  `pin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `pin`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'summit8000@admin.com', NULL, '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', NULL, 8910, '2020-12-22 01:00:49', '2021-03-12 23:51:49'),
(2, 'Cyberlink', 'root@admin.com', NULL, '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 'xlIoxgFc4OEiFhEWSVcIf2IWnYJe823KPINq0yDHtkv1GFQ3X0iNHXPMvraA', 1100, '2020-12-22 01:00:49', '2021-03-12 23:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_banner`
--
ALTER TABLE `activity_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_activity_parent`
--
ALTER TABLE `cl_activity_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_banner`
--
ALTER TABLE `cl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_cost_excludes`
--
ALTER TABLE `cl_cost_excludes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_cost_includes`
--
ALTER TABLE `cl_cost_includes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_posts`
--
ALTER TABLE `cl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_related_trip_rel`
--
ALTER TABLE `cl_related_trip_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_settings`
--
ALTER TABLE `cl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_team`
--
ALTER TABLE `cl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_activities`
--
ALTER TABLE `cl_trip_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_activity_rel`
--
ALTER TABLE `cl_trip_activity_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_addons`
--
ALTER TABLE `cl_trip_addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_addon_rel`
--
ALTER TABLE `cl_trip_addon_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cl_trip_addon_rel_trip_id_foreign` (`trip_id`),
  ADD KEY `cl_trip_addon_rel_addon_id_foreign` (`addon_id`);

--
-- Indexes for table `cl_trip_booking`
--
ALTER TABLE `cl_trip_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_customize`
--
ALTER TABLE `cl_trip_customize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_destinations`
--
ALTER TABLE `cl_trip_destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_destination_rel`
--
ALTER TABLE `cl_trip_destination_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_details`
--
ALTER TABLE `cl_trip_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_faqs`
--
ALTER TABLE `cl_trip_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_film_making`
--
ALTER TABLE `cl_trip_film_making`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_gear`
--
ALTER TABLE `cl_trip_gear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_grade`
--
ALTER TABLE `cl_trip_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_groups`
--
ALTER TABLE `cl_trip_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_group_rel`
--
ALTER TABLE `cl_trip_group_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_itinerary`
--
ALTER TABLE `cl_trip_itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_itinerary_rel`
--
ALTER TABLE `cl_trip_itinerary_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_regions`
--
ALTER TABLE `cl_trip_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_region_rel`
--
ALTER TABLE `cl_trip_region_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_schedule`
--
ALTER TABLE `cl_trip_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_suggestion`
--
ALTER TABLE `cl_trip_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_tailor_made`
--
ALTER TABLE `cl_trip_tailor_made`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_trip_type`
--
ALTER TABLE `cl_trip_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_activity_rel`
--
ALTER TABLE `destination_activity_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direct_pays`
--
ALTER TABLE `direct_pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dymantic_instagram_basic_profiles`
--
ALTER TABLE `dymantic_instagram_basic_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dymantic_instagram_basic_profiles_username_unique` (`username`);

--
-- Indexes for table `dymantic_instagram_feed_tokens`
--
ALTER TABLE `dymantic_instagram_feed_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergencies_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flight_details_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `home_brief`
--
ALTER TABLE `home_brief`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insurances_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_slugs`
--
ALTER TABLE `page_slugs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `related_activity_rel`
--
ALTER TABLE `related_activity_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_meta`
--
ALTER TABLE `seo_meta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`),
  ADD KEY `seo_meta_seoable_index` (`seoable_id`,`seoable_type`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_categories`
--
ALTER TABLE `team_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_banners`
--
ALTER TABLE `trip_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_highlights`
--
ALTER TABLE `trip_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_inquiries`
--
ALTER TABLE `trip_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_reviews`
--
ALTER TABLE `trip_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_reviews_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verify_users_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_banner`
--
ALTER TABLE `activity_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_activity_parent`
--
ALTER TABLE `cl_activity_parent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_cost_excludes`
--
ALTER TABLE `cl_cost_excludes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_cost_includes`
--
ALTER TABLE `cl_cost_includes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_posts`
--
ALTER TABLE `cl_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_related_trip_rel`
--
ALTER TABLE `cl_related_trip_rel`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_settings`
--
ALTER TABLE `cl_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_team`
--
ALTER TABLE `cl_team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_activities`
--
ALTER TABLE `cl_trip_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_activity_rel`
--
ALTER TABLE `cl_trip_activity_rel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_addons`
--
ALTER TABLE `cl_trip_addons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_addon_rel`
--
ALTER TABLE `cl_trip_addon_rel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_booking`
--
ALTER TABLE `cl_trip_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_customize`
--
ALTER TABLE `cl_trip_customize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_destinations`
--
ALTER TABLE `cl_trip_destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_destination_rel`
--
ALTER TABLE `cl_trip_destination_rel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_details`
--
ALTER TABLE `cl_trip_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_faqs`
--
ALTER TABLE `cl_trip_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_film_making`
--
ALTER TABLE `cl_trip_film_making`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_gear`
--
ALTER TABLE `cl_trip_gear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_grade`
--
ALTER TABLE `cl_trip_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_groups`
--
ALTER TABLE `cl_trip_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_group_rel`
--
ALTER TABLE `cl_trip_group_rel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_itinerary`
--
ALTER TABLE `cl_trip_itinerary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_itinerary_rel`
--
ALTER TABLE `cl_trip_itinerary_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_regions`
--
ALTER TABLE `cl_trip_regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_region_rel`
--
ALTER TABLE `cl_trip_region_rel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_schedule`
--
ALTER TABLE `cl_trip_schedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_suggestion`
--
ALTER TABLE `cl_trip_suggestion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_tailor_made`
--
ALTER TABLE `cl_trip_tailor_made`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_trip_type`
--
ALTER TABLE `cl_trip_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination_activity_rel`
--
ALTER TABLE `destination_activity_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `direct_pays`
--
ALTER TABLE `direct_pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dymantic_instagram_basic_profiles`
--
ALTER TABLE `dymantic_instagram_basic_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dymantic_instagram_feed_tokens`
--
ALTER TABLE `dymantic_instagram_feed_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergencies`
--
ALTER TABLE `emergencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_brief`
--
ALTER TABLE `home_brief`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_slugs`
--
ALTER TABLE `page_slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `related_activity_rel`
--
ALTER TABLE `related_activity_rel`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_meta`
--
ALTER TABLE `seo_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_categories`
--
ALTER TABLE `team_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_banners`
--
ALTER TABLE `trip_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_highlights`
--
ALTER TABLE `trip_highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_inquiries`
--
ALTER TABLE `trip_inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_reviews`
--
ALTER TABLE `trip_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cl_trip_addon_rel`
--
ALTER TABLE `cl_trip_addon_rel`
  ADD CONSTRAINT `cl_trip_addon_rel_addon_id_foreign` FOREIGN KEY (`addon_id`) REFERENCES `cl_trip_addons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cl_trip_addon_rel_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `cl_trip_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD CONSTRAINT `emergencies_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `cl_trip_booking` (`id`);

--
-- Constraints for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD CONSTRAINT `flight_details_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `cl_trip_booking` (`id`);

--
-- Constraints for table `insurances`
--
ALTER TABLE `insurances`
  ADD CONSTRAINT `insurances_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `cl_trip_booking` (`id`);

--
-- Constraints for table `trip_reviews`
--
ALTER TABLE `trip_reviews`
  ADD CONSTRAINT `trip_reviews_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `cl_trip_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD CONSTRAINT `verify_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `subscribers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
