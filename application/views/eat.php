<?php $this->load->view('template/header') ?>
<section class="section-wrap style-2" id="intro">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center wow zoomInDown" data-wow-duration="1.2s"
				 data-wow-delay="0s"
				 style="visibility: visible;">
				<h2 class="intro-heading-invert heading-frame-invert">Eat!</h2>
				<p>
					Saigon is a city of food. Lets enjoy the most delicious and healthiest cuisines in the world.
					Ingredients used in different Vietnamese dishes provide you with variety of nutrients, including
					protein, vitamins, carbs and minerals.
					<br/>
					Forget boring hotel’s meals, taste Saigion by all senses!
				</p>
			</div>
		</div>
	</div>
</section>

<section class="mt-lrg-100">
	<div class="container">
		<div class="row">
			<div class="works-grid titles wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
				<?php
				if (isset($items) && ($items != 'Empty')) {
					foreach ($items as $item) {
						?>
						<div class="col-xs-3 work-item <?php echo $item->slug; ?>">
							<div class="work-container">
								<div class="work-img">
									<a href="<?php echo base_url() . 'eat/post/' . $item->slug; ?>">
										<img src="<?php echo base_url() . 'assets/img/' . $item->img; ?>" alt="">
									</a>
								</div>
								<div class="work-description">
									<h3>
										<a href="<?php echo base_url() . 'eat/post/' . $item->slug; ?>"><?php echo $item->title; ?></a>
									</h3>
								</div>
							</div>
						</div> <!-- end work-item -->
						<?php
					}
				}
				?>
			</div>

		</div>
	</div>
</section> <!-- end portfolio-->


<?php $this->load->view('template/footer') ?>
