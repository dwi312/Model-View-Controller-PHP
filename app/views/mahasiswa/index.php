<div class="container mt-2">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                <div class="container-fluid">
                    <a class="navbar-brand me-md-5" href="#">Daftar Mahasiswa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class=" btn btn-primary" aria-current="page" href="#">Tambah Anggota</a>
                            </li>


                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>
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
                    <img src="<?= BASEURL; ?>/img/default.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mhs['nama']; ?></h5>
                        <p class="card-text">No ID <?= $mhs['nrp']; ?></p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
</div>