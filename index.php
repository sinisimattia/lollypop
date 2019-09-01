<?php get_header();
	// Template Name: All Posts
?>
<div id="map-wrapper">
	<div id="store-map"></div>
	<script>loadMap();</script>
</div>

<div class="feed-wrapper" id="main">

	<?php if( have_posts() ){ ?>
	<div id="feed">
		<?php while ( have_posts() ){ the_post(); ?>
		<div class="item">
			<div class="item-decor">
				<?php if ( get_the_post_thumbnail_url() ) { ?>
					<a href="<?php echo get_permalink() ?>">
						<div class="thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
							<div class="cta">
								<p>View</p>
							</div>
						</div>
					</a>
				<?php } ?>
			</div>

			<div class="item-info">
				<p class="title"><a class="link" href="<?php echo get_permalink() ?>"><?php the_title() ?></a></p>
				<hr>
				<p class="descr"><?php the_excerpt() ?></p>
				<br>
				<p class="info"><a><?php the_time("d M Y") ?> @ <?php the_time() ?></p>
				<br>
				<a href="<?php echo get_permalink() ?>" class="continue-reading link">View</a>
			</div>
		</div>
		<?php }/*end of while*/ } /*end of if*/ ?>
	</div>
</div>

<div id="feedback-wrapper">
	<div class="angle" id="close-feedback"></div>
	<p class="title" id="CU">Contact Us</p>
	<hr id="divider">
	<form id="feedback" method="post">
		<input id="first-name" name="first-name" autocomplete="first-name" placeholder="Your Name">
		<input id="email" name="email" autocomplete="email" placeholder="Email*" required>
		<textarea id="help" name="help" placeholder="How can we help you?*" required></textarea>
		<button type="submit">Send</button>
	</form>

	<div class="talkbubble" id="open-feedback"><p>Contact Us</p></div>
</div>

<?php get_footer(); ?>