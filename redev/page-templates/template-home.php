<?php
/**
 * Template Name: Home Page Template
 */

get_header();
?>

	<main id="primary" class="site">
		<div class="intro" style="background-image:url(<?php if ( get_theme_mod( 'reDev-intro-callout-picture' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-intro-callout-picture' ) );
    } else {
        echo get_template_directory_uri() . '/img/mug.jpg';}?>);">
			<div class="container">
				<div class="intro-box">
					<div class="intro-text">
						<h1><?php echo get_theme_mod('reDev-callout-text-0','reDev');?></h1>
						<p><?php echo get_theme_mod('reDev-callout-text-1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.');?></p>
					</div>
					<div class="intro-buttons">
						<a href="http://<?php echo get_theme_mod('reDev-left-button-callout-link');?>"><button class="button1"><?php echo get_theme_mod('reDev-left-button-callout-text','Button 1');?></button></a>
						<a href="http://<?php echo get_theme_mod('reDev-right-button-callout-link');?>"><button class="button2"><?php echo get_theme_mod('reDev-right-button-callout-text','Button 2');?></button></a>
					</div>
				</div>
			</div>
		</div>
		<div class="main">
			<div class="container">
				<div class="bb">
					<div><img src="<?php if ( get_theme_mod( 'reDev-bb-callout-picture' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-bb-callout-picture' ) );
    } else {
        echo get_template_directory_uri() . '/img/prog.jpg';}?>"></div>
					<div><h1><?php echo get_theme_mod('reDev-bb-callout-title','reDev');?></h1><p><?php echo get_theme_mod('reDev-bb-callout-text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a ga');?></p></div>
				</div>
				<hr>
				<div class="af">
					<div class="af-top">
						<h1><?php echo get_theme_mod('reDev-as-callout-title','Awesome stuff');?></h1>
						<p><?php echo get_theme_mod('reDev-as-callout-text','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia.');?></p>
					</div>
					<div class="af-bot">
						<div class="af-ul">
							<ul>
								<li>
									<img src="<?php if ( get_theme_mod( 'reDev-thumb-img-0' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-thumb-img-0' ) );
    } else {
        echo get_template_directory_uri() . '/img/hash.svg';}?>" class="thumb-image-slot">
									<div>
										<h3><?php echo get_theme_mod('reDev-thumb-title-section-0','Thumb text')?></h3>
										<p><?php echo get_theme_mod('reDev-thumb-text-section-0','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima.');?></p>
									</div>
								</li>
								<li>
								<img src="<?php if ( get_theme_mod( 'reDev-thumb-img-1' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-thumb-img-1' ) );
    } else {
        echo get_template_directory_uri() . '/img/hash.svg';}?>" class="thumb-image-slot">
									<div>
										<h3><?php echo get_theme_mod('reDev-thumb-title-section-1','Thumb text')?></h3>
										<p><?php echo get_theme_mod('reDev-thumb-text-section-1','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima.');?></p>
									</div>
								</li>
								<li>
								<img src="<?php if ( get_theme_mod( 'reDev-thumb-img-2' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-thumb-img-2' ) );
    } else {
        echo get_template_directory_uri() . '/img/hash.svg';}?>" class="thumb-image-slot">
									<div>
										<h3><?php echo get_theme_mod('reDev-thumb-title-section-2','Thumb text')?></h3>
										<p><?php echo get_theme_mod('reDev-thumb-text-section-2','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima.');?></p>
									</div>
								</li>
							</ul>
						</div>
						<div class="af-img"><img src="<?php if ( get_theme_mod( 'reDev-as-callout-picture' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-as-callout-picture' ) );
    } else {
        echo get_template_directory_uri() . '/img/phonelap.jpg';}?>"></div>
						<div class="af-ul">
						<ul>
								<li>
								<img src="<?php if ( get_theme_mod( 'reDev-thumb-img-3' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-thumb-img-3' ) );
    } else {
        echo get_template_directory_uri() . '/img/hash.svg';}?>" class="thumb-image-slot">
									<div>
										<h3><?php echo get_theme_mod('reDev-thumb-title-section-3','Thumb text')?></h3>
										<p><?php echo get_theme_mod('reDev-thumb-text-section-3','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima.');?></p>
									</div>
								</li>
								<li>
								<img src="<?php if ( get_theme_mod( 'reDev-thumb-img-4' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-thumb-img-4' ) );
    } else {
        echo get_template_directory_uri() . '/img/hash.svg';}?>" class="thumb-image-slot">
									<div>
										<h3><?php echo get_theme_mod('reDev-thumb-title-section-4','Thumb text')?></h3>
										<p><?php echo get_theme_mod('reDev-thumb-text-section-4','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima.');?></p>
									</div>
								</li>
								<li>
								<img src="<?php if ( get_theme_mod( 'reDev-thumb-img-5' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-thumb-img-5' ) );
    } else {
        echo get_template_directory_uri() . '/img/hash.svg';}?>" class="thumb-image-slot">
									<div>
										<h3><?php echo get_theme_mod('reDev-thumb-title-section-5','Thumb text')?></h3>
										<p><?php echo get_theme_mod('reDev-thumb-text-section-5','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima.');?></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
						
				</div>
			</div>
			<div class="mask-mid" style="background-image:url(<?php if ( get_theme_mod( 'reDev-mid-callout-picture' ) > 0 ) {
        echo wp_get_attachment_url( get_theme_mod( 'reDev-mid-callout-picture' ) );
    } else {
        echo get_template_directory_uri() . '/img/lap.jpg';}?>);">
				<div>
					<h1><?php echo get_theme_mod('reDev-mid-callout-text','We are here for you')?></h1>
				</div>
			</div>
			<div class="services">
				<div class="container">
					<div><h2>Our services</h2></div>
					<div class="products">

					<?php 
					$loop = new WP_Query( array( 'post_type' => 're-product', 'posts_per_page' => -1 ) ); 

					while ( $loop->have_posts() ) : $loop->the_post();?>

					<div class="product-container">
						<div class="product-text">
							<h4 class="product-title"><?php the_title() ?></h4>
							<div class="product-content">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink() ?>" title="" rel="bookmark">read more...</a>
						</div>
					</div><?php
					endwhile; ?>
					</div>
					
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
