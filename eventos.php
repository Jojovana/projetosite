
<?php

$listarcliente = listarTodosRegistros('*', 'eventos', 'A');


?>



<section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>



        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


          
        <?php 
        
        if ($listarcliente == 'Vazio') {
          echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
        } else {
          foreach($listarcliente as $itemRetornoLista) {
          
            $img = $itemRetornoLista->img;
            $titulo = $itemRetornoLista->titulo;
            $descricao = $itemRetornoLista->descricao;
            $preco = $itemRetornoLista->preco;
          
          
        
        ?>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/gallery/<?php echo $img?>)">
              <h3><?php echo $titulo?></h3>
              <div class="price align-self-start">$<?php echo $preco?></div>
              <p class="description">
               <?php echo $descricao?>
              </p>
            </div><!-- End Event item -->



            <?php 
          
        }
      }
          
          ?>



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->
