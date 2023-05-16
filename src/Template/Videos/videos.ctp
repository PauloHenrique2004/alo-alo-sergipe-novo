<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($videos as $value): ?>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <iframe class="active-youtube" width="366" height="216" src="https://www.youtube.com/embed/<?= $value->link ?>" allowfullscreen></iframe>
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
