<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dyzio_theme
 */

?>

 <article class="row ">

	 <div class="post__thumbnail col-lg-6 col-md-6 col-sm-12">
		<div class="thumbnail__box">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="thumbnail__img--crop">
					<?php if ( has_post_thumbnail() ) : ?>
						<img src="<?php the_post_thumbnail_url('large');?>" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
					<?php else: ?>
						<img src="http://maxpixel.freegreatpicture.com/static/photo/1x/Island-Flat-Design-Ocean-Ducks-Sea-Deserted-Island-3028648.png" alt="<?php the_title_attribute(); ?>" class="thumbnail__img" />
					<?php endif; ?>
					<h3 class="link--clear thumbnail__title   h3"> <?php echo the_title() ; ?> </h3>
					<span class="thumbnail__date"><?php echo get_the_date(); ?></span>
				</a>

				<?php   
				$categories = get_the_category();  $separator = ' '; $output = '';
				if ( ! empty( $categories ) ) {
					foreach( $categories as $category ) {
						$output .= '<a class="thumbnail__category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
					}
					echo trim( $output, $separator );
				}
				?>
		</div>
	 </div>
	 <div class="thumbnail__desc col-lg-6 col-md-6 col-sm-12">
		<?php the_excerpt(); ?>
	</div>


	<!--/ Thumbnail
	<div class="thumbnail__desc">
		<span class="thumbnail__date"><?php echo get_the_date(); ?></span>
		<a href="<?php the_permalink(); ?>" class="thumbnail__header"> <h3><?php echo the_title() ; ?> </h3></a>
		<div class="thumbnail__text"> <?php echo the_excerpt(); ?><div>
	</div> -->
</article>



	
<!-- <article id="post-<?php the_ID(); ?>" >
	<header class="entry-header">
	<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php //if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php dyzio_theme_posted_on(); ?>
		</div><!-- .entry-meta ->
		<?php //endif; ?>
		</header><!-- .entry-header ->

		<?php //dyzio_theme_post_thumbnail(); ?>

		<div class="entry-summary">
		<?php //the_excerpt(); ?>
		</div><!-- .entry-summary ->

		<footer class="entry-footer">
		<?php //dyzio_theme_entry_footer(); ?>
	</footer><!-- .entry-footer ->
</article>#post-<?php the_ID(); ?> -->


