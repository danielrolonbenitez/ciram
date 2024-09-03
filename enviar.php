<?php

    include('EmailController.php');
    require_once 'dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    use Dompdf\Options;

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = $_POST['email'];

    $des = array("contacto@ciram.com.ar",$_POST['emailContacto']);

    $subject = "Nuevo mensaje de inscripcion";
    $mensaje = "Nueva ficha";
    
// Capturar el valor del checkbox
//$autorizacion = isset($_POST['autorizacion']) ? 'Si' : 'No';

// Agregar la autorizacion al mensaje
//$mensaje .= "\nAutorizacion: $autorizacion";

  include( 'templatePdf.php');
 
  //var_dump($template);die;         
// Crear una instancia de Dompdf con opciones
$options = new Options();
$options->set('isHtml5ParserEnabled', true); // Habilitar el análisis HTML5
$options->set('isPhpEnabled', true); // Habilitar el soporte de PHP en HTML (opcional)
$dompdf = new Dompdf($options);


    // Obtener contenido HTML de un archivo o una variable
//$html = file_get_contents($template);

// Cargar el contenido HTML en Dompdf
$dompdf->loadHtml($template);

// Renderizar el HTML como PDF
$dompdf->render();

// Obtener el contenido del PDF como una cadena
$pdfContent = $dompdf->output();
        
       // var_dump($pdfContent);die;


    $email= New EmailController();

	 $result=$email->enviaEmail($from,$mensaje,$subject,$des,$pdfContent);

	if($result==1){?>
       <script type="text/javascript">
        window.location.href='form.php?enviado=1';
        </script>

    <?php }else{

	    echo "error al enviar el formulario";

	}



?>