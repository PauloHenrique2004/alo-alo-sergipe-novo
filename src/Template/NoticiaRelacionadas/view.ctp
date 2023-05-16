<section class="content-header">
  <h1>
    Noticia Relacionada
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
            <dt scope="row"><?= __('Noticia') ?></dt>
            <dd><?= $noticiaRelacionada->has('noticia') ? $this->Html->link($noticiaRelacionada->noticia->titulo, ['controller' => 'Noticias', 'action' => 'view', $noticiaRelacionada->noticia->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($noticiaRelacionada->id) ?></dd>
            <dt scope="row"><?= __('Noticia Relacionada Id') ?></dt>
            <dd><?= $this->Number->format($noticiaRelacionada->noticia_relacionada_id) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Noticia Relacionadas') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($noticiaRelacionada->noticia_relacionadas)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Noticia Id') ?></th>
                    <th scope="col"><?= __('Noticia Relacionada Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($noticiaRelacionada->noticia_relacionadas as $noticiaRelacionadas): ?>
              <tr>
                    <td><?= h($noticiaRelacionadas->id) ?></td>
                    <td><?= h($noticiaRelacionadas->noticia_id) ?></td>
                    <td><?= h($noticiaRelacionadas->noticia_relacionada_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'NoticiaRelacionadas', 'action' => 'view', $noticiaRelacionadas->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'NoticiaRelacionadas', 'action' => 'edit', $noticiaRelacionadas->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'NoticiaRelacionadas', 'action' => 'delete', $noticiaRelacionadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticiaRelacionadas->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
