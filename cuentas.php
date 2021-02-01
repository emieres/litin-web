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

      <h4 style="color: darkred">CUENTAS BANCARIAS</h4> <hr>

		<p><strong>Depositos a Nombre de:</strong> LITIN</p>

		<p><strong>Transferencias a Nombre de:</strong> LITIN</p>

		<p><strong>Rif:</strong> J-07587922-8</p>

		<p><strong>Enviar Comprobante al correo:</strong> finanzas@litin.tec.ve</p>

		<table width="360">
			<tr>
				<td><img src="img/logo_bod.jpg" width="131"></td>
				<td>0116-0105-22-0003809536</td>
			</tr>
			<tr>
				<td><img src="img/logo_mercantil.gif" width="131" height="72"></td>
				<td>0105-0619-14-1619000784</td>
			</tr>
			<tr>
				<td><img src="img/bnc.jpg" width="131" height="72"></td>
				<td>0191-0076-61-2176022823</td>
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