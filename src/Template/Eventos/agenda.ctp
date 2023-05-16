<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($agenda as $value): ?>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="/evento/<?= $value->titulo?>/<?= $value->id ?>">
                                <img class="card-img rounded-0" src="/files/Eventos/capa/<?= $value->capa ?>" alt="capa">
                            </a>
                            <a href="/evento/<?= $value->titulo?>/<?= $value->id ?>" class="blog_item_date">
                                <h3><?= $value->data->i18nFormat('dd') ?></h3>
                                <p><?= $value->data->i18nFormat('MMM') ?></p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="/evento/<?= $value->titulo?>/<?= $value->id ?>">
                                <h2><?= $value->titulo ?></h2>
                            </a>
                            <ul class="blog-info-link">
                                <li><a href="/evento/<?= $value->titulo?>/<?= $value->id ?>"><i class="ti-view-grid"></i> Ver mais</a></li>
                            </ul>
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
</style>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
<?php $this->end(); ?>
