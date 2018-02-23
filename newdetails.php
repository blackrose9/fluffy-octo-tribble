<?php

 session_start();
 $role =$_SESSION["authlog"]["role"];
  if($role!=="1"){
   header('Location: login.php?restricted');
     } 
include "header.php";?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center"><b>Add new details</b></h2> 
                                       
                </div>   
                <br/>           
                 <!-- /. ROW  -->
                  <hr />
                  <div >
                    <div class="col-md-6">
        <?php include"categories.php";?>

                  </div>
                   <div class="col-md-12">
        <?php include"counties.php";?>
                    
                  </div>
                  </div>
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
<?php include "footer.php";?>