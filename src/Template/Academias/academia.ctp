
<!-- Start Academia Details Area -->
<section class="blog-details-area ptb-100 bg-f8f8f8" style="margin-top: 164px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <h3  style="margin-bottom: 26px"><?= $academia->titulo ?></h3>
                    <div class="article-image">
                        <img src="/files/Academias/imagem/<?= $academia->imagem ?>" alt="image">
                    </div>

                    <div class="article-content">

                        <h3><?= $academia->titulo ?></h3>

                        <?= $academia->descricao ?>

                        <div class="row espaco-logo" style="background:#fff; align-items: center">
                            <div class="col-md-2">
                                <div class="box-radio-academia"><img class="img-logo" src="/files/Academias/logo/<?= $academia->logo ?>"></div>
                            </div>

                            <div class="col-md-10">
                                <span style="margin-top: 18px"><?= $academia->descricao_logo ?></span>
                            </div>
                        </div>
                    </div>

                    <?php if($academia->video): ?>
                        <div style="margin-top: 50px">
                            <?php $conv = convertYoutube($academia->video); ?>
                            <?= $conv ?>
                        </div>
                    <?php endif; ?>

                </div>

                <ul style="list-style: none; margin-left: -30px; margin-top: 30px;">
                    <li>
                        <a href="/files/Academias/pdf/<?= $academia->pdf ?>" class="default-btn" download>Download PDF <i class="fas fa-download"></i> <span></span></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary" style="margin-top: 10px">
                    <section class="widget widget_pearo_posts_thumb">
                        <h3 class="widget-title">Recente</h3>
                        <?php foreach ($recentes as $recente): ?>
                            <?php if ($recente->id != $academia->id) : ?>
                                <article class="item">
                                    <div class="single-case-study-box">
                                        <div class="case-study-image bg1" style="background-image: url('/files/Academias/imagem/<?= $recente->imagem ?>');"></div>
                                        <span style="background-color:<?= $recente->cor_tarja_tipo ?>; text-transform: uppercase" class="meta-category"><?= $recente->tipo ?></span>
                                        <a href="/academia/<?= $recente->id ?>" class="case-study-link">
                                            <div class="case-study-img-hover bg1" style="background-image: url('/files/Academias/imagem/<?= $recente->imagem ?>');"></div>
                                        </a>
                                        <div class="case-study-info">
                                            <h3 class="title"><a href="/academia/<?= $recente->id ?>"><?= $recente->titulo ?></a></h3>
                                        </div>
                                    </div>
                                </article>
                            <?php endif; ?>
                        <?php endforeach; ?>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Academia Details Area -->

<style>
    .espaco-logo{
        background:#fff;
        padding-top: 15px;
        padding-bottom: 15px;
        border-radius: 20px;
    }

    .single-case-study-box:hover {
        -webkit-box-shadow:none !important;
        box-shadow:none !important);
        -webkit-transform: none !important;
        transform: none !important);
    }

    .single-case-study-box:hover .case-study-img-hover {
        height: 235px;
        opacity: 1;
    }

    @media (min-width: 768px){
        .box-radio-academia {
            background-color: rgba(225, 230, 238, 0.4);
            display: inline-flex !important;
            border-radius: 50% !important;
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 4px !important;
            padding-left: 4px !important;
            width: 100px;
            height: 100px;
            margin-left: 22px;
        }
    }


    .img-logo{
        width: 140px;
        object-fit: contain;
    }

    @media(max-width: 767px){
        .ptb-100{
            margin-top: 84px !important;
        }
    }

</style>

<?php function convertYoutube($string)
{
    return preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "<iframe class='ytb' style='display: block; margin: 0 auto' width='100%' height='482'src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
        $string
    );
} ?>
