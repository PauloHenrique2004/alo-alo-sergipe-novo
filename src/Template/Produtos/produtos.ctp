<div class="processing-computing-area bg-gray-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="computing-info-box text-center">
                    <h3 style="color: #fff; margin-bottom: 40px;">#EstamosComVocê</h3>
                    <h3 style="color: #fff;font-weight: 600; margin-top: -20px;margin-bottom: 40px;
    font-size: 27px !important;">Nossos <span class="text-color-primary" style="color: #333333">produtos:</span> </h3>

                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="justify-content: center; border: none">
                        <li class="nav-item nav-1" role="presentation">
                            <button style="cursor:pointer; border-radius: 7px; font-size: 18px;" class="nav-link active servicos" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                Seguro
                            </button>
                        </li>

                        <li class="nav-item nav-2" role="presentation">
                            <button style="cursor:pointer; border-radius: 7px; font-size: 18px;" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                Benefícios
                            </button>
                        </li>

                        <li class="nav-item nav-3" role="presentation">
                            <button style="cursor:pointer; border-radius: 7px; font-size: 18px;" class="nav-link" id="profile-tab-bank" data-bs-toggle="tab" data-bs-target="#profile-tab-pane-bank" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                Bank
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade1" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                            <div class="row">
                                <div class="col-12">
                                    <div class="feature-images__two small-mt__10">
                                        <div class="modern-grid-image-box row row--30">

                                            <?php foreach ($produtos as $produto): ?>
                                                <?php if($produto->categoria_produto_id == 1): ?>
                                                    <div class="single-item wow move-up col-lg-4 col-md-6 section-space--mt_60  small-mt__40">
                                                        <a href="/produto/<?= $produto->id ?>" target="_blank">
                                                            <div class="ht-box-images style-01">
                                                                <div class="image-box-wrap">
                                                                    <div class="box-image">
                                                                        <img class="img-produto" src="/files/Produtos/imagem/<?= $produto->imagem ?>">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6 class="heading"><span style="font-weight: 600"><?= $produto->nome ?></span></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                <?php endif ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                            <div class="row">
                                <div class="col-12">
                                    <div class="feature-images__two small-mt__10">
                                        <div class="modern-grid-image-box row row--30">

                                            <?php foreach ($produtos as $produto): ?>
                                                <?php if($produto->categoria_produto_id == 2): ?>
                                                    <div class="single-item wow move-up col-lg-4 col-md-6 section-space--mt_60  small-mt__40">
                                                        <div data-bs-toggle="modal" data-bs-target="#cotacao" class="ht-box-images style-01" style="cursor: pointer">
                                                            <div class="image-box-wrap">
                                                                <div class="box-image">
                                                                    <img class="img-produto" src="/files/Produtos/imagem/<?= $produto->imagem ?>">
                                                                </div>
                                                                <div class="content">
                                                                    <h6 class="heading"><span style="font-weight: 600"><?= $produto->nome ?></span></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="profile-tab-pane-bank" role="tabpanel" aria-labelledby="profile-tab-bank" tabindex="0">

                            <div class="row">
                                <div class="col-12">
                                    <div class="feature-images__two small-mt__10">
                                        <div class="modern-grid-image-box row row--30">

                                            <?php foreach ($produtos as $produto): ?>
                                                <?php if($produto->categoria_produto_id == 3): ?>
                                                    <div class="single-item wow move-up col-lg-4 col-md-6 section-space--mt_60  small-mt__40">
                                                        <div data-bs-toggle="modal" data-bs-target="#cotacao" class="ht-box-images style-01" style="cursor: pointer">
                                                            <div class="image-box-wrap">
                                                                <div class="box-image">
                                                                    <img class="img-produto" src="/files/Produtos/imagem/<?= $produto->imagem ?>">
                                                                </div>
                                                                <div class="content">
                                                                    <h6 class="heading"><span style="font-weight: 600"><?= $produto->nome ?></span></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--=========== Produtos End ==========-->
<style>
    @media(min-width: 769px){
        .processing-computing-area{
            margin-top: -106px !important;
        }
    }

</style>

<?php $this->start('scrit-footer') ?>

<script>
    $('.nav-1').click(function () {
        $('.fade1').addClass('active show')
    })
</script>


<?php $this->end() ?>
