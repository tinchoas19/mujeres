
CREATE TABLE `campo` (
  `CampoId` int(11) NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci,
  `TipoId` int(11) DEFAULT NULL,
  `SeccionId` int(11) NOT NULL,
  `TituloTab` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `campo`
--

INSERT INTO `campo` (`CampoId`, `Descripcion`, `TipoId`, `SeccionId`, `TituloTab`) VALUES
(106, 'CAMPEONATO DE KARTING DE ALQUILER', 1, 4, ''),
(107, 'camp de alquiler 3.jpg', 2, 4, ''),
(108, 'camp de alquiler 4.jpg', 2, 4, ''),
(109, 'camp de alquiler 5.jpg', 2, 4, ''),
(110, 'camp alquiler 1.jpg', 2, 4, ''),
(111, 'KARTODROMO INTERNACIONAL DE BUENOS AIRES ', 1, 4, ''),
(112, '1653654_667733859973411_7907602725281687981_n.jpg', 2, 4, ''),
(113, '10405523_667732843306846_4761892150610861949_n.jpg', 2, 4, ''),
(114, '10421390_667732696640194_8699990140120371130_n.jpg', 2, 4, ''),
(115, '10473166_667732596640204_2524936196109869141_n.jpg', 2, 4, ''),
(116, 'ESCUELA DE PILOTOS', 1, 4, ''),
(117, 'img1.jpg', 2, 4, ''),
(118, 'img2.jpg', 2, 4, ''),
(119, '1385963_10207804220356462_3405101822056867585_n.jpg', 2, 4, ''),
(120, 'gustavo escuela.jpg', 2, 4, ''),
(121, 'EQUIPO DE COMPETICION-KibaRacing', 1, 4, ''),
(122, 'KIBA_Racing.jpg', 2, 4, ''),
(123, 'IMG_7948.jpg', 2, 4, ''),
(124, 'IMG_7978.jpg', 2, 4, ''),
(125, 'IMG_7974.jpg', 2, 4, ''),
(126, 'EVENTOS EMPRESARIALES/CUMPLEAÑOS', 1, 4, ''),
(127, 'IMG_6979.jpg', 2, 4, ''),
(128, 'IMG_6974.jpg', 2, 4, ''),
(129, 'IMG_6981.jpg', 2, 4, ''),
(130, 'IMG_6986.jpg', 2, 4, ''),
(131, 'CAMPEONATOS', 1, 4, ''),
(132, '10734075_655452537907154_1260588252974633814_n.jpg', 2, 4, ''),
(133, '10628344_655454984573576_4310240719762408855_n.jpg', 2, 4, ''),
(134, '10857856_655454847906923_4180717416914485291_n.jpg', 2, 4, ''),
(135, '10426183_655448871240854_8304855095296548805_n (1).jpg', 2, 4, ''),
(136, 'KARTING CLUB', 1, 4, ''),
(137, 'img1.jpg', 2, 4, ''),
(138, 'img2.jpg', 2, 4, ''),
(139, 'img3.jpg', 2, 4, ''),
(140, 'img4.jpg', 2, 4, ''),
(200, '<div>prueba</div><p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/f2355658c3606ee6bcc810fe77d21f2b40b67933.jpg?1485454544" style="width: 300px;"></p><p>que onda? funciona?</p>', 10, 1, ''),
(201, '<div>prueba</div><p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/f2355658c3606ee6bcc810fe77d21f2b40b67933.jpg?1485454544" style="width: 300px;"></p><p>que onda? funciona?</p>', 10, 2, ''),
(202, '<div>prueba</div><p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/f2355658c3606ee6bcc810fe77d21f2b40b67933.jpg?1485454544" style="width: 300px;"></p><p>que onda? funciona?</p>', 10, 3, 'Tab 1'),
(205, '<div>prueba</div><p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/f2355658c3606ee6bcc810fe77d21f2b40b67933.jpg?1485454544" style="width: 300px;"></p><p>que onda? funciona?</p>', 10, 3, 'Tab 4'),
(207, '<p>que se yo&nbsp;</p><p><br></p><p>agrego cosas aca a ver que pasa&nbsp;</p><p><br></p><p><img class="fr-dib fr-draggable" src="https://i.froala.com/download/28d22ab33b08cacb74c4417066a9cb517b2a8023.jpg?1485539542" style="width: 300px;"></p>', 10, 3, 'Nueva solapa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `SeccionId` int(11) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`SeccionId`, `Descripcion`) VALUES
(1, 'Alquiler'),
(2, 'Escuela'),
(3, 'Campeonatos'),
(4, 'Galeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subject`
--

INSERT INTO `subject` (`subjectid`, `descripcion`, `fecha`) VALUES
(1, 'Escuela de Pilotos', '26/01'),
(2, 'Carrera de Kartinggggg', '27/01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campo`
--
ALTER TABLE `campo`
  ADD PRIMARY KEY (`CampoId`,`SeccionId`),
  ADD KEY `fk_Campo_Seccion_idx` (`SeccionId`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`SeccionId`);

--
-- Indices de la tabla `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campo`
--
ALTER TABLE `campo`
  MODIFY `CampoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT de la tabla `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campo`
--
ALTER TABLE `campo`
  ADD CONSTRAINT `fk_Campo_Seccion` FOREIGN KEY (`SeccionId`) REFERENCES `seccion` (`SeccionId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

