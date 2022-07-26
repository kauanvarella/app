CREATE DATABASE dbprojeto
GO

USE dbprojeto
GO

create table cadastros (
    cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    usuario VARCHAR(50) NOT NULL, senha VARCHAR(50) NOT NULL
)
GO
