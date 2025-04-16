<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>    	
  <div class="row-fluid">
    		<div class="span6" style="margin-left: 220px;">
    		<div class="alert alert-success">Register User</div>
    			<form class="form-horizontal"action="register_controller.php" method="POST">
				<div class="control-group">
    				<label class="control-label" for="inputNama">Nama</label>
    			<div class="controls">
    				<input type="text" id="inputNama" name="nama" placeholder="nama" required>
    			</div>
				<div class="control-group">
    				<label class="control-label" for="inputUsername">Username</label>
    			<div class="controls">
    				<input type="text" id="inputUsername" name="username" placeholder="Username" required>
    			</div>
    			</div>
    			<div class="control-group">
    				<label class="control-label" for="inputPassword">Password</label>
    			<div class="controls">
    				<input type="text" id="inputPassword" name="password" placeholder="Password" required>
    			</div>
    			</div>
    			<div class="control-group">
    			<div class="controls">
    			<button type="submit" class="btn btn-success">Save</button>
    			</div>
    			</div>
    			</form>
    		</div>
    	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    	</div>
  
</body>
</html>