create database usuarios_cadastrados;
use usuarios_cadastrados;
create table usuario (
id int auto_increment  primary key,
nome varchar(255),
email varchar(255),
senha varchar(255));
select * from usuario;

