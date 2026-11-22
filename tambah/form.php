<div class="form-container">

    <h2>Tambah Barang</h2>

    <form action="tambah/proses.php" method="POST">

        <!-- Input kategori -->
        <div class="form-group">
            <label>Kategori Barang</label>

            <input
                type="text"
                name="kategori"
                placeholder="Masukkan kategori barang"
                required
            >
        </div>

        <!-- Input nama -->
        <div class="form-group">
            <label>Nama Barang</label>

            <input
                type="text"
                name="nama"
                placeholder="Masukkan nama barang"
                required
            >
        </div>

        <!-- Input gambar -->
        <div class="form-group">
            <label>Nama File Gambar</label>

            <input
                type="text"
                name="gambar"
                placeholder="contoh: hp_vivo.jpg"
            >
        </div>

        <!-- Input harga beli -->
        <div class="form-group">
            <label>Harga Beli</label>

            <input
                type="number"
                name="harga_beli"
                placeholder="Masukkan harga beli"
                min="0"
                required
            >
        </div>

        <!-- Input harga jual -->
        <div class="form-group">
            <label>Harga Jual</label>

            <input
                type="number"
                name="harga_jual"
                placeholder="Masukkan harga jual"
                min="0"
                required
            >
        </div>

        <!-- Input stok -->
        <div class="form-group">
            <label>Stok Barang</label>

            <input
                type="number"
                name="stok"
                placeholder="Masukkan jumlah stok"
                min="0"
                required
            >
        </div>

        <div class="form-action">

            <button type="submit" name="simpan">
                Simpan Barang
            </button>

            <a href="index.php">
                Kembali
            </a>

        </div>

    </form>

</div>