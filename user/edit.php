<?php
if (!isset($_SESSION['is_login'])) {
    header("Location: /lab11_php_oop/user/login");
    exit;
}

$db = new Database();
$message = "";

if ($_POST) {
    $nama = $_POST['nama'];
    $username = $_SESSION['username'];

    $db->query("UPDATE users SET nama='$nama' WHERE username='$username'");
    $_SESSION['nama'] = $nama;

    $message = "Profil berhasil diperbarui";
}
?>

<h3>✏️ Edit Profil</h3>

<?php if ($message): ?>
<div class="alert"><?= $message ?></div>
<?php endif; ?>

<form method="POST">

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $_SESSION['nama']; ?>" required>

    <div class="form-actions">
        <button type="submit" class="btn btn-save">💾 Simpan</button>
        <a href="/lab11_php_oop/user/profil" class="btn btn-cancel">✖ Batal</a>
    </div>

</form>
