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

      <h4 style="color: darkred">TARDES PRODUCTIVAS</h4> <hr>

		<p><i>"En el Litin  abrimos espacios de recreación y cultura, así como también de refuerzo  de las actividades académicas. Los alumnos más destacados en las áreas de mayor grado de complejidad son escogidos  como preparadores y bajo la tutoría de los docentes, aplican a sus compañeros  estrategias para mejorar la comprensión de las asignaturas de cálculo. Asimismo, durante las tardes aquellos alumnos que tiene intereses musicales y artísticos se reúnen para recibir  clases de danza, instrumentos musicales, banda show, cuerpo de baile entre otros."</i></p>

		<table width="360" style="border: 1px solid;">
			<tr>
				<th style="border-bottom: 1px solid;">Actividad</th>
				<th style="border-bottom: 1px solid;">Horario</th>
			</tr>
			<tr>
				<td>Danza</td>
				<td>Lunes, Martes y Jueves de 1:30 a 3:45 PM</td>
			</tr>
			<tr>
				<td>Banda (cuerpo de baile e instrumento y miniporristas)</td>
				<td>Lunes y Miércoles de 2:00a 4:00 PM.</td>
			</tr>
			<tr>
				<td>Grupo musical juvenil</td>
				<td>Miércoles en la mañana</td>
			</tr>
			<tr>
				<td>Coral Infantil</td>
				<td>Lunes en la mañana</td>
			</tr>
			<tr>
				<td>Preparadurías de las áreas de cálculo</td>
				<td>A convenir con los tutores</td>
			</tr>
		</table>
		<br><br>

		<img src="img/tp1.jpg" width="360"> <br><br>
		<img src="img/tp2.jpg" width="360"> <br><br>
		<img src="img/tp3.jpg" width="360">
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