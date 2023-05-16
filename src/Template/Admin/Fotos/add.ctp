<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Foto $foto
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Foto
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
          <?php echo $this->Form->create($foto, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('albun_id', ['options' => $albuns, 'label' => 'Álbum']);
                echo $this->Form->control('titulo',['label' => 'Título']);
                echo $this->Form->control('imagem', ['type' => 'file']);
              echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 360 x 335px</span><br>";

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

<?php $this->start('scriptBottom')?>
<?php echo $this->Html->script([
    'ckeditor/ckeditor',
]); ?>
<script src="/webroot/ckfinder/ckfinder.js"></script>
<script>
    var editor = CKEDITOR.replace( 'descricao' );
    CKFinder.setupCKEditor( editor );
</script>
<?php $this->end() ?>

