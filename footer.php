





		<section>
			<footer>

				<p><?php echo get_theme_mod( 'footer_setting' ); ?></p>
				<?php if( true === get_theme_mod( 'showform_setting' ) ) { ?>
				<form action="<?php echo get_theme_mod( 'formurl_setting' ); ?>" method="post">
					<input type="email" placeholder="Your email..." name="EMAIL">
					<button type="submit">Sign me up!</button>
				</form>
				<?php } ?>
				<br>

				<?php if( true === get_theme_mod( 'showtwitter_setting' ) ) { ?>
				<a href="https://twitter.com/<?php echo get_theme_mod( 'twitter_setting' ); ?>" class="twitter-follow-button" data-show-count="true" data-size="large">Follow <?php echo get_theme_mod( 'twitter_setting' ); ?></a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<?php } ?>

				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_id' => 'nav', 'container_class' => 'nav-collapse', 'container' => 'nav', 'depth' => 1 ) ); ?>

			</footer>
		</section>

		<?php wp_footer(); ?>

	</body>
</html>
