<?php $this->load->view('template/header') ?>
<section class="section-wrap-mp mt-lrg-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="  text-align: center; padding-bottom: 20px;">
                <img src="<?php echo base_url() ?>assets/img/iamsaigon-black-logo.png" alt="Homepage" style="width: 300px;    text-align: center;">
                <br/>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- filter -->
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-filter">
                    <a href="#" class="filter active" data-filter="*">All</a>
                    <a href="#" class="filter" data-filter=".village">Saigon Village</a>
                    <a href="#" class="filter" data-filter=".retro">Saigon Retro</a>
                    <a href="#" class="filter" data-filter=".classic">Saigon Classic</a>
                    <a href="#" class="filter" data-filter=".family">Family Villa</a>
                </div>
            </div>
        </div> <!-- end filter -->

        <div class="row">
            <div class="works-grid titles">
                <div class="col-xs-6 work-item village">
                    <div class="work-container">
                        <div class="work-img">
                            <a href="<?php echo base_url(). 'rooms/room/village' ?>">
                                <img src="<?php echo base_url() ?>assets/img/room/village/DSC03238.jpg" alt="">
                            </a>
                        </div>
                        <div class="work-description">
                            <h3><a href="<?php echo base_url(). 'rooms/room/village' ?>">Saigon Village</a></h3>
                        </div>
                    </div>
                </div> <!-- end work-item -->

                <div class="col-xs-6 work-item retro">
                    <div class="work-container">
                        <div class="work-img">
                            <a href="<?php echo base_url(). 'rooms/room/retro' ?>">
                                <img src="<?php echo base_url() ?>assets/img/room/retro/PIS_1730.jpg" alt="">
                            </a>
                        </div>
                        <div class="work-description">
                            <h3><a href="<?php echo base_url(). 'rooms/room/retro' ?>">Saigon Retro</a></h3>
                        </div>
                    </div>
                </div> <!-- end work-item -->

                <div class="col-xs-6 work-item classic">
                    <div class="work-container">
                        <div class="work-img">
                            <a href="<?php echo base_url(). 'rooms/room/classic' ?>">
                                <img src="<?php echo base_url() ?>assets/img/room/classic/DSC03436.jpg" alt="">
                            </a>
                        </div>
                        <div class="work-description">
                            <h3><a href="<?php echo base_url(). 'rooms/room/classic' ?>">Saigon Classic</a></h3>
                        </div>
                    </div>
                </div> <!-- end work-item -->

                <div class="col-xs-6 work-item family">
                    <div class="work-container">
                        <div class="work-img">
                            <a href="<?php echo base_url(). 'rooms/room/family' ?>">
                                <img src="<?php echo base_url() ?>assets/img/room/family/DSC06265.jpg" alt="">
                            </a>
                        </div>
                        <div class="work-description">
                            <h3><a href="<?php echo base_url(). 'rooms/room/family' ?>">Saigon Family</a></h3>
                        </div>
                    </div>
                </div> <!-- end work-item -->

            </div>

        </div>
    </div>
</section> <!-- end portfolio-->



<?php $this->load->view('template/footer') ?>
