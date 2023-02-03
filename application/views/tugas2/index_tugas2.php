<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Bootstrap CSS File -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title><?= $title ?></title>
</head>
<body>

    <div class="container mt-5 text-center">
        <h1>Daftar Tugas</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tugas</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $count = 0;
                    foreach($ref as $tugas) : 
                    $count++;
                ?>
                    <tr>
                    <th scope="row"><?= $count ?></th>
                    <td><?= $tugas->nama_tugas ?></td>
                    <td>
                        <a href="<?= $tugas->url ?>" class="badge badge-success">
                            Lihat
                        </a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Load jQuery File -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <!-- Load Bootstrap JS File -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>