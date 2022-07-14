<!DOCTYPE html>
<html lang="pt-br">
<head>
    
     <?php include('meta_tags.php'); ?>
        
</head>
<body>

<?php include('header.php'); ?>

<main class="internal faleConosco">
     <div class="container">

          <section class="__titleMain">
               <h1>FALE CONOSCO</h1>
          </section><!--__titleMain-->

          <div class="__subTitle">
               <h2>Entre em contato</h2>
               <p>Converse com nosso departamento de vendas, ou tire <br> suas dúvidas com nossos especialistas.</p>
          </div><!-- __subTitle -->

     </div><!--container-->

     <section class="formulario">
          <div class="container">
               <div class="__display">
                    <div class="__form inputs">
                         <form action="">
                              <div>
                                   <label for="name">Nome</label>
                                   <input type="text" name="name" placeholder="Seu nome completo">
                              </div>

                              <div>
                                   <label for="empresa">Empresa</label>
                                   <input type="text" name="empresa" placeholder="Qual a sua empresa?">
                              </div>

                              <div>
                                   <label for="email">E-mail</label>
                                   <input type="email" name="email" placeholder="Digite seu e-mail">
                              </div>
                              
                              <div>
                                   <label for="telefone">Telefone</label>
                                   <input type="phone" name="telefone"  placeholder="(_ _) _ _ _ _ _ _ _ - _ _ _ _ _ _ _ _ ">
                              </div>
                              
                              <div>
                                   <label for="assunto">Assunto</label>
                                   <input type="text" name="assunto" placeholder="Como podemos lhe ajudar?">
                              </div>
                              
                              <div>
                                   <label for="mensagem">Mensagem</label>
                                   <textarea name="mensagem" placeholder="Diga pra gente com mais detalhes como"  style="width: 100%; height:281px; border: #03325b solid 1px;" required=""></textarea>
                              </div>

                              <div class="btn --type_submit">
                                   <input type="submit" value="ENVIAR">
                              </div>
                         </form>
                    </div><!-- __form -->
                    <div class="__information">
                         <div class="__item">
                              <div class="icon">
                                   <img src="assets/img/whatsapp.png" alt="WhatsApp">
                              </div>
                              <div class="txt">
                                   <p>Clique aqui e chame a gente pelo WhatsApp: <br> <a href="tel:+55 (49) 98429-2152">(49) 98429-2152</a></p>
                              </div>
                         </div><!-- __item -->

                         <div class="__item">                           
                              <div class="icon">
                                   <img src="assets/img/email.png" alt="E-mail">
                              </div>
                              <div class="txt">
                                   <p>Ou pelo nosso E-mail <a href="mailto:contato@lrseg.com.br">contato@lrseg.com.br</a></p>
                              </div>
                         </div><!-- __item -->

                         <div class="__item">
                              <div class="icon">
                                   <img src="assets/img/location.png" alt="Localização">
                              </div>
                              <div class="txt">
                                   <p><span>Ou faça-nos uma visita</span> <a>Rua Antônio Adolpho Maresch, 68 Bairro Flor da Serra Polo Inovale Vale do Rio do Peixe Joaçaba – SC | Cep: 89600-000</a></p>
                              </div>
                         </div><!-- __item -->

                         <div class="__social">
                              <span>E não se esqueça de seguir a gente nas redes sociais</span>
                              <ul>
                                   <li><a href="#"><img src="assets/img/social/iconInsta.png" alt="Instagram"></a></li>
                                   <li><a href="#"><img src="assets/img/social/iconInsta.png" alt="Facebook"></a></li><!-- ALTERAR ICON -->
                                   <li><a href="#"><img src="assets/img/social/iconLinkedin.png" alt="Linkedin"></a></li>
                              </ul>
                         </div>
                    </div><!-- __information -->
               </div><!-- __display -->
          </div>
     </section><!-- formulario -->

     <section class="maps">
          <div class="container">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.631621215434!2d-51.522340084949704!3d-27.167878383018397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3f1fe911ba315%3A0x3c39ffc86d9708e4!2sCentro%20de%20Inova%C3%A7%C3%A3o%20Vale%20do%20Rio%20do%20Peixe%20-%20INOVALE!5e0!3m2!1spt-BR!2sbr!4v1657739540082!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0; border-radius: 20px; margin-top: 40px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- container -->
     </section><!-- maps -->

</main><!--internal-->


<?php include('footer.php'); ?>
