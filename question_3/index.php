<!DOCTYPE HTML>
<html>
<body>
<?php if( isset($_GET['success'])) { echo 'Success'; }; ?>
<form action="astronaut_controller.php" method="post">
	Name: <input type="text" name="name">
    <label>
        <?php if(isset($_GET['nameErr'])) { echo 'Astronaut name is required. '; } ?>
    </label>
    <br>
	Weight: <input type="text" name="weight">
    <label>
		<?php if(isset($_GET['weightErr'])) { echo 'Astronaut weight is required as a number. '; } ?>
    </label>
	<br>
	<input type="submit">
</form>
<?php

?>
</body>
</html>
