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

    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?= $content ?></h1>
                <p class="lead">This is my first blog.</p>
            </div>
        </div>
    </div>

    <!-- Load jQuery File -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <!-- Load Bootstrap JS File -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>