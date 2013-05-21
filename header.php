<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />

<title>
	<?php if (is_page(array('empresa', 'produtos', 'induzidos', 'induzidos-bosch', 'induzidos-makita', 'induzidos-dewalt', 'induzidos-metabo', 'bobinas', 'bobinas-bosch', 'bobinas-makita', 'bobinas-dewalt', 'bobinas-metabo', 'maquinas', 'maquinas-ace', 'maquinas-dongcheng', 'outras-maquinas', 'acessorios', 'acessorios-bosch', 'acessorios-makita', 'contato', 'resposta-contato'))){
		the_title(); echo " | TF - Importação e Comércio";}else{
			echo "TF - Importação e Comércio";
		} ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/html5-ie.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.6.min.js"></script>

<!-- LightBox -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.lightbox.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/skin.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lightbox.js"></script>

<script type="text/javascript">
    $(function() {
        $('#mycarousel a, #mycarousel1 a, #mycarousel2 a, #mycarousel3 a, #mycarousel4 a, #mycarousel5 a, #mycarousel6 a, #mycarousel7 a, #mycarousel8 a, #mycarousel9 a, #mycarousel10 a, #mycarousel11 a, #mycarousel12 a, #mycarousel13 a, #mycarousel14 a, #mycarousel15 a, #mycarousel16 a').lightBox();
    });
</script>

<?php if(is_page('contato')){ ?>
<!-- MAPA -->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAuO920ygtW9XCqz9M1t2vvBT4vnLca_ZIeBjQx3O5EBCJHYRApxTdkF-G3J-iZjvZhPNgHdC48oaYBA" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/thickbox.css"/>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/thickbox.js"></script>
<?php } ?>

<script type="text/javascript">
$(document).ready(function(){
	$("a[rel=external]").attr('target','_blank');
});
</script>

<!-- IMAGENS FADEIN -->
<script type="text/javascript">    
	function slideSwitch() {
		var $active = $('#destCenter DIV.active');
	
		if ( $active.length == 0 ) $active = $('#destCenter DIV:last');
		var $next =  $active.next().length ? $active.next()
			: $('#destCenter DIV:first');
	
		$active.addClass('last-active');
	
		$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, function() {
				$active.removeClass('active last-active');
			});
	}
	
	$(function() {
		setInterval( "slideSwitch()", 5000 );
	});
</script>

<!--[if IE 6]>
	<script src="js/DD_belatedPNG.js"></script>
	<script>
	  DD_belatedPNG.fix('#main, #right');
	</script>
<![endif]-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7329691-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<?php if (!is_page(array('empresa', 'produtos', 'induzidos', 'induzidos-bosch', 'induzidos-makita', 'induzidos-dewalt', 'induzidos-metabo', 'bobinas', 'bobinas-bosch', 'bobinas-makita', 'bobinas-dewalt', 'bobinas-metabo', 'maquinas', 'maquinas-ace', 'maquinas-dongcheng', 'outras-maquinas', 'acessorios', 'acessorios-bosch', 'acessorios-makita', 'contato', 'resposta-contato')) ){ ?>
<body class="home">

<div class="bgHome">

<?php }else{ ?>
<body class="internas">

<div class="bgInt">
<?php } ?>

    <section id="main">
        <header id="tophome">
            <?php if(!is_page('empresa')){ ?>
            	<h1><a href="<?php bloginfo('url'); ?>" title="TF - Importação e Comércio">TF - Importação e Comércio</a></h1>
            <?php }else{ ?>
            	<p class="logo"><a href="<?php bloginfo('url'); ?>" title="TF - Importação e Comércio"><img src="<?php bloginfo('template_directory'); ?>/img/tf_importacao.png" alt="TF - Importação e Comércio" /></a></p>
            <?php } ?>
            
            
            
            <a href="#ancor" title="Ir para o conteúdo" class="acessibilidade">Ir para o conteúdo</a>
            
            <p class="msn"><a href="mailto:tfimportacao@hotmail.com" title="tfimportacao@hotmail.com">tfimportacao@hotmail.com</a></p>
            
            <p class="skype"><a href="skype:tf_imp?call" title="tf_imp">tf_imp</a></p>

            <nav>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/" title="Home" class="btHome <?php if (is_home() ) {echo "ativo1";} ?>">Home</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/empresa" title="Empresa" class="btEmpr <?php if (is_page('empresa') ) {echo "ativo2";} ?>">Empresa</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/produtos" title="Produtos" class="btProd <?php if (is_page(array('produtos', 'induzidos', 'induzidos-bosch', 'induzidos-makita', 'induzidos-dewalt', 'induzidos-metabo', 'bobinas', 'bobinas-bosch', 'bobinas-makita', 'bobinas-dewalt', 'bobinas-metabo', 'maquinas', 'maquinas-ace', 'maquinas-dongcheng', 'outras-maquinas', 'acessorios', 'acessorios-bosch', 'acessorios-makita')) ) {echo "ativo3";} ?>">Produtos</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/contato" title="Contato" class="btCont <?php if (is_page('contato', 'resposta-contato') ) {echo "ativo4";} ?>">Contato</a></li>
                </ul>
            </nav>
            
            <p class="fone">11 5073-2625 / 11 4304-3045</p>
        </header><!-- FINAL HEADER -->
        
        <section id="content">

