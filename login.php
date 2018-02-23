
<?php
include "header.php";
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center"><b>Login</b></h2>   
                    </div>
                    <html>
    <header>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </header>
    <body>
    <form    method = "POST" action='checklogin.php' >
     
    
             <br/>
    <div>
    <div class="col-md-12" align="center">

            <?php if (isset($_GET["signin"])){?>
                    <span style = "color: teal; font-size: 14px;">Please login to contact us</span>
                <?php } ?>
                <?php if (isset($_GET["success"])){?>
                    <span style = "color: green; font-size: 14px;">Registration Successfull!!</span>
                <?php } ?>
                <?php if (isset($_GET["incorrect"])){?>
                    <span style = "color: #dd0000; font-size: 14px;">incorrect username/password</span>
                <?php } ?>
                <?php if (isset($_GET["restricted"])){?>
                    <span style = "color: #dd0000; font-size: 14px;">Restricted area</span>
                <?php } ?>
                <br/>
             
        <label>Email Address </label><br />
        <input type = "text" class = "input_width" name = "email"  autofocus /><br /><br/>
        <label>password </label><br />
        <input type = "password" class = "input_width" name = "pass"    autofocus /><br />
     
            <br/> 
        <input type = "submit" name = "checklogin" value = "Login" />
</div>
  </div> 
    </form>
                </div>              
                 <!-- /. ROW  -->
                  
                                   
                  
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <?php include "footer.php";?>

                    
