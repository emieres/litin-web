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

      <h4 style="color: darkred">SIMBOLOS DE LA U.E. LITIN</h4><hr>

		<center>
		<p style="color: darkred"><strong>HIMNO DE LA U.E. LITIN</strong></p>

		<p><strong>CORO</strong></p>

		<p>Unidad Educativa Litin <br>
		La excelencia es tu misión <br>
		La virtud y el saber de la mano <br>
		Cual bandera de orgullo y honor. (Bis)</p>

		<p><strong>I</strong></p>

		<p>Innovando en las aulas moldeas <br>
		El futuro de nuestra nación <br>
		Con esfuerzo la gloria alcanzamos <br>
		Destacando la ardua labor.</p>

		<p>Estudiando formamos valores <br>
		de esperanza, trabajo y tesón <br>
		Nuestras manos labrando el futuro <br>
		Nuestra fuerza es la fe y el amor.</p>

		<p><strong>(CORO)</strong></p>

		<p><strong>II</strong></p>

		<p>Con empeño trabajo y conciencia <br>
		Lucharemos por nuestra misión <br>
		Es errar o inventar nuestro lema <br>
		Nuestra meta el saber y el honor.</p>

		<p>Son tus aulas santuario de valores <br>
		Donde reina la fe y el amor <br>
		A la patria, al saber y al trabajo <br>
		Donde creamos un mundo mejor</p>

		<p><strong>(CORO)</strong></p></center> <br>

		<p><strong>Letra y Música:</strong> Prof. Solangel Lameda</p>
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