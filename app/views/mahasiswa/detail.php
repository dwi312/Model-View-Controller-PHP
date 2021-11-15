<div class="container mt-3">
    <div class="card mb-3 bg-dark border-light text-light">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="<?= BASEURL; ?>/img/<?= $data['mhs']['gambar']; ?>" class="img-fluid rounded-start">
            </div>
            <div class="col">
                <div class="card-body">
                    <h2 class="card-title">Senior Data Enginnering</h2>
                    <h3 class="card-title">Java Developer</h3>


                    <div class="col-sm-5 mt-4">
                        <table class="table table-dark table-sm">
                            <tbody>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td><?= $data['mhs']['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NRP</th>
                                    <td><?= $data['mhs']['nrp']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><?= $data['mhs']['email']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jurusan</th>
                                    <td><?= $data['mhs']['jurusan']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eveniet debitis expedita sapiente reiciendis ea ut aliquid? Nam, temporibus blanditiis sunt nostrum consequuntur aliquid molestiae consectetur non totam rerum? Magnam.</p>

                    <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi beatae vitae provident soluta eius temporibus atque quidem aliquam esse possimus!</p>

                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-dark border-light">
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-light">Kembali ke Menu</a>
                <div class="">
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $data['mhs']['id']; ?>" class="btn btn-danger ms-3" onclick="return confirm('Hapus <?= $data['mhs']['nama']; ?> ?')">Hapus</a>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Edit Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/edit" method="POST">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['mhs']['nama']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" name="nrp" id="nrp" value="<?= $data['mhs']['nrp']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $data['mhs']['email']; ?>">
                    </div>
                    <div class="input-group mb-3 mt-2">
                        <label class="input-group-text" for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $data['mhs']['jurusan']; ?>">
                    </div>
                    <div class="d-flex justify-content-around mb-2 input-group">
                        <img class="col-sm-4 img-fluid img-preview" name="gambar_lama" src="<?= BASEURL; ?>/img/<?= $data['mhs']['gambar']; ?>" alt="">
                        <input type="file" class="form-control gambar" name="gambar" id="gambar" onchange="previewImage()">
                    </div>


            </div>
            <div class=" modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>