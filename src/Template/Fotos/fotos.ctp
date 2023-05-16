<section class="whats-news-area pt-50 pb-20">
    <div class="container">

            <div class="about-area">

                <div class="container box-album-topo">
                    <div class="row">
                        <div class="col-lg-12 col-md-12" style="padding-left: inherit;">
                            <div class="section-tittle mb-30">
                                <h3><?= $album->titulo ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-6" style="padding-left: inherit;">
                            <!-- Trending Tittle -->
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="/files/Albuns/imagem/<?= $album->imagem ?>" alt="capa">
                                <a href="/fotos/" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6" style="padding-right: inherit;">
                            <div class="about-prea">
                                <?= $album->descricao ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <?php foreach ($fotos as $foto): ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <a href="/files/Fotos/imagem/<?= $foto->imagem ?>" data-lightbox="roadtrip"> <img  class="img-lado" src="/files/Fotos/imagem/<?= $foto->imagem ?>" alt="Imagem"></a>
                                                    </div>
                                                    <div class="what-cap">
                                                        <h4 style="font-size: 18px"><?= $foto->titulo ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-12">
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <?= $this->Paginator->numbers() ?>
                                </ul>
                            </nav>
                        </div>

                </div>
            </div>
            <?= $this->element('site/publicidade') ?>
        </div>
    </div>
</section>
<style>
    @media(min-width: 769px){
        .btn-todos{
            width: fit-content !important;
            float: right !important;
        }

    }

    @media(min-width: 769px){
        .img-lado{
            width: 370px !important;
            height: 344px !important;
            object-fit: cover;
        }

    }

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

    @media(min-width: 769px){
        .box-album-topo{
            margin-bottom: 70px !important;
        }
    }

    @media(max-width: 769px){
        .blog_item_img{
            margin-bottom: 30px !important;
        }
    }




</style>

<link rel="stylesheet" media="all" href="/lightbox/lightbox.min.css">

<?php $this->start('script-footer') ?>
    <script type="text/javascript" src="/lightbox/lightbox.min.js"></script>
<?php $this->end() ?>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Albuns/imagem/" . $album->imagem   ?>"/>
<meta property="og:title" content= "<?= $album->titulo  ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($album->descricao, 0, 60))  ?>"/>
<?php $this->end(); ?>
