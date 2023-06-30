<?php

$listarcliente = listarTodosRegistros('*', 'endereco', 'A');
if ($listarcliente == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white"> Nenhum registro cadastrado no banco de dados! </h6>';
} else {
  foreach($listarcliente as $itemRetornoLista) {
    $idendereco = $itemRetornoLista->idendereco;
    $endereco = $itemRetornoLista->endereco;
    $mapa = $itemRetornoLista->mapa;
    $numero = $itemRetornoLista->numero;
    $email = $itemRetornoLista->email;
    $horario = $itemRetornoLista->horario;
    $twitter = $itemRetornoLista->twitter;
    $insta = $itemRetornoLista->insta;
  }
}

?>

<footer id="footer" class="footer">

<div class="container">
  <div class="row gy-3">
    <div class="col-lg-3 col-md-6 d-flex">
      <i class="bi bi-geo-alt icon"></i>
      <div>
        <h4>Address</h4>
        <p>
          <?php echo $endereco?><br>
        </p>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-telephone icon"></i>
      <div>
        <h4>Reservations</h4>
        <p>
          <strong>Tel:</strong> <?php echo $numero?><br>
          <strong>Email:</strong> <?php echo $email?><br>
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-clock icon"></i>
      <div>
        <h4>Horário de Atendimento</h4>
        <p>
          <strong><?php echo $horario?> </strong> <br>
          Sábado: Fechado
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4>Siga-nos</h4>
      <div class="social-links d-flex">
        <a href="<?php echo $twitter?>" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="<?php echo $insta?>" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer><!-- End Footer -->
