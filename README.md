<div align="center">

# My Store

### A Laravel-Based E-Commerce & Store Management Application

<br>

<img src="https://skillicons.dev/icons?i=php,laravel,tailwind,js,vite,html,css,mysql" alt="Technologies" />

<br><br>

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge\&logo=php\&logoColor=white)](https://www.php.net/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-06B6D4?style=for-the-badge\&logo=tailwindcss\&logoColor=white)](https://tailwindcss.com/)
[![Vite](https://img.shields.io/badge/Vite-4.x-646CFF?style=for-the-badge\&logo=vite\&logoColor=white)](https://vitejs.dev/)

<br>

**A modern web application for managing products, categories, and store content, with authentication, an administrative dashboard, a storefront, shopping cart functionality, and product REST APIs.**

<small> <a href="https://drive.google.com/file/d/1_4jwBvDZknRlbfUSFfqjx7JqAgwq75Lz/view?usp=sharing">Watch the My-Store Demo</a></small>

</div>

---

## About the Project

**My Store** is an e-commerce and store management web application built with **Laravel 10** and **PHP**.

The application provides a customer-facing storefront alongside an administrative management area. Administrators can manage products and categories through a protected dashboard, while users can access authentication and profile management features.

The project also includes blog post management, shopping cart functionality, and RESTful API endpoints for product operations.

The application follows Laravel's MVC architecture and uses modern frontend tooling powered by **Vite**, **Tailwind CSS**, and **Alpine.js**.

---

## Features

### Storefront

* Customer-facing store interface
* Product display pages
* Featured store sections
* Arrival section
* Product presentation
* Responsive frontend structure

### Product Management

Administrators can:

* View products
* Create products
* Edit products
* Update products
* Delete products

### Category Management

Administrators can:

* View categories
* Create categories
* Edit categories
* Update categories
* Delete categories

### Blog Post Management

The application includes functionality for:

* Creating posts
* Viewing posts
* Editing posts
* Updating posts
* Deleting posts

### Shopping Cart

* Cart page and cart controller integration
* Dedicated shopping cart route

### Authentication & User Management

Authentication functionality is provided through **Laravel Breeze**.

The application supports:

* User registration
* Login
* Logout
* Forgot password
* Password reset
* Email verification
* Password confirmation
* Profile management
* Profile information updates
* Password updates
* Account deletion

### Administrative Dashboard

The application includes a protected administrative area.

Administrative functionality is protected using:

* Laravel authentication middleware
* Custom `AdminMiddleware`

The dashboard includes a structured interface with:

* Header
* Sidebar
* Main content
* Footer

### REST API

The project provides RESTful API endpoints for product operations.

Supported operations include:

* Retrieve all products
* Create a product
* Retrieve a specific product
* Update a product

---

## Technologies Used

### Backend

* **PHP 8.1+**
* **Laravel 10**
* **Laravel Sanctum**
* **Laravel Breeze**
* **Guzzle HTTP Client**
* **Yoeunes Toastr**
* **PHPUnit**
* **Laravel Tinker**

### Frontend

* **Tailwind CSS**
* **Vite**
* **JavaScript**
* **Alpine.js**
* **HTML**
* **CSS**
* **Axios**

### Development Tools

* **Composer**
* **npm**
* **PostCSS**
* **Autoprefixer**
* **Laravel Pint**

---

# Architecture

The application follows the **Model-View-Controller (MVC)** architecture provided by Laravel.

```text
                    ┌───────────────┐
                    │     User      │
                    └───────┬───────┘
                            │
                            ▼
                    ┌───────────────┐
                    │    Routes     │
                    │ Web / API     │
                    └───────┬───────┘
                            │
                            ▼
                    ┌───────────────┐
                    │  Controllers  │
                    └───────┬───────┘
                            │
             ┌──────────────┼──────────────┐
             ▼              ▼              ▼
        ┌─────────┐    ┌─────────┐    ┌─────────┐
        │ Models  │    │ Views   │    │   APIs  │
        └────┬────┘    └─────────┘    └─────────┘
             │
             ▼
        ┌─────────┐
        │Database │
        └─────────┘
```

---

# Project Structure

```text
mystore-main/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   │
│   └── Models/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   ├── web.php
│   └── api.php
│
├── storage/
│
├── tests/
│
├── composer.json
├── package.json
├── vite.config.js
└── artisan
```

---

# Application Components

## Controllers

The application includes controllers for:

* `CartController`
* `CategoryController`
* `DashboardController`
* `HomeController`
* `OrderController`
* `OrderItemController`
* `PaymentController`
* `PostController`
* `ProductController`
* `ProfileController`

The project also contains a dedicated API product controller for handling product API operations.

---

## Models

The application includes the following models:

| Model       | Purpose                          |
| ----------- | -------------------------------- |
| `User`      | User accounts and authentication |
| `Product`   | Store products                   |
| `Category`  | Product categories               |
| `Cart`      | Shopping cart data               |
| `Order`     | Order data                       |
| `OrderItem` | Items associated with orders     |
| `Payment`   | Payment-related data             |
| `Post`      | Blog or store posts              |

---

# Frontend Structure

The application uses Laravel Blade templates.

```text
resources/views/
│
├── auth/
│   ├── login.blade.php
│   ├── register.blade.php
│   ├── forgot-password.blade.php
│   ├── reset-password.blade.php
│   ├── verify-email.blade.php
│   └── confirm-password.blade.php
│
├── categories/
│   ├── create.blade.php
│   ├── edit.blade.php
│   └── index.blade.php
│
├── products/
│   ├── create.blade.php
│   ├── edit.blade.php
│   └── index.blade.php
│
├── dashboard/
│   ├── index.blade.php
│   ├── header.blade.php
│   ├── sidebar.blade.php
│   ├── content.blade.php
│   └── footer.blade.php
│
├── frontend/
│   ├── index.blade.php
│   ├── header.blade.php
│   ├── slider.blade.php
│   ├── arrival.blade.php
│   ├── product.blade.php
│   └── why.blade.php
│
├── profile/
├── components/
└── layouts/
```

---

# Authorization

Administrative routes are protected using authentication and a custom admin middleware.

```php
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    // Admin dashboard routes
    // Category management
    // Product management
});
```

This ensures that administrative functionality is accessible only to authenticated users with the appropriate permissions.

---

# API Endpoints

## Products API

| Method | Endpoint             | Description                 |
| ------ | -------------------- | --------------------------- |
| `GET`  | `/api/products`      | Retrieve all products       |
| `POST` | `/api/products`      | Create a product            |
| `GET`  | `/api/products/{id}` | Retrieve a specific product |
| `PUT`  | `/api/products/{id}` | Update a product            |

### Example

```text
GET /api/products
```

---

# Main Web Routes

## Storefront

| Route          | Description              |
| -------------- | ------------------------ |
| `/`            | Application welcome page |
| `/theme/front` | Store frontend           |
| `/cart`        | Shopping cart            |

---

## Dashboard

| Route             | Description                  |
| ----------------- | ---------------------------- |
| `/dashboard`      | Authenticated user dashboard |
| `/dashboard/main` | Administrative dashboard     |

---

## Products

| Route                 | Description      |
| --------------------- | ---------------- |
| `/products`           | View products    |
| `/create/product`     | Create a product |
| `/products/{id}/edit` | Edit a product   |

---

## Categories

| Route                   | Description       |
| ----------------------- | ----------------- |
| `/categories`           | View categories   |
| `/create/category`      | Create a category |
| `/categories/{id}/edit` | Edit a category   |

---

## Posts

| Route              | Description   |
| ------------------ | ------------- |
| `/posts`           | View posts    |
| `/create/posts`    | Create a post |
| `/posts/{id}/edit` | Edit a post   |

---

# Getting Started

Follow the steps below to run the project locally.

## Prerequisites

Make sure the following software is installed:

* PHP **8.1 or higher**
* Composer
* Node.js
* npm
* A supported database system
* Git

Check your installed versions:

```bash
php --version
composer --version
node --version
npm --version
git --version
```

---

## Installation

### Clone the Repository

```bash
git clone <repository-url>
```

Navigate to the project directory:

```bash
cd mystore-main
```

---

### Install PHP Dependencies

```bash
composer install
```

---

### Install Frontend Dependencies

```bash
npm install
```

---

### Configure Environment Variables

Create your environment file:

### Windows

```powershell
copy .env.example .env
```

### Linux/macOS

```bash
cp .env.example .env
```

---

### Generate the Application Key

```bash
php artisan key:generate
```

---

### Configure the Database

Open the `.env` file and configure your database connection.

Example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_store
DB_USERNAME=root
DB_PASSWORD=
```

> Make sure the database exists before running migrations.

---

### Run Database Migrations

```bash
php artisan migrate
```

---

### Start the Vite Development Server

```bash
npm run dev
```

---

### Start the Laravel Server

Open another terminal and run:

```bash
php artisan serve
```

The application will typically be available at:

```text
http://127.0.0.1:8000
```

---

# Testing

The project uses **PHPUnit** for testing.

Run the Laravel test suite:

```bash
php artisan test
```

Or run PHPUnit directly:

```bash
vendor/bin/phpunit
```

---

# Code Formatting

Laravel Pint is included for PHP code formatting.

### Windows

```powershell
vendor\bin\pint
```

### Linux/macOS

```bash
./vendor/bin/pint
```

---

# Production Build

Build the frontend assets for production:

```bash
npm run build
```

---

# Useful Commands

### View All Routes

```bash
php artisan route:list
```

### Start the Laravel Server

```bash
php artisan serve
```

### Start Vite

```bash
npm run dev
```

### Clear Application Caches

```bash
php artisan optimize:clear
```

### Clear Configuration Cache

```bash
php artisan config:clear
```

### Clear Route Cache

```bash
php artisan route:clear
```

---

# Contributing

Contributions are welcome.

To contribute:

1. Fork the repository.
2. Create a feature branch:

```bash
git checkout -b feature/your-feature-name
```

3. Make your changes.
4. Commit your changes:

```bash
git commit -m "feat: add your feature"
```

5. Push the branch:

```bash
git push origin feature/your-feature-name
```

6. Open a Pull Request.

---

