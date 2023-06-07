<footer class="main-footer">
  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">
  <?php endif; ?>
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1
    </div>
    <strong>&copy;  <?= date('Y') ?>. </strong> Todos os direitos reservados.
  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>


    <script>
        $('img').css('max-width', '50px')
    </script>

    <style>
        textarea img{
            max-width: 50px;
        }
    </style>

</footer>
