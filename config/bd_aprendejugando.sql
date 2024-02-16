-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 16-02-2024 a les 17:33:18
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
(1, 'Juegos Matemáticos'),
(2, 'Juegos de Historia'),
(3, 'Juegos de Ciencia'),
(4, 'Juegos de Idiomas'),
(5, 'Juegos de Habilidades Cognitivas'),
(6, 'Juegos de Habilidades Sociales'),
(7, 'Juegos de Habilidades Artisticas'),
(8, 'Juegos de Geografía'),
(9, 'Juegos de Ciencias Sociales'),
(10, 'Juegos de Programación y Lógica'),
(11, 'Juegos de Salud y Bienestar'),
(12, 'Juegos de Ecología'),
(13, 'Juegos de Literatura y Escritura'),
(14, 'Juegos de Educación Financiera');

-- --------------------------------------------------------

--
-- Estructura de la taula `juegos_usuarios`
--

CREATE TABLE `juegos_usuarios` (
  `juego_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Bolcament de dades per a la taula `juegos_usuarios`
--

INSERT INTO `juegos_usuarios` (`juego_id`, `usuario_id`) VALUES
(2, 1),
(4, 1);

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
(2, 'Cliente', '1', '2007-06-07', 'cliente@correo.com', '1234', 'Cliente'),
(3, 'Andreu', 'Cuenta', '2024-02-15', 'andreu@correo.com', '1234', 'Cliente'),
(4, 'Cliente', '2', '2024-02-15', 'cliente2@correo.com', '1234', 'Cliente');

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
(2, 'GeoGuessr', 'Juego de ubicación geográfica', 'GeoGuessr.png', 8),
(3, 'Where in the World is Carmen Sandiego', 'Juego de búsqueda de criminales internacionales', 'WhereInTheWorldIsCarmenSandiego.jpg', 8),
(4, 'Oregon Trail', 'Simulador de la ruta de migración histórica', 'OregonTrail.jpg', 2),
(5, 'Age of Empires', 'Juego de estrategia en tiempo real', 'AgeOfEmpires.jpeg', 2),
(6, 'CodeCombat', 'Plataforma para aprender programación jugando', 'CodeCombat.jpg', 10),
(7, 'LightBot', 'Juego de resolución de rompecabezas con programación', 'LightBot.png', 10),
(8, 'Zamzee', 'Juego que fomenta la actividad física', 'Zamzee.png', 11),
(9, 'Sworkit Youth: Fitness for Kids', 'Aplicación de ejercicios físicos para niños', 'SworkitYouth.jpg', 11),
(10, 'Eco', 'Juego de simulación de ecosistemas', 'Eco.jpg', 12),
(11, 'Farming Simulator', 'Simulador de vida agrícola', 'FarmingSimulator.jpg', 12),
(12, 'Story Cubes', 'Juego de dados para fomentar la creatividad', 'StoryCubes.jpg', 13),
(13, 'Scrivener', 'Software de escritura y organización de proyectos', 'Scrivener.webp', 13),
(14, 'Monopoly', 'Juego de mesa de propiedad y negocios', 'Monopoly.jpg', 14),
(15, 'Moneyville', 'Juego educativo sobre finanzas y dinero', 'Moneyville.jpg', 14),
(16, 'Math Blaster', 'Juego educativo de matemáticas', 'MathBlaster.jpg', 1),
(17, 'DragonBox Algebra', 'Juego educativo de álgebra', 'DragonBoxAlgebra.jpg', 1),
(18, 'Spore', 'Juego de simulación de evolución', 'Spore.jpg', 3),
(19, 'Kerbal Space Program', 'Simulador de exploración espacial', 'KerbalSpaceProgram.jpg', 3),
(20, 'Assassin\'s Creed: Discovery Tour', 'Modo educativo de la serie Assassin\'s Creed', 'Assasin\'sCreedDiscoveryTour.avif', 2),
(21, 'Civilization VI', 'Juego de estrategia de construcción de civilizaciones', 'CivilizationVI.jpg', 2),
(22, 'Duolingo', 'Plataforma de aprendizaje de idiomas', 'Duolingo.png', 4),
(23, 'Rosetta Stone', 'Software de aprendizaje de idiomas', 'RosettaStone.png', 4),
(24, 'Lumosity', 'Juegos para el entrenamiento cerebral', 'Lumosity.png', 5),
(25, 'Elevate', 'Aplicación para el desarrollo personal', 'Elevate.png', 5),
(26, 'Minecraft: Education Edition', 'Versión educativa de Minecraft', 'MinecraftEducationEdition.jpg', 6),
(27, 'SimCity', 'Juego de simulación de construcción de ciudades', 'SimCity.jpeg', 6),
(28, 'Artful Escape', 'Videojuego de aventuras y música', 'ArtfulEscape.jpg', 7),
(29, 'Kahoot!', 'Plataforma de aprendizaje basada en juegos', 'Kahoot.svg', 5),
(30, 'Coolmath Games', 'Juegos educativos de matemáticas', 'CoolmathGames.png', 1),
(31, 'Prodigy', 'Plataforma de juego educativo de matemáticas', 'Prodigy.jpg', 1),
(32, 'BioMan Biology', 'Juego educativo de biología', 'BioManBiology.jpg', 3),
(33, 'ChemCaper', 'Juego educativo de química', 'ChemCaper.jpg', 3),
(34, 'Valiant Hearts: The Great War', 'Juego de aventuras históricas', 'ValiantHeartsTheGreatWar.jpg', 2),
(35, 'Age of Exploration', 'Juego educativo sobre la era de la exploración', 'AgeOfExploration.jpg', 2),
(36, 'Busuu', 'Plataforma de aprendizaje de idiomas', 'Busuu.png', 4),
(37, 'Influent', 'Juego para aprender vocabulario en varios idiomas', 'Influent.jpg', 4),
(38, 'Brain Age', 'Juego de entrenamiento cerebral', 'BrainAge.jpg', 5),
(39, 'CogniFit Brain Fitness', 'Plataforma para el entrenamiento cerebral', 'CogniFitBrainFitness.jpg', 5),
(40, 'Toontown Online', 'Juego en línea de Disney con enfoque educativo', 'ToontownOnline.png', 6),
(41, 'Life is Strange', 'Videojuego de aventuras con elementos narrativos', 'LifeIsStrange.jpg', 6),
(42, 'LittleBigPlanet', 'Juego de plataforma y creación', 'LitteBigPlanet.jpg', 7),
(43, 'Art Academy', 'Software de creación artística', 'ArtAcademy.jpg', 7),
(44, 'Seterra Online', 'Juego de geografía para aprender sobre lugares del mundo', 'SeterraOnline.png', 8),
(45, 'Rome: Total War', 'Juego de estrategia en tiempo real ambientado en la antigua Roma', 'RomeTotalWar.jpg', 2),
(46, 'Crusader Kings III', 'Juego de estrategia de simulación de dinastías', 'CrusaderKingsIII.jpg', 2),
(47, 'Human Resource Machine', 'Juego de rompecabezas basado en programación', 'Human Resource Machine.jpg', 10),
(48, 'Cargo-Bot', 'Juego de rompecabezas de programación', 'CargoBot.png', 10),
(49, 'Super Stretch Yoga', 'Aplicación de yoga para niños', 'SuperStretchYoga.jpg', 11),
(50, 'Fitness Boxing', 'Juego de ejercicios de boxeo', 'FitnessBoxing.jpg', 11),
(51, 'SimEarth', 'Juego de simulación de desarrollo planetario', 'SimEarth.jpg', 12),
(52, 'Cities Skylines', 'Juego de simulación de construcción y gestión de ciudades', 'CitiesSkylines.jpg', 12),
(53, 'Story Jumper', 'Plataforma para crear y compartir historias', 'StoryJumper.webp', 13),
(54, 'The Typing of the Dead', 'Juego educativo de mecanografía', 'TheTypingOfTheDead.jpeg', 13),
(55, 'Stock Market Game', 'Juego educativo sobre el mercado de valores', 'StockMarketGame.png', 14),
(56, 'Monopoly Tycoon', 'Versión de Monopoly centrada en la construcción de imperios comerciales', 'MonopolyTycoon.jpg', 14);

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la taula `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `videojuego_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
