<?php $this->load->view('template/header') ?>
<!-- Page Title -->
<section class="page-title style-2">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1>Be Local</h1>
                <ol class="breadcrumb">
                    <li>
                        <?php echo $item->category_name; ?>
                    </li>
                    <li class="active">
                        <?php echo $item->title; ?>
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
                <img src="<?php echo base_url() . 'assets/img/' . $item->img; ?>"
                     alt=" <?php echo $item->title; ?>" width="100%">
            </div> <!-- end slider -->

            <div class="col-md-12">
                <div class="portfolio-description">
                    <?php echo $item->content; ?>
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
<section class="related-projects pb-90">
    <div class="container">
        <h4 class="heading-inline">Our Suggestions</h4>
        <div class="customNavigation right">
            <a class="btn prev"><i class="fa fa-angle-left"></i></a>
            <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="row mt-20">
            <div id="owl-related-works" class="owl-carousel owl-theme">
                <?php
                if (isset($suggests) && ($suggests != 'Empty')) {
                    foreach ($suggests as $item) {
                        ?>
                        <div class="work-item <?php echo $item->slug; ?>">
                            <div class="work-container">
                                <div class="work-img">
                                    <a href="<?php echo base_url() . 'belocal/post/' . $item->slug; ?>">
                                        <img src="<?php echo base_url() . 'assets/img/' . $item->img; ?>" alt="">
                                    </a>
                                </div>
                                <div class="work-description">
                                    <h3>
                                        <a href="<?php echo base_url() . 'belocal/post/' . $item->slug; ?>"><?php echo $item->title; ?></a>
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
