<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia $noticia
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Notícia
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
                <?php echo $this->Form->create($noticia, ['type' => 'file']); ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->control('categoria_id', ['options' => $categorias]);
                    echo $this->Form->control('titulo_resumo', ['required' => true,'label' => 'Título resumo']);
                    echo $this->Form->control('titulo',['label' => 'Título']);
                    echo $this->Form->control('descricao', ['required' => true]);
                    echo $this->Form->control('data', ['type' => 'string', 'class' => 'form-control string-date', 'required' => true]);
                    echo $this->Form->control('fonte');
                    echo $this->Form->control('imagem', ['type' => 'file', 'label' => 'Capa', 'required' => true]);
                    echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 1920 x 1280px</span><br>";
                    echo $this->Form->control('banner_imagem', ['type' => 'file']);
                    echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 1200 x 830px</span><br>";
                    echo $this->Form->control('imagem_visualizacao', ['type' => 'file', ['required' => true]]);
                    echo "<span style='color: red; margin-top: -15px; position: absolute;'>Adicionar imagens com as dimensões 1920 x 1280px</span><br>";
                    ?>

                    <div class="alert alert-warning alert-dismissible" style="text-align: center">
                        <h4><i class="icon fa fa-warning"></i> Alerta!</h4>
                        Após salvar o formulário a opção de incluir notícias relacionadas aparecerá.
                    </div>

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


<script>
    var editor = CKEDITOR.replace( 'descricao' );
    CKFinder.setupCKEditor( editor );
</script>


<script>
    $(".relacionadas").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!--<script>-->
<!--    (document).ready(function() {-->
<!--        $('.select2').select2({-->
<!--            placeholder: 'Selecione as notícias relacionadas',-->
<!--            allowClear: true-->
<!--        });-->
<!---->
<!--        $('.select2').on('select2:select', function(e) {-->
<!--            var data = e.params.data;-->
<!--            var selectedValues = $('.select2').val();-->
<!--            $('input[name="noticias_relacionadas_ids"]').val(selectedValues);-->
<!--        });-->
<!--        $('.select2').on('select2:unselect', function(e) {-->
<!--            var selectedValues = $('.select2').val();-->
<!--            $('input[name="noticias_relacionadas_ids"]').val(selectedValues);-->
<!--        });-->
<!--    });-->
<!--</script>-->

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

<style>
    .btn-success{
        float: right;
    }
</style>
