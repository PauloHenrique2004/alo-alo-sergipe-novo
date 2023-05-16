<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campanha $campanha
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Campanha
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
                <?php echo $this->Form->create($campanha, ['type' => 'file']); ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('nome_empresa', ['label' => 'Nome da empresa']);
                    echo $this->Form->control('titulo', ['label' => 'Título descrição 1']);
                    echo $this->Form->control('descricao_1', ['label' =>'Descrição 1']);
                    echo $this->Form->control('titulo_descricao_2', ['label' => 'Título descrição 2']);
                    echo $this->Form->control('descricao_2', ['label' =>'Descrição 2']);
                    echo $this->Form->control('logo', ['type' => 'file']);
                    echo "<span style='color: red; margin-top: -15px; position: absolute'>Dimensões recomendas 1024 x 580px</span><br>";

                    echo $this->Form->control('imagem', ['type' => 'file']);
                    echo "<span style='color: red; margin-top: -15px; position: absolute'>Dimensões recomendas 500 x 500px</span><br>";
                    ?>
                </div>
                <!-- /.box-body -->

                <?php echo $this->Form->submit(__('Submit')); ?>

                <?php echo $this->Form->end(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
<?php $this->start('scriptBottom'); ?>
<?php echo $this->Html->script([
    'ckeditor/ckeditor'
]); ?>
<script src="/webroot/ckfinder/ckfinder.js"></script>
<script>
    var editor = CKEDITOR.replace( 'descricao_1' );
    var editor = CKEDITOR.replace( 'descricao_2' );
</script>
<?php  $this->end(); ?>
