-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 14-02-2024 a les 20:53:16
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
(1, 'Juegos de Historia'),
(2, 'Juegos Matemáticos'),
(3, 'Juegos de Historia'),
(4, 'Juegos de Ciencia'),
(5, 'Juegos de Idiomas'),
(6, 'Habilidades Cognitivas'),
(7, 'Juegos de Habilidades Sociales'),
(8, 'Juegos de Habilidades Artisticas'),
(9, 'Juegos de Geografía'),
(10, 'Juegos de Ciencias Sociales'),
(11, 'Juegos de Programación y Lógica'),
(12, 'Juegos de Salud y Bienestar'),
(13, 'Juegos de Ecología'),
(14, 'Juegos de Literatura y Escritura'),
(15, 'Juegos de Educación Financiera');

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
(2, 'Cliente', '1', '2007-06-07', 'cliente@correo.com', '1234', 'Cliente');

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
(2, 'GeoGuessr', 'Juego de ubicación geográfica', 'GeoGuessr.jpg', 9),
(3, 'Where in the World is Carmen Sandiego', 'Juego de búsqueda de criminales internacionales', 'WhereInTheWorldIsCarmenSandiego.png', 9),
(4, 'Oregon Trail', 'Simulador de la ruta de migración histórica', 'OregonTrail.jpg', 3),
(5, 'Age of Empires', 'Juego de estrategia en tiempo real', 'AgeOfEmpires.webp', 3),
(6, 'CodeCombat', 'Plataforma para aprender programación jugando', 'CodeCombat.jpg', 11),
(7, 'LightBot', 'Juego de resolución de rompecabezas con programación', 'LightBot.png', 11),
(8, 'Zamzee', 'Juego que fomenta la actividad física', 'Zamzee.png', 12),
(9, 'Sworkit Youth: Fitness for Kids', 'Aplicación de ejercicios físicos para niños', 'SworkitYouth.jpg', 12),
(10, 'Eco', 'Juego de simulación de ecosistemas', 'Eco.jpg', 13),
(11, 'Farming Simulator', 'Simulador de vida agrícola', 'FarmingSimulator.jpg', 13),
(12, 'Story Cubes', 'Juego de dados para fomentar la creatividad', 'StoryCubes.jpg', 14),
(13, 'Scrivener', 'Software de escritura y organización de proyectos', 'Scrivener.webp', 14),
(14, 'Monopoly', 'Juego de mesa de propiedad y negocios', 'Monopoly.jpg', 15),
(15, 'Moneyville', 'Juego educativo sobre finanzas y dinero', 'Moneyville.jpg', 15),
(16, 'Math Blaster', 'Juego educativo de matemáticas', 'MathBlaster.jpg', 2),
(17, 'DragonBox Algebra', 'Juego educativo de álgebra', 'DragonBoxAlgebra.jpg', 2),
(18, 'Spore', 'Juego de simulación de evolución', 'Spore.jpg', 4),
(19, 'Kerbal Space Program', 'Simulador de exploración espacial', 'KerbalSpaceProgram.jpg', 4),
(20, 'Assassin\'s Creed: Discovery Tour', 'Modo educativo de la serie Assassin\'s Creed', 'Assasin\'sCreedDiscoveryTour.avif', 3),
(21, 'Civilization VI', 'Juego de estrategia de construcción de civilizaciones', 'CivilizationVI.jpg', 3),
(22, 'Duolingo', 'Plataforma de aprendizaje de idiomas', 'Duolingo.png', 5),
(23, 'Rosetta Stone', 'Software de aprendizaje de idiomas', 'RosettaStone.png', 5),
(24, 'Lumosity', 'Juegos para el entrenamiento cerebral', 'Lumosity.png', 6),
(25, 'Elevate', 'Aplicación para el desarrollo personal', 'Elevate.png', 6),
(26, 'Minecraft: Education Edition', 'Versión educativa de Minecraft', 'MinecraftEducationEdition.jpg', 7),
(27, 'SimCity', 'Juego de simulación de construcción de ciudades', 'SimCity.jpeg', 7),
(28, 'Artful Escape', 'Videojuego de aventuras y música', 'ArtfulEscape.jpg', 8),
(29, 'Kahoot!', 'Plataforma de aprendizaje basada en juegos', 'Kahoot.svg', 6),
(30, 'Coolmath Games', 'Juegos educativos de matemáticas', 'CoolmathGames.png', 2),
(31, 'Prodigy', 'Plataforma de juego educativo de matemáticas', 'Prodigy.jpg', 2),
(32, 'BioMan Biology', 'Juego educativo de biología', 'BioManBiology.jpg', 4),
(33, 'ChemCaper', 'Juego educativo de química', 'ChemCaper.jpg', 4),
(34, 'Valiant Hearts: The Great War', 'Juego de aventuras históricas', 'ValiantHeartsTheGreatWar.jpg', 3),
(35, 'Age of Exploration', 'Juego educativo sobre la era de la exploración', 'AgeOfExploration.jpg', 3),
(36, 'Busuu', 'Plataforma de aprendizaje de idiomas', 'Busuu.png', 5),
(37, 'Influent', 'Juego para aprender vocabulario en varios idiomas', 'Influent.jpg', 5),
(38, 'Brain Age', 'Juego de entrenamiento cerebral', 'BrainAge.jpg', 6),
(39, 'CogniFit Brain Fitness', 'Plataforma para el entrenamiento cerebral', 'CogniFitBrainFitness.jpg', 6),
(40, 'Toontown Online', 'Juego en línea de Disney con enfoque educativo', 'ToontownOnline.png', 7),
(41, 'Life is Strange', 'Videojuego de aventuras con elementos narrativos', 'LifeIsStrange.jpg', 7),
(42, 'LittleBigPlanet', 'Juego de plataforma y creación', 'LitteBigPlanet.jpg', 8),
(43, 'Art Academy', 'Software de creación artística', 'ArtAcademy.jpg', 8),
(44, 'Seterra Online', 'Juego de geografía para aprender sobre lugares del mundo', 'SeterraOnline.png', 9),
(45, 'Rome: Total War', 'Juego de estrategia en tiempo real ambientado en la antigua Roma', 'RomeTotalWar.jpg', 3),
(46, 'Crusader Kings III', 'Juego de estrategia de simulación de dinastías', 'CrusaderKingsIII.jpg', 3),
(47, 'Human Resource Machine', 'Juego de rompecabezas basado en programación', 'Human Resource Machine.jpg', 11),
(48, 'Cargo-Bot', 'Juego de rompecabezas de programación', 'CargoBot.png', 11),
(49, 'Super Stretch Yoga', 'Aplicación de yoga para niños', 'SuperStretchYoga.jpg', 12),
(50, 'Fitness Boxing', 'Juego de ejercicios de boxeo', 'FitnessBoxing.jpg', 12),
(51, 'SimEarth', 'Juego de simulación de desarrollo planetario', 'SimEarth.jpg', 13),
(52, 'Cities Skylines', 'Juego de simulación de construcción y gestión de ciudades', 'CitiesSkylines.jpg', 13),
(53, 'Story Jumper', 'Plataforma para crear y compartir historias', 'StoryJumper.webp', 14),
(54, 'The Typing of the Dead', 'Juego educativo de mecanografía', 'TheTypingOfTheDead.jpeg', 14),
(55, 'Stock Market Game', 'Juego educativo sobre el mercado de valores', 'StockMarketGame.png', 15),
(56, 'Monopoly Tycoon', 'Versión de Monopoly centrada en la construcción de imperios comerciales', 'MonopolyTycoon.jpg', 15);

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
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
