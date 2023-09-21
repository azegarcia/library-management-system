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
		<a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a>
    	<a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
  	</div>
</div>
<div class="sidebar">
	<a class="active" href="documents.php">All</a>
	<a href="administration.php">Administration</a>
	<a href="administrative_staff.php">Administrative Staff</a>
	<a href="cdop.php">Collection Development, Organization and Preservation</a>
	<a href="services_utilization.php">Services and Utilization</a>
	<a href="physical_sf.php">Physical Set-up and Facilities</a>
	<a href="financial_support.php">Financial Support</a>
	<a href="linkages.php">Linkages</a>
	<a href="iso_docs.php">ISO Documents</a>
</div>
<div class="content">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
								<p><a href="add_docs.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add New File</a></p>
							
                                <thead>
								<th>No.</th>                                 
                                        <th>Document</th>                                 
										<th>Description</th>
										<th class="action">Classification</th>		
										<th>Date Added</th>
										<th>Date Modified</th>
										<th>Creator</th>
										<th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from book where status = 'administrative staff'")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['book_id'];  
									
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['author']; ?> </td> 
									<td><?php echo $row ['status']; ?> </td>
									<td><?php echo $row['date_added']; ?></td>
                                     <td><?php echo $row['date_receive']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
</body>
</html>