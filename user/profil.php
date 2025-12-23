<?php
if (!isset($_SESSION['is_login'])) {
    header("Location: /lab11_php_oop/user/login");
    exit;
}
?>

<div class="profile-card">
    <h3>👤 Profil Pengguna</h3>

    <div class="profile-item">
        <span>Username</span>
        <strong><?= $_SESSION['username']; ?></strong>
    </div>

    <div class="profile-item">
        <span>Nama</span>
        <strong><?= $_SESSION['nama']; ?></strong>
    </div>

    <div class="profile-actions">
        <a href="/lab11_php_oop/user/edit" class="btn btn-edit">✏️ Edit Profil</a>
        <a href="/lab11_php_oop/user/password" class="btn btn-delete">🔒 Ubah Password</a>
    </div>
</div>
