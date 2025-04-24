CREATE DATABASE banco;

USE banco;

CREATE TABLE administradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO administradores (email, senha) 
VALUES ('teste@teste.com', '$2y$10$fgaFNPMAgLvjUjB1PQuQRO7budM5Gw0OM6c6gZsm3pf/0zRb.W4bm');

