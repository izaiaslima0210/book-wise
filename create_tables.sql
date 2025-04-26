CREATE TABLE IF NOT EXISTS user (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS book (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER,
    title TEXT NOT NULL,
    author TEXT NOT NULL,
    description TEXT,
    cover_image TEXT,
    rating INTEGER DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE SET NULL
);

INSERT INTO user (name, email) VALUES
('Izaias Junior', 'jrportorico@gmail.com');
INSERT INTO book (user_id, title, author, description, cover_image, rating) VALUES
(1, 'O Senhor dos Anéis', 'J.R.R. Tolkien', 'Uma jornada épica pela Terra Média em busca de destruir o Um Anel.', 'https://placehold.co/155x220?text=O+Senhor+dos+Anéis', 5),
(1, '1984', 'George Orwell', 'Um romance distópico sobre um regime totalitário e vigilância constante.', 'https://placehold.co/155x220?text=1984', 5),
(1, 'Dom Quixote', 'Miguel de Cervantes', 'As aventuras de um cavaleiro que luta contra moinhos de vento.', 'https://placehold.co/155x220?text=Dom+Quixote', 4),
(1, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Uma história poética sobre amizade, amor e perda.', 'https://placehold.co/155x220?text=O+Pequeno+Príncipe', 5),
(1, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'O início da jornada mágica de Harry Potter em Hogwarts.', 'https://placehold.co/155x220?text=Harry+Potter', 5),
(1, 'A Revolução dos Bichos', 'George Orwell', 'Uma sátira política sobre uma fazenda governada por animais.', 'https://placehold.co/155x220?text=A+Revolução+dos+Bichos', 4),
(1, 'O Código Da Vinci', 'Dan Brown', 'Um thriller que explora segredos escondidos na arte e na história.', 'https://placehold.co/155x220?text=O+Código+Da+Vinci', 4),
(1, 'A Culpa é das Estrelas', 'John Green', 'Uma história emocionante sobre amor e superação.', 'https://placehold.co/155x220?text=A+Culpa+é+das+Estrelas', 5),
(1, 'O Alquimista', 'Paulo Coelho', 'Uma jornada espiritual em busca de um tesouro pessoal.', 'https://placehold.co/155x220?text=O+Alquimista', 4);

