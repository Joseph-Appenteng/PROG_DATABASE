CREATE TABLE `weersomstandighedenperdag` (
  `idweersomstandighedenPerDag` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Datum` date NOT NULL,
  `aantalGraden` decimal(35,0) NOT NULL,
  `windKracht` int(20) NOT NULL,
  `regenInMilimeters` decimal(10,0) NOT NULL,
  `plaats` varchar(120) NOT NULL,
    PRIMARY KEY (idweersomstandighedenPerDag),
    UNIQUE INDEX idweersomstandighedenPerDag_unique(idweersomstandighedenPerDag asc) visible
) 