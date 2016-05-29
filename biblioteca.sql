-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-04-2016 a las 08:04:37
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--
CREATE DATABASE `biblioteca`;
CREATE TABLE `biblioteca`.`noticia` (
  `id` int(2) NOT NULL auto_increment,
  `titulo` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `noticia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `biblioteca`.`usuario` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(200) default NULL,
  `apellido` varchar(200) default NULL,
  `usuario` varchar(200) default NULL,
  `password` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  `nivel` int(11) default NULL,
  `Timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `biblioteca`.`usuario` (`id`, `nombre`, `apellido`, `usuario`, `password`, `email`, `nivel`, `Timestamp`) VALUES
(1, 'Noelieth', 'Longart', 'noelieth', '1234', 'noeliethmariana@gmail.com', 1, '2016-04-13 22:06:04');
