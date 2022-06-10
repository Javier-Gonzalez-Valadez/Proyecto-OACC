DROP SCHEMA IF EXISTS `registro_usuarios`;

CREATE SCHEMA IF NOT EXISTS `registro_usuarios` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `registro_usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'Adrian', 'Gonzalez', 'adrian@gmail.com', 'adrian1234', '1234'),
(2, 'Javier', 'Gonzalez', 'javiergv.ico@gmail.com', 'javii51', '1234'),
(3, 'Smith', 'Children', 'Smithy@gmail.com', 'Tobness', '1234'),
(4, 'Aaron', 'Velazco', 'profeaaron@gmail.com', 'Aaron6od', '1234'),
(5, 'Karlos', 'Marx', 'marxista@gmail.com', 'karlMax', '000000'),
(6, 'Bryan', 'Mozzart', 'mozzart@gmail.com', 'Mozzart', '122345'),
(7, 'Antonio', 'Vivaldi', 'vivaldi@gmail.com', 'Vivaldi', '12345'),
(8, 'Sebastin', 'Bach', 'bach@gmail.com', 'Bach Nocturne', '1234'),
(9, 'Johann', 'Strauss', 'strauss@gmail.com', 'Strauss6og', '1234');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

