<?php $this->layout = 'AdminLTE.login'; ?>
<!-- /.box-body -->
<div class = "logo-adm">
 <img src="/images/logo.png" style="max-width: 180px; image-rendering: -webkit-optimize-contrast; ">
</div>
    <?php echo $this->Form->create(); ?>
    <div class="box-body" style="">
        <?php
            echo $this->Form->control('username',['label' => 'Usuário']);
            echo $this->Form->control('password');
        ?>
<!--        <a href="/redefinir-senha"><p style="margin-top: 10px; color: #000; font-weight: 700;">Esqueceu sua senha?</p></a>-->
        <div style="margin: 0 auto;display: block; text-align: center">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Enviar</button>
        </div>
        <?php echo $this->Form->end(); ?>

    </div>



<style>

    .login-page, .register-page{
        background: #000 !important;
    }

    label {
        color: #000;
    }

    .login-box-body, .register-box-body {
        background: #fff;
        border: solid 1px #fff;
        border-radius: 10px;
    }

    .logo-adm{
        display: flex;
        justify-content: center;
    }


    form{
        color: #fff;
    }


    .btn-primary{
        background: #000000 ;
        border-color: #000000;
    }

    .btn-primary:hover, .btn-primary:active, .btn-primary.hover {
        background-color: #fff;
        color: #000000 ;
    }
</style>
