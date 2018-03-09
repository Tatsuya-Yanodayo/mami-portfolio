

<?php get_header(); ?>

     <!--メインスクリプト読み込み-->
    <?php wp_enqueue_script('top-loader', get_bloginfo('template_url').'/js/top-loader.js', array('jquery')); ?>


<div class="progress" id="progress">
	<span class="progress-bar"></span>
	<span class="progress-text">0%</span>
</div>


<div id="maximage">
    <img src="<?php bloginfo('template_directory');?>/img/resized1.jpg" alt="" width="1400" height="1050">
    <img src="<?php bloginfo('template_directory');?>/img/resized2.jpg" alt="Coalesse" width="1400" height="1050">
    <img src="<?php bloginfo('template_directory');?>/img/resized3.jpg" alt="" width="1400" height="1050">
</div>


<?php get_footer(home); ?>


