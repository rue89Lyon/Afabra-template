<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
        <!--row for area newsletter and catalogue-->
        <div class="row backgrd-grey pro-forme-area">
            <?php
                $the_query = new WP_Query( array( 'post_type' => 'index' ) );
                while ($the_query->have_posts()) : 
                $the_query->the_post();
            ?>
            <div class="small-6 large-6 columns">
                    <span class="pro-forme-area-uppercase font-color-grey-strong"><?php the_field('titre_jsp'); ?></span><br />
                    <span class="pro-forme-area-chapo font-color-blue"><?php the_field('sous_titre_jsp'); ?></span> 
            </div>
            <div class="small-3 large-3 columns">
                <a href="<?php the_field('ajouter_catalogue'); ?>" class="button backgrd-grey-strong">Télécharger le catalogue</a>
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
                    <?php the_field('txt_formation_une'); ?>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-nouvelle-formation.png" alt="afabra nouvelle formation">
                <h6 class="title-fast-acces font-color-grey-strong">Nouvelles formations</h6>
                    <?php the_field('txt_nouvelle_formation'); ?>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-financer-formation.png" alt="afabra financer sa formation">
                <h6 class="title-fast-acces font-color-grey-strong">Nouvelles formations</h6>
                    <?php the_field('txt_financer_formation'); ?>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
            <div class="small-3 large-3 columns center">
                <img src="<?php bloginfo('template_url'); ?>/images/ico-temoignage.png" alt="afabra témoignage">
                <h6 class="title-fast-acces font-color-grey-strong">Ils témoignent</h6>
                    <?php the_field('txt_temoignent'); ?>
                <a href="#" class="button backgrd-orange ">En savoir plus</a>
            </div>
        </div>
        <?php  // loop end
            endwhile;
        ?>
        <?php wp_reset_postdata(); ?> 
        <!--/row fast acces icon-->
        <!--row actu and video area-->
        <div class="row large-12 backgrd-grey">
           <div class="large-6 columns area-actu-video">
            <article>
                <h1 class="title-actu-video font-color-orange">L'actualité</h1>
                    <?php
                    $the_query = new WP_Query( array( 'post_type' => 'actu' ) );
                    while ($the_query->have_posts()) : 
                    $the_query->the_post();
                    ?>
                   <p><?php the_title(); ?></p>
                    <a href="#" class="button tiny backgrd-orange ">Lire cette actu</a>
                <?php  // loop end
                endwhile;
                ?>
            </article> 
            </div>
            <div class="large-6 columns area-actu-video">
            <article>
                <h1 class="title-actu-video font-color-orange">En vidéo</h1>
                <?php
                    $the_query = new WP_Query( array( 'post_type' => 'video' ) );
                    while ($the_query->have_posts()) : 
                    $the_query->the_post();
                    ?>
                    <p><?php the_title(); ?></p>
                    <p><?php the_field('txt_temoignent'); ?></p>
                <?php  //loop end
                endwhile;
                ?>
            </article> 
            </div>
        </div>
        <!--/row actu and video area-->
	</div>
		
<?php get_footer(); ?>