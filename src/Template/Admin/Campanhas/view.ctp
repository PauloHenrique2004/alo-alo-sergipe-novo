<section class="content-header">
  <h1>
    Campanha
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
            <dd><?= h($campanha->titulo) ?></dd>
            <dt scope="row"><?= __('Logo') ?></dt>
            <dd><?= h($campanha->logo) ?></dd>
            <dt scope="row"><?= __('Logo Dir') ?></dt>
            <dd><?= h($campanha->logo_dir) ?></dd>
            <dt scope="row"><?= __('Imagem') ?></dt>
            <dd><?= h($campanha->imagem) ?></dd>
            <dt scope="row"><?= __('Imagem Dir') ?></dt>
            <dd><?= h($campanha->imagem_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($campanha->id) ?></dd>
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
          <h3 class="box-title"><?= __('Descricao 1') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($campanha->descricao_1); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Descricao 2') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($campanha->descricao_2); ?>
        </div>
      </div>
    </div>
  </div>
</section>
