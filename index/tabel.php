<table>

    <tr>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Aksi</th>
        <th>Aksi</th>
        <th>Aksi</th>
    </tr>

    <?php if ($result): ?>

        <?php while ($row = mysqli_fetch_array($result)): ?>

        <tr>

            <td>
                <img src="gambar/<?= $row['gambar']; ?>"
                     alt="<?= $row['nama']; ?>">
            </td>

            <td><?= $row['nama']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td><?= $row['harga_jual']; ?></td>
            <td><?= $row['harga_beli']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td><a href="ubah.php?id=<?= $row['id_barang']; ?>" class="btn-ubah">Ubah </a></td>
            <td>

    <a href="hapus.php?id=<?= $row['id_barang']; ?>"
       class="btn-hapus"
       onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </a>
</td>
        
    
    </a>

</td>
            <?php include 'index/aksi.php'; ?>

        </tr>

        <?php endwhile; ?>

    <?php else: ?>

        <tr>
            <td colspan="7">Belum ada data</td>
        </tr>

    <?php endif; ?>

</table>