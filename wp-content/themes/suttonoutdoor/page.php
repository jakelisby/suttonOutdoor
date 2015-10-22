<?php

get_header();
the_post();

$pid = get_the_id();

?>

<div class="page-header"></div>

<div class="container page-main">
	<div class="page-content">
		<?php the_content(); ?>
	</div>
	<div class="page-sidebar">
		<?php if ( is_active_sidebar( 'sidebar_widgets' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar_widgets' ); ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>