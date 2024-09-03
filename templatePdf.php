<?php $template ="<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title></title>
	<style type='text/css'>

 body{
   font-family: Helvetica, Sans-Serif;
   font-size:14px;
 }
		table td {
    border: 1px solid silver;
}

.silver{
	color: silver;
}

.topo{
	color: black;
}

.blue{
	color: #22228799;
}

	</style>
</head>
<body>
       <h2>FICHA DE INSCRIPCI&Oacute;N</h2>
       <br/>
       <table style='width: 600px;border:none!important'>
       <tr>
       <td style='width: 300px;border:none!important'>
       <h4 class='blue'>Cultura inglesa de Ramos Mejia</h4>
       <p class='topo'>Humbold 474- Ramos Mejia</p>
       <p class='topo'>TEL.1173622320</p>
       </td>
       
       <td style='width: 300px;border:none!important' align ='right'>Fecha:"
         .date('d/m/Y').
       "</td><tr></table></br>

       <table style='border: 1px solid silver;width: 600px;' cellpadding='0' cellspacing='0'>

       	<tr>
       		<td class='topo'>
       			Datos del Alumno
       		</td>
       		<td class='topo'>
       			Dastos del Padres |Tutor|Encargados
       		</td>
       	</tr>
       	<tr>
       		<td><p>Alumno: ".$_POST['alumno']."</p>
       			<p>Nombre y Apellido del Alumno: ".$_POST['nombreAlumno']."</p>
       			<p>Fecha de Nacimiento: ".$_POST['fechaNac']."</p>
       			<p>Edad: ".$_POST['edad']."</p>
       			<p>Documento de identidad: ".$_POST['documento']."</p>
       			<p>Domicilio: ".$_POST['domicilio']."</p>
       			<p>Email: ".$_POST['email']."</p>
       			<p>Telefono: ".$_POST['telefono']."</p>
       		</td>
       		<td><p>NombrePadres |Tutor|Encargados: ".$_POST['nombreContacto']."</p>
       			<p>Documento de identidad: ".$_POST['documentoContacto']."</p>
       			<p>Email: ".$_POST['emailContacto']."</p>
       			<p>Telefono: ".$_POST['telefonoContacto']."</p>
       		</td>
       	</tr>
       </table><br/>

       <table style='border: 1px solid silver;width: 600px;' cellpadding='0' cellspacing='0'>
       	<tr>
       		<td class='topo'>
       			Curso - Descripci&oacute;n
       		</td>
       	
       	</tr>
       	<tr>
       		<td>
       			".$_POST['cursos'].$_POST['horario']." (".$_POST['curso']." ".$_POST['turno'].") "."</td></tr></table><br/>"; 
       			
       	 if(isset($_POST['autorizacion'])){ 		
       		$template.="<table style='border: 1px solid silver;width: 600px;' cellpadding='0' cellspacing='0'>
       	<tr>
       		<td>
       		Autorizo a la Cultural Inglesa de Ramos Mejia a publicar im&aacute;genes en las cuales aparezca mi hijo/hija individualmente o en grupo que, con car&aacute;cter pedag&oacute;gico, se puedan realizar en el establecimiento o fuera del mismo (salidas did&aacute;cticas).
       		</td>
       	
       	</tr>
       </table>";
        } 
       	 	$template.="</body></html>";?>