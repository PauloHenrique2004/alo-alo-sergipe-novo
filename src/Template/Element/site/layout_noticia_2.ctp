<div class="col-md-12 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <div class="post--items-title" data-ajax="tab">
        <h2 class="h4"><?= $categoria->categoria ?></h2>
    </div>
    <!-- Post Items Title End -->

    <!-- Post Items Start -->
    <div class="post--items post--items-2" data-ajax-content="outer">
        <ul class="nav row" data-ajax-content="inner">
            <li class="col-md-6">
                <!-- Post Item Start -->
                <div class="post--item post--layout-2">
                    <div class="post--img">
                        <a href="/noticia/<?= $categoria->categoria ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="thumb">
                            <img src="/files/Noticias/imagem/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->imagem ?>" alt="">
                        </a>
                        <a href="/noticia/<?= $categoria->categoria ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="cat">
                            <?= $categoria->categoria ?>
                        </a>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="/noticia/<?= $categoria->categoria ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>"><?= $categoriaNoticiasLayout1($categoria->id,1)[0]->data ?></a></li>
                            </ul>

                            <div class="title">
                                <h3 class="h4"><a href="/noticia/<?= $categoria->categoria ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="btn-link"><?= $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo  ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Item End -->
            </li>

            <li class="col-md-6">
                <ul class="nav row">
                    <li class="col-xs-12 hidden-md hidden-lg">
                        <!-- Divider Start -->
                        <hr class="divider">
                        <!-- Divider End -->
                    </li>
                    <?php foreach ($categoriaNoticiasLayout1($categoria->id) as $value):?>

                    <?php
                    foreach ($categoriaNoticiasLayout1($categoria->id) as $item) {
                        $primeiraPosicao = current($categoriaNoticiasLayout1($categoria->id));
                        break;
                    }
                    ?>

                    <?php if($value != $primeiraPosicao): ?>
                    <li class="col-xs-6">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="/noticia/<?= $categoria->categoria ?>/<?= $value->titulo_resumo ?>/<?= $value->id ?>" class="thumb"><img src="/files/Noticias/imagem/<?= $value->imagem ?>" alt="img"></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?= $value->data ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h3 class="h4">
                                            <a href="/noticia/<?= $categoria->categoria ?>/<?= $value->titulo_resumo ?>/<?= $value->id ?>" class="btn-link">
                                                <?= $value->titulo_resumo ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div style="height: 20px"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Post Item End -->
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </li>

                </ul>
            </li>
        </ul>

        <!-- Preloader Start -->
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
        <!-- Preloader End -->
    </div>
    <!-- Post Items End -->
</div>
