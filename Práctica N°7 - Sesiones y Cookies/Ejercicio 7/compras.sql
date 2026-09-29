CREATE DATABASE IF NOT EXISTS Compras;

USE Compras;

CREATE TABLE IF NOT EXISTS catalogo (
    id_producto VARCHAR(100) PRIMARY KEY,
    precio DECIMAL(9,2) NOT NULL
);

INSERT INTO catalogo (id_producto, precio) VALUES
('Coca Cola', 3000.00),
('Fernet', 20000.00),
('Agua', 1500.00);
