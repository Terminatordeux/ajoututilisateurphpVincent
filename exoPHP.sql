CREATE DATABASE exoPHP;
USE exoPHP;
CREATE table utilisateurs(
    id_util int primary key auto_increment not null,
    nom_util varchar(50) not null,
    prenom_util varchar(50) not null,
    mail_util varchar(50) not null,
    mdp_util varchar(100) not null,
    img_util varchar(100) not null
)engine= InnoDB;