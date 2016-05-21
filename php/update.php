<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		//$date_created = $_POST['date_created'];
		
		$query = $db->prepare("UPDATE ".$options['db_table']." SET title=?, description=? WHERE id=?");
		$query->bind_param('ssi', $title,$description,$id);
		if($query->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>