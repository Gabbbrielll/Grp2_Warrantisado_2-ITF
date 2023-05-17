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

    // Get current date
    $current_date = strtotime(date('Y-m-d'));

    // Check if input date is the current date
    if ($input_timestamp >= $current_date) {
        // Output warning message
        echo "WARNING: This date is today!";
        
        // Display prompt with radio form
        echo "<form action='' method='POST'>
            <p>Do you want to delete this warning message?</p>
            <input type='radio' name='delete_option' value='yes' id='delete_yes' required>
            <label for='delete_yes'>Yes</label>
            <input type='radio' name='delete_option' value='no' id='delete_no' required>
            <label for='delete_no'>No</label>
            <button type='submit'>Submit</button>
        </form>";

        // Check if the delete option is selected
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_option'])) {
            $delete_option = $_POST['delete_option'];
            if ($delete_option === 'yes') {
                // Perform deletion action
                // Replace the following line with your actual code for deletion
                // For example, if you want to delete a file, you can use unlink() function
                // unlink('path_to_warning_message.txt');
                echo "Warning message deleted.";
            } else {
                echo "Warning message retained.";
            }
        }
    }
}
?>
