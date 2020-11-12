<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reDev
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-top-inner">
					<div><h4>Get connected with us on social networks!</h4></div>
					<ul class="footer-socials">
						<li> <a href="http://<?php echo get_theme_mod('reDev-facebook')?>"><i class="fab fa-facebook-f"></i></a></li>
						<li> <a href="http://<?php echo get_theme_mod('reDev-twitter')?>"><i class="fab fa-twitter"></i></a></li>
						<li> <a href="http://<?php echo get_theme_mod('reDev-instagram')?>"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bot">

				<div id="footer-bot-inner" class="container">
					
					<div class="footer-container">
						<h4><?php echo get_theme_mod('reDev-footer-t0-title','Company name')?></h4>
						<hr>
						<p><?php echo get_theme_mod('reDev-t0-callout-text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,')?></p>
					</div>
					<div class="footer-container">
						<h4><?php echo get_theme_mod('reDev-footer-t1-title','Products')?></h4>
						<hr>
						<ul>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t0-under-link')?>"><?php echo get_theme_mod('reDev-footer-t0-under','Placeholder')?></a></li>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t1-under-link')?>"><?php echo get_theme_mod('reDev-footer-t1-under','Placeholder')?></a></li>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t2-under-link')?>"><?php echo get_theme_mod('reDev-footer-t2-under','Placeholder')?></a></li>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t3-under-link')?>"><?php echo get_theme_mod('reDev-footer-t3-under','Placeholder')?></a></li>
						</ul>
					</div>
					<div class="footer-container">
						<h4><?php echo get_theme_mod('reDev-footer-t2-title','Links')?></h4>
						<hr>
						<ul>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t4-under-link')?>"><?php echo get_theme_mod('reDev-footer-t4-under','Placeholder')?></a></li>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t5-under-link')?>"><?php echo get_theme_mod('reDev-footer-t5-under','Placeholder')?></a></li>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t6-under-link')?>"><?php echo get_theme_mod('reDev-footer-t6-under','Placeholder')?></a></li>
							<li><a href="<?php echo get_theme_mod('reDev-footer-t7-under-link')?>"><?php echo get_theme_mod('reDev-footer-t7-under','Placeholder')?></a></li>
						</ul>
					</div>				
					<div class="footer-container">
						<h4><?php echo get_theme_mod('reDev-footer-t3-title','Contact us')?></h4>
						<hr>
						<ul>
							<li><?php echo get_theme_mod('reDev-footer-t8-under','Placeholder')?></li>
							<li><?php echo get_theme_mod('reDev-footer-t9-under','Placeholder')?></li>
							<li><?php echo get_theme_mod('reDev-footer-t10-under','Placeholder')?></li>
							<li><?php echo get_theme_mod('reDev-footer-t11-under','Placeholder')?></li>
						</ul>
					</div>
				</div>
		</div>
		<div class="copyright-box"><p>copyright</p></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
