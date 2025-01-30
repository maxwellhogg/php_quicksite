<?php 

$page_title = 'Contact';
include './includes/header.php';


// see README.txt if the email is not being received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    $recipient = $email_address; // Where the form sends the email

    // Basic Validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error_message = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email address.";
    } else {
        // Email Headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Email Body
        $email_body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

        // Send Email
        if (mail($recipient, $subject, $email_body, $headers)) {
            $success_message = "Your message has been sent successfully!";
        } else {
            $error_message = "Oops! Something went wrong. Please try again.";
        }
    }
}

// For a live website, the contact.php code needs to use PHPMailer with SMTP instead of the mail() function to ensure secure and reliable email delivery. Below is the correct contact.php for a live website. You will need to adjust the parameters to the details you wish to use:

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php'; // If using Composer
// // require './libs/PHPMailer/PHPMailer.php'; // If manually installed

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars(trim($_POST["name"]));
//     $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
//     $subject = htmlspecialchars(trim($_POST["subject"]));
//     $message = htmlspecialchars(trim($_POST["message"]));

//     // Validate Required Fields
//     if (empty($name) || empty($email) || empty($subject) || empty($message)) {
//         $error_message = "All fields are required.";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $error_message = "Invalid email address.";
//     } else {
//         try {
//             $mail = new PHPMailer(true);
//             $mail->isSMTP();
//             $mail->Host = 'smtp.yourdomain.com'; // Change to your SMTP provider
//             $mail->SMTPAuth = true;
//             $mail->Username = $email_address; // You entered this in 'headers'php'
//             $mail->Password = 'your_email_password'; // Use an App Password (DO NOT use real password)
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use 'PHPMailer::ENCRYPTION_SMTPS' for SSL
//             $mail->Port = 587; // 587 for TLS, 465 for SSL

//             // Email Headers
//             $mail->setFrom($email_address, 'Website Contact Form');
//             $mail->addReplyTo($email, $name);
//             $mail->addAddress($email_address); // Your recipient email

//             // Email Content
//             $mail->isHTML(false);
//             $mail->Subject = $subject;
//             $mail->Body = "Name: $name\nEmail: $email\nMessage:\n$message";

//             // Send Email
//             if ($mail->send()) {
//                 $success_message = "Your message has been sent successfully!";
//             } else {
//                 $error_message = "Mail could not be sent. Please try again.";
//             }
//         } catch (Exception $e) {
//             $error_message = "Mailer Error: " . $mail->ErrorInfo;
//         }
//     }
// }

// Let me know if there are any errors in the code or feel free to provide a fix.


?>

    <section class="hero-image5 hero">
        <div class="header-text-container">
            <h1>Get in touch with us...</h1>
        </div>
    </section>

    <section class="contact-form-container">
        <h2>Contact Us</h2>

        <?php if (!empty($error_message)): ?>
            <p class="error-message"><?= htmlspecialchars($error_message) ?></p>
        <?php elseif (!empty($success_message)): ?>
            <p class="success-message"><?= htmlspecialchars($success_message) ?></p>
        <?php endif; ?>

        <form action="" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Please input your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Please input your email address" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Please input the subject" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Please input your message" required></textarea>
            </div>

            <button type="submit">Send</button>
        </form>
    </section>


<?php 

include './includes/footer.php';

?>