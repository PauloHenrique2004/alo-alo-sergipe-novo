<section id="about" style="margin-top: 50px">
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="/files/Blogs/imagem/<?= $detalhes->imagem ?>" alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3><?= $detalhes->titulo ?></h3>
                        </div>
                        <div class="about-prea">
                            <?= $detalhes->descricao ?>
                        </div>
                    </div>
                </div>
                <?= $this->element('site/aside_blog')  ?>
            </div>
        </div>
    </div>
</section>

<style>
    p{
        color: #506172 !important;
        text-align: justify !important;
    }

    #searchthis{
        display: none !important;
    }
</style>
<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . "/files/Eventos/imagem/" . $detalhes->imagem   ?>"/>
<meta property="og:title" content= "<?= $detalhes->titulo ?>"/>
<meta property="og:description" content="<?= strip_tags(substr($detalhes->descricao, 0, 60))  ?>"/>
<?php $this->end(); ?>
