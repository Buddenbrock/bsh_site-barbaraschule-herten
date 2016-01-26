-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jul 2015 um 00:05
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `barbaraschule_cms`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE IF NOT EXISTS `content` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `page` text NOT NULL,
  `show_article` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`id`, `title`, `content`, `page`, `show_article`, `created`) VALUES
(1, '', '<p>Die Barbaraschule ist eine 2-zügige Grundschule mit circa 200 Schülern, die in der Regel von 12-14 Lehrerinnen unterrichtet werden.\r\nSeit 2005 ist die Barbaraschule auf Offene Ganztagsschule und kann für knapp 100 Kinder eine zuverlässige Betreuung in gut ausgestatteten Räumen anbieten.</p>', 'aboutus', 1, '2015-07-10 10:00:00'),
(2, 'Aus der Geschichte der Barbaraschule', '<p>\r\nEs ist ein seltenes und darum besonderes Ereignis, wenn eine Schule ihr 100jähriges Bestehen feiern kann. Ich freue mich, dass ich dieses Jubiläum erleben darf, möchte der Schulgemeinschaft gratulieren und herzliche Glückwünsche sagen.\r\n</p>\r\n\r\n<p>\r\nVon  diesen 100 Jahren war ich länger als 27 Jahre an der Barbaraschule als Konrektor und Rektor tätig. Über diese Zeit möchte ich einiges berichten:\r\n</p>\r\n\r\n<p>\r\nAm 1. August 1968 trat eine Reform der Volksschule in Nordrhein-Westfalen in Kraft: <br/>\r\nDie Klasse 1 bis 4 bildeten die Grundschule, die Klassen 5 bis 10 die Hauptschule. <br/>\r\nAus den beiden Volksschulen in Bertlich entstanden so die Glückauf-Hauptschule an der Hasselbruchstraße und 2 Grundschulen im Gebäude an der Wallstraße, eine evangelische und eine katholische Grundschule. <br/>\r\nAm 24. April 1969 wurde ich mit der federführenden Leitung der katholischen Grundschule-Barbaraschule beauftragt. <br/>\r\nNoch im selben Jahr wurden die kath. und evang. Grundschule zur Gemeinschaftsgrundschule vereint. Am 22. Mai 1970 wurde ich zum Rektor dieser Schule ernannt. <br/>\r\nDas zusammenwachsen der beiden Schülergruppen und Kollegien verlief reibungslos einvernehmlich. Die Schule war zweizügig, nach einigen Jahren vorrübergehend dreizügig.\r\n</p>\r\n\r\n<p>\r\nMir war es ein Anliegen, die Zusammenarbeit der Klassen- und Fachlehrer in den Parallelklassen zu intensivieren: So wurden Unterrichtspläne und Klassenarbeiten gemeinsam vorbereitet und die Beurteilung der letzteren miteinander abgestimmt. <br/>\r\nDer Unterricht in den Klassenzimmern wurde durch Unternehmungen außerhalb der Schule  bereichert: Durch Unterrichtsgänge in die Schulumgebung, durch ganztägige Fahrten zu Zielen, die im Unterricht besprochen worden waren, durch mehrtägige Klassenfahrten  in Jugendherbergen oder ins Schullandheim in Schieder, durch Besuche des Kinderrings in den Theatern in Marl und Gelsenkirchen.\r\n</p>\r\n\r\n<p>\r\nAußerhalb der Barbaraschule fanden der Schwimm- und Turnunterricht statt: Über einen Fußweg gingen die Schüler und Klassen zu nahe gelegenen Schwimm- und Turnhalle der Hauptschule, später fuhren sie mit einem Bus zum Hallenbad Westerholt. <br />\r\nDas Laufen zur Nachbarturnhalle fand ein Ende, als 1980 auf dem eigenen Schulhof eine Turnhalle gebaut wurde. Leider ging mit der neuen Turnhalle ein großer Teil der Spielfläche vom Schulhof verloren.\r\n</p>\r\n\r\n<p>\r\nIm Jahr 1975, als die Spielfläche größer war, schneite es seit dem frühen Morgen so kräftig, dass bis zur großen Pause der Schnee 25cm hoch lag. Die Frage war, ob die Kinder in der Pause draußen spielen dürften, auch wegen der Gefahr, dass mit Schneeballwerfen Verletzungsgefahr bestand. Um dieser entgegenzuwirken, wurden für alle Klassen ein Wettbewerb angesagt: „Welche Klasse baut den größten und schönsten Schneemann?“ Hierfür wurde die große Pause bis weit in die 3. Unterrichtsstunde verlängert. Der Eifer aller Klassen war riesengroß - an Schneeballwerfen wurde nicht gedacht - und die Schneemänner konnten sich sehen lassen!!!\r\n</p>\r\n\r\n<p role="author">Manfred Reusch, ehem. Rektor</p>\r\n', 'history', 1, '2015-07-10 10:00:00'),
(3, 'Die Kolonie Bertlich', '<p>\r\nAls im Ruhrgebiet die Zechen gebaut wurden kamen aus allen Teilen Deutschlands, aus Polen, Belgien und Holland Menschen und siedelten sich hier an, weil es Arbeit für sie gab.\r\n</p>\r\n\r\n<p>\r\nVor ungefähr 100 Jahren begann die Zeche Westerholt Kohle zu fördern. Um eine Siedlung für die Arbeiter zu errichten kaufte die königliche Bergwerksinspektion 1908 ein großes Gelände und begann im Juli 1912 mit dem Bau der Kolonie(Siedlung). Zu dieser Zeit befand sich hier noch ein Wald von Kiefern, Eichen und Buchen. Viele Straßennamen erinnern heute noch daran.\r\n</p>\r\n\r\n<p>\r\nIm März 1913 wurden die ersten Häuser fertig. Im Jahr 1914 waren fast alle 444 Wohnungen bezogen. Für die Kinder von Bertlich wurde 1913 eine Baracke mit zwei Räumen aufgestellt (Kolonieschule Bertlich). Hier wurden 130 Kinder unterrichtet. Mit der Fertigstellung weiterer Wohnungen wuchs die Zahl der Schulpflichtigen Kinder, so dass der Raum nicht mehr ausreichte. Im Januar 1914 errichtete die königliche Bergwerksinspektion einen zweistöckigen Schulneubau.\r\n</p>\r\n\r\n<p>\r\nDer Neubau hatte 8 Klassen, 4 Klassen für  die katholischen und 4 Klassen für die evangelischen Kinder. Erst später wurde der heutige Seitenflügel mit vier weiteren Räumen angebaut. Im Sommer 1915 bekam der Schulhof eine Mauer. 1920 arbeiteten die Väter von 406 Schulkindern, insgesamt besuchten 420 Kinder die Schule, als Bergmänner in Westerholt. Bertlich hatte 1920 insgesamt 2836 Einwohner und 207 Häuser.\r\n</p>\r\n\r\n<p>\r\nErst Anfang 1931 begann der Bau einer katholischen Kirche, im September wurde Richtfest gefeiert und im Juni 1932 erhielt die Johanneskirche eine Glocke.\r\n</p>\r\n\r\n<p>\r\nEin Flügel der Schule wurde im März 1945 durch eine Jagdbombe zerstört und war erst im Herbst 1951 wieder bezugsfertig. Den Namen „Barbaraschule“ erhielt die Schule erst 1969. Zuvor hieß sie „Glückaufschule“.\r\n</p>\r\n\r\n<p role="author">Entnommen aus verschiedenen vorliegenden Festschriften</p>', 'history', 1, '2015-07-10 10:00:00'),
(4, 'Die Barbaraschule führt ein Musical auf', '<p>\r\nDie Kinder der Klassen 3 und 4 der Barbaraschule führten am 27. Februar 2015 in der Turnhalle der Schule, unter der Regie von Frau Terdenge, das Musical „Als die Tiere die Schimpfwörter leid waren“ auf. Am Klavier wurden sie musikalisch von Herrn Marcel Sander, aus der Musikschule, begleitet. Durch das Stück führte Ansager Philipp Heitmann.\r\n</p>\r\n\r\n<p>\r\nIn dem Musical stritten sich Kinder, dabei fielen die üblichen Schimpfwörter wie „dumme Kuh“, „fettes Sau“ usw. Darüber waren die Tiere böse. Die Ratte Rasko (Nazanin Nazari) berufte eine Tierversammlung ein. Mit Hilfe der Eule Eulalia (Gillian Best) brachten die Tiere die Kinder dazu, über ihr Verhalten nachzudenken. Die Schauspieler spielten, sangen, tanzten und hatten viel Spaß. Die Tiere trugen tolle Kostüme, die von Müttern gebastelt und geschneidert wurden. Alle Kinder zeigten vollen Einsatz.\r\n</p>\r\n<p>\r\nFolgende Kinder spielten die Tiere: <br>\r\n„Ratte Rasko“ – Nazanin Nazari; „Eule Eulalia“ – Gillian Best; „Esel Eduat“ – Leonie Tschirne; „Kuh Kunigunde“ -  Eva Herden; „Ziege Zilly“ – Lea Geyer; „Schaf Scheribert“ – Beria Baser; „Kamel Knut“ – Marie Hoffman; „Schwein Schwate“ – Melina Sternmann; „Schlange Mrs Sippy“ – Sarah Hermann; „Hase Horsty“ – Louis Karaus.\r\n</p>\r\n\r\n<p>\r\nLouis Karaus war am Morgen spontan eingesprungen, da der eigentliche Hase erkrankt war. \r\nBelohnt wurden die Kinder mit viel Applaus.\r\n</p>\r\n\r\n<p role="author">Herten, 27.02.2015 - Katrin Schirmacher</p>', 'activity', 1, '2015-07-10 10:00:00'),
(5, 'Angaben gemäß §5 TMG:', '<p>\r\nBarbaraschule Herten<br>\r\nWallstraße 32<br>\r\n45701 Herten\r\n</p>\r\n\r\n<p><strong>Vertreten durch:</strong></p>\r\n<p>Ulrike Terdenge, Schulleiterin</p>\r\n<p><strong>Kontakt:</strong></p>\r\n\r\n<p>\r\nTelefon: <a role="fon" title="Telefon"> (0 23 66) 303 810</a><br>\r\nFax: <a role="fax" title="Fax"> (0 23 66) 303 813</a><br>\r\nE-Mail: <a role="mail" title="E-Mail" href="mailto:barbaraschule@herten.de">barbaraschule@herten.de</a>\r\n</p>\r\n					\r\n<p><strong>Schulträger</strong></p>\r\n<p>\r\nStadt Herten<br>\r\nKurt-Schumacher-Str. 2<br>\r\n45699 Herten\r\n</p>', 'impressum', 1, '2015-07-10 10:00:00'),
(6, 'Haftungsausschluss (Disclaimer)', '<p><strong>Haftung für Inhalte</strong></p>\r\n<p>\r\nAls Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.\r\n</p>\r\n\r\n<p><strong>Haftung für Links</strong></p>\r\n<p>\r\nUnser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.\r\n</p>\r\n\r\n<p><strong>Urheberrecht</strong></p> \r\n<p>\r\nDie durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.\r\n</p>', 'impressum', 1, '2015-07-10 10:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `date`
--

CREATE TABLE IF NOT EXISTS `date` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `description` text,
  `show_date` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `groupname` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `image`
--

INSERT INTO `image` (`id`, `title`, `url`, `date`, `groupname`) VALUES
(1, 'Kollegium', 'kollegium.jpg', '2015-07-10 08:00:00', 1),
(2, '3a', '3a.jpg', '2015-07-10 08:00:00', 2),
(3, '3b', '3b.jpg', '2015-07-10 08:00:00', 2),
(4, '3c', '3c.jpg', '2015-07-10 08:00:00', 2),
(5, '4a', '4a.jpg', '2015-07-10 08:00:00', 3),
(6, '4b', '4b.jpg', '2015-07-10 08:00:00', 3),
(7, '4c', '4c.jpg', '2015-07-10 08:00:00', 3),
(8, 'Mit Eltern und und weiteren Gästen gefüllter Schulhof', 'hundert_jahre_barbaraschule_01.jpg', '2015-07-10 10:00:00', 4),
(9, '100 Jahre Barbaraschule Herten', 'hundert_jahre_barbaraschule_02.jpg', '2015-07-10 10:00:00', 4),
(10, 'Kurze Worte von Bürgermeister Uli Paetzel', 'hundert_jahre_barbaraschule_03.jpg', '2015-07-10 10:00:00', 4),
(11, 'Zur Feier des tages steigen Luftballons empor', 'hundert_jahre_barbaraschule_04.jpg', '2015-07-10 10:00:00', 4),
(12, 'Schulleiterin Ulrike Terdenge begrüsst die kleinen und großen Gäste', 'hundert_jahre_barbaraschule_05.jpg', '2015-07-10 10:00:00', 4),
(13, 'Ein Ständchen auf die 100', 'hundert_jahre_barbaraschule_06.jpg', '2015-07-10 10:00:00', 4),
(14, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_01.jpg', '2015-07-10 10:00:00', 5),
(15, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_02.jpg', '2015-07-10 10:00:00', 5),
(16, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_03.jpg', '2015-07-10 10:00:02', 5),
(17, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_04.jpg', '2015-07-10 10:00:00', 5),
(18, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_05.jpg', '2015-07-10 10:00:00', 5),
(19, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_06.jpg', '2015-07-10 10:00:00', 5),
(20, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_07.jpg', '2015-07-10 10:00:00', 5),
(21, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_08.jpg', '2015-07-10 10:00:00', 5),
(22, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_09.jpg', '2015-07-10 10:00:00', 5),
(23, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_10.jpg', '2015-07-10 10:00:00', 5),
(24, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_11.jpg', '2015-07-10 10:00:00', 5),
(25, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_12.jpg', '2015-07-10 10:00:00', 5),
(26, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_13.jpg', '2015-07-10 10:00:00', 5),
(27, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_14.jpg', '2015-07-10 10:00:00', 5),
(28, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_15.jpg', '2015-07-10 10:00:00', 5),
(29, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_16.jpg', '2015-07-10 10:00:00', 5),
(30, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_17.jpg', '2015-07-10 10:00:00', 5),
(31, 'Als die Tiere die Schimpfwörter leid waren', 'als_die_tiere_die_schimpfwoerter_leid_waren_18.jpg', '2015-07-10 10:00:00', 5),
(32, 'Schüler in ihren Kostümen', 'als_die_tiere_die_schimpfwoerter_leid_waren_19.jpg', '2015-07-10 10:00:00', 5),
(33, 'Die Maus begeistert', 'als_die_tiere_die_schimpfwoerter_leid_waren_20.jpg', '2015-07-10 10:00:00', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `imagegroup`
--

CREATE TABLE IF NOT EXISTS `imagegroup` (
`id` int(11) NOT NULL,
  `group_title` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `imagegroup`
--

INSERT INTO `imagegroup` (`id`, `group_title`, `created`) VALUES
(1, 'Kollegium', '2015-07-10 08:00:00'),
(2, '3. Klassen', '2015-07-10 08:00:00'),
(3, '4. Klassen', '2015-07-10 08:00:00'),
(4, '100 Jahre Barbaraschule Herten', '2015-07-10 10:00:00'),
(5, 'Als die Tiere die Schimpfwörter leid waren', '2015-07-10 10:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `password`, `name`, `email`) VALUES
(1, '35689', 'Dirk Buddenbrock', 'dirk-bu@arcor.de'),
(2, 'barbaraschule2015', 'Barbaraschule Herten', 'barbaraschule@herten.de');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `date`
--
ALTER TABLE `date`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `imagegroup`
--
ALTER TABLE `imagegroup`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT für Tabelle `date`
--
ALTER TABLE `date`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `image`
--
ALTER TABLE `image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT für Tabelle `imagegroup`
--
ALTER TABLE `imagegroup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
