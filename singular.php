<?php get_header(); ?>



		<?php while ( have_posts() ) : the_post(); ?>
			<section>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="post-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>

					<?php edit_post_link('edit', ' <small class="edit">', '</small>'); ?>
				</article>
			</section>
		<?php endwhile; ?>



<?php get_footer(); ?>
