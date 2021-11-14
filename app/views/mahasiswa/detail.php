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
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </div>


            </div>
        </div>
    </div>
</div>