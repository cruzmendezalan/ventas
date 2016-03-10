-- MySQL Script generated by MySQL Workbench
-- lun 07 mar 2016 23:36:06 CST
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ventas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ventas` ;
CREATE SCHEMA IF NOT EXISTS `ventas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `ventas` ;

-- -----------------------------------------------------
-- Table `ventas`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`cliente` ;

CREATE TABLE IF NOT EXISTS `ventas`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NULL,
  `direccion_de_entrega` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `telefono_casa` VARCHAR(45) NULL,
  `colonia` VARCHAR(45) NULL,
  `ciudad` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`notas_de_ventas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`notas_de_ventas` ;

CREATE TABLE IF NOT EXISTS `ventas`.`notas_de_ventas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descuentoporcentaje` INT NULL,
  `descuentodinero` DOUBLE NULL,
  `pagocon` DOUBLE NULL,
  `fecha` DATETIME NULL,
  `nota` VARCHAR(255) NULL,
  `subtotal` DOUBLE NULL,
  `total` DOUBLE NULL,
  `descuento` DOUBLE NULL,
  `cliente_id` INT NOT NULL,
  `esta_pagada` TINYINT(1) NULL,
  `comentarios` VARCHAR(500) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_nota_venta_cliente1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_nota_venta_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `ventas`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`proveedores` ;

CREATE TABLE IF NOT EXISTS `ventas`.`proveedores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(100) NULL,
  `nombre` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`categorias` ;

CREATE TABLE IF NOT EXISTS `ventas`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `descripcion` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`productos` ;

CREATE TABLE IF NOT EXISTS `ventas`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `contenido` VARCHAR(45) NULL,
  `precio_proveedor` DOUBLE NULL,
  `precio_publico` DOUBLE NOT NULL,
  `precio_mayoreo` DOUBLE NULL,
  `descripcion` VARCHAR(100) NULL,
  `enventa` TINYINT(1) NULL,
  `imagen` VARCHAR(255) NULL,
  `codigodebarras` VARCHAR(100) NULL,
  `proveedores_id` INT NOT NULL,
  `categorias_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_producto_proveedor_idx` (`proveedores_id` ASC),
  INDEX `fk_producto_categoria1_idx` (`categorias_id` ASC),
  CONSTRAINT `fk_producto_proveedor`
    FOREIGN KEY (`proveedores_id`)
    REFERENCES `ventas`.`proveedores` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_producto_categoria1`
    FOREIGN KEY (`categorias_id`)
    REFERENCES `ventas`.`categorias` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`roles` ;

CREATE TABLE IF NOT EXISTS `ventas`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`notas_en_proceso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`notas_en_proceso` ;

CREATE TABLE IF NOT EXISTS `ventas`.`notas_en_proceso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `notas_de_ventas_id` INT NOT NULL,
  `en_proceso` TINYINT(1) NULL,
  PRIMARY KEY (`id`, `notas_de_ventas_id`),
  INDEX `fk_nota_en_proceso_nota_venta1_idx` (`notas_de_ventas_id` ASC),
  CONSTRAINT `fk_nota_en_proceso_nota_venta1`
    FOREIGN KEY (`notas_de_ventas_id`)
    REFERENCES `ventas`.`notas_de_ventas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `ventas`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `rol_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  `notas_en_proceso_id` INT NOT NULL,
  PRIMARY KEY (`id`, `rol_id`, `notas_en_proceso_id`),
  INDEX `fk_usuario_rol1_idx` (`rol_id` ASC),
  INDEX `fk_usuario_nota_en_proceso1_idx` (`notas_en_proceso_id` ASC),
  CONSTRAINT `fk_usuario_rol1`
    FOREIGN KEY (`rol_id`)
    REFERENCES `ventas`.`roles` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_nota_en_proceso1`
    FOREIGN KEY (`notas_en_proceso_id`)
    REFERENCES `ventas`.`notas_en_proceso` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`conceptos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`conceptos` ;

CREATE TABLE IF NOT EXISTS `ventas`.`conceptos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_de_productos` DOUBLE NULL,
  `producto_id` INT NOT NULL,
  `notas_de_ventas_id` INT NOT NULL,
  `importe` DOUBLE NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`, `notas_de_ventas_id`),
  INDEX `fk_concepto_producto1_idx` (`producto_id` ASC),
  INDEX `fk_concepto_nota_venta1_idx` (`notas_de_ventas_id` ASC),
  CONSTRAINT `fk_concepto_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `ventas`.`productos` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_concepto_nota_venta1`
    FOREIGN KEY (`notas_de_ventas_id`)
    REFERENCES `ventas`.`notas_de_ventas` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`inventarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`inventarios` ;

CREATE TABLE IF NOT EXISTS `ventas`.`inventarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_de_productos` INT NULL,
  `productos_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_inventario_producto1_idx` (`productos_id` ASC),
  CONSTRAINT `fk_inventario_producto1`
    FOREIGN KEY (`productos_id`)
    REFERENCES `ventas`.`productos` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`configuraciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`configuraciones` ;

CREATE TABLE IF NOT EXISTS `ventas`.`configuraciones` (
  `id` INT NOT NULL,
  `IVA` INT NULL,
  `estilocss` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`creditos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`creditos` ;

CREATE TABLE IF NOT EXISTS `ventas`.`creditos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `notas_de_venta_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `remember_token` VARCHAR(255) NULL,
  `dias_de_credito` INT NULL,
  PRIMARY KEY (`id`, `cliente_id`),
  INDEX `fk_credito_nota_venta1_idx` (`notas_de_venta_id` ASC),
  INDEX `fk_credito_cliente1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_credito_nota_venta1`
    FOREIGN KEY (`notas_de_venta_id`)
    REFERENCES `ventas`.`notas_de_ventas` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_credito_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `ventas`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;





SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `ventas`.`proveedores`
-- -----------------------------------------------------
START TRANSACTION;
USE `ventas`;
INSERT INTO `ventas`.`proveedores` (`id`, `empresa`, `nombre`, `direccion`, `telefono`, `celular`, `email`, `descripcion`, `created_at`, `updated_at`, `remember_token`) VALUES (1, 'SIN PROVEEDOR', 'SIN PROVEEDOR', '------------', '', '', '', '', NULL, NULL, NULL);

COMMIT;

