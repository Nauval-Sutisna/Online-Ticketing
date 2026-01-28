# Guide Book Project

## **Langkah-Langkah**

### 1. **Clone repository**

```bash
git clone https://github.com/Nauval-Sutisna/Online-Ticketing.git
```

### 2. **Masuk ke direktori**

```bash
cd ticketing_app
```

### 3. **Buat env**

Untuk konfigurasi database

```bash
copy .env.example .env
```

### 4. **Install Composser**

Agar command artisan bisa berjalan

```bash
composer install
```

### 5. **Generate Application Key**

Membuat kunci enkripsi aplikasi agar aplikasi bisa berjalan

```bash
php artisan key:generate
```

### 6. **Konfigurasi env**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ticket_app
DB_USERNAME=root
DB_PASSWORD=
```

### 7. **Jalankan migrasi**

```bash
php artisan migrate
```

### 8. **Migrasi seeder**

```bash
php artisan db:seed
```

### 9. **Install Dependency Frontend**

```bash
npm install
```

Setelah proses instalasi selesai, jalankan build frontend

```bash
npm run build
```

### 10. **Buat reset isi database**

```bash
php artisan migrate:fresh
```

### 11. **Upload Project**

```bash
Upload Project :
git add -A,
git commit -m "first commit",
git push -u origin main     

masuk direktori github :
echo "# coba" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Nauval-Sutisna/Pemograman-Sisi-Klien.git
git push -u origin main
```

### 12. **Ngpull dari github ke pc**

```bash
git pull origin main
# lakukan perubahan kode
git add .
git commit -m "Pesan perubahan"
git push origin main
```

### 13. **cek status**

```bash
git status
git add .
git commit -m "Update fitur ticketing"
git push origin main
```

### 14. **Add file controller**

```bash
php artisan make:controller TicketController
php artisan make:controller Admin/TicketController
```
