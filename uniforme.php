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

      <h4 class="titulo">UNIFORME</h4> <hr>

		<p class="titulo3">UNIFORME ESCOLAR LITIN</p>

		<img src="img/unifNino.jpg" width="330" height="363" border="0">

		<p class="titulo3">No aceptamos pantalones tubitos o bota ancha, solamente bota recta clásica.</p>

		<img src="img/unifDeporte.jpg" width="329" height="360">

		<p class="titulo3">La chemisse y el uniforme deportivo son adquiridos en la institución.</p>

		<p>Varones: Corte de cabello bajo y uniforme, sin líneas ni escalonados. No se permite el uso de cadenas ni pulseras.</p>

		<p>Hembras: Sin maquillaje, ni cabello teñido, sin esmalte de color en las uñas, los accesorios deberán ser discretos.</p>

		<p>General: No se permite el uso de piercing, zarcillos, y adornos en general, aun siendo de orden religioso.</p>

		<p class="titulo2">Art. 13</p>

		<p><strong><i><center>Educación Básica de la I y II etapa (1er grado a 6to grado)</center></i></strong></p>

		<p>Pantalón azul marino (de gabardina), correa de color negro, chemise de color blanco con su respectiva insignia (bordada sobre la parte izquierda), zapatos colegiales de color negro y medias de color blanco.</p>

		<p class="titulo2">Art. 14</p>

		<p><strong><i><center>Educación Básica de la III Etapa (de primer año a tercer  año)</center></i></strong></p>

		<p>Pantalón azul marino (de gabardina), correa de color negro, chemise de color azul claro con su respectiva insignia (bordada sobre la parte izquierda), zapatos colegiales de color negro y medias de color blanco.</p>

		<p class="titulo2">Art. 15</p>

		<p><strong><i><center>Educación Media Profesional (de cuarto año a sexto año)</center></i></strong></p>

		<p>Pantalón azul marino (de gabardina), correa de color negro, chemise de color beige con su respectiva insignia (bordada sobre la parte izquierda), zapatos colegiales de color negro y medias de color blanco. </p>

		<p class="titulo2">Art. 16</p>

		<p>El uniforme de Educación Física para todos los alumnos será el establecido por la institución, con zapatos deportivos de color blanco (sin adornos u otro color) y medias blancas.</p>

		<p class="titulo2">Art. 17</p>

		<p>Se les permitirá el uso de suéter color azul marino (abierto para mostrar la insignia o el asignado por la institución).</p>

		<p class="titulo3">DEL AULA DE CLASE</p>

		<p class="titulo2">Art. 18</p>

		<p>Ningún alumno podrá ausentarse del aula o ambiente donde se desarrolle la actividad escolar (académica), sin estar debidamente autorizado.</p>

		<p class="titulo2">Art. 19</p>

		<p>No está permitido ingerir comidas o bebidas en el aula de clase. Solamente en la realización de actividades previamente planificada con la coordinación.</p>

		<p class="titulo2">Art. 20</p>

		<p>Ningún alumno puede quedarse en el aula al terminar la hora de clase. Y ésta debe ser dejada en completo orden y limpieza.</p>

		<p class="titulo2">Art. 21</p>

		<p>No está permitido traer al plantel material que entorpezca el normal desarrollo de las actividades escolares (Teléfonos Celulares, Juguetes, MP3, MP4, walkman, radio reproductores, cartas, barajitas, revistas, patines, patinetas, exactos, mascotas entre otros).</p>

		<p class="titulo3">Tomado del Manual de Convivencia Escolar del LITN</p>
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