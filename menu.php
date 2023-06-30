<?php

$listarcliente = listarTodosRegistros('*', 'menucardapio', 'A');

?>


<section id="menu" class="menu">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Menu</h2>
      <p>Check Our <span>Yummy Menu</span></p>
    </div>

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <?php

      if ($listarcliente == 'Vazio') {
        echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
      } else {
        $cont = 0;

        foreach ($listarcliente as $itemRetornoLista) {
          $titulo = $itemRetornoLista->titulo;



          ?>





          <li class="nav-item">
            <a class="nav-link <?php if ($cont == 0) { ?>active show<?php } ?>" data-bs-toggle="tab"
              data-bs-target="#menu-<?php echo $titulo; ?>">
              <h4>
                <?php echo $titulo; ?>
              </h4>
            </a>

          </li><!-- End tab nav item -->

          <?php

          $cont++;

        }

      }
      ?>


    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

      <?php

      if ($listarcliente == 'Vazio') {
        echo 'Não existe registro no banco';
      } else {

        $cont = 0;
        foreach ($listarcliente as $itemRetornoLista) {
          $idmenucardapio = $itemRetornoLista->idmenucardapio;
          $titulo = $itemRetornoLista->titulo;


          ?>

          <div class="tab-pane fade <?php if ($cont == 0) { ?>active show<?php } ?>" id="menu-<?php echo $titulo; ?>">




            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $titulo; ?></h3>
            </div>


            <div class="row gy-5">

              <?php

              $listarcliente = listarRegistroDoisParametro2('cardapio', '*', 'idmenucardapio', $idmenucardapio, 'A');
              if ($listarcliente == 'Vazio') {
                echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
              } else {
                $cont = 0;
                foreach ($listarcliente as $itemRetornoLista) {
                  $img = $itemRetornoLista->img;
                  $titulo = $itemRetornoLista->titulo;
                  $descricao = $itemRetornoLista->descricao;
                  $preco = $itemRetornoLista->preco;

                  ?>


                  <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/<?php echo $img ?>" class="glightbox"><img src="assets/img/menu/<?php echo $img ?>"
                        class="menu-img img-fluid" alt=""></a>
                    <h4>
                      <?php echo $titulo ?>
                    </h4>

                    <p class="ingredients">
                      <?php echo $descricao ?>
                    </p>
                    <p class="price">
                      $
                      <?php echo $preco ?>
                    </p>

                  </div><!-- Menu Item -->

                  <?php

                  $cont++;

                }
              }


              ?>


              <!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->


          <?php

        }

      }

      ?>

    </div>
  </div><!-- End Dinner Menu Content -->

  </div>

  </div>
</section><!-- End Menu Section -->