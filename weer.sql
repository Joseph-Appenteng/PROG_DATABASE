CREATE TABLE IF NOT EXISTS weersomstandighedenPerDag (
    idweersomstandighedenPerDag INT UNSIGNED NOT NULL,
    Datum DATE NOT NULL,
    aantalGraden DECIMAL NOT NULL,
    plaats VARCHAR NOT NULL,
    windKracht INT NOT NULL,
    regenInMilimeters DECIMAL NOT NULL,
    PRIMARY KEY (idweersomstandighedenPerDag),
    UNIQUE INDEX idweersomstandighedenPerDag_UNIQUE (idWeersomstandighedenPerDag ASC) VISIBLE
);