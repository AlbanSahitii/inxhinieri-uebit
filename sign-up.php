<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
    <div id="container">
        <form id="form" method="POST" action="includes/signup.inc.php" >
            <div class="header">
                <h2>Create Account</h2>
            </div>
            <p class="text">or use your email for registration:</p>
            <div class="form-group">
                <input type="text" class="input-design" id="username" placeholder="Name" name="name">
                <small class="small">input incorrect</small>
            </div>
            <div class="form-group">
                <input type="text" class="input-design" id="email" placeholder="Email" name="email">
                <small class="small">input incorrect</small>
            </div>
            <div class="form-group">
                <input type="text" class="input-design" id="username" placeholder="Username" name="username">
                <small class="small">input incorrect</small>
            </div>
            <div class="form-group">
                <input type="password" class="input-design" id="password" placeholder="Password" name="password">
                <small class="small">input incorrect</small>
            </div>
            <div class="form-group">
                <input type="password" class="input-design" id="password2" placeholder="Confirm Password" name="confirmPassword">
                <small class="small">input incorrect</small>
            </div>
            <div class="button-group">
                <input class="button" type="submit" name="submit">
            </div>
            <div class="redirect-group">
                <p>I have an account.</p><a href="login.html" id="redirect">Log in</a>
            </div>
        </form>
        <!-- <form id="form" method="POST" action="includes/signup.inc.php" >
        <div class="header">
                <h2>Create Account</h2>
            </div>
            <p class="text">or use your email for registration:</p>

        <div class="form-group">

            <label for="username">username name:</label>
            <input type="text" class="input-design" id="username" name="username">
            <small class="small">input incorrect</small>

        </div>
        <div class="form-group">

            <label for="email">email:</label>
            <input type="text" class="input-design" id="email" name="email">
            <small class="small">input incorrect</small>

        </div>
        <div class="form-group">

            <label for="name">name name:</label>
            <input type="text" class="input-design" id="name" name="name">
            <small class="small">input incorrect</small>

        </div>
        <div class="form-group">

            <label for="password">password:</label>
            <input type="password" class="input-design" id="password" name="password">
            <small class="small">input incorrect</small>

        </div>
        <div class="form-group">
    
            <label for="confirmPassword">confirmPassword:</label>
            <input type="password" class="input-design" id="confirmPassword" name="confirmPassword">
            <small class="small">input incorrect</small>

        </div>

        <div class="button-group">

            <input type="submit" name="submit">
        </div>
        </form> -->
    </div>

</body>
</html>