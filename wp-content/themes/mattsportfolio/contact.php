<?php
        // $message_sent = false;

        if(isset($_POST['submitEmail']) && $_POST['email'] != '') {
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                  // submit form
                  $name = filter_var($_POST['contactName'], FILTER_SANITIZE_STRING);
                  $email = $_POST['email'];
                  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

                  $mailTo = "mfurlong@matthewfurlong.site";
                  $subject = "Message from " . $name . " via Your Portfolio Site";
                  $body = "";
                  
                  $body .= "You have received a message from " .$name;
                  $body .= " at Matt's Portfolio \n\n" . $message;
                  $headers = "From: ".$email;

                  mail($mailTo, $subject, $body, $headers);
                  header("Location: index.php?mailsend");

                //   $message_sent = true;

            } else {
                header("Location: index.php?didnotsend"); 
            }
        } 