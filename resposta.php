<?php
 /*
 Template name: resposta
 */
 ?>
 <?php
	$recipient = "TF Importação<thamara@tfimportacao.com.br> ";
	//$recipient = "TF Importação<marcelo@mraweb.com.br> ";
	$subject = "Formulário enviado através do site TF IMPORTAÇÃO";
	
	$message = "Formulário enviado através do site TF IMPORTAÇÃO \n";
	$message .= "\n";
	$message .= "Nome: " . $_POST["nome"] . "\n";
	$message .= "E-mail: " . $_POST["emailcliente"] . "\n";
	$message .= "Telefone: (" . $_POST["ddd"] . ") " . $_POST["num"] . "\n";
	$message .= "Mensagem: " . $_POST["msg"] . "\n";
	
	$headers = "From: <" . $_POST["emailcliente"] . ">\n";
	$headers = "Bcc: <erica@tfimportacao.com.br>\n";
	//$headers = "Bcc: <marcelo@mraweb.com.br>\n";
	$headers .= "Content-Type: text/plain; charset=utf-8";
	
	mail($recipient, $subject, $message, $headers);
?>

<?php get_header(); ?>
	
		<h1 id="ancor" class="hCont"><?php the_title();?></h1>
	
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
        
        
<?php get_footer(); ?>