<?php $this->load->view('template/header') ?>
<section class="section-wrap style-2" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s"
                 data-wow-delay="0s"
                 style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: slideInUp;">
                <h2 class="intro-heading-invert heading-frame-invert">Full facilities!</h2>

            </div>
        </div>
    </div>
</section>

<section class="mt-lrg-100">
    <div class="container">
        <div class="row">
            <div class="works-grid titles wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                <?php
                if (isset($items) && ($items != 'Empty')) {
                    foreach ($items as $item) {
                        ?>
                        <div class="col-xs-4 work-item">
                            <div class="work-container">
                                <div class="work-img">
                                    <img src="<?php echo base_url() . 'assets/img/' . $item->img; ?>" alt="">
                                    <div class="portfolio-overlay">
                                        <div class="project-icons">
                                            <a href="<?php echo base_url() . 'assets/img/' . $item->img; ?>"
                                               class="lightbox-gallery" title="<?php echo $item->name; ?>"><i
                                                        class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h3><a href="#"><?php echo $item->name; ?></a></h3>
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
