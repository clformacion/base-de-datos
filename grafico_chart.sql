-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2023 a las 18:33:58
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
-- Base de datos: `grafico_chart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `emp_nombre` varchar(80) NOT NULL,
  `salario` varchar(20) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `emp_nombre`, `salario`, `genero`, `ciudad`, `email`) VALUES
(1, 'Yogesh', '40000', 'masculino', 'Florida', 'yogesh@domain.com'),
(2, 'Vishal', '28000', 'masculino', 'Brasilia', 'vishal@domain.com'),
(3, 'Vijay', '35000', 'masculino', 'Miami', 'vijayec@domain.com'),
(4, 'Rahul', '25000', 'masculino', 'Florida', 'rahul512@domain.com'),
(5, 'Sonarika', '50000', 'femenino', 'Santiago', 'bsonarika@domain.com'),
(6, 'Jitentendre', '48000', 'masculino', 'Barcelona', 'jiten94@domain.com'),
(7, 'Aditya', '36000', 'masculino', 'Brasilia', 'aditya@domain.com'),
(8, 'Anil', '32000', 'masculino', 'Caracas', 'anilsingh@domain.com'),
(9, 'Sunil', '48000', 'masculino', 'Brasilia', 'sunil1993@domain.com'),
(10, 'Akilesh', '52000', 'masculino', 'Miami', 'akileshsahu@domain.com'),
(11, 'Raj', '48000', 'masculino', 'Quito', 'rajsingh@domain.com'),
(12, 'Mayank', '54000', 'masculino', 'Santiago', 'mpatidar@domain.com'),
(13, 'Shalu', '43000', 'femenino', 'Barcelona', 'gshalu521@domain.com'),
(14, 'Ravi', '32000', 'masculino', 'Quito', 'ravisharma21@domain.com'),
(15, 'Shruti', '45000', 'femenino', 'Delhi', 'shruti@domain.com'),
(16, 'Rishi', '38000', 'masculino', 'Santiago', 'rishi121@domain.com'),
(17, 'Rohan', '47000', 'masculino', 'Miami', 'rohansingh@domain.com'),
(18, 'Priya', '28000', 'femenino', 'Caracas', 'priya1992@domain.com'),
(19, 'Rakesh', '34000', 'masculino', 'Barcelona', 'rakesh@domain.com'),
(20, 'Vinay', '34000', 'masculino', 'Delhi', 'vinaysingh@domain.com'),
(21, 'Tanu', '41000', 'femenino', 'Brasilia', 'Tanu@domain.com'),
(22, 'Ajay', '28000', 'masculino', 'Barcelona', 'ajay93@domain.com'),
(23, 'Nikhil', '46000', 'masculino', 'Brasilia', 'nikhil@domain.com'),
(24, 'Arav', '28000', 'masculino', 'Santiago', 'aravsingh@domain.com'),
(25, 'Madhu', '32000', 'femenino', 'Delhi', 'madhu@domain.com'),
(26, 'Sagar', '44000', 'masculino', 'Quito', 'sagar@domain.com'),
(27, 'Anju ', '30000', 'femenino', 'Santiago', 'anju@domain.com'),
(28, 'Rajat', '28000', 'masculino', 'Caracas', 'rajat@domain.com'),
(29, 'Anjali', '32000', 'femenino', 'Delhi', 'anjali@domain.com'),
(30, 'Saloni', '32000', 'femenino', 'Miami', 'saloni@domain.com'),
(31, 'Mayur', '28000', 'masculino', 'Barcelona', 'mayur@domain.com'),
(32, 'Pankaj', '32000', 'masculino', 'Caracas', 'pankaj@domain.com'),
(33, 'Hrithik', '33000', 'masculino', 'Brasilia', 'hrithik@domain.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
