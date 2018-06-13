<!-- Footer -->
<footer class="footer minimal bg-dark">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-md-offset-12">

				<div class="footer-logo local-scroll mb-30 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
					<h2>
						<a href="#home" class="color-white"><img
								src="<?php echo base_url() ?>assets/img/iamsaigon-white-logo.png"
								alt="Homepage" style="width: 300px;"></a>
					</h2>
				</div>

				<div class="socials footer-socials">
					<a href="https://www.facebook.com/iamsaigon.vn/"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/iamsaigon.vn/"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div> <!-- end socials -->

				<span class="copyright text-center">
              ©2018 iamsaigon  |  Development by <a href="http://beu.photography/">Hoan vo</a>
            </span>

			</div>

		</div>
	</div>
</footer> <!-- end footer -->

<div id="back-to-top">
	<a href="#top"><i class="fa fa-angle-up"></i></a>
</div>

</div> <!-- end main-wrapper -->

<!-- jQuery Scripts -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/gmap3.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/rev-slider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>

<!-- Google Map -->
<script type="text/javascript">
	$(document).ready(function () {

		var gmapDiv = $("#google-map");
		var gmapMarker = gmapDiv.attr("data-address");

		gmapDiv.gmap3({
			zoom: 16,
			address: gmapMarker,
			oomControl: true,
			navigationControl: true,
			scrollwheel: false,
			styles: [
				{
					"featureType": "all",
					"elementType": "all",
					"stylers": [
						{"saturation": "-70"}
					]
				}]
		})
			.marker({
				address: gmapMarker,
				icon: "img/map_pin.png"
			})
			.infowindow({
				content: "V Tytana St, Manila, Philippines"
			})
			.then(function (infowindow) {
				var map = this.get(0);
				var marker = this.get(1);
				marker.addListener('click', function () {
					infowindow.open(map, marker);
				});
			});
	});
</script>


<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
		src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>
</html>
