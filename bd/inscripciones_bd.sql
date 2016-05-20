SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `inscripciones_bd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `inscripciones_bd` ;

-- -----------------------------------------------------
-- Table `inscripciones_bd`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`profesor` (
  `idProfesor` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idProfesor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`alumno` (
  `idAlumno` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idAlumno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`persona` (
  `idPersona` INT NOT NULL AUTO_INCREMENT,
  `cedula` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NULL,
  `profesor_idProfesor` INT NOT NULL,
  `alumno_idAlumno` INT NOT NULL,
  PRIMARY KEY (`idPersona`),
  INDEX `fk_persona_profesor_idx` (`profesor_idProfesor` ASC),
  INDEX `fk_persona_alumno1_idx` (`alumno_idAlumno` ASC),
  CONSTRAINT `fk_persona_profesor`
    FOREIGN KEY (`profesor_idProfesor`)
    REFERENCES `inscripciones_bd`.`profesor` (`idProfesor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_persona_alumno1`
    FOREIGN KEY (`alumno_idAlumno`)
    REFERENCES `inscripciones_bd`.`alumno` (`idAlumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`perfil` (
  `idPerfil` INT NOT NULL AUTO_INCREMENT,
  `tipoPerfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPerfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `persona_idPersona` INT NOT NULL,
  `perfil_idPerfil` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_usuario_persona1_idx` (`persona_idPersona` ASC),
  INDEX `fk_usuario_perfil1_idx` (`perfil_idPerfil` ASC),
  CONSTRAINT `fk_usuario_persona1`
    FOREIGN KEY (`persona_idPersona`)
    REFERENCES `inscripciones_bd`.`persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_perfil1`
    FOREIGN KEY (`perfil_idPerfil`)
    REFERENCES `inscripciones_bd`.`perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`curso` (
  `idCurso` INT NOT NULL AUTO_INCREMENT,
  `nombreCurso` VARCHAR(45) NOT NULL,
  `profesor_idProfesor` INT NOT NULL,
  PRIMARY KEY (`idCurso`),
  INDEX `fk_curso_profesor1_idx` (`profesor_idProfesor` ASC),
  CONSTRAINT `fk_curso_profesor1`
    FOREIGN KEY (`profesor_idProfesor`)
    REFERENCES `inscripciones_bd`.`profesor` (`idProfesor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`inscripcion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`inscripcion` (
  `idInscripcion` INT NOT NULL AUTO_INCREMENT,
  `costo` DOUBLE NOT NULL,
  `alumno_idAlumno` INT NOT NULL,
  `curso_idCurso` INT NOT NULL,
  `usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idInscripcion`),
  INDEX `fk_inscripcion_alumno1_idx` (`alumno_idAlumno` ASC),
  INDEX `fk_inscripcion_curso1_idx` (`curso_idCurso` ASC),
  INDEX `fk_inscripcion_usuario1_idx` (`usuario_idUsuario` ASC),
  CONSTRAINT `fk_inscripcion_alumno1`
    FOREIGN KEY (`alumno_idAlumno`)
    REFERENCES `inscripciones_bd`.`alumno` (`idAlumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscripcion_curso1`
    FOREIGN KEY (`curso_idCurso`)
    REFERENCES `inscripciones_bd`.`curso` (`idCurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscripcion_usuario1`
    FOREIGN KEY (`usuario_idUsuario`)
    REFERENCES `inscripciones_bd`.`usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`salon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`salon` (
  `idSalon` INT NOT NULL AUTO_INCREMENT,
  `bloque` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `capacidad` INT NOT NULL,
  PRIMARY KEY (`idSalon`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`seccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`seccion` (
  `idSeccion` INT NOT NULL AUTO_INCREMENT,
  `seccion` VARCHAR(45) NOT NULL,
  `curso_idCurso` INT NOT NULL,
  `salon_idSalon` INT NOT NULL,
  PRIMARY KEY (`idSeccion`),
  INDEX `fk_seccion_curso1_idx` (`curso_idCurso` ASC),
  INDEX `fk_seccion_salon1_idx` (`salon_idSalon` ASC),
  CONSTRAINT `fk_seccion_curso1`
    FOREIGN KEY (`curso_idCurso`)
    REFERENCES `inscripciones_bd`.`curso` (`idCurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_seccion_salon1`
    FOREIGN KEY (`salon_idSalon`)
    REFERENCES `inscripciones_bd`.`salon` (`idSalon`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`dia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`dia` (
  `idDia` INT NOT NULL AUTO_INCREMENT,
  `dia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`hora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`hora` (
  `idHora` INT NOT NULL AUTO_INCREMENT,
  `horaInicial` TIME NOT NULL,
  `horaFinal` TIME NOT NULL,
  PRIMARY KEY (`idHora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`seccion_has_dia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`seccion_has_dia` (
  `seccion_idSeccion` INT NOT NULL,
  `dia_idDia` INT NOT NULL,
  PRIMARY KEY (`seccion_idSeccion`, `dia_idDia`),
  INDEX `fk_seccion_has_dia_dia1_idx` (`dia_idDia` ASC),
  INDEX `fk_seccion_has_dia_seccion1_idx` (`seccion_idSeccion` ASC),
  CONSTRAINT `fk_seccion_has_dia_seccion1`
    FOREIGN KEY (`seccion_idSeccion`)
    REFERENCES `inscripciones_bd`.`seccion` (`idSeccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_seccion_has_dia_dia1`
    FOREIGN KEY (`dia_idDia`)
    REFERENCES `inscripciones_bd`.`dia` (`idDia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `inscripciones_bd`.`dia_has_hora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inscripciones_bd`.`dia_has_hora` (
  `dia_idDia` INT NOT NULL,
  `hora_idHora` INT NOT NULL,
  PRIMARY KEY (`dia_idDia`, `hora_idHora`),
  INDEX `fk_dia_has_hora_hora1_idx` (`hora_idHora` ASC),
  INDEX `fk_dia_has_hora_dia1_idx` (`dia_idDia` ASC),
  CONSTRAINT `fk_dia_has_hora_dia1`
    FOREIGN KEY (`dia_idDia`)
    REFERENCES `inscripciones_bd`.`dia` (`idDia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dia_has_hora_hora1`
    FOREIGN KEY (`hora_idHora`)
    REFERENCES `inscripciones_bd`.`hora` (`idHora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
