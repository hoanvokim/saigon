<?php $this->load->view('template/header') ?>
<!-- Page Title -->
<section class="page-title style-2">
	<div class="container relative clearfix">
		<div class="title-holder">
			<div class="title-text">
				<h1>  <?php echo $room->room_name; ?></h1>
				<ol class="breadcrumb">
					<li>
						<a href="<?php echo base_url() . 'stay'; ?>">Your home </a>
					</li>
					<li class="active">
						<?php echo $room->room_name; ?>
					</li>
				</ol>
			</div>
		</div>
	</div>
</section> <!-- end page title -->


<!-- Portfolio Single -->
<section class="section-wrap-mp portfolio-single">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div id="owl-slider-one-img" class="owl-carousel owl-theme oh">
					<?php
					if (isset($items) && ($items != 'Empty')) {
						foreach ($items as $item) {
							?>
							<div class="item">
								<a href="#">
									<img src="<?php echo base_url() . 'assets/img/' . $item->img; ?>"
										 alt=" <?php echo $room->room_name; ?>">
								</a>
							</div>
							<?php
						}
					}
					?>
				</div> <!-- end owl carousel -->
			</div> <!-- end slider -->

			<div class="col-md-12">
				<div class="portfolio-description">
					<h2><?php echo $room->room_name; ?></h2>
					<?php echo $room->des; ?>
					<br/>
					<div class="tags">
						<div style="padding-bottom: 35px;">
							<a href="#">AC</a>
							<a href="#">Wifi</a>
							<a href="#">En-suite bathroom</a>
							<a href="#">Fan</a>
							<a href="#">Mini bar</a>
							<a href="#">Kettle</a>
							<a href="#">Tea maker</a>
						</div>
						<div>
							<a href="#">Safety box</a>
							<a href="#">Hair dryer</a>
							<a href="#">Shampoo</a>
							<a href="#">Body gel</a>
							<a href="#">Hand wash</a>
							<a href="#">Towels</a>
						</div>
					</div>
                    <br/>
                    <br/>
					<div class="entry-share clearfix">
						<h6>Share:</h6>
						<div class="socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- end description -->

		</div>
	</div>
</section> <!-- end portfolio single -->


<!-- Related Projects -->
<section class="related-projects pb-30">
	<div class="container">
		<h4 class="heading-inline">Our Suggestions</h4>
		<div class="row mt-20">
			<div id="owl-related-works" class="owl-carousel owl-theme">
				<?php
				if (isset($suggests) && ($suggests != 'Empty')) {
					foreach ($suggests as $item) {
						?>
						<div class="work-item <?php echo $item->slug; ?>">
							<div class="work-container">
								<div class="work-img">
									<a href="<?php echo base_url() . 'rooms/room/' . $item->slug; ?>">
										<img src="<?php echo base_url() . 'assets/img/' . $item->img; ?>" alt="">
									</a>
								</div>
								<div class="work-description">
									<h3>
										<a href="<?php echo base_url() . 'rooms/room/' . $item->slug; ?>"><?php echo $item->room_name; ?></a>
									</h3>
								</div>
							</div>
						</div> <!-- end work-item -->
						<?php
					}
				}
				?>
			</div> <!-- end owl carousel-->
		</div>
	</div>
</section> <!-- end related projects-->

<?php $this->load->view('template/footer') ?>
