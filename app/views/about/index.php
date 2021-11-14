<p></p>

<div class="container">
    <div class="jumbotron text-light">
        <h3 class="display-6">About Me</h3>
        <hr class="my-4">

        <div class="card bg-dark">
            <div class="card-header">
                <?= $data['pekerjaan']; ?>
            </div>
            <div class="card-body">

                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= BASEURL; ?>/img/ani.jpg" class="img-fluid rounded-start" alt="<?= $data['nama']; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="">
                                <h2 class="card-title"><?= $data['nama']; ?></h2>
                                <p class="card-text">Hay nama saya <?= $data['nama']; ?>, Profesi saya adalah seorang <?= $data['pekerjaan']; ?>.</p>
                            </div>
                            <div class="">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Profesi</th>
                                            <td>:</td>
                                            <td><?= $data['pekerjaan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Level</th>
                                            <td>:</td>
                                            <td><?= $data['pekerjaan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Atribute</th>
                                            <td>:</td>
                                            <td>Fire</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <a href="#" class="btn btn-primary mt-5">Go somewhere</a>


                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>