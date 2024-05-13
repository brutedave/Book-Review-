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
    <title>CASTALIA | Sign In</title>
    <link rel="stylesheet" href="forms.css">
</head>

<body>

    <div class="container">
        <form action="signin.process.php" method="post">
            <div class="container item1"> <!-- CONTAINER FOR FIELDS -->
                <h1>SIGN IN</h1>
                <input type="text" name="codename" placeholder="CODE NAME:">
                <input type="password" name="code" placeholder="CODE:">
                <input type="submit" class="buttons" value="READY TO SIGN IN?" name="submit">
                <button type="button" class="buttons" onclick="redirectToSignUp()">SIGN UP</button>
                <button type="button" class="buttons" onclick="redirectToHome()">BACK</button>
            </div>
        </form>
    </div>

    <script src="forms.js"></script>
</body>

</html>