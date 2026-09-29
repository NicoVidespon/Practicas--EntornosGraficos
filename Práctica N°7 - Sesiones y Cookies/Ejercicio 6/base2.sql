CREATE DATABASE IF NOT EXISTS base2;

USE base2;

CREATE TABLE IF NOT EXISTS alumnos (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    codigocurso INT NOT NULL,
    mail VARCHAR(100) NOT NULL
);

INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
('Nicolas Videspon', 1, 'nicolasv@gmail.com');
