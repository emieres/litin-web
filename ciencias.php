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

		<h4 style="color: darkred">CIENCIAS BASICAS</h4> <hr>

		<p style="color: darkred"><strong>El Bachiller en Ciencias Básicas estará apto para:</strong></p>

		<p>Es el resultado del proceso de adquisición de conocimiento de diferentes disciplinas y ciencias con base en principios, leyes y conceptos, que le permitirán al estudiante incorporarse como sujeto útil y activo a ala vida cotidiana.</p>

		<p>Tiene la finalidad de brindar una formación general en lo que se ha considerado como esencial para todo bachiller a nivel nacional, es decir, aquellos conocimientos habilidades y actitudes que deben poseer para participar activamente en su formación y constructivamente en el cambio de la realidad, así como contribuir a la convivencia, comprender su medio y saber comunicarse.</p>

		<p>Prepara al alumno para su continuación en estudios superiores, ya que en éste se abordan asignaturas que le permiten profundizar en aspectos particulares de las diversas disciplinas, con la intención de que adquiera los elementos necesarios que le ayuden a definir sus intereses profesionales.</p>

		<p><strong>Grupos disciplinarios:</strong></p>

		<ul>
			<li>Química, Biología, Física, Matemáticas.</li>
			<li>Economía, Administrativo.</li>
			<li>Humanidades, Ciencias Sociales.</li>
		</ul>

		<p>El egresado del Bachillerato en Ciencias está capacitado para lograr un autoconocimiento, trabajar en equipo, manejo de las TIcs y técnicas de estudio, responder con alta probabilidad de éxito a las exigencias propias del ambiente universitario. Además, recibe una visión y formación integral del desarrollo de las ciencias que le permite realizar su proyecto educativo en vía a una carrera universitaria.</p>

		<p><strong>2 AÑOS DE ESTUDIO - ESPECIALIDAD</strong></p>

		<table width="360" style="border: 1px solid;">
			<tr>
				<th>4to. año</th>
				<th>5to. año</th>
			</tr>
			<tr>
				<th style="border-bottom: 1px solid;">Asignatura</th>
				<th style="border-bottom: 1px solid;">Asignatura</th>
			</tr>
			<tr>
				<td>Castellano y Literatura</td>
				<td>Castellano y Literatura</td>
			</tr>
			<tr>
				<td>Matemática</td>
				<td>Matemática</td>
			</tr>
			<tr>
				<td>Historia de Venezuela</td>
				<td>Historia de Venezuela</td>
			</tr>
			<tr>
				<td>Geografía de Venezuela</td>
				<td>Geografía de Venezuela</td>
			</tr>
			<tr>
				<td>Inglés</td>
				<td>Inglés</td>
			</tr>
			<tr>
				<td>Educación Física</td>
				<td>Educación Física</td>
			</tr>
			<tr>
				<td>Física</td>
				<td>Física</td>
			</tr>
			<tr>
				<td>Química</td>
				<td>Química</td>
			</tr>
			<tr>
				<td>Ciencias Biológicas</td>
				<td>Ciencias Biológicas</td>
			</tr>
			<tr>
				<td>Dibujo E.P.</td>
				<td>Ciencias de la Tierra</td>
			</tr>
			<tr>
				<td>Filosofía</td>
				<td>Proyecto</td>
			</tr>
			<tr>
				<td>Anteproyecto</td>
				<td></td>
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