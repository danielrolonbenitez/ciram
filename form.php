<?php 
//include ('MySQL.php');
//$mysql=MySQL::getInstance();
//$sql="SELECT * FROM cursos";
//$mysql->setQuery($sql);
//$datos=$mysql->loadObjectList();
//var_dump($datos);die;
$baseUrl='https://elfiko.com/portfolio/ayudamutua'; ?>
<!DOCTYPE html>
<html lang="es">
<head>

	<title></title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta property="og:url"                content="https://myayudamutua.nextiendas.com/contacto" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="myayudamutua" />
<meta property="og:image"              content="https://myayudamutua.nextiendas.com/uploads/favicons/d250d08602a209c8d4f4459c2ca5a814.jpg" />
<style type="text/css">
    :root{
        --color-primary:#0A95B4;
        --color-header:#ffffff;
        --color-footer:#000000;
        --color-border-hover:#f7921e;
        --color-text:#0A95B4;
        --color_text_footer:#ffffff;
        --color-text-hover:#000000;
        --font-customize: Lato;
        --color-text-opacity:#ffffff36;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="<?php echo $baseUrl;?>/assets/frontend/extras/fontawesome-5/css/all.css" rel="stylesheet">

<link href="<?php echo $baseUrl;?>/assets/frontend/css/owl.theme.default.css" rel="stylesheet"/>
<link href="<?php echo $baseUrl;?>/assets/frontend/css/animate.css" rel="stylesheet"/>
<link href="<?php echo $baseUrl;?>/assets/frontend/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo $baseUrl;?>/assets/frontend/extras/fancybox/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $baseUrl;?>/assets/frontend/extras/jssor/jssor.css" rel="stylesheet" />
<link href="<?php echo $baseUrl;?>/assets/frontend/extras/bootstrapvalidator/css/bootstrapValidator.css" rel="stylesheet"/>
<link href="<?php echo $baseUrl;?>/assets/frontend/extras/template/general_styles.css?v=1696367722" rel="stylesheet" />
<link href="<?php echo $baseUrl;?>/assets/frontend/css/style.css?v=1696551642" rel="stylesheet" />
<link href="<?php echo $baseUrl;?>/assets/frontend/extras/template9/template9_extra.css?v=1693594080" rel="stylesheet"/>
<script src="<?php echo $baseUrl;?>/assets/frontend/js/jquery.min.js"></script>
<link href="<?php echo $baseUrl;?>/assets/backend/bower_components/select2/dist/css/select2.min.css" rel="stylesheet"/>
<link href="<?php echo $baseUrl;?>/assets/stores/css/style-20f07591c6fcb220ffe637cda29bb3f6.css?v=1701282175" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<style type="text/css">
  .requ{
    color: orange !important
  }
</style>	
	</head>
<body>
<div id="contentMain">
	 <section>
  <div class="container pt-5 pb-5">
    <div class="row d-flex justify-content-center"> 
    <div class="col-md-6 contact ">
      <h1 class="font-weight-bold">FICHA DE INSCRIPCIÓN</h1>
      <h4 class="font-weight-bold">Año: 2024</h4>
      <ul  style="list-style: none;">
      <li>1- Las clases comenzarán en la segunda semana de marzo y finalizarán con el examen final de diciembre.</li>

<li>2- La matrícula se podrá abonar en efectivo en el instituto o por transferencia según corresponda.</li>

<li>3- Durante los meses de enero y febrero no se dictan clases, tampoco en feriados nacionales y durante el receso invernal.</li>

<li>4- No se hacen descuentos por inasistencias. Los meses de julio y diciembre se abonarán completos.</li>

<li>5- Los pagos de cuota son por mes adelantado del 1 al 10. Hay un descuento del 10% en el valor de la cuota por grupo familiar. Para poder rendir el examen final no se debe adeudar ninguna cuota.</li>

<li>6-Los alumnos que ingresan a partir de abril deberán abonar un Derecho de Examen.</li>

<li>7- Durante el mes de agosto se realiza la reinscripción de los alumnos regulares para el año siguiente.</li>

<li>8- Finalizada dicha inscripción (31/08) se procederá a inscribir alumnos nuevos, en caso de quedar vacantes.</li>

<li>9- La entrega de boletines se realiza en forma bimestral.</li>

<li>10- Antes del receso invernal se toman las evaluaciones correspondientes a mitad de año. El alumno que no aprueba la evaluación de julio, debe rendir el examen completo en diciembre.</li>
</ul>
    </div>   
    <div class="col-md-6  contact">
        <?php if(isset($_GET['enviado'])){ ?>
        <div id='send'  class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <i class=""></i> Su mensaje fue enviado correctamente, pronto nos pondremos en contacto.
        </div>
      <?php } ?>
            <form id='form' action='enviar.php'  method="post" role="form" class="form-contact">
        <h4 class="font-weight-bold">Ficha de inscripción</h4>
        <h5 class="font-weight-bold">Datos del Curso</h5>
        <br>
         <h6>Cursos<span class='requ'>*</span></h6>
         <div class="form-group">
          <select class="form-control contact" id="cursos" name="cursos" required> 
           <option value="" selected="selected">Seleccione...</option>
            <option value="KINDER - 2024">KINDER - 2024</option>
            <option value="1° ELEMENTAL - 2024">1° ELEMENTAL - 2024</option>
            <option value="1° GRADO - 2024">1° GRADO - 2024</option>
            <option value="2° GRADO - 2024">2° GRADO - 2024</option>
            <option value="1° ADOLESCENTES - 2024">1° ADOLESCENTES - 2024</option>
            <option value="° ADOLESCENTES - 2024">2° ADOLESCENTES - 2024</option>
            <option value="2° ADULTOS - 2024">2° ADULTOS - 2024</option>
            <option value="3° ADULTOS - 2024">3° ADULTOS - 2024</option>
            <option value="4° ADULTOS - 2024">4° ADULTOS - 2024</option>
            <option value="5° ADULTOS - 2024">5° ADULTOS - 2024</option>
            <option value="6° ADULTOS - 2024">6° ADULTOS - 2024</option>
            <option value="FC - FIRST CERTIFICATE - 2024">FC - FIRST CERTIFICATE - 2024</option>
          </select>
        </div>  

        <h6>Horarios<span class='requ'>*</span></h6>                 
        <div class="form-group">
           <input type="text" class="form-control contact" id="horario" name="horario" placeholder="Horario" required>
        </div>  

        <h5 class="font-weight-bold">Datos del Alumno</h5>
        <h6>Alumno<span class='requ'>*</span></h6>
        <div class="form-group">
          <input type="text" class="form-control contact" id="alumno" name="alumno" placeholder="Alumno" required>
        </div>
        <h6>Nombres y apellido del Alumno<span class='requ'>*</span></h6>
        <div class="form-group">
          <input type="text" class="form-control contact" id="nombreAlumno" name="nombreAlumno" placeholder="Nombres y apellido del Alumno" required>
        </div>


        <h6>Fecha de nacimiento<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="fechaNac" name="fechaNac" placeholder="dd/mm/yyyy Ej. 01/06/1978" required>
        </div>   

           <h6>Edad<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="number" class="form-control contact" id="edad" name="edad" placeholder="edad" required>
        </div>     
        
        <h6>Documento de identidad<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="documento" name="documento" placeholder="Tipo y numero" required>
        </div>    


         <h6>Curso en que se inscribe<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="curso" name="curso" placeholder="Nombre curso" required>
        </div>     
        

          <h6>Turno<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="turno" name="turno" placeholder="Turno" required>
        </div>     
       

        <h6>Domicilio<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="domicilio" name="domicilio" placeholder="Domicilio" required>
        </div>     
 
         <h6>Email<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="email" class="form-control contact" id="email" name="email" placeholder="Email" required>
        </div>     
         
         <h6>Tel&eacute;fono<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="telefono" name="telefono" placeholder="Telefono" required>
        </div> 
       
         <h5 class="font-weight-bold">Datos del Padre | Tutor | Encargado</h5>
          <br>
        <h6>Nombres Padre o Tutor o Encargado<span class='requ'>*</span></h6>
        <div class="form-group">
          <input type="text" class="form-control contact" id="nombreContacto" name="nombreContacto" placeholder="Nombres y apellido del Contacto" required>
        </div>

          <h6>Documento de identidad<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="documentoContacto" name="documentoContacto" placeholder="Tipo y numero" required>
        </div>    

        <h6>Tel&eacute;fono Contacto<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="text" class="form-control contact" id="telefonoContacto" name="telefonoContacto" placeholder="Telefono Contacto" required>
        </div> 
        
        <h6>Email Contacto<span class='requ'>*</span></h6>                 
        <div class="form-group">
            <input type="email" class="form-control contact" id="emailContacto" name="emailContacto" placeholder="Email Contacto" required>
        </div>     
        
        <div class="text-center">
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <div class="form-group boton-enviar">
                <button type="submit"  class="btn-block rounded btn angulo-item-button">Enviar</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>	
</body>
</html>