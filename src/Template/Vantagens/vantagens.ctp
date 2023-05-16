<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Vantagens</h2>
                    <ul>
                        <li>Junte-se aos mais de xxxxx corretores de seguros parceiros da Golden Seller!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="insurance-details-area ptb-100" style=" background-color: #fff">
    <div class="container">
        <?php foreach ($vantagens as $key => $vantagen): ?>
            <?php if ($key % 2 == 0): ?>
                <div class="insurance-details-header div-img" style="margin-bottom: 70px;" id="<?= $vantagen-> id?>">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="image">
                            <img class="img-vantagem" src="/files/Vantagens/imagem/<?= $vantagen->imagem ?>" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="content">

                            <span style="color: #e3b564;font-size: 11px; font-weight: 600; text-transform: uppercase"><?= $vantagen->sub_titulo ?></span>
                            <h3><?= $vantagen->titulo ?></h3>


                            <p><?= $vantagen->descricao ?></p>
                        </div>
                    </div>
                </div>
                </div>

            <?php else: ?>
                <div class="insurance-details-header" style="margin-top: 70px; margin-bottom: 70px" id="<?= $vantagen-> id?>">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="content">
                                <span style="color: #e3b564;font-size: 11px; font-weight: 600;text-transform: uppercase"><?= $vantagen->sub_titulo ?></span>
                                <h3><?= $vantagen->titulo ?></h3>

                                <p><?= $vantagen->descricao ?></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="image text-center">
                                <img class="img-vantagem-2" src="/files/Vantagens/imagem/<?= $vantagen->imagem ?>" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

</section>

<style>
    .img-vantagem{
        float: left;
        margin-right: 66px;
        border-radius: 13px !important;
    }

    .img-vantagem-2{
        max-width: 400px;
        float: right;
        border-radius: 13px !important;
    }

    .header-area::before{
        background-color: transparent !important;
    }

    @media only screen and (max-width: 991px){

        .navbar-area {
            background: none !important;
        }

    }



</style>
