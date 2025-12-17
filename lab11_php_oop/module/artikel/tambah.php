<?php
$db = new Database();
$form = new Form("", "💾 Simpan Artikel");

if ($_POST) {
    $db->insert("artikel", [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ]);
    echo "<div class='alert'>✨ Artikel berhasil disimpan!</div>";
}

$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel", "textarea");
$form->displayForm();
