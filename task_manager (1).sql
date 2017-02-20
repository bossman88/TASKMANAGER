-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL,
  `task_description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`id`, `task_name`, `task_description`) VALUES
(1,	'Build a homepage',	'Build a homepage.'),
(2,	'Ask Sean to make some tea',	'Ask Sean to make some tea. Make sure he makes good quality. Have someone to check on him.'),
(3,	'Make Tea',	'This is Sean\'s task'),
(4,	'Watch Sean make tea',	'This is Kosta\'s task'),
(5,	'Punish Sean',	'For making bad tea');

DROP TABLE IF EXISTS `tasks_have_users`;
CREATE TABLE `tasks_have_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `task_id` (`task_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tasks_have_users_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  CONSTRAINT `tasks_have_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `user_name`, `email`) VALUES
(1,	'Vladimir',	'vbossmanv@gmail.com'),
(2,	'Rutger',	'rutger_10@hotmail.com'),
(3,	'Sean',	'Sean@porn.xxx'),
(4,	'Kosta',	'Kosta@vassos.org');

-- 2017-02-20 15:35:34
