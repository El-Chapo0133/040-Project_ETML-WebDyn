-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.1              
-- * Generator date: Dec  4 2018              
-- * Generation date: Mon Apr  8 08:54:45 2019 
-- ********************************************* 


-- Database Section
-- ________________ 

DROP DATABASE IF EXISTS CrunchyDB;
CREATE DATABASE IF NOT EXISTS CrunchyDB;
use CrunchyDB;

-- User Section
-- ____________

DROP USER IF EXISTS 'projet040_levequelo'@'localhost';
CREATE USER IF NOT EXISTS 'projet040_levequelo'@'localhost' IDENTIFIED BY '.Etml-' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT SELECT, INSERT, UPDATE, DELETE ON `crunchydb`.* TO 'projet040_levequelo'@'localhost';

-- Tables Section
-- _____________ 

create table `Is` (
     idCategoryDishes integer unsigned not null,
     idDishes integer unsigned not null,
     constraint ID_Is_ID primary key (idCategoryDishes, idDishes));

create table t_categoryDish (
     catName varchar(50) not null,
     catImages varChar(255) not null,
     idCategoryDishes integer unsigned not null auto_increment,
     constraint ID_t_categoryDish_ID primary key (idCategoryDishes));

create table t_comment (
     idComment integer unsigned not null auto_increment,
     comDate date not null,
     comUser varchar(128) not null,
     comMessage varchar(254) not null,
     idDishes integer unsigned not null,
     idUser integer unsigned not null,
     constraint ID_t_comment_ID primary key (idComment));

create table t_dish (
     disName varchar(70) not null,
     disPeopleAmount Float Unsigned not null,
     disDifficulty tinyint unsigned not null,
     disIngridients varchar(1024) not null,
     disRecepy varchar(1024) not null,
     disImage varchar(255) not null,
     disCreationDate date not null,
     idDishes integer unsigned not null auto_increment,
     idUser integer unsigned not null,
     idCategory integer unsigned not null,
     constraint ID_t_dish_ID primary key (idDishes));

create table t_user (
     useName varchar(70) not null,
     useSurName varchar(70) not null,
     useUsername varchar(128) not null,
     useEMail varchar(254) not null,
     useIsAdmin char not null,
     idUser integer unsigned not null auto_increment,
     constraint ID_t_user_ID primary key (idUser));


-- Constraints Section
-- ___________________ 

alter table `Is` add constraint FKIs_t_d_FK
     foreign key (idDishes)
     references t_dish (idDishes);

alter table `Is` add constraint FKIs_t_c
     foreign key (idCategoryDishes)
     references t_categoryDish (idCategoryDishes);

alter table t_comment add constraint FKHave_FK
     foreign key (idDishes)
     references t_dish (idDishes);

alter table t_comment add constraint FKEnter_FK
     foreign key (idUser)
     references t_user (idUser);

-- Not implemented
-- alter table t_dish add constraint ID_t_dish_CHK
--     check(exists(select * from Is
--                  where Is.idDishes = idDishes)); 

alter table t_dish add constraint FKCreate_FK
     foreign key (idUser)
     references t_user (idUser);


-- Index Section
-- _____________ 

create unique index ID_Is_IND
     on `Is` (idCategoryDishes, idDishes);

create index FKIs_t_d_IND
     on `Is` (idDishes);

create unique index ID_t_categoryDish_IND
     on t_categoryDish (idCategoryDishes);

create unique index ID_t_comment_IND
     on t_comment (idComment);

create index FKHave_IND
     on t_comment (idDishes);

create index FKEnter_IND
     on t_comment (idUser);

create unique index ID_t_dish_IND
     on t_dish (idDishes);

create index FKCreate_IND
     on t_dish (idUser);

create unique index ID_t_user_IND
     on t_user (idUser);

-- Insert Section
-- ______________

INSERT INTO t_user (useName, useSurName, useUsername, useEMail, useIsAdmin, idUser) VALUES ('Levêque', 'Loris', 'El-Chapo', 'levequelo@etml.educanet2.ch', 'y', '1');
INSERT INTO t_user (useName, useSurName, useUsername, useEMail, useIsAdmin, idUser) VALUES ('Dos Santo', 'Gonçalo', 'depso', 'dossantogo@etml.educanet2.ch', 'y', '2');
INSERT INTO t_user (useName, useSurName, useUsername, useEMail, useIsAdmin, idUser) VALUES ('Mveng', 'Antoine', 'La voiture de riche', 'antoine.mveng@vd.ch', 'y', '3');
INSERT INTO t_user (useName, useSurName, useUsername, useEMail, useIsAdmin, idUser) VALUES ('Miguel', 'Pack', 'bière-man', 'vive-la-biere@gmail.com', 'n', '4');

INSERT INTO t_categoryDish (catName, catImages, idCategoryDishes) VALUES ('Viandes', 'viande.cat.jpeg', '1');
INSERT INTO t_categoryDish (catName, catImages, idCategoryDishes) VALUES ('Salades', 'salade.cat.jpeg', '2');
INSERT INTO t_categoryDish (catName, catImages, idCategoryDishes) VALUES ('Desserts', 'dessert.cat.jpeg', '3');

INSERT INTO t_dish (disName, disPeopleAmount, disDifficulty, disIngridients, disRecepy, disImage, disCreationDate, idDishes, idUSer) VALUES ('Salade Cesar au Poulet', '2', '1', '200 g de feuilles de laitue
     \n\2blancs de poulet cuits
     \n\r1 grossse poignée de croûtons de pain
     \n\r60 g de copeaux de parmesan
     \n\r1 gousse d\'ail
     \n\rle jus d\'un citron
     \n\r5 cl de sauce tartare
     \n\rsel, poivre', 'Nettoyez et essorez la laitue.
     \n\rDécoupez les blancs de poulet en morceaux.
     \n\rPelez et hachez l\'ail.
     \n\rMélangez dans un saladier la sauce tartare, le jus de citron, l\'ail, du sel et du poivre.
     \n\rAjoutez la laitue, le poulet, les copeaux de parmesan, les croûtons de pain et mélangez bien.
     \n\rRéservez au frais jusqu\'au service.', 'SaladeCesar_Poulet.jpg', '2019-04-08', '1', '1');
INSERT INTO `t_dish` (`disName`, `disPeopleAmount`, `disDifficulty`, `disIngridients`, `disRecepy`, `disImage`, `disCreationDate`, `idDishes`, `idUser`) VALUES
('Brownies au nutella', 5, 1, '125 ml de farine\r\n1ml de sel\r\n2 œufs\r\n250ml de nutella\r\n125ml de cassonade\r\n5ml d\'extrait de vanille\r\n125 ml de beurre non salé fondu', 'Placer la grille au centre du four. Préchauffer le four à 170 °C (325 °F). Tapisser le fond d\'un moule carré de 20 cm (8 po) d\'une bande de papier parchemin en le laissant dépasser de chaque côté. Beurrer les deux autres côtés.\r\nDans un bol, mélanger la farine et le sel. Réserver.\r\nDans un autre bol, fouetter les oeufs, la tartinade aux noisettes, la cassonade et la vanille au batteur électrique jusqu\'à ce que le mélange soit lisse et homogène, soit environ 2 minutes. À basse vitesse, incorporer les ingrédients secs en alternant avec le beurre fondu.\r\nRépartir dans le moule. Cuire de 35 à 40 minutes jusqu\'à ce qu\'un cure-dent inséré au centre du gâteau en ressorte avec des grumeaux et non pas complètement propre.\r\nLaisser refroidir dans le moule, soit environ 2 heures. Démouler et couper en carrés.\r\nServir tiède ou froid.', 'BrowniesNutella.jpg', '2019-04-08', '2', '2');
INSERT INTO `t_dish` (`disName`, `disPeopleAmount`, `disDifficulty`, `disIngridients`, `disRecepy`, `disImage`, `disCreationDate`, `idDishes`, `idUser`) VALUES ('Poulet Style KFC', '2', '2', 'Des morceaux de poulet de votre choix
De la farine
Du lait
Un oeuf
1/3 de cuillère à soupe de sel
1 cuillère à soupe de poivre noir
1/2 cuillère à soupe de basilic
1/3 de cuillère à soupe d’origan
1 cuillère à soupe de sel au céleri
1 cuillère à soupe de moutarde en poudre
4 cuillères à soupe de paprika
1 cuillère à soupe de sel à l’ail
1 cuillère à soupe de gingembre moulu
1 cuillère à soupe de poivre blanc', 'Faire chauffer de l’huile dans une poêle en fonte.

Dans un bol, mélanger 240 grammes de farine, le sel, le poivre noir, le basilic, l\'origan, le céleri, la moutarde en poudre, le paprika, le sel à l’ail, le gingembre moulu et le poivre blanc.

Dans un autre bol, ajouter du lait et un œuf et mélanger. Y incorporer le poulet, puis le tremper dans le mélange de farine et d’épices. Faire frire le poulet dans la poêle pendant 10 à 15 minutes. Laisser un peu refroidir avant de déguster.', 'PouletKFC.jpg', '2019-04-08', '3', '2');

INSERT INTO `Is` (`idCategoryDishes`, `idDishes`) VALUES ('2', '1');
INSERT INTO `Is` (`idCategoryDishes`, `idDishes`) VALUES ('3', '2');
INSERT INTO `Is` (`idCategoryDishes`, `idDishes`) VALUES ('1', '3');  