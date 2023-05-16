<div class="site-wrapper">

    <div class="main-overlay"></div>
    <section class="main-content mt-3" style="margin-bottom: 100px;">
        <div class="container-xl">
            <div class="row gy-4" style="justify-content: center">
                <div class="col-lg-8">
                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- widget popular posts -->
                        <div class="widget rounded" style="background-color: #fff">
                            <div class="widget-header text-center">
                                <?php $imagem = "https://$_SERVER[HTTP_HOST]" ?>
                                <img style="max-width: 200px" src="<?= $imagem?>/images/logo.png">
                                <h3 class="widget-title">Golden Seller</h3>
                                <p>Olá <?= $nome ?>!</p>
                                <p>Para que consiga fazer a alteração da sua senha, clique no link que se encontra logo abaixo e na tela de alteração, digite sua nova senha.</p>
                            </div>
                            <div class="widget-content">

                                <div class="messages"></div>
                                <div class="row">
                                    <div class="column col-md-12">
                                        <?php
                                        $root = pathinfo($_SERVER['HTTP_REFERER']);
                                        $link = $root['dirname'] . DS . 'change-password?h=' . $hash . '&email=' . $email;
                                        echo $this->Html->link('Redefinir senha de usuário', $link);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </section>
    <style>
        .main-content {
            margin-top: 60px !important;
        }

        .control-label{
            color: #203656;
        }
        .md{
            margin-top: 11px !important;
        }

    </style>
</div>



