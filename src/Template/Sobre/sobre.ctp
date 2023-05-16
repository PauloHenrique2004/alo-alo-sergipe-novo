<section id="about" style="margin-top: 50px">
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="/files/Sobre/imagem/<?= $sobre->imagem ?>" alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3><?= $sobre->titulo ?></h3>
                        </div>
                        <div class="about-prea">
                                <?= $sobre->descricao ?>
                        </div>
                    </div>
                </div>

                <?= $this->element('site/publicidade') ?>
            </div>
        </div>
    </div>
</section>


<style>
    p{
        color: #506172 !important;
        text-align: justify !important;
    }
</style>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "Vida e Você - <?= $title ?>"/>
<meta property="og:description" content="Vida e Você, seu portal de notícias!"/>
<?php $this->end() ?>
