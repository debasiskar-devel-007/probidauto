
<div class="container-fluid">
<div class="row footer-menu" style="text-align:center">
    <div class="row">
        <?php wp_nav_menu( array( 'theme_location' => 'menu_footer') ); ?>
    </div>
    <div class="row">
        <p style="text-align:center">&copy; COPY RIGHT BY <a href="http://probidauto.com">PROBID AUTO</a></p>
    </div>
</div>
</div>

</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.8.3.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel();
        interval: 2000,
        autoplay:1000
    });
</script>
<?php wp_footer(); ?>
</body>
</html>