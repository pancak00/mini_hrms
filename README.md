<div align="center">

# 🏢 Mini HRMS

**A Human Resource Management System built with Laravel**

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=for-the-badge)](LICENSE)

---

</div>

## 📋 Overview

Mini HRMS is a lightweight Human Resource Management System designed to streamline essential HR operations. It provides a clean, intuitive interface for managing employee records, tracking attendance, processing payroll, and handling salary information — all in one place.

## ✨ Features

### 👥 Employee Management
- Add, edit, view, and remove employee records
- Store comprehensive employee information including contact details, position, department, and status
- Track employment history with hire dates

### ⏰ Attendance Tracking
- Record daily employee attendance with time-in and time-out logs
- Monitor attendance status for each employee
- Maintain a complete attendance history

### 💰 Payroll Processing
- Generate and manage payroll records
- Calculate basic salary, allowances, and deductions
- Compute net salary automatically

### 💵 Salary Management
- Configure and manage salary details
- Maintain salary structures for employees

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| **Laravel 12** | PHP web application framework |
| **PHP 8.x** | Server-side programming language |
| **MySQL** | Database management |
| **Blade** | Templating engine |
| **Bootstrap** | Frontend styling framework |
| **Vite** | Asset bundling & build tool |

## 📁 Project Structure

```
Mini HRMS/
├── app/
│   ├── Http/
│   │   └── Controllers/    # Application controllers
│   ├── Models/
│   │   ├── Employees.php    # Employee model
│   │   ├── Attendance.php   # Attendance model
│   │   ├── Payroll.php      # Payroll model
│   │   └── Salary.php       # Salary model
│   └── Providers/           # Service providers
├── config/                  # Application configuration
├── database/                # Migrations & seeders
├── resources/
│   └── views/               # Blade templates
├── routes/
│   ├── web.php              # Web routes
│   └── console.php          # CLI routes
├── public/                  # Public assets
└── storage/                 # Logs & cached files
```

## 🚀 Getting Started

### Prerequisites

- PHP 8.x or higher
- Composer
- MySQL or any compatible database
- Node.js & NPM (for frontend assets)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/mini-hrms.git
   cd mini-hrms
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   ```
   Then edit `.env` with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=mini_hrms
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Build frontend assets**
   ```bash
   npm run build
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

9. **Visit the application**
   Open your browser and navigate to `http://localhost:8000`

## 🗺️ Routes

| Method | URI | Action |
|--------|-----|--------|
| `GET` | `/` | Welcome page |
| `GET/POST` | `/employees` | Employee management |
| `GET/POST` | `/payroll` | Payroll management |
| `GET/POST` | `/salaries` | Salary management |
| `GET/POST` | `/attendance` | Attendance tracking |

## 🤝 Contributing

Contributions are welcome! If you'd like to improve Mini HRMS, feel free to fork the repository and submit a pull request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

<div align="center">
  Made with ❤️ using Laravel
</div>