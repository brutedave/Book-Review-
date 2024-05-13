<?php
session_start();
if (isset($_SESSION["reviewers"])) {
    header("Location: ../HOME/home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASTALIA | Sign Up</title>
    <link rel="stylesheet" href="forms.css">
</head>

<body>

    <div class="container">
        <form action="signup.process.php" method="post">
            <div class="container item1"> <!-- CONTAINER FOR FIELDS -->
                <h1>SIGN UP</h1>
                <input type="text" name="firstname" placeholder="FIRST NAME:">
                <input type="text" name="lastname" placeholder="LAST NAME:">
                <input type="text" name="codename" placeholder="CODE NAME:">
                <input type="password" name="code" placeholder="CODE:">
                <input type="password" name="repeat_code" placeholder="REPEAT CODE:">
                <input type="submit" class="buttons" value="READY TO SIGN UP?" name="submit">
                <button type="button" class="buttons" onclick="redirectToSignIn()">SIGN IN</button>
                <button type="button" class="buttons" onclick="redirectToHome()">BACK</button>
            </div>
        </form>
    </div>

    <script src="forms.js"></script>
</body>

</html>