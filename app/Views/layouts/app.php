<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raudhatul Athfal Thola' Al-Badr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="template-description" content="Shelly - Website" />
    <meta name="template-author" content="merkulove">
    <meta name="template-keywords" content="" />
    <meta name="description" content="Website resmi RA Thola'al Badr" />
    <meta name="author" content="Aghits Nidallah">
    <meta name="keywords" content="Website RA Thola'al Badr Cirebon Gunung Jati" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>
    <div class="wrapper">
		<div class="main-section">
            <header>
                <div class="container">
                    <?= $this->include('layouts/header') ?>
                    <?= $this->include('layouts/navigation') ?>
                </div>
            </header>

            <?= $this->include('layouts/responsive-nav') ?>

			<?= $this->renderSection('banner') ?>
        </div>

        <?= $this->renderSection('content') ?>

        <?= $this->include('layouts/footer') ?>
    </div>

    <script src="<?= base_url('/assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/isotope.js') ?>"></script>
    <script src="<?= base_url('/assets/js/html5lightbox.js') ?>"></script>
    <script src="<?= base_url('/assets/js/slick.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/tweenMax.js') ?>"></script>
    <script src="<?= base_url('/assets/js/scripts.js') ?>"></script>
</body>

</html>