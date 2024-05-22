-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2024 a las 04:56:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idR` int(10) NOT NULL,
  `idreportado` int(10) NOT NULL,
  `idreporte` int(10) NOT NULL,
  `motivo` text NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`idR`, `idreportado`, `idreporte`, `motivo`, `fecha`) VALUES
(4, 987654321, 793683764, 'Eres furra', '2023-11-27 01:29:20'),
(7, 0, 793683764, 'Si funciona', '2023-11-29 03:57:02'),
(8, 0, 123456789, 'Es una naca', '2023-11-29 04:49:02'),
(9, 987654321, 123456789, 'Es una naca y stripper en roblox', '2023-11-29 04:51:04'),
(10, 1356393593, 987654321, 'Nomas', '2023-11-29 14:43:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scores`
--

CREATE TABLE `scores` (
  `score` int(11) NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `scores`
--

INSERT INTO `scores` (`score`, `username`) VALUES
(4100, 'alph56'),
(5200, 'cait'),
(7400, 'Cris Ruvalcaba'),
(6300, 'dancatfly'),
(1800, 'diego'),
(8500, 'Juarez9516'),
(500, 'liz'),
(300, 'oliadios'),
(900, 'samnette');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `codigo_verificacion` varchar(32) NOT NULL,
  `verificado` tinyint(1) NOT NULL DEFAULT 0,
  `pass` varchar(50) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fotografia` varchar(128) NOT NULL,
  `archivo_n` varchar(128) NOT NULL,
  `admin` int(2) NOT NULL DEFAULT 0,
  `status` varchar(20) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `codigo_verificacion`, `verificado`, `pass`, `nickname`, `apellidos`, `fotografia`, `archivo_n`, `admin`, `status`, `unique_id`, `score`) VALUES
(51, 'Samantha', 'androlausam2@gmail.com', '9f77720ef7b5122aabf45b49dd1266c6', 1, '0cdfb256110772e88c21ddf94ee6f1ba', 'samnette', 'Telles', '1b140572f693b77a5173aa643a503497.jpg', 'Miyamurita.jpg', 1, 'Offline', 987654321, 0),
(52, 'Alberto', 'dangatovolador@gmail.com', 'e51fadadb39f8d188f495ab3a663c924', 1, 'caf1a3dfb505ffed0d024130f58c5cfa', 'Juarez9516', 'Silva', '05abde1caafd58db602eada746fb7404.jpg', 'soyese.jpg', 0, 'Offline', 793683764, 0),
(53, 'Christian', 'cristiansillochavech@gmail.com', '97fda7f4e1bb04c48b022eb09f3d998b', 1, '827ccb0eea8a706c4c34a16891f84e7b', 'Cris Ruvalcaba', 'Ruvalcava', '47d9e075126125bd9f6b97850df044c6.jpg', 'crisfoto.jpg', 1, 'Offline', 549412433, 0),
(54, 'Trilce', 'trilceflores15@gmail.com', 'c466a0eae55f4e1042bab05e1d49e5d0', 1, '637460cd3f487aa97158cfcc01a2f6b4', 'trilce', 'Flores', '60a0d0ccbae677e42adc5592f771a1a2.jpg', 'trilcefoto.jpg', 1, 'Offline', 586934568, 0),
(55, 'Diego', 'diegoalejandrolopezcoronado@hotmail.com', '50e8d5e64f0c3f7c743e63489569c78e', 1, '49aadac47c39944fd6078ac36e7e53bc', 'diego', 'Lopez', 'e41253bb71e52c8f14a518a519c84ef3.jpeg', 'diegofoto.jpeg', 1, 'Offline', 785432076, 0),
(56, 'Logan', 'alphc056@gmail.com', 'a616abf9d883b7ec31b4a6f259685ed4', 1, '622be4f47f555a3f8fc87d1d7cf31430', 'alph56', 'Cuenca', 'ed7bbcb87ac9dbf04e3988a73bf81e17.png', 'Alphoto.png', 1, 'Offline', 639721044, 0),
(59, 'Andrea', 'androlausam@gmail.com', 'cbb9238c3e3cde53781704b323db15d0', 1, '827ccb0eea8a706c4c34a16891f84e7b', 'liz', 'Hernandez', 'ab1c3f06c23aca30625209cd0603b815.jpg', 'usuario.jpg', 0, 'Offline', 717902832, 0),
(60, 'Daniel Antonio', 'esequien333@gmail.com', '23f6fafc6cf29476853581452d988196', 1, '202cb962ac59075b964b07152d234b70', 'dancatfly', 'Juarez Silva', 'ff721f8729a983ea4cfa950c6ca792a7.jpg', 'home.jpg', 0, 'Offline', 1411386702, 0),
(61, 'Caitlyn', 'cait@gmail.com', 'e4e10f364ddb2f68bb12160dcf47735d', 1, '85e25c98631997a1517ae9d1fbce5861', 'cait', 'Kiramman', '1a13652956d98906b4c30dd9555a255b.jpg', 'cait.jpg', 0, 'Offline', 511228724, 0),
(62, 'Hola', 'hola@gmail.com', 'd4a7b7f9afaa6c02b4a858531bf2965a', 1, '202cb962ac59075b964b07152d234b70', 'oliadios', 'Adios', '24b42bf064a3f367067db138af770490.jpeg', 'WhatsApp Image 2024-04-16 at 7.06.19 PM.jpeg', 0, 'Disponible', 317270748, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD UNIQUE KEY `idR` (`idR`);

--
-- Indices de la tabla `scores`
--
ALTER TABLE `scores`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
