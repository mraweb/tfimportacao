<?php
 /*
 Template name: produtos interna
 */
 ?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post();?>
    	<p class="hProd"><strong>Produtos</strong></p>
    	
		<?php get_sidebar(); ?>
        
		<section id="contProd">
    		<div id="breadcrumb">
            	<script type="text/javascript">
					$(document).ready(function(){
						$("#breadcrumb a").addClass("link");
						})
				</script>
            	<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
            </div>
            
            <h1 id="ancor" class="hPdr"><?php the_title();?></h1>
            <p class="btVoltar"><a href="javascript:history.back(1);" title="Voltar"></a></p>

			<?php the_content();?>
    		<?php endwhile; ?>
    		<?php endif; ?>
       	</section><!-- FINAL CONTENT -->

    </section><!-- FINAL MAIN -->
 	
<?php get_footer(); ?>