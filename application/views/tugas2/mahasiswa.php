<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title>View - <?= $title ?></title>
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Mahasiswa</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">NIM</th>
                <th scope="col">Umur</th>
                <th scope="col">Kota Asal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $count = 0;
                    foreach($mahasiswa as $mhs) : 
                    $count++;
                ?>
                    <tr>
                    <th scope="row"><?= $count ?></th>
                    <td><?= $mhs->nama_mahasiswa ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->umur ?></td>
                    <td><?= $mhs->kota_asal ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>