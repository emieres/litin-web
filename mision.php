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

      <h4 style="color: darkred">MISION Y VISION</h4> <hr>

		<p style="color: darkred"><strong>MISION</strong></p>

		<p>Formar ciudadanos que conceptualicen, modelen, emulen y planteen soluciones integrales de carácter multidisciplinario basado en la participación y en la investigación de los acontecimientos administrativos, industriales, tecnológicos, científicos y humanos contribuyendo así al desarrollo sostenible del país.</p>

		<p style="color: darkred"><strong>VISION</strong></p>

		<p>Ser una organización académica líder en servicios de calidad aunados con el desarrollo socio-económico y cultural del país.</p>

		<br>
		<center><a href="descargas/mision-vision.pdf" target="_blank"><img src="img/pdflogo.jpg" width="44" height="47" border="0"><br>Descargar</a></center>
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