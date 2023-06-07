<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia $noticia
 */
use Cake\View\Helper\UrlHelper;
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Notícia
        <small><?php echo __('Edit'); ?></small>
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
//                    echo $this->Form->control('uuid');
                    echo $this->Form->control('titulo',['label' => 'Título']);
                    echo $this->Form->control('descricao', ['required' => true]);
                    echo $this->Form->control('data', ['type' => 'string', 'class' => 'form-control string-date', 'required' => true,'value' => $noticia->data->i18nFormat('yyyy-MM-dd')]);
                    echo $this->Form->control('fonte');
                    echo $this->Form->control('imagem', ['type' => 'file', 'label' => 'Capa']);?>
                    <div class="col-md-12">
                        <a href="/files/Noticias/imagem/<?= $noticia->imagem ?>" target="_blank">
                           <img src="/files/Noticias/imagem/<?= $noticia->imagem ?>" style="width: 80px;border-radius: 10px; ">
                        </a>
                    </div>

                    <div class="col-md-12">
                        <?php echo "<span style='color: red; position: absolute; margin-bottom: 20px;'>Adicionar imagens com as dimensões 1920 x 1280px</span><br>";?>
                    </div>

                    <div class="col-md-12">
                        <?php echo $this->Form->control('banner_imagem', ['type' => 'file']);?>
                    </div>

                    <?php if(!empty($noticia->banner_imagem)): ?>
                        <div class="col-md-12">
                            <a href="/files/Noticias/banner_imagem/<?= $noticia->banner_imagem ?>" target="_blank">
                              <img src="/files/Noticias/banner_imagem/<?= $noticia->banner_imagem ?>" style="width: 120px;border-radius: 10px;">
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-12">
                        <?php echo "<span style='color: red; position: absolute; margin-top: -18px; margin-bottom: 20px;'>Adicionar imagens com as dimensões 1200 x 830px</span><br>";?>
                    </div>

                    <div class="col-md-12">
                        <?php echo $this->Form->control('imagem_visualizacao', ['type' => 'file', ['required' => true]]); ?>
                    </div>

                    <?php if(!empty($noticia->imagem_visualizacao)): ?>
                        <div class="col-md-12">
                            <a href="/files/Noticias/imagem_visualizacao/<?= $noticia->imagem_visualizacao ?>" target="_blank">
                              <img src="/files/Noticias/imagem_visualizacao/<?= $noticia->imagem_visualizacao ?>" style="width: 120px;border-radius: 10px;">
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-12" style="margin-bottom: 30px">
                        <?php echo "<span style='color: red; position: absolute;'>Adicionar imagens com as dimensões 1920 x 1280px</span><br>";?>
                    </div>

                    <?php foreach ($noticiaRelacionda as $rel): ?>
                        <div class="noticia-global">
                            <div class="col-md-10">
                                <div class="form-group input select">
                                    <label class="control-label" for="noticias_relacionadas_ids">Notícias relacionadas</label>
                                    <select name="noticias_relacionadas_ids[]" class="form-control" id="noticias_relacionadas_ids">
                                        <?php foreach ($noticias as $value): ?>
                                            <option <?= $value->id == $rel->noticia_relacionada_id ? "selected='selected'" : '' ?>
                                                    value="<?= $value->id ?>"><?= $value->titulo ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 adicionada">
                                <div class="space"></div>
                                <button style="margin-left: 9px" type="button" class="btn-danger btn btn-deletar-vantagem">Remover relacionada
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <span class="add-noticia"></span>

                    <div class="col-md-12">
                        <button type="button" class="btn btn-warning btn-add-noticia-rel">Adicionar relacionada</button>
                    </div>
                    <!-- /.box-body -->

                    <div class="col-md-12" style="text-align: right">
                        <?php echo $this->Form->submit(__('Submit')); ?>
                    </div>

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
    CKFinder.setupCKEditor( editor );
</script>


<!--<script>-->
<!--    $(".relacionadas").select2({-->
<!--        tags: true,-->
<!--        tokenSeparators: [',', ' ']-->
<!--    })-->
<!--</script>-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<script>
    $('.btn-add-noticia-rel').click(function () {
        const html = `
          <div class="noticia-global">
            <div class="col-md-10">
                <div class="form-group input select">
                    <label class="control-label" for="noticias_relacionadas_ids">Notícias relacionadas</label>
                    <select name="noticias_relacionadas_ids[]" class="form-control" id="noticias_relacionadas_ids">
                        <?php foreach ($noticias as $value): ?>
                            <?php if($noticia->id !== $value->id): ?>
                            <option value="<?= $value->id ?>"><?= $value->titulo ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2 adicionada">
                 <div style="height: 25px"></div>
                  <button type="button" class="btn-danger btn btn-deletar-vantagem">Remover vantagem</button>
            </div>
          </div>
            `;

        $('.add-noticia').append(html);
    });
    $('body').on('click', '.noticia-global', function (e) {
        if (e.target.tagName == 'BUTTON')
            $(e.target).parent().parent().remove();
    });


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
    .space{
        height: 25px;
    }

    .box-footer{
        margin-top: 20px !important;
        border-top: 1px solid #d2d6de;
    }
</style>
