-- MySQL Script generated by MySQL Workbench
-- Mon Feb 26 11:57:07 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Personas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Personas` (
  `idPersonas` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(30) NOT NULL,
  `Apellidos` VARCHAR(50) NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `Ciudad` VARCHAR(45) NOT NULL,
  `Delegación` VARCHAR(45) NOT NULL,
  `Calle` VARCHAR(45) NOT NULL,
  `Numero ext` VARCHAR(6) NOT NULL,
  `Nummero int` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`idPersonas`),
  UNIQUE INDEX `idPersonas_UNIQUE` (`idPersonas` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Pacientes` (
  `idPacientes` INT NOT NULL AUTO_INCREMENT,
  `Enfermedades` VARCHAR(200) NULL,
  `Alergias` VARCHAR(200) NULL,
  `Personas_id` INT NOT NULL,
  PRIMARY KEY (`idPacientes`),
  INDEX `fk_Pacientes_Personas_idx` (`Personas_id` ASC) VISIBLE,
  CONSTRAINT `fk_Pacientes_Personas`
    FOREIGN KEY (`Personas_id`)
    REFERENCES `mydb`.`Personas` (`idPersonas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Departamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Departamentos` (
  `idDepartamentos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDepartamentos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Medicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Medicos` (
  `idMedicos` INT NOT NULL AUTO_INCREMENT,
  `Departamentos_id` INT NOT NULL,
  `Personas_id` INT NOT NULL,
  PRIMARY KEY (`idMedicos`),
  INDEX `fk_Medicos_Departamentos1_idx` (`Departamentos_id` ASC) VISIBLE,
  INDEX `fk_Medicos_Personas1_idx` (`Personas_id` ASC) VISIBLE,
  CONSTRAINT `fk_Medicos_Departamentos1`
    FOREIGN KEY (`Departamentos_id`)
    REFERENCES `mydb`.`Departamentos` (`idDepartamentos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Medicos_Personas1`
    FOREIGN KEY (`Personas_id`)
    REFERENCES `mydb`.`Personas` (`idPersonas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Telefonos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Telefonos` (
  `idTelefonos` INT NOT NULL AUTO_INCREMENT,
  `Código` VARCHAR(3) NOT NULL,
  `Número` VARCHAR(10) NOT NULL,
  `Tipo` ENUM("Casa", "Trabajo", "Personal") NOT NULL,
  PRIMARY KEY (`idTelefonos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Personas_has_Telefonos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Personas_has_Telefonos` (
  `Personas_idPersonas` INT NOT NULL,
  `Telefonos_idTelefonos` INT NOT NULL,
  PRIMARY KEY (`Personas_idPersonas`, `Telefonos_idTelefonos`),
  INDEX `fk_Personas_has_Telefonos_Telefonos1_idx` (`Telefonos_idTelefonos` ASC) VISIBLE,
  INDEX `fk_Personas_has_Telefonos_Personas1_idx` (`Personas_idPersonas` ASC) VISIBLE,
  CONSTRAINT `fk_Personas_has_Telefonos_Personas1`
    FOREIGN KEY (`Personas_idPersonas`)
    REFERENCES `mydb`.`Personas` (`idPersonas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personas_has_Telefonos_Telefonos1`
    FOREIGN KEY (`Telefonos_idTelefonos`)
    REFERENCES `mydb`.`Telefonos` (`idTelefonos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Correos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Correos` (
  `idCorreos` INT NOT NULL AUTO_INCREMENT,
  `Correo` VARCHAR(65) NOT NULL,
  `Personas_id` INT NOT NULL,
  PRIMARY KEY (`idCorreos`),
  INDEX `fk_Correos_Personas1_idx` (`Personas_id` ASC) VISIBLE,
  CONSTRAINT `fk_Correos_Personas1`
    FOREIGN KEY (`Personas_id`)
    REFERENCES `mydb`.`Personas` (`idPersonas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TiposUsuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TiposUsuarios` (
  `idTiposUsuarios` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTiposUsuarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `idUsuarios` INT NOT NULL AUTO_INCREMENT,
  `Contraseña` VARCHAR(45) NOT NULL,
  `Tipo_Usuario_id` INT NOT NULL,
  `Correos_id` INT NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  INDEX `fk_Usuarios_Tipos Usuarios1_idx` (`Tipo_Usuario_id` ASC) VISIBLE,
  INDEX `fk_Usuarios_Correos1_idx` (`Correos_id` ASC) VISIBLE,
  CONSTRAINT `fk_Usuarios_Tipos Usuarios1`
    FOREIGN KEY (`Tipo_Usuario_id`)
    REFERENCES `mydb`.`TiposUsuarios` (`idTiposUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuarios_Correos1`
    FOREIGN KEY (`Correos_id`)
    REFERENCES `mydb`.`Correos` (`idCorreos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`TiposUsuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`TiposUsuarios` (`idTiposUsuarios`, `Nombre`) VALUES (1, 'Administrador');
INSERT INTO `mydb`.`TiposUsuarios` (`idTiposUsuarios`, `Nombre`) VALUES (2, 'Usuario normal');

COMMIT;

