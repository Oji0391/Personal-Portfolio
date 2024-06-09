<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="fstyles.css">
    
</head>
<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <form id="feedbackForm" action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="feedbackType">Feedback Type:</label>
                <select id="feedbackType" name="feedbackType" required>
                    <option value="" disabled selected>Select feedback type</option>
                    <option value="General Feedback">General Feedback</option>
                    <option value="Bug Report">Bug Report</option>
                    <option value="Feature Request">Feature Request</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="websiteURL">Website URL:</label>
                <input type="url" id="websiteURL" name="websiteURL">
            </div>
            <div class="form-group">
                <label for="howDidYouFind">How did you find this website?</label>
                <input type="text" id="howDidYouFind" name="howDidYouFind">
            </div>
            <div class="form-group">
                <label for="recommendation">Would you recommend this website to others?</label>
                <select id="recommendation" name="recommendation" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="additionalComments">Any additional comments or suggestions?</label>
                <textarea id="additionalComments" name="additionalComments" rows="4"></textarea>
            </div>
            <button type="submit" name="send" value="Send Feedback" >Submit Feedback</button>
        </form>
    </div>

    <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedbackType = $_POST['feedbackType'];
    $message = $_POST['message'];
    $websiteURL = $_POST['websiteURL'];
    $howDidYouFind = $_POST['howDidYouFind'];
    $recommendation = $_POST['recommendation'];
    $additionalComments = $_POST['additionalComments'];

    //Load Composer's autoloader
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'oji193084@gmail.com';                     //SMTP username
    $mail->Password   = 'uhlq rhti iqfj qniv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('oji193084@gmail.com', 'Feedback');
    $mail->addAddress('oji193084@gmail.com', 'Oji');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Feedback Form Data';
    $mail->Body    = " Name - $name <br> Email - $email <br> Feedback Type - $feedbackType <br> Message $message <br> WebSite-URL - $websiteURL <br> How Did You Find US $howDidYouFind <br> Recommendation - $recommendation <br> Additional Comments - $additionalComments" ;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 
}
?>

</body>

</html>
