<?php
include("config.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        header("Location: menu.html");
        exit();
    }
    else
    {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Hitman Food Delivery</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
            width:300px;
            text-align:center;
        }

        input{
            width:90%;
            padding:10px;
            margin:10px 0;
        }

        input[type=submit]{
            background:#ff6600;
            color:white;
            border:none;
            cursor:pointer;
        }

        input[type=submit]:hover{
            background:#e65c00;
        }

        a{
            color:blue;
            text-decoration:none;
        }

        .error{
            color:red;
        }
    </style>
</head>

<body>

<div class="login-box">

<h2>🍴 Hitman Food Delivery</h2>
<h3>User Login</h3>

<?php
if(isset($error))
{
    echo "<p class='error'>$error</p>";
}
?>

<form method="POST">

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<input type="submit" name="login" value="Login">

</form>

<p>New User? <a href="register.php">Register Here</a></p>

</div>

</body>
</html>