<?php defined( 'ABSPATH' ) or die(); ?>
<?php get_header(); ?>

<main class="main-content">

<?php if ( have_posts() ) : the_post(); ?>
	<div class="contenedor-section">
		<section>
		<?php the_content(); ?>
		</section>
	</div>
<?php endif; ?>


</main>
<?php get_footer(); ?>