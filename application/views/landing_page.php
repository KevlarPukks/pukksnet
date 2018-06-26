<body>


    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('<?= base_url() ?>/assets/img/skyline.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
                <div class="view overlay zoom">
                    <img src="<?= base_url() ?>/assets/img/logo.png" class="img mx-auto d-block" style="max-height: 10vw;height: 10vw;border-radius: 200px;" alt="pukksnetlogo">
                    <div class="mask flex-center waves-effect waves-light">
                        <p class="white-text">Zoom effect</p>
                    </div>
                </div>
                <h1 class="mb-4">
                    <strong><?= base_url() ?></strong>
                </h1>


                <p class="mb-4 d-none d-md-block">
                    <strong>Welcome to <a href="<?= base_url(); ?>">Pukks.net</a></strong>
                </p>
                <?= anchor('home', 'Enter <i class="fa fa-hand-pointer-o ml-2"></i>', array('class' => 'btn blue-gradient btn-lg')); ?>


                </a>
            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>


