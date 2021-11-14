<div class="container mt-4">
    <div class="row">
        <div class="col-lg-7">
            <?php Flasher::flash(); ?>
        </div>
    </div>

</div>


<div class="container mt-2">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark rounded">
                <div class="container-fluid">
                    <h3 class="navbar-brand me-md-5" href="#">Daftar Mahasiswa</h3>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#formModal">
                                Tambah Anggota
                            </button>
                        </li>


                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>

                </div>
            </nav>

        </div>
    </div>
</div>

<div class="container mt-2 mb-5">
    <div class="row row-cols-1 row-cols-md-5 g-4">

        <?php foreach ($data['mhs'] as $mhs) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= BASEURL; ?>/img/<?= $mhs['gambar']; ?>" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mhs['nama']; ?></h5>
                        <p class="card-text">No ID <?= $mhs['nrp']; ?></p>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">

                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-2">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" name="nrp" id="nrp">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="input-group mb-3 mt-2">
                        <label class="input-group-text" for="jurusan">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Bisnis">Bisnis</option>

                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="gambar" class="form-label">gambar</label>
                        <input type="text" class="form-control" name="gambar" id="gambar">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>