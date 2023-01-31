Create database cadastro;
use cadastro; 
create table usuarios(
id INT NOT NULL AUTO_INCREMENT,
nome varchar (50),
Email text,
telefone varchar(15),
CPF varchar(15),
data_nascimento varchar(50),
Tipo_carteira varchar(50),
primary key(id));


select * from usuarios;

-- função deletar usuario
delete from usuarios where id = 9;
