<?php include './conections/config.php'; ?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>FERGEL :: Altera&ccedil;&atilde;o de obra</title>
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
            </header><!-- // SITE HEADER -->


            <!-- BREADCRUMB -->
            <div class="breadcrumb-container">
                <div class="container">
                    <div class="relative">
                        <ul class="bc unstyled clearfix">
                            <li>ADMINISTRA&Ccedil;&Atilde;O </li>
                            <li class="active">Incluir dados</li>
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

                                <?php
                                if (isset($_GET['r'])) {

                                    if ($_GET['r'] == 'certo') {

                                        echo "REGISTRO ALTERADO COM SUCESSO!";
                                    } else if ($_GET['r'] == 'erro') {

                                        echo "ERRO AO ALTERAR REGISTRO";
                                    }
                                }
                                ?>

                                <?php
                                $idobra = $_GET['id'];
                                $id_cliente = $_GET['idc'];

                                $sql_obra = "SELECT *, obra.id_clientes as obc FROM obra INNER JOIN clientes "
                                        . "ON obra.id_clientes = clientes.id_clientes WHERE id_obra = $idobra";

                                $executa_sql_obra = mysql_query($sql_obra)or die(mysql_error());
                                $row_obra_edit = mysql_fetch_array($executa_sql_obra);
                                ?>



                                <form method="POST" action="php/edit_obra.php?id=<?php echo $_GET['id']; ?>&cliente=<?php echo $_GET['cliente']; ?>&idc=<?php echo $_GET['idc']; ?>" enctype="multipart/form-data">

                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
                                                    <strong style="color: #BE1E2D;">1º PASSO: </strong>ALTERACAO DE OBRA DE: <strong style="color: #BE1E2D;"><?php echo $row_obra_edit['razao_social']; ?></strong>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="checkout-collapse1" class="panel-collapse collapse in">

                                            <div class="panel-body">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6">

                                                        <fieldset>
                                                            <div class="inner">

                                                                <div class="form-group stylish-input">
                                                                    <div class="col-sm-8 col-lg-8" style="padding-left:1px;">
<?php
$sql_seleciona_clientes = "SELECT * FROM clientes WHERE status = 2 AND id_clientes_cadastro = $id_cliente";
$executa_sql_seleciona = mysql_query($sql_seleciona_clientes)or die(mysql_error());
?>
                                                                        <select required="required" name="cliente" class="form-control" id="inputState">
                                                                            <option value="<?php echo $row_obra_edit['obc']; ?>"><?php echo $row_obra_edit['razao_social'] ?></option>
                                                                            <option value="">SELECIONE O CLIENTE</option>
                                                                        <?php while ($linha_clientes_add = mysql_fetch_array($executa_sql_seleciona)) {
                                                                            ?>
                                                                                <option value="<?php echo $linha_clientes_add['id_clientes']; ?>"><?php echo $linha_clientes_add['razao_social']; ?></option>
                                                                            <?php }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div> <!-- // "form-group stylish-input" -->

                                                                <!-- espaco --><div class="space20 clearfix"></div><!-- espaco -->

                                                                <div class="form-account">
                                                                    <p style="font-weight:600;">Situa&ccedil;&atilde;o da obra</p>
<?php if ($row_obra_edit['situacao'] == 1) {
    ?>
                                                                        <div class="radio">
                                                                            <input name="situacao" value="1" type="radio" name="customer" id="radio-register" class="prettyCheckable" checked="checked" data-label="em andamento"/>
                                                                        </div>

                                                                        <div class="radio">
                                                                            <input name="situacao" value="2" type="radio" name="customer" id="radio-guest" class="prettyCheckable" data-label="concluída" />
                                                                        </div>
    <?php
} else if ($row_obra_edit['situacao'] == 2) {
    ?>
                                                                        <div class="radio">
                                                                            <input name="situacao" value="1" type="radio" name="customer" id="radio-register" class="prettyCheckable"  data-label="em andamento"/>
                                                                        </div>

                                                                        <div class="radio">
                                                                            <input name="situacao" value="2" type="radio" name="customer" id="radio-guest" class="prettyCheckable" checked="checked" data-label="conclu�da" />
                                                                        </div>
    <?php
}
?>
                                                                </div> <!-- // form-accont -->

                                                                <!-- espaco --><div class="space20 clearfix"></div><!-- espaco -->

                                                                <div class="form-group stylish-input">
                                                                    <label for="inputEmail" class="col-xs-12 col-sm-3 control-label">endereço</label>
                                                                    <div class="col-lg-7">
                                                                        <input name="endereco" value="<?php echo $row_obra_edit['endereco_obra']; ?>" type="text" class="form-control" id="inputEmail">
                                                                    </div>
                                                                </div> <!-- // form-group stylish-input" -->

                                                            </div>  <!-- // INNER -->
                                                        </fieldset>

                                                    </div><!-- // "col-xs-12 col-sm-6" -->

                                                    <!-- espaco --><div class="space40 visible-xs"></div><!-- espa�o -->

                                                    <div class="col-xs-12 col-sm-6">

                                                        <fieldset>

                                                            <div class="inner">

                                                                <div class="form-group stylish-input">
                                                                    <label for="inputEmail" class="col-xs-12 col-sm-3 control-label">obra</label>
                                                                    <div class="col-lg-7">
                                                                        <input name="obrac" value="<?php echo $row_obra_edit['obra']; ?>" type="text" class="form-control" id="inputEmail">
                                                                    </div>
                                                                </div>

                                                                <!-- espaco --><div class="space20 clearfix" style="margin-top: 15px;"> <!-- espaco -->

                                                                    <p style="font-weight:600;">previs&atilde;o de t&eacute;rmino</p></div>

                                                                <div class="form-group stylish-input" style="margin-top:7px;">
                                                                    <label for="inputEmail" class="col-xs-12 col-sm-3 control-label required">inicio</label>
                                                                    <div class="col-lg-7" style="margin-top:7px;">
                                                                        <input required  name="inicio" type="text" value="<?php echo $row_obra_edit['prev_inicio']; ?>" class="form-control" id="inputEmail">
                                                                    </div>
                                                                </div>

                                                                <!-- espaco --><div class="space20 clearfix"></div> <!-- espaco -->

                                                                <div class="form-group stylish-input">
                                                                    <label for="inputEmail" class="col-xs-12 col-sm-3 control-label required">t&eacute;rmino</label>
                                                                    <div class="col-lg-7">
                                                                        <input required name="termino" type="text" value="<?php echo $row_obra_edit['prev_final'] ?>" class="form-control" id="inputEmail">
                                                                    </div>
                                                                </div>

                                                                <!-- espa�o --><div class="space20 clearfix"></div><!-- espa�o -->

                                                                <div class="form-group stylish-input">
                                                                    <label for="inputEmail" class="col-xs-12 col-sm-3 control-label">respons&aacute;vel</label>
                                                                    <div class="col-lg-7">
                                                                        <input name="responsavel" value="<?php echo $row_obra_edit['responsavel']; ?>" type="text" class="form-control" id="inputEmail">
                                                                    </div>
                                                                </div>

                                                            </div><!-- // inner -->

                                                        </fieldset>

                                                    </div><!-- // "col-xs-12 col-sm-6" -->   

                                                </div> <!-- // row -->

                                                <!-- espa�o --><div class="space20 clearfix"></div><!-- espa�o -->

                                            </div> <!-- // "panel-body" -->

                                        </div> <!-- // "checkout-collapse1" class="panel-collapse collapse in" -->
                                    </div> <!-- // "panel panel-default" -->

                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
                                                    <strong style="color: #BE1E2D;">2º PASSO: </strong> avisos e observa&ccedil;&otilde;es
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="checkout-collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-xs-11 col-sm-11 col-md-5" style="margin-left:30px;">
                                                        <div class="form-group stylish-input">
                                                            <label for="contactMSG" >AVISOS!</label>
                                                            <textarea name="avisos" id="contactMSG" class="form-control" name="message" style="height: 178px;" data-validate=".{2,400}$"><?php echo $row_obra_edit['avisos']; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-11 col-sm-11 col-md-6" style="margin-left:10px; font-family: Raleway;">
                                                        <div class="form-group stylish-input">
                                                            <label for="contactMSG">observa&ccedil;&otilde;es</label>
                                                            <textarea name="observacoes" id="contactMSG" class="form-control" name="message" style="height: 178px;" data-validate=".{2,400}$" ><?php echo $row_obra_edit['obs']; ?></textarea>
                                                        </div>
                                                    </div>

                                                </div> <!-- // row -->

                                                <!-- espa�o --><div class="space20 clearfix"></div><!-- espa�o -->

                                            </div><!-- // panel-body -->
                                        </div> <!-- // "checkout-collapse2" class="panel-collapse collapse" -->
                                    </div> <!-- // panel panel-default" -->

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3">
                                                    <strong style="color: #BE1E2D;">3º PASSO: </strong> GALERIA DE FOTOS
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="checkout-collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">


                                                <!-- PRODUCT LAYOUT -->           
                                                <section class="products-wrapper" style="margin-top:80px;">

                                                    <div class="row">
                                                        <div class="form-group stylish-input">
                                                            <label for="contactMSG"><b>foto 01</b></label>
                                                            <input name="foto1" type="file" name="fotopng" class="default" /><br/>
                                                            <label for="inputEmail" class="col-xs-6 col-sm-1 control-label">legenda</label>
                                                            <div class="col-lg-7">
                                                                <input name="legenda" type="text" class="form-control" id="inputEmail">
                                                            </div>
                                                        </div>

                                                        <br/>
                                                        <hr/>
                                                    </div>

<?php
$obrasf = $_GET['id'];
$select_fotos_obra = "SELECT * FROM fotos WHERE id_obra = $obrasf";
$executa_fotos_obra = mysql_query($select_fotos_obra)or die(mysql_error());
?>

                                                    <?php
                                                    while ($row_fotoso = mysql_fetch_array($executa_fotos_obra)) {
                                                        ?>
                                                        <!-- foto -->
                                                        <div class="products-layout">
                                                            <div class="product" style="max-width:247px;">
                                                                <div class="entry-media-fotos">
                                                                    <img data-src="php/fotos/<?php echo $row_fotoso['foto']; ?>" alt="" class="lazyLoad thumb" />
                                                                    <div class="hover">
                                                                        <ul class="icons unstyled">
                                                                            <li>
                                                                                <a href="php/fotos/<?php echo $row_fotoso['foto']; ?>" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="php/deletar_foto.php?id=<?php echo $row_fotoso['idfotos']; ?>&ido=<?php echo $_GET['id']; ?>" class="circle" title="deletar foto" style="font-size:25px; font-weight:900;">x</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="entry-main">
                                                                    <h5 class="entry-title">
    <?php echo $row_fotoso['nome']; ?>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- FIM foto -->

<?php } ?>

                                                </section>
                                                <!-- // PRODUCT LAYOUT -->          
                                            </div>
                                        </div>
                                    </div> <!-- // panel panel-default" -->

                                    <div id="arquivos" class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse4">
                                                    <strong style="color: #BE1E2D;">4º PASSO: </strong> ARQUIVOS PARA DOWNLOAD
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="checkout-collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">


                                                <!-- PRODUCT LAYOUT -->           
                                                <section class="products-wrapper" style="margin-top:80px; font-family: Raleway;">

                                                    <div class="row">
                                                        <div class="form-group stylish-input">
                                                            <label for="contactMSG"><b>Arquivo</b></label>
                                                            <input name="arquivo" type="file"  class="default" />
                                                            <label for="inputEmail" class="col-xs-12 col-sm-3 control-label">TÍTULO e FORMATO</label>
                                                            <div class="col-lg-7">
                                                                <input name="nomearquivo" type="text" class="form-control" id="inputEmail">
                                                            </div>
                                                        </div>


                                                        <br/>
                                                        <hr/>

                                                    </div>

                                                    <p> Clique no nome do arquivo para fazer o download</p>

<?php
$sql_arquivos = "SELECT * FROM arquivos WHERE id_obra = $obrasf";
$executa_sql_arquivos = mysql_query($sql_arquivos)or die(mysql_error());

while ($row_arquivos = mysql_fetch_array($executa_sql_arquivos)) {
    ?>
                                                        <!-- ARQUIVO -->
                                                        <div class="products-layout">
                                                            <div class="product" style="max-width:247px;">
                                                                <div class="entry-main">
                                                                    <h5 class="entry-title">
                                                                        <a href="php/fotos/<?php echo $row_arquivos['arquivo']; ?>" style="font-size:12px; font-weight:600;"><?php echo $row_arquivos['nome']; ?></a>
                                                                        <hr/><a style="font-size:9px;"href="php/excluir_arquivo.php?arquivo=<?php echo $row_arquivos['id_arquivos']; ?>&idobra=<?php echo $_GET['id'] ?>"><img style="margin-right:5px;"src="img/ico-delete.png" width="15">excuir</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>

    <?php
}
?>


                                                    <!-- FIM ARQUIVO -->
                                                    <div class="space20 clearfix"></div>  <!-- espaco --> 

                                                </section>



                                                <div class="space20 clearfix"></div>


                                            </div>
                                        </div>
                                    </div> <!-- // panel panel-default" -->

                                    <button type="submit" class="btn btn-warning">SALVAR</button>
                                    <!-- espa�o --><div class="space20 clearfix"></div><!-- espa�o -->
                                </form>

                            </div> <!-- // "panel-group checkout" id="checkout-collapse" -->

                        </section>
                    </div> <!-- // row -->
                </div> <!-- container -->                                                            
            </main><!-- // SITE MAIN CONTENT -->

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