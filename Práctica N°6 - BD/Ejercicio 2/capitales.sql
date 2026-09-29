CREATE DATABASE IF NOT EXISTS Capitales
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE Capitales;

CREATE TABLE IF NOT EXISTS ciudades (
    id_ciudad INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    habitantes INT NOT NULL,
    superficie DECIMAL(10,2) NOT NULL,
    tieneMetro TINYINT(1) NOT NULL
);

INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES
('México D.F.', 'México', 555666, 23434.34, 1),
('Barcelona', 'España', 444333, 1111.11, 0),
('Buenos Aires', 'Argentina', 888111, 333.33, 1),
('Medellín', 'Colombia', 999222, 888.88, 0),
('Lima', 'Perú', 999111, 222.22, 0),
('Caracas', 'Venezuela', 111222, 111.11, 1),
('Santiago', 'Chile', 777666, 222.22, 1),
('Antigua', 'Guatemala', 444222, 877.33, 0),
('Quito', 'Ecuador', 333111, 999.11, 1),
('La Habana', 'Cuba', 111222, 333.11, 0);