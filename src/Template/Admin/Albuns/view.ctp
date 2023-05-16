<section class="content-header">
  <h1>
    Albun
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
            <dd><?= h($albun->titulo) ?></dd>
            <dt scope="row"><?= __('Imagem') ?></dt>
            <dd><?= h($albun->imagem) ?></dd>
            <dt scope="row"><?= __('Imagem Dir') ?></dt>
            <dd><?= h($albun->imagem_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($albun->id) ?></dd>
            <dt scope="row"><?= __('Data') ?></dt>
            <dd><?= h($albun->data) ?></dd>
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
            <?= $this->Text->autoParagraph($albun->descricao); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Fotos') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($albun->fotos)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Albun Id') ?></th>
                    <th scope="col"><?= __('Titulo') ?></th>
                    <th scope="col"><?= __('Descricao') ?></th>
                    <th scope="col"><?= __('Imagem') ?></th>
                    <th scope="col"><?= __('Imagem Dir') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($albun->fotos as $fotos): ?>
              <tr>
                    <td><?= h($fotos->id) ?></td>
                    <td><?= h($fotos->albun_id) ?></td>
                    <td><?= h($fotos->titulo) ?></td>
                    <td><?= h($fotos->descricao) ?></td>
                    <td><?= h($fotos->imagem) ?></td>
                    <td><?= h($fotos->imagem_dir) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Fotos', 'action' => 'view', $fotos->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Fotos', 'action' => 'edit', $fotos->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fotos', 'action' => 'delete', $fotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fotos->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
