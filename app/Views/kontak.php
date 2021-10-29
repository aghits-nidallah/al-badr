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
        <h2 class="page-titlee">Shelly</h2>
    </div>
</section><!--pager-section end-->

<section class="page-content">
    <div class="container">
        <div class="mdp-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15851.154543126477!2d108.544678!3d-6.673091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dc4cb66d30d7b07!2sRA%20THOLA%20&#39;AL%20BADR!5e0!3m2!1sen!2sus!4v1635481826708!5m2!1sen!2sus&z=18" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!--mdp-map end-->
        <div class="mdp-contact">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="comment-area">
                        <h3>Add Comment</h3>
                        <form id="contact-form" method="post" action="#">
                            <div class="response"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="name" placeholder="Name" required>
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" placeholder="Email" required>
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div><!--form-group end-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit">
                                        <button type="button" id="submit" class="btn-default">Send Now <i class="fa fa-long-arrow-alt-right"></i></button>
                                    </div><!--form-submit end-->
                                </div>
                            </div>
                        </form>
                    </div><!--comment-area end-->
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="mdp-our-contacts">
                        <h3>Our Contacts</h3>
                        <ul>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon15.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Call</h4>
                                        <span>+2 342 5446 67</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon16.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Work Time</h4>
                                        <span>Mon - Fri 8 AM - 5 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-wrap">
                                    <div class="icon-v">
                                        <img src="assets/img/icon17.png" alt="">
                                    </div>
                                    <div class="dd-cont">
                                        <h4>Address</h4>
                                        <span>Franklin St, Greenpoint Ave</span>
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

<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsz-ltr-text">
                        <h2>Join us <br /> and stay tuned!</h2>
                        <a href="contacts.html" title="" class="btn-default">Join Us <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div><!--newsz-ltr-text end-->
                </div>
                <div class="col-lg-8">
                    <form class="newsletter-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name">
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email">
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group select-tg">
                                    <select>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                        <option>Class</option>
                                    </select>
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div><!--form-group end-->
                            </div>
                        </div>
                    </form><!--newsletter-form end-->
                </div>
            </div>
        </div><!--newsletter-sec end-->
    </div>
</section><!--newsletter-sec end-->
<?= $this->endSection('content') ?>