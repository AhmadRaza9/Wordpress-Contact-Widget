<?php 

// echo $_POST['name'];
// echo $_POST['email'];
// echo $_POST['message'];

// Check $_POST
if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Get & Senitize $_POST Values
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST['message']);
    $recipient = $_POST['recipient'];
    $subject = $_POST['subject'];
    if(empty($name) OR empty($email) OR empty($message)){
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Please check your form fields";
        exit;
    }
    // Build Message
    $message = "Name: $name\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Message: \n$message\n";

    // Build Headers
    $headers = "From: $name <$email>";

    // send email 
    if(mail($recipient, $subject, $message, $headers)){
        http_response_code(200);
        echo "Thank You: Your message has been send";
    } else {
        http_response_code(500);
        echo "Error: There was a problem sending your message";
    }

} else {

    // Set 403 Response (Forbidden)
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";

}

?>