<?php
function retornarConexion() {
  $con=mysqli_connect("localhost:3305","root",'',"tienda");
  return $con;
}
?>