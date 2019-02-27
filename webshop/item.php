<?php
include('layout/header.php');
include('lib/form.php');
$youraccount = 3;
$value = 10;
$description = 'THIS IS COOL';
$form = new form;
$form->display_forum($value, $youraccount, $description);
