
<!-- Footer Section Start -->
<footer class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets pd--30-0 bg--color-2">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-4 col-xs-4 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget w-footer" style="border-top: solid #fff; padding-top: 19px;">

                        <!-- About Widget Start -->
                        <a href="/" class="btn-link">
                            <img src="/images/ba.png" alt="USNews Logo" style="max-width: 190px;" data-rjs="2">
                        </a>
                        <!-- About Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-4 col-xs-4 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget" style="border-top: solid #fff;">
                        <div class="widget--title">
                            <h2 class="h4">Anuncie conosco</h2>

                            <i class="icon fa fa-bullhorn"></i>
                        </div>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <button style="border-color: #ffcb02; background: #ffcb02; color: #000" type="submit" class="btn btn-lg btn-block btn-primary"  data-toggle="modal" data-target="#anuncie">
                                Anuncie aqui
                            </button>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>


                <div class="col-md-4 col-xs-4 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget" style="border-top: solid #fff;">
                        <div class="widget--title">
                            <h2 class="h4">Siga-nos</h2>
                            <i class="icon fa fa-share-alt"></i>
                        </div>

                        <!-- Social Widget Start -->
                        <?php foreach ($configuracoes as $configuracoe): ?>
                            <div class="social--widget style--1">
                                <ul class="nav" style="background: transparent">
                                    <?php if(!empty($configuracoe->facebook)): ?>
                                        <li class="facebook">
                                            <a href="<?= $configuracoe->facebook ?>" target="_blank" style="border: none !important;" class="social-footer">
                                                <span class="icon" style="border-color:#fff"><i class="fa fa-facebook-f" style="color:#fff"></i></span>
                                                <span class="count" style="color: #fff !important;">Facebook</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(!empty($configuracoe->twitter)): ?>
                                        <li class="twitter">
                                            <a href="<?= $configuracoe->twitter ?>" target="_blank" class="social-footer">
                                                <span class="icon" style="border-color:#fff"><i class="fa fa-twitter" style="color:#fff"></i></span>
                                                <span class="count" style="color: #fff !important;">Twitter</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(!empty($configuracoe->instagram)): ?>
                                        <li class="google-plus">
                                            <a href="<?= $configuracoe->instagram ?>" target="_blank" class="social-footer">
                                                <span class="icon" style="border-color:#fff"><i class="fa fa-instagram" style="color: #fff"></i></span>
                                                <span class="count" style="color: #fff !important;">Instagram</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(!empty($configuracoe->youtube)): ?>
                                        <li class="youtube">
                                            <a href="<?= $configuracoe->youtube ?>" target="_blank" style="border: none !important;" class="social-footer">
                                                <span class="icon" style="border-color:#fff"><i class="fa fa-youtube-square" style="color:#fff"></i></span>
                                                <span class="count" style="color: #fff !important;">youtube</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(!empty($configuracoe->tiktok)): ?>
                                        <li class="youtube">
                                            <a href="<?= $configuracoe->tiktok ?>" target="_blank" style="border: none !important;" class="social-footer">
                                                <span class="icon" style="border-color:#fff"><i class="fa fa-tiktok" style="color:#fff"></i></span>
                                                <span class="count" style="color: #fff !important;">Tik Tok</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                        <!-- Social Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widgets End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright bg--color-3">
        <div class="social--bg bg--color-3"></div>

        <div class="container">
            <p class="text float--left">&copy; <?= date('Y') ?>  Alô Alô Sergipe. Todos os direitos reservados.</p>

            <ul class="nav social float--right">
                <p>Desenvolvido <i style="color: #f27420" class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://wetech.com.br/" target="_blank" style="color: #f27420"> Wetech</a>
                </p>
            </ul>

            <ul class="nav links float--right">
                <li><a class="hover-fff" href="/politica-de-privacidade/1">POLÍTICA DE PRIVACIDADE</a></li>
            </ul>


                <p class="desenvolvido">Desenvolvido <i style="color: #f27420" class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://wetech.com.br/" target="_blank" style="color: #f27420"> Wetech</a>
                </p>

        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Footer Section End -->
</div>
<!-- Wrapper End -->

<!-- Sticky Social Start -->
<div id="stickySocial" class="sticky--right">
    <ul class="nav">
        <?php foreach ($configuracoes as $configuracoe): ?>

            <?php if(!empty($configuracoe->facebook)): ?>
                <li>
                    <a href="<?= $configuracoe->facebook ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                        <span>Siga-nos no Facebook </span>
                    </a>
                </li>
            <?php endif; ?>


            <?php if(!empty($configuracoe->twitter)): ?>
                <li>
                    <a href="<?= $configuracoe->twitter ?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <span>Siga-nos no Twitter</span>
                    </a>
                </li>
            <?php endif; ?>


            <?php if(!empty($configuracoe->instagram)): ?>
                <li>
                    <a href="<?= $configuracoe->instagram ?>" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <span>Siga-nos no Instagram</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(!empty($configuracoe->youtube)): ?>
                <li>
                    <a href="<?= $configuracoe->youtube ?>" target="_blank">
                        <i class="fa fa-youtube-play"></i>
                        <span>Siga-nos no Youtube</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(!empty($configuracoe->tiktok)): ?>
                <li>
                    <a href="<?= $configuracoe->tiktok ?>" target="_blank" class="tiktok">
                        <i class="fa-brands fa-tiktok"></i>
                        <span class="spn-tik-tok">Siga-nos no Tik Tok</span>
                    </a>
                </li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>
</div>
<!-- Sticky Social End -->

<div class="modal fade" id="anuncie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="widget">
                    <div class="widget--title" style="border-top: none !important;">
                        <h2 class="h4">Anuncie conosco</h2>
                        <i class="icon fa fa-bullhorn"></i>
                    </div>
                    <div class="subscribe--widget">
                        <?= $this->Form->create(null, ['role' => 'form', 'url' =>['controller' => 'Contacts', 'action' => 'anuncieConosoco'],'class' => 'formAnuncie']) ?>
                        <input type="text" name="nome" placeholder="Nome" class="form-control" autocomplete="off" required="" aria-required="true">
                        <input type="text" name="tel" placeholder="Telefone" class="form-control" autocomplete="off" required="" aria-required="true">
                        <input type="email" name="email" placeholder="email" class="form-control" autocomplete="off" required="" aria-required="true">
                        <textarea style="width: -webkit-fill-available; margin-top: 20px;" class="single-textarea input-anuncie" name="mensagem" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mensagem" required=""></textarea>
                        <div class="recaptcha recaptcha-anuncie" style="justify-content: center; margin-bottom: 20px; margin-top: 20px;">
                            <?= $this->Recaptcha->display() ?>
                        </div>
                        <button type="submit" class="btn btn-lg btn-block btn-default active" style="border-color: #ffcb02 !important;">Enviar</button>
                        <?= $this->Flash->render('anuncie') ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--LGPD-->
<div class="custom-container-lgpd" style="display: flex;">
    <div class="box-content">
        <p>Bem-vindo!</p>
        <p style="margin-top: 10px">A AlÔ AlÔ Sergipe usa cookies para armazenar informações sobre como você usa o nosso site. Tudo para tornar sua experiência a mais agradável possível. Para entender os tipos de
            cookies que utilizamos, clique em '<a style="color:#007bff" href="/politica-de-privacidade/1">Termos de Uso e Política de Privacidade</a>'.
            Ao clicar em 'Aceitar', você consente com a utilização de cookies e com os termos de uso e política de
            privacidade.</p></div>
    <div class="box-button">
        <button id="lgpdAaceitarBtn" style="cursor: pointer">ACEITAR</button>
        <button onclick="location.href='/politica-de-privacidade/1'" style="cursor: pointer">TERMOS DE USO</button>
    </div>
</div>



<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#"><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- Back To Top Button End -->

<!-- ==== jQuery Library ==== -->
<script src="/js/site/jquery-3.2.1.min.js"></script>

<!-- ==== Bootstrap Framework ==== -->
<script src="/js/site/bootstrap.min.js"></script>

<!-- ==== StickyJS Plugin ==== -->
<script src="/js/site/jquery.sticky.min.js"></script>

<!-- ==== HoverIntent Plugin ==== -->
<script src="/js/site/jquery.hoverIntent.min.js"></script>

<!-- ==== Marquee Plugin ==== -->
<script src="/js/site/jquery.marquee.min.js"></script>

<!-- ==== Validation Plugin ==== -->
<script src="/js/site/jquery.validate.min.js"></script>

<!-- ==== Isotope Plugin ==== -->
<script src="/js/site/isotope.min.js"></script>

<!-- ==== Resize Sensor Plugin ==== -->
<script src="/js/site/resizesensor.min.js"></script>

<!-- ==== Sticky Sidebar Plugin ==== -->
<script src="/js/site/theia-sticky-sidebar.min.js"></script>

<!-- ==== Zoom Plugin ==== -->
<script src="/js/site/jquery.zoom.min.js"></script>

<!-- ==== Bar Rating Plugin ==== -->
<script src="/js/site/jquery.barrating.min.js"></script>

<!-- ==== Countdown Plugin ==== -->
<script src="/js/site/jquery.countdown.min.js"></script>

<!-- ==== RetinaJS Plugin ==== -->
<script src="/js/site/retina.min.js"></script>

<!-- ==== Google Map API ==== -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>-->

<!-- ==== Main JavaScript ==== -->
<script src="/js/site/main.js"></script>

<script>
    $(".newsletter").on("keyup", function() {
        if ($(".input-newsletter").val() !== "") {
            $(".recaptcha-newsletter").show();
        }else{
            $(".recaptcha-newsletter").hide();
        }
    });


    $(document).ready(function() {
        function lgpdAceito() {
            return localStorage.getItem('lgpd-aceito') === 'sim';
        }

        const lgpdElement = $('.custom-container-lgpd');
        const lgpdAceitarBtnElement = $('#lgpdAaceitarBtn');

        if(!lgpdAceito()) {
            lgpdElement.css('display', 'flex');
        }else {
            lgpdElement.css('display', 'none');
        }

        lgpdAceitarBtnElement.on('click touchend', function (e) {
            localStorage.setItem('lgpd-aceito', 'sim');
            lgpdElement.css('display', 'none');
        });
    });



</script>
<?= $this->fetch('script-footer') ?>

<style>
    .social-footer:before{
        border: none !important;
    }

    .custom-container-lgpd {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translate(-50%);
        background-color: #fff;
        color: #555;
        z-index: 9999;
        box-sizing: border-box;
        padding: 20px;
        max-width: 1170px;
        width: 100%;
        display: none;
        align-items: center;
        justify-content: space-between;
        border: 1px solid hsla(0,0%,44%,.25);
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 16%);
    }

    .custom-container-lgpd .box-button button {
        padding: 5px 15px;
        background: #000;
        color: #fbfcff;
        border-radius: 0;
        font-weight: 700;
        border: transparent;
        font-size: 12px;
        width: 150px;
    }

    .custom-container-lgpd .box-button {
        margin-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 80px;
    }

    .custom-container-lgpd .box-content {
        font-size: 14px;
        flex: 1;
    }

    @media (max-width: 767px){
        .custom-container-lgpd {
            flex-direction: column !important;
        }
    }

    @media (max-width: 767px){
        .custom-container-lgpd .box-button {
            flex-direction: row;
            align-items: center;
            width: 100%;
            margin: 15px 0 0;
            height: auto;
        }
    }

    .desenvolvido{
        display: none;
        margin-top: -25px;
        margin-bottom: 20px !important;
        margin-left: -8%;
        text-align: center !important;
    }

    @media(max-width: 480px){
        .desenvolvido{
            display: block;
        }
    }

    @media(max-width: 480px){
        .w-footer{
            text-align: center;
        }
    }


</style>

</body>
</html>
