<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb" style="text-align: center;">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span>Alô Alô TV</span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="main--content">
            <div class="post--item post--single pd--30-0">
                <div class="row">
                    <?php foreach ($videos as $value): ?>
                    <div class="col-md-4">
                            <img style="width: -webkit-fill-available; cursor: pointer" src="https://i.ytimg.com/vi/<?= $value->link ?>/hqdefault.jpg" class="play-youtube" data-video="<?= $value->link ?>">

                        <div class="post--info" style="margin-bottom: 30px;">
                            <div class="title">
                                <h2 class="h4"><?= $value->titulo ?></h2>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Pagination Start -->
        <div class="pagination--wrapper clearfix bdtop--1 bd--color-2">
            <div class="row">
                <div class="col-md-12 col-xs-12" style="display: flex; justify-content: center; margin-top: 53px;">
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->numbers() ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination End -->
    </div>
</div>



<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/meta.png' ?>"/>
<meta property="og:title" content= "alÔ alÔ Sergipe"/>
<meta property="og:description" content="alÔ alÔ Sergipe, seu portal!"/>
<?php $this->end(); ?>

<?php $this->start('script-footer'); ?>
<script>
    $.fn.YouTubePopUp = function (options) {
        var YouTubePopUpOptions = $.extend({
            autoplay: 1
        }, options);
        $(this).off('click');
        $(this).on('click', function (e) {

            var cleanVideoID = $(this).attr("data-video");

            var videoEmbedLink = "https://www.youtube.com/embed/" + cleanVideoID + "?autoplay=" + YouTubePopUpOptions.autoplay + "";

            $("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation"><div class="YouTubePopUp-Content"><span class="YouTubePopUp-Close"></span><iframe src="' + videoEmbedLink + '" allowfullscreen allow="autoplay"></iframe></div></div>');

            if ($('.YouTubePopUp-Wrap').hasClass('YouTubePopUp-animation')) {
                setTimeout(function () {
                    $('.YouTubePopUp-Wrap').removeClass("YouTubePopUp-animation");
                }, 600);
            }

            $(".YouTubePopUp-Wrap, .YouTubePopUp-Close").on('click', function () {
                $(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue(function () {
                    $(this).remove();
                });
            });

            e.preventDefault();

        });
    };
    $('.play-youtube').YouTubePopUp({ autoplay: 1 });

</script>
<?php $this->end(); ?>
