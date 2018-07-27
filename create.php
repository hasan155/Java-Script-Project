 <?php include"inc/header.php"; ?>
<?php include"config.php"; ?>
<?php include"Database.php"; ?>

<?php
	$db = new Database();
	if(isset($_POST['submit'])){
		$name  = mysqli_real_escape_string($db->link, $_POST['name']);
		$email = mysqli_real_escape_string($db->link, $_POST['email']);
		$skill = mysqli_real_escape_string($db->link, $_POST['skill']);

		if($name =='' || $email =='' || $skill ==''){

			$error = "fidel must not be empty.";
		}else{
			$query = "INSERT INTO tbl_user(name, email, skill) values('$name', '$email' ,'$skill')";
			$create = $db->insert($query);
		}

	}
?>

<?php 

	if(isset($error)){
		echo "<span style='color:red'>".$error."<?span>";
	}
	
?>


<form action="create.php" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="enter your name"></td>
		</tr>
		<tr>
			<td>Eamil</td>
			<td><input type="text" name="email" placeholder="enter your email"></td>
		</tr>
		<tr>
			<td>Skill</td>
			<td><input type="text" name="skill" placeholder="enter your skill"></td>
		</tr>	
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="sent">
				<input type="reset" name="reset" value="cencel">
			</td>
		</tr>
	</table>
</form>
<a href="index.php">back</a>



 


<?php include"inc/footer.php";?>


