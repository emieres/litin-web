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

      <h4 style="color:darkred;">EL INSTITUTO</h4><hr>

		<p>El Litin es una institución de estudios privada, fundada en el mes de Julio del año 1.991.</p>

		<p>El régimen de estudio es anual, durante este período los estudiantes deben asistir a talleres especialmente preparados para afrontar problemas específicos de la industria, así mismo, efectuarán una pasantía, donde pondrá en práctica los conocimientos adquiridos.</p>

		<p style="color: darkred"><strong>OBJETIVOS</strong></p>
		<ul>
			<li>Proponerse a la comunidad una oferta educativa no tradicional.</li>
			<li>Formar bachilleres en la rama industrial y empresarial.</li>
			<li>Formar bachilleres capacitados para incorporarse inmediatamente al mercado de trabajo.</li>
			<li>Ofrecer a la industria, un profesional con sólida capacitación técnica.</li>
			<li>Formar jóvenes para que se incorporen a las Universidades e Institutos de Educación Superior en las ramas del conocimiento previamente cursadas en la Educación Básica y Media Profesional.</li>
			<li>Asumir los Retos que en materia educativa suponen los nuevos planes de desarrollo del país.</li>
			<li>Brindar al estudiante un asesoramiento y orientación constante con miras a su desempeño.</li>
			<li>Continuar el proceso de formación integral del hombre, formar profesionales especialistas promoviendo su actualización y mejoramiento conforme a las necesidades del desarrollo nacional del progreso científico.</li>
			<li>Fomentar la investigación de nuevos conocimientos e impulsar el progreso de la ciencia, la tecnología, las letras, las artes y demás manifestaciones creadoras del espíritu en beneficio del bienestar del ser humano, de la sociedad y del desarrollo independiente de la nación.</li>
			<li>Difundir los conocimientos paras elevar el nivel cultural, al servicio de la sociedad y del desarrollo integral del hombre.</li>
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