<?php 

require_once('coneccao.php');

if(isset($_POST['submit']))
{
   print_r($_POST['nome']);
   // print_r($_POST['E-mail']);
   //print_r($_POST['mensagem']);

   include_once('coneccao.php');
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $mensagem = $_POST['mensagem'];

   $result = mysqli_query( $conexao, "INSERT INTO comentario(nome,Email,comentario) values($nome,$email,$mensagem)");
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css.css">
    <title>Projecto</title>

    <style> 
    .txt{
    background-color: white;
    width: 100%;
    height: 100vh;
}

.frame{
    width: 100%;
    height:100vh;
}
.sidebar{
    background-color:dark;
}


    </style>
</head>
<body>
<div class="container">
    <div class="burguer">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
        <div class="line" id="line3"></div>
        <span>Fechar</span>
    </div>
       <header>
           <div class="img-bg">
               <img src="IMG/4.jpg" alt="">
           </div>

           <div class="banner">
            <h1>Quer conhecer a  província  de Maputo</h1>
            <p>Nos seremos o seu Guia </p>
           <a href="#saiba"> <button>Saiba mais</button></a>
                   
        </div>
     
       </header>
     <div class="sidebar">
         <nav>
             <ul class="menu">
                 <li class="menu-iten"><a href="#" class="menu-item">Home</a></li>               
                 <li class="menu-iten"><a href="#saiba" class="menu-item">Sobre Nos</a></li>
                 <li class="menu-iten"><a href="#hotel" class="menu-item">Hoteis</a></li>
                 <li class="menu-iten"><a href="#reserva" class="menu-item">Reserva</a></li>
                 <li class="menu-iten"><a href="#contacto" class="menu-item">Contacto</a></li>
                 <li class="menu-iten"><a href="hotel.html" class="menu-item">Mais hoteis</a></li>
             </ul>
         </nav>
         <div class="social-midia">
            <a href="https://web.facebook.com/"><i class="fa-brands fa-facebook-f"></i></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></i></a>
        </div>
     </div>
     <section class="saiba-mais" id="saiba">
        <div class="sessao-header">
            <h1>Sobre Nós</h1>
        </div>
        <div class="posit">
        <div class="saiba-left">
            <p> Sinta-se como uma celebridade com o serviço de topo dos nossos hoteis
                
                Com uma piscina exterior e um restaurante, localizado em Maputo os nossos hoteis disponibilizam acesso Wi-Fi gratuito.
                
                Todos os quartos têm uma televisão, ar condicionado e um mini-bar, Também dispõem de uma chaleira eléctrica.
                
                
            </p>
      
        </div>
        <div class="saiba-right">
              <div class="slide">
              <ul>
                  <li> <img src="img/rece.jpg"> </li>
                  <li><img src="img/piscina.jpg"></li>
                  <li><img src="img/file.jpg"></li>
              </ul>
            </div>

        </div>
    </div>

    </section>
     <div class="sessao-header">
        <h1>Hoteis</h1>
    </div>
     <section class="project" id="hotel">
        
         <div class="hoteis">
             <div class="card">
                 <div class="card-img">
                     <img src="IMG/grand maputo.jpg"alt="Hotel polana">
                 </div>
                 <div class="card-info">
                     <h2>Polana-serena</h2>
                     <h3>Nos seremos o seu Guia</h3>
                     <p>O melhor que ha</p>
                   <a href="https://www.booking.com/hotel/mz/polana-serena.pt-pt.html?aid=311098&label=polana-serena-dOzCfU3X6MqDKn%2AAbkXb2wS480032429194%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atiaud-297601666515%3Akwd-122780936%3Alp9073713%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH0l-9IW33KjYg&sid=543e617c042121233babd358ec7a1503&dest_id=-319029;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1655939010;srpvid=3b67a2201e610003;type=total;ucfs=1&#hotelTmpl">  <button class="btn">Saiba mais</button></a>
                 </div>
             </div>
             <div class="card">
                 <div class="card-img">
                    <img src="IMG/4.jpg" alt="Hotel Gloria">

                 </div>
                 <div class="card-info">
                     <h2>Radisson Blue</h2>
                     <h3>Nos seremos o seu Guia</h3>
                     <p>O melhor que ha</p>
                   <a href="https://www.luxuryhotelsguides.com/?hotelid=1199372&gclid=CjwKCAjw-8qVBhANEiwAfjXLrhHJboYcRyZA3T8RMDHPDordjkbtWQeXhe_aMR30XJ7KS0xm_h_fsxoC9GIQAvD_BwE">  <button class="btn">Saiba mais</button></a>
                 </div>
             </div>
             <div class="card">
                 <div class="card-img">
                     <img src="IMG/hotel polana.webp" alt="Hotel Radison">
                 </div>
                 <div class="card-info">
                     <h2>Hotel Gloria</h2>
                     <h3>Nos seremos o seu Guia</h3>
                     <p>O melhor que ha</p>
                    <a href="https://www.booking.com/hotel/de/gloria.pt.html?aid=311098;label=hotel-de-68431-pt-h8JYEe6gtZ4lHwjJnFTIMgS442571202175:pl:ta:p1:p2:ac:ap:neg:fi:tiaud-297601666515:kwd-185287336:lp9073713:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YU5pXiVhsEsYvo03y-EPNDM;ws=&gclid=CjwKCAjw-8qVBhANEiwAfjXLrpmzzDM980-CddMB_Mth5343C243eqewlS3sMOqH0EOtMvvkCyudahoCyuMQAvD_BwE"> <button class="btn" >Saiba mais</button></a>
                 </div>
             </div>
         </div>
        

     </section>
     <div class="btn-bug">
     <a href="hotel.html"><button class="btn bug" >mais hoteis</button></a>
    </div>
    <section class="orcamento" id="reserva">
        <div class="orcamento-wraper">
            <h1>Faça a sua reserva</h1>
            <form >
                <label for="quarto">Numero de Quartos</label>
                <input type="number" min="1" name="quarto" id="dias">
                <label for="data">Data da Hospedagem</label>
                <input type="date" name="data" id="ps">
                <label>Aluguer de carro</label>
                <div class="group-layout">
                <div>
                    <input type="radio" name="carro" id="layout-sim">
                    <label for="layout-sim"> preciso de um carro</label>
                </div>
                <div>
                   <input type="radio" name="carro" id="layout-nao">
                   <label for="layout-nao"> Nao  preciso </label>
               </div>
                </div>
                <label for="prazo">Tempo de hospedagem</label>
                <input type="range" name="prazo" id="prazo" min="1" max="10">  
                <label id="preco">Mts: 0,00</label> 
                <button type="submit" class="btn btn-orcamento">enviar</button>
            </form>
        </div>
    </section>
     <section class="seccao-contacto" id="contacto">
         <div class="contacto-wraper">
             <div class="contacto-left">
             

             </div>
             <div class="contacto-right">
                 <h1>contacto</h1>
                 <form method="POST" action="gravar.php">
                     <div class="input-group">
                         <input type="text" class="field" id="nome" name="nome"></input-field>
                         <label for="nome" class="field-label">Nome</label>
                     </div>
                     <div class="input-group">
                         <input type="text" class="field" id="email" name="email"></input-field>
                         <label for="email" class="field-label">E-mail</label>
                     </div>
                     <div class="input-group">
                         <textarea class="field" name="comentario" id="comentario"></textarea>
                         <label for="comentario" class="field-label">Mensagem</label>
                     </div>
                     <button type="submit" name="enviar" class="btn btn-submit"> enviar</button>
                

                 </form>
          

             </div>
         </div>
      
     
         
     </section>
     


     <footer>
         <div class="footer-content">
             <p>
                 Projecto final /2022, Heski Adilson Fernando
             </p>
             <div class="social-list">
                 <ul>
                     <li><a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                     <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 </ul>
             </div>
         </div>
     </footer>
     <a href="" id="link-topo"> 
         <i class="fas fa-arrow-up"></i>
     </a>

</div>
    
</body>
<script src="JAVASCRIPT/script.js">
</script>
</html> 