<?php

include 'db_connect.php';

$result =
$conn->query(
"SELECT * FROM contact_queries ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
</head>
<body>

<h2>Contact Queries</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php

while($row=$result->fetch_assoc())
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['created_at']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>