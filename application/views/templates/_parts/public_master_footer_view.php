<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<footer class="page-footer text-center font-small mt-4 wow fadeIn">


    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/Puregamingmcr" target="_blank">
            <i class="fa fa-facebook mr-3"></i>
        </a>

        <a href="https://twitter.com/Pukks88" target="_blank">
            <i class="fa fa-twitter mr-3"></i>
        </a>

        <a href="https://www.youtube.com/user/Pukks88/" target="_blank">
            <i class="fa fa-youtube mr-3"></i>
        </a>


        <a href="https://github.com/pukks88" target="_blank">
            <i class="fa fa-github mr-3"></i>
        </a>

        <a href="https://www.instagram.com/pukka_studios/" target="_blank">
            <i class="fa fa-instagram mr-3"></i>
        </a>


    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © <?= date('Y'); ?> Copyright:
		<?= anchor(base_url(), 'Pukks.net'); ?>

    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>
<?php echo $before_closing_body;?>
</body>
</html>