<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $firstname = $_POST['firstname'];
               $lastname = $_POST['lastname'];
			   $middlename = $_POST['middlename'];
			   $address = $_POST['address'];
			   $department = $_POST['department'];
			   $bday = $_POST['bday'];
			   $class_id = $_POST['class_id'];
			   $admit = $_POST['admit'];

               mysql_query("insert into student (firstname,middlename,lastname,address,bday,department,admit,class_id,username,location,status)
		values ('$firstname','$middlename','$lastname','$address','$bday','$department','$admit','$class_id','$un','img/student.png','Unregistered')                                    
		") or die(mysql_error()); ?>
<?php    ?>