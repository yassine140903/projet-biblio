<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="logo.png" >
</head>
<body>
    <div class="form-container">
        <div class="form-content">
            <div class="form-left">
                <form id="register" class="form" action="register.php" method="post">
                    <h2>Sign Up Now!</h2>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
            <div class="form-right">
                <img src="img/login.jpg" alt="Mountains" class="form-image">
            </div>
        </div>
    </div>

</body>
</html>
