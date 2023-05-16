<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Avaliações
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
          <?php echo $this->Form->create($feedback, ['type' => 'file']); ?>
            <div class="box-body">
                <div class="box-body">
                    <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('texto');
                    echo $this->Form->control('profissao', ['label' => 'Profissão']);
                    echo $this->Form->control('imagem', ['type' => 'file']);
                    echo "<span style='color: red; margin-top: -15px; position: absolute'>Dimensões recomendas 95 x 95px</span><br>";
                    ?>
                </div>
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
