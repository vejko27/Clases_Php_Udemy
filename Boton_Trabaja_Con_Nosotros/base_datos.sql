-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS trabaja_con_nosotros;
USE trabaja_con_nosotros;

-- Crear tabla de candidatos
CREATE TABLE IF NOT EXISTS candidatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    disposicion VARCHAR(50) NOT NULL,
    cv_nombre VARCHAR(255) NOT NULL,
    cv_ruta VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('nuevo', 'revisado', 'rechazado', 'seleccionado') DEFAULT 'nuevo',
    notas TEXT,
    INDEX idx_email (email),
    INDEX idx_fecha (fecha_registro)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
