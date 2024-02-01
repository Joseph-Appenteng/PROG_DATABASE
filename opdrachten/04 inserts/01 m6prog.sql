CREATE SCHEMA  personenNaw;
USE personenNaw;

CREATE TABLE naw 
(
    idnaw int UNSIGNED NOT NULL AUTO_INCREMENT,
    naam varchar(100) NOT NULL,
    straat varchar(100) NOT NULL,
    huisnummer varchar(6) NOT NULL,
    postcode varchar(6) NOT NULL,
    email varchar(120) NOT NULL,
    
    PRIMARY KEY (idnaw),
    UNIQUE INDEX idnaw_UNIQUE (idnaw ASC) VISIBLE
);