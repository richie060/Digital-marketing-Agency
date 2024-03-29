<?php 

function validatePost($post)

{
	$errors = array();
	if (empty($post['title'])) {
		array_push($errors, "Title is required");
	}
	if (empty($post['body'])) {
		array_push($errors, "Body is required");
	}
	if (empty($post['topic_id'])) {
		array_push($errors, "Please select a topic");
	}
	
	$existingPost = selectOne('post', ['title' => $post['title']]);

	if (isset($existingPost)) {
		array_push($errors, "Post with that title already Exist");
	}
	return $errors;
}
?>