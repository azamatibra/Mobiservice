<?php

$recepient = "arser.muratov@mail.ru";

$name = trim($_POST["user_name"]);
$email = trim($_POST["user_email"]);
$message = "Имя: $name \nПочта: $email";

$pagetitle = "Новая заявка с сайта";
mail($recepient, $pagetitle, $message);