<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($videos as $value): ?>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img src="https://i.ytimg.com/vi/<?= $value->link ?>/hqdefault.jpg" class="play-youtube" data-video="<?= $value->link ?>">
                            </div>
                            <div class="blog_details" style="padding: initial !important; margin-top: 7px; border-radius: 15px">
                                <h2><?= $value->titulo ?></h2>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

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
</section>

<style>
    .pagination a{
        width: 45px;
        height: 45px;
        margin: 0 2px;
        display: inline-block;
        background-color: #ffffff;
        line-height: 48px;
        color: #000000;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        border-radius: 5px;
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        text-align: center;
    }

    .pagination .active a{
        background: #000 !important;
        color: #ffffff;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        z-index: 999;

    }

    .active-youtube{
        border-radius: 10px !important;
    }
</style>


<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
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
