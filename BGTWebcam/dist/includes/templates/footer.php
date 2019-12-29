<footer class="site-footer">
    <div class="contenedor footer-contenido clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>bgtwebcamp</span></h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni
          commodi nulla quos consectetur quae, sunt at non id nisi libero
          molestias incidunt deleniti eveniet officiis consequuntur distinctio
          error vero ipsum eos voluptatum? Eos totam tempora deleniti
          reprehenderit iusto. Temporibus, praesentium.
        </p>
      </div>

      <div class="ultimos-tweets">
        <h3>Ultimos <span>tweets</span></h3>
        <ul>
          <li>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
            repellendus?
          </li>
          <li>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
            repellendus?
          </li>
          <li>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum,
            repellendus?
          </li>
        </ul>
      </div>

      <div class="menu">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>

    <p class="copyright">Todos los derechos reservados BGTWEBCAMP 2019</p>
  </footer>

  <!-- Finis area -->

  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    window.jQuery ||
      document.write(
        '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
      );

  </script>

  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="js/vendor/jquery.animateNumber.min.js"></script>
  <script src="js/vendor/jquery.countdown.min.js"></script>
  <script src="js/vendor/jquery.lettering.js"></script>

  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/vendor/jquery.colorbox-min.js"></script>';
    }
    else if($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>

  
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "transport", "beacon");
    ga("send", "pageview");

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
