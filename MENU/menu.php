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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>CASTALIA | Menu</title>
</head>

<body>
    <div class="container item1"> <!-- CONTAINER FOR MENU OPTIONS -->
        <button type="button" onclick="redirectToWriteReviews()">WRITE REVIEWS</button>
        <button type="button" onclick="redirectToViewReviews()">YOUR REVIEWS</button>
        <button type="button" onclick="redirectToPublicReviews()">PUBLIC REVIEWS</button>
        <button type="button" onclick="redirectToProfile()">PROFILE</button>
        <button type="button" onclick="redirectToSignOut()">SIGN OUT</button>
    </div>

    <script src="menu.js"></script>
</body>

</html>