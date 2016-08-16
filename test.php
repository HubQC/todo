<?php
	$file = __DIR__ . "/data/users.json";
	$users_protype = file_get_contents($file);
	$users = json_decode($users_protype);
	
	var_dump($users);	
	var_dump(count($users));

