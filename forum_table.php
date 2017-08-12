	<?php include('dbcon.php'); ?>
    
	<form method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	
		<thead>
		<tr>
					
				<th>Posted by:</th>
											
					<th>Post</th>
                    
                    <th>Posted on : </th>
                       <th></th>
                    
                    
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysql_query("select * from forum") or die(mysql_error());
	while ($row = mysql_fetch_array($query)) {
		$id = $row['student_id'];
		?>
	
		<tr>
		<td width="1">
		
		</td>
	    <td width="70"><img class="img-circle" src="<?php echo $row['location']; ?>" height="70" width="70"> <?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
	
    		<td width="200"><?php echo $row['post']?></td> 

    
		<td width="70"><?php echo $row['postdate'] . " , " . $row['posttime']; ?></td> 
	
		<td width="50"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><img src="img/search.png" width="15" height="15" /> View Info</a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>