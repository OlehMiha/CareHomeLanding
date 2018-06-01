<!-- Footer -->
		<footer class="footer_div_bot">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col">
						<a href="#">Terms of Use</a>
						<a href="#">Privacy Policy</a>
					</div>
					<div class="col">
						<p class="copy">
							© 2015 Care home schedule. All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>

    </div>  

    <?php wp_footer(); ?>

<?php if( !(is_page("index") || is_home()) ): ?>
   <script>
		$(document).ready(function(){ 
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