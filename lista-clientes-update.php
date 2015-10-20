<?php include './conections/config.php'; ?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
    <head>

        <meta charset="UTF-8">
        <title>FERGEL :: ALTERAR CADASTRO</title>
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


        <script>
            $(document).ready(function () {

                $("select[name=estados]").change(function () {
                    $("select[name=cidades]").html('<option value="0">Carregando...</option>');

                    $.post("php/carrega_cidades.php",
                            {estado: $(this).val()},
                    function (valor) {
                        //$("select[name=valorProduto]").html(valor);
                        $("select[name=cidades]").html(valor);
                    }
                    )

                });
            });
        </script>




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
										<span style="color:#000;">Você não tem itens no seu orçamento.</span>
										<small><a href="orcamento.html">• ver tudo •</a></small>
									</div>
									<ul class="cart-items product-medialist unstyled clearfix"></ul>
									<div class="cart-footer">
										<div class="text-right">
											<a href="orcamento.html" class="btn btn-default btn-round view-cart">ver orçamento</a>
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
					    
							<li class="active">
								<a href="index.html">Home</a>
							</li>
					        
							<li>
								<a href="fergel.html">fergel •</a>
					            			<ul class="dropdown">
												<li><a href="fergel-missao.html">Missão • Visão</a></li>
												<li><a href="fergel-certificacoes.html">Certificações</a></li>
												<li><a href="fergel-estruturas.html">Estrutura Fergel</a></li>
											</ul>
							</li>
					        
							<li><a href="produtos-categorias.html">produtos</a></li>
					        
					        
							<li>
								<a href="#">engenharia •</a>
					            			<ul class="dropdown">
												<li><a href="engenharia-sistemas.html">Sistemas Integrados</a></li>
												<li><a href="engenharia-industrializadas.html">Obras Industrializadas</a></li>
												<li><a href="engenharia-estruturas.html">Estruturas de Construção</a></li>
												<li><a href="engenharia-coberturas.html">Coberturas</a></li>
												<li><a href="engenharia-executadas.html">Obras Executadas</a></li>
					                        	<li><a href="engenharia-maoobra.html">Mão-de-obra</a></li>
											</ul>
							</li>
					        
							<li>
								<a href="contatos.php">Contatos •</a>
					            			<ul class="dropdown">
												<li><a href="trabalhe-conosco.php">Trabalhe conosco</a></li>
											</ul>
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
								<a href="contatos.php">Contatos</a>
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
                            <li class="active">Alteração de cadastro de clientes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- // BREADCRUMB -->

            <!-- SITE MAIN CONTENT -->
            <main id="main-content" role="main">
                <div class="container">
                    <div class="row">

                        <!-- SIDEBAR -->
                        <aside class="col-xs-12 col-sm-4 col-md-3 affix-top">
                            <div class="sidebar">
                                <nav class="nav-side side-section">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li><strong>MENU ADIMINISTRATIVO</strong></li>
                                        <li><a href="add-cliente.php?id=<?php echo $_GET['idc']; ?>">Adicionar cliente</a></li>
                                        <li><a href="lista-clientes.php?id=<?php echo $_GET['idc']; ?>">Lista de clientes</a></li>
                                        <li><a href="add-dados.php?id=<?php echo $_GET['idc']; ?>">Incluir dados</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </aside>
                        <!-- // SIDEBAR -->

                        <section class="col-xs-12 col-sm-8 col-md-9">
                            <div class="panel-group checkout" id="checkout-collapse">

                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">ALTERAÇÃO DE CADASTRO DE CLIENTE</h4>
                                    </div>

                                    <div id="checkout-collapse2" class="panel-collapse">
                                        <div class="panel-body">

                                            <?php
                                            $idc = $_GET['id'];
                                            $sql_seleciona_update = "SELECT * FROM clientes WHERE id_clientes = $idc";
                                            $executa_seleciona_update = mysql_query($sql_seleciona_update)or die(mysql_error());
                                            $linha_edit_cliente = mysql_fetch_array($executa_seleciona_update);
                                            ?>
                                            
                                            <form  class="form-horizontal" method="POST" role="form" action="php/edit_clientes.php?idc=<?php echo $_GET['id']; ?>&id=<?php echo $_GET['idc']; ?>">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                                        <div class="form-group stylish-input">
                                                            <label for="inputFirstname" class="col-sm-4 col-lg-4 control-label required">RAZ&Atilde;O SOCIAL</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" class="form-control" value="<?php echo $linha_edit_cliente['razao_social']; ?>" id="inputFirstname" required="razaosocial" name="razaosocial" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputLastname" class="col-sm-4 col-lg-4 control-label required">CNPJ</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['cnpj']; ?>" class="form-control" id="inputLastname" required="cnpj" name="cnpj" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputEmail2" class="col-sm-4 col-lg-4 control-label required">E-Mail</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="email" value="<?php echo $linha_edit_cliente['email']; ?>" class="form-control" id="inputEmail2" required="email" name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputPhone" class="col-sm-4 col-lg-4 control-label required">TELEFONE</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['telefone']; ?>" class="form-control" id="inputPhone" required="telefone" name="telefone"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputCompany" class="col-sm-4 col-lg-4 control-label">CONTATO</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['contato']; ?>" class="form-control" id="inputCompany" required="contato" name="contato"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputCompany" class="col-sm-4 col-lg-4 control-label">LOGIN</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['login']; ?>"  class="form-control" id="inputCompany" required="login" name="login"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                                        <div class="form-group stylish-input">
                                                            <label for="inputAddress1" class="col-sm-4 col-lg-4 control-label required">ENDERE&Ccedil;O</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['endereco']; ?>" class="form-control" id="inputAddress1" required="endereco" name="endereco" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputCity" class="col-sm-4 col-lg-4 control-label required">BAIRRO</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['bairro']; ?>" class="form-control" id="inputCity" required="bairro" name="bairro"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputPostcode" class="col-sm-4 col-lg-4 control-label required">CEP</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="text" value="<?php echo $linha_edit_cliente['cep']; ?>" class="form-control" id="inputPostcode" required="cep" name="cep" />
                                                            </div>
                                                        </div>

                                                        <?php
                                                        $id_estado = $linha_edit_cliente['id_estado'];
                                                        $sql_estados = "SELECT * FROM estado WHERE est_id = $id_estado";
                                                        $sql_executa_estados = mysql_query($sql_estados)or die(mysql_error());
                                                        $row_estado = mysql_fetch_array($sql_executa_estados);


                                                        $sql_estadoc = "SELECT * FROM estado";
                                                        $ex_sql_estado = mysql_query($sql_estadoc)or die(mysql_error());
                                                        ?>

                                                        <div class="form-group stylish-input">
                                                            <label for="inputCountry" class="col-sm-4 col-lg-4 control-label required">ESTADO</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <select name="estados"  required="estados" class="form-control" id="inputState">
                                                                    <option value="<?php echo $row_estado['est_id']; ?>"><?php echo $row_estado['est_nome']; ?></option>
                                                                    <option value="">Selecione um estado</option>
                                                                    <?php
                                                                    while ($row_clientes_c = mysql_fetch_array($ex_sql_estado)) {
                                                                        ?>
                                                                        <option value="<?php echo $row_clientes_c['est_id'] ?>"><?php echo $row_clientes_c['est_nome']; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        
                                                        $id_cidade = $linha_edit_cliente['id_cidade'];
                                                        $sql_cidadese = "SELECT * FROM cidade WHERE cid_id = $id_cidade";
                                                        $sql_executa_cidadese = mysql_query($sql_cidadese)or die(mysql_error());
                                                        $row_cidadee = mysql_fetch_array($sql_executa_cidadese);
                                                        
                                                        
                                                        
                                                        $sql_cidade_c = "SELECT * FROM cidade";
                                                        $executa_sql_cidade_c = mysql_query($sql_cidade_c)or die(mysql_error());
                                                        ?>

                                                        <div class="form-group stylish-input">
                                                            <label for="inputState" class="col-sm-4 col-lg-4 control-label required">CIDADE</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <select name="cidades" class="form-control" required="cidades" id="inputCountry">
                                                                    
                                                                    <option value="<?php echo $row_cidadee['cid_id']; ?>"><?php echo $row_cidadee['cid_nome']; ?></option>
                                                                    <?php
                                                                    
                                                                    while ($row_cidade = mysql_fetch_array($executa_sql_cidade_c)) {
                                                                        ?>
                                                                        <option value="<?php echo $row_cidade['cid_id']; ?>"><?php echo $row_cidade['cid_nome']; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <option value="" disabled="disabled">Selecione uma cidade</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group stylish-input">
                                                            <label for="inputCompany" class="col-sm-4 col-lg-4 control-label">senha</label>
                                                            <div class="col-sm-8 col-lg-8">
                                                                <input type="password" value="<?php echo $linha_edit_cliente['senha']; ?>" class="form-control" id="inputCompany" required="senha" name="senha"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space20 clearfix"></div>
                                                <button class="btn btn-primary">SALVAR</button>

                                                <?php
                                                if (isset($_GET['resposta'])) {
                                                    if ($_GET['resposta'] == 'certo') {
                                                        ?>
                                                        <div class="sucesso">CLIENTE CADASTRADO COM SUCESSO!</div>
                                                        <?php
                                                    } else if ($_GET['resposta'] == 'erro') {
                                                        ?>
                                                        <div class="error">ERRO AO CADASTRAR CLIENTE</div>
                                                        <?php
                                                    }
                                                }
                                                ?>


                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </section>
                        <div class="space20 clearfix"></div>
                    </div>
                </div>
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