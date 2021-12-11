<?php
include_once("connect.php");

if (isset($_POST['Register'])) {

    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Cpassword = $_POST['cpassword'];


    if($Password == $Cpassword){
        $sql = "INSERT INTO client(username,password,firstname,lastname, email)VALUES('$Username','$Password','$Firstname', '$Lastname','$Email')";
        
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result) {
            echo "<script>alert('Registered Successfully')</script>";
            
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }
                                
}else{
    echo "<script>alert('password not matching')</script>";

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Registration Form</title>
</head>
<body>
    <section id="registerBox">
    <div class="container">
        <div class="header">
            <h1>Welcome to Hair Studio </h1>
            <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
            <p>Registration Form</p>
        </div>

        <form method="POST" action="registration.php">
            <div class="form-menu">
                <div class="form-control">
                    <label for="firs name">First name</label>
                    <input style="color: black" type="text" name="firstname" id="">
                </div>

                <div class="form-control">
                    <label for="firs name">Last name</label>
                    <input style="color: black" type="text" name="lastname" id="">
                </div>

                <div class="form-control">
                    <label for="firs name">username</label>
                    <input style="color: black" type="text" name="username" id="">
                </div>

                <div class="form-control">
                    <label for="email">Email Address</label>
                    <input style="color: black" type="email" name="email" id="">
                </div>

                <div class="form-control">
                    <label for="password">Password</label>
                    <input style="color: black" type="password" name="password" id="">
                </div>

                <div class="form-control">
                    <label for="cpassword">Confirm Password</label>
                    <input style="color: black" type="password" name="cpassword" id="">
                </div>
            </div>

            <div class="btn">
                <input type="submit" value="Register" name="Register" class="regSubmit">
            <p>Already have an account <a href="clientlogin.php">Login Here</a></p>
            </div>
            
        </form>
    </div>

    </section>
    
</body>
</html>