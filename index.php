<?php

require __DIR__."/lib_ext/autoload.php";

use Notification\Email;


$novoEmail = new Email(2, "smtp.mailtrap.io", "001fa5c08b7378", "6453521e099609", "cram_md5", "2525", "tiagorafael@outlook.com", "Equipe Tiago WEB");
$novoEmail->sendEmail("Assunto de teste", "<p>Esse é um email de <b>Teste</b></p>", 
"tiagorafael@outlook.com", "Tiago WEB", "tiagorafaelmelo@gmail.com", "Tiago Rafael");

echo "<pre>";
var_dump($novoEmail);
echo "</pre>";