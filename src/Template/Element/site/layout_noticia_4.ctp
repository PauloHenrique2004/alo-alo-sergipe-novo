<div class="col-md-6 ptop--30 pbottom--30">
    <!-- Post Items Title Start -->
    <div class="post--items-title" data-ajax="tab">
        <h2 class="h4"><?= $categoria->categoria ?></h2>
    </div>
    <!-- Post Items Title End -->

    <!-- Post Items Start -->
    <div class="post--items post--items-2" data-ajax-content="outer">
        <ul class="nav row gutter--15" data-ajax-content="inner">
            <li class="col-xs-12">
                <!-- Post Item Start -->
                <div class="post--item post--layout-1">
                    <div class="post--img">
                        <a href="" class="thumb"><img src="/files/Noticias/imagem/<?= $categoriaNoticiasLayout4($categoria->id,1)[0]->imagem ?>" alt=""></a>
                        <a href="#" class="cat"><?= $categoria->categoria ?></a>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#"><?= $categoriaNoticiasLayout4($categoria->id,1)[0]->data ?></a></li>
                            </ul>

                            <div class="title">
                                <h3 class="h4"><a href="#" class="btn-link"><?= $categoriaNoticiasLayout4($categoria->id,1)[0]->titulo_resumo  ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Item End -->
            </li>
            <li class="col-xs-12">
                <!-- Divider Start -->
                <hr class="divider">
                <!-- Divider End -->
            </li>

            <?php foreach ($categoriaNoticiasLayout4($categoria->id) as $value):?>

                <?php
                foreach ($categoriaNoticiasLayout4($categoria->id) as $item) {
                    $primeiraPosicao = current($categoriaNoticiasLayout4($categoria->id));
                    break;
                }
                ?>

                <?php if($value != $primeiraPosicao): ?>
                    <li class="col-xs-6">
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="/noticia/<?= $categoria->categoria ?>/<?= $value->titulo_resumo ?>/<?= $value->id ?>" class="thumb"><img src="/files/Noticias/imagem/<?= $value->imagem ?>" alt=""></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="/noticia/<?= $categoria->categoria ?>/<?= $value->titulo_resumo ?>/<?= $value->id ?>"><?= $value->data ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h3 class="h4"><a href="/noticia/<?= $categoria->categoria ?>/<?= $value->titulo_resumo ?>/<?= $value->id ?>" class="btn-link"><?= $value->titulo_resumo ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>


            <?php endforeach; ?>


            <li class="col-xs-12">
                <!-- Divider Start -->
                <hr class="divider">
                <!-- Divider End -->
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

