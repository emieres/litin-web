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

      <h4 class="titulo">DESCARGAS</h4> <hr>

		<table width="360" style="border: 1px solid;">
			<tr>
				<td class="titulo2">LOGO</td>
				<td><a href="descargas/logo.rar"><img src="img/logorar.jpg" width="60"></a></td>
			</tr>
			<tr>
				<td class="titulo2">HISTORIA</td>
				<td><a href="descargas/historia.pdf" target="_blank"><img src="img/pdflogo.jpg" width="50"></a></td>
			</tr>
			<tr>
				<td class="titulo2">MISION Y VISION</td>
				<td><a href="descargas/mision-vision.pdf" target="_blank"><img src="img/pdflogo.jpg" width="50"></a></td>
			</tr>
			<tr>
				<td class="titulo2">PROYECTO LITIN</td>
				<td><a href="descargas/PROYECTO.pdf" target="_blank"><img src="img/pdflogo.jpg" width="50"></a></td>
			</tr>
			<tr>
				<td class="titulo2">ORGANIGRAMA</td>
				<td><a href="descargas/organigrama.rar"><img src="img/logorar.jpg" width="60"></a></td>
			</tr>
		</table>
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