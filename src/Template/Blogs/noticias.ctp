<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                <div class="row">
                    <?php foreach ($posts as $value): ?>
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="blog_left_sidebar">
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="/files/Blogs/imagem/<?= $value->imagem ?>" alt="capa">
                                        <a href="/post/<?= $value->id ?>" class="blog_item_date">
                                            <h3 class="v-hover">15</h3>
                                            <p class="v-hover">Jan</p>
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="/post/<?= $value->id ?>">
                                            <h2><?= $value->titulo ?></h2>
                                        </a>
                                        <p>  <?= $value->resumo ?></p>
                                        <ul class="blog-info-link">
                                            <li><a href="/post/<?= $value->id ?>"><i class="ti-view-grid"></i> Ver mais</a></li>
                                        </ul>
                                    </div>

                                </article>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?= $this->element('site/aside_blog')  ?>
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

    .blog_area a:hover, .blog_area a :hover{
        -webkit-background-clip: unset;
    }

    .blog_item_date:hover{
        background: #000 !important;
    }

    .v-hover:hover{
        background: none !important;
    }
</style>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
<?php $this->end(); ?>
