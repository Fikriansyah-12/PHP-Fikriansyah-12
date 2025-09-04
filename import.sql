-- Struktur database testdb
CREATE DATABASE IF NOT EXISTS testdb;
USE testdb;

-- Tabel person
CREATE TABLE IF NOT EXISTS person (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  alamat VARCHAR(255)
);

-- Tabel hobi
CREATE TABLE IF NOT EXISTS hobi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  person_id INT,
  hobi VARCHAR(100),
  FOREIGN KEY (person_id) REFERENCES person(id)
);

-- Data person
INSERT INTO person (nama, alamat) VALUES
('Andi', 'Jakarta'),
('Budi', 'Bandung'),
('Citra', 'Surabaya');

-- Data hobi
INSERT INTO hobi (person_id, hobi) VALUES
(1, 'Membaca'),
(1, 'Sepak Bola'),
(2, 'Renang'),
(2, 'Basket'),
(3, 'Menulis');
