<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Categoria
        <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo __('Form'); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo $this->Form->create($categoria, ['role' => 'form']); ?>
                <?php $option = ['' => null,'1' => 'Layout 1', '2' => 'Layout 2', '3' => 'Layout 3']; ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('categoria');
                    echo $this->Form->control('menu_ordem');
                    echo $this->Form->control('menu_outros',['label' => 'Menu Mais']);
                    echo $this->Form->control('ocultar');
                    echo $this->Form->control('exibir_ultimas_noticias',['label' => 'Exibir últimas notícias']);
                    echo '<label class="control-label" for="layout">layout</label>';
                    echo $this->Form->select('layout', $option, ['class' => 'form-control']);
                    ?>
                </div>
                <!-- /.box-body -->

                <div class="container" style="float: left; margin-top: 80px">
                    <div class="row">
                        <div class="col-md-2">
                            <h4 style="padding-left:24px ">Layout 1</h4>
                            <img src="/images/l01.png" alt="Imagem 1">
                        </div>

                        <div class="col-md-4">
                            <h4 style="padding-left: 18px">Layout 2</h4>
                            <img src="/images/l02.png" alt="Imagem 1">
                        </div>


                        <div class="col-md-4">
                            <h4 style="padding-left: 26px">Layout 3</h4>
                            <img src="/images/l03.png" alt="Imagem 1">
                        </div>

                    </div>
                </div>


                <?php echo $this->Form->submit(__('Submit')); ?>

                <?php echo $this->Form->end(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
<style>
    table {
        width: 80%;
    }

    td {
        display: inline-block;
        width: 30%;
        box-sizing: border-box;
        padding: 10px;
    }

    img {
        max-width: 100%;
        height: auto;
    }
</style>
