<?php $this->load->view('template/header') ?>
<!-- Revolution Slider -->
<section>
    <div class="rev_slider_wrapper" data-alias="vimeo-hero">
        <div class="rev_slider" id="slider3" data-version="5.0">
            <ul>
                <!-- SLIDE 1 -->
                <li data-fstransition="fade"
                    data-transition="zoomout"
                    data-easein="default"
                    data-easeout="default"
                    data-slotamount="1"
                    data-masterspeed="1200"
                    data-delay="8000"
                    data-title="The Art of Design"
                >
                    <!-- MAIN IMAGE -->
                    <img src=""
                         alt=""
                         data-bgrepeat="no-repeat"
                         data-bgfit="cover"
                         data-bgparallax="7"
                         class="rev-slidebg"
                    >

                    <!-- BACKGROUND VIDEO LAYER -->
                    <div class="rs-background-video-layer"
                         data-forcerewind="on"
                         data-volume="mute"
                         data-vimeoid="270817510"
                         data-videoattributes="title=0&amp;byline=0&amp;portrait=0&amp;api=1"
                         data-videowidth="100%"
                         data-videoheight="100%"
                         data-videocontrols="none"
                         data-videostartat="00:00"
                         data-videoendat="00:57"
                         data-videoloop="loop"
                         data-forceCover="1"
                         data-aspectratio="4:3"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                    ></div>

                    <!-- OVERLAY LAYER -->
                    <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-width="full"
                         data-height="full"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"
                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="s:300;s:300;"
                         data-start="750"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-responsive="off"
                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);">
                    </div>
                </li> <!-- end slide 1 -->

            </ul>

            <div class="local-scroll">
                <a href="#intro" class="scroll-down">
                    <i class="fa fa-angle-down"></i>
                </a>
            </div>

        </div>
    </div>
</section>
<?php $this->load->view('template/footer') ?>
