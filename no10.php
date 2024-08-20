<!-- HTML Form -->
<form action="contact.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="message">Message:</label>
  <textarea id="message" name="message"></textarea><br><br>
  <input type="submit" value="Send">
</form>

<!-- PHP Script -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the recipient's email address
  $to = "your_email@example.com";

  // Set the subject of the email
  $subject = "Contact Form Submission";

  // Set the email body
  $body = "From: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Send the email using PHP's mail function
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us! We will get back to you shortly.";
  } else {
    echo "Error sending email. Please try again later.";
  }
}
?>