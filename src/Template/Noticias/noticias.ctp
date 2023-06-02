<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-12 col-sm-12" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-2 pd--30-0">
                        <ul class="nav row AdjustRow">
                            <?php foreach ($noticias as $noticia): ?>
                            <li class="col-md-4 col-sm-12 col-xs-4 col-xss-12" style="margin-top: 25px;">
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img">
                                        <a href="/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>" class="thumb">
                                            <img src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                                        </a>
                                        <a href="/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>" class="cat"><?= $nomeCategoria->categoria ?></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>"><?= $noticia->data ?></a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href=/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>" class="btn-link"><?= $noticia->titulo_resumo ?> </a></h2>
                                            </div>
                                        </div>
                                    </div>

<!--                                    <div class="post--content">-->
<!--                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>-->
<!--                                    </div>-->

<!--                                    <div class="post--action">-->
<!--                                        <a href="news-single-v1.html">Continue Reading...</a>-->
<!--                                    </div>-->
                                </div>
                                <!-- Post Item End -->
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- Post Items End -->

                    <!-- Pagination Start -->
                    <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
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
            <!-- Main Content End -->
        </div>
    </div>
</div>
<!-- Main Content Section End -->



<style>
.pagination li a:hover{
    border-color: #ffcb02 !important;
}
</style>



















<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
<?php $this->end(); ?>
