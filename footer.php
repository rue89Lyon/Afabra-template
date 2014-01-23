	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row font-color-white">
        <?php
                $the_query = new WP_Query( array( 'post_type' => 'index' ) );
                while ($the_query->have_posts()) : 
                $the_query->the_post();
            ?>
		<div class="small-4 large-4 columns lien-footer-area">
            <h1>Nos partenaires</h1>
           <?php the_field('nos_partenaires'); ?>
        </div>
        <div class="small-4 large-4 columns">
        <h1>Nous contacter</h1>
            <?php the_field('nous_contacter'); ?>
            <br />
            <a href="#" class="button backgrd-orange ">Trouver votre contact en cliquant ici</a>
        </div>
        <div class="small-4 large-4 columns">
            <?php the_field('adresse'); ?>
        </div>
        <?php  // loop end
            endwhile;
        ?>
	</div>
</div>
<footer class="full-width" role="contentinfo">
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
</body>
</html>