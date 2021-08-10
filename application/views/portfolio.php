<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Projects</title>
    <link rel="stylesheet" href="<?= base_url('assets/portfolio') ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/portfolio') ?>/baguetteBox.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>cards-gallery.css">
</head>

<body>
    <section class="gallery-block cards-gallery">
        <div class="container">
            <div class="heading">
                <h2>My Projects</h2>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < 10; $i++) { ?>

                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox" href="../img/image1.jpg">
                                <img src="<?= base_url('assets') ?>/img/image1.jpg" alt="Card Image" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h6><a href="#">E-Perpustakaan</a></h6>
                                <p class="card-text">
                                    Teknologi yang digunakan :
                                <ul>
                                    <li>Bahasa Pemrograman PHP</li>
                                    <li>Framework Codeigniter</li>
                                    <li>PHP version 7.2</li>
                                    <li>Admin LTE2</li>
                                    <li>Bootstrap</li>
                                </ul>
                                <a href="" class="btn btn-xl btn-info text-white">Demo</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <script src="<?= base_url('assets/portfolio') ?>/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', {
            animation: 'slideIn'
        });
    </script>
</body>

</html>