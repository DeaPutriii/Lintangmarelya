<?= $this->extend('template/ci4') ?>
<?= $this->section('content') ?>

<h2 class="mt-4">Edit Pengguna</h2>
<form action="/user/update" method="post" class="mt-3">
<link rel="stylesheet"a href="<?= base_url('asset\bootstrap-5.3.3-dist\css\bootstrap.min.css')?>">
    <div class="mb-3">
        <label for="Username" class="form-label">Username</label>
        <input type="text" name="Username" id="Username" class="form-control" value="<?=$user['Username']?>" required>
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="text" name="Password" id="Password" class="form-control" value="<?=$user['Password']?>" required>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" name="Email" id="Email" class="form-control" value="<?=$user['Email']?>" required>
    </div>
    <div class="mb-3">
        <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
        <input type="text" name="NamaLengkap" id="NamaLengkap" class="form-control" value="<?=$user['NamaLengkap']?>" required>
    </div>
    <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <input type="text" name="Alamat" id="Alamat" class="form-control" value="<?=$user['Alamat']?>" required>
    </div>
    <input type="hidden" name="UserID" value="<?=$user['UserID']?>">
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
 