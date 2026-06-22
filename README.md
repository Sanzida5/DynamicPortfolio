# Dynamic Portfolio

This is my personal dynamic portfolio website. I developed this project to present my profile, skills, education, projects, resume, and contact information in a professional way.

## Project Overview
<img width="955" height="423" alt="Screenshot 2026-06-22 144455" src="https://github.com/user-attachments/assets/3cd58e94-4a3e-4654-bf4b-20f883dbe96f" />


This portfolio is a PHP and MySQL based dynamic website. The website content is stored in a MySQL database and displayed dynamically using PHP. It includes a home section, skills section, project showcase, education timeline, contact section, resume download option, and admin login system.

## About Me

I am **Sanzida Moin Tithi**, a final-year Computer Science and Engineering student at Khulna University of Engineering & Technology. I am interested in software engineering, backend development, problem solving, desktop application development, computer vision, and computer graphics.

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* JavaScript
* Bootstrap
* XAMPP
* phpMyAdmin

## Features

* Dynamic home section with profile image and introduction
* Skills and focus area section
* Learn More popup for detailed skill descriptions
* Project showcase with images, descriptions, technology tags, and GitHub links
* Education timeline
* Contact form section
* Resume download option
* Admin login system
* MySQL database integration
* Responsive portfolio layout
* Clean dark UI design with cyan highlight color

## Project Preview

### Profile Image

![Profile](profile.jpeg)

### Project Images

#### LaravelProject-Foodie

![LaravelProject-Foodie](7.webp)

#### Bank Management System

![Bank Management System](bank.jpeg)

#### Colorful Fruit Detection and Counting System

![Fruit Detection](OIP.webp)

#### SWC 3D Interactive Visualization

![Computer Graphics Project](pic_front_exterior.png)

## Main Sections

### Home Section

The home section contains my name, role, short introduction, social media links, resume download button, and profile image.

### Skills Section

The skills section displays my main focus areas. Each skill card has a **Learn More** button. When the button is clicked, detailed information appears in a popup.

Focus areas:

* Software Engineering
* Backend & Database Development
* Problem Solving & Competitive Programming
* Computer Vision & Image Processing
* Computer Graphics & Interactive Visualization
* Desktop Application Development
* Tools, Git & Collaboration
* Web Development & Responsive UI

### Projects Section

The projects section displays my major academic and personal projects with images, short descriptions, technology tags, and GitHub links.

Projects included:

* LaravelProject-Foodie
* Dynamic Portfolio
* Colorful Fruit Detection and Counting System
* Bank Management System
* SWC 3D Interactive Visualization

### Education Section

The education section displays my academic background in timeline format.

### Contact Section

The contact section allows visitors to send messages through a contact form.

### Admin Panel

The admin panel is used to access the portfolio management area. It includes admin authentication and logout functionality.

## Database Setup

Database name:

```sql
tithi
```

Import the included SQL file into phpMyAdmin:

```text
portfolio database.sql
```

The database contains tables for:

* Admin login
* Navbar items
* Home section
* Skills section
* Projects section
* Education section
* Social icons
* Footer links
* Contact messages

## How to Run Locally

1. Install XAMPP.
2. Start **Apache** and **MySQL** from XAMPP Control Panel.
3. Copy the project folder into:

```text
C:\xampp\htdocs\
```

4. Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

5. Create a database named:

```text
tithi
```

6. Import the SQL file:

```text
portfolio database.sql
```

7. Run the project in browser:

```text
http://localhost/DynamicPortfolio/
```

## Admin Login

Admin login page:

```text
http://localhost/DynamicPortfolio/admin_login.php
```

Default login:

```text
Username: admin
Password: admin123
```

## Folder Structure

```text
DynamicPortfolio/
│
├── index.php
├── style.css
├── script.js
├── admin.css
├── db_connection.php
├── admin_login.php
├── admin_authenticate.php
├── admin_dashboard.php
├── admin_logout.php
├── portfolio database.sql
├── Sanzida_Moin_Tithi_Resume.pdf
├── profile.jpeg
├── 7.webp
├── bank.jpeg
├── OIP.webp
├── OIP (1).webp
├── pic_front_exterior.png
└── README.md
```

## What I Implemented

* Designed and developed a dynamic portfolio website
* Connected the website with a MySQL database
* Loaded website content dynamically using PHP
* Added a professional home section with profile image
* Added skills section with Learn More popup
* Added project showcase with images, tags, descriptions, and GitHub buttons
* Added education timeline
* Added contact form section
* Added resume download option
* Added admin login and authentication system
* Improved UI design, spacing, colors, and readability
* Organized project-related images and assets
* Added database file for local setup
## Website Screenshots

### Home Section
<img width="956" height="410" alt="Screenshot 2026-06-22 144519" src="https://github.com/user-attachments/assets/ddab65d9-cd73-4b55-b293-27c08812c488" />

### Skills Section
<<img width="959" height="353" alt="Screenshot 2026-06-22 144541" src="https://github.com/user-attachments/assets/e1b1dba4-c547-4204-a568-bd8cc9f1948d" />
<img width="903" height="395" alt="Screenshot 2026-06-22 144550" src="https://github.com/user-attachments/assets/b873a81f-4434-46ae-a592-e533f8e23196" />
<img width="959" height="362" alt="Screenshot 2026-06-22 144602" src="https://github.com/user-attachments/assets/bc94c699-511c-4d6b-b629-9e8f892b11d3" />
<img width="959" height="347" alt="Screenshot 2026-06-22 144533" src="https://github.com/user-attachments/assets/f9f13250-1a15-4748-9aa4-237cfa3d50be" />



### Projects Section
![Projects Section](screenshots/projects.png)

### Education Section
![Education Section](screenshots/education.png)

### Contact Section
![Contact Section](screenshots/contact.png)

## Future Improvements

* Add full CRUD functionality in the admin dashboard
* Store and manage contact messages from the admin panel
* Add project filtering by technology
* Improve mobile responsiveness
* Deploy the portfolio online

##Author
#Sanzida Moin Tithi

