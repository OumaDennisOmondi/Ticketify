-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 12:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketify`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(5) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `account_type` enum('webadmin','admin','supplier','customers','guest') NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `last_login` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `title`, `first_name`, `last_name`, `email`, `password`, `country`, `phone`, `account_type`, `is_admin`, `created_at`, `updated_at`, `status`, `last_login`) VALUES
(1, '', 'Super Admin', 'Admin', 'admin@ticketify.co.ke', '1d015534eb84160e80661633eec431c2b4fa1ca3', 'KE', '+254728979121', 'webadmin', 1, '1901-02-16 11:41:04', '2019-12-30 23:53:29', 1, 1591028768),
(14, '0', 'Ticketify', 'Admin', 'info@ticketify.co.ke', '4faf30542bd9b2ef6522d87f99ae827f4a54746c', 'AU', '123456', 'customers', 1, '2014-04-16 12:51:46', '2016-01-13 07:03:35', 1, 1589745725),
(27, '', 'Qasim', 'Hussain', 'compoxition@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'PK', '+923311442244', 'guest', 0, '2018-10-22 17:36:49', '2018-10-22 17:36:49', 0, NULL),
(28, '', 'Qasim', 'Hussain', 'info@ajubia.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'PK', '+923311442244', 'guest', 0, '2018-11-01 16:14:41', '2018-11-01 16:14:41', 0, NULL),
(29, '', 'Qasim', 'Hussain', 'info@ajubia.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'PK', '+923311442244', 'guest', 0, '2018-11-01 17:01:14', '2018-11-01 17:01:14', 0, NULL),
(30, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'KE', '715073891', 'guest', 0, '2018-11-06 12:50:49', '2018-11-06 12:50:49', 0, NULL),
(31, '', 'simon', 'wambua', 'simonwambua433@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0714980550', 'guest', 0, '2018-11-06 15:29:48', '2018-11-06 15:29:48', 0, NULL),
(32, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'KE', '700596279', 'guest', 0, '2018-11-06 17:26:13', '2018-11-06 17:26:13', 0, NULL),
(33, '', 'omar', 'Shark ', 'hiloxy1@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0728979121', 'guest', 0, '2018-11-06 17:53:15', '2018-11-06 17:53:15', 0, NULL),
(34, '', 'omar', 'adan ', 'hiloxy1@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0728979121', 'guest', 0, '2018-11-06 17:55:31', '2018-11-06 17:55:31', 0, NULL),
(35, '', 'omar', 'adan', 'hiloxy1@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0728979121', 'guest', 0, '2018-11-06 17:57:03', '2018-11-06 17:57:03', 0, NULL),
(36, '', 'omar', 'adan', 'hiloxy1@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0728979121', 'guest', 0, '2018-11-06 17:58:47', '2018-11-06 17:58:47', 0, NULL),
(37, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', 'KE', '700596279', 'guest', 0, '2018-11-06 18:19:33', '2018-11-06 18:19:33', 0, NULL),
(38, '', 'chripsus', 'onyono', 'chrispusonyono@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0700824555', 'guest', 0, '2018-11-07 06:17:28', '2018-11-07 06:17:28', 0, NULL),
(39, '', 'Omar', 'Adan', 'hiloxy@hotmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', 'BE', '0728979121', 'guest', 0, '2018-11-08 13:02:31', '2018-11-08 13:02:31', 0, NULL),
(40, '', 'sfff', 'rdty', 'simonwambua433@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, '0755523', 'guest', 0, '2018-11-08 13:57:26', '2018-11-08 13:57:26', 0, NULL),
(41, '', 'sfff', 'rdty', 'simonwambua433@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, '0755523', 'guest', 0, '2018-11-08 13:58:32', '2018-11-08 13:58:32', 0, NULL),
(42, '', 'sfff', 'rdty', 'simonwambua433@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0755523', 'guest', 0, '2018-11-08 13:59:20', '2018-11-08 13:59:20', 0, NULL),
(43, '', 'polooo', 'kavoo', 'pkavoo@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', NULL, '071500', 'guest', 0, '2018-11-08 17:35:57', '2018-11-08 17:35:57', 0, NULL),
(44, '', 'poiiiii', 'jultouyuiu', 'pkavoo@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', NULL, '0715073891', 'guest', 0, '2018-11-08 17:47:30', '2018-11-08 17:47:30', 0, NULL),
(45, '', 'hello', 'hjkf', 'pkavoo4@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0728979121', 'guest', 0, '2018-11-08 17:53:22', '2018-11-08 17:53:22', 0, NULL),
(46, '', 'polycarpkavoo', 'kavoo', 'pkavoo@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0715073891', 'guest', 0, '2018-11-08 17:56:22', '2018-11-08 17:56:22', 0, NULL),
(47, '', 'ghj', 'gjugh', 'pkavoo4@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', NULL, '07831884558', 'guest', 0, '2018-11-08 17:57:56', '2018-11-08 17:57:56', 0, NULL),
(48, '', 'simon', 'wambua', 'simonwambua433@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0714980450', 'guest', 0, '2018-11-08 18:00:37', '2018-11-08 18:00:37', 0, NULL),
(49, '', 'simon', 'wambua', 'simonwambua433@gmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', NULL, '2880866', 'guest', 0, '2018-11-08 18:02:47', '2018-11-08 18:02:47', 0, NULL),
(50, '', 'simon', 'wambua', 'simonwambua433@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '071425369855', 'guest', 0, '2018-11-08 18:05:03', '2018-11-08 18:05:03', 0, NULL),
(51, '', 'simon', 'wambua', 'simonwambua433@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', NULL, '071425369855', 'guest', 0, '2018-11-08 18:05:08', '2018-11-08 18:05:08', 0, NULL),
(52, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', 'KE', '700596279', 'guest', 0, '2018-11-08 20:03:55', '2018-11-08 20:03:55', 0, NULL),
(53, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', NULL, '0715073891', 'guest', 0, '2018-11-10 02:44:31', '2018-11-10 02:44:31', 0, NULL),
(54, '', 'polycarpkavoo', 'kavoo', 'pkavoo4@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0715073891', 'guest', 0, '2018-11-12 13:25:02', '2018-11-12 13:25:02', 0, NULL),
(55, '', 'ffhhfjfhfh', 'jngghh', 'pkavoo@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0755955555', 'guest', 0, '2018-11-12 13:41:58', '2018-11-12 13:41:58', 0, NULL),
(56, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', NULL, '0715423948', 'guest', 0, '2018-11-12 18:14:32', '2018-11-12 18:14:32', 0, NULL),
(57, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0715423548', 'guest', 0, '2018-11-12 18:16:39', '2018-11-12 18:16:39', 0, NULL),
(58, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0715423948', 'guest', 0, '2018-11-12 18:16:57', '2018-11-12 18:16:57', 0, NULL),
(59, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', 'KE', '700596279', 'guest', 0, '2018-11-13 00:16:36', '2018-11-13 00:16:36', 0, NULL),
(60, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'KE', '700596279', 'guest', 0, '2018-11-13 01:30:13', '2018-11-13 01:30:13', 0, NULL),
(61, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', 'KE', '700596279', 'guest', 0, '2018-11-13 01:34:05', '2018-11-13 01:34:05', 0, NULL),
(62, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', NULL, '0715073891', 'guest', 0, '2018-11-13 12:44:46', '2018-11-13 12:44:46', 0, NULL),
(63, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', 'KE', '0715073891', 'guest', 0, '2018-11-13 12:49:13', '2018-11-13 12:49:13', 0, NULL),
(64, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', NULL, '0715073891', 'guest', 0, '2018-11-13 16:09:14', '2018-11-13 16:09:14', 0, NULL),
(65, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', NULL, '0715073891', 'guest', 0, '2018-11-13 16:14:58', '2018-11-13 16:14:58', 0, NULL),
(66, '', 'polycarp', 'hhahag', 'pkavoo4@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0728979121', 'guest', 0, '2018-11-13 16:18:59', '2018-11-13 16:18:59', 0, NULL),
(67, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'KE', '700596279', 'guest', 0, '2018-11-13 17:26:47', '2018-11-13 17:26:47', 0, NULL),
(68, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'KE', '0715073891', 'guest', 0, '2018-11-13 17:29:35', '2018-11-13 17:29:35', 0, NULL),
(69, '', 'simon', 'wambua', 'simonwambua433@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0714255477', 'guest', 0, '2018-11-13 20:09:55', '2018-11-13 20:09:55', 0, NULL),
(70, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', 'KE', '0715073891', 'guest', 0, '2018-11-13 20:35:07', '2018-11-13 20:35:07', 0, NULL),
(71, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', 'KE', '0715073891', 'guest', 0, '2018-11-13 20:38:23', '2018-11-13 20:38:23', 0, NULL),
(72, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'KE', '0715073891', 'guest', 0, '2018-11-13 20:41:06', '2018-11-13 20:41:06', 0, NULL),
(73, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', '', '0715073891', 'guest', 0, '2018-11-13 21:09:28', '2018-11-13 21:09:28', 0, NULL),
(74, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', 'KE', '715073891', 'guest', 0, '2018-11-14 16:43:43', '2018-11-14 16:43:43', 0, NULL),
(75, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', 'KE', '715073891', 'guest', 0, '2018-11-14 17:12:55', '2018-11-14 17:12:55', 0, NULL),
(76, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', 'KE', '700596279', 'guest', 0, '2018-11-14 17:30:56', '2018-11-14 17:30:56', 0, NULL),
(77, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'KE', '715073891', 'guest', 0, '2018-11-14 17:43:31', '2018-11-14 17:43:31', 0, NULL),
(78, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'KE', '700596279', 'guest', 0, '2018-11-14 17:47:01', '2018-11-14 17:47:01', 0, NULL),
(79, '', 'omar', 'adan ', 'hiloxy1@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', NULL, '0728979121', 'guest', 0, '2018-11-14 17:53:46', '2018-11-14 17:53:46', 0, NULL),
(80, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', 'KE', '700596279', 'guest', 0, '2018-11-14 18:06:07', '2018-11-14 18:06:07', 0, NULL),
(81, '', 'Omar', 'Hillowle', 'hiloxy1@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', 'KE', '0728979121', 'guest', 0, '2018-11-14 22:20:55', '2018-11-14 22:20:55', 0, NULL),
(82, '', 'HILLOW', 'ADAN', 'smartwaygtl@gmail.com', 'd596cf807df18b5afe31469e31dbbf9efa6fca69', 'KE', '700596279', 'supplier', 0, '2018-11-15 00:00:34', '2020-06-23 21:15:44', 1, NULL),
(83, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'KE', '715073891', 'guest', 0, '2018-11-15 09:59:31', '2018-11-15 09:59:31', 0, NULL),
(84, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'f1abd670358e036c31296e66b3b66c382ac00812', '', '0715073891', 'guest', 0, '2018-11-15 10:07:18', '2018-11-15 10:07:18', 0, NULL),
(85, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0715073891', 'guest', 0, '2018-11-15 14:46:30', '2018-11-15 14:46:30', 0, NULL),
(86, '', 'John', 'Smith', 'Johnsmith@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0712345543', 'guest', 0, '2018-11-15 14:54:26', '2018-11-15 14:54:26', 0, NULL),
(87, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, '0715073891', 'guest', 0, '2018-11-16 12:01:21', '2018-11-16 12:01:21', 0, NULL),
(88, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'KE', '700596279', 'guest', 0, '2018-11-18 20:47:39', '2018-11-18 20:47:39', 0, NULL),
(89, '', 'Hillow', 'Omar', 'hiloxy1@gmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', 'KE', '254728979121', 'guest', 0, '2018-11-19 04:20:08', '2018-11-19 04:20:08', 0, NULL),
(90, '', 'polycarpkavoo', 'thanks', 'pkavoo@gmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0715073891', 'guest', 0, '2018-11-24 12:13:28', '2018-11-24 12:13:28', 0, NULL),
(91, '', 'kenya', 'gggg', 'pkavoo@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0700824555', 'guest', 0, '2018-11-25 07:16:51', '2018-11-25 07:16:51', 0, NULL),
(92, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, '0715073891', 'guest', 0, '2018-11-25 07:18:49', '2018-11-25 07:18:49', 0, NULL),
(93, '', 'christest', 'test', 'chrispus@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0700824555', 'guest', 0, '2018-11-25 07:19:36', '2018-11-25 07:19:36', 0, NULL),
(94, '', 'HILLOW', 'ADAN', 'hiloxy1@gmail.com', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', 'KE', '700596279', 'guest', 0, '2018-11-26 18:08:49', '2018-11-26 18:08:49', 0, NULL),
(95, '', 'hillow', 'omar', 'hiloxy@hotmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', NULL, '0728979121', 'guest', 0, '2018-11-27 22:48:04', '2018-11-27 22:48:04', 0, NULL),
(96, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', NULL, '0715073891', 'guest', 0, '2018-11-28 08:16:17', '2018-11-28 08:16:17', 0, NULL),
(97, '', 'hillow ', 'omar ', 'hiloxy@Hotmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, '0728979121', 'guest', 0, '2018-11-28 08:57:24', '2018-11-28 08:57:24', 0, NULL),
(98, '', 'hillow ', 'omar ', 'hiloxy@Hotmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0728979121', 'guest', 0, '2018-11-28 08:59:17', '2018-11-28 08:59:17', 0, NULL),
(99, '', 'hillow ', 'omar ', 'hiloxy@hotmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0728979121', 'guest', 0, '2018-11-28 09:01:04', '2018-11-28 09:01:04', 0, NULL),
(100, '', 'hillow ', 'omar ', 'hiloxy@Hotmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0728979121', 'guest', 0, '2018-11-28 09:02:15', '2018-11-28 09:02:15', 0, NULL),
(101, '', 'hillow', 'omar', 'hiloxy@Hotmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0728979121', 'guest', 0, '2018-11-28 09:04:45', '2018-11-28 09:04:45', 0, NULL),
(102, '', 'hillow ', 'omar ', 'hiloxy@Hotmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0728979121', 'guest', 0, '2018-11-28 09:06:37', '2018-11-28 09:06:37', 0, NULL),
(103, '', 'hillow', 'omar', 'hiloxy@Hotmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, '0728979121', 'guest', 0, '2018-11-28 09:08:41', '2018-11-28 09:08:41', 0, NULL),
(104, '', 'hillow', 'omar', 'hiloxy@hotmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0728979121', 'guest', 0, '2018-11-28 09:17:10', '2018-11-28 09:17:10', 0, NULL),
(105, NULL, 'hillow ', 'omar ', 'sgtcompanylimited@gmail.com', '0a92452640f8ab32c5f23c6bcab9e69d212f3abb', NULL, '0728979121', 'customers', 0, '2018-11-28 13:34:20', '2018-11-28 13:34:20', 2, NULL),
(106, '', 'hillow ', 'omar ', 'hiloxy@Hotmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0728979121', 'guest', 0, '2018-11-28 13:40:20', '2018-11-28 13:40:20', 0, NULL),
(107, '', 'hillow ', 'omar', 'hiloxy@Hotmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0728949121', 'guest', 0, '2018-12-04 13:49:53', '2018-12-04 13:49:53', 0, NULL),
(108, '', 'polycarp', 'kavoo', 'pkavoo@gmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', NULL, '071599988', 'guest', 0, '2018-12-04 13:58:57', '2018-12-04 13:58:57', 0, NULL),
(109, '', 'omat', 'aran', 'hiloxy@hotmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0728979421', 'guest', 0, '2018-12-07 19:38:10', '2018-12-07 19:38:10', 0, NULL),
(110, '', 'hillo', 'omar', 'hiloxy@Hotmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0728979121', 'guest', 0, '2018-12-07 19:39:28', '2018-12-07 19:39:28', 0, NULL),
(111, '', 'hhguy', 'gfgh', 'hiloxy@hotmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0728979121', 'guest', 0, '2018-12-07 19:41:25', '2018-12-07 19:41:25', 0, NULL),
(112, '', 'hghug', 'ggdgc', 'hiloxy@hotmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0728979121', 'guest', 0, '2018-12-07 19:46:37', '2018-12-07 19:46:37', 0, NULL),
(113, '', 'hillow', 'omar', 'hiloxy@Hotmail.com', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', NULL, '0728979121', 'guest', 0, '2018-12-08 14:59:45', '2018-12-08 14:59:45', 0, NULL),
(114, '', 'hhfhh', 'hghfhh', 'hiloxy@hotmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0728979121', 'guest', 0, '2018-12-08 15:08:35', '2018-12-08 15:08:35', 0, NULL),
(115, '', 'high', 'cjgjhh', 'hiloxy@Hotmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0728979121', 'guest', 0, '2018-12-08 17:12:25', '2018-12-08 17:12:25', 0, NULL),
(116, '', 'ahmed', 'omar', 'hiloxy@Hotmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0728979121', 'guest', 0, '2018-12-09 20:51:37', '2018-12-09 20:51:37', 0, NULL),
(117, '', 'utter', 'rtyuy', 'xiishibrahim@Gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0713333333', 'guest', 0, '2018-12-16 15:41:35', '2018-12-16 15:41:35', 0, NULL),
(118, '', 'hhhhh', 'Bibb', 'hiloxy@hotmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', NULL, '0728979121', 'guest', 0, '2018-12-16 15:52:11', '2018-12-16 15:52:11', 0, NULL),
(119, '', 'Hussein ', 'Abdullahi ', 'xiishibrahim@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', NULL, '0713333318', 'guest', 0, '2019-01-02 17:14:20', '2019-01-02 17:14:20', 0, NULL),
(120, '', 'hhjv', 'ghjvh', 'hiloxy@Hotmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0728979121', 'guest', 0, '2019-01-02 18:07:32', '2019-01-02 18:07:32', 0, NULL),
(121, '', 'Hussein ', 'a badu llahi', 'xiishibrahim@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0713333318', 'guest', 0, '2019-01-02 18:31:19', '2019-01-02 18:31:19', 0, NULL),
(122, '', 'Hussein ', 'a badu llahi', 'xiishibrahim@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0713333318', 'guest', 0, '2019-01-02 18:36:05', '2019-01-02 18:36:05', 0, NULL),
(123, '', 'Polycarp', 'Kavoo', 'pkavoo@gmail.com', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'KE', '715073891', 'guest', 0, '2019-01-03 09:24:20', '2019-01-03 09:24:20', 0, NULL),
(124, '', 'test', 'TEST', 'test@gmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', 'KE', '712345678', 'guest', 0, '2019-01-03 12:48:06', '2019-01-03 12:48:06', 0, NULL),
(125, '', 'foggy', 'cvgh', 'hiloxy@Hotmail.com', 'c1dfd96eea8cc2b62785275bca38ac261256e278', NULL, '0728979121', 'guest', 0, '2019-01-03 15:39:53', '2019-01-03 15:39:53', 0, NULL),
(126, '', 'test', 'test', 'alex.mathenge@paynow.io', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', 'KE', '+254700000000', 'guest', 0, '2019-01-04 10:19:23', '2019-01-04 10:19:23', 0, NULL),
(127, '', 'alvin', 'opiyo', 'a.musungu@wizag.biz', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'KE', '041-2229784/6', 'guest', 0, '2019-01-04 14:09:29', '2019-01-04 14:09:29', 0, NULL),
(128, '', 'Hussein', 'Abdullahi', 'xiishibrahim@gmail.com', '902ba3cda1883801594b6e1b452790cc53948fda', NULL, '0713333318', 'guest', 0, '2019-01-05 17:03:00', '2019-01-05 17:03:00', 0, NULL),
(129, '', 'Hussein', 'Abdullahi', 'xiishibrahim@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0713333318', 'guest', 0, '2019-01-05 17:03:48', '2019-01-05 17:03:48', 0, NULL),
(130, '', 'Hussein', 'Abdullahi ', 'xiishibrahim@Gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0713333318', 'guest', 0, '2019-01-12 12:32:24', '2019-01-12 12:32:24', 0, NULL),
(131, '', 'Hussein ', 'Abdullah ', 'xiishibrahim@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0713333318', 'guest', 0, '2019-01-12 12:36:44', '2019-01-12 12:36:44', 0, NULL),
(132, '', 'Hussein ', 'Abdullah ', 'xiishibrahim@gmail.com', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', NULL, '0713333318', 'guest', 0, '2019-01-12 12:38:12', '2019-01-12 12:38:12', 0, NULL),
(133, '', 'fatsys', 'dysydy', 'pkavoo@gmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0715073891', 'guest', 0, '2019-01-16 17:06:16', '2019-01-16 17:06:16', 0, NULL),
(134, '', 'fcb', 'Ben', 'hnvh@Hotmail.com', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', NULL, '0728979121', 'guest', 0, '2019-01-17 15:29:35', '2019-01-17 15:29:35', 0, NULL),
(135, '', 'xxxxx', 'xxxxx', 'xxxx@xxx.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'KE', '715073891', 'guest', 0, '2019-01-28 11:55:53', '2019-01-28 11:55:53', 0, NULL),
(136, '', 'Hillow ', 'omar ', 'hiloxy@Hotmail.cm', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b', NULL, '0728979121', 'guest', 0, '2019-01-28 19:15:41', '2019-01-28 19:15:41', 0, NULL),
(137, '', 'Hussein ', 'Abdullahi ', 'xiishibrahim@gmail.com', 'bd307a3ec329e10a2cff8fb87480823da114f8f4', NULL, '0713333318', 'guest', 0, '2019-01-31 22:01:51', '2019-01-31 22:01:51', 0, NULL),
(138, '', 'Ваше поздравление ко Дню Рождения - https://www.ma', 'Ваше поздравление ко Дню Рождения - https://www.ma', 'mashapentagon@mail.ru', '12', 'FR', '+74958401438', 'supplier', 0, '2019-03-20 21:07:18', '2019-03-20 21:07:18', 2, NULL),
(139, '', 'Sarova', 'Sarova', 'sarova@sarova.com', '7c222fb2927d828af22f592134e8932480637c0d', 'KE', '0722222222', 'supplier', 0, '2019-04-20 11:01:37', '2019-04-20 11:07:55', 1, NULL),
(140, '', 'Hillow ', 'omar ', 'hiloxy@Hotmail.com', 'fe5dbbcea5ce7e2988b8c69bcfdfde8904aabc1f', NULL, '0728979121', 'guest', 0, '2019-06-29 21:53:54', '2019-06-29 21:53:54', 0, NULL),
(141, '', 'Hillow ', 'omar ', 'hiloxy@Hotmail.com', '0ade7c2cf97f75d009975f4d720d1fa6c19f4897', NULL, '0728979121', 'guest', 0, '2019-06-29 21:54:56', '2019-06-29 21:54:56', 0, NULL),
(142, '', 'Polycarp', 'Kavoo', 'pkavoo4@gmail.com', '1d055acae2b2a1a666c8211b0c1f9312dbb4ca23', 'null', '0715073891', 'customers', 0, '2019-07-27 19:14:27', '2019-07-27 19:16:03', 1, NULL),
(143, '', 'najma ', 'Elmi ', 'najmaelmi@gmail.com', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', NULL, '07845555', 'guest', 0, '2019-07-27 19:56:54', '2019-07-27 19:56:54', 0, NULL),
(144, NULL, 'Gregarious Safaris-', 'Tanzania ', 'gregarioussafaris@gmail.com', '445dfb70f8e3898369a17d7441e770de4e722c0c', NULL, '0782937248', 'customers', 0, '2019-08-23 21:53:50', '2019-08-23 21:53:50', 2, NULL),
(145, '', 'zGyudfg', 'fhhf', 'korirmitchelle@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', NULL, '0702935200', 'guest', 0, '2019-08-30 12:40:11', '2019-08-30 12:40:11', 0, NULL),
(146, '', 'Beaconuni', 'Beaconuni', 'jkcabinets@aol.com', '14', 'PA', '83764766875', 'supplier', 0, '2019-09-19 04:20:49', '2019-09-19 04:20:49', 2, NULL),
(147, '', 'Flashpaqhhp', 'Flashpaqhhp', 'allisha-s@hotmail.com', '13', 'SI', '84271181851', 'supplier', 0, '2019-10-02 23:34:06', '2019-10-02 23:34:06', 2, NULL),
(148, '', 'Incipiooxk', 'Incipiooxk', 'jeannette_freeman@yahoo.com', '11', 'VA', '83774728611', 'supplier', 0, '2019-10-03 11:29:02', '2019-10-03 11:29:02', 2, NULL),
(149, '', 'kislorodul', 'kislorodul', 'ewfewpkeofpkweop@mail.ru', '12', 'RU', '89523518694', 'supplier', 0, '2020-01-20 08:10:18', '2020-01-20 08:10:18', 2, NULL),
(150, '', 'Edelbrockzhc', 'Edelbrockzhc', 'a.carrillo0428@gmail.com', '6', 'ID', '85119572793', 'supplier', 0, '2020-01-20 17:53:04', '2020-01-20 17:53:04', 2, NULL),
(151, NULL, 'Francis', 'Muturi', 'francmut@gmail.com', '3c3253ad7bd155ff6482ad429ff6960fe785d7ae', NULL, NULL, 'webadmin', 0, NULL, NULL, 1, NULL),
(152, '', 'polycarp', 'kavoo', 'wambuasimon433@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'KE', '0715073891', 'customers', 0, '2020-05-17 13:41:11', '2020-05-17 13:43:12', 1, NULL),
(156, '', 'Test', 'User', 'test.user@email.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', NULL, '0722001001', 'customers', 0, '2020-05-18 00:30:14', '2020-05-18 00:30:14', 1, NULL),
(157, NULL, 'Zakaria', 'Hussein', 'samsunholdings11@gmail.com', 'be51f5f08ff584a14f608d69d36334cfe39f457b', NULL, NULL, 'webadmin', 0, NULL, NULL, 1, NULL),
(158, NULL, 'Zakaria', 'Hussein', 'info@samsunholdings.com', 'be51f5f08ff584a14f608d69d36334cfe39f457b', NULL, NULL, 'webadmin', 0, NULL, NULL, 1, NULL),
(159, NULL, 'Dennis', 'Omondi', 'oumadennisomondi@gmail.com', 'adb1136b8997eb01965fe6f03e98b7684302e8a6', NULL, NULL, 'webadmin', 0, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(11) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(48) DEFAULT NULL,
  `cityCode` varchar(8) DEFAULT NULL,
  `cityName` varchar(32) DEFAULT NULL,
  `countryName` varchar(36) DEFAULT NULL,
  `countryCode` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `code`, `name`, `cityCode`, `cityName`, `countryName`, `countryCode`) VALUES
(804, 'LAU', 'Lamu-Manda  Airpott', 'LAU', 'Lamu', 'KENYA', 'KE'),
(879, 'LKG', 'Lokichoggio Arpt', 'LKG', 'Lokichoggio', 'KENYA', 'KE'),
(987, 'MBA', 'Mombasa-Moi International Airport', 'MBA', 'Mombasa', 'KENYA', 'KE'),
(1267, 'KIS', 'Kisumu-Kisumu International Airport', 'KIS', 'Kisumu', 'KENYA', 'KE'),
(1409, 'MRE', 'Mara Lodges Arpt', 'MRE', 'Mara Lodges', 'KENYA', 'KE'),
(2331, 'MYD', 'Malindi Arpt', 'MYD', 'Malindi', 'KENYA', 'KE'),
(2360, 'NBO', 'Nairobi-Jomo Kenyatta Int.Airport', 'NBO', 'Nairobi', 'KENYA', 'KE'),
(2434, 'NYK', 'Nanyuki Airport', 'NYK', 'Nanyuki', 'KENYA', 'KE'),
(2891, 'UAS', 'Samburu Airstrip', 'UAS', 'Samburu', 'KENYA', 'KE'),
(3524, 'LOK', 'Lodwar Airport', 'LOK', 'Lodwar', 'KENYA', 'KE'),
(3596, 'WJR', 'Wajir Airport', 'WJR', 'Wajir', 'KENYA', 'KE'),
(3975, 'GAS', 'Garissa Airport', 'GAS', 'Garissa', 'KENYA', 'KE'),
(3986, 'KLK', 'Kalokol Airport', 'KLK', 'Kalokol', 'KENYA', 'KE'),
(4020, 'LBK', 'Liboi Airport', 'LBK', 'Liboi', 'KENYA', 'KE'),
(4022, 'LBN', 'Lake Baringo Airport', 'LBN', 'Lake Baringo', 'KENYA', 'KE'),
(4493, 'NZO', 'Nzoia Airport', 'NZO', 'Nzoia', 'KENYA', 'KE'),
(4625, 'ILU', 'Kilaguni Airport', 'ILU', 'Kilaguni', 'KENYA', 'KE'),
(4884, 'NDE', 'Mandera Airport', 'NDE', 'Mandera', 'KENYA', 'KE'),
(5060, 'OYL', 'Moyale Airport', 'OYL', 'Moyale', 'KENYA', 'KE'),
(5137, 'RBT', 'Marsabit Airport', 'RBT', 'Marsabit', 'KENYA', 'KE'),
(5290, 'KRV', 'Kerio Valley Airport', 'KRV', 'Kerio Valley', 'KENYA', 'KE'),
(5308, 'KWY', 'Kiwayu Airport', 'KWY', 'Kiwayu', 'KENYA', 'KE'),
(5349, 'LKU', 'Lake Rudolf Airport', 'LKU', 'Lake Rudolf', 'KENYA', 'KE'),
(5353, 'LOY', 'Loyangalani Airport', 'LOY', 'Loyangalani', 'KENYA', 'KE'),
(5802, 'BMQ', 'Bamburi Airport', 'BMQ', 'Bamburi', 'KENYA', 'KE'),
(5917, 'HOA', 'Hola Airport', 'HOA', 'Hola', 'KENYA', 'KE'),
(6534, 'NUU', 'Nakuru Airport', 'NUU', 'Nakuru', 'KENYA', 'KE'),
(6873, 'EYS', 'Elive Springs Airport', 'EYS', 'Elive Springs', 'KENYA', 'KE'),
(7228, 'KTL', 'Kitale Airport', 'KTL', 'Kitale', 'KENYA', 'KE'),
(7260, 'KEY', 'Kericho Airport', 'KEY', 'Kericho', 'KENYA', 'KE'),
(7769, 'UKA', 'Ukunda Airport', 'UKA', 'Ukunda', 'KENYA', 'KE'),
(7778, 'KIU', 'Kiunga Airport', 'KIU', 'Kiunga', 'KENYA', 'KE'),
(7847, 'WIL', 'Nairobi-Wilson Airport', 'NBO', 'Nairobi', 'KENYA', 'KE'),
(8362, 'MUM', 'Mumias Airport', 'MUM', 'Mumias', 'KENYA', 'KE'),
(8577, 'EDL', 'Eldoret Arpt', 'EDL', 'Eldoret', 'KENYA', 'KE'),
(8653, 'NYE', 'Nyeri Arpt', 'NYE', 'Nyeri', 'KENYA', 'KE'),
(8654, 'ZNZ', 'Zanzibar- Zanzibar Airport,TZ', 'ZNZ', 'Zanzibar', 'Tanzania', '256'),
(8655, 'DAR', 'Dar es Salaam-Mwalimu Julius K.Nyerere Int.Airpt', '003', 'Dareesalam', 'Tanzania', '256'),
(8656, 'EBB', 'Entebbe International Airport,UG', 'EBB', 'Entebbe', 'Uganda', NULL),
(8657, 'JIN', 'Jinja-Jinja Airport,UG', 'JIN', 'Jinja', 'Uganda', 'UG'),
(8658, 'KSE', 'Kasese-Kasese Airport,UG', 'KSE', 'Kasese', 'Uganda', 'UG'),
(8659, 'KDPO', 'Kidpeo Airport', 'KIDPO', 'Kidepeo', 'Uganda', 'UG'),
(8660, 'KHX', 'Kihihi', 'KHX', 'Kihihi', 'Uganda', 'UG'),
(8661, 'KSRO', 'Kisoro Airport', 'KSRO', 'Kisoro', 'Uganda', 'UG'),
(8662, 'PAF', 'Pakuba Airport', 'PAF', 'Pakuba', 'Uganda', 'UG'),
(8663, 'SMKO', 'Semuliki Park', 'SMKO', 'Semuliki', 'Uganda', 'UG'),
(8664, 'ARK', 'Arusha-Arusha Airport', 'ARK', 'Arusha', 'Tanzania', 'TZ'),
(8665, 'BKZ', 'Bukoba-Bukoba Airport,TZ', 'BKZ', 'Bukoba', 'Tanzania', 'TZ'),
(8666, 'DOD', 'Dodoma-Dodoma Airport,TZ', 'DOD', 'Dodoma', 'Tanzania', 'TZ'),
(8667, 'DO10', 'Dolly for Kiligolf', 'DO10', 'Dolly for Kiligolf', 'Tanzania', 'TZ'),
(8668, 'DOL8', 'Dolly for Kiligolf', 'DOL8', 'Dolly for Kiligolf', 'Tanzania', 'TZ'),
(8669, 'IKO0', 'Fort Ikoma-Airport of Fort Ikoma,TZ', 'IKO0', 'Fort Ikoma', 'Tanzania', 'TZ'),
(8670, 'FPT1', 'Fort Portal', 'FPT18', 'Fort Portal', 'Tanzania', 'TZ'),
(8671, 'GTZ', 'Grumeti-Grumeti Airstrip Airpor', 'GTZ', 'Grumeti', 'Tanzania', 'TZ'),
(8672, 'IRI', 'Iringa-Iringa Airport', 'Iringa', 'IRI', 'Tanzania', 'TZ'),
(8673, 'TKQ', 'Kigoma-Kigoma Airport,TZ', 'TKQ', 'Kigoma', 'Tanzania', 'TZ'),
(8674, 'JRO', 'Kilimanjaro-Kilimanjaro Inter. Airport,TZ', 'JRO', 'Kilimanjaro', 'Tanzania', 'TZ'),
(8675, 'KIY', 'Kilwa Masoko,TZ', 'KIY', 'Kilwa Masoko', 'Tanzania', 'TZ'),
(8676, 'KUR0', 'Kuro Airstrip Tarangire - TZ', 'KUR0', 'Kuro', 'Tanzania', 'TZ'),
(8677, 'LKY', 'Lake Manyara Airport,TZ', 'LKY', 'Lake Manyara Park', 'Tanzania', 'TZ'),
(8678, 'LAM0', 'Lamai- Tanzania', 'LAM', 'Lamai', 'Tanzania', 'TZ'),
(8679, 'MFA', 'Mafia Island- Mafia Island Airport,TZ', 'MFA', 'Mafia Island', 'Tanzania', 'TZ'),
(8680, 'MBI', 'Mbeya-Mbeya Airport,TZ', 'MBI', 'Mbeya', 'Tanzania', 'TZ'),
(8681, 'MK10', 'Mkomazi- Tanzania', 'MK10', 'Mkomazi', 'Tanzania', 'TZ'),
(8682, 'MOG0', 'Morogoro- Morogoro airport,TZ', 'MOG0', 'Morogoro', 'Tanzania', 'TZ'),
(8683, 'QSI0', 'Moshi- Tanzania', 'QSI0', 'Moshi', 'Tanzania', 'TZ'),
(8684, 'TMP0', 'Mpanda-Mpanda Airport,TZ', 'TMP0', 'Mpanda', 'Tanzania', 'TZ'),
(8685, 'MUZ', 'Musoma- Tanzania', 'MUZ', 'Musoma', 'Tanzania', 'TZ'),
(8686, 'MWZ', 'Mwanza- Mwanza Airport,TZ', 'MWZ', 'Mwanza', 'Tanzania', 'TZ'),
(8687, 'MW10', 'Mwiba- Tanzania', 'MW10', 'Mwiba', 'Tanzania', 'TZ'),
(8688, 'PAN0', 'Pangani- Tanzania', 'PAN0', 'Pangani', 'Tanzania', 'TZ'),
(8689, 'PMA', 'Pemba-Pemba Airport,TZ', 'PMA', 'Pemba', 'Tanzania', 'TZ'),
(8690, 'RU10', 'Ruaha National Park- Airport Jongomero,TZ', 'RU10', 'Ruaha', 'Tanzania', 'TZ'),
(8691, 'KLE0', 'Serengeti - Kleins Camp-TZ', 'KLE0', 'Serengeti', 'Tanzania', 'TZ'),
(8692, 'LOB0', 'Serengeti - Lobo- Tanzania (LOB)', 'LOB0', 'Serengeti', 'Tanzania', 'TZ'),
(8693, 'SEU', 'Serengeti - Seronera- TZ', 'SEU', 'Serengeti', 'Tanzania', 'TZ'),
(8694, 'SGX', 'Songea- Songea Airport,TZ', 'SGX', 'Songea', 'Tanzania', 'TZ'),
(8695, 'SUT', 'Sumbawanga-Sumbawanga Airport,TZ', 'SUT', 'Sumbawanga', 'Tanzania', 'TZ'),
(8696, 'TBO', 'Tabora-Tabora Airport,TZ', 'TBO', 'Tabora', 'Tanzania', 'TZ'),
(8697, 'TGT', 'Tanga-Tanga Airport,TZ', 'TGT', 'Tanga', 'Tanzania', 'TZ'),
(8698, 'ANA', 'Masai Mara - Angama,Kenya', 'ANA', 'Masai Mara', 'KENYA', 'KE'),
(8699, 'KEU', 'Masai Mara - Keekoro,Kenya', NULL, NULL, NULL, NULL),
(8700, 'MDR', 'Masai Mara - Musiara-,Kenya', 'MDR', 'Masai Mara', 'KENYA', 'KE'),
(8701, 'KTJ', 'Masai Mara - Kichwa Tembo,Kenya', 'KTJ', 'Masai Mara', 'KENYA', 'KE'),
(8702, 'OLG', 'Masai Mara - Olare,Kenya', 'OLG', 'Masai Mara', 'Kenya', 'KE'),
(8703, 'OLX', 'Masai Mara - Olkiombo,Kenya', 'OLX', 'Masai Mara', 'KENYA', 'KE'),
(8704, 'OSJ', 'Masai Mara - Olseki,Kenya', 'OSJ', 'Masai Mara', 'KENYA', 'KE'),
(8705, 'MRE', 'Masai Mara - Serena,Kenya', 'MRE', 'Masai Mara', 'KENYA', 'KE'),
(8706, 'ASV', 'Amboseli Airport', 'ASV', 'Amboseli', 'Kenya', 'KE'),
(8707, 'HTSG', 'Stiegler\'s', 'HTSG', 'STIEGLER\'S', 'Tanzania', 'TZ'),
(8708, 'ILU', 'Tsavo', NULL, 'Tsavo', 'Kenya', 'KE');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_ref_no` varchar(17) DEFAULT NULL,
  `booking_type` varchar(50) NOT NULL,
  `booking_date` bigint(20) NOT NULL,
  `booking_user` int(11) NOT NULL,
  `booking_status` varchar(10) NOT NULL,
  `booking_payment_type` varchar(100) DEFAULT NULL,
  `booking_total` double NOT NULL,
  `booking_amount_paid` double NOT NULL DEFAULT 0,
  `booking_adults` tinyint(4) DEFAULT 1,
  `booking_child` tinyint(4) DEFAULT 0,
  `booking_infant` tinyint(4) NOT NULL DEFAULT 0,
  `booking_curr_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_curr_symbol` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_payment_date` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_ref_no`, `booking_type`, `booking_date`, `booking_user`, `booking_status`, `booking_payment_type`, `booking_total`, `booking_amount_paid`, `booking_adults`, `booking_child`, `booking_infant`, `booking_curr_code`, `booking_curr_symbol`, `booking_payment_date`) VALUES
(1, '6582', 'flights', 1547285544, 130, 'unpaid', NULL, 516, 0, 1, 0, 0, 'USD', '$', NULL),
(2, '4017', 'flights', 1547285804, 131, 'reserved', 'directpay3g', 306, 0, 1, 0, 0, 'USD', '$', NULL),
(3, '6754', 'flights', 1547285892, 132, 'reserved', 'payonarrival', 306, 0, 1, 0, 0, 'USD', '$', NULL),
(4, '7835', 'flights', 1547647576, 133, 'unpaid', NULL, 41100, 0, 1, 0, 0, 'KES', 'KES', NULL),
(5, '1785', 'flights', 1547728175, 134, 'unpaid', NULL, 50200, 0, 1, 0, 0, 'KES', 'KES', NULL),
(6, '3187', 'hotels', 1548665753, 135, 'unpaid', NULL, 3337.2, 0, 2, NULL, 0, 'USD', '$', NULL),
(7, '3251', 'flights', 1548692141, 136, 'unpaid', NULL, 424, 0, 1, 0, 0, 'USD', '$', NULL),
(8, '0692', 'flights', 1548961311, 137, 'unpaid', NULL, 440, 0, 1, 0, 0, 'USD', '$', NULL),
(9, '36626755', 'flights', 1583237199, 151, 'unpaid', 'card', 18600, 18414, 1, 0, 0, 'KES', 'KES', NULL),
(10, '36767440', 'flights', 1595070533, 157, 'unpaid', NULL, 12950, 0, 1, 0, 0, 'KES', 'KES', NULL),
(11, '36770733', 'flights', 1595235006, 32, 'unpaid', NULL, 5950, 0, 1, 0, 0, 'KES', 'KES', NULL),
(12, '36771670', 'flights', 1595255723, 158, 'unpaid', NULL, 4950, 0, 1, 0, 0, 'KES', 'KES', NULL),
(13, '36790574', 'flights', 1596115111, 157, 'unpaid', 'card', 6950, 6880.5, 1, 0, 0, 'KES', 'KES', NULL),
(14, '36790998', 'flights', 1596129149, 157, 'unpaid', 'card', 6950, 6880.5, 1, 0, 0, 'KES', 'KES', NULL),
(15, '36791875', 'flights', 1596185486, 159, 'unpaid', '', 4950, 0, 1, 0, 0, 'KES', 'KES', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8709;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
