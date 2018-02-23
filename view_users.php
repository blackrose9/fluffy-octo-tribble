<?php
 session_start();
 $role =$_SESSION["authlog"]["role"];
  if($role!=="1"){
   header('Location: login.php?restricted');
     }
include "connection.php";
$sql="SELECT * FROM users";
$records = mysqli_query($conn,$sql) or die(mysqli_error($con));
include "header.php";
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center"><b>Registered Users</b></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
				    <table class="table table-striped">
<tr>
<th>User ID</th>
<th>Fullname</th>
<th>Email</th>
<th>Role</th>
<th>Last Acces</th>
<tr>


<?php
while ($values = mysqli_fetch_assoc($records)){
	
	echo "<tr>";
	
echo "<td>".$values['user_id']. "</td>";	
echo "<td>".$values['fullname']. "</td>";
echo "<td>".$values['email']. "</td>";
echo "<td>".$values['role']. "</td>";
echo "<td>".$values['lastaccess']. "</td>";



	echo "<tr>";
}	
	?>

</table>
                  
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <?php include "footer.php";?>