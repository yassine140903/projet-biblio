<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form-container">
        <div class="form-content">
            <div class="form-left">
                <form id="login" class="form" action="connect.php" method="post">
                    <h2>Login!</h2>
                    <p>Enter your details to continue:</p>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <a href="signup.php" class="remember">
                       create an account 
                    </a> 
                    <button type="submit" class="submit-btn">Login</button>
                </form>
                

            </div>
            <div class="form-right">
                <img src="img/login.jpg" alt="Mountains" class="form-image">
            </div>
        </div>
    </div>

</body>
</html>