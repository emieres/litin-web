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

      <h4 style="color:darkred;">DE INTERES</h4>

	  <hr>
	      <div id="fb-root"></div>
	        <script>
	          (function(d, s, id) {
	          var js, fjs = d.getElementsByTagName(s)[0];
	          if (d.getElementById(id)) return;
	          js = d.createElement(s); js.id = id;
	          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
	          fjs.parentNode.insertBefore(js, fjs);
	          }(document, 'script', 'facebook-jssdk'));
	        </script>

	      <div class="fb-page" data-href="https://www.facebook.com/litinoficial/" data-tabs="timeline" data-width="360" data-height="360" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
	        <blockquote cite="https://www.facebook.com/litinoficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/litinoficial/">U.E LITIN</a>
	        </blockquote>
	      </div>

	      <hr>
	      <div align="center">
	        <a href="https://www.portaldepagosmercantil.com/" target="_blank"><img src="img/portal_merc.jpg" width="360"></a>
	        <br><br>
	        <p><a href="mercantil/instructivo.pdf" target="_blank"><strong><span style="font-size: 10px">INSTRUCTIVO PARA EL USO DEL PORTAL DE PAGO MERCANTIL</span></strong><img src="img/pdflogo.jpg" width="40"></a></p>
	      </div>

	      <hr>
	      <a href="" onclick='openwin("notificaciones/not1.php","1","location=yes,scrollbars=yes,width=640,height=835")'><img src="img/aviso.gif"></a>
	      <hr>
	      <a href="descargas/clinicas.pdf" target="_blank"><img src="img/seguro.jpg"></a>
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