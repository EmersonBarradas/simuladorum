-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2024 a las 02:54:14
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
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipo-lc` varchar(1) NOT NULL,
  `cant-entrada-lc` decimal(30,2) NOT NULL,
  `cant-salida-lc` decimal(30,2) NOT NULL,
  `cant-total-lc` decimal(30,2) NOT NULL,
  `tipo-ad` varchar(1) NOT NULL,
  `cant-entrada-ad` decimal(30,2) NOT NULL,
  `cant-salida-ad` decimal(30,2) NOT NULL,
  `cant-total-ad` decimal(30,2) NOT NULL,
  `nro-compra` int(10) NOT NULL,
  `id-compra` varchar(10) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Almacen de Materia Prima';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amp-cto`
--

CREATE TABLE `amp-cto` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `nro-amp` int(10) NOT NULL,
  `id-amp` varchar(10) NOT NULL,
  `nro-ciclo` int(10) NOT NULL,
  `id-ciclo` int(10) NOT NULL,
  `fecha-amp-cto` date NOT NULL,
  `tipo-lc` varchar(1) NOT NULL,
  `cantidad-lc` decimal(30,2) NOT NULL,
  `monto-cto-lt-lc` decimal(30,2) NOT NULL,
  `monto-total-lc` decimal(30,2) NOT NULL,
  `cant-acum-lc` decimal(30,2) NOT NULL,
  `monto-cto-acum-lc` decimal(30,2) NOT NULL,
  `monto-cto-promedio-lc` decimal(30,2) NOT NULL,
  `tipo-ad` varchar(1) NOT NULL,
  `cantidad-ad` decimal(30,2) NOT NULL,
  `monto-cto-lt-ad` decimal(30,2) NOT NULL,
  `monto-cto-total-ad` decimal(30,2) NOT NULL,
  `cant-acum-ad` decimal(30,2) NOT NULL,
  `monto-cto-acum-ad` decimal(30,2) NOT NULL,
  `monto-cto-promedio-ad` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Costo Almacen Materia Prima';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt`
--

CREATE TABLE `apt` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empres` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(11) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha-apt` date NOT NULL,
  `tipo-apt` varchar(1) NOT NULL,
  `cant-entrada-apt` decimal(30,2) NOT NULL,
  `cant-salida-apt` decimal(30,2) NOT NULL,
  `total-apt` decimal(30,2) NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` varchar(10) NOT NULL,
  `nombre-queso` varchar(300) NOT NULL,
  `status` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla APT';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt-a`
--

CREATE TABLE `apt-a` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` varchar(10) NOT NULL,
  `nombre-queso` varchar(100) NOT NULL,
  `cant-cap-max` decimal(30,2) NOT NULL,
  `cant-existencia` decimal(30,2) NOT NULL,
  `cant-cap-disp` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla APT-A';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt-cto`
--

CREATE TABLE `apt-cto` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `cant-entrada` decimal(30,2) NOT NULL,
  `costo-unidad-e` decimal(30,2) NOT NULL,
  `costo-total-e` decimal(30,2) NOT NULL,
  `cant-despacho` decimal(30,2) NOT NULL,
  `costo-unidad-d` decimal(30,2) NOT NULL,
  `costo-total-d` decimal(30,2) NOT NULL,
  `cant-acum` decimal(30,2) NOT NULL,
  `costo-promedio` decimal(30,2) NOT NULL,
  `costo-acum` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fehca-reg` date NOT NULL,
  `usario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla APT-CTO';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apt-despacho`
--

CREATE TABLE `apt-despacho` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha-despacho` date NOT NULL,
  `cant-queso-duro` decimal(30,2) NOT NULL,
  `cant-queso-mozarella` decimal(30,2) NOT NULL,
  `cant-queso-gouda` decimal(30,2) NOT NULL,
  `cant-queso-dieta` decimal(30,2) NOT NULL,
  `cant.total-queso` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla APT-Despacho';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `equipo` int(10) NOT NULL,
  `id-equipo` varchar(10) NOT NULL,
  `observación` text NOT NULL,
  `monto-multa` decimal(30,2) NOT NULL,
  `fecha-pago` date NOT NULL,
  `estatus` decimal(1,0) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL,
  `ciclo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla bitacora';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `dia` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `actividad` varchar(300) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla de Calendario';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra-subasta`
--

CREATE TABLE `compra-subasta` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha-ped` date NOT NULL,
  `fecha-recep` date NOT NULL,
  `monto-precio-lc` decimal(30,2) NOT NULL,
  `cant-contratos-lc` decimal(30,2) NOT NULL,
  `cant-litros-lc` decimal(30,2) NOT NULL,
  `monto-total-usb-lc` decimal(30,2) NOT NULL,
  `monto-precio-ad` decimal(30,2) NOT NULL,
  `cant-contratos-ad` decimal(30,2) NOT NULL,
  `cant-litros-ad` decimal(30,2) NOT NULL,
  `monto-total-usb-ad` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Compra - Subasta';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho-tienda`
--

CREATE TABLE `despacho-tienda` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` varchar(10) NOT NULL,
  `nombre-queso` varchar(100) NOT NULL,
  `cant-disponible` decimal(30,2) NOT NULL,
  `cant-desp-armadillo` decimal(30,2) NOT NULL,
  `cant-desp-sanfierro` decimal(30,2) NOT NULL,
  `cant-desp-ciudadela` decimal(30,2) NOT NULL,
  `cant-desp-lossantos` decimal(30,2) NOT NULL,
  `costo-t-armadillo` decimal(30,2) NOT NULL,
  `costo-t-sanfierro` decimal(30,2) NOT NULL,
  `costo-t-ciudadela` decimal(30,2) NOT NULL,
  `costo-t-lossantos` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Despacho-Tienda';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `equipo` int(10) NOT NULL,
  `id-equipo` varchar(10) NOT NULL,
  `fecha-creacion` date NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `estructura` varchar(300) NOT NULL,
  `departamentos` varchar(300) NOT NULL,
  `organigrama` varchar(300) NOT NULL,
  `monto-presupuesto` decimal(30,2) NOT NULL,
  `monto-saldo-actual` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla empresa';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `multas` decimal(30,2) NOT NULL,
  `descripcion` tinytext NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `registrado` tinyint(1) NOT NULL,
  `empresa` tinyint(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla de Equipo';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE `operador` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombre-operador` varchar(300) NOT NULL,
  `cargo-operador` varchar(100) NOT NULL,
  `horas-max` decimal(2,2) NOT NULL,
  `total-horas-sem` decimal(3,2) NOT NULL,
  `total-horas-trab` decimal(5,2) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `nombre-empresa` varchar(100) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Operador';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `nro-participante` int(10) NOT NULL,
  `id-participante` varchar(10) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Equipos Participantes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm`
--

CREATE TABLE `pcm` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `tipo-pcm` varchar(1) NOT NULL,
  `fecha-pcm` date NOT NULL,
  `cant-lc` decimal(30,2) NOT NULL,
  `cant-ad` decimal(30,2) NOT NULL,
  `cant-queso` decimal(30,2) NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` varchar(10) NOT NULL,
  `nombre-queso` varchar(300) NOT NULL,
  `monto-cto-prod-mp` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Costo de Producción';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm-cf`
--

CREATE TABLE `pcm-cf` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(11) NOT NULL,
  `id-empresa` int(11) NOT NULL,
  `ciclo` int(11) NOT NULL,
  `id-ciclo` int(11) NOT NULL,
  `monto-alquiler-galpon` int(11) NOT NULL,
  `monto-cto-amp` int(11) NOT NULL,
  `monto-cto-apt` int(11) NOT NULL,
  `monto-cto-transporte` int(11) NOT NULL,
  `monto-total-ciclo` int(11) NOT NULL,
  `fecha-reg` int(11) NOT NULL,
  `usuario-reg` int(11) NOT NULL,
  `estatus-reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla PCM-CF';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm-cp`
--

CREATE TABLE `pcm-cp` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `monto-inventario-inicial` decimal(30,2) NOT NULL,
  `monto-compras` decimal(30,2) NOT NULL,
  `monto-tal-mp` decimal(30,2) NOT NULL,
  `monto-inv-final-mp` decimal(30,2) NOT NULL,
  `monto-cto-mp` decimal(30,2) NOT NULL,
  `monto-mo-directa` decimal(30,2) NOT NULL,
  `monto-cto-fabricacion` decimal(30,2) NOT NULL,
  `monto-total-cto-produccion` decimal(30,2) NOT NULL,
  `monto-produccion-semanal` decimal(30,2) NOT NULL,
  `monto-cto-unit-semanal` decimal(30,2) NOT NULL,
  `monto-cto-unit-mp` decimal(30,2) NOT NULL,
  `monto-cto-unit-mo` decimal(30,2) NOT NULL,
  `monto-cto-unit-gf` decimal(30,2) NOT NULL,
  `monto-cto-unit-individuales` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla PCM-CP';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcm-mod`
--

CREATE TABLE `pcm-mod` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `total-horas` decimal(30,2) NOT NULL,
  `monto-hora` decimal(30,2) NOT NULL,
  `monto-adicional` decimal(30,2) NOT NULL,
  `total-jornada` decimal(30,2) NOT NULL,
  `porcentaje-trab` decimal(30,2) NOT NULL,
  `nro-operador` int(10) NOT NULL,
  `id-operador` varchar(10) NOT NULL,
  `emoji1` varchar(300) NOT NULL,
  `emoji2` varchar(300) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla PCM-MOD';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` int(10) NOT NULL,
  `nombre-queso` varchar(100) NOT NULL,
  `p-armadillo` decimal(30,2) NOT NULL,
  `p-sanfierro` decimal(30,2) NOT NULL,
  `p-ciudadela` decimal(30,2) NOT NULL,
  `p-lossantos` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Publicidad';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quesos`
--

CREATE TABLE `quesos` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `queso-nombre` varchar(100) NOT NULL,
  `cant-leche` decimal(30,2) NOT NULL,
  `cant-aditivo` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Quesos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulacion`
--

CREATE TABLE `simulacion` (
  `nro-simulacion` int(10) NOT NULL,
  `id-simulacion` varchar(10) NOT NULL,
  `fecha-inicio` date NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Define un entorno de trabajo de simulación. Inicializa valor';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblauditoria`
--

CREATE TABLE `tblauditoria` (
  `nro` int(11) NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `accion` varchar(200) NOT NULL,
  `proceso` varchar(100) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciclos`
--

CREATE TABLE `tblciclos` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombre-ciclo` varchar(100) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Ciclo';

--
-- Volcado de datos para la tabla `tblciclos`
--

INSERT INTO `tblciclos` (`nro`, `id`, `nombre-ciclo`, `fecha-reg`, `usuario-reg`, `estatus-reg`) VALUES
(1, 'ciclo1', 'Ciclo 1', '2024-01-01', 1, 'A'),
(2, 'ciclo2', 'Ciclo 2', '2024-01-03', 1, 'A'),
(3, 'ciclo3', 'Ciclo 3', '2024-01-03', 1, 'A'),
(4, 'ciclo4', 'Ciclo 4', '2024-01-03', 1, 'A'),
(5, 'ciclo5', 'Ciclo 5', '2024-01-03', 1, 'A'),
(6, 'ciclo6', 'Ciclo 6', '2024-01-03', 1, 'A'),
(7, 'ciclo7', 'Ciclo 7', '2024-01-03', 1, 'A'),
(8, 'ciclo8', 'Ciclo 8', '2024-01-03', 1, 'A'),
(9, 'ciclo9', 'Ciclo 9', '2024-01-03', 1, 'A'),
(10, 'ciclo10', 'Ciclo 10', '2024-01-03', 1, 'A'),
(11, 'ciclo12', 'Ciclo 12', '2024-01-03', 1, 'A'),
(12, 'ciclo12', 'Ciclo 12', '2024-01-03', 1, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltiendas`
--

CREATE TABLE `tbltiendas` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `tienda-nombre` varchar(100) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla nombre tiendas';

--
-- Volcado de datos para la tabla `tbltiendas`
--

INSERT INTO `tbltiendas` (`nro`, `id`, `tienda-nombre`, `fecha-reg`, `usuario-reg`, `estatus-reg`) VALUES
(1, 'tienda1', 'Armadillo', '2024-01-04', 1, 'A'),
(2, 'tienda2', 'San Fierro', '2024-01-04', 1, 'A'),
(3, 'tienda3', 'Ciudadela', '2024-01-04', 1, 'A'),
(4, 'tienda4', 'Los Santos', '2024-01-04', 1, 'A');

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
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla de usuario';

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`nro`, `id`, `usuario`, `clave`, `nombre`, `tipo`, `fecha-reg`, `usuario-reg`, `estatus-reg`) VALUES
(1, 'SU', 'administrador', '11599496', 'Usuario Programador', 'S', '2024-01-03', 1, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nombre-tienda` varchar(100) NOT NULL,
  `monto-cto-alquiler` int(11) NOT NULL,
  `cant-cap-almacen` int(11) NOT NULL,
  `cant-existencia` int(11) NOT NULL,
  `cant-cap-disponible` int(11) NOT NULL,
  `monto-cto-transporte` int(11) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Tiendas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas-mov`
--

CREATE TABLE `tiendas-mov` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `transaccion-tipo` varchar(1) NOT NULL,
  `transanccion-d` varchar(50) NOT NULL,
  `cant-entrada` decimal(30,2) NOT NULL,
  `cant-ventas` decimal(30,2) NOT NULL,
  `monto-pvp` decimal(30,2) NOT NULL,
  `monto-ingresos` decimal(30,2) NOT NULL,
  `cant-disponible` decimal(30,2) NOT NULL,
  `nro-tienda` int(10) NOT NULL,
  `id-tienda` varchar(10) NOT NULL,
  `nombre-tienda` varchar(100) NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` varchar(10) NOT NULL,
  `nombre-queso` varchar(100) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Tiendas-Mov';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `nro` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nro-empresa` int(10) NOT NULL,
  `id-empresa` varchar(10) NOT NULL,
  `ciclo` int(10) NOT NULL,
  `id-ciclo` varchar(10) NOT NULL,
  `nro-tienda` int(10) NOT NULL,
  `id-tienda` varchar(10) NOT NULL,
  `nombre-tienda` varchar(100) NOT NULL,
  `nro-queso` int(10) NOT NULL,
  `id-queso` varchar(10) NOT NULL,
  `nombre-queso` varchar(100) NOT NULL,
  `cant-kg` decimal(30,2) NOT NULL,
  `monto-pvp` decimal(30,2) NOT NULL,
  `monto-total` decimal(30,2) NOT NULL,
  `estatus` varchar(1) NOT NULL,
  `fecha-reg` date NOT NULL,
  `usuario-reg` int(10) NOT NULL,
  `estatus-reg` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Tabla Ventas';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amp`
--
ALTER TABLE `amp`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `amp-cto`
--
ALTER TABLE `amp-cto`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt`
--
ALTER TABLE `apt`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt-a`
--
ALTER TABLE `apt-a`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt-cto`
--
ALTER TABLE `apt-cto`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `apt-despacho`
--
ALTER TABLE `apt-despacho`
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
-- Indices de la tabla `compra-subasta`
--
ALTER TABLE `compra-subasta`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `despacho-tienda`
--
ALTER TABLE `despacho-tienda`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`nro-participante`),
  ADD KEY `id-participante` (`id-participante`);

--
-- Indices de la tabla `pcm`
--
ALTER TABLE `pcm`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `pcm-cf`
--
ALTER TABLE `pcm-cf`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `pcm-cp`
--
ALTER TABLE `pcm-cp`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `pcm-mod`
--
ALTER TABLE `pcm-mod`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `quesos`
--
ALTER TABLE `quesos`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `simulacion`
--
ALTER TABLE `simulacion`
  ADD PRIMARY KEY (`nro-simulacion`),
  ADD UNIQUE KEY `id` (`id-simulacion`),
  ADD KEY `id-simulacion` (`id-simulacion`);

--
-- Indices de la tabla `tblauditoria`
--
ALTER TABLE `tblauditoria`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tblciclos`
--
ALTER TABLE `tblciclos`
  ADD PRIMARY KEY (`nro`),
  ADD KEY `ID ciclo` (`id`);

--
-- Indices de la tabla `tbltiendas`
--
ALTER TABLE `tbltiendas`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`nro`),
  ADD KEY `ID Usuario` (`id`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `tiendas-mov`
--
ALTER TABLE `tiendas-mov`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`nro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amp`
--
ALTER TABLE `amp`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `amp-cto`
--
ALTER TABLE `amp-cto`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apt`
--
ALTER TABLE `apt`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apt-a`
--
ALTER TABLE `apt-a`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apt-cto`
--
ALTER TABLE `apt-cto`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apt-despacho`
--
ALTER TABLE `apt-despacho`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra-subasta`
--
ALTER TABLE `compra-subasta`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `despacho-tienda`
--
ALTER TABLE `despacho-tienda`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operador`
--
ALTER TABLE `operador`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
  MODIFY `nro-participante` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pcm`
--
ALTER TABLE `pcm`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pcm-cf`
--
ALTER TABLE `pcm-cf`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pcm-cp`
--
ALTER TABLE `pcm-cp`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pcm-mod`
--
ALTER TABLE `pcm-mod`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quesos`
--
ALTER TABLE `quesos`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblauditoria`
--
ALTER TABLE `tblauditoria`
  MODIFY `nro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblciclos`
--
ALTER TABLE `tblciclos`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbltiendas`
--
ALTER TABLE `tbltiendas`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiendas-mov`
--
ALTER TABLE `tiendas-mov`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
