<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  	<h1><?php the_title(); ?></h1>
  	<?php the_content(); ?>

  	<?php comments_template(); ?>

  <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

  <?php previous_post_link(); ?>
  <?php next_post_link(); ?>

<?php get_footer(); ?>
