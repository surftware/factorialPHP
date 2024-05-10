<div class="section seccionBusqueda">
    <div class="container">
      <div class="row">

        <div class="col-md-6 offset-md-3">
          <form role="form-control formulario" method="POST" action="index.php">

            <h3>Número que calcula el factorial</h3>
            <input class="form-control" type="text" name="consultar">
            <input class="btn-buscar btn-default " type="submit" name="enviar" VALUE="Calcula Factorial">
          </form>
        </div>
      
      </div>
    </div>
  </div>


<?php 
$numero = (int)$_POST['consultar']; 
$resultado = obtieneFactorial($numero); 
echo "Factorial de $numero  = $resultado"; 
?>

<?php 
// Código PHP para obtener el factorial de un número
// función para obtener factorial de forma iterativa
function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
}    

?> 