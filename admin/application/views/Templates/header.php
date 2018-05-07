<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title><?=$titulo?></title>

  <link href="<?php echo base_url() ?>js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url() ?>js/data-tables/DT_bootstrap.css" />
  <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/bootstrap-datepicker/css/datepicker-custom.css" />.
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
  <?php
    if($this->input->get_cookie('lang',false)){
      if($this->input->get_cookie('lang',false)=="esp"){
  ?>
    <script type="text/javascript">
      $('.labelesp').show();
      $('.labeleng').hide();
    </script>
  <?php
      }
      else{ ?>
        <script type="text/javascript">
          $('.labelesp').hide();
          $('.labeleng').show();
        </script>
  <?php   }
    }
  ?>

<section>
    <!-- left side start--><img src="<?php echo base_url() ?>images/logo.png" alt="" class="visible-xs logo-movil" style="    margin-top: 5px;">
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo hidden-xs">
            <a href="#"><img src="<?php echo base_url() ?>images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="#"><img src="<?php echo base_url() ?>images/logo_icon.png" alt="" style="margin-top: 5px;"></a>
        </div>

        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">



                    <!--img alt="" src="<?php echo base_url() ?>images/photos/user-avatar.png" class="media-object"-->
                    <img class="media-object" src="<?=base_url()?>uploads/<?= $this->session->userdata('email')?>/avatar/avatar.png?<?php echo time(); ?>" alt="" />

                    <div class="media-body">
                        <h4><a href="#"><?=ucfirst($this->session->userdata('aliasuser'))?></a></h4>
                        <span><?php
                        if($this->session->userdata('tipo')==1){
                          echo "<span class='labelesp'>Administrador</span><span class='labeleng'>Administrator</span>";
                        }
                        if($this->session->userdata('tipo')==2){
                          echo "<span class='labelesp'>Vendedor</span>";
                        }
                        if($this->session->userdata('tipo')==3){
                          echo "<span class='labelesp'>Rancho</span>";
                        }
                        if($this->session->userdata('tipo')==4){
                          echo "<span class='labelesp'>Usuario</span>";
                        }
                        ?></span>
                    </div>
                </div>


                <ul class="nav nav-pills nav-stacked custom-nav"><?php echo base_url() ?>images/logo.png
                    <li><a href="<?php echo base_url() ?>index.php/idioma/esp"><i class="fa fa-sign-out"></i> <span class="labelesp">Español</span><span class="labeleng">Spanish</span></a></li>
                    <li><a href="<?php echo base_url() ?>index.php/idioma/eng"><i class="fa fa-sign-out"></i> <span class="labelesp">Inglés</span><span class="labeleng">English</span></a></li>
                    <li><a href="<?php echo base_url() ?>index.php/usuarios/cerrar_sesion"><i class="fa fa-sign-out"></i> <span class="labelesp">Salir</span></a></li>
                </ul>
            </div>

            <!--sidebar 1 nav start-->
            <?php if($tipo==1){?>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li id="Inicio" class=""><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> <span class="labelesp">Inicio</span></a></li>
              <li id="Perfil" class=""><a href="<?php echo base_url() ?>index.php/cuenta/perfilintegrante/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i> <span class="labelesp">Perfil</span></a></li>
              <li id="Registro" class="menu-list"><a href="#"><i class="fa fa-pencil-square-o"></i> <span class="labelesp">Registro</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/registros/comunidad"> <span class="labelesp">Comunidad</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/registros/trabajador"> <span class="labelesp">Trabajador</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/registros/rancho"> <span class="labelesp">Rancho</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/registros/vendedor"> <span class="labelesp">Vendedor</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/registros/equipo"> <span class="labelesp">Equipo CIERTO</span></a></li>
                  </ul>
              </li>
              <li id="Contratos" class="menu-list"><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="labelesp">Contratos</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/contratos/contratocr"> <span class="labelesp">CIERTO / Rancho</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/contratos/contratort"> <span class="labelesp">Rancho / Trabajador</span></a></li>

                  </ul>
              </li>
              <li id="Evaluaciones" class="menu-list"><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> <span class="labelesp">Evaluaciones</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/evaluaciones/evaluacion"> <span class="labelesp">Trabajador</span></a></li>
                  </ul>
              </li>
              <li id="Consultas" class="menu-list"><a href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="labelesp">Consultas</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/consultas/comunidades"> <span class="labelesp">Comunidades</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/trabajadores"> <span class="labelesp">Trabajadores</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/ranchos"> <span class="labelesp">Ranchos</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/contratoscr"> <span class="labelesp">Contratos CIERTO / Rancho</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/contratosrt"> <span class="labelesp">Contratos Rancho / Trabajador</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/vendedores"> <span class="labelesp">Vendedores</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/equipo"> <span class="labelesp">Equipo CIERTO</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/evaluaciones"> <span class="labelesp">Evaluaciones</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/articulo12"> <span class="labelesp">Reporte semestral</span></a></li>
                  </ul>
              </li>
              <li id="Archivos" class=""><a href="<?php echo base_url() ?>index.php/archivos"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="labelesp">Archivos</span></a></li>
              <li id="Contenidos" class="menu-list"><a href="#"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> <span class="labelesp">Contenidos</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/contenidos/boletin"> <span class="labelesp">Publicar boletín</span></a></li>
                      <!--li><a href="<?php echo base_url() ?>index.php/contenidos/foroeditor"> Categorias</a></li-->
                      <li><a href="<?php echo base_url() ?>chat/php/app.php?login" target="_blank"> <span class="labelesp">Chat</span></a></li>
                  </ul>
              </li>
              <li id="Foro" class=""><a href="<?php echo base_url() ?>index.php/foro/categorias"><i class="fa fa-bullhorn" aria-hidden="true"></i> <span class="labelesp">Foro</span></a></li>




              <li id="Usuarios" class="menu-list"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span class="labelesp">Usuarios</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/usuarios/registrar"> <span class="labelesp">Crear usuario</span></a></li>
                  </ul>
              </li>

            </ul>
            <?php }?>
            <!--sidebar 1 nav end-->
            <!--sidebar 2 nav start vendedor-->
            <?php if($tipo==2){?>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li id="Inicio" class=""><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> <span class="labelesp">Inicio </span></a></li>
              <li id="Perfil" class=""><a href="<?php echo base_url() ?>index.php/cuenta/perfilvendedor/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i> <span class="labelesp">Perfil</span></a></li>

              <li id="Consultas" class="menu-list"><a href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="labelesp">Consultas</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/consultas/comunidades"> <span class="labelesp">Comunidades</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/trabajadores"> <span class="labelesp">Trabajadores</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/ranchos"> <span class="labelesp">Ranchos</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/contratoscr"> <span class="labelesp">Contratos CIERTO / Rancho</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/contratosrt"> <span class="labelesp">Contratos Rancho / Trabajador</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/vendedores"> <span class="labelesp">Vendedores</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/evaluaciones"> <span class="labelesp">Evaluaciones</span></a></li>
                  </ul>
              </li>
              <li id="Archivos" class=""><a href="<?php echo base_url() ?>index.php/archivos"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="labelesp">Archivos</span></a></li>

            </ul>
            <?php }?>
            <!--sidebar 2 nav end vendedor-->
            <!--sidebar 3 nav start ranchos-->
            <?php if($tipo==3){?>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li id="Inicio" class=""><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> <span class="labelesp">Inicio</span></a></li>
              <li id="Perfil" class=""><a href="<?php echo base_url() ?>index.php/cuenta/perfilrancho/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i> <span class="labelesp">Perfil</span></a></li>
              <li id="Registro" class="menu-list"><a href="#"><i class="fa fa-pencil-square-o"></i> <span class="labelesp">Registro</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/registros/rancho"> <span class="labelesp">Sedes</span></a></li>
                  </ul>
              </li>
              <li id="Consultas" class="menu-list"><a href="#"><i class="fa fa-search" aria-hidden="true"></i> <span class="labelesp">Consultas</span></a>
                  <ul class="sub-menu-list">
                      <li><a href="<?php echo base_url() ?>index.php/consultas/trabajadores"> <span class="labelesp">Trabajadores</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/ranchos"> <span class="labelesp">Ranchos</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/contratoscr"> <span class="labelesp">Contratos CIERTO / Rancho</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/contratosrt"> <span class="labelesp">Contratos Rancho / Trabajador</span></a></li>
                      <li><a href="<?php echo base_url() ?>index.php/consultas/evaluaciones"> <span class="labelesp">Evaluaciones</span></a></li>
                  </ul>
              </li>
              <li id="Archivos" class=""><a href="<?php echo base_url() ?>index.php/archivos"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="labelesp">Archivos</span></a></li>

            </ul>
            <?php }?>
            <!--sidebar 3 nav end ranchos-->

            <!--sidebar 4 nav start trabajadores-->
            <?php if($tipo==4){

                $ids=$this->queries_model->customsql("SELECT * FROM cg_boletines WHERE id = (SELECT MAX(id) FROM cg_boletines) ");
                foreach ($ids as $id) {
                  $boletin=$id->id;
                }
              ?>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li id="Inicio" class=""><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> <span class="labelesp">Inicio</span></a></li>
              <li id="Perfil" class=""><a href="<?php echo base_url() ?>index.php/cuenta/perfiltrabajador/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i> <span class="labelesp">Perfil</span></a></li>
              <li id="Dudas" class=""><a href="<?php echo base_url() ?>index.php/perfil/faqs"><i class="fa fa-question" aria-hidden="true"></i> <span class="labelesp">¿Tienes dudas?</span></a></li>
              <li id="Archivos" class=""><a href="<?php echo base_url() ?>index.php/archivos"><i class="fa fa-files-o" aria-hidden="true"></i> <span class="labelesp">Archivos</span></a></li>
              <li id="Boletín" class=""><a href="<?php echo base_url() ?>index.php/perfil/boletin/<?=$boletin?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="labelesp">Boletín</span></a></li>
              <li id="Foro" class=""><a href="<?php echo base_url() ?>index.php/foro/categorias"><i class="fa fa-bullhorn" aria-hidden="true"></i> <span class="labelesp">Foro</span></a></li>
            </ul>
            <?php }?>
            <!--sidebar 4 nav end trabajadores-->
        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->



        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=base_url()?>uploads/<?= $this->session->userdata('email')?>/avatar/avatar.png?<?php echo time(); ?>" alt="">


                        <?=ucfirst($this->session->userdata('aliasuser'))?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                      <?php if($this->session->userdata('tipo')==1) { ?>
                        <li><a href="<?php echo base_url() ?>index.php/cuenta/perfilintegrante/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i>  <span class="labelesp">Perfil</span></a></li>
                      <?php } ?>
                      <?php if($this->session->userdata('tipo')==2) { ?>
                        <li><a href="<?php echo base_url() ?>index.php/cuenta/perfilvendedor/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i>  <span class="labelesp">Perfil</span></a></li>
                      <?php } ?>
                      <?php if($this->session->userdata('tipo')==3) { ?>
                        <li><a href="<?php echo base_url() ?>index.php/cuenta/perfilrancho/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i>  <span class="labelesp">Perfil</span></a></li>
                      <?php } ?>
                      <?php if($this->session->userdata('tipo')==4) { ?>
                        <li><a href="<?php echo base_url() ?>index.php/cuenta/perfiltrabajador/<?php echo $this->session->userdata('idenlace') ?>"><i class="fa fa-user"></i>  <span class="labelesp">Perfil</span></a></li>
                      <?php } ?>

                        <!--li><a href="#"><i class="fa fa-cog"></i>  Configuración</a></li-->
                        <li><a href="<?php echo base_url() ?>index.php/usuarios/cerrar_sesion"><i class="fa fa-sign-out"></i> <span class="labelesp">Salir</span></a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->

        <div class="page-heading">
            <h3><?=$titulo?></h3>
            <ul class="breadcrumb">
                <li>
                    <?=$menu?>
                </li>
                <li class="active"><?=$titulo?></li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
