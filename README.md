# URL Shortener - Laravel 10

A simple URL shortener web app built with **Laravel 10**.  
Users can paste a long URL to get a shortened version.  
Visiting the shortened URL will redirect to the original URL.  
Includes an **Admin page** to list all shortened URLs and track visit counts.

---

## ✨ Features
- Shorten long URLs into a unique short code.
- Redirect visitors from short URL to original URL.
- Track how many times each short URL is visited.
- Admin page to view all shortened URLs with statistics.
- Modern, clean UI for both home and admin pages.

---

## 📂 Project Structure
```
app/
  Http/
    Controllers/
      UrlController.php
  Models/
      Url.php
resources/
  views/
    shorten-url.blade.php  # Home page
    admin-urls.blade.php   # Admin page
routes/
  web.php                  # Routes
database/
  migrations/
    create_urls_table.php
```

---

## 🚀 Installation & Setup

### 1️⃣ Clone the repository
```bash
git clone https://github.com/YOUR_USERNAME/url-shortener-laravel.git
cd url-shortener-laravel
```

### 2️⃣ Install dependencies
```bash
composer install
```

### 3️⃣ Configure environment
Copy `.env.example` to `.env`:
```bash
cp .env.example .env
```
Update `.env` with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4️⃣ Generate Laravel app key
```bash
php artisan key:generate
```

### 5️⃣ Run migrations
```bash
php artisan migrate
```

### 6️⃣ Serve the application
```bash
php artisan serve
```
The app will be available at:
```
http://127.0.0.1:8000
```

---

## 📌 Routes
| Method | URL               | Description |
|--------|------------------|-------------|
| GET    | `/`               | Home page with URL form |
| POST   | `/shorten`        | Shorten the provided URL |
| GET    | `/{shortCode}`    | Redirect to original URL |
| GET    | `/admin`          | Admin page listing all URLs |

---

## 🖥 Usage
1. Open the home page (`/`).
2. Enter a long URL and click **Shorten**.
3. Copy the generated short link.
4. Open it in a browser to be redirected.
5. Visit `/admin` to view all shortened links and visit counts.

---

## 📸 Screenshots

**Home Page**
![Home Page](docs/screenshots/home.png)

**Admin Page**
![Admin Page](docs/screenshots/admin.png)

---

## 🛠 Technologies
- **Laravel 10**
- PHP 8+
- MySQL (or any Laravel-supported DB)
- Blade templates (HTML/CSS)
- Laravel Eloquent ORM

---

## 📜 License
This project is open-source and available under the [MIT License](LICENSE).
