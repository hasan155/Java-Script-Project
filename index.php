<?php include"inc/header.php"; ?>
<?php include"config.php"; ?>
<?php include"Database.php"; ?>


<?php 

$db = new Database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);

?>

<?php 

	if(isset($_GET['msg'])){
		echo "<span style='color:red'>".$_GET['msg']."<?span>";
	}
	
?>



<table class="tab" cellpadding="5" border="2">
	<tr>
		<th width="35%">Name</th>
		<th width="35%">Email</th>
		<th width="15%">Skil</th>
		<th width="15%">Action</th>
	</tr>	
	<?php if($read) {?>
	<?php while($row = $read->fetch_assoc()) {?>
	<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['skill']; ?></td>
		<td><a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>
	</tr>
	<?php } ?>
	<?php }else{ ?>
	<p>Data is not available</p>
	<?php } ?>
</table>
<a href="create.php">create</a>






 




 


<?php include"inc/footer.php";?>