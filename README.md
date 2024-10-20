# Laravel Todo List Application

This is a simple Todo List application built with Laravel. It allows users to create, edit, delete, and mark tasks as complete or incomplete.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Composer
- MySQL (or MariaDB)
- XAMPP or similar local server

## Installation

1. *Clone the Repository*

   Clone the project repository from GitHub:

   ```bash
   git clone https://github.com/yourusername/todo-app.git
  
2. Navigate to Project Directory
    ```bash
   cd todo-app
   
4. Install Dependencies

   Install the required PHP packages using Composer:
    ```bash
   composer install

4.Create a new MySQL database (e.g., todo) using phpMyAdmin or MySQL command line.

5.Set Up Environment File
  Copy the .env.example file to a new file named .env:
   ```bash
  cp .env.example .env

  Update the .env file with your database connection details:
 ```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=todo
  DB_USERNAME=root
  DB_PASSWORD=

6. Generate Application Key
 ```bash
   php artisan key:generate

7. Run Migrations
  Run the database migrations to set up the tables:
 ```bash
  php artisan migrate

8. Start the Local Development Server

   Start the Laravel development server:
 ```bash
   php artisan serve

   The application will be accessible at http://localhost:8000.

9.Open Your Browser
  Navigate to http://localhost:8000 in your web browser to see the application in action.

  Routes

    GET / - Displays the Todo List.
    POST /todo - Saves a new Todo item.
    PUT /todo/{id} - Updates an existing Todo item.
    DELETE /todo/{id} - Deletes a Todo item.
    GET /todo/{id}/edit - Displays the edit form for a Todo item.

    Challenges:
    In website deployment in Heruko it was asking for payment as there in no free version i could find for PHP Laravel project i have not deploy the app.
    Vercel is free but it is not suitable for php laravel app.
    
