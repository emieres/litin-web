<nav class="navbar navbar-default">  
    <center><a href="index.php"><img src="img/top.jpg" width="778px" height="125"></a></center>  
</nav>

<div class="container-fluid text-right" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; background: #6186AF; color: white;">
  <script>
    dows = new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    months = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    now = new Date();
    dow = now.getDay();
    d = now.getDate();
    m = now.getMonth();
    y = now.getFullYear();
    document.write(dows[dow]+" "+d+" de "+months[m]+" de "+y);
  </script>
</div>