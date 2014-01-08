<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
        <!--row for area newsletter and catalogue-->
        <div class="row backgrd-grey pro-forme-area">
            <div class="small-6 large-6 columns">
                <span class="pro-forme-area-uppercase font-color-grey-strong">je suis pro, je me forme</span><br />
                <span class="pro-forme-area-chapo font-color-blue">Plus de 180 formations en plomberie, chauffage...</span>
            </div>
            <div class="small-3 large-3 columns">
                <a href="#" class="button backgrd-grey-strong">Télécharger le catalogue</a>
            </div>
            <div class="small-3 large-3 columns">
                <a href="#" class="button backgrd-orange ">S'inscrire à notre newsletter</a>
            </div>
        </div>
        <!--/row for area newsletter and catalogue-->
        <!--row fast acces icon-->
        <div class="row fast-acces-area">
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-formation-a-la-une.png" alt="afabra formation à la une">
                <h6 class="title-fast-acces font-color-grey-strong">Formations à la une</h6>
                 <p>
                    Legam te quo labore laborum, commodo velit noster ut quid an cernantur aut 
                    fabulas aut.
                </p>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-nouvelle-formation.png" alt="afabra nouvelle formation">
                <h6 class="title-fast-acces font-color-grey-strong">Nouvelles formations</h6>
                 <p>
                    Legam te quo labore laborum, commodo velit noster ut quid an cernantur aut 
                    fabulas aut.
                </p>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-financer-formation.png" alt="afabra financer sa formation">
                <h6 class="title-fast-acces font-color-grey-strong">Nouvelles formations</h6>
                <p>
                    Legam te quo labore laborum, commodo velit noster ut quid an cernantur aut 
                    fabulas aut.
                </p>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-temoignage.png" alt="afabra témoignage">
                <h6 class="title-fast-acces font-color-grey-strong">Ils témoignent</h6>
                 <p>
                    Legam te quo labore laborum, commodo velit noster ut quid an cernantur aut 
                    fabulas aut.
                </p>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
        </div>
        <!--/row fast acces icon-->
        <!--row actu and video area-->
        <div class="row large-12 actu-video-area backgrd-grey">
           <div class="large-6 columns">
            test
            </div>
            <div class="large-6 columns">
            test
            </div>
        </div>
        <!--/row actu and video area-->
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
		
<?php get_footer(); ?>