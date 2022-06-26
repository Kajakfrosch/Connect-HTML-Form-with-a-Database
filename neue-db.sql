DROP DATABASE lanparty;
CREATE DATABASE lanparty;

USE lanparty;

CREATE TABLE platzierung (
    EID int AUTO_INCREMENT,
    Typ int NOT NULL,
    Beschreibung varchar(50),
    PRIMARY KEY(EID)
);

CREATE TABLE gast (
    KID int NOT NULL,
    vorname varchar(15) NOT NULL,
    nachname varchar(25) NOT NULL,
    Email varchar(50) NOT NULL,
    Geburtstag int(8) NOT NULL,
    Telefonnummer int(25) NOT NULL,
    PRIMARY KEY(KID)
);

CREATE TABLE food (
    FoodID int AUTO_INCREMENT,
    Typ varchar(20) NOT NULL,
    Beschreibung varchar(50) NOT NULL,
    PRIMARY KEY(FoodID)
);

CREATE TABLE games (
    GID int NOT NULL,
    Beschreibung varchar(20) NOT NULL,
    Spielename varchar(50) NOT NULL,
    Lokalspielbar int(1) NOT NULL,
    PRIMARY KEY(GID)
);

CREATE TABLE buchung (
    BID int AUTO_INCREMENT,
    KID int NOT NULL,
    EID int NOT NULL,
    PRIMARY KEY(BID),
    FOREIGN KEY (KID) REFERENCES gast(KID),
    FOREIGN KEY (EID) REFERENCES platzierung(EID)
);

CREATE TABLE lieblingsgame (
    LGID int AUTO_INCREMENT,
    KID int NOT NULL,
    GID int NOT NULL,
    PRIMARY KEY(LGID),
    FOREIGN KEY (KID) REFERENCES gast(KID),
    FOREIGN KEY (GID) REFERENCES games(GID)
);

CREATE TABLE mitbringen (
    MBID int AUTO_INCREMENT,
    KID int NOT NULL,
    FoodID int NOT NULL,
    PRIMARY KEY(MBID),
    FOREIGN KEY (KID) REFERENCES gast(KID),
    FOREIGN KEY (FoodID) REFERENCES food(FoodID)
);

INSERT INTO food (FoodID, Typ, Beschreibung) VALUES
(1, '1', 'Food Sweet'),
(2, '2', 'Food Salty'),
(3, '3', 'Food healthy'),
(4, '4', 'donate'),
(5, '5', 'drinks');

INSERT INTO games (GID, Beschreibung, Spielename, Lokalspielbar) VALUES
(1, 'Blockspiel', 'Minecraft', 1),
(2, 'Shooter', 'Fortnite', 0),
(3, 'Strategie', 'Anno 1800', 1),
(4, 'RPG', 'The Witcher 3', 0),
(5, 'Shooter RPG', 'Cyberpunk 2077', 1),
(6, 'Shooter', 'GTA 5', 0),
(7, 'Shooter', 'GTA 4', 0),
(8, 'Shooter', 'Red Dead Redemption 2', 1),
(9, 'Shooter', 'God of War', 1),
(10, 'RPG', 'Fallout 4', 0),
(11, 'Racing', 'Forza Horizon 4', 1),
(12, 'Racing', 'Forza Horizon 5', 1),
(13, 'Shooter', 'Overwatch', 1),
(14, 'Shooter', 'Valorant', 0),
(15, 'Moba', 'League of Legends', 0),
(16, 'Shooter', 'Star Wars Battelfront 2', 1),
(17, 'Story', 'Lego Star Wars the Skywalker Saga', 0);

INSERT INTO gast (KID, vorname, nachname, Email, Geburtstag, Telefonnummer) VALUES
(1, 'Luis', 'Schumacher', 'Luis@3test.de', 20031210, 49123412341234),
(2, 'Nico', 'Schumacher', 'Nico@test.de', 20031210, 49123412341234),
(3, 'Nico', 'Schumacher', 'Nico@test.de', 20031210, 49123412341234),
(4, 'avner', 'Netalov', 'Avner.Nektalov@L-Bank.de', 20000928, 49123412341234),
(5, 'Luis', 'Schumacher', 'Luisschumacher4@web.de', 20040901, 49123412341234),
(6, 'Maxi', 'Loock', 'maxi.loock@L-bank.de', 20041209, 49123412341234),
(7, 'Maxi', 'Loock', 'test14430706@test.de', 20040901, 49123412341234);

INSERT INTO lieblingsgame (LGID, KID, GID) VALUES
(1, 3, 1),
(2, 4, 1),
(3, 5, 1),
(4, 6, 1),
(5, 7, 11);

INSERT INTO mitbringen (MBID, KID, FoodID) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 5, 5),
(5, 6, 3),
(6, 7, 4); 