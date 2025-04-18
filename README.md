# 📝 Laravel Notes App

A simple and elegant note-taking application built with Laravel.

## ✨ Features

-   📄 Create, read, update, and delete notes
-   🔒 User authentication
-   🎨 Modern responsive UI with Tailwind CSS
-   🚀 Fast and intuitive interface

## 🛠️ Prerequisites

-   📦 PHP 8.2 or higher
-   🗃️ Composer
-   🐬 MySQL or SQLite
-   🧶 Node.js & NPM

## 🚀 Installation

### 1️⃣ Clone the repository

```bash
git clone <your-repo-url>
cd example-app
```

### 2️⃣ Install dependencies

```bash
composer install
npm install
```

### 3️⃣ Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Update your `.env` file with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

For SQLite (simpler setup):

```
DB_CONNECTION=sqlite
# Comment out other DB_ variables
```

Then create the SQLite database file:

```bash
touch database/database.sqlite
```

### 4️⃣ Run migrations and seeders

```bash
php artisan migrate
php artisan db:seed --class=NoteSeeder
```

### 5️⃣ Compile assets

```bash
npm run dev
```

### 6️⃣ Start the server

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) to see your application in action!

## 👨‍💻 Usage

1. 🔐 Register a new account or log in
2. 📝 Create a new note using the "Create Note" button
3. 📖 View your notes on the dashboard
4. ✏️ Edit or delete notes as needed

## 📂 Project Structure

-   `app/Models/Note.php`: The Note model
-   `app/Http/Controllers/NoteController.php`: Controller with CRUD operations
-   `database/migrations/*_create_notes_table.php`: Database schema
-   `resources/views/notes/`: Blade view templates for notes
-   `routes/web.php`: Web routes definition

## 🔧 Customization

Feel free to modify the views and styles to match your preferences. The views are located in the `resources/views/notes` directory, and the Tailwind CSS is compiled from your project assets.

## 📜 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
