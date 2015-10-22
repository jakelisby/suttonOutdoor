<?php
/*
Template Name: Homepage
*/
?>

<?php

get_header();
the_post();

$pid = get_the_id();

?>

<div class="page-header">

	<?php if( have_rows('homepage_slider') ): ?>

		<div class="homepage-slider">

		<?php while( have_rows('homepage_slider') ): the_row();

			// vars
			$slide_image = get_sub_field('slide_background');
			$slide_content = get_sub_field('slide_content');

			?>

			<div class="slide" style="background-image:url('<?php echo $slide_image['url']; ?>')">
				<div class="slide-content"><?php echo $slide_content; ?></div>
			</div>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>

</div>

<div class="container page-main">
	<div class="page-content">
		<?php the_content(); ?>
	</div>
	<div class="page-sidebar">
		<h2>Sidebar</h2>
	</div>
</div>

<?php if( have_rows('homepage_callout') ): ?>

	<div class="homepage-callouts">

	<?php while( have_rows('homepage_callout') ): the_row();

		// vars
		$callout_title = get_sub_field('title');
		$callout_content = get_sub_field('content');
		$callout_background = get_sub_field('background_image');

		?>

		<div class="callout" style="background-image:url('<?php echo $callout_background['url']; ?>')">
			<div class="container">
				<div class="callout-content">
					<h2 class="callout-title"><?php echo $callout_title; ?></h2>
					<?php echo $callout_content; ?>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

	</div>

<?php endif; ?>

<?php get_footer(); ?>