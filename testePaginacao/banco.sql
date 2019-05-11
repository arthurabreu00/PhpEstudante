CREATE DATABASE testePaginacao;



CREATE TABLE usuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100)
);

INSERT  INTO usuario(nome) VALUES('Arthur Tavares');


use testePaginacao;
SELECT * FROM usuario LIMIT 10,10;



