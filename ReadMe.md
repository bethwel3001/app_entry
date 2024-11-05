# HTML Form to MySQL Database Integration with PHP

This project demonstrates how to link an HTML form to a MySQL database using PHP. The form collects user data and stores it in a MySQL database. It also includes a simple landing page with a **Light/Dark mode toggle** feature.

## Features

- HTML form to submit data to a MySQL database
- PHP script to handle form submissions and store data
- Landing page with Light/Dark mode toggle

---

## Required Dependencies

To run this project locally, you'll need the following software:

- **PHP** (Version 7.4 or higher recommended)
- **XAMPP** (to run Apache and MySQL)
- **Visual Studio Code** (or any text editor for development)
- **MySQL** (part of the XAMPP package)

---

## Installation Steps

### 1. Install XAMPP
Download and install XAMPP from the official website:  
[https://www.apachefriends.org/](https://www.apachefriends.org/).  
This will install Apache (for running PHP) and MySQL (for database management).

### 2. Setup the Database
- Open XAMPP and start the Apache and MySQL services.
- Access **phpMyAdmin** through `http://localhost/AppEntry/index.php` and create a new database, e.g., `form_db`.
- Create a table (e.g., `users`) with columns that correspond to the form fields.

Example SQL to create a table:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
```
## Light/Dark Mode:
The landing page includes a toggle button that allows users to switch between Light and Dark modes. This is done using simple CSS and JavaScript for client-side toggling.

### How to Use
- **Open the landing page:**
When you visit the project in your browser, you'll be greeted with a landing page. You can toggle between light and dark mode by clicking the "Switch Mode" button.

- **Fill out the HTML Form:**
The form on the landing page allows users to enter their name and email address.

- **Submit Data:**
Upon submission, the form sends the data to the PHP script, which processes the data and stores it in the MySQL database.

- **Check the Database:**
After submitting the form, you can check the users table in your MySQL database to see the stored data.

## Screenshots
Landing Page: Light and Dark Mode Toggle
![image](https://github.com/user-attachments/assets/03cf2d24-e82a-41f4-9375-d3b7d8673658)

Example form submission
![image](https://github.com/user-attachments/assets/a74e9fd6-7fac-47bc-97b9-23fdda3ef4b2)

Small screen compatibility
![image](https://github.com/user-attachments/assets/c08d08e9-2272-4d94-bd9c-2c8fdda1132a)
![image](https://github.com/user-attachments/assets/b3eb3309-2e9a-4eab-b21a-a58e8e82a632)

## License
This project is open-source and free to use. You can modify and distribute it according to your needs.

## By Dev. Bethwel & NextSpace
