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
        <h1>Login</h1>
        <form action="">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input">
                <label for="" class="form-check-label">Saya bukan robot</label>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary">
                    Sign in
                </button>
            </div>
        </form>
    </div>

    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>