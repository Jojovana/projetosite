


<section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeria</h2>
          <p>imagens <span>?????</span></p>
        </div>


        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">

<?php

$listarcliente = listarTodosRegistros('*', 'galeria', 'A');
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
} else {
  foreach($listarcliente as $itemRetornoLista) {
    $idgaleria = $itemRetornoLista->idgaleria;
    $img = $itemRetornoLista->img;
    $cadastro = $itemRetornoLista->cadastro;
    $alteracao = $itemRetornoLista->alteracao;
    $ativo = $itemRetornoLista->ativo;
 

?>          
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/<?php echo $img?>"><img src="assets/img/gallery/<?php echo $img?>" class="img-fluid" alt=""></a></div>
            <?php
 }
}
?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
    

  