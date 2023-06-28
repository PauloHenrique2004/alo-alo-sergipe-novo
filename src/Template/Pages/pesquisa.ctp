<div class="whole-wrap">
    <div class="container box_1170" style="text-align: center;">
        <div class="section-top-border">
            <h3 class="mb-30">Pesquisa</h3>

            <div class="row">
                <?php foreach ($pesquisaNoticia as $noticia): ?>
                    <div class="col-md-12">
                        <div class="single-defination">

                            <?php if(!empty($noticia->titulo)): ?>
                                <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                    <h4 class="mb-20"><?= $noticia->titulo ?></h4>
                                </a>
                            <?php elseif (!empty($noticia->titulo_resumo)): ?>
                                <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                    <h4 class="mb-20"><?= $noticia->titulo_resumo ?></h4>
                                </a>
                            <?php endif; ?>

                            <a href="/noticia/<?= $noticiaBanner->categoria->categoria ?>/<?= $noticia->titulo_resumo ?>/<?= $noticia->id ?>">
                                <p> <?= strlen($noticia->descricao) > 180 ? strip_tags(substr( $noticia->descricao,  0, 180))."..." : strip_tags($noticia->descricao) ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach;?>


                <?php foreach ($pesquisaAgenda as $agenda): ?>
                    <div class="col-md-12">
                        <div class="single-defination">
                            <a href="/evento/<?= $agenda->id ?>">
                                <h4 class="mb-20"><?= $agenda->titulo ?></h4>
                            </a>

                            <a href="/evento/<?= $agenda->id ?>">
                                <p> <?= $agenda->titulo ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12" style="display: flex; justify-content: center">
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->numbers() ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


<!--        --><?php //debug($pesquisaNoticia); exit();?>

        <?php if (count($pesquisaNoticia) === 0 && count($pesquisaAgenda) === 0): ?>
            <div class="page--title pd--30-0" style="padding-bottom: 56px;">
                <h2 class="h2"><span style="font-weight: 100;">Não foi possível encontrar conteúdo com o termo</span> <?= $_GET['pesquisa'] ?></h2>
                <div class="content"></div>
            </div>
        <?php endif; ?>

    </div>
</div>

<style>
    .mb-20 {
        margin-bottom: inherit;
    }

    .mb-30{
        color: #fff;
        background: #000;
        border-radius: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .pagination a{
        width: 45px;
        height: 45px;
        margin: 0 2px;
        display: inline-block;
        background-color: #ffffff;
        line-height: 48px;
        color: #000000;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        border-radius: 5px;
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        text-align: center;
    }

    .pagination .active a{
        background: #000 !important;
        color: #ffffff;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        z-index: 999;
    }

</style>

<?php $this->start('script-head'); ?>
<meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/og-image.jpeg' ?>"/>
<meta property="og:title" content= "alÔ alÔ Sergipe  - <?= $title ?>"/>
<meta property="og:description" content="alÔ alÔ Sergipe, seu portal!"/>
<?php $this->end(); ?>
