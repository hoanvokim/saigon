<?php $this->load->view('template/header') ?>
<section class="section-wrap style-2" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s"
                 data-wow-delay="0s"
                 style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: slideInUp;">
                <h2 class="intro-heading-invert heading-frame-invert">LOVE!</h2>
                <p>
                    TOGETHER<br/>
                    iamsaigon is our HOME.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="activities-grid titles">
                    <?php
                    if (isset($items) && ($items != 'Empty')) {
                        foreach ($items as $item) {
                            ?>
                            <div class="<?php
                            if (strpos($item->url, 'youtube') !== false) {
                                echo 'col-xs-12';
                            } else {
                                echo 'col-xs-6';
                            }
                            ?>  activities-board-item">
                                <div class="work-container">
                                    <div class="work-img">
                                        <?php
                                        if (strpos($item->url, 'youtube') !== false) {
                                            ?>
                                            <iframe width="100%" height="370px" src="<?php echo $item->url; ?>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        <?php } else { ?>
                                            <img id="myImg<?php echo $item->id; ?>" class="img-activities"
                                                 src="<?php echo base_url() . 'assets/img/' . $item->url; ?>"
                                                 alt="<?php echo $item->title; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="activities-board-description">
                                        <h3>
                                            <?php echo $item->title; ?>
                                        </h3>
                                        <p>
                                            <?php echo $item->date_created; ?>
                                        </p>
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
    </div>
</section> <!-- end portfolio-->

<!-- The Modal -->
<div id="myModal" class="activities-modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="activities-modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>

<?php $this->load->view('template/footer') ?>
