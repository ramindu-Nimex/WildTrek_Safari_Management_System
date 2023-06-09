<?php
include "connectionRamindu.php";

// Check if the user_id parameter exists in the URL query string
if (isset($_GET['user_id'])) {
    // Sanitize the user_id parameter to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['user_id']);
    
    // Prepare the delete query using prepared statements
    $qry = "DELETE FROM contactus WHERE Con_ID = ?";
    $stmt = mysqli_prepare($conn, $qry);
    
    // Bind the user_id parameter to the prepared statement
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the contactdetails.php page
        header('Location: Acontactdetails.php');
        exit();
    } else {
        // Display the database error message
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    
    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
