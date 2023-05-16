<div class="col-sm-4">
    <aside class="widget-area" id="secondary">

        <section class="widget widget_pearo_posts_thumb">
            <div class="contact-form-wrap">
                <form id="searchthis" action="<?php echo $this->Url->build(); ?>" style="display:inline;" method="GET">
                    <input id="namanyay-search-box" name="pesquisa" size="40" type="text" value="<?= isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '' ?>" placeholder="Pesquisar"/>
                    <i class="ti-search pesquisar"></i>
                </form>
            </div>

            <h3 class="widget-title">Recente</h3>

            <?php foreach ($recentes as  $recente):?>
                <article class="item" style="display: inline-flex; margin-bottom: 10px;">
                    <a href="/post/<?= $recente->id ?>" class="thumb" style="margin-right: 10px;">
                        <span class="fullimage cover bg1" style="background-image: url('/files/Blogs/imagem/<?= $recente->imagem ?>')"></span>
                    </a>
                    <div class="info">
                        <time style="font-size: 12px;" datetime="2021-06-30"><?= $recente->data ?></time>
                        <h4 class="title usmall"><a href="/post/<?= $recente->id ?>"><?= $recente->titulo ?></a></h4>
                    </div>
                    <div class="clear"></div>
                </article>
            <?php endforeach; ?>
        </section>
    </aside>
</div>

<style>
    .widget-area .widget_pearo_posts_thumb .item .thumb .fullimage {
        width: 80px;
        height: 80px;
        display: inline-flex;
        border-radius: 5px;
        background-size: cover !important;
        background-repeat: no-repeat;
        background-position: center center !important;
    }

    .widget-area .widget_pearo_posts_thumb .item .info .title a {
        display: inline-flex;
    }

    .widget-area .widget_pearo_posts_thumb .item .info .title {
        margin-bottom: 0;
        line-height: 1.4;
        font-size: 18px;
        font-weight: 700;
    }

    .widget-area .widget .widget-title {
        border-bottom: 1px solid #eeeeee;
        padding-bottom: 10px;
        text-transform: uppercase;
        position: relative;
        font-weight: 900;
        font-size: 19px;
        width: 100%;
        margin-top: 20px;
        float: left;
    }

    #namanyay-search-btn {
        background:#0099ff;
        color:white;
        font: 'trebuchet ms', trebuchet;
        padding:10px 20px;
        border-radius:0 10px 10px 0;
        -moz-border-radius:0 10px 10px 0;
        -webkit-border-radius:0 10px 10px 0;
        -o-border-radius:0 10px 10px 0;
        border:0 none;
        font-weight:bold;
    }

    #namanyay-search-box {
        background: #eee;
        padding:10px;
        border-radius:10px 0 0 10px;
        -moz-border-radius:10px 0 0 10px;
        -webkit-border-radius:10px 0 0 10px;
        -o-border-radius:10px 0 0 10px;
        border:0 none;
        width:160px;
    }

    .pesquisar{
        background: #000;
        color: #fff;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 11px;
        padding-bottom: 15px;
        border-radius: 4px;
        cursor: pointer;
    }

    @media(min-width: 414px){
        #namanyay-search-box{
            width: 318px !important;
        }
    }

    a:hover{
        color: #000 !important;
    }
</style>

<?php $this->start('script-footer') ?>
<script>
    $('.pesquisar').click(function () {
        $('#searchthis').submit()
    })
</script>
<?php $this->end() ?>
