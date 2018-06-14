<?php $this->load->view('template/header') ?>

<section class="section-wrap intro style-2" id="intro" style="background-image: url(<?php echo base_url() ?>assets/img/longchim.jpg)">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 text-center wow slideInUp" data-wow-duration="1.2s"
                 data-wow-delay="0s"
                 style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: slideInUp;">
                <h2 class="intro-heading heading-frame">Please try again!</h2>
            </div>
        </div>
    </div>
</section>

<section class="section-wrap style-2" id="intro"
         style="background-image: url(<?php echo base_url() ?>assets/img/longchim.jpg)">
    <div class="container">
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2 text-center wow slideInUp" data-wow-duration="1.2s"
                 data-wow-delay="0s"
                 style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: slideInUp;">
                <h2 class="intro-heading heading-frame">Get in touch!</h2>
                <p class="intro-text mb-60 text-left">
                    Just tell us when you will arrive or any question
                </p>

                <form id="contact-form" action="<?php echo base_url() . 'contact'; ?>" method="post">

                    <div class="row contact-row">
                        <div class="col-md-6 contact-name">
                            <input name="sender_name" id="name" type="text" placeholder="Name*">
                        </div>
                        <div class="col-md-6 contact-email">
                            <input name="sender_email" id="mail" type="email" placeholder="E-mail*">
                        </div>
                    </div>

                    <input name="sender_subject" id="subject" type="text" placeholder="Subject">
                    <textarea name="sender_content" id="comment" placeholder="Message"></textarea>
                    <input type="submit" class="btn btn-lg btn-color btn-submit" value="Send" name="btn_send">
                </form>
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
