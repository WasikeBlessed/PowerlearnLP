<?php

function createResource($name, $description, $availability) {
  // Connect to database

  $sql = "INSERT INTO resources (name, description, availability) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $description, $availability);
  $stmt->execute();
  $stmt->close();
  $conn->close();
}
function getResources() {
  // Connect to database

  $sql = "SELECT * FROM resources";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  $resources = [];
  while ($row = $result->fetch_assoc()) {
    $resources[] = $row;
  }
  $stmt->close();
  $conn->close();
  return $resources;
}
?>
