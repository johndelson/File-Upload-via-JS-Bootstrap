<?php
	error_reporting(E_ALL ^E_WARNING ^E_NOTICE);
	
	$options = array(
		'delete_type' => 'POST',
		'db_host' => 'localhost',
		'db_user' => 'root',
		'db_pass' => '',
		'db_name' => 'test',
		'db_table' => 'files',
		'upload_dir' => dirname(__FILE__) . '/uploads/',
		'upload_url' => 'http://localhost/w/test/uploads/',
	);

	$db = new mysqli(
            $options['db_host'],
            $options['db_user'],
            $options['db_pass'],
            $options['db_name']
    );
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("<div class='alert alert-info'>Connect failed: %s\n</div>", mysqli_connect_error());
		die();
	}
	
?>