DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `codigo` INT NOT NULL,
  `producto` VARCHAR(30) COLLATE 'utf8mb4_spanish_ci' NOT NULL,
  `descripcion` VARCHAR(255) COLLATE 'utf8mb4_spanish_ci' NOT NULL,
  `precio` DECIMAL(5,2) NOT NULL
) COLLATE 'utf8mb4_spanish_ci';