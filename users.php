<?php
	include_once('./config/db_config.php');

	// Writing query to fetch all users ( Read -> C-R-U-D )
	$sql = "SELECT * FROM accounts ORDER BY Names";

	$result = mysqli_query($conn, $sql);

	$accounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Users</title>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			padding: 0;
			background: rgba(0, 0, 0, 0.6);
		}
		.content-table {
			border-collapse: collapse;
			margin: 20px 0;
			font-size: 0.7rem;
			min-width: 100%;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			background: #fff;
		}
		.container {
			position: absolute;
			top: 20%;
			left: 20%;
			width: 60%;
		}
		h1 {
			text-align: center;
			font-size: 1.5rem;
			margin: 0;
			padding: 0;
			color: limegreen;
			border-bottom: 1px solid #fff;
		}
		.content-table thead tr {
			background: limegreen;
			color: #fff;
			font-weight: bold;
		}
		.content-table thead, .content-table td {
			padding: 12px 15px;
		}
		.content-table tbody tr {
			border-bottom: 1px solid #ddd;
			text-align: center;
		}
		.content-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}
		.content-table tbody tr:last-of-type {
			border-bottom: 2px solid limegreen;
		}
		.content-table tbody tr:.active-user {
			font-weight: bold;
			color: limegreen;
		}
		.edit {
			border: none;
			outline: none;
			color: #fff;
			background: green;
			padding: 5px 10px;
			border-radius: 5px;
			cursor: pointer;
			margin-right: 1rem;
		}
		.delete {
			border: none;
			outline: none;
			color: #fff;
			background: red;
			padding: 5px 10px;
			border-radius: 5px;
			cursor: pointer;
		}
		.options {
			border: none;
			outline: none;
			color: #fff;
			background: orange;
			padding: 5px 10px;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Lucky Rice Stock Users</h1>
	<table class="content-table">
		<thead>
			<tr>
				<th>Names</th>
				<th>Email</th>
				<th>Password</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
				<?php foreach($accounts as $account) { ?>
			<tr class="active-user">
					<td> <?php echo htmlspecialchars($account['Names']); ?> </td>
					<td> <?php echo htmlspecialchars($account['Email']); ?> </td>
					<td> <?php echo htmlspecialchars($account['Password']); ?> </td>
					<td>
						<a href="accounts.php?id=<?php echo $account['id'] ?>">
							<input class="edit" type="button" value="Update">
						</a>
						<a href="delete.php?id=<?php echo $account['id'] ?>">
							<input class="delete" type="button" value="Delete">
						</a>
					</td>
			</tr>
				<?php } ?>
		</tbody>
	</table>

	</div>

</body>
</html>
