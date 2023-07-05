<!-- News Ticker Start -->
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Notícias de última hora:</h2>
        </div>

        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                <?php foreach ($ultimasNoticiasTopo as $item): ?>

                    <?php
                    // Remove acentos e caracteres especiais usando a biblioteca iconv
                    $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $noticiaBanner->categoria->categoria);

                    $nomeCategoria = preg_replace('/\s+/', '-', $nomeCategoria);

                    $nomeCategoria = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeCategoria);


                    // Remove acentos e caracteres especiais usando a biblioteca iconv
                    $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $item->titulo_resumo);

                    $nome = str_replace(' ', '-', $nome);
                    
                    $nome = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome);

                    ?>


                    <li>
                        <h3 class="h3">
                            <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome)?>/<?= $item->id ?>">
                                <?= strlen($item->titulo_resumo) > 180 ? strip_tags(substr($item->titulo_resumo,  0, 180))."..." : strip_tags($item->titulo_resumo) ?>
                            </a>
                        </h3>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- News Ticker End -->
