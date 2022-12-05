
<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{

header("Location: adminlogin.php");
}
?>

<! -- <!DOCTYPE html>
<html>
<head>
	<title></title>
	    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
  <div class="toast" data-autohide="false">
    <div class="toast-header">
      <strong class="mr-auto text-primary">Toast Header</strong>
      <small class="text-muted"></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
      Sucessfully Logout From Admin!!
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>
</body>
</html>
--> 

