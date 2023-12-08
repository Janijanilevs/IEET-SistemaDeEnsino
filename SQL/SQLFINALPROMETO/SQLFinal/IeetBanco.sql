-- MySQL Script generated by MySQL Workbench
-- Tue Dec  5 07:37:33 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ieetbanco: Final 05/12/23
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ieetbanco
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ieetbanco` DEFAULT CHARACTER SET utf8 ;
USE `ieetbanco` ;

-- -----------------------------------------------------
-- Table `ieetbanco`.`ieetadmin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`ieetadmin` (
  `id` INT(11) NOT NULL DEFAULT 123,
  `nome` VARCHAR(45) NULL DEFAULT 'IeetAdmin',
  `login` VARCHAR(45) NULL DEFAULT 'admin',
  `senha` VARCHAR(100) NULL DEFAULT '$2y$10$xmhMN1vRHtI9DdtSQwD.a.7vRqMYt3HGwoHxEbwheg3NtQ49dkvyy',
  `tipo` VARCHAR(45) NULL DEFAULT '1',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`direcao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`direcao` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `login` VARCHAR(45) NULL DEFAULT NULL,
  `senha` VARCHAR(100) NULL DEFAULT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT '2',
  `Ieet_idUsuarioAdmin` INT(11) NOT NULL DEFAULT 123,
  `cnpj` VARCHAR(45) NULL DEFAULT NULL,
  `situacao` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Usuario_Direcao_Ieet1_idx` (`Ieet_idUsuarioAdmin` ASC),
  CONSTRAINT `fk_Usuario_Direcao_Ieet1`
    FOREIGN KEY (`Ieet_idUsuarioAdmin`)
    REFERENCES `ieetbanco`.`ieetadmin` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 23
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`turma` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `Direcao_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_turma_Direcao1_idx` (`Direcao_id` ASC),
  CONSTRAINT `fk_turma_Direcao1`
    FOREIGN KEY (`Direcao_id`)
    REFERENCES `ieetbanco`.`direcao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`usuario_professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`usuario_professor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `cpf` VARCHAR(45) NULL DEFAULT NULL,
  `login` VARCHAR(45) NULL DEFAULT NULL,
  `senha` VARCHAR(100) NULL DEFAULT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT '3',
  `dataDeNascimento` DATE NULL DEFAULT NULL,
  `dataDeCriacao` DATE NULL DEFAULT NULL,
  `matricula` VARCHAR(45) NULL DEFAULT NULL,
  `formacao` VARCHAR(45) NULL DEFAULT NULL,
  `Direcao_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_professor_Direcao1_idx` (`Direcao_id` ASC),
  CONSTRAINT `fk_usuario_professor_Direcao1`
    FOREIGN KEY (`Direcao_id`)
    REFERENCES `ieetbanco`.`direcao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`disciplinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`disciplinas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `Turma_idTurma` INT(11) NOT NULL,
  `carga_Horaria` VARCHAR(45) NULL DEFAULT NULL,
  `usuario_professor_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Disciplinas_Turma1_idx` (`Turma_idTurma` ASC),
  INDEX `fk_disciplinas_usuario_professor1_idx` (`usuario_professor_id` ASC),
  CONSTRAINT `fk_Disciplinas_Turma1`
    FOREIGN KEY (`Turma_idTurma`)
    REFERENCES `ieetbanco`.`turma` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplinas_usuario_professor1`
    FOREIGN KEY (`usuario_professor_id`)
    REFERENCES `ieetbanco`.`usuario_professor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`atividade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`atividade` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `dataFinal` DATE NULL DEFAULT NULL,
  `dataInicial` DATE NULL DEFAULT NULL,
  `Disciplinas_idDisciplinas` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Atividade_Disciplinas_idx` (`Disciplinas_idDisciplinas` ASC),
  CONSTRAINT `fk_Atividade_Disciplinas`
    FOREIGN KEY (`Disciplinas_idDisciplinas`)
    REFERENCES `ieetbanco`.`disciplinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`materiais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`materiais` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `link` VARCHAR(45) NULL DEFAULT NULL,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  `disciplinas_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Materiais_disciplinas_idx` (`disciplinas_id` ASC),
  CONSTRAINT `fk_Materiais_disciplinas`
    FOREIGN KEY (`disciplinas_id`)
    REFERENCES `ieetbanco`.`disciplinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`usuario_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`usuario_aluno` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `cpf` VARCHAR(45) NULL DEFAULT NULL,
  `login` VARCHAR(45) NULL DEFAULT NULL,
  `senha` VARCHAR(100) NULL DEFAULT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT '4',
  `dataDeNascimento` DATE NULL DEFAULT NULL,
  `dataDeCriacao` DATE NULL DEFAULT NULL,
  `Turma_idTurma` INT(11) NOT NULL,
  `matricula` VARCHAR(45) NULL DEFAULT NULL,
  `Direcao_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Usuario_aluno_Turma1_idx` (`Turma_idTurma` ASC),
  INDEX `fk_usuario_aluno_Direcao1_idx` (`Direcao_id` ASC),
  CONSTRAINT `fk_Usuario_aluno_Turma1`
    FOREIGN KEY (`Turma_idTurma`)
    REFERENCES `ieetbanco`.`turma` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_aluno_Direcao1`
    FOREIGN KEY (`Direcao_id`)
    REFERENCES `ieetbanco`.`direcao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`notas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`notas` (
  `id` INT(11) NOT NULL,
  `nota1_1` FLOAT NULL DEFAULT NULL,
  `nota1_2` FLOAT NULL DEFAULT NULL,
  `nota1_3` FLOAT NULL DEFAULT NULL,
  `nota2_1` FLOAT NULL DEFAULT NULL,
  `nota2_2` FLOAT NULL DEFAULT NULL,
  `nota2_3` FLOAT NULL DEFAULT NULL,
  `nota3_1` FLOAT NULL DEFAULT NULL,
  `nota3_2` FLOAT NULL DEFAULT NULL,
  `nota3_3` FLOAT NULL DEFAULT NULL,
  `status` INT(11) NULL DEFAULT NULL,
  `Usuario_aluno_idUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Notas_Usuario_aluno1_idx` (`Usuario_aluno_idUsuario` ASC),
  CONSTRAINT `fk_Notas_Usuario_aluno1`
    FOREIGN KEY (`Usuario_aluno_idUsuario`)
    REFERENCES `ieetbanco`.`usuario_aluno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ieetbanco`.`notas_has_disciplinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ieetbanco`.`notas_has_disciplinas` (
  `notas_id` INT(11) NOT NULL,
  `disciplinas_id` INT(11) NOT NULL,
  PRIMARY KEY (`notas_id`, `disciplinas_id`),
  INDEX `fk_notas_has_disciplinas_disciplinas1_idx` (`disciplinas_id` ASC),
  INDEX `fk_notas_has_disciplinas_notas1_idx` (`notas_id` ASC),
  CONSTRAINT `fk_notas_has_disciplinas_notas1`
    FOREIGN KEY (`notas_id`)
    REFERENCES `ieetbanco`.`notas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notas_has_disciplinas_disciplinas1`
    FOREIGN KEY (`disciplinas_id`)
    REFERENCES `ieetbanco`.`disciplinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
