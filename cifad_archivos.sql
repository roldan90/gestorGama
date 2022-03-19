-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-03-2022 a las 04:23:05
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestorjose`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_archivos`
--

CREATE TABLE `t_archivos` (
  `id_archivo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `no_oficio` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `ruta` text,
  `descripcion` text,
  `asunto` text,
  `fecha_oficio` date DEFAULT NULL,
  `fecha_oficiolimit` date DEFAULT NULL,
  `id_remitente` int(11) DEFAULT NULL,
  `id_destinatario` int(11) DEFAULT NULL,
  `status_oficio` varchar(100) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_archivos`
--

INSERT INTO `t_archivos` (`id_archivo`, `id_usuario`, `id_categoria`, `no_oficio`, `nombre`, `tipo`, `ruta`, `descripcion`, `asunto`, `fecha_oficio`, `fecha_oficiolimit`, `id_remitente`, `id_destinatario`, `status_oficio`, `fecha`) VALUES
(1, 20, 20, 'WEWEF', 'amlocar.pdf', 'pdf', '../../archivos/20/amlocar.pdf', 'WEFWEF', 'WEFWEF', '2022-03-18', '2022-03-18', 8, 2, 'VIGENTE', '2022-03-17 21:58:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_categorias`
--

INSERT INTO `t_categorias` (`id_categoria`, `id_usuario`, `nombre`, `fechaInsert`) VALUES
(20, 22, 'CIFAD 2022', '2022-02-09 12:21:06'),
(21, 22, 'CIFAD 2021', '2022-02-09 12:21:33'),
(22, 22, 'CIFAD 2020', '2022-02-09 12:21:39'),
(23, 22, 'CIFAD 2019', '2022-02-09 12:21:49'),
(24, 22, 'CIFAD 2018', '2022-02-09 12:21:56'),
(28, 23, 'CIFAD 2017', '2022-02-09 14:08:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_destinatarios`
--

CREATE TABLE `t_cat_destinatarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_cat_destinatarios`
--

INSERT INTO `t_cat_destinatarios` (`id`, `nombre`) VALUES
(1, 'ALMACÉN GENERAL'),
(2, 'CAM TEPIC'),
(3, 'CEDART TEPIC'),
(4, 'CIFAD'),
(5, 'COMISIÓN ESCALAFÓN'),
(6, 'COMITÉ DE ADQUISICIONES'),
(7, 'CONSEJOS DE PARTICIPACIÓN'),
(8, 'CONTRALORIA'),
(9, 'DESARROLLO ORGANIZACIONAL'),
(10, 'DIRECCIÓN GENERAL'),
(11, 'DISPOSICIÓN FINAL Y BAJA DE ACTIVOS FIJOS'),
(12, 'EDUCACIÓN BÁSICA'),
(13, 'EDUCACIÓN ESPECIAL'),
(14, 'EDUCACIÓN EXTRAESCOLAR'),
(15, 'EDUCACIÓN FÍSICA'),
(16, 'EDUCACIÓN INDÍGENA'),
(17, 'EDUCACIÓN INICIAL Y PREESCOLAR INDÍGENA'),
(18, 'EDUCACIÓN INICIAL Y PREESCOLAR'),
(19, 'EDUCACIÓN INTERCULTURAL'),
(20, 'EDUCACIÓN PRIMARIA INDÍGENA'),
(21, 'EDUCACIÓN PRIMARIA'),
(22, 'EDUCACIÓN SECUNDARIA GENERAL'),
(23, 'EDUCACIÓN SECUNDARIA TÉCNICA'),
(24, 'ENEA ACAPONETA'),
(25, 'ESTADÍSTICA'),
(26, 'EVALUACIÓN EDUCATIVA E INSTITUCIONAL'),
(27, 'FOMENTO Y DIFUSIÓN CULTURAL'),
(28, 'FONE'),
(29, 'FORMACIÓN CONTINUA'),
(30, 'FORTALECIMIENTO EDUCATIVO'),
(31, 'INFORMÁTICA'),
(32, 'INNOVACIÓN EDUCATIVA'),
(33, 'JURIDICO'),
(34, 'MEEBA'),
(35, 'MONITOREO Y SEGUIMIENTO A RESULTADOS'),
(36, 'NORMATIVIDAD'),
(37, 'PLANEACIÓN Y EVALUACIÓN EDUCATIVA'),
(38, 'PRENSA'),
(39, 'PROGRAMACIÓN Y PRESUPUESTO'),
(40, 'PROYECTOS DE INNOVACIÓN'),
(41, 'RECURSOS FINANCIEROS'),
(42, 'RECURSOS HUMANOS'),
(43, 'RECURSOS MATERIALES Y SERVICIOS'),
(44, 'REGISTRO Y CERTIFICACIÓN ESCOLAR'),
(45, 'SECRETARÍA TÉCNICA'),
(46, 'SERVICIOS ADMINISTRATIVOS'),
(47, 'TRANSPARENCIA'),
(48, 'UPN 181 TEPIC'),
(49, 'URSES'),
(50, 'USICAMM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_remitente`
--

CREATE TABLE `t_cat_remitente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_cat_remitente`
--

INSERT INTO `t_cat_remitente` (`id`, `nombre`) VALUES
(1, 'ALMACÉN GENERAL'),
(2, 'CAM TEPIC'),
(3, 'CEDART TEPIC'),
(4, 'CIFAD'),
(5, 'COMISIÓN ESCALAFÓN'),
(6, 'COMITÉ DE ADQUISICIONES'),
(7, 'CONSEJOS DE PARTICIPACIÓN'),
(8, 'CONTRALORIA'),
(9, 'DESARROLLO ORGANIZACIONAL'),
(10, 'DIRECCIÓN GENERAL '),
(11, 'DISPOSICIÓN FINAL Y BAJA DE ACTIVOS FIJOS'),
(12, 'EDUCACIÓN BÁSICA'),
(13, 'EDUCACIÓN ESPECIAL'),
(14, 'EDUCACIÓN EXTRAESCOLAR'),
(15, 'EDUCACIÓN FÍSICA'),
(16, 'EDUCACIÓN INDÍGENA'),
(17, 'EDUCACIÓN INICIAL Y PREESCOLAR INDÍGENA'),
(18, 'EDUCACIÓN INICIAL Y PREESCOLAR'),
(19, 'EDUCACIÓN INTERCULTURAL'),
(20, 'EDUCACIÓN PRIMARIA INDÍGENA'),
(21, 'EDUCACIÓN PRIMARIA'),
(22, 'EDUCACIÓN SECUNDARIA GENERAL'),
(23, 'EDUCACIÓN SECUNDARIA TÉCNICA'),
(24, 'ENEA ACAPONETA'),
(25, 'ESTADÍSTICA'),
(26, 'EVALUACIÓN EDUCATIVA E INSTITUCIONAL'),
(27, 'FOMENTO Y DIFUSIÓN CULTURAL'),
(28, 'FONE'),
(29, 'FORMACIÓN CONTINUA'),
(30, 'FORTALECIMIENTO EDUCATIVO'),
(31, 'INFORMÁTICA'),
(32, 'INNOVACIÓN EDUCATIVA'),
(33, 'JURIDICO'),
(34, 'MEEBA'),
(35, 'MONITOREO Y SEGUIMIENTO A RESULTADOS'),
(36, 'NORMATIVIDAD'),
(37, 'PLANEACIÓN Y EVALUACIÓN EDUCATIVA'),
(38, 'PRENSA'),
(39, 'PROGRAMACIÓN Y PRESUPUESTO'),
(40, 'PROYECTOS DE INNOVACIÓN'),
(41, 'RECURSOS FINANCIEROS'),
(42, 'RECURSOS HUMANOS'),
(43, 'RECURSOS MATERIALES Y SERVICIOS'),
(44, 'REGISTRO Y CERTIFICACIÓN ESCOLAR'),
(45, 'SECRETARÍA TÉCNICA'),
(46, 'SERVICIOS ADMINISTRATIVOS'),
(47, 'TRANSPARENCIA'),
(48, 'UPN 181 TEPIC'),
(49, 'URSES'),
(50, 'USICAMM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `usuario` varchar(245) DEFAULT NULL,
  `password` text,
  `insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rol` varchar(245) NOT NULL DEFAULT 'estandar',
  `old_password` varchar(245) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `fechaNacimiento`, `email`, `usuario`, `password`, `insert`, `rol`, `old_password`, `activo`) VALUES
(20, 'JOSÉ GAMALIEL BECERRA AQUINO', '1986-05-06', 'jgba.josga@gmail.com', 'Gamaliel', '5e80ba759c0abfe75abafa448f053afd79a4ef71', '2022-02-06 18:19:06', 'administrador', 'gama2409', 1),
(21, 'JESSICA ANETTE JUAREZ PARRA', '2022-02-01', 'jess.cifad@gmail.com', 'Jess', 'efba15d138eeb258260f535ee826f1a80d725cc6', '2022-02-06 18:23:50', 'estandar', 'jess2022', 1),
(22, 'OLIVIA GUADALUPE RODRIGUEZ IBARRA', '2022-02-01', 'olivia.cifad@gmail.com', 'Olivia', '7bd44c3db81bc01de02e0b47865456dcaa51a30f', '2022-02-08 12:29:55', 'estandar', 'oli2022', 1),
(23, 'JOSE LUIS CERNA', '2022-02-01', 'cerna.cifad@gmail.com', 'Cerna', '64836194ac88483266157a1434e69432caae7d5b', '2022-02-09 12:27:25', 'administrador', 'cerna2022', 1),
(24, 'DIEGO ALONSO CONTRERAS RAMIREZ', '1983-11-11', 'diegoolcr@gmail.com', 'Diego', '629ec66c7c6f22d906df53ff86af3e1aab633e82', '2022-02-26 01:48:40', 'administrador', 'diego2022', 1),
(25, 'JUANITA', '2022-02-01', 'juanita.cifad@gmail.com', 'Juanis', 'dde1cb17639633441dd55eca5a25b94a8ec953cf', '2022-02-26 02:16:45', 'estandar', 'juanita2022', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `fkArchivosCategorias_idx` (`id_categoria`),
  ADD KEY `fkUsuariosArchivos_idx` (`id_usuario`),
  ADD KEY `INDICE1` (`no_oficio`);

--
-- Indices de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `fkCategoriaUsuario_idx` (`id_usuario`);

--
-- Indices de la tabla `t_cat_destinatarios`
--
ALTER TABLE `t_cat_destinatarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_cat_remitente`
--
ALTER TABLE `t_cat_remitente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `t_cat_destinatarios`
--
ALTER TABLE `t_cat_destinatarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `t_cat_remitente`
--
ALTER TABLE `t_cat_remitente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  ADD CONSTRAINT `fkArchivosCategorias` FOREIGN KEY (`id_categoria`) REFERENCES `t_categorias` (`id_categoria`),
  ADD CONSTRAINT `fkUsuariosArchivos` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD CONSTRAINT `fkCategoriaUsuario` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
