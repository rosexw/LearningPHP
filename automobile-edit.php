<h1>Edit a Car</h1>
<?php
	if ($error != '') {
		echo $error;
	}
?>

<table>
	<thead style = "font-weight: bold">
		<td> Automobile ID </td>
		<td> Car Model </td>
		<td> Weight </td>
		<td> Manufacture Year </td>
	</thead>
	<tr>
		<form name="edit" method = "POST" action = "validation.php">
			<td>
				<?php $_POST["automobile_id"] ?>
				<input type="hidden" name="automobile_id" value="<?php if (isset($_POST["automobile_id"])) ?>" />
			</td>
			<td>
				<input type="text" name="car_model" value="<?php if (isset($_POST["car_model"])) { echo $_POST["car_model"]; } ?>" />
			</td>
			<td>
				<input type="text" name="weight" value="<?php if (isset($_POST["weight"])) { echo $_POST["weight"]; } ?>" />
			</td>
			<td>
				<input type="text" name="manufacture_year" value="<?php if (isset($_POST["manufacture_year"])) { echo $_POST["manufacture_year"]; } ?>" />
			</td>
			<td>
				<?php
					echo "	<input type = 'submit' value = 'Update'>";
				?>
			</td>
		</form>
		<a href="index.php">Go Back to Home Page</a>

	</tr>

	<tr>
	</tr>

</table>
