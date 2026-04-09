-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 07 apr 2026 om 19:03
-- Serverversie: 8.4.8
-- PHP-versie: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `drankjes`
--

CREATE TABLE `drankjes` (
  `id` int NOT NULL,
  `titel` text NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `info` varchar(500) NOT NULL,
  `icon` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `drankjes`
--

INSERT INTO `drankjes` (`id`, `titel`, `prijs`, `info`, `icon`) VALUES
(25, 'Cola', 1.20, 'Een koude verfrissende cola', '🥤'),
(26, 'Cola Zero', 1.20, 'Cola zonder suiker', '🥤'),
(27, 'Fanta Orange', 1.20, 'Verfrissende sinaasappel frisdrank', '🥤'),
(28, 'Sprite', 1.20, 'IJskoude citroen-limoen frisdrank', '🥤'),
(29, 'Water', 0.99, 'Stil mineraalwater', '💧'),
(30, 'Bruiswater', 0.99, 'Bruisend mineraalwater', '💧'),
(31, 'Sinaasappelsap', 2.50, 'Vers geperst sinaasappelsap', '🍊'),
(32, 'Milkshake Chocolade', 3.50, 'Romige chocolade milkshake', '🥛'),
(33, 'Milkshake Vanille', 3.50, 'Romige vanille milkshake', '🥛'),
(34, 'Milkshake Aardbei', 3.50, 'Romige aardbei milkshake', '🍓');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `email`, `wachtwoord`) VALUES
(1, 'naam@admin.nl', 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerechten`
--

CREATE TABLE `gerechten` (
  `id` int NOT NULL,
  `titel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `info` varchar(500) NOT NULL,
  `icon` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gerechten`
--

INSERT INTO `gerechten` (`id`, `titel`, `prijs`, `info`, `icon`) VALUES
(42, 'Double Smash Burger', 14.99, 'Twee geplette rundvlees patties met speciale saus', '🍔'),
(43, 'Crispy Chicken Burger', 11.99, 'Krokante kipfilet met sla en mayonaise', '🍗'),
(44, 'Hot Dog', 7.50, 'Klassieke hotdog met mosterd en ketchup', '🌭'),
(45, 'BBQ Bacon Burger', 15.50, 'Rundvlees patty met gerookt spek en BBQ saus', '🥓'),
(46, 'Veggie Burger', 10.99, 'Plantaardig patty met verse groenten', '🥗'),
(47, 'Friet', 4.50, 'Krokante gouden frietjes met zeezout', '🍟'),
(48, 'Loaded Fries', 7.99, 'Frietjes met kaassaus en jalapeños', '🍟'),
(49, 'Uitjes Ringen', 5.50, 'Krokante uitjenringen in beslag', '🧅'),
(50, 'Kip Nuggets', 8.99, '10 krokante kip nuggets met dipsaus', '🍗'),
(51, 'Caesar Wrap', 10.50, 'Gegrilde kip, romaine sla en caesar dressing in een wrap', '🌯'),
(52, 'IJs Sundae', 4.99, 'Vanille ijs met chocoladesaus en hagelslag', '🍨'),
(54, 'Mozzarella Sticks', 6.99, 'Krokante gefrituurde mozzarella sticks met marinara saus', '🧀'),
(63, 'Testbugertest', 5.00, 'test', '🍔');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten`
--

CREATE TABLE `studenten` (
  `id` int NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `leeftijd` int NOT NULL,
  `woonplaats` varchar(100) NOT NULL,
  `klas` varchar(5) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `studenten`
--

INSERT INTO `studenten` (`id`, `voornaam`, `achternaam`, `leeftijd`, `woonplaats`, `klas`, `gender`, `email`, `created_at`) VALUES
(1, 'Liam', 'de Vries', 16, 'Amsterdam', '1A', 'Man', 'liam.de.vries@school.nl', '2026-03-10 12:02:33'),
(2, 'Sofia', 'Jansen', 15, 'Rotterdam', '1A', 'Vrouw', 'sofia.jansen@school.nl', '2026-03-10 12:02:33'),
(3, 'Noah', 'van den Berg', 17, 'Utrecht', '1B', 'Man', 'noah.van.den.berg@school.nl', '2026-03-10 12:02:33'),
(4, 'Amara', 'Bakker', 16, 'Den Haag', '1B', 'Vrouw', 'amara.bakker@school.nl', '2026-03-10 12:02:33'),
(5, 'Finn', 'Visser', 15, 'Eindhoven', '1C', 'Non-binair', 'finn.visser@school.nl', '2026-03-10 12:02:33'),
(6, 'Zara', 'Smit', 16, 'Tilburg', '1C', 'Vrouw', 'zara.smit@school.nl', '2026-03-10 12:02:33'),
(7, 'Jayden', 'Meijer', 17, 'Groningen', '1A', 'Man', 'jayden.meijer@school.nl', '2026-03-10 12:02:33'),
(8, 'Noor', 'de Boer', 15, 'Almere', '1A', 'Vrouw', 'noor.de.boer@school.nl', '2026-03-10 12:02:33'),
(9, 'Ravi', 'Mulder', 16, 'Breda', '1B', 'Man', 'ravi.mulder@school.nl', '2026-03-10 12:02:33'),
(10, 'Lena', 'de Groot', 17, 'Nijmegen', '1B', 'Vrouw', 'lena.de.groot@school.nl', '2026-03-10 12:02:33'),
(11, 'Sven', 'Bos', 15, 'Enschede', '1C', 'Man', 'sven.bos@school.nl', '2026-03-10 12:02:33'),
(12, 'Yasmine', 'Vos', 16, 'Haarlem', '1C', 'Vrouw', 'yasmine.vos@school.nl', '2026-03-10 12:02:33'),
(13, 'Daan', 'Peters', 17, 'Arnhem', '1A', 'Man', 'daan.peters@school.nl', '2026-03-10 12:02:33'),
(14, 'Imani', 'Hendriks', 15, 'Zaanstad', '1A', 'Vrouw', 'imani.hendriks@school.nl', '2026-03-10 12:02:33'),
(15, 'River', 'van Dijk', 16, 'Amersfoort', '1B', 'Non-binair', 'river.van.dijk@school.nl', '2026-03-10 12:02:33'),
(16, 'Fatima', 'Kuijpers', 17, 'Apeldoorn', '1B', 'Vrouw', 'fatima.kuijpers@school.nl', '2026-03-10 12:02:33'),
(17, 'Lukas', 'van der Berg', 15, 'Delft', '1C', 'Man', 'lukas.van.der.berg@school.nl', '2026-03-10 12:02:33'),
(18, 'Soraya', 'Vermeer', 16, 'Leiden', '1C', 'Vrouw', 'soraya.vermeer@school.nl', '2026-03-10 12:02:33'),
(19, 'Milan', 'Jonkers', 17, 'Dordrecht', '1A', 'Man', 'milan.jonkers@school.nl', '2026-03-10 12:02:33'),
(20, 'Blythe', 'Kramer', 15, 'Zoetermeer', '1A', 'Non-binair', 'blythe.kramer@school.nl', '2026-03-10 12:02:33'),
(21, 'Tariq', 'van Leeuwen', 16, 'Maastricht', '1B', 'Man', 'tariq.van.leeuwen@school.nl', '2026-03-10 12:02:33'),
(22, 'Eva', 'Willems', 17, 'Zwolle', '1B', 'Vrouw', 'eva.willems@school.nl', '2026-03-10 12:02:33'),
(23, 'Jesse', 'Jacobs', 15, 'Deventer', '1C', 'Man', 'jesse.jacobs@school.nl', '2026-03-10 12:02:33'),
(24, 'Priya', 'de Leeuw', 16, 'Den Bosch', '1C', 'Vrouw', 'priya.de.leeuw@school.nl', '2026-03-10 12:02:33'),
(25, 'Sam', 'van Beek', 17, 'Alkmaar', '1A', 'Genderfluid', 'sam.van.beek@school.nl', '2026-03-10 12:02:33'),
(26, 'Ines', 'Claes', 15, 'Heerlen', '1A', 'Vrouw', 'ines.claes@school.nl', '2026-03-10 12:02:33'),
(27, 'Hamza', 'Hermans', 16, 'Venlo', '1B', 'Man', 'hamza.hermans@school.nl', '2026-03-10 12:02:33'),
(28, 'Tess', 'van Ommen', 17, 'Westland', '1B', 'Vrouw', 'tess.van.ommen@school.nl', '2026-03-10 12:02:33'),
(29, 'Koen', 'de Ruiter', 15, 'Sittard', '1C', 'Man', 'koen.de.ruiter@school.nl', '2026-03-10 12:02:33'),
(30, 'Anaya', 'Brouwers', 16, 'Hilversum', '1C', 'Vrouw', 'anaya.brouwers@school.nl', '2026-03-10 12:02:33'),
(31, 'Mats', 'Dekker', 17, 'Emmen', '1A', 'Man', 'mats.dekker@school.nl', '2026-03-10 12:02:33'),
(32, 'Yuki', 'Bosman', 15, 'Helmond', '1A', 'Vrouw', 'yuki.bosman@school.nl', '2026-03-10 12:02:33'),
(33, 'Alex', 'Willems', 16, 'Roosendaal', '1B', 'Non-binair', 'alex.willems@school.nl', '2026-03-10 12:02:33'),
(34, 'Layla', 'Schouten', 17, 'Purmerend', '1B', 'Vrouw', 'layla.schouten@school.nl', '2026-03-10 12:02:33'),
(35, 'Tobias', 'van Rijn', 15, 'Spijkenisse', '1C', 'Man', 'tobias.van.rijn@school.nl', '2026-03-10 12:02:33'),
(36, 'Chiara', 'Smeets', 16, 'Leeuwarden', '1C', 'Vrouw', 'chiara.smeets@school.nl', '2026-03-10 12:02:33'),
(37, 'Omar', 'Berger', 17, 'Ede', '1A', 'Man', 'omar.berger@school.nl', '2026-03-10 12:02:33'),
(38, 'Fenna', 'Martens', 15, 'Hardenberg', '1A', 'Vrouw', 'fenna.martens@school.nl', '2026-03-10 12:02:33'),
(39, 'Sky', 'de Jong', 16, 'Veenendaal', '1B', 'Genderfluid', 'sky.de.jong@school.nl', '2026-03-10 12:02:33'),
(40, 'Aylin', 'Hoekstra', 17, 'Gouda', '1B', 'Vrouw', 'aylin.hoekstra@school.nl', '2026-03-10 12:02:33'),
(41, 'Lucas', 'van der Laan', 15, 'Alphen aan den Rijn', '1C', 'Man', 'lucas.van.der.laan@school.nl', '2026-03-10 12:02:33'),
(42, 'Nadia', 'Huisman', 16, 'Capelle aan den IJssel', '1C', 'Vrouw', 'nadia.huisman@school.nl', '2026-03-10 12:02:33'),
(43, 'Thijs', 'Vink', 17, 'Vlaardingen', '1A', 'Man', 'thijs.vink@school.nl', '2026-03-10 12:02:33'),
(44, 'Rania', 'de Waal', 15, 'Schiedam', '1A', 'Vrouw', 'rania.de.waal@school.nl', '2026-03-10 12:02:33'),
(45, 'Cas', 'van Vliet', 16, 'Nieuwegein', '1B', 'Non-binair', 'cas.van.vliet@school.nl', '2026-03-10 12:02:33'),
(46, 'Naomi', 'Baas', 17, 'Amersfoort', '1B', 'Vrouw', 'naomi.baas@school.nl', '2026-03-10 12:02:33'),
(47, 'Elias', 'Groen', 15, 'Hoorn', '1C', 'Man', 'elias.groen@school.nl', '2026-03-10 12:02:33'),
(48, 'Xena', 'Timmermans', 16, 'Bergen op Zoom', '1C', 'Vrouw', 'xena.timmermans@school.nl', '2026-03-10 12:02:33'),
(49, 'Bram', 'van der Meer', 17, 'Oss', '1A', 'Man', 'bram.van.der.meer@school.nl', '2026-03-10 12:02:33'),
(50, 'Selin', 'Geerts', 15, 'Weert', '1A', 'Vrouw', 'selin.geerts@school.nl', '2026-03-10 12:02:33'),
(51, 'Nino', 'van Dongen', 16, 'Middelburg', '1B', 'Man', 'nino.van.dongen@school.nl', '2026-03-10 12:02:33'),
(52, 'Fleur', 'Puts', 17, 'Venray', '1B', 'Vrouw', 'fleur.puts@school.nl', '2026-03-10 12:02:33'),
(53, 'Zion', 'Cuypers', 15, 'Roosendaal', '1C', 'Non-binair', 'zion.cuypers@school.nl', '2026-03-10 12:02:33'),
(54, 'Amber', 'van Santen', 16, 'Dordrecht', '1C', 'Vrouw', 'amber.van.santen@school.nl', '2026-03-10 12:02:33'),
(55, 'Pieter', 'Aarts', 17, 'Tilburg', '1A', 'Man', 'pieter.aarts@school.nl', '2026-03-10 12:02:33'),
(56, 'Hana', 'Linders', 15, 'Enschede', '1A', 'Vrouw', 'hana.linders@school.nl', '2026-03-10 12:02:33'),
(57, 'Quentin', 'Peeters', 16, 'Arnhem', '1B', 'Man', 'quentin.peeters@school.nl', '2026-03-10 12:02:33'),
(58, 'Zoe', 'Bongers', 17, 'Nijmegen', '1B', 'Vrouw', 'zoe.bongers@school.nl', '2026-03-10 12:02:33'),
(59, 'Erin', 'van Veen', 15, 'Utrecht', '1C', 'Genderfluid', 'erin.van.veen@school.nl', '2026-03-10 12:02:33'),
(60, 'Mariam', 'de Haas', 16, 'Den Haag', '1C', 'Vrouw', 'mariam.de.haas@school.nl', '2026-03-10 12:02:33'),
(61, 'Viktor', 'Nijs', 17, 'Leiden', '1A', 'Man', 'viktor.nijs@school.nl', '2026-03-10 12:02:33'),
(62, 'Lotte', 'Verheij', 15, 'Delft', '1A', 'Vrouw', 'lotte.verheij@school.nl', '2026-03-10 12:02:33'),
(63, 'Idris', 'van Pelt', 16, 'Amsterdam', '1B', 'Man', 'idris.van.pelt@school.nl', '2026-03-10 12:02:33'),
(64, 'Vera', 'Boomsma', 17, 'Rotterdam', '1B', 'Vrouw', 'vera.boomsma@school.nl', '2026-03-10 12:02:33'),
(65, 'Robin', 'de Haas', 15, 'Groningen', '1C', 'Non-binair', 'robin.de.haas@school.nl', '2026-03-10 12:02:33'),
(66, 'Ishaan', 'Niessen', 16, 'Breda', '1C', 'Man', 'ishaan.niessen@school.nl', '2026-03-10 12:02:33'),
(67, 'Manon', 'Vriens', 17, 'Eindhoven', '1A', 'Vrouw', 'manon.vriens@school.nl', '2026-03-10 12:02:33'),
(68, 'Sander', 'Heemskerk', 15, 'Maastricht', '1A', 'Man', 'sander.heemskerk@school.nl', '2026-03-10 12:02:33'),
(69, 'Aiyana', 'van der Wal', 16, 'Zwolle', '1B', 'Vrouw', 'aiyana.van.der.wal@school.nl', '2026-03-10 12:02:33'),
(70, 'Ruben', 'Post', 17, 'Deventer', '1B', 'Man', 'ruben.post@school.nl', '2026-03-10 12:02:33'),
(71, 'Quinn', 'Joosten', 15, 'Den Bosch', '1C', 'Non-binair', 'quinn.joosten@school.nl', '2026-03-10 12:02:33'),
(72, 'Daniyar', 'Koster', 16, 'Alkmaar', '1C', 'Man', 'daniyar.koster@school.nl', '2026-03-10 12:02:33'),
(73, 'Mila', 'Winters', 17, 'Haarlem', '1A', 'Vrouw', 'mila.winters@school.nl', '2026-03-10 12:02:33'),
(74, 'Floris', 'Kusters', 15, 'Zaanstad', '1A', 'Man', 'floris.kusters@school.nl', '2026-03-10 12:02:33'),
(75, 'Roxana', 'Lemmens', 16, 'Heerlen', '1B', 'Vrouw', 'roxana.lemmens@school.nl', '2026-03-10 12:02:33'),
(76, 'Ato', 'van den Brink', 17, 'Venlo', '1B', 'Man', 'ato.van.den.brink@school.nl', '2026-03-10 12:02:33'),
(77, 'Liselotte', 'Arts', 15, 'Hilversum', '1C', 'Vrouw', 'liselotte.arts@school.nl', '2026-03-10 12:02:33'),
(78, 'Emre', 'van Hal', 16, 'Emmen', '1C', 'Man', 'emre.van.hal@school.nl', '2026-03-10 12:02:33'),
(79, 'Nadine', 'Stam', 17, 'Helmond', '1A', 'Vrouw', 'nadine.stam@school.nl', '2026-03-10 12:02:33'),
(80, 'Wout', 'de Vos', 15, 'Spijkenisse', '1A', 'Man', 'wout.de.vos@school.nl', '2026-03-10 12:02:33'),
(81, 'Juno', 'Adriaans', 16, 'Purmerend', '1B', 'Genderfluid', 'juno.adriaans@school.nl', '2026-03-10 12:02:33'),
(82, 'Merel', 'van Gils', 17, 'Leeuwarden', '1B', 'Vrouw', 'merel.van.gils@school.nl', '2026-03-10 12:02:33'),
(83, 'Issa', 'Broers', 15, 'Veenendaal', '1C', 'Man', 'issa.broers@school.nl', '2026-03-10 12:02:33'),
(84, 'Hailey', 'van den Heuvel', 16, 'Gouda', '1C', 'Vrouw', 'hailey.van.den.heuvel@school.nl', '2026-03-10 12:02:33'),
(85, 'Sebastiaan', 'Franke', 17, 'Amersfoort', '1A', 'Man', 'sebastiaan.franke@school.nl', '2026-03-10 12:02:33'),
(86, 'Aicha', 'Wijnands', 15, 'Zoetermeer', '1A', 'Vrouw', 'aicha.wijnands@school.nl', '2026-03-10 12:02:33'),
(87, 'Lex', 'Pronk', 16, 'Apeldoorn', '1B', 'Non-binair', 'lex.pronk@school.nl', '2026-03-10 12:02:33'),
(88, 'Eline', 'van Staveren', 17, 'Ede', '1B', 'Vrouw', 'eline.van.staveren@school.nl', '2026-03-10 12:02:33'),
(89, 'Stef', 'Claassen', 15, 'Middelburg', '1C', 'Man', 'stef.claassen@school.nl', '2026-03-10 12:02:33'),
(90, 'Diarra', 'Otten', 16, 'Weert', '1C', 'Vrouw', 'diarra.otten@school.nl', '2026-03-10 12:02:33'),
(91, 'Hugo', 'Lindeman', 17, 'Hardenberg', '1A', 'Man', 'hugo.lindeman@school.nl', '2026-03-10 12:02:33'),
(92, 'Simone', 'van Zanten', 15, 'Bergen op Zoom', '1A', 'Vrouw', 'simone.van.zanten@school.nl', '2026-03-10 12:02:33'),
(93, 'Kieran', 'de Bruijn', 16, 'Vlaardingen', '1B', 'Man', 'kieran.de.bruijn@school.nl', '2026-03-10 12:02:33'),
(94, 'Fatoumata', 'Wolters', 17, 'Schiedam', '1B', 'Vrouw', 'fatoumata.wolters@school.nl', '2026-03-10 12:02:33'),
(95, 'Bo', 'Hopmans', 15, 'Oss', '1C', 'Non-binair', 'bo.hopmans@school.nl', '2026-03-10 12:02:33'),
(96, 'Yara', 'van Soest', 16, 'Capelle aan den IJssel', '1C', 'Vrouw', 'yara.van.soest@school.nl', '2026-03-10 12:02:33'),
(97, 'Timo', 'Janssen', 17, 'Nieuwegein', '1A', 'Man', 'timo.janssen@school.nl', '2026-03-10 12:02:33'),
(98, 'Esra', 'van Kampen', 15, 'Alphen aan den Rijn', '1A', 'Vrouw', 'esra.van.kampen@school.nl', '2026-03-10 12:02:33');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `drankjes`
--
ALTER TABLE `drankjes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gerechten`
--
ALTER TABLE `gerechten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `drankjes`
--
ALTER TABLE `drankjes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `gerechten`
--
ALTER TABLE `gerechten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `studenten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
