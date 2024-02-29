<?php

function createBooking($user_id, $resource_id, $date) {
  // Connect to database

  $sql = "INSERT INTO bookings (user_id, resource_id, date) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $user_id, $resource_id, $date);
  $stmt->execute();
  $stmt->close();
  $conn->close();
}

function getBookings() {
  // Connect to database

  $sql = "SELECT * FROM bookings";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  $bookings = [];
  while ($row = $result->fetch_assoc()) {
    $bookings[] = $row;
  }
  $stmt->close();
  $conn->close();
  return $bookings;
}
?>
