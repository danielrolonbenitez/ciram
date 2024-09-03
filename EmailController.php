<?php

require_once(dirname(__FILE__)."/PHPMailer/phpmailer.php");

require_once(dirname(__FILE__)."/PHPMailer/class.smtp.php");

//error_reporting(-1);

class EmailController{



    var $mailer;

  

    public function __construct(){  



        $this->mailer = new PHPMailer();

        $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER; 

        $this->mailer->IsSMTP(); // telling the class to use SMTP

        $this->mailer->IsHTML(true); // Envio tipo HTML

        $this->mailer->SMTPAuth = true;

        $this->mailer->SMTPSecure = 'ssl';

        $this->mailer->Port = 465;

        $this->mailer->Priority = 1; // ******** PRIORIDAD *******

        //$this->mailer->Host ="smtp.gmail.com"; //Modificar por el host de salida

        //$this->mailer->Username ="infoguiadelpackaging@gmail.com";    // SMTP username -- CHANGE --

        //$this->mailer->Password ="jkevtswkqcvpllwz";    // SMTP password -- CHANGE --
        

        $this->mailer->Host ="ra.servidoraweb.net"; //Modificar por el host de salida
        $this->mailer->Username ="contacto@ciram.com.ar";    // SMTP username -- CHANGE --
        $this->mailer->Password ="ciram2024nuevo";    // SMTP password -- CHANGE --
    
        $this->mailer->CharSet = 'utf-8'; 

        $this->mailer->WordWrap =50;

      }



    public function enviaEmail($from,$mensaje,$asunto,$des,$pdfContent){



       

         $from=$from;

         $fromEmail=$from;

         
              

            

        $this->mailer->Subject = $asunto;

        $this->mailer->ClearAllRecipients();

        $this->mailer->setFrom($fromEmail, $from); 



        if(count($des)>0){   

              foreach($des as $destinatario){

                $this->mailer->AddAddress($destinatario);

              }

            }else{

                $this->mailer->AddAddress($fromEmail);

                $mensaje="error en la direccion de email al enviar el email.";

              }

             $this->mailer->Body = $mensaje;
             $this->mailer->addStringAttachment($pdfContent, 'archivo.pdf');
             




            $send=$this->mailer->send();

          if($send==false){

            return "Failed: ".$this->mailer->ErrorInfo;

        }else{

              return 1;

               }

        



            

    }

    

}



?>

