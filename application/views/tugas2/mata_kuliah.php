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
        <h1>Mata Kuliah</h1>
        <table class="table table-striped table-success">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Matakuliah</th>
                <th scope="col">SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $count = 0;
                    foreach($mata_kuliah as $mk) : 
                    $count++;
                ?>
                    <tr>
                    <th scope="row"><?= $count ?></th>
                    <td><?= $mk->nama_matakuliah ?></td>
                    <td><?= $mk->sks ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>