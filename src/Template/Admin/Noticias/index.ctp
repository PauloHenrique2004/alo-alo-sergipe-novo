<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
      Notícias

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
            <form action="<?php echo $this->Url->build(); ?>" method="GET" id="seachF">
                         <div class="input-group input-group-sm" style="width: 150px;">
                             <?php
                             if (isset($_GET['pesquisa'])) {
                                 $pesquisa = $_GET['pesquisa'];
                             } else {
                                 $pesquisa = '';
                             }
                             ?>
                             <div class="input-group input-group-sm" style="float: left; margin-right: 20px;width: 150px;position: absolute;right: 145px;">
                                 <select name="categoria" class="form-control">
                                     <option selected="" value="">Categoria</option>
                                     <?php foreach ($categorias as $categoria): ?>
                                         <option value="<?= $categoria->id ?>" <?= ($categoriaId == $categoria->id) ? 'selected' : '' ?>>
                                             <?= $categoria->categoria ?>
                                         </option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                             <input type="text" name="pesquisa" class="form-control pull-right" value="<?= $pesquisa ?>" placeholder="<?php echo __('Pesquisar'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('titulo_resumo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('capa') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($noticias as $noticia): ?>
                <tr>
                  <td><?= h($noticia->titulo) ?></td>
                  <td><?= h($noticia->titulo_resumo) ?></td>
                    <td><img style="width: 70px; border-radius: 10px" src="/files/Noticias/imagem/<?= $noticia->imagem ?>"></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $noticia->id], ['class'=>'btn btn-warning']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id), 'class'=>'btn btn-danger']) ?>
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


<?php $this->start('scriptBottom')?>

  <script>
      $('.btn-submit').click(function () {
          alert('ok')
          $('#seachF').submit()
      })
  </script>

<?php $this->end() ?>
