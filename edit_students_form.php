   <div class="row-fluid">
     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">View Profile</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysql_query("select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								      
                                         <center> <img class="img-circle" src="<?php echo $row['location']; ?>" height="120" width="120">
                                          <br>
                                          <label><h3><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?></label> </center></h3>
                                          
                                          
                                         <center> 
                                         <br>
                                    
                                          <div class="control-group">
                                          <div class="controls">
                                          
                                            <label><b><em>Department :</em> </label><input name="un" value="<?php echo $row['department']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">
                                            
                                              <label><b><em>Present Work :</em> </label><input name="un" value="<?php echo $row['work']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">
                                                <label><b><em>Present Company :</em> </label><input name="un" value="<?php echo $row['company']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">
                                                  <label><b><em>Batch :</em> </label><input name="un" value="<?php echo $row['class_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">
                                                    <label><b><em>Birthdate :</em> </label><input name="un" value="<?php echo $row['bday']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">
                                      
                                                <label><b><em>Address :</em> </label><input name="un" value="<?php echo $row['address']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">
                                                
                               
                                                <label><b><em>Email Address :</em> </label><input name="un" value="<?php echo $row['email']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" disabled required style="text-align:center">                 
                                          
                                              
                                                
                                                </center>
                                             </div>
                                        </div>
								
                                
							
									
										
								
										
                                           </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $cys = $_POST['cys'];
                      

								mysql_query("update student set username = '$un' , firstname ='$fn' , lastname = '$ln' , class_id = '$cys' where student_id = '$get_id' ")or die(mysql_error());

								?>
 
								<script>
								window.location = "students.php"; 
								</script>

                       <?php     }  ?>
	