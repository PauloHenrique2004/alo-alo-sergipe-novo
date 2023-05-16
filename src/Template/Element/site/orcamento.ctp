
<!-- START orcamento-SE -->
<div class="modal fade" id="orcamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div style="width: 100%; text-align: center">
                    <img src="/images/logo.png" alt="image" style="max-width: 143px; margin-bottom: 17px;">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 25px">Solicite seu orçamento</h5>
                </div>
                <button style="margin-top: -150px;" type="button" class="btn-close fecharModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="contact-form">
                            <?php echo $this->Form->create(null, ['url' => ['controller' => 'Orcamentos', 'action' => 'enviarOrcamento']]); ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="nome" id="nome" class="form-control" required data-error="Por favor, insira seu nome" placeholder="Nome completo">
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
                                        <input type="text" name="telefone" id="telefone" required data-error="Por favor, insira seu telefone" class="form-control" placeholder="Telefone"
                                               data-mask="(00) 00000-0000">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="mensagem" id="mensagem" rows="3" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" id="tipo_plano" name="tipo_plano" required>
                                            <option selected value="">Tipo de plano</option>
                                            <?php foreach ($planos as $plano): ?>
                                                <option><?= $plano->titulo ?></option>
                                            <?php endforeach; ?>
                                        </select>
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
                                        <input type="hidden" name="id" id="id" value="">
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
</div>
<!-- END orcamento-SE->

<?php $this->start('script-footer') ?>



<?php $this->end() ?>

