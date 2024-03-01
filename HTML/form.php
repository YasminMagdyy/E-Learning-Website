<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel = "icon" href = "../../Pan Marine Training/ApiForm/login icon.jpg" type = "image/x-icon">
        <link rel="stylesheet" href="../CSS/form.css"/>
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <nav>
             <ul>
                 <li><a href="./FirstPage.html">Home</a></li>
                 <li><a href="./courses.html">Courses</a></li>
                 <li><a href="./form.html">Sign up</a></li>
             </ul>
        </nav>
        <div class="Form">
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
                <div class="header">
                    <h1>Free Login</h1>
                    <h3>Have an account?</h3>
                </div>
                <div>
                    <div class="Name">
                        <input type="text" value="" placeholder=" User Name " id="username" required>
                    </div>
                    <div class="Password">
                        <input type="password" placeholder=" Password " name="password" id="password" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                    <div class="submit">
                        <a href="courses.html"><input id="sign" type="button" value="Sign In"></a>
                        <input type="reset" value="Restore Default">
                        <!--<input type=”submit” onclick="location.href='courses.html'" value="Submit">-->
                    </div>
                    <div class="checkbox">
                        <span class="check">
                            <input type="checkbox">
                            <label>Remember Me</label>
                        </span>
                    </div>                
                </div>
            </form>
        </div>  
        
        <?php
            $connection = new mysqli("localhost", "root", "", "accounts");
            $stmt=$connection->prepare("select * from form");
            $stmt->excute();
            $result=$stmt->get_result();
        ?>
          
    </body>
    <script src="../JS/Web.js"></script>
</html>
