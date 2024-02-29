<?php

require_once('mailer.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];

  // Connect to database

  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $stmt->close();
  $conn->close();
  if ($user) {
    $token = bin2hex(random_bytes(16));
    $sql = "UPDATE users SET reset_token = ?, reset_token_expire = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $token, $user['id']);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;
    $message = "Click the link to reset your password: " . $reset_link;
    send_email($user['email'], "Password Reset", $message);
    echo "A password reset link has been sent to your email.";
  } else {
    echo "Email address not found.";
  }
}

?>
