<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <a href="/noticias/<?= $categoria->categoria ?>/<?= $categoria->id ?>">
                                <h3><?= $categoria->categoria ?></h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <nav>
                                <div class="nav nav-tabs btn-todos">
                                    <a href="/noticias/<?= $categoria->id ?>"class="nav-item nav-link active btn-todos">Todos</a>
                                </div>
                            </nav>
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
                                        <?php foreach ($categoriaNoticiasLayoutLadoLado($categoria) as $noticia): ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">

                                                        <img  class="img-lado" src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="what-cap">
                                                        <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                                        <span class="color1"><?= $categoria->categoria ?></span>
                                                        </a>
                                                        <h4 class="padding">
                                                            <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                                            <?= $noticia->titulo_resumo ?>
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
</style>
