<div class="site-footer">
	<div class="container">
		<p>© 2015 Sutton Outdoor LLC Kansas City, MO | Phone: 816-659-3249</p>
	</div>
</div>

	<?php wp_footer(); ?>

	<?php if ( WP_ENV != 'production' ) : ?>
		<script type='text/javascript'>
			(function (d, t) {
				var bh = d.createElement(t), s = d.getElementsByTagName(t)[0],
					apiKey = 'API KEY HERE';
				bh.type = 'text/javascript';
				bh.src = '//www.bugherd.com/sidebarv2.js?apikey=' + apiKey;
				s.parentNode.insertBefore(bh, s);
			})(document, 'script');
		</script>
	<?php endif; ?>

</body>
</html>