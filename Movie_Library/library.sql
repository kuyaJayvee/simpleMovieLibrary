-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 03:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movielibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `director` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `date_release` varchar(50) NOT NULL,
  `stars` varchar(250) NOT NULL,
  `plot` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `image`, `title`, `director`, `genre`, `date_release`, `stars`, `plot`) VALUES
(16, 'Escape from the planet Earth.jfif', 'Escape from the planet Earth', 'Carl Brunker', 'Cartoon,Comedy', '14 February 2013', 'Brendan Fraser, Sarah Jessica Parker, Jessica Alba, James Gandolfini', ' Astronaut Scorch Supernova finds himself caught in a trap when he responds to an Sos from a notoriously dangerous alien planet'),
(18, 'dayshift(2022).jpg', 'Day Shift(2022)', 'J.J. Perry', 'Action,Comedy,Fantasy', '12 August 2022', 'Jamie Foxx, Dave Franco, Natasha Liu Bordizzo', 'A hard-working, blue-collar dad just wants to provide a good life for his quick-witted 10-year-old daughter. His mundane San Fernando Valley pool cleaning job is a front for his real source of income: hunting and killing vampires.'),
(19, 'TopgunMavericks(2022).jpg', 'Top Gun: Maverick', 'Joseph Kosinski', 'Action, Drama', '27 May 2022', 'Tom Cruise, Jennifer Connelly, Miles Teller', 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUN&#039;s elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
