CREATE DATABASE IF NOT EXISTS cineDB;
USE cineDB;

CREATE TABLE IF NOT EXISTS peliculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    genero VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS cines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    ubicacion VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS horarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    id_pelicula INT,
    id_cine INT,
    FOREIGN KEY (id_pelicula) REFERENCES peliculas(id) ON DELETE CASCADE,
    FOREIGN KEY (id_cine) REFERENCES cines(id) ON DELETE CASCADE
);


INSERT INTO peliculas (nombre, genero) VALUES
('Inception', 'Ciencia Ficción'),
('The Dark Knight', 'Acción'),
('Interstellar', 'Ciencia Ficción'),
('The Matrix', 'Acción'),
('The Lion King', 'Animación'),
('Avengers: Endgame', 'Acción'),
('Titanic', 'Romántico'),
('Forrest Gump', 'Drama'),
('The Shawshank Redemption', 'Drama'),
('The Godfather', 'Crimen'),
('Pulp Fiction', 'Crimen'),
('Jurassic Park', 'Aventura'),
('Star Wars: A New Hope', 'Ciencia Ficción'),
('The Wizard of Oz', 'Fantasía'),
('Gladiator', 'Acción');

INSERT INTO cines (nombre, ubicacion) VALUES
('Cineplex Centro', 'Calle Ficticia 123, Ciudad X'),
('CineWorld Plaza', 'Avenida Real 45, Ciudad Y'),
('CineMax', 'Carrera 7, Bogotá'),
('CinePlex City', 'Avenida de la Estrella 88, Ciudad Z'),
('CineShowtime', 'Avenida Libertad 77, Ciudad W');

INSERT INTO horarios (hora_inicio, hora_fin, id_pelicula, id_cine) VALUES
('10:40:00', '12', 1, 1),
('12:00:00', '15:50:00', 2, 1),
('14:20:00', '16:30:00', 3, 1), 
('16:50:00', '19:00:00', 4, 1), 
('19:00:00', '22:00:00', 5, 1),
('10:20:00', '12:00:00', 6, 2), 
('12:30:00', '15:50:00', 7, 2), 
('14:50:00', '17:00:00', 8, 2),
('17:00:00', '19:30:00', 9, 2), 
('20:00:00', '22:00:00', 10, 2), 
('10:05:00', '12:00:00', 11, 3), 
('12:20:00', '15:00:00', 12, 3),
('14:20:00', '16:00:00', 13, 3),
('16:00:00', '19:50:00', 14, 3), 
('19:50:00', '22:00:00', 15, 3),
('10:30:00', '12:50:00', 1, 4),
('12:30:00', '15:30:00', 2, 4),  
('14:00:00', '17:30:00', 3, 4), 
('17:50:00', '19:00:00', 4, 4), 
('20:00:00', '22:00:00', 5, 4), 
('10:00:00', '12:00:00', 6, 5), 
('12:20:00', '15:50:00', 7, 5), 
('14:00:00', '16:00:00', 8, 5),  
('16:00:00', '19:00:00', 9, 5), 
('19:30:00', '22:30:00', 10, 5),
('10:20:00', '12:50:00', 11, 1),
('12:00:00', '15:00:00', 12, 1),  
('14:50:00', '16:00:00', 13, 1), 
('16:00:00', '19:50:00', 14, 1),  
('19:30:00', '22:50:00', 15, 1),  
('10:00:00', '12:00:00', 1, 2), 
('12:05:00', '15:30:00', 2, 2),  
('14:20:00', '16:00:00', 3, 2),  
('16:20:00', '19:00:00', 4, 2),  
('19:00:00', '22:30:00', 5, 2);  