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
          <nav class="menu-programa">
            <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
            <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
            <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y Javascript</h3>
              <p><i class="far fa-clock"></i> 16:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user-alt"></i> Diego Gamboa</p>
            </div>
            <!--Detalle-evento-->

            <div class="detalle-evento">
              <h3>Responsive Web Desing</h3>
              <p><i class="far fa-clock"></i> 20:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user-alt"></i> Diego Gamboa</p>
            </div>
            <!--Detalle-evento-->


            <a href="" class="boton float-right">Ver Todos</a>
          </div>
          <!--#talleres-->

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="far fa-clock"></i> 10:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user-alt"></i> Davis Martinez</p>
            </div>
            <!--Detalle-evento-->

            <div class="detalle-evento">
              <h3>Tecnologias del futuro</h3>
              <p><i class="far fa-clock"></i> 12:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user-alt"></i> Amanda Soto</p>
            </div>
            <!--Detalle-evento-->


            <a href="" class="boton float-right">Ver Todos</a>
          </div>
          <!--#talleres-->

          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Mobile desing</h3>
              <p><i class="far fa-clock"></i> 16:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user-alt"></i> Diego Gamboa</p>
            </div>
            <!--Detalle-evento-->

            <div class="detalle-evento">
              <h3>Aprende a programar en 1 hora</h3>
              <p><i class="far fa-clock"></i> 20:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user-alt"></i> Diego Gamboa</p>
            </div>
            <!--Detalle-evento-->


            <a href="" class="boton float-right">Ver Todos</a>
          </div>
          <!--#talleres-->
        </div>
        <!--.programa-evento-->
      </div>
      <!--.contenedor-->
    </div>
    <!--.contenido-programa-->
  </section>
  <!--.programa-->

  <section class="invitados contenedor seccion">
    <h2>nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado" />
          <p>Rafael Bautista</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado" />
          <p>Shari Herrera</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado" />
          <p>Gregorio Sanchez</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado" />
          <p>Susana rivera</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="imagen invitado" />
          <p>Harold Garcia</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="imagen invitado" />
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

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