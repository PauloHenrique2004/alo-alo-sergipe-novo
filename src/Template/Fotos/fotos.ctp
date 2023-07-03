<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb" style="text-align: center;">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <li class="active"><span><?= $album->titulo ?></span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
<!--            <div class="main--content col-md-8" data-sticky-content="true">-->
            <div class="main--content col-md-8">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <img style="width: -webkit-fill-available;" src="/files/Albuns/imagem/<?= $album->imagem ?>" alt="" class="img-galeria">
                        </div>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?= $album->data ?></a></li>
                            </ul>
                            <div class="title">
                                <h2 class="h4"><?= $album->titulo ?></h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <span style="text-align: justify">
                                <?= $album->descricao ?>
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="main-content--section pbottom--30">
                <div class="container">
                    <div class="row">
                        <!-- Main Content Start -->
                        <div class="main--content col-md-12 col-sm-12" data-sticky-content="true">
                            <div class="sticky-content-inner">
                                <!-- Post Items Start -->
                                <div class="post--items post--items-2 pd--30-0">
                                    <ul class="nav row AdjustRow">
                                        <?php foreach ($fotos as $foto): ?>
                                            <li class="col-md-6 col-sm-12 col-xs-6 col-xss-12" style="margin-top: 25px;">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post--title-large">
                                                    <div class="post--img">
                                                        <a href="/files/Fotos/imagem/<?= $foto->imagem ?>" data-lightbox="roadtrip">
                                                            <img class="card-img rounded-0 img-galeria-2" src="/files/Fotos/imagem/<?= $foto->imagem ?>" alt="capa">
                                                        </a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li>
                                                                    <?= $foto->data ?>
                                                                </li>
                                                            </ul>
                                                            <div class="title">
                                                                <h2 class="h4">
                                                                    <a href="/files/Fotos/imagem/<?= $foto->imagem ?>">
                                                                        <?= $foto->titulo ?>
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Post Items End -->

                                <!-- Pagination Start -->
                                <div class="pagination--wrapper clearfix bdtop--1 bd--color-2">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12" style="display: flex; justify-content: center; margin-top: 53px;">
                                            <div class="paginator">
                                                <ul class="pagination">
                                                    <?= $this->Paginator->numbers() ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination End -->
                            </div>
                        </div>
                        <!-- Main Content End -->
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

    .img-galeria{
        height: 500px;
        object-fit: cover;
    }

    @media(max-width: 480px){
        .img-galeria{
            height: 240px;
            object-fit: cover;
        }
    }

    .img-galeria-2{
        height: 240px;
        object-fit: cover;
        width: 100%;
    }

</style>


<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Albuns/imagem/" . $album->imagem   ?>"/>
<meta property="og:title" content= "<?= $album->titulo  ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($album->descricao, 0, 60))  ?>"/>
<?php $this->end(); ?>

<link rel="stylesheet" media="all" href="/lightbox/lightbox.min.css">

<?php $this->start('script-footer') ?>
<script type="text/javascript" src="/lightbox/lightbox.min.js"></script>
<?php $this->end() ?>
