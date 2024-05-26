
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db`;

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Home'),
(2, 'Softwares'),
(3, 'Algoritmos'),
(4, 'Arduino'),
(5, 'Servers'),
(6, 'Games'),
(7, 'Enigmas'),
(8, 'Websites');


CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_name` text NOT NULL,
  `com_content` text NOT NULL,
  `com_mail` text NOT NULL,
  `com_avatar` text NOT NULL,
  `com_post` int(11) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `comment` (`com_id`, `com_name`, `com_content`, `com_mail`, `com_avatar`, `com_post`) VALUES
(1, 'teste', 'teste', 'teste', 'twitter.png', 1);


CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_date` text NOT NULL,
  `post_author` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_cat` int(11) NOT NULL,
  `post_desc` text NOT NULL,
  `post_key` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `post` (`post_id`, `post_title`, `post_date`, `post_author`, `post_image`, `post_content`, `post_cat`, `post_desc`, `post_key`) VALUES
(1, 'teste', '03-22-19', 'teste', 'teste.png', 'O que Ã© Lorem Ipsum?\r\nLorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu nÃ£o sÃ³ a cinco sÃ©culos, como tambÃ©m ao salto para a editoraÃ§Ã£o eletrÃ´nica, permanecendo essencialmente inalterado. Se popularizou na dÃ©cada de 60, quando a Letraset lanÃ§ou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoraÃ§Ã£o eletrÃ´nica como Aldus PageMaker.', 2, 'O que Ã© Lorem Ipsum?\r\nLorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu nÃ£o sÃ³ a cinco sÃ©culos, como tambÃ©m ao salto para a editoraÃ§Ã£o eletrÃ´nica, permanecendo essencialmente inalterado. Se popularizou na dÃ©cada de 60, quando a Letraset lanÃ§ou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoraÃ§Ã£o eletrÃ´nica como Aldus PageMaker.', '');


CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `user` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'alexei', '261dddbd9d81f6d8e5ea8ac96ab2cc9d');