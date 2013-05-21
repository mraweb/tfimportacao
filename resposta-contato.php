<?php
	$recipient = "TF Importação<marcelo@mraweb.com.br> ";
	//$recipient = "TF Importação<marcelo@mraweb.com.br> ";
	$subject = "Formulário enviado através do site TF IMPORTAÇÃO";
	
	$message = "Formulário enviado através do site TF IMPORTAÇÃO \n";
	$message .= "\n";
	$message .= "Nome: " . $_POST["nome"] . "\n";
	$message .= "E-mail: " . $_POST["emailcliente"] . "\n";
	$message .= "Telefone: (" . $_POST["ddd"] . ") " . $_POST["num"] . "\n";
	$message .= "Mensagem: " . $_POST["msg"] . "\n";
	
	$headers = "From: <" . $_POST["emailcliente"] . ">\n";
	//$headers = "Bcc: <erica@tfimportacao.com.br>\n";
	//$headers = "Bcc: <marcelo@mraweb.com.br>\n";
	$headers .= "Content-Type: text/plain; charset=utf-8";
	
	mail($recipient, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />

<meta name="description" content="A TF é uma empresa que atua no ramo de ferramentas elétricas oferecendo uma completa linha de rotores, bobinas, acessórios e máquinas." />

<meta name="keywords" content="bosch, makita, dewalt, metabo, peças de reposição" />

<title>Contato | TF - Importação e Comércio</title>

<link rel="stylesheet" href="css/screen.css" type="text/css" />
<script type="text/javascript" src="js/html5-ie.js"></script>
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("a[rel=external]").attr('target','_blank');
});
</script>

<!-- MAPA -->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAuO920ygtW9XCqz9M1t2vvBT4vnLca_ZIeBjQx3O5EBCJHYRApxTdkF-G3J-iZjvZhPNgHdC48oaYBA" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/thickbox.css"/>
<script type="text/javascript" src="js/thickbox.js"></script>

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

<body class="internas">

<div class="bgInt">
    <section id="main">
        <header id="tophome">
            <p class="logo"><a href="/" title="TF - Importação e Comércio"><img src="img/tf_importacao.png" alt="TF - Importação e Comércio" /></a></p>
            
            <a href="#ancor" title="Ir para o conteúdo" class="acessibilidade">Ir para o conteúdo</a>
            
            <p class="msn"><a href="mailto:tfimportacao@hotmail.com" title="tfimportacao@hotmail.com">tfimportacao@hotmail.com</a></p>
            
            <p class="skype"><a href="skype:tf_imp?call" title="tf_imp">tf_imp</a></p>
            
            <nav>
                <ul>
                    <li><a href="/" title="Home" class="btHome">Home</a></li>
                  <li><a href="empresa.html" title="Empresa" class="btEmpr">Empresa</a></li>
                  <li><a href="produtos.html" title="Produtos" class="btProd">Produtos</a></li>
                  <li><a href="contato.html" title="Contato" class="btCont ativo4">Contato</a></li>
              </ul>
            </nav>
            
            <p class="fone">11 5073-2625 / 11 4304-3045</p>
            
        </header><!-- FINAL HEADER -->
        
        <section id="content">
      		<h1 id="ancor" class="hCont">Contato</h1>
			<h2 class="h2Cont">Fale Conosco</h2>
            
            <p>Aqui você encontra um espaço exclusivo para enviar sugestões e esclarecer todas as suas dúvidas sobre os serviços da TF Importação. Basta preencher o formulário abaixo informando seus dados que em breve a equipe da TF Importação entrará em contato.</p>
            
            <section id="formulario">
            	<p><strong>Obrigado, sua mensagem foi enviada com sucesso.</strong></p>
            </section>
            
            <section id="local">
            	<h3>Localização</h3>
                
                <address><strong>Rua José da Rocha Mendes Filho, 451<br />
                São Paulo - SP - CEP: 04153-090</strong></address>
                
                <p class="mapa"><a href="#TB_googleMap?height=400&amp;width=600&amp;lat=-23.627744&amp;lng=-46.623724&amp;zoom=16" title="Mapa de Localização">Ampliar mapa</a></p>
                
                <section class="foneMail">
                	<h3 class="hFone">Telefone</h3>
                    
                    <p><strong>11 5073-2625 / 11 4304-3045</strong></p>
                </section>
                
                <section class="foneMail">
                	<h3 class="hEmail">E-mail</h3>
                    
                    <p><strong><a href="mailto:thamara@tfimportacao.com.br" title="contato@tfimportacao.com.br" class="link">contato@tfimportacao.com.br</a></strong></p>
                </section>
            </section>

        </section><!-- FINAL CONTENT -->

    </section><!-- FINAL MAIN -->

<div class="bgRoda">
	<footer id="rodaInt">
    
    	<p>* Produtos não originais (Compatíveis) para uso de reposição em máquinas das marcas Bosch – Makita – DeWalt – Metabo.</p>
    
        <div id="right">
            <img src="img/tf_importacao_.png" alt="TF - Importação e Comércio" />
            <address>Rua José da Rocha Mendes Filho, 451 - São Paulo - SP<br />
                    11 5073-2625 / 11 4304-3045  -  <strong><a href="mailto:thamara@tfimportacao.com.br" title="contato@tfimportacao.com.br" class="link">contato@tfimportacao.com.br</a></strong></address>
        </div>
        
        <a href="#main" title="Ir para o topo" class="acessibilidade">Ir para o topo</a>
        
        <p class="wv3"><a href="http://www.wv3.com.br" rel="external" title="WV3 - Criação de Sites">WV3 - Criação de Sites</a></p>
    </footer>
</div>    
</div>
<!-- FINAL BGINT -->

</body>
</html>
