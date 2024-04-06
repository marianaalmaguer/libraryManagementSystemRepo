
# Library Management System in Laravel

This project implements a basic library management system focusing on CRUD (Create, Read, Update, Delete) operations for books. It leverages Laravel's Eloquent ORM for database interactions, utilizing its capabilities to simplify development.

## Prerequisites

To run this project, you need to have installed:

- PHP (Version 7.4 or higher)
- Composer
- Laravel (Version 8 or higher)
- XAMPP
- A compatible database (MySQL, PostgreSQL, SQLite, etc.)

## Installation

Clone the repository to your local machine using Git:

```bash
git clone https://github.com/yourusername/library-management-system-laravel.git
```

Navigate to the project directory:

```bash
cd library-management-system-laravel
```

Install Composer dependencies:

```bash
composer install
```

Copy the `.env.example` file to `.env` and adjust the database settings according to your environment:

```bash
cp .env.example .env
```

Generate a Laravel app key:

```bash
php artisan key:generate
```

Run the migrations to create the database tables:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

You can now access the project at http://localhost:8000.

## Project Structure

The project is organized around the following main parts:

- **Migrations**: Define the database structure. (database/migrations)
- **Models**: Represent the entities in the project and allow interaction with the database. (app/Models)
- **Controllers**: Contain the business logic. (app/Http/Controllers)
- **Views**: Present the user interface. Laravel Blade templates are used. (resources/views)
- **Routes**: Define the access points to the system. (routes/web.php)

## CRUD Operations

The system allows performing the following CRUD operations for books:

- **Create Books**: Go to http://localhost:8000/books/create
- **View Registered Books**: Navigate to http://localhost:8000/books
- **Edit Books**: Click the "Edit" button next to any book.
- **Delete Books**: Use the "Delete" button to remove a book.

## Contributing

To contribute to the project, please fork it, make your changes, and submit a pull request for review.