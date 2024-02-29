<?php

session_start();

// Connect to database

function verifyLogin($username, $password) {
  // Connect to database

  $sql = "SELECT * FROM users WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $stmt->close();
  $conn->close();

  if ($user && password_verify($password, $user['password'])) {
    return $user;
  } else {
    return false;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = verifyLogin($username, $password);

  if ($user) {
    $_SESSION['user_id'] = $user['id'];
    header('Location: admin.php'); // Redirect to admin page
  } else {
    echo "Invalid login credentials";
  }
}

?>
