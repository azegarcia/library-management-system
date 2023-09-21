<?php include('header.php'); ?>
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
    	<a href="documents.php"><i class="icon-signin icon-large"></i>&nbsp;Back</a>
  	</div>
</div>
    <div class="container">	
	<div class="addstudent">
	<div class="details" style="background-color: #893523;">Upload a File</div>	
	<form class="form-horizontal" method="POST" action="document_save.php" enctype="multipart/form-data">
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 		Select a file:
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  		<input type="file" name="pdf" value="" required>
		<div class="control-group">
		<br>
			<label class="control-label" for="inputEmail" name="title" type="title">Description:</label>
			<div class="controls">
				<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Add Description" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Classification:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Administration</option>
				<option>Administrative Staff</option>
				<option>Collection Development, Organization and Preservation</option>
				<option>Services and Utilization</option>
				<option>Physical Set-up and Facilities</option>
				<option>Financial Support</option>
				<option>Linkages</option>
				<option>ISO Documents</option>
			</select>
			</div>
		</div>	
		<div style="text-align:right; width:100%; padding:0;">
			<input type="submit" value="Upload File" name="submit">
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		</div>
	</form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>