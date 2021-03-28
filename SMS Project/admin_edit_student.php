<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "update students set name='$_POST[name]',father_name='$_POST[father_name]',branch='$_POST[branch]',mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' where usn = '$_POST[usn]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
