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
(18, 'Adrian', 'Gonzalez', 'adrian@gmail.com', 'adrian1234', '1234'),
(19, 'jorge', 'nitale', 'jor@gmail.com', 'gen_itales', '1234'),
(20, 'Elver', 'goton', 'gotonElver@gmai.com', 'gototas', '1234'),
(21, 'lol', 'lol', 'ol', 'lol', 'olo');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

