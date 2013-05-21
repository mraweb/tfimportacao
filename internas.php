<?php
 /*
 Template name: internas
 */
 ?>

<?php get_header(); ?>
	
    <?php if (have_posts()): while (have_posts()) : the_post();?>
    <section id="contLeft">
    	<h1 id="ancor"><?php the_title();?></h1>
    
    <?php the_content();?>
    <?php endwhile; ?>
    <?php endif; ?>
</section> 	
<?php get_footer(); ?>