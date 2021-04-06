<?php
	//sleep(3);
		
	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users where username like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
					<tr>
						<td>ID</td>
						<td>Username</td>
						<td>Email</td>
						<td>type</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
							<td>{$row['type']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>