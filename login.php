<?php
require_once('config.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
else{
    $username=$_POST['username'];
    $password=$_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    /*$connection = mysql_connect("localhost", "root", "");
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);*/
    // Selecting Database
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db = mysql_select_db("company", $connection);
    // SQL query to fetch information of registerd users and finds user match.
    $sql = mysql_query("select UserID, UserName, Password, Salt, State, DateJoined, DateLastModified from UsersLogin where Password='$password' AND UserName='$username'");
    $rows = mysql_num_rows($sql);
    if ($rows == 1) {
        $_SESSION['login_user']=$username; // Initializing Session
        header("location: index.php"); // Redirecting To Other Page
    } else {
        $error = "Username or Password is invalid";
    }
    mysql_close($connection); // Closing Connection
    }
}
?>