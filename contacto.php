<!DOCTYPE html>
<html>
<head>
  <?php  
  	//CABECERA DE LA PAGINA
  	include "cabecera.php";
  ?>
</head>
<body>

<?php  
	//baner principal
	include "baner.php";
?>

<div class="container-fluid text-left">   

  <div class="row content">

    <div class="col-sm-3 sidenav">
		<?php 
			//MENU LATERAL IZQUIERDO
			include "menu_li.php";
		?>      
    </div><!-- 	menu lateral iquierdo -->

    <div class="col-sm-6 text-justify" style="background: white;"> 

      <h4 class="titulo">CONTACTOS</h4><hr>

		<p class="titulo3">Sede del LITIN</p>

		<p>Para cualquier información puede comunicarse con nosotros a través de los siguientes medios:</p>

		<p><strong>Teléfonos:</strong> (0241)-833.95.64, 834.15.82, 838.78.95, 838.79.03</p>

		<p><strong>Fax:</strong> (0241)-834.15.82</p>

		<p><strong>Dirección postal:</strong> Zona Industrial "La Isabelica", C.C. Save, Valencia Edo. Carabobo - Venezuela</p>

		<p><strong>Email:</strong> litin@litin.tec.ve</p><br>

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3927.1576138811506!2d-67.96339583416803!3d10.167840986959183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x886b77d998d11e4e!2sUnidad+Educativa+LITIN!5e0!3m2!1ses!2sve!4v1476716501443" width="360" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<hr>
	
    </div><!-- 	seccion -->

    <div class="col-sm-3 sidenav">
      	<?php 
			//MENU LATERAL IZQUIERDO
			include "menu_ld.php";
		?> 
    </div><!-- 	menu lateral derecho -->

  </div>

</div>

<?php  
	//pie de pagina
	include "pie.php";
?>

</body>
</html>