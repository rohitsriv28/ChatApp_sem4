# Realtime Chat Application

A real-time chat application built with PHP, MySQL, and vanilla JavaScript. This application allows users to sign up, log in, and chat with other registered users in real-time.

## Features

- **User Authentication**: Secure signup and login system.
- **Real-time Messaging**: Send and receive messages instantly using AJAX polling (no page refresh).
- **User List**: View a list of available users to chat with.
- **Search**: Search for users by name.
- **Profile Images**: Users can upload profile pictures during signup.
- **Status Indicators**: See if a user is "Active now" or "Offline".
- **Responsive Design**: Mobile-friendly interface.

## Tech Stack

- **Frontend**: HTML, CSS, JavaScript (Vanilla)
- **Backend**: PHP
- **Database**: MySQL

## Prerequisites

- A local web server environment (e.g., XAMPP, WAMP, MAMP, or generic Apache/Nginx + PHP).
- MySQL Database.

## Installation & Setup

1.  **Clone or Download** the project to your web server's root directory (e.g., `htdocs` in XAMPP or `www` in WAMP).

    ```bash
    git clone <repository_url>
    # or extract the zip file
    ```

2.  **Database Configuration**:

    - Open `php/config.php` and check the database connection settings.
    - Default settings in the project:
      - Host: `localhost`
      - User: `root`
      - Password: `""` (empty)
      - Database Name: `chat`

3.  **Create Database**:

    - Open phpMyAdmin or your MySQL client.
    - Create a new database named `chat`.
    - Run the following SQL commands to create the required tables:

    ```sql
    -- Users Table
    CREATE TABLE `users` (
      `user_id` int(11) NOT NULL AUTO_INCREMENT,
      `unique_id` int(255) NOT NULL,
      `fname` varchar(255) NOT NULL,
      `lname` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      `password` varchar(255) NOT NULL,
      `img` varchar(255) NOT NULL,
      `status` varchar(255) NOT NULL,
      PRIMARY KEY (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    -- Messages Table
    CREATE TABLE `messages` (
      `msg_id` int(11) NOT NULL AUTO_INCREMENT,
      `incoming_msg_id` int(255) NOT NULL,
      `outgoing_msg_id` int(255) NOT NULL,
      `msg` varchar(1000) NOT NULL,
      PRIMARY KEY (`msg_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ```

    _Note: The schema above is inferred from the application logic. Adjust types if necessary._

4.  **Run the App**:
    - Open your browser and navigate to `http://localhost/ChatApp_sem4/` (or the corresponding path where you placed the project).
    - Sign up with a new account and start chatting!

## Directory Structure

- `index.php`: Signup page / Landing page.
- `login.php`: User login page.
- `users.php`: Dashboard showing list of users.
- `chat.php`: Chat interface with a specific user.
- `php/`: Contains all backend logic (auth, db connection, message handling).
- `javascript/`: Contains frontend logic (AJAX requests, UI interactions).
- `style.css`: Main stylesheet.
