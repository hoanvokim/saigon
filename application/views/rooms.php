<?php $this->load->view('template/header') ?>
<section class="section-wrap style-2" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s"
                 data-wow-delay="0s"
                 style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: slideInUp;">
                <h2 class="intro-heading-invert heading-frame-invert">Your home's style!</h2>

            </div>
        </div>
    </div>
</section>

<section class="mt-lrg-100">
    <div class="container">
        <!-- filter -->
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-filter">
                    <a href="#" class="filter active" data-filter="*">All</a>
                    <?php
                    if (isset($items) && ($items != 'Empty')) {
                        foreach ($items as $item) {
                            ?>
                            <a href="#" class="filter"
                               data-filter=".<?php echo $item->slug; ?>"><?php echo $item->room_name; ?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div> <!-- end filter -->

        <div class="row">
            <div class="works-grid titles">
                <?php
                if (isset($items) && ($items != 'Empty')) {
                    foreach ($items as $item) {
                        ?>
                        <div class="col-xs-6 work-item <?php echo $item->slug; ?>">
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
            </div>

        </div>
    </div>
</section> <!-- end portfolio-->


<?php $this->load->view('template/footer') ?>
