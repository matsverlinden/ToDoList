CREATE DATABASE IF NOT EXISTS `todo`;
USE `todo`;

DROP TABLE IF EXISTS `lijsten`;
DROP TABLE IF EXISTS `taken`;

CREATE TABLE `lijsten`(
	`lijst_id` INT NOT NULL AUTO_INCREMENT,
	`lijst_naam` VARCHAR(255) NOT NULL,
	PRIMARY KEY(`lijst_id`)
);

CREATE TABLE `taken`(
	`taak_id` INT NOT NULL AUTO_INCREMENT,
	`taak_naam` VARCHAR(255) NOT NULL,
	`taak_beschrijving` TEXT NOT NULL,
	`taak_status` TEXT NOT NULL,
	`taak_datum` DATE  NOT NULL,
	PRIMARY KEY(`taak_id`)
);

INSERT INTO `lijsten` (`lijst_naam`)
VALUES ('Programmeren');

INSERT INTO `taken` (`taak_naam`, `taak_beschrijving`, `taak_status`, `taak_datum`)
VALUES ('Todo', 'Maak de opdracht To do list af', 'bezig', '2019-02-27');