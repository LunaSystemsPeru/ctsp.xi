-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-03-2021 a las 19:15:18
-- Versión del servidor: 5.6.49-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ctsprxi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_internos`
--

CREATE TABLE `archivos_internos` (
  `id_archivo` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL,
  `file` varchar(45) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `id_asociado` int(11) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `apellidos` varchar(245) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `ctsp` varchar(10) DEFAULT NULL,
  `centro_trabajo` varchar(245) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `password` varchar(9) DEFAULT NULL,
  `ultimo_pago` date DEFAULT NULL,
  `domicilio` varchar(245) DEFAULT NULL,
  `fecha_inscripcion` date DEFAULT NULL,
  `fecha_certificado` date DEFAULT NULL,
  `ficha_inscripcion` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `registro_sunedu` varchar(45) DEFAULT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_tipo_inscripcion` int(11) NOT NULL,
  `id_tipo_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`id_asociado`, `dni`, `apellidos`, `nombres`, `ctsp`, `centro_trabajo`, `fecha_nac`, `email`, `celular`, `estado`, `password`, `ultimo_pago`, `domicilio`, `fecha_inscripcion`, `fecha_certificado`, `ficha_inscripcion`, `foto`, `titulo`, `registro_sunedu`, `id_tipo_documento`, `id_tipo_inscripcion`, `id_tipo_actividad`) VALUES
(1, '32809951', 'ACUÑA BONILLA', 'ANGELA MARÍA', '3026', 'ESSALUD - COISHCO', '1951-10-28', 'amariabo@hotmail.com', '990242838', '0', 'esljzq1z', '2018-03-31', 'sssss', '1900-01-01', '1900-01-01', '', '1.jpg', '', '', 1, 4, 12),
(2, '32794051', 'ALFARO LOPEZ', 'OLGA ALICIA', '11902', '', '1960-09-02', 'sinemail@gmail.com', '', '1', 'dehb9l8d', '2020-12-31', '', '2017-02-03', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(3, '7340121', 'ÁLAMO PALACIOS', 'NILDA RUTH', '4047', 'HOSP. EGB', '1962-01-01', 'sophiaoasis@hotmail.com', '950974545', '1', 'ikxbznj2', '2020-12-31', '', '1991-10-31', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(4, '32845031', 'APONTE LECTOR', 'VICTORIA ELIZABETH', '5382', 'HOGAR SAN PEDRITO', '1963-02-16', 'victoriaaponte_16@hotmail.com', '969171818', '1', 'pyji5tl7', '2020-12-31', '', '2003-09-15', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(5, '32975862', 'ASMAT CASTRO', 'MARIÁ CONSUELO', '4422', 'INPE', '1959-05-05', 'mariaconsuelo_ac@hotmail.com', '965364808', '1', 'qmrwbdcb', '2022-02-25', '', '1992-08-27', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(6, '32865974', 'ÁLVAREZ FERNÁNDEZ', 'GABY ', '4046', 'HOSP. EGB', '1953-03-06', 'amariabo@hotmail.com', '', '1', 'b6r815c2', '2020-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(7, '32924633', 'BAZÁN GUZMAN', 'GLORIA CAROLINE', '6126', 'EMP. RENZO COSTA', '1970-07-18', 'gbazan1970@gmail.com', '943631798', '1', 'xzuzzdlg', '2022-01-18', '', '1998-02-20', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(8, '32830813', 'BARRIONUEVO SÁNCHEZ', 'MIRTHA ELIZABETH', '6365', 'MUNI. NVO CHIMBOTE', '1956-08-23', 'joni_m_1604@hotmail.com', '955483074', '0', 't1nh3xzn', '2016-12-31', '', '1998-09-23', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(9, '32863871', 'BOLO CONDOR', 'ESTHER NOEMI', '1475', '', '1957-03-01', 'techi_57@yahoo.es', '943234139', '0', 'cbgx1akh', '2018-03-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(10, '17918015', 'BONILLA ANGELES', 'JANINE ', '5888', '', '1963-09-09', '', '971944098', '1', 'y4z08fhc', '2020-12-31', '', '1997-04-08', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(11, '32736315', 'CABRERA ZAMBRANO', 'ELENA AURORA', '6201', 'SEDA CHIMBOTE', '1953-08-13', 'hellencz53@hotmail.com', '943944050', '1', 'e0xyvmom', '2020-12-31', '', '1998-04-24', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(12, '32778316', 'CAMPOS PINEDO', 'ROSARIO ENITH', '6386', 'CEM NVO. CHIMB.', '1965-05-03', 'r.campos@maquisac.com', '974145743 -943485051', '1', 'kuildz3y', '2020-12-31', '', '1998-01-05', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(13, '32804636', 'CARBAJAL QUIJANA', 'ROSA LUCIA', '9173', 'MUN. PROVINC. SANTA', '1953-06-01', '', '939388109', '0', '6phahccp', '2019-12-31', '', '2009-07-13', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(14, '32135078', 'CARRILLO MEJIA', 'MARÍA LUISA', '5028', 'HOSP. HUARMEY', '1961-09-17', '', '961921820', '1', 'rarhay63', '2020-12-31', '', '1994-10-07', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(15, '32739429', 'CARLOS ZUÑIGA', 'GUILLERMINA LILOFE', '6076', 'UNIV. SAN PEDRP', '2000-02-10', 'lilofe1@hotmail.com', '942954866', '0', 'iy448o56', '2013-12-31', '', '2003-06-11', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(16, '32795862', 'CASANA VELÁSQUEZ', 'LIDIA AMPARO', '4120', 'ESSALUD', '1953-03-27', 'lidiacasana@hotmail.com', '970369434', '0', 'hwgi1du3', '2013-12-31', '', '1991-11-15', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(17, '17890524', 'CASAVALENTI ZELADA', 'MIRTHA ISABEL', '1231', 'ESSALUD', '1955-10-12', 'mirthaisabelcasavalentiz@gmail.com', '', '0', '7xldzvei', '2013-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(18, '44514674', 'CASTILLO SÁNCHEZ', 'MÓNICA ALEXANDRA', '9357', 'HOSP. CALETA', '1987-07-21', 'monica_2116@hotmail.com', '995610298', '1', 'lrti80cq', '2020-12-31', '', '2010-02-10', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(19, '32860182', 'CASTILLO MILLA', 'FRECIA CARMELA', '2492', 'JUZGADO DE FAMILIA', '1959-11-04', 'carmelacastillo_04@hotmail.com', '943211514', '1', '5jxppv2k', '2020-12-31', '', '1985-12-26', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(20, '32927006', 'CASTILLO COLFFER', 'MÓNICA YSABEL', '7872', 'PODER JUDICIAL', '1970-11-16', '', '', '0', '8fn03tdu', '2013-12-31', '', '2003-08-14', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(21, '32904753', 'CARHUAYANO LA ROSA', 'LIDIA ISABEL', '5179', 'JUZGADO DE FAMILIA', '1967-04-13', 'dolfce1@hotmail.com', '951499002', '1', 'zvchb5mv', '2020-12-31', '', '1994-12-09', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(22, '33261174', 'CORNEJO HERRERA', 'ROSA MARÍA', '6191', 'CONSERVERA COIAHCO', '1971-09-22', '', '998388107', '1', 'go6sv0yj', '2021-01-31', '', '1998-11-05', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(23, '32800328', 'CUELLAR TORRES', 'SUSANA LUZ', '2130', 'HOSP- EGB', '1951-11-30', 'susanaluzcuellar@gmail.com', '968357050', '1', '1b2udbo9', '2020-12-31', '', '1984-12-11', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(24, '6825861', 'CUENTAS ROBLES', 'GONZALA ROSENDA', '657', 'HOSP. HUARMEY', '1952-11-24', 'rcuentasr@hotmail.com', '951756625', '1', '9nec5gb5', '2021-12-30', '', '1981-06-22', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(25, '32809837', 'CUEVA ZAVALA', 'MARLENY MARGARITA', '6202', '', '1963-03-16', '', '', '0', 'uflkuyj8', '2003-08-31', '', '1998-04-24', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(26, '32816722', 'DÍAZ NEYRA', 'ROSSANA SOLEDAD', '4855', '', '1966-08-06', 'rossana.diaz@cantabria.pe', '', '0', 'xquf626n', '2013-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(27, '32974576', 'DÁVILA GONZALES', 'VIVIANNE PATRICIA', '4832', 'HOSP. EGB', '1968-03-23', 'vidago961@hotmail.com', '968863678', '1', 'yicwp9hi', '2020-12-31', '', '1994-03-25', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(28, '17936907', 'DIESTRA PASTOR', 'NANCY ELIZABETH', '6387', 'PODER JUDICIAL', '1963-10-30', 'nancydiestrapastor@gmail.com', '981379288', '1', 'x3w15ir2', '2020-12-31', '', '1998-11-18', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(29, '32798358', 'DIOSES BURGOS', 'IRIS IVONNE', '8917', 'MUNIC. CHIMBOTE', '1963-07-08', 'irvon_89@hotmail.com', '943246325', '1', 'ck492joo', '2022-02-16', '', '2009-03-06', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(30, '32736002', 'ECHEVARRÍA VÁSQUEZ', 'SILVIA CARLOTA', '9829', 'MUNIC. CHIMBOTE', '1951-12-23', 'silviaevas@hotmail.com', '943666061', '1', '4f97fjwy', '2020-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(31, '32856251', 'ESPAÑA JORGE', 'ROSA AMELIA', '9085', 'C. SMC. NVO CH.', '1959-08-30', 'rosaespj@hotmail.com', '979686526', '1', 'ahc6cr47', '2020-12-31', '', '2009-04-03', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(32, '32867307', 'ENCINAS MALARIN', 'CARMEN DEL PILAR', '11328', '', '1960-03-03', 'carmencinas2@hotmail.com', '943621353', '1', '5j92ftp3', '2022-01-15', '', '2015-03-17', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(33, '17853957', 'FALLA SUAREZ', 'TULA ESPERANZA', '2937', 'HOSP. LA CALETA', '1952-11-21', 'tulafalla21@hotmail.com', '949560633', '1', 'cjwif7y8', '2020-12-31', '', '1987-07-06', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(34, '', 'FLORES HERNÁNDEZ', 'OLGA CONSUELO', '2737', '', '2000-10-05', 'olgafloresh@hotmail.com', '948920400', '0', 'tlp7pafy', '2040-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(35, '32914836', 'GANOZA ALVITRES', 'OLINDA MARÍA', '6608', 'HOSP. EGB', '1968-10-27', 'linmaria3@yahoo.es', '943889676', '1', 'oli271068', '2020-12-31', 'Urb. Nicolas Garatea Mz. 04 Lt. 04 - Nvo. Chimbote', '1999-08-16', '1900-01-01', '', '35.jpg', '', '', 1, 4, 12),
(36, '32789568', 'GARCÍA AGUILAR', 'LILIAN CLEMENTINA', '2680', 'ESSALUD NVO. CHIMB.', '1955-11-23', 'liliangartre@msn.com', '943708351', '1', 'd348fhra', '2020-12-31', '', '1986-08-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(37, '32944032', 'GOICOCHEA PALUZ', 'ALCIRA CARMEN', '5863', 'I.E. SEÑOR DE LA VIDA', '1964-04-20', 'alciragp02@hotmail.com', '943001122', '0', 'rtfdgqef', '2014-07-31', '', '1997-02-24', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(38, '32736548', 'GÓMEZ SANTACRUZ', 'MARIA MAGDA', '2144', 'HOSP. EGB', '1950-05-29', '', '', '1', '919uhivi', '2040-12-31', '', '1984-11-29', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(39, '32828610', 'GÓMEZ CHUQUIRUNA', 'LUCILA FLOR', '4066', 'SEDA CHIMBOTE', '1952-07-29', 'flower_29_07@hotmail.com', '980139996', '1', 'bf75uv6w', '2020-12-31', '', '1991-10-31', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(40, '15605045', 'GAMARRA MORANTE', 'LILIANA VICTORIA', '5437', '', '1960-05-21', 'lilivicky_215@hotmail.com', '', '1', 'g1tucjz6', '2022-01-07', '', '1996-01-17', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(41, '7739453', 'HOLGUIN TAPIA', 'ZULEMA VIRGINIA', '', '', '1958-05-21', '', '', '0', 'j4wfwvyy', '2008-06-30', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(42, '32761867', 'LÁZARO SOLANO', 'MARIELA EDITH', '4500', 'HOSP. DE CASMA', '1960-12-28', 'marielaels2828@hotmail.com', '943176582', '1', 'ac34xbpw', '2020-12-31', '', '1993-02-02', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(43, '32866617', 'LEÓN ARROYO', 'ELSA MARÍA', '9490', 'ESSALUD', '1954-04-29', 'tauro_tauro22@hotmail.com', '969358476', '1', '3g4i3x2g', '2020-12-31', '', '2010-07-09', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(44, '32928122', 'LOJE CUESTAS', 'ROXANA SOLEDAD', '7111', 'JUZGADO DE FAMILIA', '1970-12-11', 'roxiloj@hotmal.com', '944642815', '1', '9nzgjref', '2020-12-31', '', '2001-05-08', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(45, '32830599', 'MIÑANO HIDALGO', 'ZULEMA LENDELINA', '4774', '', '1962-06-09', 'zuley_mh@hotmail.com', '943810803', '1', 'uhosemq1', '2020-12-31', '', '1993-12-16', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(46, '32853000', 'MONTOYA SANTOS', 'ADELA MARGARITA', '1787', 'HOSP. EGB', '1954-12-08', '', '', '1', 'ulpmfiyp', '2020-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(47, '32830615', 'MORALES RAMIREZ', 'IRMA VIOLETA', '1162', 'HOSP. EGB', '1957-01-25', 'violetamoralesramirez@hotmail.com', '948453869', '1', 'ir2iym71', '2020-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(48, '32762233', 'MORAN TELLO', 'CARIÑO ENCANTO', '7112', 'CEM 1RA COMISERIA', '1964-10-02', 'encantosmoran@hotmail.com', '985748002', '1', 'fr24v327', '2020-12-31', '', '2001-05-08', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(49, '32740674', 'MORALES QUIÑONEZ', 'CELIA MARUJA', '2888', 'ESSALUD LADERAS', '1952-12-28', 'maruja.morales@essalud.gob.pe', '950441714', '0', 'kvxn261e', '2018-07-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(50, '17933296', 'NORIEGA ROLDAN', 'SILVIA AURORA', '2280', 'HOSP. LA CALETA', '1957-06-25', 'silvia15_noriega@hotmail.com', '943662280', '1', '123456', '2020-12-31', 'URB. LOS PINOS L-26', '1985-04-11', '1900-01-01', '', '50.jpg', '', '', 1, 4, 12),
(51, '32734075', 'PAREDES RODRÍGUEZ', 'SONIA REBECA', '6138', 'RED PACIFICO SUR', '1972-11-20', '', '929963385', '1', 'czq0m46i', '2020-12-31', '', '1998-02-20', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(52, '33203063', 'PÉREZ MORAN', 'GRACIELA ', '6388', 'ULADECH', '1962-03-01', 'graciela_perezm@hotmail.com', '937567456', '1', 'sh7a1nq9', '2021-03-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(53, '32965203', 'PINILLOS LAU', 'MÓNICA FABIOLA', '8375', 'PODER JUDICIAL', '1967-04-13', 'fabiola-67@hotmail.com', '943499547', '1', 'myitxsed', '2020-12-31', '', '2006-08-19', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(54, '32939426', 'PONCE DOMÍNGUEZ', 'MÓNICA CECILIA', '', '', '1969-09-19', 'vianca49@hotmail.com', '957622872', '0', 'dn0nwnz5', '2019-05-31', '', '2007-03-16', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(55, '32818449', 'PRADA TALLEDO', 'VIMA ANGELICA', '2484', 'ULADECH', '1954-02-27', 'vilmapra@hotmail.com', '943953441', '1', 'w2c82umg', '2020-12-31', '', '1994-04-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(56, '32833605', 'REQUE CAPUÑAY', 'SONIA NELLY', '4166', 'ULADECH', '1964-08-21', 'sonianreque@gmail.com', '958990481', '1', 'gv1zlrw6', '2022-01-18', '', '1992-02-13', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(57, '32900748', 'REYES CONTRERAS', 'LILIA ESPERANZA', '5605', 'HOSP. LA CALETA', '1963-06-14', 'liliareyes.gor@hotmail.com', '990796220', '1', 'whvsagla', '2021-07-31', '', '1996-06-21', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(58, '32930024', 'RIOS HOLGUIN', 'KATTY GEOVANNY', '6991', 'CEM COM NVO CH.', '1971-02-26', 'krholguin71@hotmail.com', '943082223', '1', '2atz2ybv', '2020-12-31', '', '2001-02-06', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(59, '32817128', 'RODRÍGUEZ ZAVALETA', 'DORIS ELIZABETH', '5758', 'UGEL ', '1964-09-29', 'bienugelsanta@hotmail.com', '943459119', '1', '8cx8apu5', '2020-12-31', '', '1996-11-25', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(60, '32853762', 'ROSALES RAMÍREZ', 'LUZ MARÍA', '6799', 'I.E. FE Y ALEGRIA', '1966-09-29', 'mery_ruth84@msn.com', '940221415', '0', 'iiky76x7', '2008-12-31', '', '2000-03-13', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(61, '32861264', 'SAM GONZALES', 'MARTHA ', '1418', '', '1953-05-19', '', '', '0', 'w8y1rg09', '2040-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(62, '32906813', 'SÁNCHEZ LLANOS', 'LILIAN ROSA', '6456', 'JUZGADO DE FAMILIA', '1967-01-11', 'lilianellanos@hotmail.com', '', '1', 'u3zx5d7v', '2020-12-31', '', '1999-06-05', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(63, '32875221', 'SÁNCHEZ AZAÑEDO', 'NANCY ESPERANZA', '6090', 'INPE', '1972-01-15', 'nesaespe_@hotmail.com', '941871444', '1', 'vhj3i33z', '2020-12-31', '', '1997-12-18', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(64, '18111019', 'SOLANO SÁNCHEZ', 'ROSA ELENA', '7726', 'PODER JUDICIAL', '1970-11-12', 'rosaelena1270@gmail.com', '993899059', '1', 'e9mf7hjc', '2020-12-31', '', '2003-02-19', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(65, '32975343', 'TASAYCO CARRANZA', 'JUDITH MARLENE', '7113', 'UNIV. SANTA', '1956-09-12', 'jumadith@hotmail.es', '943790784', '1', '76uvgb27', '2020-12-31', '', '2001-03-03', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(66, '32864622', 'TICLIA BLAS', 'SARA ANTONIETA', '3974', 'ESSALUD', '1953-05-19', 'sara.ticlia@essalud.gob.pe', '983424841', '0', '77kuym3h', '2018-06-30', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(67, '32818573', 'TORRES ORTEGA', 'ISABEL JUANA', '5612', '', '1960-11-24', 'isabeljuana1@hotmail.com', '', '0', 'pz6qggnp', '2013-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(68, '32103697', 'TAHUA SALAS', 'MARIA MAGDALENA', '5279', '', '1962-07-22', '', '', '1', '2fe5phvj', '2020-12-31', '', '1995-04-10', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(69, '32774817', 'UCEDA VALERIO', 'AURORA ', '5569', 'HOSP. EGB', '1963-08-14', 'auv0708@hotmail.com', '943601341', '1', '4ek1uwyz', '2020-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(70, '32863313', 'URBINA HERRERA', 'CARMEN ROSA', '6034', 'ONG AGUA VIVA', '1949-09-06', 'cruh69@hotmail.com', '958660404', '0', 'thhqwlno', '2014-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(71, '32928189', 'VALERIO ROSAS', 'MARIELA BARBARA', '7704', 'ESSALUD', '1970-11-26', 'marianellavalerio26@gmail.com', '943788352', '1', '7x664apf', '2020-12-31', '', '2003-02-10', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(72, '32767630', 'VÁSQUEZ CORRO', 'ESMELDA DALILA', '3382', 'UNIV. SANTA', '1962-04-20', 'dalila_vasco@hotmail.com', '943427823', '1', 'y96igpv7', '2020-12-31', '', '1989-01-19', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(73, '32926995', 'VÁSQUEZ REYES', 'MARÍA FILONILA', '6466', 'MUNIC. CHIMBOTE', '1970-10-11', 'mavar4@hotmail.com', '943160449', '1', 'nmpjfkn2', '2020-12-31', '', '1999-03-26', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(74, '7959038', 'VALER ARENA', 'JULIETA ROSHBITA', '682', 'ESSALUD TRUJILLO', '1952-03-10', '', '999598000', '0', 'pqu8d555', '2019-11-30', '', '1982-04-16', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(75, '32734392', 'VÁSQUEZ CHÁVEZ', 'LUISA MARLENE', '11327', 'CEM NVO. CHIMBOTE', '1974-04-21', 'brenmarles@hotmail.com', '920013914', '1', 'h63ozty5', '2021-12-31', '', '2015-03-27', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(76, '6518552', 'VENEROS MANRIQUE', 'ANA CECILIA', '3035', 'C.SMC, NUEVO PUERTO ', '1961-04-25', 'acecbar@hotmail.com', '934741214', '1', 'i7uac8qt', '2020-12-31', '', '1987-10-13', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(77, '17882893', 'VENTURA CHAMBI', 'GRICELDA ', '9407', 'C.S. SANTA', '1954-02-05', 'grisven@hotmail.com', '943427143', '1', 'ow648hrs', '2020-12-31', '', '2010-03-19', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(78, '32958835', 'VELÁSQUEZ CHANG', 'ESTHER ISABEL', '6203', 'I. PEDAGOGICO', '1962-08-23', 'diva_618@hotmail.com', '958922732', '1', 'r1132faj', '2020-12-31', '', '1998-04-24', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(79, '32775934', 'VENTURA LÓPEZ', 'MARÍA ZARELA', '4783', 'HOSP. LA CALETA', '1963-05-17', 'zavelo15@hotmail.com', '943862715', '1', 'wngsxhtu', '2020-12-31', '', '1993-12-16', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(80, '32943186', 'VÍLCHEZ ELÍAS', 'SONIA ESMERALDA', '3781', 'CHACHAPOYAS', '1963-11-12', 'sonavel@hotmail.com', '948823014', '1', 'unjgeb93', '2020-12-31', '', '1990-08-07', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(81, '32818322', 'ZEVALLOS ECHEVERRIA', 'ZOILA ANGÉLICA', '2217', 'RED PACIFICO NORTE', '1949-03-29', 'zoanze@hotmail.com', '943955079', '0', 'euo7o4xo', '2040-12-31', '', '1985-04-05', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(82, '8392541', 'ZEVALLOS NEGRÓN', 'ZULEMA VICTORIA', '5204', 'ESSALUD', '1959-07-24', 'zulevizn@hotmail.com', '943793419', '1', 'ij51uu40', '2020-12-31', '', '1900-01-01', '1900-01-01', '', 'noimage.jpg', '', '', 1, 4, 12),
(83, '42438382', 'QUINTANA RUIZ', 'GRISELIDA', '8812', 'HOSPITAL DE APOYO SIHUAS', '1984-06-25', 'griselidaqr@hotmail.com', '938511439', '1', '42438382', '2021-02-17', 'Je.las poncianas S/N Agoshirca Sihuas', '2021-02-18', '1900-01-01', '', '83.jpeg', '', '', 1, 4, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id_banco` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `monto` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id_banco`, `nombre`, `monto`) VALUES
(1, 'CAJA EFECTIVO', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco_movimientos`
--

CREATE TABLE `banco_movimientos` (
  `id_movimiento` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `ingresa` double(8,2) DEFAULT NULL,
  `sale` double(8,2) DEFAULT NULL,
  `concepto` varchar(245) DEFAULT NULL,
  `id_banco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banco_movimientos`
--

INSERT INTO `banco_movimientos` (`id_movimiento`, `fecha`, `ingresa`, `sale`, `concepto`, `id_banco`) VALUES
(1, '2021-01-11', 20.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 6608', 1),
(2, '2021-01-11', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 6608', 1),
(3, '2021-01-18', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 6126', 1),
(4, '2021-01-18', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 4166', 1),
(5, '2021-01-28', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 6608', 1),
(6, '2021-01-29', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 1162', 1),
(7, '2021-01-29', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 1162', 1),
(8, '2021-01-29', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 6608', 1),
(9, '2021-01-29', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 1162', 1),
(10, '2021-02-15', 330.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 6388', 1),
(11, '2021-02-15', 20.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 6388', 1),
(12, '2021-02-17', 140.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 8812', 1),
(13, '2021-02-21', 0.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 8812', 1),
(14, '2021-02-24', 0.00, 0.00, 'PAGO DE SOLICITUD DE CONSTANCIA DEL ASOCIADO CON CTSP: 6388', 1),
(15, '2021-02-25', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 4422', 1),
(16, '2020-12-30', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 657', 1),
(17, '2021-02-16', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 8917', 1),
(18, '2021-01-15', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 11328', 1),
(19, '2021-01-07', 120.00, 0.00, 'PAGO DE CUOTAS DEL ASOCIADO CON CTSP: 5437', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_laboral`
--

CREATE TABLE `bolsa_laboral` (
  `id_trabajo` int(11) NOT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `sueldo` varchar(45) DEFAULT NULL,
  `jornadal` varchar(45) DEFAULT NULL,
  `sede_trabajo` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicados`
--

CREATE TABLE `comunicados` (
  `idcomunicado` int(11) NOT NULL,
  `titulo` varchar(245) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunicados`
--

INSERT INTO `comunicados` (`idcomunicado`, `titulo`, `imagen`, `fecha`) VALUES
(1, 'OFICIO Nº 35-2020-CDR-XI-ANCASH (Sobre respeto a las plazas vacantes de Trabajadores Sociales)', '1.jpg', '2020-11-20'),
(2, 'PRONUNCIAMIENTO 008-2020 (CONREDE)', '2.jpeg', '2020-11-15'),
(3, 'OFICIO Nº342-2020 Congresista OTTO GUIBOVICH a Ministra de Salud', '3.pdf', '2020-10-31'),
(4, 'OFICIO Nº345-2020 Congresista OTTO GUIBOVICH (Observaciones al proyecto de Ley 6474-2020-CP)', '4.pdf', '2020-10-31'),
(5, 'PRONUNCIAMIENTO (CONREDE) AL Sr. PRESIDENTE, SOBRE MODIFICACION LEY Nº27669 LEY DE TRABAJO DE LA ENFERMERA', '5.pdf', '2020-10-31'),
(6, 'PRONUNCIAMIENTO PUBICO CONSEJOS DIRECTIVOS REGIONALES', '6.pdf', '2020-10-27'),
(7, 'PRONUNCIAMIENTO A LA POBLACION EN GENERAL', '7.pdf', '2020-11-23'),
(8, 'OFICIO Nº020-2020-CTSP-CDR(Aprobación del Proyecto de Ley 2134/2017–CR.)', '8.pdf', '2020-10-29'),
(9, 'OFICIO Nº001-2021-CDR-XI ANCASH-CTSP:Gestión para Inclusión del trabajador social en el Equipo itinerante de convivencia escolar', '9.pdf', '2021-01-18'),
(10, 'OFICIO Nº002-2021-CDR-XI ANCASH-CTSP: (DREA) Gestión para Inclusión del trabajador social en el Equipo itinerante de convivencia escolar', '10.pdf', '2021-01-18'),
(11, 'OFICIO Nº 003-2021-CDR XI-ANCASH (Solicitamos pertinencia en la convocatoria de profesionales  en Trabajo Social e inclusión en documentos normativos)', '11.pdf', '2021-01-20'),
(12, 'COMUNICADO ', '12.jpg', '2021-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `id_cuota` int(11) NOT NULL,
  `id_asociado` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `monto` double(8,2) DEFAULT NULL,
  `nota` varchar(45) DEFAULT NULL,
  `imgdeposito` varchar(45) DEFAULT NULL,
  `id_movimiento` int(11) NOT NULL,
  `nrocuotas` int(11) DEFAULT NULL,
  `periodo_inicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`id_cuota`, `id_asociado`, `fecha`, `monto`, `nota`, `imgdeposito`, `id_movimiento`, `nrocuotas`, `periodo_inicio`) VALUES
(1, 35, '2021-01-11', 20.00, 'PLANILLA', '', 1, 2, '0000-00-00'),
(2, 7, '2021-01-18', 120.00, '784.465.587.8653', '', 3, 12, '0000-00-00'),
(3, 56, '2021-01-18', 120.00, '56240370', '', 4, 12, '0000-00-00'),
(4, 52, '2021-02-15', 330.00, '00142095', '', 10, 33, '2018-06-15'),
(5, 83, '2021-02-17', 140.00, '661338', '', 12, 0, '0000-00-00'),
(6, 5, '2021-02-25', 120.00, '187662', '', 15, 12, '2021-01-15'),
(7, 24, '2020-12-30', 120.00, '51295229', '', 16, 12, '2021-01-15'),
(8, 29, '2021-02-16', 120.00, '60570467', '', 17, 12, '2021-01-15'),
(9, 32, '2021-01-15', 120.00, '60850065', '', 18, 12, '2021-01-15'),
(10, 40, '2021-01-07', 120.00, '23460290', '', 19, 12, '2021-01-15');

--
-- Disparadores `cuotas`
--
DELIMITER $$
CREATE TRIGGER `ti_cuotas` BEFORE INSERT ON `cuotas` FOR EACH ROW BEGIN
declare _meses int;
declare _fechapago date;
declare _ultimopago date;
declare _idasociado int;

set _meses = new.nrocuotas;
set _fechapago = new.fecha;
set _idasociado = new.id_asociado;

select date_add(_fechapago, interval _meses month) 
into _ultimopago;

update asociados as a 
set a.ultimo_pago = _ultimopago 
where a.id_asociado = _idasociado;


END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL,
  `profesor` varchar(245) DEFAULT NULL,
  `monto` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `id_modalidad` int(11) NOT NULL,
  `lugar` varchar(245) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `imagen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre`, `profesor`, `monto`, `fecha`, `estado`, `id_modalidad`, `lugar`, `id_usuario`, `imagen`) VALUES
(1, 'ACTUALIZACION DEL SISTEMA DE PENSIONES JUBILACION Y SEGURIDAD SOCIAL', 'PROFESOR 1', '30', '2021-01-13', '0', 7, 'view-source:https://medico.dexignzone.com/admin/ui-modal.html', 1, '1.png'),
(2, 'ACTUALIZACION DEL SISTEMA DE PENSIONES JUBILACION Y SEGURIDAD SOCIAL', 'Lic. LUIS DONAYRE VALDES-OSPE-ESSALUD, Lic. ANITA PAJES MERCHAN -ADM. AFP INTEGRA, Mg. FERMIN SAENZ ANDUAGA - ONP LIMA', '30', '2020-08-19', '0', 7, 'El link se enviará luego de la inscripción', 1, '2.jpeg'),
(3, 'RETOS DEL TRABAJADOR SOCIAL POST COVID-19', 'Mg. MILAGROS NEYRA PHILIPPS, Mg. ARIEL DIAZ APARICIO ', '10.00', '2020-07-22', '0', 7, 'El link se enviará luego de la inscripción', 1, '3.jpeg'),
(4, 'CONFERENCIA SALUD Y SEGURIDAD OCUPACIONAL', 'ING. PEDRO VILLON MACEDO-COORD. PROYECTO UNIDAD 1, LIC. JUDITH M. TASAYCO CARRANZA-UNID. SERVICIO SOCIAL, MG. DORIS E. RODRIGUEZ ', '10.00', '2020-09-17', '0', 7, 'El link se enviará luego de la inscripción', 1, '4.jpeg'),
(5, 'LA CONCILIACION EXTRAJUDICIAL SUS VENTAJAS Y BENEFICIOS(GRATUITA)', 'Dra. MAGALY LISETH GOICOCHEA TUYA, Dra. SHEILA DEL PILAR ALCALDE LOPEZ', '0.01', '2020-11-23', '0', 7, 'El link se enviará luego de la inscripción', 1, '5.jpeg'),
(6, 'CONFERENCIA SALUD MENTAL EN TIEMPOS DE COVID-19', 'Dr. EDWIN GALVEZ LEON - PSIQUIATRA-HOSPITAL VICTOR LAZARTE ECHEGARAY TRUJILLO', '10.00', '2020-11-27', '0', 7, 'El link se enviará luego de la inscripción', 1, '6.jpeg'),
(7, 'JORNADA DE TRABAJO SOCIAL del 17 AL 26 DE MARZO', 'Mg. T.S. Mínela Riveros Zuñiga, Lic. T.S. N. Ruth Álamo  Palacios, Lic. T.S. Nancy E. Diestra Pastor, Lic. TS.  I. Violeta Morales Ramírez,Lic. T.S. Victoria E. Aponte Lector, Lic. T.S. Judith M. Tasayco Carranza, Lic. T.S. Katty G. Ríos  Holguí', '50', '2021-03-17', '0', 7, 'Se enviara el link un día antes de la presentación', 1, '7.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_participantes`
--

CREATE TABLE `cursos_participantes` (
  `id_participante` int(11) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `nro_documento` varchar(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `id_curso` int(11) NOT NULL,
  `id_movimiento` varchar(25) DEFAULT NULL,
  `centro_trabajo` varchar(245) NOT NULL,
  `voucher` varchar(45) NOT NULL,
  `verificado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos_participantes`
--

INSERT INTO `cursos_participantes` (`id_participante`, `apellidos`, `nombres`, `nro_documento`, `email`, `celular`, `id_curso`, `id_movimiento`, `centro_trabajo`, `voucher`, `verificado`) VALUES
(1, 'MANTILLA GUEVARA', 'EDWIN', '32969637', 'emantillag@hotmail.com', '943210162', 7, '', 'LA CALETA', 'do9a6hve.jpeg', 0),
(2, 'CAMPOS PINEDO', 'ROSARIO ENITH', '32778316', 'r_camposp@hotmail.com', '943485051', 7, '', 'CEM CHIMBOTE', 'n489uh5e.jpeg', 0),
(3, 'CUENTAS ROBLES ', 'GONZALA ROSENDA ', '06825861', 'rcuentasr@hotmail.com', '951756625', 7, '', 'CENTRO DE SALUD ESSALUD HUARMEY', 'bblzr7jj.jpeg', 0),
(4, 'CAPCHA INOCENTE', 'MARIA ELENA', '15598659', 'maria20capcha@gmail.com', '956308164', 7, '', 'INPE - HUACHO', 'ld9zb7oh.jpeg', 0),
(5, 'GANOZA ALVITRES', 'OLINDA MARIA', '32914836', 'linmaria3@yahoo.es', '943889676', 7, '', 'Hospital Regional \"EGB\" Nvo. Chimbote', 'drpz5jr1.jpg', 0),
(6, 'NORIEGA ROLDAN', 'SILVIA AURORA', '17933296', 'silvia15_noriega@hotmail.com', '943 66228', 7, '', 'HOSPITAL LA CALETA - MINSA', 'migwh1vj.jpeg', 0),
(7, 'QUINTANA RUíZ', 'GRISELIDA', '42438382', 'griselidaqr@hotmail.com', '938511439', 7, '', 'Hospital de Apoyo Sihuas', 'vjec4ztc.jpg', 0),
(8, 'BULLON ROJAS', 'IVONNE', '20738368', 'Ivomaax@outlook.com', '990222698', 7, '', 'LIMA', '4tn94h87.jpeg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `video` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `programapdf` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_tipo_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idevento`, `anio`, `video`, `programapdf`, `id_tipo_evento`) VALUES
(1, 2020, 'nQeZO6_hy50', '1.pdf', 8),
(2, 2019, '9QKpZMEnjTw', '2.pdf', 9),
(3, 2020, 'Iz8Lf3LWA0E', '3.pdf', 10),
(4, 2020, '9kkc9l4djSM', '4.pdf', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_fotos`
--

CREATE TABLE `eventos_fotos` (
  `ideventos_fotos` int(11) NOT NULL,
  `imagen` varchar(245) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos_fotos`
--

INSERT INTO `eventos_fotos` (`ideventos_fotos`, `imagen`, `idevento`) VALUES
(1, '1.png', 1),
(2, '2.jpg', 2),
(3, '3.jpg', 2),
(4, '4.jpg', 2),
(5, '5.jpg', 2),
(6, '6.jpg', 2),
(7, '7.jpg', 2),
(8, '8.jpg', 2),
(9, '9.jpg', 2),
(10, '10.jpg', 2),
(11, '11.jpg', 2),
(12, '12.jpg', 2),
(13, '13.jpg', 2),
(14, '14.jpg', 2),
(15, '15.jpg', 2),
(16, '16.jpg', 3),
(17, '17.jpg', 3),
(18, '18.jpg', 3),
(19, '19.jpg', 3),
(20, '20.jpeg', 3),
(21, '21.JPG', 3),
(22, '22.jpg', 4),
(23, '23.jpg', 4),
(24, '24.jpg', 4),
(25, '25.jpg', 4),
(26, '26.jpg', 4),
(27, '27.jpg', 4),
(28, '28.jpg', 4),
(29, '29.jpg', 4),
(30, '30.jpeg', 4),
(31, '31.jpeg', 4),
(32, '32.jpeg', 4),
(33, '33.jpeg', 4),
(34, '34.jpeg', 4),
(35, '35.jpeg', 4),
(36, '36.jpeg', 4),
(37, '37.jpeg', 4),
(38, '38.jpeg', 4),
(39, '39.jpeg', 4),
(40, '40.jpeg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_certificados`
--

CREATE TABLE `formato_certificados` (
  `id_formato` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `contenido` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(245) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contenido` text COLLATE utf8_spanish_ci,
  `imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `fecha`, `titulo`, `contenido`, `imagen`) VALUES
(3, '2017-07-31', 'Juramentación de Mg. Zarela Ventura López Periodo  2017-2019', '<p><span style=\"font-size: 14.992px;\">Juramentación de Mg. Zarela Ventura López Periodo&nbsp; 2017-2019</span></p>', ''),
(4, '2020-07-31', 'Reunión CONREDE (CONSEJO REGIONAL DE DECANOS)', '<p><span style=\"font-size: 14.992px;\">Reunión CONREDE (CONSEJO REGIONAL DE DECANOS)</span></p>', ''),
(5, '2019-11-28', 'INAUGURACION DEL CENTRO DE SALUD MENTAL COMUNITARIO', '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; text-align: justify;\">Los pacientes que sufren de problemas mentales ahora podrán atenderse en el&nbsp;</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; text-align: justify;\">Centro de Salud Mental Comunitario Dos de Junio</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; text-align: justify;\">, ubicado en el pueblo joven del mismo nombre. Niños y adultos podrán recibir atención sicológica, siquiátrica y sicoterapia con un equipo multidisciplinario integrado por médicos, enfermeras y asistentes sociales. Los pacientes pueden ser referidos de otros centros de salud o pueden &nbsp;recibir el servicio de manera directa.&nbsp;</span></p>', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_imagenes`
--

CREATE TABLE `noticias_imagenes` (
  `id_imagenes` int(11) NOT NULL,
  `idnoticias` int(11) NOT NULL,
  `imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias_imagenes`
--

INSERT INTO `noticias_imagenes` (`id_imagenes`, `idnoticias`, `imagen`) VALUES
(6, 3, '6.jpg'),
(7, 3, '7.jpg'),
(8, 3, '8.jpg'),
(9, 3, '9.jpg'),
(10, 4, '10.jpeg'),
(11, 4, '11.jpeg'),
(12, 5, '12.jpg'),
(13, 5, '13.jpg'),
(14, 5, '14.jpg'),
(15, 5, '15.jpg'),
(16, 5, '16.jpeg'),
(17, 5, '17.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_detalles`
--

CREATE TABLE `parametros_detalles` (
  `id_detalle` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `id_parametro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parametros_detalles`
--

INSERT INTO `parametros_detalles` (`id_detalle`, `nombre`, `valor`, `id_parametro`) VALUES
(1, 'DNI', '', 3),
(2, 'TITULO', '', 1),
(3, 'CARNET EXTRANJERIA', '', 3),
(4, 'NUEVO', '', 4),
(5, 'TRASLADO A ESTE COLEGIO', '', 4),
(6, 'PRESENCIAL', '', 2),
(7, 'VIA ZOOM', '', 2),
(8, 'DIA DE LA MADRE', '', 5),
(9, 'SEMANA CIVICA', '', 5),
(10, 'DIA DEL TRABAJADOR SOCIAL', '', 5),
(11, 'NAVIDAD Y AÑO NUEVO', '', 5),
(12, 'EN ACTIVIDAD', '', 6),
(13, 'CESANTE - JUBILADO', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_generales`
--

CREATE TABLE `parametros_generales` (
  `id_parametro` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parametros_generales`
--

INSERT INTO `parametros_generales` (`id_parametro`, `nombre`) VALUES
(1, 'ARCHIVOS ASOCIADOS'),
(2, 'MODALIDAD CURSO'),
(3, 'DOCUMENTO IDENTIFICACION'),
(4, 'TIPO INSCRIPCION COLEGIADO'),
(5, 'TIPO ACTIVIDAD ANUAL'),
(6, 'ESTADO ASOCIADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_habilidad`
--

CREATE TABLE `solicitud_habilidad` (
  `id_solicitud` int(11) NOT NULL,
  `id_asociado` int(11) NOT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_ultimo_pago` date DEFAULT NULL,
  `pago` double(8,2) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `voucher` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitud_habilidad`
--

INSERT INTO `solicitud_habilidad` (`id_solicitud`, `id_asociado`, `fecha_solicitud`, `fecha_ultimo_pago`, `pago`, `estado`, `voucher`) VALUES
(1, 35, '2021-01-11', '2021-03-11', 20.00, '1', '2021-01-11'),
(2, 35, '2021-01-28', '2020-12-31', 20.00, '1', '2021-01-28'),
(3, 47, '2021-01-29', '2020-12-31', 20.00, '1', '2021-01-29'),
(4, 47, '2021-01-29', '2020-12-31', 20.00, '1', '2021-01-29'),
(5, 35, '2021-01-29', '2020-12-31', 20.00, '1', '2021-01-29'),
(6, 47, '2021-01-29', '2020-12-31', 20.00, '1', '2021-01-29'),
(7, 52, '2021-02-15', '2023-11-15', 20.00, '1', '2021-02-15'),
(8, 83, '2021-02-21', '2021-02-17', 0.00, '1', '2021-02-21'),
(9, 52, '2021-02-24', '2023-11-15', 0.00, '1', '2021-02-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `datos` varchar(245) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `ultimo_ingreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `datos`, `email`, `celular`, `estado`, `ultimo_ingreso`) VALUES
(1, 'snoriega', '123456', 'Silvia Noriega', NULL, NULL, '0', '2020-12-06'),
(2, 'oganoza', '/*2021', 'Olinda Ganoza', NULL, NULL, '0', NULL),
(3, 'ndiestra', '/*123456', 'Nancy Diestra', NULL, NULL, '0', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos_internos`
--
ALTER TABLE `archivos_internos`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `fk_archivos_internos_usuarios1_idx` (`id_usuario`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`id_asociado`),
  ADD KEY `fk_asociados_parametros_detalles1_idx` (`id_tipo_documento`),
  ADD KEY `fk_asociados_parametros_detalles2_idx` (`id_tipo_inscripcion`),
  ADD KEY `fk_tipo_actividad` (`id_tipo_actividad`);
ALTER TABLE `asociados` ADD FULLTEXT KEY `busqueda` (`apellidos`,`nombres`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id_banco`);

--
-- Indices de la tabla `banco_movimientos`
--
ALTER TABLE `banco_movimientos`
  ADD PRIMARY KEY (`id_movimiento`),
  ADD KEY `fk_banco_movimientos_bancos1_idx` (`id_banco`);

--
-- Indices de la tabla `bolsa_laboral`
--
ALTER TABLE `bolsa_laboral`
  ADD PRIMARY KEY (`id_trabajo`),
  ADD KEY `fk_bolsa_laboral_usuarios1_idx` (`id_usuario`);

--
-- Indices de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`idcomunicado`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`id_cuota`),
  ADD KEY `fk_cuotas_asociados_idx` (`id_asociado`),
  ADD KEY `fk_cuotas_banco_movimientos1_idx` (`id_movimiento`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_cursos_parametros_detalles1_idx` (`id_modalidad`),
  ADD KEY `fk_cursos_usuarios1_idx` (`id_usuario`);

--
-- Indices de la tabla `cursos_participantes`
--
ALTER TABLE `cursos_participantes`
  ADD PRIMARY KEY (`id_participante`),
  ADD KEY `fk_cursos_participantes_cursos1_idx` (`id_curso`),
  ADD KEY `fk_cursos_participantes_banco_movimientos1_idx` (`id_movimiento`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`),
  ADD KEY `fk_eventos_parametros_detalles1_idx` (`id_tipo_evento`);

--
-- Indices de la tabla `eventos_fotos`
--
ALTER TABLE `eventos_fotos`
  ADD PRIMARY KEY (`ideventos_fotos`),
  ADD KEY `fk_eventos_fotos_eventos1_idx` (`idevento`);

--
-- Indices de la tabla `formato_certificados`
--
ALTER TABLE `formato_certificados`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticias`);

--
-- Indices de la tabla `noticias_imagenes`
--
ALTER TABLE `noticias_imagenes`
  ADD PRIMARY KEY (`id_imagenes`),
  ADD KEY `fk_noticias_imagenes_noticias1_idx` (`idnoticias`);

--
-- Indices de la tabla `parametros_detalles`
--
ALTER TABLE `parametros_detalles`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_parametros_detalles_parametros_generales1_idx` (`id_parametro`);

--
-- Indices de la tabla `parametros_generales`
--
ALTER TABLE `parametros_generales`
  ADD PRIMARY KEY (`id_parametro`);

--
-- Indices de la tabla `solicitud_habilidad`
--
ALTER TABLE `solicitud_habilidad`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `fk_solicitud_habilidad_asociados1_idx` (`id_asociado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos_internos`
--
ALTER TABLE `archivos_internos`
  ADD CONSTRAINT `fk_archivos_internos_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD CONSTRAINT `fk_asociados_parametros_detalles1` FOREIGN KEY (`id_tipo_documento`) REFERENCES `parametros_detalles` (`id_detalle`),
  ADD CONSTRAINT `fk_asociados_parametros_detalles2` FOREIGN KEY (`id_tipo_inscripcion`) REFERENCES `parametros_detalles` (`id_detalle`),
  ADD CONSTRAINT `fk_asociados_tipo_actividad` FOREIGN KEY (`id_tipo_actividad`) REFERENCES `parametros_detalles` (`id_detalle`);

--
-- Filtros para la tabla `banco_movimientos`
--
ALTER TABLE `banco_movimientos`
  ADD CONSTRAINT `fk_banco_movimientos_bancos1` FOREIGN KEY (`id_banco`) REFERENCES `bancos` (`id_banco`);

--
-- Filtros para la tabla `bolsa_laboral`
--
ALTER TABLE `bolsa_laboral`
  ADD CONSTRAINT `fk_bolsa_laboral_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD CONSTRAINT `fk_cuotas_asociados` FOREIGN KEY (`id_asociado`) REFERENCES `asociados` (`id_asociado`),
  ADD CONSTRAINT `fk_cuotas_banco_movimientos1` FOREIGN KEY (`id_movimiento`) REFERENCES `banco_movimientos` (`id_movimiento`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_cursos_parametros_detalles1` FOREIGN KEY (`id_modalidad`) REFERENCES `parametros_detalles` (`id_detalle`),
  ADD CONSTRAINT `fk_cursos_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `cursos_participantes`
--
ALTER TABLE `cursos_participantes`
  ADD CONSTRAINT `fk_cursos_participantes_cursos1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_eventos_parametros_detalles1` FOREIGN KEY (`id_tipo_evento`) REFERENCES `parametros_detalles` (`id_detalle`);

--
-- Filtros para la tabla `eventos_fotos`
--
ALTER TABLE `eventos_fotos`
  ADD CONSTRAINT `fk_eventos_fotos_eventos1` FOREIGN KEY (`idevento`) REFERENCES `eventos` (`idevento`);

--
-- Filtros para la tabla `noticias_imagenes`
--
ALTER TABLE `noticias_imagenes`
  ADD CONSTRAINT `fk_noticias_imagenes_noticias1` FOREIGN KEY (`idnoticias`) REFERENCES `noticias` (`idnoticias`);

--
-- Filtros para la tabla `parametros_detalles`
--
ALTER TABLE `parametros_detalles`
  ADD CONSTRAINT `fk_parametros_detalles_parametros_generales1` FOREIGN KEY (`id_parametro`) REFERENCES `parametros_generales` (`id_parametro`);

--
-- Filtros para la tabla `solicitud_habilidad`
--
ALTER TABLE `solicitud_habilidad`
  ADD CONSTRAINT `fk_solicitud_habilidad_asociados1` FOREIGN KEY (`id_asociado`) REFERENCES `asociados` (`id_asociado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
