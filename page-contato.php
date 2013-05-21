<?php
 /*
 Template name: contato
 */
 ?>

<?php get_header(); ?>
	
		<h1 id="ancor" class="hCont"><?php the_title();?></h1>
    
		<h2 class="h2Cont">Fale Conosco</h2>
            
            <p>Aqui você encontra um espaço exclusivo para enviar sugestões e esclarecer todas as suas dúvidas sobre os serviços da TF Importação. Basta preencher o formulário abaixo informando seus dados que em breve a equipe da TF Importação entrará em contato.</p>
            
            <section id="formulario">
            	<form action="<?php bloginfo("url"); ?>/resposta-contato" method="post">
                	<ul>
                    	<li class="nome">
                        	<label>* Nome:</label>
                            <input type="text" name="nome" />
                        </li>
                        
                        <li class="email">
                        	<label>* E-mail:</label>
                            <input type="text" name="emailcliente" />
                        </li>
                        
                        <li class="fone">
                        	<label>* Telefone:</label>
                            <input type="text" name="ddd" class="ddd" maxlength="2" />
                            <input type="text" name="num" class="num" maxlength="9" />
                        </li>
                        
                        <li class="msg">
                        	<label>Mensagem:</label>
                            <textarea name="msg" cols="50" rows="5"></textarea>
                        </li>
                        
                        <li class="enviar">
                        	<span>* Campos de preenchimento obrigatório</span>
                        	<input type="image" src="<?php bloginfo("template_directory"); ?>/img/form/btEnviar.jpg" alt="Enviar" name="Enviar" />
                        </li>
                    </ul>
                </form>
            </section>
            
            <section id="local">
            	<h3>Localização</h3>
                
                <address><strong>Rua José da Rocha Mendes Filho, 451<br />
                São Paulo - SP - CEP: 04153-090</strong></address>
                
                <p class="mapa"><a href="#TB_googleMap?height=400&amp;width=600&amp;lat=-23.627744&amp;lng=-46.623724&amp;zoom=16" title="Mapa de Localização" class="thickbox">Ampliar mapa</a></p>
                
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