CREATE DATABASE file_upload_db;

USE file_upload_db;

CREATE TABLE files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    textContent TEXT
);