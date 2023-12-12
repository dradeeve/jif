create database jif;
use jif;
create table usuario (
id int auto_increment  primary key,
nome varchar(255),
email varchar(255),
senha varchar(255));
select * from usuario;

create table competicoes(id int primary key auto_increment,
nome varchar(100),
descricao varchar(1000),
categoria varchar(60),
datac date);

create table atletas(id int primary key auto_increment,
nome varchar(100),
datan date,
genero varchar(20),
altura decimal(5,2),
peso decimal (5,2));
insert into atletas (nome, datan, genero, altura, peso) values ('Evelyn', '2005-09-05', 'Feminino', 1.65, 62);
select * from atletas;