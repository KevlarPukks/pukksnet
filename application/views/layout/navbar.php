<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark mdb-color darken-4">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">
        <img src="<?= base_url() ?>/assets/img/logo.png" height="30" alt="">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <?= anchor(base_url(), 'Pukks.net', array('class' => 'navbar-brand')); ?>
            <li class="nav-item">

                <?= anchor('home', 'Home', array('class' => 'nav-link')) ?>

            </li>
            <li class="nav-item">

                <?= anchor('music', 'Music', array('class' => 'nav-link')) ?>

            </li>
            <li class="nav-item">
                <?= anchor('pukka_studios', 'Pukka Studios', array('class' => 'nav-link')) ?>

            </li>
            <li class="nav-item">
                <?= anchor('tv_shows', 'TV Shows', array('class' => 'nav-link')) ?>

            </li>
            <li class="nav-item">
                <?= anchor('about', 'About', array('class' => 'nav-link')) ?>

            </li>
            <li class="nav-item">
                <?= anchor('contact', 'Contact', array('class' => 'nav-link')) ?>

            </li>

        </ul>
        <!--Links -->

        <form class = "form-inline">
            <div class = "md-form my-0">
                <input class = "form-control mr-sm-2" type = "text" placeholder = "Search" aria-label = "Search">
            </div>
        </form>
    </div>
    <!--Collapsible content -->

</nav>
<!--/.Navbar-->