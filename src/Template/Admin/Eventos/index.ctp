<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Eventos

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
           <!--              <div class="input-group input-group-sm" style="width: 150px;">-->
<!--                <input type="text" name="table_search" class="form-control pull-right" placeholder="--><?php //echo __('Search'); ?><!--">-->
<!---->
<!--                <div class="input-group-btn">-->
<!--                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>-->
<!--                </div>-->
<!--              </div>-->
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('titulo', ['label' => 'Título']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($eventos as $evento): ?>
                <tr>
                  <td><?= h($evento->titulo) ?></td>
                  <td><?= h($evento->data) ?></td>
                    <td><img style="width: 80px" src="/files/Eventos/imagem/<?= $evento->imagem ?>"></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evento->id], ['class'=>'btn btn-warning']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id), 'class'=>'btn btn-danger']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
