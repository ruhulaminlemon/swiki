<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	<div class="container">
		<div class="row"><center>
			<div class="col-md-12">
				<h2 class="text-center">
					     WELCOME TO ADMIN DASHBOARD </h2>
					<p><span><a href="logout.php" class="btn btn-success" style="float: right;">LOGOUT</a><span>
</p><br><br><br><br> 
			</div>
		</div>
	</div>
</div>

<div class="admin-dashboard text-center">
        <div class="container">
        	
            <div><h3>
                <div class="row"><center>
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                        <a href="addstudent.php" class="btn btn-info btn-lg">INSERT STUDENT DETAIL</a><br><br>
                        <a href="updatestudent.php" class="btn btn-info btn-lg">UPDATE STUDENT DETAIL</a><br><br>
                        <a href="deletestudent.php" class="btn btn-info btn-lg">DELETE STUDENT DETAIL</a> <br><br> 
                        <a href="index.html" class="btn btn-info btn-lg">FACULTY PROFILE</a>  
                        
                    </div></h3>
                </div>
            </div>
        </div>
</div>

<?php include('../footer.php') ?>
