CREATE TABLE IF NOT EXISTS `projects` (
  `hash` char(8) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `projects` (`hash`, `name`) VALUES
('k345hf23', 'Testprojekt'),
('1vc2bn34', 'Blargh');

CREATE TABLE IF NOT EXISTS `strings` (
  `hash` char(8) NOT NULL,
  `original` text NOT NULL,
  `project` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `translations` (
  `hash` char(8) NOT NULL,
  `string` char(8) NOT NULL,
  `translation` text NOT NULL,
  `language` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
