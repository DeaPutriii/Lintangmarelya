<?= $this->extend('template/ci4') ?>
<?= $this->section('create') ?>

<h1>Edit Pengembalian</h1>

<form action="/pengembalian/update/<?= $pengembalian['PengembalianID'] ?>" method="post">
    <input type="hidden" name="PengembalianID" value="<?= $pengembalian['PengembalianID'] ?>">
    <label for="UserID">User ID</label>
    <input type="number" name="UserID" value="<?= $pengembalian['UserID'] ?>" required><br>

    <label for="BukuID">Buku ID</label>
    <input type="number" name="BukuID" value="<?= $pengembalian['BukuID'] ?>" required><br>

    <label for="TanggalPengembalian">Tanggal Pengembalian</label>
    <input type="date" name="TanggalPengembalian" value="<?= $pengembalian['TanggalPengembalian'] ?>" required><br>

    <button type="submit">Update</button>
</form> 

<?= $this->endSection() ?> 