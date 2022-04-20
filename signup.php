<?php
session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password)){
            $user_id = random_gen(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id', '$user_name', '$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }else{
            echo "INVALID ! wach berkani ?";
        }
    }
?>

<!doctype html>
<html>
  <head><title>Sign up</title>
  <style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: grey;
		border: none;
	}

	#box{

		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
    <div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">New Account :</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="create"><br><br>

			<a href="login.php">Login ?</a><br><br>
		</form>
	</div>
  </head>
  <body>

  </body>
</html>