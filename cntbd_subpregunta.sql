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
-- Table structure for table `cntbd_subpregunta`
--

CREATE TABLE `cntbd_subpregunta` (
  `i_codsubpreg` int(11) NOT NULL,
  `v_dessubpreg` text COLLATE latin1_general_ci NOT NULL,
  `v_resumen` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `i_codtipo` int(11) NOT NULL,
  `i_codpreg` int(11) NOT NULL,
  `i_dinamico` int(11) DEFAULT NULL,
  `i_codtipclas` int(11) DEFAULT NULL,
  `i_verifica` int(11) DEFAULT NULL,
  `v_answer` char(1) COLLATE latin1_general_ci DEFAULT '0',
  `created_at` datetime NOT NULL,
  `i_usureg` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `i_usumod` int(11) DEFAULT NULL,
  `i_estreg` int(11) NOT NULL,
  `i_codalt` int(11) DEFAULT NULL,
  `i_invert` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `cntbd_subpregunta`
--

INSERT INTO `cntbd_subpregunta` (`i_codsubpreg`, `v_dessubpreg`, `v_resumen`, `i_codtipo`, `i_codpreg`, `i_dinamico`, `i_codtipclas`, `i_verifica`, `v_answer`, `created_at`, `i_usureg`, `updated_at`, `i_usumod`, `i_estreg`, `i_codalt`, `i_invert`) VALUES
(1, '<p>Nro de Resoluci&oacute;n o dispositivo (constituci&oacute;n de GT-GRD)</p>\r\n', '', 1, 1, NULL, 1, 1, '0', '2014-02-12 11:13:21', 1, '2016-09-08 19:32:42', 386, 1, 1, 0),
(2, 'Tienen Plan de Trabajo', NULL, 3, 3, NULL, 2, 1, '0', '2014-02-12 12:06:51', 1, '2015-08-06 15:30:18', 1, 1, NULL, NULL),
(3, 'Tienen Reglamento Interno\r\n\r\n\r\n', '', 3, 3, NULL, 1, 1, '0', '2014-02-12 12:07:09', 1, '2016-08-19 14:59:59', 386, 1, NULL, NULL),
(4, 'Tienen reuniones formales', NULL, 3, 3, NULL, 2, 1, '0', '2014-02-12 12:07:24', 1, '2015-08-06 15:30:32', 1, 1, NULL, NULL),
(5, 'Ha recibido capacitaciÃ³n por parte de:', NULL, 2, 6, NULL, 2, NULL, '0', '2014-02-12 16:12:33', 1, '2015-06-16 09:08:51', 1, 1, 17, 0),
(6, 'Los temas de capacitaciÃ³n o asistencia tÃ©cnica que se recibida', 'Temas de capacitaciÃ³n o AT requeridos', 2, 6, NULL, 2, 0, '0', '2014-02-12 16:14:13', 1, '2016-06-21 11:06:49', 386, 1, NULL, NULL),
(7, 'Â¿PorquÃ©?, por favor dar una breve explicaciÃ³n', NULL, 1, 8, NULL, NULL, NULL, '0', '2014-02-12 16:45:23', 1, '2014-02-12 16:45:49', 1, 1, NULL, NULL),
(8, 'Si la respuesta es afirmativa, por favor proporcione el nombre del plan, programa, proyecto o acciÃ³n de gestiÃ³n prospectiva y/o correctiva:', NULL, 1, 10, NULL, NULL, NULL, '0', '2014-02-12 17:17:03', 1, '2014-03-03 10:44:49', 1, 1, 29, NULL),
(9, 'Piensan incluirlo en el aÃ±o:', NULL, 1, 11, NULL, NULL, NULL, '0', '2014-02-12 17:25:39', 1, '2014-06-10 00:08:37', 1, 1, 32, 0),
(10, 'Si la respuesta es afirmativa, Â¿En quÃ© tema?', 'Â¿En quÃ© tema?', 2, 15, NULL, NULL, NULL, '0', '2014-02-13 10:51:44', 1, '2014-03-25 16:43:24', 1, 1, 46, NULL),
(12, 'Secretario TÃ©cnico del GTGRD designado', '', 3, 1, NULL, 1, 0, '0', '2014-02-13 11:08:11', 1, '2016-08-18 21:56:50', 386, 1, NULL, NULL),
(13, 'Indique el nÃºmero de profesionales encargados de las tareas de gestiÃ³n prospectiva y correctiva', '', 1, 4, NULL, NULL, NULL, '0', '2014-02-13 12:39:42', 1, '2014-04-09 12:45:30', 1, 1, 9, 1),
(14, 'Si su respuesta es afirmativa, ingrese el NÃºmero de ResoluciÃ³n :   ', NULL, 1, 5, NULL, NULL, NULL, '0', '2014-02-13 14:23:26', 1, '2014-03-03 10:43:32', 1, 1, 14, NULL),
(15, 'En caso afirmativo, por favor indique las organizaciones con las que tiene convenio y el objetivo buscado en gestiÃ³n prospectiva y correctiva:\r\n', '', 4, 9, 1, NULL, NULL, '0', '2014-02-14 15:42:04', 1, '2014-04-04 12:41:54', 1, 1, 27, NULL),
(16, 'Se encuentra en revisiÃ³n', '', 3, 6, NULL, 1, NULL, '0', '2014-06-09 13:57:05', 1, '2016-08-18 21:32:36', 386, 1, NULL, NULL),
(17, 'Indique el periodo de aÃ±os: (del aÃ±o 1 al aÃ±o 2)', NULL, 1, 11, NULL, NULL, NULL, '0', '2014-06-09 15:41:51', 1, '2014-06-09 15:44:38', 1, 1, 31, 0),
(18, 'Â¿Tiene convenios o acuerdos en trÃ¡mite con otros organismos pÃºblicos o privados?', NULL, 3, 9, NULL, NULL, NULL, '0', '2014-07-17 10:17:46', 1, NULL, NULL, 1, NULL, NULL),
(19, 'Si su respuesta es afirmativa, marque donde corresponda:', NULL, 4, 17, 0, 1, NULL, '0', '2014-08-22 08:57:27', 1, '2015-06-16 09:05:10', 1, 1, 66, 0),
(20, 'Â¿Tienen un mecanismo o herramienta para el monitoreo y evaluaciÃ³n de los avances del Plan de GRD?', NULL, 3, 18, NULL, 1, 0, '0', '2014-09-03 17:41:13', 1, '2016-06-20 15:29:35', 386, 1, NULL, NULL),
(21, 'Â¿Adecuan algunos indicadores del PLANAGERD para el nivel local?', NULL, 3, 18, NULL, 1, NULL, '0', '2014-09-03 17:48:44', 1, '2015-06-16 09:10:55', 1, 1, NULL, NULL),
(22, 'Marque segÃºn corresponda:', NULL, 2, 19, NULL, NULL, NULL, '0', '2014-09-04 09:31:36', 1, NULL, NULL, 1, 70, 0),
(23, 'Marque segÃºn corresponda:', NULL, 4, 21, 0, NULL, NULL, '0', '2014-09-04 10:57:54', 1, '2014-09-09 11:44:05', 1, 1, 78, 0),
(24, 'Marque segÃºn corresponda:', NULL, 4, 22, 0, NULL, NULL, '0', '2014-09-04 11:36:47', 1, NULL, NULL, 1, 80, 0),
(25, 'Marque segÃºn corresponda, el tipo de servicio que favorece la norma, ordenanza o medida administrativa:', 'Tipo de servicio que favorece', 2, 23, NULL, NULL, NULL, '0', '2014-09-04 12:01:56', 1, '2014-09-04 14:44:37', 1, 1, 82, 0),
(26, 'Marque segÃºn corresponda:', NULL, 2, 24, NULL, NULL, NULL, '0', '2014-09-04 12:15:12', 1, '2014-09-04 12:18:32', 1, 1, NULL, NULL),
(27, 'Indique el tipo de cooperaciÃ³n recibida en GP/C y tipo de organismo cooperante:', NULL, 4, 24, 0, NULL, NULL, '0', '2014-09-04 12:36:43', 1, '2014-09-04 12:37:58', 1, 1, NULL, NULL),
(28, 'Subpregunta 03-01', NULL, 3, 27, NULL, NULL, NULL, '0', '2014-10-24 14:49:27', 120, NULL, NULL, 1, NULL, NULL),
(29, 'Marque segÃºn corresponda:', NULL, 4, 30, 0, NULL, NULL, '0', '2015-03-05 15:01:06', 1, NULL, NULL, 1, 98, 0),
(30, 'Marque segÃºn corresponda:', NULL, 4, 31, 0, NULL, NULL, '0', '2015-03-05 15:22:14', 1, NULL, NULL, 1, 100, 0),
(31, 'Aumento de seguridad en Servicios bÃ¡sicos esenciales (Marque segÃºn corresponda) :', NULL, 4, 32, 0, NULL, NULL, '0', '2015-03-05 15:51:51', 1, '2015-03-05 16:01:01', 1, 1, NULL, NULL),
(32, 'Aumento de seguridad en la GestiÃ³n del Territorio (OcupaciÃ³n y uso adecuado del territorio) - Marque segÃºn corresponda:', NULL, 4, 32, 0, NULL, NULL, '0', '2015-03-05 15:52:23', 1, '2015-03-05 16:01:11', 1, 1, NULL, NULL),
(33, 'Marque segÃºn corresponda', NULL, 2, 33, 0, NULL, NULL, '0', '2015-03-05 16:07:21', 1, '2015-03-05 16:46:58', 1, 1, 104, 0),
(34, 'Los temas de capacitaciÃ³n o asistencia tÃ©cnica que se requieren', NULL, 2, 6, NULL, 1, 0, '0', '2016-06-21 10:17:38', 386, '2016-06-21 11:06:13', 386, 1, 17, 0),
(53, '<p>&iquest;El <a class="ayuda" href="#" title="Son espacios internos de articulaciÃ³n, de las unidades orgÃ¡nicas competentes de cada entidad pÃºblica en los tres niveles de gobierno, para la formulaciÃ³n de normas y planes, evaluaciÃ³n y organizaciÃ³n de los procesos de gestiÃ³n del riesgo de desastres en el Ã¡mbito de su competencia.">GT GRD</a> constituido en su entidad cuenta con resoluci&oacute;n o documento similar que aprueba su conformaci&oacute;n?</p>\r\n', 'Â¿El GT GRD constituido en su entidad cuenta con resoluciÃ³n o documento similar que aprueba su conformaciÃ³n?', 3, 40, NULL, 1, 0, '1', '2016-09-07 22:21:16', 386, '2016-09-08 22:44:07', 386, 1, NULL, NULL),
(56, '<p>Indique los motivos por lo que no se conform&oacute; el Grupo de Trabajo de la GRD</p>\r\n', '', 1, 40, NULL, 1, 0, '0', '2016-09-08 19:41:42', 386, '2016-09-08 22:45:48', 386, 1, NULL, NULL),
(55, '<p>&iquest;Se ha designado al <a class="ayuda" href="#" title="Son espacios internos de articulaciÃ³n, de las unidades orgÃ¡nicas competentes de cada entidad pÃºblica en los tres niveles de gobierno, para la formulaciÃ³n de normas y planes, evaluaciÃ³n y organizaciÃ³n de los procesos de gestiÃ³n del riesgo de desastres en el Ã¡mbito de su competencia.">Secretario T&eacute;cnico del GT-GRD</a>?</p>\r\n', '', 3, 40, NULL, 1, 0, '1', '2016-09-08 16:09:24', 386, '2016-09-08 22:46:51', 386, 1, NULL, NULL),
(69, '<p>Nro de Resoluci&oacute;n o dispositivo (constituci&oacute;n de GT-GRD)</p>\r\n', '', 1, 40, NULL, 1, 0, '1', '2016-09-08 22:50:46', 386, '2016-09-08 22:50:46', 386, 1, NULL, NULL),
(71, '<p>Nro de Resoluci&oacute;n (designaci&oacute;n de Secretario T&eacute;cnico GT-GRD)</p>\r\n', '', 1, 40, NULL, 1, 0, '1', '2016-09-09 11:22:37', 386, '2016-09-09 11:22:37', 386, 1, NULL, NULL),
(72, '<p>Datos del Secretario T&eacute;cnico del GT-GRD</p>\r\n', '', 1, 40, NULL, 1, 0, '1', '2016-09-09 11:25:56', 386, '2016-09-09 11:25:56', 386, 1, NULL, NULL),
(73, 'Â¿CuÃ¡l es el cargo que desempeÃ±a el Secretario TÃ©cnico del GT-GRD?', '', 3, 40, NULL, 1, 0, '1', '2016-09-09 11:26:37', 386, '2016-09-09 11:26:37', 386, 1, NULL, NULL),
(74, '<p>&iquest;Cuentan con un Plan - Programa de Trabajo Anual?</p>\r\n', '', 3, 44, NULL, 1, 1, '1', '2016-09-09 13:48:03', 386, '2016-09-09 13:50:26', 386, 1, NULL, NULL),
(75, '<p>&iquest;Cuentan con Reglamento Interno?</p>\r\n', '', 3, 44, NULL, 1, 1, '1', '2016-09-09 13:51:57', 386, '2016-09-09 13:54:08', 386, 1, NULL, NULL),
(76, '<p>&iquest;Realizan reuniones formales?</p>\r\n', '', 3, 44, NULL, 1, 1, '1', '2016-09-09 13:55:08', 386, '2016-09-09 13:58:46', 386, 1, NULL, NULL),
(77, '<p>Entidad que realiz&oacute; la capacitaci&oacute;n</p>\n', 'Entidad que realizÃ³ la capacitaciÃ³n', 2, 47, NULL, 1, 0, '1', '2016-09-09 16:37:51', 386, '2016-09-09 16:37:51', 386, 1, NULL, NULL),
(78, '<p>Fecha de la capacitaci&oacute;n (CENEPRED)</p>\n', 'Fecha de la capacitaciÃ³n (CENEPRED)', 1, 47, NULL, 1, 0, '1', '2016-09-09 16:40:31', 386, '2016-09-09 16:40:31', 386, 1, NULL, NULL),
(79, '<p>Nombre de Instituci&oacute;n (capacitaci&oacute;n)</p>\r\n', 'Nombre de InstituciÃ³n (capacitaciÃ³n)', 1, 47, NULL, 1, 0, '1', '2016-09-09 16:41:48', 386, '2016-09-09 16:41:48', 386, 1, NULL, NULL),
(80, '<p>Fecha de la capacitaci&oacute;n (otra instituci&oacute;n)</p>\n', '', 1, 47, NULL, 1, 0, '1', '2016-09-09 16:42:45', 386, '2016-09-09 16:42:45', 386, 1, NULL, NULL),
(81, '<p>Temas de capacitaci&oacute;n o asistencia t&eacute;cnica recibida</p>\n', '', 2, 47, NULL, 1, 0, '1', '2016-09-09 16:43:16', 386, '2016-09-09 16:43:16', 386, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cntbd_subpregunta`
--
ALTER TABLE `cntbd_subpregunta`
  ADD PRIMARY KEY (`i_codsubpreg`),
  ADD KEY `fk_subpreguntatipclase` (`i_codtipclas`),
  ADD KEY `res_05` (`i_codtipo`),
  ADD KEY `res_06` (`i_codpreg`),
  ADD KEY `resxx_05` (`i_codalt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cntbd_subpregunta`
--
ALTER TABLE `cntbd_subpregunta`
  MODIFY `i_codsubpreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
