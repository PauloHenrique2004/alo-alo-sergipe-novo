<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Academia</h2>
                    <ul>
                        <li>Confira nossa programação de treinamentos!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Case Study Area -->
<section class="case-study-area ptb-100 pb-70 bg-fafafa">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <?php foreach ($academias as $academia): ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-case-study-box">
                        <div class="case-study-image bg1" style="background-image: url('/files/Academias/imagem/<?= $academia->imagem ?>'); max-height: 171px; object-fit: cover"></div>
                        <span style="background:<?= $academia->cor_tarja_tipo ?>; text-transform: uppercase" class="meta-category"><?= $academia->tipo ?></span>
                        <a href="/academia/<?= $academia->id ?>" class="case-study-link">
                            <div class="case-study-img-hover bg1" style="background-image: url('/files/Academias/imagem/<?= $academia->imagem ?>'); max-height: 171px; object-fit: cover"></div>
                        </a>
                        <div class="case-study-info">
                            <h3 class="title"><a href="/academia/<?= $academia->id ?>"><?= $academia->titulo ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-md-12 col-xs-12" style="display: flex; justify-content: center">
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->numbers() ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Case Study Area -->


<style>
    .header-area::before{
        background-color: transparent !important;
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
        background: #E3B564 !important;
        color: #ffffff;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
        z-index: 999;
    }

    @media only screen and (max-width: 991px){

        .navbar-area {
            background: none !important;
        }

    }


</style>
