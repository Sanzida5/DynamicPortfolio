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
<img width="959" height="347" alt="Screenshot 2026-06-22 144533" src="https://github.com/user-attachments/assets/85021d78-cd5c-4dc1-979e-2426abe4bff5" />
<img width="959" height="353" alt="Screenshot 2026-06-22 144541" src="https://github.com/user-attachments/assets/f4d41060-1c1c-40eb-8acc-2db7683d9e0a" />
<img width="903" height="395" alt="Screenshot 2026-06-22 144550" src="https://github.com/user-attachments/assets/1d13208e-ea69-4fba-8ab4-def1f4128626" />

<img width="959" height="362" alt="Screenshot 2026-06-22 144602" src="https://github.com/user-attachments/assets/5d9d11e4-c008-4571-997b-a313f45a96fd" />
<img width="958" height="410" alt="Screenshot 2026-06-22 144611" src="https://github.com/user-attachments/assets/6b50db4d-08dd-42a3-bd61-ecf307267949" />




### Projects Section
<img width="908" height="349" alt="Screenshot 2026-06-22 144618" src="https://github.com/user-attachments/assets/9cf33c25-5f3f-4ad1-a3b6-2876400e8c67" />
<img width="925" height="353" alt="Screenshot 2026-06-22 144628" src="https://github.com/user-attachments/assets/46cce632-901c-40c6-b49b-7f76e28c55b7" />

<img width="932" height="397" alt="Screenshot 2026-06-22 144644" src="https://github.com/user-attachments/assets/a8be2048-78cf-4121-a425-278924d885df" />


### Education Section

<img width="827" height="394" alt="Screenshot 2026-06-22 144654" src="https://github.com/user-attachments/assets/44c71e05-5e67-46d3-b6a4-335b337b8bea" />
<img width="548" height="279" alt="Screenshot 2026-06-22 144700" src="https://github.com/user-attachments/assets/c6185851-f65e-428a-9e45-e807abaca238" />


### Contact Section
<img width="959" height="427" alt="Screenshot 2026-06-22 144708" src="https://github.com/user-attachments/assets/79a75cf5-7f02-40df-8473-e9bfca7880bf" />
<img width="950" height="412" alt="Screenshot 2026-06-22 144721" src="https://github.com/user-attachments/assets/3fbbe5fc-0713-4282-9c09-fc2b620b96be" />
<img width="959" height="425" alt="Screenshot 2026-06-22 144728" src="https://github.com/user-attachments/assets/6ec45a51-fbd0-48eb-8903-52252443867f" />

## Future Improvements

* Add full CRUD functionality in the admin dashboard
* Store and manage contact messages from the admin panel
* Add project filtering by technology
* Improve mobile responsiveness
* Deploy the portfolio online

## Author

Sanzida Moin Tithi

