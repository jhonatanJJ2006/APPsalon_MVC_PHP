<h1 class="nombre-pagina">Panel de Administracion</h1>

<?php include_once __DIR__ . '/../templates/barra.php' ?>

<h2>Buscar Citas</h2>

<div class="busqueda">

    <form class="formulario">

        <div class="campo">
            <label for="fecha">Fecha</label>
            <input id="fecha" type="date" name="fecha" value="<?php echo $fecha ?>">
        </div>
        
    </form>

    <?php
        if(count($citas) === 0) {
            echo "<h3 class='alerta error'>No hay citas en esta fecha</h3>";
        }
    ?>

    <div id="citas-admin">
        <ul class="citas">
            <?php
                $idCita = 0;
                foreach($citas as $key => $cita) : 

                    if($idCita !== $cita->id) { 
                        $total = 0;
                        ?>
                        <li>
                            <p>ID: <span><?php echo $cita->id; ?></span></p>
                            <p>Hora: <span><?php echo $cita->hora; ?></span></p>
                            <p>Cliente: <span><?php echo $cita->cliente; ?></span></p>
                            <p>Email: <span><?php echo $cita->email; ?></span></p>
                            <p>Teléfono: <span><?php echo $cita->telefono; ?></span></p>
                            <h3>Servicios:</h3>
                        
                        
            <?php   
                    $idCita = $cita->id;
                    }
                    $total += $cita->precio;
                    ?>
                    <p class="servicios"><?php echo $cita->servicio. "  $" . $cita->precio;; ?></span></p>

                    <?php
                        $actual = $cita->id;
                        $proximo = $citas[$key + 1]->id ?? 0;

                        if(esUltimo($actual, $proximo)) { ?>
                            <p class="total">Total: <span><?php echo "$".$total ?></span></p>

                            <form class="formulario" action="/api/eliminar" method="POST">
                                <input type="hidden" name="id" value="<?php echo $cita->id ?>">
                                <input class="boton-eliminar" type="submit" value="Eliminar">
                            </form>
                        <?php }
                    
                endforeach; 
            ?>
        </ul>
    </div>

</div>

<?php
    $script = "<script src='build/js/buscador.js'></script>";
?>