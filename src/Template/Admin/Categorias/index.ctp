<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categorias

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

            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categorias as $categoria): ?>
                <tr>
                  <td><?= h($categoria->categoria) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoria->id], ['class'=>'btn btn-warning']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class'=>'btn btn-danger']) ?>
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
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php echo $this->Paginator->first('<< ' . __('Primeira')); ?>
            <?php echo $this->Paginator->prev('< ' . __('Anterior')); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('Próximo') . ' >'); ?>
            <?php echo $this->Paginator->last(__('Última') . ' >>'); ?>
        </ul>
    </nav>
</section>
