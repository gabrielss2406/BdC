<?php
/* Smarty version 3.1.33, created on 2019-10-24 20:31:08
  from 'C:\xampp\htdocs\aulaphp\mvc2\views\cursos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db1edeca48e11_38653075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93da5779f4862c42d4c34efb55d3b7894d91026c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aulaphp\\mvc2\\views\\cursos.html',
      1 => 1571941867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db1edeca48e11_38653075 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>BdC - Cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/aos.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css">
  </head>
  <body>
    
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">B<span>D</span>C</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SOBRE']->value;?>
" class="nav-link">Sobre</a></li>
	          <li class="nav-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CURSOS']->value;?>
" class="nav-link">Cursos</a></li>
	          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PARCEIROS']->value;?>
" class="nav-link">Parceiros</a></li>
	          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_ARTIGOS']->value;?>
" class="nav-link">Artigos</a></li>
	          <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
" class="nav-link">Contato</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cursos <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Cursos e preços</h1>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CAT']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
					<div class="col-lg-2">
						<a class="btn btn-primary text-capitalize"aria-controls="v-pills-<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
" href="?curso=<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
#v-pills-<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cat_nome'];?>
</a></p>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</section>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Tecnologia</th>
						        <th class="bg-dark heading">Horas/aula</th>
						        <th class="bg-black heading">Preço</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUR']->value, 'cu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cu']->value) {
?>
							<div id="v-pills-<?php echo $_smarty_tpl->tpl_vars['cu']->value['cur_id_materia'];?>
">
								<tr class="">
									<td class="car-image"><div class="img" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['cu']->value['cur_imagem_string'];?>
');"></div></td>
								  <td class="product-name">
									  <h3><?php echo $_smarty_tpl->tpl_vars['cu']->value['cur_nome'];?>
</h3>
									  <p class="mb-0 rated">
										  <span>Nota:</span>
										  <span class="ion-ios-star"></span>
										  <span class="ion-ios-star"></span>
										  <span class="ion-ios-star"></span>
										  <span class="ion-ios-star"></span>
										  <span class="ion-ios-star"></span>
									  </p>
								  </td>
								  
								  <td class="price">
									  <p class="btn-custom"><a href="#">Ir ao Curso</a></p>
									  <div class="price-rate">
										  <h3>
											  <span class="num"><?php echo $_smarty_tpl->tpl_vars['cu']->value['cur_descricao'];?>
</span>
										  </h3>
										  <span class="subheading">Certificação disponível</span>
									  </div>
								  </td>
								  
								  <td class="price">
									  <p class="btn-custom"><a href="#">Ir ao Curso</a></p>
									  <div class="price-rate">
										  <h3>
											  <span class="num"><?php echo $_smarty_tpl->tpl_vars['cu']->value['cur_horas_curso'];?>
 horas</span>
										  </h3>
										  <span class="subheading">Sem contar exercicios</span>
								  </div>
								  </td>
  
								  <td class="price">
									  <p class="btn-custom"><a href="#">Ir ao Curso</a></p>
									  <div class="price-rate">
										  <h3>
											  <span class="num"><small class="currency">R$</small>&nbsp;<?php echo $_smarty_tpl->tpl_vars['cu']->value['cur_valor'];?>
</span>
										  </h3>
										  <span class="subheading">Sem usar cupons de desconto!</span>
									  </div>
								  </td>
								</tr><!-- END TR-->
							</div>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</div>
    			</div>
    		</div>
			</div>
		</section>


		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
			  <div class="row mb-5">
				<div class="col-md">
				  <div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Sobre BdC</h2>
					<p>Uma empresa criada de fãs da tecnologia para quem precisa ou quer aprender sobre ela.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
					  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
					  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
					  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					</ul>
				  </div>
				</div>
				<div class="col-md">
				  <div class="ftco-footer-widget mb-4 ml-md-5">
					<h2 class="ftco-heading-2">Informações</h2>
					<ul class="list-unstyled">
					  <li><a href="#" class="py-2 d-block">Sobre</a></li>
					  <li><a href="#" class="py-2 d-block">Services</a></li>
					  <li><a href="#" class="py-2 d-block">Termos e Condições</a></li>
					  <li><a href="#" class="py-2 d-block">Melhores preços</a></li>
					  <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
					</ul>
				  </div>
				</div>
				<div class="col-md">
				   <div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Suporte Especial</h2>
					<ul class="list-unstyled">
					  <li><a href="#" class="py-2 d-block">FAQ</a></li>
					  <li><a href="#" class="py-2 d-block">Opções de Pagamento</a></li>
					  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CURSOS']->value;?>
" class="py-2 d-block">Cursos</a></li>
					  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SOBRE']->value;?>
" class="py-2 d-block">Como funciona</a></li>
					  <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
" class="py-2 d-block">Contato</a></li>
					</ul>
				  </div>
				</div>
				<div class="col-md">
				  <div class="ftco-footer-widget mb-4">
					  <h2 class="ftco-heading-2">Perguntas?</h2>
					  <div class="block-23 mb-3">
						<ul>
						  <li><span class="icon icon-map-marker"></span><span class="text">Fontes Salgadas, Casa Azul, Fortnite Island</span></li>
						  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+55 32 984451415</span></a></li>
						  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">gabrielss2406@gmail.com</span></a></li>
						</ul>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-12 text-center">
	  
				  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			  </div>
			</div>
		  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/aos.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.animateNumber.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/scrollax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/google-map.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
    
  </body>
</html><?php }
}
