
<section id="about" style="margin-top: 50px">
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <?php if( !empty($noticia->imagem_visualizacao)): ?>
                                <img class="img-noticia" src="/files/Noticias/imagem_visualizacao/<?= $noticia->imagem_visualizacao ?>" alt="">
                            <?php else: ?>
                                <img class="img-noticia" src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <p style="margin-top: 31px;" class="ti-calendar"> <?= $noticia->data ?></p>
                        <div class="section-tittle mb-30 pt-30">
                            <h3><?= $noticia->titulo ?></h3>
                        </div>
                        <div class="about-prea">
                            <?= $noticia->descricao ?>
                        </div>

                        <?php if(!empty($noticia->fonte)): ?>
                            <p> <em>Fonte: <?= $noticia->fonte ?></em> </p>
                        <?php endif; ?>

                        <!-- ShareThis BEGIN -->
                        <div class="sharethis-inline-share-buttons"></div>
                        <!-- ShareThis END -->

                    </div>


                </div>
                <?= $this->element('site/publicidade') ?>
            </div>
        </div>
    </div>
</section>



<?php if(!$ehMobile): ?>
    <section class="weekly2-news-area  weekly2-pading gray-bg " style="padding-bottom: inherit; margin-bottom: -100px; background: #fff !important;">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3><?= $relacionados ? 'Relacionadas' : '' ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style" style="min-height: 200px;">
                            <?php foreach ($relacionados as $noticia): ?>
                                <div class="weekly2-single" style="width: 300px; height: 500px; object-fit: cover ">
                                    <div class="weekly2-img">
                                        <img src="/files/Noticias/imagem/<?= $noticia->noticia->imagem ?>" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1" style="visibility: hidden"><?= $noticia->noticia->resumo ?></span>
                                        <p><?= $noticia->data ?></p>
                                        <h4><a href="/noticia/<?= $noticia->noticia->id ?>"><?= $noticia->noticia->titulo ?></a></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <?php for ($i = count($relacionados); $i <= 4; $i++):?>
                                <?php if($i < 4): ?>
                                <div class="weekly2-single ocultar" style="width: 300px; height: 500px; object-fit: cover; ">
                                    <div class="weekly2-img">
    <!--                                                                                <img src="" alt="">-->
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1" style="visibility: hidden"></span>
                                        <p></p>
                                        <h4></h4>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="weekly2-news-area weekly2-pading gray-bg " style="padding-bottom: inherit; background: #fff !important;">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3><?= $relacionados ? 'Relacionadas' : '' ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="galeria">
                        <?php foreach ($relacionados as $noticia): ?>
                            <div class="galeria-item galeria-width">
                                <div class="galeria-imagem galeria-width">
                                    <a href="/noticia/<?= $noticia->noticia->id ?>">
                                        <div class="weekly2-img">
                                            <img src="/files/Noticias/imagem/<?= $noticia->noticia->imagem ?>" alt="">
                                        </div>
                                    </a>
                                </div>

                                <div class="galeria-titulo galeria-width">
                                    <a href="/noticia/<?= $noticia->noticia->id ?>">
                                        <?= $noticia->noticia->titulo ?>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>




<style>
    .img-noticia{
        max-width: 100% !important;
    }
    .section-tittle{
        padding-top: inherit;
        margin-bottom: 8px;
    }

    .about-area{
        text-align: justify;
    }

    .weekly2-news-area .weekly2-wrapper .weekly2-single .weekly2-img img{
        height: 230px !important;
        object-fit: cover !important;
    }

    @media only screen and (min-width: 769px) {
        .weekly2-pading {
            padding-top: initial !important;
        }
    }

    @media(max-width: 768px){
        img{
            width: -webkit-fill-available !important;
            height: auto !important;
        }
    }

    .about-prea a {
        color: #2A76BD !important;
    }


    .galeria {
        display: flex;
        overflow: scroll;
        padding-bottom: 30px;
    }

    .galeria-item {

    }

    .galeria-imagem .weekly2-img {
        padding: 0 10px;
    }

    .galeria-imagem img {
        height: 230px !important;
        object-fit: cover !important;
        border-radius: 6px;
    }

    .galeria-titulo {
        padding: 7px;
        padding-left: 11px;
        font-weight: bold;
    }

    .galeria-titulo a {
        color: #000;
    }



</style>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Noticias/imagem/" . $noticia->imagem   ?>"/>
<meta property="og:title" content= "<?= $noticia->titulo ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($noticia->descricao, 0, 60))  ?>"/>

<?php $this->end(); ?>




<?php $this->start('script-footer') ?>

<script>
    $(document).ready(function() {
        <?php if(count($relacionados) == 0): ?>
        $('.slick-active').remove()
        <?php endif; ?>
    });

    $(document).ready(function() {
        // alert($(window).width())
        if($(window).width() > '768px'){
            $('.ocultar').css('display', 'none')
        } else {
            $('.ocultar').remove()
        }
    });

    $('body').append(`
        <style>
            .galeria-width {
                width: ${$(window).width() - (($(window).width() * 10)/100)}px;
            }
        </style>
    `)
</script>
<?php $this->end(); ?>
