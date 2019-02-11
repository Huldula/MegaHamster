-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Jan 2019 um 11:15
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `hamster_homes`
--

drop database if exists hamster_homes;
CREATE DATABASE hamster_homes character set UTF16 COLLATE utf16_unicode_ci;
use hamster_homes;


CREATE TABLE homes (
  id int(10) UNSIGNED not null,
  name varchar(100) NOT NULL,
  general_info varchar(10000) NOT NULL,
  image_location varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;


INSERT INTO homes (id, name, general_info, image_location) VALUES
(1, 'The Flat',
  'Our Domain The Flat is the advanced choice of real estate for a hamster owner with a lot of experience. It features special equipment for your luxurious hamster!',
  '/api/Images/theflat.png'),
(2, 'The Room',
  'Our Domain The Room is the basic choice of real estate for a basic hamster owner. It is a simple room for your chilled hamster with chilled needs!',
  '/api/Images/theroom.png'),
(3, 'The Pit',
  'Our Domain The Pit is the basic choice of real estate for a hamster owner who wants variety. It is a hexagonal home for your hexagonal hamster!',
  '/api/Images/thepit.png');



ALTER TABLE homes
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `homes`
--
ALTER TABLE homes
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;