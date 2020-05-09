# Notification library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require gustavoweb/compositer_teste
```

To make use of the library, simply request or automatically load the composer, invoke a class and make a method call:

``` sh
<? php

require __DIR__.'/vendor/autoload.php';

USE \Email notification;

$email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)",
"from@email.com", "From name");

$email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending email is using the magic builder method! Once, you invoked the constructor method within your application, your system is capable of causing shots.

### Developers
* [Gustavo Web] - Developer of this library and tutor of the Composer in Practice course!
* [Robson V. Leite] - CEO and founder of UpInside Treinamentos
* [UpInside Treinamentos] - Official website of your digital programming and marketing school
* [phpMailer] - Lib to send email

License
----

MIT

** Another UpInside Training course, make good use of it! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Robson V. Leite]: <mailto: robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
