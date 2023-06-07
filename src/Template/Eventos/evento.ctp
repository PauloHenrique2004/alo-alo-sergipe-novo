<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb" style="text-align: center;">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span><?= $evento->titulo ?></span></li>
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
                            <img style="width: -webkit-fill-available;" src="/files/Eventos/imagem/<?= $evento->imagem ?>" alt="">
                        </div>


                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?= $evento->data ?></a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4"><?= $evento->titulo ?></h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <span style="text-align: justify">
                                <?= $evento->descricao ?>
                            </span>
                        </div>

                    </div>
                </div>

                <div class="post--related ptop--30">
                    <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">Veja mais eventos</h2>
                    </div>
                    <div class="post--items post--items-2" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">

                            <?php foreach ($maisEventos as $item): ?>
                                <li class="col-sm-4 pbottom--30">
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                            <a href="/evento/<?= $item->titulo ?><?= $item->id ?>" class="thumb"><img src="/files/Eventos/capa/<?= $item->capa ?>" alt="" data-rjs="2"></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li>
                                                        <a href="/evento/<?= $item->titulo ?><?= $item->id ?>">
                                                            <?= $evento->data ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="title">
                                                    <h3 class="h4">
                                                        <a href="/evento/<?= $item->titulo ?><?= $item->id ?>">
                                                            <?= $item->titulo ?>
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
<style>
    p{
        color: #506172 !important;
        text-align: justify !important;
    }

    .ti-time:before {
        margin-right: 3px;
    }

    .ti-calendar:before {
        margin-right: -1px;
    }
</style>


<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Eventos/imagem/" . $evento->imagem   ?>"/>
<meta property="og:title" content= "<?= $evento->titulo ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($evento->descricao, 0, 60))  ?>"/>
<?php $this->end(); ?>
