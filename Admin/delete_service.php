<?php
include_once('inc/db_config.php');

// Get service ID from URL and validate it
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
  // Invalid ID, redirect back
  header("Location: manage_services.php?error=invalid_id");
  exit();
}

/* ===== FETCH IMAGE BEFORE DELETE ===== */
$stmt = $conn->prepare("SELECT Image FROM tblservices WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
  // Service not found
  header("Location: manage_services.php?error=not_found");
  exit();
}

$service = $result->fetch_assoc();

// Delete service record
$stmtDel = $conn->prepare("DELETE FROM tblservices WHERE ID = ?");
$stmtDel->bind_param("i", $id);
if ($stmtDel->execute()) {
  // Delete the image file if it exists
  $imagePath = "uploads/" . $service['Image'];
  if (file_exists($imagePath) && is_file($imagePath)) {
    unlink($imagePath);
  }
  header("Location: manage_services.php?deleted=1");
  exit();
} else {
  header("Location: manage_services.php?error=delete_failed");
  exit();
}
