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

                <li class="col-md-4 col-xs-6 col-xxs-12">
                    <!-- Post Item Start -->
                    <div class="post--item post--layout-1 l3">
                        <div class="post--img">
                            <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $value->id ?>" class="thumb">
                                <img class="img-media-l3" src="/files/Noticias/imagem/<?= $value->imagem ?>" alt=""></a>

                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a class="hover-fff" href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $value->id ?>"><?= $value->data ?></a></li>
                                </ul>

                                <div class="title">
                                    <h3 class="h4"><a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $value->id ?>" class="btn-link hover-fff"><?= $value->titulo_resumo  ?></a></h3>
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
