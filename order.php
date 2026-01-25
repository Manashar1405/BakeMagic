<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $item = htmlspecialchars($_POST["item"]);
    $quantity = htmlspecialchars($_POST["quantity"]);

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Order Confirmation</title>
      <style>
        body {
          font-family: Poppins, sans-serif;
          text-align: center;
          background-color: #fff5f8;
        }
        .box {
          background: white;
          padding: 30px;
          margin: 50px auto;
          border-radius: 15px;
          box-shadow: 0px 0px 10px #ff9ac2;
          width: 300px;
        }
        h2 { color: #ff6fa8; }
        a {
          text-decoration: none;
          background: #ff9ac2;
          color: white;
          padding: 8px 15px;
          border-radius: 8px;
        }
      </style>
    </head>
    <body>
      <div class='box'>
        <h2>Thank you, $name!</h2>
        <p>Your order for <b>$quantity $item(s)</b> has been placed successfully. 🎉</p>
        <a href='index.html'>Back to BakeMagic</a>
      </div>
    </body>
    </html>";
} else {
    echo "Invalid request.";
}
?>
