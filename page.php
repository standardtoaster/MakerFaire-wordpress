<?php get_header(); ?>
	<section class="body page">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<section>
				<?php the_content(); ?>
			</section>
			<?php // I never really use meta data like date, comments, etc. on pages. It can be pulled from single.php if you want. ?>
		</article>
		<?php endwhile; ?>
		<?php else : ?>
		<article>
			<header>
				<h2>Not Found</h2>
			</header>
		</article>
		<?php endif; ?>

	<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>
