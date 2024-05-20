

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="topics_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Mono">
    <link rel="stylesheet" href="../Home,login,register/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="../Home,login,register/sidebar.js"></script>
    <script src="status.js"></script>
    
</head>


<body>

    <div class="bgImg"></div>
    <h2>GET TO KNOW THE BASICS OF ANY LANGUAGE</h2>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Home,login,register/home.php">Topics</a>
        <a href="../Home,login,register/logout.php">Logout</a>

    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()"><i class="fa-solid fa-bars"></i></span>
    <hr>

    <div class="introContainer">

        
            <div class="langContainer">
                <div class="lang">
                <h3>Java:</h3><br><br>
                Pros: <br>                                            
                Platform Independence <br>
                Object-Oriented <br>
                Strong Community Support <br>
                <br>
                Cons: <br>
                Potential Performance Overhead <br>
                Learning Curve for Beginners <br>
                
                <iframe width="560" height="300" src="https://www.youtube.com/embed/UmnCZ7-9yDY?si=1K9CbKMqfH2vplJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lang">
                <h3>C:</h3> <br>
                <br>
                Pros: <br>
                Efficiency and Control <br>
                Timeless Legacy and Portability <br>
                <br>
                Cons: <br>
                Syntax Complexity <br>
                Manual Memory Management <br>
                
                
                <iframe width="560" height="300" src="https://www.youtube.com/embed/irqbmMNs2Bo?si=oa7EAir0zsRbC4vh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
    </div>

    <div class="QTable">
        <h3>Practice Questions</h3>
            <table border="1px">
                <tr><th>Problem</th><th>Solution</th><th>Status</th></tr>
                <tr align="center">
                    <td><a target="_blank" href="https://leetcode.com/problems/reverse-integer/description/">Reverse a Number</a></td>
                    <td><a target="_blank" href="https://takeuforward.org/c-programs/reverse-a-number-in-c/">Sol</a></td>
                    <td><select  name="1" id="q1" onchange="syncState(q1)"><option value="done">Done</option><option value="revise" >Revise</option><option value="pending" selected >Pending</option></select></td>
                </tr>
                <tr align="center">
                    <td><a target="_blank" href="https://leetcode.com/problems/palindrome-number/description/">Check Palindrome</a></td>
                    <td><a target="_blank" href="https://takeuforward.org/data-structure/check-if-a-number-is-palindrome-or-not/">Sol</a></td>
                    <td><select name="2" id="q2" onchange="syncState(q2)"><option value="done">Done</option><option value="revise">Revise</option><option value="pending" selected >Pending</option></select></td>
                </tr>
                <tr align="center">
                    <td><a target="_blank" href="https://www.codingninjas.com/studio/problems/check-armstrong_589?utm_source=striver&utm_medium=website&utm_campaign=a_zcoursetuf">Check Armstrong Number</a></td>
                    <td><a target="_blank" href="https://takeuforward.org/maths/check-if-a-number-is-armstrong-number-or-not/">Sol</a></td>
                    <td><select name="3" id="q3" onchange="syncState(q3)"><option value="done">Done</option><option value="revise">Revise</option><option value="pending" selected>Pending</option></select></td>
                </tr>
            </table>   
    </div>    
</body>


</html>