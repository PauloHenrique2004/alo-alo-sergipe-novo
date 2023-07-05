
<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb" style="text-align: center;">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li>
                <a href="/noticias/<?= $noticia->categoria->categoria ?>/<?= $noticia->categoria->id ?>" class="btn-link">
                    <?= $noticia->categoria->categoria ?>
                </a>
            </li>
            <li class="active"><span><?= $noticia->titulo ?></span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
<!--            <div class="main--content col-md-8" data-sticky-content="true">-->
            <div class="main--content col-md-8">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <?php if(!empty($noticia->imagem_visualizacao)): ?>
                                <img class="img-detalhe-noticias" style="width: -webkit-fill-available;" src="/files/Noticias/imagem_visualizacao/<?= $noticia->imagem_visualizacao ?>" alt="">
                            <?php else: ?>
                                <img class="img-detalhe-noticias" style="width: -webkit-fill-available;" src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                            <?php endif; ?>

                        </div>


                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?= $noticia->data ?></a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4 descN"><?= $noticia->titulo ?></h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <span style="text-align: justify">
                                <?= $noticia->descricao ?>
                            </span>

                            <ul class="nav meta">
                                <li>Fonte: <?= $noticia->fonte ?></li>
                            </ul>

                        </div>

                    </div>
                    <div class="main--content col-md-12">
                        <div class="post--related ptop--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4"><?= $relacionados ? 'Relacionadas' : '' ?></h2>
                            </div>
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">

                                    <?php foreach ($relacionados as $noticiaRelacionada): ?>

                                        <?php
                                        // Remove acentos e caracteres especiais usando a biblioteca iconv
                                        $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $noticiaRelacionada->noticia->categoria->categoria);

                                        $nomeCategoria = preg_replace('/\s+/', '-', $nomeCategoria);

                                        $nomeCategoria = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeCategoria);


                                        // Remove acentos e caracteres especiais usando a biblioteca iconv
                                        $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $noticia->titulo_resumo);

                                        $nome = str_replace(' ', '-', $nome);

                                        $nome = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome);

                                        ?>


                                        <li class="col-sm-6 pbottom--30">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $noticiaRelacionada->noticia->id ?>" class="thumb">
                                                        <img class="img-rel" src="/files/Noticias/imagem/<?= $noticiaRelacionada->noticia->imagem ?>" alt="" data-rjs="2"></a>
                                                    <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= $nome ?>/<?= $noticiaRelacionada->noticia->id ?>"
                                                       class="cat"><?= strtolower($nomeCategoria) ?></a> <a href="#" class="icon"></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li>
                                                                <a class="hover-fff" href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $noticiaRelacionada->noticia->id ?>">
                                                                    <?= $noticiaRelacionada->noticia->data ?>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4">
                                                                <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $noticiaRelacionada->noticia->id ?>" class="btn-link hover-fff">
                                                                    <?= $noticiaRelacionada->noticia->titulo ?>
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <?= $this->element('site/sidebar') ?>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>
<!-- Main Content Section End -->



<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Noticias/imagem/" . $noticia->imagem   ?>"/>
<meta property="og:title" content= "<?= $noticia->titulo ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($noticia->descricao, 0, 60))  ?>"/>
<?php $this->end(); ?>




<?php $this->start('script-footer') ?>

<script>
    //$(document).ready(function() {
    //    <?php //if(count($relacionados) == 0): ?>
    //    $('.slick-active').remove()
    //    <?php //endif; ?>
    //});
    //
    //$(document).ready(function() {
    //    // alert($(window).width())
    //    if($(window).width() > '768px'){
    //        $('.ocultar').css('display', 'none')
    //    } else {
    //        $('.ocultar').remove()
    //    }
    //});

    // $('body').append(`
    //     <style>
    //         .galeria-width {
    //             width: ${$(window).width() - (($(window).width() * 10)/100)}px;
    //         }
    //     </style>
    // `)
</script>
<?php $this->end(); ?>

