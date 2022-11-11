-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 12:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');





CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcontact` varchar(15) NOT NULL,
  `standard` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `t` (`id`, `rollno`, `name`, `city`, `pcontact`, `standard`, `image`) VALUES
(1, 1001, '', '', '9832420840', 4, '1.jpg'),
(2, 1002, '', '', '9832420841', 4, '2.jpg'),
(3, 1003, '', '', '9832420843', 4, '6.png'),
(4, 1004, '', '', '9832420822', 4, '8.png'),
(5, 1001, '', '', '9832422520', 5, '3.jpg'),
(6, 1002, '', '', '9832420823', 5, '4.jpg'),
(7, 1003, '', '', '9832420849', 5, '5.png'),
(8, 1004, '', '', '9832420840', 5, '9.png');








ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);






ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

