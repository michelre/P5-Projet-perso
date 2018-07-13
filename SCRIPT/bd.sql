--
-- Structure de la table `comment`
--
DROP TABLE comment;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(15) AUTO_INCREMENT PRIMARY KEY,
  `author` VARCHAR(255) DEFAULT NULL,
  `comment` TEXT DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  FOREIGN KEY (id) REFERENCES article(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
