<?php include('header.php'); ?>
<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
			if($(this).is(":checked")){
				$(".checkItem").prop('checked', true);
			}
			else{
				$(".checkItem").prop('checked', false);
			}
		})
	});
</script>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a:hover:not(.active) {
  background-color: #893523;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #893523;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.inactiveLink {
   pointer-events: none;
   cursor: default;
}
.topnav-right {
  float: right;
}
</style>
</head>
<body>
<div class="navbar">
	<a class="inactiveLink"> Batangas State University - Library </a>
	<div class="topnav-right">
    	<a href="documents.php"><i class="icon-signout icon-large"></i>&nbsp;Back</a>
  	</div>
</div>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($conn,"select * from book  where book_id='$get_id'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
	
		?>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_documents.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Upload File:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="book_title" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Description:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="author" required>
			</div>
		</div>
	
		<div class="control-group">
		<label class="control-label" for="inputPassword">Classification:</label>
			<div class="controls">
			<select name="status">
				<option>Administration</option>
				<option>Administrative Staff</option>
				<option>Collection Development, Organization and Preservation</option>
				<option>Services and Utilization</option>
				<option>Physical Set-up and Facilities</option>
				<option>FInancial Support</option>
				<option>Linkages</option>
				<option>ISO Documents</option>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Creator:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="author" required>
			</div>
		</div>
		
		
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
</body>
</html>