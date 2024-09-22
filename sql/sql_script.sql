CREATE DATABASE well_being;

USE well_being;

CREATE TABLE `rating` (
  `user_id` int NOT NULL,
  `rating_id` int NOT NULL AUTO_INCREMENT,
  `happiness` varchar(30) NOT NULL,
  `workload` varchar(30) NOT NULL,
  `anxiety` varchar(30) NOT NULL,
  `rated_date` date DEFAULT (curdate()),
  PRIMARY KEY (`rating_id`),
  KEY `fk_rating` (`user_id`),
  CONSTRAINT `fk_rating` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE `user_info` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `uni_userinfo` (`username`)
);



