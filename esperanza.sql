-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 03:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esperanza`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `hora` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clinicas`
--

CREATE TABLE `clinicas` (
  `id` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comentario-fotos`
--

CREATE TABLE `comentario-fotos` (
  `codigo` int(11) NOT NULL,
  `cod-comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `codigo` int(11) NOT NULL,
  `cod-historial` int(11) NOT NULL,
  `cordenadas` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_persona` int(11) NOT NULL,
  `objetivos` text COLLATE utf8_spanish_ci NOT NULL,
  `subjetivos` text COLLATE utf8_spanish_ci NOT NULL,
  `nuevos_datos` text COLLATE utf8_spanish_ci NOT NULL,
  `diagnostico` text COLLATE utf8_spanish_ci NOT NULL,
  `tratamiento` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`id`, `fecha`, `id_persona`, `objetivos`, `subjetivos`, `nuevos_datos`, `diagnostico`, `tratamiento`) VALUES
(1, '2019-02-14', 1, 'N/h', 'N/h', 'N/h', 'N/h', 'N/h');

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(90) NOT NULL,
  `historia` text NOT NULL,
  `peso` double NOT NULL,
  `estatura` double NOT NULL,
  `frecuencia_cardiaca` int(2) NOT NULL,
  `frecuencia_respiratoria` int(2) NOT NULL,
  `temperatura` double NOT NULL,
  `presion_arterial` int(9) NOT NULL,
  `saturacion_oxigeno` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historial`
--

INSERT INTO `historial` (`id`, `id_persona`, `fecha`, `motivo`, `historia`, `peso`, `estatura`, `frecuencia_cardiaca`, `frecuencia_respiratoria`, `temperatura`, `presion_arterial`, `saturacion_oxigeno`) VALUES
(1, 1, '2019-01-20', 'Dolor de cabeza', 'Se cayó de un tercer nivel en el momento perdio la consencia por 3 minutos, luego todo parecia normal y no creía necesario ir al hospital.', 0, 0, 0, 0, 0, 0, 0),
(2, 2, '2019-02-14', 'Dolor de cuello', 'Le duele el cuello', 150, 164, 12, 8, 27, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` int(1) NOT NULL,
  `especialidad` int(2) NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`id`, `nombre`, `sexo`, `especialidad`, `correo`) VALUES
(1, 'Erika Pérez', 2, 1, 'clinikderehabilitacion@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(90) CHARACTER SET latin1 NOT NULL,
  `identificacion` varchar(16) CHARACTER SET latin1 NOT NULL,
  `telefono` int(12) NOT NULL,
  `direccion` varchar(90) CHARACTER SET latin1 NOT NULL,
  `pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `escolaridad` int(10) NOT NULL,
  `nacimiento` date NOT NULL,
  `estado_civil` int(1) NOT NULL,
  `ocupacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `antecedentes_medicos` text COLLATE utf8_spanish_ci NOT NULL,
  `antecedentes_traumaticos` text COLLATE utf8_spanish_ci NOT NULL,
  `antecedentes_quirugico` text COLLATE utf8_spanish_ci NOT NULL,
  `antecedentes_alergicos` text COLLATE utf8_spanish_ci NOT NULL,
  `antecedentes_gineco_obstetricos` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`codigo`, `nombre`, `identificacion`, `telefono`, `direccion`, `pais`, `departamento`, `ciudad`, `genero`, `escolaridad`, `nacimiento`, `estado_civil`, `ocupacion`, `updated_at`, `antecedentes_medicos`, `antecedentes_traumaticos`, `antecedentes_quirugico`, `antecedentes_alergicos`, `antecedentes_gineco_obstetricos`) VALUES
(1, 'Elmer Alejandro Chanquín Pérez', '3029987800108', 50014857, '3 Avenida 24-72 Zona 3', 'Guatemala', 'Guatemala', 'Guatemala', 'm', 4, '1999-12-23', 1, 'Estudiante', '2019-02-01 15:47:17', '', '', '', '', ''),
(2, 'Josseline Lissette Chanquín Pérez', '', 41148451, '3 Avenida 24-72 Zona 3', 'Guatemala', 'Guatemala', 'Guatemala', 'f', 5, '1994-06-04', 1, 'Estudiante', '2019-02-01 15:47:27', '', '', '', '', ''),
(3, 'Erika Lissette Pérez de León', '1580125420101', 41827952, '3 Avenida 24-72 Zona 3', 'Guatemala', 'Guatemala', 'Guatemala', 'f', 5, '1970-09-05', 3, 'Médico', '2019-02-01 15:47:34', '', '', '', '', ''),
(5, 'Zoila Esther Bonilla Pérez ', '3029987800108', 41827952, '3 Avnida 24-72 Zona 3', 'Guatemala', 'Guatemala', 'Guatemala', 'f', 5, '1994-06-04', 2, 'Estudiante', '2019-02-18 23:33:30', '', '', '', '', ''),
(6, 'Mario caseres', '102030', 78985468, 'Guatemala', 'Guatemala', 'Guatemala', 'Guatemala', '1', 4, '2001-07-13', 1, 'Ninguna', '2019-02-19 01:50:55', '', '', '', '', ''),
(7, 'Antonio Banderas', '879564348198', 65487527, 'Guatemala', 'Guatemala', 'Guatemala', 'Guatemala', '1', 6, '2019-02-06', 2, 'Profesional', '2019-02-19 01:52:22', 'Se cayo de la cama', 'No', 'Lo operaron', 'Quiza', 'Saber'),
(8, 'Chasca Morena Pérez', '784621361895', 10203040, '3 Avenida', 'Guatemala', 'Guatemala', 'Guatemala', '2', 1, '2006-05-01', 1, 'Perro de peluche', '2019-03-14 21:03:36', 'Ninguno', 'Ninguno', 'Ninguno', 'Frio, polvo y acaros', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `permisos` int(1) NOT NULL DEFAULT '3' COMMENT '1 Administrador | 2 Medico | 3 paciente | 4 secretaria | 5 enfermera | 6 web master',
  `correo` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario-fotos`
--
ALTER TABLE `comentario-fotos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod-comentario` (`cod-comentario`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod-historial` (`cod-historial`);

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-persona` (`id_persona`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo` (`codigo`),
  ADD KEY `ciudad` (`ciudad`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario-fotos`
--
ALTER TABLE `comentario-fotos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario-fotos`
--
ALTER TABLE `comentario-fotos`
  ADD CONSTRAINT `comentario-fotos_ibfk_1` FOREIGN KEY (`cod-comentario`) REFERENCES `comentarios` (`codigo`);

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`cod-historial`) REFERENCES `historial` (`id`);

--
-- Constraints for table `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
