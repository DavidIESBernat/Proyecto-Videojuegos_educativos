-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 14-02-2024 a les 20:04:38
-- Versió del servidor: 10.4.28-MariaDB
-- Versió de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `bd_aprendejugando`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Bolcament de dades per a la taula `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `nombre_categoria`) VALUES
(1, 'Juegos de Historia');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `rol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Bolcament de dades per a la taula `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `fecha_nacimiento`, `correo`, `contraseña`, `rol`) VALUES
(1, 'Marc', 'Martínez', '2004-06-11', 'marcmartinezsotillo@gmail.com', '1234', 'Administrador'),
(2, 'Cliente', '1', '2007-06-07', 'cliente1@correo.com', '1234', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de la taula `videojuegos`
--

CREATE TABLE `videojuegos` (
  `videojuego_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `img` text DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Bolcament de dades per a la taula `videojuegos`
--

INSERT INTO `videojuegos` (`videojuego_id`, `nombre`, `descripcion`, `img`, `categoria_id`) VALUES
(2, 'GeoGuessr', 'Juego de ubicación geográfica', 'GeoGuessr.jpg', NULL),
(3, 'Where in the World is Carmen Sandiego', 'Juego de búsqueda de criminales internacionales', 'WhereInTheWorldIsCarmenSandiego.png', NULL),
(4, 'Oregon Trail', 'Simulador de la ruta de migración histórica', 'OregonTrail.jpg', NULL),
(5, 'Age of Empires', 'Juego de estrategia en tiempo real', 'AgeOfEmpires.webp', NULL),
(6, 'CodeCombat', 'Plataforma para aprender programación jugando', 'CodeCombat.jpg', NULL),
(7, 'LightBot', 'Juego de resolución de rompecabezas con programación', 'LightBot.png', NULL),
(8, 'Zamzee', 'Juego que fomenta la actividad física', 'Zamzee.png', NULL),
(9, 'Sworkit Youth: Fitness for Kids', 'Aplicación de ejercicios físicos para niños', 'SworkitYouth.jpg', NULL),
(10, 'Eco', 'Juego de simulación de ecosistemas', 'Eco.jpg', NULL),
(11, 'Farming Simulator', 'Simulador de vida agrícola', 'FarmingSimulator.jpg', NULL),
(12, 'Story Cubes', 'Juego de dados para fomentar la creatividad', 'StoryCubes.jpg', NULL),
(13, 'Scrivener', 'Software de escritura y organización de proyectos', 'Scrivener.webp', NULL),
(14, 'Monopoly', 'Juego de mesa de propiedad y negocios', 'Monopoly.jpg', NULL),
(15, 'Moneyville', 'Juego educativo sobre finanzas y dinero', 'Moneyville.jpg', NULL),
(16, 'Math Blaster', 'Juego educativo de matemáticas', 'MathBlaster.jpg', NULL),
(17, 'DragonBox Algebra', 'Juego educativo de álgebra', 'DragonBoxAlgebra.jpg', NULL),
(18, 'Spore', 'Juego de simulación de evolución', 'Spore.jpg', NULL),
(19, 'Kerbal Space Program', 'Simulador de exploración espacial', 'KerbalSpaceProgram.jpg', NULL),
(20, 'Assassin\'s Creed: Discovery Tour', 'Modo educativo de la serie Assassin\'s Creed', 'Assasin\'sCreedDiscoveryTour.avif', NULL),
(21, 'Civilization VI', 'Juego de estrategia de construcción de civilizaciones', 'CivilizationVI.jpg', NULL),
(22, 'Duolingo', 'Plataforma de aprendizaje de idiomas', 'Duolingo.png', NULL),
(23, 'Rosetta Stone', 'Software de aprendizaje de idiomas', 'RosettaStone.png', NULL),
(24, 'Lumosity', 'Juegos para el entrenamiento cerebral', 'Lumosity.png', NULL),
(25, 'Elevate', 'Aplicación para el desarrollo personal', 'Elevate.png', NULL),
(26, 'Minecraft: Education Edition', 'Versión educativa de Minecraft', 'MinecraftEducationEdition.jpg', NULL),
(27, 'SimCity', 'Juego de simulación de construcción de ciudades', 'SimCity.jpeg', NULL),
(28, 'Artful Escape', 'Videojuego de aventuras y música', 'ArtfulEscape.jpg', NULL),
(29, 'Kahoot!', 'Plataforma de aprendizaje basada en juegos', 'Kahoot.svg', NULL),
(30, 'Coolmath Games', 'Juegos educativos de matemáticas', 'CoolmathGames.png', NULL),
(31, 'Prodigy', 'Plataforma de juego educativo de matemáticas', 'Prodigy.jpg', NULL),
(32, 'BioMan Biology', 'Juego educativo de biología', 'BioManBiology.jpg', NULL),
(33, 'ChemCaper', 'Juego educativo de química', 'ChemCaper.jpg', NULL),
(34, 'Valiant Hearts: The Great War', 'Juego de aventuras históricas', 'ValiantHeartsTheGreatWar.jpg', NULL),
(35, 'Age of Exploration', 'Juego educativo sobre la era de la exploración', 'AgeOfExploration.jpg', NULL),
(36, 'Busuu', 'Plataforma de aprendizaje de idiomas', 'Busuu.png', NULL),
(37, 'Influent', 'Juego para aprender vocabulario en varios idiomas', 'Influent.jpg', NULL),
(38, 'Brain Age', 'Juego de entrenamiento cerebral', 'BrainAge.jpg', NULL),
(39, 'CogniFit Brain Fitness', 'Plataforma para el entrenamiento cerebral', 'CogniFitBrainFitness.jpg', NULL),
(40, 'Toontown Online', 'Juego en línea de Disney con enfoque educativo', 'ToontownOnline.png', NULL),
(41, 'Life is Strange', 'Videojuego de aventuras con elementos narrativos', 'LifeIsStrange.jpg', NULL),
(42, 'LittleBigPlanet', 'Juego de plataforma y creación', 'LitteBigPlanet.jpg', NULL),
(43, 'Art Academy', 'Software de creación artística', 'ArtAcademy.jpg', NULL),
(44, 'Seterra Online', 'Juego de geografía para aprender sobre lugares del mundo', 'SeterraOnline.png', NULL),
(45, 'Rome: Total War', 'Juego de estrategia en tiempo real ambientado en la antigua Roma', 'RomeTotalWar.jpg', NULL),
(46, 'Crusader Kings III', 'Juego de estrategia de simulación de dinastías', 'CrusaderKingsIII.jpg', NULL),
(47, 'Human Resource Machine', 'Juego de rompecabezas basado en programación', 'Human Resource Machine.jpg', NULL),
(48, 'Cargo-Bot', 'Juego de rompecabezas de programación', 'CargoBot.png', NULL),
(49, 'Super Stretch Yoga', 'Aplicación de yoga para niños', 'SuperStretchYoga.jpg', NULL),
(50, 'Fitness Boxing', 'Juego de ejercicios de boxeo', 'FitnessBoxing.jpg', NULL),
(51, 'SimEarth', 'Juego de simulación de desarrollo planetario', 'SimEarth.jpg', NULL),
(52, 'Cities Skylines', 'Juego de simulación de construcción y gestión de ciudades', 'CitiesSkylines.jpg', NULL),
(53, 'Story Jumper', 'Plataforma para crear y compartir historias', 'StoryJumper.webp', NULL),
(54, 'The Typing of the Dead', 'Juego educativo de mecanografía', 'TheTypingOfTheDead.jpeg', NULL),
(55, 'Stock Market Game', 'Juego educativo sobre el mercado de valores', 'StockMarketGame.png', NULL),
(56, 'Monopoly Tycoon', 'Versión de Monopoly centrada en la construcción de imperios comerciales', 'MonopolyTycoon.jpg', NULL);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índexs per a la taula `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índexs per a la taula `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`videojuego_id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `videojuego_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
