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

      <h4 class="titulo">ENLACES</h4><hr>
		<center>
		<a href="http://www.me.gob.ve" target="_blank"><img src="img/me.gif" width="163" height="51" border="0"></a><br><br>
		<a href="http://www.fundayacucho.gob.ve" target="_blank"><img src="img/logofa.jpg" width="110" height="44" border="0"></a><br><br>
		<a href="http://www.mppeuct.gob.ve" target="_blank"><img src="img/logo_mes.jpg" width="110" height="33" border="0"></a><br><br>
		<a href="http://www.opsu.gob.ve" target="_blank"><img src="img/logocnu.gif" width="110" height="30" border="0"></a><br><br>
		<a href="http://www.fonacit.gob.ve" target="_blank"><img src="img/logo_fonacit.jpg" width="110" height="37" border="0"></a><br><br>
		<a href="http://www.fames.gob.ve" target="_blank"><img src="img/fames.gif" width="110" height="37" border="0"></a><br><br><br>
		</center>
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