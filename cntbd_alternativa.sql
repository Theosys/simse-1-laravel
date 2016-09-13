-- phpMyAdmin SQL Dump
-- version 4.6.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2016 at 01:40 AM
-- Server version: 5.6.30-1
-- PHP Version: 5.6.21-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simse`
--

-- --------------------------------------------------------

--
-- Table structure for table `cntbd_alternativa`
--

CREATE TABLE `cntbd_alternativa` (
  `i_codalt` int(11) NOT NULL,
  `v_desalt` varchar(255) NOT NULL,
  `v_resumen` varchar(255) DEFAULT NULL,
  `i_codpreg` int(11) NOT NULL,
  `v_orienta` varchar(3) DEFAULT NULL,
  `i_clave` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `i_usureg` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `i_usumod` int(11) DEFAULT NULL,
  `i_estreg` int(11) NOT NULL,
  `v_answer` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cntbd_alternativa`
--

INSERT INTO `cntbd_alternativa` (`i_codalt`, `v_desalt`, `v_resumen`, `i_codpreg`, `v_orienta`, `i_clave`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `v_answer`) VALUES
(1, 'SI', 'Conformado', 1, '', 1, '2014-02-10 14:21:16', 1, '2014-05-22 10:22:44', 1, 1, '0'),
(2, 'NO', NULL, 1, '', NULL, '2014-02-10 14:23:06', 1, '2014-02-10 14:50:41', 1, 1, '0'),
(3, 'Jefe o funcionario de la OPP', 'OPP', 2, '', NULL, '2014-02-10 14:55:31', 1, '2014-09-05 13:53:21', 1, 1, '0'),
(4, 'Jefe o funcionario de la ODN (Oficina de Defensa Nacional) o Jefe de ODC (Oficina de Defensa Civil)', 'D.Civil / Otro', 2, '', 1, '2014-02-10 15:33:04', 1, '2015-06-17 12:23:59', 1, 1, '0'),
(5, 'Jefe o funcionario de otra oficina o gerencia', 'D.Civil / Otro', 2, '', NULL, '2014-02-10 15:33:39', 1, '2014-09-05 13:53:38', 1, 1, '0'),
(6, 'Ninguna de las anteriores', 'D.Civil / Otro', 2, '', NULL, '2014-02-10 15:34:02', 1, '2014-03-25 11:43:40', 1, 1, '0'),
(7, 'SI', 'Instalado', 3, '', 1, '2014-02-10 15:41:36', 1, '2015-06-17 12:24:18', 1, 1, '0'),
(8, 'NO', NULL, 3, '', NULL, '2014-02-10 15:41:41', 1, NULL, NULL, 1, '0'),
(9, 'No tiene personal tÃ©cnico operativo para la GestiÃ³n Prospectiva/Correctiva', NULL, 4, '', NULL, '2014-02-10 15:46:57', 1, NULL, NULL, 1, '0'),
(10, 'Tiene personal tÃ©cnico operativo propio de las gerencias para la GestiÃ³n Prospectiva/Correctiva', 'Personal propio', 4, '', 1, '2014-02-10 15:47:57', 1, '2015-06-17 12:25:51', 1, 1, '0'),
(11, 'Tiene personal contratado para las funciones especÃ­ficas de GestiÃ³n Prospectiva/Correctiva', 'Personal contratado', 4, '', NULL, '2014-02-10 15:48:44', 1, '2014-03-25 11:04:38', 1, 1, '0'),
(12, 'Contrata servicios de consultorÃ­a para la GestiÃ³n Prospectiva/Correctiva', 'Consultorias', 4, '', NULL, '2014-02-10 15:49:23', 1, '2014-03-25 11:04:52', 1, 1, '0'),
(13, 'Otra', NULL, 4, '', NULL, '2014-02-10 15:49:28', 1, NULL, NULL, 0, '0'),
(14, 'SI', 'Adecuado', 5, '', 1, '2014-02-10 15:50:00', 1, '2014-05-21 12:35:03', 1, 1, '0'),
(15, 'NO', NULL, 5, '', NULL, '2014-02-10 15:50:07', 1, NULL, NULL, 1, '0'),
(16, 'Se encuentra en revisiÃ³n', NULL, 5, '', NULL, '2014-02-10 15:50:14', 1, '2014-06-09 14:46:22', 1, 0, '0'),
(17, 'SI', 'Recibida', 6, '', 1, '2014-02-10 15:51:43', 1, '2014-05-21 12:39:40', 1, 1, '0'),
(18, 'NO', NULL, 6, '', NULL, '2014-02-10 15:51:48', 1, NULL, NULL, 1, '0'),
(19, 'Desarrollar mÃ©todos con aplicaciones prÃ¡cticas de los procesos de estimaciÃ³n, prevenciÃ³n y reducciÃ³n del riesgo', 'AplicaciÃ³n practica', 7, '', NULL, '2014-02-10 15:55:13', 1, '2014-03-25 11:20:28', 1, 1, '0'),
(20, 'Utilizar especialistas con enfoque multisectorial', 'EspecializaciÃ³n multisectorial', 7, '', NULL, '2014-02-10 15:55:45', 1, '2014-03-25 11:20:44', 1, 1, '0'),
(21, 'Incrementar el tiempo y nÃºmero de sesiones de capacitaciÃ³n', 'Mas tiempo', 7, '', 1, '2014-02-10 15:56:16', 1, '2015-06-17 12:27:17', 1, 1, '0'),
(22, 'Promover la participaciÃ³n del sector privado y organizaciones civiles locales', 'ParticipaciÃ³n del Sector Privado y Organiz. Civiles', 7, '', NULL, '2014-02-10 15:57:09', 1, '2014-03-25 11:21:37', 1, 1, '0'),
(23, 'Coordinar las actividades de CENEPRED e INDECI de cara a los gobiernos regionales y locales para evitar la confusiÃ³n de roles', 'Mayor coordinaciÃ³n Cenepred/Indeci', 7, '', NULL, '2014-02-10 15:58:20', 1, '2014-03-25 11:21:54', 1, 1, '0'),
(24, 'Otra', NULL, 7, '', NULL, '2014-02-10 15:58:25', 1, '2014-02-13 14:43:08', 1, 0, '0'),
(25, 'SI', 'Si', 8, '', 1, '2014-02-10 17:13:36', 1, '2015-06-17 12:27:40', 1, 1, '0'),
(26, 'NO', NULL, 8, '', NULL, '2014-02-10 17:13:42', 1, NULL, NULL, 1, '0'),
(27, 'SI', 'Vigente', 9, '', 1, '2014-02-10 17:14:10', 1, '2014-05-21 12:39:55', 1, 1, '0'),
(28, 'NO', NULL, 9, '', NULL, '2014-02-10 17:14:16', 1, NULL, NULL, 1, '0'),
(29, 'SI', 'SÃ­ Incluida', 10, '', 1, '2014-02-10 17:16:50', 1, '2014-05-21 12:40:15', 1, 1, '0'),
(30, 'NO', NULL, 10, '', NULL, '2014-02-10 17:16:55', 1, '2014-02-14 14:36:35', 1, 1, '0'),
(31, 'SI', 'Si', 11, '', 1, '2014-02-10 17:30:50', 1, '2014-05-21 12:40:29', 1, 1, '0'),
(32, 'NO', NULL, 11, '', NULL, '2014-02-10 17:30:55', 1, '2014-02-14 14:39:16', 1, 1, '0'),
(33, 'PP-068 (Programa Presupuestal 068)', 'PP 068', 12, '', 1, '2014-02-11 13:56:23', 1, '2015-06-17 12:28:31', 1, 1, '0'),
(34, 'FONIPREL - Fondo de PromociÃ³n a la InversiÃ³n PÃºblica Regional y Local (para la gestiÃ³n prospectiva y correctiva)', 'FONIPREL', 12, '', NULL, '2014-02-11 13:57:58', 1, '2014-03-25 11:27:31', 1, 1, '0'),
(35, 'PI - Plan de incentivos a la mejora de la GestiÃ³n Municipal (para la gestiÃ³n prospectiva y correctiva)', 'PI', 12, '', NULL, '2014-02-11 13:58:51', 1, '2015-03-05 16:35:03', 1, 1, '0'),
(36, 'Ninguno', NULL, 12, '', NULL, '2014-02-11 13:59:34', 1, '2014-03-20 16:25:20', 1, 1, '0'),
(37, 'PP-068 (Programa Presupuestal 068)', 'PP 068', 13, '', 1, '2014-02-11 14:00:00', 1, '2015-06-17 12:28:48', 1, 1, '0'),
(38, 'FONIPREL - Fondo de PromociÃ³n a la InversiÃ³n PÃºblica Regional y Local (para la gestiÃ³n prospectiva y correctiva)', 'FONIPREL', 13, '', NULL, '2014-02-11 14:00:16', 1, '2014-03-25 11:28:32', 1, 1, '0'),
(39, 'PI - Plan de incentivos a la mejora de la GestiÃ³n Municipal (para la gestiÃ³n prospectiva y correctiva) ', 'PI', 13, '', NULL, '2014-02-11 14:00:40', 1, '2015-03-05 16:35:32', 1, 1, '0'),
(40, 'Otra', NULL, 13, '', NULL, '2014-02-11 14:00:54', 1, '2014-02-14 14:47:30', 1, 1, '0'),
(41, 'Inventario de peligro (s)', 'Actividad o Estudio', 14, '', NULL, '2014-02-11 14:02:55', 1, '2014-03-25 12:51:58', 1, 1, '0'),
(42, 'AnÃ¡lisis de vulnerabilidad', 'Actividad o Estudio', 14, '', NULL, '2014-02-11 14:03:12', 1, '2014-03-25 12:52:05', 1, 1, '0'),
(43, 'EvaluaciÃ³n de riesgos', 'Actividad o Estudio', 14, '', NULL, '2014-02-11 14:03:27', 1, '2014-03-25 12:52:11', 1, 1, '0'),
(44, 'Plan especÃ­fico o proyecto de prevenciÃ³n del riesgo (evitar riesgos futuros en nueva infraestructura)', 'PIP', 14, '', 1, '2014-02-11 14:04:29', 1, '2014-05-22 10:09:04', 1, 1, '0'),
(45, 'Plan especÃ­fico o proyecto de reducciÃ³n del riesgo (reducir riesgo existente)', 'PIP', 14, '', NULL, '2014-02-11 14:16:30', 1, '2014-03-25 12:52:31', 1, 1, '0'),
(46, 'SI', 'Si', 15, '', 1, '2014-02-11 14:42:35', 1, '2015-06-17 12:29:17', 1, 1, '0'),
(47, 'NO', NULL, 15, '', NULL, '2014-02-11 14:42:41', 1, '2014-02-14 14:50:03', 1, 1, '0'),
(48, 'L.T. FormaciÃ³n de grupo de trabajo RM 276-2012-PCM', 'GTGRD', 16, 'FIL', 1, '2014-02-11 14:43:58', 1, '2015-06-17 12:29:40', 1, 1, '0'),
(49, 'L.T. EstimaciÃ³n de riesgos RM 334-2012-PCM', 'EstimaciÃ³n del riesgo', 16, 'FIL', NULL, '2014-02-11 14:44:39', 1, '2014-03-25 17:11:47', 1, 1, '0'),
(50, 'L.T. PrevenciÃ³n de riesgos RM 222-2013-PCM', 'PrevenciÃ³n del Riesgo', 16, 'FIL', NULL, '2014-02-11 14:45:10', 1, '2014-05-14 16:09:15', 1, 1, '0'),
(51, 'L.T. ReducciÃ³n de riesgos RM 220-2013-PCM', 'ReducciÃ³n del Riesgo', 16, 'FIL', NULL, '2014-02-11 14:45:41', 1, '2014-05-14 16:09:27', 1, 1, '0'),
(52, 'Reglamento de la Ley de Reasentamiento 29869', 'Reglamento ley de Reasentamiento 29869', 16, 'FIL', NULL, '2014-02-11 14:46:23', 1, '2014-03-25 17:12:36', 1, 1, '0'),
(53, 'SIGRID (Sistema de InformaciÃ³n para la GestiÃ³n del Riesgo de Desastres - CENEPRED)', 'SIGRID', 16, 'FIL', NULL, '2014-02-11 14:47:19', 1, '2014-03-25 17:12:48', 1, 1, '0'),
(54, 'Ninguno', NULL, 16, 'FIL', NULL, '2014-02-11 14:47:35', 1, '2014-03-20 16:28:47', 1, 1, '0'),
(55, 'En trÃ¡mite', 'En trÃ¡mite', 9, '', NULL, '2014-02-11 17:20:35', 1, '2014-07-17 10:06:06', 1, 0, '0'),
(56, 'Ninguno', NULL, 13, NULL, NULL, '2014-03-13 15:20:50', 1, '2014-03-20 16:25:33', 1, 1, '0'),
(57, 'Ninguno', NULL, 14, NULL, NULL, '2014-03-13 15:26:16', 1, '2014-03-20 16:27:37', 1, 1, '0'),
(58, 'Instrumento', NULL, 16, 'TIT', NULL, '2014-03-14 12:06:41', 1, NULL, NULL, 1, '0'),
(59, 'Conocen', 'Conocen lineamientos tÃ©cnicos de', 16, 'COL', NULL, '2014-03-14 12:08:03', 1, '2014-03-25 17:30:44', 1, 1, '0'),
(60, 'Usan', 'Usan lineamientos tÃ©cnicos de', 16, 'COL', NULL, '2014-03-14 12:08:12', 1, '2014-03-25 17:30:55', 1, 1, '0'),
(61, 'Ninguno', NULL, 7, NULL, NULL, '2014-04-03 09:00:14', 1, NULL, NULL, 1, '0'),
(62, 'No especifica', NULL, 15, NULL, NULL, '2014-04-10 15:10:27', 1, NULL, NULL, 1, '0'),
(63, 'No especifica', NULL, 11, NULL, NULL, '2014-04-14 08:59:15', 1, NULL, NULL, 1, '0'),
(64, 'No especifica', NULL, 6, NULL, NULL, '2014-04-21 12:07:16', 1, NULL, NULL, 1, '0'),
(65, 'No especifica', NULL, 9, NULL, NULL, '2014-04-21 12:13:11', 1, NULL, NULL, 1, '0'),
(66, 'SI', 'Si incluye', 17, NULL, 1, '2014-08-21 16:56:12', 1, '2014-09-03 15:30:02', 1, 1, '0'),
(67, 'NO', NULL, 17, NULL, NULL, '2014-08-21 17:32:11', 1, '2014-09-03 15:30:15', 1, 1, '0'),
(68, 'SI', 'Si', 18, NULL, 1, '2014-09-03 17:37:31', 1, NULL, NULL, 1, '0'),
(69, 'NO', NULL, 18, NULL, NULL, '2014-09-03 17:37:40', 1, NULL, NULL, 1, '0'),
(70, 'SI', 'Si', 19, NULL, 1, '2014-09-04 09:30:04', 1, NULL, NULL, 1, '0'),
(71, 'NO', NULL, 19, NULL, NULL, '2014-09-04 09:30:13', 1, NULL, NULL, 1, '0'),
(72, 'a. AnÃ¡lisis de peligro(s)', 'Actividad o Estudio', 20, NULL, 1, '2014-09-04 09:44:20', 1, '2014-09-04 09:50:08', 1, 1, '0'),
(73, 'b. AnÃ¡lisis de vulnerabilidad', 'Actividad o Estudio', 20, NULL, NULL, '2014-09-04 09:46:17', 1, NULL, NULL, 1, '0'),
(74, 'c. EvaluaciÃ³n de riesgos', 'Actividad o Estudio', 20, NULL, NULL, '2014-09-04 09:46:37', 1, NULL, NULL, 1, '0'),
(75, 'd. Proyecto de servicios bÃ¡sicos (Agua y saneamiento, transporte, energÃ­a,etc) que incluye anÃ¡lisis de riesgos (AdR) y/o medidas de prevenciÃ³n o reducciÃ³n del riesgo.', 'PIP', 20, NULL, NULL, '2014-09-04 09:47:15', 1, '2014-09-04 09:47:50', 1, 1, '0'),
(76, 'e. Proyecto de edificaciones seguras para establecimientos de salud y educativos.', 'PIP', 20, NULL, NULL, '2014-09-04 09:47:41', 1, NULL, NULL, 1, '0'),
(77, 'f. Proyectos de infraestructura productiva, de manejo de recursos naturales o del medio ambiente con AdR y/o medidas de prevenciÃ³n o de reducciÃ³n del riesgo.', 'PIP', 20, NULL, NULL, '2014-09-04 09:48:18', 1, NULL, NULL, 1, '0'),
(78, 'SI', 'Si', 21, NULL, 1, '2014-09-04 10:55:27', 1, NULL, NULL, 1, '0'),
(79, 'NO', NULL, 21, NULL, NULL, '2014-09-04 10:55:34', 1, '2014-09-04 14:14:23', 1, 1, '0'),
(80, 'SI', 'Si', 22, NULL, 1, '2014-09-04 11:36:00', 1, NULL, NULL, 1, '0'),
(81, 'NO', NULL, 22, NULL, NULL, '2014-09-04 11:36:09', 1, '2014-09-04 14:14:38', 1, 1, '0'),
(82, 'SI', 'Si', 23, NULL, 1, '2014-09-04 11:59:50', 1, NULL, NULL, 1, '0'),
(83, 'NO', NULL, 23, NULL, NULL, '2014-09-04 11:59:59', 1, '2014-09-04 14:13:42', 1, 1, '0'),
(84, 'SI', 'Si', 24, NULL, 1, '2014-09-04 12:14:18', 1, NULL, NULL, 1, '0'),
(85, 'NO', NULL, 24, NULL, NULL, '2014-09-04 12:14:25', 1, '2014-09-04 14:14:57', 1, 1, '0'),
(86, 'g. Ninguno', NULL, 20, NULL, NULL, '2014-09-09 17:35:15', 1, '2014-09-09 17:35:30', 1, 1, '0'),
(87, 'p.a', NULL, 25, NULL, NULL, '2014-10-24 10:45:30', 120, NULL, NULL, 1, '0'),
(88, 'Alt01', NULL, 26, NULL, NULL, '2014-10-24 14:47:07', 120, NULL, NULL, 1, '0'),
(89, 'Alt02', NULL, 26, NULL, NULL, '2014-10-24 14:47:18', 120, NULL, NULL, 1, '0'),
(90, 'Alt03', NULL, 26, NULL, 1, '2014-10-24 14:47:25', 120, '2014-10-24 15:52:12', 120, 1, '0'),
(91, 'Alt01', NULL, 27, NULL, 1, '2014-10-24 14:47:57', 120, '2014-10-24 15:51:58', 120, 1, '0'),
(92, 'Alt02', NULL, 27, NULL, NULL, '2014-10-24 14:48:04', 120, NULL, NULL, 1, '0'),
(93, 'Alt03', NULL, 27, NULL, NULL, '2014-10-24 14:48:10', 120, NULL, NULL, 1, '0'),
(94, 'Alt01', NULL, 28, NULL, NULL, '2014-10-24 14:48:28', 120, NULL, NULL, 1, '0'),
(95, 'Alt02', NULL, 28, NULL, 1, '2014-10-24 14:48:35', 120, '2014-10-24 15:51:45', 120, 1, '0'),
(96, 'Alt03', NULL, 28, NULL, NULL, '2014-10-24 14:48:43', 120, NULL, NULL, 1, '0'),
(97, 'p.a', NULL, 29, NULL, NULL, '2014-11-07 11:32:47', 120, NULL, NULL, 1, '0'),
(98, 'SI', 'Si', 30, NULL, 1, '2015-03-05 14:58:10', 1, NULL, NULL, 1, '0'),
(99, 'NO', NULL, 30, NULL, NULL, '2015-03-05 14:58:19', 1, NULL, NULL, 1, '0'),
(100, 'SI', 'Si', 31, NULL, 1, '2015-03-05 15:21:19', 1, NULL, NULL, 1, '0'),
(101, 'NO', NULL, 31, NULL, NULL, '2015-03-05 15:21:26', 1, NULL, NULL, 1, '0'),
(102, 'SI', 'Si', 32, NULL, 1, '2015-03-05 15:50:47', 1, NULL, NULL, 1, '0'),
(103, 'NO', NULL, 32, NULL, NULL, '2015-03-05 15:50:53', 1, NULL, NULL, 1, '0'),
(104, 'SI', 'Si', 33, NULL, 1, '2015-03-05 16:05:39', 1, NULL, NULL, 1, '0'),
(105, 'NO', NULL, 33, NULL, NULL, '2015-03-05 16:05:46', 1, NULL, NULL, 1, '0'),
(113, 'SI', 'SI', 44, NULL, NULL, '2016-09-09 11:33:41', 386, '2016-09-09 11:33:41', 386, 1, '1'),
(114, 'NO', 'NO', 44, NULL, NULL, '2016-09-09 11:33:56', 386, '2016-09-09 11:33:56', 386, 1, '0'),
(115, 'La entidad cuenta con personal tÃ©cnico operativo para las funciones especÃ­ficas relacionadas a los procesos de EstimaciÃ³n, PrevenciÃ³n, ReducciÃ³n y ReconstrucciÃ³n', 'La entidad cuenta con personal tÃ©cnico operativo para las funciones especÃ­ficas relacionadas a los procesos de EstimaciÃ³n, PrevenciÃ³n, ReducciÃ³n y ReconstrucciÃ³n', 45, NULL, NULL, '2016-09-09 16:04:24', 386, '2016-09-09 16:04:24', 386, 1, '0'),
(116, 'Se cuenta con convenios con entidades pÃºblicas / privadas para operativizar las tareas relacionadas a los procesos de EstimaciÃ³n, PrevenciÃ³n, ReducciÃ³n y ReconstrucciÃ³n', 'Se cuenta con convenios con entidades pÃºblicas / privadas para operativizar las tareas relacionadas a los procesos de EstimaciÃ³n, PrevenciÃ³n, ReducciÃ³n y ReconstrucciÃ³n', 45, NULL, NULL, '2016-09-09 16:04:39', 386, '2016-09-09 16:04:39', 386, 1, '0'),
(117, 'Contrata servicios de consultorÃ­a para operativizar las funciones especÃ­ficas de los procesos de EstimaciÃ³n, PrevenciÃ³n, ReducciÃ³n y ReconstrucciÃ³n', 'Contrata servicios de consultorÃ­a para operativizar las funciones especÃ­ficas de los procesos de EstimaciÃ³n, PrevenciÃ³n, ReducciÃ³n y ReconstrucciÃ³n', 45, NULL, NULL, '2016-09-09 16:04:50', 386, '2016-09-09 16:04:50', 386, 1, '0'),
(118, 'SI', 'SI', 47, NULL, NULL, '2016-09-09 16:36:00', 386, '2016-09-09 16:36:00', 386, 1, '1'),
(119, 'NO', 'NO', 47, NULL, NULL, '2016-09-09 16:36:07', 386, '2016-09-09 16:36:07', 386, 1, '0'),
(120, 'EvaluaciÃ³n de Riesgos', 'EvaluaciÃ³n de Riesgos', 48, NULL, NULL, '2016-09-09 16:47:36', 386, '2016-09-09 16:47:36', 386, 1, '0'),
(121, 'SensibilizaciÃ³n a las autoridades en temas relacionados a GRD', 'SensibilizaciÃ³n a las autoridades en temas relacionados a GRD', 48, NULL, NULL, '2016-09-09 16:47:42', 386, '2016-09-09 16:47:42', 386, 1, '0'),
(122, 'DifusiÃ³n de la Ley 29664', 'DifusiÃ³n de la Ley 29664', 48, NULL, NULL, '2016-09-09 16:47:49', 386, '2016-09-09 16:47:49', 386, 1, '0'),
(123, 'Plan de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres', 'Plan de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres', 48, NULL, NULL, '2016-09-09 16:47:57', 386, '2016-09-09 16:47:57', 386, 1, '0'),
(124, 'IncorporaciÃ³n de la GP/GC en los instrumentos de gestiÃ³n', 'IncorporaciÃ³n de la GP/GC en los instrumentos de gestiÃ³n', 48, NULL, NULL, '2016-09-09 16:48:05', 386, '2016-09-09 16:48:05', 386, 1, '0'),
(125, 'ImplementaciÃ³n del Plan Nacional de GestiÃ³n del Riesgo de Desastres', 'ImplementaciÃ³n del Plan Nacional de GestiÃ³n del Riesgo de Desastres', 48, NULL, NULL, '2016-09-09 16:48:16', 386, '2016-09-09 16:48:16', 386, 1, '0'),
(126, 'Estrategia Financiera en GRD', 'Estrategia Financiera en GRD', 48, NULL, NULL, '2016-09-09 16:48:26', 386, '2016-09-09 16:48:26', 386, 1, '0'),
(127, 'Plan de Reasentamiento Poblacional', 'Plan de Reasentamiento Poblacional', 48, NULL, NULL, '2016-09-09 16:48:35', 386, '2016-09-09 16:48:35', 386, 1, '0'),
(128, 'ConformaciÃ³n Funciones del GTGRD', 'ConformaciÃ³n Funciones del GTGRD', 48, NULL, NULL, '2016-09-09 16:48:51', 386, '2016-09-09 16:48:51', 386, 1, '0'),
(129, ' Funciones Diferenciadas entre CENEPRED e INDECI', ' Funciones Diferenciadas entre CENEPRED e INDECI', 48, NULL, NULL, '2016-09-09 16:49:22', 386, '2016-09-09 16:49:22', 386, 1, '0'),
(130, ' Asistencia TÃ©cnica en elaboraciÃ³n de PIPs con componentes de PrevenciÃ³n y ReducciÃ³n del riesgo', ' Asistencia TÃ©cnica en elaboraciÃ³n de PIPs con componentes de PrevenciÃ³n y ReducciÃ³n del riesgo', 48, NULL, NULL, '2016-09-09 16:50:06', 386, '2016-09-09 16:50:06', 386, 1, '0'),
(131, 'Plan Integral de ReconstrucciÃ³n', 'Plan Integral de ReconstrucciÃ³n', 48, NULL, NULL, '2016-09-09 16:50:20', 386, '2016-09-09 16:50:20', 386, 1, '0'),
(132, 'OPP', 'OPP', 49, 'FIL', NULL, '2016-09-09 17:10:51', 386, '2016-09-09 17:10:51', 386, 1, '0'),
(133, 'AdministraciÃ³n', 'AdministraciÃ³n', 49, 'FIL', NULL, '2016-09-09 17:11:26', 386, '2016-09-09 17:11:26', 386, 1, '0'),
(134, 'Defensa Civil', 'Defensa Civil', 49, 'FIL', NULL, '2016-09-09 17:11:37', 386, '2016-09-09 17:11:37', 386, 1, '0'),
(135, 'NÂ° de personas que Laboran', 'NÂ° de personas que Laboran', 49, 'COL', NULL, '2016-09-09 17:12:06', 386, '2016-09-09 17:12:06', 386, 1, '0'),
(136, 'NÂ° de personas capacitadas en GRD', 'NÂ° de personas capacitadas en GRD', 49, 'COL', NULL, '2016-09-09 17:12:28', 386, '2016-09-09 17:12:28', 386, 1, '0'),
(137, 'NÂ° de personas requieren capacitaciÃ³n GRD', 'NÂ° de personas requieren capacitaciÃ³n GRD', 49, 'COL', NULL, '2016-09-09 17:12:42', 386, '2016-09-09 17:18:53', 386, 1, '0'),
(138, 'SI', 'SI', 50, NULL, NULL, '2016-09-09 19:46:21', 386, '2016-09-09 19:46:21', 386, 1, '0'),
(139, 'NO', 'NO', 50, NULL, NULL, '2016-09-09 19:46:30', 386, '2016-09-09 19:46:30', 386, 1, '0'),
(140, 'PLANAGERD - Plan Nacional de GestiÃ³n de Riesgos de Desastres (D.S. 034-2014-PCM)', 'PLANAGERD - Plan Nacional de GestiÃ³n de Riesgos de Desastres (D.S. 034-2014-PCM)', 51, 'FIL', NULL, '2016-09-09 19:52:19', 386, '2016-09-09 19:52:19', 386, 1, '0'),
(141, 'Lineamiento TÃ©cnico (L.T.) de FormaciÃ³n de Grupos de Trabajo (RM 276- 2012 â€“ PCM)', 'Lineamiento TÃ©cnico (L.T.) de FormaciÃ³n de Grupos de Trabajo (RM 276- 2012 â€“ PCM)', 51, 'FIL', NULL, '2016-09-09 19:52:33', 386, '2016-09-09 19:52:33', 386, 1, '0'),
(142, 'L.T. EstimaciÃ³n de Riesgos (RM 334-2012 â€“ PCM)', 'L.T. EstimaciÃ³n de Riesgos (RM 334-2012 â€“ PCM)', 51, 'FIL', NULL, '2016-09-09 19:52:41', 386, '2016-09-09 19:52:41', 386, 1, '0'),
(143, 'L.T. PrevenciÃ³n de Riesgos (RM 222-2013 â€“ PCM', 'L.T. PrevenciÃ³n de Riesgos (RM 222-2013 â€“ PCM', 51, 'FIL', NULL, '2016-09-09 19:52:56', 386, '2016-09-09 19:52:56', 386, 1, '0'),
(144, 'L.T- ReducciÃ³n de Riesgos (RM 220-2013 â€“ PCM)', 'L.T- ReducciÃ³n de Riesgos (RM 220-2013 â€“ PCM)', 51, 'FIL', NULL, '2016-09-09 19:53:11', 386, '2016-09-09 19:53:11', 386, 1, '0'),
(145, 'Reglamento de la Ley de Reasentamiento 29869 (D.S. 115-2013 â€“ PCM)', 'Reglamento de la Ley de Reasentamiento 29869 (D.S. 115-2013 â€“ PCM)', 51, 'FIL', NULL, '2016-09-09 19:53:23', 386, '2016-09-09 19:53:23', 386, 1, '0'),
(146, 'ITSE - Reglamento de Inspecciones TÃ©cnicas de Seguridad en Edificaciones  (D.S. 058-2014 â€“ PCM)', 'ITSE - Reglamento de Inspecciones TÃ©cnicas de Seguridad en Edificaciones  (D.S. 058-2014 â€“ PCM)', 51, 'FIL', NULL, '2016-09-09 19:53:41', 386, '2016-09-09 19:53:41', 386, 1, '0'),
(147, 'Lineamientos que definen el Marco de Responsabilidades en GRD, de las entidades del Estado en los tres niveles de gobierno (RM 046-2013-PCM)', 'Lineamientos que definen el Marco de Responsabilidades en GRD, de las entidades del Estado en los tres niveles de gobierno (RM 046-2013-PCM)', 51, 'FIL', NULL, '2016-09-09 19:53:58', 386, '2016-09-09 19:53:58', 386, 1, '0'),
(148, 'Al menos una vez', 'Al menos una vez', 51, 'COL', NULL, '2016-09-09 19:54:28', 386, '2016-09-09 19:54:28', 386, 1, '0'),
(149, 'Eventualmente cuando sea el caso', 'Eventualmente cuando sea el caso', 51, 'COL', NULL, '2016-09-09 19:54:42', 386, '2016-09-09 19:54:42', 386, 1, '0'),
(150, 'Con Frecuencia', 'Con Frecuencia', 51, 'COL', NULL, '2016-09-09 19:54:57', 386, '2016-09-09 19:54:57', 386, 1, '0'),
(151, 'Aplican', 'Aplican', 51, 'COL', NULL, '2016-09-09 19:55:15', 386, '2016-09-09 19:55:15', 386, 1, '0'),
(152, 'Manual de EvaluaciÃ³n de Riesgos - EVAR (R.J. 058-2013-CENEPRED/J)', 'Manual de EvaluaciÃ³n de Riesgos - EVAR (R.J. 058-2013-CENEPRED/J)', 52, 'FIL', NULL, '2016-09-11 07:10:20', 386, '2016-09-11 07:10:20', 386, 1, '0'),
(153, 'SIGRID (Sistema de InformaciÃ³n para la GestiÃ³n del Riesgo de Desastres)', 'SIGRID (Sistema de InformaciÃ³n para la GestiÃ³n del Riesgo de Desastres)', 52, 'FIL', NULL, '2016-09-11 07:10:34', 386, '2016-09-11 07:10:34', 386, 1, '0'),
(154, 'GuÃ­a metodolÃ³gica para la incorporaciÃ³n de la GestiÃ³n Prospectiva y Correctiva del Riesgo en los PDC (R.J. 044-2014-CENEPRED/J)', 'GuÃ­a metodolÃ³gica para la incorporaciÃ³n de la GestiÃ³n Prospectiva y Correctiva del Riesgo en los PDC (R.J. 044-2014-CENEPRED/J)', 52, 'FIL', NULL, '2016-09-11 07:10:47', 386, '2016-09-11 07:10:47', 386, 1, '0'),
(155, 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres- Nivel RegiÃ³n (R.J. 074-2013-CENEPRED/J)', 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres- Nivel RegiÃ³n (R.J. 074-2013-CENEPRED/J)', 52, 'FIL', NULL, '2016-09-11 07:11:26', 386, '2016-09-11 07:11:26', 386, 1, '0'),
(156, 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Nivel Provincia (R.J. 073-2013-CENEPRED/J)', 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Nivel Provincia (R.J. 073-2013-CENEPRED/J)', 52, 'FIL', NULL, '2016-09-11 07:11:39', 386, '2016-09-11 07:11:39', 386, 1, '0'),
(157, 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Nivel Distrito (R.J. 072-2013-CENEPRED/J)', 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Nivel Distrito (R.J. 072-2013-CENEPRED/J)', 52, 'FIL', NULL, '2016-09-11 07:11:54', 386, '2016-09-11 07:11:54', 386, 1, '0'),
(158, 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Nivel Cuenca', 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Nivel Cuenca', 52, 'FIL', NULL, '2016-09-11 07:12:06', 386, '2016-09-11 07:12:06', 386, 1, '0'),
(159, 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Entidades PÃºblicas: Sectores EconÃ³micos (R.J. 076-2014-CENEPRED/J)', 'GuÃ­a metodolÃ³gica para la elaboraciÃ³n de Planes de PrevenciÃ³n y ReducciÃ³n del Riesgo de Desastres - Entidades PÃºblicas: Sectores EconÃ³micos (R.J. 076-2014-CENEPRED/J)', 52, 'FIL', NULL, '2016-09-11 07:12:25', 386, '2016-09-11 07:12:25', 386, 1, '0'),
(160, 'Al menos una vez', 'Al menos una vez', 52, 'COL', NULL, '2016-09-11 07:13:26', 386, '2016-09-11 07:13:26', 386, 1, '0'),
(161, 'Eventualmente cuando sea el caso', 'Eventualmente cuando sea el caso', 52, 'COL', NULL, '2016-09-11 07:13:45', 386, '2016-09-11 07:13:45', 386, 1, '0'),
(162, 'Con Frecuencia', 'Con Frecuencia', 52, 'COL', NULL, '2016-09-11 07:13:58', 386, '2016-09-11 07:13:58', 386, 1, '0'),
(163, 'ROF', 'ROF', 46, 'FIL', NULL, '2016-09-11 07:57:10', 386, '2016-09-11 07:57:10', 386, 1, '0'),
(164, 'MOF', 'MOF', 46, 'FIL', NULL, '2016-09-11 07:57:19', 386, '2016-09-11 07:57:19', 386, 1, '0'),
(165, 'POI/POA', 'POI/POA', 46, 'FIL', NULL, '2016-09-11 07:57:30', 386, '2016-09-11 07:57:30', 386, 1, '0'),
(166, 'PDC', 'PDC', 46, 'FIL', NULL, '2016-09-11 07:57:39', 386, '2016-09-11 07:57:39', 386, 1, '0'),
(167, 'Otro', 'Otro', 46, 'FIL', NULL, '2016-09-11 07:57:49', 386, '2016-09-11 07:57:49', 386, 1, '0'),
(168, 'Se ha actualizado', 'Se ha actualizado', 46, 'COL', NULL, '2016-09-11 07:58:20', 386, '2016-09-11 07:58:20', 386, 1, '0'),
(169, 'Esta en revisiÃ³n', 'Esta en revisiÃ³n', 46, 'COL', NULL, '2016-09-11 07:58:33', 386, '2016-09-11 07:58:33', 386, 1, '0'),
(170, 'No se ha realizado cambios', 'No se ha realizado cambios', 46, 'COL', NULL, '2016-09-11 07:58:54', 386, '2016-09-11 07:58:54', 386, 1, '0'),
(171, 'SI', 'SI', 40, NULL, NULL, '2016-09-11 08:00:01', 386, '2016-09-11 08:00:01', 386, 1, '1'),
(172, 'NO', 'NO', 40, NULL, NULL, '2016-09-11 08:00:09', 386, '2016-09-11 08:00:09', 386, 1, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cntbd_alternativa`
--
ALTER TABLE `cntbd_alternativa`
  ADD PRIMARY KEY (`i_codalt`),
  ADD KEY `RE_08` (`i_codpreg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cntbd_alternativa`
--
ALTER TABLE `cntbd_alternativa`
  MODIFY `i_codalt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
