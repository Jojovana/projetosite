<?php

$listarcliente = listarTodosRegistros('*', 'chefe', 'A');


?>




<section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Streamers</h2>
          <p>Os mais <span>famosos</span> Vagabundos</p>
           <p>da Nova <span>Geração</span></p>
        </div>


        <div class="row gy-4">

        <?php 
        
        if ($listarcliente == 'Vazio') {
          echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
        } else {
          foreach($listarcliente as $itemRetornoLista) {
            $idchefe = $itemRetornoLista->idchefe;
            $nome = $itemRetornoLista->nome;
            $descricao = $itemRetornoLista->descricao;
            $profissao = $itemRetornoLista->profissao;
            $cadastro = $itemRetornoLista->cadastro;
            $alteracao = $itemRetornoLista->alteracao;
            $ativo = $itemRetornoLista->ativo;
            $img = $itemRetornoLista->img;
            $insta =  $itemRetornoLista->insta;
          
        
        ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/<?php echo $img?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $insta?>"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $nome?></h4>
                <span><?php echo $profissao?></span>
                <p><?php echo $descricao?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <?php 
          
        }
      }
          
          ?>

          

        </div>

      </div>
    </section><!-- End Chefs Section -->
