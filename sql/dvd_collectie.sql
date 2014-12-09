-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 09 dec 2014 om 20:27
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `dvd_collectie`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dvds`
--

CREATE TABLE IF NOT EXISTS `dvds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `uitgeleend` int(1) NOT NULL,
  `cijfer` int(2) NOT NULL,
  `uitgeleend_naam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

--
-- Gegevens worden uitgevoerd voor tabel `dvds`
--

INSERT INTO `dvds` (`id`, `naam`, `uitgeleend`, `cijfer`, `uitgeleend_naam`) VALUES
(1, 'Memento', 0, 9, ''),
(2, 'The Terminal', 0, 9, ''),
(3, '12 Monkeys', 0, 6, ''),
(4, 'Big Momma''s House 2', 0, 6, ''),
(5, 'The Big Lebowski', 0, 8, ''),
(6, 'Inception', 0, 9, ''),
(7, 'Blade', 0, 8, ''),
(8, 'Scarface', 0, 10, ''),
(9, 'Fight Club', 0, 10, ''),
(10, 'King Kong', 0, 7, ''),
(11, 'Casino', 0, 7, ''),
(12, 'Tricks', 0, 5, ''),
(13, 'V for Vendetta', 0, 8, ''),
(14, 'Saving Private Ryan', 0, 10, ''),
(15, 'Lock, Stock & 2 Smoking Barrels', 0, 7, ''),
(16, 'Date Movie', 0, 5, ''),
(17, 'Tomb Raider', 0, 6, ''),
(18, 'The Wash', 0, 5, ''),
(19, 'The Ring', 0, 6, ''),
(20, 'Finding Neverland', 0, 7, ''),
(21, 'Spiderman 2', 0, 6, ''),
(22, 'Burn After Reading', 0, 6, ''),
(23, 'Romeo and Juliet', 0, 7, ''),
(24, 'Un Long Dimanche de Fiancailles', 0, 8, ''),
(25, 'The Shawshank Redemption', 0, 10, ''),
(26, 'Walk the Line', 0, 8, ''),
(27, 'Seven Years in Tibet', 0, 9, ''),
(28, 'The Green Mile', 0, 9, ''),
(29, 'Schindler''s List', 0, 9, ''),
(30, 'Argo', 0, 8, ''),
(31, 'Austin Powers', 0, 7, ''),
(32, 'Eternal Sunshine of the Spotless Mind', 0, 9, ''),
(33, 'Final Cut', 0, 6, ''),
(34, 'American History X', 0, 9, ''),
(35, 'Kill Bill', 0, 8, ''),
(36, 'Kill Bill 2', 0, 8, ''),
(37, 'When Trumpets Fade', 0, 7, ''),
(38, 'From Dusk Till Dawn', 0, 8, ''),
(39, 'One Flew Over The Cuckoo''s Nest', 0, 7, ''),
(40, 'Der Untergang', 0, 9, ''),
(41, 'Kalifornia', 0, 7, ''),
(42, 'Layer Cake', 0, 7, ''),
(43, 'Richard Pryor Live in Concert', 0, 8, ''),
(44, 'Crank', 0, 9, ''),
(45, 'Bruno', 0, 7, ''),
(46, 'The Prestige', 0, 8, ''),
(47, 'Menace 2 Society', 0, 7, ''),
(48, 'Mr. & Mrs. Smith', 0, 7, ''),
(49, 'Flags of our Fathers', 0, 6, ''),
(50, 'Taxi Driver', 0, 9, ''),
(51, 'The Polar Express', 0, 7, ''),
(52, 'Bad Santa', 0, 6, ''),
(53, 'Sin City', 0, 8, ''),
(54, 'Good Will Hunting', 0, 9, ''),
(55, 'The Men Who Stare At Goats', 0, 7, ''),
(56, 'Be Kind Rewind', 0, 7, ''),
(57, 'Lost in Translation', 0, 8, ''),
(58, 'Donnie Brasco', 0, 10, ''),
(59, 'Fear and Loathing in Las Vegas', 0, 8, ''),
(60, 'The 51st State', 0, 7, ''),
(61, 'Six Feet Under', 0, 8, ''),
(62, 'Mad Men', 0, 8, ''),
(63, 'Ghost In The Shell', 0, 7, ''),
(64, 'Death Proof', 0, 7, ''),
(65, 'Milk', 0, 7, ''),
(66, 'Ninja Scroll', 0, 7, ''),
(67, 'Blood The Last Vampire', 0, 7, ''),
(68, 'Zodiac', 0, 7, ''),
(69, 'Akira', 0, 8, ''),
(70, 'Simpon''s The Movie', 0, 7, ''),
(71, 'Zombieland', 0, 9, ''),
(72, 'Requiem For A Dream', 0, 8, ''),
(73, 'Donnie Darko', 0, 8, ''),
(74, 'The Butterfly Effect', 0, 8, ''),
(75, 'Spiderman 3', 0, 7, ''),
(76, 'Forrest Gump', 0, 10, ''),
(77, 'Blow', 0, 7, ''),
(78, 'Boondock Saints', 0, 9, ''),
(79, 'Letters From Iwo Jima', 0, 8, ''),
(80, 'The Lord of The Rings Fellowship of the Ring', 0, 9, ''),
(81, 'The Lord of The Rings Two Towers', 0, 8, ''),
(82, 'The Lord of The Rings Return of the King', 0, 9, ''),
(83, 'Heroes', 0, 8, ''),
(84, 'Band of Brothers', 0, 10, ''),
(85, 'True Blood', 0, 7, ''),
(86, 'The Sopranos', 0, 10, ''),
(87, 'Planet Earth', 0, 8, ''),
(88, 'The Curious Case of Benjamin Button', 0, 8, ''),
(89, 'Me, Myself & Irene', 0, 7, ''),
(90, 'American Beauty', 0, 10, ''),
(91, 'Into The Wild', 0, 7, ''),
(92, 'Public Enemy Number One', 0, 6, ''),
(93, 'Eddie Murphy Raw', 0, 9, ''),
(94, 'Trainspotting', 0, 8, ''),
(95, 'Eastern Promises', 0, 8, ''),
(96, 'Little Miss Sunshine', 0, 9, ''),
(97, 'Analyze This', 0, 6, ''),
(98, 'In Bruges', 0, 8, ''),
(99, 'Gran Torino', 0, 9, ''),
(100, 'Paradise Now', 0, 8, ''),
(101, 'Philadelphia', 0, 8, ''),
(102, 'A Beautiful Mind', 0, 10, ''),
(103, 'The Departed', 0, 8, ''),
(104, 'Big Fish', 0, 8, ''),
(105, 'A Clockwork Orange', 0, 8, ''),
(106, 'Casablanca', 0, 7, ''),
(107, 'Insomnia', 0, 6, ''),
(108, 'Resevoir Dogs', 0, 9, ''),
(109, 'Too Young To Die', 0, 6, ''),
(110, 'Catch Me If You Can', 0, 10, ''),
(111, 'Once Upon A Time In America', 0, 7, ''),
(112, 'March of the Penguins', 0, 8, ''),
(113, 'Clerks', 0, 6, ''),
(114, 'The Lion King', 0, 9, ''),
(115, 'Superbad', 0, 9, ''),
(116, 'The Weather Man', 0, 7, ''),
(117, 'Meet Joe Black', 0, 9, ''),
(118, 'Pulp Fiction', 0, 10, ''),
(119, 'Lucky Number Slevin', 0, 7, ''),
(120, 'The Hurt Locker', 0, 8, ''),
(121, 'Ajax 1995', 0, 8, ''),
(122, 'Ajax de Gouden Jaren', 0, 8, ''),
(123, 'Easy Rider', 0, 8, ''),
(124, 'The Pursuit of Happyness', 0, 8, ''),
(125, 'Gladiator', 0, 9, ''),
(126, '300', 0, 7, ''),
(127, 'Monthy Python and the Holy Grail', 0, 8, ''),
(128, 'Smokin'' Aces', 0, 7, ''),
(129, 'Snatch', 0, 10, ''),
(130, 'Enemy at the Gates', 0, 9, ''),
(131, 'The Richard Pryor Show', 0, 8, ''),
(132, 'Goodfellas', 0, 9, ''),
(133, 'The Usual Suspects', 0, 10, ''),
(134, 'Napoleon Dynamite', 0, 8, ''),
(135, 'Inglorious Basterds', 0, 9, ''),
(136, 'The Good The Bad And The Ugly', 0, 7, ''),
(137, 'Harry Brown', 0, 7, ''),
(138, 'Constantine', 0, 10, ''),
(139, 'The Pianist', 1, 8, 'Joyce Traas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
