-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2022 at 04:49 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hub`
--
CREATE DATABASE IF NOT EXISTS `hub` DEFAULT CHARACTER SET utf16 COLLATE utf16_unicode_ci;
USE `hub`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `cart_items_ids` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `surname` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `adress` text COLLATE utf8_unicode_ci NOT NULL,
  `time_of_purchase` datetime NOT NULL,
  `items_ids` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `product_type` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT IGNORE INTO `products` (`id`, `name`, `price`, `description`, `type`, `product_type`) VALUES
(1, 'Suhomesnato', 990, 'Svinjska prÅ¡uta, goveÄ‘a peÄenica, kulen i goveÄ‘a prÅ¡uta', 'Hladna predjela', 'jelo'),
(2, 'Sirevi', 800, 'Dimljeni kaoniÄki, dimljena mozzarella, sir u vinu, hajduÄki i gauda', 'Hladna predjela', 'jelo'),
(3, 'Daska The Hub', 1950, 'Svinjska prÅ¡uta, goveÄ‘a prÅ¡uta, goveÄ‘a peÄenica,\r\n        dimljena mozzarella, gauda, sir u vinu, hajduÄki, kulen, dimljeni kaoniÄki i masline', 'Hladna predjela', 'jelo'),
(4, 'Brusketi caprese', 320, 'Gorgonzola namaz, mozzarella, Äeri paradajz i pesto', 'Topla predjela', 'jelo'),
(5, 'Brusketi masline', 320, 'Gorgonzola namaz, crne i zelene masline i miroÄ‘ija', 'Topla predjela', 'jelo'),
(6, 'Brusketi losos', 320, 'Sirni namaz, dimljeni losos, Äeri paradajz i miroÄ‘ija', 'Topla predjela', 'jelo'),
(7, 'Brusketi vegan', 320, 'Gvakamoli namaz, chia seme, kikiriki i Äeri paradajz', 'Topla predjela', 'jelo'),
(8, 'Pohovani sir <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>', 350, 'Pohovani sir sa cimetom, jabukom i sosom od viÅ¡anja', 'Topla predjela', 'jelo'),
(9, 'Obsession (biftek)', 1500, 'Biftek, krompir <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>, mlada boranija, povrÄ‡e i gorgonzola', 'Jela po porudzbini', 'jelo'),
(10, 'The Hub (biftek)', 1500, 'Biftek, mus od prÅ¡ute, krompir <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong> i povrÄ‡e', 'Jela po porudzbini', 'jelo'),
(11, 'Lasagne', 790, 'Mleveno juneÄ‡e meso, pelat, gauda, beli, crni luk, biber, crveno vino i origano', 'Jela po porudzbini', 'jelo'),
(12, 'Piletina u belom sosu', 550, 'PileÄ‡i file, dimljeni kaoniÄki, gauda, pavlaka, parmezan i pomfrit', 'Jela po porudzbini', 'jelo'),
(13, 'Rebarca <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>', 790, 'Marinirana rebra sa krompirom <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>, sos od peÄuraka i onion rings', 'Jela po porudzbini', 'jelo'),
(14, 'Svinjski file <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>', 750, 'Svinjski file sa sosom od peÄuraka, krompir <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong> i onion', 'Jela po porudzbini', 'jelo'),
(15, 'Selekcija kobasica', 750, 'McCain krompir i kobasica', 'Jela po porudzbini', 'jelo'),
(16, 'PileÄ‡e fingersice', 530, 'Pohovani pileÄ‡i file, pomfrit, burger sos i parmezan', 'Jela po porudzbini', 'jelo'),
(17, 'Risotto sa piletinom', 550, 'Piletina sa pirinÄem, parmezanom, pavlakom i povrÄ‡em', 'Risotto', 'jelo'),
(18, 'Risotto sa povrÄ‡em', 520, 'PirinaÄ sa povrÄ‡em, pavlakom i parmezanom', 'Risotto', 'jelo'),
(19, 'Margarita', 690, 'Mozzarella, pelat i bosiljak', 'Pizza', 'jelo'),
(20, 'Capriciosa', 790, 'Mozzarella, pelat, Å¡unka i Å¡ampinjoni', 'Pizza', 'jelo'),
(21, 'Prosciutto', 890, 'Mozzarella, pelat, goveÄ‘a prÅ¡uta i rukola', 'Pizza', 'jelo'),
(22, 'Porto Bane', 820, 'Mozzarella, kozji sir, beli luk, rukola i bosiljak', 'Pizza', 'jelo'),
(23, 'Losos Mediteraneo', 1250, 'File lososa na pireu sa sosom od gambora i povrÄ‡a', 'Ribe i morski plodovi', 'jelo'),
(24, 'Meksica', 490, 'Mleveno juneÄ‡e meso, kukuruz Å¡eÄ‡erac, crveni pasulj, zeleni kupus, Å¡argarepa, tortilja, pomfrit i chili', 'Burrito', 'jelo'),
(25, 'Chicken', 460, 'Piletina, ljubiÄasti kupus, Å¡argarepa, kukuruz Å¡eÄ‡erac, crveni pasulj, pomfrit i pavlaka', 'Burrito', 'jelo'),
(26, 'Beef tagliatelle', 690, 'Tagliatelle, biftek, povrÄ‡e, parmezan i Äeri paradajz', 'Pasta', 'jelo'),
(27, 'Penne sa piletinom', 620, 'Pene sa piletinom, goveÄ‘om prÅ¡utom, parmezanom i pavlakom', 'Pasta', 'jelo'),
(28, 'Bolognese', 590, 'Fusili u bolognese sosu sa parmezanom i Äeri paradajzom', 'Pasta', 'jelo'),
(29, 'Penne bianca', 690, 'Pene u sosu od goveÄ‘e prÅ¡ute, masline, pavlake i parmezana', 'Pasta', 'jelo'),
(30, 'Beef', 600, 'Biftek, mix green, parmezan, Äeri paradajz i burger sos', 'Obrok salate', 'jelo'),
(31, 'Chicken', 620, 'Grilovani pileÄ‡i file, mix green, slanina, sos, parmezan i Äeri paradajz', 'Obrok salate', 'jelo'),
(32, 'GrÄka', 490, 'Crvena ili zelena paprika, krastavac, crveni luk, paradajz, masline, feta sir i origano', 'Obrok salate', 'jelo'),
(33, 'Vitaminska', 290, 'Crveni i zeleni kupus, paprika, Å¡argarepa, jabuka i leÅ¡nik', 'Obrok salate', 'jelo'),
(34, 'Burger The Hub', 560, 'JuneÄ‡i burger, burger sos, Äedar, zelena salata, luk, paradajz, pomfrit i pohovani sir', 'Burgeri', 'jelo'),
(35, 'Burger France Aioli', 490, 'JuneÄ‡i burger, France Aioli dressing, zelena salata, paradajz, crveni luk, Äedar i pomfrit', 'Burgeri', 'jelo'),
(36, 'Burger Traf Aioli', 490, 'JuneÄ‡i burger, krema od tartufa, Äeder, pomfrit, paradajz, luk i zelena salata', 'Burgeri', 'jelo'),
(37, 'Burger Sambal', 490, 'JuneÄ‡i burger, Sambal dressing, zelena salata, paradajz, crveni luk, Äedar i pomfrit', 'Burgeri', 'jelo'),
(38, 'Chicken burger', 490, 'Piletina, tost kaÄkavalj, zelena salata i pomfrit', 'Burgeri', 'jelo'),
(39, 'Salata <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>', 550, 'Green mix, Å¡argarepa, celer, jabuka, mozzarella, krastavac, Äeri paradajz i sok od narandÅ¾e', 'Healthy food', 'jelo'),
(40, 'The Hub Pancake', 360, 'Å unka, gauda, marinirane peÄurke, kisela pavlaka', 'Slana palaÄinka', 'jelo'),
(41, 'The Hub Obsession', 320, 'Dobro poznat, klasiÄan ukus Äokoladne torte sa specijalnim dodatkom naÅ¡e Hub magije', 'Homemade sweets', 'jelo'),
(42, 'Choco Orange', 290, 'NarandÅ¾a, nutela, plazma, Å¡lag', 'Homemade sweets', 'jelo'),
(43, 'Sweet Cherry', 290, 'ViÅ¡nja, nutela, plazma, Å¡lag', 'Homemade sweets', 'jelo'),
(44, 'Integralni trougliÄ‡i sa maslinama', 80, '', 'Dodaci', 'jelo'),
(45, 'Grilovano povrÄ‡e', 220, '', 'Dodaci', 'jelo'),
(46, 'Onion rings', 280, '', 'Dodaci', 'jelo'),
(47, 'Krompir <strong style=\"color:#c49b63\">â€œa la Chefâ€</strong>', 220, '', 'Dodaci', 'jelo'),
(48, 'Pavlaka', 50, '', 'Dodaci', 'jelo'),
(49, 'Pomfrit', 180, '', 'Dodaci', 'jelo'),
(50, 'Espresso', 140, '', 'Costa Coffee', 'pice'),
(51, 'Espresso dopio', 210, '', 'Costa Coffee', 'pice'),
(52, 'Espresso sa mlekom', 210, '', 'Costa Coffee', 'pice'),
(53, 'Machiatto', 150, '', 'Costa Coffee', 'pice'),
(54, 'Cappuccino', 170, '', 'Costa Coffee', 'pice'),
(55, 'Double Cappuccino', 240, '', 'Costa Coffee', 'pice'),
(56, 'Coffeelatte', 180, '', 'Costa Coffee', 'pice'),
(57, 'Bailey\'s coffee', 220, '', 'Costa Coffee', 'pice'),
(58, 'Coffeefredo', 190, '', 'Costa Coffee', 'pice'),
(59, 'Nescafe topli', 160, '', 'Nescafe', 'pice'),
(60, 'Nescafe hladni', 160, '', 'Nescafe', 'pice'),
(61, 'Bailey\'s nescafe', 220, '', 'Nescafe', 'pice'),
(62, 'Ice coffee', 220, '', 'Nescafe', 'pice'),
(63, 'Irish coffee', 240, '', 'Nescafe', 'pice'),
(64, 'Topla Äokolada crna', 200, '', 'Topla Äokolada', 'pice'),
(65, 'Topla Äokolada bela', 200, '', 'Topla Äokolada', 'pice'),
(66, 'Topla Äokolada extra dark', 200, '', 'Topla Äokolada', 'pice'),
(67, 'Topla Äokolada sa rumom', 270, '', 'Topla Äokolada', 'pice'),
(68, 'English Breakfast Tea', 130, '', 'ÄŒajevi', 'pice'),
(69, 'Earl Grey', 130, '', 'ÄŒajevi', 'pice'),
(70, 'Christmas Tea', 130, '', 'ÄŒajevi', 'pice'),
(71, 'Blackberry', 130, '', 'ÄŒajevi', 'pice'),
(72, 'China Sencha', 130, '', 'ÄŒajevi', 'pice'),
(73, 'Green Apple', 130, '', 'ÄŒajevi', 'pice'),
(74, 'Sweet Mama', 130, '', 'ÄŒajevi', 'pice'),
(75, 'Jasmine', 130, '', 'ÄŒajevi', 'pice'),
(76, 'Manglo Flip', 130, '', 'ÄŒajevi', 'pice'),
(77, 'Fruit Garden', 130, '', 'ÄŒajevi', 'pice'),
(78, 'Pina Colada', 130, '', 'ÄŒajevi', 'pice'),
(79, 'Sweet Fruit', 130, '', 'ÄŒajevi', 'pice'),
(80, 'Wild Orange', 130, '', 'ÄŒajevi', 'pice'),
(81, 'Wild Cherry', 130, '', 'ÄŒajevi', 'pice'),
(82, 'Chamomile', 130, '', 'Biljni Äaj', 'pice'),
(83, 'Nana', 130, '', 'Biljni Äaj', 'pice'),
(84, 'Coca cola', 170, '', 'Gazirani sokovi', 'pice'),
(85, 'Coca cola Zero', 170, '', 'Gazirani sokovi', 'pice'),
(86, 'Sprite', 170, '', 'Gazirani sokovi', 'pice'),
(87, 'Fanta orange', 170, '', 'Gazirani sokovi', 'pice'),
(88, 'Schweppes bitter lemon', 170, '', 'Gazirani sokovi', 'pice'),
(89, 'Schweppes tonic water', 170, '', 'Gazirani sokovi', 'pice'),
(90, 'Schweppes tangerine', 170, '', 'Gazirani sokovi', 'pice'),
(91, 'Next narandÅ¾a', 170, '', 'Negazirani sokovi', 'pice'),
(92, 'Next jabuka', 170, '', 'Negazirani sokovi', 'pice'),
(93, 'Next jagoda', 170, '', 'Negazirani sokovi', 'pice'),
(94, 'Next breskva', 170, '', 'Negazirani sokovi', 'pice'),
(95, 'Next viÅ¡nja', 170, '', 'Negazirani sokovi', 'pice'),
(96, 'Next Å¡umsko voÄ‡e', 170, '', 'Negazirani sokovi', 'pice'),
(97, 'Fuze Tea breskva & hibiskus (stevia)', 170, '', 'Negazirani sokovi', 'pice'),
(98, 'Erdinger 0.3l', 320, '', 'ToÄena piva', 'pice'),
(99, 'Erdinger 0.5l', 390, '', 'ToÄena piva', 'pice'),
(100, 'Carslberg 0.3l', 260, '', 'ToÄena piva', 'pice'),
(101, 'Carslberg 0.5l', 320, '', 'ToÄena piva', 'pice'),
(102, 'Budwieser svetlo 0.3l', 260, '', 'ToÄena piva', 'pice'),
(103, 'Budwieser svetlo 0.5l', 320, '', 'ToÄena piva', 'pice'),
(104, 'Budwieser tamno 0.3l', 240, '', 'ToÄena piva', 'pice'),
(105, 'Budwieser tamno 0.5l', 290, '', 'ToÄena piva', 'pice'),
(106, 'Kronenbourg 0.3l', 250, '', 'ToÄena piva', 'pice'),
(107, 'Kronenbourg 0.5l', 300, '', 'ToÄena piva', 'pice'),
(108, 'Guinness', 500, '', 'Piva u flaÅ¡icama', 'pice'),
(109, 'San Miguel', 340, '', 'Piva u flaÅ¡icama', 'pice'),
(110, 'Erdinger', 300, '', 'Piva u flaÅ¡icama', 'pice'),
(111, 'Erdinger tamno', 350, '', 'Piva u flaÅ¡icama', 'pice'),
(112, 'Carslberg', 260, '', 'Piva u flaÅ¡icama', 'pice'),
(113, 'Grimbergen blanche', 240, '', 'Piva u flaÅ¡icama', 'pice'),
(114, 'Grimbergen blonde', 240, '', 'Piva u flaÅ¡icama', 'pice'),
(115, 'Grimbergen ambree', 260, '', 'Piva u flaÅ¡icama', 'pice'),
(116, 'Budwieser tamno', 270, '', 'Piva u flaÅ¡icama', 'pice'),
(117, 'Tuborg', 240, '', 'Piva u flaÅ¡icama', 'pice');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `surname` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
