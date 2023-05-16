<!--NOTICIAS LAYOUT COM 3 IMAGENS-->
<section class="weekly-news-area pt-50">
    <div class="container">
        <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3><a class="categoria-title-sessao" style="width: fit-content;" href="/noticias/<?= $categoria->categoria ?>/<?= $categoria->id ?>"><?= $categoria->categoria ?></a></h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        <?php foreach ($categoriaNoticiasLayoutSlider($categoria) as $noticia): ?>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                        <img src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                                    </a>
                                </div>
                                <div class="weekly-caption">
                                    <a href="/noticia/<?=  $noticiaBanner->categoria->categoria  ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">

                                        <span class="color1"><?= $categoria->categoria ?></span>
                                    </a>
                                    <h4>
                                        <a href="/noticia/<?=  $noticiaBanner->categoria->categoria  ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">

                                            <?= $noticia->titulo_resumo ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--NOTICIAS LAYOUT COM 3 IMAGENS END-->


<style>
    .categoria-title-sessao:hover{
        color: #000 !important;
    }
</style>
