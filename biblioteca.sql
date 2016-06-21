-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2016 a las 04:19:36
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `cuerpo`, `imagen`, `fecha`) VALUES
(1, 'Universidad de Oriente hace mini semestre ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.', '1.jpg', '2016-06-01 02:22:55'),
(2, 'Se inician las clases en junio', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber', '2.jpg', '2016-05-18 02:22:55'),
(3, 'Se dice que haran intensivos', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liberr', '3.jpg', '2016-06-17 00:33:09'),
(4, 'Ya comenzaron las clases en la udo', 'loooooooooremmm ipppsuuuu bla bla loooooooooremmm ipppsuuuu bla bla loooooooooremmm ipppsuuuu bla bla loooooooooremmm ipppsuuuu bla bla', '4.jpg', '2016-06-08 21:54:24'),
(5, 'horarios I-2016', 'wwwww eeeee rrrrr tttt gggggg wwwww eeeee rrrrr tttt gggggg wwwww eeeee rrrrr tttt gggggg wwwww eeeee rrrrr tttt gggggg wwwww eeeee rrrrr tttt gggggg wwwww eeeee rrrrr tttt gggggg', '5.jpg', '2016-06-09 18:59:24'),
(6, 'noticia 6', 'Suspendisse id felis mi. Quisque blandit mattis nisl eu volutpat. Duis viverra lacus quis arcu mattis ac varius ligula convallis. Maecenas magna enim, molestie ac ultrices sed, convallis vel dolor. Vestibulum sed hendrerit massa. Integer consequat odio vitae est rutrum et egestas nibh sodales. Sed adipiscing nisl vel massa bibendum molestie.', '6.png', '2016-06-09 19:05:18'),
(7, 'noticia 7', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eleifend dictum ligula, id vulputate tortor luctus id. Sed accumsan mollis venenatis. Integer auctor ante vitae ante facilisis bibendum. Fusce bibendum enim lacinia mauris pharetra facilisis. Morbi semper libero vel justo pellentesque interdum. Curabitur urna ante, dapibus eu pulvinar quis, interdum quis odio.', '7.png', '2016-06-09 19:07:25'),
(8, 'noticia 8', 'Sed faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend.', '8.png', '2016-06-09 19:09:55'),
(9, 'noticia 9', 'Mama faucibus, orci venenatis varius pellentesque, magna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend.', '9.png', '2016-06-09 19:09:55'),
(10, 'noticia 10', 'Gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend.', '10.png', '2016-06-09 19:11:40'),
(11, 'noticia 11', 'Maaaaaaagna massa blandit nisi, id tempus erat tellus pulvinar nibh. Nulla eu rutrum dui. Ut gravida nulla feugiat risus egestas congue. Suspendisse pulvinar ornare urna eleifend tincidunt. Cras eros velit, mattis at lobortis cursus, pulvinar ut nisl. Ut blandit euismod dolor nec congue. Vestibulum euismod dictum tristique. Morbi sagittis auctor commodo. Pellentesque in odio et nulla tincidunt tristique. In tempor tempus eleifend.', '11.jpg', '2016-06-09 19:11:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

DROP TABLE IF EXISTS `sesiones`;
CREATE TABLE IF NOT EXISTS `sesiones` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `remote_addr` varchar(255) NOT NULL DEFAULT '',
  `request_uri` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `date_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_end` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1 COMMENT='Log';

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`log_id`, `user_id`, `remote_addr`, `request_uri`, `message`, `date_start`, `date_end`) VALUES
(1, 'noelieth', '::1', '/biblioteca/admin/pages/admin.php?tipo=elegir&op=elegir&acceder=true', 'ha iniciado sesiÃ³n', '2016-06-15 22:13:12', '2016-06-15 22:13:12'),
(2, 'noelieth', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-15 22:23:08', '2016-06-15 22:23:08'),
(3, 'odlanier', '::1', '/biblioteca/admin/pages/admin.php?tipo=elegir&op=elegir&acceder=true', 'ha iniciado sesiÃ³n', '2016-06-17 17:04:17', '2016-06-17 17:04:17'),
(4, 'odlanier', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-17 17:09:04', '2016-06-17 17:09:04'),
(5, 'francisco', '::1', '/biblioteca/admin/pages/admin.php?tipo=elegir&op=elegir&acceder=true', 'ha iniciado sesiÃ³n', '2016-06-17 19:16:07', '2016-06-17 19:16:07'),
(6, 'francisco', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-17 22:52:30', '2016-06-17 22:52:30'),
(7, 'noelieth', '::1', '/biblioteca/admin/pages/admin.php?tipo=elegir&op=elegir&acceder=true', 'ha iniciado sesiÃ³n', '2016-06-18 02:16:43', '2016-06-18 02:16:43'),
(8, 'noelieth', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-18 02:46:07', '2016-06-18 02:46:07'),
(9, 'noelieth', '::1', '/biblioteca/admin/pages/admin.php?acceder=true', 'ha iniciado sesiÃ³n', '2016-06-18 02:59:41', '2016-06-18 02:59:41'),
(10, 'noelieth', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-18 03:07:30', '2016-06-18 03:07:30'),
(11, 'noelieth', '::1', '/biblioteca/admin/pages/admin.php?acceder=true', 'ha iniciado sesiÃ³n', '2016-06-19 02:01:37', '2016-06-19 02:01:37'),
(12, 'noelieth', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-19 02:06:58', '2016-06-19 02:06:58'),
(13, 'noelieth', '::1', '/biblioteca/admin/pages/admin.php?acceder=true', 'ha iniciado sesiÃ³n', '2016-06-21 03:23:57', '2016-06-21 03:23:57'),
(14, 'noelieth', '::1', '/biblioteca/index.php?logout=true', 'ha cerrado sesiÃ³n', '2016-06-21 04:05:41', '2016-06-21 04:05:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `usuario`, `password`, `email`, `nivel`, `Timestamp`) VALUES
(1, 'Noelieth', 'Longart', 'noelieth', '1234', 'noeliethmariana@gmail.com', 1, '2016-04-14 02:36:04'),
(2, 'Odlanier', 'GÃ³mez', 'odlanier', '1234', 'odlanier@gmail.com', 1, '2016-05-30 03:48:43'),
(3, 'Francisco', 'Sánchez', 'francisco', '0000', 'francisco@gmail.com', 1, '2016-06-15 21:35:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
