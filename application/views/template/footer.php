<!-- Footer -->
<footer class="footer minimal bg-dark">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<div class="footer-logo local-scroll mb-10 wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
					<h2>
						<a href="#home" class="color-white"><img
								src="<?php echo base_url() ?>assets/img/iamsaigon-white-logo.png"
								alt="Homepage" style="width: 300px;"></a>
					</h2>
				</div>
				<div class="mb-20">
				<span class="copyright text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
             	42/59 Hoang Hoa Tham, Ward 7, Binh Thanh District, HCMc, Vietnam.
            		</span>
					<a href="mailto:hello@iamsaigon.vn" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">hello@iamsaigon.vn</a>
				</div>
				<div class="socials footer-socials">
					<a href="https://www.facebook.com/iamsaigon.vn/" class="wow zoomIn" data-wow-duration="1s"
					   data-wow-delay="0.5s"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/iamsaigon.vn/" class="wow zoomIn" data-wow-duration="1s"
					   data-wow-delay="0.7s"><i class="fa fa-instagram"></i></a>
					<a href="https://goo.gl/maps/C2M3yFfQYsZ29oYa6" class="wow zoomIn" data-wow-duration="1s"
					   data-wow-delay="0.9s"><i class="fa fa-google-plus"></i></a>
					<a href="https://www.tripadvisor.com/Hotel_Review-g293925-d12955537-Reviews-Iamsaigon-Ho_Chi_Minh_City.html" class="wow zoomIn" data-wow-duration="1s"
					   data-wow-delay="1.2s"><i class="fa fa-tripadvisor"></i></a>
				</div> <!-- end socials -->

				<span class="copyright text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s">
              ©2019 iamsaigon.vn  |  Development by <a href="http://2brostudio.com/">2Brostudio</a>
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
	$(function () {
		var iframe = $('#player1')[0];
		var player = $f(iframe);
		var status = $('.status');

		// When the player is ready, add listeners for pause, finish, and playProgress
		player.addEvent('ready', function () {
			status.text('ready');

			player.addEvent('pause', onPause);
			player.addEvent('finish', onFinish);
			player.addEvent('playProgress', onPlayProgress);
		});

		// Call the API when a button is pressed
		$('button').bind('click', function () {
			player.api($(this).text().toLowerCase());
		});

		function onPause() {
			status.text('paused');
		}

		function onFinish() {
			status.text('finished');
		}

		function onPlayProgress(data) {
			status.text(data.seconds + 's played');
		}
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
<script src="<?php echo base_url() ?>assets/js/masonry.pkgd.min.js"></script>

</body>
</html>
