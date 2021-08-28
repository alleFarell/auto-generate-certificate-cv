# Requirement

## Install Html2Pdf dengan Composer

```sh
composer require spipu/html2pdf
```

[Original Repository of Html2Pdf](https://github.com/spipu/html2pdf)

## Font Html2Pdf

Copy dan Paste seluruh font yang ada di folder `public\font` ke `vendor\tecnickcom\tcpdf\fonts`

## Imagick PHP Extension

**Download (Sesuaikan dengan device dan PHP version):**
- https://imagemagick.org/script/download.php
- https://mlocati.github.io/articles/php-windows-imagick.html

**[Cara Install Imagick Extension di XAMPP](https://www.youtube.com/watch?v=ffjnDylKuz0&t=80s)**

**Install SimpleQRCode dengan Composer**

```sh
composer require simplesoftwareio/simple-qrcode "~4"
```

## File Template

Template CV : `public\template`

> Note: Setiap kali mengupload template sertifikat baru, harus menambahkan file view ke `resources\views\content` UNTUK MASING-MASING TEMPLATE KARENA BERBEDA DESIGN. Penamaan file view sertifikat harus sesuai format `certificate_pdf_NomorTempalteSertifikat.blade.php`
