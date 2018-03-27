<div id="theme-toggle" class="contrast">
	<i class="far fa-moon"></i>
</div>


<footer class="footer">
	<div class="footer__container">
		<div class="footer__content row">


<!-- AUTHOR 
			<div class="col-lg-3 col-md-6 col-sm-12">
				<h3 class="h3"> Autor </h3>

			</div>-->

<!-- TAGS, LINKS -->
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="footer__social">
					<a href="https://www.linkedin.com/in/patryk-nizio/" target="_blank"><i class='fab fa-linkedin'> </i></a>
					<a href="https://github.com/Dyzio18" target="_blank"><i class='fab fa-github'> </i></a>
					<a href="https://stackoverflow.com/users/9518713/patryk-nizio" target="_blank"><i class='fab fa-stack-overflow'> </i></a>
				</div>

				<h3 class="h3"> tagi </h3>
				<div class="footer__tags">
					<?php
						$tags = get_tags();
						$html = '';
						foreach ( $tags as $tag ) {
							$tag_link = get_tag_link( $tag->term_id );
									
							$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'><span class='tag__hash'><i class='fab fa-slack-hash'> </i></span>";
							$html .= "{$tag->name}</a>";
						}
						$html .= ' ';
						echo $html;
					?>	
				</div>
				<h3 class="h3"> kategorie </h3>
				<div class="footer__category">
					<?php
					$categories = get_categories();
					foreach($categories as $category) {
					   echo '<a href="' . get_category_link($category->term_id) . '"><span class="tag__hash"><i class="fab fa-slack-hash"> </i>' . $category->name . '</a>';
					}
					?>	
				</div>

			</div>

<!-- CONTACT -->
			<div class="col-lg-6 col-md-12 col-sm-12">
				<h3 class="h2"> Kontakt: </h3>

					<?php //echo do_shortcode('[contact-form-7 id="53" title="Kontakt"]'); ?>
					<?php echo do_shortcode('[contact-form-7 id="31" title="formularz kontaktowy"]');?>

			</div>


		</div>
	</div>	
	<div class="footer__scrap">
		 created by&nbsp;<span title=" to ja :) " class="underline">Dyzio</span>&nbsp;with
		<div class="footer_heart">
			 <i class="far fa-heart"></i>
		</div>
	</div>
</footer>


</div> <!-- site-main -->
<?php wp_footer(); ?>

</body>
</html>
