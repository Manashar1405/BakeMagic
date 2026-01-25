<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get submitted data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Save feedback in a text file
    $file = fopen("feedbacks.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n------------------\n");
    fclose($file);

    // Show thank-you message
    echo "<h2 style='color:#ff6fa8; text-align:center;'>Thank you, $name! 💖</h2>";
    echo "<p style='text-align:center;'>We’ve received your feedback.</p>";
    echo "<p style='text-align:center;'><a href='index.html'>← Back to Home</a></p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback | BakeMagic</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #fff5f8;
      font-family: "Poppins", sans-serif;
    }
    .feedback-container {
      width: 90%;
      max-width: 500px;
      margin: 80px auto;
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    h2 {
      color: #ff6fa8;
      text-align: center;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      margin-bottom: 16px;
      border: 1px solid #ffb6c1;
      border-radius: 6px;
      font-size: 1rem;
    }
    button {
      background-color: #ff6fa8;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
    }
    button:hover {
      background-color: #ff4d94;
    }
  </style>
</head>
<body>
  <div class="feedback-container">
    <h2>Share Your Feedback 💬</h2>
    <form action="feedback.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="message">Message:</label>
      <textarea name="message" id="message" rows="5" required></textarea>

      <button type="submit">Send Feedback</button>
    </form>
  </div>
</body>
</html>
