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

                if(mysqli_stmt_num_rows($stmt) == 0){
                    echo "This email have not in a base.";
                    $email_err = "This email have not in a base.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

    if(empty($email_err)){
        $sql = "DELETE FROM subscribe WHERE email = '$email'";
        if($stmt = mysqli_prepare($link, $sql)){
            if(mysqli_stmt_execute($stmt)){
            echo "Success";

            $name = "cookavsky Portfolio";
            $subject = "Old subscription canceled";
            $mailTo = $_POST["email"];
            $message = "User subscription: " . $_POST['email']." has been removed";

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