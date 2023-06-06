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
            <div class="main--content col-md-12" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <?php if(!empty($noticia->imagem_visualizacao)): ?>
                                <img style="width: -webkit-fill-available;" src="/files/Noticias/imagem_visualizacao/<?= $noticia->imagem_visualizacao ?>" alt="">
                            <?php else: ?>
                                <img style="width: -webkit-fill-available;" src="/files/Noticias/imagem/<?= $noticia->imagem ?>" alt="">
                            <?php endif; ?>

                        </div>


                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?= $noticia->data ?></a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4"><?= $noticia->titulo ?></h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <span style="text-align: justify">
                                <?= $noticia->descricao ?>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="post--related ptop--30">
                    <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4"><?= $relacionados ? 'Relacionadas' : '' ?></h2>
                        <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                    </div>
                    <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">

                            <?php foreach ($relacionados as $noticiaRelacionada): ?>
                                <li class="col-sm-4 pbottom--30">
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                            <a href="#" class="thumb"><img src="/files/Noticias/imagem/<?= $noticiaRelacionada->noticia->imagem ?>" alt="" data-rjs="2"></a>
                                            <a href="#" class="cat">Fitness</a> <a href="#" class="icon"></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li>
                                                        <a href="/noticia/<?= $noticiaRelacionada->noticia->categoria->categoria ?>/<?= $noticiaRelacionada->noticia->titulo_resumo ?>/<?= $noticiaRelacionada->noticia->id ?>">
                                                            <?= $noticiaRelacionada->noticia->data ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="title">
                                                    <h3 class="h4">
                                                        <a href="#" class="btn-link">
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
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->

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
