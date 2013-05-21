<?php
 /*
 Template name: produtos
 */
 ?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post();?>
    	<h1 id="ancor" class="hProd"><?php the_title();?></h1>
    	<?php get_sidebar(); ?>
		<section id="contProd">
    		<div id="breadcrumb">
            	<script type="text/javascript">
					$(document).ready(function(){
						$("#breadcrumb a").addClass("link");
						})
				</script>
            	<?php if(function_exists('bcn_display')){
					bcn_display();
				}?>
            </div>
			<?php the_content();?>
    		<?php endwhile; ?>
    		<?php endif; ?>
     	</section><!-- FINAL CONTENT -->

    </section><!-- FINAL MAIN -->
 	
<?php get_footer(); ?>