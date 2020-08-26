-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calculation` int(11) NOT NULL,
  `number1` int(11) NOT NULL,
  `number2` int(11) NOT NULL,
  `operation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user` (`id`, `calculation`, `number1`, `number2`, `operation`) VALUES
(14,	10,	5,	5,	'+'),
(15,	25,	5,	5,	'*'),
(16,	125,	25,	5,	'*'),
(17,	20,	25,	5,	'-'),
(18,	35,	55,	20,	'-'),
(19,	5720,	88,	65,	'*'),
(20,	8,	4,	4,	'+'),
(21,	10947,	123,	89,	'*'),
(22,	13,	5,	8,	'+'),
(23,	60,	52,	8,	'+'),
(24,	18,	10,	8,	'+'),
(25,	2,	9,	7,	'-'),
(26,	93,	10,	83,	'+'),
(27,	934,	101,	833,	'+');

-- 2020-08-19 10:42:46
