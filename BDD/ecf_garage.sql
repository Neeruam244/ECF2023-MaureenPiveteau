-- Active: 1689165483012@@127.0.0.1@3306@ecf

-- Pour créer ma base de donnée, je me suis servi de l'extension MYSQL de "Weijan Chen". Une fois installé on clique sur l'icône de la base de donnée situé dans la barre latéral gauche 
-- puis sur le +. Ensuite je me suis connecté à mon server PHPmyAdmin en rentrant les informations demandés: name: localhost, server type: MariaDB, username: root, password:, et port:3306
-- et j'ai cliqué sur Connect. Une fois que l'onglet localhost apparait, il faut à nouveau cliqué sur + pour initialité la base de données

        -- DATABASE INITIALIZATION 
-- CREATE DATABASE ecf; 


        -- STRUCTURE OF TABLE 'opinions' --
--CREATE TABLE opinions(
--    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    client_name VARCHAR(50) NOT NULL, 
--    opinion TEXT NOT NULL, 
--    imgNote VARCHAR(255) DEFAULT NULL);

        -- DATA DOWNLOAD --
-- INSERT INTO opinions (client_name, opinion, imgNote) VALUES 
--    ('Nicolas COUDRINO', 'Super acceuil ! Le prix des prestations sont correts et les devis sont transmis avant chaque réparation pour ne pas avoir de surpise !','/uploads/etoiles avis/5stars.jpg');


        -- STRUCTURE OF TABLE 'publish_opinion' --
--CREATE TABLE publish_opinion (
--    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    client_name VARCHAR(50) NOT NULL, 
--    opinion TEXT NOT NULL, 
--    imgNote VARCHAR(255) DEFAULT NULL);

        -- DATA DOWNLOAD --
--INSERT INTO publish_opinions (client_name, opinion, imgNote) VALUES 
--    ('Sebastien REPEROT', 'Très bon garage. Réparation rapide et de qualité. equipe à l''écoute des clients.','/uploads/etoiles avis/5stars.jpg'),
--    ('Matthieu MOURET', 'Un garage moins grand qu''une concession et pourtant un accueil chaleureux et des véhicules à des prix corrects.', '/uploads/etoiles avis/5stars.jpg'), 
--    ('Allan GAPORIT', 'Garage très professionnel et à l''écoute des ses clients', '/uploads/etoiles avis/5stars.jpg'), 
--    ('Jonathan JUSPIN', 'Profesionnels sérieux et honnêtes', '/uploads/etoiles avis/5stars.jpg'),
--    ('Caroline RAUTUREAU', 'Très bien reçu. Bons conseils et à l''écoute', '/uploads/etoiles avis/4stars.jpg');


        -- STRUCTURE OF TABLE 'planning' --
--CREATE TABLE planning(
--    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    planning1 VARCHAR(50) NOT NULL, 
--    hours1 VARCHAR(50) NOT NULL, 
--    planning2 VARCHAR(50),
--    hours2 VARCHAR(50),
--    planning3 VARCHAR(50),
--    hours3 VARCHAR(50));

        -- DATA DOWNLOAD --
--INSERT INTO planning (planning1, hours1, planning2, hours2) VALUES 
--    ('Du lundi au vendredi', '08h00-12h30 14h30-18h30', 'Samedi', '08h00-12h00');


        -- STRUCTURE OF TABLE 'services' --
--CREATE TABLE services(
--    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    title VARCHAR(50) NOT NULL, 
--    content TEXT NOT NULL, 
--    picture VARCHAR(255) DEFAULT NULL);

        -- DATA DOWNLOAD --
--INSERT INTO services (title, content, picture) 
--VALUES 
--    ('Atelier de mécanique automobile', 
--    'Des techniciens qualifiés et régulièrement formés s’occupent de votre voiture au sein de nos ateliers pour toutes les interventions d’entretien courant.
--        - Diagnostique et recherche de panne électrique
--        - Préparartion au contrôle technique
--        - Pneumatiques
--        - Freinage
--        - Echappement',
--    'uploads/services/mecanique'),
--    ('Atelier de carrosserie', 
--    'Qualifiés et expérimentés nos carrossiers-peintre disposent d''un outillage de pointe pour effectuer tous les travaux de tôlerie, carrosserie et peinture.
--        - Débosselage sans peinture
--        - Toterie ou peinture
--        - Réparartion ou changement de parebrise
--        - Vitres surteintés',
--    'uploads/services/carrosserie'),
--    ('Service entretien', 
--    'Nos techniciens qualifiés s’occupent de votre voiture pour toutes les interventions de maintenance.
--        - Changement d''essuie-galce
--        - Eclairage
--        - Vidange
--        - Climatisation
--        - Batterie',
--    'uploads/services/entretien');


        -- STRUCTURE OF TABLE CARS --
--CREATE TABLE cars(
--    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    brand VARCHAR(50) NOT NULL,
--    model VARCHAR(50) NOT NULL,
--    description VARCHAR(50) NOT NULL,
--    created_at VARCHAR(50) NOT NULL,
--    year INTEGER,
--    mileage VARCHAR(50) NOT NULL,
--    energy VARCHAR(50) NOT NULL,
--    price VARCHAR(50) NOT NULL,
--    transmission VARCHAR(50) NOT NULL,
--    color VARCHAR(50) NOT NULL,
--    doors_number INTEGER NOT NULL,
--    fiscal_power VARCHAR(50) NOT NULL,
--    interior_equipments TEXT NOT NULL,
--    exterior_equipments TEXT NOT NULL,
--    security_equipments TEXT NOT NULL,
--    others_equipments TEXT NOT NULL,
--  image varchar(255) DEFAULT NULL);

        -- DATA DOWNLOAD --
--INSERT INTO cars (brand, model, description, created_at, year, mileage, energy, price, transmission, color, doors_number, fiscal_power, interior_equipments, 
--exterior_equipments, security_equipments, others_equipments, image) VALUES (
--    'Jeep',
--    'Compass 2',
--    'mjet 170 4awd',
--    '18/05/2018',
--    2018,
--    '147 222 km',
--    'Diesel',
--    '24 680 €',
--    'Automatique',
--    'Gris anthracite',
--    5,
--    '9CV',
--    'Volant cuir multifonctions et réglable, palette au volant, ordinateur de bord, accoudoir avant central, régulateur et limitateur de vitesse,
--    9 hauts parleurs, carte main libre, climatisation automatique multizonage, fermeture électrique, GPS, prise audio USB et auxiliaires, vitres électriques, 
--   écran tactile',
--    'Aide parking, jantes alu, rétroviseurs électriques et dégivrants, barre de toit',
--    'ESP, antipatinage, ABS, aide au démarrage en côte, AFU, alerte franchissement de lignes, contrôle de pression des pneus, projecteurs antibrouillard,
--    feux av et a. à LED, feux automatiques, essuie glaces automatiques, radar anti-collusion, EBD',
--    'Apuis-tête avant actifs, commandes du sysytème audio au volant, commandes vocales, démarrage sans clé, éclairage d''ambiance, écran multifonction couleurs,
--    interface média, système start & stop, TMC, système audio',
--    'uploads/cars/compass2/avant.jpg, uploads/cars/compass2/côté.jpg, uploads/cars/compass2/arrière.jpg, uploads/cars/compass2/tableau de bord.jpg, 
--    uploads/cars/compass2/intérieuravant.jpg, uploads/cars/compass2/toit.jpg');

        -- STRUCTURE OF TABLE 'users' --

--CREATE TABLE users(
--    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
--    first_name VARCHAR(50) NOT NULL,
--    last_name VARCHAR(50) NOT NULL,
--    email VARCHAR(50) NOT NULL,
--    password VARCHAR(50) NOT NULL, 
--    role VARCHAR(50) NOT NULL);

        -- DOWNLOAD DATA --
--INSERT INTO users (first_name, last_name, email, password, role) VALUES 
--    ('PARROT', 'Vincent', 'test@test.fr', 'test', 'administrateur'),
--    ('PIVETEAU', 'Maureen', 'piveteau.maureen@gmail.com', '1234', 'employé');*/
