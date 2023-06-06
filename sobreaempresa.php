

<?php

$listarcliente = listarTodosRegistros('*', 'sobrenos', 'A');
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
} else {
  foreach($listarcliente as $itemRetornoLista) {
    $idsobrenos = $itemRetornoLista->idsobrenos;
    $imagem = $itemRetornoLista->imagem;
    $descricao = $itemRetornoLista->descricao;
    $video = $itemRetornoLista->video;
    $cadastro = $itemRetornoLista->cadastro;
    $alteracao = $itemRetornoLista->alteracao;
    $ativo = $itemRetornoLista->ativo;
    $imagem2 = $itemRetornoLista->imagem2;
    $descricao2 = $itemRetornoLista->descricao2;
 }
}  
 
?>

<!--sobre a empresa-->

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sobre Nós</h2>
          <p>Uma Parte contando <span>Sobre Nós</span></p>
        </div>


        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/<?php echo $imagem?>) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Ouça o som</h4>
              <p><a href="<?php echo $video?>" class="">AGORA MESMO</a></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <?php echo $descricao?>
              </p>
              <p class="fst-italic">Alguns dos principais artistas do Rock</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Freddie Mercury.</li>
                <li><i class="bi bi-check2-all"></i> Kurt Cobain.</li>
                <li><i class="bi bi-check2-all"></i> Jimi Hendrix.</li>
              </ul>
              <p>
                <?php echo $descricao2?>
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/<?php echo $imagem2?>" class="img-fluid" alt="">
                <a href="<?php echo $video?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>