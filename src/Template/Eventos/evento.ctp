<section id="about" style="margin-top: 50px">
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="/files/Eventos/imagem/<?= $evento->imagem ?>" alt="">
                        </div>
                        <p style="margin-top: 10px;" class="ti-calendar"> <?= $evento->data ?>&nbsp; <span class="ti-time"><?= $evento->hora ?></span></p>
                        <div class="section-tittle mb-30 pt-30">
                            <h3><?= $evento->titulo ?></h3>
                        </div>
                        <div class="about-prea">
                                <?= $evento->descricao ?>
                        </div>
                    </div>
                </div>

                <?= $this->element('site/publicidade') ?>
            </div>
        </div>
    </div>
</section>

<section class="weekly2-news-area  weekly2-pading gray-bg " style="padding-bottom: inherit; margin-bottom: -181px; background: #fff !important; padding-top: initial">
    <div class="container">
        <div class="weekly2-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Veja mais eventos</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        <?php foreach ($maisEventos as $item): ?>
                            <div class="weekly2-single" style="width: 300px; height: 500px; object-fit: cover ">
                                <div class="weekly2-img">
                                    <img src="/files/Eventos/capa/<?= $item->capa ?>" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1" style="visibility: hidden"><?= $item->titulo ?></span>
                                    <p><?= $item->data ?></p>
                                    <h4><a href="/evento/<?= $item->id ?>"><?= $item->titulo ?></a></h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    p{
        color: #506172 !important;
        text-align: justify !important;
    }

    .ti-time:before {
        margin-right: 3px;
    }

    .ti-calendar:before {
        margin-right: -1px;
    }
</style>


<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Eventos/imagem/" . $evento->imagem   ?>"/>
<meta property="og:title" content= "<?= $evento->titulo ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($evento->descricao, 0, 60))  ?>"/>
<?php $this->end(); ?>
