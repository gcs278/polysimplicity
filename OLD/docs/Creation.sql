SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `politicalsimplicity_candidates` ;
CREATE SCHEMA IF NOT EXISTS `politicalsimplicity_candidates` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `politicalsimplicity_candidates` ;

-- -----------------------------------------------------
-- Table `politicalsimplicity_candidates`.`personal_information`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `politicalsimplicity_candidates`.`personal_information` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `gender` VARCHAR(45) NOT NULL,
  `birth_date` DATE NULL,
  `birth_state` VARCHAR(128) NOT NULL,
  `party` VARCHAR(128) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `politicalsimplicity_candidates`.`candidates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `politicalsimplicity_candidates`.`candidates` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(128) NOT NULL,
  `middle_name` VARCHAR(128) NOT NULL,
  `last_name` VARCHAR(128) NOT NULL,
  `personal_id` INT NOT NULL,
  `image` LONGBLOB NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_candidates_personal1_idx` (`personal_id` ASC),
  CONSTRAINT `fk_candidates_personal1`
    FOREIGN KEY (`personal_id`)
    REFERENCES `politicalsimplicity_candidates`.`personal_information` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `politicalsimplicity_candidates`.`views_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `politicalsimplicity_candidates`.`views_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `politicalsimplicity_candidates`.`views`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `politicalsimplicity_candidates`.`views` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `simple` VARCHAR(60) NOT NULL,
  `detail` TEXT NULL,
  `links` VARCHAR(1000) NULL,
  `views_type_id` INT NOT NULL,
  `candidates_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_views_views_type1_idx` (`views_type_id` ASC),
  INDEX `fk_views_candidates1_idx` (`candidates_id` ASC),
  CONSTRAINT `fk_views_views_type1`
    FOREIGN KEY (`views_type_id`)
    REFERENCES `politicalsimplicity_candidates`.`views_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_views_candidates1`
    FOREIGN KEY (`candidates_id`)
    REFERENCES `politicalsimplicity_candidates`.`candidates` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `politicalsimplicity_candidates`.`positions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `politicalsimplicity_candidates`.`positions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `term_start` DATE NOT NULL,
  `term_end` DATE NULL,
  `status` ENUM('Current','Previous','Running_For') NOT NULL DEFAULT 'Previous',
  `candidates_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_positions_candidates1_idx` (`candidates_id` ASC),
  CONSTRAINT `fk_positions_candidates1`
    FOREIGN KEY (`candidates_id`)
    REFERENCES `politicalsimplicity_candidates`.`candidates` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `roles` (`id`, `name`, `description`) VALUES(1, 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `roles` (`id`, `name`, `description`) VALUES(2, 'admin', 'Administrative user, has access to everything.');

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_login` int(10) UNSIGNED,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) UNSIGNED NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
