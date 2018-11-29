<?php
//llamada a los campos
$firstname = $_POST['first_name'];
$calle = $_POST['street_address'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$emailaddress = $_POST['email_address'];
//textos del correo
$asunto = "ShopMex";
$carta = "Hola: $firstname \n";
$carta .= "Su compra a sido concretada y su producto sera enviado a: $calle con el codigo postal $postcode";
//enviando mensaje
mail($emailaddress, $asunto, $carta);

?>