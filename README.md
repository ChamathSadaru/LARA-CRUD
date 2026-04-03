# LARA-CRUD (Laravel Product Management System)

A simple and responsive Product Management System built with Laravel 11. This application allows users to perform full CRUD operations on product data, including image uploading and management.

## 🚀 Features

- **Full CRUD Support**: Create, Read, Update, and Delete products effortlessly.
- **Image Management**: Seamless image upload and storage for each product.
- **Modern UI**: Styled with **Bootstrap 5** for a clean, responsive layout.
- **Interactive Feedback**: Uses **SweetAlert2** for beautiful success and error notifications.
- **Validation**: Backend validation for all form submissions.

## 🛠️ Tech Stack

- **Framework**: [Laravel 11](https://laravel.com)
- **Frontend**: Blade Templates, [Bootstrap 5](https://getbootstrap.com), [SweetAlert2](https://sweetalert2.github.io)
- **Database**: MySQL / SQLite (configurable via `.env`)
- **Language**: PHP 8.2+

## 📸 Database Schema

The core functionality revolves around the `products` table:

| Field | Type | Description |
| :--- | :--- | :--- |
| `id` | `BigInt` | Primary Key |
| `title` | `String` | Name of the product |
| `discriptions` | `LongText` | Detailed product information |
| `image` | `String` | Filename of the uploaded product image |
| `timestamps` | `DateTime` | Created at / Updated at |

## ⚙️ Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/ChamathSadaru/LARA-CRUD.git
   cd LARA-CRUD
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Environment Setup**:
   Copy the example environment file and generate the application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**:
   Configure your database settings in the `.env` file and run migrations:
   ```bash
   php artisan migrate
   ```

5. **Run the Application**:
   ```bash
   php artisan serve
   ```

## 📖 Usage

- **Add Product**: Navigate to the home page (`/`) to add a new product with its title, description, and an image.
- **View Products**: Click the "View Product" button or go to `/show_product` to see the list of all products.
- **Update Product**: From the product list, click the "Update" button to edit product details.
- **Delete Product**: Click the "Delete" button in the product list to remove an item.

## 📄 License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
