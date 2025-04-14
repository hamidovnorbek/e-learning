<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# 📚 <h1>E-Learning Platform</h1>

A modern web-based E-Learning platform built with **Laravel**, designed to simplify student management and video lesson access. This project features a secure admin panel powered by **Filament** and a clean, minimal frontend using **Tailwind CSS**.

---

## 🔧 <h2>Technologies Used</h2>

- ⚙️ **Laravel** – Powerful PHP framework
- 🎛️ **FilamentPHP** – Elegant admin dashboard
- 🎨 **Tailwind CSS** – Utility-first CSS framework
- 🛢️ **SQLite** – Lightweight database for development
- 💻 **PHP** – Backend language

---

## 👥 <h2>User Roles</h2>

### 🧑‍🏫 Admin
- View, edit, and delete students
- Manage video lessons
- Access full Filament admin dashboard

### 👨‍🎓 Student
- Register and log in
- View available lessons
- Cannot access admin panel

---

## 🚀 <h2>Getting Started</h2>

Follow these steps to set up the project locally.

### 1. Clone the repository
```bash
git clone https://github.com/your-username/e-learning.git
cd e-learning
```
### 2. Install dependencies
```bash
composer install
```
### 3. Copy ".env" and generate app key
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Set up database (using SQLite for simplicity)
```bash
touch database/database.sqlite
```
### 5. Run migrations
```bash
php artisan migrate
```
### 6. Create a admin (Filament) only with  " @admin.com "
```bash
php artisan make:filament-user
```
