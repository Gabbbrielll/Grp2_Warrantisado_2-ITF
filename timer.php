<?php
session_start();

// Set timezone
date_default_timezone_set('Asia/Manila');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get input date from user
  $input_date = $_POST['input_date'];

  // Convert input date to timestamp
  $input_timestamp = strtotime($input_date);

  // Calculate time difference between input date and current date in days
  $time_diff = floor(($input_timestamp - time()) / (60 * 60 * 24));

  // Check if input date is exactly the 7th day from the current date
  if ($time_diff === 7) {
    // Output warning message
    echo "WARNING: This date is on the 7th day from today's date!";
  }
}
?>
