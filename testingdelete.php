
<?php
include 'dbcon.php';

$id = $_GET['ids'];

$deletequery = "delete from testing where id=$id";

$query = mysqli_query($con, $deletequery);
if($query){
?>
<script>
	alert('Deleted Successfull');
</script>
<?php
header('location:testingdata.php');
}else{
	?>
	<script>
		alert('Not deleted');
	</script>

	<?php
}




?>