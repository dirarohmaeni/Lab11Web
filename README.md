# 📘 Lab11 – PHP OOP Lanjutan

Repository ini berisi hasil pengerjaan **Praktikum 11 – PHP OOP Lanjutan**  
mata kuliah **Pemrograman Web**.

## 📌 Tujuan Praktikum
1. Memahami konsep dasar framework modular sederhana.
2. Memahami konsep dasar routing pada PHP.
3. Menerapkan konsep Object Oriented Programming (OOP) pada aplikasi web.
4. Mengimplementasikan CRUD (Create, Read, Update, Delete) dengan struktur modular.

---

## 🗂️ Struktur Folder
```
lab11_php_oop/
├── .htaccess
├── config.php
├── index.php
├── class/
│ ├── Database.php
│ └── Form.php
├── module/
│ └── artikel/
│ ├── index.php
│ ├── tambah.php
│ ├── ubah.php
│ └── hapus.php
├── template/
│ ├── header.php
│ ├── footer.php
│ └── sidebar.php
```

## ⚙️ Konfigurasi Database
```
Database yang digunakan adalah **MySQL**.
```

### 1. Buat database
```sql
CREATE DATABASE latihan_oop;
USE latihan_oop;
```

### 2. Buat tabel artikel
```CREATE TABLE artikel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    isi TEXT
);
```

### 3. Konfigurasi config.php
```<?php
$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db_name' => 'latihan_oop'
];
```

## 🧩 Penjelasan Fitur
🔹 **Routing**

Routing diatur menggunakan file .htaccess dan index.php, sehingga URL menjadi lebih rapi dan mudah dibaca, contohnya:
``` /artikel/index
/artikel/tambah
/artikel/ubah?id=1
```
🔹 **Modularisasi**
```
- Folder class/ berisi library OOP.

- Folder module/ berisi fitur aplikasi.

- Folder template/ berisi layout yang digunakan berulang.
```

🔹 **OOP (Object Oriented Programming)**

- Class Database digunakan untuk koneksi dan manipulasi database.

- Class Form digunakan untuk membuat form input secara dinamis.

🔹 **CRUD Artikel**

- Fitur yang tersedia:

- Menampilkan data artikel

- Menambah artikel

- Mengubah artikel

- Menghapus artikel

🔹 **Tampilan**

Tampilan website dibuat modern dan sederhana dengan tema pink pastel, tanpa menggunakan framework CSS tambahan.

## ▶️ Cara Menjalankan Project

1. Aktifkan Apache dan MySQL melalui XAMPP.

2. Letakkan folder lab11_php_oop di dalam folder htdocs.

3. Import database dan tabel.

4. Akses melalui browser:
``` http://localhost/lab11_php_oop/artikel/index
```

## 📸 Dokumentasi

Screenshot pengerjaan meliputi:

Halaman data artikel
![foto](https://github.com/dirarohmaeni/Lab11Web/blob/a827985d30c5b60926b1dcff92c1434c5d70b53a/lab11/data.png)

Halaman tambah artikel
![foto](https://github.com/dirarohmaeni/Lab11Web/blob/a827985d30c5b60926b1dcff92c1434c5d70b53a/lab11/tambah.png)

Halaman ubah artikel
![foto](https://github.com/dirarohmaeni/Lab11Web/blob/a827985d30c5b60926b1dcff92c1434c5d70b53a/lab11/edit.png)

Proses hapus artikel
![foto](https://github.com/dirarohmaeni/Lab11Web/blob/a827985d30c5b60926b1dcff92c1434c5d70b53a/lab11/hapus.png)

## 📝 Catatan

Fitur login dan logout belum diimplementasikan karena akan dibahas pada Praktikum 12, sesuai dengan modul perkuliahan.

## 👨‍🎓 Identitas

Nama : Dira Rohmaeni

NIM : 312410465

Kelas : TI.24.A5

## 📚 Referensi

Modul Praktikum Pemrograman Web – PHP OOP Lanjutan
Universitas Pelita Bangsa
