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

              <form action="<?php echo $this->Url->build(); ?>" method="GET" id="searchF" style="display: flex; align-items: center;">

                  <div class="input-group input-group-sm" style="display: flex;">
                      <?php
                      // Obter os valores dos parâmetros de pesquisa
                      $pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';
                      $dataInicial = isset($_GET['data-inicial']) ? $_GET['data-inicial'] : '';
                      $dataFinal = isset($_GET['data-final']) ? $_GET['data-final'] : '';
                      ?>

                      <div class="input-group" style="margin-right: 10px; display: flex; align-items: center;">
                          <label for="data-inicial" style="margin-right: 5px;">De</label>
                          <input type="date" name="data-inicial" class="form-control" value="<?= $dataInicial ?>" placeholder="Data Inicial">
                      </div>

                      <div class="input-group" style="margin-right: 10px; display: flex; align-items: center;">
                          <label for="data-final" style="margin-right: 5px;">A</label>
                          <input type="date" name="data-final" class="form-control" value="<?= $dataFinal ?>" placeholder="Data Final">
                      </div>

                      <div class="input-group" style="margin-right: 10px; width: 100%;">
                          <select name="categoria" class="form-control">
                              <option selected="" value="">Categoria</option>
                              <?php foreach ($categorias as $categoria): ?>
                                  <option value="<?= $categoria->id ?>" <?= ($categoriaId == $categoria->id) ? 'selected' : '' ?>>
                                      <?= $categoria->categoria ?>
                                  </option>
                              <?php endforeach; ?>
                          </select>
                      </div>

                      <input style="height: 34px;" type="text" name="pesquisa" class="form-control" value="<?= $pesquisa ?>" placeholder="<?php echo __('Pesquisar'); ?>">

                      <div class="input-group-btn">
                          <button style="height: 34px; margin-left: -21px" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
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
                  <th scope="col"><?= $this->Paginator->sort('titulo',['Título']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('titulo_resumo',['Título resumo']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('capa') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($noticias as $noticia): ?>
                <tr>
                  <td><?= h($noticia->titulo) ?></td>
                  <td><?= h($noticia->titulo_resumo) ?></td>
                    <td><img style="width: 70px; border-radius: 10px" src="/files/Noticias/imagem/<?= $noticia->imagem ?>"></td>
                    <td><?= h($noticia->data) ?></td>
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
