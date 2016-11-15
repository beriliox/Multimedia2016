-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2016 a las 16:20:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ConcentracionNotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `rut` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `dv` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidop` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidom` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promocion` int(11) DEFAULT NULL,
  `id_carrera` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`rut`, `dv`, `nombre`, `apellidop`, `apellidom`, `direccion`, `ciudad`, `email`, `promocion`, `id_carrera`) VALUES
('18161608', '3', 'CARLO ALBERTO', 'ECHEVERRIA', 'FUENTES', 'SAN MIGUEL 360 - PLACILLA', 'SAN ANTONIO', 'carlo.echeverria@alumnos.upla.cl', 2011, 'NAF-1397'),
('18230912', '5', 'JUAN', 'PEREZ', 'CERDA', 'PASAJE PISCIS 460', 'VALPARAISO', 'juan.perez.c@alumnos.upla.cl', 2010, 'NAF-1397');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `cod_asign` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_asign` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`cod_asign`, `nombre_asign`) VALUES
('CIF 01191-1', 'INTRODUCCION A LA INGENIERIA'),
('CIF 01191-2', 'INTRODUCCION A LA INGENIERIA'),
('CIF 01263-1', 'CALCULO DIFERENCIAL'),
('CIF 01263-2', 'CALCULO DIFERENCIAL'),
('CIF 01321-1', 'FISICA GENERAL I: MECANICA'),
('CIF 01321-2', 'FISICA GENERAL I: MECANICA'),
('CIF 01451-1', 'INTRODUCCION A LA INFORMATICA'),
('CIF 01451-2', 'INTRODUCCION A LA INFORMATICA'),
('CIF 01561-1', 'ALGEBRA'),
('CIF 01561-2', 'ALGEBRA'),
('CIF 02162-1', 'ALGEBRA LINEAL'),
('CIF 02263-1', 'CALCULO INTEGRAL Y SERIES'),
('CIF 02263-2', 'CALCULO INTEGRAL Y SERIES'),
('CIF 02321-1', 'FISICA GENERAL II:CALOR Y ONDAS3'),
('CIF 02321-2', 'FISICA GENERAL II:CALOR Y ONDAS'),
('CIF 02452-1', 'FUNDAMENTOS DE PROGRAMACION'),
('CIF 03263-1', 'CALCULO MULTIVARIADO'),
('CIF 03321-1', 'ELECTROMAGNETISMO'),
('CIF 03453-1', 'ESTRUCTURA Y REPRESENTACION DE DATOS'),
('CIF 04263-1', 'ECUACIONES DIFERENCIALES'),
('CIF 04321-1', 'FUNDAMENTOS DE ELECTRONICA'),
('CIF 04452-1', 'TALLER DE PROGRAMACION'),
('CIF 04556-1', 'SISTEMAS OPERATIVOS'),
('CIF 04655-1', 'TEORIA DE SISTEMAS'),
('CIF 05141-1', 'ESTADISTICA'),
('CIF 05295-1', 'MACRO Y MICROECONOMIA'),
('CIF 05353-1', 'MODELOS DE DATOS'),
('CIF 05455-1', 'REDES DE COMPUTADORES'),
('CIF 05555-1', 'ANALISIS DE SISTEMAS'),
('CIF 06145-1', 'INVESTIGACION DE OPERACIONES'),
('CIF 06297-1', 'GESTION DE EMPRESA'),
('CIF 06356-1', 'SISTEMA DE BASE DE DATOS'),
('CIF 06459-1', 'TECNOLOGIA DE MULTIMEDIA'),
('CIF 06558-1', 'INGENIERIA DE SOFTWARE'),
('CIF 06611-1', 'POLITICA Y ECONOMIA DE LA INFORMACION'),
('CIF 07199-1', 'INFORMATICA Y DERECHO'),
('CIF 07296-1', 'PLANIFICACION Y ESTRATEGICA'),
('CIF 07359-1', 'INTELIGENCIA ARTIFICIAL'),
('CIF 07458-1', 'METODOLOGIA DE DESARROLLO DE SOFTWARE'),
('CIF 08197-1', 'FORMULACION Y EVALUACION DE PROYECTOS'),
('CIF 08297-1', 'ADMINISTRACION DE RECURSOS HUMANOS'),
('CIF 08399-1', 'SEMINARIO DE INVESTIGACION'),
('CIF 08458-1', 'INGENIERIA DEL CONOCIMIENTO'),
('CIF 08599-1', 'AUDITORIA INFORMATICA'),
('CIF 09159-1', 'TALLER DE INTEGRADO'),
('CIF 09341-1', 'INFORMATICA Y ETICA'),
('EIF 07536-1', 'SOCIOLOGIA'),
('FIF 05614-2', 'F.G.1.:ACONDICIONAMIENTO FISICO'),
('HIF 02533-1', 'INGLES I'),
('HIF 03111-1', 'INTRODUCCION A LAS CS. DE LA INFORMACION'),
('HIF 03533-1', 'INGLES II'),
('HIF 04113-1', 'FUENTES DE INFORMACION'),
('IIF 05604-1', 'F.G.1.:DISEÑO DE PAGINA WEB'),
('IIF 05614-1', 'F.G.1.:PROGRAMACION EN NET'),
('IIF 05626-1', 'F.G.1.:PROGRAMACION EN ANDROID'),
('IIF 07630-1', 'F.G.2.: AYUDEMOS A LA REFORESTACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_carrera` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`) VALUES
('NAF-1397', 'INGENIERIA EN INFORMATICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` int(11) NOT NULL,
  `rut` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_asign` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `periodo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oportunidad` int(11) DEFAULT NULL,
  `nota_final` float DEFAULT NULL,
  `estado` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `rut`, `cod_asign`, `periodo`, `oportunidad`, `nota_final`, `estado`) VALUES
(1, '18161608', 'CIF 01191-1', '2011/2', 1, 4.5, 'ter'),
(2, '18161608', 'CIF 01263-1', '2011/2', 1, 4.2, 'ter'),
(3, '18161608', 'CIF 01321-1', '2011/2', 1, 4, 'ter'),
(4, '18161608', 'CIF 01451-1', '2011/1', 1, 4.6, 'ter'),
(5, '18161608', 'CIF 01561-1', '2011/1', 1, 4.9, 'ter'),
(6, '18161608', 'CIF 02162-1', '2011/2', 1, 2, 'ter'),
(7, '18161608', 'CIF 02162-1', '2013/2', 2, 4.9, 'ter'),
(8, '18161608', 'CIF 02263-1', '2012/2', 1, 3.8, 'ter'),
(9, '18161608', 'CIF 02263-1', '2013/1', 2, 4.2, 'ter'),
(10, '18161608', 'CIF 02321-1', '2012/1', 1, 5, 'ter'),
(11, '18161608', 'CIF 02452-1', '2011/2', 1, 2.5, 'ter'),
(12, '18161608', 'CIF 02452-1', '2012/2', 2, 4, 'ter'),
(13, '18161608', 'HIF 02533-1', '2011/2', 1, 4.1, 'ter'),
(14, '18161608', 'HIF 03111-1', '2012/1', 1, 4.9, 'ter'),
(15, '18161608', 'CIF 03263-1', '2014/1', 1, 4.7, 'ter'),
(16, '18161608', 'CIF 03321-1', '2013/1', 1, 4.2, 'ter'),
(17, '18161608', 'CIF 03453-1', '2013/1', 1, 2.5, 'ter'),
(18, '18161608', 'CIF 03453-1', '2014/1', 2, 4.5, 'ter'),
(19, '18161608', 'HIF 03533-1', '2012/1', 1, 4.8, 'ter'),
(20, '18161608', 'HIF 04113-1', '2012/2', 1, 5.5, 'ter'),
(21, '18161608', 'CIF 04263-1', '2014/2', 1, 4.7, 'ter'),
(22, '18161608', 'CIF 04321-1', '2013/2', 1, 4.7, 'ter'),
(23, '18161608', 'CIF 04452-1', '2014/2', 1, 4.2, 'ter'),
(24, '18161608', 'CIF 04556-1', '2012/2', 1, 4, 'ter'),
(25, '18161608', 'CIF 04655-1', '2012/2', 1, 6, 'ter'),
(26, '18161608', 'CIF 05141-1', '2014/1', 1, 4.4, 'ter'),
(27, '18161608', 'CIF 05295-1', '2013/1', 1, 4.2, 'ter'),
(28, '18161608', 'CIF 05353-1', '2013/1', 1, 4, 'ter'),
(29, '18161608', 'CIF 05455-1', '2015/1', 1, 5.1, 'ter'),
(30, '18161608', 'CIF 05555-1', '2013/1', 1, 4.2, 'ter'),
(31, '18161608', 'FIF 05614-2', '2015/1', 1, 6.8, 'ter'),
(32, '18161608', 'IIF 05626-1', '2013/1', 1, 1, 'ter'),
(33, '18161608', 'CIF 06145-1', '2014/2', 1, 4.8, 'ter'),
(34, '18161608', 'CIF 06297-1', '2013/2', 1, 5.5, 'ter'),
(35, '18161608', 'CIF 06356-1', '2013/2', 1, 4.1, 'ter'),
(36, '18161608', 'CIF 06459-1', '2015/2', 1, 2.3, 'ter'),
(37, '18161608', 'CIF 06558-1', '2013/2', 1, 4, 'ter'),
(38, '18161608', 'CIF 06611-1', '2013/2', 1, 4.8, 'ter'),
(39, '18161608', 'CIF 07199-1', '2015/1', 1, 6.6, 'ter'),
(40, '18161608', 'CIF 07296-1', '2015/1', 1, 4.6, 'ter'),
(41, '18161608', 'CIF 07359-1', '2015/1', 1, 5.5, 'ter'),
(42, '18161608', 'CIF 07458-1', '2014/1', 1, 5.1, 'ter'),
(43, '18161608', 'EIF 07536-1', '2014/1', 1, 5.3, 'ter'),
(44, '18161608', 'CIF 08197-1', '2015/2', 1, 5.4, 'ter'),
(45, '18161608', 'CIF 08297-1', '2014/2', 1, 4.9, 'ter'),
(46, '18161608', 'CIF 08399-1', '2015/2', 1, 4.5, 'ter'),
(47, '18161608', 'CIF 08458-1', '2015/2', 1, 5.1, 'ter'),
(48, '18161608', 'CIF 08599-1', '2015/2', 1, 4.5, 'ter'),
(49, '18161608', 'CIF 09159-1', '2016/1', 1, 5.1, 'ter'),
(50, '18161608', 'CIF 09341-1', '2015/1', 1, 6.2, 'ter'),
(51, '18230912', 'CIF 01191-1', '2010/1', 1, 4, 'ter'),
(52, '18230912', 'CIF 01263-2', '2010/1', 1, 1.7, 'ter'),
(53, '18230912', 'CIF 01263-1', '2010/2', 2, 4, 'ter'),
(54, '18230912', 'CIF 01321-2', '2010/1', 1, 4.2, 'ter'),
(55, '18230912', 'CIF 01451-2', '2010/1', 1, 4.2, 'ter'),
(56, '18230912', 'CIF 01561-2', '2010/1', 1, 3.4, 'ter'),
(57, '18230912', 'CIF 01561-1', '2013/1', 2, 3.2, 'ter'),
(58, '18230912', 'CIF 01561-2', '2014/1', 3, 4.1, 'ter'),
(59, '18230912', 'CIF 02162-1', '2010/2', 1, 1.6, 'ter'),
(60, '18230912', 'CIF 02162-1', '2013/2', 2, 4.3, 'ter'),
(61, '18230912', 'CIF 02263-1', '2011/2', 1, 3.1, 'ter'),
(62, '18230912', 'CIF 02263-1', '2015/2', 2, 5.2, 'ter'),
(63, '18230912', 'CIF 02263-2', '2012/2', 2, 1, 'ter'),
(64, '18230912', 'CIF 02263-1', '2013/2', 3, 1.7, 'ter'),
(65, '18230912', 'CIF 02321-1', '2010/2', 1, 1.7, 'ter'),
(66, '18230912', 'CIF 02321-2', '2012/2', 2, 1.7, 'ter'),
(67, '18230912', 'CIF 02321-1', '2013/2', 3, 3.2, 'ter'),
(68, '18230912', 'CIF 02321-1', '2015/2', 4, 5.8, 'ter'),
(69, '18230912', 'CIF 02452-1', '2010/2', 1, 2.9, 'ter'),
(70, '18230912', 'CIF 02452-1', '2011/2', 2, 4.4, 'ter'),
(71, '18230912', 'HIF 02533-1', '2010/2', 1, 4.9, 'ter'),
(72, '18230912', 'HIF 03111-1', '2011/1', 1, 5.9, 'ter'),
(73, '18230912', 'CIF 03263-1', '2014/1', 1, 2.4, 'ter'),
(74, '18230912', 'CIF 03321-1', '2014/1', 1, 2, 'ter'),
(75, '18230912', 'CIF 03453-1', '2012/1', 1, 5.4, 'ter'),
(76, '18230912', 'HIF 03533-1', '2011/1', 1, 4.4, 'ter'),
(77, '18230912', 'HIF 04113-1', '2011/2', 1, 4.6, 'ter'),
(78, '18230912', 'CIF 04452-1', '2012/2', 1, 4.8, 'ter'),
(79, '18230912', 'CIF 04556-1', '2011/2', 1, 4, 'ter'),
(80, '18230912', 'CIF 04655-1', '2011/2', 1, 6.7, 'ter'),
(81, '18230912', 'CIF 05141-1', '2012/1', 1, 5.1, 'ter'),
(82, '18230912', 'CIF 05295-1', '2012/1', 1, 4.3, 'ter'),
(83, '18230912', 'CIF 05353-1', '2012/1', 1, 4.3, 'ter'),
(84, '18230912', 'CIF 05455-1', '2012/1', 1, 4, 'ter'),
(85, '18230912', 'CIF 05555-1', '2012/1', 1, 4.5, 'ter'),
(86, '18230912', 'CIF 06145-1', '2012/2', 1, 4.3, 'ter'),
(87, '18230912', 'CIF 06297-1', '2013/2', 1, 6.2, 'ter'),
(88, '18230912', 'CIF 06459-1', '2013/2', 1, 3.9, 'ter'),
(89, '18230912', 'CIF 06459-1', '2014/2', 2, 1, 'ter'),
(90, '18230912', 'CIF 06459-1', '2015/2', 3, 2.1, 'ter'),
(91, '18230912', 'CIF 06459-1', '2016/2', 4, 0, 'ins'),
(92, '18230912', 'CIF 06558-1', '2012/2', 1, 4.6, 'ter'),
(93, '18230912', 'CIF 07199-1', '2013/1', 1, 4.9, 'ter'),
(94, '18230912', 'CIF 07296-1', '2014/1', 1, 3.6, 'ter'),
(95, '18230912', 'CIF 07296-1', '2015/1', 2, 1.4, 'ter'),
(96, '18230912', 'CIF 07359-1', '2013/1', 1, 1, 'ter'),
(97, '18230912', 'CIF 07359-1', '2014/1', 2, 3.5, 'ter'),
(98, '18230912', 'CIF 07458-1', '2013/1', 1, 5.1, 'ter'),
(99, '18230912', 'EIF 07536-1', '2013/1', 1, 5.5, 'ter'),
(100, '18230912', 'IIF 07630-1', '2015/2', 1, 1, 'ter'),
(101, '18230912', 'CIF 08197-1', '2014/2', 1, 1, 'ter'),
(102, '18230912', 'CIF 08297-1', '2013/2', 1, 4.1, 'ter'),
(103, '18230912', 'CIF 08399-1', '2014/2', 1, 1, 'ter'),
(104, '18230912', 'CIF 08458-1', '2014/2', 1, 1, 'ter'),
(105, '18230912', 'CIF 08599-1', '2013/2', 1, 4.6, 'ter'),
(106, '18230912', 'CIF 09341-1', '2015/1', 1, 2.5, 'ter');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`cod_asign`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `rut` (`rut`),
  ADD KEY `cod_asign` (`cod_asign`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `alumno` (`rut`),
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`cod_asign`) REFERENCES `asignatura` (`cod_asign`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
