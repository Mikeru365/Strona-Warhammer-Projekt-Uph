-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 21, 2024 at 05:35 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warhammerdbv2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE `artykuly` (
  `id` int(10) UNSIGNED NOT NULL,
  `idKategorii` int(10) UNSIGNED NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `obrazek` varchar(50) NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `artykuly`
--

INSERT INTO `artykuly` (`id`, `idKategorii`, `tytul`, `obrazek`, `tresc`) VALUES
(1, 1, 'Trzy największe zmiany w Warhammer Age of Sigmar', 'NZ1.jpg', 'Nowa edycja Warhammer Age of Sigmar jest tak blisko, że prawie możemy jej posmakować!* W nowej edycji pojawia się tak wiele zmian – walka została dopracowana do niesamowitego poziomu, nowe polecenia pozwalają ci reagować bardziej zdecydowanie, a ty może teraz używać nieskończonych zaklęć w walce.\r\n\r\nDzięki wczorajszej zapowiedzi Mortal Realms Reforged Preview wiemy już o wszystkich gadżetach zawartych w nadchodzącym zestawie startowym Skaventide, zawierającym więcej figurek, niż można potrząsnąć szczurem.\r\n\r\nJesteśmy podekscytowani, podobnie jak projektanci w Warhammer Studio, więc usiedliśmy z nimi i poprosiliśmy o trzy ulubione zmiany w nowej edycji…'),
(2, 2, ' Odkryj, co sprawia, że ​​Krainy Śmiertelników są niesamowite', 'BL1.jpg', 'There’s a new edition of Warhammer Age of Sigmar on the way, and it’s ridiculously exciting – but if you don’t yet know your Realmgates from your Rotbringers or your Eightpoints from your Endrinriggers, where do you begin? The Mortal Realms have a long and rich history, so to get you started, we’ve picked out some of our favourite books for dipping your toes into the four Grand Alliances fighting for supremacy.\r\n\r\nStart Reading… Death – The Hollow King\r\n\r\nMost of the undead legions that march under the banner of Nagash do so with undying loyalty, but some few rage against their fate. Cado Ezechiar is one such maverick – the former king of a lost nation, now gripped by the vampiric Soulblight Curse and forced to endure for eternity with only the souls of his long-dead kinsmen for company. \r\n\r\nIn The Hollow King by John French, Cado walks a path of revenge against the Chaos cult that destroyed his home, and gets caught up in the desperate machinations of a Free City struggling to survive in the Realm of Death. It’s the perfect book for discovering how the concept of death impacts a world where spirits and souls exist side-by-side with living beings, and quite what a deathless existence in thrall to the Great Necromancer does to someone with an unquenchable desire for personal vengeance.\r\n\r\nStart Reading… Destruction – Bad Loon Rising\r\n\r\nWhen you think of Grand Alliance Destruction, you may picture rampaging hordes of hulking orruks, ravenous ogors, and stomping gargants, but the savage children of Gorkamorka aren’t just guileless beasts. The Great Green God prizes cunning just as much as brutality, and none corner the market on conniving chicanery quite like the Gloomspite Gitz.\r\n\r\nTo see just how far devious plans and a spot of fungal magic can take one born at the bottom of the barrel, you need only witness the tale of Loonboss Zogrot in Bad Loon Rising by Andy Clark. Strength and a love of violence will get you almost everywhere within the ranks of Destruction, but as the foolish fiends who stand in Zogrot’s way discover, there’s much more to this seemingly single-minded alliance than meets the eye.\r\n\r\nStart Reading… Order – Yndrasta: The Celestial Spear\r\n\r\nThe forces of Order are as varied as the Mortal Realms themselves – a grand coalition of humans, aelves, duardin, and more that surge out from their fortified cities to reclaim the realm from Chaos. Yet it’s the Stormcast Eternals who most directly represent Sigmar’s will, and for all their humanity and selflessness, they are still held at arm’s length by many.\r\n\r\nHow the flesh and blood citizens of Sigmar live and die alongside their semi-divine protectors is a major theme across their Grand Alliance, and never has the difference been more evident than in Yndrasta: The Celestial Spear by Noah Van Nguyen. Here, Sigmar’s Prime Huntress – the winged warrior Yndrasta – must work with the mortal Njda to hunt down a rampaging monster, and the interplay between these two strong-willed characters is a fascinating microcosm for how mortal and immortal interact across the entire Age of Sigmar.\r\n\r\nStart Reading… Chaos – Godeater’s Son\r\n\r\nIt’s easy to write the forces of Chaos off as cruel barbarians and downright evil monsters, but as the Age of Sigmar has only just begun to drive the Dark Gods out of the Mortal Realms, many living under their yoke are simply normal civilisations who did what they could to survive the hellish Age of Chaos. As Sigmar’s return pushes armies of zealots and promises of ‘order’ across long-abandoned lands, many of these hardened tribes – such as the Darkoath – want nothing to do with the god who forsook their ancestors.\r\n\r\nOthers simply want to be left alone, like Heldanarr Fall in Godeater’s Son by Noah Van Nguyen. His story is a unique take on the relationship between Chaos and Order, showing that not all that glitters is gold in the Age of Sigmar, and how many who live beyond the safety of walls and cannons see the will of Sigmar as simply one divine tyrant replacing another.\r\n\r\nThere’s lots more to learn about the Mortal Realms nestled between the pages of countless Black Library books, and you can relive the defining events of the Age of Sigmar – from the Realmgate Wars that saw Order begin to reclaim its foothold in the Mortal Realms, to the savage conflicts spurred on during the Era of the Beast – in the new omnibus War for the Mortal Realms, coming to pre-order this Saturday. \r\n\r\n'),
(3, 3, 'Test', 'Frakcje.jpg', 'testetstsets\r\n\r\neresfesefdsfs\r\n\r\ndssfd                      dsfsdf\r\n                    sddfsdf\r\nfssdfffff'),
(6, 2, 'Test', 'Farby.png', 'hgffghh');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) UNSIGNED NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`, `opis`) VALUES
(1, 'Nowe Zestawy', 'Nowe Zestawy Figurki'),
(2, 'Black Library', 'Nowe Ksiązki ze świata Warhammer Age of Sigmar'),
(3, 'Wydarzenia/Turnieje', 'Wydarzenia/Turnieje');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recenzje`
--

CREATE TABLE `recenzje` (
  `id` int(10) UNSIGNED NOT NULL,
  `idArtykulu` int(10) UNSIGNED NOT NULL,
  `nick` varchar(50) NOT NULL,
  `tresc` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `recenzje`
--

INSERT INTO `recenzje` (`id`, `idArtykulu`, `nick`, `tresc`, `data`) VALUES
(15, 1, 'Mikeru', 'Fajne', '2024-05-26 17:45:58'),
(18, 3, 'Admin1', 'tdfhgfh', '2024-06-12 13:51:13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ulubione`
--

CREATE TABLE `ulubione` (
  `id` int(10) UNSIGNED NOT NULL,
  `idArtykulu` int(10) UNSIGNED NOT NULL,
  `idUzytkownika` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rola` varchar(50) NOT NULL DEFAULT 'user',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `rola`, `data`) VALUES
(1, 'Mikeru', '827ccb0eea8a706c4c34a16891f84e7b', 'mr22@op.pl', 'user', '2024-05-14 16:39:17'),
(2, 'Admin', '3b6250cba2962c0f5b4437e7e5b42006', 'regdfg', 'admin', '2024-05-26 12:32:34'),
(4, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'fsd', 'admin', '2024-06-12 10:01:30');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKategorii` (`idKategorii`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArtykulu` (`idArtykulu`);

--
-- Indeksy dla tabeli `ulubione`
--
ALTER TABLE `ulubione`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArtykulu` (`idArtykulu`),
  ADD KEY `idUzytkownika` (`idUzytkownika`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artykuly`
--
ALTER TABLE `artykuly`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recenzje`
--
ALTER TABLE `recenzje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ulubione`
--
ALTER TABLE `ulubione`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artykuly`
--
ALTER TABLE `artykuly`
  ADD CONSTRAINT `artykuly_ibfk_1` FOREIGN KEY (`idKategorii`) REFERENCES `kategorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recenzje`
--
ALTER TABLE `recenzje`
  ADD CONSTRAINT `recenzje_ibfk_1` FOREIGN KEY (`idArtykulu`) REFERENCES `artykuly` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulubione`
--
ALTER TABLE `ulubione`
  ADD CONSTRAINT `ulubione_ibfk_1` FOREIGN KEY (`idArtykulu`) REFERENCES `artykuly` (`id`),
  ADD CONSTRAINT `ulubione_ibfk_2` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
