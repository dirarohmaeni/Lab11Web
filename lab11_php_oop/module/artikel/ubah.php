<?php
$db = new Database();
$id = $_GET['id'];

// Ambil data lama
$data = $db->query("SELECT * FROM artikel WHERE id=$id")->fetch_assoc();

$form = new Form("", "💾 Update Artikel");

if ($_POST) {
    $db->update("artikel", [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ], "id=$id");

    echo "<div class='alert'>✨ Artikel berhasil diubah!</div>";
}

// Form (manual value)
?>

<h3>✏️ Ubah Artikel</h3>

<form method="POST">
    <label>Judul Artikel</label>
    <input type="text" name="judul" value="<?= $data['judul'] ?>" required>

    <label>Isi Artikel</label>
    <textarea name="isi" required><?= $data['isi'] ?></textarea>

    <br><br>
    <input type="submit" value="Update Artikel">
    <a href="/lab11_php_oop/artikel/index"
   class="btn btn-edit"
   style="margin-bottom:15px; display:inline-block;">
   ⬅️ Kembali
</a>

</form>
