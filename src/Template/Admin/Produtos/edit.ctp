<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Produto
      <small><?php echo __('Edit'); ?></small>
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
          <?php echo $this->Form->create($produto, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
              echo $this->Form->control('nome');
              echo $this->Form->control('descricao');
              echo $this->Form->control('imagem', ['type' => 'file', 'label' => 'icone']);
              echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 128 x 128px e com transparência</span><br>";
              echo $this->Form->control('photo', ['type' => 'file']);
              echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 1280 x 720px</span><br>";
              echo $this->Form->control('categoria_produto_id', ['options' => $categoria]);
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
<script>
    var editor = CKEDITOR.replace( 'descricao' );
</script>

<?php $this->end() ?>
