<?php
/*
Template Name: Financement
*/
?>

<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	
	<div class="large-3 left">
        <?php // start loop
                    $the_query = new WP_Query( array(   'post_type' => 'financement',
                                                    ) );
                    while ($the_query->have_posts()) : 
                    $the_query->the_post();
                ?>
                       <?php the_post_thumbnail(); ?>
                    <div class="orbit-caption">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php the_content(); ?>
                    </div> 
                </li>
                <?php 
                    endwhile; // loop end
                ?>
    </div>


	</div>
		
<?php get_footer(); ?>