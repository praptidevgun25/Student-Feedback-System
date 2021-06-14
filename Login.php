<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_conn.php';
    $username = $_POST["username"];
	$password = $_POST["password"]; 
	$systemid = $_POST["sys_id"];
     
    $sql = "Select * from student_info where Username='$username' AND Password='$password' AND Sys_id='$systemid'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
		$_SESSION['Username'] = $username;
		$_SESSION['Sys_id'] = $systemid; 
	    header("location: Home.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

<body>
    <div class="loginbox">
        <img src="img/avatar.png" class="avatar">
        <form action="login.php" method="post">
            <h1>Login Here</h1>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter Username" id="username" autocomplete="off">
            <label for="sys_id">System ID</label>
            <input type="text" name="sys_id" placeholder="Enter System id" id="sys_id" autocomplete="off">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password" id="password">
            <input type="submit" name="" value="Login">
        </form>

    </div>

</body>
</head>

</html>