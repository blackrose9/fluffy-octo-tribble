<html>
    <header>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </header>
    <body>
    <form 	 method = "POST" action='insert.php' >
     
    
             <br/>

        <label>Business Name  </label><br />
        <input type = "text" class = "input_width" name = "businessname" value="" autofocus /><br />
        <label>Address </label><br />
        <input type = "text" class = "input_width" name = "address" value=""   autofocus /><br />
        <label>Phone# </label><br />
        <input type = "number" class = "input_width" name = "phone" value=""   autofocus /><br />
        <label>Category </label><br />
        <input type = "text" class = "input_width" name = "category" value=""   autofocus /><br />
        <label>County  </label><br />
        <input type = "text" class = "input_width" name = "county" value=""  autofocus /><br />
        <label>Website </label><br />
        <input type = "text" class = "input_width" name = "website"  value=""  autofocus /><br />
        <label>Logo</label><br />
        <input type = "text" class = "input_width" name = "logo"  value=""  autofocus /><br />
        <div class="form-group">
                <label for="description">Description</label>
                <textarea style="width:25%"name="description" class="form-control" rows="5" ></textarea>
         </div>
            <br/> 
        <input type = "submit" name = "submit" value = "submit" />
    </form>
</body>
</html>

                    
