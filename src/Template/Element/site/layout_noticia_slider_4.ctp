<section class="weekly2-news-area  weekly2-pading gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
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
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        <?php foreach ($categoriaNoticiasLayoutSliderQuatro($categoria) as $noticia): ?>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">

                                    <img class="img-not" src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                                    </a>
                                </div>
                                <div class="weekly2-caption">
                                    <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">

                                    <span class="color1"><?= $categoria->categoria ?></span>
                                    </a>
                                    <p><?= $noticia->data ?></p>
                                    <h4>
                                        <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
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


<style>
    @media(min-width: 768px){
        .img-not{
            width: 270px !important;
            height: 174px !important;
            object-fit: cover !important;
        }
    }
</style>
