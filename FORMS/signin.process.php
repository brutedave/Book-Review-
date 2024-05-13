<link rel="stylesheet" href="forms.css">

<?php
session_start();
if (isset($_SESSION["reviewer"])) {
    header("Location: ../HOME/home.php");
}

if (isset($_POST["submit"])) {
    $CodeName = $_POST["codename"];
    $Code = $_POST["code"];

    require_once "database.php";

    $sql = "SELECT * FROM reviewers WHERE CODE_NAME = '$CodeName'";
    $result = mysqli_query($conn, $sql);
    $reviewer = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($reviewer) {
        if (password_verify($Code, $reviewer["CODE"])) {
            session_start();
            $_SESSION["reviewer"] = "yes";
            header("Location: ../MENU/menu.php");
            die();
        } else {
            echo "<div class='danger'>CODE DOES NOT MATCH!</div>";
            header("refresh:5;url=signin.php");
            exit;
        }
    } else {
        echo "<div class='danger'>CODE NAME DOES NOT MATCH!</div>";
        header("refresh:5;url=signin.php");
    }
}
