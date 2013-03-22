<?php

// Clean up the input values
foreach($_POST as $key => $value) {
	if(ini_get('magic_quotes_gpc'))
		$_POST[$key] = stripslashes($_POST[$key]);
	
	$_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}

// Assign the input values to variables for easy reference
$name = $_POST["name"];
$asunto = "Envio de correo desde Safe Map";
$email = $_POST["email"];
$mensaje = $_POST["comment"];


// Test input values for errors
$errors = array();
// if(strlen($name) < 2) {
// 	if(!$name) {
// 		$errors[] = "Debe introducir un nombre.";
// 	} else {
// 		$errors[] = "El nombre debe tener al menos 2 caracteres.";
// 	}
// }
if(!$email) {
	$errors[] = "You must enter an email.";
} else if(!validEmail($email)) {
	$errors[] = "You must enter valid email.";
}

if($errors) {
	// Output errors and die with a failure message
	$errortext = "";
	foreach($errors as $error) {
		$errortext .= "<li>".$error."</li>";
	}
	die("<span class='failure'>Error sending mail:<ul>". $errortext ."</ul></span>");
}




$sPara = "ventas@safemapcozumel.com";
$diego = "judijemaui@gmail.com";
$sAsunto = "Hiring Form";
$sTexto = "\n\nHiring Form: INFO\n";
$sDe = $_POST[email];

foreach ($_POST as $sNombre => $sValor) {
$sTexto = $sTexto."\n".$sNombre." = ".$sValor;
}

$bHayFicheros = 0; 
$sCabeceraTexto = ""; 
$sAdjuntos = "";

$sCabeceras = "From: New Advertiser SMC :".$sDe."\n"; 
$sCabeceras .= "Cc:  :".$diego."\n"; 


foreach ($_FILES as $vAdjunto)
{ 
if ($bHayFicheros == 0)
{ 
$bHayFicheros = 1; 
$sCabeceras .= "Content-type: multipart/mixed;"; 
$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

$sCabeceraTexto = "----_Separador-de-mensajes_--\n"; 
$sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n"; 
$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

$sTexto = $sCabeceraTexto.$sTexto; 
} 
if ($vAdjunto["size"] > 0)
{ 
$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n"; 
$sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";; 
$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n"; 
$sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";

$oFichero = fopen($vAdjunto["tmp_name"], 'r'); 
$sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"])); 
$sAdjuntos .= chunk_split(base64_encode($sContenido)); 
fclose($oFichero); 
} 
}


$sTexto .= $sAdjuntos."\n\nMail sent from Safe Map Cozumel.\n"; 
mail($sPara, $sAsunto, $sTexto, $sCabeceras);
die("<h2 class='enviado'>Sent Email</h2>");




// A function that checks to see if
// an email is valid
function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

?>