<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-tittle mb-30">
                            <h3><?= $nomeCategoria->categoria ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        <?php foreach ($noticias as $noticia): ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <a href="/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                                            <img class="img-noticias-lista" src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="what-cap">
                                                        <a href="/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                                            <span class="color1"><?= $nomeCategoria->categoria ?></span>
                                                        </a>
                                                        <h4 class="padding"><a href="/noticia/<?= $nomeCategoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                                                <?= $noticia->titulo ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <?= $this->element('site/publicidade') ?>
        </div>
    </div>
</section>

<style>
    @media(min-width: 769px) {
        .img-noticias-lista{
            height: 431px !important;
            object-fit: cover;
        }
    }
</style>
<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
<?php $this->end(); ?>
