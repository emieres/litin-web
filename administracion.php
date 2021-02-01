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

      <h5 style="color: darkred">ADMON. MENCION PROCESAMIENTO DE DATOS</h5><hr>

		<p style="color: darkred"><strong>El Bachiller en Administración Mención Procesamiento de Datos:</strong></p>

		<p>Permite al futuro profesional conocer las nuevas aplicaciones de la tecnología en el área hardware y software básicos de una computadora, un ambiente básico de redes, diseño de páginas web, análisis, diseño, desarrollo e implementación de programas y sistemas de información de mediana complejidad con la finalidad de aplicar estas orientaciones en la prosecución de sus estudios universitarios así como también en el campo laboral, garantizando su actuación y elevando su eficiencia.</p>

		<ul>
			<li>Utilizar eficientemente diversos sistemas operativos tanto libres como privados.</li>
			<li>Desarrollar habilidades y destrezas con valores éticos, morales y un alto sentido de profesionalismo en el campo informático.</li>
			<li>Analizar problemas y que sean capaces de proponer soluciones eficientes, utilizando técnicas de planificación de programación tales como: algoritmos y diagramas de flujo.</li>
			<li>Participar en el análisis, diseño, desarrollo e implementación de programas y sistemas de Información de mediana complejidad, a través de lenguajes de programación utilizados a lo largo de sus estudios.</li>
			<li>Brindar asesoría a los usuarios de otras áreas en el uso de herramientas ofimáticas, integrando procesos y sistemas.</li>
			<li>Dominar la terminología básica del inglés técnico orientado a la programación.</li>
		</ul>

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
				<td>Contabilidad</td>
				<td>Contabilidad</td>
			</tr>
			<tr>
				<td>Programación (Teoría y Práctica)</td>
				<td>Programación (Teoría y Práctica)</td>
			</tr>
			<tr>
				<td>Anteproyecto</td>
				<td>Proyecto</td>
			</tr>
			<tr>
				<td></td>
				<td>Experiencia Ocupacional</td>
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