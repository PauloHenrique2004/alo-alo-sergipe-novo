<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($albuns as $albun): ?>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <a href="/fotos/<?= $albun->id ?>">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="/files/Albuns/imagem/<?= $albun->imagem ?>" alt="capa">
                                </div>
                            </a>

                            <div class="blog_details">
                                <a class="d-inline-block" href="/fotos/<?= $albun->id ?>">
                                    <h2><?= $albun->titulo ?></h2>
                                </a>
                                <a href="/fotos/<?= $albun->id ?>">
                                    <p>  <?= $albun->resumo ?></p>
                                </a>
                                <ul class="blog-info-link">
                                    <li><a href="/fotos/<?= $albun->id ?>"><i class="ti-view-grid"></i> Ver album</a></li>
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

    @media (min-width: 768px){
        .blog_details {
            padding: 30px 30px 35px 35px !important;
        }
    }
</style>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
<?php $this->end(); ?>
