<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 4%;
			background-color:#9334E6;
			position: relative;
			color: white;
			font-size: 150%;
			margin-bottom:20px;
		}
		#sub_header{
			position: relative;
			float:right;
			color: #AE6753;
			
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
			margin: 8px;
			padding: 5px;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: blue;
			border: solid 2.5px #9334E6;
			padding-left: 50px;
		}
		#top_span{
			top: 11%;
			width: 80%;
			left: 17%;
			position: fixed;
			color:black;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center><strong>Student Information Management System</strong>
		</center>
	</div>
	<div id="sub_header">
		Email: <?php echo $_SESSION['email'];?>&nbsp; &nbsp;
		Name: <?php echo $_SESSION['name'];?>
		&nbsp; &nbsp;
		<a href="logout.php">Log out</a>
		&nbsp;&nbsp;
	</div>
	<span id="top_span"><marquee>Welcome to Student Information Management System</marquee></span>
	<div id="left_side">
		<br><br><br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_student" value="Edit Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_student" value="Add New Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_student" value="Delete Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show teacher" value="Show Teachers">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="iamarks" value="IA Marks">
					</td>
				</tr><tr>
					<td>
						<input type="submit" name="attendence" value="Attendence">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter USN No:</b>&nbsp;&nbsp; <input type="text" name="usn">
					<input type="submit" name="search_by_usn_for_search" value="Search">
					</form><br><br>
					<h4><b><u>Student's details</u></b></h4><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_usn_for_search']))
				{
					$query = "select * from students where usn = '$_POST[usn]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<tr>
								<td>
									<b>USN No:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['usn']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Father's Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['father_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Branch:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['branch']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mobile']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" value="<?php echo $row['password']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Remark:</b>
								</td> 
								<td>
									<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
								</td>
							</tr>
						</table>
						<?php
					}
				}
			?>
			<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter USN No:</b>&nbsp;&nbsp; <input type="text" name="usn">
				<input type="submit" name="search_by_usn_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>Student's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_usn_for_edit']))
			{
				$query = "select * from students where usn = '$_POST[usn]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>USN No:</b>
							</td> 
							<td>
								<input type="text" name="usn" value="<?php echo $row['usn']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>branch:</b>
							</td> 
							<td>
								<input type="text" name="branch" value="<?php echo $row['branch']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
			?>
			<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter USN No:</b>&nbsp;&nbsp; <input type="text" name="usn">
				<input type="submit" name="search_by_usn_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>USN No:</b>
							</td> 
							<td>
								<input type="text" name="usn" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>branch:</b>
							</td> 
							<td>
								<input type="text" name="branch" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			<?php 
				if(isset($_POST['iamarks'])){
					?>
					<center>
						<h5>IA Marks</h5>
						<table>
							<tr>
								<td id="td">
									<b>USN No.<b>
								</td>
								<td id="td">
									<b>DBMS<b>
								</td>
								<td id="td">
									<b>ATC<b>
								</td>
								<td id="td">
									<b>UNIX<b>
								</td>
								<td id="td">
									<b>Python<b>
								</td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from iamarks";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['usn']?></td>
								<td id="td"><?php echo $row['dbms']?></td>
								<td id="td"><?php echo $row['atc']?></td>
								<td id="td"><?php echo $row['unix']?></td>
								<td id="td"><?php echo $row['python']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
			<?php 
				if(isset($_POST['attendence'])){
					?>
					<center>
						<h5>Attendence</h5>
						<table>
							<tr>
								<td id="td">
									<b>USN No.<b>
								</td>
								<td id="td">
									<b>DBMS<b>
								</td>
								<td id="td">
									<b>ATC<b>
								</td>
								<td id="td">
									<b>UNIX<b>
								</td>
								<td id="td">
									<b>Python<b>
								</td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from attendence";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['usn']?></td>
								<td id="td"><?php echo $row['dbms']?></td>
								<td id="td"><?php echo $row['atc']?></td>
								<td id="td"><?php echo $row['unix']?></td>
								<td id="td"><?php echo $row['python']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5>Teacher's Details</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Courses</b></td>
								<td id="td"><b>Branch</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['courses']?></td>
								<td id="td"><?php echo $row['branch']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>