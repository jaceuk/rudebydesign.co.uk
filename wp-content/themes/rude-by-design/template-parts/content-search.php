<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rude_by_Design
 */

?>

<article>
	<header>
		<?php the_title(sprintf('<h2><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

		<?php if ('post' === get_post_type()) : ?>
			<div>
				<?php
				rude_by_design_posted_on();
				rude_by_design_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php rude_by_design_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php rude_by_design_entry_footer(); ?>
	</footer>
</article>