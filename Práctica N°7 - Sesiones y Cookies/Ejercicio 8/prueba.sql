CREATE DATABASE IF NOT EXISTS prueba;

USE prueba;

CREATE TABLE IF NOT EXISTS buscador (
    canciones VARCHAR(255) NOT NULL
);

INSERT INTO buscador (canciones) VALUES
('Persiana Americana - Soda Stereo'),
('Ji Ji Ji - Patricio Rey y sus Redonditos de Ricota'),
('11 y 6 - Fito Páez');