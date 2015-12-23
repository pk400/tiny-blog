<?php
	include_once("header.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo $_POST['user'];
	}
?>
	<h1>Register</h1>
	<table>
		<form method="post" action="register.php">
			<tr><td>Username: <input type="text" name="user" /></td></tr>
			<tr><td>Password: <input type="password" name="pass" /></td></tr>
			<tr><td><input type="submit" value="Register!" /></td></tr>
		</form>
	</table>
</div>
<script src="../scripts/angular.min.js"></script>
</body>
</html>
