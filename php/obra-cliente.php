<?php include './conections/config.php'; ?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>FERGEL :: OBRA DO CLIENTE</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favorite Icons -->
        <link rel="icon" href="img/favicon/favicon.html" type="image/x-icon" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72-precomposed.html">
        <link rel="apple-touch-icon-precomposed" href="img/favicon/apple-touch-icon-precomposed.html">
        <!-- // Favorite Icons -->

		<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,600,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

        <!-- GENERAL CSS FILES -->
        <link rel="stylesheet" href="css/minified.css">
        <!-- // GENERAL CSS FILES -->

        <!--[if IE 8]>
                <script src="js/respond.min.js"></script>
                <script src="js/selectivizr-min.js"></script>
        <![endif]-->
        <!--
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        -->
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>');</script>
        <script src="js/modernizr.min.js"></script>	
        <!-- PARTICULAR PAGES CSS FILES -->
        <link rel="stylesheet" href="css/innerpage.css">
        <!-- // PARTICULAR PAGES CSS FILES -->
        <link rel="stylesheet" href="css/responsive.css">

    </head>
    <body class="home">

        <!-- PAGE WRAPPER -->
        <div id="page-wrapper">

            <!-- SITE HEADER -->
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<!-- CONTACT INFO -->
						<div class="contact-info">
							<i class="iconfont-headphones round-icon"></i>
							<strong>+55 92 3615.1000</strong>
							<span>Av. Buriti, 5800 &bull; Distrito &bull; Manaus &bull; Amazonas &bull; Brasil</span>
					  </div>
						<!-- // CONTACT INFO -->
					</div>
                   
                    
			  <div class="col-xs-12 col-sm-6 col-md-2">
						<ul class="actions unstyled clearfix">
							
							
							<li data-toggle="sub-header" data-target="#sub-cart" style="float:rigth;">
								<!-- SHOPPING CART -->
								<a href="javascript:void(0);" id="total-cart">
									<i class="iconfont-shopping-cart round-icon"></i>
								</a>
								
								<div id="sub-cart" class="sub-header">
									<div class="cart-header">
										<span style="color:#000;">Voc� n�o tem itens no seu or�amento.</span>
										<small><a href="orcamento.html">� ver tudo �</a></small>
									</div>
									<ul class="cart-items product-medialist unstyled clearfix"></ul>
									<div class="cart-footer">
										<div class="text-right">
											<a href="orcamento.html" class="btn btn-default btn-round view-cart">ver or�amento</a>
										</div>
									</div>
								</div>
								<!-- // SHOPPING CART -->
							</li>
                            <li data-toggle="sub-header" data-target="#sub-social">
								<!-- SOCIAL ICONS 
								<a href="javascript:void(0);" id="social-icons">
									<i class="iconfont-share round-icon"></i>
								</a>
								
								<div id="sub-social" class="sub-header">
									<ul class="social-list unstyled text-center">
										<li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
									</ul>
								</div>
								<!-- // SOCIAL ICONS -->
							</li>
						</ul>
				  </div>
                    
                    <a href="login_adm.php"><button type="button" class="btn btn-danger"><img src="img/ico-login.png" style="margin-top:-3px; margin-right:5px;">ADM</button></a>
                   
							<a href="login_cliente.php"><button type="button" class="btn btn-warning"><img src="img/ico-login.png" style="margin-top:-3px; margin-right:5px;">acompanhe sua obra</button></a>
                    
                    
				</div>
			</div>
			
			<!-- ADD TO CART MESSAGE -->
			<div class="cart-notification">
				<ul class="unstyled"></ul>
			</div>
			<!-- // ADD TO CART MESSAGE -->
		</div>
		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					
					<!-- SITE LOGO -->
					<div class="logo-wrapper">
						<a href="index.html" class="logo" title="Fergel">
							<img src="img/logo-fergel.png" alt="Fergel" />
						</a>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
                        
							<li>
								<a href="index.html">Home</a>
							</li>
                            
							<li>
								<a href="fergel.html">fergel</a>
                                			<ul class="dropdown">
												<li><a href="fergel-missao.html">Miss�o � Vis�o</a></li>
												<li><a href="fergel-certificacoes.html">Certifica��es</a></li>
												<li><a href="fergel-estruturas.html">Estrutura Fergel</a></li>
											</ul>
							</li>
                            
							<li><a href="produtos-categorias.html">produtos</a></li>
                            
                            
							<li>
								<a href="#">engenharia</a>
                                			<ul class="dropdown">
												<li><a href="engenharia-sistemas.html">Sistemas Integrados</a></li>
												<li><a href="engenharia-industrializadas.html">Obras Industrializadas</a></li>
												<li><a href="engenharia-estruturas.html">Estruturas de Constru��o</a></li>
												<li><a href="engenharia-coberturas.html">Coberturas</a></li>
												<li><a href="engenharia-executadas.html">Obras Executadas</a></li>
                                            	<li><a href="engenharia-maoobra.html">M�o-de-obra</a></li>
											</ul>
							</li>
                            
							<li>
								<a href="contatos.html">Contatos</a>
							</li>
                            
						</ul>
						
						<!-- MOBILE MENU -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">
								<li class="active">
								<a href="index.html">home</a>
							</li>
							<li>
								<a href="fergel.html">fergel</a>
							</li>
							<li>
								<a href="produtos-categorias.html">produtos</a></li>
							<li>
								<a href="engenharia-sistemas.html">engenharia</a>
							</li>
							<li>
								<a href="contatos.html">Contatos</a>
							</li>
							</ul>
						</div>
						<!-- // MOBILE MENU -->

					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
	<!-- // SITE HEADER -->

            <!-- BREADCRUMB -->
            <div class="breadcrumb-container">
                <div class="container">
                    <div class="relative">
                        <ul class="bc unstyled clearfix">
                            <li>ADMINISTRA&Ccedil;&Atilde;O </li>
                            <li class="active">obra do cliente</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- // BREADCRUMB -->

            <!-- SITE MAIN CONTENT -->
            <main id="main-content" role="main">
                <div class="container">
                    <div class="row">
                        <?php
                        $decodificar_cliente = base64_decode($_GET['cliente']);
                        $idc = $_GET['id'];
                        $sql_cliente = "SELECT * FROM clientes WHERE id_clientes =$idc";
                        $executa_sql_cliente = mysql_query($sql_cliente)or die(mysql_error());
                        $linha_co = mysql_fetch_array($executa_sql_cliente);
                       
                        ?> 
                        <!-- SIDEBAR -->
                        <aside class="col-xs-12 col-sm-4 col-md-3 affix-top">
                            <div class="sidebar">
                                <nav class="nav-side side-section">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li><strong>MENU ADIMINISTRATIVO</strong></li>
                                        <li><a href="add-cliente.php">Adicionar cliente</a></li>
                                        <li><a href="lista-clientes.php">Lista de clientes</a></li>
                                        <li><a href="add-dados.php">Incluir dados</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </aside>
                        <!-- // SIDEBAR -->

          <section class="col-xs-12 col-sm-8 col-md-9">
                            <div class="panel-group checkout" id="checkout-collapse">
                            
                                <div class="panel panel-default">
                                
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
                                                INFORMA&Ccedil;&Otilde;ES SOBRE A OBRA DE:<h4 style="color:#C00; font-family: Raleway;"> <?php echo $linha_co['razao_social'];?></h4>
                                            </a>
                                        </h4>
                                    </div>
                                    
                                    <div id="checkout-collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">

                                                <?php
                                                $id_obra = $_GET['id'];

                                                $sql_seleciona_obra = "SELECT * FROM obra WHERE id_obra = $id_obra";
                                                $executa_sql_seleciona_obra = mysql_query($sql_seleciona_obra)or die(mysql_error());
                                                $row_obra = mysql_fetch_array($executa_sql_seleciona_obra);
                                                ?>

                                                <div class="col-xs-12 col-sm-6">
                                                
                                                    <div class="inner">
                                                    
                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-12" style="padding-left:1px;">
                                                                <h50>nome da obra</h50> 
                                                                <p><?php echo $row_obra['obra']; ?></p>
                                                            </div>
                                                        </div>

                                                       <!-- ESPA�O --> <div class="space20 clearfix"></div> <!-- ESPA�O -->
                                                        
                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-12" style="padding-left:1px;">
                                                                <h50>ENDERE�O</h50> 
                                                                <p><?php echo $row_obra['endereco-obra']; ?></p>
                                                            </div>
                                                        </div>

                                                       <!-- ESPA�O --> <div class="space20 clearfix"></div><!-- ESPA�O -->

                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-8" style="padding-left:1px;">
                                                                <h50>situa&ccedil;&atilde;o da obra</h50> 
                                                                <p>
                                                                	<div class="btn btn-warning"><?php
                                                                    	if ($row_obra['situacao'] == 1) {
                                                                        	echo "em andamento!";
                                                                    	} else if ($row_obra['situacao'] == 2) {

                                                                        	echo "Concluido!";
                                                                    	}
                                                                    	?>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div> 
                                                        
                                                    </div> <!-- // INNER -->
                                                </div> <!-- // col-xs-12 col-sm-6 -->
 
                                                		<!-- ESPA�O --><div class="space40 visible-xs"></div> <!-- ESPA�O -->

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="inner">


                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-8" style="padding-left:1px;">
                                                                <h50>datas da obra</h50> 
                                                                <p>inicio: <?php echo $row_obra['prev_inicio']; ?></p>
                                                                <p>t&eacute;rmino: <?php echo $row_obra['prev_final']; ?>
                                                            </div>
                                                        </div>

                                                       <!-- ESPA�O --> <div class="space20 clearfix"></div><!-- ESPA�O -->

                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-8" style="padding-left:1px;">
                                                                <h50>Respons&aacute;vel</h50> <p><?php echo $row_obra['responsavel']; ?></p>
                                                            </div>
                                                        </div>

                                                       <!-- ESPA�O --> <div class="space20 clearfix"></div><!-- ESPA�O -->
                                                       
                                                    </div><!-- // INNER -->
                                                </div><!-- // col-xs-12 col-sm-6 -->
                                                
                                            </div> <!--// ROW -->
                                        </div> <!-- // panel-body -->
                                    </div> <!-- // checkout-collapse1 -->
                                </div> <!-- // panel panel-default -->

                                <div class="panel panel-default">
                                
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
                                                avisos e observa&ccedil;&otilde;es
                                            </a>
                                        </h4>
                                    </div>
                                    
                                    <div id="checkout-collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="inner">
                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-10" style="padding-left:1px;">
                                                                <h50>Avisos</h50> 
                                                                <hr/>
                                                                <p><?php echo $row_obra['avisos']; ?></p>
                                                            </div>
                                                        </div>
                                                       <!-- ESPA�O --> <div class="space20 clearfix"></div> <!-- ESPA�O -->
                                                     </div><!-- // INNER -->
                                                </div><!-- // col-xs-12 col-sm-6 -->
                                                
                                                <!-- ESPA�O --><div class="space40 visible-xs"></div><!-- ESPA�O -->

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="inner">
                                                        <div class="form-group stylish-input">
                                                            <div class="col-sm-8 col-lg-10" style="padding-left:1px;">
                                                                <h50>OBSERVA&Ccedil;&Otilde;ES</h50> 
                                                                <hr/>
                                                                <p><?php echo $row_obra['obs']; ?></p>
                                                            </div>
                                                        </div>
                                                        <!-- ESPA�O --><div class="space20 clearfix"></div><!-- ESPA�O -->
                                                     </div><!-- // INNER -->
                                                </div><!-- // col-xs-12 col-sm-6 -->
                                                
                                             </div> <!--// ROW -->
                                        </div> <!-- // panel-body -->
                                    </div> <!-- // checkout-collapse2 -->
                                </div> <!-- // panel panel-default -->
                                
                                <div class="panel panel-default">
                                
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3">
                                                GALERIA DE FOTOS
                                            </a>
                                        </h4>
                                    </div>
                                    
                                    <div id="checkout-collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <!-- PRODUCT LAYOUT -->           
                                            <section class="products-wrapper" style="margin-top:80px;">

                                                <?php
                                                $obra = $_GET['id'];
                                                $sql_fotos_obra = "SELECT * FROM fotos where id_obra = $obra";
                                                $executa_sql_fotos_obra = mysql_query($sql_fotos_obra);
                                                ?>
                                                <?php
                                                while ($row_foto = mysql_fetch_array($executa_sql_fotos_obra)) {
                                                    ?>
                                                    
                                                    <!-- foto -->
                                                    <div class="products-layout">
                                                        <div class="product" style="max-width:247px;">
                                                        
                                                            <div class="entry-media-fotos">
																<img data-src="php/fotos/<?php echo $row_foto['foto'] ?>" alt="" class="lazyLoad thumb" />
                                                                <div class="hover">
                                                                   <ul class="icons unstyled">
                                                                        <li>
                                                                            <a href="php/fotos/<?php echo $row_foto['foto']; ?>" class="circle" data-toggle="lightbox">
                                                                            	<i class="iconfont-search"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="entry-main">
                                                                <h5 class="entry-title">
                                                                    legenda da Foto
                                                                </h5>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <!-- FIM foto -->
                                                    
                                                <?php } ?>
											</section>
                                            <!-- // PRODUCT LAYOUT -->          

                                        </div> <!-- // panel-body -->
                                    </div> <!-- // checkout-collapse2 -->
                                </div> <!-- // panel panel-default -->

									
                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse4">
                                                ARQUIVOS PARA DOWNLOAD
                                            </a>
                                        </h4>
                                    </div>
                                    
                                    <div id="checkout-collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">


                                                 
                                            <section class="products-wrapper" style="margin-top:80px; font-family: Raleway;">

												<p> Clique no nome do arquivo para fazer o download</p>
                                                
                                                <!-- ARQUIVO -->
                                                <div class="products-layout">
                                                    <div class="product" style="max-width:247px;">
                                                        <div class="entry-main">
                                                            <h5 class="entry-title">
                                                                <a href="#" style="font-size:12px; font-weight:600;">T�tulo do arquivo � PDF</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FIM ARQUIVO -->
                                                
                                                
                               			  </section>
                            		
                                        </div> <!-- // panel-body -->
                                    </div> <!-- // checkout-collapse2 -->
                                </div> <!-- // panel panel-default -->
                                
                                <!-- ESPA�O --> <div class="space20 clearfix"></div><!-- ESPA�O -->
                                      
                			</div> <!-- // "panel-group checkout" id="checkout-collapse" -->
						</section><!--// "col-xs-12 col-sm-8 col-md-9" -->
                        
					</div> <!-- // ROW -->
				</div> <!-- // container -->
            </main>
            <!-- // SITE MAIN CONTENT -->

   <!-- SITE FOOTER -->
            <footer class="page-footer">


                <div class="footer-sub">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="pull-left">
                                    <div class="vmid">
                                        <a href="#"><img src="img/sac.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>

                            <div class="space40 visible-xs"></div>

                            <div class="col-xs-12 col-sm-6 center-xs">
                                <div class="pull-right">
                                    <div class="vmid">
                                        <a href="#"><img src="img/cartoes.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="space40 visible-xs"></div> 

                        </div>
                        <div class="copyright center-xs" style="background-color:#666;">
                            <p style="color:#FFF; text-align:center;">copyright &copy; 2015 &bull; www.fergel.com.br &bull; todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>

            </footer>
            <!-- // SITE FOOTER -->	

        </div>
        <!-- // PAGE WRAPPER -->

        <!-- Essential Javascripts -->
        <script src="js/minified.js"></script>
        <!-- // Essential Javascripts -->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-27646173-3', 'themina.net');
            ga('send', 'pageview');

        </script>
        <!-- Particular Page Javascripts -->
        <script src="js/products.js"></script>
        <!-- // Particular Page Javascripts -->
    </body>
</html>