	<?php include('dbcon.php'); ?>
    
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	
		<thead>
		<tr>
					<th></th>
				<th>Profile Picture</th>
					<th>Full Name</th>
							
					<th>Batch</th>
                    <th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysql_query("select * from student LEFT JOIN class ON student.class_id = class.class_id ORDER BY student.student_id DESC") or die(mysql_error());
	while ($row = mysql_fetch_array($query)) {
		$id = $row['student_id'];
		?>
	
		<tr>
		<td width="1">
		
		</td>
	    <td width="70"><img class="img-circle" src="<?php echo $row['location']; ?>" height="70" width="70"></td> 
		<td width="100"><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td width="100"><?php echo $row['department'] . " , " . $row['class_id']; ?></td> 
	
		<td width="50"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><img src="img/search.png" width="15" height="15" /> View Info</a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>