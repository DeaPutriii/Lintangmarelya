<?= $this->extend('template/ci4') ?>
<?= $this->section('content') ?>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center" style="font-size: 1.5rem; border-bottom: 2px solid #495057;"><strong>Pilihan Buku</strong></div>
        <div class="list-group list-group-flush">
            <a href="/user" class="list-group-item list-group-item-action bg-dark text-light">User</a>
            <a href="/buku" class="list-group-item list-group-item-action bg-dark text-light">Buku</a>
            <a href="/peminjaman" class="list-group-item list-group-item-action bg-dark text-light">Peminjaman</a>
            <a href="/pengembalian" class="list-group-item list-group-item-action bg-dark text-light">Pengembalian</a>
            <a href="/ulasan" class="list-group-item list-group-item-action bg-dark text-light">Ulasan Buku</a>
            <a href="/kategori" class="list-group-item list-group-item-action bg-dark text-light">Kategori</a>
            <a href="/koleksi-pribadi" class="list-group-item list-group-item-action bg-dark text-light">Koleksi Pribadi</a>
        </div>
    </div> 

    <!-- Content -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="color:blue;"><strong>Daftar Pengguna</strong></h3>
                <div class="card-tools">
                    <a href="/users/create" class="btn btn-primary btn-sm">Tambah Pengguna</a>
                </div>
                <br>
                <table class="table table-bordered">
                    <thead> 
                        <tr>
                            <th>UserID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $nomor = 0;
                        foreach ($users as $user) { 
                            $nomor++;    
                        ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><?= $user["Username"]; ?></td>
                            <td><?= $user["Password"]; ?></td>
                            <td><?= $user["Email"]; ?></td>
                            <td><?= $user["NamaLengkap"]; ?></td>
                            <td><?= $user["Alamat"]; ?></td>
                            <td>
                                <a href="/user/edit/<?= $user['UserID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/user/delete/<?= $user['UserID'] ?>" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- CSS untuk sidebar -->
<style>
    #sidebar-wrapper {
        width: 250px;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        padding-top: 20px;
        background-color: #343a40; /* Warna abu-abu gelap untuk background sidebar */
    }
    .container-fluid {
        margin-left: 260px; /* Sesuaikan jarak konten dengan sidebar */
    }
    .sidebar-heading {
        font-size: 1.5rem; /* Ukuran lebih besar untuk teks heading */
        border-bottom: 2px solid #495057; /* Garis di bawah heading */
        padding-bottom: 10px; /* Ruang di bawah teks heading */
    }
    .list-group-item {
        font-size: 1.2rem; /* Ukuran lebih besar untuk teks di item list */
        background-color: #343a40; /* Warna abu-abu gelap untuk item list */
        color: #f8f9fa; /* Warna teks terang */
        border: none; /* Menghilangkan border default */
    }
    .list-group-item:hover {
        background-color: #495057; /* Warna abu-abu lebih terang saat hover */
    }
</style>

<!-- Link ke Bootstrap JS dan CSS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?= $this->endSection() ?>
