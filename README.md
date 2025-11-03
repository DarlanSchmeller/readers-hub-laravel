# Readers Hub  
_A simple Laravel API for creating and listing book reviews._

## 🚀 Project Overview  
Readers Hub is a backend service built with Laravel (PHP) that allows users to submit reviews and browse listings of reviews. It already supports:

- A **create** endpoint for adding new reviews.  
- A **list** (index) endpoint for retrieving reviews.  
- Several query scopes for filtering/sorting the reviews.  
- Rate‑limiting to protect endpoints from abuse.

This is a lightweight foundation you can build upon (e.g., add authentication, update/delete, more complex relationships, and UI later).

## 🧰 Tech Stack  
- PHP with Laravel  
- MySQL / any database supported by Laravel’s Eloquent  
- API routes for handling HTTP requests  
- Query scopes in Eloquent models for expressive filtering  
- Rate limiting via Laravel’s built‑in throttle middleware  

## 📦 Getting Started  
### Prerequisites  
- PHP (8.x recommended)  
- Composer  
- A database (MySQL, PostgreSQL, SQLite, etc.)  
- Git  

### Installation  
```bash
git clone https://github.com/DarlanSchmeller/readers-hub-laravel.git
cd readers-hub-laravel
composer install
cp .env.example .env
# configure DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env
php artisan key:generate
php artisan migrate
php artisan serve
