<?= $this->extend('template/ci4') ?>
<?= $this->section('create') ?>


<div class="container mt-5">
    <h2 class="mb-4 text-center">Tambah Peminjaman</h2>
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="/peminjaman/store" method="post">
                <div class="form-group mb-3"> 
                    <label for="UserID">User ID</label>
                    <input type="text" name="UserID" id="UserID" class="form-control" placeholder="Masukkan User ID" required>
                </div> 
                <div class="form-group mb-3">
                    <label for="BukuID">Buku ID</label>
                    <input type="text" name="BukuID" id="BukuID" class="form-control" placeholder="Masukkan Buku ID" required>
                </div>
                <div class="form-group mb-3">
                    <label for="TanggalPengembalian">Tanggal Pengembalian</label>
                    <input type="date" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="StatusPeminjaman">Status Peminjaman</label>
                    <select name="StatusPeminjaman" id="StatusPeminjaman" class="form-control" required>
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Dikembalikan">Dikembalikan</option>
                    </select>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block">Simpan <i class="bi bi-check-circle ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(function () {
        $('#TanggalPminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:MM:SS',
            defaultDate: new Date()
        });
    });

<?= $this->endSection() ?>
