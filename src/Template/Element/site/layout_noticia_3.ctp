<div class="col-md-12 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <div class="post--items-title" data-ajax="tab">
        <h2 class="h4"><?= $categoria->categoria ?></h2>
    </div>
    <!-- Post Items Title End -->

    <!-- Post Items Start -->
    <div class="post--items" data-ajax-content="outer">
        <ul class="nav row gutter--15" data-ajax-content="inner">
            <?php foreach ($categoriaNoticiasLayout3($categoria->id) as $value):?>
                <li class="col-md-4 col-xs-6 col-xxs-12">
                    <!-- Post Item Start -->
                    <div class="post--item post--layout-1">
                        <div class="post--img">
                            <a href="#" class="thumb"><img src="/files/Noticias/imagem/<?= $value->imagem ?>" alt=""></a>

                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="#"><?= $value->data ?></a></li>
                                </ul>

                                <div class="title">
                                    <h3 class="h4"><a href="#" class="btn-link"><?= $value->titulo_resumo  ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Item End -->
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Preloader Start -->
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
        <!-- Preloader End -->
    </div>
    <!-- Post Items End -->
</div>
