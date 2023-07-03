<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Header Section Start -->
    <header class="header--section header--style-3" style="background: #000 !important;">
        <?= $this->Flash->render() ?>
        <!-- Header Topbar Start -->
        <div class="header--topbar bg--color-1 top-b" style="background: #000 !important;">
            <div class="container">

                <div class="float--right float--xs-none text-xs-center">

                    <!-- Header Topbar Social Start -->
                    <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                        <?php foreach ($configuracoes as $configuracoe): ?>
                            <?php if(!empty($configuracoe->facebook)): ?>
                                <li><a href="<?= $configuracoe->facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>

                            <?php if(!empty($configuracoe->twitter)): ?>
                                <li>
                                    <a href="<?= $configuracoe->twitter ?>" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if(!empty($configuracoe->instagram)): ?>
                                <li>
                                    <a href="<?= $configuracoe->instagram ?>" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if(!empty($configuracoe->youtube)): ?>
                                <li>
                                    <a href="<?= $configuracoe->youtube ?>" target="_blank">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if(!empty($configuracoe->tiktok)): ?>
                                <li>
                                    <a href="<?= $configuracoe->tiktok ?>" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </ul>
                    <!-- Header Topbar Social End -->
                </div>
            </div>
        </div>
        <!-- Header Topbar End -->

        <!-- Header Mainbar Start -->
        <div class="header--mainbar">
            <div class="container">
                <!-- Header Logo Start -->
                <div class="header--logo float--left float--sm-none text-sm-center">
                    <h1 class="h1">
                        <a href="/" class="btn-link">
                            <img src="/images/ba.png" alt="USNews Logo" style="max-width: 190px;">
                        </a>
                    </h1>
                </div>
                <!-- Header Logo End -->

                <!-- Header Ad Start -->
                <?php foreach ($publicidadeTopo as $value): ?>
                    <div class="header--ad float--right float--sm-none hidden-xs">
                        <a href="<?= !empty($value->link) ? $value->link : '#'?>">
                            <img src="/files/Publicidades/imagem/<?= $value->imagem ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>

                <!-- Header Ad End -->
            </div>
        </div>
        <!-- Header Mainbar End -->

        <!-- Header Navbar Start -->
        <div class="header--navbar navbar bd--color-1 bg--color-0" data-trigger="sticky" style="background: #000">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="headerNav" class="navbar-collapse collapse float--left">
                    <!-- Header Menu Links Start -->
                    <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent" style="background: #000 !important;">
                        <?php foreach ($categorias as $categoria): ?>

                            <?php

                            // Remove acentos e caracteres especiais usando a biblioteca iconv
                            $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoria->categoria);

                            $nome = preg_replace('/\s+/', '-', $nome);

                            $nome = preg_replace('/[^a-zA-Z0-9\-]/', '', $nome);

                            ?>

                            <li>
                                <a href="/noticias/<?= strtolower($nome) ?>/<?= $categoria->id ?>">
                                    <?= $categoria->categoria ?>
                                </a>
                            </li>

                        <?php endforeach; ?>
                        <li><a href="/albuns">Galerias</a></li>
                        <li><a href="/alo-alo-tv">Alô Alô TV</a></li>
                        <li><a href="/agenda">Agenda</a></li>
                        <li><a href="/sobre/1">Sobre nós</a></li>

                        <?php if (!empty($exibirMenumais) && $exibirMenumais->menu_outros == 1): ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mais<i class="fa flm fa-angle-down"></i></a>

                                <ul class="dropdown-menu">
                                    <?php foreach ($categoriaOutros as $value): ?>

                                        <?php
                                        $nomeOutros = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $categoria->categoria);

                                        $nomeOutros = preg_replace('/\s+/', '-', $nomeOutros);

                                        $nomeOutros = preg_replace('/[^a-zA-Z0-9\-]/', '', $nomeOutros);
                                        ?>

                                        <li><a href="/noticias/<?= strtolower($nomeOutros) ?>/<?= $value->id ?>"><?= $value->categoria ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- Header Menu Links End -->
                </div>

                <!-- Header Search Form Start -->
                <form action="/pesquisa" method="get" class="header--search-form float--right" data-form="validate">
                    <?php
                    if (isset($_GET['pesquisa'])) {
                        $pesquisa = $_GET['pesquisa'];
                    } else {
                        $pesquisa = '';
                    }
                    ?>
                    <input type="search" name="pesquisa" placeholder="Pesquisar" class="header--search-control form-control" required>

                    <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search" style="color: #fff"></i></button>
                </form>
                <!-- Header Search Form End -->
            </div>
        </div>
        <!-- Header Navbar End -->
    </header>
    <!-- Header Section End -->
    <script>
        // VERIFICAR SE O SPLASH JÁ FOI EXEBIDO, SE SIM NÃO EXIBE MAIS
        if (!localStorage.getItem('splashShown')) {
            // Mostra o splash
            document.getElementById('preloader').style.display = 'block';

            // Define a flag indicando que o splash foi exibido
            localStorage.setItem('splashShown', 'true');
        }else{
            document.getElementById('preloader').style.display = 'none';
        }

    </script>
</div>
<!-- Wrapper End -->
