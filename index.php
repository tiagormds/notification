<?php

require __DIR__."/lib_ext/autoload.php";

use Notification\Email;


$novoEmail = new Email;
$novoEmail->sendEmail("Assunto de teste", "<p>Esse é um email de <b>Teste</b></p>", 
"tiagorafael@outlook.com", "Tiago WEB", "tiagorafaelmelo@gmail.com", "Tiago Rafael");

echo "<pre>";
var_dump($novoEmail);
echo "</pre>";