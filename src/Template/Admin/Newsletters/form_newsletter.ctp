<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Newsletter
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

          </div>
          <!-- /.box-header -->
          <!-- form start -->

          <?php echo $this->Form->create(); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('para',['value' => implode(', ', $enviarPara)]);
                echo $this->Form->control('assunto', ['required' => true]);
                echo $this->Form->control('mensagem',['type' => 'textArea','required' => true]);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Enviar')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

<?php $this->start('scriptBottom')?>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script src="/../../ckfinder/ckfinder.js"></script>
<script>
    var editor = CKEDITOR.replace('mensagem');
    CKFinder.setupCKEditor( editor );
</script>

<?php $this->end() ?>


