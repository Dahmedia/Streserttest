<?php
include("mytestconnect.php");

if(isset($_GET["id"])){

    $sql = "DELETE FROM myinfotest WHERE id='". $_GET["id"]."'";
    mysqli_query($con,$sql);

}

$sql = "SELECT * FROM myinfotest ORDER BY id DESC";
$result = mysqli_query($con,$sql);
?>
<html>
<head>
<title>MyCRUDE DATA</title>
<link rel="stylesheet" type="text/css" href="myteststyle.css" />
</head>
<body>
<div style="width:auto;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="1" cellpadding="10" cellspacing="1" width="auto" class="tblListForm">
<tr class="">
<td colspan="7"> <div  style="padding:10px; float:left;" class="title" >MY CRUDE TEST TABLE</div> <div><a style="padding:10px; float:right; background-color:#5e8fc7; color:#fff"  href="add.php">Add My test</a></div>
</td>
</tr>
<tr class="">
<td>id</td>
<td>Image</td>
<td>Name</td>
<td>Address</td>
<td>Married</td>
<td>Date</td>
<td>Actions</td>
</tr>
<?php
$i=1;
while($row = mysqli_fetch_array($result)) {
if($row["answer"]=="Yes")
$classname="married";
else
$classname="notmarried";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><img src="<?php echo $row["passport"]; ?>" width="40" height="45"></td>
<td><?php echo $row["names"]; ?></td>
<td><?php echo $row["addresses"]; ?></td>
<td><?php echo $row["answer"]; ?></td>
<td><?php echo $row["dates"]; ?></td>
<td><a href="add.php?id=<?php echo $row["id"]; ?>" class="link">Edit</a> | <a href="index.php?id=<?php echo $row["id"]; ?>" class="link">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
</body></html>