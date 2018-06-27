<!--Main layout-->
<body class="stylish-color">
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">
                    <div class="container">
                        <h1 class="mb-4">
                            <strong>Pukks.net</strong>
                        </h1>
                    </div>
                    <br/>
                    <h3>
                        <strong>Welcome to the Pukks.net <br/>The one stop entertainment site</strong>
                    </h3>


                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?= base_url() ?>/assets/img/spinneroids.gif" class="card-img-top" alt="spinneroids">
                                <?= anchor('pukka_studios/pukka_studios', '<div class="mask rgba-white-slight"></div>') ?>

                            </div>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Pukka Studios</h4>
                                <!--Text-->
                                <strong>For the latest games and info by Pukka Studios<br/> <?= anchor('pukka_studios', 'click here', array('class' => 'btn btn-indigo btn-rounded waves-effect')) ?></strong>
                                <p class="card-text">
                                    <strong>The latest games available to play are ZigZag clone, Spinneroids, Swipestriker, Invading Space and Attack the blox. </strong>
                                </p>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->              <div class="view overlay">
                                <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fRL1-druA4E" allowfullscreen></iframe>
                                </div>
                            </div>



                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Music</h4>
                                <!--Text-->
                                <p class="card-text">                    <strong>For the latest music by Pukks and co<br/><?= anchor('music', 'Click here', array('class' => 'btn btn-indigo btn-rounded waves-effect')) ?> </strong></p>


                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?= base_url() ?>/assets/img/bad.png" class="card-img-top" alt="">
                                <?= anchor('tv_shows/tv_shows', '<div class="mask rgba-white-slight"></div>') ?>

                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">TV Shows</h4>
                                <!--Text-->
                                <p class="card-text">  <strong>For the latest tv show/series reviews<br/> <?= anchor('tv_shows', 'Click here', array('class' => 'btn btn-indigo btn-rounded waves-effect')) ?> </strong></p>

                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <i class="fa fa-user fa-5x indigo-text"></i>
                                <?= anchor('about/about', '<div class="mask rgba-white-slight"></div>') ?>

                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">About Me</h4>
                                <!--Text-->
                                <p class="card-text">For the latest info about me.</p>

                                <a href="https://mdbootstrap.com/angular/" target="_blank" class="btn btn-primary btn-md">Free download
                                    <i class="fa fa-download ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <i class="fa fa-address-card fa-5x indigo-text"></i>
                                <?= anchor('about/about', '<div class="mask rgba-white-slight"></div>') ?>

                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Contact</h4>
                                <!--Text-->
                                <p class="card-text">If you have any questions regarding my site or would like to get in touch</p>
                                <a href="https://mdbootstrap.com/react/" target="_blank" class="btn btn-primary btn-md">Free download
                                    <i class="fa fa-download ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->



                </div>
                <!--Grid row-->



            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->