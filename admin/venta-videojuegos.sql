-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2020 a las 08:12:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `venta-videojuegos`

create database `venta-videojuegos`;
use `venta-videojuegos`;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(11) DEFAULT NULL,
  `NombreCategoria` varchar(30) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`, `Descripcion`) VALUES
(1, 'Accion', 'Un género que se caracteriza por poner a los jugadores en situaciones donde debe pasar obstáculos, derrotar enemigos, poner a prueba su capacidad de reacción y de reflejo, mientras goza de una experiencia de constantes ataques y movimientos.'),
(2, 'Arcade', 'Todos esos videojuegos de las máquinas recreativas que eran muy populares en los años 80 y 90, sin embargo al pasar los años se le ha denominado arcade a esos videojuegos que son simples, repetitivos y requieren de cierta acción rápidas. Pac-Man, Space Invader, Arkanoid son algunos ejemplos.'),
(3, 'Depotivo', 'No hay mucho que explicar acá, son todos los juegos que se inspiran en los deportes que pueden dividirse en: futbol, basketball, conducción, tenis, peleas, etc.'),
(4, 'Carreras', 'Son los tipos de videojuegos que simulan alguna actividad y que se especializan en hacerlo lo más apegado a la realidad posible. Simulación de Vehículos: De todo tipo, sea autos (Forza, Gran Turismo), aviones (X-Plane), trenes (Rail Serve), naves espaciales (Orbiter) o de combate (Road Kill).'),
(5, 'Aventuras', 'Uno de los géneros más populares actualmente en donde el jugador se dedica a explorar el lugar que le rodea con el fin de ir descubriendo nuevos aspectos del título que tiene en manos, si bien puede ser explorarse a través de simples imágenes y textos (como comenzó el género) este ha ido evolucionando presentándonos universos enormes.'),
(6, 'Shooter', 'Un sub-género de acción que contiene también varios sub-géneros de videojuegos y que además es uno de los tipos de juegos más populares actualmente. ¿De qué trata? De ir avanzando en el juego mientras vas usando todo tipo de armas para abrirte paso entre los enemigos, no suelen tener un gran peso en la historia'),
(7, 'Plataforma', 'El género por excelencia con el cual muchos comenzaron su vida gamer, este se caracteriza porque el jugador controla a un personaje el cual debe ir avanzando en su aventura esquivando una serie de obstáculos, desplazándose a varios, lugares, quitándolos con algún poder, saltando, entre otros movimientos..'),
(8, 'Lucha', 'Uno de los más populares desde su llegada, este género coloca a dos personajes en un escenario de lucha reducido en donde el objetivo es acabar por completo con los puntos de salud del rival. Con el paso del tiempo ha tenido algunos cambios, de pasar a escenarios 2D a 3D, poder utilizar varios peleadores en una pelea, usando habilidades como las artes marciales o también algún tipo de arma y demás..'),
(9, 'Estrategia', 'En este tipo de juego manejas una enorme cantidad de personajes en un entorno, así como también tienes a tu disposición una variedad de objetos, habilidades, acciones y demás. Debes utilizar tu inteligencia, habilidad y creatividad para elaborar los mejores ataques o defensas ante las situaciones del juego..'),
(10, 'Survival Horror', 'Un sub-género que mezcla tanto elementos de acción como de aventura, acá los principal es sobrevivir ante situaciones de un auténtico terror. En los videojuegos de estilo la munición es escasa, las armas para defendernos son muy pocas o simplemente no hay. Resident Evil es uno de los grandes Survival que existen, al igual que Silent Hill, ambas franquicias tomando como ejemplo sus primeras entregas, Outlast es el ejemplo actual más representativo del género.'),
(11, 'RPG-Juegos de Rol', 'Su esencia está en ir mejorando las habilidades y características de tu personajes con la experiencia que vas obteniendo de batallas, misiones y demás. Actualmente el RPG combina mucho otros géneros como la aventura, acción, estrategia, entre otros.'),
(12, 'Musical', 'En este género encontramos a Guitar Hero, Rock Band, los juegos de karaoke, y aquellos sobresalientes de baile como Just Dance o Dancing Dancing Revolution.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `productov` (
  `IdProducto` int(11) DEFAULT NULL,
  `NombreProducto` varchar(200) DEFAULT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Imagen` varchar(250) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE productov MODIFY IdProducto INTEGER(11) AUTO_INCREMENT PRIMARY KEY;

ALTER TABLE productov
ADD UNIQUE (IdProducto);
--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `productov` (`IdProducto`, `NombreProducto`, `IdCategoria`, `Precio`, `Stock`, `Imagen`, `Descripcion`) VALUES
(1, 'Beyond Good & Evil 2', 1, 85, 5, 'pt1.jpg', 'Beyond Good & Evil 2 es un videojuego de acción y aventura en tercera persona desarrollado y producido por Ubisoft para las plataformas de PC, PS4 y Xbox One, Presentado durante el E3 de 2017, pero por el momento sin fecha de lanzamiento confirmada.'),
(2, 'Ghost of Tsushima', 1, 78, 3, 'pt2.jpg', 'Sucker Punch, creadores de la saga inFamous presentan un nuevo videojuego de acción, sigilo y aventura para PlayStation 4 de forma exclusiva, que cambia la ambientación de ciencia ficción y personajes mutantes para trasladarnos a un pasado histórico '),
(3, 'God of War', 1, 67, 4, 'pt3.jpg', 'God of War es la vuelta de Kratos a los videojuegos tras la trilogía original. Esta nueva entrega para PlayStation 4, si bien mantendrá varios de los ingredientes indivisibles de su jugabilidad, apostará por un nuevo comienzo para el personaje y una '),
(4, 'Tetris', 2, 75, 4, 'pt4.jpg', 'Tetris es un videojuego de puzle originalmente diseñado y programado por Alekséi Pázhitnov en la Unión Soviética. Fue lanzado el 6 de junio de 1984, ​ mientras trabajaba para el Centro de Computación Dorodnitsyn de la Academia de Ciencias de la Unión'),
(5, 'Pac-Man', 2, 81, 5, 'pt5.jpg', 'El protagonista del videojuego Pac-Man aparece en laberintos donde debe comer Pac-Dots, momento en el que se pasa al siguiente nivel o pantalla. Sin embargo, cuatro fantasmas: Blinky, Pinky, Inky y Clyde, recorren el laberinto para intentar comerse a'),
(6, 'Arkanoid', 2, 88, 1, 'pt6.jpg', 'El jugador controla una pequeña plataforma, que impide que una bola salga de la zona de juego, haciéndola rebotar.'),
(7, 'Fifa 19', 3, 89, 1, 'pt7.jpg', 'Es un videojuego de simulación de fútbol desarrollado por EA Vancouver y EA Rumania, ayudando también en su desarrollo está también EA España y EA Holanda, como parte de la serie FIFA de Electronic Arts'),
(8, 'NBA 2K20', 3, 84, 4, 'pt8.jpg', 'Es un videojuego de simulación de baloncesto desarrollado por Visual Concepts y publicado por 2K Sports, basado en la National Basketball Association. Es la 21ª entrega de la franquicia NBA 2K y la sucesora de NBA 2K19.'),
(9, 'MLB The Show 19', 3, 61, 1, 'pt9.jpg', 'Es un videojuego de béisbol de SIE San Diego Studio y publicado por Sony Interactive Entertainment, basado en Major League Baseball. Es la decimocuarta entrada de la franquicia MLB: The Show, y fue lanzada el 26 de marzo de 2019 para PlayStation 4.'),
(10, 'Forza Horizon 4 ', 4, 80, 1, 'pt10.jpg', 'Es un videojuego de carreras de mundo abierto, jugable en línea, desarrollado por Playground Games para Xbox One y Windows 10.​ Fue revelado en el E3 2018 y su lanzamiento se produjo el 2 de octubre de 2018.'),
(11, 'Need for Speed Heat', 4, 67, 5, 'pt11.jpg', 'Es un videojuego de carreras desarrollado por Ghost Games y publicado por Electronic Arts para Microsoft Windows, PlayStation 4 y Xbox One. Es la vigésimo cuarta entrega de la saga Need for Speed y conmemora el 25 aniversario de la serie.'),
(12, 'Forza Motorsport 7 ', 4, 76, 6, 'pt12.jpg', 'Es un videojuego de carreras desarrollado por Turn 10 Studios y distribuido por Microsoft Studios. Fue lanzado en Xbox One y Microsoft Windows el 3 de octubre de 2017, y en Xbox One X el 7 de noviembre de 2017, siendo la décima entrega de la serie Fo'),
(13, 'The Last of Us', 5, 71, 1, 'pt13.jpg', 'Es un videojuego de aventura de supervivencia desarrollado por la compañía estadounidense Naughty Dog y distribuido por Sony Computer Entertainment para la consola PlayStation 3 en 2013. '),
(14, 'Metal Gear Solid V: Ground Zeroes', 5, 80, 2, 'pt14.jpg', 'Es un videojuego de aventura y sigilo desarrollado por Kojima Productions y producido por Konami.​​ Es parte de una subserie de precuelas de la saga Metal Gear, que tiene lugar un año después de los eventos sucedidos en Metal Gear Solid: Peace Walker'),
(15, 'Tomb Raider ', 5, 54, 6, 'pt15.jpg', 'Es un videojuego de aventura desarrollado por Crystal Dynamics y distribuido por Square Enix. Es el décimo título de la serie Tomb Raider y el quinto título desarrollado por Crystal Dynamics. El juego es un reinicio de la serie y cuenta los orígenes '),
(16, 'Fortnite ', 6, 62, 3, 'pt16.jpg', 'Es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor general de juego y las mecánicas. Fue anunciado en los Spike'),
(17, 'Call of Duty 4: Modern Warfare', 6, 98, 6, 'pt17.jpg', 'Es un videojuego de disparos en primera persona de estilo bélico, desarrollado por Infinity Ward y distribuido por Activision. El videojuego, precedido por Call of Duty 3, es el cuarto título de la serie Call of Duty y el cuarto de esta misma en ser '),
(18, 'Doom Eternal ', 6, 63, 4, 'pt18.jpg', 'Es un videojuego de disparos en primera persona desarrollado por id Software y publicado por Bethesda Softworks.​ Es el quinto título principal de la serie Doom y la secuela directa del juego estrenado en 2016.'),
(19, 'Super Mario 64', 7, 65, 2, 'pt19.jpg', 'Es un videojuego de plataformas para la videoconsola Nintendo 64, desarrollado por Nintendo Entertainment Analysis and Development y publicado por la propia Nintendo. Su debut en Japón fue el 23 de junio de 1996, en América del Norte el 29 de septiem'),
(20, 'Ori and the Blind Forest', 7, 99, 2, 'pt20.jpg', 'Es un videojuego de plataforma aventura de un jugador con el estilo de Metroidvania diseñado por Moon Studios, un desarrollador independiente, y publicado por Microsoft Studios.'),
(21, 'Rayman Legends ', 7, 64, 6, 'pt21.jpg', 'Es un videojuego de plataforma desarrollado por Ubisoft Montpellier y publicado por Ubisoft. Es el quinto título principal de la serie Rayman y la secuela directa del juego 2011 Rayman Origins. '),
(22, 'Mortal Kombat X ', 8, 66, 6, 'pt22.jpg', 'Es un videojuego de pelea creado por Ed Boon, desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment, fue anunciado en junio de 2014, mediante un vídeo que mostraba a Sub-Zero y Scorpion peleando entre sí.'),
(23, 'Dragon Ball FighterZ', 8, 97, 3, 'pt23.jpg', 'Es un videojuego de lucha en 2D desarrollado por Arc System Works y distribuido por Bandai Namco Entertainment, basado en la franquicia Dragon Ball.​'),
(24, 'Street Fighter IV ', 8, 69, 5, 'pt24.jpg', 'Es un videojuego de lucha producido por Capcom. Tiene versiones en arcade, iOS, Android, PlayStation 3, Xbox 360 y PC. El juego para arcade fue realizado en Japón el 18 de julio de 2008 con importaciones de máquinas recreativas en salas estadounidens'),
(25, 'Civilization VI', 9, 66, 2, 'pt25.jpg', 'Es un videojuego de estrategia por turnos perteneciente a la serie Civilization. El juego fue desarrollado por Firaxis Games y distribuido por 2K Games y Take-Two Interactive. Su fecha de lanzamiento fue el 21 de octubre de 2016 para Windows de Micro'),
(26, 'Age of Empires II: The Age of Kings', 9, 72, 6, 'pt26.jpg', 'Es un videojuego de estrategia en tiempo real para computadoras personales desarrollado en un principio por Ensemble Studios y más tarde por Skybox Labs, y distribuido por Microsoft Games para los sistemas operativos Windows y Mac OS, y Konami para P'),
(27, 'StarCraft II: Wings of Liberty ', 9, 53, 3, 'pt27.jpg', 'Es un videojuego de estrategia en tiempo real desarrollado por Blizzard Entertainment para Microsoft Windows y Macintosh. Es la secuela de StarCraft. Fue anunciado el sábado 19 de mayo de 2007 en la convención Blizzard Worldwide Invitational celebrad'),
(28, 'Silent Hill ', 10, 75, 4, 'pt28.jpg', 'Es una franquicia de terror creada por Keiichiro Toyama y publicada por Konami y su subsidiaria, Konami Digital Entertainment. Los primeros cuatro títulos de la serie, Silent Hill, 2, 3 y 4: The Room, fueron desarrollados por Team Silent, grupo inter'),
(29, 'Alien: Isolation ', 10, 94, 4, 'pt29.jpg', 'Es un videojuego de horror de supervivencia y sigilo en primera persona​ desarrollado por The Creative Assembly y publicado por Sega para Microsoft Windows, Linux, PlayStation 3'),
(30, 'Dead Space', 10, 68, 4, 'pt30.jpg', 'Es un shooter en tercera persona con ambientación Horror de supervivencia, desarrollado por EA Redwood Shores y distribuido por Electronic Arts. Es el primer título de la serie Dead Space, franquicia que incluye videojuegos, cómics y películas.'),
(31, 'Dark Souls ', 11, 98, 6, 'pt31.jpg', 'Es un videojuego de rol de acción, desarrollado por la empresa From Software para las plataformas PlayStation 3, Xbox 360 y Microsoft Windows, distribuido por Namco Bandai Games. Anteriormente conocido como Project Souls, es el segundo videojuego de '),
(32, 'Mass Effect', 11, 50, 3, 'pt32.jpg', 'Es un videojuego de rol de acción y disparos en 3ª persona​​ de ciencia ficción para Xbox 360, Microsoft Windows y posteriormente PlayStation 3, desarrollado por BioWare.'),
(33, 'The Witcher 3: Wild Hunt ', 11, 85, 6, 'pt33.jpg', 'Es un videojuego de rol desarrollado por CD Projekt RED. Esta compañía es la desarrolladora mientras que la distribución corre a cargo de la Warner Bros. Interactive, en el caso de Norteamérica y Bandai Namco para Europa.'),
(34, 'Just Dance 2018 ', 12, 95, 5, 'pt34.jpg', 'Es una nueva entrega de la famosa saga de baile para consolas de Ubisoft. Esta nueva edición, que añadirá los habituales desvaríos visuales y estéticos que son una marca de la serie.'),
(35, 'La Voz vol. 2', 12, 58, 3, 'pt35.jpg', 'Se trata de un juego de canto para PS3 que ofrece modos para un jugador, multijugador, en el que encontraremos 6 variedades (Batalla, Duelo, etc.) para hasta 8 jugadores'),
(36, 'Rocksmith ', 12, 54, 1, 'pt36.jpg', 'Ofrece el siguiente paso en la evolución lógica de juegos como Guitar Hero o Rock Band: dar el salto a una guitarra de verdad. Tanto si no tenemos ni idea de cómo tocar este instrumento como si ya hacemos nuestros primeros pinitos con ella.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

select * from productov;
select * from categoria;

INSERT INTO `productov` (`NombreProducto`, `IdCategoria`, `Precio`, `Stock`, `Imagen`, `Descripcion`) VALUES
('Piano Tiles', 12, 25, 7, 'piano.jpg', 
'Beyond Good & Evil 2 es un videojuego de acción y aventura en tercera persona desarrollado y producido por Ubisoft para las plataformas de PC, PS4 y Xbox One, Presentado durante el E3 de 2017, pero por el momento sin fecha de lanzamiento confirmada.');
