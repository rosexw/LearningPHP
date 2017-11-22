<link rel="stylesheet" type="text/css" href="style.css">

<h1>Edit a Car</h1>

<table>
	<thead>
		<th> Automobile ID </th>
		<th> Car Model </th>
		<th> Weight </th>
		<th> Manufacture Year </th>
		<th> Sales Email </th>
	</thead>
	<tr>
		<form name="edit" method = "POST" action = "edit-complete.php">
			<td>
				<?php echo $_POST["automobile_id"]; ?>
				<input type="hidden" name="automobile_id" value="<?php echo $_POST["automobile_id"]; ?>" />
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
				<input type="text" name="sales_email" value="<?php if (isset($_POST["sales_email"])) { echo $_POST["sales_email"]; } ?>" />
			</td>
			<td>
				<input type = 'submit' value = 'Update'>
			</td>
		</form>
	</tr>

	<p />
	<a href="index.php"> &#9668; Go Back to Home Page</a>
	<p />

</table>
