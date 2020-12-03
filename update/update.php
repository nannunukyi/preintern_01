<?php include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set rollno='" . $_POST['rollno'] . "', name='" . $_POST['name'] . "', address='" . $_POST['address'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
 <div align="right" style="padding-bottom:5px;"><a href="retrieve.php" class="link">
 <img alt='List' title='List' src='images/list.png' width='15px' height='15px'/>
  List student</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit student</td>
</tr>
<tr>
<td><label>Rollno</label></td>
<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>"></td>
</tr>
<tr>
<td><label>Name</label></td>

<td><input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>"></td>
</tr>
<td><label>Address</label></td>
<td><input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 