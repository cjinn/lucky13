<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php //include("includes/navigation.php");?>

<div class="container" id="main-content">
	<div>
		<form action="login-result.php" method="post">
		<div>
			<div>
				<div>
					<div><p>Username</p></div>
					<input type="text" name="username"/>
				</div>
				<div>
					<div><p>Password</p></div>
					<input type="text" name="password"/>
				</div>
			</div>
			<div>
				<input type="submit"/>
			</div>
		</div>
		</form>
	</div>

</div>

<?php include("includes/footer.php");?>

</body>
</html>