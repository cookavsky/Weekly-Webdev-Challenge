<?php
require_once "config.php";

$email = "";
$email_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        echo "Please enter a email.";
        $email_err = "Please enter a email.";
    } else{
        $sql = "SELECT id FROM subscribe WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($_POST["email"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    echo "This email have already subscribe.";
                    $email_err = "This email have already subscribe.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

    if(empty($email_err)){
        $sql = "INSERT INTO subscribe (email) VALUES (?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = $email;

            if(mysqli_stmt_execute($stmt)){
            echo "Success";

            $name = "cookavsky Portfolio";
            $subject = "New subscription";
            $mailTo = $_POST["email"];
            $message = "New user subscription: " . $_POST['email'];

            $mailFrom = "cookavsky@gmail.com";
            $headers = "From: ".$mailFrom;

            mail($mailTo, $subject, $message, $headers);

            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>