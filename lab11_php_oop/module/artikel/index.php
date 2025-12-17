<?php
$db = new Database();
$data = $db->query("SELECT * FROM artikel");
?>

<h3>📄 Data Artikel</h3>

<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; while($row = $data->fetch_assoc()): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['isi'] ?></td>
        <td>
    <a class="btn btn-edit"
       href="/lab11_php_oop/artikel/ubah?id=<?= $row['id'] ?>">
       ✏️ Edit
    </a>

    <a class="btn btn-delete"
       href="/lab11_php_oop/artikel/hapus?id=<?= $row['id'] ?>"
       onclick="return confirm('Yakin ingin menghapus artikel ini?')">
       🗑️ Hapus
    </a>
</td>
    </tr>
    <?php endwhile; ?>
</table>
