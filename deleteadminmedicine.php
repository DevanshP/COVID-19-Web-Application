
<?php
include 'dbcon.php';

$id = $_GET['ids'];

$deletequery = "delete from meddata where id=$id";

$query = mysqli_query($con, $deletequery);
if($query){
?>
<script>
	alert('Deleted Successfull');
</script>
<?php
header('location:adminmedicine.php');
}else{
	?>
	<script>
		alert('Not deleted');
	</script>

	<?php
}




?>