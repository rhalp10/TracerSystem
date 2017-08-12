<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>">
	<?php include('teacher_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_teacher.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Alumni</a></li>
		<li class=""><a href="notification_teacher.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notifications
			<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
		</a></li>
        
		<li class=""><a href="teacher_message.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Messages</a></li> 
        
<li class=""><a href="portal_teacher.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Portal</a></li> 
        
		<li class=""><a href="stat_teacher.php"><i class="icon-chevron-right"></i><img src="img/statistics.png" width="15" height="15" />&nbsp;Statistics</a></li> 
		
        <li class=""><a href="survey_teacher.php"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Survey</a></li>
        
<li class=""><a href="register_student.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Register Student</a></li>
        
        <li class="active"><a href="add_announcement.php"><i class="icon-chevron-right"></i><img src="img/megaphone.png" width="15" height="15" />&nbsp;Post Announcement</a></li> 
       
		

</div>

