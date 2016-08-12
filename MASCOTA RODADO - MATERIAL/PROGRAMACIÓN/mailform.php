<?  

/******************************************************
**
**   Flash Mx PHP Mailer
**
** By - David Khundiashvili
*******************************************************/

/******************************************************* 

Enter your site details below!

*******************************************************/

// Enter your contact email address here
$adminaddress = "info@mascotarodados.com.ar"; 

// Enter the address of your website here include http://www. 
$siteaddress ="http://www.mascotarodados.com.ar"; 

// Enter your company name or site name here 
$sitename = "MASCOTA RODADOS"; 

/*******************************************************

No need to change anything below ... 

*******************************************************/

// Vester 2008-06-11

foreach($_REQUEST as $k => $v)
    $$k = $v;

$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

// Fin Vester

$date = date("m/d/Y H:i:s");

if ($REMOTE_ADDR == "") $ip = "no ip";
else $ip = getHostByAddr($REMOTE_ADDR);


if ($action != ""): 
mail("$adminaddress","CONTACTO ONLINE", 
"Un visitante en  $sitename ha dejado la siguiente información\n\n
Nombre: $nombre \n
Apellido: $apellido \n
Teléfono: $telefono \n
E-mail: $email \n
Consulta: $consulta \n\n

Logged Info :
------------------------------
Using: $HTTP_USER_AGENT
Hostname: $ip
IP address: $REMOTE_ADDR
Date/Time:  $date","FROM:$adminaddress"); 

mail("$email","Gracias por visitar nuestro web site, $sitename", 
"$fname,\n
Gracias por dejarnos su mensaje en $sitename!\n
saludos,
$sitename
$siteaddress","FROM:$adminaddress"); 

$sendresult = "A la brevedad nos pondremos en contacto con usted.";
$send_answer = "answer=";
$send_answer .= rawurlencode($sendresult);
echo "$send_answer";

endif;

?>

