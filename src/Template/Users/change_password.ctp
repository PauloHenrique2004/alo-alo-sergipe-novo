

<!-- Start recuperar senha Area -->
<section class="contact-area ptb-100 bg-f8f8f8" style="margin-top: 164px">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Golden Seller</span>
            <h2>Recuperar Senha</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="contact-form">
                    <?= $this->Form->create($user) ?>
                    <div class="row">

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <?= $this->Form->control('id',['type' => 'hidden', 'value' => $id]);?>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <?= $this->Form->control('password', ['required' => 'required', 'placeholder' => 'Digite seu email *', 'label' => false]);?>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <?= $this->Form->control('confirm_password', ['type' => 'password','required' => 'required', 'placeholder' => 'Confirmar senha *', 'label' => false]);?>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Enviar <span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End recuperar senha  Area -->


<style>
    @media(max-width: 768px){
        .contact-area{
            margin-top: 100px !important;
        }
    }
</style>
