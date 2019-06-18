CREATE DATABASE prova02;
use prova02;

CREATE TABLE usuario(
	id INT PRIMARY KEY auto_increment,
    usuario VARCHAR(10),
    nome VARCHAR(50),
    data_nasc  DATE,
    cpf VARCHAR(20)
    perfil VARCHAR(45)
);

SELECT * FROM usuario;