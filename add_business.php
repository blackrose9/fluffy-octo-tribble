<?php 
session_start();
 $role =$_SESSION["authlog"]["role"];
  if($role!=="1"){
   header('Location: login.php?signin');
     }
include "header.php";?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center"><b>Register a Business</b></h2> 
                                       
                </div>   
                <br/>   
                <div align="center">
                 <?php if (isset($_GET["success"])){?>
                    <span  style = "color: green;  font-size: 18px;">Business details successfully added!!!</span>
                <?php } ?> 
                </div>       
                 <!-- /. ROW  -->
                  <hr />
        <?php include"reg_business.php";?>

				    
                  
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
<?php include "footer.php";?>