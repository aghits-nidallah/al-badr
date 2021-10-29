<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="pager-section">
    <div class="container">
        <div class="pager-content text-center">
            <h2>Kontak</h2>
            <ul>
                <li><a href="#" title="">Home</a></li>
                <li><span>Kontak</span></li>
            </ul>
        </div><!--pager-content end-->
        <h2 class="page-titlee">Al Badr</h2>
    </div>
</section><!--pager-section end-->

<section class="page-content">
    <div class="container">
        <div class="mdp-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15851.154543126477!2d108.544678!3d-6.673091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dc4cb66d30d7b07!2sRA%20THOLA%20&#39;AL%20BADR!5e0!3m2!1sen!2sus!4v1635481826708!5m2!1sen!2sus&z=18" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!--mdp-map end-->
        <div class="mdp-contact">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mdp-our-contacts">
                        <h3>Kontak Kami</h3>
                        <ul>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon15.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>WhatsApp</h4>
                                        <span><a href="https://wa.me/+6281223612624">+62 812 2361 2624</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon16.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Jam Belajar</h4>
                                        <span>Senin - Sabtu 07:30 - 11:00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon17.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Alamat</h4>
                                        <span>Kompleks Parkiran Makam Sunan, Astana, Kec. Gunungjati, Cirebon, Jawa Barat 45151, Indonesia</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!--mdp-our-contacts end-->
                </div>
            </div>
        </div><!--mdp-contact end-->
    </div>
</section><!--page-content end-->
<?= $this->endSection('content') ?>