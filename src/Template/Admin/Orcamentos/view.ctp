<section class="content-header">
  <h1>
    Solicitações de orçamentos
    <small><?php echo __('View'); ?></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid" style="max-width: 80%">
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Nome') ?></dt>
            <dd><?= h($orcamento->nome) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($orcamento->email) ?></dd>
            <dt scope="row"><?= __('Telefone') ?></dt>
            <dd><?= h($orcamento->telefone) ?></dd>
            <dt scope="row"><?= __('Mensagem') ?></dt>
            <dd><?= h($orcamento->mensagem) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
