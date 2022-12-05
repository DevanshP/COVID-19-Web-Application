
<?php
include 'dbcon.php';

$id = $_GET['ids'];

$deletequery = "delete from covidcases where id=$id";

$query = mysqli_query($con, $deletequery);
if($query){
?>
<script>
	alert('deleted Successfull');
</script>
<?php
header('location:display.php');
}else{
	?>
	<script>
		alert('Not deleted');
	</script>

	<?php
}




?>