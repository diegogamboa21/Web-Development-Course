<?php include_once 'includes/templates/header.php' ?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo,
      repellendus culpa adipisci, maxime rem odio suscipit mollitia provident
      nam fugit nemo quos qui harum alias libero voluptate aliquid deserunt
      nisi?
    </p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4" />
        <source src="video/video.webm" type="video/webm" />
        <source src="video/video.ogb" type="video/ogb" />
      </video>
    </div>

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>

          <?php
            try{
              require_once('includes/funciones/bd_conexion.php');

              $sql = "SELECT * FROM `categoria_evento` ";
              $result = $conection->query($sql);
            }
            catch(Exception $e){
              $error = $e->getMessage();
            }
          ?>

          <nav class="menu-programa">
            <?php while($categoria = $result->fetch_array(MYSQLI_ASSOC)){ ?>
              <a href="#<?php echo strtolower($categoria['categoria']); ?>">
                <i class="fa <?php echo ($categoria['icono']); ?>"></i> 
                <?php echo ($categoria['categoria']); ?>
              </a>
            <?php } ?>
          </nav>

          <?php
            try{
              require_once('includes/funciones/bd_conexion.php');
              
              $sql = "";
              for($i = 1; $i <= 3; $i++){
                $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, categoria, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM evento NATURAL JOIN categoria_evento NATURAL JOIN invitados ";
                $sql .= " WHERE evento.categoria_id = ". $i ." ";
                $sql .= " ORDER BY evento_id LIMIT 2; ";
              }
            }
            catch (\Exception $e){
              echo $e->getMessage();
            }
          ?>

          <?php
            $conection->multi_query($sql);

            do{
              $result = $conection->store_result();
              $row = $result->fetch_all(MYSQLI_ASSOC);

              $i = 0;
              foreach($row as $evento){
                if($i % 2 == 0){
          ?>
                  <div id="<?php echo strtolower($evento['categoria']); ?>" class="info-curso ocultar clearfix">
                <?php } ?>

                    <div class="detalle-evento">
                      <h3><?php echo $evento['nombre_evento']; ?></h3>
                      <p><i class="far fa-clock" aria-hidden="true"></i> <?php echo $evento['hora_evento'] ?></p>
                      <p><i class="fas fa-calendar-alt" aria-hidden="true"></i> <?php echo $evento['fecha_evento'] ?></p>
                      <p><i class="fas fa-user-alt" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'] ?></p>
                    </div>
                    <!--Detalle-evento-->

          <?php 
                if($i % 2 != 0){
                  echo '<a href="calendario.php" class="boton float-right">Ver Todos</a>';
                  echo '</div>';
                } 
                $i++;
              }
              $result->free();
            } while($conection->more_results() && $conection->next_result());
          ?>

        </div>
        <!--.programa-evento-->
      </div>
      <!--.contenedor-->
    </div>
    <!--.contenido-programa-->
  </section>
  <!--.programa-->

  <?php include_once 'includes/templates/invitados.php' ?>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero"></p>
          Invitados
        </li>
        <li>
          <p class="numero"></p>
          Talleres
        </li>
        <li>
          <p class="numero"></p>
          Dias
        </li>
        <li>
          <p class="numero"></p>
          Conferencias
        </li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por Día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los Talleres</li>
            </ul>
            <a href="#" class="boton hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los Talleres</li>
            </ul>
            <a href="#" class="boton">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 Días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las Conferencias</li>
              <li>Todos los Talleres</li>
            </ul>
            <a href="#" class="boton hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!--Mapa-->
  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
            reiciendis ducimus fugit modi libero in obcaecati odit,
            repellendus recusandae dolorum deserunt, a sint impedit sit.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span>
            </cite>
          </footer>
        </blockquote>
      </div>

      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
            reiciendis ducimus fugit modi libero in obcaecati odit,
            repellendus recusandae dolorum deserunt, a sint impedit sit.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
          </footer>
        </blockquote>
      </div>

      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate
            reiciendis ducimus fugit modi libero in obcaecati odit,
            repellendus recusandae dolorum deserunt, a sint impedit sit.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate al newsletter</p>
      <h3>bgtwebcamp</h3>
      <a href="#" class="boton transparente">Registro</a>
    </div>
  </div>

  <section class="seccion contenedor">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva">
      <ul class="clearfix">
        <li>
          <p id="dias" class="numero"></p>
          Días
        </li>
        <li>
          <p id="horas" class="numero"></p>
          Horas
        </li>
        <li>
          <p id="minutos" class="numero"></p>
          Minutos
        </li>
        <li>
          <p id="segundos" class="numero"></p>
          Segundos
        </li>
      </ul>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php' ?>