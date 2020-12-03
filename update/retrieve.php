<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>
<body>
<table>
<tr>
<td>ID</td>
<td>Roll No</td>
<td>Name</td>
<td>address</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["rollno"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td>
<td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>



</tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 