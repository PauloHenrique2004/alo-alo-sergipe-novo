
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h1 class="breadcrumb-title">Trabalhe conosco</h1>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/trabalhe-conosco">Trabalhe conosco</a></li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!--====================  Contact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12 col-lg-12">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: justify; margin-bottom: 40px;">
                                <p>Já pensou em trabalhar em um lugar onde o principal objetivo é crescer junto e cooperar? Se você chegou até aqui em busca de oportunidade, acreditamos que deseja fazer parte de um sistema que promove transformação social. Venha somar o seu propósito ao nosso negócio e fazer parte desta trajetória de sucesso.</p>
                            </div>
                        </div>
                        <div class="contact-form-wrap">
                            <?php echo $this->Form->create(null, ['url' => ['controller' => 'Contacts', 'action' => 'trabalheConosco']]); ?>
                            <div class="contact-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="nome" type="text" placeholder="Nome *" required>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *" required>
                                    </div>
                                </div>

                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="tel" type="text" placeholder="Telefone *" required>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="assunto" type="text" placeholder="Assunto *" required>
                                    </div>
                                </div>

                                <div style="margin-bottom: 20px">
                                    <input name="upload" type="file">
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="recaptcha">
                                            <?= $this->Recaptcha->display() ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?= $this->Form->end() ?>
                            <div id="status"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Contact us Section End  ====================-->
    </div>


    <style>
        @media(min-width: 769px){
            .breadcrumb-area{
                margin-top: -106px !important;
            }
        }

        @media (min-width: 768px){
            #main-wrapper {
                margin-top: inherit !important;
            }
        }

        @media (max-width: 769px) {
            .section-space--pt_100 {
                padding-top: 40px;
            }
        }

    </style>

