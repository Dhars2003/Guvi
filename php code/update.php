<?php
if(isset($_POST['update_pass']))
{

	$pass = mysqli_real_escape_string($db, $_POST['password']);

    if($pass == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	

    $query = "UPDATE faculty SET pass='$pass' WHERE id='$s'";
    $query_run = mysqli_query($db, $query);


       if($query_run)
    {
        echo "<script>alert('Password Changed successfully');
		window.location.href='pwd.php';
		</script>";
		}
    }
    else
    {
        echo "<script>alert('Wrong Password');
			  window.location.href='pwd.php';
			  </script>";
    }
	
}


?>