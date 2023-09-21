<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
				<ul class="nav nav-tabs nav-stacked">
					<li>
						<a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
					</li>
				</ul>								 
     <!-- Modal add user -->
	<?php include('modal_add_user.php'); ?>
										
			</div>
			<div class="span10">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                               
                                </div>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Firstname</th>                                 
                                        <th>Lastname</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysqli_query($conn,"select * from users")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['user_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['firstname']; ?></td> 
                                    <td><?php echo $row['lastname']; ?></td> 
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_user_modal.php'); ?>
										<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('modal_edit_user.php'); ?>
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>