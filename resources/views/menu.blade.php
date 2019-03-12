<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Menú Principal</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('css/fonts.googleapis.com.css')}}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ace-rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('css/ace-ie.min.css')}}" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{asset('js/ace-extra.min.js')}}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

	<body class="no-skin">
    <!--BARRA DE NAVEGACION-->
    <div id="navbar" class="navbar navbar-default ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        GDIESEL
                    </small>
                </a>

            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="grey dropdown-modal ">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-tasks"></i>
                            <span class="badge badge-grey">4</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-check"></i>
                                4 Tasks to complete
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Software Update</span>
                                                <span class="pull-right">65%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:65%" class="progress-bar"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Hardware Upgrade</span>
                                                <span class="pull-right">35%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Unit Testing</span>
                                                <span class="pull-right">15%</span>
                                            </div>

                                            <div class="progress progress-mini">
                                                <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
                                                <span class="pull-left">Bug Fixes</span>
                                                <span class="pull-right">90%</span>
                                            </div>

                                            <div class="progress progress-mini progress-striped active">
                                                <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-footer">
                                <a href="#">
                                    See tasks with details
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="purple dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                            <span class="badge badge-important">8</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-exclamation-triangle"></i>
                                8 Notifications
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
                                                <span class="pull-right badge badge-info">+12</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="btn btn-xs btn-primary fa fa-user"></i>
                                            Bob just signed up as an editor ...
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                                <span class="pull-right badge badge-success">+8</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                                <span class="pull-right badge badge-info">+11</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-footer">
                                <a href="#">
                                    See all notifications
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="green dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                            <span class="badge badge-success">5</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-envelope-o"></i>
                                5 Messages
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="{{asset('images/avatars/avatar.png')}}" class="msg-photo" alt="Alex's Avatar" />
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="{{asset('images/avatars/avatar3.png')}}" class="msg-photo" alt="Susan's Avatar" />
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="{{asset('images/avatars/avatar4.png')}}" class="msg-photo" alt="Bob's Avatar" />
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="{{asset('images/avatars/avatar2.png')}}" class="msg-photo" alt="Kate's Avatar" />
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="{{asset('images/avatars/avatar5.png')}}" class="msg-photo" alt="Fred's Avatar" />
                                            <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-footer">
                                <a href="inbox.html">
                                    See all messages
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="light-blue dropdown-modal user-min">
                       <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="{{asset('images/avatars/user.jpg')}}" alt="Jason's Photo" />
                            <span class="user-info">
									<small>Welcome,</small>
                                <!--PARA CUANDO TENGA USUARIOS CREADOS Auth::user()->name}}-->
									Jason
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>
   <!--BARRA DE BUSQUEDA-->
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="">Inicio</a>
            </li>
            <li class="active">Menú Principal</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
            </form>
        </div><!-- /.nav-search -->
    </div>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-briefcase"></i>
							<span class="menu-text">
								Operaciones
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="typography.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Disponibilidad de Grupos Sincronizados
								</a>

								<b class="arrow"></b>

							</li>

                            <li class="hover">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Control de Mantenimientos

                                </a>
                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="hover">
                                        <a href="">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mantenimiento Cíclico

                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="hover">
                                        <a href="">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mantenimiento Capital
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                </ul>
                            </li>

							<li class="hover">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Control de Materias de Servicio
                                    <b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="hover">
                                        <a href="">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Combustible
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Lubricante
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="hover">
                                        <a href="">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Líquido Refrigerante
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Generación
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="buttons.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Control de Indices de Consumo
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="hover">
                                                <a href="">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    Motores Diésel
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                            <li class="hover">
                                                <a href="">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    Plantas Pico
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>

							</li>



							<li class="hover">
								<a href="content-slider.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Control de la Telemecánica
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="treeview.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Control del Trabajo de las Brigadas
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Ejemplo para los iconos
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="hover">
										<a href="#">
											<i class="menu-icon fa fa-leaf green"></i>
											Item #1
										</a>

										<b class="arrow"></b>
									</li>

									<li class="hover">
										<a href="#" class="dropdown-toggle">
											<i class="menu-icon fa fa-pencil orange"></i>

											4th level
											<b class="arrow fa fa-angle-down"></b>
										</a>

										<b class="arrow"></b>

										<ul class="submenu">
											<li class="hover">
												<a href="#">
													<i class="menu-icon fa fa-plus purple"></i>
													Add Product
												</a>

												<b class="arrow"></b>
											</li>

											<li class="hover">
												<a href="#">
													<i class="menu-icon fa fa-eye pink"></i>
													View Products
												</a>

												<b class="arrow"></b>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Nomencladores </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									UEB
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Emplazamientos
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="hover">
                                <a href="tables.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grupos Electrógenos Sincronizados
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="tables.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Tipos de Mantenimientos
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="tables.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Tipos de Tecnologías
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="tables.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Causas de Indisponibilidad
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="tables.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Potencia
                                </a>

                                <b class="arrow"></b>
                            </li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
                                Informes
                            </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="form-elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Parte Diario de Producción
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="form-elements-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Disponibilidad por Tecnologías
								</a>

								<b class="arrow"></b>
							</li>

                            <li class="hover">
                                <a href="form-wizard.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grupos
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="hover">
                                        <a href="form-wizard.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Indisponibles por Mantenimiento
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="hover">
                                        <a href="wysiwyg.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Limitados en la Potencia
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Indisponibles por Tecnología
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Afectados por Lubricante
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

							<li class="hover">
								<a href="dropzone.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Comportamiento de la Telemecánica
								</a>

								<b class="arrow"></b>
							</li>

                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Estadística de Indisponibilidad por Tecnología
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Trabajo de las Brigadas (Estadística)
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cobertura de Combustible
                                </a>

                                <b class="arrow"></b>
                            </li>
						</ul>
					</li>

					<li class="hover">
						<a href="widgets.html">
							<i class="menu-icon fa fa-bar-chart-o"></i>
							<span class="menu-text">
                                Datos Estadísticos
                            </span>
						</a>

						<b class="arrow"></b>
                        <ul class="submenu">
                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Disponibilidad
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Comportamiento General
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            ***Comportamiento por UEB
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Comportamiento por Potencia
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>

                            </li>

                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Indice de Consumo de Combustible
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Indice de Consumo por Provincia
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Generación
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Total
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Diaria
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <li class="hover">
                                        <a href="dropzone.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Por Provincias
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Existencia de Lubricantes
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="hover">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Existencia de Líquidos Refrigerantes
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
					</li>
                    <li class="hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-cogs"></i>
                            <span class="menu-text"> Configuración </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="hover">
                                <a href="profile.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Perfil de Usuario
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="inbox.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Obtener Trazas
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="pricing.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Salvas y Restauras de Bases de Datos
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="invoice.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Generar Alertas
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="email.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Email
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="hover">
                                <a href="login.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registro de Usuarios
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

					<li class="hover">
						<a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								***Calendario

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>



					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Otras Páginas

								<span class="badge badge-primary">5</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="faq.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Ayuda
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="error-404.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 404
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="error-500.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 500
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
				</ul><!-- /.nav-list -->
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<!--Ver por que no funciona-->
								<div class="hidden-sm hidden-xs">
									<button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
										<i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
										Collapse/Expand Menu
									</button>
								</div>
								<!--revisar-->

								<div class="center">
									<br />

                                    <div class="row">
                                        <div class="space-6"></div>

                                        <div class="col-sm-7 infobox-container">
                                            <div class="infobox infobox-green">
                                                <div class="infobox-icon">
                                                    <i class="ace-icon fa fa-comments"></i>
                                                </div>

                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">32</span>
                                                    <div class="infobox-content">comments + 2 reviews</div>
                                                </div>

                                                <div class="stat stat-success">8%</div>
                                            </div>

                                            <div class="infobox infobox-blue">
                                                <div class="infobox-icon">
                                                    <i class="ace-icon fa fa-twitter"></i>
                                                </div>

                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">11</span>
                                                    <div class="infobox-content">new followers</div>
                                                </div>

                                                <div class="badge badge-success">
                                                    +32%
                                                    <i class="ace-icon fa fa-arrow-up"></i>
                                                </div>
                                            </div>

                                            <div class="infobox infobox-pink">
                                                <div class="infobox-icon">
                                                    <i class="ace-icon fa fa-shopping-cart"></i>
                                                </div>

                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">8</span>
                                                    <div class="infobox-content">new orders</div>
                                                </div>
                                                <div class="stat stat-important">4%</div>
                                            </div>

                                            <div class="infobox infobox-red">
                                                <div class="infobox-icon">
                                                    <i class="ace-icon fa fa-flask"></i>
                                                </div>

                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">7</span>
                                                    <div class="infobox-content">experiments</div>
                                                </div>
                                            </div>

                                            <div class="infobox infobox-orange2">
                                                <div class="infobox-chart">
                                                    <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                                </div>

                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">6,251</span>
                                                    <div class="infobox-content">pageviews</div>
                                                </div>

                                                <div class="badge badge-success">
                                                    7.2%
                                                    <i class="ace-icon fa fa-arrow-up"></i>
                                                </div>
                                            </div>

                                            <div class="infobox infobox-blue2">
                                                <div class="infobox-progress">
                                                    <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                                        <span class="percent">42</span>%
                                                    </div>
                                                </div>

                                                <div class="infobox-data">
                                                    <span class="infobox-text">traffic used</span>

                                                    <div class="infobox-content">
                                                        <span class="bigger-110">~</span>
                                                        58GB remaining
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="space-6"></div>

                                            <div class="infobox infobox-green infobox-small infobox-dark">
                                                <div class="infobox-progress">
                                                    <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                                        <span class="percent">61</span>%
                                                    </div>
                                                </div>

                                                <div class="infobox-data">
                                                    <div class="infobox-content">Task</div>
                                                    <div class="infobox-content">Completion</div>
                                                </div>
                                            </div>

                                            <div class="infobox infobox-blue infobox-small infobox-dark">
                                                <div class="infobox-chart">
                                                    <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                                </div>

                                                <div class="infobox-data">
                                                    <div class="infobox-content">Earnings</div>
                                                    <div class="infobox-content">$32,000</div>
                                                </div>
                                            </div>

                                            <div class="infobox infobox-grey infobox-small infobox-dark">
                                                <div class="infobox-icon">
                                                    <i class="ace-icon fa fa-download"></i>
                                                </div>

                                                <div class="infobox-data">
                                                    <div class="infobox-content">Downloads</div>
                                                    <div class="infobox-content">1,205</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="vspace-12-sm"></div>

                                        <div class="col-sm-5">
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat widget-header-small">
                                                    <h5 class="widget-title">
                                                        <i class="ace-icon fa fa-signal"></i>
                                                        Traffic Sources
                                                    </h5>

                                                    <div class="widget-toolbar no-border">
                                                        <div class="inline dropdown-hover">
                                                            <button class="btn btn-minier btn-primary">
                                                                This Week
                                                                <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                                                <li class="active">
                                                                    <a href="#" class="blue">
                                                                        <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                                        This Week
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                                        Last Week
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                                        This Month
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                                        Last Month
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <div id="piechart-placeholder"></div>

                                                        <div class="hr hr8 hr-double"></div>

                                                        <div class="clearfix">
                                                            <div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
																&nbsp; likes
															</span>
                                                                <h4 class="bigger pull-right">1,255</h4>
                                                            </div>

                                                            <div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
																&nbsp; tweets
															</span>
                                                                <h4 class="bigger pull-right">941</h4>
                                                            </div>

                                                            <div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
																&nbsp; pins
															</span>
                                                                <h4 class="bigger pull-right">1,050</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.widget-main -->
                                                </div><!-- /.widget-body -->
                                            </div><!-- /.widget-box -->
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Adianec</span>
							Application &copy; 2019
						</span>

                        &nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>
    <!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{asset('js/ace-elements.min.js')}}"></script>
		<script src="{{asset('js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>
	</body>
</html>
