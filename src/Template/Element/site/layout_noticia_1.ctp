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
                        <?php
                        // Remove acentos e caracteres especiais usando a biblioteca iconv
                        $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoria->categoria);

                        $nomeCategoria = preg_replace('/\s+/', '-', $nomeCategoria);

                        $nomeCategoria = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeCategoria);


                        // Remove acentos e caracteres especiais usando a biblioteca iconv
                        $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoriaNoticiasLayout1($categoria->id,1)[0]->titulo_resumo);

                        $nome = str_replace(' ', '-', $nome);

                        $nome = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome);

                        ?>


                        <a href="/noticia/<?= strtolower($nomeCategoria)?>/<?= strtolower($nome) ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="thumb">
                            <img class="img-principal" src="/files/Noticias/imagem/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->imagem ?>" alt=""></a>
                        <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>" class="cat">
                            <?= $categoria->categoria ?>
                        </a>

                        <div class="post--info">
                            <ul class="nav meta">
                                <li>
                                    <a class="hover-fff" href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>">
                                        <?= $categoriaNoticiasLayout1($categoria->id,1)[0]->data ?>
                                    </a>
                                </li>
                            </ul>

                            <div class="title">
                                <h3 class="h4">
                                    <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $categoriaNoticiasLayout1($categoria->id,1)[0]->id ?>"
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

               <?php
                // Remove acentos e caracteres especiais usando a biblioteca iconv
                $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoria->categoria);

                $nomeCategoria = preg_replace('/\s+/', '-', $nomeCategoria);

                $nomeCategoria = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeCategoria);


                // Remove acentos e caracteres especiais usando a biblioteca iconv
                $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value->titulo_resumo);

                $nome = str_replace(' ', '-', $nome);

                $nome = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome);

                ?>


                <?php
                foreach ($categoriaNoticiasLayout1($categoria->id) as $item) {
                    $primeiraPosicao = current($categoriaNoticiasLayout1($categoria->id));
                    break;
                }
                ?>

                <?php if($value != $primeiraPosicao): ?>
                    <li class="col-xs-6">
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="/noticia/<?= strtolower($categoria->categoria) ?>/<?= strtolower($nome) ?>/<?= $value->id ?>" class="thumb">
                                    <img class="img-min" src="/files/Noticias/imagem/<?= $value->imagem ?>" alt=""></a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="/noticia/<?= strtolower($categoria->categoria) ?>/<?= strtolower($nome) ?>/<?= $value->id ?>"><?= $value->data ?></a></li>
                                    </ul>

                                    <div class="title">
                                        <h3 class="h4" style="min-height: 90px">
                                            <a href="/noticia/<?= strtolower($categoria->categoria) ?>/<?= strtolower($nome) ?>/<?= $value->id ?>" class="btn-link"><?= $value->titulo_resumo ?>
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


    <?php
    // Remove acentos e caracteres especiais usando a biblioteca iconv
    $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $proximaCategoria->categoria);

    $nomeCategoria = preg_replace('/\s+/', '-', $nomeCategoria);

    $nomeCategoria = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeCategoria);


    // Remove acentos e caracteres especiais usando a biblioteca iconv
    $nome2 = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->titulo_resumo);

    $nome2 = str_replace(' ', '-', $nome2);

    $nome2 = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome2);
    ?>


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
                            <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome2) ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>" class="thumb">
                                <img class="img-principal" src="/files/Noticias/imagem/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->imagem ?>" alt="">
                            </a>
                            <a  href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome2) ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>" class="cat hover-fff">
                                <?= $proximaCategoria->categoria ?>
                            </a>
                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a class="hover-fff" href="/noticia/<?= strtolower($nomeCategoria)?>/<?= strtolower($nome2) ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>">
                                            <?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->data ?>
                                        </a>
                                    </li>
                                </ul>

                                <div class="title">
                                    <h3 class="h4">
                                        <a href="/noticia/<?= strtolower($nomeCategoria)?>/<?= strtolower($nome2) ?>/<?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->id ?>" class="btn-link hover-fff">
                                            <?= $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->titulo_resumo  ?>
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

                    <?php
                    // Remove acentos e caracteres especiais usando a biblioteca iconv
                    $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $proximaCategoria->categoria);

                    $nomeCategoria = preg_replace('/\s+/', '-', $nomeCategoria);

                    $nomeCategoria = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeCategoria);


                    // Remove acentos e caracteres especiais usando a biblioteca iconv
                    $nome3 = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoriaNoticiasLayout1($proximaCategoria->id,1)[0]->titulo_resumo);

                    $nome3 = str_replace(' ', '-', $nome2);

                    $nome3 = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome2);
                    ?>


                    <?php if($value != $primeiraPosicao): ?>
                        <li class="col-xs-6">
                            <div class="post--item post--layout-2">
                                <div class="post--img">
                                    <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome3) ?>/<?= $value->id ?>" class="thumb">
                                        <img class="img-min" src="/files/Noticias/imagem/<?= $value->imagem ?>" alt="">
                                    </a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome3) ?>/<?= $value->id ?>"><?= $value->data ?></a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4" style="min-height: 90px"><a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome3) ?>/<?= $value->id ?>" class="btn-link"><?= $value->titulo_resumo ?></a></h3>
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
