# 🚀 MyFirstApp - Laravel Web Application

A Laravel-based web application created as my first step into full-stack PHP development. This project helps in understanding the basics of Laravel including routing, controllers, views, migrations, authentication, and styling with Tailwind CSS.

---

## 📂 Project Structure

This Laravel project includes:

- `app/` – Application logic and models
- `routes/` – Web and API routing
- `resources/` – Blade views, Tailwind styles, and assets
- `database/` – Migrations and seeders
- `public/` – Public assets and entry point (`index.php`)

---

## 🧰 Tech Stack

- **Framework**: Laravel 10
- **Frontend**: Blade templates + Tailwind CSS
- **Database**: MySQL (can be configured)
- **Authentication**: Laravel Breeze / UI (if added)
- **Tooling**: Vite, Composer, Artisan CLI

---

## 📦 Installation & Setup

To set up this project locally, follow these steps:

```bash
# 1. Clone the repository
git clone https://github.com/tharanijayathura/myfirstapp.git

# 2. Navigate into the project directory
cd myfirstapp

# 3. Install PHP dependencies
composer install

# 4. Copy and edit your environment file
cp .env.example .env
php artisan key:generate

# 5. Configure your database in the .env file

# 6. Run migrations (optional: add --seed)
php artisan migrate

# 7. Install JS dependencies and compile assets
npm install && npm run dev

# 8. Serve the application
php artisan serve
