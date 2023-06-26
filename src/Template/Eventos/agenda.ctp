<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-12 col-sm-12" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-2 pd--30-0">
                        <ul class="nav row AdjustRow">
                            <?php foreach ($agenda as $value): ?>
                                <?php $nome = Cake\Utility\Text::slug($value->titulo); ?>

                                <li class="col-md-4 col-sm-12 col-xs-4 col-xss-12" style="margin-top: 25px;">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="/evento/<?= $nome?>/<?= $value->id ?>">
                                                <img class="card-img rounded-0 hover-fff" src="/files/Eventos/capa/<?= $value->capa ?>" alt="capa">
                                            </a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li>
                                                        <a class="hover-fff" href="/evento/<?= $nome ?>/<?= $value->id ?>">
                                                            <?= $value->data ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4">
                                                        <a href="/evento/<?= $nome ?>/<?= $value->id ?>" class="btn-link hover-fff">
                                                            <?= $value->titulo ?>
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
                    <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
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
<!-- Main Content Section End -->



<style>
    .pagination li a:hover{
        border-color: #ffcb02 !important;
    }
</style>


<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/meta.png' ?>"/>
<meta property="og:title" content= "alÔ alÔ Sergipe - <?= $title ?>"/>
<meta property="og:description" content="alÔ alÔ Sergipe, seu portal!"/>
<?php $this->end(); ?>


<style>
    .pagination a{
        width: 45px;
        height: 45px;
        margin: 0 2px;
        display: inline-block;
        background-color: #ffffff;
        line-height: 48px;
        color: #000000;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        border-radius: 5px;
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        text-align: center;
    }

    .pagination .active a{
        background: #000 !important;
        color: #ffffff;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        z-index: 999;
    }
</style>
