<?php include('header.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../LMS/batstateu.png" class="img-rounded" width="1170" height="220">

					</div>
				<div class="login">
				<div class="log_txt" style="background-color: #893523">
				<center><p><strong>LOGIN</strong></p></center>
				</div>
						<form method="POST" action="../index.php" class="col-md-12 bg-light text-right">
    						<button id="back" type="back" class="btn btn-danger"><i class="icon-signout icon-large"></i>&nbsp;Back</button>
    						&nbsp
    						&nbsp
    						&nbsp
  						</form>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Username</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<center><div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
								</div>
								</div></center>
								
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
								$result = mysqli_query($conn,$query)or die(mysqli_error());
								$num_row = mysqli_num_rows($result);
									$row=mysqli_fetch_array($result);
									if( $num_row > 0 ) {
										$_SESSION['username'] = $username;
										header('location:documents.php');
								$_SESSION['id']=$row['user_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Access Denied</div>		
								<?php
								}}
								?>
						</form>
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>