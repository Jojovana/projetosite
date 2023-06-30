<?php
$listarcliente = listarTodosRegistros('*', 'cards', 'A');

if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-5 bg-danger text-white">Nenhum registro cadastrado no banco de dados!</h6>';
} else {
  foreach ($listarcliente as $itemRetornoLista) {
    $icone = $itemRetornoLista->icone;
    if ($icone == '') {
      $idcards = $itemRetornoLista->idcards;
      $titulo = $itemRetornoLista->titulo;
      $descricao = $itemRetornoLista->descricao;
      $link = $itemRetornoLista->link;
    }
  }
}

?>
<section id="why-us" class="why-us section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box">
          <h3>
            <?php echo $titulo ?>
          </h3>
          <p>
            <?php echo $descricao ?>
          </p>
          <div class="text-center">
            <a href="<?php echo $link?>" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div><!-- End Why Box -->

      <div class="col-lg-8 d-flex align-items-center">
        <div class="row gy-4">

          <?php

          foreach ($listarcliente as $itemRetornoLista) {
            $icone = $itemRetornoLista->icone;
            if ($icone != '') {
              $idcards = $itemRetornoLista->idcards;
              $titulo = $itemRetornoLista->titulo;
              $descricao = $itemRetornoLista->descricao;
              $link = $itemRetornoLista->link;

              ?>



              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-sign-stop-fill"></i>
                  <h4>
                    <?php echo $titulo ?>
                  </h4>
                  <p>
                    <?php echo $descricao ?>
                  </p>
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