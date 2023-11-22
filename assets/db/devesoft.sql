DROP database devesoft;

CREATE database devesoft;
use devesoft;


CREATE TABLE `preguntas` (
  `ID` int(50) NOT NULL,
  `Nombre_completo` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Pregunta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `preguntas`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

