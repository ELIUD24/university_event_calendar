CREATE DATABASE university_events;
USE university_events;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(15),
    password VARCHAR(255),
    role ENUM('student', 'staff')
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    location VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    seat_limit INT NOT NULL
);

INSERT INTO events (title, description, date, time, location, category, seat_limit) VALUES
-- Academic Events
('Engineering Seminar', 'A seminar discussing the latest advancements in engineering.', '2025-04-15', '10:00:00', 'Engineering Hall', 'academic', 100),
('Law Conference', 'A conference on modern legal challenges.', '2025-04-20', '14:00:00', 'Law Auditorium', 'academic', 80),

-- Cultural Events
('Traditional Dance Show', 'Experience the beauty of traditional dances.', '2025-04-18', '18:00:00', 'Cultural Center', 'cultural', 150),
('Poetry Night', 'An evening of poetry and spoken word performances.', '2025-04-25', '19:00:00', 'University Theatre', 'cultural', 120),

-- Sports Events
('Football Tournament', 'Inter-school football championship.', '2025-04-10', '16:00:00', 'Sports Complex', 'sports', 200),
('Basketball Finals', 'Final match of the university basketball league.', '2025-04-12', '17:30:00', 'Main Gymnasium', 'sports', 180),

-- Technology Events
('AI Workshop', 'Learn about artificial intelligence and machine learning.', '2025-04-22', '11:00:00', 'Tech Lab', 'technology', 90),
('Cybersecurity Seminar', 'Discussion on modern cybersecurity threats and solutions.', '2025-04-28', '15:00:00', 'Tech Auditorium', 'technology', 100),

-- Career & Networking Events
('Job Fair', 'Meet recruiters from top companies.', '2025-04-08', '09:00:00', 'Main Hall', 'career_networking', 250),
('Resume Workshop', 'Improve your resume with professional feedback.', '2025-04-14', '13:00:00', 'Career Center', 'career_networking', 80),

-- Community & Charity Events
('Blood Donation Drive', 'Donate blood and save lives.', '2025-04-05', '10:00:00', 'Health Center', 'community_charity', 300),
('Tree Planting Day', 'Join us in making the campus greener.', '2025-04-30', '08:00:00', 'University Park', 'community_charity', 200),

-- Research & Innovation Events
('Science Exhibition', 'Showcasing innovative student projects.', '2025-04-17', '12:00:00', 'Research Wing', 'research_innovation', 100),
('Tech Startup Pitch', 'Pitch your startup idea to investors.', '2025-04-26', '15:00:00', 'Innovation Hub', 'research_innovation', 50),

-- Entertainment & Social Events
('Music Concert', 'Live concert featuring top student bands.', '2025-04-16', '19:00:00', 'Open Grounds', 'entertainment_social', 500),
('Movie Night', 'Watch a classic film under the stars.', '2025-04-29', '20:00:00', 'Outdoor Amphitheater', 'entertainment_social', 400),

-- Spiritual Events
('Sunday Service', 'Join us for a morning church service.', '2025-04-07', '10:00:00', 'Chapel', 'spiritual', 250),
('Meditation Retreat', 'Experience a peaceful meditation session.', '2025-04-21', '17:00:00', 'Spiritual Center', 'spiritual', 100);
