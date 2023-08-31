<?php 
include("reg.php");

if(isset($_POST['save_reg']))
{
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($db, $_POST['MiddleName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $name = mysqli_real_escape_string($db, $_POST['uname']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $DateofBirth = mysqli_real_escape_string($db, $_POST['DateofBirth']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $Address = mysqli_real_escape_string($db, $_POST['Address']);
    $PhoneNumber = mysqli_real_escape_string($db, $_POST['PhoneNumber']);
    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    if($pass == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	if($FirstName == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
     if($MiddleName == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    if($LastName == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
if($DateofBirth == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
if($Gender == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
if($Address == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
if($PhoneNumber == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    $query = "INSERT INTO user (FirstName,MiddleName,LastName,uname,pass,DateofBirth,gender,Address,PhoneNumber) VALUES('$Firstname','$Midddlename','$Lastname','$name','$pass','$DateofBirth','$gender','$Address','$PhoneNumber')";
    $query_run = mysqli_query($db, $query);

       if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
	
}

	  
?>