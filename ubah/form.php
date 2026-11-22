<form action="ubah/proses.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama"
            value="<?= htmlspecialchars($data['nama']); ?>" required>
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" required>
            <option value="Elektronik"
                <?= $data['kategori'] == 'Elektronik' ? 'selected' : ''; ?>>
                Elektronik
            </option>

            <option value="Komputer"
                <?= $data['kategori'] == 'Komputer' ? 'selected' : ''; ?>>
                Komputer
            </option>

            <option value="Hand Phone"
                <?= $data['kategori'] == 'Hand Phone' ? 'selected' : ''; ?>>
                Hand Phone
            </option>
        </select>
    </div>

    <div class="form-group">
        <label>Harga Beli</label>
        <input type="number" name="harga_beli"
            value="<?= $data['harga_beli']; ?>" required>
    </div>

    <div class="form-group">
        <label>Harga Jual</label>
        <input type="number" name="harga_jual"
            value="<?= $data['harga_jual']; ?>" required>
    </div>

    <div class="form-group">
        <label>Stok Barang</label>
        <input type="number" name="stok"
            value="<?= $data['stok']; ?>" required>
    </div>

    <div class="form-group">
        <label>Ganti Gambar (Opsional)</label>
        <input type="file" name="file_gambar" accept="image/*">

        <small>
            Gambar saat ini: <?= htmlspecialchars($data['gambar']); ?>
        </small>
    </div>

    <input type="hidden" name="id"
        value="<?= $data['id_barang']; ?>">

    <div class="form-action">
        <button type="submit" name="submit" class="btn-simpan">
            Simpan Perubahan
        </button>

        <a href="index.php" class="btn-kembali">
            Kembali
        </a>
    </div>

</form>