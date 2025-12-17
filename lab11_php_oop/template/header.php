<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 11 | PHP OOP</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff0f6;
            color: #444;
        }

        header {
            background: linear-gradient(135deg, #f8a5c2, #fbc4d9);
            padding: 20px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #ffe4ec;
            padding: 12px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            color: #d63384;
        }

        nav a:hover {
            color: #a61e4d;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        h2, h3 {
            color: #d63384;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background-color: #fbc4d9;
            color: #6a1b4d;
            padding: 10px;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 10px;
            border: 1px solid #f3c1d8;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: #d63384;
        }

        button, input[type=submit] {
            background-color: #f06595;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover, input[type=submit]:hover {
            background-color: #d63384;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #888;
            margin-top: 40px;
        }

        .alert {
            background-color: #ffe3ed;
            color: #a61e4d;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .wrapper {
    display: flex;
    gap: 20px;
}

.sidebar {
    width: 220px;
    background: #ffe4ec;
    padding: 20px;
    border-radius: 16px;
}

.sidebar h4 {
    color: #d63384;
    margin-bottom: 10px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    text-decoration: none;
    color: #a61e4d;
    font-weight: 600;
}

.sidebar ul li a:hover {
    color: #d63384;
}

.btn {
    display: inline-block;
    padding: 6px 14px;
    border-radius: 12px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s ease;
}

.btn-edit {
    background-color: #ffd6e8;
    color: #a61e4d;
}

.btn-edit:hover {
    background-color: #fbc4d9;
    color: #6a1b4d;
}

.btn-delete {
    background-color: #f06595;
    color: white;
}

.btn-delete:hover {
    background-color: #d63384;
}

    </style>
</head>
<body>

<header>
    <h2>🌸 Praktikum 11 – PHP OOP Lanjutan</h2>
    <p>Framework Modular & Routing Sederhana</p>
</header>

<div class="container">

