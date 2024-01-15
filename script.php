<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
if (strlen($name) > 3) {
    echo 'nome inserito:' . $name;
} else {
    echo 'nome troppo breve';
};
