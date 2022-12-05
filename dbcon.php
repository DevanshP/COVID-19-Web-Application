<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';


$con = mysqli_connect($server,$user,$password,$db);

if ($con) {
	?>
<script >
	alert("Connection Successfull");
</script>



	<?php
} else{


	?>
<script >
	alert("No Connection was Successfull");
</script>



	<?php
}


