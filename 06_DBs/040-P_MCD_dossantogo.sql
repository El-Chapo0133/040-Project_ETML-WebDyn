-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.0              
-- * Generator date: Sep  6 2018              
-- * Generation date: Mon Apr  8 09:29:59 2019 
-- * Schema: CrunchyDB/MLD 
-- ********************************************* 


-- Database Section
-- ________________ 

create database CrunchyDB;
use CrunchyDB;


-- Tables Section
-- _____________ 

create table `Is` (
     idCategoryDishes integer unsigned not null,
     idDishes integer unsigned not null,
     constraint ID_Is_ID primary key (idCategoryDishes, idDishes));

create table t_categoryDish (
     catCategory varchar(50) not null,
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
     disIngridients varchar(255) not null,
     disRecepy varchar(255) not null,
     disImage varchar(255) not null,
     disCreationDate date not null,
     idDishes integer unsigned not null auto_increment,
     idUser integer unsigned not null,
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

