CREATE TABLE IF NOT EXISTS singers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    nationality VARCHAR(100) NOT NULL,
    genre VARCHAR(100) NOT NULL
);

INSERT INTO singers (name, nationality, genre) VALUES
('Shakira', 'Colombia', 'Pop'),
('Bad Bunny', 'Puerto Rico', 'Reggaeton'),
('Freddie Mercury', 'Reino Unido', 'Rock'),
('Rosalía', 'España', 'Flamenco Pop'),
('Bob Marley', 'Jamaica', 'Reggae'),
('Adele', 'Reino Unido', 'Soul');
