<!-- Footer
		============================================= -->
		<footer class="bg-light text-center">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<br>
						Hak Cipta © 2023 Aplikasi EduTech<br>
						
					</div>

			</div><!-- #copyrights end -->

			</div>
			
		</footer> <!-- #footer end -->


		

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$( '#vertical-nav nav ul li:has(ul)' ).addClass('sub-menu');
			$( '#vertical-nav nav ul li:has(ul) > a' ).append( ' <i class="icon-angle-down"></i>' );

			$( '#vertical-nav nav ul li:has(ul) > a' ).click( function(e){
				var element = $(this);
				$( '#vertical-nav nav ul li' ).not(element.parents()).removeClass('active');
				element.parent().children('ul').slideToggle( function(){
					$(this).find('ul').hide();
					$(this).find('li.active').removeClass('active');
				});
				$( '#vertical-nav nav ul li > ul' ).not(element.parent().children('ul')).not(element.parents('ul')).slideUp();
				element.parent('li:has(ul)').toggleClass('active');
				e.preventDefault();
			});
		});
		

	</script>

</body>
</html>