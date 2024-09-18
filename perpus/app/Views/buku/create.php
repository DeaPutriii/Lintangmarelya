<?= $this->extend('template/ci4') ?>

<?= $this->section('create') ?>
<div class="container mt-5">
    <h1>Tambah Buku</h1>
    <form action="<?= site_url('buku/store') ?>"method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" required>
        </div>
        <div class="form-group">
            <label for="Penulis">Penulis</label>
            <input type="text" class="form-control" name="penulis" required>
        </div> 
        <div class="form-group">
            <label for="Penerbit">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" required>
        </div>
        <div class="form-group">
            <label for="Tahun Terbit">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan <i class="bi bi-check-circle ms-2"></i></button>
        <a href="<?= site_url('buku') ?>" class="btn btn-secondary mt-3">Kembali</a>

    </form>
</div>
<?= $this->endSection() ?>