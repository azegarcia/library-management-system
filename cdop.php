<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			 
						<!--  -->
								    <ul class="nav nav-pills">
									<li><a href="documents.php">All</a></li>
									<li><a href="administration.php">Administration</a></li>
										<li ><a href="administrative_staff.php">Administrative Staff</a></li>
										<li class="active"><a href="cdop.php">Collection Development, Organization and Preservation</a></li>
										<li><a href="services_utilization.php">Services and Utilization</a></li>
										<li><a href="physical_sf.php">Physical Set-up and Facilities</a></li>
										<li ><a href="financial_support.php">Financial Support</a></li>
										<li  ><a href="linkages.php">Linkages</a></li>
										<li  ><a href="iso_docs.php">ISO Documents</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>New Books</h1>
						</center>
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
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from book where status = 'Collection Development, Organization and Preservation'")or die(mysqli_error());
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