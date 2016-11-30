-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2016 a las 02:57:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Concentracion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administrador`
--

CREATE TABLE `Administrador` (
  `id` int(11) NOT NULL,
  `rut` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `dv` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_perfil` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `prueba` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Administrador`
--

INSERT INTO `Administrador` (`id`, `rut`, `dv`, `nombre`, `apellidop`, `apellidom`, `direccion`, `ciudad`, `email`, `estado`, `pass`, `image_perfil`, `prueba`) VALUES
(1, '13247196', '7', 'ADMIN', 'MASTER', 'CONTROL', 'Playa Ancha', 'Valparaiso UPLA', 'administrador_crud@upla.cl', 'Activo', '03ac52ab58020bcc77792fbfa2f48c41', 'http://icon-icons.com/icons2/37/PNG/512/administrator_3552.png', NULL);

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
  `ciudad` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promocion` int(11) DEFAULT NULL,
  `image_perfil` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_carrera` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`rut`, `dv`, `nombre`, `apellidop`, `apellidom`, `direccion`, `ciudad`, `email`, `telefono`, `promocion`, `image_perfil`, `id_carrera`, `estado`) VALUES
('10206103', '9', 'JUAN ALBERTO', 'AGUILERIA', 'JERIA', 'asdada', 'asdasdasd', 'juan.a.aguilera@gmail.com', '48273645', 1232, 'https://www.b1g1.com/assets/admin/images/no_image_user.png', 'NAF-1397', 'Suspendido'),
('10384239', '5', 'ANDRES IGNACIO', 'ECHEVERRIA', 'FUENTES', 'SAN MIGUEL 360 PLACILLA', 'SAN ANTONIO', 'andres.ignacio@gmail.com', '97634521', 2017, 'https://www.b1g1.com/assets/admin/images/no_image_user.png', 'NAF-1397', 'Eliminado'),
('18161608', '3', 'CARLO ALBERTO', 'ECHEVERRIA', 'FUENTES ', 'SAN MIGUEL 360 PLACILLA', 'SAN ANTONIO', 'carlo.echeverria@alumnos.upla.cl', '42917068', 2011, 'https://www.b1g1.com/assets/admin/images/no_image_user.png', 'NAF-1397', 'Activo'),
('18230912', '5', 'JUAN FRANCISCO', 'PEREZ', 'CERDA ', 'PASAJE PISCIS 4603', 'VALPARAISO', 'juan.perez.c@alumnos.upla.cl', '65892456', 2010, 'https://www.b1g1.com/assets/admin/images/no_image_user.png', 'NAF-1397', 'Suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asignatura`
--

CREATE TABLE `Asignatura` (
  `cod_asign` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_asign` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_carrera` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Asignatura`
--

INSERT INTO `Asignatura` (`cod_asign`, `nombre_asign`, `id_carrera`) VALUES
('CIF 01191-1', 'INTRODUCCION A LA INGENIERIA', 'NAF-1397'),
('CIF 01191-2', 'INTRODUCCION A LA INGENIERIA', 'NAF-1397'),
('CIF 01263-1', 'CALCULO DIFERENCIAL', 'NAF-1397'),
('CIF 01263-2', 'CALCULO DIFERENCIAL', 'NAF-1397'),
('CIF 01321-1', 'FISICA GENERAL I: MECANICA', 'NAF-1397'),
('CIF 01321-2', 'FISICA GENERAL I: MECANICA', 'NAF-1397'),
('CIF 01451-1', 'INTRODUCCION A LA INFORMATICA', 'NAF-1397'),
('CIF 01451-2', 'INTRODUCCION A LA INFORMATICA', 'NAF-1397'),
('CIF 01561-1', 'ALGEBRA', 'NAF-1397'),
('CIF 01561-2', 'ALGEBRA', 'NAF-1397'),
('CIF 02162-1', 'ALGEBRA LINEAL', 'NAF-1397'),
('CIF 02263-1', 'CALCULO INTEGRAL Y SERIES', 'NAF-1397'),
('CIF 02263-2', 'CALCULO INTEGRAL Y SERIES', 'NAF-1397'),
('CIF 02321-1', 'FISICA GENERAL II:CALOR Y ONDAS3', 'NAF-1397'),
('CIF 02321-2', 'FISICA GENERAL II:CALOR Y ONDAS', 'NAF-1397'),
('CIF 02452-1', 'FUNDAMENTOS DE PROGRAMACION', 'NAF-1397'),
('CIF 03263-1', 'CALCULO MULTIVARIADO', 'NAF-1397'),
('CIF 03321-1', 'ELECTROMAGNETISMO', 'NAF-1397'),
('CIF 03453-1', 'ESTRUCTURA Y REPRESENTACION DE DATOS', 'NAF-1397'),
('CIF 04263-1', 'ECUACIONES DIFERENCIALES', 'NAF-1397'),
('CIF 04321-1', 'FUNDAMENTOS DE ELECTRONICA', 'NAF-1397'),
('CIF 04452-1', 'TALLER DE PROGRAMACION', 'NAF-1397'),
('CIF 04556-1', 'SISTEMAS OPERATIVOS', 'NAF-1397'),
('CIF 04655-1', 'TEORIA DE SISTEMAS', 'NAF-1397'),
('CIF 05141-1', 'ESTADISTICA', 'NAF-1397'),
('CIF 05295-1', 'MACRO Y MICROECONOMIA', 'NAF-1397'),
('CIF 05353-1', 'MODELOS DE DATOS', 'NAF-1397'),
('CIF 05455-1', 'REDES DE COMPUTADORES', 'NAF-1397'),
('CIF 05555-1', 'ANALISIS DE SISTEMAS', 'NAF-1397'),
('CIF 06145-1', 'INVESTIGACION DE OPERACIONES', 'NAF-1397'),
('CIF 06297-1', 'GESTION DE EMPRESA', 'NAF-1397'),
('CIF 06356-1', 'SISTEMA DE BASE DE DATOS', 'NAF-1397'),
('CIF 06459-1', 'TECNOLOGIA DE MULTIMEDIA', 'NAF-1397'),
('CIF 06558-1', 'INGENIERIA DE SOFTWARE', 'NAF-1397'),
('CIF 06611-1', 'POLITICA Y ECONOMIA DE LA INFORMACION', 'NAF-1397'),
('CIF 07199-1', 'INFORMATICA Y DERECHO', 'NAF-1397'),
('CIF 07296-1', 'PLANIFICACION Y ESTRATEGICA', 'NAF-1397'),
('CIF 07359-1', 'INTELIGENCIA ARTIFICIAL', 'NAF-1397'),
('CIF 07458-1', 'METODOLOGIA DE DESARROLLO DE SOFTWARE', 'NAF-1397'),
('CIF 08197-1', 'FORMULACION Y EVALUACION DE PROYECTOS', 'NAF-1397'),
('CIF 08297-1', 'ADMINISTRACION DE RECURSOS HUMANOS', 'NAF-1397'),
('CIF 08399-1', 'SEMINARIO DE INVESTIGACION', 'NAF-1397'),
('CIF 08458-1', 'INGENIERIA DEL CONOCIMIENTO', 'NAF-1397'),
('CIF 08599-1', 'AUDITORIA INFORMATICA', 'NAF-1397'),
('CIF 09159-1', 'TALLER DE INTEGRADO', 'NAF-1397'),
('CIF 09341-1', 'INFORMATICA Y ETICA', 'NAF-1397'),
('CIF 9299-1', 'PROYECTO DE TITULO I', 'NAF-1397'),
('EIF 07536-1', 'SOCIOLOGIA', 'NAF-1397'),
('FIF 05614-2', 'F.G.1.:ACONDICIONAMIENTO FISICO', 'NAF-1397'),
('HIF 02533-1', 'INGLES I', 'NAF-1397'),
('HIF 03111-1', 'INTRODUCCION A LAS CS. DE LA INFORMACION', 'NAF-1397'),
('HIF 03533-1', 'INGLES II', 'NAF-1397'),
('HIF 04113-1', 'FUENTES DE INFORMACION', 'NAF-1397'),
('IFF 07608-1', 'F.G.2: DESARROLLO ORGANIZACIONAL', 'NAF-1397'),
('IIF 05604-1', 'F.G.1.:DISEÃ‘O DE PAGINA WEB', 'NAF-1397'),
('IIF 05614-1', 'F.G.1.:PROGRAMACION EN NET', 'NAF-1397'),
('IIF 05626-1', 'F.G.1.:PROGRAMACION EN ANDROID', 'NAF-1397'),
('IIF 07630-1', 'F.G.2.: AYUDEMOS A LA REFORESTACION', 'NAF-1397');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_carrera` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_coordinador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`, `id_coordinador`) VALUES
('NAF-1397', 'INGENIERIA EN INFORMATICA', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Coordinador`
--

CREATE TABLE `Coordinador` (
  `id` int(11) NOT NULL,
  `rut` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `dv` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new_pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyreg` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keypass` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_perfil` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Coordinador`
--

INSERT INTO `Coordinador` (`id`, `rut`, `dv`, `nombre`, `apellidop`, `apellidom`, `direccion`, `ciudad`, `email`, `telefono`, `estado`, `pass`, `new_pass`, `keyreg`, `keypass`, `image_perfil`) VALUES
(28, '14315550', '1', 'JAVIER ANDRES', 'CASTILLO', 'ALLARIA', 'UPLA', 'VALPARAISO', 'javier.castillo@upla.cl', NULL, 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png');

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
(138, '18161608', 'CIF 01191-1', '2011/2', 1, 4.5, 'ter'),
(139, '18161608', 'CIF 01263-1', '2011/2', 1, 4.2, 'ter'),
(140, '18161608', 'CIF 01321-1', '2011/2', 1, 4, 'ter'),
(141, '18161608', 'CIF 01451-1', '2011/1', 1, 4.6, 'ter'),
(142, '18161608', 'CIF 01561-1', '2011/1', 1, 4.9, 'ter'),
(143, '18161608', 'CIF 02162-1', '2011/2', 1, 2, 'ter'),
(144, '18161608', 'CIF 02162-1', '2013/2', 2, 4.9, 'ter'),
(145, '18161608', 'CIF 02263-1', '2012/2', 1, 3.8, 'ter'),
(146, '18161608', 'CIF 02263-1', '2013/1', 2, 4.2, 'ter'),
(147, '18161608', 'CIF 02321-1', '2012/1', 1, 5, 'ter'),
(148, '18161608', 'CIF 02452-1', '2011/2', 1, 2.5, 'ter'),
(149, '18161608', 'CIF 02452-1', '2012/2', 2, 4, 'ter'),
(150, '18161608', 'HIF 02533-1', '2011/2', 1, 4.1, 'ter'),
(151, '18161608', 'HIF 03111-1', '2012/1', 1, 4.9, 'ter'),
(152, '18161608', 'CIF 03263-1', '2014/1', 1, 4.7, 'ter'),
(153, '18161608', 'CIF 03321-1', '2013/1', 1, 4.2, 'ter'),
(154, '18161608', 'CIF 03453-1', '2013/1', 1, 2.5, 'ter'),
(155, '18161608', 'CIF 03453-1', '2014/1', 2, 4.5, 'ter'),
(156, '18161608', 'HIF 03533-1', '2012/1', 1, 4.8, 'ter'),
(157, '18161608', 'HIF 04113-1', '2012/2', 1, 5.5, 'ter'),
(158, '18161608', 'CIF 04263-1', '2014/2', 1, 4.7, 'ter'),
(159, '18161608', 'CIF 04321-1', '2013/2', 1, 4.7, 'ter'),
(160, '18161608', 'CIF 04452-1', '2014/2', 1, 4.2, 'ter'),
(161, '18161608', 'CIF 04556-1', '2012/2', 1, 4, 'ter'),
(162, '18161608', 'CIF 04655-1', '2012/2', 1, 6, 'ter'),
(163, '18161608', 'CIF 05141-1', '2014/1', 1, 4.4, 'ter'),
(164, '18161608', 'CIF 05295-1', '2013/1', 1, 4.2, 'ter'),
(165, '18161608', 'CIF 05353-1', '2013/1', 1, 4, 'ter'),
(166, '18161608', 'CIF 05455-1', '2015/1', 1, 5.1, 'ter'),
(167, '18161608', 'CIF 05555-1', '2013/1', 1, 4.2, 'ter'),
(168, '18161608', 'FIF 05614-2', '2015/1', 1, 6.8, 'ter'),
(169, '18161608', 'IIF 05626-1', '2013/1', 1, 1, 'ter'),
(170, '18161608', 'CIF 06145-1', '2014/2', 1, 4.8, 'ter'),
(171, '18161608', 'CIF 06297-1', '2013/2', 1, 5.5, 'ter'),
(172, '18161608', 'CIF 06356-1', '2013/2', 1, 4.1, 'ter'),
(173, '18161608', 'CIF 06459-1', '2015/2', 1, 2.3, 'ter'),
(174, '18161608', 'CIF 06558-1', '2013/2', 1, 4, 'ter'),
(175, '18161608', 'CIF 06611-1', '2013/2', 1, 4.8, 'ter'),
(176, '18161608', 'CIF 07199-1', '2015/1', 1, 6.6, 'ter'),
(177, '18161608', 'CIF 07296-1', '2015/1', 1, 4.6, 'ter'),
(178, '18161608', 'CIF 07359-1', '2015/1', 1, 5.5, 'ter'),
(179, '18161608', 'CIF 07458-1', '2014/1', 1, 5.1, 'ter'),
(180, '18161608', 'EIF 07536-1', '2014/1', 1, 5.3, 'ter'),
(181, '18161608', 'CIF 08197-1', '2015/2', 1, 5.4, 'ter'),
(182, '18161608', 'CIF 08297-1', '2014/2', 1, 4.9, 'ter'),
(183, '18161608', 'CIF 08399-1', '2015/2', 1, 4.5, 'ter'),
(184, '18161608', 'CIF 08458-1', '2015/2', 1, 5.1, 'ter'),
(185, '18161608', 'CIF 08599-1', '2015/2', 1, 4.5, 'ter'),
(186, '18161608', 'CIF 09159-1', '2016/1', 1, 5.1, 'ter'),
(187, '18161608', 'CIF 09341-1', '2015/1', 1, 6.2, 'ter'),
(188, '18230912', 'CIF 01191-1', '2010/1', 1, 4, 'ter'),
(189, '18230912', 'CIF 01263-2', '2010/1', 1, 1.7, 'ter'),
(190, '18230912', 'CIF 01263-1', '2010/2', 2, 4, 'ter'),
(191, '18230912', 'CIF 01321-2', '2010/1', 1, 4.2, 'ter'),
(192, '18230912', 'CIF 01451-2', '2010/1', 1, 4.2, 'ter'),
(193, '18230912', 'CIF 01561-2', '2010/1', 1, 3.4, 'ter'),
(194, '18230912', 'CIF 01561-1', '2013/1', 2, 3.2, 'ter'),
(195, '18230912', 'CIF 01561-2', '2014/1', 3, 4.1, 'ter'),
(196, '18230912', 'CIF 02162-1', '2010/2', 1, 1.6, 'ter'),
(197, '18230912', 'CIF 02162-1', '2013/2', 2, 4.3, 'ter'),
(198, '18230912', 'CIF 02263-1', '2011/2', 1, 3.1, 'ter'),
(199, '18230912', 'CIF 02263-1', '2015/2', 2, 5.2, 'ter'),
(200, '18230912', 'CIF 02263-2', '2012/2', 2, 1, 'ter'),
(201, '18230912', 'CIF 02263-1', '2013/2', 3, 1.7, 'ter'),
(202, '18230912', 'CIF 02321-1', '2010/2', 1, 1.7, 'ter'),
(203, '18230912', 'CIF 02321-2', '2012/2', 2, 1.7, 'ter'),
(204, '18230912', 'CIF 02321-1', '2013/2', 3, 3.2, 'ter'),
(205, '18230912', 'CIF 02321-1', '2015/2', 4, 5.8, 'ter'),
(206, '18230912', 'CIF 02452-1', '2010/2', 1, 2.9, 'ter'),
(207, '18230912', 'CIF 02452-1', '2011/2', 2, 4.4, 'ter'),
(208, '18230912', 'HIF 02533-1', '2010/2', 1, 4.9, 'ter'),
(209, '18230912', 'HIF 03111-1', '2011/1', 1, 5.9, 'ter'),
(210, '18230912', 'CIF 03263-1', '2014/1', 1, 2.4, 'ter'),
(211, '18230912', 'CIF 03321-1', '2014/1', 1, 2, 'ter'),
(212, '18230912', 'CIF 03453-1', '2012/1', 1, 5.4, 'ter'),
(213, '18230912', 'HIF 03533-1', '2011/1', 1, 4.4, 'ter'),
(214, '18230912', 'HIF 04113-1', '2011/2', 1, 4.6, 'ter'),
(215, '18230912', 'CIF 04452-1', '2012/2', 1, 4.8, 'ter'),
(216, '18230912', 'CIF 04556-1', '2011/2', 1, 4, 'ter'),
(217, '18230912', 'CIF 04655-1', '2011/2', 1, 6.7, 'ter'),
(218, '18230912', 'CIF 05141-1', '2012/1', 1, 5.1, 'ter'),
(219, '18230912', 'CIF 05295-1', '2012/1', 1, 4.3, 'ter'),
(220, '18230912', 'CIF 05353-1', '2012/1', 1, 4.3, 'ter'),
(221, '18230912', 'CIF 05455-1', '2012/1', 1, 4, 'ter'),
(222, '18230912', 'CIF 05555-1', '2012/1', 1, 4.5, 'ter'),
(223, '18230912', 'CIF 06145-1', '2012/2', 1, 4.3, 'ter'),
(224, '18230912', 'CIF 06297-1', '2013/2', 1, 6.2, 'ter'),
(225, '18230912', 'CIF 06459-1', '2013/2', 1, 3.9, 'ter'),
(226, '18230912', 'CIF 06459-1', '2014/2', 2, 1, 'ter'),
(227, '18230912', 'CIF 06459-1', '2015/2', 3, 2.1, 'ter'),
(228, '18230912', 'CIF 06459-1', '2016/2', 4, 0, 'ins'),
(229, '18230912', 'CIF 06558-1', '2012/2', 1, 4.6, 'ter'),
(230, '18230912', 'CIF 07199-1', '2013/1', 1, 4.9, 'ter'),
(231, '18230912', 'CIF 07296-1', '2014/1', 1, 3.6, 'ter'),
(232, '18230912', 'CIF 07296-1', '2015/1', 2, 1.4, 'ter'),
(233, '18230912', 'CIF 07359-1', '2013/1', 1, 1, 'ter'),
(234, '18230912', 'CIF 07359-1', '2014/1', 2, 3.5, 'ter'),
(235, '18230912', 'CIF 07458-1', '2013/1', 1, 5.1, 'ter'),
(236, '18230912', 'EIF 07536-1', '2013/1', 1, 5.5, 'ter'),
(237, '18230912', 'IIF 07630-1', '2015/2', 1, 1, 'ter'),
(238, '18230912', 'CIF 08197-1', '2014/2', 1, 1, 'ter'),
(239, '18230912', 'CIF 08297-1', '2013/2', 1, 4.1, 'ter'),
(240, '18230912', 'CIF 08399-1', '2014/2', 1, 1, 'ter'),
(241, '18230912', 'CIF 08458-1', '2014/2', 1, 1, 'ter'),
(242, '18230912', 'CIF 08599-1', '2013/2', 1, 4.6, 'ter'),
(243, '18230912', 'CIF 09341-1', '2015/1', 1, 2.5, 'ter'),
(279, '18161608', 'CIF 06459-1', '2016/2', 2, 0, 'ins'),
(280, '18161608', 'CIF 9299-1', '2016/2', 1, 0, 'ins'),
(281, '18161608', 'IFF 07608-1', '2016/2', 1, 0, 'ins');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Profesor`
--

CREATE TABLE `Profesor` (
  `id` int(11) NOT NULL,
  `rut` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `dv` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new_pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyreg` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keypass` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_perfil` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Profesor`
--

INSERT INTO `Profesor` (`id`, `rut`, `dv`, `nombre`, `apellidop`, `apellidom`, `direccion`, `ciudad`, `email`, `telefono`, `estado`, `pass`, `new_pass`, `keyreg`, `keypass`, `image_perfil`) VALUES
(13, '14315550', '1', 'JAVIER ANDRES', 'CASTILLO', 'ALLARIA', 'UPLA', 'VALPO', 'javier.castillo@upla.cl', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png'),
(14, '12042904', '3', 'MANUEL', 'CONTRERAS', 'GOMEZ', 'hgsdasdhty', 'tuysgdaysdtgy', 'dgasjdsajdg', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png'),
(15, '14010712', '3', 'ENRIQUE', 'VARGAS', 'FUENTES', 'YTDUYFGSYFTU', 'YGTDSUYDSTF', 'DTHASYDTUASYDTDS@DFKHSTDUYFTU', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png'),
(16, '12541072', '3', 'MIGUEL', 'RUBIO', 'ROMAN', 'TDFIUDHSUH', 'UDFHSIUHYIU', 'JKASBDHGJASGBH@SDKFHSDHF', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png'),
(17, '11290397', '6', 'TATIANA', 'ILABACA', 'WENTELEMN', 'UJSDGJASHBD', 'GJHBDAHSGJH', 'GDJHGASJDHSYT', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png'),
(18, '13385094', '5', 'JOSE', 'MEZA', 'RAMIREZ', 'UYDSIHYIU', 'YQISUDA', 'FDHDSFYSDUFY@DFKDUIHYI', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png'),
(19, '13526724', '4', 'HECTOR', 'LUNA', 'CARRASCO', 'IUDFHUSDFHUH', 'UDFHSUSDFHUDFSY', 'FHASHDYASUD@SKFJYSDIFUY', '', 'Activo', '47b4d0c9445131dec646a489805f0f52', NULL, NULL, NULL, 'https://www.b1g1.com/assets/admin/images/no_image_user.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Prof_Asignatura`
--

CREATE TABLE `Prof_Asignatura` (
  `id` int(11) NOT NULL,
  `cod_asign` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `periodo` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Prof_Asignatura`
--

INSERT INTO `Prof_Asignatura` (`id`, `cod_asign`, `id_profesor`, `periodo`) VALUES
(85, 'CIF 02162-1', 15, '2013/2'),
(86, 'CIF 06356-1', 17, '2013/2'),
(87, 'CIF 06459-1', 13, '2015/2'),
(88, 'CIF 07359-1', 16, '2015/1'),
(89, 'CIF 02263-1', 19, '2013/1'),
(90, 'CIF 06297-1', 18, '2013/2'),
(91, 'CIF 01191-1', 14, '2011/2'),
(112, 'CIF 04263-1', 15, '2014/2'),
(113, 'CIF 06459-1', 13, '2016/2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rut` (`rut`);

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `Asignatura`
--
ALTER TABLE `Asignatura`
  ADD PRIMARY KEY (`cod_asign`),
  ADD KEY `asignaturaadasd_ibfk_1` (`id_carrera`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `id_coordinador` (`id_coordinador`);

--
-- Indices de la tabla `Coordinador`
--
ALTER TABLE `Coordinador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rut` (`rut`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `rut` (`rut`),
  ADD KEY `cod_asign` (`cod_asign`);

--
-- Indices de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rut` (`rut`);

--
-- Indices de la tabla `Prof_Asignatura`
--
ALTER TABLE `Prof_Asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_asign` (`cod_asign`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Administrador`
--
ALTER TABLE `Administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Coordinador`
--
ALTER TABLE `Coordinador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- AUTO_INCREMENT de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `Prof_Asignatura`
--
ALTER TABLE `Prof_Asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `Asignatura`
--
ALTER TABLE `Asignatura`
  ADD CONSTRAINT `asignaturaadasd_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`id_coordinador`) REFERENCES `Coordinador` (`id`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `alumno` (`rut`),
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`cod_asign`) REFERENCES `asignatura` (`cod_asign`);

--
-- Filtros para la tabla `Prof_Asignatura`
--
ALTER TABLE `Prof_Asignatura`
  ADD CONSTRAINT `prof_asignatura_ibfk_1` FOREIGN KEY (`cod_asign`) REFERENCES `asignatura` (`cod_asign`),
  ADD CONSTRAINT `prof_asignatura_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `Profesor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
