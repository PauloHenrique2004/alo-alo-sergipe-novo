
<?= $this->element('site/ultimas_noticias_topo') ?>

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Main Content Start -->
        <div class="main--content">
            <!-- Post Items Start -->
            <div class="post--items post--items-1 pd--30-0">
                <div class="row gutter--15">
                    <div class="col-md-6">
                        <!-- Post Item Start -->
                        <div class="post--item post--layout-1 post--title-larger">
                            <div class="post--img">
                                <?php $nome = Cake\Utility\Text::slug(strtolower($noticiaBanner->titulo_resumo)); ?>
                                <a class="thumb hover-fff" href="/noticia/<?= strtolower($noticiaBanner->categoria->categoria) ?>/<?= $nome ?>/<?= $noticiaBanner->id ?>">
                                    <img src="/files/Noticias/banner_imagem/<?= $noticiaBanner->banner_imagem ?>" alt="Banner_topo">
                                </a>
                                <a class="cat" href="/noticia/<?= strtolower($noticiaBanner->categoria->categoria)?>/<?= $nome?>/<?= $noticiaBanner->id ?>">
                                    <?= $noticiaBanner->categoria->categoria ?>
                                </a>

                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a class="hover-fff" href="/noticia/<?= strtolower($noticiaBanner->categoria->categoria) ?>/<?= $nome ?>/<?= $noticiaBanner->id ?>"> <?= $noticiaBanner->data ?></a></li>
                                    </ul>
                                    <div class="title">
                                        <h2 class="h4">
                                            <a class="btn-link hover-fff" href="/noticia/<?= strtolower($noticiaBanner->categoria->categoria) ?>/<?= $nome ?>/<?= $noticiaBanner->id ?>">
                                                <?= $noticiaBanner->titulo ?>
                                            </a>
                                        </h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Post Item End -->
                    </div>


                    <!-- ULTIMAS NOTICIAS START-->
                    <div class="col-md-6">
                        <div class="row gutter--15">
                            <?php foreach ($ultimasNoticias as $ultimasNoticia): ?>
                                <?php
                                //          $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE',$ultimasNoticia->titulo_resumo );
                                $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $ultimasNoticia->titulo_resumo);

                                $nome = preg_replace('/\s+/', '-', $nome);

                                $nome = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome);

                                $nomeCategoria = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE',$ultimasNoticia->categoria->categoria );
                                ?>

                                <div class="col-xs-6 col-xss-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $ultimasNoticia->id ?>" class="thumb">
                                                <img src="/files/Noticias/imagem/<?= $ultimasNoticia->imagem ?>" alt="">
                                            </a>

                                            <a class="cat hover-fff" href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $ultimasNoticia->id ?>">
                                                <?= $ultimasNoticia->categoria->categoria ?>
                                            </a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><?= $ultimasNoticia->data ?></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4">
                                                        <a href="/noticia/<?= strtolower($nomeCategoria) ?>/<?= strtolower($nome) ?>/<?= $ultimasNoticia->id ?>"
                                                           class="btn-link hover-fff"><?= $ultimasNoticia->titulo_resumo ?>
                                                        </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                            <?php endforeach; ?>
                            <!-- ULTIMAS NOTICIAS END-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Items End -->
        </div>
        <!-- Main Content End -->

        <div class="ad--space pd--30-0"> <a href="#">
                <?php foreach ($publicidadeAbaixoBannerPrincipal as $value): ?>
                    <img src="/files/Publicidades/imagem/<?= $value->imagem ?>" alt="" class="center-block" data-rjs="2">
                <?php endforeach; ?>
            </a>
        </div>


        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">

                        <?php foreach ($categoriasLayout as $categoria): ?>
                            <?php if($categoria->layout == 1 && !in_array($categoria->id, $obterCategoriasExibidas(), true)): ?>
                                <?= $this->element('site/layout_noticia_1', compact('categoria')) ?>
                            <?php endif; ?>

                            <?php if($categoria->layout == 2): ?>
                                <?= $this->element('site/layout_noticia_2', compact('categoria')) ?>
                            <?php endif; ?>

                            <?php if($categoria->layout == 3): ?>
                                <?= $this->element('site/layout_noticia_3', compact('categoria')) ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <?= $this->element('site/sidebar') ?>
            <!-- Main Sidebar End -->
        </div>


        <!--        <div class="main--content pd--30-0">-->
        <!--            <div class="post--items-title" data-ajax="tab">-->
        <!--                <h2 class="h4">Videos</h2>-->
        <!---->
        <!--                <div class="nav">-->
        <!--                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_audio_video_posts">-->
        <!--                        <i class="fa fa-long-arrow-left"></i>-->
        <!--                    </a>-->
        <!---->
        <!--                    <span class="divider">/</span>-->
        <!---->
        <!--                    <a href="#" class="next btn-link" data-ajax-action="load_next_audio_video_posts">-->
        <!--                        <i class="fa fa-long-arrow-right"></i>-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            -->
        <!--            <div class="post--items post--items-4" data-ajax-content="outer">-->
        <!--                <ul class="nav row" data-ajax-content="inner">-->
        <!--                    <li class="col-md-8">-->
        <!--                   -->
        <!--                        <div class="post--item post--layout-1 post--type-video post--title-large">-->
        <!--                            <div class="post--img">-->
        <!--                                <a href="news-single-v1.html" class="thumb"><img src="/images/home-img/audio-video-01.jpg" alt=""></a>-->
        <!--                                <a href="#" class="cat">Wave</a>-->
        <!--                                <a href="#" class="icon"><i class="fa fa-eye"></i></a>-->
        <!---->
        <!--                                <div class="post--info">-->
        <!--                                    <ul class="nav meta">-->
        <!--                                        <li><a href="#">Succubus</a></li>-->
        <!--                                        <li><a href="#">Today 03:52 pm</a></li>-->
        <!--                                    </ul>-->
        <!---->
        <!--                                    <div class="title">-->
        <!--                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    -->
        <!---->
        <!--                    -->
        <!--                        <hr class="divider hidden-md hidden-lg">-->
        <!--                   -->
        <!--                    </li>-->
        <!---->
        <!--                    <li class="col-md-4">-->
        <!--                        <ul class="nav">-->
        <!--                            <li>-->
        <!--                        -->
        <!--                                <div class="post--item post--type-audio post--layout-3">-->
        <!--                                    <div class="post--img">-->
        <!--                                        <a href="news-single-v1.html" class="thumb"><img src="/images/home-img/audio-video-02.jpg" alt=""></a>-->
        <!---->
        <!--                                        <div class="post--info">-->
        <!--                                            <ul class="nav meta">-->
        <!--                                                <li><a href="#">Maclaan John</a></li>-->
        <!--                                                <li><a href="#">16 April 2017</a></li>-->
        <!--                                            </ul>-->
        <!---->
        <!--                                            <div class="title">-->
        <!--                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                 -->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                      -->
        <!--                                <div class="post--item post--type-video post--layout-3">-->
        <!--                                    <div class="post--img">-->
        <!--                                        <a href="news-single-v1.html" class="thumb"><img src="/images/home-img/audio-video-03.jpg" alt=""></a>-->
        <!---->
        <!--                                        <div class="post--info">-->
        <!--                                            <ul class="nav meta">-->
        <!--                                                <li><a href="#">Maclaan John</a></li>-->
        <!--                                                <li><a href="#">16 April 2017</a></li>-->
        <!--                                            </ul>-->
        <!---->
        <!--                                            <div class="title">-->
        <!--                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                -->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--               -->
        <!--                                <div class="post--item post--type-video post--layout-3">-->
        <!--                                    <div class="post--img">-->
        <!--                                        <a href="news-single-v1.html" class="thumb"><img src="/images/home-img/audio-video-04.jpg" alt=""></a>-->
        <!---->
        <!--                                        <div class="post--info">-->
        <!--                                            <ul class="nav meta">-->
        <!--                                                <li><a href="#">Maclaan John</a></li>-->
        <!--                                                <li><a href="#">16 April 2017</a></li>-->
        <!--                                            </ul>-->
        <!---->
        <!--                                            <div class="title">-->
        <!--                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                       -->
        <!--                            </li>-->
        <!--                            <li>-->
        <!--                          -->
        <!--                                <div class="post--item post--type-audio post--layout-3">-->
        <!--                                    <div class="post--img">-->
        <!--                                        <a href="news-single-v1.html" class="thumb"><img src="/images/home-img/audio-video-05.jpg" alt=""></a>-->
        <!---->
        <!--                                        <div class="post--info">-->
        <!--                                            <ul class="nav meta">-->
        <!--                                                <li><a href="#">Maclaan John</a></li>-->
        <!--                                                <li><a href="#">16 April 2017</a></li>-->
        <!--                                            </ul>-->
        <!---->
        <!--                                            <div class="title">-->
        <!--                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                       -->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!---->
        <!--         -->
        <!--                <div class="preloader bg--color-0--b" data-preloader="1">-->
        <!--                    <div class="preloader--inner"></div>-->
        <!--                </div>-->
        <!--         -->
        <!--            </div>-->
        <!--        </div>-->
    </div>

</div>
<!-- Main Content Section End -->
