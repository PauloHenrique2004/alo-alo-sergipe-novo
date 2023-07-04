<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb" style="text-align: center;">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span>Sobre nós</span></li>
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
                            <img class="img-detalhe-noticias" src="/files/Sobre/imagem/<?= $sobre->imagem ?>" alt="" style="width: -webkit-fill-available;">
                        </div>

                        <div class="post--info">
                            <div class="title">
                                <h2 class="h4"><?= $sobre->titulo ?></h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <span style="text-align: justify">
                                <?= $sobre->descricao ?>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <?= $this->element('site/sidebar') ?>

        </div>
    </div>
</div>
<!-- Main Content Section End -->

    <?php $this->start('script-head'); ?>
    <meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] . '/images/meta.png' ?>"/>
    <meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
    <meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
    <?php $this->end() ?>
