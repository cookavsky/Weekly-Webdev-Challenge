<?php
require_once "config.php";

$username = $password = $confirm_password = $email = $location = "";
$username_err = $password_err = $confirm_password_err = $email_err = $location_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        echo "Please enter a username.";
        $username_err = "Please enter a username.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    echo "This username is already taken.";
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }

    if(empty(trim($_POST["password"]))){
        echo "Please enter a password.";
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        echo "Password must have atleast 6 characters.";
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty(trim($_POST["confirm_password"]))){
        echo "Please confirm password.";
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if($password != $confirm_password){
            echo "Password did not match.";
            $confirm_password_err = "Password did not match.";
        }
    }

    if(empty(trim($_POST["email"]))){
        echo "Please enter a email.";
    } else{
        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($_POST["email"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    echo "This email is already taken.";
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }

    if(empty(trim($_POST["location"]))){
        echo "Please enter a location.";
        $location_err = "Please enter a location.";
    } else{
        $location = trim($_POST["location"]);
    }

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($location_err)){
        $sql = "INSERT INTO users (username, password, email, location) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_email, $param_location);

            $param_username =$username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_email = $email;
            $param_location = $location;

            if(mysqli_stmt_execute($stmt)){
            echo "Success";
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>