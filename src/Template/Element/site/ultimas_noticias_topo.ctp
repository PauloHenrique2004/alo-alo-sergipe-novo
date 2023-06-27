<!-- News Ticker Start -->
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Notícias de última hora:</h2>
        </div>

        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                <?php foreach ($ultimasNoticiasTopo as $item): ?>
                    <?php $nome = Cake\Utility\Text::slug(strtolower($item->titulo_resumo)); ?>

                    <li>
                        <h3 class="h3">
                            <a href="/noticia/<?= strtolower($noticiaBanner->categoria->categoria) ?>/<?= $nome ?>/<?= $item->id ?>">
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
