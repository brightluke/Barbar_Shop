<?php
    session_start();

    include_once("connect.php");


    if(isset($_POST['Login'])){
        
        $Username = $_POST['username'];
        $Password = $_POST['password'];

        $sqlLogin = "SELECT * FROM client WHERE username = '$Username' AND password = '$Password' LIMIT 1";
        $loginResult = mysqli_query($conn,$sqlLogin) or die(mysqli_error($conn));
        //$loginData = mysqli_fetch_array($loginResult);

        $db_user = "";
        $db_pass = "";

        while($data = mysqli_fetch_array($loginResult)){
            $db_user = $data["username"];
            $db_pass = $data["password"];
            $db_fName = $data["firstname"];
            $db_lName = $data["lastname"];

        }

        $_SESSION['fName'] = $db_fName;
        $_SESSION['lName'] = $db_lName;

        if(($Username === $db_user) && ($Password === $db_pass)){
                
            header("Location:index.php");
        }       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Document</title>
</head>

<style>
    .form-menu{ 
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 30px;
    margin: 0;
    align-items: center;
}

.form-control input{
    width: 150%;
    height: 30px;
}




</style>
<body>
    <section id="registerBox">
        <div class="container">
            <div class="header">
                <h1>Welcome to Hair Studio </h1>
                <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">                
            </div>
    
            <form action="clientlogin.php" method="POST">
                <div class="form-menu">
                    <div class="form-control">
                        <label for="username"> username</label>
                        <input style="color: black;" type="text" name="username" id="">
                    </div> 
                    
                    <div class="form-control">
                        <label for="password">Password</label>
                        <input style="color: black;" type="password" name="password" id="">
                    </div>
                        
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" value="Login" class="regSubmit" name="Login">
                <p>Don't Have an account  <a href="registration.php">Register here</a></p>
                </div>
                
            </form>
        </div>
    </section>
    
</body>
</html> 
