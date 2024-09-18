<?= $this->extend('template/ci4') ?>

<?= $this->section('create') ?>
<div class="container mt-5">
    <h1>Tambah User</h1>
    <form action="<?= site_url('users/store') ?>"method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" name="Username" required>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" name="Password" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="Email" required>
        </div>
        <div class="form-group">
            <label for="NamaLengkap">Nama Lengkap</label>
            <input type="text" class="form-control" name="NamaLengkap" required>
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" name="Alamat" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan <i class="bi bi-check-circle ms-2"></i></button>
        <a href="<?= site_url('user') ?>" class="btn btn-secondary mt-3">Kembali</a>

    </form>
</div>
<?= $this->endSection() ?>