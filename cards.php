<?php

$listarcliente = listarTodosRegistros('*', 'cards', 'A');


?>
  
  

  <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">


      <?php 
        
        if ($listarcliente == 'Vazio') {
          echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
        } else {
          foreach($listarcliente as $itemRetornoLista) {
            $idcards = $itemRetornoLista->ideventos;
            $titulo = $itemRetornoLista->titulo;
            $descricao = $itemRetornoLista->descricao;
            $icone = $itemRetornoLista->$icone;
            $cadastro = $itemRetornoLista->cadastro;
            $alteracao = $itemRetornoLista->alteracao;
            $ativo = $itemRetornoLista->ativo;
        
          
        
        ?>  
  

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3><?php echo $titulo?></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->


              <?php 
          
        }
      }
          
          ?>

            </div>
          </div>

        </div>

      </div>
    </section>

