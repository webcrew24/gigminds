-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 07:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gigbrands`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_postal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compensation_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_frequency` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `hourly_rate` smallint(6) DEFAULT NULL,
  `org_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `reference_id`, `city`, `zip_postal`, `state_province`, `query`, `title`, `company`, `location`, `summary`, `type`, `compensation_type`, `url`, `posting_date`, `details`, `keywords_frequency`, `created_at`, `updated_at`, `source`, `salary`, `status`, `notes`, `hourly_rate`, `org_id`, `uuid`) VALUES
(1, '6336bcbf-10a0-31b4-8f5e-4b448dc0a52a', 'Lake Estelberg', '', '', 'Prof. Fidel Hauck', 'Ab et officiis', 'Ms. Fay Schulist', 'Stammchester', 'Sit harum et quo deserunt pariatur. Hic accusamus ullam vel illum adipisci aut enim. Perspiciatis id ut iusto aut vitae aperiam illum.', '', '5', 'http://cartwright.biz/assumenda-quam-tempore-aut-sint-vel', '1991-04-03 14:22:46', 'Sed nisi quo natus. Minus sit quasi voluptas velit et. Nam facere sapiente et vel qui odio. Tempora et voluptates odit quae nemo nulla recusandae.', 'Ab quasi dolor maxime recusandae eaque id eaque. Dolorum molestias quis velit consequatur. Totam eius recusandae quis optio consectetur velit.', '2020-01-20 10:29:05', '2020-01-20 10:29:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '1', 'fds', 'fd', 'fds', '', 'fddfs', 'first', '', 'fds', '', NULL, '', '', 'fdsfds', '', '2020-01-23 11:50:29', '2020-01-23 11:50:29', NULL, 'Hourly', NULL, NULL, 21, 1, NULL),
(4, '1', 'dsa', 'dsa', 'dsa', '', 'dsa', 'first', 'dsa', 'dsa', '', 'das', '', '01/23/2020', 'das', '', '2020-01-24 10:33:24', '2020-01-24 10:33:24', 'Internal', 'Salary', NULL, NULL, NULL, NULL, 'e5c8bf8b-cb99-4a9d-bd37-0dbc3aaa9af1'),
(5, '1', 'dsa', 'das', 'dsa', '', 'da', 'first', 'dsa', 'das', '', 'dsa', '', '01/10/2020', 'das', '', '2020-01-24 10:47:12', '2020-01-24 10:47:12', 'Internal', 'Salary', NULL, NULL, NULL, NULL, '0368e510-4d0b-4ac7-947b-5e92d515ab70'),
(6, '1', 'sads', 'das', 'das', '', 'dsadasd', 'first', 'sads', 'das', '', 'dsa', '', '01/01/2020', 'dsa', '', '2020-01-24 10:48:53', '2020-01-24 10:48:53', 'Internal', 'Salary', NULL, NULL, NULL, NULL, '5d5b134b-691c-472d-8133-288a1d3073b8'),
(7, '1', 'dsa', 'dsa', 'dsa', '', 'dsa', 'first', 'dsa', 'das', '', 'das', '', '01/30/2020', 'dsadsa', '', '2020-01-24 10:50:12', '2020-01-24 10:50:12', 'Internal', 'Salary', 'active', 'dsadasdsa', NULL, NULL, 'ac6255a3-4641-4aec-9073-30cc6f711293'),
(8, '1', 'dsa', 'dsa', 'dsa', '', 'dsa', 'first', 'dsa', 'das', 'Full-time', 'Salary', '', '01/30/2020', 'dsadsa', '', '2020-01-24 11:13:33', '2020-01-24 11:29:59', 'Internal', 'Salarydsadsa', 'active', 'dsadasdsa', NULL, NULL, '29714020-591b-4645-bfae-414b31149a3f'),
(9, '1', 'dsa', 'dsa', 'dsa', '', 'dsa', 'first', 'dsa', 'ds', 'Contract', 'Hourly', '', '01/22/2020', 'dsadsa', '', '2020-01-24 13:47:58', '2020-01-24 13:47:58', 'Internal', 'dsa', 'active', 'dsadsa', NULL, NULL, 'feaba54e-0217-405a-9451-54f14bf9b12b'),
(10, '1', 'dsa', 'dsa', 'dsa', '', 'testewqeqw', 'first', 'dsa', 'dsa', 'Part-time', 'Salary', '', '01/02/2020', 'dsadsa', '', '2020-01-24 13:54:28', '2020-01-24 14:04:31', 'Internal', 'dsa', 'active', 'dasdsa', NULL, NULL, 'f829d015-f2dd-431c-926c-69cca149b1fe');

-- --------------------------------------------------------

--
-- Table structure for table `job_skills`
--

CREATE TABLE `job_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `skill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `count` smallint(6) DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_skills`
--

INSERT INTO `job_skills` (`id`, `type`, `source`, `name`, `keyword_group`, `created_at`, `updated_at`, `job_id`, `skill_id`, `count`, `uuid`) VALUES
(1, 'test', 'test', 'test', 'tester', '2020-01-24 17:22:39', '2020-01-24 17:24:29', 3, 24, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lookups`
--

CREATE TABLE `lookups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lookups`
--

INSERT INTO `lookups` (`id`, `type`, `source`, `name`, `value`, `sort_order`, `default`, `created_at`, `updated_at`) VALUES
(1, 'Job Type', 'Seed', 'Full Time', 'Full Time', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(2, 'Job Type', 'Seed', 'Part Time', 'Part Time', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(3, 'Job Type', 'Seed', 'Contracting', 'Contracting', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(4, 'Job Source', 'Seed', 'Internal', 'Internal', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(5, 'Job Source', 'Seed', 'Scraped', 'Scraped', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(6, 'Job Source', 'Seed', 'Customer', 'Customer', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(7, 'Scrape City', 'Seed', 'San Francisco', 'San Francisco', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(8, 'Scrape City', 'Seed', 'Austin', 'Austin', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(9, 'Scrape City', 'Seed', 'Seattle', 'Seattle', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(10, 'Scrape City', 'Seed', 'Chicago', 'Chicago', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(11, 'Scrape City', 'Seed', 'New York', 'New York', NULL, NULL, '2020-01-20 10:29:08', '2020-01-20 10:29:08'),
(12, 'Scrape Keyword', 'Seed', 'Salesforce', 'Salesforce', NULL, NULL, '2020-01-20 10:29:09', '2020-01-20 10:29:09'),
(13, 'Scrape Keyword', 'Seed', 'Apttus', 'Apttus', NULL, NULL, '2020-01-20 10:29:09', '2020-01-20 10:29:09'),
(14, 'Scrape Keyword', 'Seed', 'CPQ', 'CPQ', NULL, NULL, '2020-01-20 10:29:09', '2020-01-20 10:29:09'),
(15, 'Scrape Keyword', 'Seed', 'CLM', 'CLM', NULL, NULL, '2020-01-20 10:29:09', '2020-01-20 10:29:09'),
(16, 'Job Status', NULL, 'active', '21', NULL, NULL, '2020-01-24 16:09:07', '2020-01-24 16:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_01_042431_create_organization_table', 1),
(2, '2019_01_02_042422_create_person_table', 1),
(3, '2019_01_03_000000_create_users_table', 1),
(4, '2019_01_03_034012_create_resumes_table', 1),
(5, '2019_01_04_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_11_29_084532_create_jobs_table', 1),
(8, '2019_12_03_160517_create_permission_tables', 1),
(9, '2020_01_12_174543_create_signups_table', 1),
(10, '2020_01_18_042405_create_skills_table', 1),
(11, '2020_01_18_042444_create_person_work_history_table', 1),
(12, '2020_01_18_042457_create_job_skills_table', 1),
(13, '2020_01_18_042507_create_resume_skills_table', 1),
(14, '2020_01_18_222752_create_my_jobs_table', 1),
(15, '2020_01_19_180834_create_lookups_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 3),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `my_jobs`
--

CREATE TABLE `my_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `person_id` bigint(20) UNSIGNED DEFAULT NULL,
  `initiate_sourcing` tinyint(1) NOT NULL,
  `send_automated_emails` tinyint(1) NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dba` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_names` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hr_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hr_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `type`, `source`, `name`, `created_at`, `updated_at`, `parent_id`, `industry`, `legal_name`, `dba`, `other_names`, `sales_phone`, `support_phone`, `hr_phone`, `other_phone`, `street_address_1`, `street_address_2`, `city`, `state_province`, `zip_postal`, `country`, `sales_email`, `support_email`, `hr_email`, `other_email`, `website`, `domain`, `uuid`) VALUES
(1, NULL, NULL, 'first', '2020-01-23 16:15:38', '2020-01-23 16:15:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-01-20 10:29:05', '2020-01-20 10:29:05'),
(2, 'role-create', 'web', '2020-01-20 10:29:05', '2020-01-20 10:29:05'),
(3, 'role-edit', 'web', '2020-01-20 10:29:05', '2020-01-20 10:29:05'),
(4, 'role-delete', 'web', '2020-01-20 10:29:05', '2020-01-20 10:29:05'),
(5, 'job-list', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06'),
(6, 'job-view', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06'),
(7, 'job-create', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06'),
(8, 'job-edit', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06'),
(9, 'job-delete', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06'),
(10, 'super-admin', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_init` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` longtext COLLATE utf8mb4_unicode_ci,
  `work_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages_known` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_id` bigint(20) UNSIGNED DEFAULT NULL,
  `home_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_work_history`
--

CREATE TABLE `person_work_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `person_id` bigint(20) UNSIGNED DEFAULT NULL,
  `org_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_mm` smallint(6) DEFAULT NULL,
  `start_yyyy` smallint(6) DEFAULT NULL,
  `end_mm` smallint(6) DEFAULT NULL,
  `end_yyyy` smallint(6) DEFAULT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` longtext COLLATE utf8mb4_unicode_ci,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_employer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_job_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_json` text COLLATE utf8mb4_unicode_ci,
  `resume_binary_file` blob,
  `resume_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `person_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resume_skills`
--

CREATE TABLE `resume_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resume_id` bigint(20) UNSIGNED DEFAULT NULL,
  `skill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `count` smallint(6) DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-01-20 10:29:06', '2020-01-20 10:29:06'),
(2, 'User', 'web', '2020-01-20 10:39:28', '2020-01-20 10:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` smallint(6) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `person_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_threshold` smallint(6) DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `type`, `source`, `name`, `created_at`, `updated_at`, `keyword`, `keyword_group`, `min_threshold`, `uuid`) VALUES
(1, 'Position', 'Seed', 'director', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'director', '', 1, NULL),
(2, 'Position', 'Seed', 'manager', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'manager', '', 1, NULL),
(3, 'Position', 'Seed', 'analyst', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'analyst', '', 1, NULL),
(4, 'Position', 'Seed', 'developer', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'developer', '', 1, NULL),
(5, 'Position', 'Seed', 'administrator', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'administrator', '', 1, NULL),
(6, 'Position', 'Seed', 'admin', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'admin', '', 1, NULL),
(7, 'Position', 'Seed', 'project manager', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'project manager', '', 1, NULL),
(8, 'Position', 'Seed', 'scrum', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'scrum', '', 1, NULL),
(9, 'Position', 'Seed', 'president', '2020-01-20 10:29:07', '2020-01-20 10:29:07', 'president', '', 1, NULL),
(10, 'Position', 'Seed', 'consultant', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'consultant', '', 1, NULL),
(11, 'Technology', 'Seed', 'salesforce', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'salesforce', '', 2, NULL),
(12, 'Technology', 'Seed', 'cpq', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'cpq', '', 1, NULL),
(13, 'Technology', 'Seed', 'apex', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'apex', '', 1, NULL),
(14, 'Technology', 'Seed', 'lightning', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'lightning', '', 1, NULL),
(15, 'Technology', 'Seed', 'visualforce', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'visualforce', '', 1, NULL),
(16, 'Technology', 'Seed', 'workflow', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'workflow', '', 1, NULL),
(17, 'Technology', 'Seed', 'apttus', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'apttus', '', 1, NULL),
(18, 'Technology', 'Seed', 'mulesoft', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'mulesoft', '', 1, NULL),
(19, 'Technology', 'Seed', 'tableau', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'tableau', '', 1, NULL),
(20, 'Technology', 'Seed', 'trigger', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'trigger', '', 1, NULL),
(21, 'Technology', 'Seed', 'einstein', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'einstein', '', 1, NULL),
(22, 'Technology', 'Seed', 'process builder', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'process builder', '', 1, NULL),
(23, 'Technology', 'Seed', 'steelbrick', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'steelbrick', '', 1, NULL),
(24, 'Technology', 'Seed', 'marketo', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'marketo', '', 1, NULL),
(25, 'Technology', 'Seed', 'sfdc', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'sfdc', '', 1, NULL),
(26, 'Domain', 'Seed', 'customer service', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'customer service', '', 1, NULL),
(27, 'Domain', 'Seed', 'sales', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'sales', '', 1, NULL),
(28, 'Domain', 'Seed', 'marketing', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'marketing', '', 1, NULL),
(29, 'Domain', 'Seed', 'it', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'it', '', 1, NULL),
(30, 'Domain', 'Seed', 'support', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'support', '', 1, NULL),
(31, 'Domain', 'Seed', 'sales ops', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'sales ops', '', 1, NULL),
(32, 'Domain', 'Seed', 'sales operations', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'sales operations', '', 1, NULL),
(33, 'Domain', 'Seed', 'product management', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'product management', '', 1, NULL),
(34, 'Domain', 'Seed', 'product marketing', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'product marketing', '', 1, NULL),
(35, 'Domain', 'Seed', 'information technology', '2020-01-20 10:29:08', '2020-01-20 10:29:08', 'information technology', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `person_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `first_name`, `last_name`, `user_type`, `remember_token`, `created_at`, `updated_at`, `person_id`, `uuid`) VALUES
(1, 'Rajesh Beri', 'testing@gmail.com', NULL, '$2y$10$aKjeA2TBKONJLbNHLY0/guf.oH1jGH9CKZIUaEuNusAzoJfLj7ova', NULL, NULL, NULL, NULL, '2020-01-20 10:29:06', '2020-01-23 15:51:18', NULL, NULL),
(2, 'testing', 'testing1@gmail.com', NULL, '$2y$10$aKjeA2TBKONJLbNHLY0/guf.oH1jGH9CKZIUaEuNusAzoJfLj7ova', NULL, NULL, NULL, NULL, '2020-01-20 10:40:07', '2020-01-23 15:51:22', NULL, NULL),
(3, 'test', 'admin@live.com', NULL, '$2y$10$K.f43yy.fDxTtLI648O2ie2WR.G/A57XhrKT3n/x1bN67ZaAmKFR6', NULL, NULL, NULL, NULL, '2020-01-20 11:16:53', '2020-01-20 11:16:53', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_org_id_foreign` (`org_id`);

--
-- Indexes for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_skills_job_id_foreign` (`job_id`),
  ADD KEY `job_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `lookups`
--
ALTER TABLE `lookups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `my_jobs`
--
ALTER TABLE `my_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_jobs_user_id_foreign` (`user_id`),
  ADD KEY `my_jobs_person_id_foreign` (`person_id`),
  ADD KEY `my_jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_work_history`
--
ALTER TABLE `person_work_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_work_history_person_id_foreign` (`person_id`),
  ADD KEY `person_work_history_org_id_foreign` (`org_id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_skills`
--
ALTER TABLE `resume_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_skills_resume_id_foreign` (`resume_id`),
  ADD KEY `resume_skills_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signups_email_unique` (`email`),
  ADD KEY `signups_person_id_foreign` (`person_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_person_id_foreign` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_skills`
--
ALTER TABLE `job_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lookups`
--
ALTER TABLE `lookups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `my_jobs`
--
ALTER TABLE `my_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person_work_history`
--
ALTER TABLE `person_work_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resume_skills`
--
ALTER TABLE `resume_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_org_id_foreign` FOREIGN KEY (`org_id`) REFERENCES `organization` (`id`);

--
-- Constraints for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD CONSTRAINT `job_skills_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `job_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `my_jobs`
--
ALTER TABLE `my_jobs`
  ADD CONSTRAINT `my_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `my_jobs_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `my_jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `person_work_history`
--
ALTER TABLE `person_work_history`
  ADD CONSTRAINT `person_work_history_org_id_foreign` FOREIGN KEY (`org_id`) REFERENCES `organization` (`id`),
  ADD CONSTRAINT `person_work_history_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

--
-- Constraints for table `resume_skills`
--
ALTER TABLE `resume_skills`
  ADD CONSTRAINT `resume_skills_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`),
  ADD CONSTRAINT `resume_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `signups`
--
ALTER TABLE `signups`
  ADD CONSTRAINT `signups_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
