<?php
include("mytestconnect.php");
$maritals = "Select";
$hidden = "add";
//insert mycrude into into database
if(isset($_POST["add"])) {
	include("mytestconnect.php");
	extract($_POST);
	$passport = "image/";
	$passport = $passport . time(). basename( $_FILES['passport']['name']);
	$sql = "INSERT INTO myinfotest (names, addresses, answer,passport, dates) VALUES ('" .$name. "','" . $address. "','" . $marital. "','" . $passport. "','" . $date. "')";
	 $result = mysqli_query($con,$sql);
	if($result) {
		move_uploaded_file($_FILES['passport']['tmp_name'], $passport);
        echo "<script>
		alert('Thank you $name');
        window.location.href='index';
        </script>";
	}
}// update mycrude info
elseif(isset($_POST["id"])){
	extract($_POST);
//if user did not upload update passport use privious one
	if(!isset($_POST["passport"])){	
		$passport = $pass;
	}
	else{

		$passport = "image/";
		$passport = $passport . time(). basename( $_FILES['passport']['name']);
	}
	$sql = "UPDATE myinfotest set names='" .$name. "', addresses='" . $address. "', answer='" .$marital. "', passport='" .$passport. "' , dates='" .$date. "' WHERE id='" .$id. "'";
	$result = mysqli_query($con,$sql);
	if($result) {
		move_uploaded_file($_FILES['passport']['tmp_name'], $passport);
        echo "<script>
		alert('$name Updated');
        window.location.href='index';
        </script>";
	}
}
elseif(isset($_GET["id"])){
	$query= "SELECT * FROM myinfotest WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$maritals = $row ["answer"];
$hidden = 'update';
}

?>
<html>

<head>
    <title>Add My CRUDE info</title>
    <link rel="stylesheet" type="text/css" href="myteststyle.css" />
</head>

<body>
    <form method="post" enctype="multipart/form-data" action="">
    
        <div style="width:500px;">
            <div style="width:500px;background-color:cornflowerblue; color:#fff;text-align:center">Add My CRUDE info
            </div>
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                <tr>
                    <input type="hidden" name="id" value="<?php echo @$row ["id"]; ?>">
                    <input type="hidden" name="pass" value="<?php echo @$row ["passport"]; ?>">
                    <td><label>Fullname</label></td>
                    <td><input type="text" name="name" value="<?php echo @$row ["names"]; ?>" class="input" required></td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><input type="text" name="address" value="<?php echo @$row ["addresses"]; ?>" class="input" required></td>
                </tr>
                <tr>
                    <td><label>Are you married?</label></td>
                    <td><select type="text" name="marital" class="input">
                            <option><?php echo @$maritals; ?></option>
                            <option>Yes</option>
                            <option>No</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label>Date of test</label></td>
                    <td><input type="date" name="date" value="<?php echo @$row ["dates"]; ?>" class="input"></td>
                </tr>
                <tr>
                    <td><label>Passport</label></td>
                    <td><input type="file" name="passport" class="input"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" name="<?php echo @$hidden; ?>"
                            class="btnSubmit"> Add CRUDE File </button></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>