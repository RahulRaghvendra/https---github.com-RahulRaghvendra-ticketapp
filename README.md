# 🎟️ Laravel 12 Ticket Booking Application

A web-based ticket booking system developed using Laravel 12. This application allows users to browse events, book tickets, and manage their bookings efficiently.

## 📋 Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)

## ✨ Features

- User authentication and registration
- Event listing with pagination
- Ticket booking functionality
- Booking history and management
- SweetAlert2 integration for interactive alerts
- Responsive design with Bootstrap
- DataTables integration for enhanced table features

## 🛠️ Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.1
- Composer
- Node.js and npm
- MySQL or any other supported database
- Laravel CLI
- XAMPP (for local development)

## 🚀 Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/laravel-ticket-booking.git
   cd laravel-ticket-booking
Install PHP dependencies:

bash
Copy
Edit
composer install
Install JavaScript dependencies:

bash
Copy
Edit
npm install
Copy the .env file and generate an application key:

bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Configure your database settings in the .env file.

Run migrations and seed the database:

bash
Copy
Edit
php artisan migrate --seed
Compile assets:

bash
Copy
Edit
npm run dev
Start the development server:

bash
Copy
Edit
access it using xampp
The application will be accessible at http://localhost/ticketapp/.

Note: Ensure XAMPP is running, and your MySQL and Apache services are active.

📖 Usage
Register a new user account or log in with existing credentials.

Browse the list of available events.

Click on an event to view details and book tickets.

View your bookings in the "My Bookings" section.