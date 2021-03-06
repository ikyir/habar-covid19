<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- mycss -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css" />

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

    <title>Habar Covid-19</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Habar Covid-19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= base_url('habar') ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= base_url('habar/negeriku') ?>">Negeriku</a>
                    <a class="nav-item nav-link" href="<?= base_url('habar/dunia') ?>">Dunia</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span>Mencegah</span> Lebih Baik <br> Dari Pada <span>Mengobati</span></h1>
        </div>
    </div>
    <!-- end jumbotron -->

    <!-- container -->
    <div class="container">
        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="<?= base_url('assets/'); ?>img/user-merah.png" alt="" class="float-left">
                        <h4><?php foreach ($obj as $obj) : ?>
                                <?= $obj->positif; ?>
                            <?php endforeach; ?></h4>
                        <p>Positif</p>
                    </div>
                    <div class="col-lg">
                        <img src="<?= base_url('assets/'); ?>img/user-hijau.png" alt="" class="float-left">
                        <h4><?= $obj->sembuh; ?></h4>
                        <p>Sembuh</p>
                    </div>
                    <div class="col-lg">
                        <img src="<?= base_url('assets/'); ?>img/rip.png" alt="" class="float-left">
                        <h4><?= $obj->meninggal; ?></h4>
                        <p>Meninggal</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end info panel -->
    </div>
    <!-- end container -->

    <!-- footer -->
    <div class="row footer">
        <div class="col text-center">
            <p>2020 All Rights Reserved by Diki irwan.</p>
        </div>
    </div>
    <!-- end footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>