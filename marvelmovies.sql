include("DBCONNECT.php");

DROP TABLE IF EXISTS `marvelmovies`;
CREATE TABLE `marvelmovies` (
  `marvelMovieID` int(4) NOT NULL AUTO_INCREMENT,
  `yearReleased` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `productionStudio` varchar(50) NOT NULL,
  `notes` varchar(250) NOT NULL,
  PRIMARY KEY (`marvelMovieID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `marvelmovies` (`marvelMovieID`, `yearReleased`, `title`, `productionStudio`, `notes`) VALUES
(1,	'1944',	'Captain America',	'Republic Pictures',	'Serial film released in 15 chapters. Marvel was then known as Timely Comics.'),
(2,	'1968',	'Howard the Duck',	'Universal Studios',	'Co-produced by Lucasfilm.'),
(3,	'1989',	'The Punisher',	'Live Entertainment',	'Direct-to-video in US; limited theatrical release internationally.'),
(4,	'1990',	'Captain America',	'21st Century Film Corporation',	'Co-produced by Jadran Film. Direct-to-video in US; limited theatrical release internationally.'),
(5,	'1994',	'The Fantastic Four',	'Constantin Film Produktion',	'Unreleased'),
(6,	'1998',	'Blade',	'New Line Cinema',	''),
(7,	'2000',	'X-Men',	'20th Century Fox',	''),
(8,	'2002',	'Blade II',	'New Line Cinema',	''),
(9,	'2002',	'Spider-Man',	'Columbia Pictures',	'Nominated for 2 Oscars'),
(10,	'2003',	'Daredevil',	'20th Century Fox',	''),
(11,	'2003',	'X2',	'20th Century Fox',	''),
(12,	'2003',	'Hulk',	'Universal Studios',	''),
(13,	'2004',	'The Punisher',	'Artisan Entertainment',	'Distributed by Columbia Pictures internationally'),
(14,	'2004',	'Spider-Man 2',	'Columbia Pictures',	'Won 1 Oscar, nominated for 2 more'),
(15,	'2004',	'Blade Trinity',	'New Line Cinema',	''),
(16,	'2005',	'Elektra',	'20th Century Fox',	''),
(17,	'2005',	'Fantastic Four',	'20th Century Fox',	'Turned out to be rubbish'),
(18,	'2006',	'X-Men: The Last Stand',	'20th Century Fox',	''),
(19,	'2007',	'Ghost Rider',	'Columbia Pictures',	''),
(20,	'2007',	'Spider-Man 3',	'Columbia Pictures',	''),
(21,	'2007',	'Fantastic Four: Rise of the Silver Surfer',	'20th Century Fox',	''),
(22,	'2008',	'Iron Man',	'Marvel Studios',	'Start of the MCU'),
(23,	'2008',	'The Incredible Hulk',	'Marvel Studios',	'Distributed by Universal Studios'),
(24,	'2008',	'Punisher: War Zone',	'Marvel Studios',	'Produced under Marvel Knights banner. Distributed by Lions Gate Entertainment domestically and Columbia Pictures overseas. Not part of MCU.'),
(25,	'2009',	'X-Men Origins: Wolverine',	'20th Century Fox',	''),
(26,	'2010',	'Iron Man 2',	'Marvel Studios',	'Nominated for 1 Oscar'),
(27,	'2011',	'Thor',	'Marvel Studios',	'Distributed by Paramount Pictures'),
(28,	'2011',	'X-Men: First Class',	'20th Century Fox',	''),
(29,	'2011',	'Captain America: The First Avenger',	'Marvel Studios',	'Distributed by Paramount Pictures'),
(30,	'2012',	'Ghost Rider: Spirit of Vengeance',	'Columbia Pictyres',	'Not part of MCU'),
(31,	'2012',	'The Avengers',	'Marvel Studios',	'Walt Disney Studios Motion Pictures starts distributing Marvel Studios films. Nominated for 1 Oscar.'),
(32,	'2012',	'The Amazing Spiderman',	'Columbia Pictures',	''),
(33,	'2013',	'Iron Man 3',	'Marvel Studios',	'Nominated for 1 Oscar'),
(34,	'2013',	'The Wolverine',	'20th Century Fox',	''),
(35,	'2013',	'Thor: The Dark World',	'Marvel Studios',	''),
(36,	'2014',	'Captain America: The Winter Soldier',	'Marvel Studios',	'Nominated for 1 Oscar'),
(37,	'2014',	'The Amazing Spider-Man 2',	'Columbia Pictures',	''),
(38,	'2014',	'X-Men: Days of Future Past',	'20th Century Fox',	'Nominated for 1 Oscar'),
(39,	'2014',	'Guardians of the Galaxy',	'Marvel Studios',	'Nominated for 2 Oscars'),
(40,	'2015',	'Avengers: Age of Ultron',	'Marvel Studios',	''),
(41,	'2015',	'Ant-Man',	'Marvel Studios',	''),
(42,	'2015',	'Fantastic Four',	'20th Century Fox',	'');

-- 2016-03-13 11:59:02
