<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('forum_student_sidebar.php'); ?>
               <div class="span6" id="content">
                     <div class="row-fluid">
					  
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="read_message.php" method="post">
										<div class="pull-right">
										
													
						
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							
										</div>
										
										<ul class="nav nav-pills">
										<li class="active"><a href="student_message.php"><img src="img/forum.png" width="20" height="15">Posts</a></li>
										<li class=""><a href="sent_message_student.php"><i class="icon-envelope-alt"></i>Send messages</a></li>
										</ul>
									
									
                                                                        
                                        <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('forum_table.php'); ?>
                                </div>
                            </div>
                                    
                                   
                                    
                                                                        
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
<script type="text/javascript">
	$(document).ready( function() {
		$('.remove').click( function() {
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_inbox_message.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Sent message is Successfully Deleted", { header: 'Data Delete' });	
			}
			}); 		
			return false;
		});				
	});
</script>
			<script>
/* 			jQuery(document).ready(function(){
			jQuery("#reply").submit(function(e){
					e.preventDefault();
					var id = $('.reply').attr("id");
					var _this = $(e.target);
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "reply.php",
						data: formData,
						success: function(html){
						$.jGrowl("Message Successfully Sent", { header: 'Message Sent' });
						$('#reply'+id).modal('hide');
						}
						
					});
					return false;
				});
			}); */
			</script>
	

                </div>
				<?php include('forum_student_create.php') ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>