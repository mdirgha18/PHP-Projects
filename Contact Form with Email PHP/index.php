<?php
// Initialize variables
$name = $email = $message = "";
$success = "";
$error = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = "❌ Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "❌ Please enter a valid email address.";
    } else {
        // Compose email
        $to = "your-email@example.com"; // Replace with your email
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        // Send email (for demo, we will just print it)
        // Uncomment below line when on a server that supports mail()
        // if (mail($to, $subject, $body, $headers)) {
        //     $success = "✅ Message sent successfully!";
        // } else {
        //     $error = "❌ Unable to send message.";
        // }

        // Demo mode: print email content
        $success = "✅ Message ready to send! (Demo Mode)";
        $success .= "<br><pre>$body</pre>";

        // Clear form after submission
        $name = $email = $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Form</title>
<style>
/* Basic styling for the form */
body {
    font-family: Arial, sans-serif;
    background: #f0f0f0;
    text-align: center;
    padding: 50px;
}
form {
    background: #fff;
    padding: 20px;
    display: inline-block;
    border-radius: 10px;
    box-shadow: 0 0 10px #aaa;
    width: 350px;
    text-align: left;
}
input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 8px;
    margin: 6px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type="submit"] {
    padding: 10px 20px;
    background: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background: #218838;
}
.success {
    color: green;
    margin: 10px 0;
}
.error {
    color: red;
    margin: 10px 0;
}
</style>
</head>
<body>

<h2>Contact Us</h2>

<!-- Display success or error messages -->
<?php if($success) echo "<div class='success'>$success</div>"; ?>
<?php if($error) echo "<div class='error'>$error</div>"; ?>

<!-- Contact Form -->
<form method="post">
    Name:<br>
    <input type="text" name="name" value="<?php echo $name; ?>" required><br>
    
    Email:<br>
    <input type="email" name="email" value="<?php echo $email; ?>" required><br>
    
    Message:<br>
    <textarea name="message" rows="5" required><?php echo $message; ?></textarea><br>
    
    <input type="submit" value="Send Message">
</form>

</body>
</html>
