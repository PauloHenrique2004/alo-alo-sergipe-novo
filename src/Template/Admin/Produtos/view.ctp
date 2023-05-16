<section class="content-header">
  <h1>
    Produto
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
            <dt scope="row"><?= __('Nome') ?></dt>
            <dd><?= h($produto->nome) ?></dd>
            <dt scope="row"><?= __('Imagem') ?></dt>
            <dd><?= h($produto->imagem) ?></dd>
            <dt scope="row"><?= __('Imagem Dir') ?></dt>
            <dd><?= h($produto->imagem_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($produto->id) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
