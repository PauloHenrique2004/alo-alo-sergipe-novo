<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Banner
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
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sliders as $slider): ?>
                <tr>
                  <td><?= h($slider->name) ?></td>
                    <td><img style="width: 80px" src="/files/Sliders/photo/<?= $slider->photo ?>"></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slider->id], ['class'=>'btn btn-warning']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slider->id], ['confirm' => __('Você tem certeza que quer deletar'), 'class'=>'btn btn-danger']) ?>
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
