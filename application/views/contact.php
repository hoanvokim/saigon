<?php $this->load->view('template/header') ?>

<section class="section-wrap style-2" id="intro"
		 style="background-image: url(<?php echo base_url() ?>assets/img/longchim.jpg)">
	<div class="container">
		<div class="row">

			<div class="col-sm-9 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s"
				 data-wow-delay="0s"
				 style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: slideInUp;">
				<h2 class="intro-heading heading-frame" style="color: white;">BOOK!</h2>
				<p style="color: white;">
					If you are looking for HOME, this is for YOU. #iamsaigon - Saigon Local Home for Expats who
					appreciate Saigon local and culture, centrally located
					which is 5-10 minutes to D1, D2, Phu Nhuan and airport, no flood no traffic.
				</p>
				<br/>
				<br/>

				<div class="col-sm-6">
					<strong style="color: white">
						SHORT TERM
					</strong>
					<br/>
					<a href="https://www.airbnb.com/users/66277193/listings"><img
							src="<?php echo base_url() . 'assets/img/airbnb.png'; ?>" width="150px;"/> </a>

				</div>
				<div class="col-sm-6">
					<strong style="color: white">
						LONG TERM
					</strong>
					<br/><br/> <a href="https://www.facebook.com/iamsaigon.vn/"><h3 style="color: white">Tell us now!</h3>
					</a>
				</div>
			</div>
			<div class="col-sm-12 text-center wow slideInUp" data-wow-duration="2.2s"
				 data-wow-delay="0s"
				 style="visibility: visible; animation-duration: 2.2s; animation-delay: 0s; animation-name: slideInUp;">
				<img src="<?php echo base_url() ?>assets/img/map.jpg" alt="" style="padding-top: 50px">
			</div>
		</div>

	</div>
</section>


<?php $this->load->view('template/footer') ?>
