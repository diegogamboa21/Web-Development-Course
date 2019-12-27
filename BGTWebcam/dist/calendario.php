<?php include_once 'includes/templates/header.php' ?>

  <section class="seccion contenedor">
    <h2>Calendario de eventos</h2>

    <?php
      try{
        require_once('includes/funciones/bd_conexion.php');
        
        $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, categoria, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM evento NATURAL JOIN categoria_evento NATURAL JOIN invitados ";
        $sql .= " ORDER BY evento_id ";
        $result = $conection->query($sql);
      }
      catch (\Exception $e){
        echo $e->getMessage();
      }
    ?>
<!--  -->
    <div class="calendario">
      <?php
        $calendario = array();
        while($eventos = $result->fetch_assoc()){

          $fecha = $eventos['fecha_evento'];
          $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['categoria'],
            'icono' => 'fa' . " " . $eventos['icono'],
            'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
          );

          //agrupar los eventos por fecha
          $calendario[$fecha][] = $evento;
        }

      ?>

      <?php
        //Imprimir eventos
        foreach($calendario as $dia => $lista_eventos){
      ?>
        <h3>
          <i class="fa fa-calendar-alt"></i>
          <?php echo strftime("%A, %d de %B del %Y", strtotime($dia)); ?>
        </h3>
      <?php
          foreach($lista_eventos as $evento){
      ?>
            <div class="dia">
              <p class="titulo"><?php echo $evento['titulo']; ?></p>
              <p class="hora">
                <i class="far fa-clock" aria-hidden="true"></i>
                <?php echo $evento['hora']; ?>
              </p>
              <p >
                <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                <?php echo $evento['categoria']; ?>
              </p>
              <p class="hora">
                <i class="fas fa-user" aria-hidden="true"></i>
                <?php echo $evento['invitado']; ?>
              </p>
              <!--  
                <pre>
                  <?php var_dump($evento); ?>
                </pre>
              -->
            </div>
      <?php
          }
        }
      ?>

    </div>
    
    <?php
      $conection->close();
    ?>
  </section>


<?php include_once 'includes/templates/footer.php' ?>