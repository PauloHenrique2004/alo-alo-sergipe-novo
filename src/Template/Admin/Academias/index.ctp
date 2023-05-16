<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Academia

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
                            <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('imagem') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($academias as $academia): ?>
                            <tr>
                                <td><?= h($academia->titulo) ?></td>
                                <td><img style="width: 80px" src="/files/Academias/imagem/<?= $academia->imagem ?>"></td>
                                <td><img style="width: 80px" src="/files/Academias/logo/<?= $academia->logo ?>"></td>
                                <td class="actions text-right">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academia->id], ['class'=>'btn btn-warning']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $academia->id], ['confirm' => __('Você tem certeza que quer deletar', $academia->id), 'class'=>'btn btn-danger']) ?>
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
