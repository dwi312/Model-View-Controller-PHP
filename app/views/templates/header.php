<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background: #222;
        }
    </style>
    <title><?= $data['judul']; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="<?= BASEURL; ?>">DWI312</a>

            <div class="navbar-nav">
                <a class="nav-link active" href="<?= BASEURL; ?>/home">Home</a>
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
            </div>
        </div>
    </nav>