<?php
session_start();
if (isset($_GET['token'])) {
  $token = $_GET['token'];

  // Connect to database

  $sql = "SELECT * FROM users WHERE reset_token = ? AND reset_token_expire > NOW()";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $token);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $stmt->close();
  $conn->close();
  if ($user) {
    $_SESSION['reset_token'] = $token;
    header('Location: create_new_password.php');
  } else {
    echo "Invalid or expired reset token.";
  }
} else {
  echo "No token provided.";
}
?>
