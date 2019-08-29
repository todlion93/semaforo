
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


	<title>INDECE DE MASA CORPORAL</title>
</head>
<body>

<?php

$altura = $_GET['altura'];
$peso =   $_GET['peso'];

 

$resultado2 = $peso / ($altura * $altura);
 
if ($resultado2 >= 0.0030071168431956 ) {
  echo  "Obesidad:".'<center>' . '<br>'  .'<img src="img/rojo.png"  class="img-circle"';
}elseif ($resultado2 >= 0.002505930702663 ) {
  echo  "Regular:".'<center>'.'<br>' .'<img src="img/amarillo.png" class="img-circle"';
}else {
echo  "Peso normal:".'<center>'.'<br>' .'<img src="img/verde.png"  class="img-circle"'  ;
}

?>

<div class="form-control">
	 
<img src="">	 

</div>

<div>
  <table class="table table-dark">
  	<tr>
  		<td>Peso inferior al normal</td>
        <td>Normal</td>
        <td>Peso superior al normal</td>
        <td>Obesidad</td>  
  	</tr>
    
    <tr>
  		<td>Menos de 18.5</td>
        <td>18.5 - 24.9</td>
        <td>25.0 - 29.9</td>
        <td>Más de 30.0</td>  
  	</tr>
  </table>	

<label>SU INDICE DE MASA CORPORAL ES:</label>
     
      <?php 
      echo $resultado2;

      ?>

</div>

<div>
	
<?php 

     


 ?>

</div>


</body>
</html>



