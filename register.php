<?php
require_once 'database/db.php';
require_once 'functions.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordAgain = mysqli_real_escape_string($conn, $_POST['passwordAgain']);
    $first_name = mysqli_real_escape_string($conn, $_POST['firstName']);
    $last_name = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if (empty($username) || empty($password) || empty($passwordAgain) || empty($first_name) || empty($last_name) || empty($email)) {
        header('Location: index.php?error=emptyFields');
        exit();
    } elseif (!get_user($conn, $email)) {
        header('Location: index.php?error=emailExists');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header('Location: index.php?error=invalidEmail');
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header('Location: index.php?error=invalidUsername');
        exit();
    } elseif ($password !== $passwordAgain) {
        header('Location: index.php?error=passwordDoesNotMatch');
        exit();
    } else {
        $sql = "INSERT INTO usera (`username`, `password`, `first_name`, `last_name`, `email`) VALUES (?,?,?,?,?)";

        $stmt = mysqli_stmt_init($conn);
        $prepare = mysqli_stmt_prepare($stmt, $sql);

        if ($prepare) {
            mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $first_name, $last_name, $email);

            mysqli_stmt_execute($stmt);

            echo "<h2>WELCOME 😁</h2>";
        } else {
            echo 'Error';
        }
    }
} else {
    header('Location: index.php');
}
