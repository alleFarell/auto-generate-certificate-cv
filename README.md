# Requirements Before Run the Project

- PHP >= 7.2.5 (Because we use Laravel 8)
- Composer
- Imagick PHP Extension

    **Download and Install (adjust to your device and PHP version):**
    - https://imagemagick.org/script/download.php
    - https://mlocati.github.io/articles/php-windows-imagick.html

    **[Install Imagick Extension on XAMPP](https://www.youtube.com/watch?v=ffjnDylKuz0&t=80s)**


# Setup Project
- Clone repository
```sh
git clone https://github.com/ghinakh/auto-generate-certificate-cv.git
```
- Go to the repository
```sh
cd auto-generate-certificate-cv
```
- Install require packages
```sh
composer install
```
> Note : if you find error then try this: 
    ```
    composer install --ignore-platform-reqs
    ```
- Copy and paste .env.example to .env
- In Phpmyadmin, make new database (ex: data_kp)
- Change DB_HOST, DB_DATABASE=data_kp, DB_USERNAME, and DB_PASSWORD 
- Generate laravel project key
```sh
php artisan key:generate
```
- Migrate and seed
```sh
php artisan migrate --seed
```
- Link with storage
```sh
php artisan storage:link
```
- Add Fonts <br>
Copy and paste all fonts in `public\font` to `vendor\tecnickcom\tcpdf\fonts`

# File Template

Template CV : `public\template_CV` <br>
Template Sertifikat : `public\template certificate for upload` <br>
Resource Photoshop Template : `public\resource editting`

> Note: Setiap kali mengupload template sertifikat baru, harus menambahkan file view ke `resources\views\content` UNTUK MASING-MASING TEMPLATE KARENA BERBEDA DESIGN. Penamaan file view sertifikat harus sesuai format `certificate_pdf_NomorTempalteSertifikat.blade.php`

# References 
[Original Repository of Html2Pdf](https://github.com/spipu/html2pdf) <br>
[Original Repository of Simple-QRCode](https://github.com/SimpleSoftwareIO/simple-qrcode)
