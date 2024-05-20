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
    
    // Check if username already exists
    $check = "SELECT * FROM users WHERE username='$user'";
    $u_id = $mysqli->query("SELECT u_id FROM users WHERE username='$user'");
    $result = $mysqli->query($check);

    if ($result->num_rows > 0) {
        $message = "Username already exists";
    } else {
        // Insert the new user
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (username, password) VALUES ('$user', '$hashedPassword')";

        if ($mysqli->query($insertQuery) === TRUE) {
            // Redirect to home page after successful registration
            $_SESSION['logged_in']=true;
            $_SESSION['user_id']=$u_id;
            header("Location: /webTechProject/Home,login,register/home.php");
            exit();
        } else {
            echo "Error: " . $mysqli->error;
        }
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
        <video autoplay muted loop src="/webTechProject/Home,login,register/video (1080p).mp4"></video>
    </div>

    <div class="regWrapperRegister">

        <div class="deetsContainer">

            <div class="deets">
                <div style=" font-family:Montserrat; font-weight: bolder;">L E T ' S<br> B E G I N</div>

                <form id="registerForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return registerFormSubmit(event)">
                    <div class="input">
                        <input id="Username" class="box" placeholder="Username" type="text" name="userName"><br>
                        <input id="pass" class="box" placeholder="Password" type="password" name="Password">
                        <input id="rePass" class="box" placeholder="Confirm password" type="password">
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
        <div class="introText">
            <p>Hey there, coding enthusiasts! Welcome to the beginner's haven for Data Structures and Algorithms (DSA). 🚀 <br>
                <br>
    
                Our guide is here to make this whole DSA thing a breeze for you. We'll start from the basics, like understanding what arrays and lists are, and gradually level up to more complex stuff like sorting and searching. <br><br>
         
                It's a bit like leveling up in your favorite game, but instead of defeating monsters, you'll be conquering coding challenges! 🎮<br> Ready to embark on this coding adventure? Grab your keyboard, and let's dive into the fantastic world of DSA together! 🚀💻</p>
            
        </div>
    
        

    </div>

    

    


    
</body>

</html>