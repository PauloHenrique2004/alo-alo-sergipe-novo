<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Configuraco $configuraco
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Configuraco
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
          <?php echo $this->Form->create($configuraco, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('google_ads');
                echo $this->Form->control('google_analytics');
                echo $this->Form->control('whatsApp');
                echo $this->Form->control('telefone');
                echo $this->Form->control('twitter');
                echo $this->Form->control('instagram');
                echo $this->Form->control('youtube');
                echo $this->Form->control('facebook');
                echo $this->Form->control('sobre_rodape', ['label' => 'Sobre rodapé']);
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
