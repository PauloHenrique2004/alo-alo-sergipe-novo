<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li>
        <a href="<?php echo $this->Url->build('/'); ?>">
            <i class="fa fa-dashboard" aria-hidden="true"></i>
            <span>Ir para o site</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/users/index'); ?>">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Usuários</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/admin/sobre/edit/1'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Sobre</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>Galeria</span>
            <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">

            <li class="">
                <a href="<?php echo $this->Url->build('/admin/albuns'); ?>">
                    <i class="fa fa-circle"></i>Álbuns</a>
            </li>

            <li class="">
                <a href="<?php echo $this->Url->build('/admin/fotos'); ?>">
                    <i class="fa fa-circle"></i>Fotos</a>
            </li>
        </ul>
    </li>


    <li>
        <a href="<?php echo $this->Url->build('/admin/categorias'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Categorias</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/admin/noticias'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Notícias</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/admin/eventos'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Agenda</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

<!--    <li>-->
<!--        <a href="--><?php //echo $this->Url->build('/admin/blogs'); ?><!--">-->
<!--            <i class="fa fa-circle-o"></i>-->
<!--            <span>Blog</span>-->
<!--            <span class="pull-right-container">-->
<!--      </span>-->
<!--        </a>-->
<!--    </li>-->

    <li>
        <a href="<?php echo $this->Url->build('/admin/newsletters'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Newsletter</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>

    <li>
        <a href="<?php echo $this->Url->build('/admin/publicidades'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Publicidade</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>


    <li>
        <a href="<?php echo $this->Url->build('/admin/configuracoes/edit/1'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Configurações</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-circle-o"></i>
            <span>Vídeos</span>
            <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">

            <li class="">
                <a href="<?php echo $this->Url->build('/admin/videos'); ?>">
                    <i class="fa fa-circle"></i>Vídeos</a>
            </li>

            <li class="">
                <a href="<?php echo $this->Url->build('/admin/descricao-videos/edit/1'); ?>">
                    <i class="fa fa-circle"></i>Descrição vídeos home</a>
            </li>
        </ul>
    </li>


    <li>
        <a href="<?php echo $this->Url->build('/admin/privacidades/edit/1'); ?>">
            <i class="fa fa-circle-o"></i>
            <span>Política de privacidade</span>
            <span class="pull-right-container">
      </span>
        </a>
    </li>
</ul>
