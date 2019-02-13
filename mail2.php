<?php
/**
 * Created by PhpStorm.
 * User: luisc
 * Date: 25/7/2016
 * Time: 8:58 PM
 */

$name = $_POST['nameResponsive'];
//$dni = $_POST['dniResponsive'];
//$address = $_POST['addressResponsive'];
//$district = $_POST['districtResponsive'];
$email = $_POST['emailResponsive'];
$cellphone = $_POST['cellphoneResponsive'];
//$radio = $_POST['radioResponsive'];
$subject = $_POST['subjectResponsive'];
$message = $_POST['messageResponsive'];

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: ventas@nutripharma.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail('ventas@nutripharma.com', $subject, 'Nombre: '.$name."\n\n
                                                        Correo: ".$email."\n\n
                                                        Celular: ".$cellphone."\n\n
                                                        Mensaje: ".$message, $headers);
header("Location: index.html");
die();