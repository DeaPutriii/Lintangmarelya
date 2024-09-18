<?= $this->extend('template/ci4') ?>

<?= $this->section('create') ?>
<div class="container mt-5">
    <h1 class="mb-4">Tambah Pengembalian</h1>
    
    <!-- Display success/error messages -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/pengembalian/store" method="post">
        <div class="mb-3">
            <label for="UserID" class="form-label">User ID</label>
            <input type="number" name="UserID" class="form-control" placeholder="Masukkan User ID" required>
        </div>

        <div class="mb-3">
            <label for="BukuID" class="form-label">Buku ID</label>
            <input type="number" name="BukuID" class="form-control" placeholder="Masukkan Buku ID" required>
        </div>

        <div class="form-group mb-3">
            <label for="TanggalPengembalian">Tanggal Pengembalian</label>
            <input type="date" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/pengembalian" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    $(function () {
        $('#TanggalPengembalian').datetimepicker({
            format: 'YYYY-MM-DD HH:MM:SS',
            defaultDate: new Date()
        });
    });
</script>
 
<?= $this->endSection() ?>
