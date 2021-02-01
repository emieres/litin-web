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

      <h4 class="titulo">BIENESTAR ESTUDIANTIL</h4><hr>

		<p class="titulo3">BECAS Y PLANES ESPECIALES</p>

		<p>Becas completas, el instituto conjuntamente con la Fundación CTI, mantiene becados a aquellos estudiantes que mantienen un nivel excelencia sobre los 18 puntos de promedio; y también considera a aquellos estudiantes, que por alguna discapacidad orgánica tales como ceguera parcial o total, han solicitado el recurso, exigiéndoles un desempeño académico igual o mayor o los 19 puntos.</p>

		<ul>
			<li>Orientación: Posibilita el asesoramiento psicosocial a todo el recurso humano del institución, incluyendo a su entorno familiar, en las áreas de persona-social, académico y vocacional-profesional.</li>
			<li>Ayudas socio-económicas: La fundación CTI, concede becas trabajo a sus estudiantes más distinguidos como premio a su excelencia académica, a fin de darles apoyo, y que puedan obtener una preparación académica y personal integral; además promueve conferencias y foros.</li>
			<li>Biblioteca e Internet: Ofrece excelentes servicios y fuentes de información en un ambiente que estimula y facilita la investigación. La biblioteca virtual, columna vertebral de la educación de hoy y del mañana, brinda la posibilidad a todo el recurso humano del instituto a acceder a cualquier tipo de información.</li>
			<li>Seguro Estudiantil: Todos los alumnos de la institución están amparados por un seguro de accidentes y muerte.</li>
			<li>Recursos audiovisuales: Que le permitan al estudiante el uso de los equipos y ayudas que faciliten el proceso de enseñanza aprendizaje.</li>
			<li>Servicio de Reproducción: Facilita todos los recursos para la reproducción de bibliografía y trabajos necesarios en la actividad estudiantil.</li>
			<li>Servicio de Enfermería</li>
			<li>Laboratorio de Computación.</li>
			<li>Laboratorio de Inglés.</li>
			<li>Laboratorio de Electrónica y Electricidad.</li>
			<li>Laboratorio de Biología, Química, y Física.</li>
			<li>Taller de Dibujo Técnico.</li>
			<li>Departamento de Reproducción.</li>
		</ul>
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