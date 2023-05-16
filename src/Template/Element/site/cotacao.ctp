
<!-- Modal -->
<div class="modal fade" id="cotacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="display: flex; justify-content: center; border: none">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="main-wrapper" style="margin-top: inherit !important;">
                    <div class="site-wrapper-reveal">
                        <!--====================  COTAÇÃO====================-->
                        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                            <div class="container">
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
                        <!--====================  /COTAÇÃO ====================-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .selecionar{
        height: 56px;
        background-color: #f8f8f8;
        border-color: #f8f8f8;
    }
</style>
