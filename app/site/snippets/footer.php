        <?php snippet('map') ?>

		<!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <?= js('assets/js/vendor/jquery.min.js') ?>
        <?= js('assets/js/vendor/TweenMax.min.js') ?>
        <?= js('assets/js/plugins/ScrollToPlugin.min.js') ?>
        <?= js('assets/js/components/SimpleSlider.js') ?>
        <?= js('assets/js/components/ScrollNav.js') ?>
        <?= js('assets/js/components/Prices.js') ?>
        <?= js('assets/js/app.js') ?>
        <!-- endbower -->
        <!-- endbuild -->

        
		<!-- build:remove -->
		<script src="http://localhost:35729/livereload.js"></script>
		<!-- /build -->


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
           (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
