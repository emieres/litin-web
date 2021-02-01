<?php  
	if (isset($_GET['pagina'])) {
        switch ($_GET['pagina']){
            case 1:
                require_once("quienes.php");
            break;
            case 2:
                require_once("historia.php");
            break;
            case 3:
                require_once("simboloslitin.php");
            break;
            case 4:
                require_once("mision.php");
            break; 
            case 5:
                require_once("organigrama.php");
            break; 
            case 6:
                require_once("proyecto.php");
            break;
            case 7:
                require_once("administracion.php");
            break;
            case 8:
                require_once("ciencias.php");
            break;
            case 9:
                require_once("industrial.php");
            break;
            case 10:
                require_once("bienestar.php");
            break;
            /*case 11:
                require_once("lista.php");
            break;  */
            case 12:
                require_once("tardes.php");
            break;
            case 13:
                require_once("cuentas.php");
            break;  
            /*case 14:
                require_once("historial.php");
            break;*/
            case 15:
                require_once("uniforme.php");
            break;
            case 16:
                require_once("descargas.php");
            break;
            case 17:
                require_once("enlaces.php");
            break;
            case 18:
                require_once("contacto.php");
            break; 
            case 19:
                require_once("simbolospatrios.php");
            break;     
        }
    } else{
        require_once("articulo.php");
    }	
?>