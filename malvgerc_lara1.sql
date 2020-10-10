-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-10-2020 a las 02:53:52
-- Versión del servidor: 5.6.47
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
-- Base de datos: `malvgerc_lara1`
--
CREATE DATABASE IF NOT EXISTS `malvgerc_lara1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `malvgerc_lara1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PrimerNombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SegundoNombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApellidoPaterno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApellidoMaterno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sexo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `CUI` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComunidadEtnica` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LugarNacimiento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `IdiomaMaterno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SugundoIdioma` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombreApellidoMadre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombreApellidoPadre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPIMadre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelMadre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPIPadre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelPadre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombreApellidoEncargado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPIMadreEncargado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelMadreEncargado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DireccionDomicilioEstudiante` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EstablecimientoProviene` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GradoIngresar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RepitenteSi` tinyint(1) DEFAULT NULL,
  `RepitenteNo` tinyint(1) DEFAULT NULL,
  `Noveces` int(11) DEFAULT NULL,
  `ProbSaludEstudiante` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProbSaludHogar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombProbSaludHogar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscEstudiante` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CertificadoDiscapacidad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscFamilia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProblemaFamiliarSi` tinyint(1) DEFAULT NULL,
  `Explique` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PadresSeparadosSi` tinyint(1) DEFAULT NULL,
  `DPISi` tinyint(1) DEFAULT NULL,
  `Razones` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RazonesPorque` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CertificadoRENAP` tinyint(1) DEFAULT NULL,
  `DPIPapa` tinyint(1) DEFAULT NULL,
  `vacunacion` tinyint(1) DEFAULT NULL,
  `DPIMama` tinyint(1) DEFAULT NULL,
  `codigopersonalSi` tinyint(1) DEFAULT NULL,
  `buenaConductaSi` tinyint(1) DEFAULT NULL,
  `diplomapre` tinyint(1) DEFAULT NULL,
  `certificadoOriginal` tinyint(1) DEFAULT NULL,
  `Observaciones` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `estudiantes`
--

TRUNCATE TABLE `estudiantes`;
--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `PrimerNombre`, `SegundoNombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Sexo`, `Edad`, `CUI`, `ComunidadEtnica`, `LugarNacimiento`, `FechaNacimiento`, `IdiomaMaterno`, `SugundoIdioma`, `NombreApellidoMadre`, `NombreApellidoPadre`, `DPIMadre`, `TelMadre`, `DPIPadre`, `TelPadre`, `NombreApellidoEncargado`, `DPIMadreEncargado`, `TelMadreEncargado`, `DireccionDomicilioEstudiante`, `EstablecimientoProviene`, `GradoIngresar`, `RepitenteSi`, `RepitenteNo`, `Noveces`, `ProbSaludEstudiante`, `ProbSaludHogar`, `NombProbSaludHogar`, `DiscEstudiante`, `CertificadoDiscapacidad`, `DiscFamilia`, `ProblemaFamiliarSi`, `Explique`, `PadresSeparadosSi`, `DPISi`, `Razones`, `RazonesPorque`, `CertificadoRENAP`, `DPIPapa`, `vacunacion`, `DPIMama`, `codigopersonalSi`, `buenaConductaSi`, `diplomapre`, `certificadoOriginal`, `Observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Miguel', 'Perez', 'Garcia', 'Masculino', 14, '546546515', 'Maya', 'Coban', '2009-02-15', 'Español', 'Español', 'Carla Garcia', 'Carlos Perez', '5465465456', '56465465', '4654654', '46546489', 'Carlos miquel', 'j65464', '65465465', 'Coban', '5846', '5', 1, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, NULL, 1, 1, 1, 0, 1, 1, 1, 1, 'N/A', NULL, '2020-10-09 22:39:39'),
(3, 'Gabriel', 'Gerardo', 'Castro', 'Vega', 'Masculino', 24, '123456789', 'Ladino', 'Fray Bartolomé', '1995-06-12', 'Español', 'Español', 'Gabriela Castro', 'Gabriel Castro', '123456789', '123456789', '123456789', '123456789', 'Luis Gustavo Caal Pop', '12345666', '123456789', 'Cobán', 'UMG', '6o. primaria', 0, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cliente prueba', '2020-09-17 04:47:11', '2020-09-23 02:23:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes1s`
--

DROP TABLE IF EXISTS `estudiantes1s`;
CREATE TABLE `estudiantes1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PrimerNombre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SegundoNombre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApellidoPaterno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApellidoMaterno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sexo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `CUI` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ComunidadEtnica` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LugarNacimiento` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `IdiomaMaterno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SugundoIdioma` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombreApellidoMadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombreApellidoPadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPIMadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelMadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPIPadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelPadre` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombreApellidoEncargado` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DPIMadreEncargado` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelMadreEncargado` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DireccionDomicilioEstudiante` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EstablecimientoProviene` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GradoIngresar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RepitenteSi` tinyint(1) DEFAULT NULL,
  `RepitenteNo` tinyint(1) DEFAULT NULL,
  `Noveces` int(11) DEFAULT NULL,
  `ProbSaludEstudiante` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProbSaludHogar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NombProbSaludHogar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscEstudiante` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CertificadoDiscapacidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscFamilia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProblemaFamiliarSi` tinyint(1) DEFAULT NULL,
  `Explique` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PadresSeparadosSi` tinyint(1) DEFAULT NULL,
  `DPISi` tinyint(1) DEFAULT NULL,
  `Razones` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RazonesPorque` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CertificadoRENAP` tinyint(1) DEFAULT NULL,
  `DPIPapa` tinyint(1) DEFAULT NULL,
  `vacunacion` tinyint(1) DEFAULT NULL,
  `DPIMama` tinyint(1) DEFAULT NULL,
  `codigopersonalSi` tinyint(1) DEFAULT NULL,
  `buenaConductaSi` tinyint(1) DEFAULT NULL,
  `diplomapre` tinyint(1) DEFAULT NULL,
  `certificadoOriginal` tinyint(1) DEFAULT NULL,
  `Observaciones` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `estudiantes1s`
--

TRUNCATE TABLE `estudiantes1s`;
--
-- Volcado de datos para la tabla `estudiantes1s`
--

INSERT INTO `estudiantes1s` (`id`, `PrimerNombre`, `SegundoNombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Sexo`, `Edad`, `CUI`, `ComunidadEtnica`, `LugarNacimiento`, `FechaNacimiento`, `IdiomaMaterno`, `SugundoIdioma`, `NombreApellidoMadre`, `NombreApellidoPadre`, `DPIMadre`, `TelMadre`, `DPIPadre`, `TelPadre`, `NombreApellidoEncargado`, `DPIMadreEncargado`, `TelMadreEncargado`, `DireccionDomicilioEstudiante`, `EstablecimientoProviene`, `GradoIngresar`, `RepitenteSi`, `RepitenteNo`, `Noveces`, `ProbSaludEstudiante`, `ProbSaludHogar`, `NombProbSaludHogar`, `DiscEstudiante`, `CertificadoDiscapacidad`, `DiscFamilia`, `ProblemaFamiliarSi`, `Explique`, `PadresSeparadosSi`, `DPISi`, `Razones`, `RazonesPorque`, `CertificadoRENAP`, `DPIPapa`, `vacunacion`, `DPIMama`, `codigopersonalSi`, `buenaConductaSi`, `diplomapre`, `certificadoOriginal`, `Observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Miguel', 'Perez', 'Garcia', 'Masculino', 14, '546546515', 'Maya', 'Coban', '2009-02-15', 'Español', 'Español', 'Carla Garcia', 'Carlos Perez', '5465465456', '56465465', '4654654', '46546489', 'Carlos miquel', 'j65464', '65465465', 'Coban', '5846', '5', 1, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, NULL, 1, 1, 1, 0, 1, 1, 1, 1, 'N/A', NULL, '2020-10-09 22:52:48'),
(3, 'Gabriel', 'Gerardo', 'Castro', 'Vega', 'Masculino', 24, '123456789', 'Ladino', 'Fray Bartolomé', '1995-06-12', 'Español', 'Español', 'Gabriela Castro', 'Gabriel Castro', '123456789', '123456789', '123456789', '123456789', 'Luis Gustavo Caal Pop', '12345666', '123456789', 'Cobán', 'UMG', '6o. primaria', 0, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cliente prueba', '2020-09-17 02:47:11', '2020-09-23 00:23:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio_socioeconimicos`
--

DROP TABLE IF EXISTS `estudio_socioeconimicos`;
CREATE TABLE `estudio_socioeconimicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `estudio_socioeconimicos`
--

TRUNCATE TABLE `estudio_socioeconimicos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `password_resets`
--

TRUNCATE TABLE `password_resets`;
--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gustavo.pop93@gmail.com', '$2y$10$Ca1.7ds1yUj0qCvLfMgw6eab3i3LVDFzL2n4RQZhW31.5KJgx47e6', '2020-09-24 01:03:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mario Leal', 'malvger@hotmail.com', NULL, '$2y$10$6bhz2d1Y59dSQ8f/J70IL.MT4ztHV6.36H049hyoT9T/vYaS4kEla', NULL, '2020-09-15 18:40:07', '2020-09-15 18:40:07'),
(2, 'tony', 'tony_contreras78@yahoo.com', NULL, '$2y$10$IXlImlBA1wK6Du.g1ipnvud43oGqlz7Q8RqiOG.2fW2u7kMzR7PFS', NULL, '2020-09-17 02:41:52', '2020-09-17 02:41:52'),
(3, 'Gustavo Caal', 'gustavo.pop93@gmail.com', NULL, '$2y$10$whqt73x9i4uxjLJ4mAUpYOwN5zDM836fAjMWktIuTecryL3YE9LQS', NULL, '2020-09-17 02:54:21', '2020-09-17 02:54:21'),
(4, 'Marvin', 'msebc@gmail.com', NULL, '$2y$10$RPAQCPAVWKXH2.jLn6zp0O4hAGFJPvSaz07ME8BNUeshIuNquUl2i', NULL, '2020-09-19 14:10:31', '2020-09-19 14:10:31'),
(5, 'Marvin', 'msebc@gmail.com', NULL, '$2y$10$/Iu4JGNXfoyn3cw5sdNYIuVq9OClj2XqncSjYRRx3XY6MHJx6JO4e', NULL, '2020-09-19 14:10:31', '2020-09-19 14:10:31'),
(6, 'Hugo Aragón', 'haragonc1@miumg.edu.gt', NULL, '$2y$10$rsYJUriXhWrVtW4jSnFqaubmy/svAiYmyhu/WXabPJjcFABxu6UUW', 'wE5Y2qAPDQeDiaZtQsuNg2iexxJJ9FbODyQ0eJDcJveG7fNgFIgkC04tQiKt', '2020-09-19 14:19:10', '2020-09-19 14:19:10'),
(7, 'Gus', 'tes@dev.com', NULL, '$2y$10$wV88fTgYII.X59AD9XX.geX2Z.AzTz8.G4RSMeUfEd8ShjLHE9ble', NULL, '2020-09-19 16:16:25', '2020-09-19 16:16:25'),
(8, 'Gus', 'test@dev.com', NULL, '$2y$10$MH3bjdON3ej.ry6PWPZ0zupoEZVLEykR05zmqu76wjmKIfeUeIiH2', NULL, '2020-09-26 21:00:07', '2020-09-26 21:00:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
