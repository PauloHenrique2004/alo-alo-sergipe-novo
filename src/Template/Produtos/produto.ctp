<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h1 class="breadcrumb-title">Produto</h1>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Produto</a></li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<div class="blog-pages-wrapper section-space--ptb_100">
    <div class="container">
        <div class="row" style="justify-content: center">
            <div class="col-12 col-lg-10 col-md-10">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-grid">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="#">
                            <img class="img-fluid" src="/files/Produtos/photo/<?= $produto->photo ?>" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info lg-blog-post-info">

                        <h5 class="post-title font-weight--bold">
                            <?= $produto->nome ?>
                        </h5>

                        <div class="post-excerpt mt-15">
                            <?= $produto->descricao ?>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->
            </div>
        </div>
    </div>


    <div class="row" style="justify-content: center">
        <div id="main-wrapper" style="margin-top: inherit !important;">
            <div class="site-wrapper-reveal">
                <!--====================  COTAÇÃO====================-->
                <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                    <div class="container">
                        <div class="row" style="justify-content: center">
                            <div class="col-12 col-lg-10 col-md-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-lg-6">
                                        <div style="justify-content: center; display: flex; margin-bottom: 30px;">
                                            <img src="/images/logo/logo-nova.png" style="max-width: 200px; max-height: 164px">
                                        </div>
                                        <div class="conact-us-wrap-one mb-30">
                                            <h3 class="heading">Oi, faça sua, <span class="text-color-primary">cotação</span> é rapidinho!</h3>
                                            <div class="sub-heading">Entraremos em contato para mais detalhes da sua cotação, obrigado pela preferência.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-lg-6">
                                        <div class="contact-form-wrap">
                                            <?php echo $this->Form->create(null, ['url' => ['controller' => 'Cotacao', 'action' => 'cotacao']]); ?>
                                            <div class="contact-form">
                                                <div class="contact-inner">
                                                    <select class="form-select selecionar" aria-label="Default select example" id="produto" name="produto">
                                                        <option selected>Qual serviço deseja cotar?</option>
                                                        <?php foreach ($produtos as $value): ?>
                                                            <option><?= $value->nome ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="contact-inner">
                                                    <input name="nome" type="text" placeholder="Nome *" required="">
                                                </div>

                                                <div class="contact-inner">
                                                    <input name="email" type="email" placeholder="Email *" required="">
                                                </div>

                                                <div class="contact-input">
                                                    <div class="contact-inner">
                                                        <input name="tel" type="text" placeholder="Telefone *" required="" data-mask="(99)99999-9999">
                                                    </div>
                                                    <div class="contact-inner">
                                                        <input name="horario" type="text" placeholder="Melhor horário para contato *" required="" data-mask="99:99">
                                                    </div>
                                                </div>

                                                <div class="contact-inner contact-message">
                                                    <textarea name="texto" placeholder="Deseja esclarecer mais algo ou possui alguma duvida?"></textarea>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Pessoa física" id="tipo" name="tipo">
                                                    <label class="form-check-label" for="tipo">
                                                        Pessoa física
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Pessoa jurídica" id="Pessoa jurídica"  name="tipo" checked>
                                                    <label class="form-check-label" for="tipo">
                                                        Pessoa jurídica
                                                    </label>
                                                </div>

                                                <div class="recaptcha" style="margin-top: 10px; margin-bottom: 20px">
                                                    <?= $this->Recaptcha->display() ?>
                                                </div>


                                                <div class="submit-btn mt-20">
                                                    <button class="ht-btn ht-btn-md" type="submit">Receber cotação</button>
                                                </div>
                                            </div>
                                            <?= $this->Form->end() ?>
                                            <div id="status"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====================  /COTAÇÃO ====================-->
            </div>
        </div>
    </div>
</div>




<style>
    .widget-area .widget_pearo_posts_thumb .item .thumb .fullimage {
        width: 80px;
        height: 80px;
        display: inline-flex;
        border-radius: 5px;
        background-size: cover !important;
        background-repeat: no-repeat;
        background-position: center center !important;
    }

    .widget-area .widget_pearo_posts_thumb .item .info .title a {
        display: inline-flex;
    }

    .widget-area .widget_pearo_posts_thumb .item .info .title {
        margin-bottom: 0;
        line-height: 1.4;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-area .widget .widget-title {
        border-bottom: 1px solid #eeeeee;
        padding-bottom: 10px;
        text-transform: uppercase;
        position: relative;
        font-weight: 900;
        font-size: 19px;
        width: 100%;
        margin-top: 20px;
        float: left;
    }

    @media(min-width: 769px){
        .breadcrumb-area{
            margin-top: -106px !important;
        }
    }


     .selecionar{
         height: 56px;
         background-color: #f8f8f8;
         border-color: #f8f8f8;
     }

</style>

