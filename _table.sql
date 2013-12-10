CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(700) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tstamp` varchar(150) NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
