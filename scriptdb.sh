#!/bin/bash

sudo docker exec -it db bash
mysql -u root -proot
create database dbprojeto;
use dbprojeto;
create table cadastros(cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY, usuario VARCHAR(50) NOT NULL, senha VARCHAR(50) NOT NULL);