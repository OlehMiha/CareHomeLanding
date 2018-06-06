<!-- Footer -->
		<footer class="footer_div_bot">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col">
						<a href="#" data-toggle="modal" data-target="#Terms_of_Use">Terms of Use</a>
						<a href="#" data-toggle="modal" data-target="#PrivacyPolicy">Privacy Policy</a>
					</div>
					<div class="col">
						<p class="copy">
                    <?php if( $сopyrighted = get_field('сopyrighted', 'option') ) { ?>
                    		<?php echo $сopyrighted; ?>
                    <?php } ?>
						</p>
					</div>
				</div>
			</div>
		</footer>

    </div>  

<!-- Modal -->
<div class="modal fade" id="Terms_of_Use" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog_1 modal-dialog_2" role="document">
		<div class="modal-content">
			<div class="modal-body modal-body_1">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
				<div class="content_modal">
					<p class="title">Terms of Use</p>
					<div class="content_modal_iner custom_scrollbar">
                 <?php if( $terms_of_use = get_field('terms_of_use', 'option') ) { ?>
                 		<?php echo $terms_of_use; ?>
                 <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="PrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog_1 modal-dialog_2" role="document">
		<div class="modal-content">
			<div class="modal-body modal-body_1">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
				<div class="content_modal">
					<p class="title">Privacy Policy</p>
					<div class="content_modal_iner custom_scrollbar">
                 <?php if( $privacy_policy = get_field('privacy_policy', 'option') ) { ?>
                 		<?php echo $privacy_policy; ?>
                 <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <?php wp_footer(); ?>

	<?php if( !(is_page("index") || is_home()) ): ?>
	   <script>
			(jQuery)(document).ready(function($){ 
				$('.menu_top a').on('click', function (e) {
			 		e.preventDefault();
			 		if($(this).attr('href')[0] == "#"){
			 			document.location.href = '<?php echo home_url(); ?>' + $(this).attr('href');
			 		}
			 	});
			});
		</script>

	<?php endif; ?>

  </body>
</html>