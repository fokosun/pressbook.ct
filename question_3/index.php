<!DOCTYPE HTML>
<html>
<body>
<?php if( isset($_GET['success'])) { echo 'Success'; }; ?>
<form action="astronaut_controller.php" method="post">
	Name: <input type="text" name="name">
    <label>
        <?php if(isset($_GET['nameErr'])) { echo '<p style="color: red; font-size: xx-small;"> *Astronaut name is required. </p>'; } ?>
    </label>
    <br>
	Weight: <input type="text" name="weight">
    <label>
		<?php if(isset($_GET['weightErr'])) { echo '<p style="color: red; font-size: xx-small;"> *Astronaut weight is required as a number. </p>'; } ?>
    </label>
	<br>
	<input type="submit">
</form>
</body>
</html>
