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
                <h3 class="card-title" style="color:blue;"><strong>Daftar Peminjaman</strong></h3>
                <div class="card-tools">
                    <a href="/peminjaman/create" class="btn btn-primary btn-sm">Tambah Peminjaman</a>
                </div>
                <br> 
                <table class="table table-bordered">
                    <thead> 
                        <tr>
                            <th>PeminjamanID</th>
                            <th>UserID</th>
                            <th>BukuID</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 0;
                        foreach ($peminjaman as $item) { 
                            $nomor++;    
                        ?>
                        <tr>
                        <td><?= $nomor; ?></td>
                        <td><?= $item["UserID"]; ?></td>
                        <td><?= $item["BukuID"]; ?></td>
                        <td><?= $item["TanggalPeminjaman"]; ?></td>
                        <td><?= $item["StatusPeminjaman"]; ?></td>

                            <td>
                                <form>
                                    <a href="/peminjaman/edit/<?= $item['PeminjamanID'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/peminjaman/delete/<?= $item['PeminjamanID']?>" class="btn btn-danger btn-sm">Hapus</a>
                                    
                                    <input type="hidden" name="PeminjamanID" value="<?= $item['PeminjamanID']?>">
                                    <input type="hidden" name="UserID" value="<?= $item['UserID']?>">
                                    <input type="hidden" name="BukuID" value="<?= $item['BukuID']?>">
                                    <input type="hidden" name="TanggalPeminjaman" value="<?= $item['TanggalPeminjaman']?>">
                                    <input type="hidden" name="StatusPeminjaman" value="<?= $item['StatusPeminjaman']?>">
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
