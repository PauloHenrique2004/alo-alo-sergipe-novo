<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Albun $albun
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Álbum
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($albun, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
              echo $this->Form->control('titulo', ['label' => 'Título']);
              echo $this->Form->control('descricao', ['label' => 'Descrição']);
              //  echo $this->Form->control('resumo',['maxlength' => 180]);
                echo $this->Form->control('data', ['type' => 'string', 'class' => 'form-control string-date']);
                echo $this->Form->control('imagem', ['type' => 'file', 'required' => true]);
                 echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 1920 x 1280px</span><br>";
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

<?php $this->start('scriptBottom')?>
<?php echo $this->Html->script([
    'ckeditor/ckeditor',
]); ?>
<script src="/webroot/ckfinder/ckfinder.js"></script>
<script>
    var editor = CKEDITOR.replace( 'descricao' );
</script>

<script>
    $('.string-date').attr('type', 'date');
    var bindDatePicker = function() {
        $("#datetimepicker1").datetimepicker({
            weekStart: 1,
            autoclose: true,
            language: "pt-BR",
            daysOfWeekHighlighted: 0,
            pickTime: false,
            format:'DD-MM-YYYY',
            icons: {
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },

        }).on('dp.change', function (selected) {
            var date = parseDate($(this).val());
            if (! isValidDate(date)) {
                //create date based on momentjs (we have that)
                date = moment().format('YYYY-MM-DD');
            }

            $(this).val(date);
        });

    }
    var isValidDate = function(value, format) {
        format = format || false;
        // lets parse the date to the best of our knowledge
        if (format) {
            value = parseDate(value);
        }

        var timestamp = Date.parse(value);

        return isNaN(timestamp) == false;
    }

    var parseDate = function(value) {
        var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
        if (m)
            value = m[5] + '.' + ("00" + m[3]).slice(-2) + '.' + ("00" + m[1]).slice(-2);

        return value;
    }

    bindDatePicker();

</script>
<?php $this->end() ?>

