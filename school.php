<?php
	require_once 'class/School.class.php';
	require_once 'class/Student.class.php';

	$escola = new School('FSN Cursos');
	$aluno  = new Student('Danillo', $escola);

	var_dump($aluno);