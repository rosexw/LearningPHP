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
				<?php var_dump($_POST["id"]); ?>
				<input type="text" name="automobile_id" value="<?php if (isset($_POST["automobile_id"])) ?>" />
			</td>
			<td>
				<?php var_dump($_POST["car_model"]); ?>
				<input type="text" name="car_model" value="<?php if (isset($row["car_model"])) { echo $row["car_model"]; } ?>" />
			</td>
			<td>
				<?php var_dump($_POST["weight"]); ?>
				<input type="text" name="weight" value="<?php if (isset($row["weight"])) { echo $row["weight"]; } ?>" />
			</td>
			<td>
				<?php var_dump($_POST["manufacture_year"]); ?>
				<input type="text" name="manufacture_year" value="<?php if (isset($row["manufacture_year"])) { echo $row["manufacture_year"]; } ?>" />
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
