<?php /** Template Name: About Us Themplate */ get_header(); ?>
			</div>
		</div>


<div class="row">
	<div class="about-us-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>
	</div>
</div>
<div class="row about-us-missions">
	<div class="col-sm-12 col-md-4">
		<?php $meta_value = get_post_meta($post->ID, 'column-1-title', true); echo '<h4>'. $meta_value .'</h4>'; ?>
		<?php $meta_value = get_post_meta($post->ID, 'column-1-text', true); echo '<p>'. $meta_value .'</p>'; ?>
	</div>
	<div class="col-sm-12 col-md-4">
		<?php $meta_value = get_post_meta($post->ID, 'column-2-title', true); echo '<h4>'. $meta_value .'</h4>'; ?>
		<?php $meta_value = get_post_meta($post->ID, 'column-2-text', true); echo '<p>'. $meta_value .'</p>'; ?>
	</div>
	<div class="col-sm-12 col-md-4">
		<?php $meta_value = get_post_meta($post->ID, 'column-3-title', true); echo '<h4>'. $meta_value .'</h4>'; ?>
		<?php $meta_value = get_post_meta($post->ID, 'column-3-text', true); echo '<p>'. $meta_value .'</p>'; ?>
	</div>
</div>
</div>
<div class="container-fluid">
	<div class="row our-team-section">
		<?php $meta_value = get_post_meta($post->ID, 'our-team-title', true); echo '<h3>'. $meta_value .'</h3>'; ?>
		<?php $meta_value = get_post_meta($post->ID, 'our-team-description', true); echo '<p>'. $meta_value .'</p>'; ?>
	</div>
</div>







<?php get_footer(); ?>

