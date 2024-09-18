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
                <h3 class="card-title" style="color:blue;"><strong>Daftar Buku</strong></h3>
                <div class="card-tools">
                    <a href="/buku/create" class="btn btn-primary btn-sm">Tambah Buku</a>
                </div>
                <br>
                <table class="table table-bordered">
                    <thead> 
                        <tr> 
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 0;
                        foreach ($lin as $key) { 
                            $nomor++;    
                        ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><?= $key["judul"]; ?></td>
                            <td><?= $key["penulis"]; ?></td>
                            <td><?= $key["penerbit"]; ?></td>
                            <td><?= $key["tahun_terbit"]; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Aksi">
                                    <form action="/buku/edit" method="post" style="display:inline;">
                                        <input type="hidden" name="id_buku" value="<?= $key['id_buku']?>">
                                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                                    </form>
                                    <form action="/buku/delete" method="post" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                        <input type="hidden" name="id_buku" value="<?= $key['id_buku']?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
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
        background-color: #343a40;
    }
    .container-fluid {
        margin-left: 260px;
    }
    .sidebar-heading {
        font-size: 1.5rem;
        border-bottom: 2px solid #495057;
        padding-bottom: 10px;
    }
    .list-group-item {
        font-size: 1.2rem;
        background-color: #343a40;
        color: #f8f9fa;
        border: none;
    }
    .list-group-item:hover {
        background-color: #495057;
    }
</style>

<!-- Link ke Bootstrap JS dan CSS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?= $this->endSection() ?>
