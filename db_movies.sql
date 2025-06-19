-- Table for storing movie information
CREATE TABLE movies (
    movie_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    release_year INT,
    duration INT, -- Duration in minutes
    rating DECIMAL(3,1), -- IMDb or user rating (e.g., 8.5)
    poster_url VARCHAR(255), -- URL to movie poster image
    trailer_url VARCHAR(255), -- URL to trailer video
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table for genres
CREATE TABLE genres (
    genre_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE
);

-- Junction table for movie-genre relationship (many-to-many)
CREATE TABLE movie_genres (
    movie_id INT,
    genre_id INT,
    PRIMARY KEY (movie_id, genre_id),
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE,
    FOREIGN KEY (genre_id) REFERENCES genres(genre_id) ON DELETE CASCADE
);

-- Table for countries
CREATE TABLE countries (
    country_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE
);

-- Junction table for movie-country relationship (many-to-many)
CREATE TABLE movie_countries (
    movie_id INT,
    country_id INT,
    PRIMARY KEY (movie_id, country_id),
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE,
    FOREIGN KEY (country_id) REFERENCES countries(country_id) ON DELETE CASCADE
);

-- Table for directors
CREATE TABLE directors (
    director_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Junction table for movie-director relationship (many-to-many)
CREATE TABLE movie_directors (
    movie_id INT,
    director_id INT,
    PRIMARY KEY (movie_id, director_id),
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE,
    FOREIGN KEY (director_id) REFERENCES directors(director_id) ON DELETE CASCADE
);

-- Table for actors
CREATE TABLE actors (
    actor_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Junction table for movie-actor relationship (many-to-many)
CREATE TABLE movie_actors (
    movie_id INT,
    actor_id INT,
    PRIMARY KEY (movie_id, actor_id),
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE,
    FOREIGN KEY (actor_id) REFERENCES actors(actor_id) ON DELETE CASCADE
);

-- Table for episodes (for TV series)
CREATE TABLE episodes (
    episode_id INT PRIMARY KEY AUTO_INCREMENT,
    movie_id INT,
    season INT,
    episode_number INT,
    title VARCHAR(255),
    duration INT, -- Duration in minutes
    video_url VARCHAR(255) NOT NULL, -- URL to video file
    subtitle_url VARCHAR(255), -- URL to subtitle file (e.g., Vietsub)
    dub_url VARCHAR(255), -- URL to dubbed audio file (if available)
    release_date DATE,
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE
);

-- Table for users
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for user reviews/comments
CREATE TABLE reviews (
    review_id INT PRIMARY KEY AUTO_INCREMENT,
    movie_id INT,
    user_id INT,
    rating DECIMAL(3,1), -- User rating (e.g., 8.5)
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Table for video sources (to support multiple streaming sources)
CREATE TABLE video_sources (
    source_id INT PRIMARY KEY AUTO_INCREMENT,
    movie_id INT, -- For movies
    episode_id INT, -- For episodes (NULL if movie)
    quality VARCHAR(50), -- e.g., 720p, 1080p, 4K
    video_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE,
    FOREIGN KEY (episode_id) REFERENCES episodes(episode_id) ON DELETE CASCADE
);

-- Table for advertisements
CREATE TABLE advertisements (
    ad_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    image_url VARCHAR(255),
    link_url VARCHAR(255),
    start_date DATE,
    end_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Indexes for optimizing search
CREATE INDEX idx_movie_title ON movies(title);
CREATE INDEX idx_movie_release_year ON movies(release_year);
CREATE INDEX idx_episode_movie_id ON episodes(movie_id);
CREATE INDEX idx_review_movie_id ON reviews(movie_id);
