<!-- .page-content start -->
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <h1>Videos</h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
            <!-- .col-md-6 start -->
            <!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<div class="page-content">
    <div class="container">
        <div class="row">
            <?php foreach ($videos as $video): ?>
                <div class="col-md-6 col-sm-6">
                    <div class="feature-box style-2">
                        <div class="feature-media">
                            <img style="max-width: 718px; width: 100%;height: 350px; object-fit: cover"
                                 src="<?= "/files/Videos/capa/" . $video->capa ?>" class="img-responsive"
                                 alt="Construction HTML Template">

                            <a href="<?php echo $video->link ?>" class="read-more video-post">
                                    <span class="icon-container">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56.69px"
                                             height="56.69px" viewBox="0 0 56.69 56.69"
                                             enable-background="new 0 0 56.69 56.69" xml:space="preserve"
                                             class="svg-black img-responsive replaced-svg">
<style type="text/css">
	.st0 {
        fill-rule: evenodd;
        clip-rule: evenodd;
        fill: #ffcc00;
    }
</style>
<path class="st0"
      d="M29.593,46.972C29.592,46.972,29.593,46.972,29.593,46.972c-5.921,0-12.367-0.187-19.158-0.553  c-4.012-0.22-7.124-3.313-7.567-7.523c-0.741-7.033-0.741-14.133,0-21.103c0.442-4.175,3.55-7.268,7.558-7.52  c11.712-0.737,23.763-0.737,35.836,0c4.055,0.246,7.093,3.266,7.562,7.516c0.739,6.729,0.74,13.828,0.001,21.104  c-0.427,4.207-3.462,7.231-7.552,7.524C41.126,46.785,35.514,46.972,29.593,46.972z M28.208,11.719  c-5.902,0-11.843,0.186-17.658,0.551c-3.063,0.192-5.351,2.497-5.694,5.734c-0.726,6.83-0.726,13.788,0,20.683  c0.343,3.263,2.628,5.567,5.686,5.735c6.755,0.364,13.165,0.55,19.049,0.55c5.874,0,11.438-0.185,16.538-0.549  c3.086-0.222,5.379-2.525,5.704-5.732c0.726-7.136,0.726-14.094,0.001-20.683c-0.357-3.247-2.646-5.553-5.694-5.738  C40.145,11.904,34.111,11.719,28.208,11.719z M23.252,21.262v13.725l13.18-6.816L23.252,21.262z"></path>
</svg>
                                    </span>
                            </a>

                        </div><!-- .feature-media end -->

                        <div class="feature-body">
                            <div class="custom-heading style-1">
                                <h4><?php echo $video->title ?></h4>
                            </div><!-- .custom-heading end -->
                        </div><!-- .feature-body end -->
                    </div><!-- .feature-box-end -->
                </div><!-- .col-md-6 end -->
            <?php endforeach; ?>


        </div><!-- .row end -->
    </div><!-- .container end -->
</div>


<!-- .page-content start -->
<div class="page-content quote style-1 custom-background bkg-black dark">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <!-- .col-md-9 start -->
            <div class="col-md-9 col-sm-9 col-xs-12 mb-0">
                <div class="quote-content">
                    <div class="text">
                        <h3>Entre em contato</h3>
                    </div>
                </div>
            </div><!-- .col-md-9 end -->
            <!-- .col-md-3 start -->
            <div class="col-md-3 col-sm-3 col-xs-12 mb-50">
                <div class="quote-btn">
                    <a href='/contacts/contato' class="btn btn-primary float-right">
                        Contato
                    </a>
                </div>
            </div><!-- .col-md-3 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content.custom-background end -->
