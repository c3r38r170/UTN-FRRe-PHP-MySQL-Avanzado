DROP TABLE IF EXISTS `consultas`;
CREATE TABLE `consultas` (
  `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(15) COLLATE 'utf8mb4_spanish_ci' NOT NULL,
  `apellido` VARCHAR(15) COLLATE 'utf8mb4_spanish_ci' NOT NULL,
  `correo` VARCHAR(30) COLLATE 'utf8mb4_spanish_ci' NOT NULL,
  `consulta` VARCHAR(500) COLLATE 'utf8mb4_spanish_ci' NOT NULL
) COLLATE 'utf8mb4_spanish_ci';