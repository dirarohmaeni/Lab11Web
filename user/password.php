<?php
if (!isset($_SESSION['is_login'])) {
    header("Location: /lab11_php_oop/user/login");
    exit;
}

$db = new Database();
$message = "";

if ($_POST) {
    $lama = $_POST['password_lama'];
    $baru = $_POST['password_baru'];

    $username = $_SESSION['username'];
    $result = $db->query("SELECT password FROM users WHERE username='$username'");
    $data = $result->fetch_assoc();

    if (password_verify($lama, $data['password'])) {
        $hash = password_hash($baru, PASSWORD_DEFAULT);
        $db->query("UPDATE users SET password='$hash' WHERE username='$username'");
        $message = "Password berhasil diubah";
    } else {
        $message = "Password lama salah";
    }
}
?>

<h3>🔒 Ubah Password</h3>

<?php if ($message): ?>
<div class="alert"><?= $message ?></div>
<?php endif; ?>

<form method="POST">

    <label>Password Lama</label>
    <input type="password" name="password_lama" required>

    <label>Password Baru</label>
    <input type="password" name="password_baru" required>

    <div class="form-actions">
        <button type="submit" class="btn btn-save">🔐 Simpan</button>
        <a href="/lab11_php_oop/user/profil" class="btn btn-cancel">✖ Batal</a>
    </div>

</form>
