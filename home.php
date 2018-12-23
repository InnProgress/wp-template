<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  	<h1><?php the_title(); ?></h1>
  	<small><?php the_author_posts_link(); ?></small>
  	<small><?php the_category(); ?></small>
  	<p><?php the_excerpt(); ?></p>

  	<?php if(get_the_post_thumbail()) : ?>
  		<?php the_post_thumbail(); ?>
  	<?php endif(); ?>

  <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts yet.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
