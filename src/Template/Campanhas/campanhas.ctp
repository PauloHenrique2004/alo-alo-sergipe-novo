<section class="insurance-details-area ptb-100" style="margin-top: 164px; background-color: #f7f7f7">
    <div class="container">
        <div class="insurance-details-header">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="content">
                        <h3><?= $camp->titulo ?></h3>

                          <?= $camp->descricao_1 ?>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="image text-center">
                        <img src="/files/Campanhas/logo/<?= $camp->logo ?>" alt="image">
                    </div>
                </div>


                <div class="col-lg-12 col-md-12">
                    <div class="content">
                        <span class="default-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">Participe</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="insurance-details-header div-img">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="image">
                        <img src="/files/Campanhas/imagem/<?= $camp->imagem ?>" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="content">
                        <h3><?= $camp->titulo_descricao_2 ?></h3>

                        <?= $camp->descricao_2 ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal  participe -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="width: 100%; text-align: center">
                        <img src="/files/Campanhas/logo/<?= $camp->logo ?>" alt="image" style="max-width: 65px;">
                         <h5 class="modal-title" id="exampleModalLabel">Quero participar</h5>
                        <p style="color: #000000;margin-top: 4px;">Preencha o formulário abaixo para nós entraremos em contato.</p>
                    </div>
                    <button style="margin-top: -60px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-form">
                                <?php echo $this->Form->create(null, ['url' => ['controller' => 'Contacts', 'action' => 'participar']]); ?>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Por favor, insira seu nome" placeholder="Nome completo">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Por favor insira o seu e-mail" placeholder="Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" id="phone_number" required data-error="Por favor, insira seu telefone" class="form-control" placeholder="Telefone">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group" style="font-size: 13px">
                                                <input type="checkbox" name="politica" id="politica" required data-error="Por favor, marque a caixa" style="margin-right: 2px;">
                                                <span for="checkbox" class="w-form-label">Ao preencher o formulário, consinto com o uso de meus dados pessoais para receber comunicações da Golden Sellen, permitindo os tratamentos para tanto necessários, manifestando-me de acordo com a Política de Privacidade disponível no site.</span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="id" value="<?= $camp->id ?>">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button style="width: -webkit-fill-available;" type="submit" class="default-btn">Enviar <span></span></button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .div-img{
        margin-top: 100px;
    }

    @media(max-width: 768px){
        .div-img{
            margin-top: initial;
        }
    }


    @media(max-width: 767px){
        .ptb-100{
            margin-top: 84px !important;
        }
    }



</style>
