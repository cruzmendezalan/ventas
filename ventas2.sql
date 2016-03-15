-- MySQL Script generated by MySQL Workbench
-- Sun Mar 13 19:46:46 2016
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ventas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ventas` ;

-- -----------------------------------------------------
-- Schema ventas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ventas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `ventas` ;

-- -----------------------------------------------------
-- Table `ventas`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`cliente` ;

CREATE TABLE IF NOT EXISTS `ventas`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(45) NOT NULL COMMENT '',
  `direccion` VARCHAR(45) NULL COMMENT '',
  `direccion_de_entrega` VARCHAR(45) NULL COMMENT '',
  `celular` VARCHAR(45) NULL COMMENT '',
  `telefono_casa` VARCHAR(45) NULL COMMENT '',
  `colonia` VARCHAR(45) NULL COMMENT '',
  `ciudad` VARCHAR(45) NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`notas_de_ventas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`notas_de_ventas` ;

CREATE TABLE IF NOT EXISTS `ventas`.`notas_de_ventas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `descuentoporcentaje` INT NULL COMMENT '',
  `descuentodinero` DOUBLE NULL COMMENT '',
  `pagocon` DOUBLE NULL COMMENT '',
  `fecha` DATETIME NULL COMMENT '',
  `nota` VARCHAR(255) NULL COMMENT '',
  `subtotal` DOUBLE NULL COMMENT '',
  `total` DOUBLE NULL COMMENT '',
  `descuento` DOUBLE NULL COMMENT '',
  `cliente_id` INT NOT NULL COMMENT '',
  `esta_pagada` TINYINT(1) NULL COMMENT '',
  `comentarios` VARCHAR(500) NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_nota_venta_cliente1_idx` (`cliente_id` ASC)  COMMENT '',
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
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `empresa` VARCHAR(100) NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `direccion` VARCHAR(45) NULL COMMENT '',
  `telefono` VARCHAR(45) NULL COMMENT '',
  `celular` VARCHAR(45) NULL COMMENT '',
  `email` VARCHAR(45) NULL COMMENT '',
  `descripcion` VARCHAR(45) NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`categorias` ;

CREATE TABLE IF NOT EXISTS `ventas`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(100) NULL COMMENT '',
  `descripcion` VARCHAR(255) NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`productos` ;

CREATE TABLE IF NOT EXISTS `ventas`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(100) NOT NULL COMMENT '',
  `contenido` VARCHAR(45) NULL COMMENT '',
  `precio_proveedor` DOUBLE NULL COMMENT '',
  `precio_publico` DOUBLE NOT NULL COMMENT '',
  `precio_mayoreo` DOUBLE NULL COMMENT '',
  `descripcion` VARCHAR(100) NULL COMMENT '',
  `enventa` TINYINT(1) NULL COMMENT '',
  `imagen` VARCHAR(255) NULL COMMENT '',
  `codigodebarras` VARCHAR(100) NULL COMMENT '',
  `proveedores_id` INT NOT NULL COMMENT '',
  `categorias_id` INT NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_producto_proveedor_idx` (`proveedores_id` ASC)  COMMENT '',
  INDEX `fk_producto_categoria1_idx` (`categorias_id` ASC)  COMMENT '',
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
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo` VARCHAR(100) NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`notas_en_proceso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`notas_en_proceso` ;

CREATE TABLE IF NOT EXISTS `ventas`.`notas_en_proceso` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `notas_de_ventas_id` INT NOT NULL COMMENT '',
  `en_proceso` TINYINT(1) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`, `notas_de_ventas_id`)  COMMENT '',
  INDEX `fk_nota_en_proceso_nota_venta1_idx` (`notas_de_ventas_id` ASC)  COMMENT '',
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
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(100) NULL COMMENT '',
  `username` VARCHAR(100) NOT NULL COMMENT '',
  `password` VARCHAR(255) NOT NULL COMMENT '',
  `rol_id` INT NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `notas_en_proceso_id` INT NOT NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`, `rol_id`, `notas_en_proceso_id`)  COMMENT '',
  INDEX `fk_usuario_rol1_idx` (`rol_id` ASC)  COMMENT '',
  INDEX `fk_usuario_nota_en_proceso1_idx` (`notas_en_proceso_id` ASC)  COMMENT '',
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
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `numero_de_productos` DOUBLE NULL COMMENT '',
  `producto_id` INT NOT NULL COMMENT '',
  `notas_de_ventas_id` INT NOT NULL COMMENT '',
  `importe` DOUBLE NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`, `notas_de_ventas_id`)  COMMENT '',
  INDEX `fk_concepto_producto1_idx` (`producto_id` ASC)  COMMENT '',
  INDEX `fk_concepto_nota_venta1_idx` (`notas_de_ventas_id` ASC)  COMMENT '',
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
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `numero_de_productos` INT NULL COMMENT '',
  `productos_id` INT NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_inventario_producto1_idx` (`productos_id` ASC)  COMMENT '',
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
  `id` INT NOT NULL COMMENT '',
  `IVA` INT NULL COMMENT '',
  `estilocss` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas`.`creditos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas`.`creditos` ;

CREATE TABLE IF NOT EXISTS `ventas`.`creditos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `notas_de_venta_id` INT NOT NULL COMMENT '',
  `cliente_id` INT NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL COMMENT '',
  `updated_at` TIMESTAMP NULL COMMENT '',
  `remember_token` VARCHAR(255) NULL COMMENT '',
  `dias_de_credito` INT NULL COMMENT '',
  `deleted_at` TIMESTAMP NULL COMMENT '',
  PRIMARY KEY (`id`, `cliente_id`)  COMMENT '',
  INDEX `fk_credito_nota_venta1_idx` (`notas_de_venta_id` ASC)  COMMENT '',
  INDEX `fk_credito_cliente1_idx` (`cliente_id` ASC)  COMMENT '',
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
INSERT INTO `ventas`.`proveedores` (`id`, `empresa`, `nombre`, `direccion`, `telefono`, `celular`, `email`, `descripcion`, `created_at`, `updated_at`, `remember_token`, `deleted_at`) VALUES (1, 'SIN PROVEEDOR', 'SIN PROVEEDOR', '------------', '', '', '', '', NULL, NULL, NULL, NULL);

COMMIT;

