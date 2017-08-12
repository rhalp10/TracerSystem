<?php $get_id = $_GET['id']; ?>
                
                <?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('portal_teacher_sidebar.php'); ?>
				<div class="span9" id="adduser">
				<?php include('view_profile.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                       
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>