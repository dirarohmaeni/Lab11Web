<?php
if (isset($_SESSION['is_login'])) {
    header("Location: /lab11_php_oop/artikel/index");
    exit;
}

$message = "";

if ($_POST) {
    $db = new Database();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];

        header("Location: /lab11_php_oop/artikel/index");
        exit;
    } else {
        $message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/lab11_php_oop/assets/css/style.css">
</head>
<body class="login-page">

<div class="login-container">
    <div class="login-card">
        <div class="login-title">
            🌸 <span>Login</span>
        </div>

        <?php if ($message): ?>
            <div class="alert"><?= $message ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</div>
<?php include __DIR__ . "/../../template/footer.php"; ?>
</body>
</html>
