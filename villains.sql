-- Run this in MySQL workbench. You can put this in any database you have
CREATE TABLE IF NOT EXISTS `villains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL, # ie: Venom, Carnage, Shriek
  `first_name` varchar(25) NOT NULL, # ie: Eddy
  `last_name` varchar(25) NOT NULL, # ie: Brock
  `first_publication` datetime NOT NULL, # the first appearance of this character
  `powers` varchar(500) NULL, # a list of powers the villain has
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
