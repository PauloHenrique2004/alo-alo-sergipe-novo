<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
    <div class="sticky-content-inner">
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Siga-nos</h2>
                <i class="icon fa fa-share-alt"></i>
            </div>

            <!-- Social Widget Start -->
            <?php foreach ($configuracoes as $configuracoe): ?>
                <div class="social--widget style--1">
                    <ul class="nav">
                        <?php if(!empty($configuracoe->facebook)): ?>
                            <li class="facebook">
                                <a href="<?= $configuracoe->facebook ?>" target="_blank">
                                    <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                    <span class="count">Facebook</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(!empty($configuracoe->twitter)): ?>
                            <li class="twitter">
                                <a href="<?= $configuracoe->twitter ?>" target="_blank">
                                    <span class="icon"><i class="fa fa-twitter"></i></span>
                                    <span class="count">Twitter</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(!empty($configuracoe->instagram)): ?>
                            <li class="google-plus">
                                <a href="<?= $configuracoe->instagram ?>" target="_blank">
                                    <span class="icon"><i class="fa fa-instagram"></i></span>
                                    <span class="count">Instagram</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(!empty($configuracoe->youtube)): ?>
                            <li class="youtube">
                                <a href="<?= $configuracoe->youtube ?>" target="_blank">
                                    <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                    <span class="count">youtube</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
            <!-- Social Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Get Newsletter</h2>
                <i class="icon fa fa-envelope-open-o"></i>
            </div>

            <!-- Subscribe Widget Start -->
            <div class="subscribe--widget">
                <div class="content">
                    <p>Subscribe to our newsletter to get  latest news, popular news and exclusive updates.</p>
                </div>

                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                    <div class="input-group">
                        <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required>

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>
                        </div>
                    </div>

                    <div class="status"></div>
                </form>
            </div>
            <!-- Subscribe Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Últimas notícias</h2>
                <i class="icon fa fa-newspaper-o"></i>
            </div>

            <!-- List Widgets Start -->

            <!-- Post Items Start -->
            <div class="post--items post--items-3" data-ajax-content="outer">
                <ul class="nav" data-ajax-content="inner">

                    <?php foreach ($ultimasNoticias as $ultimasNoticia): ?>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="/noticia/<?= $ultimasNoticia->categoria->categoria ?>/<?= $ultimasNoticia->titulo_resumo ?>/<?= $ultimasNoticia->id ?>" class="thumb">
                                        <img src="/files/Noticias/imagem/<?= $ultimasNoticia->imagem ?>" alt="">
                                    </a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="/noticia/<?= $ultimasNoticia->categoria->categoria ?>/<?= $ultimasNoticia->titulo_resumo ?>/<?= $ultimasNoticia->id ?>"><?= $ultimasNoticia->categoria->categoria ?></a></li>
                                            <li><a href="/noticia/<?= $ultimasNoticia->categoria->categoria ?>/<?= $ultimasNoticia->titulo_resumo ?>/<?= $ultimasNoticia->id ?>"><?= $ultimasNoticia->data ?></a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4">
                                                <a href="/noticia/<?= $ultimasNoticia->categoria->categoria ?>/<?= $ultimasNoticia->titulo_resumo ?>/<?= $ultimasNoticia->id ?>" class="btn-link">
                                                    <?= $ultimasNoticia->titulo_resumo ?>
                                                </a>
                                            </h3>
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
        <!-- List Widgets End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <div class="widget--title">
            <h2 class="h4" style="visibility: hidden">Advertisement</h2>
            <i class="icon fa fa-bullhorn"></i>
        </div>

        <!-- Ad Widget Start -->
        <div class="ad--widget">
            <?php foreach ($publicidadeLateral as $value): ?>
                <a href="<?= !empty($value->link) ? $value->link : '#'?>">
                    <img src="/files/Publicidades/imagem/<?= $value->imagem ?>" alt="">
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Ad Widget End -->
    </div>
    <!-- Widget End -->
</div>
