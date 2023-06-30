<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>...Agora...</h2>
          <p>Comentario dos nossos <span>Querides</span></p>
        </div>




        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

  <?php

$listarcliente = listarTodosRegistros('*', 'avaliacao', 'A');
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
} else {
  foreach($listarcliente as $itemRetornoLista) {
    $idavaliacao = $itemRetornoLista->idavaliacao;
    $img = $itemRetornoLista->img;
    $comentario = $itemRetornoLista->comentario;
    $nome = $itemRetornoLista->nome;
    $profissao = $itemRetornoLista->profissao;
  
?>


            <div class="swiper-slide">

              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       <?php echo $comentario?>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3> <?php echo $nome?></h3>
                      <h4><?php echo $profissao?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/<?php echo $img?>" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> 
            
            
<?php
}
}

?>
 
 

            <!-- End testimonial item -->

<!-- ?php
           foreach($listarcliente as $itemRetornoLista) {
            $idavaliacao = $itemRetornoLista->idavaliacao;
            $img = $itemRetornoLista->img;
            $comentario = $itemRetornoLista->comentario;
            $nome = $itemRetornoLista->nome;
            $profissao = $itemRetornoLista->profissao;
          
?>


           
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        ?php echo $comentario?>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3> ?php echo $nome?></h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div>

?php
}

?>-->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
