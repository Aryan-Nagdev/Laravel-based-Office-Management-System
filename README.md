# Office Management System (Laravel)

This project is a Laravel-based Office Management System developed as a backend assignment.  
It demonstrates database design, model relationships, CRUD operations, and UI integration.

---

## Features

- Company Management (Create, Read, Update, Delete)
- Employee Management (Create, Read, Update, Delete)
- Employee belongs to Company relationship
- Employee self-relationship (Manager system)
- Country, State, City fields for employee location
- Bootstrap-based responsive UI
- Form validation
- Clean MVC architecture

---

## Tech Stack

- Laravel
- PHP
- MySQL
- Bootstrap

---

## Database Relationships

- One Company has many Employees
- One Employee belongs to one Company
- One Employee can have one Manager (another Employee)

---

## Setup Instructions

### 1. Clone the repository
git clone <your-repo-link>

### 2. Move into project folder
cd project-folder-name

### 3. Install dependencies
composer install

### 4. Copy environment file
copy .env.example .env

### 5. Generate application key
php artisan key:generate

### 6. Configure database
Open `.env` file and set:

DB_DATABASE=your_database_name  
DB_USERNAME=your_username  
DB_PASSWORD=your_password  

### 7. Run migrations
php artisan migrate

### 8. Start development server
php artisan serve

Open in browser:
http://127.0.0.1:8000

---

## Notes

- This project is intended for academic/assignment purposes.
- Deployment is not included as it is not required by the assignment.
