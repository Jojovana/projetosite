<?php

$listarcliente = listarTodosRegistros('*', 'banner', 'A');
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
} else {
  foreach($listarcliente as $itemRetornoLista) {
    $idbanner = $itemRetornoLista->idbanner;
    $img = $itemRetornoLista->img;
    $titulo = $itemRetornoLista->titulo;
    $descricao = $itemRetornoLista->descricao;
    $video = $itemRetornoLista->video;
    $cadastro = $itemRetornoLista->cadastro;
    $alteracao = $itemRetornoLista->alteracao;
    $ativo = $itemRetornoLista->ativo;
  }
}

?>



<section id="hero" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div
        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        <h2 data-aos="fade-up">
          <?php echo $titulo; ?>
        </h2>
        <p data-aos="fade-up" data-aos-delay="100">
          <?php echo $descricao; ?>
        </p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
          <a href="<?php echo $video; ?>" class="glightbox btn-watch-video d-flex align-items-center"><i
              class="bi bi-play-circle"></i><span>Assista ao video</span></a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img src="<?php echo $img; ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
      </div>
    </div>
  </div>
</section>