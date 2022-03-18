-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2022 a las 02:16:54
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cifad_archivos`
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
  `ruta` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `asunto` text DEFAULT NULL,
  `fecha_oficio` date DEFAULT NULL,
  `fecha_oficiolimit` date DEFAULT NULL,
  `remitente_oficio` varchar(300) DEFAULT NULL,
  `destinatario_oficio` varchar(300) DEFAULT NULL,
  `status_oficio` varchar(100) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_archivos`
--

INSERT INTO `t_archivos` (`id_archivo`, `id_usuario`, `id_categoria`, `no_oficio`, `nombre`, `tipo`, `ruta`, `descripcion`, `asunto`, `fecha_oficio`, `fecha_oficiolimit`, `remitente_oficio`, `destinatario_oficio`, `status_oficio`, `fecha`) VALUES
(142, 21, 21, 'SEPEN-CIFAD-001/2021', 'CIFAD_001_2021_CAM.pdf', 'pdf', '../../archivos/21/CIFAD_001_2021_CAM.pdf', 'OFICIO COMISIÓN CARLOS VLADIMIR', 'COMISION', '2021-09-28', '2022-02-28', 'CIFAD', 'CAM', 'VIGENTE', '2022-02-28 11:47:35'),
(143, 21, 20, 'SEPEN-CIFAD-002/2021', 'CIFAD_002_2021_CAM.pdf', 'pdf', '../../archivos/21/CIFAD_002_2021_CAM.pdf', 'OFICIO COMISION CESAR EDUARDO', 'COMISION CAM', '2021-09-28', '2022-02-28', 'CIFAD', 'CAM', 'VIGENTE', '2022-02-28 11:48:50'),
(144, 21, 20, 'SEPEN-CIFAD-003/2021', 'CIFAD_003_2021_DGESuM.pdf', 'pdf', '../../archivos/21/CIFAD_003_2021_DGESuM.pdf', 'COMISION GUSTAVO', 'COMISION DGESUM', '2021-09-28', '2022-02-28', 'CIFAD', 'DGESUM', 'VIGENTE', '2022-02-28 11:50:30'),
(149, 20, 21, 'SEPEN-CIFAD-004/2021', 'CIFAD_004_2021_CANCELADO.pdf', 'pdf', '../../archivos/20/CIFAD_004_2021_CANCELADO.pdf', 'ESPINOSA ROJANO FERNANDO LIBERACION', 'LIBERACION DE PERSONAL', '2021-12-09', '2022-03-02', 'CIFAD', 'RECURSOS HUMANOS', 'CANCELADO', '2022-03-01 19:34:09'),
(150, 20, 21, 'SEPEN-CIFAD-005/2021', 'CIFAD_005_2021_RECURSOS_MATERIALES.pdf', 'pdf', '../../archivos/20/CIFAD_005_2021_RECURSOS_MATERIALES.pdf', 'COORDINACION DE CIFAD SOLICITA IMPRESOSA', 'SOLICITUD DE IMPRESORA', '2021-09-29', '2022-03-02', 'CIFAD', 'RECURSOS MATERIALES Y SERVICIOS', 'VIGENTE', '2022-03-01 19:36:37'),
(151, 20, 21, 'SEPEN-CIFAD-006/2021', 'CIFAD_006_2021_RECURSOS_MATERIALES.pdf', 'pdf', '../../archivos/20/CIFAD_006_2021_RECURSOS_MATERIALES.pdf', 'SOLICITUD DE SELLOS PARA LA COORDINACION', 'REQUISICION DE SELLOS', '2021-09-29', '2022-03-07', 'RECURSOS MATERIALES Y SERVICIOS', 'CIFAD', 'VIGENTE', '2022-03-07 14:05:33'),
(152, 20, 21, 'SEPEN-CIFAD-007/2021', 'CIFAD_007_2021_ENEA.pdf', 'pdf', '../../archivos/20/CIFAD_007_2021_ENEA.pdf', 'SE COLICITA PLANTILLA DE PERSONAL DE ENEA ACAPONETA', 'SOLICITUD DE PLANTILLA DE PERSONAL', '2021-10-01', '2022-03-07', 'CIFAD', 'ENEA ACAPONETA', 'VIGENTE', '2022-03-07 14:34:46'),
(153, 20, 21, 'SEPEN-CIFAD-008/2021', 'CIFAD_008_2021_UPN.pdf', 'pdf', '../../archivos/20/CIFAD_008_2021_UPN.pdf', 'SE SOLICITA PLANTILLA DE PERSONAL DE UPN 181 TEPIC', 'SOLICITUD DE PLANTILLA DE PERSONAL', '2021-10-01', '2022-03-07', 'CIFAD', 'UPN 181 TEPIC', 'VIGENTE', '2022-03-07 14:40:24'),
(154, 20, 21, 'SEPEN-CIFAD-009/2021', 'CIFAD_009_2021_CAM.pdf', 'pdf', '../../archivos/20/CIFAD_009_2021_CAM.pdf', 'SE SOLICITA PLANTILLA DE PERSONAL DEL CAM TEPIC', 'SOLICITUD DE PLANTILLA DE PERSONAL', '2021-10-01', '2022-03-07', 'CIFAD', 'CAM TEPIC', 'No Especificado', '2022-03-07 14:45:52'),
(155, 20, 21, 'SEPEN-CIFAD-010/2021', 'CIFAD_010_2021_RECURSOS_MATERIALES.pdf', 'pdf', '../../archivos/20/CIFAD_010_2021_RECURSOS_MATERIALES.pdf', 'SE COLICITA COMBUSTIBLE PARA LA COORDINACION DE CIFAD', 'SOLICITUD DE COMBUSTIBLE', '2021-10-01', '2022-03-07', 'CIFAD', 'RECURSOS MATERIALES Y SERVICIOS', 'VIGENTE', '2022-03-07 14:47:37'),
(156, 20, 21, 'SEPEN-CIFAD-011/2021', 'CIFAD_011_2021_RECURSOS_MATERIALES.pdf', 'pdf', '../../archivos/20/CIFAD_011_2021_RECURSOS_MATERIALES.pdf', 'SE SOLICITA CAMBIO DE LAMPARAS INSTALADAS EN LA COORDINACION', 'SOLICITUD DE ARREGLO DE LAMPARAS', '2021-10-01', '2022-03-07', 'CIFAD', 'RECURSOS MATERIALES Y SERVICIOS', 'VIGENTE', '2022-03-07 14:56:36'),
(157, 20, 21, 'SEPEN-CIFAD-012/2021', 'CIFAD_012_2021_ENEA_UPN_CAM.pdf', 'pdf', '../../archivos/20/CIFAD_012_2021_ENEA_UPN_CAM.pdf', 'SOLICITUD DE HORARIO OFICIAL DE UPN, CAM, ENEA.', 'SOLICITANDO HORARIO UPN, CAM, ENEA', '2021-10-01', '2021-10-05', 'CIFAD', 'ENEA ACAPONETA', 'VIGENTE', '2022-03-08 13:14:46'),
(158, 20, 21, 'SEPEN-CIFAD-013/2021', 'CIFAD_013_2021_ENEA.pdf', 'pdf', '../../archivos/20/CIFAD_013_2021_ENEA.pdf', 'RESULTADOS CONVOCATORIA MOVILIDAD ACADEMICA NACIONAL DE AMBIENTES VIRTUALES DE APRENDIZAJE PARA ESTUDIANTES DE ESCUELAS NORMALES PULICAS 2021', 'RESULTADOS CONVOCATORIA MOVILIDAD ACADEMICA ', '2021-10-01', '2022-03-08', 'CIFAD', 'ENEA ACAPONETA', 'VIGENTE', '2022-03-08 13:17:16'),
(159, 20, 21, 'SEPEN-CIFAD-014/2021', 'CIFAD_014_2021_PROGRAMACIÓN_Y_PRESUPUESTO.pdf', 'pdf', '../../archivos/20/CIFAD_014_2021_PROGRAMACIÓN_Y_PRESUPUESTO.pdf', 'RESPUESTA OFICIO DPP/SPDS/1479/2021', 'RATIFICANDO ENLACE', '2021-10-01', '2022-03-09', 'CIFAD', 'PROGRAMACIÓN Y PRESUPUESTO', 'VIGENTE', '2022-03-09 10:52:54'),
(160, 20, 21, 'SEPEN-CIFAD-015/2021', 'CIFAD_015_2021_RECURSOS_HUMANOS.pdf', 'pdf', '../../archivos/20/CIFAD_015_2021_RECURSOS_HUMANOS.pdf', 'LIBERACION DE MTRA. IVONNE CECILIA RODRIGUEZ VAZQUEZ', 'LIBERACION DE PERSONAL', '2021-10-04', '2022-03-09', 'CIFAD', 'RECURSOS HUMANOS', 'VIGENTE', '2022-03-09 10:54:35'),
(161, 20, 21, 'SEPEN-CIFAD-016/2021', 'CIFAD_016_2021_RECURSOS_HUMANOS.pdf', 'pdf', '../../archivos/20/CIFAD_016_2021_RECURSOS_HUMANOS.pdf', 'PRESENTACION DE VICTOR MANUEL ALVARADO JIMENEZ', 'OFICIO DE ACEPTACION', '2021-10-01', '2022-03-09', 'CIFAD', 'RECURSOS HUMANOS', 'VIGENTE', '2022-03-09 11:12:46'),
(162, 20, 21, 'SEPEN-CIFAD-017/2021', 'CIFAD_017_2021_ENEA_UPN_CAM.pdf', 'pdf', '../../archivos/20/CIFAD_017_2021_ENEA_UPN_CAM.pdf', 'RATIFICACION DE ENLACE INSTITUCION Y COORDINACION', 'ENLACE PA. (ENEA, UPN, CAM)', '2021-10-01', '2022-03-09', 'CIFAD', 'UPN 181 TEPIC', 'VIGENTE', '2022-03-09 11:39:33'),
(163, 20, 21, 'SEPEN-CIFAD-018/2021', 'CIFAD_018_2021_SERVICIOS_ADMINISTRATIVOS.pdf', 'pdf', '../../archivos/20/CIFAD_018_2021_SERVICIOS_ADMINISTRATIVOS.pdf', 'SERVICIO DE CERRAJERIA PARA ESCRITORIO EN CIFAD', 'SOLICITANDO SERVICIO DE CERRAJERIA', '2021-10-04', '2022-03-09', 'CIFAD', 'SERVICIOS ADMINISTRATIVOS.', 'VIGENTE', '2022-03-09 11:44:41'),
(164, 20, 21, 'SEPEN-CIFAD-019/2021', 'CIFAD_019_2021_RECURSOS_MATERIALES.pdf', 'pdf', '../../archivos/20/CIFAD_019_2021_RECURSOS_MATERIALES.pdf', 'SOLICITUD DE MATERIAL PARA OFICINA', 'REQUISICION DE MATERIAL', '2021-10-05', '2022-03-09', 'CIFAD', 'RECURSOS MATERIALES Y SERVICIOS', 'VIGENTE', '2022-03-09 11:48:50'),
(165, 20, 21, 'SEPEN-CIFAD-020/2021', 'CIFAD_020_2021_RECUROS_HUMANOS.pdf', 'pdf', '../../archivos/20/CIFAD_020_2021_RECUROS_HUMANOS.pdf', 'OFICIO DE PRESENTACION JOSE LUIS CERNA ALVAREZ', 'OFICIO DE ACEPTACION', '2021-10-05', '2022-03-09', 'CIFAD', 'RECURSOS HUMANOS', 'VIGENTE', '2022-03-09 11:50:12'),
(166, 20, 21, 'SEPEN-CIFAD-021/2021', 'CIFAD_021_2021_RECUROS_HUMANOS.pdf', 'pdf', '../../archivos/20/CIFAD_021_2021_RECUROS_HUMANOS.pdf', 'OFICIO DE PRESENTACION DE DIEGO ALONSO CONTRERAS RAMIREZ', 'OFICIO DE ACEPTACION', '2021-10-05', '2022-03-09', 'CIFAD', 'RECURSOS HUMANOS', 'VIGENTE', '2022-03-09 11:51:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT current_timestamp()
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
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `usuario` varchar(245) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `insert` datetime NOT NULL DEFAULT current_timestamp(),
  `rol` varchar(245) NOT NULL DEFAULT 'estandar',
  `old_password` varchar(245) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT 1
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
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
