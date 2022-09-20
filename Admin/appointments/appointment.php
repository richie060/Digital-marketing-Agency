<?php
// require('../db.php');
include ('../../path.php'); 

  require('../formErrors/validatePost.php');

$table = 'appointment';

$topics = selectAll('appointment');
$post = selectAll($table);

    $errors = array();
    $id = "";
    $message = "";
	$email = "";
	// $body = "";
	

	if (isset($_GET['id'])) {
	$post = selectOne($table , ['id' => $_GET['id']]);
	$id = $post['email'];
    $message = $post['messages'];
	$email = $post['email'];
	// $body = $post['body'];
		// dd($post);
	}





 ?>