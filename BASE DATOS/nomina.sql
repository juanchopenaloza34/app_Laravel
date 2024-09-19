-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2024 a las 00:12:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nomina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idCargo` bigint(20) UNSIGNED NOT NULL,
  `idDepartamento` bigint(20) UNSIGNED NOT NULL,
  `codNivelRiesgo` varchar(255) NOT NULL,
  `descripcionCargo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `idContrato` bigint(20) UNSIGNED NOT NULL,
  `idCargo` bigint(20) UNSIGNED NOT NULL,
  `codTipoContrato` varchar(255) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `jornadaLaboral` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deducciones`
--

CREATE TABLE `deducciones` (
  `codDeduccion` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `codNovedadDeduccion` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `salud` decimal(10,2) DEFAULT NULL,
  `pension` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` bigint(20) UNSIGNED NOT NULL,
  `nombreDpto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devengados`
--

CREATE TABLE `devengados` (
  `codDevengados` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `codHorasExtras` varchar(255) NOT NULL,
  `totalDevengado` decimal(10,2) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `documento` varchar(255) NOT NULL,
  `nit` varchar(255) NOT NULL,
  `idEstado` bigint(20) UNSIGNED NOT NULL,
  `idContrato` bigint(20) UNSIGNED NOT NULL,
  `tipoDocumento` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nit` varchar(255) NOT NULL,
  `tipoContribuyente` varchar(255) NOT NULL,
  `digitoVerificacion` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `logo` blob DEFAULT NULL,
  `rut` varchar(255) NOT NULL,
  `camaraComercio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_empleado`
--

CREATE TABLE `estado_empleado` (
  `idEstado` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `idEstado` bigint(20) UNSIGNED NOT NULL,
  `descripcionUsuario` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas_extras`
--

CREATE TABLE `horas_extras` (
  `codHorasExtras` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `descripcionHE` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_12_222615_departamento', 1),
(6, '2024_08_12_223619_nivel_riesgo', 1),
(7, '2024_08_12_224039_cargo', 1),
(8, '2024_08_12_225216_tipo_contrato', 1),
(9, '2024_08_12_225503_contrato', 1),
(10, '2024_08_12_230456_empresa', 1),
(11, '2024_08_12_231007_parafiscales', 1),
(12, '2024_08_12_232813_estado_empleado', 1),
(13, '2024_08_12_234929_empleado', 1),
(14, '2024_08_12_235528_rol', 1),
(15, '2024_08_12_235649_estado_usuario', 1),
(16, '2024_08_12_235851_usuario', 1),
(17, '2024_08_13_015123_horas_extras', 1),
(18, '2024_08_13_015537_devengados', 1),
(19, '2024_08_13_020028_novedades_deducciones', 1),
(20, '2024_08_13_020134_deducciones', 1),
(21, '2024_08_13_020421_nomina', 1),
(22, '2024_09_09_180941_create_productos_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_riesgo`
--

CREATE TABLE `nivel_riesgo` (
  `codNivelRiesgo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `codNomina` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `codDeduccion` varchar(255) NOT NULL,
  `codDevengados` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad_deducciones`
--

CREATE TABLE `novedad_deducciones` (
  `codNovedadDeduccion` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parafiscales`
--

CREATE TABLE `parafiscales` (
  `nit` varchar(255) NOT NULL,
  `salud` decimal(5,2) NOT NULL,
  `pension` decimal(5,2) NOT NULL,
  `arl` decimal(5,2) NOT NULL,
  `icbf` decimal(5,2) NOT NULL,
  `cajaCompensacion` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `presentacion` varchar(255) NOT NULL,
  `pais_origen` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `presentacion`, `pais_origen`, `precio`, `stock`, `created_at`, `updated_at`) VALUES
(2, 'Coca cola', 'Bebida gaseosa negra', 'En botella 1.5 litros', 'China', 3000.00, 90, '2024-09-17 01:36:18', '2024-09-17 01:36:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `codRol` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `descripcionRol` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `codTipoContrato` varchar(255) NOT NULL,
  `DescripcionTipoContrato` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idTipoUsuario` bigint(20) UNSIGNED NOT NULL,
  `codRol` varchar(255) NOT NULL,
  `idEstado` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`),
  ADD KEY `cargo_iddepartamento_foreign` (`idDepartamento`),
  ADD KEY `cargo_codnivelriesgo_foreign` (`codNivelRiesgo`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idContrato`),
  ADD KEY `contrato_idcargo_foreign` (`idCargo`),
  ADD KEY `contrato_codtipocontrato_foreign` (`codTipoContrato`);

--
-- Indices de la tabla `deducciones`
--
ALTER TABLE `deducciones`
  ADD PRIMARY KEY (`codDeduccion`),
  ADD KEY `deducciones_documento_foreign` (`documento`),
  ADD KEY `deducciones_codnovedaddeduccion_foreign` (`codNovedadDeduccion`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD UNIQUE KEY `departamento_nombredpto_unique` (`nombreDpto`);

--
-- Indices de la tabla `devengados`
--
ALTER TABLE `devengados`
  ADD PRIMARY KEY (`codDevengados`),
  ADD KEY `devengados_documento_foreign` (`documento`),
  ADD KEY `devengados_codhorasextras_foreign` (`codHorasExtras`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `empleado_correo_unique` (`correo`),
  ADD KEY `empleado_nit_foreign` (`nit`),
  ADD KEY `empleado_idestado_foreign` (`idEstado`),
  ADD KEY `empleado_idcontrato_foreign` (`idContrato`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nit`),
  ADD UNIQUE KEY `empresa_email_unique` (`email`),
  ADD UNIQUE KEY `empresa_rut_unique` (`rut`);

--
-- Indices de la tabla `estado_empleado`
--
ALTER TABLE `estado_empleado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `horas_extras`
--
ALTER TABLE `horas_extras`
  ADD PRIMARY KEY (`codHorasExtras`),
  ADD KEY `horas_extras_documento_foreign` (`documento`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_riesgo`
--
ALTER TABLE `nivel_riesgo`
  ADD PRIMARY KEY (`codNivelRiesgo`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`codNomina`),
  ADD KEY `nomina_documento_foreign` (`documento`),
  ADD KEY `nomina_coddeduccion_foreign` (`codDeduccion`),
  ADD KEY `nomina_coddevengados_foreign` (`codDevengados`);

--
-- Indices de la tabla `novedad_deducciones`
--
ALTER TABLE `novedad_deducciones`
  ADD PRIMARY KEY (`codNovedadDeduccion`);

--
-- Indices de la tabla `parafiscales`
--
ALTER TABLE `parafiscales`
  ADD KEY `parafiscales_nit_foreign` (`nit`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`codRol`),
  ADD KEY `rol_documento_foreign` (`documento`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`codTipoContrato`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idTipoUsuario`),
  ADD KEY `usuario_codrol_foreign` (`codRol`),
  ADD KEY `usuario_idestado_foreign` (`idEstado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `idContrato` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_empleado`
--
ALTER TABLE `estado_empleado`
  MODIFY `idEstado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  MODIFY `idEstado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idTipoUsuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_codnivelriesgo_foreign` FOREIGN KEY (`codNivelRiesgo`) REFERENCES `nivel_riesgo` (`codNivelRiesgo`) ON DELETE CASCADE,
  ADD CONSTRAINT `cargo_iddepartamento_foreign` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_codtipocontrato_foreign` FOREIGN KEY (`codTipoContrato`) REFERENCES `tipo_contrato` (`codTipoContrato`) ON DELETE CASCADE,
  ADD CONSTRAINT `contrato_idcargo_foreign` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `deducciones`
--
ALTER TABLE `deducciones`
  ADD CONSTRAINT `deducciones_codnovedaddeduccion_foreign` FOREIGN KEY (`codNovedadDeduccion`) REFERENCES `novedad_deducciones` (`codNovedadDeduccion`) ON DELETE CASCADE,
  ADD CONSTRAINT `deducciones_documento_foreign` FOREIGN KEY (`documento`) REFERENCES `empleado` (`documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `devengados`
--
ALTER TABLE `devengados`
  ADD CONSTRAINT `devengados_codhorasextras_foreign` FOREIGN KEY (`codHorasExtras`) REFERENCES `horas_extras` (`codHorasExtras`) ON DELETE CASCADE,
  ADD CONSTRAINT `devengados_documento_foreign` FOREIGN KEY (`documento`) REFERENCES `empleado` (`documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_idcontrato_foreign` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`) ON DELETE CASCADE,
  ADD CONSTRAINT `empleado_idestado_foreign` FOREIGN KEY (`idEstado`) REFERENCES `estado_empleado` (`idEstado`) ON DELETE CASCADE,
  ADD CONSTRAINT `empleado_nit_foreign` FOREIGN KEY (`nit`) REFERENCES `empresa` (`nit`) ON DELETE CASCADE;

--
-- Filtros para la tabla `horas_extras`
--
ALTER TABLE `horas_extras`
  ADD CONSTRAINT `horas_extras_documento_foreign` FOREIGN KEY (`documento`) REFERENCES `empleado` (`documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `nomina_coddeduccion_foreign` FOREIGN KEY (`codDeduccion`) REFERENCES `deducciones` (`codDeduccion`) ON DELETE CASCADE,
  ADD CONSTRAINT `nomina_coddevengados_foreign` FOREIGN KEY (`codDevengados`) REFERENCES `devengados` (`codDevengados`) ON DELETE CASCADE,
  ADD CONSTRAINT `nomina_documento_foreign` FOREIGN KEY (`documento`) REFERENCES `empleado` (`documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `parafiscales`
--
ALTER TABLE `parafiscales`
  ADD CONSTRAINT `parafiscales_nit_foreign` FOREIGN KEY (`nit`) REFERENCES `empresa` (`nit`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_documento_foreign` FOREIGN KEY (`documento`) REFERENCES `empleado` (`documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_codrol_foreign` FOREIGN KEY (`codRol`) REFERENCES `rol` (`codRol`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuario_idestado_foreign` FOREIGN KEY (`idEstado`) REFERENCES `estado_usuario` (`idEstado`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
