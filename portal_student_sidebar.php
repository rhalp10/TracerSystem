<div class="span3" id="sidebar">
		<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>">
		<?php include('count.php'); ?>
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<li class=""><a href="dashboard_student.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Batchmates</a></li>
			<li class="">
				<a href="student_notification.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Account Notifications
				<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
				</a>
			</li>
			<?php
			$message_query = mysql_query("select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysql_error());
			$count_message = mysql_num_rows($message_query);
			?>
			<li class="">
			<a href="student_message.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Messages
				<?php if($count_message == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
			</a>
			</li>
			<li class="active"><a href="portal_student.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Portal</a></li>
            
            <li class=""><a href="forum_student.php"><i class="icon-chevron-right"></i><i class="icon-pencil"></i>&nbsp;Forum</a></li>
              <li class=""><a href="stat_student.php"><i class="icon-chevron-right"></i><img src="img/statistics.png" width="15" height="15" />&nbsp; Statistics</a></li>
            
            
		</ul>
		<?php /* include('search_other_class.php'); */ ?>	
</div>

