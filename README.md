## Content Management System (CMS)
* Nama   : Rizal Eka Budi Pratama
* Kampus : Politeknik Negeri Banyuwangi
## Stack Yang Digunakan
1. Template adminLTE dan Bootsrap 5
2. PHP native
3. HTML, CSS dan JavaScript
## Cara Menjalakan Aplikasi Web
### 1. Jalankan Perintah pada CMD
```
composer install
```
Perintah ini digunakan untuk menginstall package-package yang digunakan. 
### 2. Copy folder env.example kemudian rename dengan nama .env menggunakan perintah
```
cp env.example .env
```
### 3. Jalankan perintah pada CMD
```
php artisan key:generate
```
Perintah ini digunakan mengenerate random string yang digunakan sebagai key yang diperlukan untuk semua proses enkripsi dan dekripsi pada aplikasi kita.
### 4. Setting database di foler .env sesuai dengan settingan database yang anda buat
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cms
DB_USERNAME=root
DB_PASSWORD=
```
### 5. Jalankan perintah pada CMD
```
php artisan migrate
```
Perintah ini digunakan untuk membuat tabel-tabel di database.
### 6. Jalankan perintah pada CMD
```
php artisan serve
```
Perintah ini digunakan untuk menjalankan aplikasi.
