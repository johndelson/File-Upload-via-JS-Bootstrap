<?php
include_once '../dbconfig.php';

if($_GET['id'])
{
	
	$query = $db->prepare("SELECT `id`, `type`, `name`, `title`, `description` FROM ".$options['db_table']." WHERE id=?");
	$query->bind_param('i', $id);
	$id = $_GET['id'];	
	
	$query->execute();	
	$query->bind_result(
		$id,
		$type,
		$name,
		$title,
		$description
	
	);
	 while ($query->fetch()) {
                $row['id'] = $id;
				$row['name'] = $name;
                $row['type'] = $type;
                $row['title'] = $title;
                $row['description'] = $description;
            }
		

	
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	<form method='post' id='emp-UpdateForm' class="" action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
		
		
        <tr>
            <td>Image</td>
            <td><img src="<?php echo $options['upload_url'].$row['name']; ?>" width="100%" /></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type='text' name='title' class='form-control' value='<?php echo $row['title']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><input type='text' name='description' class='form-control' value='<?php echo $row['description']; ?>' required></td>
        </tr>
 
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
