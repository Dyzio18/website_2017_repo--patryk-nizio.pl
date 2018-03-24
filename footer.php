<div id="theme-toggle" class="contrast">
	<i class="far fa-moon"></i>
</div>


<footer class="footer">
	<div class="footer__container">
		<div class="footer__content row">


			<div class="col-lg-6 col-md-12 col-sm-12">
				<h3> Autor: </h3>

					<?php
					echo do_shortcode(
						'[contact-form-7 id="53" title="Kontakt"]'
					);
					?>

				</div>

			<div class="col-lg-3 col-md-6 col-sm-12">
				<h3> Linki: </h3>
                <ul class="footer__link">
                    <li><a href="/portfolio">Portfolio</a> </li>
                    <li><a href="/about-me">O mnie</a> </li>

                </ul>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-12">
				<h3> Tagi: </h3>
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
			</div>


		</div>
	</div>	
	<div class="footer__scrap">
		 created by Dyzio with
		<div class="footer_heart">
			 <i class="far fa-heart"></i>
		</div>
	</div>
</footer>


</div> <!-- site-main -->
<?php wp_footer(); ?>

</body>
</html>
