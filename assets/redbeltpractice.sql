SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `redbeltpractice` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `redbeltpractice` ;

-- -----------------------------------------------------
-- Table `redbeltpractice`.`authors`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `redbeltpractice`.`authors` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL ,
  `created_at` DATETIME NULL ,
  `modified_at` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `redbeltpractice`.`books`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `redbeltpractice`.`books` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NULL ,
  `authors_id` INT NOT NULL ,
  `created_at` DATETIME NULL ,
  `modified_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `authors_id`) ,
  INDEX `fk_books_authors_idx` (`authors_id` ASC) ,
  CONSTRAINT `fk_books_authors`
    FOREIGN KEY (`authors_id` )
    REFERENCES `redbeltpractice`.`authors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `redbeltpractice`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `redbeltpractice`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL ,
  `alias` VARCHAR(255) NULL ,
  `email` VARCHAR(255) NULL ,
  `password` VARCHAR(255) NULL ,
  `created_at` DATETIME NULL ,
  `modified_at` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `redbeltpractice`.`reviews`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `redbeltpractice`.`reviews` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `content` TEXT NULL ,
  `rating` DECIMAL(10,0) NULL ,
  `created_at` DATETIME NULL ,
  `modified_at` DATETIME NULL ,
  `books_id` INT NOT NULL ,
  `books_authors_id` INT NOT NULL ,
  `users_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_reviews_books1_idx` (`books_id` ASC, `books_authors_id` ASC) ,
  INDEX `fk_reviews_users1_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_reviews_books1`
    FOREIGN KEY (`books_id` , `books_authors_id` )
    REFERENCES `redbeltpractice`.`books` (`id` , `authors_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_reviews_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `redbeltpractice`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `redbeltpractice` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
