<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicidade $publicidade
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Publicidade
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
          <?php echo $this->Form->create($publicidade, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('imagem', ['type' => 'file']);
                echo $this->Form->control('link');
              ?>
                <fieldset>
                    <legend>Local onde a publicidade exibida :</legend>
                    <div>
                        <input type="radio" id="huey" name="local" value=1>
                        <label for="huey">Topo - Dimensões recomendadas 728 x 90px</label>
                    </div>

                    <div>
                        <input type="radio" id="dewey" name="local" value=2>
                        <label for="dewey">Lateral - Dimensões recomendadas 300 x 250px</label>
                    </div>

                    <div>
                        <input type="radio" id="dewey" name="local" value=3 <?= $publicidade->local == 3 ? 'checked' : '' ?>>
                        <label for="dewey">Abaixo do banner principal - Dimensões recomendadas 970 x 90px</label>
                    </div>
                </fieldset>
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
