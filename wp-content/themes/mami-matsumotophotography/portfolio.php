<?php
/*
Template Name: portfolio2
*/
?>



<?php get_header(); ?>

<?php get_sidebar(); ?>


<div class="progress" id="progress">
	<span class="progress-bar"></span>
	<span class="progress-text">0%</span>
</div>

<!--写真一覧ここから-->

<div id="posts">
	
<?php if(have_posts()): while(have_posts()):the_post(); ?>
  
  <?php the_content(); ?>
  
<?php endwhile; endif; ?>
    
</div><!--posts-->

<!--写真一覧ここまで-->

<?php get_footer(); ?>

