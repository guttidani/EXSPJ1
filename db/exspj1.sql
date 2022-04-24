-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exspj1`
--

-- --------------------------------------------------------

--
-- Table structure for table `munkakorok`
--

CREATE TABLE `munkakorok` (
  `munkakorID` int(11) NOT NULL,
  `munkakorNev` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `munkakorok`
--

INSERT INTO `munkakorok` (`munkakorID`, `munkakorNev`) VALUES
(1, 'Adat/adatbázis szakértő'),
(2, 'Adminisztrációs vezető/Irodave'),
(3, 'Adózási szakértő'),
(4, 'Adózási vezető'),
(5, 'Alkalmazás rendszergazda'),
(6, 'Anyag/Készletgazdálkodási szak'),
(7, 'Anyag/Készletgazdálkodó'),
(8, 'Anyagellátás/gazdálkodás vezet'),
(9, 'Anyagtervező/Diszponens'),
(10, 'Automatizálási/PLC mérnök'),
(11, 'Bejövő áru ellenőr'),
(12, 'Belső ellenőr'),
(13, 'Belső ellenőrzési vezető'),
(14, 'Bér és juttatási szakértő'),
(15, 'Bér- és TB ügyintéző'),
(16, 'Beruházás mérnök/szakértő'),
(17, 'Beruházási vezető'),
(18, 'Beszállítói minőségbiztosítási'),
(19, 'Beszerzési igazgató'),
(20, 'Beszerzési vezető'),
(21, 'Beszerző'),
(22, 'Beszerző szakértő'),
(23, 'Betanított karbantartó/Karbant'),
(24, 'Betanított munkás'),
(25, 'Biztonsági szakértő'),
(26, 'Biztonsági vezető'),
(27, 'Bolti eladó/pénztáros'),
(28, 'BPR/Folyamatfejlesztési szakér'),
(29, 'BPR/Folyamatfejlesztési vezető'),
(30, 'CNC gépkezelő/programozó'),
(31, 'Csomagolás mérnök'),
(32, 'Csomagoló'),
(33, 'EHS technikus'),
(34, 'EHS vezető'),
(35, 'EHS/Környezetvédelmi mérnök'),
(36, 'Energetikai mérnök'),
(37, 'Energetikai technikus'),
(38, 'Energetikai vezető'),
(39, 'ERP/SAP fejlesztő'),
(40, 'ERP/SAP modulgazda'),
(41, 'Fejlesztés technikus'),
(42, 'Fejlesztési igazgató'),
(43, 'Fejlesztési ügyintéző'),
(44, 'Fejlesztési vezető'),
(45, 'Festő'),
(46, 'Flottakezelő'),
(48, 'Főkönyvelő/Számviteli igazgató'),
(47, 'Fordító/tolmács'),
(49, 'Gazdasági/Pénzügyi igazgató'),
(50, 'Gépbeállító'),
(51, 'Gépi forgácsoló/Esztergályos'),
(52, 'Gépkezelő/Operátor (bonyolulta'),
(53, 'Gépkezelő/Operátor (egyszerűbb'),
(54, 'Géplakatos'),
(55, 'Gyártás/folyamat fejlesztő mér'),
(56, 'Hegesztő'),
(57, 'Hegesztő mérnök'),
(58, 'HR generalista'),
(59, 'HR igazgató'),
(60, 'HR ügyintéző'),
(61, 'HR üzleti partner'),
(62, 'HR vezető'),
(63, 'Informatikai igazgató'),
(64, 'IT biztonsági szakértő'),
(65, 'IT fejlesztési vezető'),
(66, 'IT operátor'),
(67, 'IT projektvezető'),
(68, 'IT üzemeltetési vezető'),
(69, 'Jogász/jogtanácsos'),
(70, 'Jogi vezető'),
(71, 'Karbantartási csoport/művezető'),
(72, 'Karbantartási igazgató'),
(73, 'Karbantartási ügyintéző'),
(74, 'Karbantartási vezető'),
(75, 'Karbantartó mérnök'),
(76, 'Karbantartó szakmunkás (bonyol'),
(77, 'Karbantartó szakmunkás (egysze'),
(78, 'Karbantartó technikus'),
(79, 'Kertész'),
(80, 'Kontroller'),
(81, 'Kontrolling vezető'),
(82, 'Könyvelő'),
(83, 'Közbeszerzési/pályázati szakér'),
(84, 'Laborvezető'),
(85, 'Lean/SixSigma/Kaizen mérnök'),
(86, 'Logisztikai igazgató'),
(87, 'Logisztikai szakértő'),
(88, 'Logisztikai ügyintéző'),
(89, 'Logisztikai vezető'),
(90, 'Menedzser asszisztens'),
(91, 'Minőségbiztosítási mérnök'),
(92, 'Minőségbiztosítási technikus'),
(93, 'Minőségbiztosítási vezető'),
(94, 'Minőségellenőr/Laboráns'),
(95, 'Minőségellenőrzési csoportveze'),
(96, 'Minőségellenőrzési mérnök'),
(97, 'Minőségellenőrzési technikus'),
(98, 'Minőségellenőrzési vezető'),
(99, 'Minőségügyi igazgató'),
(100, 'Munkakör'),
(101, 'Műszaki igazgató'),
(102, 'Műszaki mérnök'),
(103, 'Műszaki technológus'),
(104, 'Műszaki ügyintéző'),
(105, 'Műszaki vevőszolgálati szakért'),
(106, 'Műszaki vevőszolgálati ügyinté'),
(107, 'Műszaki vezető/Főmérnök'),
(108, 'Műszerész'),
(109, 'Nehézgép kezelő'),
(110, 'Oktató/Tréner'),
(111, 'Pénzügyi szakértő'),
(112, 'Pénzügyi ügyintéző'),
(113, 'Pénzügyi vezető'),
(114, 'PR/Kommunikációs szakértő'),
(115, 'PR/Kommunikációs vezető'),
(116, 'Programozó/Szoftverfejlesztő'),
(117, 'Projekt asszisztens'),
(118, 'Projektmenedzser'),
(119, 'Projektmenedzsment vezető'),
(120, 'Raktári csoport/művezető'),
(121, 'Raktárkezelő/Raktáros'),
(122, 'Raktárvezető'),
(123, 'Recepciós/Gondnok'),
(124, 'Rendszerszervező/Üzleti elemző'),
(125, 'Segédmunkás'),
(126, 'Stratégiai beszerző'),
(127, 'Stratégiai/Üzletfejlesztési ig'),
(128, 'Stratégiai/Üzletfejlesztési sz'),
(129, 'Stratégiai/Üzletfejlesztési ve'),
(130, 'Szállítási vezető'),
(131, 'Szállításszervező/Diszpécser'),
(132, 'Számviteli szakértő'),
(133, 'Számviteli ügyintéző'),
(134, 'Számviteli vezető'),
(135, 'Személy- és vagyonőr'),
(136, 'Személygépkocsivezető'),
(137, 'Személyzetfejlesztési/Képzési '),
(138, 'Szerelő szakmunkás'),
(139, 'Szerszám készítő/karbantartó'),
(140, 'Szerszám mérnök'),
(141, 'Takarító'),
(142, 'Targoncakezelő/Anyagmozgató'),
(143, 'Tehergépjármű sofőr'),
(144, 'Termék/szolgáltatás fejlesztő '),
(145, 'Termelés mérnök'),
(146, 'Termelési asszisztens'),
(147, 'Termelési csoport/művezető'),
(148, 'Termelési igazgató'),
(149, 'Termelési műszakvezető'),
(150, 'Termelési vezető'),
(151, 'Termeléstervezési vezető'),
(152, 'Termeléstervező'),
(153, 'Teszt mérnök'),
(154, 'Titkár/Titkárnő'),
(155, 'Titkárságvezető'),
(156, 'Toborzási szakértő'),
(157, 'Treasury szakértő'),
(158, 'Ügyfélszolgálati/Call Center c'),
(159, 'Ügyfélszolgálati/Call Center i'),
(160, 'Ügyfélszolgálati/Call Center o'),
(161, 'Ügyfélszolgálati/Call Center s'),
(162, 'Ügyfélszolgálati/Call Center v'),
(163, 'Üzem/Gyáregység vezető'),
(164, 'Üzemfenntartási mérnök'),
(165, 'Üzemfenntartási ügyintéző'),
(166, 'Üzemfenntartási vezető'),
(167, 'Vagyon/portfólio kezelő szakér'),
(168, 'Vámügyintéző'),
(169, 'Villamos mérnök'),
(170, 'Villanyszerelő'),
(171, 'Vízvezeték és gázszerelő');

-- --------------------------------------------------------

--
-- Table structure for table `szervegys`
--

CREATE TABLE `szervegys` (
  `szervegysID` int(11) NOT NULL,
  `szervEgysNev` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `szervegys`
--

INSERT INTO `szervegys` (`szervegysID`, `szervEgysNev`) VALUES
(1, 'Általános logisztika'),
(2, 'Általános műszaki'),
(3, 'Audit'),
(4, 'Beruházás'),
(5, 'Beszerzés'),
(6, 'Bolti értékesítés'),
(7, 'EHS'),
(8, 'Energia'),
(9, 'Humán'),
(10, 'IT fejlesztés'),
(11, 'IT üzemeltetés'),
(12, 'Jog'),
(13, 'Karbantartás'),
(14, 'Kontrolling'),
(15, 'Közbeszerzés/Tender'),
(16, 'Minőség'),
(17, 'Munkakör család'),
(18, 'Operatív termelés'),
(19, 'Pénzügy'),
(20, 'PR/Kommunikáció'),
(21, 'Projekt menedzsment'),
(22, 'Szállítás/Raktározás'),
(23, 'Számvitel'),
(24, 'Termék/gyártás fejlesztés'),
(25, 'Termeléstervezés'),
(26, 'Ügyfélszolgálat/Call Cent'),
(27, 'Ügyvitel/Adminisztráció'),
(28, 'Üzemeltetés/Biztonság'),
(29, 'Üzletfejlesztés');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `munkakorok`
--
ALTER TABLE `munkakorok`
  ADD PRIMARY KEY (`munkakorID`),
  ADD UNIQUE KEY `munkakorNev` (`munkakorNev`);

--
-- Indexes for table `szervegys`
--
ALTER TABLE `szervegys`
  ADD PRIMARY KEY (`szervegysID`),
  ADD UNIQUE KEY `szervEgysNev` (`szervEgysNev`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `munkakorok`
--
ALTER TABLE `munkakorok`
  MODIFY `munkakorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `szervegys`
--
ALTER TABLE `szervegys`
  MODIFY `szervegysID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
