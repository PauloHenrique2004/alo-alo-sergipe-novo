<div class="row">
    <div class="col-lg-12">
        <div class="acme-news-ticker">
            <div class="acme-news-ticker-label ult">Últimas Notícias</div>
            <div class="acme-news-ticker-box">
                <ul class="my-news-ticker">
                    <?php foreach ($ultimasNoticiasTopo as $item): ?>
                        <li>
                                <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $item->titulo_resumo ?>/<?= $item->id ?>">

                                <span style="color: #ae133f;">Notícias de última hora:</span>
                                <?= strlen($item->titulo_resumo) > 180 ? strip_tags(substr($item->titulo_resumo,  0, 180))."..." : strip_tags($item->titulo_resumo) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- <div class="acme-news-ticker-controls acme-news-ticker-vertical-controls">
                <button class="acme-news-ticker-arrow acme-news-ticker-prev"></button>
                <button class="acme-news-ticker-pause"></button>
                <button class="acme-news-ticker-arrow acme-news-ticker-next"></button>
            </div> -->
        </div>
    </div>
</div>



<style>

    @media(max-width: 768px) {
        .ult{
            margin-top: 10px !important;
        }
    }

</style>
