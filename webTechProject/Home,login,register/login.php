<?php
error_reporting(0);
session_start();


$mysqli = new mysqli("localhost", "root", "@Ironman0107#", "webtechProject");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["userName"];
    $pass = $_POST["Password"];

    $auth = "SELECT * FROM users WHERE username='$user'";

    $result = $mysqli->query($auth);

    if ($result && $result->num_rows==1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];
        $u_id = $row["u_id"];

        if(password_verify($pass,$hashedPassword)){
            $_SESSION['logged_in']=true;
            $_SESSION['user_id']=$u_id;
            header("Location: /webTechProject/Home,login,register/home.php");
            exit();
        }
        else {
            $message= "Username or password is invalid";
        }
    } 
    else {
        $message= "Username or password is invalid";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Document</title>
    <script src="script_validate.js"></script>
</head>

<body>
    <div class="bgVideo">
        <video cover autoplay muted loop src="/webTechProject/Home,login,register/video (1080p).mp4"></video>
    </div>


    <div class="regWrapperLogin">
        
        <div class="deetsContainerLogin">

                <div class="deets">
                    <div style=" font-family:Montserrat; font-weight: bolder;">W E L C O M E <br> B A C K</div>

                    <form id="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return loginFormSubmit(event)">
                        <div class="input">
                            <input id="Username" class="box" placeholder="Username" type="text" name="userName"><br>
                            <input id="pass" class="box" placeholder="password" type="password" name="Password">
                        </div> 
                        
                        <div class="buttons">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>

                <?php if(!empty($message)): ?>
                    <span class="errorMsg"><?php echo $message; ?></span>
                <?php endif; ?>
        </div>
    </div>

    
</body>


</html>