<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Foodie Dashboard Login</title>
</head>

<body>
    <div class="container">
        <div class="">
            <h1>Administrator </h1><span> Login To Dashbord</span>
        </div>
    </div>
    <div class="">
        <div class=""><img src="/resources/assets/manager.png" /></div>

        <form class="register-form" action="index.php" method="post">
            <input type="text" placeholder="Username" name="cr_user" />
            <input type="text" placeholder="Email address" name="cr_email" />
            <input type="password" placeholder="Password" name="cr_pass" />
            <input type="password" placeholder="Confirm password" name="cr_cpass" />
            <input type="password" placeholder="Unique-Code" name="code" />
            <input type="submit" name="submit1" value="Create" />
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <span></span>
        <span></span>
        <form class="login-form" action="index.php" method="post">
            <input type="text" placeholder="Username" name="username" />
            <input type="password" placeholder="Password" name="password" />
            <input type="submit" name="submit" value="Login" />
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>

    </div>
</body>

</html>
