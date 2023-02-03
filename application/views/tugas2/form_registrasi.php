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
        <h1>Form Registrasi</h1>
        <form action="">
            <div class="form-group">
                <label for="">NIM</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control">
                <span class="text-muted">We'll never share you email with anyone else.</span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label for="" class="form-check-label">Setuju</label>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>