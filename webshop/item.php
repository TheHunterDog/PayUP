<?php
include('layout/header.php');
include('lib/form.php');
$youraccount = 2;
$value = 1;
$description = 'cool item';
$form = new form;
$form->display_forum($value, $youraccount, $description);
