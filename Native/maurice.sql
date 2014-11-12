-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2014 at 09:36 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `maurice`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat`) VALUES
(1, 'Frituur'),
(2, 'Café'),
(3, 'Eetcafé'),
(4, 'Snackbar/broodjes'),
(5, 'Taverne / Restaurant'),
(6, 'Feestzalen'),
(7, 'Andere'),
(21, 'Tearoom / Ijssalon');

-- --------------------------------------------------------

--
-- Table structure for table `zaken`
--

CREATE TABLE `zaken` (
  `zaak_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(6) NOT NULL,
  `locatie` tinytext NOT NULL,
  `regio` tinytext NOT NULL,
  `huur` int(10) NOT NULL,
  `prijs` int(11) NOT NULL,
  `reden` text NOT NULL,
  `info` text NOT NULL,
  `ico` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`zaak_id`),
  UNIQUE KEY `zaak_id` (`zaak_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `zaken`
--

INSERT INTO `zaken` (`zaak_id`, `cat_id`, `locatie`, `regio`, `huur`, `prijs`, `reden`, `info`, `ico`, `status`) VALUES
(5, 5, 'Antwerpen', 'Duffel', 2500, 300000, 'Privé redenen', 'Restaurant - Antwerpen Zuid - Waalse Kaai - toplocatie - over te nemen wegens echtscheiding - vrij van brouwer - huurprijs € 2.500 - vraagprijs € 275.000 - terras 15 personen - in de zaak 40 zitplaatsen - grote parking voor de deur - meer info via versturen contactaanvraag', '5.jpg', 0),
(6, 2, 'Antwerpen', 'Peer', 525, 90000, 'Privé redenen', 'Volkscafé (Stella Artois) - met klein terras - overname slechts € 25.000 - huur € 525 - unieke kans - goed lopende zaak - meer info via versturen contactaanvraag.', '2.jpg', 0);
