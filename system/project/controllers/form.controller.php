<?php

$task_name = request::post('task_name', '');
$task_description = request::post('task_description', '');
$users = request::post('user[]', '');
if(isset($_POST)) {
	createTask($task_name, $task_description);
}													//ASK HONSA

$instructions = new view('contact/instructions');

//  /system/project/views/contact/form.php
//  contact/form
$form = new view('contact/form');
$form->task_name = $task_name;
$form->task_description = $task_description;
$form->users = $users;

presenter::setTitle('Contact form');

presenter::present($form);