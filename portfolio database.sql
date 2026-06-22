CREATE DATABASE IF NOT EXISTS tithi;
USE tithi;

DROP TABLE IF EXISTS contact_messages;
DROP TABLE IF EXISTS footer_links;
DROP TABLE IF EXISTS social_icons;
DROP TABLE IF EXISTS education_table;
DROP TABLE IF EXISTS projects_table;
DROP TABLE IF EXISTS services_table;
DROP TABLE IF EXISTS home_section;
DROP TABLE IF EXISTS home_table;
DROP TABLE IF EXISTS navbar_table;
DROP TABLE IF EXISTS admin;

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL
);

CREATE TABLE navbar_table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  link VARCHAR(255) NOT NULL,
  is_active TINYINT(1) DEFAULT 0
);

CREATE TABLE home_section (
  id INT AUTO_INCREMENT PRIMARY KEY,
  image_url VARCHAR(255) NOT NULL,
  name VARCHAR(100) NOT NULL,
  role VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  cta_button_text VARCHAR(100) NOT NULL
);

CREATE TABLE home_table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  role VARCHAR(100) NOT NULL,
  description TEXT NOT NULL
);

CREATE TABLE services_table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  icon VARCHAR(100) DEFAULT 'bx-code-alt',
  title VARCHAR(100) NOT NULL,
  description TEXT NOT NULL
);

CREATE TABLE projects_table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  image_url VARCHAR(255) NOT NULL,
  title VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  github_link VARCHAR(255) NOT NULL
);

CREATE TABLE education_table (
  id INT AUTO_INCREMENT PRIMARY KEY,
  year VARCHAR(50) NOT NULL,
  degree VARCHAR(150) NOT NULL,
  description TEXT NOT NULL,
  institution VARCHAR(150) NOT NULL,
  institution_link VARCHAR(255) NOT NULL
);

CREATE TABLE social_icons (
  id INT AUTO_INCREMENT PRIMARY KEY,
  icon_class VARCHAR(100) NOT NULL,
  link VARCHAR(255) NOT NULL
);

CREATE TABLE footer_links (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  url VARCHAR(255) NOT NULL
);

CREATE TABLE contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone_number VARCHAR(50) NOT NULL,
  subject VARCHAR(200) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin123');

INSERT INTO navbar_table (title, link, is_active) VALUES
('Home', '#home', 1),
('Skills', '#services', 0),
('Projects', '#projects', 0),
('Education', '#education', 0),
('Contact', '#contact', 0);

INSERT INTO home_section (image_url, name, role, description, cta_button_text) VALUES
('image.jpg', 'Sanzida Moin Tithi', 'Software Engineer / Competitive Programmer', 'Final-year CSE student at Khulna University of Engineering & Technology (KUET) with hands-on experience in building desktop and web applications. Skilled in C++, PHP/Laravel, Java, Python, JavaScript, MySQL, SQL Server, Git, Bootstrap, Firebase, and Linux/Ubuntu. Solved 390+ problems on Codeforces and interested in scalable, reliable backend systems.', 'Download CV');

INSERT INTO home_table (name, role, description) VALUES
('Sanzida Moin Tithi', 'Software Engineer / Competitive Programmer', 'Final-year CSE student at KUET with experience in desktop applications, dynamic web applications, database systems, and problem solving.');

INSERT INTO services_table (icon, title, description) VALUES
('bx-code-alt', 'Software Engineering', 'I build clean and maintainable applications using C++, Java, Python, PHP, JavaScript, HTML, and CSS.'),
('bx-server', 'Backend & Database Development', 'I design database schemas and implement backend features using Laravel/PHP, MySQL, SQL Server, and MVC architecture.'),
('bx-brain', 'Problem Solving', 'I practice competitive programming and algorithmic problem solving with 390+ solved problems on Codeforces.'),
('bx-desktop', 'Desktop Application Development', 'I develop Java Swing desktop applications with database support, including account and transaction management systems.'),
('bx-camera', 'Computer Vision', 'I work with HSV color detection, morphological operations, contour detection, watershed segmentation, and Gradio interfaces.'),
('bx-cube-alt', 'Graphics & Visualization', 'I build interactive OpenGL projects using GLSL, GLFW, GLAD, GLM, dynamic lighting, animation, and curve surfaces.');

INSERT INTO projects_table (image_url, title, description, github_link) VALUES
('2.jpg', 'LaravelProject-Foodie', 'A full-stack food ordering web application built with Laravel 10. It follows MVC architecture and includes menu browsing, cart management, order processing, Blade templates, and MySQL database integration.', 'https://github.com/Sanzida5'),
('image.jpg', 'Dynamic Portfolio', 'A dynamic personal portfolio website built with PHP, JavaScript, CSS, and MySQL to showcase skills, education, experience, and projects.', 'https://github.com/Sanzida5'),
('3.jpg', 'Colorful Fruit Detection and Counting System', 'A computer vision project that detects and counts fruits using HSV color space, morphological operations, contour detection, hole filling, connected components, distance transform, watershed segmentation, and a Gradio interface.', 'https://github.com/Sanzida5'),
('bank.jpeg', 'Bank Management System', 'A Java Swing desktop application for banking operations such as account creation, deposits, withdrawals, transactions, customer details, and MySQL-based data storage.', 'https://github.com/Sanzida5'),
('2.jpg', 'SWC 3D Interactive Visualization', 'An OpenGL project with directional, point, and spot lighting, Phong and Gouraud shading, animated pedestrians, ceiling fans, doors, TV animation, water ripple effects, procedural textures, Bezier swept surface, Catmull-Rom spline, and ruled surface.', 'https://github.com/Sanzida5');

INSERT INTO education_table (year, degree, description, institution, institution_link) VALUES
('Mar 2022 - Expected Jun 2026', 'B.Sc. in Computer Science and Engineering', 'CGPA: 3.39/4.00 up to 7th semester. Relevant coursework: Data Structures and Algorithms, Operating Systems, Computer Networks, and Database Systems. Currently in 8th semester.', 'Khulna University of Engineering & Technology (KUET)', 'https://www.kuet.ac.bd/'),
('2018 - 2020', 'Higher Secondary Certificate (HSC)', 'Completed HSC from Assasuni Government College, Satkhira, Bangladesh.', 'Assasuni Government College', '#');

INSERT INTO social_icons (icon_class, link) VALUES
('bxl-github', 'https://github.com/Sanzida5'),
('bxl-linkedin-square', '#'),
('bx-envelope', 'mailto:moinsanzida4@gmail.com');

INSERT INTO footer_links (title, url) VALUES
('Home', '#home'),
('Skills', '#services'),
('Projects', '#projects'),
('Education', '#education'),
('Contact', '#contact');
