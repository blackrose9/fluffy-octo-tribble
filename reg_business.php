<html>
    <header>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </header>
    <body>
    <form 	 method = "POST" action='insert.php' enctype="multipart/form-data" >
     

    
             <br/>
    <div>
    <div class="col-md-6">
        <label>Business Name  </label><br />
        <input type = "text" class = "input_width" name = "businessname" value="" autofocus required/><br />
        <label>Address </label><br />
        <input type = "text" class = "input_width" name = "address" value=""   autofocus required/><br />
        <label>Phone# </label><br />
        <input type = "number" class = "input_width" name = "phone" value=""   autofocus required/><br />
        <label>Category </label><br />
        
            <?php include "connection.php";
                $sql="select * from categories";
                echo '<select name="category">';
                $records = mysqli_query($conn,$sql) or die(mysqli_error($con));
                while($values=mysqli_fetch_assoc($records)){
                    echo '<option value="'.$values['category_name'].'">'.$values['category_name'].'</option>';
                } 
                echo '</select>';

            ?>
                  <br/>     
        <label>County </label><br />
          <?php include "connection.php";
                $sql="select * from counties";
                echo '<select name="county">';

                $records = mysqli_query($conn,$sql) or die(mysqli_error($con));
                while($values=mysqli_fetch_assoc($records)){
                    
                    echo '<option value="'.$values['county_name'].'">'.$values['county_name'].'</option>';
                } 
                echo '</select>';

            ?>
       
        </div>
        <div class="col-md-6">
             <label>Website </label><br />
             <input type = "text" class = "input_width" name = "website"  value=""  autofocus required/><br />
             <label>Logo</label><br />
            <input id='upload' name="upload[]" type="file" multiple="multiple" />
            <div class="form-group">
                <label for="description">Description</label>
                <textarea style="width:50%"name="description" class="form-control" rows="5" required></textarea>
         </div>
            <br/> 
        <input type = "submit" name = "submit" value = "submit" />
</div>
  </div> 
    </form>
</body>
</html>

                    
