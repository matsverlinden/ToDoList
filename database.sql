CREATE DATABASE IF NOT EXISTS `todo`;
USE `todo`;

DROP TABLE IF EXISTS `lijsten`;


CREATE TABLE `lijsten`(
	`lijst_id` INT NOT NULL AUTO_INCREMENT,
	`lijst_naam` VARCHAR(255) NOT NULL,
	PRIMARY KEY(`lijst_id`)
);

DROP TABLE IF EXISTS `taken`;
CREATE TABLE `taken`(
	`taak_id` INT NOT NULL AUTO_INCREMENT,
	`taak_naam` VARCHAR(255) NOT NULL,
	`taak_beschrijving` TEXT NOT NULL,
	`taak_tijd` DATE NOT NULL,
	`taak_status` TEXT NOT NULL,
	`lijst_id` INT NOT NULL,
	PRIMARY KEY(`taak_id`)
);

INSERT INTO `lijsten` (`lijst_naam`)
VALUES ('Programmeren');

INSERT INTO `taken` (`lijst_id`,`taak_naam`, `taak_beschrijving`, `taak_tijd`, `taak_status`)
VALUES ('1' ,'Todo', 'Maak de opdracht To do list af', '2019-03-02', 'bezig');