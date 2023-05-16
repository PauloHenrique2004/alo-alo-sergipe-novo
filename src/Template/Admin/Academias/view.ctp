<section class="content-header">
  <h1>
    Academia
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Titulo') ?></dt>
            <dd><?= h($academia->titulo) ?></dd>
            <dt scope="row"><?= __('Video') ?></dt>
            <dd><?= h($academia->video) ?></dd>
            <dt scope="row"><?= __('Imagem') ?></dt>
            <dd><?= h($academia->imagem) ?></dd>
            <dt scope="row"><?= __('Imagem Dir') ?></dt>
            <dd><?= h($academia->imagem_dir) ?></dd>
            <dt scope="row"><?= __('Logo') ?></dt>
            <dd><?= h($academia->logo) ?></dd>
            <dt scope="row"><?= __('Logo Dir') ?></dt>
            <dd><?= h($academia->logo_dir) ?></dd>
            <dt scope="row"><?= __('Pdf') ?></dt>
            <dd><?= h($academia->pdf) ?></dd>
            <dt scope="row"><?= __('Pdf Dir') ?></dt>
            <dd><?= h($academia->pdf_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($academia->id) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Descricao') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($academia->descricao); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Descricao Logo') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($academia->descricao_logo); ?>
        </div>
      </div>
    </div>
  </div>
</section>
