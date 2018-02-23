<?php
include "connection.php";
$sql="SELECT * FROM business_details";
$records = mysqli_query($conn,$sql) or die(mysqli_error($con));
include "header.php";
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center"><b>Business Listings</b></h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
				    <table class="table table-striped">
<tr>
<th>Business Name</th>
<th>Address</th>
<th>Phone#</th>
<th>Category</th>
<th>County</th>
<th>Website</th>
<th>Logo</th>
<th>Description</th>

<tr>


<?php
while ($values = mysqli_fetch_assoc($records)){
	
	echo "<tr>";
	
	
echo "<td>".$values['business_name']. "</td>";
echo "<td>".$values['address']. "</td>";
echo "<td>".$values['phone_number']. "</td>";
echo "<td>".$values['category_name']. "</td>";
echo "<td>".$values['county_name']. "</td>";
echo "<td>".$values['weblink']. "</td>";
echo "<td><img src='".$values['logo']."'></td>";
?>


 
<?php echo "<td>" ?><div id="" style="overflow:scroll; height:100px;width:300px;"><?php echo $values['description'];  ?></div><?php echo "</td>"; ?>
 

<?php

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