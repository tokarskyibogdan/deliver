<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="feature-image">
					<?php the_post_thumbnail() ?>
				</div>
			<?php } endif; ?>
		<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
	<ul class="post-meta">
		<li class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date() ?></li>
		<li class="post-author"><i class="fa fa-user" aria-hidden="true"></i> <?php  the_author_posts_link(); ?></li>
		<li class="post-category"><i class="fa fa-bookmark" aria-hidden="true"></i><?php echo the_category(', '); ?></li>
		<li class="post-comments"><i class="fa fa-comments" aria-hidden="true"></i><a href="<?php echo get_comments_link(); ?> "><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a></li>
	</ul>
	<div class="entry-summary"><!-- .entry-header -->
		<?php echo get_the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
