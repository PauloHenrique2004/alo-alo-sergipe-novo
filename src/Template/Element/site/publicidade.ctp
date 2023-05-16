<div class="col-lg-4">
    <!-- Section Tittle -->
    <div class="section-tittle mb-40">
        <h3>Siga-nos</h3>
    </div>
    <!-- Flow Socail -->
    <div class="single-follow mb-45">
        <?php foreach ($configuracoes as $configuracoe): ?>
            <div class="single-box">
                <?php if(!empty($configuracoe->facebook)): ?>
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="<?= $configuracoe->facebook ?>" target="_blank"><img src="/images/news/icon-fb.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <a href="<?= $configuracoe->facebook ?>" target="_blank"><span>Facebook</span></a>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if(!empty($configuracoe->twitter)): ?>
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="<?= $configuracoe->twitter ?>" target="_blank"><img src="/images/news/icon-tw.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <a href="<?= $configuracoe->twitter ?>" target="_blank"><span>Twitter</span></a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(!empty($configuracoe->instagram)): ?>
                <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                        <a href="<?= $configuracoe->instagram ?>" target="_blank"><img src="/images/news/icon-ins.png" alt=""></a>
                    </div>
                    <div class="follow-count">
                        <a href="<?= $configuracoe->instagram ?>" target="_blank"><span>Instagram</span></a>
                    </div>
                    <?php endif; ?>
                </div>


                <?php if(!empty($configuracoe->youtube)): ?>
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="<?= $configuracoe->youtube ?>" target="_blank"><img src="/images/news/icon-yo.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <a href="<?= $configuracoe->youtube ?>" target="_blank"><span>Youtube</span></a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>
    </div>

    <?php foreach ($publicidadeLateral as $value): ?>
        <div class="news-poster d-none d-lg-block" style="display: block !important; margin-bottom: 20px;">
            <a href="<?= !empty($value->link) ? $value->link : '#'?>">
                <img src="/files/Publicidades/imagem/<?= $value->imagem ?>" alt="">
            </a>
        </div>
    <?php endforeach; ?>
</div>
