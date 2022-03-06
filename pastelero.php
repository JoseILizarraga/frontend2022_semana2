<?php
//datos
if(isset($_GET['nombre'])){$nombre = $_GET['nombre'];}
if(isset($_GET['telefono'])){$telefono = $_GET['telefono'];}
if(isset($_GET['correo'])){$correo = $_GET['correo'];}
//pedido pastel
if(isset($_GET['chocolate'])){$chocolate = $_GET['chocolate'];}
if(isset($_GET['vainilla'])){$vainilla = $_GET['vainilla'];}
if(isset($_GET['fresa'])){$fresa = $_GET['fresa'];}
if(isset($_GET['caramelo'])){$caramelo = $_GET['caramelo'];}
//pedido adornos
if(isset($_GET['vela'])){$vela = $_GET['vela'];}
if(isset($_GET['base'])){$base = $_GET['base'];}
if(isset($_GET['confeti'])){$confeti = $_GET['confeti'];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lgapastelería</title>
</head>
<body>
  <h1>Pedidos en curso de lgapastelería</h1>

  <table>
    <tr>
      <th>Cliente</th>
      <th>Teléfono</th>
      <th>Correo</th>
      <th>Pedido</th>
    </tr>
    <tr>
      <td><?php if (isset($nombre)) {echo $nombre;} ?></td>
      <td><?php if (isset($telefono)) {echo $telefono;} ?></td>
      <td><?php if (isset($correo)) {echo $correo;} ?></td>
      <td>
        <?php if (isset($chocolate)) {echo $chocolate.',';} ?>
        <?php if (isset($vainilla)) {echo $vainilla.',';} ?>
        <?php if (isset($fresa)) {echo $fresa.',';} ?>
        <?php if (isset($caramelo)) {echo $caramelo.',';} ?>
        <?php if (isset($vela)) {echo $vela.',';} ?>
        <?php if (isset($base)) {echo $base.',';} ?>
        <?php if (isset($confeti)) {echo $confeti.',';} ?>
      </td>
    </tr>
  </table>
</body>
</html>
