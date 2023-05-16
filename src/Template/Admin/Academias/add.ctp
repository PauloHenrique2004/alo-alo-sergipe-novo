<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Academia $academia
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Academia
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
                <?php echo $this->Form->create($academia, ['type' => 'file']); ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('titulo', ['label' => 'Título']);
                    echo $this->Form->control('descricao', ['label' => 'Descrição']);
                    echo $this->Form->control('video');
                    echo $this->Form->control('imagem', ['type' => 'file']);
                    echo "<span style='color: red; margin-top: -15px; position: absolute'>Dimensões recomendas 1280 x 720px</span><br>";

                    echo $this->Form->control('logo', ['type' => 'file']);
                    echo "<span style='color: red; margin-top: -15px; position: absolute'>Dimensões recomendas 921 x 366px</span><br>";
                    echo $this->Form->control('descricao_logo');
                    echo $this->Form->control('pdf', ['type' => 'file']); ?>
                    <div class="col-md-10">
                        <?= $this->Form->control('tipo'); ?>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->control('cor_tarja_tipo', ['required' => true, 'type' => 'color']); ?>
                    </div

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
<?php echo $this->Html->script([
    'ckeditor/ckeditor'
]); ?>
<script src="/webroot/ckfinder/ckfinder.js"></script>
<script>
    var editor = CKEDITOR.replace( 'descricao' );
    var editor = CKEDITOR.replace( 'descricao_logo' );
</script>
<?php  $this->end(); ?>
