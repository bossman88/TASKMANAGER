<?php

$task_name = request::post('task_name', '');
$task_description = request::post('task_description', '');
$users = request::post('user[]', '');

if ($_POST) {
	$db = new Database();
	$db->insertTask($task_name, $task_description);
	header('Location: index.php');
}						

$instructions = new view('form/instructions');

//  /system/project/views/contact/form.php
//  contact/form
$form = new view('form/form');
$form->task_name = $task_name;
$form->task_description = $task_description;
$form->users = $users;

presenter::setTitle('Contact form');

presenter::present($form);