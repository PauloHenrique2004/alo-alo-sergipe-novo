<?php $proximaCategoria = $proximaCategoriaIrma($categoria->layout, $categoria->id); ?>

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
                        <?php $nome = Cake\Utility\Text::slug($categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo); ?>

                        <a href="/noticia/<?= $categoria->categoria ?>/<?= $nome ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="thumb"><img src="/files/Noticias/imagem/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->imagem ?>" alt=""></a>
                        <a href="/noticia/<?= $categoria->categoria ?>/<?= $nome ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="cat">
                            <?= $categoria->categoria ?>
                        </a>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li>
                                    <a class="hover-fff" href="/noticia/<?= $categoria->categoria ?>/<?= $nome ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>">
                                        <?= $categoriaNoticiasLayout1($categoria->id,1)[0]->data ?>
                                    </a>
                                </li>
                            </ul>

                            <div class="title">
                                <h3 class="h4">
                                    <a href="/noticia/<?= $categoria->categoria ?>/<?= $nome?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>"
                                       class="btn-link hover-fff">
                                        <?= $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo  ?>
                                    </a>
                                </h3>
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

            <?php foreach ($categoriaNoticiasLayout1($categoria->id) as $value):?>
                <?php $nome = Cake\Utility\Text::slug($value->titulo_resumo); ?>


                <?php
                foreach ($categoriaNoticiasLayout1($categoria->id) as $item) {
                    $primeiraPosicao = current($categoriaNoticiasLayout1($categoria->id));
                    break;
                }
                ?>

                <?php $nome = Cake\Utility\Text::slug($value->titulo_resumo); ?>

                <?php if($value != $primeiraPosicao): ?>
                    <li class="col-xs-6">
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="/noticia/<?= $categoria->categoria ?>/<?= $nome ?>/<?= $value->id ?>" class="thumb"><img src="/files/Noticias/imagem/<?= $value->imagem ?>" alt=""></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="/noticia/<?= $categoria->categoria ?>/<?= $nome ?>/<?= $value->id ?>"><?= $value->data ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h3 class="h4" style="min-height: 90px">
                                            <a href="/noticia/<?= $categoria->categoria ?>/<?= $nome ?>/<?= $value->id ?>" class="btn-link"><?= $value->titulo_resumo ?>
                                            </a>
                                        </h3>
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

<?php if($proximaCategoria): ?>
    <?php $nome2 = Cake\Utility\Text::slug($categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->titulo_resumo); ?>

    <div class="col-md-6 ptop--30 pbottom--30">
        <!-- Post Items Title Start -->
        <div class="post--items-title" data-ajax="tab">
            <h2 class="h4"><?= $proximaCategoria->categoria ?></h2>
        </div>
        <!-- Post Items Title End -->

        <!-- Post Items Start -->
        <div class="post--items post--items-2" data-ajax-content="outer">
            <ul class="nav row gutter--15" data-ajax-content="inner">
                <li class="col-xs-12">
                    <!-- Post Item Start -->
                    <div class="post--item post--layout-1">
                        <div class="post--img">
                            <a href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome2 ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>" class="thumb">
                                <img src="/files/Noticias/imagem/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->imagem ?>" alt="">
                            </a>
                            <a  href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome2?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>" class="cat hover-fff">
                                <?= $proximaCategoria->categoria ?>
                            </a>
                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a class="hover-fff" href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome2 ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>"><?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->data ?></a></li>
                                </ul>

                                <div class="title">
                                    <h3 class="h4">
                                        <a href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome2 ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>" class="btn-link hover-fff"><?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->titulo_resumo  ?>
                                        </a>
                                    </h3>
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

                <?php foreach ($categoriaNoticiasLayout1($proximaCategoria->id) as $value):?>



                    <?php
                    foreach ($categoriaNoticiasLayout1($proximaCategoria->id) as $item) {
                        $primeiraPosicao = current($categoriaNoticiasLayout1($proximaCategoria->id));
                        break;
                    }
                    ?>

                    <?php $nome3 = Cake\Utility\Text::slug($value->titulo_resumo) ?>

                    <?php if($value != $primeiraPosicao): ?>
                        <li class="col-xs-6">
                            <div class="post--item post--layout-2">
                                <div class="post--img">
                                    <a href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome3 ?>/<?= $value->id ?>" class="thumb"><img src="/files/Noticias/imagem/<?= $value->imagem ?>" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome3 ?>/<?= $value->id ?>"><?= $value->data ?></a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4" style="min-height: 90px"><a href="/noticia/<?= $proximaCategoria->categoria ?>/<?= $nome3 ?>/<?= $value->id ?>" class="btn-link"><?= $value->titulo_resumo ?></a></h3>
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
    <?php $proximaCategoria = null; ?>
<?php endif; ?>
