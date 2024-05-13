<link rel="stylesheet" href="forms.css">

<?php
session_start();
if (isset($_SESSION["reviewer"])) {
    header("Location: ../HOME/home.php");
}

if (isset($_POST["submit"])) {
    $FirstName = $_POST["firstname"];
    $LastName = $_POST["lastname"];
    $CodeName = $_POST["codename"];
    $Code = $_POST["code"];
    $RepeatCode = $_POST["repeat_code"];

    $CodeHash = password_hash($Code, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($FirstName) or empty($LastName) or empty($CodeName) or empty($Code) or empty($RepeatCode)) {
        array_push($errors, "ALL FIELDS ARE REQUIRED!");
    }
    if (strlen($Code) < 8) {
        array_push($errors, "PASSWORD MUST BE ATLEAST 8 CHARACTERS LONG!");
    }
    if ($Code !== $RepeatCode) {
        array_push($errors, "CODE DOES NOT MATCH");
    }

    require_once "database.php";

    $sql = "SELECT * FROM reviewers WHERE CODE_NAME = '$CodeName'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, "CODE NAME ALREADY EXISTS!");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='danger'>$error</div>";
        }
        header("refresh:5;url=signup.php");
        exit;
    } else {

        $sql = "INSERT INTO reviewers (FIRST_NAME, LAST_NAME, CODE_NAME, CODE) VALUES ( ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $FirstName, $LastName, $CodeName, $CodeHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='success'>SIGN UP SUCCESSFUL!.</div>";
        } else {
            die("SOMETHING WENT WRONG!");
        }
        header("refresh:5;url=signup.php");
        exit;
    }
}
?>

