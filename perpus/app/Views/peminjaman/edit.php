<?= $this->extend('template/ci4') ?>
<?= $this->section('create') ?>

<h2>Edit Peminjaman</h2>
<form action="/peminjaman/update/<?= $peminjaman['PeminjamanID']; ?>" method="post">
    <div class="form-group">
        <label>UserID</label>
        <input type="text" name="UserID" class="form-control" value="<?= $peminjaman['UserID']; ?>">
    </div>
    <div class="form-group">
        <label>BukuID</label>
        <input type="text" name="BukuID" class="form-control" value="<?= $peminjaman['BukuID']; ?>">
    </div>
    <div class="form-group">
        <label>Tanggal Peminjaman</label>
        <input type="date" name="TanggalPeminjaman" class="form-control" value="<?= $peminjaman['TanggalPeminjaman']; ?>">
    </div>
    <div class="form-group">
        <label>Status Peminjaman</label> 
        <input type="text" name="StatusPeminjaman" class="form-control" value="<?= $peminjaman['StatusPeminjaman']; ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
</form> 

<?= $this->endSection() ?>
