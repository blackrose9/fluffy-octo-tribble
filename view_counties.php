<?php
include "connection.php";
$sql="SELECT * FROM counties ";
$records = mysqli_query($conn,$sql) or die(mysqli_error($con));
include "header.php";
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                   
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  <h3 align="center">Counties</h3>
				    <table class="table table-striped">



<?php
while ($values = mysqli_fetch_assoc($records)){
	
	echo "<tr>";
	
	
echo "<td>".$values['county_name']. "</td>";

 
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
