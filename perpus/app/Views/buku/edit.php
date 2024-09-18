<?= $this->extend('template/ci4') ?>

<?= $this->section('content') ?>

<h2 class="mt-4">Edit Buku</h2>
<form action="/buku/update/<?= $id_buku ?>" method="post" class="mt-3">
    <input type="hidden" name="id_buku" value="<?= $id_buku ?>">

    <div class="mb-3">
        <label for="judul" class="form-label">Judul:</label>
        <input type="text" name="judul" id="judul" class="form-control" value="<?= $judul ?>" required>
    </div>
    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis:</label>
        <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $penulis ?>" required>
    </div> 
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $penerbit ?>" required>
    </div> 
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?= $tahun_terbit ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Buku</button>
</form>

<?= $this->endSection() ?>
