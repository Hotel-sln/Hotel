CREATE DATABASE hotel_menton CHARACTER SET 'utf8';

CREATE USER 'menton' IDENTIFIED BY 'citron';
GRANT ALL privileges ON `hotel_menton`.* TO 'menton'@'%';
FLUSH PRIVILEGES;