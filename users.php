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
			/* background: url(bg-users.jpeg) no-repeat; */
			/* background-size: cover; */
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
	</style>
</head>
<body>
	<div class="container">
		<h1>Lucky Rice Stock Users</h1>
	<table class="content-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<tr class="active-user">
				<td>1</td>
				<td>John</td>
				<td>Doe</td>
				<td>john.doe@gmail.com</td>
				<td>John@123</td>
				<td>
					<a href=""><input class="edit" type="button" value="Edit"></a>
					<a href=""><input class="delete" type="button" value="Delete"></a>
				</td>
			</tr>
		</tbody>
	</table>

	</div>

</body>
</html>
