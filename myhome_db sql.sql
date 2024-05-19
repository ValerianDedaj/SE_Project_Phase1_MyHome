CREATE DATABASE IF NOT EXISTS myhome_db;
USE myhome_db;

CREATE TABLE IF NOT EXISTS contractors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    service VARCHAR(100) NOT NULL,
    property_type VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    accepted BOOLEAN DEFAULT 0
);