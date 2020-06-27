<!DOCTYPE html>
<html>
<head>
	<title>Form Handling</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	  <h2 class="bg-dark text-light text-center">Form Handling in PHP</h2>
   <div class="container fluid">
   	<div class="row">
   		<div class="col-md-12">
   		<div class="form-group">
     	<form action="welcome.php" method="POST" class="form-group">
      	<label>Name:</label><input type="text" name="name" class="form-control" placeholder="Enter Name"><br>
        <label>Email:</label><input type="text" name="email" class="form-control" placeholder="Enter Email"><br>
      	<input type="submit" name="" value="submit" class="btn btn-success">
      </form>
     </div>
   		</div>
   	</div>
   </div>
</body>
</html>