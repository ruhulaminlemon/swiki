<?php session_start();?><center>

<?php include('header.php') ?>
            <div class="jumbotron text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <H1>
                                <span><a href="index.php" class="btn btn-success " style="float:center ;">HOME <br /><br /></a></span>
                            ADMIN LOGIN
</H1>
                        </div>
                    </div>
                </div>
            </div>

</center>

            
<break>
            <div class=""> <br /><br />  <br /><br /> <center>   
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 jumbotron">
                            <form action="login.php" method="post">
                              <div class="form-group">
                                  Username:<input type="text" class="form-control" name="user" placeholder=" Enter Username" required>
                              </div>
                            <div class="form-group">
                                  Password:<input type="password" class="form-control" name="password" placeholder="Enter Passoword" required>
                            </div> 
                              <div class="form-group">
                              <br /><br />
                                  <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block text-center" > 
                              </div> 

                              </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php

    include ('dbcon.php');

    
    

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);

        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:admin/admindash.php');
                    
           
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('login.php','_self');
    </script>
    <?php
                   
                }

}
?>

<?php include('footer.php') ?>

