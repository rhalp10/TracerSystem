			<form id="signin_student" class="form-signin" method="post">
			<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Student</h3>
            <br>            
            	<center><h4>Personal Information</h4></center><hr>
            <input type="text" class="input-block-level" id="username" name="username" placeholder="ID Number" required>
	<input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required>
          <input type="text" class="input-block-level" id="middlename" name="middlename" placeholder="Middlename" required>
            
			<input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required>
            
           	<input type="text" class="input-block-level" id="address" name="address" placeholder="Home Address" required>
            	
              	<input type="email" class="input-block-level" id="email" name="email" placeholder="Email Address" required>	
              
              
                	<label>Birth Date</label>
          
                <input type="date" class="input-block-level" id="bday" name="bday" placeholder="BirthDate" required>            
                
          <label>Department</label>
			<select name="department" class="input-block-level span5"style="width:300px">
				<option></option>
				<?php
				$query = mysql_query("select * from department order by department_name ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['department_name']; ?></option>
				<?php
				}
				?>
			</select>

                               
                
			<label>School Year Admitted</label>
			<select name="admit" class="input-block-level span5" style="width:300px">
				<option></option>
				<?php
				$query = mysql_query("select * from class order by class_name ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
			</select>
            
            	<label>School Year Graduated</label>
				<select name="class_id" class="input-block-level span5"style="width:300px">
				<option></option>
				<?php
				$query = mysql_query("select * from class order by class_name ")or die(mysql_error());
				while($row = mysql_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
			</select>
             <br>            
            	<center><h4>Employment Status</h4></center><hr>
            
            <input type="text" class="input-block-level" id="work" name="work" placeholder="Work" required>
            
            <input type="text" class="input-block-level" id="company" name="company" placeholder="Company" required>
            
            	<center><h4>Security</h4></center><hr>
            
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
			<center><button id="signin" name="login" class="btn btn-info" type="submit" style="width:300px"><i class="icon-check icon-large"></i> Sign up</button></center>
			</form>
			
		
			
		<script>
			jQuery(document).ready(function(){
			jQuery("#signin_student").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to CVSU-CEIT DIT ONLINE TRACER STUDY", { header: 'Sign up Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
						}else if(html=='false'){
							$.jGrowl("student does not found in the database Please Sure to Check Your ID Number", { header: 'Sign Up Failed' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("Record was not found in the database", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>

			
		
			<center><a onclick="window.location='home.php'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Back to Home</a></center><br>
			
			
			
				
		
					