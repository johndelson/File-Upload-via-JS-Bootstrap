<?php
require_once '../dbconfig.php';
?>
	

        
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
<tr>
<th>ID</th>
<th>Thumbnail</th>
<th>Title</th>
<th>Filename</th>
<th>Date</th>
<th>Manage</th>
</tr>
</thead>
<tbody>
<?php


$query = $db->prepare("SELECT `id`, `type`,`size`, `name`, `title`, `description`,`date`  FROM ".$options['db_table']." ORDER BY date DESC");
$query->execute();
$query->bind_result(
	$id,
	$type,
	$size,
	$name,
	$title,
	$description,
	$date
);
while ($query->fetch()) {

	?>
	<tr>
	<td><?php echo $id; ?></td>

	<td><img src="<?php echo $options['upload_url'].'thumbnail/'.$name; ?>" /></td>
	<td><?php echo $title; ?></td>
	<td><?php echo $name; ?></td>
	<td><?php echo $date; ?></td>
	<td align="center">

	
	<button class="btn btn-warning edit btn-modal"  data-id="<?php echo $id; ?>" data-url="edit_form.php" data-title="Edit Image" >
		<i class="glyphicon glyphicon-edit"></i>
		<span>Edit</span>
	</button>
	
	<button class="btn btn-danger delete btn-modal"  data-type="POST" data-url="files/index.php?file=<?php echo $name; ?>&amp;_method=DELETE"  data-confirm="yes" data-title="Delete Image" >
		<i class="glyphicon glyphicon-trash"></i>
		<span>Delete</span>
	</button>

	</td>
	</tr>
	<?php
}
?>
</tbody>
</table>     
     
