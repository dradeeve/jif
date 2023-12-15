create database jif;
use jif;
create table usuario(
id int auto_increment  primary key,
nome varchar(255),
email varchar(255),
senha varchar(255),
usuario_admin BIT DEFAULT 0);
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

INSERT INTO usuario (nome, email, senha, usuario_admin) VALUES 
('Evellyn Costa', 'eve@eve.com', 'eve123', 1);	
INSERT INTO atletas (nome, datan, genero, altura, peso) VALUES
('Evelyn', '2005-09-05', 'Feminino', 1.65, 62),
('Lucas', '1998-03-15', 'Masculino', 1.78, 80),
('Isabela', '2000-12-10', 'Feminino', 1.70, 55), 
('Carlos', '1995-07-20', 'Masculino', 1.85, 90), 
('Ana', '2003-05-02', 'Feminino', 1.60, 58), 
('Rafael', '1992-09-18', 'Masculino', 1.75, 75);
select * from atletas;