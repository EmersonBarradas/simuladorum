-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2024 a las 18:53:27
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
-- Base de datos: `simuladorum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amp`
--

CREATE TABLE `amp` (
  `nro` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(11) NOT NULL,
  `id_empresa` varchar(10) NOT NULL,
  `cant_capmax_lc` decimal(30,2) NOT NULL,
  `cant_existencia_lc` decimal(30,2) NOT NULL,
  `cant_capdisp_lc` decimal(30,2) NOT NULL,
  `cant_capmax_ad` decimal(30,2) NOT NULL,
  `cant_existencia_ad` decimal(30,2) NOT NULL,
  `cant_capdisp_ad` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `amp`
--

INSERT INTO `amp` (`nro`, `id`, `nro_empresa`, `id_empresa`, `cant_capmax_lc`, `cant_existencia_lc`, `cant_capdisp_lc`, `cant_capmax_ad`, `cant_existencia_ad`, `cant_capdisp_ad`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'AMP-1', 1, 'LC-001', 255000.00, 1000.00, 254000.00, 195000.00, 66000.00, 129000.00, 'A', '2024-05-09', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amp_cto`
--

CREATE TABLE `amp_cto` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `id_empresa` varchar(10) NOT NULL,
  `nro_almacen` int(10) NOT NULL,
  `nro_compra` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_mov_lc` varchar(1) NOT NULL,
  `cant_lc` decimal(30,2) NOT NULL,
  `monto_cto_ltr_lc` decimal(30,2) NOT NULL,
  `monto_cto_total_lc` decimal(30,2) NOT NULL,
  `cant_acum_lc` decimal(30,2) NOT NULL,
  `monto_cto_acum_lc` decimal(30,2) NOT NULL,
  `monto_cto_promedio_lc` decimal(30,2) NOT NULL,
  `tipo_mov_ad` varchar(1) NOT NULL,
  `cant_ad` decimal(30,2) NOT NULL,
  `monto_cto_ltr_ad` decimal(30,2) NOT NULL,
  `monto_cto_total_ad` decimal(30,2) NOT NULL,
  `cant_acum_ad` decimal(30,2) NOT NULL,
  `monto_cto_acum_ad` decimal(30,2) NOT NULL,
  `monto_cto_promedio_ad` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Costo Almacen Materia Prima';

--
-- Volcado de datos para la tabla `amp_cto`
--

INSERT INTO `amp_cto` (`nro`, `id`, `nro_empresa`, `id_empresa`, `nro_almacen`, `nro_compra`, `ciclo`, `fecha`, `tipo_mov_lc`, `cant_lc`, `monto_cto_ltr_lc`, `monto_cto_total_lc`, `cant_acum_lc`, `monto_cto_acum_lc`, `monto_cto_promedio_lc`, `tipo_mov_ad`, `cant_ad`, `monto_cto_ltr_ad`, `monto_cto_total_ad`, `cant_acum_ad`, `monto_cto_acum_ad`, `monto_cto_promedio_ad`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'CTO-1', 1, '1', 1, 1, 1, '2024-05-03', 'C', 75000.00, 1.00, 75000.00, 75000.00, 75000.00, 1.00, 'C', 45000.00, 2.00, 90000.00, 45000.00, 90000.00, 2.00, 'A', '2024-05-09', 6, 'A'),
(2, 'CTO-', 1, '1', 1, 0, 1, '2024-05-03', 'P', 10000.00, 1.00, 10000.00, 65000.00, 65000.00, 1.00, 'P', 10000.00, 2.00, 20000.00, 35000.00, 70000.00, 2.00, 'A', '2024-05-09', 6, 'A'),
(3, 'A-1', 1, '1', 1, 0, 1, '2024-05-12', 'A', 35000.00, 1.00, 35000.00, 100000.00, 100000.00, 1.00, 'A', 0.00, 2.00, 0.00, 35000.00, 70000.00, 2.00, 'A', '2024-05-12', 6, 'A'),
(4, 'CTO-2', 1, '1', 1, 2, 1, '2024-05-03', 'C', 0.00, 0.00, 0.00, 100000.00, 100000.00, 1.00, 'C', 60000.00, 1.14, 68400.00, 95000.00, 138400.00, 1.46, 'A', '2024-05-16', 6, 'A'),
(5, 'CTO-', 1, '1', 1, 0, 1, '2024-05-02', 'P', 20000.00, 0.00, 0.00, 80000.00, 100000.00, 1.25, 'P', 20000.00, 1.14, 22800.00, 75000.00, 115600.00, 1.54, 'A', '2024-05-16', 6, 'A'),
(6, 'CTO-', 1, '1', 1, 0, 1, '2024-05-02', 'P', 9000.00, 0.00, 0.00, 71000.00, 100000.00, 1.41, 'P', 9000.00, 1.14, 10260.00, 66000.00, 105340.00, 1.60, 'A', '2024-05-16', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amp_mov`
--

CREATE TABLE `amp_mov` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `id_empresa` varchar(10) NOT NULL,
  `nro_almacen` int(10) NOT NULL,
  `nro_compra` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_mov_lc` varchar(1) NOT NULL,
  `cant_entrada_lc` decimal(30,2) NOT NULL,
  `cant_salida_lc` decimal(30,2) NOT NULL,
  `cant_total_lc` decimal(30,2) NOT NULL,
  `tipo_mov_ad` varchar(1) NOT NULL,
  `cant_entrada_ad` decimal(30,2) NOT NULL,
  `cant_salida_ad` decimal(30,2) NOT NULL,
  `cant_total_ad` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `producido` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Almacen de Materia Prima';

--
-- Volcado de datos para la tabla `amp_mov`
--

INSERT INTO `amp_mov` (`nro`, `id`, `nro_empresa`, `id_empresa`, `nro_almacen`, `nro_compra`, `ciclo`, `fecha`, `tipo_mov_lc`, `cant_entrada_lc`, `cant_salida_lc`, `cant_total_lc`, `tipo_mov_ad`, `cant_entrada_ad`, `cant_salida_ad`, `cant_total_ad`, `estatus`, `producido`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'A-1', 1, '1', 1, 1, 1, '2024-05-03', 'C', 75000.00, 0.00, 75000.00, 'C', 45000.00, 0.00, 45000.00, 'A', 'N', '2024-05-09', 6, 'A'),
(2, 'AS-', 1, '1', 1, 0, 1, '2024-05-03', 'P', 0.00, 10000.00, 65000.00, 'P', 0.00, 10000.00, 35000.00, 'A', 'S', '2024-05-09', 6, 'A'),
(3, 'AA-1', 1, '1', 1, 0, 1, '2024-05-12', 'A', 0.00, 35000.00, 30000.00, 'A', 0.00, 0.00, 35000.00, 'A', 'N', '2024-05-12', 6, 'A'),
(4, 'A-2', 1, '1', 1, 2, 1, '2024-05-03', 'C', 0.00, 0.00, 30000.00, 'C', 60000.00, 0.00, 95000.00, 'A', 'N', '2024-05-16', 6, 'A'),
(5, 'AS-', 1, '1', 1, 0, 1, '2024-05-02', 'P', 0.00, 20000.00, 10000.00, 'P', 0.00, 20000.00, 75000.00, 'A', 'S', '2024-05-16', 6, 'A'),
(6, 'AS-', 1, '1', 1, 0, 1, '2024-05-02', 'P', 0.00, 9000.00, 1000.00, 'P', 0.00, 9000.00, 66000.00, 'A', 'S', '2024-05-16', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt`
--

CREATE TABLE `apt` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `cant_cmax_qd` decimal(30,2) NOT NULL,
  `cant_e_qd` decimal(30,2) NOT NULL,
  `cant_disp_qd` decimal(30,2) NOT NULL,
  `cant_cmax_moz` decimal(30,2) NOT NULL,
  `cant_e_moz` decimal(30,2) NOT NULL,
  `cant_disp_moz` decimal(30,2) NOT NULL,
  `cant_cmax_gou` decimal(30,2) NOT NULL,
  `cant_e_gou` decimal(30,2) NOT NULL,
  `cant_disp_gou` decimal(30,2) NOT NULL,
  `cant_cmax_die` decimal(30,2) NOT NULL,
  `cant_e_die` decimal(30,2) NOT NULL,
  `cant_disp_die` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla APT';

--
-- Volcado de datos para la tabla `apt`
--

INSERT INTO `apt` (`nro`, `id`, `nro_empresa`, `cant_cmax_qd`, `cant_e_qd`, `cant_disp_qd`, `cant_cmax_moz`, `cant_e_moz`, `cant_disp_moz`, `cant_cmax_gou`, `cant_e_gou`, `cant_disp_gou`, `cant_cmax_die`, `cant_e_die`, `cant_disp_die`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'APT-1', 1, 12000.00, 0.00, 12000.00, 12000.00, 8700.00, 3300.00, 12000.00, 0.00, 12000.00, 12000.00, 0.00, 12000.00, 'A', '2024-05-09', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt_dtienda`
--

CREATE TABLE `apt_dtienda` (
  `nro` int(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `cant_dub` decimal(30,0) NOT NULL,
  `cant_moz` decimal(30,0) NOT NULL,
  `cant_gou` decimal(30,0) NOT NULL,
  `cant_die` decimal(30,0) NOT NULL,
  `cant_total` decimal(30,0) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `apt_dtienda`
--

INSERT INTO `apt_dtienda` (`nro`, `nro_empresa`, `ciclo`, `fecha`, `cant_dub`, `cant_moz`, `cant_gou`, `cant_die`, `cant_total`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 1, 1, '2024-05-12', 0, 3000, 0, 0, 3000, 'A', '2024-05-10', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt_mov`
--

CREATE TABLE `apt_mov` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `nro_almacen` int(10) NOT NULL,
  `nro_produccion` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `cant_entrada` decimal(30,0) NOT NULL,
  `cant_salida` decimal(30,0) NOT NULL,
  `cant_total` decimal(30,0) NOT NULL,
  `nro_queso` int(10) NOT NULL,
  `nombre_queso` varchar(100) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Movimientos de almacén productos terminados';

--
-- Volcado de datos para la tabla `apt_mov`
--

INSERT INTO `apt_mov` (`nro`, `id`, `nro_empresa`, `nro_almacen`, `nro_produccion`, `ciclo`, `fecha`, `tipo`, `cant_entrada`, `cant_salida`, `cant_total`, `nro_queso`, `nombre_queso`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'P-000001', 1, 1, 2, 1, '2024-05-03', 'E', 3000, 0, 3000, 2, 'Mozarella', 'A', '2024-05-09', 6, 'A'),
(2, '0', 1, 1, 0, 1, '2024-05-12', 'S', 0, 3000, 0, 2, 'Mozarella', 'A', '2024-05-15', 6, 'A'),
(3, 'edrft', 1, 1, 5, 1, '2024-05-02', 'E', 6000, 0, 6000, 2, 'Mozarella', 'A', '2024-05-16', 6, 'A'),
(4, 'edrftg', 1, 1, 6, 1, '2024-05-02', 'E', 2700, 0, 8700, 2, 'Mozarella', 'A', '2024-05-16', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `observacion` text NOT NULL,
  `monto_multa` decimal(30,2) NOT NULL,
  `fecha_pago` date NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL,
  `ciclo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla bitacora';

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`nro`, `id`, `fecha`, `nro_empresa`, `observacion`, `monto_multa`, `fecha_pago`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`, `ciclo`) VALUES
(1, 'Sin Id', '2024-05-15', 1, 'FC no cuadraba', 50.00, '2024-05-22', 'A', '2024-05-16', 2, 'A', '1'),
(2, 'Sin Id', '2024-05-16', 1, '  No registraron el asiento de alquiler de tiendas', 500.00, '2024-05-23', 'A', '2024-05-16', 2, 'A', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(500) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla de Calendario';

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`nro`, `id`, `fecha`, `observacion`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'Calendario', '2024-05-01', '', 'A', '2024-05-09', 2, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_subasta`
--

CREATE TABLE `compra_subasta` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `empresa` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha_ped` date NOT NULL,
  `fecha_recep` date NOT NULL,
  `monto_precio_lc` decimal(30,2) NOT NULL,
  `cant_contratos_lc` decimal(30,2) NOT NULL,
  `cant_litros_lc` decimal(30,2) NOT NULL,
  `monto_total_usb_lc` decimal(30,2) NOT NULL,
  `monto_precio_ad` decimal(30,2) NOT NULL,
  `cant_contratos_ad` decimal(30,2) NOT NULL,
  `cant_litros_ad` decimal(30,2) NOT NULL,
  `monto_total_usb_ad` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Compra - Subasta';

--
-- Volcado de datos para la tabla `compra_subasta`
--

INSERT INTO `compra_subasta` (`nro`, `id`, `empresa`, `ciclo`, `fecha_ped`, `fecha_recep`, `monto_precio_lc`, `cant_contratos_lc`, `cant_litros_lc`, `monto_total_usb_lc`, `monto_precio_ad`, `cant_contratos_ad`, `cant_litros_ad`, `monto_total_usb_ad`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'S000000001', 1, 1, '2024-05-01', '2024-05-03', 1.00, 15.00, 75000.00, 75000.00, 2.00, 15.00, 45000.00, 90000.00, 'A', '2024-05-09', 6, 'A'),
(2, 'rt56', 1, 1, '2024-05-01', '2024-05-03', 0.00, 0.00, 0.00, 0.00, 1.14, 20.00, 60000.00, 68400.00, 'A', '2024-05-16', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

CREATE TABLE `despacho` (
  `nro` int(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `nro_queso` int(10) NOT NULL,
  `nombre_queso` varchar(100) NOT NULL,
  `cant_xdespacho` decimal(30,0) NOT NULL,
  `cant_desp_arm` decimal(30,0) NOT NULL,
  `cant_desp_ciu` decimal(30,0) NOT NULL,
  `cant_desp_sfi` decimal(30,0) NOT NULL,
  `cant_desp_lsa` decimal(30,0) NOT NULL,
  `cost_t_arm` decimal(30,0) NOT NULL,
  `cost_t_ciu` decimal(30,0) NOT NULL,
  `cost_t_sfi` decimal(30,0) NOT NULL,
  `cost_t_lsa` decimal(30,0) NOT NULL,
  `cost_t_total` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`nro`, `nro_empresa`, `ciclo`, `fecha`, `nro_queso`, `nombre_queso`, `cant_xdespacho`, `cant_desp_arm`, `cant_desp_ciu`, `cant_desp_sfi`, `cant_desp_lsa`, `cost_t_arm`, `cost_t_ciu`, `cost_t_sfi`, `cost_t_lsa`, `cost_t_total`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 1, 1, '2024-05-12', 2, 'Queso Mozarella', 3000, 1000, 0, 0, 2000, 80, 0, 0, 170, 250.00, 'A', '2024-05-10', 6, 'A'),
(2, 1, 1, '2024-05-12', 2, 'Queso Mozarella', 3000, 1000, 500, 500, 1000, 80, 45, 38, 85, 247.50, 'A', '2024-05-15', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `usuario` int(10) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `estructura` varchar(300) NOT NULL,
  `departamentos` varchar(300) NOT NULL,
  `organigrama` varchar(300) NOT NULL,
  `monto_presupuesto` decimal(30,2) NOT NULL,
  `monto_saldo_actual` decimal(30,2) NOT NULL,
  `monto_multas` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `integrantes` mediumtext NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla empresa';

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`nro`, `id`, `usuario`, `id_usuario`, `fecha_creacion`, `nombre`, `estructura`, `departamentos`, `organigrama`, `monto_presupuesto`, `monto_saldo_actual`, `monto_multas`, `estatus`, `integrantes`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'LC-001', 6, 'Cf-01', '2024-05-09', 'Elite FC', 'Estandar', 'Estandar', 'Estandar', 0.00, 0.00, 0.00, 'A', 'Vacio', '2024-05-09', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm`
--

CREATE TABLE `pcm` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `fecha` date NOT NULL,
  `cant_lc` decimal(30,2) NOT NULL,
  `cant_ad` decimal(30,2) NOT NULL,
  `cant_queso` decimal(30,2) NOT NULL,
  `nro_queso` int(1) NOT NULL,
  `tipo_queso` varchar(300) NOT NULL,
  `monto_cto_prod_mp` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Producción';

--
-- Volcado de datos para la tabla `pcm`
--

INSERT INTO `pcm` (`nro`, `id`, `nro_empresa`, `ciclo`, `tipo`, `fecha`, `cant_lc`, `cant_ad`, `cant_queso`, `nro_queso`, `tipo_queso`, `monto_cto_prod_mp`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'P-000001', 1, 1, 'P', '2024-05-03', 10000.00, 10000.00, 3000.00, 2, 'Mozarella', 30000.00, 'A', '2024-05-09', 6, 'A'),
(2, 'edrft', 1, 1, 'P', '2024-05-02', 20000.00, 20000.00, 6000.00, 2, 'Mozarella', 22800.00, 'A', '2024-05-16', 6, 'A'),
(3, 'edrftg', 1, 1, 'P', '2024-05-02', 9000.00, 9000.00, 2700.00, 2, 'Mozarella', 10260.00, 'A', '2024-05-16', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm_mod_mov`
--

CREATE TABLE `pcm_mod_mov` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `nro_operador` int(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `cant_total_horas_trab` decimal(30,2) NOT NULL,
  `monto_pago_hora` decimal(30,2) NOT NULL,
  `monto_pago_adicional` decimal(30,2) NOT NULL,
  `monto_total_jornada` decimal(30,2) NOT NULL,
  `cant_porcentaje_trab` decimal(30,2) NOT NULL,
  `emoji1` varchar(300) NOT NULL,
  `emoji2` varchar(300) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla PCM-MOD';

--
-- Volcado de datos para la tabla `pcm_mod_mov`
--

INSERT INTO `pcm_mod_mov` (`nro`, `id`, `nro_empresa`, `nro_operador`, `ciclo`, `fecha`, `cant_total_horas_trab`, `monto_pago_hora`, `monto_pago_adicional`, `monto_total_jornada`, `cant_porcentaje_trab`, `emoji1`, `emoji2`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'OPR01', 1, 1, 1, '2024-05-01', 40.00, 1.25, 0.63, 50.00, 100.00, ':)', ':()', 'A', '2024-05-10', 6, 'A'),
(2, 'W01', 1, 2, 1, '2024-05-01', 40.00, 1.25, 0.63, 50.00, 100.00, ':)', ':()', 'A', '2024-05-10', 6, 'A'),
(3, '74859', 1, 2, 2, '2024-05-12', 40.00, 1.25, 0.63, 50.00, 100.00, ':)', ':()', 'E', '2024-05-13', 6, 'E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm_mod_operador`
--

CREATE TABLE `pcm_mod_operador` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `cant_horas_sem` decimal(10,2) NOT NULL,
  `cant_horas_max_sem` decimal(10,2) NOT NULL,
  `cant_total_horas_trab` decimal(10,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Operador';

--
-- Volcado de datos para la tabla `pcm_mod_operador`
--

INSERT INTO `pcm_mod_operador` (`nro`, `id`, `nro_empresa`, `nombre`, `cargo`, `cant_horas_sem`, `cant_horas_max_sem`, `cant_total_horas_trab`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'OP-0001', 1, 'Operador 1', 'Operador', 40.00, 50.00, 0.00, 'A', '2024-05-10', 6, 'A'),
(2, 'OP-0002', 1, 'Operador 2', 'Operador', 40.00, 50.00, 0.00, 'A', '2024-05-10', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `nro` int(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `pub_dub_arm` int(1) NOT NULL,
  `pub_dub_ciu` int(1) NOT NULL,
  `pub_dub_sfi` int(1) NOT NULL,
  `pub_dub_lsa` int(1) NOT NULL,
  `pub_moz_arm` int(1) NOT NULL,
  `pub_moz_ciu` int(1) NOT NULL,
  `pub_moz_sfi` int(1) NOT NULL,
  `pub_moz_lsa` int(1) NOT NULL,
  `pub_gou_arm` int(1) NOT NULL,
  `pub_gou_ciu` int(1) NOT NULL,
  `pub_gou_sfi` int(1) NOT NULL,
  `pub_gou_lsa` int(1) NOT NULL,
  `pub_die_arm` int(1) NOT NULL,
  `pub_die_ciu` int(1) NOT NULL,
  `pub_die_sfi` int(1) NOT NULL,
  `pub_die_lsa` int(1) NOT NULL,
  `total_inversion` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Publicidad';

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`nro`, `nro_empresa`, `pub_dub_arm`, `pub_dub_ciu`, `pub_dub_sfi`, `pub_dub_lsa`, `pub_moz_arm`, `pub_moz_ciu`, `pub_moz_sfi`, `pub_moz_lsa`, `pub_gou_arm`, `pub_gou_ciu`, `pub_gou_sfi`, `pub_gou_lsa`, `pub_die_arm`, `pub_die_ciu`, `pub_die_sfi`, `pub_die_lsa`, `total_inversion`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 1, 2, 1, 1, 1, 1, 1, 3, 1, 1, 4, 1, 1, 1, 1, 1, 5, 11000.00, 'A', '2024-05-10', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulacion`
--

CREATE TABLE `simulacion` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Define un entorno de trabajo de simulación. Inicializa valor';

--
-- Volcado de datos para la tabla `simulacion`
--

INSERT INTO `simulacion` (`nro`, `id`, `fecha_inicio`, `descripcion`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'S01', '2024-05-01', 'Simulación de depuración', 'A', '2024-05-01', 2, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblauditoria`
--

CREATE TABLE `tblauditoria` (
  `nro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `accion` varchar(200) NOT NULL,
  `proceso` varchar(100) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpublicidad`
--

CREATE TABLE `tblpublicidad` (
  `nro` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblpublicidad`
--

INSERT INTO `tblpublicidad` (`nro`, `nombre`, `descripcion`) VALUES
(1, 'Ninguna', 'Ninguna Publicidad'),
(2, 'Videos Promocionales', 'Videos Promocionales'),
(3, 'Vallas en avenidas y carreteras', 'Vallas en avenidas y carreteras'),
(4, 'Flyers', 'Flyers'),
(5, 'Otros', 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblqueso`
--

CREATE TABLE `tblqueso` (
  `nro` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `alias` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblqueso`
--

INSERT INTO `tblqueso` (`nro`, `nombre`, `alias`) VALUES
(1, 'Queso Duro Blanco', 'DUB'),
(2, 'Queso Mozarella', 'MOZ'),
(3, 'Queso Gouda', 'GOU'),
(4, 'Queso Dietético', 'DIE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltienda`
--

CREATE TABLE `tbltienda` (
  `nro` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `alias` varchar(3) NOT NULL,
  `cant_cto_transporte` decimal(30,2) NOT NULL,
  `cant_cto_alquiler` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbltienda`
--

INSERT INTO `tbltienda` (`nro`, `nombre`, `alias`, `cant_cto_transporte`, `cant_cto_alquiler`) VALUES
(1, 'Armadillo', 'ARM', 0.08, 1500.00),
(2, 'Ciudadela', 'CIU', 0.09, 2500.00),
(3, 'San Fierro', 'SFI', 0.75, 1480.00),
(4, 'Los Santos', 'LSA', 0.85, 2400.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(16) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla de usuario';

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`nro`, `id`, `usuario`, `clave`, `nombre`, `tipo`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 'U-01', 'superusuario@santino.com', '123456', 'Super Usuario', 'A', 'A', '2024-01-02', 1, 'A'),
(2, 'UA-01', 'carlosadministrador@gmail.com', '123456', 'Carlos Administrador', 'A', 'A', '2024-01-05', 1, 'A'),
(3, 'US-002', 'carlosparticipante@gmail.com', '123456', 'Carlos Participante', 'P', 'A', '2024-01-08', 2, 'A'),
(6, 'Cf-01', 'cesarf@gmail.com', '123456', 'César Barradas', 'P', 'A', '2024-01-08', 2, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblvalores`
--

CREATE TABLE `tblvalores` (
  `nro` int(10) NOT NULL,
  `contrato_lc` decimal(30,2) NOT NULL,
  `contrato_ad` decimal(30,2) NOT NULL,
  `cap_max_lc_amp` decimal(30,2) NOT NULL,
  `cap_max_ad_amp` decimal(30,2) NOT NULL,
  `cap_max_kg_apt` decimal(30,2) NOT NULL,
  `cto_trans_arm` decimal(30,3) NOT NULL,
  `cto_trans_sfi` decimal(30,3) NOT NULL,
  `cto_trans_ciu` decimal(30,3) NOT NULL,
  `cto_trans_lsa` decimal(30,3) NOT NULL,
  `cap_alm_tiendas` decimal(30,2) NOT NULL,
  `alquiler_arm` decimal(30,2) NOT NULL,
  `alquiler_sfi` decimal(30,2) NOT NULL,
  `alquiler_ciu` decimal(30,2) NOT NULL,
  `alquiler_lsa` decimal(30,2) NOT NULL,
  `pub_videos` decimal(30,2) NOT NULL,
  `pub_vallas` decimal(30,2) NOT NULL,
  `pub_flyers` decimal(30,2) NOT NULL,
  `pub_otros` decimal(30,2) NOT NULL,
  `alquiler_galpon` decimal(30,2) NOT NULL,
  `cto_amp` decimal(30,3) NOT NULL,
  `cto_apt` decimal(30,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblvalores`
--

INSERT INTO `tblvalores` (`nro`, `contrato_lc`, `contrato_ad`, `cap_max_lc_amp`, `cap_max_ad_amp`, `cap_max_kg_apt`, `cto_trans_arm`, `cto_trans_sfi`, `cto_trans_ciu`, `cto_trans_lsa`, `cap_alm_tiendas`, `alquiler_arm`, `alquiler_sfi`, `alquiler_ciu`, `alquiler_lsa`, `pub_videos`, `pub_vallas`, `pub_flyers`, `pub_otros`, `alquiler_galpon`, `cto_amp`, `cto_apt`) VALUES
(1, 5000.00, 3000.00, 255000.00, 195000.00, 12000.00, 0.080, 0.075, 0.090, 0.085, 300000.00, 1500.00, 1480.00, 2500.00, 2400.00, 5000.00, 3000.00, 2000.00, 1000.00, 8.20, 0.025, 0.150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `nro` int(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `cant_cap_almacen` decimal(30,0) NOT NULL,
  `cant_existencia` decimal(30,0) NOT NULL,
  `cant_cap_disp` decimal(30,0) NOT NULL,
  `monto_a_arm` decimal(30,0) NOT NULL,
  `monto_a_ciu` decimal(30,0) NOT NULL,
  `monto_a_sfi` decimal(30,0) NOT NULL,
  `monto_a_lsa` decimal(30,0) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Tiendas';

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`nro`, `nro_empresa`, `cant_cap_almacen`, `cant_existencia`, `cant_cap_disp`, `monto_a_arm`, `monto_a_ciu`, `monto_a_sfi`, `monto_a_lsa`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 1, 300000, 6400, 293600, 1500, 2500, 1480, 2400, 'A', '2024-05-09', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas_existe`
--

CREATE TABLE `tiendas_existe` (
  `nro` int(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `nro_almacen_tienda` int(10) NOT NULL,
  `cant_dub_arm` decimal(30,2) NOT NULL,
  `cant_dub_ciu` decimal(30,2) NOT NULL,
  `cant_dub_sfi` decimal(30,2) NOT NULL,
  `cant_dub_lsa` decimal(30,2) NOT NULL,
  `cant_moz_arm` decimal(30,2) NOT NULL,
  `cant_moz_ciu` decimal(30,2) NOT NULL,
  `cant_moz_sfi` decimal(30,2) NOT NULL,
  `cant_moz_lsa` decimal(30,2) NOT NULL,
  `cant_gou_arm` decimal(30,2) NOT NULL,
  `cant_gou_ciu` decimal(30,2) NOT NULL,
  `cant_gou_sfi` decimal(30,2) NOT NULL,
  `cant_gou_lsa` decimal(30,2) NOT NULL,
  `cant_die_arm` decimal(30,2) NOT NULL,
  `cant_die_ciu` decimal(30,2) NOT NULL,
  `cant_die_sfi` decimal(30,2) NOT NULL,
  `cant_die_lsa` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiendas_existe`
--

INSERT INTO `tiendas_existe` (`nro`, `nro_empresa`, `nro_almacen_tienda`, `cant_dub_arm`, `cant_dub_ciu`, `cant_dub_sfi`, `cant_dub_lsa`, `cant_moz_arm`, `cant_moz_ciu`, `cant_moz_sfi`, `cant_moz_lsa`, `cant_gou_arm`, `cant_gou_ciu`, `cant_gou_sfi`, `cant_gou_lsa`, `cant_die_arm`, `cant_die_ciu`, `cant_die_sfi`, `cant_die_lsa`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 1, 1, 0.00, 0.00, 0.00, 0.00, 1500.00, 500.00, 500.00, 2200.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 'A', '2024-05-09', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas_mov`
--

CREATE TABLE `tiendas_mov` (
  `nro` int(10) NOT NULL,
  `nro_empresa` int(10) NOT NULL,
  `nro_almacen_tienda` int(10) NOT NULL,
  `nro_tienda` int(1) NOT NULL,
  `nombre_tienda` varchar(100) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `nro_queso` int(1) NOT NULL,
  `nombre_queso` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_operacion` varchar(1) NOT NULL,
  `cant_entrada` decimal(30,2) NOT NULL,
  `cant_venta` decimal(30,2) NOT NULL,
  `cant_monto_pvp` decimal(30,2) NOT NULL,
  `cant_ingreso` decimal(30,2) NOT NULL,
  `cant_disponible` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha_reg` date NOT NULL,
  `usuario_reg` int(10) NOT NULL,
  `estatus_reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Tiendas-Mov';

--
-- Volcado de datos para la tabla `tiendas_mov`
--

INSERT INTO `tiendas_mov` (`nro`, `nro_empresa`, `nro_almacen_tienda`, `nro_tienda`, `nombre_tienda`, `ciclo`, `nro_queso`, `nombre_queso`, `fecha`, `tipo_operacion`, `cant_entrada`, `cant_venta`, `cant_monto_pvp`, `cant_ingreso`, `cant_disponible`, `estatus`, `fecha_reg`, `usuario_reg`, `estatus_reg`) VALUES
(1, 1, 1, 1, 'Armadillo', 1, 2, 'Queso Mozarella', '2024-05-12', 'R', 1000.00, 0.00, 0.00, 0.00, 1000.00, 'A', '2024-05-10', 6, 'A'),
(2, 1, 1, 4, 'Los Santos', 1, 2, 'Queso Mozarella', '2024-05-12', 'R', 2000.00, 0.00, 0.00, 0.00, 2000.00, 'A', '2024-05-10', 6, 'A'),
(3, 1, 1, 1, 'Armadillo', 1, 2, 'Queso Mozarella', '2024-05-24', 'V', 0.00, 500.00, 12.00, 6000.00, 500.00, 'A', '2024-05-10', 6, 'A'),
(4, 1, 1, 4, 'Los Santos', 1, 2, 'Queso Mozarella', '2024-05-21', 'V', 0.00, 800.00, 11.50, 9200.00, 1200.00, 'A', '2024-05-10', 6, 'A'),
(5, 1, 1, 1, 'Armadillo', 1, 2, 'Queso Mozarella', '2024-05-12', 'R', 1000.00, 0.00, 0.00, 0.00, 1500.00, 'A', '2024-05-15', 6, 'A'),
(6, 1, 1, 2, 'Ciudadela', 1, 2, 'Queso Mozarella', '2024-05-12', 'R', 500.00, 0.00, 0.00, 0.00, 500.00, 'A', '2024-05-15', 6, 'A'),
(7, 1, 1, 3, 'San Fierro', 1, 2, 'Queso Mozarella', '2024-05-12', 'R', 500.00, 0.00, 0.00, 0.00, 500.00, 'A', '2024-05-15', 6, 'A'),
(8, 1, 1, 4, 'Los Santos', 1, 2, 'Queso Mozarella', '2024-05-12', 'R', 1000.00, 0.00, 0.00, 0.00, 2200.00, 'A', '2024-05-15', 6, 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amp`
--
ALTER TABLE `amp`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `amp_cto`
--
ALTER TABLE `amp_cto`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `amp_mov`
--
ALTER TABLE `amp_mov`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt`
--
ALTER TABLE `apt`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt_dtienda`
--
ALTER TABLE `apt_dtienda`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt_mov`
--
ALTER TABLE `apt_mov`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `compra_subasta`
--
ALTER TABLE `compra_subasta`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `despacho`
--
ALTER TABLE `despacho`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `pcm`
--
ALTER TABLE `pcm`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `pcm_mod_mov`
--
ALTER TABLE `pcm_mod_mov`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `pcm_mod_operador`
--
ALTER TABLE `pcm_mod_operador`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `simulacion`
--
ALTER TABLE `simulacion`
  ADD PRIMARY KEY (`nro`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id-simulacion` (`id`);

--
-- Indices de la tabla `tblauditoria`
--
ALTER TABLE `tblauditoria`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tblpublicidad`
--
ALTER TABLE `tblpublicidad`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tblqueso`
--
ALTER TABLE `tblqueso`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tbltienda`
--
ALTER TABLE `tbltienda`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`nro`),
  ADD KEY `ID Usuario` (`id`);

--
-- Indices de la tabla `tblvalores`
--
ALTER TABLE `tblvalores`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tiendas_existe`
--
ALTER TABLE `tiendas_existe`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tiendas_mov`
--
ALTER TABLE `tiendas_mov`
  ADD PRIMARY KEY (`nro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amp`
--
ALTER TABLE `amp`
  MODIFY `nro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `amp_cto`
--
ALTER TABLE `amp_cto`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `amp_mov`
--
ALTER TABLE `amp_mov`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `apt`
--
ALTER TABLE `apt`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `apt_dtienda`
--
ALTER TABLE `apt_dtienda`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `apt_mov`
--
ALTER TABLE `apt_mov`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compra_subasta`
--
ALTER TABLE `compra_subasta`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `despacho`
--
ALTER TABLE `despacho`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pcm`
--
ALTER TABLE `pcm`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pcm_mod_mov`
--
ALTER TABLE `pcm_mod_mov`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pcm_mod_operador`
--
ALTER TABLE `pcm_mod_operador`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `simulacion`
--
ALTER TABLE `simulacion`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblauditoria`
--
ALTER TABLE `tblauditoria`
  MODIFY `nro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpublicidad`
--
ALTER TABLE `tblpublicidad`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblqueso`
--
ALTER TABLE `tblqueso`
  MODIFY `nro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbltienda`
--
ALTER TABLE `tbltienda`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblvalores`
--
ALTER TABLE `tblvalores`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tiendas_existe`
--
ALTER TABLE `tiendas_existe`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tiendas_mov`
--
ALTER TABLE `tiendas_mov`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
