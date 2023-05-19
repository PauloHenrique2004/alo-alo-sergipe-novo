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
            <?php $option = ['' => null, 1 => 'Slider com 3 imagens', 2 => 'Slider com imagens lado a lado', 3 => 'Slider com 4 imagens', 4 => 'Layout 4']; ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('categoria');
                echo $this->Form->control('menu_ordem');
                echo $this->Form->control('menu_outros');
                echo $this->Form->control('ocultar');
                echo $this->Form->control('exibir_ultimas_noticias');
                echo '<label class="control-label" for="layout">layout</label>';
                echo $this->Form->select('layout', $option, ['class' => 'form-control']);
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
